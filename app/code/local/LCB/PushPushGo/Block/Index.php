<?php

class LCB_PushPushGo_Block_Index extends Mage_Core_Block_Template
{

    /**
     * Get PushPushGo script file name
     * 
     * @return string
     */
    public function getJsKey()
    {
        return Mage::getStoreConfig('pushpushgo/general/js_key', Mage::app()->getStore());
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->getTemplate() || !Mage::getStoreConfig('pushpushgo/general/enabled', Mage::app()->getStore())) {
            return '';
        }
        $html = $this->renderView();
        return $html;
    }

}
