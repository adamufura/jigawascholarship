<?php
    if (!isset($_SESSION)) {
            session_start();
    }

    $email = $_SESSION['s_user_id'];

    
    if (isset($_POST['add_institution'])) {
        $school = mysqli_real_escape_string($connection, sanitizeInput($_POST['school']));
        $department = mysqli_real_escape_string($connection, sanitizeInput($_POST['department']));

        $updateUserQuery = "INSERT INTO `institution`(`email`, `school`, `department`) VALUES (?, ?, ?)";

        $updateUser_stmt = mysqli_prepare($connection, $updateUserQuery);

        mysqli_stmt_bind_param($updateUser_stmt, "sss",
        $email, $school, $department);

        if (mysqli_stmt_execute($updateUser_stmt)) {
            $Msg = "<span class='text-success'>Institution  Added Successfully</span";
        }else{
            $Msg = "<span class='text-danger'>Can't Add, try again </span>";
        }
    }




