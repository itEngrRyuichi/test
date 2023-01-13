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
        $text = "この度は、お買い上げありがとうございました。\n";
        $text .= "下記の内容で注文を受け付けました。\n\n";
        $text .= "ご注文日時: ". date("Y-m-d H:i") ." \n";
        $text .= "商品: ウォールペーパー \n";
        $text .= "柄・デザイン: くまもん \n";
        $text .= "サイズ: タテ " . $_POST['height'] . " cm × ヨコ" . $_POST['width'] . " cm \n";
        $text .= "お名前: " . $_POST['lastname'] . " " . $_POST['firstname'] . " 様 \n";
        $text .= "カナ: " . $_POST['lastname_kana'] . " " . $_POST['firstname_kana'] . " サマ \n";
        $text .= "住所: " . $_POST['address'] . " \n";
        $text .= "電話番号: " . $_POST['phone'] . " \n";
        $text .= "メール: " . $_POST['mail'] . " \n";
        if (isset($_POST['credit']) && $_POST['credit'] == "on") {
            $text .= "お支払方法: クレジットカード \n";
        }
        if (isset($_POST['bank']) && $_POST['bank'] == "on") {
            $text .= "お支払方法: 銀行振り込み \n";
            $text .= "\n\n";
            $text .= "以下の口座にお振込みください \n";
            $text .= "みずほ銀行 \n";
            $text .= "阿倍野橋支店 \n";
            $text .= "当座: 0123879 \n";
        }
        $text .= "金額: 5000 円 \n";
        $header = "From: it.engr.ryuichi@gmail.com";
        mb_send_mail( $to, $subject, $text, $header);

        // フジイ社長向け
        $to = "it.engr.ryuichi@gmail.com";
        $text = "この度は、お買い上げありがとうございました。\n";
        $text .= "下記の内容で注文を受け付けました。\n\n";
        $text .= "ご注文日時: ". date("Y-m-d H:i") ." \n";
        $text .= "商品: ウォールペーパー \n";
        $text .= "柄・デザイン: くまもん \n";
        $text .= "サイズ: タテ " . $_POST['height'] . " cm × ヨコ" . $_POST['width'] . " cm \n";
        $text .= "お名前: " . $_POST['lastname'] . " " . $_POST['firstname'] . " 様 \n";
        $text .= "カナ: " . $_POST['lastname_kana'] . " " . $_POST['firstname_kana'] . " サマ \n";
        $text .= "住所: " . $_POST['address'] . " \n";
        $text .= "電話番号: " . $_POST['phone'] . " \n";
        $text .= "メール: " . $_POST['mail'] . " \n";
        if (isset($_POST['credit']) && $_POST['credit'] == "on") {
            $text .= "お支払方法: クレジットカード \n";
            $text .= "カード番号: " .$_POST['first'].'-'.$_POST['second'].'-'.$_POST['third'].'-'.$_POST['fourth'] . " \n";
            $text .= "名義人: " . $_POST['cardname'] . " \n";
            $text .= "期限日: " . $_POST['exmonth']."/".  $_POST['exyear'] . " \n";
            $text .= "CSV番号: " . $_POST['seccode'] . " \n";
        }
        if (isset($_POST['bank']) && $_POST['bank'] == "on") {
            $text .= "お支払方法: 銀行振り込み \n";
        }
        $text .= "金額: 5000 円 \n";
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
    <?php endif; ?>
</div>
<?php
include('./common/downer_html.php');
?>