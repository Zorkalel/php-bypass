<?php session_start();
if(isset($_POST['fichyeupload'])){
	$exload=array(
		'jpg'=>'image/jpg',
		'png'=>'image/png'
	);
            if($_FILES['nivo2']['type'] != $exload['jpg'] && $_FILES['nivo2']['type'] != $exload['png']){
            	echo "<h1> tip imaj ou a pa bon</h1>";
            }else{
            	echo "<h1> imaj ou a bon</h1>";
                ##################CHEMIN DE FICHIER###########################
                $chemin="/var/www/html/aide/exo/upload/".$_FILES['nivo2']['name'];
                $dFichye=move_uploaded_file($_FILES['nivo2']['tmp_name'],$chemin);
                ##############################################################
                if($dFichye){
                	echo "<h1> upload reyisi</h1>";
                }else{
                	echo "<h1> gen echek diran upload la</h1>";
                }

            }
}
?>
<?php echo exec('whoami'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>content</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
        <label for="file">Mete yon imaj ki tip { JPG }</label></br>
        <input type="file" name="nivo2"/></br>
        <input type="submit" name="fichyeupload" value="soumèt">
    </form>
</body>
</html>