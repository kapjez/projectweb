<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My-tour Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
    
    <style>
    
    body {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    -webkit-appearance: none;
    background-color: #000000f2;
        color: white;
}
    
    </style>
    
    <style>
    
        .middletext {
    font-size: 15px;
    color: #9b9df5;
    font-weight: bold;
}
    a {
    color: #9b9df5;
    text-decoration: none;
}
    </style>
    
    <style>
        
    button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
    background-color: #70b8e8;
    color: black;
    border-color: #000000;
        width: 100%;
}
        
    </style>
    
    <style>
    .header-info h2 a {
    display: inline-block;
    color: #fff;
    padding: 0.5em 2em;
    background: #00000040;
    text-decoration: none;
}
    </style>
    
    
<style>
    
    .header-top {
    background: #000000c7;
    min-height: 32px;
    padding: 1.5em 0;
    position: fixed;
    z-index: 9999;
    width: 100%;
    clear: both;
    border-bottom: 1px solid rgba(128, 128, 128, 0.17);
}
    </style>
    
    <style>
        
    .about {
    padding-top: 6%;
    background-color: #000000f2;
}
    </style>
    
    <style>
    .about-grids h4 {
    font-size: 1.4em;
    font-weight: 500;
    color: #60B0E6;
}
    </style>
    
    <style>
    
        .top-tours-head {
    padding-top: 6%;
    background-color: #000000f2;
}
    
    </style>
    
    <style>
    .copyright {
    background: #000000f2;
    min-height: 48px;
}
    </style>
    
    <style>
    .contact-head {
    padding-top: 6%;
    background-color: #000000f2;
}
    </style>
    
    <style>
    .address h5 a {
    text-decoration: none;
    color: white;
}
body 
    </style>
    
        <style>
    .contact form input[type="text"], .contact textarea {
    color: #ffffff;
    border: 1px solid #1b1b1b;
    outline: 0;
    padding: 0.5em;
    width: 100%;
    background-color: #1b1b1b;
}
    </style>
    
    <style>
    #filters li span.active, #filters li span {
    color: #559ccc;
    text-decoration: none;
    display: block;
    border: 1px solid #000000f2;
    font-size: 1.15em;
    font-weight: 500;
    cursor: pointer;
    margin: 0 0.3em;
    border-radius: 2px;
}
.top-tours-head span {
    background: rgba(128, 128, 128, 0.41);
    width: 5.5%;
    height: 1px;
    display: inline-block;
    vertical-align: text-bottom;
}
    </style>
    
    <style>
    
    .top-nav ul li a {
    color: #60B0E6;
    text-decoration: none;
    padding: 0.4em 1.5em;
    display: block;
    font-size: 1.1em;
    font-weight: 400;
        border: none;
}
    </style>

    <style>
    .contact form input[type="submit"] {
    width: 35px;
    height: 35px;
    display: block;
    padding: 0 7em 0 3em;
    float: right;
    border: none;
    outline: none;
    margin-top: 2em;
    font-size: 1.2em;
    color: white;
}
    </style>
    
    <style>
    .about-grids p {
    margin-left: 4em;
    width: 87%;
    line-height: 23px;
    color: #ffffff;
}
    </style>
    
    <style>
    
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%;
    background-color: #4b6e86;
    color: white;
    border-color: #000000;
}
    
    </style>
    
</head>

<body>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','Pending')";	
	
	
		mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:18px" color="#09F">კატეგორიები</td></tr>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">დაჯავშნა</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<td>

<table border="0"; width="600px" height="400px" align="center" >
<?php

$s="select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] ."'";

$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 
<form method="post" enctype="multipart/form-data">
<tr><td colspan="3" class="middletext">პაკეტის ნომერი:&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td></tr>
<tr><td colspan="3" class="middletext">პაკეტის სახელი:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td class="lefttxt">სახელი:</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"გთხოვთ შეიყვანოთ მხოლოდ ასოები 1 დან 50მდე/></td></tr><br/>
<tr><td class="lefttxt">სქესი:</td><td><input type="radio" name="r1" value="Male" checked="checked" />Male<input type="radio" name="r1"  value="Female"/>Female</td></tr><br/>
<tr><td class="lefttxt">მობილურის ნომერი.</td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title"გთხოვთ შეიყვანოთ მხოლოდ ციფრები"/></td></tr><br/>
<tr><td class="lefttxt">ელ-ფოსტა:</td><td><input type="email" name="t3" required /></td><td><br/>
<tr><td class="lefttxt">დღეების რაოდენობა:</td><td><input type="number" name="t4" required pattern="[1 _]{1,20}" title"გთხოვთ შეიყვანოთ მხოლოდ ციფრები 0 დან 20მდე"/></td><td><br/>
<tr><td class="lefttxt">ბავშვების რაოდენობა:</td><td><input type="number" name="t5" required pattern="[1 _]{1,10}" title"გთხოვთ შეიყვანოთ მხოლოდ ციფრები 1 დან 20 მდე "/></td><td><br/>
<tr><td class="lefttxt">მოზარდების რაოდენობა:</td><td><input type="number" name="t6" required pattern="[1 _]{1,20}" title"გთხოვთ შეიყვანოთ მხოლოდ ციფრები 1 დან 20 მდე"/></td><td><br/>
<tr><td class="lefttxt">დაჯავშნის შეტყობინება:</td><td><textarea name="t7" required="required"/></textarea></td><td><br/>
<tr><td>&nbsp;</td><td > <br> <input type="submit" value="Submit" name="sbmt" /></td></tr>

</form></td></tr>
</table>
</td>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>

