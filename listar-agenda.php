<h1>Listar Agenda</h1>
<?php
	$sql = "SELECT * FROM agenda AS f
		    INNER JOIN consultor AS c ON c.id_consultor = f.consultor_id_consultor
			INNER JOIN cliente AS d ON d.id_cliente = f.cliente_id_cliente";

	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do consultor</th>";
		print "<th>Email do Cliente</th>";
		print "<th>Dia</th>";
		print "<th>Mês</th>";
		print "<th>Hora</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_agenda."</td>";
			print "<td>".$row->nome_consultor."</td>";
			print "<td>".$row->usuario_cliente."</td>";
			print "<td>".$row->dia_agenda."</td>";
			print "<td>".$row->mes_agenda."</td>";
			print "<td>".$row->hora_agenda."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-agenda&id_agenda=".$row->id_agenda."';\">Editar</button>
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-agenda&acao=excluir&id_agenda=".$row->id_agenda."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>