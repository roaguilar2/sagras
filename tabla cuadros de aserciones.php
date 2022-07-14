
<!-- tabla q contiene las actividades en un desplegable  -->
<?php if ($etapaId == 3) { ?>
<div class="col s12 m12 l12 ">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header grey lighten-4"><i class="material-icons red-text">assignment_late</i>Ascerciones</div>
                                                    <div class="collapsible-body">
                                                        <div class="row">


                                                            <table class="">
                                                                <tbody>
<tr>

<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    C
                                                                                         </a></div>
</td>                                                                                         
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    A
                                                                                         </a></div>
</td>
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    E/O
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    CO
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    RO
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    VA
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    PD
                                                                                         </a></div>
</td>

</tr>
                                                                    

                                                                        <tr>
                                                                           
                                                                            


                                                                                
                                                                            
                                                                            <td class="  grey lighten-4" style="background-color:white">

                                                                                <a class=" tooltipped" data-tooltip="Asercion  1 C">


                                                                                    <label>
                                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a1" />
                                                                                        <input class="filled-in "   value="1" type="checkbox" name="pc[<?php echo $mmodelo->aId; ?>]" />
                                                                                        <span class="blue-grey-text text-darken-2"> </span>
                                                                                    </label>



                                                                                </a>



                                                        </div>
                                                        </td>
                                                        <td class=" grey lighten-4" style=" background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 2 A">
                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a2" />
                                                                        <input class="filled-in "  type="checkbox" value="1"  name="pca[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>
                                                                     

                                                                </a>


                                                            </div>
                                                        </td>
                                    
                                                        <td class="grey lighten-4" style="background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 3 E/O">
                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a3" />
                                                                        <input class="filled-in "  type="checkbox" name="pcb[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>

                                                                </a>
                                                            </div>
                                                        </td>

                                                        <td class="grey lighten-4" style="background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 4 CO">

                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a4" />
                                                                        <input class="filled-in "  type="checkbox" name="pcc[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>


                                                                </a>

                                                            </div>
                                                        </td>

                                                        <td class="grey lighten-4" style="background-color:white">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 5 RO">
                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a5" />
                                                                        <input class="filled-in "  type="checkbox" name="pcd[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"> </span>
                                                                    </label>

                                                            </div>

                                                            </a>
                                                    </div>
                                                    </td>

                                                    <td class="grey lighten-4" style="background-color:#cfd8dc">
                                                        <div>
                                                            <a class=" tooltipped" data-tooltip="Asercion 6 VA">
                                                                <label>
                                                                    <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a6" />
                                                                    <input class="filled-in "  type="checkbox" name="pce[<?php echo $mmodelo->aId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"></span>
                                                                </label>

                                                        </div>
                                                        </a>
                                        </div>
                                        </td>

                                        <td class="grey lighten-4" style="background-color:#cfd8dc">
                                            <div>

                                                <a class=" tooltipped " data-tooltip="Asercion 7 PD">
                                                    <label>
                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="a7" />
                                                        <input class="filled-in "  type="checkbox" name="pcf[<?php echo $mmodelo->aId; ?>]" />
                                                        <span class="blue-grey-text text-darken-2"></span>
                                                    </label>
                                                </a>

                                            </div>
                                        </td>
                                        
                                    </tbody>
                                    </table>

                                    </div>
                                </div>

                                </li>
                                </ul>
                            </div>
                            <?php } ?>
                            <!-- final tabla que contiene actividades--> 


