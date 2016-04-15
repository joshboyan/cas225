
<?php
// define variables
$pet_type = "dog";
$pet_name = "Fido";
$pet_age = 3;
$title = "Portland Community College";
$styles_folder = "styles";
$styles_file = "styles.css";
$page_address = "http://www.pcc.edu";
$page_name = "Portland Community College";
$image_folder = "images";
$image_name = "frog.jpg";
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo $styles_folder . '/' . $styles_file; ?>">

</head>

<body>

<?php
// display contents of variables
// display contents of variables
// display contents of variables
echo "<p>My pet is a " . $pet_type . ".</p>";
echo "<p>My pet's name is " . $pet_name . ".</p>";
echo "<p>My pet's age is " . $pet_age . ".<p>";
?>

<p><a href="<?php echo $page_address; ?>"><?php echo $page_name; ?></a></p>

<img src="<?php echo $image_folder . '/' . $image_name; ?>" alt="<?php echo $image_name; ?>">

</body>

</html>