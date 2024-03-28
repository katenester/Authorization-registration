<?php

// Маршрутизация запросов
$request_uri = $_SERVER['REQUEST_URI'];
$request_method = $_SERVER['REQUEST_METHOD'];
include_once "./create_user.php";
switch ($request_uri) {
    case '/register':
        if ($request_method === 'POST') {
            create_user();
        }
        break;
    case '/authorize':
        if ($request_method === 'POST') {
            //authorize();
        }
        break;
    case '/feed':
        if ($request_method === 'GET') {
           // feed();
        }
        break;
    default:
        http_response_code(404);
        echo json_encode(array('error' => 'Not Found'));
        break;
}
// Запуск сервера
$server = new SoapServer(null, array('uri' => 'http://localhost:8081'));
$server->handle();

// Функции для работы с JWT
//function jwt_encode($payload) {
    //return jwt_encode($payload, SECRET_KEY);
//}

//function jwt_decode($token) {
//    return jwt_decode($token, SECRET_KEY);
//}

?>
