<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employées</title>
</head>
<body>
    <div>
        <table border=1>
            <thead>
                <tr>
                    <td>numEmploye</td>
                    <td>nomUtilisateur</td>
                    <td>email</td>
                    <td>motDePasse</td>
                    <td>avatar</td>
                    <td>status</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td><?php echo e($employe->numEmploye); ?></td>
                  <td><?php echo e($employe->nomUtilisateur); ?></td>
                  <td><?php echo e($employe->email); ?></td>
                  <td><?php echo e($employe->motDePasse); ?></td>
                  <td><?php echo e($employe->avatar); ?></td>
                  <td><?php echo e($employe->status); ?></td>
                  <td>
                    <div>
                      <!-- url('uri') -->
                      <form action="<?php echo e(route('modificationEmploye', $employe)); ?>" method="get">
                        <input type="submit" value="Modifier">
                      </form>
                      <form action="" method="post">
                        <?php echo csrf_field(); ?>
                        <!-- Html n'a pas de méthode delete donc on spécifie-->
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Supprimer">
                      </form-->
                    </div>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <span> Aucun employées </span>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html><?php /**PATH /home/amk/Bureau/laravel/projet/resources/views/employe/index.blade.php ENDPATH**/ ?>