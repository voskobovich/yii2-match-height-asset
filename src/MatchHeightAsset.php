<?php

namespace voskobovich\matchheight;

use yii\web\AssetBundle;


/**
 * Class MatchHeightAsset
 * @package voskobovich\matchheight
 */
class MatchHeightAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/matchheight';
    public $js = [
        'dist/jquery.matchHeight-min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
