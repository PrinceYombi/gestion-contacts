<?php
require_once('lib/header.php');
require_once('lib/users_functions.php');

$user = [
    "id"=>"",
    "nom"=>"",
    "prenom"=>"",
    "email"=>"",
    "telephone"=>""
];

$errors = [
    "nom"=>"",
    "prenom"=>"",
    "email"=>"",
    "telephone"=>""
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] ==="POST") {
    
    $user = array_merge($user, $_POST);

    require_once('lib/validateForm.php');

    if ($isValid) {

        $user = createUser($_POST);

        header('Location: index.php');
    }
}

?>

<div class="container">
    <div class="create-title">
        <h3>Nouveau contact</h3>
    </div>
    <?php require_once('lib/_form.php')?>
</div>

<?php require_once('lib/footer.php') ?>
