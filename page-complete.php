<?php get_header(); ?>
<main>
	<div class="contact">
		<div class="contact__fv">
		  <h1 class="contact__title">サンクスページ（完了画面）</h1>
		</div>
		<div class="contact__inner">
      <p class="contact__thanks">
        入力いただいた内容の送信が完了いたしました。<br>お問い合わせありがとうございます。担当者が確認次第、折返し連絡いたします。
      </p>
      <a href="<?php echo esc_url(home_url()); ?>" class="contact__button">トップページヘ戻る</a>
    </div>
	</div>
</main>
<?php get_footer(); ?>