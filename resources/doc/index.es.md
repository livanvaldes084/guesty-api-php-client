Descripción:
------------

Guesty en un intento de mejorar el proceso de integración con sus servicios ha creado esta biblioteca (cliente). 
La cual permite a sus clientes, a través de PHP, consumir los recursos de su RESTful API localizada en https://guestyorg.github.io/guesty-api. 

Instalación:
------------

El proceso de instalación de este cliente en muy sencillo y puede hacerse de varias formas.

### Usando Composer

Recomendamos composer para intallar este cliente.

#### 1- Installar Composer

```cd``` en el directorio de su projecto (ej: my_project) y ejecute:

```
curl -sS https://getcomposer.org/installer | php
```

#### 2- Adicionar el packete como una dependencia ejecutando:

```
php composer.phar require guesty/guesty-api-php-client:dev-master
```

#### 3- Requerir el cargador automático de Composer

```
require_once '../vendor/autoload.php';
```

#### 4- Agregar las credenciales

Añadir los parametros necesarios a parameters.yml.dist

``` bash

    username_guesty: 2534356d564e2d37f403b4390478c27ar
    password_guesty: fg587ae597dfaca796c12feb1af9169fre

Añadir los parametros necesarios a parameters.yml

``` bash

    username_guesty: 2534356d564e2d37f403b4390478c27ar
    password_guesty: fg587ae597dfaca796c12feb1af9169fre

Añadir los parametros necesarios a config.yml

``` bash

    username.guesty: "%username_guesty%"
    password.guesty: "%password_guesty%"