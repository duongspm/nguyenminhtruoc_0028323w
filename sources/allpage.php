<?php
if (!defined('SOURCES')) die("Error");

/* Query allpage */
// need
$socialfooter = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social-footer'), 'result', 7200);

$socialheader = $cache->get("select photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social-header'), 'result', 7200);

$productnb = $cache->get("select name$lang, slugvi, slugen, id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('san-pham'), 'result', 7200);

$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);

$slogan = $cache->get("select name$lang from #_static where type = ? limit 0,1", array('slogan'), 'fetch', 7200);

$policy = $cache->get("select name$lang, slugvi, slugen, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'), 'result', 7200);

$footer = $cache->get("select name$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);

$logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo', 'photo_static'), 'fetch', 7200);

$bannerheader = $cache->get("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner-header', 'photo_static'), 'fetch', 7200);

$productlist = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'), 'result', 7200);

$congtrinh = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('cong-trinh'), 'result', 7200);

$cskh = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('cham-soc-khach-hang'), 'result', 7200);

$tknh = $cache->get("select name$lang, desc$lang from #_static where type = ? limit 0,1", array('tai-khoang-ngan-hang'), 'fetch', 7200);

// need

/* Get statistic */
$counter = $statistic->getCounter();
$online = $statistic->getOnline();

/* Newsletter */
if (!empty($_POST['submit-newsletter'])) {
    $responseCaptcha = $_POST['recaptcha_response_newsletter'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
    $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
    $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
    $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

    /* Valid data */
    // if (empty($dataNewsletter['email'])) {
    //     $flash->set('error', 'Email không được trống');
    // }

    if (!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email'])) {
        $flash->set('error', 'Email không hợp lệ');
    }

    $error = $flash->get('error');

    if (!empty($error)) {
        $func->transfer($error, $configBase, false);
    }

    /* Save data */
    if (($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true) {
        $data = array();
        foreach ($dataNewsletter as $column => $value) {
            $data[$column] = htmlspecialchars($value);
        }
        $data['date_created'] = time();
        $data['type'] = 'dangkynhantin';

        if ($d->insert('newsletter', $data)) {
            $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
        } else {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    } else {
        $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
    }
}