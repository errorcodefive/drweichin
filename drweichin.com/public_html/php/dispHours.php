 <?php
	$day = date("l");
	$time = date("h");
	$ampm = date("a");


	if ($day == "Monday" and $time<9 and $ampm=="am"){
		echo "Monday: 10am &mdash; 6pm";
	}
	elseif ($day =="Monday" and $time>6 and $ampm =="pm"){
	echo "We are currently closed. Tuesday: 10am &mdash; 6pm";
	}
	elseif ($day =="Monday"){
		echo "Monday: 10am &mdash; 6pm";
	}
	elseif ($day == "Tuesday" and $time<9 and $ampm=="am"){
		echo "Tuesday: 10am &mdash; 6pm";
	}
	elseif ($day == "Tuesday" and $time>6 and $ampm=="pm"){
		echo "We are currently closed. Wednesday: 10am &mdash; 6pm";
	}
	elseif($day =="Tuesday"){
		echo "Wednesday: 10am &mdash; 6pm";
	}
	elseif ($day == "Wednesday" and $time<9 and $ampm=="am"){
		echo "Wednesday: 10am &mdash; 6pm";
	}
	elseif ($day == "Wednesday" and $time>6 and $ampm=="pm"){
		echo "We are closed for today and tomorrow. Friday: 10am &mdash; 6pm";
	}
	elseif($day =="Wednesday"){
		echo "Wednesday: 10am &mdash; 6pm";
	}
		elseif ($day == "Thursday"){
		echo "We are currently closed. Friday: 10am &mdash; 6pm";
	}
	elseif ($day == "Friday" and $time<9 and $ampm=="am"){
		echo "Friday: 10am &mdash; 6pm";
	}
	elseif($day == "Friday" and $time>6 and $ampm=="pm"){
		echo "We are currently closed. Saturday: 10am &mdash; 3pm";
	}
	elseif($day == "Friday"){
		echo "Friday: 10am &mdash; 6pm.";
	}
	elseif ($day == "Saturday" and $time<9 and $ampm =="am"){
		echo "Saturday 10am &mdash; 3pm";
	}
	elseif ($day == "Saturday" and $time>3 and $ampm =="pm"){
		echo "We are closed for the weekend. Monday: 10am &mdash; 6pm";
	}
	elseif($day =="Saturday"){
		echo "Saturday: 10am &mdash; 3pm";
	}
	elseif ($day == "Sunday"){
		echo "We are closed on Sundays. Monday: 10am &mdash; 6pm";
	}

?>
