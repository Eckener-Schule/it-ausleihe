<?php
/**
 * Description of Borrower
 *
 * @author petersen
 * @author lehmann
 * @author jessen
 */
class Borrower {

public $borrowerId;
public $name; //First name of the borrower
public $surname; //Last name of the borrower
public $class; //Name of the class where the borrowed devices are used
public $teacher; //Name of the teacher which is teaching the class


public function __construct(){
    //determine next borrowerId
    $lastId = mysqli_query($connection, "SELECT COUNT(*) FROM Borrower");
    $nextId = $lastId + 1;
    $this->borrowerId = $nextId; //borrowerID determined based on last db-entry

    $this->name = $_POST['name']; //Parameter of html form?
    $this->surname = $_POST['surname']; //Parameter of html form?
    $this->class = $_POST['class'];//Parameter of html form?
    $this->teacher = $_POST['teacher']; ////Parameter of html form?
    }
    
// Add a new borrower
public function addBorrower($name, $surname, $class, $teacher) {
    
}

// delete a borrower
public function deleteBorrower($borrowerID) {
    
}

// Modify a borrower
public function modifyBorrower($name, $surname, $class, $teacher) {
    
}


}
?>