<?php 
/*
 *  Copyright (C) 2020 Flairesupport.
 * @author     		Flairesupport / capili.serafin@gmail.com
 * @license    		http://www.php.net/license/3_01.txt  PHP License 3.01
 *
 *
 * total contribution = 12% of msc
 * contribution = 8% payable by employee 4% payable by employer
 * max msr (monthly_salary_credit) table as of 2019 = 20000
 */
class Sss 
{
	public function __construct()
	{
		# code...
	}

	/**
	 * @param 	$type 		str 		employed, self-employed, kasambahay, ofw
	 */
	public function contri($comp)
	{
		$msr = $this->msc($comp);
		$ec = $this->ec($comp);
		return $cont = $msr * 0.12 + $ec;
	}

	//monthly_salary_credit
	public function msc($comp)
	{
		if (		$comp < 2250						) {		return 2000;	}
		elseif (	$comp >= 2250 && $comp < 2750		) {		return 2500;	}
		elseif (	$comp >= 2750 && $comp < 3250		) {		return 3000;	}
		elseif (	$comp >= 3250 && $comp < 3750		) {		return 3500;	}
		elseif (	$comp >= 3750 && $comp < 4250		) {		return 4000;	}
		elseif (	$comp >= 4250 && $comp < 4750		) {		return 4500;	}
		elseif (	$comp >= 4750 && $comp < 5250		) {		return 5000;	}
		elseif (	$comp >= 5250 && $comp < 5750		) {		return 5500;	}
		elseif (	$comp >= 5750 && $comp < 6250		) {		return 6000;	}
		elseif (	$comp >= 6250 && $comp < 6750		) {		return 6500;	}
		elseif (	$comp >= 6750 && $comp < 7250		) {		return 7000;	}
		elseif (	$comp >= 7250 && $comp < 7750		) {		return 7500;	}
		elseif (	$comp >= 7750 && $comp < 8250		) {		return 8000;	}
		elseif (	$comp >= 8250 && $comp < 8750		) {		return 8500;	}
		elseif (	$comp >= 8750 && $comp < 9250		) {		return 9000;	}
		elseif (	$comp >= 9250 && $comp < 9750		) {		return 9500;	}
		elseif (	$comp >= 9750 && $comp < 10250		) {		return 10000;	}
		elseif (	$comp >= 10250 && $comp < 10750		) {		return 10500;	}
		elseif (	$comp >= 10750 && $comp < 11250		) {		return 11000;	}
		elseif (	$comp >= 11250 && $comp < 11750		) {		return 11500;	}
		elseif (	$comp >= 11750 && $comp < 12250		) {		return 12000;	}
		elseif (	$comp >= 12250 && $comp < 12750		) {		return 12500;	}
		elseif (	$comp >= 12750 && $comp < 13250		) {		return 13000;	}
		elseif (	$comp >= 13250 && $comp < 13750		) {		return 13500;	}
		elseif (	$comp >= 13750 && $comp < 14250		) {		return 14000;	}
		elseif (	$comp >= 14250 && $comp < 14750		) {		return 14500;	}
		elseif (	$comp >= 14750 && $comp < 15250		) {		return 15000;	}
		elseif (	$comp >= 15250 && $comp < 15750		) {		return 15500;	}
		elseif (	$comp >= 15750 && $comp < 16250		) {		return 16000;	}
		elseif (	$comp >= 16250 && $comp < 16750		) {		return 16500;	}
		elseif (	$comp >= 16750 && $comp < 17250		) {		return 17000;	}
		elseif (	$comp >= 17250 && $comp < 17750		) {		return 17500;	}
		elseif (	$comp >= 17750 && $comp < 18250		) {		return 18000;	}
		elseif (	$comp >= 18250 && $comp < 18750		) {		return 18500;	}
		elseif (	$comp >= 18750 && $comp < 19250		) {		return 19000;	}
		elseif (	$comp >= 19250 && $comp < 19750		) {		return 19500;	}
		elseif (	$comp >= 19750						) {		return 20000;	}

	}

	public function ee($comp)
	{
		$msr = $this->msc($comp);
		return $ee = $msr * 0.04;		
	}

	public function er($comp)
	{
		$msr = $this->msc($comp);
		$ec = $this->ec($comp);
		return $ee = $msr * 0.08 + $ec;		
	}

	//employees_compensation_program
	//lest than 14750 = 10, 14750 and up = 30
	public function ec($comp)
	{
		if (	$comp < 14750						) {		return 10;	}
		if (	$comp >= 14750						) {		return 30;	}
	}

}

?>

 <!DOCTYPE html>
 <html>
  <head>
  	<meta charset="utf-8">
 	<title>SSS Contribution as of 2019</title>
 </head>
 <body>
<form action="" method="post">
	<input type="text" name="salary" value="<?php echo (isset($_POST['salary'])) ? $_POST['salary'] : '' ?>">
	<input type="submit" name="submit">
</form>
 <?php 
 if ($_POST['submit'] !== NULL) {
$sss = new Sss;
$netpay = (float) $_POST['salary'];
$contibution = $sss->contri($netpay);
echo '<br>Monthly Salary:' .$netpay;
echo '<br>Monthly Salary Credit:' .$sss->msc($netpay);
echo '<br>Employee Contribution:' .$sss->ee($netpay);
echo '<br>Employer Contribution:' .$sss->er($netpay);
echo '<br>Total Contribution:' .$sss->contri($netpay); 
 }

 ?>

 </body>
 </html>