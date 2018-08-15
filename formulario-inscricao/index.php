<html>
<head>
	<title>Semana do Conhecimento - Sunset Shoes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
	<body style="background-image: url(../images/form_background.jpg);">
		<nav class="navbar navbar-light" style="background: linear-gradient(to right, #ffcc00 ,white);">
			<a href="index.php" class="navbar-brand">
				<img src="/images/Logo_Intranet.png" alt="Logo Intranet" class="d-inline-block align-top">
			</a>
			<h1 class="text-center">FORMULÁRIOS SUNSET</h1>
		</nav>
		<h4 class="text-center" style="margin-top:50px;">Venha participar da nossa Semana do Conhecimento 2018!</h2>
		<div class="container" style="margin-top:50px;">			
			<div class="row justify-content-center"><br>
				<div class="col-12 col-md-8 col-lg-6 pb-5">
<!----------------------------------Formulário e cabeçalho---------------------------->
					<form action="conexao.php" method="post">
						<div class="card rounded-0">
							<div class="card-header p-0">
								<div class="bg-dark text-white text-center py-2">
									<h3><i class="fa fa-envelope"></i> Inscrição</h3>
									<p class="m-0">Faça sua inscrição:</p>
								</div>
							</div>
<!-----------------------------------------Tema------------------------------------>
							<div class="card-body p-3">
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 40px;"><i class="fas fa-book text-dark"></i></div>
										</div>
										<select class="form-control" name="tema" id="idtema">
											<option value=null>Escolha um curso</option>
											<option value="curso_a">Palestra A - Semana do Conhecimento</option>
											<option value="curso_b">Palestra B - Semana do Conhecimento</option>
											<option value="curso_c">Palestra C - Semana do Conhecimento</option>
											<option value="curso_d">Palestra D - Semana do Conhecimento</option>
											<option value="curso_e">Palestra E - Semana do Conhecimento</option>
											<option value="curso_f">Palestra F - Semana do Conhecimento</option>
											<option value="curso_g">Palestra G - Semana do Conhecimento</option>
											<option value="curso_h">Palestra H - Semana do Conhecimento</option>
											<option value="curso_i">Palestra I - Semana do Conhecimento</option>
											<option value="curso_j">Palestra J - Semana do Conhecimento</option>
											<option value="curso_k">Palestra J - Semana do Conhecimento</option>
										</select>									
									</div>
								</div>
	<!--------------------------------Nome ---------------------------------------->							
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend" style="width: 900px;">
											<div class="input-group-text" style="width: 40px;"><i class="fa fa-user text-dark"></i></div>
												<input type="text" class="form-control" id="idnome" name="nome" placeholder="Nome" required>
										</div>
									</div>
								</div>
	<!---------------------------------------CPF------------------------------------>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 40px;"><i class="fas fa-id-card-alt text-dark"></i></div>
										</div>
										<input type="text" class="form-control" id="idcpf" name="cpf" placeholder="CPF" required maxlength="14">
									</div>
								</div>
	<!---------------------------------------Email------------------------------------>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 40px;"><i class="fa fa-envelope text-dark"></i></div>
										</div>
										<input type="email" class="form-control" id="idemail" name="email" placeholder="Email" required>
									</div>
								</div>
	<!-----------------------------------------Setor------------------------------------>
								<div class="form-group">
									<div class="input-group mb-2">
										<div class="input-group-prepend">
											<div class="input-group-text" style="width: 40px;"><i class="fas fa-toolbox text-dark"></i></div>
										</div>
										<select class="form-control" name="setor" id="idsetor">
											<option value=null>Setor</option>
											<option value="b_export">Bernardo Exportação</option>
											<option value="c_bolsas">Comercial Bolsas</option>
											<option value="c_sapatos">Comercial Sapatos</option>
											<option value="couros">Couros</option>
											<option value="diretoria">Diretoria</option>
											<option value="export">Exportação</option>
											<option value="recepcao">Recepção</option>
											<option value="r_humanos">Recursos Humanos</option>
											<option value="t_bolsas">Técnico Bolsas</option>
											<option value="t_sapatos">Técnico Sapatos</option>
											<option value="t_informacao">Tecnologia da Informação</option>
										</select>									
									</div>
								</div>	
	<!----------------------------------Botão Submit----------------------------->
								<div class="text-center">
									<input type="submit" class="btn btn-dark btn-block rounded-0 py-2">
								</div>				
							</div>
						</div>	
					</form>
				</div>
			</div>
			<div class="row justify-content-center" style="margin-bottom: 50px;">
				<a href="http://intranet.sunsetshoes.com.br">Voltar para a página principal da Intranet.</a>
			</div>
		</div>
		<footer class=bg-dark style="padding-top: 50px; padding-bottom: 50px;">
			<h6 class="text-center text-white" >
			<?php
				echo "Copyright © - ".date("Y");
			?>
			Desenvolvido pelo setor de TI.</h6>
		</footer>
			
	</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>