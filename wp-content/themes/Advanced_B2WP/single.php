<?php get_header(); ?>
<!-- Page Header -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $image = get_field('banner'); ?>
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $image['url']; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <h2 class="subheading"><?php the_field('sub_heading') ?></h2>
                        <span class="meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
