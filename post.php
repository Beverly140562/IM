
<div id="post">
    <div>
        <?php 
        
            $image = "images/default-profile.jpg";
            if($ROW_USER['userid'] == "Male")
            {
                $image = "images/default-profile.jpg";
            }
        ?>
        <img src="<?php echo $image ?>" style="width:75px;margin-right:4px;">
    </div>
    <div>
        <div style="font-weight:bold;color:#405d9b;"><?php echo $ROW_USER['name']; ?>
        </div>
        <?php echo $ROW['post'] ?>
        <br><br>

        <a href="">Like</a> . <a href="">Comment</a> . <span style="color:#999;">
            <?php echo $ROW['date'] ?>

        </span>

    </div>
</div>
                