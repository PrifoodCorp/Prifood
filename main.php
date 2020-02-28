
<?php include('header.html'); ?>
<!-- LEFT NAVIGATION -->
<?php include('navleft.html'); ?>  
<!-- MODULES -->


<script src="vendors/jquery/dist/jquery.min.js"></script>



<?php

if(isset($_REQUEST['v'])) {
    $views = $_REQUEST['v'];
    
    switch ($views) {
        
        // ADMIN
        case 'home':
            include('../views/home/home.html');
        break;
        
        case 'so-all': 
            include('../views/salesorder/list.html');
        break; 

        case 'so-open': 
            include('../views/salesorder/list.html');
        break;

        case 'so-p': 
            include('../views/salesorder/pending.html');
        break; 

        case 'so-r': 
            include('../views/salesorder/planned.html');
        break; 

        case 'sku-list': 
            include('../views/items/items.html');
        break; 

        case 'container': 
            include('../views/container/container.html');
        break; 

        case 'users': 
            include('../views/users/users.html');
        break; 

        case 'acc': 
            include('../views/account/account.html');
        break; 

        case 'dist': 
            include('../views/debtor/debtor.html');
        break; 




        // PLANNER
        case 'pl-list':
            include('../views/planner/list.html');
        break;

        case 'pl':
            include('../views/planner/plan.php');
        break;

        case 'so-declined':
            include('../views/planner/declined.html');
        break;

        default:
            include('500.html');
        break;
    }
} else {
    include('404.html');
}


?>

 
<!-- RIGHT NAVIGATION -->
<?php include('navright.html'); ?>



<?php if($views == 'so-all'
    || $views =='so-p'
    || $views =='so-open'
    || $views == 'pl-list'
    || $views =='pl'
    || $views =='sku-list'
    || $views =='container'
    || $views =='so-declined'
    || $views =='users'
    || $views =='dist'
) {?> 
<!-- <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script> -->
<script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="node_modules/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="node_modules/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<!-- <script src="node_modules/datatables.net-fixedcolumns-bs4/js/fixedColumns.bootstrap4.js"></script> 
https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js
-->
<!-- <script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>  -->
<script src="node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>    
<script src="custom/datatables/responsive.js"></script> 
<script src="custom/datatables/fixedColumns.js"></script> 
<?php } ?>
 
 



     <!-- END OF MODULES -->
     
<?php include('footer.html'); ?>