Yii2 wrapper for jaysalvat/vegas
==========================================
Yii2 wrapper for Vegas: a jQuery/Zepto plugin to add beautiful backgrounds and Slideshows to DOM elements

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ellotta/yii2-vegas "*"
```

or add

```
"ellotta/yii2-vegas": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
Vegas::widget([
    'selector' => 'body', //default selector
    'jsOptions' => [
        'slides' => [
            ['src' => 'https://dummyimage.com/800x600/000/ffffff.gif&text=1'],
            ['src' => 'https://dummyimage.com/800x600/000/ffffff.gif&text=2'],
            ['src' => 'https://dummyimage.com/800x600/000/ffffff.gif&text=3'],
        ],
        'animation' => 'kenburnsUp',
    ],
]);
```

See plugin [documentation](http://vegas.jaysalvat.com/documentation) for more information.