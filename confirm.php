<?php
include('./common/upper_html.php');
?>
<div class="application-form container">
    <form action="complete.php" method="post">
        <h1 class="main-title text-center my-5">ご注文確認</h1>
        <?php if (!empty($_POST['btn_confirm'])): ?>
            <?php
            if (empty($_POST['wallpaper1'])) {
                echo "<script>alert('商品情報を入力してください')</script>";
                echo '<script>history.back();</script>';
            }
            if (empty($_POST['lastname']) || empty($_POST['firstname']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['mail']) ) {
                echo "<script>alert('お客様情報を正しく入力してください')</script>";
                echo '<script>history.back();</script>';
            }
            if (!empty($_POST['creditorbank']) && $_POST['creditorbank'] == "credit") {
                if (empty($_POST['first'])
                || empty($_POST['second'])
                || empty($_POST['third'])
                || empty($_POST['fourth'])
                || empty($_POST['cardname'])
                || empty($_POST['exmonth'])
                || empty($_POST['exyear'])
                || empty($_POST['seccode'])
                ) {
                    echo "<script>alert('クレジットカード情報を正しく入力してください')</script>";
                    echo '<script>history.back();</script>';
                }
                if (!preg_match("/^[5]/", $_POST['first']) && !preg_match("/^[4]/", $_POST['first'])) {
                    echo "<script>alert('VISAとMasterCardカード以外は使えません。')</script>";
                    echo '<script>history.back();</script>';
                }
            }
            ?>

        <div class="orderer-section">
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">商品情報</label>
            <div class="productInfo mx-5">
                <div class="row">
                    <div class="col-3">柄・デザイン (1枚目)</div>
                    <div class="col-2 designPics">
                        <?php if ($_POST['wallpaper1'] == "img_wall_01"): ?>
                            <img src="./img/01.png" alt="wallpaper01">
                            <label for="wallpaper01" class="form-check-label w-100 text-center mt-2">くまもん</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_02"): ?>
                            <img src="./img/02.png" alt="wallpaper02">
                            <label for="wallpaper02" class="form-check-label w-100 text-center mt-2">白</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_03"): ?>
                            <img src="./img/03.png" alt="wallpaper03">
                            <label for="wallpaper03" class="form-check-label w-100 text-center mt-2">木目調</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_04"): ?>
                            <img src="./img/04.png" alt="wallpaper04">
                            <label for="wallpaper04" class="form-check-label w-100 text-center mt-2">白レンガ</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_05"): ?>
                            <img src="./img/05.png" alt="wallpaper05">
                            <label for="wallpaper05" class="form-check-label w-100 text-center mt-2">金</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_06"): ?>
                            <img src="./img/06.png" alt="wallpaper06">
                            <label for="wallpaper06" class="form-check-label w-100 text-center mt-2">大理石</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_07"): ?>
                            <img src="./img/07.png" alt="wallpaper07">
                            <label for="wallpaper07" class="form-check-label w-100 text-center mt-2">カラー木目</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_08"): ?>
                            <img src="./img/08.png" alt="wallpaper08">
                            <label for="wallpaper08" class="form-check-label w-100 text-center mt-2">太陽</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_09"): ?>
                            <img src="./img/09.png" alt="wallpaper09">
                            <label for="wallpaper09" class="form-check-label w-100 text-center mt-2">紫タイル</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_10"): ?>
                            <img src="./img/10.png" alt="wallpaper10">
                            <label for="img_wall_10" class="form-check-label w-100 text-center mt-2">芝生</label>
                        <?php endif; ?>
                        <?php if ($_POST['wallpaper1'] == "img_wall_11"): ?>
                            <img src="./img/11.png" alt="wallpaper11">
                            <label for="img_wall_11" class="form-check-label w-100 text-center mt-2">畳</label>
                        <?php endif; ?>
                    </div>
                    <div class="col-1">サイズ</div>
                    <div class="col-5">
                        タテ <?= $_POST['height1'];?> cm × ヨコ <?= $_POST['width1'];?> cm
                    </div>
                </div>
            </div>
            <input type="hidden" name="wallpaper1" value="<?= $_POST['wallpaper1'];?>">
            <input type="hidden" name="height1" value="<?= $_POST['height1'];?>">
            <input type="hidden" name="width1" value="<?= $_POST['width1'];?>">
            <?php if (!empty($_POST['wallpaper2'])): ?>
                <hr>
                <div class="productInfo mx-5">
                    <div class="row">
                        <div class="col-3">柄・デザイン (2枚目)</div>
                        <div class="col-2 designPics">
                            <?php if ($_POST['wallpaper2'] == "img_wall_01"): ?>
                                <img src="./img/01.png" alt="wallpaper01">
                                <label for="wallpaper01" class="form-check-label w-100 text-center mt-2">くまもん</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_02"): ?>
                                <img src="./img/02.png" alt="wallpaper02">
                                <label for="wallpaper02" class="form-check-label w-100 text-center mt-2">白</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_03"): ?>
                                <img src="./img/03.png" alt="wallpaper03">
                                <label for="wallpaper03" class="form-check-label w-100 text-center mt-2">木目調</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_04"): ?>
                                <img src="./img/04.png" alt="wallpaper04">
                                <label for="wallpaper04" class="form-check-label w-100 text-center mt-2">白レンガ</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_05"): ?>
                                <img src="./img/05.png" alt="wallpaper05">
                                <label for="wallpaper05" class="form-check-label w-100 text-center mt-2">金</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_06"): ?>
                                <img src="./img/06.png" alt="wallpaper06">
                                <label for="wallpaper06" class="form-check-label w-100 text-center mt-2">大理石</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_07"): ?>
                                <img src="./img/07.png" alt="wallpaper07">
                                <label for="wallpaper07" class="form-check-label w-100 text-center mt-2">カラー木目</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_08"): ?>
                                <img src="./img/08.png" alt="wallpaper08">
                                <label for="wallpaper08" class="form-check-label w-100 text-center mt-2">太陽</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_09"): ?>
                                <img src="./img/09.png" alt="wallpaper09">
                                <label for="wallpaper09" class="form-check-label w-100 text-center mt-2">紫タイル</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_10"): ?>
                                <img src="./img/10.png" alt="wallpaper10">
                                <label for="img_wall_10" class="form-check-label w-100 text-center mt-2">芝生</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper2'] == "img_wall_11"): ?>
                                <img src="./img/11.png" alt="wallpaper11">
                                <label for="img_wall_11" class="form-check-label w-100 text-center mt-2">畳</label>
                            <?php endif; ?>
                        </div>
                        <div class="col-1">サイズ</div>
                        <div class="col-5">
                            タテ <?= $_POST['height2'];?> cm × ヨコ <?= $_POST['width2'];?> cm
                        </div>
                    </div>
                </div>
                <input type="hidden" name="wallpaper2" value="<?= $_POST['wallpaper2'];?>">
                <input type="hidden" name="height2" value="<?= $_POST['height2'];?>">
                <input type="hidden" name="width2" value="<?= $_POST['width2'];?>">
            <?php endif; ?>
            <?php if (!empty($_POST['wallpaper3'])): ?>
                <hr>
                <div class="productInfo mx-5">
                    <div class="row">
                        <div class="col-3">柄・デザイン (3枚目)</div>
                        <div class="col-2 designPics">
                            <?php if ($_POST['wallpaper3'] == "img_wall_01"): ?>
                                <img src="./img/01.png" alt="wallpaper01">
                                <label for="wallpaper01" class="form-check-label w-100 text-center mt-2">くまもん</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_02"): ?>
                                <img src="./img/02.png" alt="wallpaper02">
                                <label for="wallpaper02" class="form-check-label w-100 text-center mt-2">白</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_03"): ?>
                                <img src="./img/03.png" alt="wallpaper03">
                                <label for="wallpaper03" class="form-check-label w-100 text-center mt-2">木目調</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_04"): ?>
                                <img src="./img/04.png" alt="wallpaper04">
                                <label for="wallpaper04" class="form-check-label w-100 text-center mt-2">白レンガ</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_05"): ?>
                                <img src="./img/05.png" alt="wallpaper05">
                                <label for="wallpaper05" class="form-check-label w-100 text-center mt-2">金</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_06"): ?>
                                <img src="./img/06.png" alt="wallpaper06">
                                <label for="wallpaper06" class="form-check-label w-100 text-center mt-2">大理石</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_07"): ?>
                                <img src="./img/07.png" alt="wallpaper07">
                                <label for="wallpaper07" class="form-check-label w-100 text-center mt-2">カラー木目</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_08"): ?>
                                <img src="./img/08.png" alt="wallpaper08">
                                <label for="wallpaper08" class="form-check-label w-100 text-center mt-2">太陽</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_09"): ?>
                                <img src="./img/09.png" alt="wallpaper09">
                                <label for="wallpaper09" class="form-check-label w-100 text-center mt-2">紫タイル</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_10"): ?>
                                <img src="./img/10.png" alt="wallpaper10">
                                <label for="img_wall_10" class="form-check-label w-100 text-center mt-2">芝生</label>
                            <?php endif; ?>
                            <?php if ($_POST['wallpaper3'] == "img_wall_11"): ?>
                                <img src="./img/11.png" alt="wallpaper11">
                                <label for="img_wall_11" class="form-check-label w-100 text-center mt-2">畳</label>
                            <?php endif; ?>
                        </div>
                        <div class="col-1">サイズ</div>
                        <div class="col-5">
                            タテ <?= $_POST['height3'];?> cm × ヨコ <?= $_POST['width3'];?> cm
                        </div>
                    </div>
                </div>
                <input type="hidden" name="wallpaper3" value="<?= $_POST['wallpaper3'];?>">
                <input type="hidden" name="height3" value="<?= $_POST['height3'];?>">
                <input type="hidden" name="width3" value="<?= $_POST['width3'];?>">
            <?php endif; ?>
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">お客様情報</label>
            <div class="cutomerInfo mx-5">
                <div class="row">
                    <div class="col-2">お名前</div>
                    <div class="col-5">
                        <?= $_POST['lastname'];?> <?= $_POST['firstname'];?> 様
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">カナ</div>
                    <div class="col-5">
                        <?= $_POST['lastname_kana'];?> <?= $_POST['firstname_kana'];?> サマ
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">住所</div>
                    <div class="col-5">
                        <?= $_POST['address'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">電話番号</div>
                    <div class="col-5">
                        <?= $_POST['phone'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">メールアドレス</div>
                    <div class="col-5">
                        <?= $_POST['mail'];?>
                    </div>
                </div>
            </div>
            <input type="hidden" name="lastname" value="<?= $_POST['lastname'];?>">
            <input type="hidden" name="firstname" value="<?= $_POST['firstname'];?>">
            <input type="hidden" name="lastname_kana" value="<?= $_POST['lastname_kana'];?>">
            <input type="hidden" name="firstname_kana" value="<?= $_POST['firstname_kana'];?>">
            <input type="hidden" name="address" value="<?= $_POST['address'];?>">
            <input type="hidden" name="phone" value="<?= $_POST['phone'];?>">
            <input type="hidden" name="mail" value="<?= $_POST['mail'];?>">
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">お支払方法</label>
            <?php if (isset($_POST['creditorbank']) && $_POST['creditorbank'] == "credit"):?>
                <div class="creditInfo mx-5">
                    <div class="row">
                        <div class="col-2">お支払方法</div>
                        <div class="col-5">クレジットカード</div>
                    </div>
                    <div class="row">
                    <div class="col-2">カード番号</div>
                        <div class="col-5">
                            <?= $_POST['first'] . '-' . $_POST['second'] . '-' . $_POST['third'] . '-' . $_POST['fourth'];?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">名前</div>
                        <div class="col-5"><?= $_POST['cardname']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-2">有効期限</div>
                        <div class="col-5"><?= $_POST['exmonth'] . ' / ' . $_POST['exyear']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-2">CSV番号</div>
                        <div class="col-5">●●●</div>
                    </div>
                </div>
                <input type="hidden" name="creditorbank" value="<?= $_POST['creditorbank'];?>">
                <input type="hidden" name="first" value="<?= $_POST['first'];?>">
                <input type="hidden" name="second" value="<?= $_POST['second'];?>">
                <input type="hidden" name="third" value="<?= $_POST['third'];?>">
                <input type="hidden" name="fourth" value="<?= $_POST['fourth'];?>">
                <input type="hidden" name="cardname" value="<?= $_POST['cardname'];?>">
                <input type="hidden" name="exmonth" value="<?= $_POST['exmonth'];?>">
                <input type="hidden" name="exyear" value="<?= $_POST['exyear'];?>">
                <input type="hidden" name="seccode" value="<?= $_POST['seccode'];?>">
            <?php endif;?>
            <?php if (isset($_POST['creditorbank']) && $_POST['creditorbank'] == "bank"):?>
                <div class="col-2">銀行振り込み</div>
                <input type="hidden" name="bank" value="<?= $_POST['bank'];?>">
            <?php endif;?>
        <hr>
        <div class="row">
            <div class="offset-6 col-1">金額</div>
            <div class="col-5">
                <span id="amount"></span>
                <input type="hidden" name="amount">
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center mt-3 mb-5">
            <input type="hidden" name="btn_submit" value="1">
            <button type="button" onclick="history.back()" class="btn btn-light mx-2">戻る</button>
            <button type="submit" class="btn btn-light">購入する</button>
        </div>
        <?php else: ?>
            <?php
                $uri = "index.php";
                header("Location: ".$uri, true, 303);
            ?>
        <?php endif; ?>
    </form>
</div>
<?php
include('./common/downer_html.php');
?>