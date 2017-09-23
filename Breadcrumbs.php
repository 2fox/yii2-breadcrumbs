<?php

namespace twofox\breadcrumbs;

use yii\helpers\Html;
use yii\base\InvalidConfigException;

class Breadcrumbs extends \yii\widgets\Breadcrumbs {

    public $options = ['class' => 'breadcrumb', "itemscope itemtype" => "http://schema.org/BreadcrumbList"];
    public $itemTemplate = "<li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">{link}</li>\n";
    public $activeItemTemplate = "<li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\" class=\"active\">{link}</li>\n";
    public $encodeLabels = false;

    protected function renderItem($link, $template) {

        if (!array_key_exists('label', $link)) {
            throw new InvalidConfigException('The "label" element is required for each link.');
        }

        $link['label'] = Html::tag('span', $link['label'], ['itemprop' => "name"]);
        $link['itemprop'] = 'url';

        return parent::renderItem($link, $template);
    }

}