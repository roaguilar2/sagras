<?php 
//CONEXION A BASE DE DATOS 

//CONEXION A BASE DE DATOS 
 $_lm = mysqli_query($manuales, "
            SELECT * FROM comanual
            WHERE comanualStatus = 1
        ");        
        
// hare un wil para generar de manera automatica los modales de edicion 
while($m = $_lm -> fetch_object()){
$comanualName = $m -> comanualName;
$comanualText = $m -> comanualText;
$comanualCo = $m -> comanualCo;
$comanualId = $m -> comanualId;
?>
    
<form id="form_validation" action="../c/comanual.php?m=updateDb&comanualId=<?php echo $comanualId;?>" method="post"
enctype="multipart/form-data" onsubmit="return checkForm(this);">
    
        <div id="edit<?php echo $comanualId;?>" class="modal" style="width:80%;">
             <div class="modal-header grey lighten-3" style="">
            <div class="row" >
                    <div class="col s12 m-b-5 m-t-20 m-b-20 m-l-20 ">
                       Editar - <?php echo $comanualName;?>
                    </div>
                </div>
            </div>
<div class="modal-content">
                
<div class="col s12 l12 ">
                    
    <div class="row   ">
        
         <div class="col s12" >
            <div class="  ">

<div class="row">   
    <div class="col s12 m3 l3 m-t--10  ">
        <div class="input-field">
            <input value="<?php echo $comanualName;?>" id="tipo" name="tipo" placeholder="" type="text" >
            <label class="font-17" for="comanualName">tipo</label>
        </div>
    </div>
    
    <div class="col s12 m3 l3 m-t--10  ">
        <div class="input-field">
            <input value="<?php echo $comanualName;?>" id="rubro" name="rubro" placeholder="" type="text" >
            <label class="font-17" for="comanualName">tipo</label>
        </div>
    </div>
    
    <div class="col s12 m3 l3 m-t--10  ">
        <div class="input-field">
            <input value="<?php echo $comanualName;?>" id="monto" name="monto" placeholder="" type="number" >
            <label class="font-17" for="comanualName">tipo</label>
        </div>
    </div>
    
    <div class="col s12 m3 l3 m-t--10  ">
        <div class="input-field">
            <input value="<?php echo $comanualName;?>" id="monto2" name="monto2" placeholder="" type="number" >
            <label class="font-17" for="comanualName">tipo</label>
        </div>
    </div>
    
</div>    

<div class="row">
    <div class="col s12 m-t-20">
            <label>
            <input type="checkbox" class="validate filled-in" required="" />
            <span class="font-15">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
        </label>
    </div>
</div>

<div class="row">
    <div class="col s12 m-t-10">
        
        
        <button id="vDivision" type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
            <i class="material-icons">save</i>
        </button>
    </div>
</div>

    </div>
</div>




    </div>
       
</div>
         </div>
    </div>
</form>
    
    
    
<?php } ?>