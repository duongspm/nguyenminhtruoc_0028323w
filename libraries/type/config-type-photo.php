<?php
    /* Banner Header ??*/
    $nametype = "banner-header";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner Header";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 480;
    $config['photo']['photo_static'][$nametype]['height'] = 80;
    $config['photo']['photo_static'][$nametype]['thumb'] = '480x80x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    /* Banner */
    $nametype = "banner";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 1366;
    $config['photo']['photo_static'][$nametype]['height'] = 734;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1366x734x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] =  130;
    $config['photo']['photo_static'][$nametype]['height'] = 102;
    $config['photo']['photo_static'][$nametype]['thumb'] = '130x102x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 70;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '70x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Watermark sản phẩm*/
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 70;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '70x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 536;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '1366x536x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social header */
    $nametype = "social-header";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social Header";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 28;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 28;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '28x28x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social footer */
    $nametype = "social-footer";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social footer";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 42;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 42;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '42x42x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* imgabout */
    // $nametype = "image-about";
    // $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Hình ảnh giới thiệu";
    // $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    // $config['photo']['man_photo'][$nametype]['number_photo'] = 3;
    // $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    // $config['photo']['man_photo'][$nametype]['width_photo'] = 340;
    // $config['photo']['man_photo'][$nametype]['height_photo'] = 300;
    // $config['photo']['man_photo'][$nametype]['thumb_photo'] = '340x300x1';
    // $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';
?>