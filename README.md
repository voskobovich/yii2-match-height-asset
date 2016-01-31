Yii2 jquery.matchHeight.js asset
================================

A responsive equal heights jQuery plugin for Yii2.

[![License](https://poser.pugx.org/voskobovich/yii2-match-height-asset/license.svg)](https://packagist.org/packages/voskobovich/yii2-match-height-asset)
[![Latest Stable Version](https://poser.pugx.org/voskobovich/yii2-match-height-asset/v/stable.svg)](https://packagist.org/packages/voskobovich/yii2-match-height-asset)
[![Latest Unstable Version](https://poser.pugx.org/voskobovich/yii2-match-height-asset/v/unstable.svg)](https://packagist.org/packages/voskobovich/yii2-match-height-asset)
[![Total Downloads](https://poser.pugx.org/voskobovich/yii2-match-height-asset/downloads.svg)](https://packagist.org/packages/voskobovich/yii2-match-height-asset)


Support
---
[GutHub issues](https://github.com/voskobovich/yii2-match-height-asset/issues).


Plugin
---
[Demo](http://brm.io/jquery-match-height-demo/).  

[Documentation](https://github.com/liabru/jquery-match-height).  

[Home page](http://brm.io/jquery-match-height/).


Usage
---

Register the asset in the code view 
```
<?php
...
voskobovich\matchheight\MatchHeightAsset::register($this);
?>
```  
or in your AssetBundle  
```
class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'voskobovich\matchheight\MatchHeightAsset'
    ];
}
```  
and then execute JS code in view 
```
<?php
$js = <<<JS
$('.item').matchHeight();
JS;
$this->registerJs($js)
?>
```


Installation
---

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist voskobovich/yii2-match-height-asset "~1.0"
```

or add

```
"voskobovich/yii2-match-height-asset": "~1.0"
```

to the require section of your `composer.json` file.