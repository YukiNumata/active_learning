<?php
    if (isset($_COOKIE["visited"])){
        $count = $_COOKIE["visited"] + 1;
    }else{ $count = 1; }
   setcookie("visited", $count);
?>

<html>
<head><title>PHP</title></head>
<body>

<?php
    print('<p>You visited this page  '.$count.'times</p>');
?>

</body>
</html>