<div class="container bg-white">
    <div class="section ">

            <?php foreach ($blogs as $item){;?>
        <div class="row ">

                <div class="col s12 m5 l4 center">
                    <a href="<?php echo base_url("blog/content/".$item->id);?>">
                        <img class="blog-image " src="<?php echo base_url($item->image1);?>"/>
                    </a>

                </div>

                <div class="col s12 m7 l8 blog-content">
                    <h3 class="blog-title"><a href="<?php echo base_url("blog/content/".$item->id);?>">
                            <?php echo $item->title;?></a></h3>
                    <span class="blog-author"><b>Nguyen Chuyen</b> - <?php echo $item->timestamp;?></span>
                    <p class="blog-description">
                        <?php
                        $description = $item->part1;
                        if(strlen($item->part1) > 180){
                            $description = substr($item->part1,0, 180);
                        }
                        echo $description;?></p>
                    <div class="read-more">
                        <a class="white-text" href="<?php echo base_url("blog/content/".$item->id);?>">xem thêm</a>
                    </div>
                </div>
        </div>
            <?php };?>


    </div>
</div>