<?php 
	namespace db\connection;

	use \PDO;

	// require('../../../../config/db_keys.php');
	define('__ROOT__', dirname(dirname(__FILE__))); 
		// var_dump(__ROOT__);
	require(__ROOT__.'/db_keys.php');



	/**
	 * Database Connection 
	 *
	 */
	class DBCtn extends PDO
	{
		private static $bridge;
		protected static $live_mode = true;
		protected static $recovery = false;

		function __construct(){}
		function __clone(){}

		public function get()
		{
			try{
				if(is_null(self::$bridge)){
					$keys = self::db_active();
					self::$bridge = new PDO($keys['db_active']['dns'], $keys['db_active']['user'], $keys['db_active']['pass']);
				}
			}
			catch(PDOException $error){
				echo "connection failed \n";
				return $error->getMessage();
			}
			return self::$bridge;
		}

		public function disconnect() {
	        self::$bridge = null;
	    }


		private static function db_active(){
			$key = new db_keys();
			$t = $key->get_key(self::$live_mode);
			// var_dump($t);
			return $t;
		}

		public function set_live_mode($mode){
			self::$live_mode = $mode;
		}

		public function set_recovery($recover){
			self::$recovery = $recover;
		}

	}


 ?>