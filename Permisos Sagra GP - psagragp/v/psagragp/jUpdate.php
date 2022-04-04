<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Permisos de Usuarios Sagra GP</a>
            <a href="#!" class="breadcrumb ">Modificar</a>
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

    <form id="form_validation" action="../c/psagragp.php?m=updateDb&uid=<?php echo $_GET["uid"]; ?>" method="post">
        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <a href="#!" class="breadcrumb  m-l-10">Modificar</a>
                                <a href="#!" class="breadcrumb ">Permisos de Usuarios Sagra GP</a>
                                <a href="#!" class="breadcrumb"><?php echo "{$user -> userName} {$user -> userSurname}" ?></a>
                                <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                                <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                    <i class="material-icons blue-grey-text">undo</i>
                                </a>
                            </div>
                        </div>
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-b-15 p-l-20 p-r-20">
                                <div class="row">
                                    <?php
                                    while ($module = $_module -> fetch_object()) {
                                        $_psagragp = mysqli_query($master, "
                                            SELECT * FROM psagragp
                                            WHERE userId = '" . $_GET["uid"] . "'
                                            AND moduleId = '" . $module -> moduleId . "'
                                        ");
                                        $psagragp = $_psagragp -> fetch_object();
                                    ?>
                                    <div class="col s6 m4 l3 m-t-30">
                                        <div id="mod" class="card hoverable <?php echo $color = ($psagragp -> jRead == 1  or $psagragp -> jRead == 1 ) ? 'blue-grey lighten-5' : ''; ?> height-220">
                                            <div class="card card-title <?php echo $color = ($psagragp -> jPsagragp == 1  or $psagragp -> jRead == 1 ) ? 'blue-grey' : 'blue-grey lighten-3'; ?>">
                                                <span class="white-text m-l-10 m-r-10 truncate"><?php echo $module -> moduleName; ?></span>
                                            </div>
                                            <div class="card-content">
                                                <input value="<?php echo $module -> moduleId; ?>" type="hidden" name="moduleId[]" />
                                                <?php if ($user -> userAdmin == 4) { ?>
                                                <div>
                                                    <label class="m-l-20">
                                                        <input <?php echo $checked = $psagragp -> jRead == 1 ? 'checked' : ''; ?> value="1" type="checkbox" name="jRead[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2">Consultar</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="m-l-20">
                                                        <input class="case<?php echo $module -> moduleId; ?>" value="1" type="checkbox" name="jCreate[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2">A&ntilde;adir</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="m-l-20">
                                                        <input class="case<?php echo $module -> moduleId; ?>" value="1" type="checkbox" name="jUpdate[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2"> Modificar</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <label class="m-l-20">
                                                        <input class="case<?php echo $module -> moduleId; ?>" value="1" type="checkbox" name="jDelete[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2"> Eliminar</span>
                                                    </label>
                                                </div>
                                                <?php } else { ?>
                                                <div class="blue-grey lighten-4 p-t-5 p-b-5">
                                                    <label style="padding-left: 20px">
                                                        <input class="main filled-in" id="clean<?php echo $module -> moduleId; ?>" <?php echo $checked = ($psagragp -> jPsagragp == 1 ) ? 'checked' : ''; ?> value="1" type="checkbox" name="jPsagragp[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2"> Acceso</span>
                                                    </label>
                                                </div>
                                                <div class="m-t-15">
                                                <?php if ($module -> r == 1) { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="case<?php echo $module -> moduleId; ?> filled-in" <?php echo $checked = $psagragp -> jRead == 1 ? 'checked' : ''; ?> value="1" type="checkbox" name="jRead[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2">Consultar</span>
                                                    </label>
                                                <?php } else { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="filled-in" type="checkbox" disabled=""/><span class="blue-grey-text text-darken-2"> Consultar</span>
                                                    </label>
                                                <?php } ?>
                                                </div>
                                                <div>
                                                <?php if ($module -> c == 1) { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="case<?php echo $module -> moduleId; ?> filled-in" <?php echo $checked = $psagragp -> jCreate == 1 ? 'checked' : ''; ?> value="1" type="checkbox" name="jCreate[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2">A&ntilde;adir</span>
                                                    </label>
                                                <?php } else { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="filled-in" type="checkbox" disabled=""/><span class="blue-grey-text text-darken-2">A&ntilde;adir</span>
                                                    </label>
                                                <?php } ?>
                                                </div>
                                                <div>
                                                <?php if ($module -> u == 1) { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="case<?php echo $module -> moduleId; ?> filled-in" <?php echo $checked = $psagragp -> jUpdate == 1 ? 'checked' : ''; ?> value="1" type="checkbox" name="jUpdate[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2"> Modificar</span>
                                                    </label>
                                                <?php } else { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="filled-in" type="checkbox" disabled=""/><span class="blue-grey-text text-darken-2">Modificar</span>
                                                    </label>
                                                <?php } ?>
                                                </div>
                                                <div>
                                                <?php if ($module -> d == 1) { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="case<?php echo $module -> moduleId; ?> filled-in" <?php echo $checked = $psagragp -> jDelete == 1 ? 'checked' : ''; ?> value="1" type="checkbox" name="jDelete[<?php echo $module -> moduleId; ?>]"/><span class="blue-grey-text text-darken-2"> Eliminar</span>
                                                    </label>
                                                <?php } else { ?>
                                                    <label style="padding-left: 20px">
                                                        <input class="filled-in" type="checkbox" disabled=""/><span class="blue-grey-text text-darken-2">Eliminar</span>
                                                    </label>
                                                <?php } ?>
                                                </div>
                                                <?php } ?>
                                                <div class="m-t-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>if(!$("#clean<?php echo $module -> moduleId; ?>").is(':checked')){$(".case<?php echo $module -> moduleId; ?>").prop('disabled', true);}$('#clean<?php echo $module -> moduleId; ?>').click(function(){if (this.checked){$(".case<?php echo $module -> moduleId; ?>").prop('disabled', false);}else{$('.case<?php echo $module -> moduleId; ?>').prop('checked', false);$(".case<?php echo $module -> moduleId; ?>").prop('disabled', true);}});</script>
                                    <?php } ?>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-30">
                                        <label>
                                            <input type="checkbox" class="validate filled-in" required="" />
                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                            <i class="material-icons">cancel</i>
                                        </a>
                                        <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button type='submit' class='btn blue waves-effect tooltipped' data-position='top' data-tooltip='Guardar Cambios'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m-t-15">
                                <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
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
