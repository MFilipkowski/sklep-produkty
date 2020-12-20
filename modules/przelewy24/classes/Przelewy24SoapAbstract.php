<?php
/**
 * Class Przelewy24SoapAbstract
 *
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

/**
 * Class Przelewy24SoapAbstract
 */
abstract class Przelewy24SoapAbstract
{
    /**
     * Url of wsdl service.
     *
     * @var string
     */
    protected $wsdlService;

    /**
     * Przelewy24 library class (used to communicate with P24).
     *
     * @var Przelewy24Class
     */
    protected $p24Class;

    /**
     * Merchant id.
     *
     * @var int
     */
    protected $merchantId;

    /**
     * Shop id.
     *
     * @var int
     */
    protected $posId;

    /**
     * String used to ensure safety during communication with P24.
     *
     * @var string
     */
    protected $salt;

    /**
     * Soap client.
     *
     * @var SoapClient
     */
    protected $soap = null;

    /**
     * Test mode
     *
     * @var boolean
     */
    protected $testMode;

    /**
     * Przelewy24SoapAbstract constructor.
     *
     * @param Przelewy24ClassInterface $p24Class
     * @param int $merchantId
     * @param int $posId
     * @param string $salt
     * @param bool $testMode
     * @throws SoapFault
     */
    public function __construct(Przelewy24ClassInterface $p24Class, $merchantId, $posId, $salt, $testMode = false)
    {
        if (($merchantId <= 0) || ($posId <= 0) || empty($salt)) {
            throw new LogicException('The provided parameters for the class are invalid.');
        } else {
            $this->p24Class = $p24Class;
            $this->merchantId = $merchantId;
            $this->posId = $posId;
            $this->salt = $salt;
            $this->testMode = $testMode;

            $this->soap = new SoapClient(
                $this->p24Class->getHost() . $this->wsdlService,
                array('trace' => true, 'exceptions' => true, 'cache_wsdl' => WSDL_CACHE_NONE)
            );
        }
    }
}
