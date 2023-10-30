<?php

$get_users = "SELECT * FROM `beneficiaries` WHERE `status` = 'Awarded'";

$users_stmt = mysqli_prepare($connection, $get_users);

mysqli_stmt_execute($users_stmt);

$users = mysqli_stmt_get_result($users_stmt);


if (isset($_GET['terminate'])) {
    $delete = $_GET['terminate'];
    delete_user($delete);
    header("Location: beneficiaries.php");
}

function delete_user($delete_id)
{
    global $connection;

    $delete_q = "DELETE FROM `beneficiaries` WHERE `email` = ?";

    $delete_stmt = mysqli_prepare($connection, $delete_q);

    mysqli_stmt_bind_param($delete_stmt, 's', $delete_id);

    mysqli_stmt_execute($delete_stmt);

    mysqli_stmt_close($delete_stmt);

}