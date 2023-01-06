<div class="menu">
    <div class="wrap-content menuuu">
        <ul class="menu-list">

            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition" href=""
                    title="<?=trangchu?>"><?=trangchu?></a></li>

            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>

            <li>
                <a class="has-child <?php if($com=='san-pham') echo 'active'; ?> transition" href="san-pham"
                    title="Sản phẩm">Sản phẩm</a>
                <?php if(count($productlist)) { ?>
                <ul>
                    <?php foreach($productlist as $klist => $vlist) {?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>

            <li>
                <a class="<?php if($com=='dich-vu') echo 'active'; ?> transition" href="dich-vu" title="Dich vụ">Dịch
                    vụ</a>
            </li>

            <li>
                <a class="<?php if($com=='tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin
                    tức</a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition" href="lien-he" title="Liên hệ">Liên
                    hệ</a></li>
        </ul>
        <div class="menu__search">
            <div class="search w-clear">
                <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                <input type="text" id="keyword" placeholder="Tìm kiếm sản phẩm"
                    onkeypress="doEnter(event,'keyword');" />
            </div>
        </div>
    </div>
</div>