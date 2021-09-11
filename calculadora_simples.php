<?php
//declarando as variaveis, seus tipos de dados e setando valores iniciais para 0
	$valor1 = (float) 0;
	$valor2 = (float) 0;

	//radio é um elemento que por obrigatoriedade o neme tem que ser igual entre as opções em radio, fazendo com que apenas uma opção seja selecionada por vez 

	$opcao = (string) null;
	$resultado = (float) 0;

//Validação para testar se o botão calcular foi clicado
if(isset($_POST['btncalc']))
{
	//recebendo dados do formulário através do metodo POST
	$valor1 = $_POST ['txtn1'];
	$valor2 = $_POST ['txtn2'];
	$opcao = $_POST ['rdocalc'];
	$resultado = (float) 0;

if($valor1 == "" || $valor2 == "")
{	//Utilizamos estilização CSS dentro deste echo para ser lido pelo navegador
	//caso o CSS não atualize dÊ CRTL+F5
	echo ("<span class='msgErro'>Não é possível calcular com caixas vazias</span>");
}else
{
	// processamento para definir qual calculo será realizado
		if($opcao == 'somar')
		{
			$resultado = $valor1 + $valor2;
		}
		elseif($opcao == 'subtrair')
		{
			$resultado = $valor1 - $valor2;
		}
		elseif($opcao == 'multiplicar')
		{
			$resultado = $valor1 * $valor2;
		}
		elseif($opcao == 'dividir')
		{
			$resultado = $valor1 / $valor2;
		}

	}//validação de caixa vazia

}//validação se o botão foi clicado


?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value="0" > <br>
						Valor 2:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
							<?php echo ($resultado); ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

