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
                    <li class="active"> VĂN HÓA - GIẢI TRÍ</li>
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
<div class="content-row-52">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="tab-content-tintuc">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-1 list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home"><i class="fa-solid fa-list-ul"></i> Tin 1</a>
                            <a class="list-group-item list-group-item-1 list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fa-solid fa-list-ul"></i> Tin 2</a>
                        </div>
                    </div>
                    <div class="">
                    <div class="tab-content tab-content1" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'category_name' => 'van-hoa-giai-tri_trangchu2',
                                        'post_type' => 'post',
                                        'posts_per_page' => 6,
                                    );
                                    $my_query = new WP_Query($args);
                                    if ($my_query->have_posts()) {
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                            echo '<div class="item-blogs1 item-blogs-tc col-6"><div class="img-blogs1"><a href="';
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
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <?php
                                    $args = array(
                                        'category_name' => 'van-hoa-giai-tri_trangchu2',
                                        'post_type' => 'post',
                                        'posts_per_page' => 6,
                                    );
                                    $my_query = new WP_Query($args);
                                    if ($my_query->have_posts()) {
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                            echo '<div class="item-blogs-tintuc col-12"><div class="row"><div class="img-blogs-tintuc"><a href="';
                                            echo get_post_permalink();
                                            echo '">';
                                            echo get_the_post_thumbnail();
                                            echo '</a></div><div class="info-tintuc"><div class="title-blogs-item1"><a class="title-link-top-tintuc" href="';
                                            echo get_post_permalink();
                                            echo '">';
                                            echo get_the_title();
                                            echo '</a></div><div class="more-blogs"><i class="fa-regular fa-clock"></i>';
                                            echo get_the_time();
                                            echo '<spam> - </spam>';
                                            echo get_the_date();
                                            echo '</div>';
                                            echo '</div></div></div>';
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
            <div class="col-sm-4">
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