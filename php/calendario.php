<?php 
require_once("../libraries/head.php")
?>
<div class="conteudo-modal">
<table width="100%">
	<th>Domingo</th>
	<th>Segunda</th>
	<th>Terça</th>
	<th>Quarta</th>
	<th>Quinta</th>
	<th>Sexta</th>
	<th>Sábado</th>

	<?php for($l=0; $l<$linhas; $l++ ):  ?>

	<tr>
		<?php for($q=0; $q<7 ; $q++ ): ?>
		
				
		<?php $w = strtotime(($q+ ( $l * 7 )).'days', strtotime($data_retirada) ); 
			$m =date('d-m-Y', $w);
			$m2 = date('m', $w);

			if($m2 == $_GET['mes']){
				echo '<td class="mes-atual">';
			} else {
				echo '<td>';
			}


		?>	
			
						
			<?php echo "<center><i><b>".$m."</b></i><center><br/><br/>";

				$m = strtotime($m);



				foreach ($lista as $item) {
					$dr_retirada = strtotime($item['data_retirada']); 
					$dr_entrega = strtotime($item['data_entrega']);
					

					if( $m >= $dr_retirada && $m <= $dr_entrega) {
						echo "#".$item['id']." - ".$item['nome_cliente']."<br/> (Kit #".$item['id_kit'].")<br/><hr>";	
					}

				}

			?> 

			</td>
		<?php endfor; ?>
	</tr>
		
	<?php endfor;  ?>
</table>

<?php require_once("../libraries/rodape.php") ?>
</div>