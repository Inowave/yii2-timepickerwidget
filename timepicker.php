<?php
	namespace inowave\timepickerwidget;
	
	use yii\base\Widget;
	use yii\helpers\Inflector;
	use yii\base\InvalidConfigException;

    class timepicker extends Widget {
    	public function init() {
    		parent::init();
			$this->view = $this->getView();
    	}
    	
		public function run() {
			timepickerAsset::register($this->view);
		}
    } 
?>