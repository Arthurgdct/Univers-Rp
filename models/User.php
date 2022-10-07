<?php
class User extends Db
{
    public int $id;
    public string $pseudo;
    public string $email;
    public string $password;
    public int $role;

/**
 * methode permettant l'ajout d'un utilisateur dans la bdd
 * @return void
 */
    public function createUser()
    {
        $query = 'INSERT INTO `user` (`pseudo`, `email`, `password`) VALUES 
        (:pseudo, :email, :password)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        $stmt->execute();
    }
    /**
     * Methode de vérification de l'utilisation de l'email
     * @param [string] $email
     * @return boolean
     */
    public function emailExist(string $email): bool
    {
        $query = 'SELECT COUNT(*) AS `number` FROM `user` WHERE `email` = :email';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result->number;
    }
    /**
     * methode de vérification de disponibilité du pseudo
     * @param [string] $pseudo
     * @return boolean
     */
    public function pseudoExist(string $pseudo): bool
    {

        $query = 'SELECT COUNT(*) AS `number` FROM `user` WHERE `pseudo` = :pseudo';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result->number;
    }
    /**
     * Methode qui permet de vérifier les données envoyer par l'utilisateur afin de le connecter ou non
     * @return boolean
     */
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
