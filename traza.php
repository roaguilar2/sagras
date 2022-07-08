<ul class="collapsible m-l-10 m-r-10">
    <li>
        <div class="collapsible-header blue-grey-text text-darken-2">
            <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                Traza Auditoria 
        </div>

        <div class="collapsible-body">
        <table style="width:50%">
        <thead>
          <tr>
              <th>Fecha</th>
              <th>Usuario</th>
               <th>Rol en la Ac</th>
              <th>Acci&oacute;n</th>
             
          </tr>
        </thead>

        <tbody>      
        <?php
   $_client = mysqli_query($connection, "SELECT * FROM traceac WHERE itemId = '" . $iid . "' AND ac = '" . $aid . "' ");
     while ($client = $_client -> fetch_object()) {
       $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $client -> userId . "'");
       $user = $_user -> fetch_object();
    
       $_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $client -> designatedId . "'");
       $designated = $_designated -> fetch_object();
       
       $_action = mysqli_query($connection, "SELECT * FROM action WHERE actionId = '" . $client -> action . "'");
       $action = $_action -> fetch_object();

  $date =  $client -> date; 



       ?>
       
       
          <tr>
            <td><?php echo  $date; ?> </td>
            <td><?php echo $user -> userName;  ?> <?php echo $user -> userSurname;  ?> </td>
            <td><?php echo $designated -> designatedName;  ?></td>
            <td><?php echo $action -> actionName; ?></td>
            
          </tr>
          <?php  }  ?>
      
        </tbody>
      </table>                                  
                                      
        </div>
    </li>
 </ul>