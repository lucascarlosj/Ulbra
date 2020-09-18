<?php

class ClientsController{

public function __construc()
{
    if(!isset($_SESSION["login"])){
        header("Location: index.php?c=m&a=l");
    }

    require_once("models/ClientsModel.php");

}

public function listClients(){
    $ClientModel = new ClientsModel();
    $ClientModel -> listClients();
    $result = $ClientModel -> getConsult();

    $arrayClients = array();

    while($line = $result->fetch_assoc(){
        array_push($arrayClients,$line);
    }

    require_once('views/templates/header.php');
    require_once('views/clients/listClients.php');
    require_once('views/templates/footer.php');
}

}
?>