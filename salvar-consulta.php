<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO consulta (agenda_cliente_id_cliente, agenda_id_agenda, hora_consulta, assunto_consulta, dia_consulta, mes_consulta) VALUES (".$_REQUEST["agenda_cliente_id_cliente"].", '".$_REQUEST["agenda_id_agenda"]."', '".$_REQUEST["hora_consulta"]."', '".$_REQUEST["assunto_consulta"]."', '".$_REQUEST["dia_consulta"]."', '".$_REQUEST["mes_consulta"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Consulta marcada!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível marcá-la.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE consulta SET 
						agenda_cliente_id_cliente=".$_REQUEST["agenda_cliente_id_cliente"].",
						agenda_id_agenda='".$_REQUEST["agenda_id_agenda"]."',
						assunto_consulta='".$_REQUEST["assunto_consulta"]."',
						hora_consulta='".$_REQUEST["hora_consulta"]."',
						dia_consulta='".$_REQUEST["dia_consulta"]."',
						mes_consulta='".$_REQUEST["mes_consulta"]."'
				    WHERE 
						id_consulta=".$_REQUEST["id_consulta"];
						
			//die($sql);
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST["id_consulta"];
			
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
	<button type="button" onclick="location.href='?page=listar-consulta';" class="btn btn-success">Listar</button>
</p>







