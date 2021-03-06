<?php

class Meanbee_PersonalisedContent_Model_Observer
{

    /**
     * Update indexes of customer interactions with categories.
     */
    public function reindexCustomerCategories()
    {
        /** @var Meanbee_PersonalisedContent_Helper_Config $config */
        $config = Mage::helper('meanbee_personalisedcontent/config');

        if (!$config->isEnabled()) {
            return $this;
        }


        /** @var Meanbee_PersonalisedContent_Helper_Customer_Categories $helper */
        $helper = Mage::helper('meanbee_personalisedcontent/customer_categories');
        $helper->reindexCustomerCategories();

        return $this;
    }



}