<?php
require_once('lib/header.php');
require_once('lib/users_functions.php');

$users = getUser();

//var_dump($users);
?>


   <div class="new-contact">
        <a href="create_user.php">Céér un nouveau contact</a>
   </div> 
   <div class="container">
    <div class="accueil-title">
        <h3>Mes contacts</h3>
    </div>
    <table>
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Email</td>
                    <td>Téléphone</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['nom'] ?></td>
                        <td><?php echo $user['prenom'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['telephone'] ?></td>
                        <td>
                            <a href="voir.php?id=<?php echo $user['id'] ?>" class="btn-voir">Voir</a>
                            <a href="modifier.php?id=<?php echo $user['id'] ?>" class="btn-modifier">Modifier</a>
                            <a href="supprimer.php?id=<?php echo $user['id'] ?>" class="btn-supprimer">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

   </div>

<?php require_once('lib/footer.php') ?>