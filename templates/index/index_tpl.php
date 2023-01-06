<div class="about">
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
                        <a class="text-decoration-none slider-for-img" href="<?=$v[$sluglang]?>"
                            title="<?=$v['name'.$lang]?>">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '400x400x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
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
                    <a class="text-decoration-none slider-nav-item" href="<?=$v[$sluglang]?>"
                        title="<?=$v['name'.$lang]?>">
                        <div class="slider-nav-img">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '228x228x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
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