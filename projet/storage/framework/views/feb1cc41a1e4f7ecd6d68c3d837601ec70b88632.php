<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer un employé</title>
    <style>
      img {
        width: 10%;
	      height: 10%;
      }
    </style>
</head>
<body>
    <div>
        <h1>Enregistrement d'un employe </h1><hr>
        <form action="<?php echo e(route('enregistrementEmploye')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

          <div>
            <label for="nom"><?php echo e(__('Nom Employé')); ?></label>
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
            <label for="prenom"><?php echo e(__('Prénom Employé')); ?></label>
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
            <label for="nomUtilisateur"><?php echo e(__('Nom Utilisateure')); ?></label>
            <input type="text" name="nomUtilisateur" id="" value="" class="<?php $__errorArgs = ['nomUtilisateur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['nomUtilisateur'];
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
            <label for="numero"><?php echo e(__('Numéro de téléphone')); ?></label>
            <input type="tel" name="numero" id="" value="">
          </div>
          <div>
            <label for="email"><?php echo e(__('Email')); ?></label>
            <input type="email" name="email" id="" value="">
          </div>
          <div>
            <label for="motDePasse"><?php echo e(__('Mot De Passe')); ?></label>
            <input type="password" name="motDePasse" id="" value="" class="<?php $__errorArgs = ['nomUtilisateur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['nomUtilisateur'];
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
            <label for="avatar"><?php echo e(__('Photo de profil')); ?></label>
            <input type="file" onchange="previewPicture(this)" name="avatar" id="" value="" accept="image/jpg, image/jpeg, image/png, image/jpeg"><br>
            <img src="" alt="profil" id="profil" size>
          </div>
          <div>
            <input type="submit" value="Enregister">
          </div>
          <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="role_liste" id="role_liste">
              <div>
                <input type="checkbox" name="<?php echo e($role); ?>" id="<?php echo e($role); ?>">
                <label for=""><?php echo e($role); ?></label>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>
    </div>
    

    <h1>Create Post</h1>
 
    <?php if($errors->any()): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
  

    <script type="text/javascript">
        var image = document.getElementById("profil");
        var types = ["image/jpg", "image/jpeg", "image/png"];
        var previewPicture = function(e){
          const [picture] = e.files;
          if (types.includes(picture.type)){
            profil.src = URL.createObjectURL(picture);
          }
        }
    </script>
</body>
</html><?php /**PATH /home/amk/Bureau/laravel/projet/resources/views/employe/create.blade.php ENDPATH**/ ?>