<?php    
   $Num1= $_POST["Num1"];
   $Num2 = $_POST["Num2"];
   $ope= $_POST["op"];
	if($ope=="+"){
		$res=$Num1+$Num2;
		echo"$Num1 + $Num2 =".$res;
	}
	else if($ope=="-"){
		$res=$Num1-$Num2;
		echo"$Num1 - $Num2 =".$res;
	}
	else if($ope=="/"){
		$res=$Num1/$Num2;
		echo"$Num1 / $Num2 =".$res;
	}
	else if($ope=="*"){
		$res=$Num1*$Num2;
		echo"$Num1 * $Num2 =".$res;
	}
	else{
	echo "dato incorrepto";
	}
?>