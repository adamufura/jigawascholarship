<?php
    if (!isset($_SESSION)) {
            session_start();
    }

    $email = $_SESSION['s_user_id'];

    
    if (isset($_POST['add_education'])) {
        $primary_education = mysqli_real_escape_string($connection, sanitizeInput($_POST['primary_education']));
        $primary_date = mysqli_real_escape_string($connection, sanitizeInput($_POST['primary_date']));

        $secondary_education = mysqli_real_escape_string($connection, sanitizeInput($_POST['secondary_education']));
        $secondary_date = mysqli_real_escape_string($connection, sanitizeInput($_POST['secondary_date']));

        $updateUserQuery = "INSERT INTO `education_history`(`email`, `primary_education`, `primary_date`, `secondary_education`, `secondary_date`) VALUES (?, ?, ?, ?, ?)";

        $updateUser_stmt = mysqli_prepare($connection, $updateUserQuery);

        mysqli_stmt_bind_param($updateUser_stmt, "sssss",
        $email, $primary_education, $primary_date, $secondary_education, $secondary_date);

        if (mysqli_stmt_execute($updateUser_stmt)) {
            $Msg = "<span class='text-success'>Education  Added Successfully</span";
        }else{
            $Msg = "<span class='text-danger'>Can't Add, try again </span>";
        }
    }

