<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/timeline.css" rel="stylesheet">
    <title>Profile | blare</title>
</head>
<body>

    <!--top bar-->
<div id="blue_bar">    
    <div style="width:800px;margin:auto;font-size:30px;">

        Fetter &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
        <img src="images/profile.jpg" style="width:50px; float:right;">

    </div>
</div>

<!--cover-->

<div style="width:800px; margin:auto;min-height:400px;">

    
    <!--below cover area-->
    <div style="display:flex;">

    <!--friends area-->
        <div style="min-height:400px;flex:1;">

            <div id="friends_bar">

                <img src="images/profile.jpg" id="profile_pic"><br>
                Beverly Salde
            </div>
        </div>

    <!--post area-->
        <div style="min-height: 400px;flex:2.5; padding:20px; padding-right:0px">

            <div style="border:solid thin #aaa; padding: 10px; background-color:white;">
                
                <textarea placeholder="What's on your mind?"></textarea>
                <input id="post_button" type="submit" value="Post">
                <br>
            </div>

    <!--post-->
            <div id="post_bar">
            <!--post 1-->
                <div id="post">
                    <div>
                        <img src="images/profile.jpg" style="width:75px;margin-right:4px;">
                    </div>
                    <div>
                        <div style="font-weight:bold;color:#405d9b;">Firstg</div>
                            dddddddddddddddddddd
                        <br><br>

                        <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">April 23 2020</span>

                    </div>
                </div>

                <!--post 2-->
                <div id="post">
                    <div>
                        <img src="images/profile.jpg" style="width:75px;margin-right:4px;">
                    </div>
                    <div>
                        <div style="font-weight:bold;color:#405d9b;">Firstg</div>
                            dddddddddddddddddddd
                        <br><br>

                        <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">April 23 2020</span>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
