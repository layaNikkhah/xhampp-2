<!DOCTYPe html>
<html>

</head>

<body>
    <!-- </?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_first";

    // Create connection
    $conn = new mysqli($servername, $username, "", $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO student(studentNumber,firstName, lastName, ,UnitNumber,major,Grade)
    VALUES ('2442','John', 'Doe', '12', 'mechacic','bs');";

    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?> -->

    <?php

    include("StudentPage.php");
    connect();
    // Create connection
    // $conn = new mysqli("localhost", "root", "", "db_first");

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } else {

    // $query = "INSERT INTO student(studentNumber,firstName, lastName,major,Grade)
    // VALUES (24499992,'John', 'Doe', 'mechacic','bs')";
    // // $sql .= "INSERT INTO student(studentNumber,firstName, lastName, ,UnitNumber,major,Grade)
    // // VALUES ('244342','John', 'Doe', '12', 'mechacic','ds');";

    // $sql = "UPDATE student SET lastName ='NIKI' WHERE firstName ='LAYA'";
    // // $query = "SELECT * from student WHERE firstName ='hora' ";
    // $conn->query($query);
    // $conn->query($sql);
    // }


    ?>



    <!-- <\?php
--     // $servername = "localhost";
--     // $username = "root";
--     // $password = "";
--     // $dbname = "db_first";

--     // // Create connection
--     // $conn = new mysqli($servername, $username, '', $dbname);

--     // // Check connection
--     // if ($conn->connect_error) {
--     //     die("Connection failed: " . $conn->connect_error);
--     // }

--     // // prepare and bind
--     // $stmt = $conn->prepare("INSERT INTO student(studentNumber,firstName,lastName,UnitNumber,major,Grade) VALUES (?,?,?,?, ? ,?)");
--     // $stmt->bind_param("sss", $studentNumber, $firstName, $lastName, $UnitNumber, $major, $Grade);

--     // // set parameters and execute
--     // $firstName = "John";
--     // $lastName = "Doe";
--     // $studentNumber = "957825";
--     // $Grade = 'bs';
--     // $UnitNumber = '12';
--     // $major = 'null';

--     // $stmt->execute();

--     // echo "New records created successfully";

--     // $stmt->close();
--     // $conn->close();
--    // ? -->

</body>

</html>