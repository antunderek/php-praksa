<?php

require_once 'app/bootstrap.php';

//require_once 'app/Codecourse/Models/User.php';

$users = $db->query("
    SELECT * FROM users
");

$users->setFetchMode(PDO::FETCH_CLASS, 'Codecourse\Models\User');

$users = $users->fetchAll();

//foreach ($users as $user) {
//    echo $user->getFullNameOrUsername(), ' ', $user->created->format('d M Y h:i:s'), '<br>';
//}

//echo $users[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php foreach ($users as $user): ?>
    <div class="user">
        <h4><?php echo $user->getFullNameOrUsername(); ?></h4>
        <p>Joined <?php echo $user->created->diffForHumans(); ?></p>

        <?php if ($user->last_active): ?>
            Last active <?php echo $user->last_active->diffForHumans(); ?>
        <?php else: ?>
            Never active
        <?php endif; ?>
    </div>
<?php endforeach; ?>
</body>
</html>

