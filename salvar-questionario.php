<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO questionario (tema_questionario, n_questoes_questionario) VALUES ('".$_REQUEST["tema_questionario"]."', '".$_REQUEST["n_questoes_questionario"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Questionário criado!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível criá-lo.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE questionario SET 
						tema_questionario='".$_REQUEST["tema_questionario"]."',
						n_questoes_questionario='".$_REQUEST["n_questoes_questionario"]."'
				    WHERE 
						id_questionario=".$_REQUEST["id_questionario"];
						
			//die($sql);
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM questionario WHERE id_questionario=".$_REQUEST["id_questionario"];
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Excluído com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>
<p>
	<button type="button" onclick="window.history.back()" class="btn btn-primary">Voltar</button>
</p>
<p>
	<button type="button" onclick="location.href='?page=listar-questionario';" class="btn btn-success">Listar</button>
</p>







