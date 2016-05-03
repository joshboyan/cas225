<?php /* guestbook_add.php Revision 5 10-28-13 10:00pm

Requirements:
a) Please do not remove any of my comments in this code. I need them for grading.
b) Type code for only one step at a time, then run it in your browser to test it before moving to the next step. 
Some of the code will not display any output, but you still need to test it to be sure there are no error messages. 
Trouble-shooting is very difficult if many steps are entered at once. Do not ask me for help with your code if you are 
not testing one step at a time!

==========================================================================================================
PLEASE DO NOT ATTEMPT TO WORK THROUGH THIS FILE WITHOUT FOLLOWING MY INSTRUCTIONS IN ASSIGNMENT 5, PART 2.
I HAVE A SPECIFIC SERIES OF STEPS I WOULD LIKE YOU TO FOLLOW.
==========================================================================================================
*/

// HEADER

// 1. Update the Header information below (all 3 lines).

/*
File Name: XXXXX.XXX
Date: XX/XX/XX
Programmer: XXX XXX
*/

// ==========================================================
// VARIABLES

// 2. CHANGE the programmer name to your name, and the image name to the name of your image that you used in Assignment 2.
 
$programmer_name = "Ron Bekey";
$home_image_name = "car.jpg";
$link_1_page = "home.php";
$link_1_text = "Home";
$link_2_page = "guestbook_add.php";
$link_2_text = "Guestbook: Add";
$image_path = "images";
$styles_path = "styles";

$styles_page = "home.css";
$heading = "CAS 225: PHP and MySQL for Designers";

?>

<!-- HTML HEADER -->

<!DOCTYPE html>

<!-- ======================================= -->

<html>

<head>

<meta charset = "UTF-8">

<title><?php echo $heading; ?></title>

<link rel = "stylesheet" href = "<?php echo $styles_path . '/' . $styles_page; ?>" /> 

</head>

<body>

<div class = "shade">

<br />

<!-- We will code the line below later in the class, when we learn how to do logins. -->

Logged in as: <strong>(no login code yet)</strong>

<p>

<!-- NAVIGATION BAR -->

<a href="<?php echo $link_1_page; ?>"><?php echo $link_1_text; ?></a> | 
<a href="<?php echo $link_2_page; ?>"><?php echo $link_2_text; ?></a>

</p>

</div>

<!-- =============================================================================== -->

<h1><?php echo $heading; ?></h1>

<h2><?php echo $programmer_name; ?></h2>

<h3><?php echo date("F j, Y g:d a") ?></h3>

<img id="homeImage" src="<?php echo $image_path . '/' . $home_image_name; ?>" alt="<?php echo $home_image_name; ?>">

Please make a choice from the menu above.

<!-- =============================================================================== -->
<!-- FOOTER -->

</body>

</html>


