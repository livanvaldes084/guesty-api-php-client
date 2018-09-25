Descripción:
------------

Guesty en un intento de mejorar el proceso de integración con sus servicios ha creado esta biblioteca (cliente). 
La cual permite a sus clientes, a través de PHP, consumir los recursos de su RESTful API localizada en https://guestyorg.github.io/guesty-api. 

Instalación:
------------

El proceso de instalación de este cliente en muy sencillo y puede hacerse de varias formas.

### Usando Composer

Recomendamos composer para intallar este cliente.

#### 1- Installar Composer (no obligatorio)

```cd``` en el directorio de su projecto (ej: my_project) y ejecute:

```
curl -sS https://getcomposer.org/installer | php
```

#### 2- Agregar en composer.json:

```
        {
            "type": "vcs",
            "url": "git@github.com:livanvaldes084/guesty-api-php-client.git"
        }
```


#### 3- Adicionar el packete como una dependencia ejecutando:

```
php composer.phar require guesty/guesty-api-php-client:dev-master
```

#### 4- Requerir el cargador automático de Composer (no obligatorio)

```
require_once '../vendor/autoload.php';
```

#### 5- Agregar las credenciales

Añadir los parametros necesarios a parameters.yml.dist

```
    username_guesty: 2534356d564e2d37f403b4390478c27ar
    password_guesty: fg587ae597dfaca796c12feb1af9169fre
```

Añadir los parametros necesarios a parameters.yml

```
    username_guesty: 2534356d564e2d37f403b4390478c27ar
    password_guesty: fg587ae597dfaca796c12feb1af9169fre
```

Añadir los parametros necesarios a config.yml

```
    username.guesty: "%username_guesty%"
    password.guesty: "%password_guesty%"
```