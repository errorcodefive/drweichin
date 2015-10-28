 <?php
	$day = date("l");
	$time = date("h");
	$ampm = date("a");


	if ($day == "Monday"){
		if ($ampm = "am"){
			echo "Monday: 10am &mdash; 6pm";
		}
		elseif ($time<5 and $ampm ="pm"){
			echo "Monday: 10am &mdash; 6pm";
		}
		elseif ($time>5 and $ampm="pm"){
			echo "We are currently closed. Tuesday: 10am &mdash; 6pm";
		}
	}
	elseif ($day =="Tuesday"){
		if ($ampm = "am"){
			echo "Tuesday: 10am &mdash; 6pm";
		}
		elseif ($time<5 and $ampm ="pm"){
			echo "Tuesday: 10am &mdash; 6pm";
		}
		elseif ($time>5 and $ampm="pm"){
			echo "We are currently closed. Wednesday: 10am &mdash; 6pm";
		}
	}
	elseif ($day =="Wednesday"){
		if ($ampm = "am"){
			echo "Wednesday: 10am &mdash; 6pm";
		}
		elseif ($time<5 and $ampm ="pm"){
			echo "Wednesday: 10am &mdash; 6pm";
		}
		elseif ($time>5 and $ampm="pm"){
			echo "We are closed for today and tomorrow. Friday: 10am &mdash; 6pm";
		}
	}
	elseif($day == "Thursday"){
		echo "We are currently closed. Friday: 10am &mdash; 6pm";
	}
	elseif($day =="Friday"){
		if ($ampm = "am"){
			echo "Friday: 10am &mdash; 6pm";
		}
		elseif ($time<5 and $ampm ="pm"){
			echo "Friday: 10am &mdash; 6pm";
		}
		elseif ($time>5 and $ampm="pm"){
			echo "We are currently closed. Saturday: 10am &mdash; 3pm";
		}
	}
	elseif($day =="Saturday"){
		if ($ampm = "am"){
			echo "Saturday: 10am &mdash; 3pm";
		}
		elseif ($time<3 and $ampm ="pm"){
			echo "Saturday: 10am &mdash; 3pm";
		}
		elseif ($time>3 and $ampm="pm"){
			echo "We are closed for the weekend. Monday: 10am &mdash; 5pm";
		}		
	}
	elseif($day =="Sunday"){
		echo "We are closed on Sundays. Monday: 10am &mdash; 6pm";
	}

?>
