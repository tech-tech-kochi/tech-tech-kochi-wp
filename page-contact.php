<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
<main class="main">
    <div class="page-title-container">
        <h2 class="page-title fc-wht fs-32px">お問い合わせ</h2>
    </div>
    <div class="container">
        <div class="form">
            <div class="form-item flex">
                <p class="form-item-label"><span class="form-item-label-required fc-wht">必須</span>氏名</p>
                <input type="text" class="form-item-input" placeholder="例）テクテク太郎">
            </div>
            <div class="form-item flex">
                <p class="form-item-label"><span class="form-item-label-any fc-wht">任意</span>会社名</p>
                <input type="text" class="form-item-input" placeholder="例）株式会社テクテク高知">
            </div>

            <div class="form-item flex">
                <p class="form-item-label"><span class="form-item-label-any fc-wht">任意</span>電話番号</p>
                <input type="text" class="form-item-input" placeholder="例）000-0000-0000">
            </div>

            <div class="form-item flex">
                <p class="form-item-label"><span class="form-item-label-required fc-wht">必須</span>メールアドレス</p>
                <input type="email" class="form-item-input" placeholder="例）example@gmail.com">
            </div>

            <div class="form-item flex">
                <p class="form-item-label"><span class="form-item-label-required fc-wht">必須</span>件名</p>
                <select class="form-item-input" name="件名">
                    <option value="">-- 選択してください --</option>
                    <option value="メンバー募集について">メンバー募集について</option>
                    <option value="勉強会について">勉強会について</option>
                    <option value="お仕事のご依頼について">お仕事のご依頼について</option>
                    <option value="メンバーのスカウト">メンバーのスカウト</option>
                    <option value="その他">その他</option>
                </select>    
            </div>

            <div class="form-item flex">
                <p class="form-item-label isMsg"><span class="form-item-label-required fc-wht">必須</span>お問い合わせ内容</p>
                <textarea class="form-item-textarea"></textarea>
            </div>
            <input type="submit" class="form-btn" value="送信する >>">
        </div>

    </div>


</main>








<?php get_footer(); ?>
