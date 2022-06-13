<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un employé</title>
</head>
<body>
    <div>
        <h1>Modification d'un employe </h1>
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo method_field('put'); ?>
          <div>
            <label for="nomEmploye"><?php echo e(__('Nom Employé')); ?></label>
            <input type="text" name="nomEmploye" id="" value="">
          </div>
          <div>
            <label for="prenom"><?php echo e(__('Prénom Employé')); ?></label>
            <input type="text" name="prenom" id="" value="">
          </div>
          <div>
            <label for="sex"><?php echo e(__('Sex')); ?></label>
            <select name="sex" id="">
              <option value="Masculin">Masculin</option>
              <option value="Féminin">Féminin</option>
            </select>
          </div>
          <div>
            <label for="dateNaiss"><?php echo e(__('Date De Naissance')); ?></label>
            <input type="date" name="dateNaiss" id="" value="">
          </div>
          <div>
            <label for="adresse"><?php echo e(__('Adresse')); ?></label>
            <input type="text" name="adresse" id="" value="">
          </div>
          <div>
            <label for="numero"><?php echo e(__('Numéro de téléphone')); ?></label>
            <input type="text" name="numero" id="" value="">
          </div>
          <div>
            <label for="email"><?php echo e(__('Email')); ?></label>
            <input type="email" name="email" id="" value="">
          </div>
          <div>
            <label for="motDePasse"><?php echo e(__('Mot De Passe')); ?></label>
            <input type="password" name="motDePasse" id="" value="">
          </div>
          <div>
            <label for="avatar"><?php echo e(__('Avatar')); ?></label>
            <input type="file" name="avatar" id="" value="">
            <textarea name="" id="" cols="30" rows="10">

            </textarea>
          </div>
          <div>
            <label for="status"><?php echo e(__('Status')); ?></label>
            <input type="number" name="status" id="" value="{{}}">
          </div>
          <div>
            <input type="submit" value="Modifier">
          </div>
        </form>
    </div>
</body>
</html><?php /**PATH /home/amk/Bureau/laravel/projet/resources/views/employe/edite.blade.php ENDPATH**/ ?>