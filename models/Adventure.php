<?php
class Adventure extends Db
{
    public int $id;
    public string $title;
    public string $cover;
    public string $map;

    public function getAdventureInfo()
    {
        $query = 'SELECT `id`,`title`,`cover` FROM `adventure`';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAdventure($adventure)
    {
        $query = 'SELECT `chapter`,`illustration`,`orderNumber` FROM `contentstory` INNER JOIN `adventure` ON `contentstory`.`adventure` = `adventure`.`id` WHERE `adventure`.`id` = :adventure ORDER BY `orderNumber`';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':adventure',$adventure,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}