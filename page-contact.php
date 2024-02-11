<?php get_header(); ?>
<main>
	<div class="form">
		<div class="contact__img"><?php echo get_template_directory_uri('/img/recipe.jpg'); ?></div>
  <?php echo do_shortcode('[contact-form-7 id="863499d" title="テスト問い合わせフォーム"]'); ?>

	</div>
</main>
<?php get_footer(); ?>