<?php
//conexão
require_once 'db_connect.php';

//sessão

session_start();
//Botão enviar
if (isset($_POST['btn-entrar'])):
  $erros = array();
  $login = mysqli_escape_string($connect, $_POST['login']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if (empty($login or empty($senha))):
    $erros[] = "<li> O campo login/senha preisa ser preenchido </li>";
  else:
    $sql = "SELECT  login FROM usuarios WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);
    if (mysqli_num_rows($resultado) > 0):
      $senha =  md5($senha);
      $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha ='$senha'";
      $resultado = mysqli_query($connect, $sql);

      if (mysqli_num_rows($resultado) == 1):
        $dados = mysqli_fetch_array($resultado);
        mysqli_close($connect);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        header('Location: home.php');
      else:
        $erros[] = "<li> Usuário e senha não conferem </li>";
      endif;
    else:
      $erros[] = "<li> usuário inexistente </li>";
    endif;
  endif;
endif;

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* Estilos para centralizar */
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
      margin-bottom: 20px;
    }

    form input {
      display: block;
      margin: 10px auto;
      padding: 10px;
      width: 80%;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    form button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    form button:hover {
      background-color: #0056b3;
    }

    ul {
      color: red;
      list-style: none;
      padding: 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1> Login</h1>
    <?php
    if (!empty($erros)):
      foreach ($erros as $erro):
        echo $erro;
      endforeach;
    endif;

    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Login: <input type="text" name="login"><br>
      Senha:<input type="password" name="senha"><br>
      <button type="submit" name="btn-entrar"> Entrar </button>
    </form>

</html>