<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO cliente (usuario_cliente) VALUES ('".$_REQUEST["usuario_cliente"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'> Email do cliente salvo!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrá-lo.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE cliente SET 
						usuario_cliente='".$_REQUEST["usuario_cliente"]."'
				    WHERE 
						id_cliente=".$_REQUEST["id_cliente"];
						
			//die($sql);
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
			
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
	<button type="button" onclick="location.href='?page=listar-cliente';" class="btn btn-success">Listar</button>
</p>







