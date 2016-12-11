<?php 
include ("db.php");
if (isset($_GET['id'])) {$id =$_GET['id']; }
$zpost = mysql_query("SELECT * FROM post WHERE id='$id' ORDER BY id DESC",$db);
$post = mysql_fetch_array($zpost);
$peregliadu = $post['peregliadu'] + 1;
$add_peregliad = mysql_query("UPDATE post SET peregliadu='$peregliadu' WHERE id='$id'",$db);
?>
<html>
<head>
    <title><?php $post['name']; ?></title>
	<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'>
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>
</head>
<body>
<div class="wrapper container">
	<header>
		<h2>Завдання №2</h2>
	</header>
    <?php
		include("menu.php");
	?>
	<div class="row">
		<div class="col-sm-12">
			<?php
				printf("
					<div class='row'>
						<div class='col-sm-12 list_post'>
							<h3>%s</h3><hr>%s<hr>
							<div class='row'>
								<div class='col-sm-6'>
									Дата додавання: %s
								</div>
								<div class='col-sm-6' style='text-align: right;'>
									Кількість переглядів: %s
								</div>
							</div>
						</div>
					</div>
				",$post['name'],$post['text'], $post['date'], $peregliadu);
			?>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		Виконав: Снітинський Тарас Володимирович
	</div>
</footer>
</body>
</html>