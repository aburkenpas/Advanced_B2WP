<?php get_header(); ?>
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php $image = get_field('banner'); ?>
    <header class="intro-header" style="background-image: url('<?php echo $image['url']; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_field('sub_heading'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

    <?php endwhile; else: ?>

        <p>Sorry, page not found.</p>

    <?php endif; ?>
<?php get_footer(); ?>
