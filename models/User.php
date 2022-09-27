<?php
class User extends Db
{
    public int $id;
    public string $pseudo;
    public string $email;
    public string $password;
    public int $role;


    public function createUser()
    {
        // : est un  marqueur nommé et ? est un marqueur interrogatif
        $query = 'INSERT INTO `user` (`pseudo`, `email`, `password`) VALUES 
        (:pseudo, :email, :password)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function emailExist(): bool
    {
        $query = 'SELECT COUNT(*) AS `number` FROM `user` WHERE `email` = :email';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result->number;
    }
    public function pseudoExist(): bool
    {
        $query = 'SELECT COUNT(*) AS `number` FROM `user` WHERE `pseudo` = :pseudo';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result->number;
    }
    public function loginUser(): bool
    {
        $query = "SELECT * FROM `user` WHERE `pseudo` = :pseudo";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetch();
        if ($result == false) {
            return false;
        } else {
            return password_verify($this->password, $result->password);
        }
    }
}
