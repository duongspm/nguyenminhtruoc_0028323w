<div class="footer">
    <div class="wrapper">
        <div class="footer__top">
            <div class="footer-item">
                <div class="footer-logo">
                    <div class="footer__logo">
                        <a href="" title="<?=trangchu?>">
                            <?=$func->getImage(['sizes' => '120x120x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                    </div>
                    <div class="footer-social">
                        <?php if(!empty($socialfooter)){foreach($socialfooter as $v){?>
                        <a class="social-item" href="<?=$v['link']?>">
                            <?=$func->getImage(['class' => '', 'sizes' => '42x42x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
                        </a>
                        <?php }}?>

                    </div>
                </div>
            </div>
            <div class="footer-item footer__top--left">
                <div class="footer-title">
                    <span>Thông tin liên hệ</span>
                </div>
                <div class="footer-info">
                    <span>
                        <?= htmlspecialchars_decode($footer['content' . $lang]) ?>
                    </span>
                </div>

            </div>
            <div class="footer-item footer__top--middle">
                <div class="footer-title">
                    <span>Chính sách hỗ trợ</span>
                </div>
                <?php if(!empty($policy)){?>
                <div class="footer--list">
                    <ul>
                        <?php foreach($policy as $v){?>
                        <li>
                            <a class="text-decoration-none" href="<?=$v[$sluglang]?>"
                                title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper copyrightt">
            <div class="copyright-left">
                <span>Copyright © <?=date("Y",time())?>
                    <span class="settingname">
                        <?=$setting['name'.$lang]?>
                    </span>. Powered by NiNa Co.,Ltd
                </span>
            </div>
        </div>
    </div>
</div>
<?= $addons->set('footer-map', 'footer-map', 6); ?>
<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>

<?php if ($com != 'gio-hang') { ?>
<a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
    <i class="fas fa-shopping-bag"></i>
    <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
</a>
<?php } ?>
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