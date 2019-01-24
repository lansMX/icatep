<?php
	namespace icatepec\dao;

	use db\connection\DBCtn;

	define('__DAOA__', dirname(dirname(__FILE__))); 
	require(__DAOA__.'/connection/DBCtn.php');
	require(__DAOA__.'/dao/itb_user.php');


	/**
	 *
	 * Class in BD is named as cat_articulo
	 *
	 */
	class tb_user_impl extends DBCtn implements itb_user
	{
		private $con = null;
		function __construct() { }

		public function get_all(){
			$this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = 'SELECT * FROM user;';
            	
				$stmt = $this->con->query($query);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
		}

		public function login($user){
			$this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = "SELECT `id_usuario` AS id,`tipo_usuario`,`nombre`,`clave_unidad_area` 
					FROM usuarios WHERE nombre = ? && pwd = ? LIMIT 1; ";

				$stmt = $this->con->prepare($query);
			
				$stmt->execute([$user['user'], $user['pass']]);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);
			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
        }
        
        public function rgstr_user($user){
			$this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = 'INSERT INTO cat_articulo () VALUES ();';
            	
				$stmt = $this->con->query($query);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
		}
	}



?>