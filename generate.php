<?php
/*$fullPath = __DIR__.'/gallery';
try {
	$image = new Imagick();
} catch (ImagickException $e) {
}
try {
	$image->readImage($fullPath . '/car1.jpg');
} catch (ImagickException $e) {
}
$image->resizeImage(800,600, imagick::COLOR_BLACK, 0,8);
$image->writeImage($fullPath.'/car800*600.jpg');
if($f = fopen($fullPath.'/car800*600.jpg', "w")) {
  $image->writeImageFile($f);
}*/
$fullPath = __DIR__.'/gallery/';
$base = "http://".$_SERVER['SERVER_NAME']."/test_task/";
var_dump($base);

use PDO;
use PDOException;

class Database {
	/**
	 * @var PDO $connection
	 */
	private $connection;
	private $params;

	public function __construct($params) {
		$this->params = $params;
		$this->connect();
	}

	private function connect() {
		try {

			$user = $this->params['user'] ?? '';
			$pass = $this->params['pass'] ?? '';
			$host = $this->params['host'] ?? 'localhost';
			$dbname = $this->params['dbname'] ?? '';
			$this->connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
			]);
		} catch (PDOException $ex) {
			echo $ex->getMessage();
		}
	}

	public function getConnection(): PDO {
		return $this->connection;
	}
}

$db = new Database(['user' => 'root', 'dbname' => 'booksphp']);

?>
<div class=''>
	<img width="320" height="240" src="<?=$base?>/gallery/car1.jpg">
	<img width="320" height="240" src="<?=$base?>/gallery/car2.jpg">
	<img width="320" height="240" src="<?=$base?>/gallery/car3.jpg">
</div>
<div class=''>
	<img width="320" height="240" src="<?=$base?>/gallery/car4.jpg">
	<img width="320" height="240" src="<?=$base?>/gallery/car5.jpg">
	<img width="320" height="240" src="<?=$base?>/gallery/car6.jpg">
</div>
