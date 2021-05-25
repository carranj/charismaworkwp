<?php 
    get_header();
 
?>
<section id="intro">
    <div class="hero-container">
            <div id="logo" >
                <img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="">
            </div>
            <div class="heroImage">
                <img src="<?php echo content_url()?>/uploads/2021/05/hero-image.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="intro-passage" style="background-image:url(<?php echo content_url('/uploads/2021/05/social-gathering-banner.jpg')?>); background-size:cover;">
<div class="container p-5">
<div class="row">
    <div class="col-md-12">
    <p>Maria Bassa is a Houston based charisma advisor. Maria has taught thousands of people how to be more influential, persuasive, and inspiring for business and personal success.</p>

<p>Her clients range from CEO’s to corporations to government entities to charitable foundations. In addition, Maria has served on philanthropic boards, including the U.S. Fund for UNICEF, and chaired numerous fundraising galas. Her launch of the UNICEF Youth Ambassador Council was inaugurated by President George Bush.</p>
    </div>
    
</div>

    
</div>
</section>
<section id="recent-posts">
    <div class="container">
        <div class="row">
            <?php
                $args = array( 'numberposts' => 10, 'order'=> 'DESC', 'orderby' => 'title' );
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post);   ?>
                <?php
                if (have_rows('flexible_content')) {
                    while(have_rows('flexible_content')) {
                        the_row();
                        $text = get_sub_field('full_width_wysiwyg');
                        if ( '' != $text ) {
                            $text = strip_shortcodes( $text );
                            $text = apply_filters('the_content', $text);
                            $text = str_replace(']]>', ']]>', $text);
                            $excerpt_length = 20; // 20 words
                            $text = wp_trim_words( $text, $excerpt_length );
                        }
                    }
                }
                ?>
                    <div class="col-md-4">
                        <h3><?php the_title(); ?></h3>   
                        <p><?php echo $text ?> <a href="<?php the_permalink()?>">Read More</a></p>
                    </div>
               
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?> 
