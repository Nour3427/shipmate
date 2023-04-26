<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Entity\User;

class UserModel extends AbstractModel
{

    /* insérer les informations de l'utilisateur dans la base de données*/

    function addUser(string $firstname, string $lastname, string $email, string $password, string $phone_number)
    {
        $sql = 'INSERT INTO user 
               (firstname,lastname,email,password,phone_number)
                VALUES (?,?,?,?,?)';

        $this->db->prepareAndExecute($sql, [$firstname, $lastname, $email, $password, $phone_number]);
    }

    function updateUser(int $idUser, string $firstname, string $lastname, string $email, string $password, string $phone_number)
    {
        $sql = 'UPDATE user set firstname = ?, lastname = ?, email = ?, password = ?, phone_number = ? where idUser = ?';
        $this->db->prepareAndExecute($sql, [$firstname, $lastname, $email, $password, $phone_number, $idUser]);
    }
    
    function getUserById($idUser){
        $sql = 'SELECT * FROM user
               WHERE idUser= ?';
        // Récupération de l'utilisateur correspondant (s'il existe)       
        $result = $this->db->getOneResult($sql, [$idUser]);
        // Vérification que l'utilisateur existe bien
        $currentUser= new User($result);
        return $currentUser;
    }
    // Inscription : vérification que l'email n'existe pas déjà
    function isEmailExists($email)
    {
        $sql = 'SELECT * FROM user
               WHERE email = ?';
        // Récupération de l'utilisateur correspondant (s'il existe)       
        $result = $this->db->getOneResult($sql, [$email]);
        // Vérification que l'utilisateur existe bien
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }

    // login : vérification que les passwords correspondent
    function verifyLogin($email, $password)
    {
        $sql = 'SELECT * FROM user
               WHERE email = ?';
        // Récupération de l'utilisateur correspondant (s'il existe)       
        $result = $this->db->getOneResult($sql, [$email]);
        // Vérification que l'utilisateur existe bien

        if (!$result) {
            // L'utilisateur n'existe pas
            return null;
        } else {
            // verify hashed password with login_user password
            if (password_verify($password, $result['password'])) {

                return new User($result);
            }
            return null;
        }
    }
    function getAllUsers(){
        $sql = 'SELECT * FROM user';
        $results = $this->db->getAllResults($sql);
        return $results;

    }
}
