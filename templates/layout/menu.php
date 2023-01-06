<div class="menu">
    <div class="menu__bg">
        <div class="wrap-content menuuu">
            <ul class="menu-list-left">
                <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                        title="<?=trangchu?>"><?=trangchu?></a></li>

                <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                        title="<?=gioithieu?>"><?=gioithieu?></a></li>

                <li>
                    <a class="has-child <?php if($com=='menu') echo 'active'; ?> transition" href="menu"
                        title="Menu">Menu</a>
                    <?php if(count($productlist)) { ?>
                    <ul>
                        <?php foreach($productlist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id']));
                            ?>
                        <li>
                            <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                                href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                            <?php if(!empty($spcat)) { ?>
                            <ul>
                                <?php foreach($spcat as $kcat => $vcat) {
                                ?>
                                <li>
                                    <a class="has-child transition" title="<?=$vcat['name'.$lang]?>"
                                        href="<?=$vcat[$sluglang]?>"><?=$vcat['name'.$lang]?></a>

                                </li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
            </ul>
            <div class="menu__logo">
                <a href="" title="<?=trangchu?>">
                    <?=$func->getImage(['sizes' => '148x148x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <ul class="menu-list-right">
                <li>
                    <a class="<?php if($com=='hinh-anh') echo 'active'; ?> transition" href="hinh-anh"
                        title="Hình ảnh">Hình
                        ảnh</a>
                </li>

                <li>
                    <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin
                        tức</a>
                </li>

                <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he"
                        title="Liên hệ">Liên
                        hệ</a></li>
                <div class="menu__search">
                    <div class="search-res">
                        <p class="icon-search transition"><i class="fa fa-search"></i></p>
                        <div class="search-grid w-clear">
                            <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>"
                                onkeypress="doEnter(event,'keyword-res');" />
                            <p onclick="onSearch('keyword-res');"><i class="fa fa-search"></i></p>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>