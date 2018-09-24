Description:
------------

Installation:
------------

The installation process for this client in very simple and you can do it using different ways. 

### Using Composer

We recommend to use composer to install the client. 

#### 1- Install Composer

```cd``` into the directory of your project (eg: my_project) and run:

```
curl -sS https://getcomposer.org/installer | php
```

#### 2- Add the GUESTYAPIPHPClient package as a dependency by running: 

```
php composer.phar require guesty/guesty-api-php-client:dev-master
```

#### 3- Require Composer's autoloader

```
require_once '../vendor/autoload.php';
```