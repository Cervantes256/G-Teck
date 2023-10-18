	<?php require_once("config.php");
    require_once(ROOT_PATH . '/includes/head_section.php');  ?>
	<!-- title -->
	<title>G-Teck | Home </title>
	</head>
	<body>
	    <?php require_once(ROOT_PATH . '/includes/navbar.php'); ?>
	    <!-- search area -->
	    <div class="search-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
	                    <div class="search-bar">
	                        <div class="search-bar-tablecell">
	                            <h3>Search For:</h3>
	                            <input type="text" placeholder="Keywords">
	                            <button type="submit">Search <i class="fas fa-search"></i></button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- end search area -->

	    <!-- hero area -->
	    <div class="hero-area hero-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-9 offset-lg-2 text-center">
	                    <div class="hero-text">
	                        <div class="hero-text-tablecell">
	                            <p class="subtitle">Descubre la excelencia a un precio accesible</p>
	                            <h1>Equipos reacondicionados de calidad</h1>
	                            <div class="hero-btns">
	                                <a href="shop.html" class="boxed-btn">¡Compra Ahora!</a>
	                                <a href="contact.html" class="bordered-btn">Contactanos</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- end hero area -->

	    <!-- features list section -->
	    <div class="list-section pt-80 pb-80">
	        <div class="container">

	            <div class="row">
	                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
	                    <div class="list-box d-flex align-items-center">
	                        <div class="list-icon">
								<i class="fas fa-school"></i>	
	                        </div>
	                        <div class="content">
	                            <h3>¡Oferta especial para Alumnos y Maestros!</h3>
	                            <p>¡Presenta tu credencial y ahorra!</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
	                    <div class="list-box d-flex align-items-center">
	                        <div class="list-icon">
								<i class="fas fa-tools"></i>
	                        </div>
	                        <div class="content">
	                            <h3>Reparación y mantenimiento</h3>
	                            <p>Visitanos y consulta con nosotros</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6">
	                    <div class="list-box d-flex justify-content-start align-items-center">
	                        <div class="list-icon">
							<i class="fas fa-laptop"></i>
	                        </div>
	                        <div class="content">
	                            <h3>Componentes y periféricos</h3>
	                            <p>Amplia variedad de componentes y periféricos de alta calidad disponibles</p>
	                        </div>
	                    </div>
	                </div>
	            </div>

	        </div>
	    </div>
	    <!-- end features list section -->

	    <!-- product section -->
	    <div class="product-section mt-150 mb-150">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 offset-lg-2 text-center">
	                    <div class="section-title">
	                        <h3><span class="orange-text">Nuestos</span> Productos</h3>
	                        <p>Descubre lo mejor en productos reacondicionados. Calidad garantizada a precios increíbles. ¡Haz clic y compra ahora!</p>
	                    </div>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-lg-4 col-md-6 text-center">
	                    <div class="single-product-item">
	                        <div class="product-image">
	                            <a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
	                        </div>
	                        <h3>Lenovo</h3>
	                        <p class="product-price"><span></span> 85$ </p>
	                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 text-center">
	                    <div class="single-product-item">
	                        <div class="product-image">
	                            <a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
	                        </div>
	                        <h3>HP</h3>
	                        <p class="product-price"><span></span> 70$ </p>
	                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
	                    <div class="single-product-item">
	                        <div class="product-image">
	                            <a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
	                        </div>
	                        <h3>Dell</h3>
	                        <p class="product-price"><span></span> 35$ </p>
	                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- end product section -->

	    <?php require_once(ROOT_PATH . '/includes/footer.php'); ?>
	</body>
	<?php require_once(ROOT_PATH . '/includes/javascript.php'); ?>
	</html>