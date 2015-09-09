<?php
	$day = date("l");
	$time = date("h");
	$ampm = date("a");


	if ($day == "Monday" and $time<9 and $ampm=="am"){
		echo "今天我们10点开门,6点关闭.";
	}
	elseif ($day =="Monday" and $time>6 and $ampm =="pm"){
	echo "我们现在关门了.明天我们从10am点到6pm点开门.";
	}
	elseif ($day =="Monday"){
		echo "今天和明天我们从10am到6am开门.";
	}
	elseif ($day == "Tuesday" and $time<9 and $ampm=="am"){
		echo "今天我们10点开门,6点关闭.";
	}
	elseif ($day == "Tuesday" and $time>6 and $ampm=="pm"){
		echo "今天我们现在关门了.明天我们从10am点到6pm点开门.";
	}
	elseif($day =="Tuesday"){
		echo "今天和明天我们从10am到6am开门.";
	}
	elseif ($day == "Wednesday" and $time<9 and $ampm=="am"){
		echo "今天我们10点开门6点关闭.";
	}
	elseif ($day == "Wednesday" and $time>6 and $ampm=="pm"){
		echo "今天我们现在关门了.星期五我们10点开门6点关闭.";
	}
	elseif($day =="Wednesday"){
		echo "今天我们10点开门6点关闭.";
	}
		elseif ($day == "Thursday"){
		echo "今天我们星期四关门.明天我们10点开门6点关闭.";
	}
	elseif ($day == "Friday" and $time<9 and $ampm=="am"){
		echo "今天和明天我们从10am到6am开门.";
	}
	elseif($day == "Friday" and $time>6 and $ampm=="pm"){
		echo "我们今天关门了但是明天从10am到3pm开门.";
	}
	elseif($day == "Friday"){
		echo "今天我们10点开门6点关闭. 明天我们10点开门3点关闭.";
	}
	elseif ($day == "Saturday" and $time<9 and $ampm =="am"){
		echo "今天我们10点开门3点关闭.";
	}
	elseif ($day == "Saturday" and $time>3 and $ampm =="pm"){
		echo "今天和明天关门了. 我们星期一10点开门6点关闭.";
	}
	elseif($day =="Saturday"){
		echo "今天我们10点开门3点关闭.";
	}
	elseif ($day == "Sunday"){
		echo "我们关门了今天.明天我们从10am点到6pm点开门.";
	}

?>
