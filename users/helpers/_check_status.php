<?php
    if (!isset($_SESSION)) {
            session_start();
    }

    $email = $_SESSION['s_user_id'];

        if (isset($_POST['apply'])) {

            $ref_id = md5(rand(1, 10));

        $applyQuery = "INSERT INTO `beneficiaries`(`email`, `ref_id`) 
        VALUES (?, ?)";

        $apply_stmt = mysqli_prepare($connection, $applyQuery);

        mysqli_stmt_bind_param($apply_stmt, "ss",
        $email, $ref_id);

        if (mysqli_stmt_execute($apply_stmt)) {
        }else{
        }
    }


function getUserAwardByEmail($email)
{
    global $connection;

    $userdata_q = "SELECT * FROM `beneficiaries` WHERE `email` = ?";

    $user_data_stmt = mysqli_prepare($connection, $userdata_q);

    mysqli_stmt_bind_param($user_data_stmt, 's', $email);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_fetch_assoc(mysqli_stmt_get_result($user_data_stmt));

    mysqli_stmt_close($user_data_stmt);

    return $result;
}


function user_award_exist($email)
{
    $userExist = false;

    $result = getUserAwardByEmail($email);

    $db_userEmail = $result['email'];
    if ($db_userEmail == $email) {
        $userExist = true;
    } else {
        $userExist = false;
    }
    return $userExist;
}

function isUserProfileComplete($email)
{
    $isComplete = [];

    if (empty(getUserByEmail($email)['sex']) ) {
        array_push($isComplete, "Your GENDER is not addded");
    }
    if (empty(getUserByEmail($email)['marital_status']) ) {
        array_push($isComplete, "Your MARITAL STATUS is not addded");
    }
    if (empty(getUserByEmail($email)['state']) ||  empty(getUserByEmail($email)['state'])) {
        array_push($isComplete, "Your STATE or LGA is not addded");
    }
    return $isComplete;
}

function isUserEducationComplete($email)
{
    $isComplete = [];

    if (empty(getUserByEmail($email)['sex']) ) {
        array_push($isComplete, "Your GENDER is not addded");
    }
    if (empty(getUserByEmail($email)['marital_status']) ) {
        array_push($isComplete, "Your MARITAL STATUS is not addded");
    }
    if (empty(getUserByEmail($email)['state']) ||  empty(getUserByEmail($email)['state'])) {
        array_push($isComplete, "Your STATE or LGA is not addded");
    }
    return $isComplete;
}