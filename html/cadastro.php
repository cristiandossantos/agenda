<!DOCTYPE html>
<html>
<head>
	<title>Eagenda</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="estilo.css" media="all"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
</head>

<body>
	<h2> Formulário de contato </h2>
	<form method="post" onsubmit="ValidaForm(); return false;" clss ="form"> 
	<p class="name">
	<label for = "name"> Nome </label>
	<input type="text" placeholder="Seu nome" />
	</p>

	<p class="email">
        <label for = "email"> Email </label>
        <input type="text" placeholder="mail@exemplo.com.br" />
        </p>

	<p class="text">
        <label for = "Mensagem"> Mensagem </label>
        <textarea  placeholder="Escreva sua mensagem"/></textarea>
        </p>

<p class="submit">
	<input type="submit" value ="Enviar"/>
</p>
</form>

</body>
</html>
