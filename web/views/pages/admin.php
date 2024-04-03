<link rel="stylesheet" href="<?php echo $path ?>views/assets/css/admin/admin.css">
<?php

  if (!isset($_SESSION["admin"])) {
    include "login/login.php";
  } else {
    if(!empty($routesArray[1])){
      if($routesArray[1] == "usuarios" ||
         $routesArray[1] == "inventario" ||
         $routesArray[1] == "inicio"
         ){

        
        include $routesArray[1]."/".$routesArray[1].".php";

        //include('modules/footer.php');
        

      }else{
        // echo '<script>
        // window.location = "'.$path.'404";
        // </script>';
      }
    }
  }
?>