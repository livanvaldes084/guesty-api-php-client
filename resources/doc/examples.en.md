Examples
=======================

``` 
<?php

        use Guesty\GuestyApiPhpClient\GuestyApiClient;
        use Guesty\GuestyApiPhpClient\GuestyApiException;

        $path = "users";
        try {
            $info = GuestyApiClient::client($this->container->getParameter('username.guesty'), $this->container->getParameter('password.guesty'), $path, 'GET');
            print_r($info);die;
            return $info;
        } catch (GuestyApiException $exception) {
            return false;
        }

        $path = "users?q=livanvaldes084@gmail.com&limit=1";
        try {
            $info = GuestyApiClient::client($this->container->getParameter('username.guesty'), $this->container->getParameter('password.guesty'), $path, 'GET');
            return $info;
        } catch (GuestyApiException $exception) {
            return false;
        }


        $path = "users";
        $params=array(
            'fullName'=>'Ari Gold',
            'email'=>'test@example.com',
            'emails'=>array('test@example.com'),
            'password'=>'password'
        );
        try {
            $info = GuestyApiClient::client($this->container->getParameter('username.guesty'), $this->container->getParameter('password.guesty'), $path, 'POST',$params);
            return $info;
        } catch (GuestyApiException $exception) {
            return false;
        }

```