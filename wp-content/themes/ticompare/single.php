<?php get_header()?>
<div class="page-row page-row-expanded">
	<div id="wrapper">
		<section id="container">
			<div class="posts" id="single-post">
				<?php while(have_posts()): the_post()?>
					<article>
						<h1><?php the_title()?></h1>
						<?php the_content();?>
					</article>
				<?php endwhile;?>
			</div>
		</section>
		<?php get_sidebar()?>
		<section id="comments">
			<?php comments_template(', true')?>
		</section>
	</div>
</div>
<?php get_footer()?>