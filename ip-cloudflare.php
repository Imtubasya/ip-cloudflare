<?php


// PERUBAH WARNA TEXT

/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$merah="\033[0;31m";
$merah2="\033[1;31m";
$hijau="\033[0;32m";
$hijau2="\033[1;32m";
$kuning="\033[0;33m";
$kuning2="\033[1;33m";
$biru="\033[0;34m";
$biru2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */
//===========================================================================//
	/* STAR SCRIPT */
sleep(1);
	system("clear");
		system("pkg install figlet");
	system("clear");
sleep(1);
echo $biru2."==============================================================".$putih; echo $biru2."\n";
	system("figlet IP cloudflare");
		echo $putih2."  [✓] CREATED BY : ".$hijau2."I'AM TUBASYA"; echo "\n";
echo $biru2."==============================================================".$putih; echo "\n";
sleep(1);
		echo $putih2."      [+] Enter Website Address : ".$hijau2."Https://";
	$site = trim(fgets(STDIN));
	$ip = file_get_contents("https://tools.pentestcore.com/cloudflare-bypass-c.php?byc="."$site");
echo $biru2."==============================================================".$putih; echo "\n";

	for ($×=5;$×>0;$×--){
		echo "\r   \r";
		echo $putih2."\r Process           =>  " .$hijau2.$×.$putih2." Second ";
	sleep(1);
	} echo "\n";
sleep(1);
echo $biru2."==============================================================".$putih; echo "\n";
sleep(1);
		echo $putih2."          [=] IP CloudFlare : ".$hijau2."$ip"; echo "\n";
echo $biru2."==============================================================".$putih; echo $kuning2."\n";
sleep(1);
	system("figlet Check Success!");
sleep(2); echo $putih;
	/* END SCRIPT */
