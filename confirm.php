<?php
include('./common/upper_html.php');
?>
<div class="application-form container">
    <form action="complete.php" method="post">
        <h1 class="main-title text-center my-5">ご注文確認</h1>
        
        <?php if (!empty($_POST['btn_confirm'])): ?>
        <div class="orderer-section">
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">商品情報</label>
            <div class="productInfo mx-5">
                <div class="row">
                    <div class="col-2">種類</div>
                    <div class="col-5">ウォールペーパー</div>
                </div>
                <div class="row">
                    <div class="col-2">柄・デザイン</div>
                    <div class="col-5">くまもん</div>
                </div>
                <div class="row">
                    <div class="col-2">サイズ</div>
                    <div class="col-5">
                        タテ <?= $_POST['height'];?> cm × ヨコ <?= $_POST['width'];?> cm
                    </div>
                </div>
            </div>
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
            <input type="hidden" name="height" value="<?= $_POST['height'];?>">
            <input type="hidden" name="width" value="<?= $_POST['width'];?>">
            <input type="hidden" name="lastname" value="<?= $_POST['lastname'];?>">
            <input type="hidden" name="firstname" value="<?= $_POST['firstname'];?>">
            <input type="hidden" name="lastname_kana" value="<?= $_POST['lastname_kana'];?>">
            <input type="hidden" name="firstname_kana" value="<?= $_POST['firstname_kana'];?>">
            <input type="hidden" name="address" value="<?= $_POST['address'];?>">
            <input type="hidden" name="phone" value="<?= $_POST['phone'];?>">
            <input type="hidden" name="mail" value="<?= $_POST['mail'];?>">
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">お支払方法</label>
            <?php if (isset($_POST['credit']) && $_POST['credit'] == "on"):?>
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
                <input type="hidden" name="credit" value="<?= $_POST['credit'];?>">
                <input type="hidden" name="first" value="<?= $_POST['first'];?>">
                <input type="hidden" name="second" value="<?= $_POST['second'];?>">
                <input type="hidden" name="third" value="<?= $_POST['third'];?>">
                <input type="hidden" name="fourth" value="<?= $_POST['fourth'];?>">
                <input type="hidden" name="cardname" value="<?= $_POST['cardname'];?>">
                <input type="hidden" name="exmonth" value="<?= $_POST['exmonth'];?>">
                <input type="hidden" name="exyear" value="<?= $_POST['exyear'];?>">
                <input type="hidden" name="seccode" value="<?= $_POST['seccode'];?>">
            <?php endif;?>
            <?php if (isset($_POST['bank']) &&$_POST['bank'] == "on"):?>
                <div class="col-2">銀行振り込み</div>
                <input type="hidden" name="bank" value="<?= $_POST['bank'];?>">
            <?php endif;?>
        <hr>
        <div class="row">
            <div class="offset-6 col-1">金額</div>
            <div class="col-5">5000 円</div>
        </div>
        <hr>
        <div class="d-flex justify-content-center mt-3 mb-5">
            <input type="hidden" name="btn_submit" value="1">
            <button type="button" onclick="history.back()" class="btn btn-light mx-2">戻る</button>
            <button type="submit" class="btn btn-light">次へ進む</button>
        </div>
        <?php endif; ?>
    </form>
</div>
<?php
include('./common/downer_html.php');
?>