Twitter Bootstrap Viewhelper Module
=======================

Introduction
------------
This is a simple module which encapsulates most of the twitter bootstrap gadgets
into viewhelpers


Installation
------------

### With composer

1. Add this project and in your composer.json:

    ```json
    "require": {
        "mschindler83/twitter-bootstrap-module": "dev-master"
    }
    ```

2. Now tell composer to download TwitterBootstrapModule by running the command:

    ```bash
    $ php composer.phar update
    ```

3. Enabling it in your `application.config.php`file.

    ```php
    <?php
    return array(
        'modules' => array(
            // ...
            'TwitterBootstrapModule',
        ),
        // ...
    );
    ```

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
