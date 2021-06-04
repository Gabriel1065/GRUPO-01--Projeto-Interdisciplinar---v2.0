<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO consultor (nome_consultor,cpf_consultor, rg_consultor, endereco_consultor, telefone_consultor, email_consultor) VALUES ('".$_REQUEST["nome_consultor"]."','".$_REQUEST["cpf_consultor"]."','".$_REQUEST["rg_consultor"]."','".$_REQUEST["endereco_consultor"]."','".$_REQUEST["telefone_consultor"]."','".$_REQUEST["email_consultor"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Consultor cadastrado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrá-lo.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE consultor SET 
						nome_consultor='".$_REQUEST["nome_consultor"]."',
						cpf_consultor='".$_REQUEST["cpf_consultor"]."',
						rg_consultor='".$_REQUEST["rg_consultor"]."',
						endereco_consultor='".$_REQUEST["endereco_consultor"]."',
						telefone_consultor='".$_REQUEST["telefone_consultor"]."',
						email_consultor='".$_REQUEST["email_consultor"]."'
				    WHERE 
						id_consultor=".$_REQUEST["id_consultor"];
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM consultor WHERE id_consultor=".$_REQUEST["id_consultor"];
			
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
	<button type="button" onclick="location.href='?page=listar-consultor';" class="btn btn-success">Listar</button>
</p>







