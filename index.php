<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Page Website</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            scroll-behavior: smooth;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 2px;
            z-index: 1000;
        }
        .navbar .logo {
            margin-right: auto;
        }
        .navbar .nav-links {
            display: flex;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
       
        .hero {
            height: 100vh;
            background: url('baim-hanif-pYWuOMhtc6k-unsplash.jpg') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .hero h1 {
            font-size: 4em;
            margin: 0;
        }
        .hero p {
            font-size: 1.5em;
        }
        .hero button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            background-color: #333;
            color: white;
            cursor: pointer;
        }
        .section {
            padding: 60px 20px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .gallery-item {
            text-align: center;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
        }

        .gallery-item p {
            margin: 10px;
            font-size: 14px;
            color: #555;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .back-btn {
            display: block;
            margin: 30px auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-btn:hover {
            background-color: #555;
        }
        .contact input, .contact textarea {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact button {
            padding: 10px;
            border: none;
            background-color: #333;
            color: white;
            cursor: pointer;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .info-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .info-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .info-item {
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            padding: 10px;
        }

        .info-item img {
            width: 100%;
            height: auto;
        }

        .info-item p {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }

        .back-btn {
            display: block;
            margin: 30px auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #444;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            max-width: 150px;
        }

        .back-btn:hover {
            background-color: #666;
        }
        @media (max-width: 768px) {
            .gallery .image {
                width: 100%;
                flex-direction: column;
            }
            .gallery img, .gallery p {
                width: 100%;
                padding-left: 0;
            }
        }

    
        .third-page {
           
            color: white;
            padding: 20px;
        }

        .third-page .main-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            color: #333;
            padding: 20px;
           
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .third-page .main-section .text-section {
            flex: 1;
            margin-right: 20px;
        }

        .third-page .main-section .text-section h2 {
            margin-top: 0;
        }

        .third-page .main-section .image-section {
            flex: 1;
        }

        .third-page .main-section .image-section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .third-page .back-btn {
            display: block;
            margin: 0 auto;
            text-align: center;
            padding: 10px 20px;
            background-color: #444;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            max-width: 150px;
        }

        .third-page .back-btn:hover {
            background-color: #666;
        }
        
        .third-page p {
        
            font-style: bold 100%;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">Logo</div>
        <div class="nav-links">
            <a href="#home" class="active">Home</a>
            <a href="#about">About Us</a>
            <a href="#academics">Academics</a>
            <a href="#admissions">Admissions</a>
            <a href="#campus-life">Campus Life</a>
            <a href="#news-events">News & Events</a>
            <a href="#research">Research</a>
            <a href="login.php">login</a>
            <a href="#alumni">Alumni</a>
            <a href="#contact">Contact Us</a>
        </div>
    </div>

    <div id="home" class="hero">
        <h1>Get Ready</h1>
        <p>Your journey starts here</p>
        <button>Learn More</button>
        <button>Contact Us</button>
    </div>

    <section class="gallery">
        <div class="gallery-item">
            <img src="premium_photo-1663054815371-9aaf7004d9b2.avif" alt="Image 1">
            <p>Empowering Minds for a Brighter Future</p>
        </div>
        <div class="gallery-item">
            <img src="premium_photo-1664372145513-fb7cbfa3e3c4.avif" alt="Image 2">
            <p>Discovering Opportunities Beyond Boundaries</p>
        </div>
        <div class="gallery-item">
            <img src="evan-mach-bv0Qs8eh1I0-unsplash.jpg" alt="Image 3">
            <p>Innovating for a Sustainable Tomorrow</p>
        </div>
        <div class="gallery-item">
            <img src="anastassia-anufrieva--JUlfa5fAIg-unsplash.jpg" alt="Image 4">
            <p>Fostering Creativity and Critical Thinking</p>
        </div>
    </section>


    <!-- Third Page Section -->
    <section class="third-page">
       
        <div class="main-section">
            <div class="text-section">
                <h2>Shaping Future Leaders with Knowledge and Integrity</h2>
                <p>Introduction: Focus on how the college fosters leadership qualities among students by instilling values of knowledge, responsibility, and integrity.</p>
                <p>Success Stories: Alumni who have made an impact in their fields as leaders, showing the college's role in their development.</p>
            </div>
            <div class="image-section">
                <img src="baim-hanif-pYWuOMhtc6k-unsplash.jpg" alt="Sample Image">
            </div>
        </div>
       
    </section>


</body>
</html>
