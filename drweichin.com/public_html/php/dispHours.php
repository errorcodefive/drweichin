<?php
	$day = date("l");
	$time = date("h");
	$ampm = date("a");


	if ($day == "Monday" and $time<9 and $ampm=="am"){
		echo "Today we open at 10am and close at 6pm.";
	}
	elseif ($day =="Monday" and $time>6 and $ampm =="pm"){
	echo "We are currently closed but tomorrow we open at 10am and close at 6pm.";
	}
	elseif ($day =="Monday"){
		echo "Today and tomorrow we are open from 10am to 6pm.";
	}
	elseif ($day == "Tuesday" and $time<9 and $ampm=="am"){
		echo "Today we open at 10am and close at 6pm";
	}
	elseif ($day == "Tuesday" and $time>6 and $ampm=="pm"){
		echo "We are currently closed but tomorrow we open at 10am and close at 6pm";
	}
	elseif($day =="Tuesday"){
		echo "Today and tomorrow we are open from 10am to 6pm.";
	}
	elseif ($day == "Wednesday" and $time<9 and $ampm=="am"){
		echo "Today we open at 10am and close at 6pm.";
	}
	elseif ($day == "Wednesday" and $time>6 and $ampm=="pm"){
		echo "We are closed for today and tomorrow but we open at 10am and close at 6pm on Friday.";
	}
	elseif($day =="Wednesday"){
		echo "We are open from 10am to 6pm. Tomorrow we are closed but Friday we open at 10am and close at 6pm.";
	}
		elseif ($day == "Thursday"){
		echo "We are closed on Thursdays but tomorrow we open at 10am and close at 6pm.";
	}
	elseif ($day == "Friday" and $time<9 and $ampm=="am"){
		echo "Today we open at 10am and close at 6pm.";
	}
	elseif($day == "Friday" and $time>6 and $ampm=="pm"){
		echo "We are closed for today but tomorrow we are open from 10am to 3pm.";
	}
	elseif($day == "Friday"){
		echo "We are open from 10am to 3pm today. Tomorrow we open at 10am and close at 3pm.";
	}
	elseif ($day == "Saturday" and $time<9 and $ampm =="am"){
		echo "Today we open at 10am and close at 3pm";
	}
	elseif ($day == "Saturday" and $time>3 and $ampm =="pm"){
		echo "We are closed for today and tomorrow. We open on Monday at 10am and close at 6pm.";
	}
	elseif($day =="Saturday"){
		echo "We are open from 10am to 3pm today.";
	}
	elseif ($day == "Sunday"){
		echo "We are closed on Sundays but we open on Monday from 10am to 6pm.";
	}

?>
