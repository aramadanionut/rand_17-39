<$php
	function rand_01(){
		return mt_rand() / mt_getrandmax();
	}
	function rand_17_30(){
		return 17+13*rand_01();
	}
	echo rand_17_30();
?>
