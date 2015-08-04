<?php

class ShopClosedConfig extends DataExtension {

	private static $db = array(
		'ShopClosed'        => 'Boolean',
		'ShopClosedMessage' => 'Text'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Shop.ShopTabs.ShopClosed', CheckboxField::create('ShopClosed'));
		$fields->addFieldToTab('Root.Shop.ShopTabs.ShopClosed', TextareaField::create('ShopClosedMessage'));
	}

}