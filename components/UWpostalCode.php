<?php

class UWpostalCode {
	
	public $params = array();
	
	/**
	 * Widget initialization
	 * @return array
	 */
	public function init() {
		return array(
			'name'=>__CLASS__,
			'label'=>UserModule::t('Postal code',array(),__CLASS__),
			'fieldType'=>array('INTEGER'),
			'params'=>$this->params,
			'paramsLabels' => array(
			),
		);
	}
	
	/**
	 * @param $value
	 * @param $model
	 * @param $field_varname
	 * @return string
	 */
	public function setAttributes($value,$model,$field_varname) {
		return $value;
	}
	
	/**
	 * @param $model - profile model
	 * @param $field - profile fields model item
	 * @return string
	 */
	public function viewAttribute($model,$field) {
		return $model->getAttribute($field->varname);
	}
	
	/**
	 * @param $model - profile model
	 * @param $field - profile fields model item
	 * @param $params - htmlOptions
	 * @return string
	 */
	public function editAttribute($model,$field,$htmlOptions=array()) {
		$varname = $field->varname;
		$options = array(
			'class' => 'postalcode',
			'size' => 4,
			'value' => $model->$varname,
		);
		return CHtml::activeTextField($model, $field->varname, array_merge($options, $htmlOptions));
	}
	
}