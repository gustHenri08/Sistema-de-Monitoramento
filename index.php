<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Datetimepicker</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1>Cadastrar Data</h1>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<form  action="processa.php" method="POST">
			


	Níveis de Acesso: 
				<select name="select_niveis_acesso">
					<option>Selecione</option>
					<?php
						$result_niveis_acessos = "SELECT * FROM niveis_acessos";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>">
							<?php echo $row_niveis_acessos['nome']; ?></option> <?php
						}
					?>
				</select><br><br>

    <div class="form-group">
        <input name="nomepri" type="name" placeholder="NOME DO PRISIONEIRO"/>
    </div>
    <div class="form-group">
        <input name="nomem" type="name" placeholder="NOME DA MÃE"/>
    </div>
     
   <div class="form-group">
         <input name="nomep" type="name" placeholder="NOME DO PAI"/>
    </div>

  <div class="form-group">
       <input name="motivo" type="text" placeholder="MOTIVO"/>
    </div>

    <div class="form-group">
       <input name="origem" type="text" placeholder="ORIGEM"/>
    </div>
  <div class="form-group">
       <input name="tipo" type="text" placeholder="CRIME DE REPERCUSSÃO"/>
    </div>

   <div class="form-group">
   	
       <input name="obs_gerais" type="text" placeholder="OBS.GERAIS "/>
    </div>


				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Data e Hora</label>
					<div class="col-sm-10">
						<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
			
				<input type="text" class="form-control" name="datai" placeholder="Data da visita">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</span>
						</div> 
					</div>
				</div>

                 	<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Data e Hora</label>
					<div class="col-sm-10">
						<div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
			
				<input type="text" class="form-control" name="datas" placeholder="Data da visita">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</span>
						</div> 
					</div>
				</div>
                

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datetimepicker.min.js"></script>
		<script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
		<script type="text/javascript">
			$('.data_formato').datetimepicker({
				weekStart: 1,
				todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1,
                language: "pt-BR",
                //startDate: '+0d'
			});
		</script>
	</body>
</html>