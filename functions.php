<?php

function check_login($connect)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION["user_id"];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($connect,$query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }

    //IF IS FALSE
    header("Location: login.php");
    die;
 
}

?>

