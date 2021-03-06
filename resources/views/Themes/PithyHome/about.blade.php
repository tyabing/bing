@include('Themes.PithyHome.Common.header');
<body>
	<div class="page-loader">
		<div class="loader-in">Loading...</div>
		<div class="loader-out">Loading...</div>
	</div>

	<aside class="navmenu">
		<div class="post-titles">
			<div class="tag-title">
				<div class="container">
					<p class="tags" id="post-titles">
						<a data-filter=".pt-fashion" href="#">fashion</a>
						<a data-filter=".pt-culture" href="#">culture</a>
						<a data-filter=".pt-art" href="#">art</a>
						<a data-filter="*" href="#" class="unfilter hide">all</a>
					</p>
				</div>
			</div>
			<button type="button" class="remove-navbar"><i class="fa fa-times"></i></button>
			<ul class="post-title-list clearfix">
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Five simple steps to designing grid systems preface</a>
						</h5>
						<div class="post-subinfo">
							<span>June 28</span>   •   
							<span>2 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i>26</i>
							<a href="#">Hemingway: A Text Editor That Cares About What You Write</a>
						</h5>
						<div class="post-subinfo">
							<span>June 26</span>   •   
							<span>2 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-link"></i>
							<a href="#">Mobile Design Inspiration and Creativity</a>
						</h5>
						<div class="post-subinfo">
							<span>June 25</span>   •   
							<span>4 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-comment"></i>
							<a href="#">Envato Stories: Coming August 2014</a>
						</h5>
						<div class="post-subinfo">
							<span>June 24</span>   •   
							<span>3 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Meet #59 Interface Designer Kerem Suer</a>
						</h5>
						<div class="post-subinfo">
							<span>June 24</span>   •   
							<span>6 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Founders, Travel and Epic Beards: What Happens After Envato</a>
						</h5>
						<div class="post-subinfo">
							<span>June 22</span>   •   
							<span>12 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Why Designers Make Good Founders (and Cofounders)</a>
						</h5>
						<div class="post-subinfo">
							<span>June 21</span>   •   
							<span>9 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Getting Your Team Through the Storm A Good Product Designer...</a>
						</h5>
						<div class="post-subinfo">
							<span>June 20</span>   •   
							<span>16 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Introducing LaRead Chat Post</a>
						</h5>
						<div class="post-subinfo">
							<span>June 18</span>   •   
							<span>24 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">The Future of WordPress</a>
						</h5>
						<div class="post-subinfo">
							<span>June 16</span>   •   
							<span>13 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Workshop: Brand Asset Management</a>
						</h5>
						<div class="post-subinfo">
							<span>June 16</span>   •   
							<span>8 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Long Live The Kings - Short Film</a>
						</h5>
						<div class="post-subinfo">
							<span>June 12</span>   •   
							<span>26 Comments</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<div class="canvas">
		<div class="canvas-overlay"></div>
		<header>
			<nav class="navbar navbar-fixed-top nav-down navbar-laread">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="authors.html"><img height="64" src="assets/img/logo-light.png" alt=""></a>
					</div>
					<div class="get-post-titles">
						<button type="button" class="navbar-toggle push-navbar" data-navbar-type="full">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<button type="button" class="navbar-toggle collapsed menu-collapse" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-plus"></i>
					</button>
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav">
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOME</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="large-image-v1-1.html">Large Image v1</a></li>
									<li><a href="large-image-v2-1.html">Large Image v2</a></li>
									<li><a href="medium-image-v1-1.html">Medium Image v1</a></li>
									<li><a href="medium-image-v2-1.html">Medium Image v2</a></li>
									<li><a href="masonry-1.html">Masonry</a></li>
									<li><a href="banner-v1.html">BannerMode v1</a></li>
									<li><a href="banner-v2.html">-v2</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">GALLERY</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="gallery-v1.html">Gallery v1</a></li>
									<li><a href="gallery-v2.html">Gallery v2</a></li>
									<li><a href="gallery-v3.html">Gallery v3</a></li>
									<li><a href="gallery-v4.html">Gallery v4</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PAGES</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="about-v1.html">About v1</a></li>
									<li><a href="about-v2.html">-v2</a></li>
									<li><a href="authors.html">Authors</a></li>
									<li><a href="author-detail.html">Author Detail</a></li>
									<li><a href="archive.html">Archive</a></li>
									<li><a href="contact-v1.html">Contact v1</a></li>
									<li><a href="contact-v2.html">-v2</a></li>
									<li><a href="404.html">Not Found</a></li>
									<li><a href="newsletter.html" target="_blank">Newsletter</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FEATURES</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="widget.html">Widgets</a></li>
									<li><a href="typography-1.html">Typography -1</a></li>
									<li><a href="typography-2.html">-2</a></li>
									<li><a href="typography-3.html">-3</a></li>
									<li><a href="typography-4.html">-4</a></li>
									<li><a href="shortcode-1.html">Shortcode -1</a></li>
									<li><a href="shortcode-2.html">-2</a></li>
									<li><a href="shortcode-3.html">-3</a></li>
									<li><a href="shortcode-4.html">-4</a></li>

								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>

		<div class="container">

			<div class="head-about">
				<h1 class="about-h1">Hi, I'm Victoria Pham</h1>
				<p class="basic-info">Illustrator / Graphic Designer<span><i class="fa fa-map-marker"></i> Popayán, Colombia</span></p>
			</div>

		</div>


		<section class="post-fluid">
			<div class="container-fluid">
				<div class="container">
					<div class="row laread-about">

						<div class="about-picture">
							<img src="assets/img/img-47.png" alt="" />
						</div>

						<ul class="about-social">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>

						<p>Hello Everyone,  My name is Victoria Pham. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero.<br /> <br /> Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst. Mauris non libero ligula, sed volutpat mauris. Duis facilisis elementum nisl, non aliquam enim tincidunt vitae. Donec laoreet est vitae erat.</p>

						<div class="about-info">
							<span class="info-title">life for me:</span>
							<div class="about-item">
								<span>
									<i class="fa fa-bicycle"></i><span class="label-golden">nature</span>
									<i class="fa fa-coffee"></i><span class="label-golden">photoshop</span>
									<i class="fa fa-music"></i><span class="label-golden">sleep</span>
								</span>
							</div>
						</div>

						<h4>Get In Touch</h4>

						<p>If you dig the site, subscribe by RSS or email. Comments and emails are always appreciated. You can also contact me through one of my social media.</p>

						<ul class="about-social">
							<li class="xl"><a href="#"><i class="fa fa-envelope"></i></a></li>
						</ul>

					</div>
				</div>
			</div>
		</section>

		<footer class="container-fluid footer">
			<div class="container text-center">
				<div class="footer-logo"><img src="assets/img/logo-black.png" alt=""></div>
				<p class="laread-motto">Designed for Read.</p>
				<div class="laread-social">
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-pinterest"></a>
				</div>
			</div>
		</footer>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	@include('Themes.PithyHome.Common.footer');
	
</body>
</html>
