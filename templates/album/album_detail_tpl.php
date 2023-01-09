<div class="title-main"><span>Hình ảnh</span></div>
<div class="content-main album-gallery form-row w-clear">
    <?php if(!empty($hinhanh)) { foreach($hinhanh as $k => $v) { ?>
    <div class="album col-6 col-md-4 col-lg-3 col-xl-3">
        <a class="album-image scale-img " href="<?=ASSET.UPLOAD_PHOTO_L.$hinhanh[0]['photo']?>">
            <?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '480x360x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $setting['name'.$lang]])?>
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