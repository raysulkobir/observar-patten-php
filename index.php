<?php 
    include "inc/header.php";
    include "inc/observer.php";
    include "inc/observeble.php";
    include "inc/skyp.php";
    include "inc/gtalk.php";
    
?>
<?php
//       function __autoload($calss_name){
//           include "inc/".$calss_name.".php";
//       }
?>

    <div class="para">
        <?php
            $obj = new observable();
            $sk = new gtalk();
            $gt = new skyp();
            $s = new stdClass();
            
            $obj ->register($sk);
            $obj ->register($gt);
            $obj ->register($s);
            $obj ->stateChange()
            
                    
         ?>
        
     
     </div>

<?php include "inc/footer.php"; ?>