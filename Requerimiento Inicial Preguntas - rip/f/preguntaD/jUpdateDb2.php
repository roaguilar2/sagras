<?php
// connection

include '../connection.php';

// module
$module = 'sp';


$gestiontalentoName  = $_POST['nombreE'];
$gestiontalentoLast = $_POST['apellido'];
$gestiontalentoDate = $_POST['fecha'];
$gestiontalentoTlf = $_POST['telefono'];
$gestiontalentoCorreo = $_POST['correo'];
$gestiontalentoDire = $_POST['direccion'];
$gestiontalentoCiudad = $_POST['ciudad'];
$gestiontalentoCp = $_POST['cp'];
$countryId = $_POST['pais'];
$gestiontalentoCs = $_POST['sector'];

$gestiontalentoAs = $_POST['as'];
$gestiontalentoUc = $_POST['uc'];
$gestiontalentoExp = $_POST['exp'];
$gestiontalentoHabilidades = $_POST['habilidades'];
$gestiontalentoLogro = $_POST['logro'];
$gestiontalentoSagra = $_POST['sagra'];
$gestiontalentoStatus = 2;
$gestiontalentoN1 = $_POST['n1'];
$gestiontalentoA1 = $_POST['a1'];
$gestiontalentoT1 = $_POST['t1'];
$gestiontalentoE1 = $_POST['e1'];
$gestiontalentoN2 = $_POST['n2'];
$gestiontalentoA2 = $_POST['a2'];
$gestiontalentoT2 = $_POST['t2'];
$gestiontalentoE2 = $_POST['e2'];


    $update = $master -> prepare ("
        UPDATE gestiontalento
        SET
        gestiontalentoName = ?,
        gestiontalentoLast = ?,
        gestiontalentoDate = ?,
        gestiontalentoTlf = ?,
        gestiontalentoCorreo = ?,
        gestiontalentoDire  = ?,
        gestiontalentoCiudad  = ?,
        gestiontalentoCp  = ?,
        countryId  = ?, 
        gestiontalentoCs = ?,
        gestiontalentoAs  = ?,
        gestiontalentoUc = ?,
        gestiontalentoExp = ?, 
        gestiontalentoHabilidades = ?,
        gestiontalentoLogro = ?,
        gestiontalentoSagra = ?,
        gestiontalentoStatus = ?,
        gestiontalentoN1 = ?,
        gestiontalentoA1 = ?, 
        gestiontalentoT1 = ?,
        gestiontalentoE1 = ?,
        gestiontalentoN2 = ?,
        gestiontalentoA2 = ?,
        gestiontalentoT2 = ?,
        gestiontalentoE2 = ? 
        WHERE
        gestiontalentoId = ?
    ");

    $update -> bind_param (
        "ssssssssiisssssssssssssssi",
        $gestiontalentoName, $gestiontalentoLast, $gestiontalentoDate, 
        $gestiontalentoTlf, $gestiontalentoCorreo, $gestiontalentoDire, $gestiontalentoCiudad, $gestiontalentoCp, $countryId, 
        $gestiontalentoCs, $gestiontalentoAs, $gestiontalentoUc, $gestiontalentoExp,
        $gestiontalentoHabilidades, $gestiontalentoLogro, $gestiontalentoSagra, $gestiontalentoStatus, $gestiontalentoN1, $gestiontalentoA1,
        $gestiontalentoT1, $gestiontalentoE1, $gestiontalentoN2, $gestiontalentoA2, $gestiontalentoT2, $gestiontalentoE2,  $_GET["cid"]
    );
    
         // execute
         $update -> execute();
         $id = $_GET["cid"];

         foreach ($_FILES["archivo2"]['tmp_name'] as $archivo2 => $tmp_name) {
        if ($_FILES["archivo2"]["error"] > 0) {
            echo "";
        } else {

            if (1 == 1) {

                $ruta2 = '../../../../curriculum/' . $id . '/';
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

            $directorio2 = '../../../../curriculum/' . $id . '/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
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


   

 echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";
    
    
    
    
    
    