<h1>Registro de Clientes</h1>

<form action="?controller=clients&action=registerView" method="post">

<div class="form-group ">
    <label>Nome</label>
    <input type="text" name="name" class="form-control">

    <label>Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control">    
    
    
    <label>Data de Nascimento</label>
    <input type="date" name="data" class="form-control">
    
    <br>

    <input type="radio" id="male" name="gender" value="Masculino">
    <label for="male">Masculino</label><br>
    <input type="radio" id="female" name="gender" value="Feminino">
    <label for="female">Feminino</label><br>

    <br><br>

    <label>Email</label>
    <input type="email" name="email" class="form-control">

    <label>Password</label>
    <input type="password" name="password"  class="form-control">

    <br><br>

    <label>Sua linguagem favorita</label>
    <select type="select" name="linguagem">
    <option>Python</option>
    <option>Javascript</option>
    <option>Java</option>
    <option>C++</option>
    <option>Outros</option>
    </select><br><br>   

    <label>Interesse</label>
    <textarea name="comment" class="form-control">Digite aqui</textarea>

    <br>
    <input type="submit" value="Registrar" class="btn btn-primary" class="form-control">
</div>
<br>
<br>
</form>
