<?php
/**
 * @link https://github.com/MadAnd/yii2-underscore
 * @copyright Copyright (c) 2015 MadAnd <dev@madand.net>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace madand\underscore;

use yii\web\AssetBundle;

class UnderscoreAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/underscore';
    public $js = [
        YII_ENV_DEV ? 'underscore.js' : 'underscore-min.js',
    ];
}
