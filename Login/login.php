<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <?php
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];
    // db 연결
    // db_ed
    $db_id = "abcd";
    $db_passwd = "1234";
    $db_username = "user1";

    if ($id != $db_id) {
        echo "id is discorrect!";
    } else if ($passwd != $db_passwd) {
        echo "wrong password!";
    }

    session_start();
    $_SESSION['userid'] = $id;
    $_SESSION['userpasswd'] = $passwd;
    $_SESSION['username'] = $db_username;

    ?>

    <script>
    location.href = "../index.php";
    </script>
</body>

</html>