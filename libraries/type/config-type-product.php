<?php
    /* Sản phẩm */
    $nametype = "menu";
    $config['product'][$nametype]['title_main'] = "Menu";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = true;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['copy_image'] = true;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("banchay" => "Bán chạy", "noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['desc'] = true;
    $config['product'][$nametype]['desc_cke'] = true;
    $config['product'][$nametype]['regular_price'] = true;
    $config['product'][$nametype]['schema'] = true;
    $config['product'][$nametype]['content'] = true;
    $config['product'][$nametype]['content_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 255;
    $config['product'][$nametype]['height'] = 252;
    $config['product'][$nametype]['thumb'] = '255x252x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    $config['product'][$nametype]['gallery'] = array(
        $nametype => array(
            "title_main_photo" => "Hình ảnh sản phẩm",
            "title_sub_photo" => "Hình ảnh",
            "check_photo" => array("hienthi" => "Hiển thị"),
            "number_photo" => 3,
            "images_photo" => true,
            "cart_photo" => true,
            "avatar_photo" => true,
            "name_photo" => true,
            "width_photo" => 255,
            "height_photo" => 252,
            "thumb_photo" => '255x252x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
        ),
    );

    // /* Sản phẩm (List) */
    $config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['product'][$nametype]['seo_list'] = true;

    /* Sản phẩm (Cat) */
    $config['product'][$nametype]['title_main_cat'] = "Sản phẩm cấp 2";
    $config['product'][$nametype]['check_cat'] = array("hienthi" => "Hiển thị");
    $config['product'][$nametype]['slug_cat'] = true;

?>