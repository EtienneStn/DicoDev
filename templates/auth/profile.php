<section class="bg-2">
    <div class="container">
        <?php
        if (!empty($_SESSION['userId'])) {
            ?>
                <?php
                if (isset($_POST['submit'])) {
                ?>
                <form method="POST" class="auth-form">
                <input type="text" name="name" placeholder="Name" id="">
                    <input type="text" name="surname" placeholder="Surname" id="">
                    <input type="text" name="username" placeholder="Username" id="">
                    <input type="email" name="email" placeholder="Email" id="">
                    <input type="password" name="password" placeholder="Change your password" id="">
                    <input type="password" name="passwordVerify" placeholder="Verify your new password" id="">
                    <label for="oldPassword">If u need to do any change please enter your password :</label>
                    <input type="password" name="oldPassword" placeholder="Password" id="">
                    <button type="submit" name="update">Save</button>
                    <button type="" name="return"><a href="profile.php">Return</a></button>
                </form>
                <?php
                }
                else {
                ?>
                <div class="h2">
                    <h2>Profile Informations</h2>
                </div>
                <form action="" method="POST" class="profile-form">
                    <p><?php echo "{$_SESSION['userName']}"?></p>
                    <p><?php echo "{$_SESSION['userSurname']}"?></p>
                    <p><?php echo "{$_SESSION['userUid']}"?></p>
                    <p><?php echo "{$_SESSION['userEmail']}"?></p>
                    <button type="submit" name="submit">Edit</button>
                </form>
                <?php
                }
                ?>
        <?php
        }
        else {
        ?>
            <h3>Veuillez vous connecter pour avoir accés à votre profil !<h3>
        <?php
        }
        ?>
    </div>
</section>