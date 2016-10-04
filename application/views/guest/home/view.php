<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <div class="row center">
                <h5 class="header col s12 light primary-font">Hơn cả một gia sư</h5>
            </div>
            <div class="row center">
                <a href="<?php echo base_url("gioithieu");?>" id="download-button"
                   class="btn-large waves-effect waves-light blue">Giới thiệu</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url("upload/image/01.jpg");?>" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 353px, 0px);"></div>
</div>


<div class="container width-90">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <h5 class="center blue-text text-darken-4 font-24">Gia sư nổi bật</h5>
            <?php foreach ($data as $item){;?>
                <div class="col s12 m4">
                    <div class="icon-block center">
                        <a href="<?php echo base_url("giasu/cv/".$item->id);?>">
                            <img src="<?php echo base_url($item->avatar);?>" class="img-circle mso-nine-img hi-icon">
                        </a>

                        <h5 ><a href="<?php echo base_url("giasu/cv/".$item->id);?>"><?php echo $item->name;?></a></h5>

                        <p class="light font-16">
                            <?php  $value = $item->award;
                            if(strlen($value) > 250){
                                $value = substr($value, 0, 250);
                            }
                            echo $value."..."?>
                            <a href="<?php echo base_url("giasu/cv/".$item->id);?>"><b>xem thêm</b></a>
                        </p>
                    </div>
                </div>
            <?php } ;?>

        </div>

        <div class="row center">
            <a href="<?php echo base_url("giasu");?>" id="download-button"
               class="btn-large waves-effect waves-light blue">Chọn gia sư ngay</a>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper overlay-image">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light font-28">
                    “Chúng tôi luôn bên cạnh con bạn như người đồng hành”</h5>
            </div>
        </div>
    </div>
    <div class="parallax "><img src="<?php echo base_url("upload/image/02.jpg");?>" alt="Unsplashed background img 2" style="display: block; transform: translate3d(-50%, 397px, 0px);"></div>
</div>


<div class="container">
    <div class="section">


        <div class="col s12 center">
            <h3><i class="mdi-content-send brown-text"></i></h3>
            <h5 class="blue-text blue-text text-darken-4">Phản hồi của phụ huynh</h5>

        </div>

        <div class="row">
            <div class="col-xs-12 ">
                <div class="mso-icon-nine">
                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left"><img src="<?php echo base_url("upload/avatars/a3.png");?>" class="img-circle mso-nine-img hi-icon"></div>
                    <h6 class="feedback-title">Chị Trần Oanh</h6>
                    <small class="feedback-description">Có con gái học lớp 3 Vinschool</small>
                    <p class="feedback-content"><i>"Các bạn gia sư tại trung tâm đã truyền được cảm hứng trong học tập giúp con tôi thích thú hơn trong các giờ học, việc lên kế hoạch cụ thể trong phương pháp học cũng mang lại hiệu quả tốt hơn cho bé."</i></p>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="mso-icon-nine">
                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left"><img src="<?php echo base_url("upload/avatars/a1.png");?>" alt="Client" class="img-circle mso-nine-img hi-icon"></div>

                    <h6 class="feedback-title">Chị Nguyễn Hồng Lê</h6>
                    <small class="feedback-description"> Có con học lớp 8 trường
                        Nguyễn Tất Thành</small>
                    <p class="feedback-content">
                        <i>"Tôi rất hài lòng, tôi luôn ủng hộ và tin tưởng dịch vụ của gia sư Ms.

                            Chuyen, hiện tại tôi đã đăng kí với trung tâm để được trung tâm chăm sóc suốt quá trình con

                            tôi còn đi học."</i>
                    </p>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="mso-icon-nine">
                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">
                        <img src="<?php echo base_url("upload/avatars/a2.png");?>" alt="Client" class="img-circle mso-nine-img hi-icon">
                    </div>

                    <h6 class="feedback-title">Chị Hoàng Bích Dung</h6>
                    <small class="feedback-description">Có con trai lớn học lớp 8
                        trường Ngọc Thụy</small>
                    <p class="feedback-content"><i>"Tôi thấy con tiến bộ lên nhiều kể từ khi gặp chị gia sư, con yêu thích môn

                            Toán hơn(môn mà trước đây con thường xuyên sợ hãi mỗi khi phải học) Con vui vẻ hơn,

                            chăm học hơn, dễ chia sẻ với chị gia sư để tôi có thể thêm hiểu về con, cũng như thông qua

                            người thứ 3 tôi biết con nghĩ gì muốn gì cũng như uốn nắn con."</i></p>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="blog-container full-width white-text blue">
    <div class="section">
        <h5 class="center white-text">Cảm nhận của học sinh</h5>
        <div class="row">
            <div class="col s12 m4 l4 center quot-item">
                <img class="quot-icon" src="<?php echo base_url("upload/image/quotations.png");?>">
                <p class="font-20">“Tất cả gia sư của em đều do Ms. Chuyen lựa chọn-và họ đều là người giúp em
                    tiến bộ”</p>
                <strong class="center font-18">Lý Quang Mạnh</strong>
            </div>

            <div class="col s12 m4 l4 center quot-item">
                <img class="quot-icon" src="<?php echo base_url("upload/image/quotations.png");?>">
                <p class="font-20"> “Người làm cho em hứng thú với bài học chỉ có duy nhất gia sư Ms. Chuyen là làm được”</p>
                <strong class="center font-18">Vũ Thị Hương Giang</strong>
            </div>

            <div class="col s12 m4 l4 center quot-item">
                <img class="quot-icon" src="<?php echo base_url("upload/image/quotations.png");?>">
                <p class="font-20"> "Em cảm ơn chị
                    nhiều lắm, em tin với nhiệt
                    huyết, đam mê muốn dạy
                    và truyền tình yêu vào việc
                    dạy của chị, chị sẽ thành
                    công ạ”</p>
                <strong class="center font-18">Nguyễn Thị Linh Chi</strong>
            </div>
        </div>

    </div>
</div>


<div>
    <div class="section no-pad-bot center">
        <div class="container blog-container">
            <h5 class="blue-text text-darken-4">Blog</h5>
            <div class="row">
                <?php foreach ($blog as $item){;?>
                    <div class="col s12 m6 l3 blog-item">
                        <a href="<?php echo base_url("blog/content/".$item->id);?>">
                            <img class="blog-avatar" src="<?php echo base_url($item->image1);?>">
                        </a>
                        <a class="blog-title" href="<?php echo base_url("blog/content/".$item->id);?>"><p class="font-18"><b><?php echo $item->title;?></b></p></a>
                    </div>
                <?php };?>

            </div>
            <div class="row center">
                <a href="<?php echo base_url("blog");?>" id="download-button"
                   class="btn waves-effect waves-light blue">Xem tất cả</a>
            </div>
        </div>
    </div>
</div>