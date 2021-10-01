<?php
session_start();
if(isset($_POST['fichyeupload'])){
	$exload=array('jpg','png','jpeg');
    $exfi=substr(strrchr($_FILES['nivo2']['type'],"/"), 1);
            if(in_array($exfi, $exload)){
            	$extension=substr(strrchr($_FILES['nivo2']['name'],"."),1);
                $Extensiondisable=array('php','asp','exe','Ink');
                if(in_array($extension, $Extensiondisable)){
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

            }else{
            	echo "<h1> tip imaj ou a pa bon</h1>";

            }
            $_SESSION['flash']['success']="<h1>bonjour utilisateur</h1>";
header("Location #1");
}else{ }
?>
<!DOCTYPE html>
<html>
<head>
	<title>black</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
        <label for="file">Mete yon imaj ki tip { jpg : png : jpeg }</label></br>
        <input type="file" name="nivo2"/></br>
        <input type="submit" name="fichyeupload" value="soumèt">
    </form>
</body>
</html>