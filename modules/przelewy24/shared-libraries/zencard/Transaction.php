<?php
/**
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 *
 */

if (!class_exists('Transaction', false)) {
    /**
     * Class Transaction
     */
    class Transaction
    {
        /**
         * User email.
         *
         * @var string
         */
        private $userEmail;

        /**
         * Is verified.
         *
         * @var bool
         */
        private $verified;

        /**
         * Is confirmed.
         *
         * @var bool
         */
        private $confirmed;

        /**
         * Is discount.
         *
         * @var bool
         */
        private $discount;

        /**
         * Information.
         *
         * @var string
         */
        private $info;

        /**
         * Amount.
         *
         * @var int
         */
        private $amount;

        /**
         * Amount with discount.
         *
         * @var int
         */
        private $amountWithDiscount;

        /**
         * Skip coupon.
         *
         * @var bool
         */
        private $skipCoupon;

        /**
         * Has coupon.
         *
         * @var bool
         */
        private $hasCoupon;

        /**
         * Transaction constructor.
         *
         * @param stdClass $data
         */
        public function __construct($data)
        {
            $this->setData($data);
        }

        /**
         * Get user email.
         *
         * @return string
         */
        public function getUserEmail()
        {
            return $this->userEmail;
        }

        /**
         * Is verified.
         *
         * @return boolean
         */
        public function isVerified()
        {
            return $this->verified;
        }

        /**
         * Is confirmed.
         *
         * @return bool
         */
        public function isConfirmed()
        {
            return $this->confirmed;
        }

        /**
         * Has discount.
         *
         * @return boolean
         */
        public function hasDiscount()
        {
            return $this->discount;
        }

        /**
         * Get information.
         *
         * @return string
         */
        public function getInfo()
        {
            return $this->info;
        }

        /**
         * Get amount.
         *
         * @return int
         */
        public function getAmount()
        {
            return $this->amount;
        }

        /**
         * Get amount with discount.
         *
         * @return int
         */
        public function getAmountWithDiscount()
        {
            return $this->amountWithDiscount;
        }

        /**
         * Get discount amount.
         *
         * @return float
         */
        public function getDiscountAmountFloat()
        {
            return ($this->getAmount() - $this->getAmountWithDiscount()) / 100;
        }

        /**
         * Is skip coupon.
         *
         * @return bool
         */
        public function isSkipCoupon()
        {
            return $this->skipCoupon;
        }

        /**
         * Set data.
         *
         * @param stdClass $data
         *
         * @return bool
         */
        private function setData($data)
        {
            if (empty($data) || !is_object($data)) {
                return false;
            }
            $this->userEmail =
                (isset($data->_identity) && isset($data->_identity->_user)) ? (string)$data->_identity->_user : '';
            $this->verified = isset($data->_verified) ? (bool)$data->_verified : false;
            $this->confirmed = isset($data->_confirmed) ? (bool)$data->_confirmed : false;
            $this->discount =
                (isset($data->_discount) && $data->_discount instanceof \stdClass) ? (bool)$data->_discount : false;
            $this->amount = isset($data->_amount) ? (int)$data->_amount : 0;
            $this->amountWithDiscount = isset($data->_amountWithDiscount) ? (int)$data->_amountWithDiscount : 0;
            $this->info =
                isset($data->_info) && isset($data->_info->data) && isset($data->_info->data->info)
                    ? (string)$data->_info->data->info : '';
            $this->skipCoupon = isset($data->_skipCoupon) ? (bool)$data->_skipCoupon : false;
            $this->hasCoupon =
                isset($data->_info) && isset($data->_info->data) && isset($data->_info->data->hasCoupon)
                    ? (bool)$data->_info->data->hasCoupon : false;
            return true;
        }
    }
}
