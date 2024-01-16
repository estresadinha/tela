<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel = "stylesheet " href= "css/login.css">
    <title>Login</title>
</head>
<body>
    <div class= "container login-container">

    <h2 class= "text-center mb-4"> login </h2>
    <form method="post"  action="validar-senha.php">
        <div class=" mt-1 form-group">
            <label for="usuario">usuario: </label>
            <input type="text" class= "form-control" id="usuario" name="usuario" pleaceholder= "digite o usuario">

        </div>
        <div class=" mt-2 form-group">
            <label for="senha">senha: </label>
            <input type="text" class= "form-control" id="senha" name="senha" pleaceholder= "digite a senha">

        </div> 
        <div   class=" mt-2 text-center">
        <button type= "submit" class="btn btn-warning"> login</button>

        </div>


    </form>
    <div class ="mt-3 text-center">
        <a href="#">esqueci a senha </a> | <a href="#">cadastrar usuario</a>

    </div>

    </div>
    
</body>
</html>