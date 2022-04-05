    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Usuarios Sagra GP</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Auditores Externos</a>
                    <a href="#!" class="breadcrumb ">Lista</a>
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

            <div class="row">
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb  p-l-10">Usuarios Sagra GP > Auditores Externos</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                                    <a href="<?php echo $link = $allow -> jCreate == 1 ? "../c/{$module}.php?m=createExternal" : "javascript: void(0)" ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons <?php echo $color = $allow -> jCreate == 1 ? "blue-text" : "grey-text"; ?>">add_circle</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td>Nombres</td>
                                                        <td>Apellidos</td>
                                                        <td class="td-block">Correo Electr&oacute;nico</td>
                                                        <td>Acci&oacute;n</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($dsheet = $_dsheet -> fetch_object()) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $dsheet -> dsheetName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $dsheet -> dsheetSurname; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $dsheet -> dsheetEmail; ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=updateExternal&id={$dsheet -> dsheetId}" : "javascript: void(0)" ?>" class="tooltipped m-r-10" data-position="left" data-tooltip="Modificar"><i class="material-icons <?php echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text"; ?>">edit</i></a>
                                                            <a href="<?php echo $link = $allow -> jDelete == 1 ? "../c/{$module}.php?m=deleteExternal&id={$dsheet -> dsheetId}" : "javascript: void(0)" ?>" class="tooltipped m-r-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons <?php echo $color = $allow -> jDelete == 1 ? "red-text" : "grey-text"; ?>">delete</i></a>
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
                                    <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
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
    