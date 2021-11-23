<?php
namespace App\src\Repository\AuthRepository;

use App\src\Repository\ManagerRepository;

class SignupRepository extends ManagerRepository{

    public function signupUser(object $user)
    {
        $sql = 'INSERT INTO users (userName, userSurname, userUsername, userEmail, userPassword) VALUES (?, ?, ?, ?, ?);';
        $this->createQuery($sql, [
            $user->getName(),
            $user->getSurname(),
            $user->getUsername(),
            $user->getEmail(),
            $user->getPassword()
        ]);
        
        $userId = $this ->connection->lastInsertId();
        $user->setId($userId);

        header('Location: ../?route=login');
        echo "Success";
    }
}