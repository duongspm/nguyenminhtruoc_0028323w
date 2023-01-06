<div class="header">

</div>
<!-- <div class="header">
    <div class="header__top">
        <div class="wrapper">
            <div class="header__topp">
                <div class="header__top--left">
                    <div class="header__info">
                        <div>
                            <img src="assets/images/images/icon-address.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>
                            <?=$optsetting['address']?>
                        </span>
                    </div>
                </div>
                <div class="header__top--right">
                    <div class="header__info">
                        <div>
                            <img src="assets/images/images/icon-email.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <span>
                            <?=$optsetting['email']?>
                        </span>
                    </div>
                    <div class="social__header">
                        <div class="social__headerr">
                            <span>Follow us: </span>
                            <div class="social__list">
                                <?php if(!empty($socialheader)){
                            foreach($socialheader as $v){?>
                                <a href="<?=$v['link']?>" class="social__item">
                                    <div>
                                        <?=$func->getImage(['sizes' => '28x28x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                                    </div>
                                </a>
                                <?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="wrapper">
            <div class="header__logo">
                
            </div>
            <div class="header__right">
                <div class="header__info-item">

                </div>
                <div class="header__info-item">
                    <div class="header__banner">
                        <?=$func->getImage(['sizes' => '480x80x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $bannerheader['photo'], 'alt' => $setting['name'.$lang]])?>
                    </div>
                </div>
                <div class="header__info-item">
                    <div class="header__hotline">
                        <div class="header__icon">
                            <img src="assets/images/images/icon-hotline.png" alt="<?=$setting['name'.$lang]?>">
                        </div>
                        <div class="header__hotline--right">
                            <span>
                                liên hệ tư vấn:
                            </span>
                            <a href="tel:<?=$func->formatPhone($optsetting['phone'])?>"><?=$func->formatPhone($optsetting['phone'])?>
                            </a>
                            <a href="tel:<?=$func->formatPhone($optsetting['hotline'])?>"><?=$func->formatPhone($optsetting['hotline'])?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->