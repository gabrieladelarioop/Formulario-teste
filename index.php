<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/base.css" >
  <title>Formulario teste</title>

</head>
<body>
  <style>
  body{background-color: C0C0C0;}
  font-family: verdana
  </style>
<form action="mydata.php" method="POST">

    <div>
        <legend>SEJA BENVINDO!</legend>
        <p>
            <p><label for="nome">Nome: <em class="required">(obrigatório)</em></label>
            <p><input name="nome" id="nome" type="text" required />
        </p>

        <p>
          <p><label for="email">Email:</label><em class="required">(obrigatório)</em></label>
            <p><input name="email" id="email" type="text" required />
        </p>

        <P>
          <p><label for="endereco">Endereço:</label><em class="required">(obrigatório)</em></label>
          <p><input name="endereco" id="endereco" type="text" required />
      </p>

      <p>
        <p><label for="telefone">Telefone:</label><em class="required">(obrigatório)</em></label>
      <p><input name="telefone" id="telefone" type="text" required />
      </p>

      <p>
        <p><label for="idade">Idade:</label><em class="required">(obrigatório)</em></label>
        <P><input name="idade" id="idade" type="text" required/>
      </p>

      <p>
        <p><label for="CPF">CPF:</label><em class="required">(obrigatório)</em></label>
        <P><input name="CPF" id="CPF" type="text" required/>
      </p>


          <p>
            Comment: <textarea name="comment" rows="1" cols="20"></textarea><br><p>
          </p>
    </div>

    <p>
        <input type="submit">
    </p>

</form>
</body>
</html>
</form>
