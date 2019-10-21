<html>
<body bgcolor="red">
<?php


$emptyFilds = [];

if (empty($_POST["CPF"]) ) {
  $emptyFilds[] = "CPF";

}
if (empty($_POST["email"])) {
  $emptyFilds[]= "email";

}
if (empty($_POST["address"])){
  $emptyFilds[]= "address";
}
if (empty($_POST["name"])){
  $emptyFilds []= "name";
}
if (empty($_POST["telephone"])){
    $emptyFilds []= "telephone";
}
if (empty($_POST["age"])){
    $emptyFilds []= "age";
}

else{
?>
 Name<?php echo $_POST["name"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Endereço: <?php echo $_POST["address"]; ?><br>
Telefone: <?php echo $_POST["telephone"]; ?><br>
CPF: <?php echo $_POST["CPF"]; ?><br>
Idade: <?php echo $_POST["age"]; ?><br>
Comment: <?php echo $_POST["comment"]; ?><br>
<?php
}


?>
</body>
</html>
