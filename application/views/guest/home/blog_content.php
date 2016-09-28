<div class="container width-90 blog-content">
    <div class="row">
        <div class="col s12 m12 l8 offset-l2 card padding-40">
            <h5 class="black-text center"><?php echo $blog_content->title; ?></h5>
            <br>
            <span class="blog-author"><b>Nguyễn Chuyên</b> - <?php echo $blog_content->timestamp; ?></span>
            <br><br>
            <p class="letter-text black-text font-16">
                <?php echo $blog_content->part1; ?>
            </p>
            <div class="center">
                <img class="img-blog" src="<?php echo base_url($blog_content->image1); ?>" alt="Unsplashed background img 3">
            </div>
            <p class="letter-text black-text font-16">
                <?php echo $blog_content->part2; ?>
            </p>
            <div class="center">
                <img class="img-blog" src="<?php echo base_url($blog_content->image2); ?>" alt="Unsplashed background img 3">
            </div>
            <p class="letter-text black-text font-16">
                <?php echo $blog_content->part3; ?>
            </p>


        </div>
    </div>
</div>