<?php

/* guestbook_add_action.php Starter file Revision 6 10-21-15 10:00 am

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

$styles_path = "styles";
$styles_page = "home.css";
$styles_2_page = "contact.css";
$link_1_page = "home.php";
$link_1_text = "Home";
$link_2_page = "guestbook_add.php";
$link_2_text = "Guestbook: Add";

$heading = "Contact Us";
$missing_count = 0;

// ==========================================================
// FUNCTIONS

function check_submitted($field_name, $field_type, &$missing_count) {

     // Check for undefined variable (not submitted) on all but checkbox
     if(!isset($_POST[$field_name])) {

          $_POST[$field_name]=""; // set a default value if no value was submitted, to prevent errors in later code

          if($field_type <> "checkbox") { // checkboxes usually don't have to be checked -- they are usually optional
               echo "Missing data for <strong>" . $field_name . "</strong>.<br />";
               $missing_count++;
          }

     }

     // For text, textarea, and select check for present but empty
     // Note use of elseif instead of if, which means only one of the if blocks will run but not both
     elseif($field_type == "text" || $field_type == "textarea" || $field_type == "select") {

          if(trim($_POST[$field_name]) == "") {

               echo "Missing data for <strong>" . $field_name . "</strong>.<br />";
               $missing_count++;

          } // end if($_POST...)

     } // end if($field_type...)

} // end function


function count_errors($missing_count) {

     if($missing_count > 0) {
          echo "<br />Please <a href='guestbook_add.php'>Go Back</a> and fill in the missing data.<br /><br /></div></body></html>";
          exit;

     }

}

function sanitize($field_name, $field_type, &$field_value) {

     if($field_type == "text" || $field_type == "textarea") {

          $_POST[$field_name] = trim($field_value);
          $_POST[$field_name] = stripslashes(strip_tags($field_value)); // strip html tags and back slashes
          $_POST[$field_name] = str_replace("/","",$field_value); // removes forward slashes
          $_POST[$field_name] = addslashes($field_value); // escapes quote marks so they will work in SQL statements
          echo "The field <b>" . $field_name . "</b> has been sanitized.<br>";

     }

}

function display_data($field_name, $field_type, $field_value) {

     if($field_type == "checkbox") {

          if($field_value != "") {

               echo $field_name . ": <strong>" . $field_value . "</strong>";
          }

          else {
               echo $field_name . ": <strong>no</strong>";
          }

     } // end field type checkbox

     else {
          echo $field_name . ": <strong>" . $field_value . "</strong><br /><br />";
     } // end else for field type checkbox

} // end function

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

check_submitted("name", "text", $missing_count);

check_submitted("email", "text", $missing_count);

check_submitted("comment", "textarea", $missing_count);

check_submitted("mail", "checkbox", $missing_count);

// 4a. Enter your function call for count_errors below this comment. There should be only one line of code.

count_errors($missing_count);

// Below this point is your our old code for checking for missing data.
// Notice that you had more code, and it did less -- it didn't track how many fields were missing.
// Once you create the functions and call them, please delete the $counter line and the 'if' blocks in this section.

// -- SANITIZE FIELDS (REMOVE DANGEROUS CHARACTERS) -- text boxes and textarea only

sanitize("name", "text", $_POST["name"]);

sanitize("email", "text", $_POST["email"]);

sanitize("comment", "textarea", $_POST["comment"]);

// Below this point is your our old code for checking for sanitizing the data.
// Notice that you had a lot more code, and it did less -- we didn't escape quote marks in the previous version.
// Once you create the functions and call them, please delete the old code in this section.

// -- DISPLAY OUTPUT

echo "<h3><i>You submitted the following information:</i></h3>";
echo "<div id='formData'>";

display_data("name", "text", $_POST["name"]);

display_data("email", "text", $_POST["email"]);

display_data("comment", "textarea", $_POST["comment"]);

display_data("mail", "checkbox", $_POST["mail"]);

echo "</div>"; // close #formData

?>

<br><br><a href="guestbook_add.php">Return to Form</a>

</div>

<hr />

<!-- ===================================================== -->
<!-- FOOTER -->

</body>

</html>
