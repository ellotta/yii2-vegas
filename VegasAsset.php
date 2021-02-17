<?php

namespace ellotta\vegas;

use yii\web\AssetBundle;

class VegasAsset extends AssetBundle
{
    public $sourcePath = '@bower/vegas/dist';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        $this->css[] = YII_DEBUG ? 'vegas.css' : 'vegas.min.css';

        $this->js[] = YII_DEBUG ? 'vegas.js' : 'vegas.min.js';
    }
}

