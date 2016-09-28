<div id="index-banner" class="parallax-container height-250 overlay-image-white">

    <div class="parallax "><img src="<?php echo base_url("upload/image/workspace.jpg");?>" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 353px, 0px);"></div>
</div>

<div class="container bg-white">
    <div class="section">

        <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h5 class="blue-text">Gương mặt gia sư tại trung tâm Gia sư Ms. chuyen</h5>
        </div>

<!--        <div class="row giasu-label">-->
<!--            <h5>Anh</h5>-->
<!--        </div>-->
        <div class="row">
        <?php
            foreach ($result as $item){?>
                <div class="col-xs-12 col-md-6">
                    <div class="mso-icon-nine">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">
                            <a href="<?php echo base_url("giasu/cv/".$item->id);?>">
                                <img src="<?php echo base_url($item->avatar);?>" class="img-circle mso-nine-img hi-icon">
                            </a>
                        </div>
                        <h5 class="font-20"><a href="<?php echo base_url("giasu/cv/".$item->id);?>"><?php echo $item->name?></a></h5>
                        <small class="font-14"><?php echo $item->university?></small>
                        <p ><i><?php  $value = $item->award;
                                if(strlen($value) > 250){
                                    $value = substr($value, 0, 250);
                                }
                                echo $value."..."?></i></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>