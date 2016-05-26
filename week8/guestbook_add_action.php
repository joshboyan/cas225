<?php

include_once "includes/html_top.php";

// guestbook_add_action.php Revision 9 5-16-16 11:30 am

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

// 3 and 4. Update the Header information below (all 3 lines).

/*
File Name: XXXXX.XXX
Date: XX/XX/XX
Programmer: XXX XXX
*/

// ==========================================================
// VARIABLES
 
include_once "includes/php_header.php";

$heading = "Guest Book Add Action Page";

// ==========================================================
// ARRAYS

// -- CREATE ARRAY OF FORM FIELD NAMES SO WE CAN LOOP THROUGH THEM
//    This is an associative array, meaning that each of the variables in the array is given a name.

$form_fields=array();

$form_fields["username"]="select";
$form_fields["comment"]="textarea";

// ==========================================================
// FUNCTIONS

include_once "includes/cas225_functions.php";

// ======================================= <!-- ======================================= -->
// HTML HEADER 

include_once "includes/html_header.php";

// ======================================

echo "<h1>" . $heading . "</h1>";

// ====================================== 
// CODE FOR THIS PAGE

// -- CHECK EACH FIELD FOR MISSING DATA AND SANITIZE

// Check if data submitted (remove comment tags on 3 lines below if you want to see the array)
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

foreach ($form_fields as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]); // ESPECIALLY IMPORTANT NOW THAT WE ARE INSERTING INTO A DATABASE
     
}

// exit if missing data in any but checkboxes

if($missing_count > 0) {

     echo "<br />Please <a href='guestbook_add.php'>Go Back</a> and fill in the missing data.<br /><br /></body></html>";
     exit;

}

// ASSIGN DATA TO VARIABLES FOR EASIER HANDLING
$username=$_POST["username"];
$comment=$_POST["comment"];

// CONNECT TO DATABASE (Step 1)

include_once "includes/connection.php";

// SQL STATEMENT

$sql="INSERT INTO guestbook(username, comment)"
. " VALUES('$username', '$comment');"; 

     
// Display SQL for learning and trouble-shooting
     
echo "<br>2. SQL: " . $sql . "<br>";

// RUN QUERY
     
// Run a query
try {
     $result = $connection->query($sql);
     echo "3. Query succeeded! The new record was added.<br>";
} 
catch (PDOException $e) {
     die("3. Query failed! " . $e->getMessage());
}

// link to view guestbook page
echo "<p><a href='guestbook_view.php'>View guestbook</a></p>";

// =====================================================
// FOOTER 

include_once "includes/footer.php";

?>