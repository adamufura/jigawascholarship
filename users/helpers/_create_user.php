<?php
if (isset($_POST['add_user'])) {
    $firstname = mysqli_real_escape_string($connection, sanitizeInput($_POST['firstname']));
    $lastname = mysqli_real_escape_string($connection, sanitizeInput($_POST['lastname']));
    $email = mysqli_real_escape_string($connection, sanitizeInput($_POST['email']));
    $phone = mysqli_real_escape_string($connection, sanitizeInput($_POST['phone']));
    $password = mysqli_real_escape_string($connection, sanitizeInput($_POST['password']));

    $messages = [];
    if (user_email_exist($email)) {
        $messages['msgErr'] = "user exist with same email";
    }

    if (empty($email) || empty($firstname) || empty($lastname) || empty($phone) || empty($password)) {
        $messages['msgErr'] = "Inputs cannot be empty";
        return;
    }

    if (count($messages) < 1) {
        $add_user_query = "INSERT INTO `users` (`email`, `firstname`, `lastname`, `phone`, `password`) VALUES (?, ?, ?, ?, ?)";

        $add_user_stmt = mysqli_prepare($connection, $add_user_query);

        $password = password_hash($password,  PASSWORD_DEFAULT, []);

        mysqli_stmt_bind_param(
            $add_user_stmt,
            "sssss",
            $email,
            $firstname,
            $lastname,
            $phone,
            $password
        );

        $exec_add_user = mysqli_stmt_execute($add_user_stmt);

        mysqli_stmt_close($add_user_stmt);

        header("Location: index.php");
    }
}

function user_email_exist($email)
{
    $userExist = false;

    $result = getUserByEmail($email);

    $db_userEmail = $result['email'];

    if ($db_userEmail == $email) {
        $userExist = true;
    } else {
        $userExist = false;
    }
    return $userExist;
}
