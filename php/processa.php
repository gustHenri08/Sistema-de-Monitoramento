<?php
session_start();
//Conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
$datai = $_REQUEST['datai'];
//Converter a data e hora do formato brasileiro para o formato do Banco de Dados
$datai = explode(" ", $datai);
list($datei, $horai) = $datai;
$data_sem_barrai = array_reverse(explode("/", $datei));
$data_sem_barrai = implode("-", $data_sem_barrai);
$data_sem_barrai = $data_sem_barrai . " " . $horai;

$datas = $_REQUEST['datas'];

$datas = explode(" ", $datas);
list($dates, $horas) = $datas;
$data_sem_barras = array_reverse(explode("/", $dates));
$data_sem_barras = implode("-", $data_sem_barras);
$data_sem_barras = $data_sem_barras . " " . $horas;

//Receber os dados do formulário
$cadeia = $_REQUEST['cadeia'];
$nomepri = $_REQUEST['nomepri'];
$nomem = $_REQUEST['nomem'];
$nomep = $_REQUEST['nomep'];
$motivo = $_REQUEST['motivo'];
//$datai = $_REQUEST['datai'];
$tipo = $_REQUEST['tipo'];
$obs_gerais= $_REQUEST['obs_gerais'];
$select_niveis_acesso = $_REQUEST ['select_niveis_acesso'];


//Salvar no BD
$resultado_usuariopres = "INSERT INTO usuariospres (niveis_acesso_id,datai, datas,cadeia, nomepri,nomem, nomep, motivo, tipo,obs_gerais ) VALUES 
('$select_niveis_acesso','$data_sem_barrai','$data_sem_barras','$cadeia','$nomepri','$nomem', '$nomep', '$motivo', '$tipo','$obs_gerais' )";
$resultado_usuariopres = mysqli_query($conn, $resultado_usuariopres);

//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<div class='alert alert-success'> Data cadastrada com sucesso </div>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'> Erro ao cadastradar a data </div>";
	header("Location: index.php");
}
if(mysqli_affected_rows($conn) != 0){
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
		<script type=\"text/javascript\">
			alert(\"Usuario cadastrado com Sucesso.\");
		</script>
	";	
}else{
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
		<script type=\"text/javascript\">
			alert(\"O Usuario não foi cadastrado com Sucesso.\");
		</script>
	";	
}

