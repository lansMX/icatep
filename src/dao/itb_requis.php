<?php 

	namespace icatepec\dao;

	interface itb_requis {

        public function get_all($user_request);

        public function add($requisition);
        
        public function edit($requisition);

        public function delete($requisition);

        public function get_by_id_req($requisition);

        public function get_by_id_user($user);
	}

 ?>