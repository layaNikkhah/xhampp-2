<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <style>
    body {
        /* background-color: rgb(113, 114, 114); */
        font-size: 17px;
    }
    </style>
</head>
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
                <a class="nav-link" href="StudentsPage.php">StudentsPage</a>
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

<body class="bg-secondary text-warning" style="font-family: sans-serif;">
    <div class="container-fluid d-flex justify-content-center  mt-5">


        <?php
        include("sqlConnection.php");
        $result  = query("SELECT * FROM student");
        ?>

        <div class="container mt-5">
            <div class="row mt-5  justify-content-between">
                <div class="col-4 col-lg-6  h4 text-dark">
                    Computer Students Table
                </div>
                <div class="col-1 col-lg-2"> <button class="btn btn-sm btn-warning">MastersPage </button></div>
            </div>

            <div class="row">
                <table class="table table-bordered table-dark table-responsive-md">
                    <thead class="thead-light text-warning">
                        <tr class="">
                            <th>studentID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>FieldID</th>
                            <th>passedUnit</th>
                            <th>Grade</th>
                        </tr>
                    </thead>

                    <!-- <div class="bg-primary" style="height: 300px;width:800px"> -->
                    <!-- </?php if ($value['major'] == 'computer')-->
                    <!-- foreach($value['major'] as $major){  -->
                    <?php

                    foreach ($result as $key => $value) {

                        if ($value['major'] == 'computer') {
                            // for($i=0;$i<3;$i++){
                    ?>


                    <tbody>
                        <tr class="">
                            <?php foreach ($value as $in => $ls) { ?>
                            <td class=""><?php echo $ls ?></td>
                            <?php } ?>
                        </tr>
                    </tbody>

            </div>
            <?php
                        }
                    }
    ?>

            </table>
        </div>



    </div>




</body>

</html>