
<section class="detail">
    <div class="container">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title">Hỗ trợ</div>
                <ul>
                    <li><a href="<?php echo base_url('ho-tro')?>">Khách hàng</a></li>
                    <li><a href="<?php echo base_url('ho-tro/ky-thuat-vien')?>">Kỹ thuật viên</a></li>
                    <li><a href="<?php echo base_url('ho-tro/cong-tac-vien')?>">Cộng tác viên</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 detail-content">
            <ul>
                <?php foreach ($categories as $p){ ?>
                    <li style="margin: 15px 0">
                        <a href="<?php echo base_url('ho-tro/'.create_slug($p->name).'-'.$p->id)?>">
                            <?php echo $p->name?>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</section>