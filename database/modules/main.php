<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $querry= $_GET['query'];
        }else{
            $tam = '';
        }
        if($tam == 'quanlydanhmucsanpham' && $querry=='them'){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }else if($tam=='quanlydanhmucsanpham' && $querry=='sua'){
            include("modules/quanlydanhmucsp/sua.php");       
        }else if($tam=='quanlysp' && $querry=='them'){
            include("modules/quanlysp/them.php");  
            include("modules/quanlysp/lietke.php");     
        }else if($tam=='quanlysp' && $querry=='sua'){
            include("modules/quanlysp/sua.php");       
        }else{
            include("dashboard.php");
        }
    ?>
</div>