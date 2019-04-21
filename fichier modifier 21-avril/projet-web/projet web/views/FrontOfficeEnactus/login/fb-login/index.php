<?php
require './fb-init.php';
?>
<?php if(isset($_SESSION['access_token'])): ?>
<a href="./Logout.php">Logout</a>
<?php else :?>
<a href="<?php echo $login_Url;?>">Login Facebook</a>
<?php endif ;?>
