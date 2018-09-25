<?php

namespace Guesty\GuestyApiPhpClient;

/**
 * Class GuestyApiClient
 * In this class are encapsulated all the functions to work with Guesty.
 *
 * @package Guesty\GuestyApiPhpClient
 * @author Ing.Livan Alejandro Capote Valdés <livanvaldes084@gmail.com>
 */
class GuestyApiClient
{

    /**
     * Returns the API URL
     *
     * @return string API URL
     */
    public static function getApiUrl() {
        if (file_exists(__DIR__ . '/config.php')) {
            require __DIR__ . '/config.php';
            return $apiConfig['api_url'];
        }
    }

    /**
     * @param $username
     * @param $password
     * @param $path
     * @param $method
     * @param array $params
     * @return array|mixed
     */
    public static function client($username, $password, $path, $method, $params = array())
    {
        $baseurl = self::getApiUrl();
        $url = $baseurl . ltrim($path, '/');
        $query = in_array($method, array('GET', 'DELETE')) ? $params : array();
        $payload = in_array($method, array('POST', 'PUT')) ? preg_replace('/\\\\(?!n|\\")/', '', json_encode($params)) : array();

        $request_headers = array();
        $token = 'Basic ' . base64_encode("$username:$password");
        array_push($request_headers, "Authorization: $token");
        if (in_array($method, array('POST', 'PUT'))) {
            array_push($request_headers, "Content-Type: application/json; charset=utf-8");
        }

        return self::_api($method, $url, $query, $payload, $request_headers);
    }

    /**
     * @param        $method
     * @param        $url
     * @param string $query
     * @param string $payload
     * @param array  $request_headers
     * @param array  $response_headers
     * @return array|mixed
     * @throws \Guesty\GuestyApiPhpClient\GuestyApiException
     */
    private static function _api($method, $url, $query = '', $payload = '', $request_headers = array(), &$response_headers = array())
    {
        $response = Wcurl::wcurl($method, $url, $query, $payload, $request_headers, $response_headers);
        $response = json_decode($response, true);

        if (isset($response['errors']) or ($response_headers['http_status_code'] >= 400)) {
            $errors = (isset($response['errors'])) ? $response['errors'] : $response['error'];
            throw new GuestyApiException($errors, $response_headers['http_status_code']);
        }

        return (is_array($response) and !empty($response)) ? array_shift($response) : $response;
    }
}