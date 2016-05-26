<?php

include_once "includes/html_top.php";

// home.php Revision 9 5-16-16 11:30 am

/* Requirements:
a) Please do not remove any of my comments in this code. I need them for grading.
b) Type code for only one step at a time, then run it in your browser to test it before moving to the next step. 
Some of the code will not display any output, but you still need to test it to be sure there are no error messages. 
Trouble-shooting is very difficult if many steps are entered at once. Do not ask me for help with your code if you are 
not testing one step at a time!
*/

/* ==========================================================================================================
PLEASE DO NOT ATTEMPT TO WORK THROUGH THIS FILE WITHOUT FOLLOWING MY INSTRUCTIONS IN ASSIGNMENT 8, PART 2.
I HAVE A SPECIFIC SERIES OF STEPS I WOULD LIKE YOU TO FOLLOW.
========================================================================================================== */

// 1. Enter the code to start a session below. This should be one line of code.



// 2. Enter the code to insert the login_check.php file here. Use include_once and DO NOT put a folder name in front.



// HEADER

// 3. Update the Header information below (all 3 lines).

/*
File Name: XXXXX.XXX
Date: XX/XX/XX
Programmer: XXX XXX
*/

// ==========================================================
// VARIABLES

include_once "includes/php_header.php";

// 4. Change $home_image_name to the name of your image.
//    Remember to copy your image into the 'images' subfolder.

$home_image_name = "car.jpg";
$heading = "CAS 225: PHP and MySQL for Designers";

// ====================================== 
// HTML HEADER

include_once "includes/html_header.php";

?>

<!-- ====================================== -->
<!-- CODE FOR THIS PAGE -->

<h1><?php echo $heading; ?></h1>

<h2><?php echo $programmer_name; ?></h2>

<h3><?php echo date("F j, Y g:d a") ?></h3>

<img id="homeImage" src="<?php echo $image_path . '/' . $home_image_name; ?>" alt="<?php echo $home_image_name; ?>">

Please make a choice from the menu above.

<!-- ===================================================== -->
<!-- FOOTER -->

<?php

include_once "includes/footer.php";

?>
