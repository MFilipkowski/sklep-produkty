<?php
/**
 * Przelewy24 comunication class
 * Communication protol version
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 */

define('P24_VERSION', '3.2');
if (!class_exists('Przelewy24Class', false)) {
    class Przelewy24Class implements
        Przelewy24ClassInterface,
        Przelewy24ClassBlikInterface,
        Przelewy24ClassStaticInterface
    {
        /**
         * Live system URL address.
         *
         * @var string
         */
        private static $hostLive = 'https://secure.przelewy24.pl/';

        /**
         * Sandbox system URL address.
         *
         * @var string
         */
        private static $hostSandbox = 'https://sandbox.przelewy24.pl/';

        /**
         * Use Live (false) or Sandbox (true) environment.
         *
         * @var bool
         */
        private $testMode = false;

        /**
         * Merchant Id.
         *
         * @var int
         */
        private $merchantId = 0;

        /**
         * Merchant posId.
         *
         * @var int
         */
        private $posId = 0;

        /**
         * Salt to create a control sum (from P24 panel).
         *
         * @var string
         */
        private $salt = '';

        /**
         * Array of POST data.
         *
         * @var array
         */
        private $postData = array();

        /**
         * Minimal amount for single installment.
         *
         * @var int
         */
        private static $minInstallmentValue = 300;

        /**
         * Obcject constructor. Set initial parameters.
         *
         * @param int $merchantId
         * @param int $posId
         * @param string $salt
         * @param bool $testMode
         */
        public function __construct($merchantId, $posId, $salt, $testMode = false)
        {
            $this->posId = (int)trim($posId);
            $this->merchantId = (int)trim($merchantId);
            if (0 === $this->merchantId) {
                $this->merchantId = $this->posId;
            }
            $this->salt = trim($salt);
            $this->testMode = $testMode;

            $this->addValue('p24_merchant_id', $this->merchantId);
            $this->addValue('p24_pos_id', $this->posId);
            $this->addValue('p24_api_version', P24_VERSION);
        }

        /**
         * Returns host URL.
         *
         * @return string
         */
        public function getHost()
        {
            return self::getHostForEnvironment($this->testMode);
        }

        /**
         * Returns host URL For Environmen
         *
         * @param bool $isTestMode
         * @return string
         */
        public static function getHostForEnvironment($isTestMode = false)
        {
            return $isTestMode ? self::$hostSandbox : self::$hostLive;
        }

        /**
         * Get min installment value
         *
         * @return int
         */
        public static function getMinInstallmentValue()
        {
            return self::$minInstallmentValue;
        }

        /**
         * Returns URL for direct request (trnDirect).
         *
         * @return string
         */
        public function trnDirectUrl()
        {
            return $this->getHost() . 'trnDirect';
        }

        /**
         * Adds value do post request.
         *
         * @param string $name Argument name.
         * @param int|string|bool $value Argument value.
         */
        public function addValue($name, $value)
        {
            if ($this->validateField($name, $value)) {
                $this->postData[$name] = $value;
            }
        }

        /**
         * Method is testing a connection with P24 server.
         *
         * @return array Array(INT Error, Array Data), where data.
         *
         * @throws Exception
         */
        public function testConnection()
        {
            $arg = array();
            $crc = md5($this->posId . "|" . $this->salt);
            $arg["p24_pos_id"] = $this->posId;
            $arg["p24_sign"] = $crc;
            $arg["p24_merchant_id"] = $this->merchantId;
            $res = $this->callUrl("testConnection", $arg);

            return $res;
        }

        /**
         * Prepare a transaction request.
         *
         * @param bool $redirect Set true to redirect to Przelewy24 after transaction registration.
         *
         * @return array array(INT Error code, STRING Token).
         *
         * @throws Exception
         */
        public function trnRegister($redirect = false)
        {
            $crc = md5(
                $this->postData["p24_session_id"] . "|"
                . $this->posId . "|" . $this->postData["p24_amount"] . "|"
                . $this->postData["p24_currency"] . "|"
                . $this->salt
            );
            $this->addValue("p24_sign", $crc);
            $res = $this->callUrl("trnRegister", $this->postData);
            if ('0' === (string)$res["error"]) {
                $token = $res["token"];
            } else {
                return $res;
            }
            if ($redirect) {
                $this->trnRequest($token);
            }

            return array("error" => 0, "token" => $token);
        }

        /**
         * Redirects or returns URL to a P24 payment screen.
         *
         * @param string $token Token
         * @param bool $redirect If set to true redirects to P24 payment screen.
         *                       If set to false function returns URL to redirect to P24 payment screen.
         *
         * @return string URL to P24 payment screen
         */
        public function trnRequest($token, $redirect = true)
        {
            $token = Tools::substr($token, 0, 100);
            $url = $this->getHost() . 'trnRequest/' . $token;
            if ($redirect) {
                Tools::redirect($url);

                return '';
            }

            return $url;
        }

        /**
         * Function verify received from P24 system transaction's result.
         *
         * @return array
         *
         * @throws Exception
         */
        public function trnVerify()
        {
            $crc = md5(
                $this->postData["p24_session_id"] . "|"
                . $this->postData["p24_order_id"] . "|"
                . $this->postData["p24_amount"] . "|"
                . $this->postData["p24_currency"] . "|"
                . $this->salt
            );
            $this->addValue('p24_sign', $crc);
            $res = $this->callUrl('trnVerify', $this->postData);

            return $res;
        }

        /**
         * Method is used to communicate with P24 system.
         *
         * @param string $function Method name.
         * @param array $ARG POST parameters.
         *
         * @return array array(INT Error code, ARRAY Result).
         *
         * @throws Exception
         */
        private function callUrl($function, $ARG)
        {
            if (!in_array($function, array('trnRegister', 'trnRequest', 'trnVerify', 'testConnection'))) {
                return array('error' => 201, 'errorMessage' => 'class:Method not exists');
            }
            if ('testConnection' !== $function) {
                $this->checkMandatoryFieldsForAction($ARG, $function);
            }

            $REQ = array();

            foreach ($ARG as $k => $v) {
                $REQ[] = $k . "=" . urlencode($v);
            }
            $url = $this->getHost() . $function;

            $user_agent = 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)';
            if (($ch = curl_init())) {
                if (count($REQ)) {
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, join("&", $REQ));
                }

                curl_setopt($ch, CURLOPT_URL, $url);
                if ($this->testMode) {
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                } else {
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                }
                curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                if (($result = curl_exec($ch))) {
                    $info = curl_getinfo($ch);
                    curl_close($ch);

                    if (200 !== (int)$info['http_code']) {
                        return array(
                            'error' => 200,
                            'errorMessage' => 'call:Page load error (' . $info['http_code'] . ')',
                        );
                    } else {
                        $res = array();
                        $X = explode('&', $result);

                        foreach ($X as $val) {
                            $Y = explode('=', $val);
                            $res[trim($Y[0])] = urldecode(trim($Y[1]));
                        }

                        return $res;
                    }
                } else {
                    curl_close($ch);

                    return array('error' => 203, 'errorMessage' => 'call:Curl exec error');
                }
            } else {
                return array('error' => 202, 'errorMessage' => 'call:Curl init error');
            }
        }

        /**
         * Validate api version.
         *
         * @param string $version
         *
         * @return bool
         */
        private function validateVersion(&$version)
        {
            if (preg_match('/^[0-9]+(?:\.[0-9]+)*(?:[\.\-][0-9a-z]+)?$/', $version)) {
                return true;
            }
            $version = '';

            return false;
        }

        /**
         * Validate email.
         *
         * @param string $email
         * @return bool
         */
        private function validateEmail(&$email)
        {
            if (($email = filter_var($email, FILTER_VALIDATE_EMAIL))) {
                return true;
            }
            $email = '';

            return false;
        }

        /**
         * Validate number.
         *
         * @param string|float|int $value
         * @param bool $min
         * @param bool $max
         *
         * @return bool
         */
        private function validateNumber(&$value, $min = false, $max = false)
        {
            if (is_numeric($value)) {
                $value = (int)$value;
                if ((false !== $min && $value < $min) || (false !== $max && $value > $max)) {
                    return false;
                }

                return true;
            }
            $value = (false !== $min ? $min : 0);

            return false;
        }

        /**
         * Validate string.
         *
         * @param string $value
         * @param int $len
         *
         * @return bool
         */
        private function validateString(&$value, $len = 0)
        {
            $len = (int)$len;
            if (preg_match("/<[^<]+>/", $value, $m) > 0) {
                return false;
            }

            if (0 === $len ^ Tools::strlen($value) <= $len) {
                return true;
            }
            $value = '';

            return false;
        }

        private function validateUrl(&$url, $len = 0)
        {
            $len = (int)$len;
            if (0 === $len ^ Tools::strlen($url) <= $len) {
                if (preg_match('@^https?://[^\s/$.?#].[^\s]*$@iS', $url)) {
                    return true;
                }
            }
            $url = '';

            return false;
        }

        /**
         * Validate enum.
         *
         * @param string $value Provided value.
         * @param string[] $haystack Array of valid values.
         *
         * @return bool
         */
        private function validateEnum(&$value, $haystack)
        {
            if (in_array(Tools::strtolower($value), $haystack)) {
                return true;
            }
            $value = $haystack[0];

            return false;
        }

        /**
         * Validate field.
         *
         * @param string $field
         * @param mixed &$value
         *
         * @return boolean
         */
        public function validateField($field, &$value)
        {
            $ret = false;
            switch ($field) {
                case 'p24_session_id':
                    $ret = $this->validateString($value, 100);
                    break;
                case 'p24_description':
                    $ret = $this->validateString($value, 1024);
                    break;
                case 'p24_address':
                    $ret = $this->validateString($value, 80);
                    break;
                case 'p24_country':
                case 'p24_language':
                    $ret = $this->validateString($value, 2);
                    break;
                case 'p24_client':
                case 'p24_city':
                    $ret = $this->validateString($value, 50);
                    break;
                case 'p24_merchant_id':
                case 'p24_pos_id':
                case 'p24_order_id':
                case 'p24_amount':
                case 'p24_method':
                case 'p24_time_limit':
                case 'p24_channel':
                case 'p24_shipping':
                    $ret = $this->validateNumber($value);
                    break;
                case 'p24_wait_for_result':
                    $ret = $this->validateNumber($value, 0, 1);
                    break;
                case 'p24_api_version':
                    $ret = $this->validateVersion($value);
                    break;
                case 'p24_sign':
                    if ((32 === Tools::strlen($value)) && ctype_xdigit($value)) {
                        $ret = true;
                    } else {
                        $value = '';
                    }
                    break;
                case 'p24_url_return':
                case 'p24_url_status':
                    $ret = $this->validateUrl($value, 250);
                    break;
                case 'p24_currency':
                    $ret = preg_match('/^[A-Z]{3}$/', $value);
                    if (!$ret) {
                        $value = '';
                    }
                    break;
                case 'p24_email':
                    $ret = $this->validateEmail($value);
                    break;
                case 'p24_encoding':
                    $ret = $this->validateEnum($value, array('iso-8859-2', 'windows-1250', 'urf-8', 'utf8'));
                    break;
                case 'p24_transfer_label':
                    $ret = $this->validateString($value, 20);
                    break;
                case 'p24_phone':
                    $ret = $this->validateString($value, 12);
                    break;
                case 'p24_zip':
                    $ret = $this->validateString($value, 10);
                    break;
                default:
                    if ((0 === strpos($field, 'p24_quantity_')) ||
                        (0 === strpos($field, 'p24_price_')) ||
                        (0 === strpos($field, 'p24_number_'))
                    ) {
                        $ret = $this->validateNumber($value);
                    } elseif ((0 === strpos($field, 'p24_name_'))
                        || (0 === strpos($field, 'p24_description_'))) {
                        $ret = $this->validateString($value, 127);
                    } else {
                        $value = '';
                    }
                    break;
            }

            return $ret;
        }

        /**
         * Filter value.
         *
         * @param string $field
         * @param string $value
         *
         * @return bool|string
         */
        private function filterValue($field, $value)
        {
            return $this->validateField($field, $value) ? addslashes($value) : false;
        }

        /**
         * Check mandatory fields for action.
         *
         * @param array $fieldsArray
         * @param string $action
         *
         * @return bool
         *
         * @throws Exception
         */
        public function checkMandatoryFieldsForAction($fieldsArray, $action)
        {
            $keys = array_keys($fieldsArray);
            $verification = ('trnVerify' === $action);
            static $mandatory = array(
                'p24_order_id',//verify
                'p24_sign',
                'p24_merchant_id',
                'p24_pos_id',
                'p24_api_version',
                'p24_session_id',
                'p24_amount',//all
                'p24_currency',
                'p24_description',
                'p24_country',
                'p24_url_return',
                'p24_currency',
                'p24_email',
            );

            for ($i = ($verification ? 0 : 1); $i < ($verification ? 4 : count($mandatory)); $i++) {
                if (!in_array($mandatory[$i], $keys)) {
                    throw new Exception('Field ' . $mandatory[$i] . ' is required for ' . $action . ' request!');
                }
            }

            return true;
        }

        /**
         * Parse and validate POST response data from Przelewy24.
         *
         * @return array - valid response | false - invalid crc | null - not a Przelewy24 response
         */
        public function parseStatusResponse()
        {
            if (Tools::getIsset(
                'p24_session_id',
                'p24_order_id',
                'p24_merchant_id',
                'p24_pos_id',
                'p24_amount',
                'p24_currency',
                'p24_method',
                'p24_sign'
            )) {
                $session_id = $this->filterValue('p24_session_id', Tools::getValue('p24_session_id'));
                $merchant_id = $this->filterValue('p24_merchant_id', Tools::getValue('p24_merchant_id'));
                $pos_id = $this->filterValue('p24_pos_id', Tools::getValue('p24_pos_id'));
                $order_id = $this->filterValue('p24_order_id', Tools::getValue('p24_order_id'));
                $amount = $this->filterValue('p24_amount', Tools::getValue('p24_amount'));
                $currency = $this->filterValue('p24_currency', Tools::getValue('p24_currency'));
                $method = $this->filterValue('p24_method', Tools::getValue('p24_method'));
                $sign = $this->filterValue('p24_sign', Tools::getValue('p24_sign'));

                if (((int)$merchant_id !== (int)$this->merchantId) ||
                    ((int)$pos_id !== (int)$this->posId) ||
                    (md5(
                        $session_id .
                            '|' .
                            $order_id .
                            '|' .
                            $amount .
                            '|' .
                            $currency .
                            '|' .
                            $this->salt
                    ) !== $sign)) {
                    return false;
                }

                return array(
                    'p24_session_id' => $session_id,
                    'p24_order_id' => $order_id,
                    'p24_amount' => $amount,
                    'p24_currency' => $currency,
                    'p24_method' => $method,
                );
            }

            return null;
        }

        /**
         * Verifies data received in ping from P24.
         *
         * @param array|null $data
         *
         * @return bool|null null - status could not be parsed, true - data valid, false - data invalid.
         *
         * @throws Exception
         */
        public function trnVerifyEx($data = null)
        {
            $response = $this->parseStatusResponse();

            if (null === $response) {
                return null;
            } elseif ($response) {
                if (is_array($data)) {
                    foreach ($data as $field => $value) {
                        if ((string)$response[$field] !== (string)$value) {
                            return false;
                        }
                    }
                }
                $this->postData = array_merge($this->postData, $response);

                $result = $this->trnVerify();

                return ('0' === (string)$result['error']);
            }

            return false;
        }

        /**
         * Return direct sign.
         *
         * @param array $data
         *
         * @return string
         */
        public function trnDirectSign($data)
        {
            return md5(
                $data['p24_session_id'] . '|'
                . $this->posId . '|'
                . $data['p24_amount'] . '|'
                . $data['p24_currency'] . '|'
                . $this->salt
            );
        }
    }
}
