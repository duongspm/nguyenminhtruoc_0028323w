<?php
if (!defined('SOURCES')) die("Error");

/* Query allpage */
// need
$socialfooter = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('social-footer'), 'result', 7200);

$productnb = $cache->get("select name$lang, slugvi, slugen, id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('menu'), 'result', 7200);

$favicon = $cache->get("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon', 'photo_static'), 'fetch', 7200);

$policy = $cache->get("select name$lang, slugvi, slugen, id from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'), 'result', 7200);

$footer = $cache->get("select name$lang, content$lang from #_static where type = ? limit 0,1", array('footer'), 'fetch', 7200);

$logo = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo', 'photo_static'), 'fetch', 7200);

$productlist = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('menu'), 'result', 7200);

$hinhanh = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('hinhanh'), 'result', 7200);

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
        $data['datetime'] = strtotime($data['datetime'] );
        
        $data['date_created'] = time();
        $data['type'] = 'dangkydatban';

        if ($d->insert('newsletter', $data)) {
            $func->transfer("Đăng ký thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
        } else {
            $func->transfer("Đăng ký thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    } else {
        $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
    }
}