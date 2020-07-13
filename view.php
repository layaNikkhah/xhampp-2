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

        <div class=" bg-primary w-75 mt-5 ">
            <?php
      foreach ($result as $key => $value) { ?>
            <!-- <div class="bg-primary" style="height: 300px;width:800px"> -->
            <?php if ($value['major'] == 'computer') {
        ?>


            <!-- rows -->
            <div class="col-12 d-flex w-75 bg-dark">
                <!-- colomns -->
                <div class="col-10 d-flex bg-dark" style="border: yellow solid 1px;border-radius:4px">
                    <?php
              foreach ($value as $in => $ls) {
              ?>
                    <div class="col-2 flex-fill" style="height:35px ;text-align:center;padding-top:3px">
                        <?php echo $ls; ?>
                    </div>
                    <?php
              }
              ?>
                </div>
                <!-- button -->
                <div class="btn-sm btn-warning flex-fill ml-3 w-25">Edit</div>

            </div>

            <?php
        } ?>
            <!-- </div> -->
            <?php
      } ?>


        </div>


    </div>
</body>

</html>