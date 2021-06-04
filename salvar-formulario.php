<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO formulario (cliente_id_cliente, cpf_formulario, data_nasc_formulario, genero_formulario,
			nome_formulario, telefone_formulario, endereco_formulario) VALUES (".$_REQUEST["cliente_id_cliente"].", '".$_REQUEST["cpf_formulario"]."', '".$_REQUEST["data_nasc_formulario"]."', '".$_REQUEST["genero_formulario"]."','".$_REQUEST["nome_formulario"]."','".$_REQUEST["telefone_formulario"]."','".$_REQUEST["endereco_formulario"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Formulário preenchido, cadastro do cliente completo!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível preencher o formulário!.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE formulario SET 
						cliente_id_cliente=".$_REQUEST["cliente_id_cliente"].",
						cpf_formulario='".$_REQUEST["cpf_formulario"]."',
						data_nasc_formulario='".$_REQUEST["data_nasc_formulario"]."',
						genero_formulario='".$_REQUEST["genero_formulario"]."',
						nome_formulario='".$_REQUEST["nome_formulario"]."',
						telefone_formulario='".$_REQUEST["telefone_formulario"]."',
						endereco_formulario='".$_REQUEST["endereco_formulario"]."'
				    WHERE 
						id_formulario=".$_REQUEST["id_formulario"];
						
			//die($sql);
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM formulario WHERE id_formulario=".$_REQUEST["id_formulario"];
			
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
	<button type="button" onclick="location.href='?page=listar-formulario';" class="btn btn-success">Listar</button>
</p>