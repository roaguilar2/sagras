<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Requerimiento</a>
            <a href="#!" class="breadcrumb ">Lista</a>
            <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Requerimiento">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                <i class="material-icons blue-text">forum</i>
            </a>
            <!-- boton leyenda -->
            <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="leyenda">
                <i class="material-icons blue-text">local_offer</i>
            </a>
            <!-- fin boton leyenda -->
            <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                <?php echo $_SESSION["userFullName"];?>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l12 m-t-5">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="blue-text p-l-10">Requerimiento</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-text">cancel</i></a>
                            <a href="<?php if ($_SESSION["userAdmin"] == 4) { echo "javascript: void(0)"; } else { echo $link = $allow -> jCreate == 1 ? "../c/{$module}.php?m=create" : "javascript: void(0)"; } ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons <?php if ($_SESSION["userAdmin"] == 4) { echo "grey-text"; } else { echo $color = $allow -> jCreate == 1 ? "blue-text" : "grey-text"; } ?>">add_circle</i>
                                    </a>
                            <!-- botones para funcion para tomar captura este es el boton -->    
                            <a class="right  tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                            <a class="right  tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                            <a class="right " id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                            <!-- botones para funcion para tomar captura -->
                            
                            <!-- boton instrucciones -->
                            <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="Instruciones">
                                <i class="material-icons blue-text">local_library</i>
                            </a>
                            <!-- final boton instrucciones -->
                            
                            <!-- boton atras -->        
                            <a href="javascript: history.go(-1);" class="tooltipped right blue-text " data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-text">undo</i>
                            </a>
                            <!-- fin de boton atras -->
                            
                            
                        </div>
                    </div>
                    
                    <!-- funcion para tomar captura se utiliza antes del card  -->       
                    <div id="main">
                         <div id="screenshot">
                    <!--  end funcion para tomar captura -->
                    
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            

                          
                                    <div class="m-t-20"></div>

                             <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                    <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td class="td-block">Nombre</td>
                                               <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                <td class="center">Consultar</td>
                                                <?php } else { ?>
                                                <td>Acci&oacute;n</td>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cp = $_cp -> fetch_object()) { ?>
                                            <tr>
                                               <td><?php echo $cp -> requerimientoName ?></td>
                                               
                                               <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                        <td class="center">
                                                            <a target="_blank" href='../plugins/pdf/doc/requerimiento.php?id=<?php echo $cp -> requerimientoId; ?>' class='tooltipped' data-position='left' data-tooltip='Ver'><i class='material-icons blue-text'>search</i></a>
                                                        </td>
                                                        <?php } else { ?>
                                                        <td>
                                                            <a href="
                                                                <?php
                                                                $f = $cp -> requerimientoId;
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;

                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=update&requerimientoId={$cp -> requerimientoId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    echo $link = $allow -> jRead == 1 ? "../c/{$module}.php?m=update&requerimientoId={$cp -> requerimientoId}" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped" data-position="left" data-tooltip="Consultar"><i class="material-icons rotate-90 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jRead == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">search</i></a>
                                                            <a href="
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=update2&cid={$cp -> requerimientoId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=update2&cid={$cp -> requerimientoId}" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar"><i class="material-icons 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">edit</i></a>
                                                            <a href="
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=delete&cid={$cp -> requerimientoId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    echo $link = $allow -> jDelete == 1 ? "../c/{$module}.php?m=delete&cid={$cp -> requerimientoId}" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "red-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jDelete == 1 ? "red-text" : "grey-text";
                                                                }
                                                                ?>">delete</i></a>
                                                                <a href="
                                                                <?php
                                                                $f = $cp -> requerimientoId;
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;

                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=create2&requerimientoId={$cp -> requerimientoId}&serviceId={$cp -> serviceId }" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    echo $link = $allow -> jRead == 1 ? "../c/{$module}.php?m=create2&requerimientoId={$cp -> requerimientoId}&serviceId={$cp -> serviceId }" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped" data-position="left" data-tooltip="siguiente"><i class="material-icons rotate-90 
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jRead == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">file_upload</i></a>
                                                        </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <?php } ?>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                      
                        </div>
                    </div>
                    <!-- funcion para tomar captura se usa despues de cerrar el card -->        
                           </div>
                        </div>
                    <!--  end funcion para tomar captura -->
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                            <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</main>

<div id="help" class="modal">
<div class="modal-content">
 <?php
 $_m = mysqli_query($master, "
            SELECT * FROM modal
            WHERE moduleController = '" . $module . "'
        ");
while ($m = $_m -> fetch_object()) { ?>
    <h5><p class=""> <?php echo $m -> modalName ;?></p></h5>
    <p class=""><?php  echo $m -> modalText ;?></p>
    
  <?php  }?>
</div>
<div class="modal-footer">
    <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
</div>
</div>

<?php include '../v/support/modalAdd.php'; ?>

<!-- funcion java para que funcionen los screenshot se usa al final de todo el codigo-->    
<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-proyecto|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
<!--final de funcion java para que funcionen los screenshot-->

<!-- para usar los modales help, ayuda y otros -->
<div id="help" class="modal ">
        <div class="modal-content">
            <?php 
            $module ="ac";
         $_m = mysqli_query($master, "
                    SELECT * FROM modal
                    WHERE moduleController = '" . $module . "'
                ");
        while ($m = $_m -> fetch_object()) { ?>
            <h5><p class=""> <?php echo $m -> modalName ;?></p></h5>
            <p class=""><?php  echo $m -> modalText ;?></p>
            
          <?php  }?>
        </div>
        <div class="modal-footer m-t--20 m-b-10">
            <button class="modal-close waves-effect waves-light btn blue">Cerrar</button>
        </div>
    </div>
    <?php include '../v/support/modalAdd.php'; 
// connection
include '../connection.php';

$_modal = mysqli_query($master, "
SELECT * FROM acmodal
WHERE acmodalId = 2
");
$modal = $_modal -> fetch_object();
?>
<style>.modal { width: 75% !important ; }</style>
<div id="help22" class="modal ">
       <div class="modal-header" style="background-color:#607d8b;">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                        <h6><a href="#!" class="breadcrumb white-text">Guia </a>
                        <a href="#!" class="breadcrumb white-text ">AC Index</a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        </a></h6>
                    </div>
                </div>
            </div>
            
            <div class="modal-content">
             
 <div class="row">
    <div class="col s12 m-t--10">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test11">Cliente</a></li>
        <li class="tab col s3"><a  href="#test22">Servicio</a></li>
        <li class="tab col s3"><a  href="#test33">Equipo de trabajo</a></li>
        <li class="tab col s3"><a href="#test44">Rol</a></li>
      </ul>
    </div>
    <div id="test11" class="col s12">
         <div class="m-t-20"></div>
    <?php echo $modal -> acmodaltext1 ; ?>
            <div class="m-t-20"></div>
            <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
                   <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a>
         <div class="m-t-20"></div>
    </div>
    
    <div id="test22" class="col s12">
        <div class="m-t-20"></div>
<?php echo $modal -> acmodaltext2 ; ?>
      <div class="m-t-20"></div>
       <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
             <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a><div class="m-t-20"></div>

                </div>
    
    <div id="test33" class="col s12">
        <div class="m-t-20"></div>
<?php echo $modal -> acmodaltext3 ; ?>
      <div class="m-t-20"></div>
      
       <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
              <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a><div class="m-t-20"></div>
    </div>
    
    <div id="test44" class="col s12">
        <div class="m-t-20"></div>
<?php echo $modal -> acmodaltext4; ?>
      <div class="m-t-20"></div>
       <a href="#!" class="modal-close btn blue waves-light tooltipped " style="margin-right:5px;" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">play_arrow</i>
         </a>
     <a href="#!" class="modal-close btn red waves-light tooltipped " data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
         </a><div class="m-t-20"></div>

    </div>
  </div>
           
            </div>
<!-- cerramos los modales -->