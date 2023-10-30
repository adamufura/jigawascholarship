<?php
    if (!isset($_SESSION)) {
            session_start();
    }

    $email = $_SESSION['s_user_id'];
    
    if (isset($_POST['add_documents'])) {
        if ($_FILES['indigene']['error'] < 1 && isset($_FILES['indigene']) && $_FILES['ssce']['error'] < 1 && isset($_FILES['ssce'])) {
        $upload_dir = '../documents/';

        $file_inputIndigene = 'indigene';
        $file_inputSSCE = 'ssce';

        $target_file_indigene = $upload_dir .  basename($_FILES["indigene"]["name"]);
        $target_file_ssce = $upload_dir .  basename($_FILES["ssce"]["name"]);

        $image_temp_indigene = $_FILES[$file_inputIndigene]['tmp_name'];
        $image_temp_ssce = $_FILES[$file_inputSSCE]['tmp_name'];

        $imageFileTypeIndigene = strtolower(pathinfo($target_file_indigene, PATHINFO_EXTENSION));
        $imageFileTypeSSCE = strtolower(pathinfo($target_file_ssce, PATHINFO_EXTENSION));

        $indigene_id = md5(rand(1, 1000));
        $ssce_id = md5(rand(1, 1000)); 

        // move the uploaded file to the upload_dir
        $new_file_indigene = $upload_dir . "indigene" . $indigene_id . '.' . $imageFileTypeIndigene;
        $new_file_ssce = $upload_dir . "ssce" . $ssce_id . '.' . $imageFileTypeSSCE;

        move_uploaded_file($image_temp_indigene, $new_file_indigene);
        move_uploaded_file($image_temp_ssce, $new_file_ssce);

        $addDocsQuery = "INSERT INTO `documents`(`email`, `indigene`, `ssce`) VALUES(?, ?, ?)";

        $addDocs_stmt = mysqli_prepare($connection, $addDocsQuery);

        mysqli_stmt_bind_param($addDocs_stmt, "sss", $email, $new_file_indigene, $new_file_ssce);

        if (mysqli_stmt_execute($addDocs_stmt)) {
        }else{
        }


        }

    }



