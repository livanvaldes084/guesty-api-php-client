Examples
=======================

``` 
<?php

        use Guesty\GuestyApiPhpClient\GuestyApiClient;
        use Guesty\GuestyApiPhpClient\GuestyApiException;

        $path = "users";
        try {
            $info = GuestyApiClient::client($this->container->getParameter('username.guesty'), $this->container->getParameter('password.guesty'), $path, 'GET');
            return $info;
        } catch (GuestyApiException $exception) {
            return false;
        }

```