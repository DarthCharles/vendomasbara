<?php 

	/**
	* Clase para conectarnos a la base de datos
	*/
	class DB_CONNECT
	{

		//private $conn;
		private $conn;

		//Constructor
		function __construct()
		{
			// conectamos a la base de datos
			$this->connect();
		}

		//Destructor
		function __destruct()
		{
			$this->close();
		}

		/**
		* Funcion para conectarnos a la base de datos
		*/
		function connect()
		{
			//importamos las variables para la conexion a la base de datos
			require_once dirname(__FILE__).'/db_config.php';

			//Connectamos a la base de datos
			$this->conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die("Error ".mysqli_error());
		}

		function close()
		{
			mysqli_close($this->conn);
		}

		public function query($sql){
			mysqli_query($this->conn, $sql) or die ("Error".mysqli_error($this->conn));
			$query = mysqli_query($this->conn, $sql);
			return $query;
		}

		public function numRows($query){
			$rows = mysqli_num_rows($query);
			return $rows;
		}
	}
	?>
