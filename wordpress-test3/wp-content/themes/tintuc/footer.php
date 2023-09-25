<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tintuc
 */

?>
<style>
	.main-footer {
		background: rgba(17, 17, 17, 1);
		padding-top: 30px;
	}

	.footer .container {
		max-width: 1200px;
	}

	.footer>.container>.row {
		border-bottom: 1px solid #333333;
		padding: 20px 0 30px 0;
	}

	.logo-footer {
		margin-bottom: 20px;
	}

	.logo-footer img {
		max-width: 230px;
		padding: 5px 0;
		margin-bottom: 20px;
	}

	.logo-footer>p {
		color: #fff;
		padding-right: 15px;
		letter-spacing: 1px;
		line-height: 24px;
		font-size: 14px;
	}

	.footer-info i {
		font-size: 24px;
		color: #fff;
		padding: 10px;
	}

	.footer-end .container {
		max-width: 1200px;
	}

	.footer-end-contenr p {
		color: #fff;
		font-size: 13px;
	}

	.footer-end {
		padding: 20px 0;
	}

	.title-footer>h3 {
		font-size: 17px;
		color: #fff;
		font-weight: 700;
		padding-bottom: 37px;
	}

	.img-blog-small .img-news>img {
		width: 90px;
		height: 62px;
	}

	.item-blogs {
		display: flex;
	}

	.info-small {
		padding: 0 0 0 10px;
		width: 292px;
	}

	a.title-link {
		font-size: 15px;
		color: #fff;
		font-weight: 500;
	}

	.item-blogs {
		padding-bottom: 20px;
	}

	.item-blogs .img-blog-small img.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
		transform: scale(1);
		transition: all 0.3s linear;
	}

	.item-blogs:hover .img-blog-small img.attachment-post-thumbnail.size-post-thumbnail.wp-post-image {
		transform: scale(1.5);
	}

	.img-blog-small {
		overflow: hidden;
		height: 62px;
	}
</style>
<div class="main-footer">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo-footer">
						<img src="https://tintuc-01.web4s.vn/uploads/plugin/custom_img/2018-10-16/1539683663-1360476189-custom.png" alt="">
						<p>Mauris elementum accumsan leo vel tempor. Sit amet cursus nisl aliquam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla</p>
					</div>
					<div class="footer-info">
						<i class="fa-brands fa-facebook"></i>
						<i class="fa-brands fa-twitter"></i>
						<i class="fa-brands fa-google"></i>
						<i class="fa-brands fa-pinterest-p"></i>
					</div>
				</div>
				<div class="col-md-8">
					<div class="title-footer">
						<h3>BÀI ĐĂNG GẦN ĐÂY</h3>
					</div>
					<div class="block-news">
						<div class="row">
							<?php
							$args = array(
								'category_name' => 'van-hoa-giai-tri_trangchu2',
								'post_type' => 'post',
								// 'posts_per_page' => 6,
							);
							$my_query = new WP_Query($args);
							if ($my_query->have_posts()) {
								while ($my_query->have_posts()) {
									$my_query->the_post();
									echo '<div class="item-blogs col-6"><div class="img-blog-small"><a class="img-news" href="';
									echo get_post_permalink();
									echo '">';
									echo get_the_post_thumbnail();
									echo '</a></div><div class="info-small"><div class="title-blogs-item"><a class="title-link" href="';
									echo get_post_permalink();
									echo '">';
									echo get_the_excerpt();
									echo '</a></div><div class="more-blogs"><i class="fa-regular fa-clock"></i>';
									echo get_the_time();
									echo '<spam> - </spam>';
									echo get_the_date();
									echo '</div>';
									echo '</div></div>';
								}
							} else {
							}
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-end">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-end-contenr">
						<p>Copyright by Web4s.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>

</html>