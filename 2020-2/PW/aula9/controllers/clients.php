<?php

class clientsController{

public function register()
{
    require_once('views/templates/header.php');
    require_once('views/clients/register.php');
    require_once('views/templates/footer.php');

}
public function registerView(){
    $client = array(
        'name' => $_POST['name'],
        'sobrenome' => $_POST['sobrenome'],
        'data' => $_POST['data'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'linguagem' => $_POST['linguagem'],
        'comment' => $_POST['comment']
    );
    
    require_once('views/templates/header.php');
    require_once('views/clients/registerView.php');
    require_once('views/templates/footer.php');
}

public function listClient(){
    require_once('models/clientsModel.php');
    $client = new clientsModel();
    $client -> listClients();
    $result = $client -> getConsult();

    $arrayClients = array();

    while($line = $result -> fetch_assoc()){
        array_push($arrayClients, $line);
    }

    require_once('views/templates/header.php');
    require_once('views/clients/listClients.php');
    require_once('views/templates/footer.php');
}


}
?>