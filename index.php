<!-- Link Of Header File -->
<?php
include "include/header.php";
?>

<!-- Link Of Navbar -->
<?php
include "include/navbar.php";
?>

<!-- Content Section -->


<div class="row">

<!-- This Is The Main Content -->
    <div class="col 19 m9 s12">

        <?php
        $sql="select * from posts order by id DESC";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
        ?>

        <div class="col l3 m4 s6">
            <!-- This Is The First Blog Section -->
            <div class="card small">

                <div class="card-image">
                <img src="img1/<?php echo $row['feature_image'];?>" alt="">
                <span class="card-tittle black-text truncate"><?php echo $row['title']?></span>
                </div>

                <div class="card-content">
                <?php echo $row['content'];?>
                </div>

                <div class="card-action teal center">
                <a href="post.php?id=<?php echo $row['id'];?>" class="white-text">Read More</a>
                </div>

            </div>           
        </div>
           <?php
            }
        }
           ?>     
    </div>



<!-- This Is The Side-Bar Content -->
    <div class="col l3 m3 sm12">

    <?php
    include "include/sidebar.php";
    ?>    

    </div>
</div>

<div style="margin-top:250px"></div>

<!-- Link Of Footer -->
<?php
include "include/footer.php";
?>
