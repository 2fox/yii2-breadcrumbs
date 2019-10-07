# Yii2 Breadcrumbs with microdata (schema.org)

https://schema.org/BreadcrumbList

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist 2fox/yii2-breadcrumbs "*"
```

or add

```
"2fox/yii2-breadcrumbs": "*"
```

to the require section of your `composer.json` file.

## Usage

### Breadcrumbs
```php
use twofox\breadcrumbs\Breadcrumbs;

echo Breadcrumbs::widget([
    'links' => [
        [
            'label' => 'Home',
            'url'   => ['/']
        ],
        [
            'label' => 'Contact',
            'url'   => ['/site/contact']
        ],
    ],
]);
```

or

```php
use twofox\breadcrumbs\Breadcrumbs;

echo Breadcrumbs::widget([
    'links' => $this->params['breadcrumbs'],
]);
```


####result
````html
<ol itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="https://example.com/dresses">
    <span itemprop="name">Dresses</span></a>
    <meta itemprop="position" content="1" />
  </li>
  <li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="https://example.com/dresses/real">
    <span itemprop="name">Real Dresses</span></a>
    <meta itemprop="position" content="2" />
  </li>
</ol>
```