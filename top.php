<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    
    <title>Ashton's Quizzes</title>

    <meta name="author" content="Ashton Putnam">

    <meta name="description" content="A bunch of simple online quizzes for people to enjoy and also look at from an analytical standpoint.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css?version=<?php print time(); ?>" type="text/css">
</head>

<?php
print '<body id="' . $pathParts['filename'] . '">';
print '<!-- #################    Body element  ################# -->';
include 'connect-DB.php';
?>