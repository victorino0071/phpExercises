<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileSize</title>
</head>
<body>

    <?php

        if(isset($_POST['submit'] )){
            $archiveTemp = $_FILES['uploadArchive']['tmp_name'];
            $archiveName = $_FILES['uploadArchive']['name'];
            $archiveSize = $_FILES['uploadArchive']['size'];
            $archiveLimit = 100*1024;
            $archiveDestiny = './uploadedArchives/'.$archiveName;

            
            if($archiveSize < $archiveLimit){
                if(move_uploaded_file($archiveTemp, $archiveDestiny)){
                    echo "Arquivo mandado com sucesso";
                }else{
                    echo "Falha ao mandar o arquivo \n";
                    echo $_FILES['uploadArchive']['error'];
                }                
            }else{
                echo "Arquivo muito grande ". $archiveSize/1024 ."KB.\n";
                echo "Arquivo Limite de ". $archiveLimit/1024 ."KB.";
            }
        }


    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method= 'post' enctype='multipart/form-data'>
        <input type="file" name="uploadArchive">
        <input type="submit" name="submit" value='archive'>
    </form>

</body>

</html>