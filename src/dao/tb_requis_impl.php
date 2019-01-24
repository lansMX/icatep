<?php
	namespace icatepec\dao;

	use db\connection\DBCtn;
    
	define('__DAOA__', dirname(dirname(__FILE__))); 
	require(__DAOA__.'/connection/DBCtn.php');
	require(__DAOA__.'/dao/itb_requis.php');

	/**
	 * Class for accesing to table in BD named as requis
	 * charged for all the requisition realized
     * Implements itb_requis interface
     * @author  ALL && LANS
     * @version 1.0
     * @since   2019-01-16
	 */
	class tb_requis_impl extends DBCtn implements itb_requis
	{
		private $con = null;
        function __construct() { }
        
        /**
         * Get every row in BD from table requis,
		 * Only the administrators are ables to fetch this information!!
         * @return array,
         *              retrieve data in associative array format
         * @see <a href="http://php.net/manual/es/pdo.prepare.php">
         *      see the prepared statement</a>
         */
		public function get_all($user_request){
			$this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = "SELECT requis.id_requi, requis.folio, requis.fec_solicitud, requis.estatus, requis.cant_solicitada, 
							requis.clave_articulo, requis.id_solicitante, 
						solicita.nombre, solicita.id_usuario
						FROM requis 
						inner join usuarios as solicita on solicita.id_usuario = requis.id_solicitante 
						inner join usuarios as checkAdmin on checkAdmin.id_usuario = ? and checkAdmin.tipo_usuario = 'Admin';";

				$stmt = $this->con->prepare($query);
							
				$stmt->execute([ $user_request['id'] ]);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }
        
        public function add($requisition){
            $this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = 'INSERT INTO requis (id_requi, folio, fec_solicitud, estatus, cant_solicitada, clave_articulo, id_solicitante) values';
            	
				$stmt = $this->con->query($query);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }

        public function edit($requisition){
            $this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = 'SELECT id_requi, folio, fec_solicitud, estatus, cant_solicitada, clave_articulo, id_solicitante FROM user;';
            	
				$stmt = $this->con->query($query);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }

        public function delete($requisition){
            $this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = 'SELECT id_requi, folio, fec_solicitud, estatus, cant_solicitada, clave_articulo, id_solicitante FROM user;';
            	
				$stmt = $this->con->query($query);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }

        public function get_by_id_req($requisition){
			$this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = "SELECT requis.id_requi, requis.folio, requis.fec_solicitud, requis.estatus, requis.cant_solicitada, 
							requis.clave_articulo, requis.id_solicitante, 
						solicita.nombre, solicita.id_usuario
						FROM requis 
						inner join usuarios as solicita on solicita.id_usuario = requis.id_solicitante 
						where requis.id_requi = ? ;";

				$stmt = $this->con->prepare($query);
							
				$stmt->execute([ $requisition['id'] ]);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }

        public function get_by_id_user($user){
            $this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = "SELECT requis.id_requi, requis.folio, requis.fec_solicitud, requis.estatus, requis.cant_solicitada, 
							requis.clave_articulo, requis.id_solicitante, 
						solicita.nombre, solicita.id_usuario
						FROM requis 
						inner join usuarios as solicita on solicita.id_usuario = requis.id_solicitante 
						where requis.id_solicitante = ? ;";

				$stmt = $this->con->prepare($query);
							
				$stmt->execute([ $user['id'] ]);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }
	}



?>