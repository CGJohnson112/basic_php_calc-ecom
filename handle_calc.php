<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Product cost calculations</title>
 <style type="text/css">
     .number { font-weight: bold; }

</style>
</head>
<body>
<?php

//get values from $_POST array
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

//calculate total
$total = (($price * $quantity) + $shipping) -$discount;

//determine tax rate
$taxrate = $tax / 100;
$taxrate++;

//factor in tax rate
$total = $total * $taxrate;

//calculate monthly payments
$monthly = $total / $payments;

//apply the proper formatting
$total = number_format ($total, 2);
$monthly = number_format ($monthly, 2);  

//print out results
print "<p>You have selected to purchase:<br>
<span class=\"number\">$quantity</span> widget(s) at <br>
$<span class=\"number\">$price</span> price each plus a <br>
$<span class=\"number\">$shipping</span> shipping cost and a <br>
$<span class=\"number\">$tax</span> percent tax rate. <br>
After your $<span class=\"number\">$discount</span> discount, the total cost is<br>
$<span class=\"number\">$total</span>.<br>
Divided over <span class=\"number\">$payments</span> monthly payments, that would be $<span class=\"number\">$monthly</span> each.</p>";

?>
    
    
    
</body>
</html>