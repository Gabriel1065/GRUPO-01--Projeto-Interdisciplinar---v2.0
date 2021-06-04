<h1>Listar Questionários</h1>
<?php
	$sql = "SELECT * FROM questionario";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Tema</th>";
		print "<th>Número de Questões</th>";
		print "<th>Ações</th>";
		print "</tr>";
		$count = 1;
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_questionario."</td>";
			print "<td>".$row->tema_questionario."</td>";
			print "<td>".$row->n_questoes_questionario."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-questionario&id_questionario=".$row->id_questionario."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-questionario&acao=excluir&id_questionario=".$row->id_questionario."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>






