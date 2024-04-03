<?php
// Iniciar buffering y sesiones
ob_start();
session_start();

//ruta
$path = TemplateController::path();


// Capturar rutas de la URL limpiando las queries
$routesArray = explode("/", $_SERVER["REQUEST_URI"]);
array_shift($routesArray);
foreach ($routesArray as $key => $value) {
  $routesArray[$key] = explode("?", $value)[0];
}


// Realizar solicitud GET para obtener la plantilla a utilizar
$url = "admins";
$method = "GET";
$fields = array();
$template = CurlController::request($url, $method, $fields);

if ($template->status != 200) {
  // Gestionar error en la obtención de la plantilla
  exit('Error al cargar la plantilla.'); // O puedes incluir una página de error personalizada.
}

$template = $template->results[0];



// Incluir partes estáticas de la plantilla
include('modules/header.php');


// Modificamos la función para aceptar $path como un argumento
function loadPage($route, $path)
{
  // Ahora $path está disponible dentro de esta función
  include('modules/topbar.php');

  //include('modules/breadcrumb.php');
  include('modules/sidebar.php');
  include("pages/{$route}/{$route}.php");
}

// Enrutamiento
if (isset($_SESSION["admin"])) {
  $route = !empty($routesArray[0]) ? $routesArray[0] : "inicio";
  $validRoutes = ["inicio", "usuarios", "salir"]; // Añadir rutas válidas aquí

  if (in_array($route, $validRoutes)) {
    echo '<body class="hold-transition sidebar-mini sidebar-collapse">';
    echo '<div class="wrapper"';
    loadPage($route, $path);
    echo '</div>'; // Pasamos $path como un argumento aquí
  } else {
    include('pages/404/404.php');
  }
} else {
  include('pages/login/login.php');
}

?>

 <!-- Cierre page-wrapper -->

<!-- AdminLTE App -->
<script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
<script src="<?php echo $path ?>views/assets/js/products/products.js"></script>



<!-- final body y html -->
</body>

</html>