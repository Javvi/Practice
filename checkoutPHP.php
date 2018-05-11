<!DOCTYPE html>
<!-- 
By: Javier Dominguez
Date of last successful run April 25th, 2018
COP3834C-01 Web Application Development
Bonus Project
-->
<html>
<style>
#particles-js{
position: fixed; 
top: 0;
left: 0;
z-index: -100;
    width: 100%;
    height: 100vh;
    background-color: maroon;
}
#header {
color: white;
text-align: center;
font-family: Times New Roman;
text-shadow: 4px 3px black;
}

p{
color: white;
font-family: Times New Roman;
}

li a:hover {
    background-color: firebrick;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: maroon;
}

li a {
    display: block;
    color: white;
    text-align: center;
	font-size: 30px;
	font-family: Times New Roman;
    padding: 14px 16px;
    text-decoration: none;
	float: right;
}
#items{
	color: white;
	font-family: Times New Roman;
	font-size: 40px;
}
</style>
<body>
 <div id="navBarDiv">
	<ul>
	<li><img src="http://images.clipartpanda.com/sandwich-clipart-sandwich-parts.png" width="100" height"50" align="left"></li>
 
 
  <li><a id="checkout" href="CheckoutPage.html">Checkout</a></li>
   <li><a id="menu" href="Options.html">Menu</a></li>
   <li><a id="home" href="index.html">Home</a></li>
	</ul>
    </div>
<div id="particles-js"></div>

<div id="items">
<?php 

class PurchaseItem{


private $o1Amt;
private $o2Amt;
private $o3Amt;
private $o4Amt;

public $totalValue1=0;
public $totalValue2=0;
public $totalValue3=0;
public $totalValue4=0;
public $sumValue;





function __construct($o1a, $o2a, $o3a, $o4a){

$this->o1Amt = $o1a;
$this->o2Amt = $o2a;
$this->o3Amt = $o3a;
$this->o4Amt = $o4a;
}

function displayAmount(){
echo "The amount of meal 1 ordered is: ".$this->o1Amt."<br>";
echo "The amount of meal 2 ordered is: ".$this->o2Amt."<br>";
echo "The amount of meal 3 ordered is: ".$this->o3Amt."<br>";
echo "The number of drinks ordered is: ".$this->o4Amt."<br>";
}
function getOpt1(){
	return $this->o1a;
	
}
function setOpt1($o1a){
	$this->o1Amt = $o1a;
	
}

function getOpt2(){
	return $this->o2a;
	
}
function setOpt2($o2a){
	$this->o2Amt = $o2a;
	
}

function getOpt3(){
	return $this->o3a;
	
}
function setOpt3($o3a){
	$this->o3Amt= $o3a;
	
}

function getOpt4(){
	return $this->o4a;
	
}
function setOpt4($o4a){
	$this->o4Amt= $o4a;
	
}
function setVal1($o1a){
	$o1Val = 3.45;
	$o1Amt = $o1a;
	$totalValue1=$o1Val*$o1Amt;
	return $totalValue1;
}


function setVal2($o2a){
	$o2Val = 4.50;
	$o2Amt = $o2a;
	$totalValue2=$o2Val*$o2Amt;
	return $totalValue2;
}


function setVal3($o3a){
	$o3Val = 2.20;
	$o3Amt = $o3a;
	$totalValue3=$o3Val*$o3Amt;
	return $totalValue3;
}

function setVal4($o4a){
	$o4Val = 1.50;
	$o4Amt = $o4a;
	$totalValue4=$o4Val*$o4Amt;
	return $totalValue4;
}
function calculateValue($t1, $t2, $t3, $t4){
	$totalValue1=$t1;
	$totalValue2=$t2;
	$totalValue3=$t3;
	$totalValue4=$t4;
	$sumValue = $totalValue1+$totalValue2+$totalValue3+$totalValue4;
	echo "The total amount owed is: ".$sumValue;
}
}
function itemUpdate($Item1){
echo "Meal 1 amount: ".$Item1->getOpt1()."<br>";
echo "Meal 2 amount: ".$Item->getOpt2()."<br>";
echo "Meal 3 amount: ".$Item->getOpt3()."<br>";
echo "Meal 4 amount: ".$Item->getOpt4()."<br>";
}

$opt1Amount = $_POST["opt1Amt"];
$opt2Amount = $_POST["opt2Amt"];
$opt3Amount = $_POST["opt3Amt"];
$opt4Amount = $_POST["opt4Amt"];
$Item1 = new PurchaseItem($opt1Amount, $opt2Amount, $opt3Amount, $opt4Amount);
$Item1->displayAmount();
$Item1->calculateValue($Item1->setVal1($opt1Amount), $Item1->setVal2($opt2Amount), $Item1->setVal3($opt3Amount), $Item1->setVal4($opt4Amount));
?>
</div>
<script src="particleBackground.js"></script>
<script>
particlesJS.load('particles-js', 'particlesjs-config.json', function() {
  console.log('callback - particles.js config loaded');
})

</script>

<br>
<a href="payment.html">
 
    <button>Continue with payment</button>
	</a>
</body>
</html>