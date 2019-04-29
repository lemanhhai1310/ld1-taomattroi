<footer id="footer" class="uk-background-bottom-right uk-background-norepeat" style="background-image: url(imgs/bg_f.png)">
    <div class="uk-section-xsmall top">
        <div class="uk-container uk-container-small uk-text-center">
            *Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh <br>

            Thời gian phát huy hiệu quả của sản phẩm tùy thuộc vào cơ địa mỗi người
        </div>
    </div>
    <div class="uk-section-small center">
        <div class="uk-container uk-container-small uk-text-center">
            <div class="box1 uk-margin">
                Đạt các chứng chỉ quan trọng nhất về dược phẩm và thực phẩm của Mỹ
            </div>
            <div class="uk-flex-center" uk-grid>
                <?php
                $arr = array(
                    array(
                        'txt' => 'FDA',
                        'src' => 'imgs/chungchi/1.png',
                    ),
                    array(
                        'txt' => 'GMP',
                        'src' => 'imgs/chungchi/2.png',
                    ),
                    array(
                        'txt' => 'KOSHER',
                        'src' => 'imgs/chungchi/3.png',
                    ),
                    array(
                        'txt' => 'HALAL',
                        'src' => 'imgs/chungchi/4.png',
                    ),
                    array(
                        'txt' => 'ISO 2000:2011',
                        'src' => 'imgs/chungchi/5.png',
                    ),
                );
                foreach ($arr as $key => $value) { ?>
                <div class="uk-width-auto">
                    <div class="box2">
                        <div class="txt"><?= $value['txt'] ?></div>
                        <div class="box_img">
                            <img src="<?= $value['src'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="bottom"></div>
</footer>
</section>
</body>
</html>