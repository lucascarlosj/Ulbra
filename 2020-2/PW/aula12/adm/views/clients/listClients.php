<h1>Lista de Clintes</h1>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Endereço</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach($arrayClients as $client){
    ?>
        <tr>
            <td>
                <?=$client["idClient"]?>
            </td>
            <td>
                <?=$client["name"]?>
            </td>
            <td>
                <?=$client["phone"]?>
            </td>
            <td>
                <?=$client["email"]?>
            </td>
            <td>
                <?=$client["address"]?>
            </td>
            <td>
                <?php
                    if(is_file("assets/img/clients/{$client['idClient']}.jpg")){
                        echo("
                            <img style='max-width:100px;max-heigth:100px '
                            src='assets/img/clients/{$client['idClient']}.jpg'>
                        ");
                    }else{
                        print('Sem Imagem');
                    }
                ?>
            </td>
            <td>
            <td>
            <a class="button is-warning" href="?controller=clients&action=updateClient&id=<?= $client['idClient'] ?>">
                Editar
            </a>
            </td>
            <td>
            <a class="button is-danger" href="?controller=clients&action=deleteClient&id=<?= $client['idClient'] ?>">
                Excluir
            </a>
            </td>
        <tr>
    <?php
    }
    ?>
</table>