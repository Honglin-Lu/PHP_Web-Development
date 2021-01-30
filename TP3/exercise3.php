<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Upload</title>
    </head>
    <body>
        <h1>This program allows you to download an image in order to display its name, 
        type, and size using superglobal variables, conditionals, and a switch</h1>
        <form method="post" action="exercise3.php" enctype="multipart/form-data" >
            <input type = "file" id = "choose" name = "choose">
            <input type = "submit" name="submit" value = "Upload">
        </form>
        <?php
        if(isset($_POST['submit'])){
            //echo "<pre>";
            //print_r($_FILES);
            $format = null;
            switch ($_FILES['choose']['type']){
                case 'image/jpeg': $format = 'jpg'; break;
                case 'image/gif': $format = 'gif'; break;
                case 'image/png': $format = 'png'; break;
                default : break;
            } 
            if ($format == 'jpg' || $format == 'gif' || $format == 'png'){
                echo "<br>";
                echo "Name of the image file uploaded : {$_FILES['choose']['name']}";
                echo "<br>";
                echo "Type of the image file uploaded : .$format";
                echo "<br>";
                $size = $_FILES['choose']['size']/1000000;
                echo "Size of the image file uploaded : $size Mega Bytes";
            }else{
                echo "The file you uploaded is not a jpg, gif, or png image.";
            }
        }
        ?>
    </body>
</html>


