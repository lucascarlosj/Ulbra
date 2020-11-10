<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <header>
    <div class="jumbotron jumbotron-fluid bg-dark">
      <div class="container">
        <h1 class="display-md-4">Site v3</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <section class="row">
      <nav class="col-md-3">
        <h2>Clientes</h2>
        <ul class="list-unstyled">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
          <a href="?controller=clients&action=listClients">Lista de Clientes</a><br>
          <a href="?controller=clients&action=insertClient"> - Add Clientes</a>
          </li>
        </ul>


        
      </nav>
      <article class="col-md-9">