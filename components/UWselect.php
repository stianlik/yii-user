<?php

class UWselect {
	
	public $params = array('','','','','','','','','');
	
	/**
	 * Widget initialization
	 * @return array
	 */
	public function init() {
		return array(
			'name'=>__CLASS__,
			'label'=>UserModule::t('Select',array(),__CLASS__),
			'fieldType'=>array('INTEGER'),
			'params'=>$this->params,
			'paramsLabels' => array(0,1,2,3,4,5,6,7,8,9),
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
		return $this->params[$model->getAttribute($field->varname)];
	}
	
	/**
	 * @param $model - profile model
	 * @param $field - profile fields model item
	 * @param $params - htmlOptions
	 * @return string
	 */
	public function editAttribute($model,$field,$htmlOptions=array()) {
		$data = array();
		foreach ($this->params as $k => &$v) {
			if (!empty($v)) $data[$k] = $v;
		} unset($v);
		$options = array(
		);
		return CHtml::activeDropDownList($model, $field->varname, $data, array_merge($options, $htmlOptions));
	}
}