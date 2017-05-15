 <?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap/css/bootstrap.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'plugins/iCheck/flat/blue.css',
        'css/site.css',
    ];
    public $js = [
    	'js/bootstrap/bootstrap.min.js',
    	'//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
    	'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
    	'plugins/sparkline/jquery.sparkline.min.js',
    	'plugins/slimScroll/jquery.slimscroll.min.js',
    	'plugins/fastclick/fastclick.js',
    	'js/dashboard.js',
    	'js/app.min.js',
    	'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}