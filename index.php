<?php
include('./common/upper_html.php');
?>
<div class="application-form container">
    <form action="confirm.php" method="post">
        <h1 class="main-title text-center my-5">ご注文</h1>

        <div class="orderer-section">
            <label class="orderer-label mt-3 mb-1 px-4 d-flex">商品情報</label>
            
            <div class="productInfo mx-5 my-3" id="wall1">
                <label for="design" class="">柄・デザイン (<span id="wall_count">1</span>枚目)</label>
                <div class="row align-items-center  mx-5">
                    <div class="col-2 designPics">
                        <img src="./img/01.png" alt="wallpaper01" onclick="wall1(this)" class="wall1_img" id="img_wall_01">
                        <label for="wallpaper01" class="form-check-label w-100 text-center mt-2">くまもん</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/02.png" alt="wallpaper02" onclick="wall1(this)" class="wall1_img" id="img_wall_02">
                        <label for="wallpaper02" class="form-check-label w-100 text-center mt-2">白</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/03.png" alt="wallpaper03" onclick="wall1(this)" class="wall1_img" id="img_wall_03">
                        <label for="wallpaper03" class="form-check-label w-100 text-center mt-2">木目調</label>
                    </div>

                    <div class="col-2 designPics">
                        <img src="./img/04.png" alt="wallpaper04" onclick="wall1(this)" class="wall1_img" id="img_wall_04">
                        <label for="wallpaper04" class="form-check-label w-100 text-center mt-2">白レンガ</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/05.png" alt="wallpaper05" onclick="wall1(this)" class="wall1_img" id="img_wall_05">
                        <label for="wallpaper05" class="form-check-label w-100 text-center mt-2">金</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/06.png" alt="wallpaper06" onclick="wall1(this)" class="wall1_img" id="img_wall_06">
                        <label for="wallpaper06" class="form-check-label w-100 text-center mt-2">大理石</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/07.png" alt="wallpaper07" onclick="wall1(this)" class="wall1_img" id="img_wall_07">
                        <label for="wallpaper07" class="form-check-label w-100 text-center mt-2">カラー木目</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/08.png" alt="wallpaper08" onclick="wall1(this)" class="wall1_img" id="img_wall_08">
                        <label for="wallpaper08" class="form-check-label w-100 text-center mt-2">太陽</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/09.png" alt="wallpaper09" onclick="wall1(this)" class="wall1_img" id="img_wall_09">
                        <label for="wallpaper09" class="form-check-label w-100 text-center mt-2">紫タイル</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/10.png" alt="wallpaper10" onclick="wall1(this)" class="wall1_img" id="img_wall_10">
                        <label for="wallpaper10" class="form-check-label w-100 text-center mt-2">芝生</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/11.png" alt="wallpaper11" onclick="wall1(this)" class="wall1_img" id="img_wall_11">
                        <label for="wallpaper11" class="form-check-label w-100 text-center mt-2">畳</label>
                    </div>
                </div>
                <input type="hidden" name="wallpaper1" id="wallpaper1"><br>
                <label for="size" class="">サイズ</label>
                <div class="row mx-5">
                    <div class="col-2">
                        <span>タテ</span>
                        <input type="number" id="height1" name="height1" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                    <div class="col-1 text-center">×</div>
                    <div class="col-2">
                        <span>ヨコ</span>
                        <input type="number" id="width1" name="width1" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                </div>
            </div>

            <div class="productInfo mx-5 my-3" id="wall2" style="display: none;">
                <hr>
                <label for="design" class="">柄・デザイン (<span id="wall_count">2</span>枚目)</label>
                <div class="row align-items-center  mx-5">
                    <div class="col-2 designPics">
                        <img src="./img/01.png" alt="wallpaper01" onclick="wall2(this)" class="wall2_img" id="img_wall_01">
                        <label for="wallpaper01" class="form-check-label w-100 text-center mt-2">くまもん</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/02.png" alt="wallpaper02" onclick="wall2(this)" class="wall2_img" id="img_wall_02">
                        <label for="wallpaper02" class="form-check-label w-100 text-center mt-2">白</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/03.png" alt="wallpaper03" onclick="wall2(this)" class="wall2_img" id="img_wall_03">
                        <label for="wallpaper03" class="form-check-label w-100 text-center mt-2">木目調</label>
                    </div>

                    <div class="col-2 designPics">
                        <img src="./img/04.png" alt="wallpaper04" onclick="wall2(this)" class="wall2_img" id="img_wall_04">
                        <label for="wallpaper04" class="form-check-label w-100 text-center mt-2">白レンガ</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/05.png" alt="wallpaper05" onclick="wall2(this)" class="wall2_img" id="img_wall_05">
                        <label for="wallpaper05" class="form-check-label w-100 text-center mt-2">金</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/06.png" alt="wallpaper06" onclick="wall2(this)" class="wall2_img" id="img_wall_06">
                        <label for="wallpaper06" class="form-check-label w-100 text-center mt-2">大理石</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/07.png" alt="wallpaper07" onclick="wall2(this)" class="wall2_img" id="img_wall_07">
                        <label for="wallpaper07" class="form-check-label w-100 text-center mt-2">カラー木目</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/08.png" alt="wallpaper08" onclick="wall2(this)" class="wall2_img" id="img_wall_08">
                        <label for="wallpaper08" class="form-check-label w-100 text-center mt-2">太陽</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/09.png" alt="wallpaper09" onclick="wall2(this)" class="wall2_img" id="img_wall_09">
                        <label for="wallpaper09" class="form-check-label w-100 text-center mt-2">紫タイル</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/10.png" alt="wallpaper10" onclick="wall2(this)" class="wall2_img" id="img_wall_10">
                        <label for="wallpaper10" class="form-check-label w-100 text-center mt-2">芝生</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/11.png" alt="wallpaper11" onclick="wall2(this)" class="wall2_img" id="img_wall_11">
                        <label for="wallpaper11" class="form-check-label w-100 text-center mt-2">畳</label>
                    </div>
                </div>
                <input type="hidden" name="wallpaper2" id="wallpaper2"><br>
                <label for="size" class="">サイズ</label>
                <div class="row mx-5">
                    <div class="col-2">
                        <span>タテ</span>
                        <input type="number" id="height2" name="height2" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                    <div class="col-1 text-center">×</div>
                    <div class="col-2">
                        <span>ヨコ</span>
                        <input type="number" id="width2" name="width2" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                </div>
            </div>

            <div class="productInfo mx-5 my-3" id="wall3" style="display: none;">
                <hr>
                <label for="design" class="">柄・デザイン (<span id="wall_count">3</span>枚目)</label>
                <div class="row align-items-center  mx-5">
                    <div class="col-2 designPics">
                        <img src="./img/01.png" alt="wallpaper01" onclick="wall3(this)" class="wall3_img" id="img_wall_01">
                        <label for="wallpaper01" class="form-check-label w-100 text-center mt-2">くまもん</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/02.png" alt="wallpaper02" onclick="wall3(this)" class="wall3_img" id="img_wall_02">
                        <label for="wallpaper02" class="form-check-label w-100 text-center mt-2">白</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/03.png" alt="wallpaper03" onclick="wall3(this)" class="wall3_img" id="img_wall_03">
                        <label for="wallpaper03" class="form-check-label w-100 text-center mt-2">木目調</label>
                    </div>

                    <div class="col-2 designPics">
                        <img src="./img/04.png" alt="wallpaper04" onclick="wall3(this)" class="wall3_img" id="img_wall_04">
                        <label for="wallpaper04" class="form-check-label w-100 text-center mt-2">白レンガ</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/05.png" alt="wallpaper05" onclick="wall3(this)" class="wall3_img" id="img_wall_05">
                        <label for="wallpaper05" class="form-check-label w-100 text-center mt-2">金</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/06.png" alt="wallpaper06" onclick="wall3(this)" class="wall3_img" id="img_wall_06">
                        <label for="wallpaper06" class="form-check-label w-100 text-center mt-2">大理石</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/07.png" alt="wallpaper07" onclick="wall3(this)" class="wall3_img" id="img_wall_07">
                        <label for="wallpaper07" class="form-check-label w-100 text-center mt-2">カラー木目</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/08.png" alt="wallpaper08" onclick="wall3(this)" class="wall3_img" id="img_wall_08">
                        <label for="wallpaper08" class="form-check-label w-100 text-center mt-2">太陽</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/09.png" alt="wallpaper09" onclick="wall3(this)" class="wall3_img" id="img_wall_09">
                        <label for="wallpaper09" class="form-check-label w-100 text-center mt-2">紫タイル</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/10.png" alt="wallpaper10" onclick="wall3(this)" class="wall3_img" id="img_wall_10">
                        <label for="wallpaper10" class="form-check-label w-100 text-center mt-2">芝生</label>
                    </div>
                    <div class="col-2 designPics">
                        <img src="./img/11.png" alt="wallpaper11" onclick="wall3(this)" class="wall3_img" id="img_wall_11">
                        <label for="wallpaper11" class="form-check-label w-100 text-center mt-2">畳</label>
                    </div>
                </div>
                <input type="hidden" name="wallpaper3" id="wallpaper3"><br>
                <label for="size" class="">サイズ</label>
                <div class="row mx-5">
                    <div class="col-2">
                        <span>タテ</span>
                        <input type="number" id="height3" name="height3" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                    <div class="col-1 text-center">×</div>
                    <div class="col-2">
                        <span>ヨコ</span>
                        <input type="number" id="width3" name="width3" class="sizenumber" value="100">
                        <span>cm</span>
                    </div>
                </div>
            </div>

            <button type="button" class="diffwall btn btn-danger" onclick="diffwall();" style="display: none;" id="btndiffwall"> × 上の商品をキャンセル</button>
            <button type="button" class="addwall btn btn-primary" onclick="addwall();" style="display: block;" id="btnaddwall">+ 追加</button>
            <span>※一度で3枚まで購入可能です</span>

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