<main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Permisos</a>
                    <a href="#!" class="breadcrumb ">Anadir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"]; ?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Equipo de Trabajo</span>
                                    <a href="../c/permiso.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">
                                    <div class="row">
                                        <div class="col s12 m6 m-b-10">
                                            <table class="blue-grey lighten-5">
                                                <tr>
                                                    <td>Modulo:</td>
                                                    <td><?php echo $moduleName ?></td>
                                                </tr>
                                                
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m-t-20">
                                            <ul class="collection">
                                                <li class="collection-item blue-grey lighten-5">
                                                    <p>A continuaci&oacute;n, seleccione los integrantes del Equipo de Trabajo para el Modulo.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <form id="form_validation" action="../c/permiso.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                        <div class="row">

                                                            <div class="col s12 m4 m-t-20">
                                                                <div class="input-field">
                                                                
                                                                    <select id="userId" name="userId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($user = $_user -> fetch_object()) { ?>
                                                                        <option value="<?php echo $user -> userId; ?>"><?php echo $user -> userName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="userId">Usuario</label>
                                                                    
                                                                </div>
                                                            </div>


                                                            <div class="col s12 m4 m-t-20">
                                                                <div class="input-field">
                                                                
                                                                    <select id="designatedId" name="designatedId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($designated = $_designated -> fetch_object()) { ?>
                                                                        <option value="<?php echo $designated -> designatedId; ?>"><?php echo $designated -> functionName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="designatedId">Rol</label>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m3 m-t-20">
                                                                <div class="input-field">
                                                                
                                                                    <select id="grupoId" name="grupoId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($grupo = $_grupo -> fetch_object()) { ?>
                                                                        <option value="<?php echo $grupo ->  departmentId; ?>"><?php echo $grupo -> departmentName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="designatedId">Categoria</label>
                                                                    
                                                                </div>
                                                            </div>

                                            <div class="col s12 m1 m-t-30">
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="left" data-tooltip="Guardar" >
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col s12 m-t-20 m-b-10">
                                            <table class="white">
                                                <thead>
                                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                        <td id="border-white"  >Consultor</td>
                                                        <td id="border-white" >Designaci&oacute;n</td>
                                                        <td id="border-white" >Categoria</td>
                                                        <td id="border-white" width="10%">Aci&oacute;n</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($permiso = mysqli_fetch_array($p)) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo  $permiso["userName"];  ?>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                            if ( $permiso["designatedId"] == 1){
                                                                
                                                            echo 'Completar';  
                                                            
                                                            }
                                                            if ( $permiso["designatedId"] == 2){
                                                                
                                                            echo 'Revisar';  
                                                            
                                                            }
                                                            if ( $permiso["designatedId"] == 3){
                                                                
                                                            echo 'Consultar';  
                                                            
                                                            }
                                                            
                                                            ?>
                                                        </td>
                                                        <td>
                                                         <?php 
                                                            if ( $permiso["grupoId"] == 1){
                                                                
                                                            echo 'Auditoría';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 2){
                                                                
                                                            echo 'Auditoría Interna';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 3){
                                                                
                                                            echo 'Consultoría';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 4){
                                                                
                                                            echo 'Fiscal';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 5){
                                                                
                                                            echo 'Asistencia Técnica';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 6){
                                                                
                                                            echo 'Metodología';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 7){
                                                                
                                                            echo 'sistemas';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 8){
                                                                
                                                            echo 'Administración';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 9){
                                                                
                                                            echo 'Recursos Humanos';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 10){
                                                                
                                                            echo 'Desarrollo Profesional';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 11){
                                                                
                                                            echo 'Control de Calidad';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 12){
                                                                
                                                            echo 'Riesgo y Código de Ética y Conducta';  
                                                            
                                                            }
                                                            if ( $permiso["grupoId"] == 13){
                                                                
                                                            echo '	Organizaciones sin fines de lucro';  
                                                            
                                                            }
                                                            
                                                            
                                                            
                                                            ?>
                                                        
                                                        </td>
                                                        <td>
                                            <a href="../c/permiso.php?m=deleteDb&id=<?php echo $permiso["permisoId"]; ?>&u=<?php echo $_GET["id"]; ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
