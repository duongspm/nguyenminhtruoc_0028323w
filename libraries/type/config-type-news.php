<?php
    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 380;
    $config['news'][$nametype]['height'] = 280;
    $config['news'][$nametype]['thumb'] = '380x280x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    /* Chính sách có thì giữ, không thì xóa*/
    $nametype = "chinh-sach";
    $config['news'][$nametype]['title_main'] = "Chính sách";
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['schema'] = true;

    /* Tiêu chí */
    $nametype = "tieu-chi";
    $config['news'][$nametype]['title_main'] = "Tiêu chí";
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['width'] = 55;
    $config['news'][$nametype]['height'] = 51;
    $config['news'][$nametype]['thumb'] = '55x51x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Công trình */
    $nametype = "cong-trinh";
    $config['news'][$nametype]['title_main'] = "Công trình";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 380;
    $config['news'][$nametype]['height'] = 280;
    $config['news'][$nametype]['thumb'] = '380x280x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Chăm sóc khách hàng */
    $nametype = "cham-soc-khach-hang";
    $config['news'][$nametype]['title_main'] = "Chăm sóc khách hàng";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 380;
    $config['news'][$nametype]['height'] = 280;
    $config['news'][$nametype]['thumb'] = '380x280x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    /* -------------- */

    /* Quản lý mục (Không cấp) */
    if (isset($config['news'])) {
        foreach ($config['news'] as $key => $value) {
            if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>