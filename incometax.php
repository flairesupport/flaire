<?php 
/*
 *  Copyright (C) 2020 Flairesupport.
 * @author     		Flairesupport / capili.serafin@gmail.com
 * @license    		http://www.php.net/license/3_01.txt  PHP License 3.01
 *
 * BIR Income Tax Table for 2020 Philippines
 * Tax Provisions of the Republic Act 10963
 * Tax Reform for Acceleration and Inclusion Act (TRAIN)
 * valid year 2018 - 2023 and onward
 * 
 */
class IncomeTax 
{
	public function __construct()
	{
		# code...
	}

	public function tax($annual_income)
	{
		$year = date('Y');

		if ( $year >= 2018 && $year <= 2022 ) 
		{
			$tax = $this->compute($annual_income);
		}
		elseif ( $year >= 2023 ) 
		{
			$tax = $this->compute2023($annual_income);
		}

		return $tax;
	}
	//bir train tax table 2018 - 2022
	public function compute($annual_income)
	{

		if ($annual_income <= 250000) 
		{	
			$tax_rate = 0.00;
		}

		elseif ( $annual_income > 250000 && $annual_income <= 400000 ) 
		{
			$additional = $annual_income - 250000;
			$tax_rate = 0.2 * $additional;
		}

		elseif ( $annual_income > 400000 && $annual_income <= 800000 ) 
		{
			$basic = 30000;
			$additional = $annual_income - 400000;
			$tax_rate = $basic + 0.25 * $additional;
		}

		elseif ( $annual_income > 800000 && $annual_income <= 2000000 ) 
		{
			$basic = 130000;
			$additional = $annual_income - 800000;
			$tax_rate = $basic + 0.3 * $additional;
		}

		elseif ( $annual_income > 2000000 && $annual_income <= 8000000 ) 
		{
			$basic = 490000;
			$additional = $annual_income - 2000000;
			$tax_rate = $basic + 0.32 * $additional;
		}

		elseif ( $annual_income > 8000000 ) 
		{
			$basic = 2410000;
			$additional = $annual_income - 8000000;
			$tax_rate = $basic + 0.35 * $additional;
		}

		return $tax_rate;

	}
	//bir train tax table 2023 onward
	public function compute2023($annual_income)
	{

		if ($annual_income <= 250000) 
		{	
			$tax_rate = 0.00;
		}

		elseif ( $annual_income > 250000 && $annual_income <= 400000 ) 
		{
			$additional = $annual_income - 250000;
			$tax_rate = 0.15 * $additional;
			return $tax_rate;
		}

		elseif ( $annual_income > 400000 && $annual_income <= 800000 ) 
		{
			$basic = 22500;
			$additional = $annual_income - 400000;
			$tax_rate = $basic + 0.2 * $additional;
			return $tax_rate;
		}

		elseif ( $annual_income > 800000 && $annual_income <= 2000000 ) 
		{
			$basic = 102500;
			$additional = $annual_income - 800000;
			$tax_rate = $basic + 0.25 * $additional;
			return $tax_rate;
		}

		elseif ( $annual_income > 2000000 && $annual_income <= 8000000 ) 
		{
			$basic = 402000;
			$additional = $annual_income - 2000000;
			$tax_rate = $basic + 0.3 * $additional;
			return $tax_rate;
		}

		elseif ( $annual_income > 8000000 ) 
		{
			$basic = 2202500;
			$additional = $annual_income - 8000000;
			$tax_rate = $basic + 0.35 * $additional;
			return $tax_rate;
		}
	}

}

?>
<!-- Example Usage -->
 <!DOCTYPE html>
 <html>
  <head>
  	<meta charset="utf-8">
 	<title>BIR Income Tax Table for 2018-onward Philippines</title>
 </head>
 <body>
<h1>BIR Income Tax Table for 2018-onward Philippines</h1>
<form action="" method="post">
	<label for="salary">Annual Income</label><input type="text" name="salary" value="<?php echo (isset($_POST['salary'])) ? $_POST['salary'] : '' ?>">
	<input type="submit" name="submit">
</form>

 <?php 
 if ($_POST['submit'] !== NULL) {
$tax = new IncomeTax;
$income = (float) $_POST['salary'];
echo '<br>Annual Income:' .number_format($income,2);
echo '<br>Tax Due:' .number_format($tax->tax($income),2);
}

 ?>

 </body>
 </html>
