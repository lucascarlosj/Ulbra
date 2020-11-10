<h1>Alterar cliente</h1>
<form action="?controller=clients&action=updateClientAction&id=<?=$arrayClient['idClient']?>" method=POST enctype='multipart/form-data'>
   <div class="form-group">
       
       <div>
           <label for="name">Nome:</label>
           <input type="text" class="form-control" name="name" value="<?=$arrayClient['name']?>">
       </div>
       <div>
           <label for="email">Email:</label>
           <input type="mail" class="form-control" name="email"value="<?=$arrayClient['email']?>">
       </div>
       <div>
           <label for="tel">Telefone:</label>
           <input type="text" class="form-control" name="phone"value="<?=$arrayClient['phone']?>" >
       </div>
       <div>
           <label for="end">Endereço:</label>
           <input type="text" class="form-control" name="address" value="<?=$arrayClient['address']?>">
       </div>
       <div>
       <?php
                    if(is_file("assets/img/clients/{$arrayClient['idClient']}.jpg")){
                        echo("
                            <img style='max-width:100px;max-heigth:100px '
                            src='assets/img/clients/{$arrayClient['idClient']}.jpg'>
                        ");
                    }else{
                        print('Sem Imagem');
                    }
                ?>

       </div>
       <div>
           <label for="photo">Foto:</label>
           <input type="file" class="form-control" name="photo">
       </div>
       <br>
 
       <br>
       <button type="submit" class="btn btn-success">Salvar</button>
    </div>
    
</form>


