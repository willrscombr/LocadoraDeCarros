<?php
class ConnectionBD extends PDO {
	private $dsn = 'mysql:dbname=locacaocarros;host=127.0.0.1';
	private $user = 'roo';
	private $password = '';
	public static $handle = null;

	function __construct( ) {
		try {
			if ( self::$handle == null ) {
				$dbh = parent::__construct( $this->dsn , $this->user , $this->password );
				self::$handle = $dbh;
				return self::$handle;
			}
		}
		catch ( PDOException $e ) {
			echo 'Connection failed: ' . $e->getMessage( );
			return false;
		}
	}

	function __destruct( ) {
		self::$handle = NULL;
	}
}
?>