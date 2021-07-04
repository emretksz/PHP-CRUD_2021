<?php 

try {
	
	$db=new PDO("mysql:host=localhost;dbname=kullanicilar;charset=utf8",'root','');
	echo "veritabana bağlantısı başarılı";
} 

catch (PDOException $e) {
	
	echo $e->getMessage();
}
?>