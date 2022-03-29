    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Blog</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#stareas" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["subscriberName"];?>
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb  p-l-10">A&ntilde;adir </span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-grey-text">undo</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
<form id="form_validation" action="../c/blog.php?m=createDb" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
        



         <div class="row">
                <div class="col s12 m-b-5">
                
                
                <ul class="collection">
                        <li class="collection-item blue-grey lighten-2 white-text">Blog Completar:</li>
                    </ul>
                
                    
                    <a  class="font-14 blue-text" href="#!" class="breadcrumb blue-text"></a>
                    <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar">
                    
                    </a>
                 
                </div>
            </div>
  <div class="row">   
            <div class="col s12 m6 l4  ">
                                  <div class="input-field">
                                     <input value="" id="titulo" name="titulo" placeholder="" type="text" class="validate" required  >
                                     <label class="" for="titulo">Titulo</label>
                                        <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                                   </div>
                              </div>


                
            <div class="col s12 m6 l4  ">
                                  <div class="input-field">
                                     <input value="" id="cat" name="cat" placeholder="" type="text" class="validate" required >
                                     <label class="" for="titulo">Categoria</label>
                                        <span class="helper-text" data-error="Campo vac&iacute;o" data-success="Listo!"></span>
                                   </div>
                              </div>
   <div class="col s12 m12 l4">
    <div class="input-field">
      <input id="date" name="date" placeholder="" type="text" class="datepicker validate" required>
          <label for="date">Fecha</label>
             <span class="helper-text" data-error="El campo es requerido" data-success="Listo!"></span>
    </div>
  </div>
  </div>
  
  
  <!-- img 1-->
  
   <div class="row">
                <div class="col s12 m-t--20">
                    <div class="file-field input-field">
                        <div class="btn white ">
                            <i class="material-icons blue-text">attach_file</i>
                            <input class="blue" type="file" accept="image/*"  id="archivo2[]" name="archivo2[]">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                        </div>
                    </div>
                </div>
    </div>
    
<!-- img 1-->




<div class="row">           
                <div class="col s12 ">    
<ul class="collapsible">
    <li>
      <div class="collapsible-header "><i class="material-icons blue-text">edit</i>Texto</div>
      <div class="collapsible-body">    
       <textarea class="ckeditor" name="blogtext" >
           
       </textarea></div>
    </li>


 </ul></div>
</div>

 <!-- img 2-->
  
   <div class="row">
                <div class="col s12 m-t-10">
                    <div class="file-field input-field">
                        <div class="btn white ">
                            <i class="material-icons blue-text">attach_file</i>
                            <input class="blue" type="file" accept="image/*"  id="archivo3[]" name="archivo3[]">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                        </div>
                    </div>
                </div>
    </div>
    
<!-- img 2-->


<div class="row">           
                <div class="col s12 ">    
<ul class="collapsible">
    <li>
      <div class="collapsible-header "><i class="material-icons blue-text">edit</i>Texto</div>
      <div class="collapsible-body">    
       <textarea class="ckeditor" name="blogtext2" >
           
       </textarea></div>
    </li>


 </ul></div>
</div>

 <!-- img 3-->
  
   <div class="row">
                <div class="col s12 m-t-10">
                    <div class="file-field input-field">
                        <div class="btn white ">
                            <i class="material-icons blue-text">attach_file</i>
                            <input class="blue" type="file" accept="image/*"  id="archivo4[]" name="archivo4[]">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Adjuntar im&aacute;gen o capture!">
                        </div>
                    </div>
                </div>
    </div>
    
<!-- img 3-->




                                                <div class="row">
                                                    <div class="col s12 m-t-10">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-30">
                                                        <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                        <button id="vDivision" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
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

    <script src="../plugins/jansen.js" type="text/javascript"></script>
    