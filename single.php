<?php get_header(); ?>

<!-- Main -->
<div id="main">

	<!-- Post -->
	<article class="post">
		<header>
			<div class="title">
				<h2><?php the_title() ?></h2>
			</div>
			<div class="meta">
				<time class="published"><?php the_time() ?></time>
				<a href="https://vincent-mancheron.000webhostapp.com/" target="blank" class="author">
					<span class="name"><?php the_author() ?></span>
					<?=get_avatar( get_the_author_meta( 'ID' ), 40 );?>
				</a>
			</div>
		</header>
		<?php the_post_thumbnail(); ?>
		<?php the_content() ?>
		<footer>
			<ul class="stats">
				<li><?php the_category() ?></li>
				<li><a href="#" class="icon solid fa-heart">28</a></li>
				<li><a href="#" class="icon solid fa-comment">128</a></li>
			</ul>
		</footer>
	</article>
</div>

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
</div>

<?php get_footer(); ?>