<?php get_header(); ?>
		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1><?php bloginfo('name'); ?></h1>
						<p><?php bloginfo('description'); ?></p>
						<ul class="icons">
							<li><a href="<?php echo get_theme_mod('twitter'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="<?php echo get_theme_mod('instagram') ?> " class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="<?php echo get_theme_mod('github') ?> " class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="<?php echo get_theme_mod('contact') ?>" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )?>
						<?php $small_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 360, 225) ) ?>
						<article>
							<a class="thumbnail" href="<?php echo $large_image_url[0] ?>" data-position="left center"><img src="<?php echo $small_image_url[0] ?>" alt="<?php echo the_title_attribute( array( 'echo' => 0 ) ) ?>" /></a>
							<h2><?php the_title() ?></h2>
							<p><?php the_excerpt() ?></p>
						</article>
						<?php endwhile; endif; ?>
					</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; <?php bloginfo('name'); ?></li>
							<li>Design : <a href="http://html5up.net">HTML5 UP</a></li>
							<li>Powered By : <a href="https://tn.linkedin.com/in/mohamedsafouanbesrour">Safouan</a></li>
							
						</ul>
					</footer>
				
			</div>
<?php get_footer(); ?>