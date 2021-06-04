<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="fontsawesome/css/all.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<title>Officer Assistant</title>
	</head>
<body>
	<div class="container-fluid">
		<nav id="navprincipal" class="navbar navbar-expand-lg navbar-light">
		    <a class="navbar-brand" href="index.php"><img style="width: 200px;" id="logonav" src="IMAGENS/OA de lado s fundo.png"></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
		 <!-------- Nav Consultor --------->
		    	<div class="collapse navbar-collapse" id="navbarSupportedContent" class="img-fluid">
		      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		      		<li class="nav-item dropdown">
		         	 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultor</a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="?page=cad-consultor"><i class="fas fa-file-medical"></i> Cadastrar</a></li>
		            <li><a class="dropdown-item" href="?page=listar-consultor"><i class="fas fa-file-alt"></i> Listar</a></li>
		          </ul>
		        </li>
		 <!-------- Nav Cliente --------->
		      		<li class="nav-item dropdown">
		         	 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cliente</a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="?page=cad-cliente"><i class="fas fa-file-medical"></i> Cadastrar</a></li>
		            <li><a class="dropdown-item" href="?page=listar-cliente"><i class="fas fa-file-alt"></i> Listar</a></li>
		          </ul>
		        </li>
		        <!-------- Nav Formulario --------->
		        	<li class="nav-item dropdown">
		         	 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Formulário</a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="?page=cad-formulario"><i class="fas fa-file-medical"></i>  Criar</a></li>
		            <li><a class="dropdown-item" href="?page=listar-formulario"><i class="fas fa-file-alt"></i>  Listar</a></li>
		          </ul>
		        </li>
		 <!-------- Nav Agenda --------->
		       		<li class="nav-item dropdown">
		         	 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Agenda</a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="?page=cad-agenda"><i class="fas fa-calendar-alt"></i> Agendar</a></li>
		            <li><a class="dropdown-item" href="?page=listar-agenda"><i class="fas fa-file-alt"></i> Listar</a></li>
		          </ul>
		        </li>
		 <!-------- Nav Marcar Consulta --------->
		<div id="MarcarConsulta">
		        	<li class="nav-item dropdown">
		         	 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Marcar consulta</a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="?page=cad-consulta"><i class="fas fa-address-card"></i> Marcar</a></li>
		            <li><a class="dropdown-item" href="?page=listar-consulta"><i class="fas fa-address-book"></i> Marcadas</a></li>
		          </ul>
		        </li>
		</div>
		 <!-------- Nav Questionario --------->
		        	<li class="nav-item dropdown">
		         	 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Questionário</a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="?page=cad-questionario"><i class="fas fa-file-medical"></i> Criar</a></li>
		            <li><a class="dropdown-item" href="?page=listar-questionario"><i class="fas fa-file-alt"></i> Listar</a></li>
		          </ul>
		        </li>

		      </ul>
    		</div>
		</nav>
	</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						//configuração do banco de dados
						include("config.php");
						//inclusão das páginas
						switch(@$_REQUEST["page"]){
							//consultor
							case "cad-consultor":
								include("cad-consultor.php");
							break;
							case "editar-consultor":
								include("editar-consultor.php");
							break;
							case "salvar-consultor":
								include("salvar-consultor.php");
							break;
							case "listar-consultor":
								include("listar-consultor.php");
							break;
							//cliente
							case "cad-cliente":
								include("cad-cliente.php");
							break;
							case "editar-cliente":
								include("editar-cliente.php");
							break;
							case "salvar-cliente":
								include("salvar-cliente.php");
							break;
							case "listar-cliente":
								include("listar-cliente.php");
							break;
							//agenda
							case "cad-agenda":
								include("cad-agenda.php");
							break;
							case "editar-agenda":
								include("editar-agenda.php");
							break;
							case "salvar-agenda":
								include("salvar-agenda.php");
							break;
							case "listar-agenda":
								include("listar-agenda.php");
							break;
							//consulta
							case "cad-consulta":
								include("cad-consulta.php");
							break;
							case "editar-consulta":
								include("editar-consulta.php");
							break;
							case "salvar-consulta":
								include("salvar-consulta.php");
							break;
							case "listar-consulta":
								include("listar-consulta.php");
							break;
							//formulario
							case "cad-formulario":
								include("cad-formulario.php");
							break;
							case "editar-formulario":
								include("editar-formulario.php");
							break;
							case "salvar-formulario":
								include("salvar-formulario.php");
							break;
							case "listar-formulario":
								include("listar-formulario.php");
							break;
							//questionario
							case "cad-questionario":
								include("cad-questionario.php");
							break;
							case "editar-questionario":
								include("editar-questionario.php");
							break;
							case "salvar-questionario":
								include("salvar-questionario.php");
							break;
							case "listar-questionario":
								include("listar-questionario.php");
							break;
							case "listar-cliente_has_questionario":
								include("listar-cliente_has_questionario.php");
							break;
							default:
								include("main.php");
						}
					?>
				</div>
			</div>
		</div>

	<footer id="footerOA" class="container-fluid"><p>&copy; 2021 - Officer Assistant :: Todos os Direitos Reservados :: Projeto Interdisciplinar</p>
</footer>

		<script src="js/jquery-3.3.1.slim.min.js"></script>
   	 	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>

		<!--<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>-->
	</body>
</html>