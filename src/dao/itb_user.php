<?php 

	namespace icatepec\dao;

	interface itb_user {

        public function get_all();
        
        public function login($user);

		public function rgstr_user($user);
	}

 ?>