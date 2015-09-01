<?php 
	$numero_rows=null;
	$numero_rows=sizeof($values);
?>

<div class="card padding-largo">
	<div class="row">
		<p><?=$numero_rows;?></p>
	</div>
	<?php foreach ($values as $row) {?>
			<div class="row">
				<div class="btn"><?=$row['timestamp'];?></div>
			</div>
	<?php } ?>
	
</div>