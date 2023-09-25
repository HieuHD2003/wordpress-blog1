<?php

/**
 *template name: khac
 */

get_header();
?>
<div class="content-row-1">
    <div class="container">
        <div class="row">
            <div class="content-row-1_slider">
                <?php
                echo do_shortcode('[smartslider3 slider="3"]');
                ?>
            </div>
        </div>
    </div>
</div>
<div class="content-row-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 post-row2 tab-left">
                <div class="parent box-tab-left clearfix">
                    <div class="child img-tab-left">
                        <img src="https://tintuc-01.web4s.vn/uploads/plugin/news/10/1539270216-82892562-ng-i-b-mua-xuan-2015-c-a-kookai-talk-talks-va-h-tr-cac-nhan-a-ph-ng.jpg" alt="">
                    </div>
                    <div class="content-tab-left">
                        <p><i class="times fa-regular fa-clock"></i>22:03 - 17/11/2017</p>
                        <a href="http://localhost/wordpress-test3/du_an/15-cuon-sach-hoi-hoa-hay-vo-cung-huu-ich-va-y-nghia-ve-nghe-thuat-hoi-hoa/">
                            <h3 class="title-tab-left">15 cuốn sách hội họa hay vô cùng hữu ích và ý nghĩa về nghệ thuật hội họa</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 post-row2 tab-right">
                <div class="container-tab-right">
                    <div class="parent box-tab-right clearfix">
                        <div class="child img-tab-right">
                            <img src="https://tintuc-01.web4s.vn/uploads/plugin/news/12/1541395634-49876199-7-ly-do-b-n-tim-c-cac-tac-ph-m-v-n-h-c-kinh-i-n-ngay-l-p-t-c.jpg" alt="">
                        </div>
                        <div class="row2-content content-tab-right1">
                            <p><i class="times fa-regular fa-clock"></i>22:03 - 17/11/2017</p>
                            <a href="http://localhost/wordpress-test3/du_an/7-ly-do-de-ban-tim-doc-cac-tac-pham-van-hoc-kinh-dien-ngay-lap-tuc/">
                                <h3 class="title-tab-right">7 lý do để bạn tìm đọc các tác phẩm văn học kinh điển ngay lập tức</h3>
                            </a>
                        </div>
                    </div>
                    <div class="parent box-tab-right clearfix post-row2-mg">
                        <div class="child img-tab-right">
                            <img src="https://tintuc-01.web4s.vn/uploads/plugin/news/11/1539270346-1977469335-chung-toi-khong-th-ch-i-th-nh-ng-xu-h-ng-trang-i-m-t-mua-thu-2016-runways.jpg" alt="">
                        </div>
                        <div class="row2-content content-tab-right2">
                            <p><i class="times fa-regular fa-clock"></i>22:03 - 17/11/2017</p>
                            <a href="http://localhost/wordpress-test3/du_an/5-ly-do-tai-sao-nghe-nghiep-khong-the-quyet-dinh-con-nguoi-ban/">
                                <h3 class="title-tab-right">5 lý do tại sao nghề nghiệp không thể quyết định con người bạn</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-row-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="tab-custom">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading-tab-custom">
                                <h3>TẤT CẢ TIN TỨC MỚI NHẤT</h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="title-tab-custom title-tab-02">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">KỸ NĂNG - QUAN ĐIỂM</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">DU LỊCH - KHÁM PHÁ</a>
                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">VĂN HÓA - GIẢI TRÍ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="box-blogs1">
                                            <div class="box-blog-top">
                                                <div class="row">
                                                    <?php
                                                    $args = array(
                                                        'category_name' => 'ky-nang-quan-diem_trangchu1',
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
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="box-blogs1">
                                            <div class="box-blog-bottom">
                                                <div class="row">
                                                    <?php
                                                    $args = array(
                                                        'category_name' => 'ky-nang-quan-diem_trangchu2',
                                                        'post_type' => 'post',
                                                        // 'posts_per_page' => 6,
                                                    );
                                                    $my_query = new WP_Query($args);
                                                    if ($my_query->have_posts()) {
                                                        while ($my_query->have_posts()) {
                                                            $my_query->the_post();
                                                            echo '<div class="item-blogs2 col-6"><div class="img-blogs2"><a class="img-news2" href="';
                                                            echo get_post_permalink();
                                                            echo '">';
                                                            echo get_the_post_thumbnail();
                                                            echo '</a></div><div class="info2"><div class="title-blogs-item2"><a class="title-link-bottom" href="';
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
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="box-blogs1">
                                            <div class="box-blog-top">
                                                <div class="row">
                                                    <?php
                                                    $args = array(
                                                        'category_name' => 'du-lich-kham-pha_tranghchu1',
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
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="box-blogs1">
                                            <div class="box-blog-bottom">
                                                <div class="row">
                                                    <?php
                                                    $args = array(
                                                        'category_name' => 'du-lich-kham-pha_trangchu2',
                                                        'post_type' => 'post',
                                                        // 'posts_per_page' => 6,
                                                    );
                                                    $my_query = new WP_Query($args);
                                                    if ($my_query->have_posts()) {
                                                        while ($my_query->have_posts()) {
                                                            $my_query->the_post();
                                                            echo '<div class="item-blogs2 col-6"><div class="img-blogs2"><a class="img-news2" href="';
                                                            echo get_post_permalink();
                                                            echo '">';
                                                            echo get_the_post_thumbnail();
                                                            echo '</a></div><div class="info2"><div class="title-blogs-item2"><a class="title-link-bottom" href="';
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
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="box-blogs1">
                                            <div class="box-blog-top">
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
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="box-blogs1">
                                            <div class="box-blog-bottom">
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
                                                            echo '<div class="item-blogs2 col-6"><div class="img-blogs2"><a class="img-news2" href="';
                                                            echo get_post_permalink();
                                                            echo '">';
                                                            echo get_the_post_thumbnail();
                                                            echo '</a></div><div class="info2"><div class="title-blogs-item2"><a class="title-link-bottom" href="';
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
<div class="content-row-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-ms-12">
                <iframe width="100%" height="534px" src="https://www.youtube.com/embed/DIgv-e18OzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="content-row-5">
    <div class="container">
        <div class="row">
            <div class="col-ms-12">
                <div class="item_block">
                    <div class="box-gallery">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="video-gallery-1">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OAMK5kym1Vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="video-gallery-2">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eW2-eDiD7w0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="video-gallery-3">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ru-O5L2uxho" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-row-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="withsmall">
                    <p>- Quảng cáo -</p>
                    <div class="banner-pro">
                        <img src="https://tintuc-01.web4s.vn/uploads/plugin/custom_img/2018-10-15/1539622555-1760838446-custom.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="content-row-7">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="block-news">
                    <div class="title_widget">
                        <h2><span>Tin tức mới nhất</span></h2>
                        <span class="sub-title">Liều lượng cảm hứng hàng ngày của bạn</span>
                    </div>
                    <div class="row">
                        <?php
                        $args = array(
                            'category_name' => 'khong-phan-loai',
                            'post_type' => 'post',
                            'posts_per_page' => 9,
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                echo '<div class="item-blogs1 item-blogs-tc col-4"><div class="img-blogs1"><a href="';
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
            </div>
        </div>
    </div>
</div>
<div class="content-row-8">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-product">
                    <h3 class="title-gallery">Lựa chọn của biên tập</h3>
                </div>
                <div class="logocarousel">
                    <?php echo do_shortcode('[logocarousel id="77"]'); ?>
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
