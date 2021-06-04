<h1>Listar Consultas</h1>
<?php
	$sql = "SELECT * FROM consulta AS c
		    INNER JOIN cliente AS cl ON cl.id_cliente = c.agenda_cliente_id_cliente
			INNER JOIN agenda AS a ON a.id_agenda = c.agenda_id_agenda";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Cliente</th>";
		print "<th>Agenda</th>";
		print "<th>Assunto</th>";
		print "<th>Dia</th>";
		print "<th>Mês</th>";
		print "<th>Hora</th>";
		print "<th>Ações</th>";
		print "</tr>";
		$count = 1;
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_consulta."</td>";
			print "<td>".$row->usuario_cliente."</td>";
			print "<td>".$row->id_agenda."</td>";
			print "<td>".$row->assunto_consulta."</td>";
			print "<td>".$row->dia_consulta."</td>";
			print "<td>".$row->mes_consulta."</td>";
			print "<td>".$row->hora_consulta."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-consulta&id_consulta=".$row->id_consulta."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>






