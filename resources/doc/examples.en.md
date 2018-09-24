Examples
=======================

``` 
<?php

        use Guesty\GuestyApiPhpClient\GuestyApiClient;
        use Guesty\GuestyApiPhpClient\GuestyApiException;

        $path = "users";
        try {
            $info = GuestyApiClient::client($username, $password, $path, 'GET');
            return $info;
        } catch (GuestyApiException $exception) {
            return false;
        }

```