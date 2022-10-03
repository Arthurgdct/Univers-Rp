<?php
class Character extends Db
{
    public int $id;
    public string $firstname;
    public string $lastname;
    public string $gender;
    public string $job;
    public int $age;
    public int $destiny;
    public int $courage;
    public int $intelligence;
    public int $charisma;
    public int $agility;
    public int $strength;
    public int $attack;
    public int $defense;
    public string $armors;
    public string $spells;
    public string $weapons;
    public string $items;
    public int $currentAdventure;
    public string $origin;
    public string $background;
    public string $profilPict;
    public string $user;


    public function createCharacter()
    {
        $query = 'INSERT INTO `character` (`firstname`, `lastname`, `gender`,`job`,`age`,`destiny`,`courage`,`intelligence`,`charisma`,`agility`,`strength`,`attack`,`defense`,`armors`,`spells`,`weapons`,`items`,`origin`,`background`,`profilPict`, `user`) VALUES 
    (:firstname, :lastname, :gender,:job,:age,:destiny,:courage,:intelligence,:charisma,:agility,:strength,:attack,:defense,:armors,:spells,:weapons,:items,:origin,:background,:profilPict,:user)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':firstname', $this->firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $this->lastname, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
        $stmt->bindParam(':job', $this->job, PDO::PARAM_STR);
        $stmt->bindParam(':age', $this->age, PDO::PARAM_INT);
        $stmt->bindParam(':destiny', $this->destiny, PDO::PARAM_INT);
        $stmt->bindParam(':courage', $this->courage, PDO::PARAM_INT);
        $stmt->bindParam(':intelligence', $this->intelligence, PDO::PARAM_INT);
        $stmt->bindParam(':charisma', $this->charisma, PDO::PARAM_INT);
        $stmt->bindParam(':agility', $this->agility, PDO::PARAM_INT);
        $stmt->bindParam(':strength', $this->strength, PDO::PARAM_INT);
        $stmt->bindParam(':attack', $this->attack, PDO::PARAM_INT);
        $stmt->bindParam(':defense', $this->defense, PDO::PARAM_INT);
        $stmt->bindParam(':armors', $this->armors, PDO::PARAM_STR);
        $stmt->bindParam(':spells', $this->spells, PDO::PARAM_STR);
        $stmt->bindParam(':weapons', $this->weapons, PDO::PARAM_STR);
        $stmt->bindParam(':items', $this->items, PDO::PARAM_STR);
        $stmt->bindParam(':origin', $this->origin, PDO::PARAM_STR);
        $stmt->bindParam(':background', $this->background, PDO::PARAM_STR);
        $stmt->bindParam(':profilPict', $this->profilPict, PDO::PARAM_STR);
        $stmt->bindParam(':user', $this->user, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function getInfoRecap()
    {
        $query = 'SELECT `character`.`id`,`lastname`, `firstname`,`job`,`age`,`profilPicture`.`name` AS profilPict,`origin`.`name` AS origin FROM `character` INNER JOIN `profilpicture` ON `profilpicture`.`id` = `character`.`profilPict` INNER JOIN `origin` ON `origin`.`id` = `character`.`origin` AND  `user` LIKE :user';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user', $this->user, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function deleteCharacter($id)
    {
        $query = 'DELETE FROM `character` WHERE id = :id';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function getCharacterById($id)
    {
        $query = 'SELECT `firstname`, `lastname`, `gender`,`job`,`age`,`destiny`,`courage`,`intelligence`,`charisma`,`agility`,`strength`,`attack`,`defense`,`armors`,`spells`,`weapons`,`items`,`origin`,`background`,`profilPict`,`origin` FROM `character` WHERE `character`.`id` = :id';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function haveThisCharacter($id, $user): bool
    {
        $query = 'SELECT COUNT(*) AS `number` FROM `character` WHERE `id`= :id AND `user` = :user';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }

    public function modifyCharacter($id)
    {
        $query = 'UPDATE `character` SET `firstname` = :firstname, `lastname` = :lastname, `gender` = :gender,`job` = :job,`age` = :age,`destiny` = :destiny,`courage` = :courage,`intelligence` = :intelligence,`charisma` = :charisma,`agility` = :agility,`strength` = :strength,`attack` = :attack,`defense` = :defense,`armors` = :armors,`spells` = :spells,`weapons` = :weapons,`items` = :items,`origin` = :origin,`background` = :background,`profilPict` = :profilPict WHERE `id` = :id';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':firstname', $this->firstname, PDO::PARAM_STR);
        $stmt->bindParam(':lastname', $this->lastname, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $this->gender, PDO::PARAM_STR);
        $stmt->bindParam(':job', $this->job, PDO::PARAM_STR);
        $stmt->bindParam(':age', $this->age, PDO::PARAM_INT);
        $stmt->bindParam(':destiny', $this->destiny, PDO::PARAM_INT);
        $stmt->bindParam(':courage', $this->courage, PDO::PARAM_INT);
        $stmt->bindParam(':intelligence', $this->intelligence, PDO::PARAM_INT);
        $stmt->bindParam(':charisma', $this->charisma, PDO::PARAM_INT);
        $stmt->bindParam(':agility', $this->agility, PDO::PARAM_INT);
        $stmt->bindParam(':strength', $this->strength, PDO::PARAM_INT);
        $stmt->bindParam(':attack', $this->attack, PDO::PARAM_INT);
        $stmt->bindParam(':defense', $this->defense, PDO::PARAM_INT);
        $stmt->bindParam(':armors', $this->armors, PDO::PARAM_STR);
        $stmt->bindParam(':spells', $this->spells, PDO::PARAM_STR);
        $stmt->bindParam(':weapons', $this->weapons, PDO::PARAM_STR);
        $stmt->bindParam(':items', $this->items, PDO::PARAM_STR);
        $stmt->bindParam(':origin', $this->origin, PDO::PARAM_STR);
        $stmt->bindParam(':background', $this->background, PDO::PARAM_STR);
        $stmt->bindParam(':profilPict', $this->profilPict, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function getCharacters(array $characters): array
    {
        $query = 'SELECT `character`.`id`,`lastname`, `firstname`,`job`,`age`,`destiny`,`courage`,`intelligence`,`charisma`,`agility`,`strength`,`attack`,`defense`,`armors`,`spells`,`weapons`,`items`,`profilPicture`.`name` AS profilPict,`origin`.`name` AS origin FROM `character` INNER JOIN `profilpicture` ON `profilpicture`.`id` = `character`.`profilPict` INNER JOIN `origin` ON `origin`.`id` = `character`.`origin` WHERE `character`.`id` IN (';
        for ($i = 0; $i < count($characters); $i++) {

            if ($i == count($characters) - 1) {
                $query .= ":character" . $characters[$i];
            } else {
                $query .= ":character" . $characters[$i] . ',';
            }
        }
        $query .= ')';
        $stmt = $this->pdo->prepare($query);
        for ($i = 0; $i < count($characters); $i++) {
            $stmt->bindParam(':character' . $characters[$i], $characters[$i], PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
