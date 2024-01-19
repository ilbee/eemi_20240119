<?php
if (!empty($_POST)) {
    $pdo = new PDO('mysql:dbname=eemi_20231030;host=127.0.0.1;port=3306', 'root', '');
    $sql = '
    INSERT INTO
        utilisateur
            (
                id,
                firstname,
                lastname
            )
        VALUE 
        (
            NULL,
            :firstName,
            :lastName
        )';
    $req = $pdo->prepare($sql);

    $req->bindParam(':firstName', $_POST['firstName']);
    $req->bindParam(':lastName', $_POST['lastName']);

    if ($req->execute()) {
        echo 'ok';
    } else {
        echo 'ko';
    }
}
?>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="firstName">First name</label>
            <input type="text" id="firstName" name="firstName" />

            <br/>
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" name="lastName" />

            <br/>
            <button type="submit">Valider</button>
        </form>
    </body>
</html>
