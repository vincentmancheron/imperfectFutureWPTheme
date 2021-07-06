<?php get_header(); ?>

	<!-- Main -->
	<div id="main">

		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post(); ?> 
				<article class="post">
					<header>
						<div class="title">
							<h2><a href="<?=get_permalink()?>"><?php the_title() ?></a></h2>
						</div>
						<div class="meta">
							<time class="published"><?php the_time( 'F j, Y' ) ?></time>
							<a href="https://vincent-mancheron.000webhostapp.com/" class="author" target="_blank">
								<span class="name"><?php the_author() ?></span>
								<?=get_avatar( get_the_author_meta( 'ID' ), 40 );?>							</a>
						</div>
					</header>
					<a href="<?=get_permalink()?>" class="image featured"><?php the_post_thumbnail(); ?></a>
					<?php the_excerpt() ?>
					<footer>
						<ul class="actions">
							<li><a href="<?=get_permalink()?>" class="button large">Continue Reading</a></li>
						</ul>
						<ul class="stats">
							<li><?php the_category() ?></li>
							<li><a href="#" class="icon solid fa-heart">28</a></li>
							<li><?php comments_number() ?></li>
						</ul>
					</footer>
				</article>
			<?php }
		} ?>

		<!-- Pagination -->
		<div class="actions pagination">
			<?php posts_nav_link(); ?>
		</div>
	</div>

	<!-- Sidebar -->
	<section id="sidebar">

		<!-- Intro -->
		<section id="intro">
			<a href="#" class="logo"><img src="http://imperfectfuture.localhost/wp-content/uploads/2021/07/sc.jpg" alt="logo Thème" /></a>
			<header>
				<h2>Future Imperfect</h2>
				<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
			</header>
		</section>

		<!-- Mini Posts -->
		<section>
			<div class="mini-posts">
				<?php if (have_posts()) {
					while (have_posts()) {
						the_post(); ?> 
						<article class="mini-post">
							<header>
								<h3><a href="<?=get_permalink()?>"><?php the_title() ?></a></h3>
								<time class="published"><?php the_time( 'F j, Y' ) ?></time>
								<a href="https://vincent-mancheron.000webhostapp.com/" target="_blank" class="author">
									<?=get_avatar( get_the_author_meta( 'ID' ), 40 );?>
								</a>
							</header>
							<a href="<?=get_permalink()?>" class="image frontImgMiniPost"><?php the_post_thumbnail(); ?></a>
						</article>
					<?php }
				} ?>
			</div>
		</section>

		<!-- Posts List -->
		<section>
			<ul class="posts">
			<?php if (have_posts()) {
					while (have_posts()) {
						the_post(); ?>
						<li>
							<article class="nano-post">
								<header>
									<h3><a href="<?=get_permalink()?>"><?php the_title() ?></a></h3>
									<time class="published"><?php the_time() ?></time>
								</header>
								<a href="<?=get_permalink()?>" class="image"><?php the_post_thumbnail(); ?></a>
							</article>
						</li>
					<?php }
				} ?>
			</ul>
		</section>

		<!-- About -->
		<section class="blurb">
			<h2>About</h2>
			<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet
				placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
			<ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul>
		</section>

		<!-- Footer -->
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
				<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a
					href="http://unsplash.com">Unsplash</a>.</p>
		</section>
	</section>
</div>

<?php get_footer(); ?>

<!-- Bugs:
-Auteur n'apparait pas sur single.
-Générer différentes listes d'articles.
-.stats li:firstchild ne marche pas. 
- Demander a Thierry diff front page index.-->