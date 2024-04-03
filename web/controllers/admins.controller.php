<?php

class AdminsController{
   /*=============================================
    Login Administradores
    =============================================*/
    public function login()
    {
        if (isset($_POST["loginAdminEmail"])) {

            echo '<script>
                fncMatPreloader("on");
            </script>';

            //validacion lado servidor de los campos
            if (preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginAdminEmail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginAdminPassword"])) {

                
                //login con la APi
                $url = "admins?login=true&suffix=admin";
                $method = "POST";
                $fields = array(
                    "email_admin" => $_POST["loginAdminEmail"],
                    "password_admin" => $_POST["loginAdminPassword"]
                );
                $login = CurlController::request($url, $method, $fields);
                // echo '<pre>'; print_r($login); echo '</pre>';

                //crea la variable de sesion
                if ($login->status == 200) {
                    $_SESSION["admin"] = $login->results[0];

                    echo '<script>
						localStorage.setItem("token-admin","'.$login->results[0]->token_admin.'");
                        windows.location="inicio";
                    </script>';
                }else{
                    $error=null;
                    if($login->results == "Wrong email"){
                        $error = "El correo electrónico no existe"; 
                    }else{
                        $error = "La contraseña es incorrecta";
                    }

                    echo '<div class="alert alert-danger mt-3">'.$error.'</div>

                    
                    <script>
                        //fncSweetAlert("error","Error al ingresar: '.$error.'", "");
                        fncToastr("error","Error al ingresar: '.$error.'");
                        fncMatPreloader("off");
                        fncFormatInputs();
                    </script>
                    ';
                }
            } else {
                echo '<div class="alert alert-danger mt-3">Error de sisntaxis en los campos</div>

                    <script>
                        
                        fncToastr("error","Error en la sintaxis de los campos");
                        fncMatPreloader("off");
                        fncFormatInputs();
                    </script>
                    ';
            }
        }


    }
}