<?php

$get_users = "SELECT * FROM `beneficiaries`";

$users_stmt = mysqli_prepare($connection, $get_users);

mysqli_stmt_execute($users_stmt);

$users = mysqli_stmt_get_result($users_stmt);