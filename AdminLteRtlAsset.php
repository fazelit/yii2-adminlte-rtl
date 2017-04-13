<?php
namespace airani;

use yii\base\Exception;

/**
 * AdminLteRtl AssetBundle
 * @author Ali Irani <ali@irani.im>
 */
class AdminLteRtlAsset extends AdminLteAsset
{
    public $sourcePath = '@bower/adminlte_rtl/dist';

    public $css = [
        'css/AdminLTE-rtl.min.css',
        'css/skins/_all-skins-rtl.min.css',
    ];

    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'airani\bootstrap\BootstrapRtlAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s-rtl.min.css', $this->skin);
        }

        parent::init();
    }
}
