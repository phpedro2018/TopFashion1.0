<?php 
require_once ("../php/config.php");
require_once("../php/sessao.php");
require_once("../libraries/nav.php");
require_once("../libraries/head.php");
require_once("../libraries/menu.php");
$reservas = new Reservas($pdo); // injecao de dependencia
$kits = new Kits($pdo);
?>

<center><h1>Reservas em Andamento / *Modo Calendário</h1></center>





<div class="conteudo-modal">

<div class="col-1">
<form method="GET">

<div class="col-1">
	<select name="mes">
		<option value="01" > Janeiro </option>
		<option value="02" > Fevereiro </option>
		<option value="03" > Março </option>
		<option value="04" > Abril </option>
		<option value="05" > Maio </option>
		<option value="06" > Junho </option>
		<option value="07" > Julho </option>
		<option value="08" > Agosto </option>
		<option value="09" > Setembro </option>
		<option value="10" > Outubro </option>
		<option value="11" > Novembro </option>
		<option value="12" > Dezembro </option>
	</select>
</div>

<div class="col-1">
	<select name="ano">
		<?php for($q=date('Y'); $q>=2017; $q--): ?>
			<option> <?php echo $q; ?> </option>
		<?php endfor; ?>
	</select>
</div>
	
<div class="col-1">
	<input type="submit" value="Ver Calendário">
</div>	
</form>

</div>


<?php 

if(empty($_GET['ano'])) {
	exit;
}

$data = $_GET['ano'].'-'.$_GET['mes'];
$dia1 = date('w' , strtotime($data.'-01'));
$dias = date('t', strtotime($data)); 
$linhas = ceil(($dia1 + $dias) / 7); 

$dia1 = -$dia1;
$data_retirada = date('Y/m/d', strtotime($dia1.' days', strtotime($data))) ;
$data_entrega = date('Y/m/d', strtotime((($dia1 + ($linhas*7) -1)) .' days', strtotime($data)) );  


$lista = $reservas->getReservas($data_retirada, $data_entrega); 
/*
foreach ($lista as $item){
	$data1 = date('d/m/Y', strtotime($item['data_inicio']));
	$data2 = date('d/m/Y', strtotime($item['data_fim']));
	echo $item['pessoa'].' Reservou o carro: '.$item['id_carro'].' entre '.$data1.' e '.$data2.'<br/>';
}
*/
?>
</div>
<hr/> 

<?php 
require '../php/calendario.php';
?>