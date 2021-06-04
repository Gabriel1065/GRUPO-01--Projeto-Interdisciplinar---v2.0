<h1>Listar Email de clientes</h1>
<?php
	$sql = "SELECT * FROM cliente ";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultados</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Usuário</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_cliente."</td>";
			print "<td>".$row->usuario_cliente."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=editar-cliente&id_cliente=".$row->id_cliente."';\">Editar</button>
						
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-cliente&acao=excluir&id_cliente=".$row->id_cliente."';}else{false;}\">Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Nenhum dado encontrado";
	}
?>






