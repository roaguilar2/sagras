    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Usuarios Sagra GP</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["dsheetFullName"];?>
                    </span>
                </div>
            </div>
            
            <form id="form_validation" action="../c/dsheet.php?m=createDb" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5 hoverable">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="breadcrumb  p-l-10">A&ntilde;adir</span>
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
                                            <div class="m-b-20 m-l-20 m-r-20">
                                                <div class="row">
                                                    <div class="col s12 m-t-20">
                                                        <ul class="tabs">
                                                            <li class="tab col l3 blue-grey lighten-5"><a class="active tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="#P1">Datos Generales</a></li>
                                                            <li class="tab col l3 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Ubicaci&oacute;n" href="#P2">Ubicaci&oacute;n</a></li>
                                                            <li class="tab col l3 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Datos Laborales" href="#P3">Datos Laborales</a></li>
                                                            <li class="tab col l3 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Datos Laborales" href="#P4">Tipo de Usuario</a></li>
                                                        </ul>
                                                    </div>
                                                    <div id="P1" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetName" name="dsheetName" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetSurname" name="dsheetSurname" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetSurname">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="civilStatusId" name="civilStatusId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($civilStatus = $_civilStatus -> fetch_object()) { ?>
                                                                        <option value="<?php echo $civilStatus -> civilStatusId ; ?>"><?php echo $civilStatus -> civilStatusName;     ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="civilStatusId">Estado Civil</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetBirthday" name="dsheetBirthday" placeholder="" type="text" class="datepicker validate">
                                                                    <label for="dsheetBirthday">Fecha de Nacimiento</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="genderId" name="genderId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($gender = $_gender -> fetch_object()) { ?>
                                                                        <option value="<?php echo $gender -> genderId; ?>"><?php echo $gender -> genderName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="genderId">G&eacute;nero</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP2" href='#test2'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P2" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetEmail" name="dsheetEmail" placeholder="" type="email" class="validate">
                                                                    <label for="dsheetEmail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetPhone1" name="dsheetPhone1" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetPhone1">Tel&eacute;fono 1</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetPhone2" name="dsheetPhone2" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetPhone2">Tel&eacute;fono 2</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="input-field">
                                                                    <input id="dsheetAddress" name="dsheetAddress" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetAddress">Direcci&oacute;n</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetCity" name="dsheetCity" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetCity">Ciudad</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetState" name="dsheetState" placeholder="" type="text" class="validate">
                                                                    <label for="dsheetState">Estado</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="countryId" name="countryId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($country = $_country -> fetch_object()) { ?>
                                                                        <option value="<?php echo $country -> countryId; ?>"><?php echo $country -> countryName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="countryId">Pa&iacute;s</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP3" href='#test3'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P3" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="dsheetAdmission" name="dsheetAdmission" placeholder="" type="text" class="datepicker validate">
                                                                    <label for="dsheetAdmission">Fecha de Ingreso</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="officeId" name="officeId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($office = $_office -> fetch_object()) { ?>
                                                                        <option value="<?php echo $office -> officeId; ?>"><?php echo $office -> officeName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="officeId">Oficina</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="divisionId" name="divisionId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($division = $_division -> fetch_object()) { ?>
                                                                        <option value="<?php echo $division -> divisionId;    ?>"><?php echo $division -> divisionName;    ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="divisionId">Divisi&oacute;n</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="departmentId" name="departmentId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($department = $_department -> fetch_object()) { ?>
                                                                        <option value="<?php echo $department -> departmentId; ?>"><?php echo $department -> departmentName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="departmentId">Departamento</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <select id="levelId" name="levelId" placeholder="" type="text" class="validate">
                                                                        <option value="">&nbsp;</option>
                                                                        <?php while ($level = $_level -> fetch_object()) { ?>
                                                                        <option value="<?php echo $level -> levelId; ?>"><?php echo $level -> levelName; ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="font-13" for="levelId">Nivel Educativo</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP4" href='#test4' data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P4" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <p>
                                                                    <label>
                                                                        <input name="dsheetAdmin" type="radio" value="1" checked />
                                                                        <span>Est&aacute;ndar</span>
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input name="dsheetAdmin" type="radio" value="2"/>
                                                                        <span>Administrador</span>
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input name="dsheetAdmin" type="radio" value="3"/>
                                                                        <span>Socio de Riesgo</span>
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input name="dsheetAdmin" type="radio" value="4"/>
                                                                        <span>Consultor</span>
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input name="dsheetAdmin" type="radio" value="5"/>
                                                                        <span>Administrador Principal</span>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-20">
                                                                <label>
                                                                    <input type="checkbox" class="validate filled-in" required="" />
                                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 m-t-20">
                                                                <a href="../c/dsheet.php?m=list" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                                    <i class="material-icons">close</i>
                                                                </a>
                                                                <?php echo $action = $_SESSION["dsheetAdmin"] != 4 ? "<button id='vDsheet' type='submit' class='btn blue waves-effect tooltipped' data-position='right' data-tooltip='Guardar'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-10">
                                        <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                        <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
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

    <script src="../plugins/jansen.js" type="text/javascript"></script>
