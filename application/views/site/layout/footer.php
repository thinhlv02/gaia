<section class="footer">
    <div class="container">
        <div style="min-height: 200px">
            <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 40px">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img src="<?php echo public_url('images/logo_company.png')?>" style="max-width: 180px">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <img src="<?php echo public_url('images/logo.png')?>" style="max-width: 180px; margin-top: 30px">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" style="margin-top: 30px">
                <div class="footer-title"><strong>THÔNG TIN LIÊN HỆ</strong></div>
                <div>
                    <i class="fa fa-building" aria-hidden="true"></i> <span><?php echo $contact->address?></span>
                </div>
                <div style="margin-top: 10px">
                    <i class="fa fa-phone" aria-hidden="true"></i> <span><?php echo $contact->phone?></span>
                </div>
                <div style="margin-top: 10px">
                    <i class="fa fa-envelope" aria-hidden="true"></i> <span><?php echo $contact->email?></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12" style="margin-top: 30px">
                <div class="footer-title"><strong>LIÊN KẾT</strong></div>
                <ul>
                    <li><a href="<?php echo base_url('gioi-thieu-dich-vu')?>">Giới thiệu dịch vụ</a></li>
                    <li><a href="<?php echo base_url('ho-tro')?>">Hỗ trợ</a></li>
                    <li><a href="<?php echo base_url('dieu-khoan-su-dung')?>">Chính sách và điều khoản</a></li>
                    <li><a href="<?php echo base_url('lien-he')?>">Liên hệ</a></li>
                </ul>
            </div>
            </div>
            <div class="row col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">
                <div class="footer-title"><strong>ĐẠI LÝ</strong></div>
                <div class="row">
                    <?php foreach ($agencies as $key=>$value){ ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <a href="<?php echo base_url('dai-ly#'.create_slug($value->name))?>"><?php echo $value->name?></a>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="row col-sm-12 col-md-12 col-xs-12" style="margin-top: 30px">
                Copyright 2019 © Adong Corp All Rights Reserved
            </div>
        </div>

    </div>
    <div id="result_test"></div>
</section>

