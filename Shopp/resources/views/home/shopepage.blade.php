<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Explore Craft Studio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f8d93d;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        nav {
            nav {
                display: flex;
                align-items: center;
                gap: 20px;
            }
        }
        nav a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            font-size: 16px;
        }
        nav a:hover {
            background-color: #f8d93d;
            color: #fff;
            border-radius: 5px;
        }
        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }
        .search-bar input {
            padding: 10px;
            border-radius: 20px;
            border: none;
            width: 300px;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .search-bar button {
            background-color: transparent;
            border: none;
            position: absolute;
            right: 10px;
            cursor: pointer;
        }

        .hide-cart {
            visibility: hidden;
        }

        .show-cart {
            visibility: visible;
        }

        .search-bar button img {
            width: 20px;
            height: 20px;
        }
        /* Navbar and Dropdown Styling */
        /* Navbar */
        .navbar {
            background-color: #ffffff;
            display: flex;
            justify-content: space-between; /* Changed to space-between for even distribution */
            padding: 15px 120px; /* Increased padding for wider spacing on sides */
            border-bottom: 1px solid #eee;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            width: 100%;
            box-sizing: border-box;
        }

        .navbar a {
            color: #333;
            text-decoration: none;
            font-family: Arial, sans-serif; /* Consistent font family */
            font-weight: 600; /* Semi-bold to match image */
            font-size: 14px;
            text-transform: uppercase; /* Makes all text uppercase */
            padding: 8px 0;
            transition: color 0.3s ease;
            letter-spacing: 0.5px; /* Added slight letter spacing */
        }

        .navbar a:hover {
            color: #000;
            background-color: transparent;
            border-radius: 0;
            padding: 8px 0;
        }
        /* Tambah efek garis bawah saat hover */
        .navbar a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #f8d93d;
            transition: width 0.3s ease;
        }

        .navbar a:hover::after {
            width: 100%;
        }
        .navbar a:hover {
            color: #000;
        }
        /* Khusus untuk Categories */
        .navbar a.categories {
            display: flex;
            align-items: center;
        }

        .navbar a.categories::after {
            content: "▼";
            font-size: 8px;
            margin-left: 5px;
            color: #333;
        }

        /* Optional: Add yellow top bar */
        .top-bar {
            background-color: #f8d93d;
            height: 5px;
            width: 100%;
        }
        /* Active state - for the current page */
        .navbar a.active {
            color: #000;
        }

        /* Dropdown */
        .dropdown {
            position: relative;
        }

        .dropbtn {
            font-size: 16px;
            color: #333;
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
        }
        .dropdown-content a {
            color: #333;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            color: #111111;
        }
        /* Updated styles for icons */
        .icons {
            display: flex;
            gap: 20px; /* Space between each icon */
            align-items: center;
            margin-left: auto; /* Push icons to the right */
        }
        .image-container {
            position: relative;
            width: 24px;  /* Matches the width of previous icons */
            height: 24px;  /* Matches the height of previous icons */
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 24px;
            transition: opacity 0.5s ease;
        }

        .first-pair .black-image {
            opacity: 1;
        }
        .first-pair .blue-image {
            opacity: 0;
        }
        .first-pair:hover .black-image {
            opacity: 0;
        }
        .first-pair:hover .blue-image {
            opacity: 1;
        }

        /* Second image pair hover effect */
        .second-pair .black2-image {
            opacity: 1;
        }
        .second-pair .blue2-image {
            opacity: 0;
        }
        .second-pair:hover .black2-image {
            opacity: 0;
        }
        .second-pair:hover .blue2-image {
            opacity: 1;
        }
        /* Third image pair hover effect */
        .third-pair .black3-image {
            opacity: 1;
        }
        .third-pair .blue3-image {
            opacity: 0;
        }
        .third-pair:hover .black3-image {
            opacity: 0;
        }
        .third-pair:hover .blue3-image {
            opacity: 1;
        }


        .image-container:hover .black-image {
            opacity: 0;
        }
        .image-container:hover .blue-image {
            opacity: 1;
        }
        .banner {
            background-color: #f4f4f4;
            text-align: center;
            padding: 40px 0;
        }
        .banner h1 {
            font-size: 36px;
            color: #333;
        }
        .banner p {
            font-size: 18px;
            color: #666;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        .section {
            margin: 40px 0;
        }
        .section h2 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #333;
        }
        .card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: calc(25% - 20px);
            box-sizing: border-box;
        }
        .card img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .price {
            color: #f08b13;
            font-weight: bold;
        }
        footer {
            background-color: #f8d93d;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Basic styles for the footer */
        .footer {
            background-color: #f8d93d; /* Yellow background */
            padding: 20px 0;
            text-align: center;
            color: #333;
            width: 100%;
            /* Remove any fixed or sticky positioning */
            position: relative;
        }

        .footer h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-icons img {
            width: 30px;
            height: 30px;
            cursor: pointer;
        }
        /* Third image pair hover effect */
        .third-pair .black3-image {
            opacity: 1;
        }
        .third-pair .blue3-image {
            opacity: 0;
        }
        .third-pair:hover .black3-image {
            opacity: 0;
        }
        .third-pair:hover .blue3-image {
            opacity: 1;
        }
        /* Main Content Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Search Section Styles */
        .search-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .search-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .search-box {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-box input {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 16px;
            background-color: #f8f8f8;
        }

        .search-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        /* Category Icons Styles */
        .category-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .category-item {
            text-align: center;
            cursor: pointer;
        }

        .category-item img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .category-item span {
            display: block;
            color: #333;
            font-weight: 500;
        }

        /* Suggested Products Styles */
        .suggested-products {
            margin-top: 50px;
        }

        .suggested-products h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 10px;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .product-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .product-info {
            padding: 10px;
        }

        .product-info h4 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .price {
            color: #f8d93d;
            font-weight: bold;
            margin: 5px 0;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
        }

        .rating span {
            color: #ffd700;
        }

        .reviews {
            color: #666;
            font-size: 12px;
        }
        /* All Products Section Styles */
        .all-products {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-controls {
            display: flex;
            gap: 10px;
        }

        .filter-btn, .sort-btn {
            padding: 8px 16px;
            border: 1px solid #ddd;
            border-radius: 20px;
            background: white;
            cursor: pointer;
            font-size: 14px;
        }

        .filter-btn:hover, .sort-btn:hover {
            background: #f5f5f5;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .product-item {
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .product-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-details {
            padding: 12px;
        }

        .product-details h3 {
            margin: 0;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #666;
            margin-top: 8px;
        }

        .rating {
            color: #ffd700;
        }

        .reviews {
            color: #666;
        }

        .location, .sold, .stock {
            color: #666;
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 40px;
        }

        .pagination a, .pagination span {
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
            text-decoration: none;
        }

        .pagination a:hover {
            background: #f5f5f5;
        }

        .pagination a.active {
            background: #f8d93d;
            border-color: #f8d93d;
            color: white;
        }

        .pagination .dots {
            border: none;
            padding: 8px;
        }

        .pagination .next {
            font-size: 18px;
            line-height: 1;
        }

    </style>
</head>
<body>
@if ($message = Session::get('success'))
    <script>
        alert('{{$message}}');
    </script>
@endif
<header>
    <div class="logo">Explore Craft</div>
    <div class="search-bar">
        <input type="text" placeholder="Search Courses by Materials, Techniques, or Keywords">
        <button><img src="{{asset('resources/images/search-icon.png')}}" alt="Search"></button>
    </div>

    <!-- Icon-like image hover effect -->
    <div class="icons">
        <!-- First image pair -->
        <div class="image-container first-pair">
            <img src="{{asset('resources/images/black-image.png')}}" alt="Black Image" class="black-image">
            <img src="{{asset('resources/images/blue-image.png')}}" alt="Blue Image" class="blue-image">
        </div>

        <!-- Second image pair -->
        <div class="image-container second-pair">
            <img src="{{asset('resources/images/black2-image.png')}}" alt="Black2 Image" class="black2-image">
            <img src="{{asset('resources/images/blue2-image.png')}}" alt="Blue2 Image" class="blue2-image">
        </div>
        <!-- Third image pair -->
        <div class="image-container third-pair">
            <a  href="{{route('shop-cart')}}">
                <img src="{{asset('resources/images/black3-image.png')}}" alt="Black3 Image" class="black3-image">
            </a>
        </div>
    </div>
</header>

<div class="navbar">
    <a href="{{route('landing')}}">HOME</a>
    <div class="dropdown">
        <button class="dropbtn">CATEGORIES ▼</button>
        <div class="dropdown-content">
            <a href="{{route('course-category')}}">All</a>
            <a href="#">Clay</a>
            <a href="#">Leather</a>
            <a href="#">Fabric</a>
            <a href="#">Yarn</a>
            <a href="#">Resin</a>
            <a href="#">Wood</a>
            <a href="#">Metal</a>
            <a href="#">Recycled</a>
            <a href="#">Paper</a>
            <a href="#">Others</a>
        </div>
    </div>
    <a href="#">MY COURSE</a>
    <a href="#">SHOP</a>
    <a href="#">MY ORDER</a>
</div>

<div id="loginMessage"></div>
<script>
    // Function to display "Logged in as Matthew" only when images are clicked
    function displayLoginMessage() {
        const isLoggedIn = localStorage.getItem('isLoggedIn');
        const userName = localStorage.getItem('userName');

        if (isLoggedIn === 'true') {
            document.getElementById('loginMessage').textContent = 'Logged in as ' + userName;
        } else {
            document.getElementById('loginMessage').textContent = ''; // Clear message if not logged in
        }
    }

    // Event listeners for image clicks (black2 and blue2 images)
    document.querySelector('.black2-image').addEventListener('click', displayLoginMessage);
    document.querySelector('.blue2-image').addEventListener('click', displayLoginMessage);
</script>
<!-- Main Content Section -->
<main class="container" style="margin-top: 40px; margin-bottom: 40px;">
    <!-- Search Section -->
    <div class="search-section">
        <h2 class="search-title">What do you need?</h2>
        <div class="search-box">
            <input type="text" placeholder="Target (Based on Materials, Techniques, or Interest)">
            <i class="fas fa-search"></i>
        </div>

        <!-- Category Icons -->
        <div class="category-icons">
            <div class="category-item">
                <img src="{{asset('resources/images/tools.png')}}" alt="Tools">
                <span>Tools</span>
            </div>
            <div class="category-item">
                <img src="{{asset('resources/images/kits.png')}}" alt="Kits">
                <span>Kits</span>
            </div>
            <div class="category-item">
                <img src="{{asset('resources/images/material.png')}}" alt="Material">
                <span>Material</span>
            </div>
        </div>
    </div>

    <!-- Suggested Products Section -->
    <section class="suggested-products">
        <h3>Suggested For You</h3>
        <div class="product-grid">
            <!-- Product Card 1 -->
            @foreach($data as $d)
                <div class="product-card">
                    <img src="{{asset('resources/images/' . $d['image'])}}" alt="Leather Cutter">
                    <div class="product-info">
                        <h4>{{$d['product_name']}}</h4>
                        <p class="price">Rp {{number_format($d['price'], 0, ",", ".")}}</p>
                        <div class="rating" style="justify-content: space-between">
                            <span>@if($d['rating'] == 1)★☆☆☆☆ @elseif($d['rating'] == 2)★★☆☆☆ @elseif($d['rating'] == 3) ★★★☆☆ @elseif($d['rating'] == 4)★★★★☆ @else★★★★★  @endif</span>
                            <span class="reviews">({{$d['reviews']}})</span>
                            <a href="{{route('add-cart-post', ['id' => $d['id']])}}">
                                <img style="width: 24px; height: 24px"  src="{{asset('resources/images/add-to-cart.png')}}" width="24" height="24" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!-- All Products Section -->
    <section class="all-products container">
        <div class="products-header">
            <h2>All Products</h2>
            <div class="filter-controls">
                <button class="filter-btn">Filters</button>
                <button class="sort-btn">Sorting</button>
            </div>
        </div>

        <div class="products-grid">
            <!-- Product Grid Item 1 -->
            <div class="product-item">
                <img src="{{asset('resources/images/leather-scraper.png')}}" alt="Leather Scraper">
                <div class="product-details">
                    <h3>Leather Scraper</h3>
                    <p class="price">Rp 195,000</p>
                    <div class="product-meta">
                        <div class="rating">★★★★☆ <span class="reviews">(15)</span></div>
                        <div class="location">Jakarta Pusat</div>
                    </div>
                    <div class="product-meta">
                        <div class="sold">25 sold</div>
                        <div class="stock">Stock: 25 pcs</div>
                    </div>
                </div>
            </div>

            <!-- Product Grid Item 2 -->
            <div class="product-item">
                <img src="{{asset('resources/images/pottery-spinner.png')}}" alt="Pottery Spinner Wheel">
                <div class="product-details">
                    <h3>Pottery Spinner Wheel</h3>
                    <p class="price">Rp 655,000</p>
                    <div class="product-meta">
                        <div class="rating">★★★★★ <span class="reviews">(42)</span></div>
                        <div class="location">Jakarta Pusat</div>
                    </div>
                    <div class="product-meta">
                        <div class="sold">47 sold</div>
                        <div class="stock">Stock: 10 pcs</div>
                    </div>
                </div>
            </div>

            <!-- Add more product items following the same pattern -->
            <!-- I'll include a few more examples but you can add as many as needed -->

            <!-- Product Grid Item 3 -->
            <div class="product-item">
                <img src="{{asset('resources/images/edge-beveler.png')}}" alt="Edge Beveler">
                <div class="product-details">
                    <h3>Edge Beveler</h3>
                    <p class="price">Rp 205,000</p>
                    <div class="product-meta">
                        <div class="rating">★★★★☆ <span class="reviews">(12)</span></div>
                        <div class="location">Bandung</div>
                    </div>
                    <div class="product-meta">
                        <div class="sold">15 sold</div>
                        <div class="stock">Stock: 8 pcs</div>
                    </div>
                </div>
            </div>

            <!-- Continue adding more product items as needed -->

        </div>

        <!-- Pagination -->
        <div class="pagination">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <span class="dots">...</span>
            <a href="#">45</a>
            <a href="#" class="next">→</a>
        </div>
    </section>
</main>
<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <h2>Connect With Us!</h2>
        <div class="social-icons">
            <img src="{{asset('resources/images/email-icon.jpg')}}" alt="Email">
            <img src="{{asset('resources/images/facebook-icon.png')}}" alt="Facebook">
            <img src="{{asset('resources/images/twtitter-icon.png')}}" alt="Twitter">
            <img src="{{asset('resources/images/instrgram-icon.png')}}" alt="Instagram">
        </div>
        <div class="footer-links">
            <a href="#">Become an Instructor</a>
            <a href="#">About Us</a>
            <a href="#">News</a>
            <a href="#">Help and Support</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Cookie Settings</a>
        </div>
    </div>
</footer>

<script src="{{asset('jquery-3.7.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('resources/js/script.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {

    });

    // Function to redirect to profilepage.html when black2 or blue2 images are clicked
    function redirectToProfilePage() {
        window.location.href = 'profile';
    }

    // Adding click event listeners to black2 and blue2 images
    document.querySelector('.black2-image').addEventListener('click', redirectToProfilePage);
    document.querySelector('.blue2-image').addEventListener('click', redirectToProfilePage);

    // Function to display "Logged in as Matthew" only when images are clicked
    function displayLoginMessage() {
        const isLoggedIn = localStorage.getItem('isLoggedIn');
        const userName = localStorage.getItem('userName');

        if (isLoggedIn === 'true') {
            document.getElementById('loginMessage').textContent = 'Logged in as ' + userName;
        } else {
            document.getElementById('loginMessage').textContent = ''; // Clear message if not logged in
        }
    }

    // Event listeners for login message display on image clicks
    document.querySelector('.black2-image').addEventListener('click', displayLoginMessage);
    document.querySelector('.blue2-image').addEventListener('click', displayLoginMessage);


</script>

</body>
</html>
