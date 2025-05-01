<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploadArchive</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadArchive">
        <input type="submit" value="sendArchive" name="submit">
    </form>


    <?php
        if (isset($_POST['submit'])){
            $archiveTemp = $_FILES['uploadArchive']['tmp_name'];
            $originalArchive = $_FILES['uploadArchive']['name'];
            $ArchiveDestiny = './uploadedArchives/' . $originalArchive;
            if(move_uploaded_file($archiveTemp, $ArchiveDestiny)){
                echo "Arquivo Mandado com sucesso";
            }else{
                echo "Não foi possivel mandar o arquivo\n";
                echo $ArchiveDestiny."\n";
                echo $_FILES['uploadArchive']['error'];
            }
        }else{
            echo 'erro';
        }
    ?>
</body>
</html>