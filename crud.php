<?php
require_once"baglan.php";
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
	
<input type="text" required="" name="uye_adi" placeholder="Adınızı Giriniz">
<input type="email" required="" name="email" placeholder="Mail Adresinizi Giriniz">
<input type="text" required="" name="sifre" placeholder="Şifrenizi Giriniz">
<button type="sumbit" required="" name="insertislemi" >Formu Gönder</button>
</form>
<br>

<h4>Kayıtların Listelenmesi</h4>
<hr>


$bilgilerimiSor= $db->prepare("Select * From uyeler");
$bilgilerimiSor-> execute();
$bilgilerimCek=$bilgilerimiSor->fetch(PDO::FETCH_ASSOC);

/*echo $bilgilerimCek["uye_adi"]; /// tek üye adını seçtik*/

echo"";

SELECT İŞLEMİ
 while ($bilgilerimCek=$bilgilerimiSor->fetch(PDO::FETCH_ASSOC)) {
	echo$bilgilerimCek["uye_adi"];  echo"";
} 





<table style="width: 65%;" border="1">
	<tr>
	<th>Id</th>
	<th>Ad</th>
	<th>Mail</th>
	<th>Şifre</th>
	<th width="50%">İşlemler</th>
	</tr>

<?php

/*$bilgilerimCek=$bilgilerimiSor->fetch(PDO::FETCH_ASSOC);*/

/*echo $bilgilerimCek["uye_adi"]; /// tek üye adını seçtik*/

echo"<hr>";

/*SELECT İŞLEMİ*/

$bilgilerimiSor= $db->prepare("Select * From uyeler");
$bilgilerimiSor-> execute();
while ($bilgilerimCek=$bilgilerimiSor->fetch(PDO::FETCH_ASSOC)) {?>

	<tr>
		<td><?php echo $bilgilerimCek['id'] ?></td>
		<td><?php echo $bilgilerimCek["uye_adi"] ?></td>
		<td><?php echo $bilgilerimCek["email"] ?></td>
		<td><?php echo $bilgilerimCek["sifre"] ?></td>
		<td align="center"><a href=""><button>Sil</button></td></a>

	</tr>
<?php   }?>
</table>


</body>
</html>