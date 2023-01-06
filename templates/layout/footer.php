<div class="footer pd-top">
    <div class="wrapper">
        <div class="footer__top">
            <div class="footer-item footer__top--left">
                <div class="footer-title">
                    <span>Về chúng tôi</span>
                </div>
                <div class="footer-info">
                    <span class="footer__slogan">
                        <?=$slogan['name'.$lang]?>
                    </span>
                </div>
                <div class="footer-social">
                    <?php if(!empty($socialfooter)){foreach($socialfooter as $v){?>
                    <a class="social-item" href="<?=$v['link']?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '42x42x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                    </a>
                    <?php }}?>

                </div>
            </div>
            <div class="footer-item footer__top--middle">
                <div class="footer-title">
                    <span>
                        <?=$tknh['name'.$lang]?>
                    </span>
                </div>
                <div class="footer-info">
                    <span>
                        <?= htmlspecialchars_decode($tknh['desc' . $lang]) ?>
                    </span>
                </div>
                <div class="footer__map">
                    <a href="lien-he">
                        <div class="footer__map--icon">
                            <img src="assets/images/images/icon-map.png" alt="">
                        </div>
                        <span>Xem bản đồ</span>
                    </a>
                </div>
            </div>
            <div class="footer-item footer__top--right">
                <div class="footer-title">
                    <span>
                        thông tin liên hệ
                    </span>
                </div>
                <div class="footer-info">
                    <?= htmlspecialchars_decode($footer['content' . $lang]) ?>
                </div>
            </div>
        </div>
        <div class="footer__middle pd">
            <div class="footer__middle__item">
                <span class="footer__middle--name">
                    Sản phẩm
                </span>
                <?php if(!empty($productnb)){?>
                <div class="footer__middle--list">
                    <?php for ($i=0; $i < 6; $i++){ if(!empty($productnb[$i])){?>
                    <a class="text-decoration-none" href="<?=$productnb[$i][$sluglang]?>"
                        title="<?=$productnb[$i]['name'.$lang]?>"><?=$productnb[$i]['name'.$lang]?></a>
                    <?php }}?>
                </div>
                <?php }?>
            </div>
            <div class="footer__middle__item">
                <span class="footer__middle--name">
                    công trình
                </span>
                <?php if(!empty($congtrinh)){?>
                <div class="footer__middle--list">
                    <?php foreach($congtrinh as $v){?>
                    <a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
            <div class="footer__middle__item">
                <span class="footer__middle--name">
                    Chính sách hoạt động
                </span>
                <?php if(!empty($policy)){?>
                <div class="footer__middle--list">
                    <?php foreach($policy as $v){?>
                    <a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
            <div class="footer__middle__item">
                <span class="footer__middle--name">
                    chăm sóc khách hàng
                </span>
                <?php if(!empty($cskh)){?>
                <div class="footer__middle--list">
                    <?php foreach($cskh as $v){?>
                    <a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="copyright">
            <div class="wrapper copyrightt">
                <div class="copyright-left">
                    <span>2022 Bản Quyền ©
                        <span class="settingname">
                            <?=$setting['name'.$lang]?>
                        </span>. All rights reserved. Design by NINA Co.,Ltd
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>