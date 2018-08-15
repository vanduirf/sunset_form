<html>
<head></head>
<body>
	<?php

		//Atribiu os valores nas variáveis
		$_nome = $_POST["nome"];
		$_cpf = $_POST["cpf"];
		$_email = $_POST["email"];
		$_setor = $_POST["setor"];
		$_tema = $_POST["tema"];
		$_descricao = $_POST["descricao"];
		$_material= $_POST["material"];

		//Checa o CPF informado e limpa caracteres que não sao digitos
		require_once("functions.php");
		$cpf_c = preg_replace( '/[^0-9]/is', '', $_cpf );
		if (validaCPF($_cpf)== true)
		{
			//Cria a conexão com o BD
			$_link = new mysqli("localhost", "root", "star481", "sunset");

			//Checa a conexão
			if ($_link->connect_error) 
				{
				die("Conexão com o banco de dados falhou: ".$_link->connect_error);
				}
			else
				{
			//Confere se já existe cadastro do palestrante
					$_sql_cpf = "SELECT COUNT(*) AS cntcpf FROM instrutores WHERE cpf = '".$cpf_c."';";
					$_result = mysqli_query($_link,$_sql_cpf);
					$_row = mysqli_fetch_array($_result);
					$_count = $_row['cntcpf'];
					if ($_count > 0) 
					{
						echo "Ops, vimos que você já nos enviou uma proposta de palestra. Ficamos contentes com seu engajamento, contudo pedimos que guarde esta ideia para a próxima edição, pois cada pessoa pode neste momento sugerir uma ideia.";
					}
					else
					{										
			//Cria a query para inserir as informações de cadastro
						$_sql = "INSERT INTO instrutores (cpf,nome,email,setor,tema,descricao,material) VALUES ('".$cpf_c."','".$_nome."', '".$_email."', '".$_setor."','".$_tema."','".$_descricao."','".$_material."');"; 	
				 	
				//Efetua a query dentro do banco 	
						if ($_link->query($_sql) === TRUE) 
						  	{
				      			echo "Seu cadastro foi efetuado com sucesso!";
						  	} 
					  	else 
						  	{
				      		echo "Erro no cadastro: " . $_sql . "<br>" . $_link->error;
						  	}
					}
			  	}
				$_link->close();
		}
		else
		{
			echo("CPF invalido!");
		}
	?>
</body>
</html>
