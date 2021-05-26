<?php
class Ionerednew_Ajax_Helper_Data extends Mage_Core_Helper_Data
{
    /**
     * Set Response Body
     *
     * @param Ionerednew_Ajax_Model_Response $response Response object
     *
     * @return Zend_Controller_Response_Abstract
     */
    public function sendResponse(Ionerednew_Ajax_Model_Response $response)
    {
        Mage::app()->getResponse()->setHeader('Content-type', 'application/json');
        return Mage::app()->getResponse()->setBody($response->asJson());
    }

    /**
     * Set response error
     *
     * @param string $message Error message
     *
     * @return Zend_Controller_Response_Abstract
     */
    public function sendError($message)
    {
        return $this->sendResponse(
            Mage::getModel('ajax/response')->error()->setMessage($message)
        );
    }

    /**
     * Set response success
     *
     * @param array $data Success response data
     *
     * @return Zend_Controller_Response_Abstract
     */
    public function sendSuccess($data = array())
    {
        return $this->sendResponse(
            Mage::getModel('ajax/response')->success()->addData($data)
        );
    }
}
