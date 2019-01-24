<?php

    namespace icatepec\action;

    define('__ACTION__', dirname(dirname(__FILE__)));
    require(__ACTION__.'/dao/tb_user_impl.php');

    use db\connection\DBCtn;
    use icatepec\dao\tb_user_impl;

    class login {

        private $tb_user;

        function __construct(){
            $this->tb_user = new tb_user_impl();
        }

        /**
         * @param user,
         *              user object 
         * @return userInfoFromDataBase,
         *                              The info requested in query
         */
        public function authenticate($user)
        {
            return $this->tb_user->login($user);
        }

        public function panelToSend($role){
            $url = "";
            switch($role){
                case "Admin":
                    $url = "dashboard";
                break;
                case "Responsable":
                    $url = "responsible";
                break;
                case "Solicitante":
                    $url = "request";
                break;
                case "Consulta":
                    $url = "client";
                break;
            }
            return $url;
        }

    }

    # create the response 
    $response = ["status" => "fail"];

    # check info 
    if(isset($_POST["user"]) && isset($_POST["pass"])){
        # recieved code from view
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        
        # instatiate login class
        $login = new login();
        # go 2 db 4 user
        $resp_db = $login->authenticate([
            "user" => $user,
            "pass" => $pass,
        ]);

        if(!empty($resp_db)){
            # create session
            session_start();

            $_SESSION["id"]  = $resp_db[0]["id"];
            $_SESSION["nombre"] = $resp_db[0]["nombre"];
            $_SESSION["tipo_usuario"] = $resp_db[0]["tipo_usuario"];
            $_SESSION["clave_unidad_area"] = $resp_db[0]["clave_unidad_area"];

            # asign values to response
            $response["status"] = "success";
            $response["sendTo"] =  "../../ICATEP_PANEL/html/system/" . $login->panelToSend($resp_db[0]["tipo_usuario"]);
        }
        
        # write the response 
        print_r(json_encode($response));
    }else{
        # write when user and pass are null
        print_r(json_encode($response));
    }

?>