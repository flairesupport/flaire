<?php 
/*
 *  Copyright (C) 2020 Flairesupport.
 * @author     		Flairesupport / capili.serafin@gmail.com
 * @license    		http://www.php.net/license/3_01.txt  PHP License 3.01
 *
 * as per Philhealth Cicular 2019-0009
 *
 * 2019 - 2025 
 * 2019 - 2.75%
 * 2020 - 3% 
 * 2021 - 3.5% 
 * 2022 - 4% 
 * 2023 - 4.5% 
 * 2024-25 - 5% 
 * 
 * 
 * 
 * 
 */
class Philhealth 
{
	public function __construct()
	{
		# code...
	}

	public function contri($comp)
	{
		$mbs = $this->mbs($comp);
		return $mbs;
	}

	public function mbs($comp)
	{

		$year = date('Y');

		if ($year == 2019) 		
		{	
			$pr = 0.0275;
			if (		$comp <= 10000					) {		return $pr * 10000;	}
			elseif (	$comp > 10000 && $comp <= 50000	) {		return $pr * $comp;	}
			elseif (	$comp > 50000					) {		return $pr * 50000;	}
		}

		elseif ($year == 2020) 	
		{	
			$pr = 0.03;
			if (		$comp <= 10000					) {		return $pr * 10000;	}
			elseif (	$comp > 10000 && $comp <= 60000	) {		return $pr * $comp;	}
			elseif (	$comp > 60000					) {		return $pr * 60000;	}	
		}
		elseif ($year == 2021) 	
		{	
			$pr = 0.035;		
			if (		$comp <= 10000					) {		return $pr * 10000;	}
			elseif (	$comp > 10000 && $comp <= 70000	) {		return $pr * $comp;	}
			elseif (	$comp > 70000					) {		return $pr * 70000;	}	
		}
		elseif ($year == 2022) 	
		{	
			$pr = 0.04;
			if (		$comp <= 10000					) {		return $pr * 10000;	}
			elseif (	$comp > 10000 && $comp <= 80000	) {		return $pr * $comp;	}
			elseif (	$comp > 80000					) {		return $pr * 80000;	}		
		}
		elseif ($year == 2023) 	
		{	
			$pr = 0.045;
			if (		$comp <= 10000					) {		return $pr * 10000;	}
			elseif (	$comp > 10000 && $comp <= 90000	) {		return $pr * $comp;	}
			elseif (	$comp > 90000					) {		return $pr * 90000;	}	
		}
		elseif ($year == 2024) 	
		{	
			$pr = 0.05;
			if (		$comp <= 10000						) {		return $pr * 10000;		}
			elseif (	$comp > 10000 && $comp <= 100000	) {		return $pr * $comp;		}
			elseif (	$comp > 100000						) {		return $pr * 100000;	}	
		}
		elseif ($year == 2025) 	
		{	
			$pr = 0.05;
			if (		$comp <= 10000						) {		return $pr * 10000;		}
			elseif (	$comp > 10000 && $comp <= 100000	) {		return $pr * $comp;		}
			elseif (	$comp > 100000						) {		return $pr * 100000;	}	
		}

	}

}

?>
<!-- Example Usage -->
 <!DOCTYPE html>
 <html>
  <head>
  	<meta charset="utf-8">
 	<title>Philhealth Contribution as per Circular No. 2019-0009</title>
 </head>
 <body>
<h1>Philhealth Contribution as per Circular No. 2019-0009</h1>
<form action="" method="post">
	<input type="text" name="salary" value="<?php echo (isset($_POST['salary'])) ? $_POST['salary'] : '' ?>">
	<input type="submit" name="submit">
</form>
<p>Employee and Employer shared half of the contribution</p>
 <?php 
 if ($_POST['submit'] !== NULL) {
$phc = new Philhealth;
$basic = (float) $_POST['salary'];
echo '<br>Monthly Salary:' .$basic;
echo '<br>Monthly Premium:' .$phc->contri($basic);

 }

 ?>

 </body>
 </html>
