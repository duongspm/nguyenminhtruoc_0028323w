<?php  
	if(!defined('SOURCES')) die("Error");

    //need
    $slider = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);

    $tieuchi = $cache->get("select name$lang, desc$lang, id, photo, slugvi, slugen from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tieu-chi'), 'result', 7200);
    
    $about = $cache->get("select name$lang,desc$lang,content$lang,date_created, photo from #_static where type = ? and find_in_set('hienthi',status) order by id desc", array('gioi-thieu'), 'result', 7200);
    
    $bestseller = $cache->get("select name$lang,desc$lang from #_static where type = ? limit 0,1", array('bestseller'), 'fetch', 7200);

    $productnb = $cache->get("select name$lang,photo,desc$lang,slugvi,slugen,regular_price, id from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('menu'), 'result', 7200);
    
    $productlist = $cache->get("select name$lang, slugvi, slugen,photo, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('menu'), 'result', 7200);
    
    $productlistnb = $cache->get("select name$lang, slugvi, slugen,photo, id from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('menu'), 'result', 7200);
    
    $productbc = $cache->get("select name$lang,photo,desc$lang,slugvi,slugen,regular_price, id from #_product where type = ? and find_in_set('banchay',status) and find_in_set('hienthi',status)", array('menu'), 'result', 7200);

    $hinhanh = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('hinhanh'), 'result', 7200);
    
    $feedback = $cache->get("select name$lang, desc$lang, content$lang, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('feedback'), 'result', 7200);

    $videonb = $cache->get("select id from #_photo where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status)", array('video'), 'result', 7200);

    $hinhanhlienhe = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('hinhanh-lienhe'), 'result', 7200);

    $thungo = $cache->get("select name$lang,desc$lang from #_static where type = ? limit 0,1", array('thu-ngo'), 'fetch', 7200);

    $newsnb = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'), 'result', 7200);
    
    
    //need
    /* SEO */
    $seoDB = $seo->getOnDB(0,'setting','update','setting');
    if(!empty($seoDB['title'.$seolang])) $seo->set('h1',$seoDB['title'.$seolang]);
    if(!empty($seoDB['title'.$seolang])) $seo->set('title',$seoDB['title'.$seolang]);
    if(!empty($seoDB['keywords'.$seolang])) $seo->set('keywords',$seoDB['keywords'.$seolang]);
    if(!empty($seoDB['description'.$seolang])) $seo->set('description',$seoDB['description'.$seolang]);
    $seo->set('url',$func->getPageURL());
    $imgJson = (!empty($logo['options'])) ? json_decode($logo['options'],true) : null;
    if(empty($imgJson) || ($imgJson['p'] != $logo['photo']))
    {
        $imgJson = $func->getImgSize($logo['photo'],UPLOAD_PHOTO_L.$logo['photo']);
        $seo->updateSeoDB(json_encode($imgJson),'photo',$logo['id']);
    }
    if(!empty($imgJson))
    {
        $seo->set('photo',$configBase.THUMBS.'/'.$imgJson['w'].'x'.$imgJson['h'].'x2/'.UPLOAD_PHOTO_L.$logo['photo']);
        $seo->set('photo:width',$imgJson['w']);
        $seo->set('photo:height',$imgJson['h']);
        $seo->set('photo:type',$imgJson['m']);
    }
    // Fanpage => Goi function face_index() de su dung
    function face_index()
    {
        global $optsetting;
        $mag = '';
        $mag .= '<div class="facebookforterin">
                    <div class="fb-page"
                    data-href="' . $optsetting['fanpage'] . '"
                    data-tabs="timeline"
                    data-width="500"
                    data-height="420"
                    data-small-header="true"
                    data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="' . $optsetting['fanpage'] . '">
                            <a href="' . $optsetting['fanpage'] . '">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>';
        return $mag;
    }
?>