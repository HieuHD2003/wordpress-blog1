<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                    <li class="active"> DU LỊCH - KHÁM PHÁ</li>
                </div>
            </div>
            <div class="text-center title-breadcrumb">
                <h1>
                    <span>Tin tức</span>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="content-row-31">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-sub-category"><i class="fa-regular fa-image"></i> Ảnh</h2>
                <div class="row">
                    <?php
                    $args = array(
                        'category_name' => 'khong-phan-loai',
                        'post_type' => 'post',
                        'posts_per_page' => 20,
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            echo '<div class="item-blogs1 item-blogs-tc col-4"><div class="img-blogs1">';
                            echo get_the_post_thumbnail();
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
