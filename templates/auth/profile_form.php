<?php
if(!empty($_SESSION['userId']))
{
?>
    <form method="POST" class="auth-form">
        <input type="text" name="name" placeholder="Name" value="<?= htmlspecialchars($_SESSION['userName']); ?>">
        <input type="text" name="surname" placeholder="Surname" value="<?= htmlspecialchars($_SESSION['userSurname']); ?>">
        <input type="text" name="username" placeholder="Username" value="<?= htmlspecialchars($_SESSION['userUsername']); ?>">
        <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_SESSION['userEmail']); ?>">
        <!-- <input type="password" name="newPassword" placeholder="New password">
        <input type="password" name="newPasswordVerify" placeholder="Verify your new password"> -->
        <label for="password">If u need to do any changes please enter your password :</label>
        <input type="password" name="password" placeholder="Password">
        <input class="btn" type="submit" name="update" value="Update">
        <input class="btn" type="submit" name="return" value="Return">
    </form>
<?php
}
else
{
?>
    <h3>Veuillez vous connecter pour avoir accés à votre profil !<h3>
<?php
}
?>