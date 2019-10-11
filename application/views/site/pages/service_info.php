

<section class="detail">
    <div class="container">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title">Dịch vụ</div>
                <ul>
                    <?php foreach ($products as $p){ ?>
                        <li>
                            <a href="<?php echo base_url('gioi-thieu-dich-vu/'.create_slug($p->name).'-'.$p->id.'.html')?>">
                                <?php echo $p->name?>
                            </a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 detail-content">
            <?php if(isset($product)){ ?>
                <h2><?php echo $product->name?></h2>
                <p>
                    <?php echo $product->content?>
                </p>
            <?php }?>
        </div>
    </div>
</section>