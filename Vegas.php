<?php

namespace ellotta\vegas;

use yii\base\InvalidParamException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class Vegas extends Widget
{
    public $selector = 'body';

    public $jsOptions;

    public function init()
    {
        if ($this->selector == null)
            throw new InvalidParamException('$selector is required', 500);

        VegasAsset::register($this->getView());

        parent::init();
    }

    public function run()
    {
        $js = "jQuery('" . $this->selector . "').vegas(" . Json::encode($this->jsOptions) . ");";

        $this->getView()->registerJs($js);
    }
}