<?php
        include("sqlConnection.php");
        $columns  = query("SELECT * FROM student");

        return $columns;