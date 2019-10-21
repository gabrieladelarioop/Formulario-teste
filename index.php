<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/base.css" >
  <title>Formulario teste</title>

</head>
<body>

<form action="mydata.php" method="POST">

  <div>
        <legend>SEJA BENVINDO!</legend>
<p>
            <p><label for="name">Name: <em class="required">(obrigatório)</em></label>
            <p><input name="name" id="name" type="text" required/>
</p>

<p>
          <p><label for="email">Email:<em class="required">(obrigatório)</em></label>
            <p><input name="email" id="email" type="text" required/>
</p>

<P>
          <p><label for="address">address:<em class="required">(obrigatório)</em></label>
          <p><input name="address" id="address" type="text" required/>
</p>

<p>
        <p><label for="telephone">Telephone:<em class="required">(obrigatório)</em></label>
      <p><input name="telephone" id="telephone" type="text" required/>
</p>

<p>
        <p><label for="age">Age:<em class="required">(obrigatório)</em></label>
        <P><input name="age" id="age" type="text" required/>
</p>

<p>
        <p><label for="CPF">CPF:<em class="required">(obrigatório)</em></label>
        <P><input name="CPF" id="CPF" type="text" required/>
</p>


<p>
            Comment: <textarea name="comment" rows="1" cols="20"></textarea><br><p>
</p>
</div>

<p>
        <input type="submit" name="Submit" value="Submit"/>

</form>
</body>
</html>
</form>
