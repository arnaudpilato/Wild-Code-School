<?php
require_once 'connec.php';
$_POST['firstname'] = null;
$_POST['lastname'] = null;
$success = null;
$pdo = new PDO(DSN, USER, PASS,[

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

if(isset($_POST['firstname'], $_POST['firstname'])){
    $query = $pdo-> prepare('INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)');
    $query->execute([
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
    ]);
    $success= 'Prénoms et nom enregistrés';
}
$querry = "SELECT * FROM friend";
$statement = $pdo->query($querry);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);
FOREACH($friends as $friend) {
    echo $friend['firstname'] . '  ' . $friend['lastname'] . ', ';
}
if($success):?>
    <div class="alert"><?= $success ?></div>
<?php endif ?>

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
    <form action="" method="post">
        <label for="firstname">Enter your firstname</label>
        <input type="text" name="firstname" id="firstname" value="" required>

        <label for="lastname">Enter your lastname</label>
        <input type="text" name="lastname" id="lastname" required>

        <button>Submit</button>
    </form>

    </body>
    </html>

<?php
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($firstname)) {
        $errors [] = "firstname required";
    }
    if(empty($lastname)) {
        $errors [] = "lastname required";
    }
    if (!empty($errors)) {
        foreach ($errors as $error){
            ?>
            <ul>
                <li> <?= $error ?> </li>
            </ul>
            <?php
        }
    }
}
?>