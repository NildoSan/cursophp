<html>

<body>

  <?php

  if (isset($_POST['Enviar-formulário'])):
    //array de erros
    $erros = array();

    //Sanitize

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    //if (!filter_var($nome, FILTER_VALIDATE_)):
    //$erros[] = "Insira um nome válido";
    //endif;

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($idade, FILTER_VALIDATE_INT)):
      $erros[] = "Idade precisa ser um inteiro";
    endif;


    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
      $erros[] = "Email inválido";
    endif;


    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if (!filter_input($url, FILTER_VALIDATE_URL)):
      $erros[] = "Url inválida";
    endif;

    //exibindo mensagens
    if (!empty($erros)):
      foreach ($erros as $erros):
        echo "<li> $erros </li>";
      endforeach;
    else:
      echo "Parabéns, seus dados estão corretos!";
    endif;

  endif;
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"><br>
    Idade:<input type="text" name="idade"><br>
    Email: <input type="text" name="email"><br>
    URL: <input type="text" name="url"><br>

    <button type="submit" name="Enviar-formulário"> Enviar</button><br>

  </form>

</body>