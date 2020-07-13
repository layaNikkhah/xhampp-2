<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container-floid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="main.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="MastersPage.html">MastersPage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="StudentsPage.html">StudentsPage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="OfferdCourses.html">OfferdCourses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SelectUnit.html">SelectUnit</a>
            </li>
        </ul>
    </div>
</nav>



<?php
include("sqlConnection.php");
$conn = OpenCon();

class Student
{
  // Properties
  public $studentId;
  public $name;
  public $lastName;
  public $fieldId;
  public $passedUnit;
  public $grade;


  //constructor
  function __construct($name, $lastName, $studentId, $fieldId, $passedUnit, $grade)
  {
    $this->set_studentId($studentId);
    $this->set_name($name);
    $this->set_lastName($lastName);
    $this->set_fieldId($fieldId);
    $this->set_passedUnit($passedUnit);
    $this->set_grade($grade);
  }

  // Methods

  //if one condition is not aaceptable are we can distruct this object ?
  function set_studentId($studentId)
  {
    $this->studentId = $studentId;
  }
  function get_studentId()
  {
    return $this->studentId;
  }
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
  function set_lastName($lastName)
  {
    $this->lastName = $lastName;
  }
  function get_lastName()
  {
    return $this->lastName;
  }
  function set_fieldId($fieldId)
  {

    $this->fieldId = $fieldId;
  }
  function get_fieldId()
  {
    return $this->fieldId;
  }
  function set_passedUnit($passedUnit)
  {
    $this->passedUnit = $passedUnit;
  }
  function get_passedUnit()
  {
    return $this->passedUnit;
  }
  function set_grade($grade)
  {
    $this->grade = $grade;
  }
  function get_grade()
  {
    return $this->grade;
  }

  function insert_student()
  {
    global $conn;
    $sql = " INSERT INTO Student (name, lastName, studentID ,fieldId ,passedUnit ,grade)
        VALUES ('$this->name' ,'$this->lastName' ,'$this->studentId' ,
            '$this->fieldId' ,'$this->passedUnit' ,'$this->grade')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  function select_all_student()
  {
    global $conn;
    $sql = "SELECT * FROM Student "; /* , Field WHERE  Student.fieldId = Field.fieldId */
    if ($result = $conn->query($sql)) {
      echo '<form   method = "POST" action = "hey.php">';
      if (($result->num_rows) > 0) {
        while ($row = $result->fetch_assoc()) {
          $myrow[] = $row;
        }
        return $myrow;
      } else {
        echo "0 results";
      }
    }
  }

  function update_student($student_save)
  {
    global $conn;
    if (isset($_POST['student_save'])) {
      $sql = "UPDATE student 
            SET studentId='" . $_POST['s_id_eddited'] . "'
            , name ='" . $_POST['s_name_ediited'] . "'
            , lastName ='" . $_POST['s_lastName_ediited'] . "'
            , fieldId ='" . $_POST['s_fieldId_ediited'] . "'
            , passedUnit ='" . $_POST['s_passedUnit_ediited'] . "'
            , grade ='" . $_POST['s_grade_ediited'] . "' 
            WHERE studentId ='" . $_POST['past_studentId'] . "'";
      if ($conn->query($sql) === TRUE) {
        echo 'نام به روز شد.';
      }
    }
  }
}