    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Rac</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"];?>
                    </span>
                </div>
            </div>

            <form id="form_validation" action="../c/client.php?m=createDb" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5 hoverable">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="blue-text p-l-10">Rac</span>
                                        <a href="../c/client.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                        <div class="row">
                                                        
                                                        <div class="col s12 m5 l4 ">
                                                            <div class="input-field">
                                                                <input id="clientName" name="clientName" placeholder="" type="text" class="validate" value="Diagn&oacute;stico de Empresa familiar" readonly>
                                                                <label for="clientName">Nombre del diagn&oacute;stico</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                    <div class="col s12 m5 l6 ">
                                                         <div class="input-field">
                                                            <input id="clientName" name="clientName" placeholder="" type="text" class="validate" >
                                                            <label class="active" for="designatedId">Rac</label>
                                                         </div>
                                                    </div>
                                                    <div class="col s12 m1 l1 ">
                                                         <div class="input-field">
                                                            <input id="clientName" name="clientName" placeholder="" type="number" class="validate" >
                                                            <label class="active" for="designatedId">Id</label>
                                                         </div>
                                                    </div>
                                                    
                                                    <div class="col s12 m1 l1 m-t-20">
                                                        <button type="submit" class="btn blue waves-effect tooltipped" data-position="left" data-tooltip="Guardar" >
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                                
                                                    <div class="row">
                                        <div class="col s12  m-b-10">
                                            <table class="white">
                                                <thead>
                                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                        <td id="border-white" width="5%">Id</td>
                                                        <td id="border-white" class="left">Rac</td>
                                                        <td id="border-white" width="10%"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                    <tr>
                                                        <td id="border-grey">1</td>
                                                        <td id="border-grey">Maximar plan de negocio</td>
                                                        
                                                        <td id="border-grey" class="center">
                                                            <a href='#'class='tooltipped m-r-5' 
                                                            data-position='left' data-tooltip='Eliminar'>
                                                                <i class='material-icons blue-text'>edit</i></a>
                                                            <a href='#'class='tooltipped m-r-5' 
                                                            data-position='left' data-tooltip='Eliminar'>
                                                                <i class='material-icons red-text'>delete</i></a>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                         <td id="border-grey">2</td>
                                                        <td id="border-grey">Profesionalización del negocio</td>
                                                        
                                                        <td id="border-grey" class="center">
                                                            <a href='#'class='tooltipped m-r-5' 
                                                            data-position='left' data-tooltip='Eliminar'>
                                                                <i class='material-icons blue-text'>edit</i></a>
                                                            <a href='#'class='tooltipped m-r-5' 
                                                            data-position='left' data-tooltip='Eliminar'>
                                                                <i class='material-icons red-text'>delete</i></a>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                         <td id="border-grey">3</td>
                                                        <td id="border-grey">Equipos Efectivos</td>
                                                        
                                                        <td id="border-grey" class="center">
                                                            <a href='#'class='tooltipped m-r-5' 
                                                            data-position='left' data-tooltip='Eliminar'>
                                                                <i class='material-icons blue-text'>edit</i></a>
                                                            <a href='#'class='tooltipped m-r-5' 
                                                            data-position='left' data-tooltip='Eliminar'>
                                                                <i class='material-icons red-text'>delete</i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                
                                                
                                                
                            <!--<div class="row invisible">
                                <div class="col s12 m12 l12">
                                          <ul class="collapsible ">         
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Racs</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <div class="col l12">
                                                           
                                                             <table class="white">
                                                                    <thead>
                                                                        <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                                            <td id="border-white" class="center">Rac</td>
                                                                            <td id="border-white" width="10%"></td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                        
                                                                        <tr>
                                                                            <td id="border-grey">Maximar plan de negocio</td>
                                                                            <td id="border-grey" class="center">
                                                                                <a href='../c/ac.php?m=teamDelete&aid=' class='tooltipped m-r-5' data-position='left' data-tooltip='Eliminar'><i class='material-icons red-text'>delete</i></a>"
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            
                                                            
                                                            
                                                </div>            
                                                            
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Preguntas</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <div class="col l10">
                                                                <div class="input-field">
                                                                    <label for="shareholderName">Nombre de la Rac</label>
                                                                    <input id="shareholderName" type="text" name="shareholderName[]" required>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <a href="javascript:void(0);" class="add_button" title="Add field">
                                                                <i class="material-icons m-t-25">add</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2">Preguntas y Racs</span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <div class="col l10">
                                                                <div class="input-field">
                                                                    <label for="shareholderName">Nombre de la Rac</label>
                                                                    <input id="shareholderName" type="text" name="shareholderName[]" required>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <a href="javascript:void(0);" class="add_button" title="Add field">
                                                                <i class="material-icons m-t-25">add</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
    
                                        </ul>            
                                </div>
                            </div>-->
                       
                                      
                                        <div class="row">
                                                    <div class="col s12 m-t-20 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <a href="../c/client.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-15">
                                        <span class="blue-grey-text font-14 left p-l-10">&cuoy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                        <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
    