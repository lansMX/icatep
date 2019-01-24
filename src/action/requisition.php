<?php

    namespace icatepec\action;

    define('__ACTION__', dirname(dirname(__FILE__)));
    require(__ACTION__.'/dao/tb_requis_impl.php');

    use db\connection\DBCtn;
    use icatepec\dao\tb_requis_impl;

    class requisition {

        private $tb_requisition;

        function __construct(){
            $this->tb_requisition = new tb_requis_impl();
        }

        /**
         * @param user,
         *              user object 
         * @return userInfoFromDataBase,
         *                              The info requested in query
         */
        public function get_requisitions($user)
        {
            $response = [];
            $response["operation"] = false;
            try {
                switch ($user["tipo_usuario"]) {
                    case 'Admin':
                        $info = $this->tb_requisition->get_all($user);        
                        break;
                    case 'Solicitante':
                        $info = $this->tb_requisition->get_by_id_user($user);        
                        break;
                    default:
                        # code...
                        break;
                }
                $response["operation"] = true;
                $response["data"] = $info;
                
            } catch (\Exception $th) {
                $response["message"] = $th->getMessage();
            } 
            return $response;
        }

        public function get_detail_requisition($user)
        {
            try{
                
                $info = $this->tb_requisition->get_by_id_req($user);        
      
                $response["operation"] = true;
                $response["data"] = $info[0];
                
            } catch (\Exception $th) {
                $response["message"] = $th->getMessage();
            } 
            return $response;
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

    $ipAddress = $_SERVER["REMOTE_ADDR"]; // get ip client
    var_dump($_SERVER["REQUEST_URI"]);
    $request = explode('/', $_SERVER["REQUEST_URI"]);

    try{
        // check session
        session_start();
        if(!isset($_SESSION["id"])){
            throw new \Exception("Expired session");
        }
        // check request
        if( is_null($request) ){
            throw new \Exception("Invalid request");
        }
        
        $metodo = strtolower($_SERVER['REQUEST_METHOD']); // method of request
        $action = $request[0]; // unused. name of request

        $requisition = new requisition();

        if($metodo == "post"){
            $resp_db = $requisition->get_detail_requisition($_POST);
        }if($metodo == "get"){
            $resp_db = $requisition->get_requisitions($_SESSION);
        }

        // info from db
        if(empty($resp_db) || !$resp_db["operation"]){
            # asign values to response
            $response["requisition"] = [];
            throw new \Exception("No data available");
        }

        $response["status"] = "success";
        $response["requisition"] = $resp_db["data"];

    }catch(\Exception $th){
        $response["message"] = $th->getMessage();
    }

    print_r(json_encode($response));
          

?>