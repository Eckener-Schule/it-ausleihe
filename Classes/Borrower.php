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
    public static function load($id): ActiveRecord
    {
        $query = "SELECT * FROM borrower WHERE borrowerId = ?;";
        $params = array($id);
        
        $row = $this->database.executeQuery($query, $params);
        
        return $this->convert($row);
    }
    
    private function convert($row)
    {
        $instance = new Borrower();
        $instance->borrowerId = $row['borrowerId'];
        $instance->setName($row['name']);
        $instance->setSurname($row['surname']);
        $instance->setClass($row['class']);
        
        return $instance;
    }

    public function save()
    {
        $borrower = Borrower::load($this->borrowerId);
        
        if($borrower === null) {
            $this->insert();
        }
        else {
            $this->update();
        }
    }

    protected function insert()
    {
        $query = "INSERT INTO borrower (name, surname, class) VALUES (?, ?, ?);";
        $params = array($this->name, $this->surname, $this->class);
        
        $this->database.executeQuery($query, $params);
    }

    protected function update()
    {
        $query = "UPDATE borrower SET name = ?, surname = ?, class = ?;";
        $params = array($this->name, $this->surname, $this->class);
        
        $this->database.executeQuery($query, $params);
    }

    public function delete()
    {
        $query = "DELETE FROM borrower WHERE borrowerID = ?;";
        $params = array($this->borrowerId);
        
        $this->database.executeQuery($query, $params);
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