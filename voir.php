<?php
require_once('lib/header.php');
require_once('lib/users_functions.php');

$userId = $_GET['id'];

$user = getUserId($userId); 

?>

<div class="container">
    <div class="voir-title">
        <h3>Contact : <?php echo $user['nom']." ".$user['prenom'] ?></h3>
    </div>
    <div class="voir-btn">
        <a href="modifier.php?id=<?php echo $user['id'] ?>" class="btn-modifier">Modifier</a>
        <a href="supprimer.php?id=<?php echo $user['id'] ?>" class="btn-supprimer">Supprimer</a>
    </div>
    <div class="voir-body">
        <div class="voir-item">
            <div class="voir-line item">Nom: </div>
            <div class="voir-line item">Prénom: </div>
            <div class="voir-line item">Email: </div>
            <div class="voir-line item">Téléphone: </div>
        </div>
        <div class="voir-item">
            <div class="voir-line"><?php echo $user['nom']?></div>
            <div class="voir-line"><?php echo $user['prenom']?></div>
            <div class="voir-line"><?php echo $user['email']?></div>
            <div class="voir-line"><?php echo $user['telephone']?></div>
        </div>
    </div>
</div>


<?php require_once('lib/footer.php') ?>
