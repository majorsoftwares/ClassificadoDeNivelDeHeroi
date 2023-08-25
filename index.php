<?php
	$nome = "Francisgleydisson";
	$xp = 50019;
	$tipo = "";

	if($xp <= 1000)
	{
		$tipo = "Ferro";
	}
	elseif($xp > 1000 && $xp <= 2000)
	{
		$tipo = "Bronze";
	}
	elseif($xp > 2000 && $xp <= 5000)
	{
		$tipo = "Prata";
	}
	elseif($xp > 5000 && $xp <= 7000)
	{
		$tipo = "Ouro";
	}
	elseif($xp > 7000 && $xp <= 8000)
	{
		$tipo = "Platina";
	}
	elseif($xp > 8000 && $xp <= 9000)
	{
		$tipo = "Ascendente";
	}
	elseif($xp > 9000 && $xp <= 10000)
	{
		$tipo = "Imortal";
	}
	else
	{
		$tipo = "Radiante";
	}

	echo "O Herói ".$nome." está no nível de ".$tipo;
?>
