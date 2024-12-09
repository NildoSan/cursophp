<html>

<body>

  <?php

  if (isset($_POST['Enviar-formulário'])):
    //array de erros
    $erros = array();

    //validações

    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):

      $erros[] = "Idade precisa ser um inteiro";
    endif;

    if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):

      $erros[] = "Email inválido";
    endif;


    if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):

      $erros[] = "Peso inválido";
    endif;

    if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):

      $erros[] = "IP inválido";
    endif;

    if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):

      $erros[] = "URL inválida";
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