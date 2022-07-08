

 <li>
 <!-- preguntas -->                                                                          
                            <!-- el beta-->                                           
                                <!-- ul con las categorrias y preguntas  -->
                                <div class="row invisible">
                                    <div class="col s12 m12 l12 ">
                                          <ul class="collapsible ">         
                                          
                                          
                                          
                                          <?php 
                                          
                                          $_cp11 = mysqli_query($appa, "
                                                SELECT * FROM project$v 
                                            ");

                                          $contador = 0;
                                          while($cp = $_cp11 -> fetch_object())
                                          {
                                            $contador++;  
                                              
                                          
                                     // <!-- Categoria 1 -->
                                            $_cpx1 = mysqli_query($appc, "
                                                SELECT * FROM project$v
                                                WHERE cacId = '" . $contador .  "' AND  etapaId = 1
                                                ");
                                        if($cp = $_cpx1 -> fetch_object() != null) {
                                    
                                            $_ccc = mysqli_query($pquest, "
                                                SELECT * FROM permisos$vv 
                                                WHERE cacId = '" . $contador .  "' AND userId = '" . $_SESSION["userId"] ."' AND role > 0
                                            ");
                                            
                                            $_cac1 = mysqli_query($appc , "
                                                SELECT * FROM project$v
                                                WHERE cacId = '" . $contador .  "' 
                                            ");
                                            $cac1 = $_cac1 -> fetch_object();
                                            $cac1Name = $cac1 -> cacName;
                                        
                                        ?>
                                             <li>
                                                <div class="collapsible-header">
                                                    <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                    <span class="blue-grey-text text-darken-2"><?php echo $cac1Name; echo $user -> userId?></span>
                                                </div>
                                                <div class="collapsible-body">
                                                    <div class="field_wrapper ">
                                                        <div class="row">
                                                            <div class="col l12">           
                                                            <?php
                                                            $ccontador= 0;
                                                            while ($cp = $_ccc -> fetch_object()) {
                                                                $ccontador++;
                                                                $canId = $cp -> actividadId;
                                                                $mo = $cp -> modeloId;
                                                                
                                                                 $_cac11 = mysqli_query($appa , "
                                                                        SELECT * FROM project$v
                                                                        WHERE actividadId = '" . $canId.  "' 
                                                                    ");
                                                                    $cac11 = $_cac11 -> fetch_object();
                                                                    $can = $cac11 -> actividadName;
                                                                ?>
                                                                
                                                                
                                                                <!-- tabla q contiene las actividades -->
                                                                <table class="m-t-5" style="width:100%;">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="width:85%;">
                                                                                    <?php echo $can;?> 
                                                                                </td>
                                                                                <td class="center " style="width:3%;background-color:white">
                                                                                    <div <?php if ($cp -> mci == 1){?> class='q-items b-b-red'<?php }else{?> class='q-items b-b-white' <?php }?>  
                                                                                    style="margin-right:0.3em; background-color:white"><a href='#' class="green-text">
                                                                                    CI
                                                                                         </a></div>
                                                                                 </td>
                                                                                 <td class="center white"   style="width:3%; background-color:#cfd8dc">
                                                                                    <div <?php if ($cp -> cg == 1){?> class='q-items b-b-red'<?php }else{?> class='q-items b-b-white' <?php }?>  
                                                                                    style="margin-right:0.3em; background-color:white;"><a href='#' class="orange-text" >
                                                                                    CG
                                                                                         </a></div>
                                                                                         </td>
                                                                                <td class="center white " style="width:3%;background-color:#cfd8dc">         
                                                                                    <div <?php if ($cg -> sc == 1){?> class='q-items b-b-red'<?php }else{?> class='q-items b-b-white' <?php }?>  
                                                                                    style="margin-right:0.3em; background-color:white"><a href='#' class="red-text" >
                                                                                    SC
                                                                                         </a></div>
                                                                                         </td>
                                                                                <td class="center white " style="width:3%;background-color:#cfd8dc">
                                                                                    <div <?php if ($cg -> aa == 1){?> class='q-items b-b-red'<?php }else{?> class='q-items b-b-white' <?php }?>  
                                                                                    style="margin-right:0.3em; background-color:white"><a href='#' class="black-text" >
                                                                                    AA
                                                                                         </a></div>
                                                                                    
                                                                                    
                                                                                </td>
                                                                                
                                                                                <td class="center blue-grey lighten-3" style="width:3%;">
                                                                                
                                                                        </tbody>
                                                                    </table>
<!-- final tabla que contiene actividades-->
                                                                                    
                                                                                    
                                                                                <?php
                                        $rcontador = 1;
                                        $status = mysqli_query($pquest, "SELECT * FROM permisos$vv WHERE userId = '" . $_SESSION["userId"] . "' and role != 0  and etapaId = 1 and amId = '" . $cp -> amId . "'");

                                        while ($r_status = $status -> fetch_object()) {
                                            
                                        if($r_status -> role == 1){
                                            $icon = "<div class=''>";
                                            
                                            $_re = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $r_status -> amId. "'");
                                            $re = $_re -> fetch_object();
                                            
                                         if ($re -> statusId == NULL) {
                                                $icon.="<a href='../c/project.php?m=ccreate&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i class='material-icons' style='color:#a5d6a7'>edit</i>";
                                            }
                                            elseif ($re -> statusId == 1) {
                                                $icon.= "<a href='../c/project.php?m=edit&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 2) {
                                                $icon.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 3) {
                                                $icon.= "<a href='../c/project.php?m=edit&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 4) {
                                                $icon.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 5) {
                                                $icon.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                                $rcontador++;
                                                
                                            }
                                        
                                         $icon.= "</a></div>";
                                        echo $icon;
                                        
                                            }
                                            
                                            
                                        if($r_status -> role == 2){
                                            $icon2 = "<div class=''>";
                                              
                                            $_re = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $r_status -> amId. "'");
                                            $re = $_re -> fetch_object();
                                            
                                         if ($re -> statusId == NULL) {
                                                $icon2.="<a href='javascript:void(0)'><i class='material-icons' style='color:#b2ebf2'>edit</i>";
                                            }
                                            elseif ($re -> statusId == 1) {
                                                $icon2.= "<a href='javascript:void(0)' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 2) {
                                                $icon2.= "<a href='../c/project.php?m=redit&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 3) {
                                                $icon2.= "<a href='javascript:void(0)'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 4) {
                                                $icon2.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                                $rcontador++;
                                            }
                                            elseif ($re -> statusId == 5) {
                                                $icon2.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                                $rcontador++;
                                                
                                            }
                                        
                                         $icon2.= "</a></div>";
                                        echo $icon2;
                                            
                                      
                                            
                                            }
                                            
                                        if($r_status -> role == 3){
                                            $icon3 = "<div class=''>";
                                            
                                            $_re = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE amId = '" . $r_status -> amId. "'");
                                            $re = $_re -> fetch_object();
                                            
                                         if ($re -> statusId == NULL) {
                                                $icon3.="<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i class='material-icons '>edit</i>";
                                                $rcontador++;
                                             
                                         }
                                            elseif ($re -> statusId == 1) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped orange-text' data-position='top'>done</i>";
                                                $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 2) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped green-text' data-position='top'>done</i>";
                                            $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 3) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> amId}' class='material-icons tooltipped red-text' data-position='top'>warning</i>";
                                            $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 4) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped blue-text' data-position='top'>done_all</i>";
                                            $rcontador++;
                                                
                                            }
                                            elseif ($re -> statusId == 5) {
                                                $icon3.= "<a href='../c/project.php?m=read&p=p&c={$c}&amId={$r_status -> amId}&serviceId={$serviceId}&md={$md}'><i data-tooltip='{$r_status -> projectIId}' class='material-icons tooltipped black-text' data-position='top'>lock</i>";
                                            $rcontador++;
                                                
                                            }
                                        
                                         $icon3.= "</a></div>";
                                        echo $icon3;
                                            
                                            
                                            
                                            }
                                            
                                           
                                            
                                            
                                           
                                            
                                            
                                        }
                                        ?>
                                                                                    
                                                                                    
                                                                                <!-- botones     
                                                                                    
                                                                                    <a href="../c/project.php?m=question&p=p&c=<?php echo $c;?>&mmodeloId=<?php echo $cp -> mmodeloId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" class="secondary-content">
                                                                                        <i class="material-icons blue-grey-text text-lighten-5">edit</i>
                                                                                    </a>-->
                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                <!-- END tabla q contiene las actividades -->
                                                                
                                                               
                                                                            
                                                         <?php } ?>
                                                           
                                                                    
                                                                </div>     
                                                        </div>
                                                    </div>
                                               </div>
                                            </li>
                                            <?php }} ?>
                                    <!-- Categoria 1 -->
                                    
                                                            <!-- despegable -->                
                                                        </div>
                                                    </div>
<!-- preguntas -->      
</li>            

