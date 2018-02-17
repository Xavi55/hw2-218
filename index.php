<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
///////////////////////////////////////////////////////////
//https://github.com/Xavi55/218.hw2	

	echo '<h3>----------------------------</h3>';
	$date=str_replace('-','/',$date);
	echo "2) $date<br>";
//
	echo '3) ';
	$res=strcmp($date,$tar4);
	if($res>0)
		echo "The Future<br>";
	else if($res < 0)
		echo "The Past<br>";
	else
		{echo "Oops<br>";}
//
	echo '4) ';
	$pos1=strpos($date,'/');
	$pos2=strpos($date,'/',$pos1+1);
	echo "There's slashes on the $pos1 and $pos2 positions<br>";
//
	echo '5) Number of words in $date is: ';
	$index=0;
	$count=0;
	while($index <= strlen($date))
	{
		if($date[$index] == '/')
		{
			$count++;
		}
		else if($index == $strlen)
		{
			$count++;
		}
	$index++;
	}
	
	echo "$count <br>";
//
	echo '6) Length of $date is: ' . strlen($date) . '<br>';
//
	$val=ord($date[0]);
	echo "7) The ASCII value of '2' in '$date' is: $val <br>";
//
	$sub=substr($date,8,9);
	echo "8) Final two chars of '$date' are: $sub <br>";
//
	$sep=explode('/',$date);
	echo '9) $date separated is: [0]=>' . $sep[0] .', [1]=>' . $sep[1] . ', [2]=>' . $sep[2] . '<br>';
//
	echo '10) ';
	foreach($year as $val)
	{
		switch($val%4 || $val%400 && $val%100===0)
		{	
		case 0:
			print "$val <strong>IS</strong> a leap year 
<br>&nbsp&nbsp&nbsp&nbsp&nbsp";
			break;

		case 1:
			print "$val <strong>IS NOT</strong> a leap year 
<br>&nbsp&nbsp&nbsp&nbsp&nbsp";
			break;	
		}
	}
?>
