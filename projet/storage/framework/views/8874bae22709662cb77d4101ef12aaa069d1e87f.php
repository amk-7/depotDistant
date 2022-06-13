<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer un curl_multi_getcontent</title>
</head>
<body>
    <div>
        <h1>Enregistrement d'un client </h1><hr>
        <form action="<?php echo e(route('enregistrementClient')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

          <div>
            <label for="nom"><?php echo e(__('Nom')); ?></label>
            <input type="text" name="nom" id="" value="" class="<?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div>
            <label for="prenom"><?php echo e(__('Prénom')); ?></label>
            <input type="text" name="prenom" id="" value="" class="<?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
            <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div>
            <label for="sexe"><?php echo e(__('Sexe')); ?></label>
            <select name="sexe" id="">
              <option value="Masculin">Masculin</option>
              <option value="Féminin">Féminin</option>
            </select>
          </div>
          <div>
            <label for="dateNaiss"><?php echo e(__('Date De Naissance')); ?></label>
            <input type="date" name="dateNaiss" id="" value="">
          </div>
          <div>
            <h3>Adresse</h3>
            <table name="adresse">
                <tbody>
                  <td>
                    <label for="Ville"><?php echo e(__('Ville')); ?></label>
                    <select name="ville" id="">
                      <option value="Sokode">Sokode</option>
                      <option value="Kara">Kara</option>
                    </select>
                  </td>
                  <td>
                    <label for="rue"><?php echo e(__('Rue')); ?></label>
                    <select name="rue" id="">
                      <option value="Khomah I">Khomah I</option>
                      <option value="Khomah II">Khomah II</option>
                    </select>
                  </td>
                  <td>
                    <label for="bp"><?php echo e(__('Boit Postale')); ?></label>
                    <select name="bp" id="">
                      <option value="BP 5432">BP 5432</option>
                      <option value="BP 3333">BP 3333</option>
                    </select>
                  </td>
                </tbody>
            </table>
          </div>
          <br>
          <div>
            <label for="email"><?php echo e(__('Email')); ?></label>
            <input type="email" name="email" id="" value="">
          </div>
          <div>
            <label for="telephone"><?php echo e(__('Numéro de téléphone')); ?></label>
            <input type="tel" name="telephone" id="" value="">
          </div>
          <div>
            <input type="submit" value="Enregister">
          </div>
        </form>
    </div>
    
</body>
</html><?php /**PATH /home/amk/Bureau/laravel/projet/resources/views/client/create.blade.php ENDPATH**/ ?>