
<body class="blue-grey">

    <!-- Page Loader 
    <div class="page-loader-wrapper">
        <div class="loader">
            <img src="../images/logoP.svg" width="35">
            <p>Por favor espere...</p>
        </div>
    </div>-->
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
<?php
$id= $_GET["c"];
$ar= $_GET["a"];

$pathb = "../../ticketA/" . $id;
unlink('../../ticketA/'.$id. '/' . $ar);
rmdir($pathb);	
$URL="../../c/ticket.php?m=update&n=deleted&id=". $id;
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
?>	
	
	
	