<?php
namespace App\src\Repository\AuthRepository;

use App\src\Repository\ManagerRepository;

class loginRepository extends ManagerRepository{
    public function loginUser(object $user, $post)
    {
        $sql = 'SELECT * FROM users WHERE userUsername = ? OR userEmail = ?;';
        $result = $this->createQuery($sql, [
            $user->getUsername(),
            $user->getEmail()
        ]);
        
        if($result->rowCount() == 0) {
            $result = null;
            header("Location: ../?auth=login?error=usernotfound");
            exit();
        }

        $paswordHashed = $result->fetch('userPassord');
        $checkPwd = password_verify($post['password'], $paswordHashed[0]["userPassword"]);
        
        if($checkPwd == false) {
            $result = null;
            header("Location: ../?auth=login?error=wrongpasswpord");
            exit();
        }
        elseif($checkPwd == true) {
            $sql = 'SELECT * FROM users WHERE usersUid = ? OR usersEmail = ? AND usersPassword = ?;';
            $result = $this->createQuery($sql, [
                $user->getUsername(),
                $user->getEmail(),
                $user->getPassword()
            ]);

            if($result->rowCount() == 0) {
                $result = null;
                header("Location: ../?auth=login?error=usernotfound");
                exit();
            }
           
            $user = $result->fetchAll();
            session_start();
                $_SESSION["userId"] = $user[0]["userId"];
                $_SESSION["userName"] = $user[0]["userName"];
                $_SESSION["userSurname"] = $user[0]["userSurname"];
                $_SESSION['userUsername'] = $user[0]["userUsername"];
                $_SESSION["userEmail"] = $user[0]["userEmail"];

            $result = null;
            header('Location: ../?route=home');
        }
    }
}