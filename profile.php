<?php

session_start();

include("actions/connect.php");
include("actions/login_action.php");
include("actions/user_action.php");
include("actions/post_action.php");

//check the user is login
if(isset($_SESSION['blare_userid']) && is_numeric($_SESSION['blare_userid'])) 
{
    $id = $_SESSION['blare_userid'];
    $login = new Login();

    $result = $login->check_login($id);

    if($result)
    {

        //retrieve user data
        $user = new User();

        $user_data = $user->get_data($id);

        if(!$user_data)
        {
            header("Location: login.php");
            die;
        }
       
    }else
    {

        header("Location: login.php");
        die;
    }
    }else
    {
        header("Location: login.php");
        die;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $post = new Post();
        $id = $_SESSION['blare_userid'];
        $result = $post->create_post($id, $_POST);

        if($result == "")
        {
            header("Location: profile.php");
            die;
        }else{

            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "the following error occured:<br><br>";    
            echo $result;
            echo "</div>";
        }
    }

    //collect post
    $post = new Post();
    $id = $_SESSION["blare_userid"];


    $posts = $post->get_posts($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/profile.css" rel="stylesheet">
    <title>Profile | blare</title>
</head>
<body>

    <!--top bar-->
<div id="blue_bar">    
    <div style="width:800px;margin:auto;font-size:30px;">

        Fetter &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">

        <img src="images/profile.jpg" style="width:50px; float:right;">

        <a href="logout.php">
        <span style="font-size:11px;float:right;margin:10px;color:white;">Logout</span>
        </a>

    </div>
</div>

<!--cover-->

<div style="width:800px; margin:auto;min-height:400px;">

    <div style="background-color:white;text-align:center;color:#405d9b;">

        <img src="images/profile.jpg" style="width:100%;">
        <img id="profile_pic" src="images/profile.jpg">
        <br>    
                <div style="font-size:20px; color:black;"><?php echo $user_data['name'] ?></div>
        <br>

        <div id="menu_buttons">Timeline</div> 
        <div id="menu_buttons">About</div>
        <div id="menu_buttons">Friends</div>
        <div id="menu_buttons">Photos</div>
        <div id="menu_buttons">Settings</div>

    </div>
    
    <!--below cover area-->
    <div style="display:flex;">

    <!--friends area-->
        <div style="min-height:400px;flex:1;">

            <div id="friends_bar">

                Friends<br>

                <div id="friends">
                    <img id="friends_img"src="images/profile.jpg">
                    <br>
                    First user
                </div>

                <div id="friends">
                    <img id="friends_img"src="images/profile.jpg">
                    <br>
                    First user
                </div>

                <div id="friends">
                    <img id="friends_img"src="images/profile.jpg">
                    <br>
                    First user
                </div>

                <div id="friends">
                    <img id="friends_img"src="images/profile.jpg">
                    <br>
                    First user
                </div>

            </div>
        </div>

    <!--post area-->
        <div style="min-height: 400px;flex:2.5; padding:20px; padding-right:0px">

            <div style="border:solid thin #aaa; padding: 10px; background-color:white;">
                <form method="post">
                    <textarea name="post" placeholder="What's on your mind?"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </form>
            </div>

    <!--post-->
            <div id="post_bar">
            
                <?php
                
                    if($posts)
                    {
                        foreach ($posts as $ROW){

                            $user = new User();
                            $ROW_USER = $user->get_user($ROW['userid']);
                           
                           
                            include("post.php");
                        }
                    }
                 
                
                ?>

            </div>

        </div>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
