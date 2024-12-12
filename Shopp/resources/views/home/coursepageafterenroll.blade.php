<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Craft Studio</title>
    <link rel="stylesheet" href="styles.css">
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
        .course-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .course-header {
            margin-bottom: 30px;
        }

        .header-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .course-header h1 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .course-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .course-highlights {
            list-style: none;
            padding-left: 0;
        }

        .read-more {
            color: #2196F3;
            text-decoration: none;
            font-size: 14px;
        }

        .instructor {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .instructor-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .instructor-info h3 {
            margin: 0;
            font-size: 16px;
        }

        .instructor-info p {
            margin: 5px 0;
            color: #666;
            font-size: 14px;
        }

        .materials-section {
            margin-bottom: 30px;
        }

        .tools-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .tools-list ul {
            list-style: none;
            padding: 0;
        }

        .tools-list li {
            margin: 10px 0;
        }

        .tools-list label {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .view-list {
            background: #f0f0f0;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            margin-top: 15px;
            cursor: pointer;
        }

        .pricing-section {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            flex-direction: row;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .price-option {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .option-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price-tag {
            font-weight: bold;
            color: #4CAF50;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .quantity-btn {
            background: #f0f0f0;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 4px;
            cursor: pointer;
        }

        .quantity-selector input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .add-cart, .buy-now {
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .add-cart {
            background: #fff;
            border: 1px solid #2196F3;
            color: #2196F3;
        }

        .buy-now {
            background: #2196F3;
            color: #fff;
        }

        .hide {
            display: none;
        }

        .show {
            display: block;
        }

    </style>
</head>
<body>
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
            <img src="{{asset('resources/images/black3-image.png')}}"
                 alt="Black3 Image" class="black3-image"> </a>
        </div>
    </div>
</header>

@if ($errors->has('product_name'))
    <script>alert('Pilih Course')</script>
@endif

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
<div class="course-container">
    <div class="course-header">
        <img src="{{asset('resources/images/label3.jpg')}}" alt="Sewing supplies" class="header-image">
        <h1 id="product_nameT">Basic Sewing 101</h1>
        <p class="course-description">
            This class covers all the beginner-friendly course,
            whether you're completely new to sewing or looking to refresh
            your skills. This class covers all the basics you need to get started.
        </p>
        <ul class="course-highlights">
            <li>How to use a sewing machine, from threading the needle to...</li>
        </ul>
        <a href="#" class="read-more">Read More</a>

        <div class="instructor">
            <img src="{{asset('resources/images/instruc.png')}}" alt="Instructor profile" class="instructor-image">
            <div class="instructor-info">
                <h3>Emma Wilson</h3>
                <p>5 years experience</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </div>
    <form action="{{route('add-post')}}" method="POST">
        {{csrf_field()}}
        <div class="materials-section">
            <h2>What you need for this course</h2>

            <div class="tools-container">
                <div class="tools-list">
                    <h3>Tools and Materials</h3>
                    <ul>
                        @foreach($data as $d)
                            <li>
                                <label>
                                    <input type="checkbox" name="checks[]" value="{{$d['id']}}">
                                    {{$d['product_name']}}
                                </label>
                            </li>
                        @endforeach


                    </ul>
                    <!-- Option 1: Using an anchor tag styled as a button -->
                    <a href="{{route('shop-page')}}" class="view-list">View List</a>

                </div>
            </div>
        </div>

        <input id="product_name" name="product_name" type="hidden">
        <input id="price" name="price" type="hidden">
        <input id="image" name="image" type="hidden">
        <input id="product_type" name="product_type" type="hidden">

        <div class="pricing-section">
            <a onclick="ca1()">
                <div class="price-option">
                    <img id="c1" class="hide" src="{{asset('resources/images/check-mark.png')}}" width="30" height="30">
                    <div class="option-header">
                        <h3>Course Only</h3>
                        <span id="priceS" class="price-tag">FREE</span>
                    </div>
                    <p>Learn all the new skills you need virtually! The course will give you tips and tricks today.</p>
                </div>
            </a>

            <a onclick="ca2()">
                <div class="price-option">
                    <img id="c2" class="hide" src="{{asset('resources/images/check-mark.png')}}" width="30" height="30">
                    <div class="option-header">
                        <h3>Kit Only</h3>
                        <span id="priceT" class="price-tag">Rp 500,000</span>
                    </div>
                    <div class="quantity-selector">
                        <button class="quantity-btn">-</button>
                        <input type="number" value="1" min="1">
                        <button class="quantity-btn">+</button>
                    </div>
                </div>
            </a>
            <a onclick="ca3()">
                <div class="price-option">
                    <img id="c3" class="hide" src="{{asset('resources/images/check-mark.png')}}" width="30" height="30">
                    <div class="option-header">
                        <h3>Course + Kit</h3>
                        <span id="priceM" class="price-tag">Rp 500,000</span>
                    </div>
                </div>
            </a>

            <div class="action-buttons">
                <button type="submit" class="add-cart">Add to Cart</button>
                <a href="{{route('payment-page')}}" class="buy-now">Buy now</a>
            </div>
        </div>
    </form>

</div>


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

<script>
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

    function ca1() {
        const c1 = document.getElementById('c1');
        c1.classList.remove('hide');
        c1.classList.add('show');

        const c2 = document.getElementById('c2');
        c2.classList.remove('show');
        c2.classList.add('hide');

        const c3 = document.getElementById('c3');
        c3.classList.remove('show');
        c3.classList.add('hide');

        document.getElementById("product_name").value = document.getElementById("product_nameT").innerHTML;
        document.getElementById("price").value = document.getElementById("priceS").innerHTML;
        document.getElementById("image").value = "label3.jpg";
        document.getElementById("product_type").value = "Course Only";
    }

    function ca2() {
        const c2 = document.getElementById('c2');
        c2.classList.remove('hide');
        c2.classList.add('show');

        const c1 = document.getElementById('c1');
        c1.classList.remove('show');
        c1.classList.add('hide');

        const c3 = document.getElementById('c3');
        c3.classList.remove('show');
        c3.classList.add('hide');

        document.getElementById("product_name").value = document.getElementById("product_nameT").innerHTML;
        document.getElementById("price").value = "500000";
        document.getElementById("image").value = "label3.jpg";
        document.getElementById("product_type").value = "Kit Only";

    }

    function ca3() {
        const c3 = document.getElementById('c3');
        c3.classList.remove('hide');
        c3.classList.add('show');

        const c1 = document.getElementById('c1');
        c1.classList.remove('show');
        c1.classList.add('hide');

        const c2 = document.getElementById('c2');
        c2.classList.remove('show');
        c2.classList.add('hide');

        document.getElementById("product_name").value = document.getElementById("product_nameT").innerHTML;
        document.getElementById("price").value = "500000";
        document.getElementById("image").value = "label3.jpg";
        document.getElementById("product_type").value = "Course + Kit";
    }
</script>
<script src="{{asset('resources/js/script.js')}}"></script>
</body>
</html>
