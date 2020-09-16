<?php
include_once './dbh.php';
session_start();
if (isset($_POST['d1SubmitBtn'])) {
    $sector = mysqli_real_escape_string($conn, $_POST['sector']);
    $stage = mysqli_real_escape_string($conn, $_POST['stage']);
    $support = mysqli_real_escape_string($conn, $_POST['support']);

    // User ID to be given here from Session
    $userID = '12345678';
    $projectID = uniqid('PROJECT');

    $projectID = $projectID.time();
    $_SESSION['projectID'] = $projectID;

    $sql = "INSERT INTO `innovation_d_1`(`user_id`, `project_id`, `sector`, `stage`, `support_required`) VALUES ('$userID','$projectID','$sector','$stage','$support')";
    $res = mysqli_query($conn, $sql);
    header("Location: ../../dashboard-users/forms/d-form2.php");
    exit();
}


if (isset($_POST['d2SubmitBtn'])) {
    $problemInnovation = mysqli_real_escape_string($conn, $_POST['problemInnovation']);
    $solutionInnovation = mysqli_real_escape_string($conn, $_POST['solutionInnovation']);

    // User ID to be given here from Session
    $userID = '12345678';
    $projectID = $_SESSION['projectID'];

    $sql = "INSERT INTO `innovation_d_2`(`user_id`, `project_id`, `innovation_address`, `solution`) VALUES ('$userID','$projectID','$problemInnovation','$solutionInnovation')";
    $res = mysqli_query($conn, $sql);
    header("Location: ../../dashboard-users/forms/d-form3.php");
    exit();
}

if (isset($_POST['d3SubmitBtn'])) {
    $nameInventor = mysqli_real_escape_string($conn, $_POST['nameInventor']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
    $institute = mysqli_real_escape_string($conn, $_POST['institute']);
    $contact_full_name = mysqli_real_escape_string($conn, $_POST['contact_full_name']);
    $contact_email = mysqli_real_escape_string($conn, $_POST['contact_email']);
    $contact_phoneno = mysqli_real_escape_string($conn, $_POST['contact_phoneno']);

    // User ID to be given here from Session
    $userID = '12345678';
    $projectID = $_SESSION['projectID'];

    $sql = "INSERT INTO `innovation_d_3`(`user_id`, `project_id`, `nameInventor`, `gender`, `category`, `email`, `phoneno`, `institute`, `contact_full_name`, `contact_email`, `contact_phoneno`) VALUES ('$userID','$projectID','$nameInventor','$gender','$category','$email','$phoneno','$institute','$contact_full_name','$contact_email','$contact_phoneno')";
    $res = mysqli_query($conn, $sql);
    header("Location: ../../dashboard-users/forms/d-form4.php");
    exit();
}

if (isset($_POST['d4SubmitBtn'])) {
    $technologyName = mysqli_real_escape_string($conn, $_POST['technologyName']);
    $innovation = mysqli_real_escape_string($conn, $_POST['innovation']);
    $any_link = mysqli_real_escape_string($conn, $_POST['any_link']);
    $demo_link = mysqli_real_escape_string($conn, $_POST['demo_link']);
    $demo_user_id = mysqli_real_escape_string($conn, $_POST['demo_user_id']);
    $demo_password = mysqli_real_escape_string($conn, $_POST['demo_password']);
    // User ID to be given here from Session
    $userID = '12345678';
    $projectID = $_SESSION['projectID'];

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    move_uploaded_file($file_tmp,"../../uploads/images/".$projectID.$file_name);
    $path_image = "uploads/images/".$projectID.$file_name;

    $file_name = $_FILES['document']['name'];
    $file_size =$_FILES['document']['size'];
    $file_tmp =$_FILES['document']['tmp_name'];
    $file_type=$_FILES['document']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['document']['name'])));
    move_uploaded_file($file_tmp,"../../uploads/documents/".$projectID.$file_name);
    $path_document = "uploads/documents/".$projectID.$file_name;

    $sql = "INSERT INTO `innovation_d_4`(`user_id`, `project_id`, `name_product`, `industry_use`, `description_document`, `photos_product`, `any_link`, `demo_link`, `demo_user_id`, `demo_password`) VALUES ('$userID','$projectID','$technologyName','$innovation','$path_document','$path_image','$any_link','$demo_link','$demo_user_id','$demo_password')";
    $res = mysqli_query($conn, $sql);
    header("Location: ../../dashboard-users/forms/d-form5.php");
    exit();
}

if (isset($_POST['d5SubmitBtn'])) {
    $rad = mysqli_real_escape_string($conn, $_POST['rad']);
    $rad2 = mysqli_real_escape_string($conn, $_POST['rad2']);
    $rad3 = mysqli_real_escape_string($conn, $_POST['rad3']);
    $rad4 = mysqli_real_escape_string($conn, $_POST['rad4']);
    $rad5 = mysqli_real_escape_string($conn, $_POST['rad5']);
    $businessStatus = mysqli_real_escape_string($conn, $_POST['businessStatus']);
    $primaryCustomers = mysqli_real_escape_string($conn, $_POST['primaryCustomers']);
    $commercialization = mysqli_real_escape_string($conn, $_POST['commercialization']);
    $describeSegement = mysqli_real_escape_string($conn, $_POST['describeSegement']);
    $uniqueSelling = mysqli_real_escape_string($conn, $_POST['uniqueSelling']);

    // User ID to be given here from Session
    $userID = '12345678';
    $projectID = $_SESSION['projectID'];

    $sql = "INSERT INTO `innovation_d_5`(`user_id`, `project_id`, `third_party_validated`, `featured`, `presented`, `funds`, `business_status`, `primary_customers`, `commercialization`, `prospective_users`, `competition`, `unique_selling`) VALUES ('$userID','$projectID','$rad','$rad2','$rad3','$rad4','$businessStatus','$primaryCustomers','$commercialization','$rad5','$describeSegement','$uniqueSelling')";
    $res = mysqli_query($conn, $sql);
    
    mysqli_query($conn, "INSERT INTO `allprojects`(`user_id`, `project_id`, `progress`) VALUES ('$userID','$projectID',1)");

    header("Location: ../../dashboard-users/forms/thankyou.php?id=".$projectID);
    exit();
}