<!-- Offcanvas Menu start -->
<div class="offcanvas offcanvas-start" id="offcanvasMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="account-menu">
            <ul>
                <li><a href="#" onclick="validateLogin()">My Account</a></li>
                <li><a href="cart.html">compare <span>(0)</span></a></li>
                <li><a href="wishlist.html">Wishlist <span>(0)</span></a></li>
            </ul>
        </div>

        <div class="accordion" id="languageMenu">
            <div class="accordion-item">
                <button class="accordion-button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne">English</button>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#languageMenu">
                    <ul>
                        <li><a href="#">France</a></li>
                        <li><a href="#">Germany</a></li>
                        <li><a href="#">Japanese</a></li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo">USD</button>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#languageMenu">
                    <ul>
                        <li><a href="#">EUR - Euro</a></li>
                        <li><a href="#">GBP - British Pound</a></li>
                        <li><a href="#">INR - Indian Rupee</a></li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="mobail-menu">
            <nav class="offcanvas-menu">
                <ul>
                    <li class="active"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home shop 1</a></li>
                            <li><a href="index-2.html">Home shop 2</a></li>
                            <li><a href="index-3.html">Home shop 3</a></li>
                        </ul>
                    </li>
                    <li><a href="shop.html">Shop</a>
                        <ul class="sub-menu">
                            <li><a class="mega-title" href="#">Shop Layout</a>
                                <ul>
                                    <li><a href="shop-full-width.html">Full Width</a></li>
                                    <li><a href="shop-sitebar-right.html">Sidebar Right</a></li>
                                    <li><a href="shop-sitebar-left.html">Sidebar Left</a></li>
                                    <li><a href="Shop-list-view.html">List View</a></li>
                                </ul>
                            </li>
                            <li><a class="mega-title" href="#">Shop Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="account.html">My account</a></li>
                                    <li><a href="cart.html">Shoping cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                </ul>
                            </li>
                            <li><a class="mega-title" href="#">Product type</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-simple-product.html">simple product</a></li>
                                    <li><a href="shop-variable-Product.html">Variable Product</a></li>
                                    <li><a href="shop-grouped-Product.html">Grouped Product</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">blog</a>
                        <ul class="sub-menu">
                            <li><a href="#">Blog Layouts 1</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-left-sitebar-list.html">left sitebar list</a></li>
                                    <li><a href="blog-left-sitebar-1.html">left sitebar grid 1</a></li>
                                    <li><a href="blog-left-sitebar-2.html">left sitebar grid 2</a></li>
                                    <li><a href="blog-left-sitebar-3.html">left sitebar grid 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Layouts 2</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-right-sitebar-list.html">right sitebar list</a></li>
                                    <li><a href="blog-right-sitebar-list-1.html">right sitebar list 1</a></li>
                                    <li><a href="blog-right-sitebar-list-2.html">right sitebar list 2</a></li>
                                    <li><a href="blog-right-sitebar-list-3.html">right sitebar list 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Layouts 3</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-1-col.html">grid 1 columns</a></li>
                                    <li><a href="blog-2-col.html">grid 2 columns</a></li>
                                    <li><a href="blog-3-col.html">grid 3 columns</a></li>
                                    <li><a href="blog-4-col.html">grid 4 columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Layouts 4</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-1.html">format:images</a></li>
                                    <li><a href="blog-details-gallery.html">format:gallery</a></li>
                                    <li><a href="blog-details-vedio.html">format:video</a></li>
                                    <li><a href="blog-details-2.html">format:audio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">about us</a></li>
                            <li><a href="faq.html">F.A.Q.s</a></li>
                            <li><a href="404.html">404 pages</a></li>
                        </ul>
                    </li>
                    <li><a href="protfolio.html">Protfolio</a>
                        <ul class="sub-menu">
                            <li><a href="protfolio-details-1.html">single project</a></li>
                            <li><a href="protfolio-2-col.html">two columns</a></li>
                            <li><a href="protfolio-3-col.html">three columns</a></li>
                            <li><a href="protfolio.html">four columns</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">contact us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div id="active1" class="nivo-html-caption">
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div class="slide1-text text-left">
                    <div class="middle-text">
                        <div class="cap-sub-title animated">
                            <h3>Welcome to market </h3>
                        </div>
                        <div class="cap-title animated text-uppercase">
                            <h1>Rayed Bravia KDL </h1>
                        </div>
                        <div class="cap-dec animated">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem<br /> consuetudium
                                lectorum. </p>
                        </div>
                        <div class="cap-readmore animated">
                            <a href="#">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-progress"></div>
</div>

<!-- product area start -->
<div class="product-area ptb-35">
    <div class="banner">
        <div class="c-testimonials">
            <ul class="c-testimonials__items swiper-wrapper">

                <!-- CARD 1 -->
                <li class="c-testimonials__item c-card-testimonial swiper-slide">
                    <div class="c-card-testimonial__profile">
                        <img src="public/assets\images\banner\GTX-1650.jpg" alt="" class="c-card-testimonial__image">
                    </div>

                    <div class="c-card-testimonial__description">
                        <span class="c-card-testimonial__job">
                            Best Seller
                        </span>

                        <div class="c-card-testimonial__author">
                            Gigabyte Geforce GTX 1650
                        </div>

                        <div class="c-card-testimonial__excerpt">
                            Hiệu suất gaming mạnh mẽ. Trải nghiệm đồ họa sống động và đa nhiệm mượt mà. Sẵn sàng đưa
                            game của bạn lên tầm cao mới. Đối tác đáng tin cậy cho mọi thách thức đồ họa!
                        </div>

                        <!-- <a href="https://www.linkedin.com/in/hugo-salazar/"
						   class="c-card-testimonial__link"
						   target="_blank">
						   More on Linkedin
						</a> -->
                    </div>
                </li>

                <!-- CARD 2 -->
                <!-- CARD 2 -->
                <li class="c-testimonials__item c-card-testimonial swiper-slide">
                    <div class="c-card-testimonial__profile">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2023/11/359840372/XL/OE/YW/202540934/asus-proart-rtx-4070-ti-oc-edition-12gb-graphics-card.jpg"
                            alt="" class="c-card-testimonial__image">
                    </div>

                    <div class="c-card-testimonial__description">
                        <span class="c-card-testimonial__job">
                            Best seller
                        </span>

                        <div class="c-card-testimonial__author">
                            Vga Asus Pro Art RTX 4070 TI OC 12GB
                        </div>

                        <div class="c-card-testimonial__excerpt">
                            Sở hữu dung lượng VRAM 12GB, tối ưu cho đồ họa và công việc sáng tạo đi kèm với công
                            nghệ OC tăng hiệu
                            suất. Đối tác lý tưởng cho mọi dự án sáng tạo của bạn!
                        </div>

                        <!-- <a href="https://www.linkedin.com/in/hugo-salazar/"
						   class="c-card-testimonial__link"
						   target="_blank">
						   More on Linkedin
						</a> -->
                    </div>
                </li>

            </ul>

            <div class="c-testimonials__pagination"></div>

            <!-- <div class="c-testimonials__arrows">
					  <button class="c-testimonials__arrow-prev">Prev</button>
					  <button class="c-testimonials__arrow-next">Next</button>
				  </div> -->
        </div>

    </div>
    <div class="container">
        <div class="product box-shadow bg-fff">
            <div class="product-title bg-1 text-uppercase">
                <i class="fa fa-star-o icon bg-4"></i>
                <h3>best seller</h3>
            </div>
            <div class="product-active left-right-angle">
                <div class="product-wrapper bl">
                    <div class="product-img">
                        <a href="#">
                            <img src="public/assets/images/product/geforce GTX 1650.png" alt="" class="primary" />
                            <img src="public/assets/images/product/geforce GTX 1650 (1).png" alt="" class="secondary" />
                        </a>
                        <div class="product-icon c-fff hover-bg">
                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                            class="fa fa-comments"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                        <span class="sale">Sale</span>
                    </div>
                    <div class="product-content">
                        <h3><a href="#">Gigabyte Geforce GTX 1650</a></h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>3.790.000đ</span>
                    </div>
                </div>
                <div class="product-wrapper bl">
                    <div class="product-img">
                        <a href="#">
                            <img src="public/assets/images/product/VGA Asus proart geforce rtx 4060.png" alt=""
                                class="primary" />
                            <img src="public/assets/images/product/VGA Asus proart geforce rtx 4060 (1).png" alt=""
                                class="secondary" />
                        </a>
                        <div class="product-icon c-fff hover-bg">
                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                            class="fa fa-comments"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="#">VGA Asus ProArt GeForce RTX 4060 OC Edition</a></h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>9.990.000đ</span>
                    </div>
                </div>
                <div class="product-wrapper bl">
                    <div class="product-img">
                        <a href="#">
                            <img src="https://product.hstatic.net/200000478869/product/4070_box01_card-gx_7441236ce62845b4b4956b5f7dcb8f1b_grande.png"
                                alt="" class="primary" />
                            <img src="public/assets/images/product/VGA Asus ROG Strix Radeon RX 7600 (1).png" alt=""
                                class="secondary" />
                        </a>
                        <div class="product-icon c-fff hover-bg">
                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                            class="fa fa-comments"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="#">Vga Galax GeForce RTX 4070 EX Gamer White/Pink</a></h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>18.190.000đ</span>
                    </div>
                </div>
                <div class="product-wrapper bl">
                    <div class="product-img">
                        <a href="#">
                            <img src="public/assets/images/product/VGA Gigabyte GeForce RTX 4060 GAMING.png" alt=""
                                class="primary" />
                            <img src="public/assets/images/product/VGA Gigabyte GeForce RTX 4060 GAMING (1).png" alt=""
                                class="secondary" />
                        </a>
                        <div class="product-icon c-fff hover-bg">
                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                            class="fa fa-comments"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="#">VGA Gigabyte GeForce RTX 4060 GAMING</a></h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>10.390.000đ</span>
                    </div>
                </div>
                <div class="product-wrapper bl">
                    <div class="product-img">
                        <a href="#">
                            <img src="https://starfish.com.vn/UserUpload/Product/-galax-geforce-rtx-4060-ti-8gb-ex-white.png?width=500&Watermark="
                                alt="" class="primary" />
                            <img src="https://dlcdnwebimgs.asus.com/gain/578ab1f3-4362-4a55-b5f7-1fc4084c6c21/" alt=""
                                class="secondary" />
                        </a>
                        <div class="product-icon c-fff hover-bg">
                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                            class="fa fa-comments"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="#">Vga Galax GeForce RTX 4060 Ti 8GB EX White</a></h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>12.290.000đ</span>
                    </div>
                </div>
                <div class="product-wrapper bl">
                    <div class="product-img">
                        <a href="#">
                            <img src="https://anphat.com.vn/media/product/45344_vga_msi_geforce_rtx_4060_ti_gaming_x_8gb__2_.jpg"
                                alt="" class="primary" />
                            <img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
                        </a>
                        <div class="product-icon c-fff hover-bg">
                            <ul>
                                <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                            class="fa fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                            class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                            class="fa fa-comments"></i></a></li>
                                <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                            class="fa fa-search"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="#">Vga MSI GeForce RTX 4060 Ti GAMING X 8G</a></h3>
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>12.699.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area end -->

<!-- banner-area start -->
<!-- banner-area end -->

<!-- all-product-area start -->
<div class="all-product-area mtb-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="latest-deals box-shadow mb-35 bg-fff">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title bg-2 text-uppercase">
                                <i class="fa fa-history icon bg-3"></i>
                                <h3>latest deals</h3>
                            </div>
                        </div>
                    </div>
                    <div class="latest-deals-active">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="#">
                                    <img src="https://product.hstatic.net/200000722513/product/tuf-gaming-rtx4080-16g-01_470b69e500c144b59394fddfb36f2b18_48c497412be244dab0e68017309900e5_grande.jpg"
                                        alt="" class="primary" />
                                    <img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
                                </a>
                                <div class="product-icon hover-bg">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                    class="fa fa-comments"></i></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                    class="fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                                <span class="sale">Sale</span>
                                <div class="deal-count">
                                    <div class="timer">
                                        <div data-countdown="2023/12/01"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="#">ASUS TUF Gaming GeForce RTX 4080 16GB </a></h3>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <div class="lasest-detail-cost">
                                    <span>37.900.000</span>
                                    <small>46.000.000</small>
                                    <button>17%</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="product-wrapper">
								<div class="product-img">
									<a href="#">
										<img src="public/assets/images/product/6.jpg" alt="" class="primary" />
										<img src="public/assets/images/product/3.jpg" alt="" class="secondary" />
									</a>
									<div class="product-icon hover-bg">
										<ul>
											<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
														class="fa fa-shopping-cart"></i></a></li>
											<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
														class="fa fa-heart-o"></i></a></li>
											<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
														class="fa fa-comments"></i></a></li>
											<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
														class="fa fa-search"></i></a></li>
										</ul>
									</div>
									<span class="sale">Sale</span>
									<div class="deal-count">
										<div class="timer">
											<div data-countdown="2023/12/01"></div>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="#">Adipiscing cursus eu</a></h3>
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<span>&300.00</span>
								</div>
							</div>
							<div class="product-wrapper">
								<div class="product-img">
									<a href="#">
										<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
										<img src="public/assets/images/product/5.jpg" alt="" class="secondary" />
									</a>
									<div class="product-icon hover-bg">
										<ul>
											<li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
														class="fa fa-shopping-cart"></i></a></li>
											<li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
														class="fa fa-heart-o"></i></a></li>
											<li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
														class="fa fa-comments"></i></a></li>
											<li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
														class="fa fa-search"></i></a></li>
										</ul>
									</div>
									<span class="sale">Sale</span>
									<div class="deal-count">
										<div class="timer">
											<div data-countdown="2023/12/01"></div>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="#">Adipiscing cursus eu</a></h3>
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<span>&300.00</span>
								</div>
							</div> -->
                    </div>
                </div>
                <!-- featured-area start -->
                <!-- <div class="featured-area box-shadow bg-fff">
						<div class="product-title bg-1 text-uppercase">
							<i class="fa fa-star-o icon bg-4"></i>
							<h3>featured</h3>
						</div>
						<div class="feautred-active right left-right-angle">
							<div class="featured-wrapper">
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/1.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/5.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
							</div>
							<div class="featured-wrapper">
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/1.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/5.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
							</div>
							<div class="featured-wrapper">
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/1.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/5.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
							</div>
							<div class="featured-wrapper">
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/1.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/5.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
								<div class="product-wrapper single-featured mtb-15">
									<div class="product-img floatleft">
										<a href="#">
											<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
											<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
										</a>
									</div>
									<div class="product-content floatright">
										<h3><a href="#">Duis convallis</a></h3>
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
										<span>&300.00</span>
									</div>
								</div>
							</div>
						</div>
					</div> -->
                <!-- featured-area end -->
                <!-- testimonils-area start -->
                <!-- <div class="testimonils-area box-shadow mtb-35 bg-fff">
						<div class="product-title bg-1 text-uppercase">
							<i class="fa fa-star-o icon bg-4"></i>
							<h3>TESTIMONIALS</h3>
						</div>
						<div class="feautred-active right left-right-angle">
							<div class="single-testimonil clear">
								<div class="testimonil-content p mtb-25">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
										consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
										et iusto odio dignissim…</p>
								</div>
								<div class="test-img floatleft">
									<img src="public/assets/images/test/2.jpg" alt="">
								</div>
								<div class="test-info">
									<h6>Kaji Hasibur Rahman</h6>
									<span>Web Designer</span>
								</div>
							</div>
							<div class="single-testimonil clear">
								<div class="testimonil-content p mtb-25">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
										consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
										et iusto odio dignissim…</p>
								</div>
								<div class="test-img floatleft">
									<img src="public/assets/images/test/1.jpg" alt="">
								</div>
								<div class="test-info">
									<h6>Lorem ipsum</h6>
									<span>CEO of WooThemes</span>
								</div>
							</div>
							<div class="single-testimonil clear">
								<div class="testimonil-content p mtb-25">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
										consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
										et iusto odio dignissim…</p>
								</div>
								<div class="test-img floatleft">
									<img src="public/assets/images/test/1.jpg" alt="">
								</div>
								<div class="test-info">
									<h6>Lorem ipsum</h6>
									<span>CEO of WooThemes</span>
								</div>
							</div>
						</div>
					</div> -->
                <!-- testimonils-area end -->
                <!-- blog-area start -->
                <div class="blog-area box-shadow bg-fff">
                    <div>
                        <div class="blog-wrapper">
                            <img src="https://taihinhgoc.net/uploads/images/tranh-tong-hop-3/file-banner-poster-sale-quang-cao-san-pham-101-demo.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="blog-area box-shadow bg-fff">
                    <div>
                        <div class="blog-wrapper">
                            <img src="https://taihinhgoc.net/uploads/images/tranh-tong-hop-3/file-banner-poster-sale-quang-cao-san-pham-101-demo.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="blog-area box-shadow bg-fff">
                    <div>
                        <div class="blog-wrapper">
                            <img src="https://taihinhgoc.net/uploads/images/tranh-tong-hop-3/file-banner-poster-sale-quang-cao-san-pham-101-demo.jpg"
                                alt="">
                        </div>
                    </div>
                </div>

                <!-- blog-area end -->
                <!-- newsletter-area start -->
                <!-- <div class="newsletter-area box-shadow mt-35 bg-fff">
						<div class="product-title bg-1 text-uppercase">
							<i class="fa fa-envelope-o icon bg-4"></i>
							<h3>NEWSLETTER SIGN UP</h3>
						</div>
						<div class="newsletter form-style plbr-15">
							<p> Submit your mail to get events </p>
							<form action="#">
								<input type="email" placeholder="Email" />
								<button><i class="fa fa-paper-plane-o"></i></button>
							</form>
						</div>
					</div> -->
                <!-- newsletter-area start -->
            </div>
            <!-- product-area start -->
            <div class="col-lg-9">
                <div class="product box-shadow bg-fff">
                    <div class="product-title bg-1 text-uppercase">
                        <i class="fa fa-paper-plane-o icon bg-4"></i>
                        <h3>New Products</h3>
                    </div>
                    <div class="new-product-active left left-right-angle">
                        <div class="product-items">
                            <div class="product-wrapper bb bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://anphat.com.vn/media/product/45347_1.jpg" alt=""
                                            class="primary" />
                                        <img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">VGA MSI GeForce RTX 4060 Ti VENTUS 2X BLACK 8GB OC</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>11.599.000đ</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/W55ucxyhWxaz_MR0uBuodX6vmC9ir89r-3y3hQvvMrYlUh8DAsgt4FTezjjE6Zju8I7_T0n7UFrbfWId5E01q0dW6tCSvLo=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">MSI RTX 4070 GAMING X SLIM 12G</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>19.190.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-items">
                            <div class="product-wrapper bb bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asus-rog-strix-geforce-rtx-4090-oc-edition-24gb-gddr6x-1.jpg?v=1668848727467"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/13.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">VGA Asus GeForce RTX 4090 OC Edition</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>56.990.000đ</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/otyC8SPS39jjl4UZnwpKmDK48S1-xdWJuv1KFuBA4S75CC0oJViVHWxz4x8xTzbYFjLtilw973xyv-rEilPeer-A0tAGCp0f=w1000-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/5.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">GIGABYTE Radeon RX 6600 EAGLE 8G</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>29.579.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-items">
                            <div class="product-wrapper bb bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://anphat.com.vn/media/product/45338_vga_gigabyte_rtx_4060_ti_aero_oc_8gb__n406taero_oc_8gd__anphat_88.jpg"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Vga Gigabyte GeForce RTX 4060 Ti AERO OC 16G </a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>13.099.000đ</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/7geqZy6bSVq0iN5BEk8yDny5vWGuGtJRKHRwAyOfRBfB3jUUF4x_B1e7kCDSQUqnPNxK8Qghfk0rb4_rxyTX4VthZR4NuwJB=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">GIGABYTE GeForce GTX 1650 D6 OC</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>4.190.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-items">
                            <div class="product-wrapper bb bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/OuZ6pf4Qg-NixlbqnUjH7fR6JNUPYMGAY-U4EuS2xMuZZ0TXZdkxcYOyEzs_OCTfUeb9dyux1Uq8lcL4wp0-280hoPY68fY=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Vga Asus ROG STRIX RTX4090 O24G</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>69.990.000đ</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://starfish.com.vn/UserUpload/Product/card-do-hoa-galax-geforce-rtx-4070-ti-gamer-.png?height=300&mode=pad&Watermark="
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Vga Galax GeForce RTX 4070 EX Gamer Black</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>15.690.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-items">
                            <div class="product-wrapper bb bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/RA6SjOwP8j4ipCiQoqbWWHzHmNBvhpUWcPEFFexQJ6K_cTCU9E18fiF-mxMeKniv6Bxz6oOacjyv4JggX3WfjzhJYTp8quxf=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/10.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Vga Gigabyte GeForce RTX 4060 Ti EAGLE 8G</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>11.879.000đ</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/ceSvMA4xHm0ceRPSYt3Ihtnx3lebLbnSwqif0hXlt-a0ZnDYxsGpEt4MigOBl9WvIRuzCqvqxpG4VwLytA=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/12.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">GIGABYTE GeForce GTX 1650 D6 WINDFORCE OC</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>3.890.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-items">
                            <div class="product-wrapper bb bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/GJME7VjzpPjRk1uXFuMLwCK8TdjPHEBWrwySW9N9y6bjFDta2BqDGg4sSN9YjBvcNKKG8_S4Wo7yMC5mJMk3GmxXzNpXRQC1nw=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/14.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">ASUS Dual GeForce RTX 4070 OC Edition</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>17.290.000đ</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="https://lh3.googleusercontent.com/liFNutR0VkwYszbuqimqTIAZNtApdMYOHgsxi85h9WRVSclbzM4ZF3Wnr2oSniGVhKmLARkWmFxi8qlQRsk=w500-rw"
                                            alt="" class="primary" />
                                        <img src="public/assets/images/product/16.jpg" alt="" class="secondary" />
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                        class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                        class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">MSI GeForce GTX 1650 D6 VENTUS XS OCV1</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>3.849.000đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- banner-area start -->
                <!-- <div class="banner-area mtb-35">
						<div class="row g-4">
							<div class="col-md-6">
								<div class="single-banner">
									<a href="#">
										<img src="public/assets/images/banner/4.jpg" alt="">
									</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single-banner">
									<a href="#">
										<img src="public/assets/images/banner/5.jpg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div> -->
                <!-- banner-area end -->
                <!-- tab-area start -->
                <div class="tab-area box-shadow bg-fff">
                    <div class="product-title bg-1 text-uppercase">
                        <i class="fa fa-check-square-o icon bg-4"></i>
                        <h3>Products category</h3>
                        <div class="tab-menu floatright">
                            <!-- <ul class="nav" role="tablist">
									<li><a class="active" href="#electronics" data-bs-toggle="tab">Electronics</a></li>
									<li><a href="#smartphone" data-bs-toggle="tab">Smartphone</a></li>
									<li><a href="#tablets" data-bs-toggle="tab">Tablets</a></li>
								</ul> -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="electronics">
                            <div class="tab-active left left-right-angle">
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://product.hstatic.net/200000722513/product/1024_db714ed2cb1e4e6fa1d6ebec4cd92fb9_af81e6f9d5294638a9587f509a69c660_grande.jpg"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/2.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">MSI GeForce RTX 4090 SUPRIM X 24G</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>53.900.000đ</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-asus-tuf-gaming-geforce-rtx-4070-ti-12gb-gddr6x-tuf-rtx4070ti-12g-gaming.jpg?v=1677915530620"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/4.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Asus TUF RTX 4080 16GB GAMING GDDR6X</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>37.990.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://hanoicomputercdn.com/media/product/57938_card_man_hinh_msi_rtx_3060_ventus_2x_oc_12_gb_1.jpg"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/6.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">MSI RTX 3060 VENTUS 2X OC 12 GB</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>7.799.000đ</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="data:image/jpeg;base64,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"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/8.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Vga Asus DUAL - RTX 3060-O12G WHITE</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>8.090.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://nguyencongpc.vn/media/product/250-21124-galax-pg190-black-geforce-rtx-3060--1-click-oc--12gb.jpg"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/10.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Galax PG190 Black GF RTX 3060 (1-Click OC) 12GB</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>7.490.000đ</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://tandoanh.vn/wp-content/uploads/2023/01/Gigabyte-AORUS-GeForce-RTX%E2%84%A2-4070-MASTER-12G-H1-600x600.jpg.webp"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/12.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Vga Gigabyte Geforce RTX 4070 AORUS MASTER 12G
                                                    GDDR6X</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span> 20.900.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://anphat.com.vn/media/product/45529_vga_asus_proart_geforce_rtx_4070_ti_oc_12gb_gddr6x.jpg"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/14.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Vga Asus Pro Art RTX 4070 TI OC 12GB</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>23.900.000đ</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://bizweb.dktcdn.net/thumb/grande/100/329/122/products/vga-gigabyte-geforce-rtx-4060-aorus-elite-8g-gddr6-gv-n4060aorus-e-8gd.jpg?v=1688035892793"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/16.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Vga Gigabyte GeForce RTX 4060 AORUS ELITE 8G</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>11.290.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://hanoicomputercdn.com/media/product/60173_card_man_hinh_galax_gtx_1650_ex_1_click_oc_4gb_ddr6_65sql8ds66e6_1.jpg"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/8.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Galax GTX 1650 EX PLUS (1-Click OC) 4GB GDDR6</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>6.149.000đ</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="https://nguyenvu-store-medias.tn-cdn.net/2023/03/card-man-hinh-galax-geforce-gt-730-4gb-ddr3-1.jpg"
                                                    alt="" class="primary" />
                                                <img src="public/assets/images/product/6.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">GeForce GT 730 4GB DDR3</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>1.350.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="smartphone">
                            <div class="tab-active left left-right-angle">
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/16.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/15.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/14.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/13.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/12.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/11.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/10.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/9.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/8.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/7.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/6.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/5.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/4.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/3.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/2.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/1.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/6.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/7.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/8.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/9.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tablets">
                            <div class="tab-active left left-right-angle">
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/4.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/8.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/5.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/2.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/2.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/9.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/11.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/9.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/12.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/14.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/5.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/7.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/13.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/14.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/9.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/16.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-items">
                                    <div class="product-wrapper bb bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/10.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/1.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="public/assets/images/product/12.jpg" alt="" class="primary" />
                                                <img src="public/assets/images/product/6.jpg" alt=""
                                                    class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff hover-bg">
                                                <ul>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Add to cart"><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                                class="fa fa-comments"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" title="Accumsan eli"><i
                                                                class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mostviewed-area start -->
                <!-- <div class="mostviewed-area mt-35 box-shadow bg-fff">
						<div class="product-title bg-1 text-uppercase">
							<i class="fa fa-check-square-o icon bg-4"></i>
							<h3>Mostviewed</h3>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="single-banner">
									<a href="#">
										<img src="public/assets/images/banner/6.jpg" alt="">
									</a>
								</div>
							</div>
							<div class="col-lg-8 col-md-8">
								<div class="mostviewed-active left-right-angle">
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/6.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatleft">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/11.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/9.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/7.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Cras nec nisl ut erat</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/15.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/17.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Ligula euismod eget</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/8.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/18.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/5.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/1.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/2.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/5.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/9.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/10.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/11.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/12.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/13.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/14.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/15.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/16.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/17.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/18.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
									<div class="featured-wrapper">
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/3.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/4.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/5.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/6.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
										<div class="product-wrapper single-featured mtb-15">
											<div class="product-img floatleft">
												<a href="#">
													<img src="public/assets/images/product/7.jpg" alt="" class="primary" />
													<img src="public/assets/images/product/8.jpg" alt="" class="secondary" />
												</a>
											</div>
											<div class="product-content floatright">
												<h3><a href="#">Adipiscing cursus eu</a></h3>
												<ul>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
												<span>&300.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
                <!-- mostviewed-area end -->
                <div class="banner-area banner-3-images">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="public/assets/images/banner/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="public/assets/images/banner/2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="public/assets/images/banner/3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product-area end -->
        </div>
    </div>
</div>
<!-- all-product-area end -->

<!-- brand-area start -->
<div class="brand-area mb-35">
    <div class="container">
        <div class="brand-active  box-shadow p-15  bg-fff">
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/1.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/2.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/3.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/1.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/4.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/5.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/6.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/7.jpg" alt="" />
                </a>
            </div>
            <div class="single-brand">
                <a href="#">
                    <img src="public/assets/images/brand/8.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->

<!-- order-area start -->
<div class="order-area ptb-30 bt bg-fff">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6">
                <div class="single-order c-fff bg-1 p-20">
                    <div class="order-icon">
                        <span class="fa fa-plane"></span>
                    </div>
                    <div class="order-content">
                        <h5>World-Wide Shipping</h5>
                        <span>On order over $100</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-order c-fff bg-1 p-20">
                    <div class="order-icon">
                        <span class="fa fa-refresh"></span>
                    </div>
                    <div class="order-content">
                        <h5>30 Days Return</h5>
                        <span>Moneyback guarantee</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-order c-fff bg-1 p-20">
                    <div class="order-icon">
                        <span class="fa fa-umbrella"></span>
                    </div>
                    <div class="order-content">
                        <h5>SUPPORT 24/7</h5>
                        <span>Call us: ( +123 ) 456 789</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-order c-fff bg-1 p-20">
                    <div class="order-icon">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="order-content">
                        <h5>MEMBER DISCOUNT</h5>
                        <span>10% on order over $200</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- order-area end -->