<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO agenda (consultor_id_consultor, cliente_id_cliente, dia_agenda, hora_agenda, mes_agenda) VALUES (".$_REQUEST["consultor_id_consultor"].", '".$_REQUEST["cliente_id_cliente"]."', '".$_REQUEST["dia_agenda"]."', '".$_REQUEST["hora_agenda"]."', '".$_REQUEST["mes_agenda"]."')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Agenda preenchida, consulta pré-marcada!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível pré-marcar sua consulta.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE agenda SET 
						consultor_id_consultor=".$_REQUEST["consultor_id_consultor"].",
						cliente_id_cliente='".$_REQUEST["cliente_id_cliente"]."',
						dia_agenda='".$_REQUEST["dia_agenda"]."',
						hora_agenda='".$_REQUEST["hora_agenda"]."',
						mes_agenda='".$_REQUEST["mes_agenda"]."'
				    WHERE 
						id_agenda=".$_REQUEST["id_agenda"];
						
			//die($sql);
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Editado com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM agenda WHERE id_agenda=".$_REQUEST["id_agenda"];
			
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
	<button type="button" onclick="location.href='?page=listar-agenda';" class="btn btn-success">Listar</button>
</p>