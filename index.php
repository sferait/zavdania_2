<?php 
include ("db.php");
$page = "index";
?>
<html>
<head>
    <title>�������� �2</title>
	<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='all'>
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all'>
</head>
<body>
<div class="wrapper container">
	<header>
		<h2>�������� �2</h2>
	</header>
    <?php
		include("menu.php");
	?>
	<div class="row">
		<div class="col-sm-12">
	<?php
		$zpost = mysql_query("SELECT * FROM post ORDER BY id DESC",$db);
		$post = mysql_fetch_array($zpost);
		
		if (!empty($post['id'])) {
			
			do {
				printf("
					<div class='row'>
						<div class='col-sm-12 list_post'>
							<div class='row'>
								<div class='col-sm-10'>
									<h3>%s</h3>
								</div>
								<div class='col-sm-2'>
									<a href='article.php?id=%s'><button type='button' class='btn btn-primary btn-lg btn-block'>������</button></a><br>
								</div>
							</div>
							<hr>
							<div class='row'>
								<div class='col-sm-6'>
									���� ���������: %s
								</div>
								<div class='col-sm-6' style='text-align: right;'>
									ʳ������ ���������: %s
								</div>
							</div>
						</div>
					</div>
				",$post['name'],$post['id'], $post['date'], $post['peregliadu']);
			}
			while ($post = mysql_fetch_array($zpost));
		} else {
			echo "���� �� �� ����������� ����� �����. <a href=new_article.php>������ ������</a>";
		}
	?>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		�������: ���������� ����� �������������
	</div>
</footer>
</body>
</html>