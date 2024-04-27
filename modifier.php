<?php
require_once('lib/header.php');
require_once('lib/users_functions.php');

$userId = $_GET['id'];
$user = getUserId($userId);

$errors = [
    "nom"=>"",
    "prenom"=>"",
    "email"=>"",
    "telephone"=>""
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] ==="POST") {
    
    $user = updateUser($_POST, $userId);

    require_once('lib/validateForm.php'); //TRAITEMENT DU FORMULAIRE
 
    if ($isValid) {

        header('Location: index.php'); //REDIRECTION
    }
}

?>

<div class="container">
    <div class="modifier-title">
        <h3><?php echo "Mettre à jour : ".$user['nom']." ".$user['prenom'] ?></h3>
    </div>
    <?php require_once('lib/_form.php') ?>
</div>

<?php require_once('lib/footer.php') ?>