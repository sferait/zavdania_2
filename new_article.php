<?php 
include ("db.php");
$page = "new_article";
?>
<html>
<head>
    <title>���� ������</title>
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
			<form action='add_article.php' method='post' role='form'>
				<div class='form-group'>
					<label for='name'>����� �����:</label>
					<input name='name' type='text' class='form-control' id='name' placeholder='����� �����'>
				</div>
				<div class='form-group'>
					<label for='text'>����� �����:</label>
					<textarea name='text' class='form-control' id='text' rows='10'></textarea>
				</div>
				<button name='submit' type='submit' class='btn btn-primary btn-lg btn-block'>������ ������</button>
			</form>
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