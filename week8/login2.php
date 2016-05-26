<?php

// login2.php Revision 9 5-16-16 11:30 am

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

// DO NOT enter code to insert the login_check file. This page needs to run *before* a person is logged in.

// 1. Enter the code to start a session below. This should be one line of code.



// HEADER

// 2. Update the Header information below (all 3 lines).

/*
File Name: XXXXX.XXX
Date: XX/XX/XX
Programmer: XXX XXX
*/

// VARIABLES

$missing_count = 0;

/* 3. Insert code below to assign "username" from the $_POST array to $username, and "password" from the $_POST array to $password. 
This should be 2 lines of code, one for each variable. HINT: See the guestbook_add_action.php or guestbook_delete_action.php files 
under the heading // ASSIGN DATA TO VARIABLES FOR EASIER HANDLING for similar code. */




/* 4. Insert a line of code to encrypt the password in $password, and assign it to a variable named $hashed_password. 
   Use the sha1() function, as described in Part 1 of the assignment (Step 3, #2). */
   
   


// ==========================================================
// FUNCTIONS

/* 5. Write code to insert your cas225_functions.php include file here. Use include_once, and remember that this file is in the 
'includes' folder. */



// ====================================== 
// CODE FOR THIS PAGE

// -- CHECK EACH FIELD FOR MISSING DATA AND SANITIZE

// Check if data submitted (remove comment tags on 3 lines below if you want to see the array)
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

foreach ($_POST as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]); // ESPECIALLY IMPORTANT NOW THAT WE ARE INSERTING INTO A DATABASE
     
}

// exit if missing data 

if($missing_count > 0) {

     echo "<br />Please <a href='guestbook_add.php'>Go Back</a> and fill in the missing data.<br /><br /></div></body></html>";
     exit;

}

// CONNECT TO DATABASE (Steps 1 and 2)

// 6. Insert your connection.php include file here. Use include_once, and remember that this file is in the 'includes' folder.



// SQL STATEMENT

/* 7. Write an SQL statement here that selects username and permissions from the users table where username is 
      $username and password is $hashed_password. Assign the result to $sql. Remember to use the multi-line SQL 
      format that we used last week, which is required in this class. This will be 5 lines of code.
      For a similar SQL statement, see Part 1 of this assignment (Step 3, #2). */
   





     
// Display SQL for learning and trouble-shooting

echo "<br>3. SQL: " . $sql . "<br>";

/* Temporary exit for testing. If you are having trouble with this page, un-comment the line below and look at the SQL
   that is shown on the screen to see if there are any errors in it. Remember that there has to be a space between all
   of the words in an SQL statement. */
   
//exit; 

// RUN QUERY

// 8. Enter a statement here that runs the $sql query and assigns it to $result. 
//    Use a try...catch block to catch any errors and report how many rows are returned
//    if the query is successful, or the generated error message if it is not.
//    HINT: See the guestbook_view.php file or the code examples in Assignment 7 Part 1 for the code I would like you to use.
//    There should be 8 lines of code, including the comment at the top and the curly braces.
      








// =====================================================
// If we got to here the query ran, and we need to see if we should log them in or not

// If one row was returned (only one match), the login was successful

/* 9. Enter the 'if' statement that checks if the number of rows returned by the query is equal to 1 (one). Include the opening curly
       brace at the end of the line. This should be only one line of code. You can find this code in Part 1 in the login2.php section, in red.
       NOTE: The ending curly brace has already been created for you below (see // end if). The next 2 lines of code must be placed
       INSIDE of the 'if' block, BEFORE the closing curly brace. */
         


     /* 10. Enter a line of code that creates an associative array named $found_user from the $result object.
        BE CAREFUL! This code must be place INSIDE the 'if' block, BEFORE the closing curly brace. This is shown in blue in Part 1. */
        

	
	/* 11. Set 3 session variables for use on all pages. this should be 3 lines of code, as shown in green in Part 1. 
	       Assign the following values to the $_SESSION array elements: 
              true to $_SESSION["loggedin"] (do not put quote marks around true - it is a Boolean value)
              $found_user["username"] to $_SESSION["username"]
              $found_user["permissions"] to $_SESSION["permissions"]
                BE CAREFUL! This code must be entered BEFORE the closing curly brace for the 'if' block. */



     
     /* 12. Forwarding code will go here. PLEASE DO NOT ENTER ANY ADDITIONAL CODE until you get to this part in the 
     instructions for Assignment 8 Part 2. */
     
   // echo "<strong>Ready to forward to the home page!</strong>";


    // 13. Enter the closing curly brace for the 'if' block below (before the //).
 // end if

     /* 14. Create an 'else' block here that tells the user that they entered the wrong username or password. Give them a link back 
     to the logoin.php page. Model your code after that shown in Part 1 (in black, under login2.php). There should be 3 lines of code,
     including the curly braces. */





//==============
// FOOTER

include_once("includes/footer.php");

?>
