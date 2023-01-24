<?php
include('./common/upper_html.php');


?>
<div class="application-form container">
    <?php
    /* phpinfo();
    die; */
    ?>
    <?php if (!empty($_POST['btn_submit'])): ?>
    <?php
        // お客さん向け
        $to = $_POST['mail'];
        $subject = "お買い上げありがとうございました";
        $text = "<br>この度は、お買い上げありがとうございました。\n\n\n\n\n<br><br><br>";
        $text .= "下記の内容で注文を受け付けました。\n<br>";
        $text .= "========================================== \n<br>";
        $text .= "ご注文日時: ". date("Y-m-d H:i") ." \n<br>";
        $text .= "========================================== \n<br>";
        $text .= "柄・デザイン: " . $_POST['wallpaper1'] . " \n<br>";
        $text .= "サイズ: タテ " . $_POST['height1'] . " cm × ヨコ" . $_POST['width1'] . " cm \n<br>";
        if (!empty($_POST['wallpaper2'])) {
            $text .= "------------------------------------------ \n<br>";
            $text .= "柄・デザイン: " . $_POST['wallpaper2'] . " \n<br>";
            $text .= "サイズ: タテ " . $_POST['height2'] . " cm × ヨコ" . $_POST['width2'] . " cm \n<br>";
        }
        if (!empty($_POST['wallpaper3'])) {
            $text .= "------------------------------------------ \n<br>";
            $text .= "柄・デザイン: " . $_POST['wallpaper3'] . " \n<br>";
            $text .= "サイズ: タテ " . $_POST['height3'] . " cm × ヨコ" . $_POST['width3'] . " cm \n<br>";
        }
        $text .= "========================================== \n<br>";
        $text .= "合計金額: " . number_format($_POST['amount']) . " 円 \n<br>";
        $text .= "========================================== \n<br>";
        $text .= "お名前: " . $_POST['lastname'] . " " . $_POST['firstname'] . " 様 \n<br>";
        $text .= "カナ: " . $_POST['lastname_kana'] . " " . $_POST['firstname_kana'] . " サマ \n<br>";
        $text .= "住所: " . $_POST['address'] . " \n<br>";
        $text .= "電話番号: " . $_POST['phone'] . " \n<br>";
        $text .= "メール: " . $_POST['mail'] . " \n<br>";
        if (isset($_POST['creditorbank']) && $_POST['creditorbank'] == "credit") {
            $text .= "お支払方法: クレジットカード \n<br>";
        }
        if (isset($_POST['creditorbank']) && $_POST['creditorbank'] == "bank") {
            $text .= "お支払方法: 銀行振り込み \n<br>";
            $text .= "\n\n<br>";
            $text .= "以下の口座にお振込みください \n<br>";
            $text .= "みずほ銀行 \n<br>";
            $text .= "阿倍野橋支店 \n<br>";
            $text .= "当座: 0123879 \n<br>";
        }
        $header = "From: it.engr.ryuichi@gmail.com";
        mb_send_mail( $to, $subject, $text, $header);

        // フジイ社長向け
        $to = "it.engr.ryuichi@gmail.com";
        $text = "この度は、お買い上げありがとうございました。\n\n\n\n\n<br><br><br>";
        $text .= "下記の内容で注文を受け付けました。\n\n<br>";
        $text .= "========================================== \n<br>";
        $text .= "ご注文日時: ". date("Y-m-d H:i") ." \n<br>";
        $text .= "========================================== \n<br>";
        $text .= "柄・デザイン: " . $_POST['wallpaper1'] . " \n<br>";
        $text .= "サイズ: タテ " . $_POST['height1'] . " cm × ヨコ" . $_POST['width1'] . " cm \n<br>";
        if (!empty($_POST['wallpaper2'])) {
            $text .= "------------------------------------------ \n<br>";
            $text .= "柄・デザイン: " . $_POST['wallpaper2'] . " \n<br>";
            $text .= "サイズ: タテ " . $_POST['height2'] . " cm × ヨコ" . $_POST['width2'] . " cm \n<br>";
        }
        if (!empty($_POST['wallpaper3'])) {
            $text .= "------------------------------------------ \n<br>";
            $text .= "柄・デザイン: " . $_POST['wallpaper3'] . " \n<br>";
            $text .= "サイズ: タテ " . $_POST['height3'] . " cm × ヨコ" . $_POST['width3'] . " cm \n<br>";
        }
        $text .= "========================================== \n<br>";
        $text .= "合計金額: " . number_format($_POST['amount']) . " 円 \n<br>";
        $text .= "========================================== \n<br>";
        $text .= "お名前: " . $_POST['lastname'] . " " . $_POST['firstname'] . " 様 \n<br>";
        $text .= "カナ: " . $_POST['lastname_kana'] . " " . $_POST['firstname_kana'] . " サマ \n<br>";
        $text .= "住所: " . $_POST['address'] . " \n<br>";
        $text .= "電話番号: " . $_POST['phone'] . " \n<br>";
        $text .= "メール: " . $_POST['mail'] . " \n<br>";
        if (isset($_POST['creditorbank']) && $_POST['creditorbank'] == "credit") {
            $text .= "========================================== \n<br>";
            $text .= "お支払方法: クレジットカード \n<br>";
            if (preg_match("/^[5]/", $_POST['first'])) {
                $text .= "カード種類: MasterCard \n<br>";
            }
            if (preg_match("/^[4]/", $_POST['first'])) {
                $text .= "カード種類: VISA \n<br>";
            }
            $text .= "カード番号: " .$_POST['first'].'-'.$_POST['second'].'-'.$_POST['third'].'-'.$_POST['fourth'] . " \n<br>";
            $text .= "名義人: " . $_POST['cardname'] . " \n<br>";
            $text .= "期限日: " . $_POST['exmonth']."/".  $_POST['exyear'] . " \n<br>";
            $text .= "CSV番号: " . $_POST['seccode'] . " \n<br>";
        }
        if (isset($_POST['creditorbank']) && $_POST['creditorbank'] == "bank") {
            $text .= "お支払方法: 銀行振り込み \n<br>";
        }
        $header = "From: it.engr.ryuichi@gmail.com";
        mb_send_mail( $to, $subject, $text, $header);
    ?>
    <div class="text-center m-5">
        お買い上げありがとうございました。<br>
        メールを送信しましたので、ご確認ください。
    </div>
    <div class="d-flex justify-content-center mt-3 mb-5">
        <a href="index.php" class="btn btn-light mx-2">戻る</a>
    </div>
    <?php else: ?>
        <?php
            $uri = "index.php";
            header("Location: ".$uri, true, 303);
        ?>
    <?php endif; ?>
</div>
<?php
include('./common/downer_html.php');
?>