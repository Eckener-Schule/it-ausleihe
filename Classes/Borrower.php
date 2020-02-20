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
     * Firstname of the borrower
     *
     * @var string
     */
    private $name;
    /**
     * Lastname of the borrower
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
    /**
     * The connection to the database
     * 
     * @var Database
     */
    private $database;

    /**
     * Initialized the database connection
     */
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
        $stmt = $db->executeQuery($query, $params);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if($rows === false || count($rows) === 0) {
            return null;
        }
        
        return Borrower::convert($rows[0]);
    }
    
    /**
     * Converts an array loaded from the database to an instance of the Borrower-class
     * 
     * @param array $row
     * @return Borrower
     */
    private static function convert($row)
    {
        $instance = new Borrower();
        $instance->borrowerId = $row['borrowerID'];
        $instance->setName($row['name']);
        $instance->setSurname($row['surname']);
        $instance->setClass($row['class']);
        
        return $instance;
    }

    /**
     * Inserts the borrower into the database if the borrower does not already exists 
     * or updates the existing borrower
     * 
     * {@inheritDoc}
     * @see ActiveRecord::save()
     */
    public function save()
    {   
        if($this->getBorrowerId() === null) {
            return $this->insert();
        }
        else {
            $this->update();
        }
    }

    /**
     * Inserts the borrower into the database
     * 
     * {@inheritDoc}
     * @see ActiveRecord::insert()
     */
    protected function insert()
    {
        $query = "INSERT INTO borrower (name, surname, class) VALUES (:name, :surname, :class);";
        $params = array(
            ':name' => $this->name, 
            ':surname' => $this->surname, 
            ':class' => $this->class
        );
        
        $stmt = $this->database->executeQuery($query, $params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if($result !== false) {
            return $this->database->pdo->lastInsertId();
        }
    }

    /**
     * Updates the borrower in the database
     * 
     * {@inheritDoc}
     * @see ActiveRecord::update()
     */
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

    /**
     * Deletes the borrower in the database
     * 
     * {@inheritDoc}
     * @see ActiveRecord::delete()
     */
    public function delete()
    {
        $query = "DELETE FROM borrower WHERE borrowerID = :borrowerId;";
        $params = array(
            ':borrowerId' => $this->borrowerId
        );
        
        $this->database->executeQuery($query, $params);
    }
    
    /**
     * @return int - the ID of the borrower
     */
    public function getBorrowerId() 
    {
        return $this->borrowerId;
    }
    
    /**
     * Sets the firstname of the borrower
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string - the firstname of the borrower
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the lastname of the borrower
     * 
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    
    /**
     * @return string - the lastname of the borrower
     */
    public function getSurname()
    {
        return $this->surname;
    }
    
    /**
     * Sets the class of the borrower
     * 
     * @param string $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }
    
    /**
     * @return string - the class of the borrower
     */
    public function getClass()
    {
        return $this->class;
    }
}
?>