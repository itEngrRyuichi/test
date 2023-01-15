<?php
include('./common/upper_html.php');
?>
<div class="application-form container">
    <form action="confirm.php" method="post">
        <h1 class="main-title text-center my-5">ご注文</h1>

        <div class="orderer-section">
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">商品情報</label>
            <div class="productInfo mx-5">
                <label for="type" class="">種類</label>
                <div class="form-check mx-5">
                    <input type="radio" class="form-check-input" id="wallpaper" name="wallpaper" checked>
                    <label for="wallpaper" class="form-check-label">ウォールペーパー</label>
                </div>
                <label for="design" class="">柄・デザイン</label>
                <div class="row align-items-center">
                    <div class="col-3">
                        <div class="form-check mx-5">
                            <input type="radio" class="form-check-input" id="kumamon" name="kumamon" checked>
                            <label for="kumamon" class="form-check-label">くまもん</label>
                        </div>
                    </div>
                    <div class="col-7 designPics">
                        <img src="./img/kumamon.png" alt="くまモン壁紙01">
                    </div>
                </div>
                <label for="size" class="">サイズ</label>
                <div class="row mx-5">
                    <div class="col-2">
                        <span>タテ</span>
                        <input type="number" id="height" name="height" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                    <div class="col-1 text-center">×</div>
                    <div class="col-2">
                        <span>ヨコ</span>
                        <input type="number" id="width" name="width" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                </div>
            </div>
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">お客様情報</label>
            <div class="cutomerInfo mx-5">
                <div class="row mx-5 my-3">
                    <div class="col-3 d-grid">
                        <span>苗字</span>
                        <input type="text" id="lastname" name="lastname" class="lastname" placeholder="山田">
                    </div>
                    <div class="col-3 d-grid">
                        <span>名前</span>
                        <input type="text" id="firstname" name="firstname" class="firstname" placeholder="太郎">
                    </div>
                </div>
                <div class="row mx-5 my-3">
                    <div class="col-3 d-grid">
                        <span>苗字(カナ)</span>
                        <input type="text" id="lastname_kana" name="lastname_kana" class="lastname_kana" placeholder="ヤマダ">
                    </div>
                    <div class="col-3 d-grid">
                        <span>名前(カナ)</span>
                        <input type="text" id="firstname_kana" name="firstname_kana" class="firstname_kana" placeholder="タロウ">
                    </div>
                </div>
                <div class="row mx-5 my-3">
                    <div class="col-10">
                        <span>住所</span>
                        <input type="text" id="address" name="address" class="address w-100">
                    </div>
                    <div class="col-4 my-3">
                        <span>電話番号</span>
                        <input type="text" id="phone" name="phone" class="phone w-100">
                    </div>
                    <div class="col-6 my-3">
                        <span>メールアドレス</span>
                        <input type="mail" id="mail" name="mail" class="mail w-100">
                    </div>
                </div>
            </div>
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">お支払方法</label>
            <div class="order d-flex mx-5 my-3">
                <div class="form-check mx-3">
                    <input type="radio" class="form-check-input" id="credit" name="creditorbank" value="credit" checked onchange="creditform_on();" >
                    <label for="credit" class="form-check-label">クレジットカード</label>
                </div>
                <div class="form-check mx-3">
                    <input type="radio" class="form-check-input" id="bank" name="creditorbank" value="bank" onchange="creditform_off();">
                    <label for="bank" class="form-check-label">銀行振り込み</label>
                </div>
            </div>
            <div id="creditcard">
                <div class="creditInfo row mx-5 my-3">
                    <span class="d-flex mx-5">カード</span>
                    <div class="d-flex cardnumber mx-5">
                        <input type="text" id="first" class="cc-num" type="text" maxlength="4" name="first" placeholder="&#9679;&#9679;&#9679;&#9679;">
                        <input type="text" id="second" class="cc-num" type="text" maxlength="4" name="second" placeholder="&#9679;&#9679;&#9679;&#9679;">
                        <input type="text" id="third" class="cc-num" type="text" maxlength="4" name="third" placeholder="&#9679;&#9679;&#9679;&#9679;">
                        <input type="text" id="fourth" class="cc-num" type="text" maxlength="4" name="fourth" placeholder="&#9679;&#9679;&#9679;&#9679;">
                    </div>
                </div>
                <div class="creditInfo row mx-5 my-3">
                    <div class="col-6 mx-5">
                        <span>名前</span>
                        <input type="text" id="cardname" name="cardname" class="cardname w-100" placeholder="ヤマダ タロウ">
                    </div>
                    <div class="col-12"></div>
                    <div class="col-4 mx-5 my-3">
                        <span>有効期限</span>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" id="exmonth" name="exmonth" class="exmonth w-100" placeholder="01">
                            </div>
                            <div class="col-1">
                                <span>/</span>
                            </div>
                            <div class="col-6">
                                <input type="text" id="exyear" name="exyear" class="exyear w-100" placeholder="2026">
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mx-5 my-3">
                        <span>CSV番号</span>
                        <input type="text" id="seccode" name="seccode" class="seccode">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center mt-3 mb-5">
            <input type="hidden" name="btn_confirm" value="1">
            <button type="submit" class="btn btn-light">次へ進む</button>
        </div>
    </form>
</div>
<?php
include('./common/downer_html.php');
?>