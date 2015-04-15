# Underscore.js asset for Yii2
Provides asset class for easy integration of [Underscore.js](http://underscorejs.org/) into your Yii2 application.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "madand/yii2-underscore:*"
```

or add

```
"madand/yii2-underscore": "*"
```

to the `require` section of your `composer.json` file.

You may also specify the version of Underscore to install (e.g. 1.5, 1.8), starting from 1.5:

```bash
# this will install the latest revision in 1.8 branch (e.g. 1.8.3)
composer require --prefer-dist "madand/yii2-underscore:1.8"
```


## Usage

In the view file register the asset:

```php
\madand\underscore\UnderscoreAsset::register($this);
```


## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
