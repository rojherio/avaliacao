<?php
	require_once("../../util/config.php");
	require_once("../../template/head.php");
	require_once("../../template/header.php");
	require_once("../../conn/Connection.class.php");
?>

<?php

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

	$stmt = $conn->prepare("SELECT id, nome FROM ava_tipo_opcao ");
	$stmt->execute();
	$resultTipoOpcao = $stmt->fetchAll();

?>

<!-- JAVASCRIPT -->
<script type="text/javascript">
	var resultTipoOpcao = <?=json_encode($resultTipoOpcao);?>
</script>
<script src="<?=AVA_JS_FOLDER; ?>jquery.form.js" type="text/javascript" ></script>
<script src="<?=AVA_JS_CUSTON_FOLDER?>pesquisa/formulario.js"></script>

<form action="javascript" method="POST" id="form_pesquisa" name="form_pesquisa">

	<input type="hidden" id="proprietario_id" name="proprietario_id" value="1">
	<input type="hidden" id="status" name="status" value="1">

	<h2>Cadastro de Pesquisa</h2>

	<!-- CAMPOS INICIO -->
	<!-- PESQUISA INICIO -->

	<label>Título
		<input type="text" id="titulo" name="titulo" placeholder="Informe o título" value=""/>
	</label><br/>

	<label>Descrição
		<input type="text" id="titulo" name="descricao" placeholder="Informe a descrição" value=""/>
	</label><br/>

	<hr>

	<div id="div_perguntas">

		<div id="div_pergunta_0" class="div_pergunta" contador="0">

			<?php include("../pergunta/formulario.php"); ?>

		</div>
		
	</div>

	<a href="" id="a_add_pergunta">Adicionar pergunta</button>

	<br/>
	<button>Cancelar</button>
	<a href="#" id="a_finalizar">Finalizar</a>
	<button>Pré-Visualizar</button>

</form>

<?php
	require_once("../../template/footer.php");
?>
