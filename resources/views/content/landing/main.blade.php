@extends('layout.landing.main')
@section('content')
<header id="header" class="header style-03 header-dark header-sticky header-transparent">
	<div class="header-wrap-stick">
		<div class="header-position">
			<div class="header-middle">
				<div class="kodory-menu-wapper"></div>
				<div class="header-middle-inner">
					<div class="header-menu">
						<div class="box-header-nav menu-nocenter">
							<ul id="menu-primary-menu" class="clone-main-menu kodory-clone-mobile-menu kodory-nav main-menu">
								<li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
									<a class="kodory-menu-item-title" title="Home" href="index-2.html">Home</a>
									<span class="toggle-submenu"></span>
									<div class="submenu megamenu megamenu-home">
										<div class="demo-item">
											<div class="row">
												<div class="col-md-6 col-lg-4 col-sm-6">
													<div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
														<figure class="dreaming_wrapper az_figure">
															<a href="index-2.html" target="_self" class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
																<img src="{{ asset('assets/landing/images/demo001.jpg') }}" class="az_single_image-img attachment-full"
																alt="img">
															</a>
														</figure>
													</div>
													<h5 class="az_custom_heading">
														<a href="index-2.html">Home 01</a>
													</h5>
												</div>
												<div class="col-md-6 col-lg-4 col-sm-6">
													<div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
														<figure class="dreaming_wrapper az_figure">
															<a href="home-02.html" target="_self" class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
																<img src="{{ asset('assets/landing/images/demo002.jpg') }}" class="az_single_image-img attachment-full"
																alt="img">
															</a>
														</figure>
													</div>
													<h5 class="az_custom_heading">
														<a href="home-02.html">Home 02</a>
													</h5>
												</div>
												<div class="col-md-6 col-lg-4 col-sm-6">
													<div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
														<figure class="dreaming_wrapper az_figure">
															<a href="home-03.html" target="_self" class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
																<img src="{{ asset('assets/landing/images/demo003.jpg') }}" class="az_single_image-img attachment-full"
																alt="img">
															</a>
														</figure>
													</div>
													<h5 class="az_custom_heading">
														<a href="home-03.html">Home 03</a>
													</h5>
												</div>
												<div class="col-md-6 col-lg-4 col-sm-6">
													<div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
														<figure class="dreaming_wrapper az_figure">
															<a href="home-04.html" target="_self" class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
																<img src="{{ asset('assets/landing/images/demo004.jpg') }}" class="az_single_image-img attachment-full"
																alt="img">
															</a>
														</figure>
													</div>
													<h5 class="az_custom_heading">
														<a href="home-04.html">Home 04</a>
													</h5>
												</div>
												<div class="col-md-6 col-lg-4 col-sm-6">
													<div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
														<figure class="dreaming_wrapper az_figure">
															<a href="home-05.html" target="_self" class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
																<img src="{{ asset('assets/landing/images/demo005.jpg') }}" class="az_single_image-img attachment-full"
																alt="img">
															</a>
														</figure>
													</div>
													<h5 class="az_custom_heading">
														<a href="home-05.html">Home 05</a>
													</h5>
												</div>
												<div class="col-md-6 col-lg-4 col-sm-6">
													<div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
														<figure class="dreaming_wrapper az_figure">
															<a href="home-06.html" target="_self" class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
																<img src="{{ asset('assets/landing/images/demo006.jpg') }}" class="az_single_image-img attachment-full"
																alt="img">
															</a>
														</figure>
													</div>
													<h5 class="az_custom_heading">
														<a href="home-06.html">Home 06</a>
													</h5>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
									<a class="kodory-menu-item-title" title="Shop" href="shop.html">Shop</a>
									<span class="toggle-submenu"></span>
									<div class="submenu megamenu megamenu-shop">
										<div class="row">
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title">Shop Layouts </h4>
														<ul class="listitem-list">
															<li>
																<a href="shop.html" target="_self">Shop Grid </a>
															</li>
															<li>
																<a href="shop-list.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-new.png') }}" class="attachment-full size-full" alt="img">
																	</span> Shop List
																</a>
															</li>
															<li>
																<a href="shop.html" target="_self">No Sidebar </a>
															</li>
															<li>
																<a href="shop-leftsidebar.html" target="_self">Left
																Sidebar </a>
															</li>
															<li>
																<a href="shop-rightsidebar.html" target="_self">Right
																Sidebar </a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title">Product Layouts </h4>
														<ul class="listitem-list">
															<li>
																<a href="single-product.html" target="_self">Vertical Thumbnails </a>
															</li>
															<li>
																<a href="single-product-policy.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-new.png') }}" class="attachment-full size-full" alt="img">
																	</span> Extra Sidebar
																</a>
															</li>
															<li>
																<a href="single-product-rightsidebar.html" target="_self"> Right Sidebar </a>
															</li>
															<li>
																<a href="single-product-leftsidebar.html" target="_self"> Left Sidebar </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title"> Product Extends </h4>
														<ul class="listitem-list">
															<li>
																<a href="single-product-bundle.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-new.png') }}" class="attachment-full size-full" alt="img">
																	</span>
																	Product Bundle
																</a>
															</li>
															<li>
																<a href="single-product-360deg.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-hot.png') }}" class="attachment-full size-full" alt="img">
																	</span>
																Product 360 Deg </a>
															</li>
															<li>
																<a href="single-product-video.html" target="_self"> Video </a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title">
														Other Pages </h4>
														<ul class="listitem-list">
															<li>
																<a href="cart.html">Cart </a>
															</li>
															<li>
																<a href="wishlist.html" target="_self">Wishlist </a>
															</li>
															<li>
																<a href="checkout.html" target="_self">Checkout </a>
															</li>
															<li>
																<a href="order-tracking.html" target="_self">Order
																Tracking </a>
															</li>
															<li>
																<a href="my-account.html" target="_self">My Account </a>
															</li>
															<li>
																<a href="compare.html" target="_self">Compare</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title"> Product Types </h4>
														<ul class="listitem-list">
															<li>
																<a href="single-product-simple.html" target="_self"> Simple </a>
															</li>
															<li>
																<a href="single-product.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-hot.png') }}" class="attachment-full size-full" alt="img">
																	</span>
																Variable </a>
															</li>
															<li>
																<a href="single-product-external.html" target="_self"> External / Affiliate </a>
															</li>
															<li>
																<a href="single-product-group.html" target="_self"> Grouped </a>
															</li>
															<li>
																<a href="single-product-outofstock.html" target="_self"> Out Of Stock </a>
															</li>
															<li>
																<a href="single-product-onsale.html" target="_self"> On Sale </a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title"> Other Account Page</h4>
														<ul class="listitem-list">
															<li>
																<a href="dashboard.html" target="_self">
																	Dashboard
																</a>
															</li>
															<li>
																<a href="orders.html" target="_self"> Orders</a>
															</li>
															<li>
																<a href="downloads.html" target="_self"> Downloads </a>
															</li>
															<li>
																<a href="edit-address.html" target="_self">
																Addresses</a>
															</li>
															<li>
																<a href="edit-account.html" target="_self">
																Account details </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
									<a class="kodory-menu-item-title" title="Elements" href="#">Elements</a>
									<span class="toggle-submenu"></span>
									<div class="submenu megamenu megamenu-elements">
										<div class="row">
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title">Element 1 </h4>
														<ul class="listitem-list">
															<li>
																<a href="banner.html" target="_self">Banner </a>
															</li>
															<li>
																<a href="blog-element.html" target="_self">Blog Element </a>
															</li>
															<li>
																<a href="categories-element.html" target="_self"> Categories Element </a>
															</li>
															<li>
																<a href="product-element.html" target="_self"> Product Element </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title"> Element 2 </h4>
														<ul class="listitem-list">
															<li>
																<a href="client.html" target="_self">
																Client </a>
															</li>
															<li>
																<a href="product-layout.html" target="_self">
																Product Layout </a>
															</li>
															<li>
																<a href="google-map.html" target="_self"> Google map </a>
															</li>
															<li>
																<a href="iconbox.html" target="_self"> Icon Box </a>
															</li>
															<li>
																<a href="team.html" target="_self"> Team </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title"> Element 3 </h4>
														<ul class="listitem-list">
															<li>
																<a href="instagram-feed.html" target="_self"> Instagram Feed </a>
															</li>
															<li>
																<a href="newsletter.html" target="_self"> Newsletter </a>
															</li>
															<li>
																<a href="testimonials.html" target="_self"> Testimonials </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
									<a class="kodory-menu-item-title" title="Blog" href="blog.html">Blog</a>
									<span class="toggle-submenu"></span>
									<div class="submenu megamenu megamenu-blog">
										<div class="row">
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title">
														Blog Layout </h4>
														<ul class="listitem-list">
															<li>
																<a href="blog.html" target="_self">No Sidebar </a>
															</li>
															<li>
																<a href="blog-leftsidebar.html" target="_self">Left
																Sidebar </a>
															</li>
															<li>
																<a href="blog-rightsidebar.html" target="_self">Right
																Sidebar </a>
															</li>
															<li>
																<a href="blog.html" target="_self">Blog Standard </a>
															</li>
															<li>
																<a href="blog-grid.html" target="_self">Blog Grid </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title">
														Post Layout </h4>
														<ul class="listitem-list">
															<li>
																<a href="single-post.html" target="_self">No
																Sidebar </a>
															</li>
															<li>
																<a href="single-post-leftsidebar.html" target="_self">Left
																Sidebar </a>
															</li>
															<li>
																<a href="single-post-rightsidebar.html" target="_self">Right
																Sidebar </a>
															</li>
															<li>
																<a href="single-post-instagram.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-hot.png') }}" class="attachment-full size-full" alt="img">
																	</span> Instagram In Post
																</a>
															</li>
															<li>
																<a href="single-post-product.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-new.png') }}" class="attachment-full size-full" alt="img">
																	</span> Product In Post
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="kodory-listitem style-01">
													<div class="listitem-inner">
														<h4 class="title"> Post Format </h4>
														<ul class="listitem-list">
															<li>
																<a href="single-post.html" target="_self">Standard </a>
															</li>
															<li>
																<a href="single-post-gallery.html" target="_self">Gallery </a>
															</li>
															<li>
																<a href="single-post-video.html" target="_self">
																	<span class="image">
																		<img src="{{ asset('assets/landing/images/label-hot.png') }}" class="attachment-full size-full" alt="img">
																	</span>
																	Video
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
									<a class="kodory-menu-item-title" title="Pages" href="#">Pages</a>
									<span class="toggle-submenu"></span>
									<ul role="menu" class="submenu">
										<li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
											<a class="kodory-menu-item-title" title="About" href="about.html">About</a>
										</li>
										<li id="menu-item-988" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
											<a class="kodory-menu-item-title" title="Contact" href="contact.html">Contact</a>
										</li>
										<li id="menu-item-990" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
											<a class="kodory-menu-item-title" title="Page 404" href="404.html">Page 404</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="block-menu-bar">
							<a class="menu-bar menu-toggle" href="#">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>
					<div class="header-logo">
						<a href="index-2.html"><img alt="Kodory" src="{{ asset('assets/landing/images/logo.png') }}" class="logo"></a>
					</div>
					<div class="header-control">
						<div class="header-control-inner">
							<div class="meta-dreaming">
								<ul class="wpml-menu">
									<li class="menu-item kodory-dropdown block-language">
										<a href="#" data-kodory="kodory-dropdown">
											<img src="{{ asset('assets/landing/images/en.png') }}" alt="en" width="18" height="12"> English
										</a>
										<span class="toggle-submenu"></span>
										<ul class="sub-menu">
											<li class="menu-item">
												<a href="#">
													<img src="{{ asset('assets/lading/images/it.png') }}" alt="it" width="18" height="12"> Italiano
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-item">
										<div class="wcml-dropdown product wcml_currency_switcher">
											<ul>
												<li class="wcml-cs-active-currency">
													<a class="wcml-cs-item-toggle">USD</a>
													<ul class="wcml-cs-submenu">
														<li>
															<a>EUR</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</li>
								</ul>
								<div class="header-search kodory-dropdown">
									<div class="header-search-inner" data-kodory="kodory-dropdown">
										<a href="#" class="link-dropdown block-link">
											<span class="flaticon-magnifying-glass-1"></span>
										</a>
									</div>
									<div class="block-search">
										<form role="search" method="get" class="form-search block-search-form kodory-live-search-form">
											<div class="form-content search-box results-search">
												<div class="inner">
													<input autocomplete="off" class="searchfield txt-livesearch input" name="s" value="" placeholder="Search here..." type="text">
												</div>
											</div>
											<input name="post_type" value="product" type="hidden">
											<input name="taxonomy" value="product_cat" type="hidden">
											<div class="category">
												<select title="product_cat" name="product_cat" class="category-search-option" tabindex="-1">
													<option value="0">All Categories</option>
													<option class="level-0" value="Toy">Toys</option>
													<option class="level-0" value="Teddy Bear">Teddy Bear</option>
													<option class="level-0" value="Clothing">Clothing</option>
													<option class="level-0" value="Backpack">Backpack</option>
													<option class="level-0" value="new-arrivals">New arrivals</option>
													<option class="level-0" value="Footwear">Footwear</option>
													<option class="level-0" value="T-shirt">T-shirt</option>
													<option class="level-0" value="Hoodie">Hoodie</option>
												</select>
											</div>
											<button type="submit" class="btn-submit">
												<span class="flaticon-magnifying-glass-1"></span>
											</button>
										</form>
									</div>
								</div>
								<div class="kodory-dropdown-close">x</div>
								<div class="menu-item block-user block-dreaming kodory-dropdown">
									<a class="block-link" href="my-account.html">
										<span class="flaticon-profile"></span>
									</a>
									<ul class="sub-menu">
										<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
											<a href="#">Dashboard</a>
										</li>
										<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
											<a href="#">Orders</a>
										</li>
										<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
											<a href="#">Downloads</a>
										</li>
										<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
											<a href="#">Addresses</a>
										</li>
										<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
											<a href="#">Account details</a>
										</li>
										<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
											<a href="#">Logout</a>
										</li>
									</ul>
								</div>
								<div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
									<div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
										<a class="block-link link-dropdown" href="cart.html">
											<span class="flaticon-shopping-bag-1"></span>
											<span class="count">3</span>
										</a>
									</div>
									<div class="widget kodory widget_shopping_cart">
										<div class="widget_shopping_cart_content">
											<h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
											<ul class="kodory-mini-cart cart_list product_list_widget">
												<li class="kodory-mini-cart-item mini_cart_item">
													<a href="#" class="remove remove_from_cart_button">×</a>
													<a href="#">
														<img src="{{ asset('assets/landing/images/apro134-1-600x778.jpg') }}" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
													</a>
													<span class="quantity">1 × <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>150.00</span></span>
												</li>
												<li class="kodory-mini-cart-item mini_cart_item">
													<a href="#" class="remove remove_from_cart_button">×</a>
													<a href="#">
														<img src="{{ asset('assets/images/apro1113-600x778.jpg') }}" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">Ethereal Toys&nbsp;
													</a>
													<span class="quantity">1 × <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>129.00</span></span>
												</li>
												<li class="kodory-mini-cart-item mini_cart_item">
													<a href="#" class="remove remove_from_cart_button">×</a>
													<a href="#">
														<img src="{{ asset('assets/images/apro201-1-600x778.jpg') }}" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">Red Car&nbsp;
													</a>
													<span class="quantity">1 × <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>139.00</span></span>
												</li>
											</ul>
											<p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
												<span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>418.00</span>
											</p>
											<p class="kodory-mini-cart__buttons buttons">
												<a href="cart.html" class="button kodory-forward">Viewcart</a>
												<a href="checkout.html" class="button checkout kodory-forward">Checkout</a>
											</p>
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
	<div class="header-mobile">
		<div class="header-mobile-left">
			<div class="block-menu-bar">
				<a class="menu-bar menu-toggle" href="#">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
			<div class="header-search kodory-dropdown">
				<div class="header-search-inner" data-kodory="kodory-dropdown">
					<a href="#" class="link-dropdown block-link">
						<span class="flaticon-magnifying-glass-1"></span>
					</a>
				</div>
				<div class="block-search">
					<form role="search" method="get" class="form-search block-search-form kodory-live-search-form">
						<div class="form-content search-box results-search">
							<div class="inner">
								<input autocomplete="off" class="searchfield txt-livesearch input" name="s" value="" placeholder="Search here..." type="text">
							</div>
						</div>
						<input name="post_type" value="product" type="hidden">
						<input name="taxonomy" value="product_cat" type="hidden">
						<div class="category">
							<select title="product_cat" name="product_cat" id="112546160" class="category-search-option" tabindex="-1" style="display: none;">
								<option value="0">All Categories</option>
								<option class="level-0" value="Toy">Toys</option>
								<option class="level-0" value="Teddy Bear">Teddy Bear</option>
								<option class="level-0" value="Clothing">Clothing</option>
								<option class="level-0" value="Backpack">Backpack</option>
								<option class="level-0" value="new-arrivals">New arrivals</option>
								<option class="level-0" value="Footwear">Footwear</option>
								<option class="level-0" value="T-shirt">T-shirt</option>
								<option class="level-0" value="Hoodie">Hoodie</option>
							</select>
						</div>
						<button type="submit" class="btn-submit">
							<span class="flaticon-magnifying-glass-1"></span>
						</button>
					</form>
				</div>
			</div>
			<ul class="wpml-menu">
				<li class="menu-item kodory-dropdown block-language">
					<a href="#" data-kodory="kodory-dropdown">
						<img src="{{ asset('assets/landing/images/en.png') }}" alt="en" width="18" height="12">
						English
					</a>
					<span class="toggle-submenu"></span>
					<ul class="sub-menu">
						<li class="menu-item">
							<a href="#">
								<img src="{{ asset('assets/landing/images/it.png') }}" alt="it" width="18" height="12">
								Italiano
							</a>
						</li>
					</ul>
				</li>
				<li class="menu-item">
					<div class="wcml-dropdown product wcml_currency_switcher">
						<ul>
							<li class="wcml-cs-active-currency">
								<a class="wcml-cs-item-toggle">USD</a>
								<ul class="wcml-cs-submenu">
									<li>
										<a>EUR</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<div class="header-mobile-mid">
			<div class="header-logo">
				<a href="index-2.html"><img alt="Kodory" src="{{ asset('assets/images/logo.png') }}" class="logo"></a>
			</div>
		</div>
		<div class="header-mobile-right">
			<div class="header-control-inner">
				<div class="meta-dreaming">
					<div class="menu-item block-user block-dreaming kodory-dropdown">
						<a class="block-link" href="my-account.html">
							<span class="flaticon-profile"></span>
						</a>
						<ul class="sub-menu">
							<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
								<a href="#">Dashboard</a>
							</li>
							<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
								<a href="#">Orders</a>
							</li>
							<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
								<a href="#">Downloads</a>
							</li>
							<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
								<a href="#">Addresses</a>
							</li>
							<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
								<a href="#">Account details</a>
							</li>
							<li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
								<a href="#">Logout</a>
							</li>
						</ul>
					</div>
					<div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
						<div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
							<a class="block-link link-dropdown" href="cart.html">
								<span class="flaticon-shopping-bag-1"></span>
								<span class="count">3</span>
							</a>
						</div>
						<div class="widget kodory widget_shopping_cart">
							<div class="widget_shopping_cart_content">
								<h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
								<ul class="kodory-mini-cart cart_list product_list_widget">
									<li class="kodory-mini-cart-item mini_cart_item">
										<a href="#" class="remove remove_from_cart_button">×</a>
										<a href="#">
											<img src="{{ asset('assets/landing/images/apro134-1-600x778.jpg') }}" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
										</a>
										<span class="quantity">1 × <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>150.00</span></span>
									</li>
									<li class="kodory-mini-cart-item mini_cart_item">
										<a href="#" class="remove remove_from_cart_button">×</a>
										<a href="#">
											<img src="{{ asset('assets/landing/images/apro1113-600x778.jpg') }}" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">Ethereal Toys&nbsp;
										</a>
										<span class="quantity">1 × <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>129.00</span></span>
									</li>
									<li class="kodory-mini-cart-item mini_cart_item">
										<a href="#" class="remove remove_from_cart_button">×</a>
										<a href="#">
											<img src="{{ asset('assets/landing/images/apro201-1-600x778.jpg') }}" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">Red Car&nbsp;
										</a>
										<span class="quantity">1 × <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>139.00</span></span>
									</li>
								</ul>
								<p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
									<span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>418.00</span>
								</p>
								<p class="kodory-mini-cart__buttons buttons">
									<a href="cart.html" class="button kodory-forward">Viewcart</a>
									<a href="checkout.html" class="button checkout kodory-forward">Checkout</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="fullwidth-template">
	<div class="slide-home-03">
		<div class="response-product product-list-owl owl-slick equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
			<div class="slide-wrap">
				<img src="{{ asset('assets/landing/images/slide31.jpg') }}" alt="image">
				<div class="slide-info">
					<div class="container">
						<div class="slide-inner">
							<h1>Summer Sale</h1>
							<h5>Code: <strong>KODORY</strong> 25% off</h5>
							<h2>Accessories items! </h2>
							<a href="shop.html">Shop now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="slide-wrap">
				<img src="{{ asset('assets/landing/images/slide32.jpg') }}" alt="image">
				<div class="slide-info">
					<div class="container">
						<div class="slide-inner">
							<h1>Spring Collection</h1>
							<h5>Code: <strong>KODORY</strong> 30% off</h5>
							<h2>New Arrivals</h2>
							<a href="shop.html">Shop now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="slide-wrap">
				<img src="{{ asset('assets/landing/images/slide33.jpg') }}" alt="image">
				<div class="slide-info">
					<div class="container">
						<div class="slide-inner">
							<h1>Autumn Shop</h1>
							<h5>Code: <strong>KODORY</strong> 20% off</h5>
							<h2>Best Seller</h2>
							<a href="shop.html">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-017">
		<div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="kodory-banner style-08 left-center">
					<div class="banner-inner">
						<figure class="banner-thumb">
							<img src="{{ asset('assets/landing/images/banner31.jpg') }}" class="attachment-full size-full" alt="img">
						</figure>
						<div class="banner-info ">
							<div class="banner-content">
								<div class="title-wrap">
									<h6 class="title">
									Best Seller</h6>
								</div>
								<div class="cate">
									Check out our your<br>
									kids collection now!
								</div>
								<div class="button-wrap">
									<a class="button" target="_self" href="shop.html"><span>Shop now</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="kodory-banner style-09 left-center">
					<div class="banner-inner">
						<figure class="banner-thumb">
							<img src="{{ asset('assets/landing/images/banner32.jpg') }}" class="attachment-full size-full" alt="img">
						</figure>
						<div class="banner-info ">
							<div class="banner-content">
								<div class="title-wrap">
									<div class="banner-label">
										End this weekend
									</div>
									<h6 class="title">
										Big Sale<br>
									75% Off </h6>
								</div>
								<div class="cate">
									Promo Code: <strong>KODORY</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4">
				<div class="kodory-banner style-10 left-center">
					<div class="banner-inner">
						<figure class="banner-thumb">
							<img src="{{ asset('assets/landing/images/banner33.jpg') }}" class="attachment-full size-full" alt="img">
						</figure>
						<div class="banner-info ">
							<div class="banner-content">
								<div class="title-wrap">
									<h6 class="title">
									Lookbook</h6>
								</div>
								<div class="cate">
									New Kids Collections<br>
									Summer Lookbook
								</div>
								<div class="button-wrap">
									<a class="button" target="_self" href="shop.html"><span>Shop now</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-001 pb-0">
		<div class="container">
			<div class="kodory-heading style-01">
				<div class="heading-inner">
					<h3 class="title">
						Top Trend <span></span>
					</h3>
					<div class="subtitle">
						Browse our website for the items
					</div>
				</div>
			</div>
			<div class="kodory-products style-04">
				<div class="response-product product-list-grid row auto-clear equal-container better-height ">
					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro151-1-270x350.jpg') }}" alt="Modern Platinum" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onsale"><span class="number">-11%</span></span>
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Modern Platinum</a>
								</h3>
								<span class="price">
									<del>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>89.00
										</span>
									</del>
									<ins>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>79.00
										</span>
									</ins>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>
					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro171-1-270x350.jpg') }}" alt="Cute Girl Shirt" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<form class="variations_form cart">
									<table class="variations">
										<tbody>
											<tr>
												<td class="value">
													<select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
														<option data-type="" data-pa_color="" value="">Choose an
															option
														</option>
														<option data-width="30" data-height="30" data-type="color" data-pa_color="#ffe59e" value="pink" class="attached enabled">Pink
														</option>
														<option data-width="30" data-height="30" data-type="color" data-pa_color="#a825ea" value="purple" class="attached enabled">Purple
														</option>
														<option data-width="30" data-height="30" data-type="color" data-pa_color="#b6b8ba" value="red" class="attached enabled">Red
														</option>
													</select>
													<div class="data-val attribute-pa_color" data-attributetype="box_style">
														<label>
															<input type="radio" name="color">
															<span class="change-value color" style="background: #3155e2;" data-value="blue">
															</span>
														</label>
														<label>
															<input type="radio" name="color">
															<span class="change-value color" style="background: #52b745;" data-value="green">
															</span>
														</label>
														<label>
															<input type="radio" name="color">
															<span class="change-value color" style="background: #ffe59e;" data-value="pink">
															</span>
														</label>
													</div>
													<a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
												</td>
											</tr>
										</tbody>
									</table>
								</form>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select options</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Cute Girl Shirt</a>
								</h3>
								<span class="price">
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>105.00
									</span>– 
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>110.00
									</span>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro71-1-270x350.jpg') }}" alt="Kid Backpack" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onsale"><span class="number">-18%</span></span>
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Kid Backpack</a>
								</h3>
								<span class="price">
									<del>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>109.00
										</span>
									</del>
									<ins>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>89.00
										</span>
									</ins>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro201-1-270x350.jpg') }}" alt="Red Car" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onsale"><span class="number">-7%</span></span>
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Red Car</a>
								</h3>
								<span class="price">
									<del>
										<span class="kodory-Price-amount amount">
											<span
											class="kodory-Price-currencySymbol">$</span>150.00
										</span>
									</del>
									<ins>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>139.00
										</span>
									</ins>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro51012-1-270x350.jpg') }}" alt="Dazzling Toys" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onsale"><span class="number">-21%</span></span>
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Dazzling Toys</a>
								</h3>
								<span class="price">
									<del>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>125.00
										</span>
									</del>
									<ins>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>99.00
										</span>
									</ins>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro302-270x350.jpg') }}" alt="Cute Shoes" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Cute Shoes</a>
								</h3>
								<span class="price">
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>79.00
									</span>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro13-1-270x350.jpg') }}" alt="Hello Shirt" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Hello Shirt</a>
								</h3>
								<span class="price">
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>109.00
									</span>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro1211-2') }}-270x350.jpg" alt="Blue Shoes" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onsale"><span class="number">-14%</span></span>
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Blue Shoes</a>
								</h3>
								<span class="price">
									<del>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>138.00
										</span>
									</del>
									<ins>
										<span class="kodory-Price-amount amount">
											<span class="kodory-Price-currencySymbol">$</span>119.00
										</span>
									</ins>
								</span>
								<div class="rating-wapper ">
									<div class="star-rating">
										<span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
									</div>
									<span class="review">(1)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro181-2') }}-270x350.jpg" alt="Soccer Shoes" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Soccer Shoes</a>
								</h3>
								<span class="price">
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>98.00
									</span>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock first instock featured downloadable shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro101-1') }}-270x350.jpg" alt="Penguin Hoodie" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Penguin Hoodie</a>
								</h3>
								<span class="price">
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>60.00
									</span>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock  instock shipping-taxable purchasable product-type-simple">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro41-1') }}-270x350.jpg" alt="Cute Shoes" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew">
										<span class="text">New</span>
									</span>
								</div>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Cute Shoes</a>
								</h3>
								<span class="price">
									<span class="kodory-Price-amount amount">
										<span class="kodory-Price-currencySymbol">$</span>134.00
									</span>
								</span>
								<div class="rating-wapper nostar">
									<div class="star-rating">
										<span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span>
									</div>
									<span class="review">(0)</span>
								</div>
							</div>
						</div>
					</div>

					<div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock featured shipping-taxable purchasable product-type-variable has-default-attributes">
						<div class="product-inner tooltip-top tooltip-all-top">
							<div class="product-thumb">
								<a class="thumb-link" href="single-product.html">
									<img class="img-responsive" src="{{ asset('assets/landing/images/apro161-1') }}-270x350.jpg" alt="Kid Backpack" width="270" height="350">
								</a>
								<div class="flash">
									<span class="onnew"><span class="text">New</span></span>
								</div>
								<form class="variations_form cart">
									<table class="variations">
										<tbody>
											<tr>
												<td class="value">
													<select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
														<option data-type="" data-pa_color="" value="">Choose an
															option
														</option>
														<option data-width="30" data-height="30" data-type="color" data-pa_color="#3155e2" value="blue" class="attached enabled">Blue
														</option>
														<option data-width="30" data-height="30" data-type="color" data-pa_color="#52b745" value="green" class="attached enabled">Green
														</option>
														<option data-width="30" data-height="30" data-type="color" data-pa_color="#ffe59e" value="pink" class="attached enabled">Pink
														</option>
													</select>
													<div class="data-val attribute-pa_color" data-attributetype="box_style">
														<label>
															<input type="radio" name="color">
															<span class="change-value color" style="background: #3155e2;" data-value="blue">
															</span>
														</label>
														<label>
															<input type="radio" name="color">
															<span class="change-value color" style="background: #52b745;" data-value="green">
															</span>
														</label>
														<label>
															<input type="radio" name="color">
															<span class="change-value color" style="background: #ffe59e;" data-value="pink">
															</span>
														</label>
													</div>
													<a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
												</td>
											</tr>
										</tbody>
									</table>
								</form>
								<div class="group-button">
									<div class="add-to-cart">
										<a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Select
										options</a>
									</div>
									<a href="#" class="button yith-wcqv-button">Quick View</a>
									<div class="kodory product compare-button">
										<a href="compare.html" class="compare button">Compare</a>
									</div>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button show">
											<a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-info">
								<h3 class="product-name product_title">
									<a href="single-product.html">Kid Backpack</a>
								</h3>
								<span class="price"><span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>45.00</span> – <span class="kodory-Price-amount amount"><span class="kodory-Price-currencySymbol">$</span>54.00</span></span>
								<div class="rating-wapper nostar">
									<div class="star-rating"><span style="width:0%">Rated <strong
										class="rating">0</strong> out of 5</span></div>
										<span class="review">(0)</span></div>
									</div>
								</div>
							</div>
						</div>
						<!-- OWL Products -->
						<div class="shop-all">
							<a target=" _blank" href="shop.html">Discovery All</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-0181">
				<div class="container">
					<div class="kodory-heading style-01">
						<div class="heading-inner">
							<h3 class="title">
								What's Clients Says? <span></span>
							</h3>
							<div class="subtitle">
								Lore ipsum dolor sit amet consectetur
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-018">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="kodory-slide">
								<div class="owl-slick equal-container better-height"
								data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;vertical&quot;:false,&quot;verticalSwiping&quot;:false,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
								<div class="kodory-testimonial style-01">
									<div class="testimonial-inner">
										<div class="thumb">
											<img src="{{ asset('assets/landing/images/avatar1.png') }}" class="attachment-full size-full" alt="img" width="97" height="97">
										</div>
										<p class="desc">Lore ipsum dolor sit amet consectetur elit sagittis, quisque ut integer penatibus eleifend erat porttitor, viverra tristique dapibus fermentum. </p>
										<div class="testimonial-info">
											<div class="intro">
												<h3 class="name">
													<a href="#" target="_self" tabindex="0"> Charley Pratt </a>
												</h3>
												<div class="position">
													Customer
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kodory-testimonial style-01">
									<div class="testimonial-inner">
										<div class="thumb">
											<img src="{{ asset('assets/landing/images/avatar3.png') }}" class="attachment-full size-full" alt="img" width="97" height="97">
										</div>
										<p class="desc">Lore ipsum dolor sit amet consectetur elit sagittis, quisque ut integer penatibus eleifend erat porttitor, viverra tristique dapibus fermentum. </p>
										<div class="testimonial-info">
											<div class="intro">
												<h3 class="name">
													<a href="#" target="_self" tabindex="-1"> Nadia Pugh </a>
												</h3>
												<div class="position">
													Customer
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kodory-testimonial style-01">
									<div class="testimonial-inner">
										<div class="thumb">
											<img src="{{ asset('assets/landing/images/avatar2.png') }}" class="attachment-full size-full" alt="img" width="97" height="97">
										</div>
										<p class="desc">Lore ipsum dolor sit amet consectetur elit sagittis, quisque ut integer penatibus eleifend erat porttitor, viverra tristique dapibus fermentum. </p>
										<div class="testimonial-info">
											<div class="intro">
												<h3 class="name">
													<a href="#" target="_self" tabindex="-1"> Troy Bryant </a>
												</h3>
												<div class="position">
													Customer
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
		</div>
		<div class="section-001 pt-0">
			<div class="container">
				<div class="kodory-heading style-01">
					<div class="heading-inner">
						<h3 class="title">
							From Our Blog<span></span>
						</h3>
						<div class="subtitle">
							Lore ipsum dolor sit amet consectetur
						</div>
					</div>
				</div>
				<div class="kodory-blog style-02">
					<div class="blog-list-owl owl-slick equal-container better-height"
					data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
					<article class="post-item post-grid rows-space-0 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
						<div class="post-inner">
							<div class="post-thumb">
								<a href="single-post.html" tabindex="0">
									<img src="{{ asset('assets/landing/images/blogpost1-370x330') }}.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330">
								</a>
							</div>
							<div class="post-content">
								<div class="post-info">
									<div class="title-date">
										<h2 class="post-title">
											<a href="single-post.html" tabindex="0">Not your ordinary multi service.</a>
										</h2>
									</div>
									<div class="post-meta">
										<div class="post-author">
											<a href="#"> admin </a>
										</div>
										<div class="date">
											<a href="#">January 03, 2021</a>
										</div>
									</div> Lore ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora dapibus primis lacinia
								</div>
							</div>
						</div>
					</article>

					<article class="post-item post-grid rows-space-0 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">
						<div class="post-inner">
							<div class="post-thumb">
								<a href="single-post.html" tabindex="0">
									<img src="{{ asset('assets/landing/images/blogpost5-370x330') }}.jpg"
									class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
									height="330">
								</a>
							</div>
							<div class="post-content">
								<div class="post-info">
									<div class="title-date">
										<h2 class="post-title">
											<a href="single-post.html" tabindex="0">We bring you the best by working</a>
										</h2>
									</div>
									<div class="post-meta">
										<div class="post-author">
											<a href="#"> admin </a>
										</div>
										<div class="date">
											<a href="#">January 03, 2021</a>
										</div>
									</div> Lore ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora dapibus primis lacinia
								</div>
							</div>
						</div>
					</article>

					<article class="post-item post-grid rows-space-0 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">
						<div class="post-inner">
							<div class="post-thumb">
								<a href="single-post.html" tabindex="0">
									<img src="{{ asset('assets/landing/images/blogpost9-370x330') }}.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330">
								</a>
							</div>
							<div class="post-content">
								<div class="post-info">
									<div class="title-date">
										<h2 class="post-title"><a href="single-post.html" tabindex="0">We design functional best multi</a></h2>
									</div>
									<div class="post-meta">
										<div class="post-author">
											<a href="#"> admin </a>
										</div>
										<div class="date">
											<a href="#">January 03, 2021</a>
										</div>
									</div> Lore ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora dapibus primis lacinia
								</div>
							</div>
						</div>
					</article>

					<article class="post-item post-grid rows-space-0 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
						<div class="post-inner">
							<div class="post-thumb">
								<a href="single-post.html" tabindex="-1">
									<img src="{{ asset('assets/landing/images/blogpost4-370x330') }}.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330">
								</a>
							</div>
							<div class="post-content">
								<div class="post-info">
									<div class="title-date">
										<h2 class="post-title">
											<a href="single-post.html" tabindex="-1">The child is swimming with a buoy</a>
										</h2>
									</div>
									<div class="post-meta">
										<div class="post-author">
											<a href="#"> admin </a>
										</div>
										<div class="date">
											<a href="#">January 03, 2021</a>
										</div>
									</div> Lore ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora dapibus primis lacinia
								</div>
							</div>
						</div>
					</article>

					<article class="post-item post-grid rows-space-0 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-multi">
						<div class="post-inner">
							<div class="post-thumb">
								<a href="single-post.html" tabindex="-1">
									<img src="{{ asset('assets/landing/images/blogpost2-370x330') }}.jpg" class="img-responsive attachment-370x330 size-370x330" alt="img" width="370" height="330">
								</a>
							</div>
							<div class="post-content">
								<div class="post-info">
									<div class="title-date">
										<h2 class="post-title">
											<a href="single-post.html" tabindex="-1">Collection hiding beside beige wall</a>
										</h2>
									</div>
									<div class="post-meta">
										<div class="post-author">
											<a href="#"> admin </a>
										</div>
										<div class="date">
											<a href="#">January 03, 2021</a>
										</div>
									</div> Lore ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales quisque litora dapibus primis lacinia
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
	<div class="section-043 section-019">
		<div class="kodory-heading style-01">
			<div class="heading-inner">
				<h3 class="title">
					Follow Us <span></span>
				</h3>
				<div class="subtitle">
					@kodorystore
				</div>
			</div>
		</div>
		<div class="kodory-instagram style-01">
			<div class="instagram-owl owl-slick" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:6,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta1.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta2.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta3.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta4.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta5.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta6.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta7.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
				<div class="rows-space-0">
					<a target="_blank" href="#" class="item  " tabindex="0">
						<img class="img-responsive lazy" src="{{ asset('assets/landing/images/insta8.jpg') }}" alt="Home 03">
						<span class="instagram-info">
							<span class="social-wrap">
								<span class="social-info">1
									<i class="pe-7s-chat"></i>
								</span>
								<span class="social-info">0
									<i class="pe-7s-like2"></i>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<footer id="footer" class="footer style-03">
	<div class="section-001 section-020">
		<div class="container">
			<div class="kodory-newsletter style-03">
				<div class="newsletter-inner">
					<div class="newsletter-info">
						<div class="newsletter-wrap">
							<h3 class="title">Newsletter<span></span></h3>
							<h4 class="subtitle">Get Discount 30% Off</h4>
							<p class="desc">Nam sed felis at eros blandit ultrices et quis quam. In sit amet molestie
							lectus.</p>
						</div>
					</div>
					<div class="newsletter-form-wrap">
						<div class="newsletter-form-inner">
							<input class="email email-newsletter" name="email" placeholder="Enter your email ..."
							type="email">
							<a href="#" class="button btn-submit submit-newsletter">
								<span class="text">Subscribe</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="kodory-socials style-02">
				<div class="content-socials">
					<ul class="socials-list">
						<li>
							<a href="https://facebook.com/" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/" target="_blank">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section-021">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>© Copyright 2021 <a href="#">Kodory</a>. All Rights Reserved.</p>
				</div>
				<div class="col-md-6">
					<div class="kodory-listitem style-03">
						<div class="listitem-inner">
							<ul class="listitem-list">
								<li>
									<a href="#" target="_self">
									Contact </a>
								</li>
								<li>
									<a href="#" target="_self">
									Term &amp; Conditions </a>
								</li>
								<li>
									<a href="#" target="_self">
									Shipping </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer-device-mobile">
	<div class="wapper">
		<div class="footer-device-mobile-item device-home">
			<a href="index-2.html">
				<span class="icon">
					<span class="fa fa-home"></span>
				</span>
				Home
			</a>
		</div>
		<div class="footer-device-mobile-item device-home device-wishlist">
			<a href="wishlist.html">
				<span class="icon">
					<span class="flaticon-heart"></span>
				</span>
				Wishlist
			</a>
		</div>
		<div class="footer-device-mobile-item device-home device-cart">
			<a href="cart.html">
				<span class="icon">
					<span class="flaticon-shopping-bag-1"></span>
					<span class="count-icon">
						0
					</span>
				</span>
				<span class="text">Cart</span>
			</a>
		</div>
		<div class="footer-device-mobile-item device-home device-user">
			<a href="my-account.html">
				<span class="icon">
					<span class="flaticon-profile"></span>
				</span>
				Account
			</a>
		</div>
	</div>
</div>
<a href="#" class="backtotop active">
	<i class="fa fa-angle-double-up"></i>
</a>
@endsection