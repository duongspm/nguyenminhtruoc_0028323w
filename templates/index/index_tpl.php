<div class="prolistnb">
    <div class="wrapper">
        <div class="prolistt">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:20" data-sm-items="3:20" data-md-items="3:20"
                data-lg-items="3:20" data-xlg-items="3:20" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-partner">
                <?php if(!empty($productlistnb)) {
                foreach($productlistnb as $v){?>
                <div class="prolistnb__item">
                    <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <div class="prolistnb__item--img">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '280x280x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                            <div class="prolist__name">
                                <span>
                                    <?=$v['name'.$lang]?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt">
            <div class="about__left">
                <div class="about__heading">
                    <span class="about__title">
                        Về chúng tôi
                    </span>
                    <span class="about__name"><?=$about[0]['name'.$lang]?></span>
                </div>
                <div class="about__content">
                    <span>
                        <?=$about[0]['desc'.$lang]?>
                    </span>
                    <div class="about__btn">
                        <a href="gioi-thieu" title="Giới thiệu"
                            class="button button--isi button--text-thick button--text-upper button--size-s"><span>xem
                                chi tiết</span></a>
                    </div>
                </div>
            </div>
            <div class="about__right">
                <?php if(!empty($about[0])){?>
                <div class="about__right-img effect10 scale-img">
                    <?= $func->getImage(['class' => 'lazy', 'sizes' => '668x514x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<div class="tieuchi mr-bottom">
    <div class="wrapper">
        <div class="tieuchii">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="4:30" data-sm-items="4:30" data-md-items="4:30"
                data-lg-items="4:30" data-xlg-items="4:30" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500"
                data-dots="0" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-partner">
                <?php if(!empty($tieuchi)) {
                foreach($tieuchi as $v){?>
                <div class="tieuchi__item">
                    <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <div class="tieuchi__item--img">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '55x51x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <span class="tieuchi__name cut_string1">
                            <?=$v['name'.$lang]?>
                        </span>
                        <span class="tieuchi__desc cut_string2">
                            <?=$v['desc'.$lang]?>
                        </span>
                        <span class="tieuchi__link">Xem thêm <span class="icon__xemm">&#10132;</span></span>
                    </a>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
<div class="productlist">
    <div class="wrapper">
        <div class="productlistt">
            <div class="danhmucsp">
                <div class="danhmucsp__top">
                    <div class="danhmucsp__heading">
                        <span>Danh mục sản phẩm</span>
                    </div>
                    <div class="danhmucsp__list">
                        <?php if(!empty($productlist)){
                            foreach($productlist as $v) {?>
                        <div class="danhmucsp__item">
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                <div class="danhmucsp__icon">
                                    <img src="assets/images/images/icon-ul.png" alt="">
                                </div>
                                <span class="danhmucsp__name">
                                    <?=$v['name'.$lang]?>
                                </span>
                            </a>
                        </div>
                        <?php }}?>
                    </div>
                </div>
                <div class="support">
                    <div class="danhmucsp__heading">
                        <span>Hỗ trợ trực tuyến</span>
                    </div>
                    <div class="support__content">
                        <div class="support__top">
                            <div class="support__avt">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '110x110x1', 'upload' => UPLOAD_NEWS_L, 'image' => $support[0]['photo'], 'alt' => $support[0]['name'.$lang]]) ?>
                            </div>
                            <div class="support__tuvan">
                                <span class="support__tuvan--top">
                                    tư vấn
                                </span>
                                <span class="support__tuvan--bottom">
                                    24/7
                                </span>
                            </div>
                        </div>
                        <div class="support--content">
                            <?=htmlspecialchars_decode($support[0]['desc'.$lang])?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productlist__nb">
                <?php foreach($productlistnb as $list) {
            $sanpham = $d->rawQuery("select name$lang, slugvi, slugen,photo, id from #_product where id_list = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc",array($list['id'])); 
            ?>
                <!--Bắt đầu danh sách sản phẩm c1 nb -->
                <div class="pro__listnb">
                    <div class="pro__listnb__heading">
                        <div class="prolistnb__name">
                            <span><?=$list['name'.$lang]?></span>
                        </div>
                    </div>
                    <div class="productlistnb__list">
                        <?php if(count($sanpham) >= 6) {?>
                        <?php for ($i=0; $i < 6; $i++) {?>
                        <?php if(!empty($sanpham[$i])){?>
                        <div class="productt">
                            <a class="product__item text-decoration-none" href="<?= $sanpham[$i][$sluglang] ?>"
                                title="<?= $sanpham[$i]['name' . $lang] ?>">
                                <div class="product__img">
                                    <div class="hover_sang scale-img">
                                        <?= $func->getImage(['sizes' => '280x220x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $sanpham[$i]['photo'], 'alt' => $sanpham[$i]['name' . $lang]]) ?>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3 class="name-product cut_string1"><?= $sanpham[$i]['name' . $lang] ?></h3>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php } else { ?>
                        <?php foreach($sanpham as $i) { ?>
                        <div class="productt">
                            <a class="product__item text-decoration-none" href="<?= $i[$sluglang] ?>"
                                title="<?= $i['name' . $lang] ?>">
                                <div class="product__img">
                                    <div class="hover_sang scale-img">
                                        <?= $func->getImage(['sizes' => '280x220x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $i['photo'], 'alt' => $i['name' . $lang]]) ?>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h3 class="name-product cut_string1"><?= $i['name' . $lang] ?></h3>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <?php } ?>
                    </div>
                    <?php if (count($sanpham) >= 6) {?>
                    <div class="sanpham-bottom">
                        <a href="<?=$list[$sluglang]?>" title="<?=$list['name'.$lang]?>"
                            class="button button--isi button--text-thick button--text-upper button--size-s"><span>xem
                                thêm</span></a>
                    </div>
                    <?php }?>
                </div>
                <!--Kết thúc danh sách sản phẩm c1 nb -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="pd">
    <?php if(!empty($banner)){?>
    <div class="banner effect10">
        <?= $func->getImage(['class' => 'lazy', 'sizes' => '1366x734x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => $setting['name'.$lang]]) ?>
    </div>
    <?php }?>
</div>

<div class="blog pd-b">
    <div class="wrapper">
        <div class="blogg">
            <div class="blog__heading">
                <div>
                    <img src="assets/images/images/icon-heading-blog.png" alt="">
                </div>
                <span>Tin tức mới</span>
            </div>
            <div class="slogan__about">
                <?=$slogan['name'.$lang]?>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:30" data-sm-items="3:30"
                    data-md-items="3:30" data-lg-items="3:30" data-xlg-items="3:30" data-rewind="1" data-autoplay="1"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-newsnb">
                    <?php foreach($newsnb as $v){?>
                    <a href="<?=$v[$sluglang]?>" class="blog__item">
                        <div class="blog__date">
                            <div class="blog__date--icon">

                            </div>
                            <span class="blog__date--day">
                                Ngày <?=date("d/m/Y",$v['date_created'])?>
                            </span>
                        </div>
                        <div class="blog__img effect10">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '380x280x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="blog__content">
                            <span class="blog__name">
                                <?=$v['name'.$lang]?>
                            </span>
                            <span class="blog__desc">
                                <?=$v['desc'.$lang]?>
                            </span>
                            <span class="blog__xemthem">
                                Xem Thêm
                            </span>
                        </div>
                    </a>
                    <?php }?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>