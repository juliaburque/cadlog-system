<?php
// Inclui arquivos  de controlador necessarios para lidar com diferentes açoes 
require 'controllers/AuthController.php'; //  Instancia o controlador de autenticaçao
require 'controllers/UserController.php'; // Instancia o controlador de usuario
require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard

// Cria instanciais dos controladores para utilizar seus metodos
$authController = new AuthController();
$userControler = new UserController();
// $dashboard = new DashboardController();

// Coleta a açao da URL, se nao houver açao definida, usa 'login' como padrao
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescencia nula (??) para definir 'login' se 'action' nao estiver presente

switch ($action){
    case 'login':
        $authController->login();
        break;
    case 'logout':
            $authController->logaut();
        break;  
    case 'register';
        $userControler->register();
        break;
    case 'dashboard';
        $dashboardController->index();
        break;    
        $authController->login();
        default;
    

}



?>