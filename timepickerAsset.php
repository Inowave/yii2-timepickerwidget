<?php
    namespace inowave\timepickerwidget;
    use yii\web\AssetBundle;
	use yii\base\InvalidConfigException;
	
    class timepickerAsset extends AssetBundle {
		//public $sourcePath = '@vendor/inowave/timepickerwidget/assets';
		public $sourcePath = __DIR__ . '/assets';
		
    	public $css = [
    		'css/jquery-ui-timepicker-addon.min.css'
    	];
    	
    	public $js = [    		
        	'js/jquery-ui-timepicker-addon.min.js', 
        	'js/i18n/jquery-ui-timepicker-ru.js',
        	'js/jquery-ui-sliderAccess.js',
    	];
    	public $depends = [
    		'yii\web\YiiAsset',
    	];
    }
 ?>