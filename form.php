<?php
include('./common/upper_html.php');
?>
<div class="application-form container">
    <form action="#">
        <h1 class="main-title text-center my-5">ご注文・お見積り依頼書</h1>
        <div class="orderAndQuotation-section d-flex justify-content-center">
            <div class="form-check mx-3">
                <input type="checkbox" class="form-check-input" id="order">
                <label for="order" class="form-check-label">ご注文</label>
            </div>
            <div class="form-check mx-3">
                <input type="checkbox" class="form-check-input" id="quotation">
                <label for="quotation" class="form-check-label">お見積り</label>
            </div>
        </div>
        <div class="orderer-section">
            <label class="orderer-label mt-3 mb-1 px-5 d-flex">発注者</label>
            <label class="print-title px-5">印刷物タイトル</label>
        </div>
    </form>
</div>
<?php
include('./common/downer_html.php');
?>