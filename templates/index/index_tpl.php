<div class="about">
    <div class="img-item-01">
        <img src="assets/images/images/img-item01.png" alt="">
    </div>
    <div class="wrapper">
        <?php if(!empty($about)){?>
        <div class="aboutt pd">
            <div class="about__left">
                <span class="about__left--name">
                    <?=$setting['name'.$lang]?>
                </span>
                <?php if(!empty($about[0])){?>
                <div class="about__img effect10 scale-img">
                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '473x450x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about[0]['photo'], 'alt' => $about[0]['name'.$lang]]) ?>
                </div>
                <?php } ?>
            </div>
            <div class="about__right">
                <div class="about__heading">
                    <span class="about__title">
                        welcome to
                    </span>
                    <a href="gioi-thieu" title="<?=$about[0]['name'.$lang]?>"
                        class="text-decoration-none about__name"><?=$about[0]['name'.$lang]?></a>
                </div>
                <div class="about__content">
                    <span>
                        <?=$about[0]['desc'.$lang]?>
                    </span>
                </div>
                <div class="about__tieuchi">
                    <?php if(!empty($tieuchi)){?>
                    <?php for ($i=0; $i < 3; $i++) { 
                    ?>
                    <?php if(!empty($tieuchi[$i])){?>
                    <div class="tieuchi__item">
                        <div class="tieuchi__img">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '82x70x1', 'upload' => UPLOAD_NEWS_L, 'image' => $tieuchi[$i]['photo'], 'alt' => $tieuchi[$i]['name'.$lang]]) ?>
                        </div>
                        <span class="tieuchi__name">
                            <?=$tieuchi[$i]['name'.$lang]?>
                        </span>
                    </div>
                    <?php }?>
                    <?php }}?>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="bestseller">
            <div class="bestseller__left">
                <?php if(!empty($productbc)){?>
                <div class="slider-for">
                    <?php foreach($productbc as $v){?>
                    <div>
                        <a class="text-decoration-none slider-for-img scale-img hover_sang" href="<?=$v[$sluglang]?>"
                            title="<?=$v['name'.$lang]?>">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '370x370x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </a>
                    </div>
                    <?php }?>

                </div>
                <?php }?>
            </div>
            <div class="bestseller__right">
                <?php if(!empty($bestseller)){?>
                <div class="bestseller__right--content">
                    <div class="best-content">
                        <span class="bestseller__title">
                            <?=$bestseller['name'.$lang]?>
                        </span>
                        <div>
                            <img src="assets/images/images/line-top.png" alt="">
                        </div>
                        <span class="bestseller__name">
                            <?=$setting['name'.$lang]?>
                        </span>
                        <div>
                            <img src="assets/images/images/line-bottom.png" alt="">
                        </div>
                        <span class="bestseller__contain">
                            <?=$bestseller['desc'.$lang]?>
                        </span>
                    </div>
                </div>
                <?php }?>

            </div>
        </div>
        <div class="bestpro__list">
            <?php if(!empty($productbc)){?>
            <div class="slider-nav">
                <?php foreach($productbc as $v){?>
                <div>
                    <a class="text-decoration-none  slider-nav-item" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>">
                        <div class="slider-nav-img">
                            <?= $func->getImage(['class' => 'lazy', 'sizes' => '228x228x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="slider-nav-content">
                            <span class="slider-name">
                                <?=$v['name'.$lang]?>
                            </span>
                            <div class="slider-price">
                                Giá:
                                <span><?=($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe?></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="menu-pro">
    <div class="img-item-02">
        <img src="assets/images/images/img-item-02.png" alt="">
    </div>
    <div class="img-item-03">
        <img src="assets/images/images/img-item-03.png" alt="">
    </div>
    <div class="wrapper pd">
        <div class="heading">
            <span class="heading--white">Menu</span>
            <h2 class="heading__title--white">
                <?=$setting['name'.$lang]?>
            </h2>
        </div>
        <div class="menu-pro-list">
            <?php if (!empty($productnb)) { ?>
            <?php if (!empty($productlistnb)) { ?>
            <div class="title-product-list text-center">
                <?php foreach ($productlistnb as $key => $vl) : ?>
                <a class="text-decoration-none a-title-product"
                    data-list="<?= $vl['id'] ?>"><?= $vl['name' . $lang] ?></a>
                <?php endforeach ?>
            </div>
            <?php } ?>
            <div class="paging-product-list"></div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="khonggian">
    <div class="wrapper pd">
        <div class="heading">
            <span class="heading--black">không gian quán</span>
            <h2 class="heading__title--red">
                <?=$setting['name'.$lang]?>
            </h2>
        </div>
        <div class="khonggian__list album-gallery">
            <div class="khonggian__top">
                <?php if(!empty($hinhanh[0])){?>
                <div class="album__top--left">
                    <a class="album__top--img scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[0]['photo']?>"
                        title="<?=$hinhanh[0]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '305x372x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh[0]['photo'], 'alt' => $hinhanh[0]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
                <?php if(!empty($hinhanh[1])){?>
                <div class="album__top--middle">
                    <span>
                        Lưu giữ khoảnh khắc
                    </span>
                    <a class="album__top--img scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[1]['photo']?>"
                        title="<?=$hinhanh[1]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '326x300x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh[1]['photo'], 'alt' => $hinhanh[1]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
                <?php if(!empty($hinhanh[2])){?>
                <div class="album__top--right">
                    <a class="album__top--img scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[2]['photo']?>"
                        title="<?=$hinhanh[2]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '488x408x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh[2]['photo'], 'alt' => $hinhanh[2]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
            </div>
            <div class="khonggian__bottom">
                <?php if(!empty($hinhanh[3])){?>
                <div class="album__bottom--right">
                    <a class="album__bottom--img scale-img effect10"
                        href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[3]['photo']?>" title="<?=$hinhanh[3]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '485x400x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh[3]['photo'], 'alt' => $hinhanh[3]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
                <?php if(!empty($hinhanh[4])){?>
                <div class="album__bottom--middle">
                    <a class="album__bottom--img scale-img effect10"
                        href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[4]['photo']?>" title="<?=$hinhanh[4]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '317x245x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh[4]['photo'], 'alt' => $hinhanh[4]['name'.$lang]])?>
                    </a>
                    <span>
                        kính chào
                    </span>
                    <p>Quý khách</p>
                </div>
                <?php }?>
                <?php if(!empty($hinhanh[5])){?>
                <div class="album__bottom--right">
                    <a class="album__bottom--img scale-img effect10"
                        href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[5]['photo']?>" title="<?=$hinhanh[5]['name'.$lang]?>">
                        <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '317x400x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanh[5]['photo'], 'alt' => $hinhanh[5]['name'.$lang]])?>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="videofb">
    <div class="img-item-04">
        <img src="assets/images/images/img-item-04.png" alt="">
    </div>
    <div class="wrapper">
        <div class="videofbb">
            <div class="feedbackd">
                <div class="heading__feedback">
                    <span>Cảm nhận khách hàng</span>
                </div>
                <?php if(count($feedback)){?>
                <div class="feedback__list">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10"
                        data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1"
                        data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="700" data-autoplayspeed="3000" data-dots="0" data-nav="1"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".control-brand">
                        <?php foreach($feedback as $i){?>
                        <div>
                            <div class="feedback__item">
                                <div class="feedback__img--bg">
                                    <div class="feedback__img effect10">
                                        <?=$func->getImage(['class' => 'w-100', 'sizes' => '203x260x1', 'upload' => UPLOAD_NEWS_L, 'image' => $i['photo'], 'alt' => $i['name'.$lang]])?>
                                    </div>
                                </div>
                                <div class="feedback__card">
                                    <div class="feedback__content">
                                        <span>
                                            " <?=$i['content'.$lang]?> "
                                        </span>
                                    </div>
                                    <div class="feedback--name">
                                        <span class="feedback__name">
                                            "<?=$i['name'.$lang]?>
                                        </span>
                                        <span class="feedback--desc">
                                            <?=$i['desc'.$lang]?> "
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>

                </div>
                <?php }?>
            </div>
            <div class="videod">
                <div class="video__list">
                    <div class="video-intro">
                        <?php if(count($videonb)){?>
                        <div class="slickvideoclip">
                            <?php foreach($videonb as $v){?>
                            <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                <div class="video-image scale-img">
                                    <?=$func->getImage(['class' => 'w-100', 'size-error' => '480x360x1', 'url' => 'https://img.youtube.com/vi/'.$func->getYoutube($v['link_video']).'/0.jpg', 'alt' => $v['name'.$lang]])?>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog pd">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading">
                <span class="heading--black">tin tức & sự kiện</span>
                <h2 class="heading__title--red">
                    <?=$setting['name'.$lang]?>
                </h2>
            </div>
            <div class="blog__list">
                <?php if (!empty($newsnb)) { ?>
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:20" data-sm-items="2:20"
                    data-md-items="2:20" data-lg-items="2:20" data-xlg-items="2:20" data-rewind="1" data-autoplay="1"
                    data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500"
                    data-autoplayspeed="3500" data-dots="0" data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-newsnb">
                    <?php foreach($newsnb as $v){?>
                    <a href="<?=$v[$sluglang]?>" class="blog__item text-decoration-none">
                        <div class="blog__date">
                            <span class="blog__date--day">
                                <?=date("d",$v['date_created'])?>
                            </span>
                            <span class="blog__date--month">
                                <?=date("m",$v['date_created'])?>
                            </span>
                        </div>
                        <div class="blog__img effect10">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '293x250x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="blog__content">
                            <span class="blog__name">
                                <?=$v['name'.$lang]?>
                            </span>
                            <div class="blog__content--middle">
                                <span>By Admin , </span>
                                <p> tin tức</p>
                            </div>
                            <span class="blog__desc">
                                <?=$v['desc'.$lang]?>
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

<div class="lienhe">
    <div class="wrapper ">
        <div class="lienhee pd">
            <div class="lienhe__left">
                <div class="lienhe--heading">
                    <span class="lienhe__heading">
                        Liên hệ đặt bàn
                    </span>
                    <span class="lienhe__title">
                        Hãy điền thông tin theo form bên dưới để được chúng tôi liên hệ sớm nhất
                    </span>
                </div>
                <div class="lienhe__form">
                    <form class="validation-newsletter" novalidate method="post" action=""
                        enctype="multipart/form-data">
                        <div class="newsletter-input">
                            <div class="icon__input">
                                <img src="assets/images/icon-lienhe.png" alt="">
                            </div>
                            <input type="text" class="form-controld text-sm" id="fullname-newsletter"
                                name="dataNewsletter[fullname]" placeholder="Họ Tên:" required />
                            <div class="invalid-tooltip">Vui lòng nhập họ tên</div>
                        </div>
                        <div class="newsletter-input">
                            <div class="icon__input">
                                <img src="assets/images/icon-lienhe2.png" alt="">
                            </div>
                            <input type="number" class="form-controld text-sm" id="phone-newsletter"
                                name="dataNewsletter[phone]" placeholder="Số Điện Thoại:" required />
                            <div class="invalid-tooltip">Vui lòng nhập số điện thoại</div>
                        </div>
                        <div class="newsletter-input">
                            <div class="icon__input">
                                <img src="assets/images/icon-linehe4.png" alt="">
                            </div>
                            <input type="datetime-local" class="form-controld text-sm" id="datetime-newsletter"
                                name="dataNewsletter[datetime]" placeholder="Ngày đặt:" required />
                            <div class="invalid-tooltip">Vui lòng chọn ngày đặt bàn</div>
                        </div>

                        <div class="newsletter-input">
                            <div class="icon__input">
                                <img src="assets/images/iconk-linehe3.png" alt="">
                            </div>
                            <input type="email" class="form-controld text-sm" id="email-newsletter"
                                name="dataNewsletter[email]" placeholder="Email:" required />
                            <div class="invalid-tooltip"><?= vuilongnhapdiachiemail ?></div>
                        </div>
                        <div class="newsletter-input">
                            <div class="icon__input">
                                <img src="assets/images/icon-linehe4.png" alt="">
                            </div>
                            <textarea type="text" class="form-controldd text-sm" id="content-newsletter"
                                name="dataNewsletter[content]" placeholder="Nhập Nội Dung:" required></textarea>
                            <div class="invalid-tooltip">Vui lòng nhập nội dung</div>
                        </div>
                        <div class="newsletter-button">
                            <input type="submit" class="btnd" name="submit-newsletter" value="GỬI NGAY" disabled>
                            <input type="hidden" class="btn btn-sm btn-danger w-100"
                                name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                        </div>
                    </form>
                </div>
            </div>
            <div class="lienhe__right album-gallery">
                <div class="lienhe__right--list">
                    <?php if(!empty($hinhanhlienhe[0])){?>
                    <div class="lienhe--img">
                        <a class="scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanhlienhe[0]['photo']?>"
                            title="<?=$hinhanhlienhe[0]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '357x202x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanhlienhe[0]['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($hinhanhlienhe[1])){?>
                    <div class="lienhe--img">
                        <a class="scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanhlienhe[1]['photo']?>"
                            title="<?=$hinhanhlienhe[1]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '223x202x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanhlienhe[1]['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="lienhe__right--list">
                    <?php if(!empty($hinhanhlienhe[2])){?>
                    <div class="lienhe--img">
                        <a class="scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanhlienhe[2]['photo']?>"
                            title="<?=$hinhanhlienhe[2]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '223x202x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanhlienhe[2]['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                    <?php if(!empty($hinhanhlienhe[3])){?>
                    <div class="lienhe--img">
                        <a class="scale-img effect10" href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanhlienhe[3]['photo']?>"
                            title="<?=$hinhanhlienhe[3]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '357x202x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $hinhanhlienhe[3]['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thungo">
    <div class="wrapper pd">
        <div class="thungo__content">
            <span class="thungo__heading">
                <?=$thungo['name'.$lang]?>
            </span>
            <span class="thungo__desc">
                <?=$thungo['desc'.$lang]?>
            </span>
        </div>
    </div>
</div>