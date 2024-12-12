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
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
        }
        nav a:hover {
            background-color: #fff;
            color: #f8d93d;
            border-radius: 5px;
        }
        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
        }
        nav a:hover {
            background-color: #fff;
            color: #f8d93d;
            border-radius: 5px;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            position: fixed;
            height: 100%;
            overflow: auto;
            border-right: 1px solid #ddd;
        }
        .sidebar a {
            display: block;
            color: #333;
            padding: 10px;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color: #f0f0f0;
            border-radius: 5px;
        }
        .sidebar .selected {
            font-weight: bold;
            color: #1f1f1f;
            background-color: #f0f0f0;
            padding-left: 15px;
            border-radius: 5px;
        }

        /* Profile and add address button */
        .profile-section {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 20px 0;
        }
        .profile-section img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ffd54f;
        }
        .profile-section .profile-info {
            font-size: 16px;
        }
        .address-container {
            margin-left: 280px;
            padding: 20px;
            max-width: 800px;
        }
        .address-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .add-address-button {
            background-color: #1a73e8;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Address card styling */
        .address-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px 0;
            background-color: #fff;
            border-radius: 8px;
            font-size: 16px;
        }
        .address-card .name {
            font-weight: bold;
            color: #333;
            font-size: 18px;
            display: inline-block;
        }
        .address-card .phone {
            font-size: 16px;
            color: #888;
            margin-left: 10px;
        }
        .address-card .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .address-card .actions button {
            padding: 8px 15px;
            border: none;
            background-color: #f0f0f0;
            color: #333;
            border-radius: 5px;
            cursor: pointer;
        }
        .address-card .actions .main-btn {
            background-color: #1a73e8;
            color: #fff;
        }

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
        .search-bar input {
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ddd;
            width: 300px;
        }
        .search-bar button {
            background-color: transparent;
            border: none;
            position: absolute;
            right: 10px;
            cursor: pointer;
        }
        .search-bar button img {
            width: 16px;
            height: 16px;
        }

        /* Updated styles for icons */
        .icons {
            display: flex;
            gap: 20px;
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

        .image-container:hover .black-image {
            opacity: 0;
        }
        .image-container:hover .blue-image {
            opacity: 1;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Explore Craft</div>
    <nav>
        <a href="{{route('landing')}}">HOME</a>

        <li class="dropdown">
            <a href="#" class="dropbtn">CATEGORIES</a>
            <div class="dropdown-content">
                <a href="{{route('course-page')}}">All</a>
            </div>
        </li>
        <a href="#">MY COURSE</a>
        <a href="#">SHOP</a>
        <a href="#">MY ORDER</a>
    </nav>
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

<div class="sidebar">
    <div class="profile-section">
        <img src="{{asset('resources/images/profile-placeholder.png')}}" alt="Profile">
        <div class="profile-info">
            <strong>Reddi Combs</strong><br>
            <small>Edit Profile</small>
        </div>
    </div>
    <a href="#" class="selected">My Account</a>
    <a href="#">Profile</a>
    <a href="#">Bank & Cards</a>
    <a href="#">Address</a>
    <a href="#">Change Password</a>
    <a href="#">Notification Settings</a>
    <a href="#">Privacy Settings</a>
</div>

<div class="address-container">
    <h2>My Address</h2>
    <button class="add-address-button">+ Add New Address</button>

    <div class="address-card">
        <div class="name">Michael <span class="phone">(+62) 123 4567 8910</span></div>
        <p>Apartemen U Residence Tower 4 Room 0000 Lippo Karawaci Jl. Boulevard Diponegoro No.105, Bencongan, Kec. Klp Dua, Kabupaten Tangerang, Banten 15811 (U Res Room 0000)</p>
        <p>KELAPA DUA, KAB. TANGERANG, BANTEN, ID, 15810</p>
        <div class="actions">
            <button>Edit</button>
            <button class="main-btn">Set As Main</button>
        </div>
    </div>

    <div class="address-card">
        <div class="name">Sasha <span class="phone">(+62) 123 4567 8910</span></div>
        <p>Apartemen U Residence Tower 4 Room 0000 Lippo Karawaci Jl. Boulevard Diponegoro No.105, Bencongan, Kec. Klp Dua, Kabupaten Tangerang, Banten 15811 (U Res Room 0000)</p>
        <p>KELAPA DUA, KAB. TANGERANG, BANTEN, ID, 15810</p>
        <div class="actions">
            <button>Edit</button>
            <button>Delete</button>
            <button class="main-btn">Set As Main</button>
        </div>
    </div>
</div>

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
</body>
</html>
