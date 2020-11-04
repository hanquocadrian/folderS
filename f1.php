<pre>
<?php
if (!isset($_COOKIE['firstTime'])) {
    setcookie('firstTime','no');
    exit();
}
else{
    if (isset($_POST) && isset($_FILES)) {
        print_r($_POST);
        print_r($_FILES['img']['size']);
    }
}
