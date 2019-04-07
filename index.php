<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta desctiption. This will often show up in search results.">
        <meta name="viewport" content="width=device-width, intital-scale=1">   
    </head>

    <body>
        <form action ="index.php" method="post">
            <p class="radio_description">Star above the tree 
            <input type="radio" name="star_appear" value="1"><br>
            </p>
            <p class="radio_description">No star above the tree
            <input type="radio" name="star_appear" value="0"><br>
            </p>
            <p class="text_field">Height of the tree 
            <input type="text" name="height_of_tree"><br>
            </p>
            <input type="submit" name="formSubmit" value="Submit">
            
        </form>


<?php

$start = "Please create the tree!";
$tree_height = $_POST["height_of_tree"];

echo "<center>";


if (isset($_POST["star_appear"]) &&
    $_POST["star_appear"] == "1") {
    echo "* ";  
}elseif (isset($_POST["star_appear"]) &&
    $_POST["star_appear"] == "0") {
    echo "";
}else {
    echo "</center>";
    echo $start;
    echo "<center>";

}

echo "<br>";
for($a=1;$a<=$tree_height;$a++){
    for($b=1;$b<=$a;$b++){
        echo "x ";
    }
    echo "<br>";
}
echo "][ "

?>


</body>


</html>