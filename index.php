<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Input a;
    <input type="text" name="inputA"/>
    Input b;
    <input type="text" name="inputB"/>
    Input c;
    <input type="text" name="inputC"/>
    <input type="submit" value="check root"/>
    <?php
    include "class.lib.php";
    ?>
    <?php
    $a = $_POST["inputA"];
    $b = $_POST["inputB"];
    $c = $_POST["inputC"];
    $quadraticequation = new QuadraticEquation($a, $b, $c);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($a) || !empty($b) || !empty($c)) {
            if ($quadraticequation->getDiscriminant() == 0) {
                echo "root = " . $quadraticequation->get_root1();
            }
            if ($quadraticequation->getDiscriminant() > 0) {
                echo "root 1 = " . $quadraticequation->get_root1() . "<br>root 2 =" . $quadraticequation->get_root2();
            }
        } else {
            echo "pls input";
        }
    }
    ?>
</form>
</body>
</html>