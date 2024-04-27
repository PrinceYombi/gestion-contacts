
<form action="" method="post" enctype="multipart/form-data">
        <div class="form-line">
            <div class="form-label">Nom</div>
            <input type="text" name="nom" placeholder="Votre nom ..." value="<?php echo $user["nom"]?>">
        </div>
        <div class="errors">
            <?php echo ($errors['nom']) ? $errors["nom"] : ""?>
        </div>
        <div class="form-line">
            <div class="form-label">Prénom</div>
            <input type="text" name="prenom" placeholder="Votre prénom ..." value="<?php echo $user["prenom"]?>">
        </div>
        <div class="errors">
           <?php echo ($errors['prenom']) ? $errors['prenom'] : ""?> 
        </div>
        <div class="form-line">
            <div class="form-label">Email</div>
            <input type="email" name="email" placeholder="Votre email ..." value="<?php echo $user["email"]?>">
        </div>
        <div class="errors">
            <?php echo ($errors['email']) ? $errors['email'] : ""?>
        </div>
        <div class="form-line">
            <div class="form-label">Téléphone</div>
            <input type="number" name="telephone" placeholder="Votre numero de téléphone ..." value="<?php echo $user["telephone"]?>">
        </div>
        <div class="errors">
            <?php echo ($errors['telephone']) ? $errors['telephone'] : ""?>
        </div>
        <button type="btn" class="btn-submit">Envoyer</button>
    </form>
