Twitter Bootstrap Viewhelper Module
=======================

Introduction
------------
This is a simple module which encapsulates most of the twitter bootstrap gadgets
into viewhelpers


Installation
------------
Clone the repository into your module directory and enable it by adding "TwitterBootstrapModule"
into your list of enabled modules.

Usage
------------
Just call the viewhelper in your view.

Simple label:

```php
echo $this->bootstrapLabel('success', 'Wohoo its a success!!');
```

Progress bar:

```php
echo $this->bootstrapProgressBar()
    ->setAnimated()
    ->setStriped()
    ->addProgress(50, 'danger')
    ->addProgress(50, 'success')
    ->render();
```
