<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/base.css" >

</head>
<body>
  <style>
  body{background-color: C0C0C0;}
  font-family: verdana
  </style>
<form action="mydata.php" method="POST">
    <fieldset>

        <legend>Informações</legend>
        <p>
            <p><label for="nome">Nome: <em class="required">(obrigatório)</em></label>
            <p><input name="nome" id="nome" type="text" />
        </p>

        <p>
          <p><label for="email">Email:</label>
            <p><input name="email" id="email" type="text" />
        </p>

        <P>
          <p><label for="endereco">Endereço:</label>
          <p><input name="endereco" id="endereco" type="text" />
      </p>

      <p>
        <p><label for="telefone">Telefone:</label>
      <p><input name="telefone" id="telefone" type="text" />
      </p>

      <p>
        <p><label for="idade">Idade:</label>
        <P><input name="idade" id="idade" type="text" />
      </p>

          <p>
            Comment: <textarea name="comment" rows="1" cols="20"></textarea><br><p>
          </p>
    </fieldset>

    <p>
        <input type="submit">
    </p>

</form>
</body>
</html>
</form>
