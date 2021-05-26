<?php
class Ionerednew_Ajax_Model_Response extends Varien_Object
{
    /**
     * Success status code
     */
    const SUCCESS = 'success';

    /**
     * Error status code
     */
    const ERROR = 'error';

    /**
     * Redirect status code
     */
    const REDIRECT = 'redirect';

    /**
     * Set response as successful
     *
     * @return Ionerednew_Ajax_Model_Response
     */
    public function success()
    {
        return $this->setStatus(self::SUCCESS);
    }

    /**
     * Set response as error
     *
     * @return Ionerednew_Ajax_Model_Response
     */
    public function error()
    {
        return $this->setStatus(self::ERROR);
    }

    /**
     * Set response as redirect
     *
     * @return Ionerednew_Ajax_Model_Response
     */
    public function redirect()
    {
        return $this->setStatus(self::REDIRECT);
    }

    /**
     * Transform response to JSON format
     *
     * @return string
     */
    public function asJson()
    {
        return Mage::helper('core')->jsonEncode($this->getData());
    }
}
