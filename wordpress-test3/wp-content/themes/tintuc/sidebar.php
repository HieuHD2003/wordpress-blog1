<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tintuc
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>
<div class="sidebar">
	<div class="container">
		<div class="row">
			<div class="sidebar-row sidebar-row-1">
				<p>- Quảng cáo -</p>
			</div>
			<div class="sidebar-row sidebar-row-2">
				<img src="https://tintuc-01.web4s.vn/uploads/plugin/custom_img/2018-10-11/1539270568-428316021-custom.png" alt="">
			</div>
			<div class="sidebar-row sidebar-row-3">
				<div class="sidebar-form-email">
					<div class="title-form-email">
						<h4 class="title-email">
							<span>ĐĂNG KÝ</span>
						</h4>
						<p class="content-form-email">Nhận các chương trình khuyến mãi mới nhất vào hộp thư của bạn.</p>
					</div>
					<div class="form-email">
						<input type="text" placeholder="Nhập thông tin đăng ký">
						<button class="btn-form-email">Gửi yêu cầu</button>
					</div>
				</div>
			</div>
			<div class="sidebar-row sidebar-row-4">
				<div class="post-sidebar">
					<div class="title-post-sidebar">
						<h2>
							<span>BÀI VIẾT PHÔT BIẾN</span>
						</h2>
					</div>
					<div class="row">
						<?php
						$args = array(
							'category_name' => 'van-hoa-giai-tri_trangchu2',
							'post_type' => 'post',
							'posts_per_page' => 2,
						);
						$my_query = new WP_Query($args);
						if ($my_query->have_posts()) {
							while ($my_query->have_posts()) {
								$my_query->the_post();
								echo '<div class="item-blogs "><div class="img-blog-small"><a class="img-news" href="';
								echo get_post_permalink();
								echo '">';
								echo get_the_post_thumbnail();
								echo '</a></div><div class="info-small"><div class="title-blogs-item"><a class="title-link1" href="';
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