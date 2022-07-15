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
                                        <span class="blue-text p-l-10">Editar Modelos</span>
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
                                        
                                        
                       