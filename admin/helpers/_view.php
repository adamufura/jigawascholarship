<?php

if (isset($_POST['approve'])) {
    $email = $_GET['email'];
    $status = "Awarded";
    $payment = $_POST['payment'];
    $remark = $_POST['remark'];

    $start_date = date("Y-m-d");
    $end_date = date('Y-m-d', strtotime('+1 years'));

    $updateUserQuery = "UPDATE `beneficiaries` SET `status`=?,`payment`=?,`remark`=?, `start_date`=?,`expiry_date`=? WHERE `email`=?";

        $updateUser_stmt = mysqli_prepare($connection, $updateUserQuery);

        mysqli_stmt_bind_param($updateUser_stmt, "ssssss", $status, $payment, $remark, $start_date, $end_date, $email);

        if (mysqli_stmt_execute($updateUser_stmt)) {
            $Msg = "<span class='text-success'>Scholarship Awarded</span";
        }else{
            $Msg = "<span class='text-danger'>Can't Approve, try again</span>";
        }
}

if (isset($_POST['reject'])) {
    $email = $_GET['email'];
    $status = "Rejected";
    $payment = $_POST['payment'];
    $remark = $_POST['remark'];

    $updateUserQuery = "UPDATE `beneficiaries` SET `status`=?,`payment`=?,`remark`=? WHERE `email`=?";

        $updateUser_stmt = mysqli_prepare($connection, $updateUserQuery);

        mysqli_stmt_bind_param($updateUser_stmt, "ssss", $status, $payment, $remark, $email);

        if (mysqli_stmt_execute($updateUser_stmt)) {
            $Msg = "<span class='text-danger'>Scholarship Rejected</span";
        }else{
            $Msg = "<span class='text-danger'>Can't Approve, try again</span>";
        }
}