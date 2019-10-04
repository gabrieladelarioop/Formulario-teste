<html>
<body>
<?php
if (empty($_POST["CPF"]) ) {
  echo "<br>Campo de CPF precisa ser preenchido!";
}
elseif (empty($_POST["email"])) {
  echo "<br>Campo de email precisa ser preenchido!";
}
elseif (empty($_POST["endereco"])){
  echo "<br>Campo de endereco precisa ser preenchido!";
}
elseif (empty($_POST["nome"])){
  echo "<br>Campo de nome precisa ser preenchido!";
}
  elseif (empty($_POST["telefone"])){
echo "<br>Campo de telefone precisa ser preenchido!";
}
elseif (empty($_POST["idade"])){
  echo "<br>Campo de idade precisa ser preenchido!";
}
else {
?>
Welcome <?php echo $_POST["nome"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Endereço: <?php echo $_POST["endereco"]; ?><br>
Telefone: <?php echo $_POST["telefone"]; ?><br>
Idade: <?php echo $_POST["idade"]; ?><br>
Comment: <?php echo $_POST["comment"]; ?><br>
<?php
}
?>
</body>
</html>
