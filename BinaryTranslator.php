<?php
	//base 10 to base 2
	function b2tob10($init){
		$count=0;
		$init=strrev($init);
		for ($i=0; $i < strlen($init); $i++) {
			$count += $init[$i] ? (2**($i)):0;
		}
		return $count;
	}
	//base 10 to base 2
	function b10tob2($init){
		$result='';
		$init2=$init;
		$len=ceil(log($init,2));
		for ($i=$len-1; $i > -1; $i--) {
			$sign=pow(2,$i);
			if ($init>=$sign){
				$result= $result . '1';
				$init-=$sign;
			}
			else {
				$result= $result . '0';
			}
		}
		return $result;
	}

?>