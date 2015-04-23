<?php
	require_once("../../template/head.php");
	require_once("../../template/header.php");
	require_once("../../conn/Connection.class.php");
?>

<?php

	require_once("../../util/config.php");

	$conn = Connection::getInstance();

	$conn->beginTransaction();

	try{

		// $stmt = $conn->prepare("INSERT INTO teste (nome) VALUES (:nome)");
		// $stmt->bindValue(":nome", "Testando");
		// $stmt->execute();

		$conn->commit();

	}catch(Exception $e){
		$conn->rollback();
	}

?>
<form action="javascript" method="POST" id="form_pesquisa" name="form_pesquisa">

	<h2>Cadastro de Pesquisa</h2>

	<!-- CAMPOS INICIO -->

	<label for="titulo">Título</label>
	<input type="text" id="titulo" name="titulo" placeholder="Informe o título" value=""/>
	<br/>

	<label for="descricao">Descrição</label>
	<input type="text" id="titulo" name="descricao" placeholder="Informe a descrição" value=""/>
	<br/>

	<hr>

	<div id="div_quest_01">

		<h4>Questão 01</h4>

		<label for="pergunta">Pergunta</label>
		<input type="text" id="pergunta" name="pergunta[]" placeholder="Informe a pergunta" value=""/>
		<br/>

		<label for="texto_ajuda">Texto de ajuda</label>
		<input type="text" id="texto_ajuda" name="texto_ajuda[]" placeholder="Informe o texto de ajuda" value=""/>
		<br/>

		<label for="tipo_pergunta">Tipo de Pergunta</label>
		<select id="tipo_pergunta" name="tipo_pergunta[]">
			<option value="1">Texto</option>
			<option value="2">Multipla escolha</option>
			<option value="3">Caixas de seleção</option>
			<option value="4">Escala</option>
			<option value="5">Data</option>
			<option value="6">Horário</option>
		</select>

		<label for="redireciona">
			<input type="checkbox" id="redireciona" name="redireciona[]" placeholder="" value=""/>
			Ir para página com base em uma resposta
		</label>
		<br/>

		<hr align="left" width="600">

	</div>

	<div id="div_quest_02">

		<h4>Questão 02</h4>

		<label for="pergunta">Pergunta</label>
		<input type="text" id="pergunta" name="pergunta[]" placeholder="Informe a pergunta" value=""/>
		<br/>

		<label for="texto_ajuda">Texto de ajuda</label>
		<input type="text" id="texto_ajuda" name="texto_ajuda[]" placeholder="Informe o texto de ajuda" value=""/>
		<br/>

		<label for="tipo_pergunta">Tipo de Pergunta</label>
		<select id="tipo_pergunta" name="tipo_pergunta[]">
			<option value="1">Texto</option>
			<option value="2">Multipla escolha</option>
			<option value="3">Caixas de seleção</option>
			<option value="4">Escala</option>
			<option value="5">Data</option>
			<option value="6">Horário</option>
		</select>

		<label for="redireciona">
			<input type="checkbox" id="redireciona" name="redireciona[]" placeholder="" value=""/>
			Ir para página com base em uma resposta
		</label>
		<br/>

		<hr align="left" width="600">

	</div>

	<div id="div_quest_03">

		<h4>Questão 03</h4>

		<label for="pergunta">Pergunta</label>
		<input type="text" id="pergunta" name="pergunta[]" placeholder="Informe a pergunta" value=""/>
		<br/>

		<label for="texto_ajuda">Texto de ajuda</label>
		<input type="text" id="texto_ajuda" name="texto_ajuda[]" placeholder="Informe o texto de ajuda" value=""/>
		<br/>

		<label for="tipo_pergunta">Tipo de Pergunta</label>
		<select id="tipo_pergunta" name="tipo_pergunta[]">
			<option value="1">Texto</option>
			<option value="2">Multipla escolha</option>
			<option value="3">Caixas de seleção</option>
			<option value="4">Escala</option>
			<option value="5">Data</option>
			<option value="6">Horário</option>
		</select>

		<label for="redireciona">
			<input type="checkbox" id="redireciona" name="redireciona[]" placeholder="" value=""/>
			Ir para página com base em uma resposta
		</label>
		<br/>

		<hr align="left" width="600">

	</div>

	<div id="div_quest_04">

		<h4>Questão 04</h4>

		<label for="pergunta">Pergunta</label>
		<input type="text" id="pergunta" name="pergunta[]" placeholder="Informe a pergunta" value=""/>
		<br/>

		<label for="texto_ajuda">Texto de ajuda</label>
		<input type="text" id="texto_ajuda" name="texto_ajuda[]" placeholder="Informe o texto de ajuda" value=""/>
		<br/>

		<label for="tipo_pergunta">Tipo de Pergunta</label>
		<select id="tipo_pergunta" name="tipo_pergunta[]">
			<option value="1">Texto</option>
			<option value="2">Multipla escolha</option>
			<option value="3">Caixas de seleção</option>
			<option value="4">Escala</option>
			<option value="5">Data</option>
			<option value="6">Horário</option>
		</select>

		<label for="redireciona">
			<input type="checkbox" id="redireciona" name="redireciona[]" placeholder="" value=""/>
			Ir para página com base em uma resposta
		</label>
		<br/>

		<hr align="left" width="600">

	</div>

	<!-- CAMPOS FIM -->

	<button>Adicionar pergunta</button>

	<br/>
	<button>Cancelar</button>
	<button>Finalizar</button>
	<button>Pré-Visualizar</button>

</form>

<?php
	require_once("../../template/footer.php");
?>