Description:
------------

Installation:
------------

The installation process for this client in very simple and you can do it using different ways. 

### Using Composer

We recommend to use composer to install the client. 

#### 1- Install Composer (not required)

```cd``` into the directory of your project (eg: my_project) and run:

```
curl -sS https://getcomposer.org/installer | php
```
#### 2- Add in composer.json:

```
        {
            "type": "vcs",
            "url": "git@github.com:livanvaldes084/guesty-api-php-client.git"
        }
```

#### 3- Add the GUESTYAPIPHPClient package as a dependency by running:

```
php composer.phar require guesty/guesty-api-php-client:dev-master
```

#### 4- Require Composer's autoloader (not required)

```
require_once '../vendor/autoload.php';
```
#### 5- Add credentials

Add params parameters.yml.dist

```
    username_guesty: 2534356d564e2d37f403b4390478c27ar
    password_guesty: fg587ae597dfaca796c12feb1af9169fre
```

Add params parameters.yml

```
    username_guesty: 2534356d564e2d37f403b4390478c27ar
    password_guesty: fg587ae597dfaca796c12feb1af9169fre
```

Add params config.yml

```
    username.guesty: "%username_guesty%"
    password.guesty: "%password_guesty%"
```