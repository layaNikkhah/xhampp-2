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
        $columns =  include("includeSQL.php");
        ?>

        <div class="container mt-5">
            <div class="row mt-5  justify-content-between">
                <div class="col-4 col-lg-6  h4 text-dark">
                    Computer Students Table
                </div>
                <div class="col-1 col-lg-2"> <button class="btn btn-sm btn-warning">MastersPage </button></div>
            </div>

            <!-- CreateTable -->
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
                            <th>EditInfo</th>
                        </tr>
                    </thead>
                    <?php

                    foreach ($columns as $key => $value) {
                        if ($value['major'] == 'computer') {
                    ?>
                    <tbody>
                        <tr class="">
                            <?php foreach ($value as $field => $fieldValue) { ?>
                            <td class="align-self-start"><?php echo $fieldValue ?></td>
                            <?php } ?>
                            <td class="d-flex justify-content-center"><button
                                    class="btn btn-sm btn-warning">Edit</button></td>
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