<?php
  session_start();


  if(!isset($_GET['controller'])){
    require_once("controllers/MainController.php");
    $Main = new MainController();
    $Main -> index();
    }else{
      switch($_REQUEST['controller']){
        case 'main':
          require_once("controllers/MainController.php");
          $Main = new MainController();
          if(!isset($_GET['action'])){
            $Main -> index();
          }else{
            switch ($_REQUEST['action']){
              case 'login':
                 $Main -> login();
              break;
              case 'index':
                $Main -> index();
              break;
              case 'logout':
                $Main -> logout();
              break;
            }

          }

          break;
          case 'users':
            require_once("controllers/UsersController.php");
                    $User = new UsersController();
                    if(!isset($_GET['action'])){
                      $User -> index();
                    }else{
                      switch ($_REQUEST['action']){
                        case 'validateLogin':
                          $User -> validateLogin();
                        break;
                      }
                    }
          break;
          case 'clients':
            require_once('../controllers/clients.php');
            $client = new clientsController();
            if (!isset($_GET['action'])){
              $client -> index();
            } else {
              switch($_REQUEST['action']){
                case 'listclient':
                  $client -> listClient();
                break;
              }
            }
          break;
      }
  }
  
?>