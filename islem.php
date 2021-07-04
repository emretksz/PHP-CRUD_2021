<?php

include "baglan.php";

if(isset($_POST["insertislemi"])){

	 $kaydet=$db->prepare("INSERT INTO uyeler SET

	 	uye_adi=:uye_adi,   /// sağdakiler takma isim soldakiler tablolar.
	 	email=:email,
	 	sifre=:sifre

	 	");
	 $insert=$kaydet->execute(array(
	 	"uye_adi" => $_POST["uye_adi"], /// takma isimlere verdiğimiz değerleri => ile post ediyoruz.
	 	"email" => $_POST["email"], 
	 	"sifre" => $_POST["sifre"]

	  ));

	 if ($insert) {
	 	Header("Location:crud.php");
	 	exit();
	 	//echo "kayıt başarılı";
	 }
	 else{
	 	Header("Location:crud.php");
	 	//echo "kayıt başarısız";
	 }
	 	
}

if(isset($_POST["updateIslemleri"])){

	$id=$_POST["id"];

	 $kaydet=$db->prepare("UPDATE  uyeler SET

	 	uye_adi=:uye_adi,    /*sağdakiler takma isim soldakiler tablolar.*/
	 	email=:email,
	 	sifre=:sifre
	 	where id ={$_POST["id"]}

	 	");
	 $insert=$kaydet->execute(array(
	 	"uye_adi" => $_POST["uye_adi"], /// takma isimlere verdiğimiz değerleri => ile post ediyoruz.
	 	"email" => $_POST["email"], 
	 	"sifre" => $_POST["sifre"]

	  ));

	 if ($insert) {
	 	Header("Location:duzenle.php?id=$id");
	 	exit();
	 	//echo "kayıt başarılı";
	 }
	 else{
	 	Header("Location:crud.php");
	 	//echo "kayıt başarısız";
	 }
	 	
}
	if($_GET['bilgilerimSil']=="ok"){
		$sil=$db->prepare("DELETE from uyeler where id=:id");
		$kontrol=$sil->execute(array(

			'id'=>$_GET['id']

		));

		 if ($kontrol) {
	 	Header("Location:SelectIslemleri.php?durum=ok");
	 	exit;
	 	//echo "kayıt başarılı";
	 }
	 else{
	 	Header("Location:SelectIslemleri.php?durum=no");
	 	//echo "kayıt başarısız";
	 	 	exit;
	 }
	}

?>