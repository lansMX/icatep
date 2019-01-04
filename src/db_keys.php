<?php 
	
	namespace db\connection;

	/**
	 *   sql46.main-hosting.eu
	 */
	class db_keys
	{

		private static $db_production = [
			'user' => 'root',
			'pass' => '',
			'dns' => 'mysql:dbname=almacen;host=localhost'
		];

		private static $db_test = [
			'user' => 'u755167020_payus',
			'pass' => 'W4GKdpK3F7pq',
			'dns' => 'mysql:dbname=u755167020_lime;host=mysql.hostinger.mx'
		];

		private static $db_recovery = [
			'user' => 'u755167020_payus',
			'pass' => 'W4GKdpK3F7pq',
			'dns' => 'mysql:dbname=u755167020_lime;host=mysql.hostinger.mx'
		];
		
		function __construct(){ }

		public function get_key($liveMode, $recovery = null){
			
			
			$key = ['db_extra' => self::$db_test];
			if(is_null($recovery)){
				$key['db_recovery'] = self::$db_recovery;
			}
			$key['db_active'] = self::$db_test;
			if($liveMode){
				$key['db_active'] = self::$db_production;
			}
			// var_dump($key);
			return $key;
		}


	}

	
 ?>