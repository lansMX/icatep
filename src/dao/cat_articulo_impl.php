<?php
	namespace icatepec\dao;

	use db\connection\DBCtn;

	define('__DAOA__', dirname(dirname(__FILE__))); 
	require(__DAOA__.'/connection/DBCtn.php');
	require(__DAOA__.'/dao/icat_articulo.php');


	/**
	 * Class in BD is named as cat_articulo
	 *
	 */
	class cat_articulo_impl extends DBCtn implements icat_articulo
	{
		private $con = null;
		function __construct() { }

		public function get_all(){
			$this->con = null;
			try {
				$this->con = DBCtn::get();
				
				$query = 'SELECT * FROM cat_articulo;';
            	
				$stmt = $this->con->query($query);
				
				return $stmt->fetchAll(DBCtn::FETCH_ASSOC);

			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
		}

		public function add_product($obj_cat_articulo){
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


	$t =new cat_articulo_impl();

?>