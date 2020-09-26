<?php
include_once './dbh.php';
session_start();
if (isset($_POST['d1SubmitBtn'])) {
    $sector = mysqli_real_escape_string($conn, $_POST['sector']);
    $stage = mysqli_real_escape_string($conn, $_POST['stage']);
    $support = mysqli_real_escape_string($conn, $_POST['support']);

    // User ID to be given here from Session
    $userID = $_SESSION['user_id'];
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
    $userID = $_SESSION['user_id'];
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
    $userID = $_SESSION['user_id'];
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
    $userID = $_SESSION['user_id'];
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

    $file_name = $_FILES['itreturns']['name'];
    $file_size =$_FILES['itreturns']['size'];
    $file_tmp =$_FILES['itreturns']['tmp_name'];
    $file_type=$_FILES['itreturns']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['itreturns']['name'])));
    move_uploaded_file($file_tmp,"../../uploads/itreturns/".$projectID.$file_name);
    $path_itreturns = "uploads/itreturns/".$projectID.$file_name;

    $sql = "INSERT INTO `innovation_d_4`(`user_id`, `project_id`, `name_product`, `industry_use`, `description_document`, `photos_product`, `itreturns`, `any_link`, `demo_link`, `demo_user_id`, `demo_password`) VALUES ('$userID','$projectID','$technologyName','$innovation','$path_document','$path_image','$path_itreturns','$any_link','$demo_link','$demo_user_id','$demo_password')";
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
    $awards = mysqli_real_escape_string($conn, $_POST['awards']);
    $businessStatus = mysqli_real_escape_string($conn, $_POST['businessStatus']);
    $primaryCustomers = mysqli_real_escape_string($conn, $_POST['primaryCustomers']);
    $commercialization = mysqli_real_escape_string($conn, $_POST['commercialization']);
    $describeSegement = mysqli_real_escape_string($conn, $_POST['describeSegement']);
    $uniqueSelling = mysqli_real_escape_string($conn, $_POST['uniqueSelling']);

    // User ID to be given here from Session
    $userID = $_SESSION['user_id'];
    $projectID = $_SESSION['projectID'];

    $sql = "INSERT INTO `innovation_d_5`(`user_id`, `project_id`, `third_party_validated`, `featured`, `presented`, `funds`, `awards`, `business_status`, `primary_customers`, `commercialization`, `prospective_users`, `competition`, `unique_selling`) VALUES ('$userID','$projectID','$rad','$rad2','$rad3','$rad4','$awards','$businessStatus','$primaryCustomers','$commercialization','$rad5','$describeSegement','$uniqueSelling')";
    $res = mysqli_query($conn, $sql);
    
    mysqli_query($conn, "INSERT INTO `allprojects`(`user_id`, `project_id`, `progress`, `completed`, `status`, `investors`, `mentors`) VALUES ('$userID','$projectID', 0, 0, 0, 0, 0)");

    header("Location: ../../dashboard-users/forms/thankyou.php?id=".$projectID);
    exit();
}


if (isset($_POST['allocateEvaluatorBtn'])) {
    $projectID = mysqli_real_escape_string($conn, $_POST['projectID']);
    $numberEvaluation = 0;
    $count = 0;
    foreach($_POST['checkbox'] as $checkbox){
        $sql = "SELECT * FROM project_assign WHERE project_id = '$projectID' AND evaluators_id = '$checkbox';";
        $result = mysqli_query($conn, $sql);
        $resultChk = mysqli_num_rows($result);
        if ($resultChk < 1) {
            $sql = "INSERT INTO project_assign (`project_id`, `evaluators_id`) VALUES ('$projectID', '$checkbox');";
            mysqli_query($conn, $sql);
            $sql = "SELECT * FROM evaluators WHERE email = '$checkbox';";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($result)) {
                $numberEvaluation = $row['assign'];
                $numberEvaluation = $numberEvaluation + 1;
            }
            $sql = "UPDATE evaluators SET `assign` = $numberEvaluation WHERE email = '$checkbox';";
            mysqli_query($conn, $sql);
        }
        $count = $count + 1;
    }
    $sql = "UPDATE allprojects SET progress = '$count' WHERE project_id = '$projectID';";
    mysqli_query($conn, $sql);
    // User ID to be given here from Session
    $userID = $_SESSION['user_id'];

    header("Location: ../../dashboard-admin/info.php?id=".$projectID."&s=g");
    exit();
}

if (isset($_POST['evaluatorApprovedBtn'])) {
    $projectID = mysqli_real_escape_string($conn, $_POST['projectID']);
    $evaluatorsEmailID = mysqli_real_escape_string($conn, $_POST['evaluatorsEmailID']);
    $status = 0;
    foreach($_POST['checkbox'] as $checkbox){
        $sql = "INSERT INTO evaluators_reccomendation (`project_id`, `evaluators_id`, `assign`) VALUES ('$projectID', '$evaluatorsEmailID', '$checkbox');";
        mysqli_query($conn, $sql);
    }

    $sql = "SELECT * FROM allprojects WHERE project_id = '$projectID';";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $status = (int)$row['status'];
        if ($status != 3 && $status != -1) {
            $status = $status + 1;
        } 
    }

    $sql = "UPDATE allprojects SET completed = 1, status = '$status' WHERE project_id = '$projectID';";
    mysqli_query($conn, $sql);
    
    header("Location: ../../dashboard-evaluator/home.php?id=".$projectID."&s=g");
    exit();
}

if (isset($_POST['evaluatorDisapprovedBtn'])) {
    $projectID = mysqli_real_escape_string($conn, $_POST['projectID']);
    $evaluatorsEmailID = mysqli_real_escape_string($conn, $_POST['evaluatorsEmailID']);

    $sql = "UPDATE allprojects SET completed = 1, status = -1 WHERE project_id = '$projectID';";
    mysqli_query($conn, $sql);
    
    header("Location: ../../dashboard-evaluator/home.php?id=".$projectID."&s=d");
    exit();
}


if (isset($_POST['allocateInvestorBtn'])) {
    $projectID = mysqli_real_escape_string($conn, $_POST['projectID']);
    $numberInvestors = 0;
    $count = 0;
    foreach($_POST['checkbox'] as $checkbox){
        $sql = "SELECT * FROM project_assign_investors WHERE project_id = '$projectID' AND investors_id = '$checkbox';";
        $result = mysqli_query($conn, $sql);
        $resultChk = mysqli_num_rows($result);
        if ($resultChk < 1) {
            $sql = "INSERT INTO project_assign_investors (`project_id`, `investors_id`) VALUES ('$projectID', '$checkbox');";
            mysqli_query($conn, $sql);
            $sql = "SELECT * FROM investor WHERE email = '$checkbox';";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($result)) {
                $numberInvestors = $row['assign'];
                $numberInvestors = $numberInvestors + 1;
            }
            $sql = "UPDATE investor SET `assign` = $numberInvestors WHERE email = '$checkbox';";
            mysqli_query($conn, $sql);
        }
        $count = $count + 1;
    }
    $sql = "UPDATE allprojects SET investors = '$count' WHERE project_id = '$projectID';";
    mysqli_query($conn, $sql);
    // User ID to be given here from Session
    $userID = $_SESSION['user_id'];

    header("Location: ../../dashboard-admin/investorinfo.php?id=".$projectID."&is=g");
    exit();
}


if (isset($_POST['allocateMentorBtn'])) {
    $projectID = mysqli_real_escape_string($conn, $_POST['projectID']);
    $numberMentors = 0;
    $count = 0;
    foreach($_POST['checkbox'] as $checkbox){
        $sql = "SELECT * FROM project_assign_mentors WHERE project_id = '$projectID' AND mentors_id = '$checkbox';";
        $result = mysqli_query($conn, $sql);
        $resultChk = mysqli_num_rows($result);
        if ($resultChk < 1) {
            $sql = "INSERT INTO project_assign_mentors (`project_id`, `mentors_id`) VALUES ('$projectID', '$checkbox');";
            mysqli_query($conn, $sql);
            $sql = "SELECT * FROM mentor WHERE email = '$checkbox';";
            $result = mysqli_query($conn, $sql);
            if ($row = mysqli_fetch_assoc($result)) {
                $numberMentors = $row['assign'];
                $numberMentors = $numberMentors + 1;
            }
            $sql = "UPDATE mentor SET `assign` = $numberMentors WHERE email = '$checkbox';";
            echo $sql;
            mysqli_query($conn, $sql);
        }
        $count = $count + 1;
    }
    $sql = "UPDATE allprojects SET mentors = '$count' WHERE project_id = '$projectID';";
    mysqli_query($conn, $sql);
    // User ID to be given here from Session
    $userID = $_SESSION['user_id'];

    header("Location: ../../dashboard-admin/investorinfo.php?id=".$projectID."&ms=g");
    exit();
}

if (isset($_POST['userFormSubmitBtn'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $t = mysqli_real_escape_string($conn, $_POST['t']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $institute = mysqli_real_escape_string($conn, $_POST['institute']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    if ($password == $confirmpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $userID = uniqid('USER');
        $userID = $userID.time();

        $sql = "SELECT `full_name` FROM users_2 WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        $resultChk =  mysqli_num_rows($result);
        if ($resultChk > 0) {
            header("Location: ../../forms/form1.php?e=ea&t=".$t);
            exit();
        } else {
            $sql = "INSERT INTO `users_2`(`user_id`, `full_name`, `email`, `phone`, `institute`, `type`, `password`) VALUES ('$userID','$fullname','$email','$phone','$institute','$type','$password')";
            mysqli_query($conn, $sql);
            header("Location: ../../forms/form1.php?e=ss&t=".$t);
            exit();    
        }
    } else {
        header("Location: ../../forms/form1.php?e=pc&t=".$t);
        exit();
    }

}

if (isset($_POST['submitLoginBtn'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM users_2 WHERE email = '$email';";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);

    if ($resultChk < 1) {
        header("Location: ../../login.php?e=nu");
        exit();
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            $userpwd = $row['password'];
            if (password_verify($password, $userpwd)) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['type'] = $row['type'];
                $_SESSION['institute'] = $row['institute'];
                header("Location: ../../dashboard-users/home.php");
                exit(); 
            } else {
                header("Location: ../../login.php?e=wp");
                exit(); 
            }
        }
    }


}   

if (isset($_POST['announcementSubmitBtn'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['announcement']);

    $sql = "INSERT INTO `announcement`(`title`, `description`) VALUES ('$title', '$description');";
    mysqli_query($conn, $sql);

    header("Location: ../../dashboard-admin/announcements.php?s=ss");
    exit();
}

if (isset($_GET['d'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM announcement WHERE id = '$id';";
    mysqli_query($conn, $sql);

    header("Location: ../../dashboard-admin/viewannouncement.php?s=ss");
    exit();
}