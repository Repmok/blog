<?php get_header()?>
<div class="page-row page-row-expanded">
	<div id="wrapper">
		<section id="container">
			<div class="posts" id="all-posts">
				<?php while(have_posts()): the_post()?>
					<article>
						<h1><?php the_title()?></h1>
						<p class="author">
							By <span class="link"><?php echo the_author_posts_link(); ?></span>
						</p>
						<span class="link"><?php the_content(__('Continue reading...'));?></span>
					</article>
				<?php endwhile;?>
			</div>
		</section>
		<?php get_sidebar()?>
	</div>
</div>
<?php get_footer()?>