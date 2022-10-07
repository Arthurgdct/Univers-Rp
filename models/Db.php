<?php

class Db
{
    protected PDO $pdo;

    /**
     * Permet la connexion à la BDD
     */
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=universrp;charset=utf8', 'root');
            /**
             * PDO::ATTR_ERRMODE et PDO::ERRMODE_EXCEPTION permettent de spécifier à PDO que l'on veux des Exceptions à la place des erreurs PHP. Cela va permettre de les attraper dans le catch.
             */
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die('Erreur : ' . $error->getMessage());
        }
    }

    /**
     * Cette methode permet d'executer la requête SQL et de retourner le jeu de résultats.
     * @param [type] $query
     * @return array
     */
    protected function getQueryResult($query): array
    {
        $queryResult = $this->pdo->query($query);
        $result = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}
