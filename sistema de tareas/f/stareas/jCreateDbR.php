<?php

// connection

include '../connection.php';

// module

$module = 'blog';
$action = 'add';

$u = $_GET["u"];
// set variables español
$titulo = $_POST['titulo'];
$blogtext = $_POST['blogtext'];
$blogtext2 = $_POST['blogtext2'];
$cat = $_POST['cat'];
$n = $_SESSION["userFullName"];
$status = 2;


// date



$date = $_POST['date']; 

    // insert
    $insert = $master -> prepare ("
        INSERT INTO blog
        (blogName, blogText, cat, dateT, blogText2, nombre, blogStatus )
        VALUES
        (?,?,?,?,?,?,?)
    ");

    // configure parameters
    $insert -> bind_param (
        "ssssssi",
        $titulo, $blogtext, $cat , $date, $blogtext2, $n, $status
    );

    // execute
    $insert -> execute();
    $id = 0;
    
    
 $blog = mysqli_query(
            $master, "SELECT * FROM blog
             order by blogId"
    );
    
    
     while ($r_blog = mysqli_fetch_array($blog)) {
        $id = $id + 1; 
    }
    
    
    
     foreach ($_FILES["archivo2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivo2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../image/' . $id . '/';
                $archivo2 = $ruta2 . $_FILES["archivo2"]["name"];
                if (!file_exists($ruta2)) {
                    mkdir($ruta2);
                }
                if (!file_exists($archivo2)) {
                    $resultado2 = @move_uploaded_file($_FILES["archivo2"]["tmp_name"], $archivo2);
                }if ($resultado2) {
                    
                } else {
                    echo "no guardo ";
                }
            } else {
                echo "Archivo no permitido o exede el tamaño";
            }
        }
    }
    foreach ($_FILES["archivo2"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivo2"]["name"][$key]) {
            $filename2 = $_FILES["archivo2"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source2 = $_FILES["archivo2"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio2 = '../image/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if (!file_exists($directorio2)) {
                mkdir($directorio2, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir2 = opendir($directorio2); //Abrimos el directorio de destino
            $target_path = $directorio2 . '/' . $filename2; //Indicamos la ruta de destino, así como el nombre del archivo
            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if (move_uploaded_file($source2, $target_path)) {
                echo "";
            } else {
                echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
            }
            closedir($dir2); //Cerramos el directorio de destino
        }
    }
    
    
    
    
    
    foreach ($_FILES["archivo3"]['tmp_name'] as $archivo3 => $tmp_name) {
        if ($_FILES["archivo3"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta3 = '../image2/' . $id . '/';
                $archivo3 = $ruta3 . $_FILES["archivo3"]["name"];
                if (!file_exists($ruta3)) {
                    mkdir($ruta3);
                }
                if (!file_exists($archivo3)) {
                    $resultado3 = @move_uploaded_file($_FILES["archivo3"]["tmp_name"], $archivo3);
                }if ($resultado3) {
                    
                } else {
                    echo "no guardo ";
                }
            } else {
                echo "Archivo no permitido o exede el tamaño";
            }
        }
    }
    foreach ($_FILES["archivo3"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivo3"]["name"][$key]) {
            $filename3 = $_FILES["archivo3"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source3 = $_FILES["archivo3"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio3 = '../image2/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if (!file_exists($directorio3)) {
                mkdir($directorio3, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir3 = opendir($directorio3); //Abrimos el directorio de destino
            $target_path = $directorio3 . '/' . $filename3; //Indicamos la ruta de destino, así como el nombre del archivo
            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if (move_uploaded_file($source3, $target_path)) {
                echo "";
            } else {
                echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
            }
            closedir($dir3); //Cerramos el directorio de destino
        }
    }
    
    
    
    foreach ($_FILES["archivo4"]['tmp_name'] as $archivo4 => $tmp_name) {
        if ($_FILES["archivo4"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta4 = '../image3/' . $id . '/';
                $archivo4 = $ruta4 . $_FILES["archivo4"]["name"];
                if (!file_exists($ruta4)) {
                    mkdir($ruta4);
                }
                if (!file_exists($archivo4)) {
                    $resultado4 = @move_uploaded_file($_FILES["archivo4"]["tmp_name"], $archivo4);
                }if ($resultado4) {
                    
                } else {
                    echo "no guardo ";
                }
            } else {
                echo "Archivo no permitido o exede el tamaño";
            }
        }
    }
    foreach ($_FILES["archivo4"]['tmp_name'] as $key => $tmp_name) {
        //Validamos que el archivo exista
        if ($_FILES["archivo4"]["name"][$key]) {
            $filename4 = $_FILES["archivo4"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source4 = $_FILES["archivo4"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

            $directorio4 = '../image3/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if (!file_exists($directorio4)) {
                mkdir($directorio4, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
            }

            $dir4 = opendir($directorio4); //Abrimos el directorio de destino
            $target_path = $directorio4 . '/' . $filename4; //Indicamos la ruta de destino, así como el nombre del archivo
            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if (move_uploaded_file($source4, $target_path)) {
                echo "";
            } else {
                echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
            }
            closedir($dir4); //Cerramos el directorio de destino
        }
    }    
    
    
    
    
    
    
    
    
    
    
    
    // trace

    $trace = $master -> prepare ("
        INSERT INTO trace
        (userId, module, action, itemId)
        VALUES
        (?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
    
