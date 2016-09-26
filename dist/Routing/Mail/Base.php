    
	<?php
	$liczba=mysql_query("SELECT count(*) as total FROM  `base_mail` where userid='$userid' group by '$userid' ;");
	$data=mysql_fetch_assoc($liczba);
	$data['total'];
	?>
	<div class="text-center">
              <a data-toggle="modal" class="quick-btn" href="../Mail/YourBase">
                <i class="fa fa-bolt fa-2x"></i>
                <span>Twoja Baza</span> 
                <span class="label label-default"><?php echo $data['total']; ?></span> 
              </a> 
              <a data-toggle="modal" class="quick-btn" href="../Mail/Add">
                <i class="fa fa-check fa-2x"></i>
                <span>Nowy E-mail</span> 
                <span class="label label-danger"><?php echo "!"; ?></span> 
              </a> 
           
              <a data-toggle="modal" class="quick-btn" href="../Mail/ImportCSV">
                <i class="fa fa-signal fa-2x"></i>
                <span>Import CSV</span> 
                <span class="label label-warning"><?php echo "^"; ?></span> 
              </a> 
             
            </div>