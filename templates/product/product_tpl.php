<div class="title-main"><span>Sản phẩm</span></div>
<div class="content-main w-clear">
    <div class="">
        <div class="productlistnb__list">
            <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
            <div class="productt productdetail">
                <a class="product__item text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                    <div class="product__img">
                        <div class="hover_sang scale-img">
                            <?=$func->getImage(['sizes' => '286x283x1', 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                        </div>
                    </div>
                    <div class="product__content">
                        <h3 class="product__name"><?= $v['name' . $lang] ?></h3>
                        <p class="product__price">
                            <span class="price-price">Giá: </span>
                            <span class="price-new">
                                <?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : "Liên hệ" ?></span>
                        </p>
                    </div>
                </a>
            </div>
            <?php } } else { ?>
            <div class="col-12">
                <div class="alert alert-warning w-100" role="alert">
                    <strong><?=khongtimthayketqua?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>