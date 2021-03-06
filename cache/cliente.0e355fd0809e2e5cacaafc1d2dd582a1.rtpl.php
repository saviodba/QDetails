<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Cadastro de Clientes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script type="text/javascript" src="../js/1.5.2.js"></script>
	<script type="text/javascript" src="../js/jquery.maskedinput-1.3.min.js"></script>
	<script>
		jQuery(function ($) {
			$("#cpf").mask("999.999.999-99");
			$("#rg").mask("99.999.999-9");
			$("#cnpj").mask("99.999.999/9999-99");
			$("#tel").mask("(99)9999-9999");
			$("#cel").mask("(99)99999-9999");
			$("#cep").mask("99999-999");
			$("#dt").mask("99/99/9999");
			$("#pass").mask("*******");
			$("#lt").mask("aaaaaaaaaaaaa");
		});
	</script>

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-primary">
			<a class="navbar-brand" href="#">MINHA LOGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSuport">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSuport">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../index.html">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Area de trabalho</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cadastros
						</a>
						<div class="dropdown-menu" arial-labelledby="navbarDropdown">
							<a class="dropdown-item" href="cliente.html">Clientes</a>
							<a class="dropdown-item" href="#">Veiculos</a>
							<a class="dropdown-item" href="#">Serviços</a>
						</div>
					</li>
				</ul>
			</div>
			</div>
		</nav>
	</header>

	<div class="container-md mt-3">
		<form method="POST" >
			<div class="form-row">

				<div class="form-group col-md-6">
					<label for="nome">Nome Completo*</label>
					<input id="nome" class="form-control" type="text" name="nome">
				</div>
				<div class="form-group col-md-3">
					<label for="tel">Telefone</label>
					<input id="tel" class="form-control" type="text" name="tel">
				</div>
				<div class="form-group col-md-3">
					<label for="cel">Celular</label>
					<input id="cel" class="form-control" type="text" name="cel">
				</div>

				<div class="form-group col-md-2">
					<label for="tpCliente">Tipo Cliente</label>
					<select id="tipoCli" class="form-control" onchange="select()" name="tipoCli">
						<option value="N" selected>-- Selecione --</option>
						<option value="F">Física</option>
						<option value="J">Jurídica</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="cpf">Cpf</label>
					<input id="cpf" class="form-control" type="text" name="cpf">
				</div>
				<div class="form-group col-md-2">
					<label for="rg">Rg</label>
					<input id="rg" class="form-control" type="text" name="rg">
				</div>
				<div class="form-group col-md-4">
					<label for="cnpj">Cnpj</label>
					<input id="cnpj" class="form-control" type="text" name="cnpj">
				</div>

				<div class="form-group col-md-2">
					<label for="cep">Cep </label>
					<input id="cep" class="form-control" type="text" name="cep">
				</div>
				<div class="form-group col-md-6">
					<label for="endereco">Endereço </label>
					<input id="endereco" class="form-control" type="text" name="logradouro">
				</div>
				<div class="form-group col-md-1">
					<label for="numero">Número </label>
					<input id="numero" class="form-control" type="text" name="numero">
				</div>
				<div class="form-group col-md-3">
					<label for="complemento">Complemento </label>
					<input id="complemento" class="form-control" type="text" name="complemento">
				</div>

				<div class="form-group col-md-6">
					<label for="bairro">Bairro</label>
					<input id="bairro" class="form-control" type="text" name="bairro">
				</div>
				<div class="form-group col-md-4">
					<label for="cidade">Cidade </label>
					<select class="form-control" name="codcidade">
						<option selected>-- Selecione --</option>
						<option value=3550308>São Paulo</option>
						<option value=3106200>Belo Horizonte</option>
						<option value=3304557>Rio de Janeiro</option>
						<option value=5300108>Brasília</option>
					</select>
				</div>

				<div class="form-group col-md-2 ">
					<label for="estado">Estado</label>
					<input id="estado" class="form-control" type="text" name="estado">
				</div>

				<div class="form-group col-md-2 ">
					<input class="btn btn-primary btn-block" type="submit" value="Salvar" onclick="salvar()" />
				</div>
			</div>

		</form>

	</div>


	<script>
		var selectTpCli = document.getElementById('tipoCli');
		var txtCnpj = document.getElementById('cnpj');
		var txtCpf = document.getElementById('cpf');
		var txtRg = document.getElementById('rg');

		var valor = selectTpCli.options[selectTpCli.selectedIndex].value;
		console.log(valor);

		function select() {
			var value = selectTpCli.options[selectTpCli.selectedIndex].value;

			if (value == 'F') {
				txtCnpj.disabled = true;
				txtCnpj.value = "";
				txtCpf.disabled = false;
				txtRg.disabled = false;
			} else if (value == 'J') {
				txtCpf.disabled = true;
				txtRg.disabled = true;
				txtCpf.value = "";
				txtRg.value = "";
				txtCnpj.disabled = false;
			} else {
				txtCpf.disabled = false;
				txtRg.disabled = false;
				txtCnpj.disabled = false;
			}
		}

		function salvar() {

			console.log(value);
			console.log("Selecione um tipo de cliente");
			if (value == "N") {
				alert("Selecione um tipo de cliente");
				console.log("Selecione um tipo de cliente");
			}
		}

	</script>
</body>

</html>
