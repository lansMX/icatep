<?php

    namespace icatepec\action;

    define('__ACTION__', dirname(dirname(__FILE__)));
    require(__ACTION__.'/dao/tb_user_impl.php');

    use db\connection\DBCtn;
    use icatepec\dao\tb_user_impl;

    /**
     * This class calls DB for future
     * activities register 
     */
    class logout {

        private $tb_user;

        /**
         * This Class 
         */
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

        public function panelToSend(){
            $url = "/";
            return $url;
        }

    }

    # create the response 
    $response = ["status" => "fail"];
    
    # create session
    session_start();

    # check info 
    if(isset($_SESSION)){
        # instatiate login class
        $logout = new logout();

        unset($_SESSION);
        
        session_destroy();

        $response["status"] = "success";
        header("location: http://localhost/ICATEP_PANEL/");
        
        # write the response 
        print_r(json_encode($response));
    }else{
        # write when user and pass are null
        print_r(json_encode($response));
    }

?>