<?php

    class userDTO{
        $name;
        $role;
        $pass;

      	function setName($var = null)
        {
            $this->name = $var;
        }
        
        function getName()
        {
            return $this->name;
        }

        function setRole($var = null)
        {
            $this->role = $var;
        }

        function getRole()
        {
            return $this->role;
        }

        function setPass($var = null)
        {
            $this->pass = $var;
        }

        function getPass()
        {
            return $this->pass;
        }
    }

?>