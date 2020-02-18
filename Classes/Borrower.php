<?php
/**
 * Description of Borrower
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 * @author wiegand
 */
class Borrower extends ActiveRecord {

    /**
     * The ID from the datadase
     * 
     * @var int
     */
    private $borrowerId;
    /**
     * First name of the borrower
     *
     * @var string
     */
    private $name;
    /**
     * Last name of the borrower
     * 
     * @var string
     */
    private $surname;
    /**
     * Name of the class where the borrowed devices are used
     * 
     * @var string
     */
    private $class;

    public function __construct()
    {   
        $this->database = Database::getDbConnection();
    }
    
    /**
     * Loads the borrower entity with the id from the datadase
     * 
     * @param int $id
     * @return ActiveRecord
     */
    public static function load($id)
    {
        $query = "SELECT * FROM borrower WHERE borrowerID = :id;";
        $params = array(
            ':id' => $id
        );
        
        $db = Database::getDbConnection();
        $rows = $db->executeQuery($query, $params);
        
        if(count($rows) === 0) {
            return null;
        }
        
        return Borrower::convert($rows[0]);
    }
    
    private static function convert($row)
    {
        $instance = new Borrower();
        $instance->borrowerId = $row['borrowerID'];
        $instance->setName($row['name']);
        $instance->setSurname($row['surname']);
        $instance->setClass($row['class']);
        
        return $instance;
    }

    public function save()
    {   
        if($this->getBorrowerId() === null) {
            $this->insert();
        }
        else {
            $this->update();
        }
    }

    protected function insert()
    {
        $query = "INSERT INTO borrower (name, surname, class) VALUES (:name, :surname, :class);";
        $params = array(
            ':name' => $this->name, 
            ':surname' => $this->surname, 
            ':class' => $this->class
        );
        
        $this->database->executeQuery($query, $params);
    }

    protected function update()
    {
        $query = "UPDATE borrower 
            SET name = :name, surname = :surname, class = :class
            WHERE borrowerID = :borrowerId;";
        $params = array(
            ':name' => $this->name, 
            ':surname' => $this->surname, 
            ':class' => $this->class,
            ':borrowerId' => $this->borrowerId
        );
        
        $this->database->executeQuery($query, $params);
    }

    public function delete()
    {
        $query = "DELETE FROM borrower WHERE borrowerID = :borrowerId;";
        $params = array(
            ':borrowerId' => $this->borrowerId
        );
        
        $this->database->executeQuery($query, $params);
    }
    
    public function getBorrowerId() 
    {
        return $this->borrowerId;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    
    public function getSurname()
    {
        return $this->surname;
    }
    
    public function setClass($class)
    {
        $this->class = $class;
    }
    
    public function getClass()
    {
        return $this->class;
    }
}
?>