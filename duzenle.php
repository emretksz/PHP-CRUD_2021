<?php
require_once"baglan.php";

?>
<?php 


$bilgilerimiSor=$db->prepare("SELECT * From uyeler where id=:id"); /* id tablodan gelen. uye_id ise islemden gönderdiğimiz*/
$bilgilerimiSor->execute(array(
'id'=>$_GET['id']
));
 $bilgilerimCek=$bilgilerimiSor->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud İşlerleri</title>
</head>
<body>

<h1>Veritabanı PDO kayıt  işlemleri</h1>

<form action="islem.php" method="POST">
	
<input type="text" required="" name="uye_adi" value="<?php echo $bilgilerimCek['uye_adi']?>">
<input type="email" required="" name="email" value="<?php echo $bilgilerimCek['email']?>">
<input type="text" required="" name="sifre" value="<?php echo $bilgilerimCek['sifre']?>">
<input type="hidden" name="id" value="<?php echo $bilgilerimCek['id']?>">
<button type="sumbit" required="" name="updateIslemleri" >Formu Düzenle</button>
</form>
<br>



</body>
</html>