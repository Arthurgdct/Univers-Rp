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
        $stmt->bindParam(':profilPict',$this->profilPict, PDO::PARAM_STR);
        $stmt->bindParam(':user',$this->user, PDO::PARAM_STR);
        $stmt->execute();
    }
}
