<?php

include 'setup.php';

function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = stripslashes($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);
    return $data;
}

function haveSpecialChar($data)
{
    return preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $data);
}

function getUserByEmail($email)
{
    global $connection;

    $userdata_q = "SELECT * FROM `users` WHERE `email` = ?";

    $user_data_stmt = mysqli_prepare($connection, $userdata_q);

    mysqli_stmt_bind_param($user_data_stmt, 's', $email);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_fetch_assoc(mysqli_stmt_get_result($user_data_stmt));

    mysqli_stmt_close($user_data_stmt);

    return $result;
}

function user_exist($email, $password)
{
    $userExist = false;

    $result = getUserByEmail($email);

    $db_userEmail = $result['email'];
    $is_password = password_verify($password, $result['password']);

    if ($db_userEmail == $email && $is_password) {
        $userExist = true;
    } else {
        $userExist = false;
    }
    return $userExist;
}

function loginUser($email, $password)
{
    if (user_exist($email, $password)) {
        $result = getUserByEmail($email);

        session_start();
        $_SESSION['s_userID'] = $result['id'];
        $_SESSION['s_user_id'] = $result['email'];
        header("Location: index.php");
    }
}

function isUserLoggedIn()
{
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['s_userID']) && isset($_SESSION['s_user_id'])) {
        return true;
    } else {
        return false;
    }
}


function logoutUser()
{
    if (!isset($_SESSION)) {
        session_start();
    }

    $s_id = $_SESSION['s_userID'];
    $s_email = $_SESSION['s_user_id'];

    $s_id = null;
    $s_email = null;

    unset($s_id);
    unset($s_email);

    session_destroy();
    header("Location: login.php");
}

function getUserEducationByEmail($email)
{
    global $connection;

    $userdata_q = "SELECT * FROM `education_history` WHERE `email` = ?";

    $user_data_stmt = mysqli_prepare($connection, $userdata_q);

    mysqli_stmt_bind_param($user_data_stmt, 's', $email);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_fetch_assoc(mysqli_stmt_get_result($user_data_stmt));

    mysqli_stmt_close($user_data_stmt);

    return $result;
}


function user_education_exist($email)
{
    $userExist = false;

    $result = getUserEducationByEmail($email);

    $db_userEmail = $result['email'];
    if ($db_userEmail == $email) {
        $userExist = true;
    } else {
        $userExist = false;
    }
    return $userExist;
}

function getUserInstitutionByEmail($email)
{
    global $connection;

    $userdata_q = "SELECT * FROM `institution` WHERE `email` = ?";

    $user_data_stmt = mysqli_prepare($connection, $userdata_q);

    mysqli_stmt_bind_param($user_data_stmt, 's', $email);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_fetch_assoc(mysqli_stmt_get_result($user_data_stmt));

    mysqli_stmt_close($user_data_stmt);

    return $result;
}

function user_institution_exist($email)
{
    $userExist = false;

    $result = getUserInstitutionByEmail($email);

    $db_userEmail = $result['email'];
    if ($db_userEmail == $email) {
        $userExist = true;
    } else {
        $userExist = false;
    }
    return $userExist;
}

function getUserDocumentsByEmail($email)
{
    global $connection;

    $userdata_q = "SELECT * FROM `documents` WHERE `email` = ?";

    $user_data_stmt = mysqli_prepare($connection, $userdata_q);

    mysqli_stmt_bind_param($user_data_stmt, 's', $email);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_fetch_assoc(mysqli_stmt_get_result($user_data_stmt));

    mysqli_stmt_close($user_data_stmt);

    return $result;
}

function user_documents_exist($email)
{
    $userExist = false;

    $result = getUserDocumentsByEmail($email);

    $db_userEmail = $result['email'];
    if ($db_userEmail == $email) {
        $userExist = true;
    } else {
        $userExist = false;
    }
    return $userExist;
}