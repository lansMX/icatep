<?php
	namespace icatepec\dao;

	use db\connection\DBCtn;

	define('__DAOA__', dirname(dirname(__FILE__))); 
	require(__DAOA__.'/connection/DBCtn.php');
	require(__DAOA__.'/dao/icat_articulo.php');


	/**
	 *
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
				
				if($this->con) throw new \Exception("Not connected");
				
				$query = 'SELECT * FROM cat_articulo;';
            	// SELECT Max(' . $id . ') as idMax FROM '.$this->model_table.';
				$stmt = $this->conn->prepare($query);
				
				$stmt->execute();
				
				return $stmt->fetchAll(PDO::FETCH_ASSOC);

			} catch (\Exception $e) {
				return $e;
			} catch (\PDOException $e) {
				return $e;
			}finally{
				$this->con = DBCtn::disconnect();
			}
		}

		public function add_product($obj_cat_articulo){

		}
	}


	$t =new cat_articulo_impl();
	var_dump($t->get_all());

?>