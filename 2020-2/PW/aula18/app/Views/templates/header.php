<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
        <h2>Menu</h2>
        <ul class="list-unstyled">
          <li>
            <a href="<?=base_url('home')?>">Home</a>
          </li>
          <li>
            <a href="<?=base_url('about')?>">Sobre</a>
          </li>
          <li>
            <a href="<?=base_url('products')?>">Produtos e Serviços</a>
          </li>
          <li>
            <a href="<?=base_url('contact')?>">Formulário de contato</a>
          </li>
            <br>
        </ul>

        <h2>Cliente</h2>
        <ul class="list-unstyled">
          <li>
            <a href="?controller=clients&action=register">Cadastro</a><br>
          </li>
          <li>
            <a href="?controller=clients&action=listclient">Lista de Clientes</a>
          </li>
        </ul>
      </nav>
      <article class="col-md-9">