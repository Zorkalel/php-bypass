<?php
session_start();
if(isset($_POST['fichyeupload'])){
	$exload=array('jpeg','jpg');
    $exfi=substr(strrchr($_FILES['nivo2']['type'],"/"), 1);
    $extension=substr(strrchr($_FILES['nivo2']['name'],"."),1);
    $Extensionactivated=array('jpg','jpeg');
            if($exfi === $exload[0] && $exfi === $exload[1] || !in_array($extension, $Extensionactivated)){
                    echo "<h1> tip fichye sa pa otorize sou server nou an</h1>";
            }else{
                 echo "<h3> tip imaj ou a bon et upload la reyisi</h3>";
                    #################CHEMIN DE FICHIER###########################
                    $chemin="C:/xampp/htdocs/aide/exo/upload/".$_FILES['nivo2']['name'];
                    $dFichye=move_uploaded_file($_FILES['nivo2']['tmp_name'],$chemin);
                    ##############################################################
                    if($dFichye){
                     echo "<h1> upload reyisi</h1>";
                    }else{
                     echo "<h1> gen echek diran upload la</h1>";
                    }
            }
}else{ }
?>
<!DOCTYPE html>
<html>
<head>
	<title>white</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
        <label for="file">Mete yon imaj ki tip { jpeg oswa jpg }</label></br>
        <input type="file" name="nivo2"/></br>
        <input type="submit" name="fichyeupload" value="soumèt">
    </form>
</body>
</html>