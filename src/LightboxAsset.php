<?php

/*
 * Yii2 asset for bower LightBox2
 *
 * @link      https://github.com/hiqdev/yii2-asset-lightbox2
 * @package   yii2-asset-lightbox2
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\lightbox2;

use yii\web\JqueryAsset;

class LightboxAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/lightbox2/dist';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/lightbox.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/lightbox.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryAsset::class
    ];
}
