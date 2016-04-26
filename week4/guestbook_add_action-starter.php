<?php 

/* guestbook_add_action-starter.php Revision 4 4-25-13 5:30 pm

Requirements:
a) Please do not remove any of my comments in this code. I need them for grading.
b) Type code for only one step at a time, then run it in your browser to test it before moving to the next step. 
Some of the code will not display any output, but you still need to test it to be sure there are no error messages. 
Trouble-shooting is very difficult if many steps are entered at once. Do not ask me for help with your code if you are 
not testing one step at a time!

==========================================================================================================
PLEASE DO NOT ATTEMPT TO WORK THROUGH THIS FILE WITHOUT FOLLOWING MY INSTRUCTIONS IN ASSIGNMENT 4, PART 2.
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

// 2. Add a variable named $missing_count after the $heading variable, and assign a value of 0 (zero) to it. 
//    Remember that quote marks are *not* used around numeric values. This variable will be used to track the 
//    number of fields that are missing data.

$styles_path = "styles";
$styles_page = "home.css";
$styles_2_page = "contact.css";
$link_1_page = "home.php";
$link_1_text = "Home";
$link_2_page = "guestbook_add.php";
$link_2_text = "Guestbook: Add";

$heading = "Contact Us";



// ==========================================================
// FUNCTIONS

// 3. Enter your 4 functions below this sentence. Put a blank line between each of the functions. 
//    Notice that we load the functions *before* we run any HTML, so they are available to the rest of our code below this.







// ======================================= 
// HTML HEADER ?>

<!DOCTYPE html>

<html>

<head>

<meta charset = "UTF-8">

<title><?php echo $heading; ?></title>

<link rel = "stylesheet" href = "<?php echo $styles_path . '/' . $styles_page; ?>" /> 
<link rel = "stylesheet" href = "<?php echo $styles_path . '/' . $styles_2_page; ?>" /> 

</head>

<body>

<div class = "shade">

<br />

<!-- We will code the line below later in the class, when we learn how to do logins. -->

Logged in as: <b>(no login code yet)</b>

<p>

<!-- NAVIGATION BAR -->

<a href="<?php echo $link_1_page; ?>"><?php echo $link_1_text; ?></a> | 
<a href="<?php echo $link_2_page; ?>"><?php echo $link_2_text; ?></a>

</p>

</div>

<!-- ====================================== -->

<!-- The line below is a class that I created to mimic the action of the 'blockquote' tag in HTML, which is now deprecated. -->
<div class="blockquote">
     
<?php

// FUNCTION CALLS

// -- CHECK EACH FIELD FOR MISSING DATA

/* 4. Enter your check_submitted() function calls below this comment. There should be a separate call for each of
      the four fields in your form. 
      Put a blank line between each function call. */






// 4a. Enter your function call for count_errors below this comment. There should be only one line of code.



// Below this point is your our old code for checking for missing data.
// Notice that you had more code, and it did less -- it didn't track how many fields were missing.
// Once you create the functions and call them, please delete the $counter line and the 'if' blocks in this section.

/*
if(trim($_POST["name"]) == "") {

     echo "Name is missing. Please <a href='guestbook_add.php'>Go Back</a> to the form and fill out the missing data.";
     exit;

}

if(trim($_POST["email"]) == "") {

     echo "Email is missing. Please <a href='guestbook_add.php'>Go Back</a> to the form and fill out the missing data.";
     exit;

}

if(trim($_POST["comment"]) == "") {

     echo "Comment is missing. Please <a href='guestbook_add.php'>Go Back</a> to the form and fill out the missing data.";
     exit;

}
*/

// -- SANITIZE FIELDS (REMOVE DANGEROUS CHARACTERS) -- text boxes and textarea only

// 5. Enter your sanitize() function calls below this comment. There should be a call for every text box or text area
//    box on your form. Put a blank line between each function call.






// Below this point is your our old code for checking for sanitizing the data.
// Notice that you had a lot more code, and it did less -- we didn't escape quote marks in the previous version.
// Once you create the functions and call them, please delete the old code in this section.

/*
$name = trim($_POST["name"]);
$name = stripslashes(strip_tags($name)); // strip html tags and back slashes
$name = str_replace("/","",$name); // removes forward slashes 
$name = addslashes($name); // escapes quote marks so they will work in SQL statements

$email = trim($_POST["email"]);
$email = stripslashes(strip_tags($email)); // strip html tags and back slashes
$email = str_replace("/","",$email); // removes forward slashes 
$email = addslashes($email); // escapes quote marks so they will work in SQL statements 

$comment = trim($_POST["comment"]);
$comment = stripslashes(strip_tags($comment)); // strip html tags and back slashes
$comment = str_replace("/","",$comment); // removes forward slashes 
$comment = addslashes($comment); // escapes quote marks so they will work in SQL statements
*/

// -- DISPLAY OUTPUT

// 6. Enter your display_data() function calls below this comment. There should be a call for each of the fields in your
//    form. Put a blank line between each function call.







// Below this point is your our old code for displaying the data.
// Once you create the functions and call them, please delete the old code in this section.

/*
echo "<h3><i>You submitted the following information:</i></h3>";
echo "<div id='formData'>";

echo "Name: <b>" . $name . "</b>"; 
echo "<br><br>";     echo "Email: <b> " . $email . "</b>"; 
echo "<br><br>";     echo "Comment: <b> " . $comment . "</b>"; 

echo "<br><br>";

echo "Mailing list: "; 

if(isset($_POST["mail"])) { 
     echo "<b>" . $_POST["mail"] . "</b>";
} 
else { 
     echo "<b>" . "no" . "</b>"; 
}

*/

?>

<br><br><a href="guestbook_add.php">Return to Form</a>

</div>
 
<hr />

<!-- ===================================================== -->
<!-- FOOTER -->

</body>

</html>