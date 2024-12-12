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

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-links a:hover {
            text-decoration: underline;
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
                <img src="{{asset('resources/images/black3-image.png')}}" alt="Black3 Image" class="black3-image"> </a>
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
    <a href="{{route('shop-page')}}">SHOP</a>
    <a href="#">MY ORDER</a>
</div>
<div class="container">
    <div class="section">
        <h2>Best Sellers</h2>
        <div class="grid">
            <!-- Placeholder images labeled as "picture 30" -->
            <div class="card">
                <img src="{{asset('resources/images/label12.jpg')}}" alt="Leather Beginner 2">
                <h3>Leather Beginner 2</h3>
                <p class="price">Rp 150,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/learningtypes.png')}}" alt="Learning Types of Leather">
                <h3>Learning Types of Leather</h3>
                <p class="price">Rp 250,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/howtowallet.png')}}" alt="How to Make a Wallet">
                <h3>How to Make a Wallet</h3>
                <p class="price">Rp 250,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/leatherad.png')}}" alt="Leather Advanced 1">
                <h3>Leather Advanced 1</h3>
                <p class="price">Rp 150,000</p>
            </div>
        </div>
    </div>
    <div class="section">
        <h2>All Courses</h2>
        <div class="filter-sort">
            <button>Filters</button>
            <button>Sorting</button>
        </div>
        <div class="grid">
            <!-- 16 Cards arranged in 4x4 grid -->
            <div class="card">
                <img src="{{asset('resources/images/leatherbeg.png')}}" alt="Leather Beginner 1">
                <h3>Leather Beginner 1</h3>
                <p>FREE</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/totebag.png')}}" alt="How to make a Leather Tote Bag">
                <h3>How to Make a Leather Tote Bag</h3>
                <p class="price">Rp 250,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/leathersach.png')}}" alt="How to Make a Leather Satchel">
                <h3>How to Make a Leather Satchel</h3>
                <p class="price">Rp 300,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/ipad.png')}}" alt="How to make a Leather iPad Case">
                <h3>How to Make a Leather iPad Case</h3>
                <p class="price">Rp 180,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/attache.png')}}" alt="How to make a Leather Attaché">
                <h3>How to Make a Leather Attaché</h3>
                <p class="price">Rp 420,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/card.png')}}" alt="How to make a CardHolder">
                <h3>How to Make a CardHolder</h3>
                <p class="price">Rp 150,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/walllet.png')}}" alt="How to Make a Leather Wallet">
                <h3>How to Make a Leather Wallet</h3>
                <p class="price">Rp 410,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/clutch.png')}}" alt="How to Make a Clutch Bag">
                <h3>How to Make a Clutch Bag</h3>
                <p class="price">Rp 300,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/brief.png')}}" alt="How to Make a Briefcase">
                <h3>How to Make a Briefcase</h3>
                <p class="price">Rp 350,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/mouse.png')}}" alt="How to Make a Leather Mousepad">
                <h3>How to Make a Leather Mousepad</h3>
                <p class="price">Rp 150,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/toolsle.png')}}" alt="Pro Guide to Leather Tools">
                <h3>Pro Guide to Leather Tools</h3>
                <p class="price">Rp 50,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/leathertool.png')}}" alt="How to make a Leather Watch Strap">
                <h3>How to Make a Leather Watch Strap</h3>
                <p class="price">Rp 450,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/pro.png')}}" alt="Saddle Stitch Pro Guide">
                <h3>Saddle Stitch Pro Guide</h3>
                <p class="price">Rp 250,000</p>
            </div>
            <div class="card">
                <img src="{{asset('resources/images/leatherbus.png')}}" alt="Leather Business Guide">
                <h3>Leather Business Guide</h3>
                <p class="price">Rp 550,000</p>
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
        </div>
    </div>
</div>

</body>
</html>

