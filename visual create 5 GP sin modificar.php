<main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Master Data Modelos</a>
                    <a href="#!" class="breadcrumb ">Modelos</a>
                    <a href="#help" class="tooltipped right modal-trigger" data-position="left" data-tooltip="mproject de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Solicitar Ayuda">
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
                                        <span class="blue-text p-l-10">Asignar Modelo</span>
                                        <a href="../c/mproject.php?m=index" class="tooltipped right" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-text">cancel</i>
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
                                <div class="col s12">
                                    <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                        
                                        
                                        
                            <div class="row">
                                <div class="col s6 m3">
                                
                                       
                                          
                                                  <table class="blue-grey lighten-4" >
                                                     
                                                        <tr>
                                                            <td>Servicio</td>
                                                          </tr>  
                                                         <tr>
                                                            <td><?php echo $serviceName ?></td>
                                                         </tr>    
                                                            
                                                   </table>
                                                  
                                                
                                                
                                                
                                    </div>
                                        <div class="col s6 m3">
                                
                               
                                          
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td>Etapa</td>
                                                         </tr>  
                                                         <tr>
                                                            <td><?php echo $etapaName ?></td>
                                                         </tr>    
                                                </table>      
                                                    
                                                 
                                                
                                    </div>
                                     <div class="col s6 m3">
                                
                                       
                                          
                                                    
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td >Fecha de ultima Modificaci&oacute;n:</td>
                                                         </tr>  
                                                         <tr>
                                                            <td>10/10/2021</td>
                                                         </tr>    
                                                </table>      
                                                
                                                
                                    </div>
                                        <div class="col s6 m3">
                                
                                       
                                          
                                               
                                                 <table class="blue-grey lighten-4">
                                                      <tr>
                                                        <td >Modificado Por:</td>
                                                        </tr>
                                                        <tr>
                                                          
                                                            <td> <?php echo $_SESSION["userFullName"];?></td>
                                                        </tr>
                                                     
                                                    </table>
                                                
                                    </div>
                                    
                                            </div> 
                                                
                                                <div class="row"> 
                                                <div class="col s12 ">
                                                        <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Categoria</div>
                                                       </div>
                                                        <div class="col s12 ">
                                                        <div class='card-panel black-text blue-grey lighten-4' style='line-height : 20px;'><?php echo $mcategoriaName ?></div>
                                                       </div>
                                                  </div>
                                                  
                                                  <div class="row"> 
                                                <div class="col s12 ">
                                                        <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Actividad</div>
                                                       </div>
                                                        <div class="col s12 ">
                                                        <div class='card-panel black-text blue-grey lighten-4' style='line-height : 20px;'><?php echo $actividadText ?></div>
                                                       </div>
                                                  </div>
                                                  
                                                  
                                                  
                                        <form id="form_validation" action="../c/mproject.php?m=createDb5&serviceId=<?php echo $_GET['serviceId'];?>&mcategoriaId=<?php echo $_GET['mcategoriaId']?>&etapaId=<?php echo $_GET['etapaId'];?>&actividadId=<?php echo $_GET['actividadId'];?>"
                                        method="post"  enctype="multipart/form-data"  onsubmit="return checkForm(this);">
                                    <div class="row">
                                                    <div class="col s12 m4 l4 m-t-10 ">
                                                            <div class="input-field">
                                                                 
                                                                <select id="modeloId" name="modeloId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($modelo = $_modelo -> fetch_object()) { ?>
                                                                    <option value="<?php echo $modelo -> modeloId; ?>"><?php echo $modelo -> modeloName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label>Modelo:</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="col s12 m4 l4 m-t-10 ">
                                                             <div class="input-field">
                                                                <select id="npregunta" name="npregunta" placeholder="" type="text" class="validate">
                                                                  <?php
                                                                  $a=20;$b=1;
                                                                  while ($a>=$b){
                                                                  
                                                                  ?>
                                                                  <option value="<?php echo $b ?>"><?php echo $b ?></option>
                                                                  
                                                                  <?php $b++; }?>
                                                                </select>
                                                                <label>Numero de Actividades</label>
                                                              </div>
                                                     
                                                   
                                                    </div>
                                                   
                                                            <div class="col s12 m4 l4 m-t-10 ">
                                                                    <div class="input-field">
                                                                    <input id="normaText" name="normaText" placeholder="" type="text" class="validate">
                                                                    <label>Norma</label>
                                
                                                                    </div>
                                                            </div>
                                                            
                                        <div class="col s12 m12 l12 m-t--10 m-b-20">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Descripci&oacute;n</div>
                                                            <div class="collapsible-body">
                                                  		        <div class= "row">
                                                                    <div class="col s12 m12 l12 ">
                                                                        <div class="input-field">
                                                                        <textarea id="ayudaText" name="ayudaText" class="ckeditor m-t-20" required>
                                                                        </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </li>
                                            </ul>
                                        </div>
                                  
                                    
                                    

<!-- tabla q contiene las actividades en un desplegable  -->
<?php if ($etapaId == 3) { ?>
<div class="col s12 m12 l12 ">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header grey lighten-4"><i class="material-icons red-text">assignment_late</i>Ascerciones</div>
                                                    <div class="collapsible-body">
                                                        <div class="row">


                                                            <table class="">
                                                                <tbody>
<tr>

<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    C
                                                                                         </a></div>
</td>                                                                                         
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    A
                                                                                         </a></div>
</td>
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    E/O
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    CO
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    RO
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    VA
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    PD
                                                                                         </a></div>
</td>

</tr>
                                                                    

                                                                        <tr>
                                                                           
                                                                            


                                                                                
                                                                            
                                                                            <td class="  grey lighten-4" style="background-color:white">

                                                                                <a class=" tooltipped" data-tooltip="Asercion  1 C">


                                                                                    <label>
                                                                                        <input value="1" type="checkbox" name="a1" />
                                                                                        <span class="blue-grey-text text-darken-2"> </span>
                                                                                    </label>



                                                                                </a>



                                                        </div>
                                                        </td>
                                                        <td class=" grey lighten-4" style=" background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 2 A">
                                                                    <label>
                                                                        <input value="1" type="checkbox" name="a2" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>
                                                                     

                                                                </a>


                                                            </div>
                                                        </td>
                                    
                                                        <td class="grey lighten-4" style="background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 3 E/O">
                                                                    <label>
                                                                        <input value="1"  type="checkbox" name="a3" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>

                                                                </a>
                                                            </div>
                                                        </td>

                                                        <td class="grey lighten-4" style="background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 4 CO">

                                                                    <label>
                                                                        <input value="1"  type="checkbox" name="a4" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>


                                                                </a>

                                                            </div>
                                                        </td>

                                                        <td class="grey lighten-4" style="background-color:white">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 5 RO">
                                                                    <label>
                                                                        <input value="1"  type="checkbox" name="a5" />
                                                                        <span class="blue-grey-text text-darken-2"> </span>
                                                                    </label>

                                                            </div>

                                                            </a>
                                                    </div>
                                                    </td>

                                                    <td class="grey lighten-4" style="background-color:#cfd8dc">
                                                        <div>
                                                            <a class=" tooltipped" data-tooltip="Asercion 6 VA">
                                                                <label>
                                                                    <input value="1" type="checkbox" name="a6" />
                                                                    <span class="blue-grey-text text-darken-2"></span>
                                                                </label>

                                                        </div>
                                                        </a>
                                        </div>
                                        </td>

                                        <td class="grey lighten-4" style="background-color:#cfd8dc">
                                            <div>

                                                <a class=" tooltipped " data-tooltip="Asercion 7 PD">
                                                    <label>
                                                        <input value="1"  type="checkbox" name="a7" />
                                                        <span class="blue-grey-text text-darken-2"></span>
                                                    </label>
                                                </a>

                                            </div>
                                        </td>
                                        
                                    </tbody>
                                    </table>

                                    </div>
                                </div>

                                </li>
                                </ul>
                            </div>
                            <?php } ?>
                            <!-- final tabla que contiene actividades--> 


                                  
                                    
                                            
                                            
                              </div>                
                                            <div class="row">
                                                <div class="col s12 m-t-10 ">
                                                    <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Otras consideraciones</span>
                                                    </label>
                                                </div>
                                            </div>
                                    
                                    <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <label>
                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                </label>
                                            </div>
                                        </div>
                                   
                                        <div class="row">
                                            <div class="col s12 m-t-10 ">
                                                <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                             <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                        

                                        
                                        
                                        
                                        </form>
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                 
                 
                 
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
    <p class="">Manual de Usuario</p>
    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="modal-footer">
    <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
</div>
</div>

<?php include '../v/support/modalAdd.php'; ?>

<script type="text/javascript" src="../js/shareholder.js"></script>

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