<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tintuc
 */

get_header();
?>
<div class="content-row-10">
    <div class="container">
        <div class="row">
            <div class="link-breadcrumb">
                <div class="breadcrumb">
                    <li><a href=""></a>Trang chủ</li>
                    <li class="active"> BÀI VIẾT</li>
                </div>
            </div>
            <div class="text-center title-breadcrumb">
                <h1>
                    <span>Bài viết</span>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="single-duan">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<main id="primary" class="site-main">
					<div class="post">
						<h2 class="title-single"><?php the_title(); ?></h2>
						<div class="more-blogs"><i class="fa-regular fa-clock"></i><?php echo get_the_time(); ?><spam> - </spam><?php echo get_the_date(); ?></div>
						<div class="info-single1">
							<a class="info-single info-single-color1" href=""><i class="fa-brands fa-facebook"></i>Facebook</a>
							<a class="info-single info-single-color2" href=""><i class="fa-brands fa-twitter"></i>Twitter</a>
							<a class="info-single info-single-color3" href=""><i class="fa-solid fa-envelope"></i>Email</a>
							<a class="info-single info-single-color4" href=""><i class="fa-brands fa-pinterest"></i>Pinterest</a>
							<a class="info-single info-single-color5" href=""><i class="fa-solid fa-plus"></i>Thêm...</a>
						</div>
						<?php if (has_post_thumbnail()) : ?>
							<div class="post-thumbnail">
								<a href=""><?php echo get_the_post_thumbnail(); ?></a>
							</div>
						<?php endif; ?>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="single-footer">
						<h2 class="title-single-footer">Xu hướng mới</h2>
						<div class="row">
							<?php
							$args = array(
								'category_name' => 'van-hoa-giai-tri_trangchu1',
								'post_type' => 'post',
								// 'posts_per_page' => 6,
							);
							$my_query = new WP_Query($args);
							if ($my_query->have_posts()) {
								while ($my_query->have_posts()) {
									$my_query->the_post();
									echo '<div class="item-blogs1 col-6"><div class="img-blogs1"><a href="';
									echo get_post_permalink();
									echo '">';
									echo get_the_post_thumbnail();
									echo '</a></div><div class="info1"><div class="title-blogs-item1"><a class="title-link-top" href="';
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
				</main><!-- #main -->
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<div class="content-row-9">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="in-email">
                    <h4 class="title-email-news">
                        <span>Đăng ký</span>
                    </h4>
                    <p class="sub-title">Nhận các chương trình khuyến mãi mới nhất vào hộp thư của bạn.</p>
                </div>
                <div class="form-email-footer">
                    <input type="text" placeholder="Nhập thông tin đăng ký">
                    <button>Gửi yêu cầu</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
