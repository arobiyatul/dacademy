<?php
/* @var $this yii\web\View */
?>


<h1>Seminar:<?php echo $judulseminar ?></h1>
<h3>Pembicara : <?php echo $pembicara ?></h3>
<?=$pembicara?>

Daftar Peserta :
<ol>
	 <?php foreach ($pesertas as $data): ?>
	 	<li><?=$data?></li>
	 <?php endforeach; ?>
</ol>