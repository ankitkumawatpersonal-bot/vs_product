<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BASIC SEO -->
    <title> VS Products</title>

    <meta name="description"
        content="LDTECS provides innovative diamond detection machines, software development, AI and machine learning solutions, 3D printing and engineering services in Surat, Gujarat, India.">

    <meta name="robots" content="index, follow">

    <meta name="author" content="LDTECS">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CANONICAL URL -->
    <link rel="canonical" href="https://ldtecs.com/">

    <!-- OPEN GRAPH SEO -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="LDTECS | Diamond Detection & Technology Solutions">
    <meta property="og:description"
        content="Explore LDTECS diamond detection technology, software development, AI solutions and engineering services.">
    <meta property="og:url" content="https://ldtecs.com/">
    <meta property="og:site_name" content="LDTECS">

    <!-- TWITTER SEO -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title"
        content="LDTECS | Diamond Detection & Technology Solutions">
    <meta name="twitter:description"
        content="Innovative diamond detection and technology solutions by LDTECS.">
    <link rel="icon" type="image/png" href="/logo.webp?v=15">
    <link rel="shortcut icon" href="/logo.webp?v=15">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-1: #C0C4C4;
            --bg-2: #FFFFFF;
            --bg-3: #8D8E8E;
            --bg-4: #696969;
            --accent: #24A19C;
            --text: #191B19;
            --text-soft: #4B4F4B;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html {
            scroll-behavior: smooth;
        }

        html, body {
            touch-action: auto;
        }

        body {
            text-align: center;
            color: var(--text);
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            min-height: 100dvh;
            width: 100%;
            display: flex;
            flex-direction: column;
        }
        .header {
            position: sticky;
            margin-top:0px;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            background: #ffffff;
            justify-content: space-between;
            padding: 20px 50px;
            box-shadow: 0 2px 12px rgba(25, 27, 25, 0.08);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .img {
            width: 100px;
            height: 75px;
            cursor: pointer;
            object-fit: cover;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .img:hover {
            transform: scale(1.06);
        }

        .navbar {
            display: flex;
            align-items: center;
            gap:60px;
            margin-right:70px; 
        }

        .navbar a {
            position: relative;
            text-decoration: none;
            font-size: 16px; 
            font-weight: 600;
            color: #000;
            padding: 8px 2px;
            transition: color 0.25s ease;
        }

        .navbar a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 2px;
            background: #9b0101;
            border-radius: 2px;
            transition: width 0.25s ease;
        }

        .navbar a:hover {
            color: #9b0101;
        }

        .navbar a:hover::after,
        .navbar a.active::after {
            width: 100%;
        }

        .navbar a.active {
            color: #9b0101;
        }
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 6px;
        }

        .menu-toggle span {
            width: 26px;
            height: 3px;
            background: #9b0101;
            border-radius: 2px;
        }

        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 18px;
            padding: 80px 80px;
            text-align: center;
            box-sizing: border-box;
            
        }

        .hero h1 {
            font-size: 100px;
            color: #000;
            max-width: 1000px;
            line-height: 1.3;
            text-align: center;
            margin: 0;
        }

        .hero span {
            color: #9b0101;
        }

        .hero p {
            font-size: 30px;
            color: #ffffff;
            max-width: 1000px;
            text-align: center;
            margin: 0;
        }

        .para{
            padding-top:50px;
            margin-bottom:10px;
            line-height: 1.5;
        }

        .hero-img{
            width: 100%;
            height: 100%;
            max-width: 100%;
            position: absolute;
            inset: 0;
            z-index: -1;
            object-fit: cover;
        }

        @media (max-width: 820px) {
            .header {
                padding: 12px 20px;
            }

            .navbar {
                position: fixed;
                top: 70px;
                right: 20px;
                left: 20px;
                background: #9b0101;
                border: 1px solid var(--bg-1);
                border-radius: 10px;
                box-shadow: 0 8px 24px rgba(25, 27, 25, 0.15);
                flex-direction: column;
                gap: 6px;
                padding: 14px;
                display: none;
            }

            .navbar.open {
                display: flex;
            }

            .navbar a {
                width: 100%;
                padding: 10px 6px;
            }

            .product-menu {
                width: 100%;
            }
            

            .product-popup,.product-popup1{
                position: absolute;
                width:200%;
                margin-top: 4px;
                transform: none;
                box-shadow: none;
                border: 1px solid var(--bg-1);
            }

            .product-menu:hover .product-popup,.product-popup1 {
                transform: none;
            }

            .menu-toggle {
                display: flex;
            }

            .menu-toggle span {
                transition: transform 0.25s ease, opacity 0.25s ease;
            }

            .hero h1 {
                font-size: 30px;
            }
        }

        .product-menu {
            position: relative;
        }

        .product-link {
            text-decoration: none;
            color: #222;
            display: block;
        }

        /*popup initially hidden*/
        .product-popup {
            position: absolute;
            top: calc(110% + 30px);
            /* width: 150px; */
            height:125px;
            border-radius: 8px;
            padding: 0px 0;
            /* box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15); */
            opacity: 0;
            font-family: 'Poppins', sans-serif;
            visibility: hidden;
            transform: translate(-50%, 10px);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            display:flex;
            justify-content:space-between;    
        }

        .product-popup1 {
            position: absolute;
            top: calc(100% + 12px);
            width: 530px;
            height:200px;
            background: #fff;
            border-radius: 8px;
            padding: 12px 0;
            padding-right:20px;
            padding-left:20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            opacity: 0;
            font-family: 'Poppins', sans-serif;
            visibility: hidden;
            transform: translate(-60%, 10px);
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            display:flex;
            justify-content:space-between;    
        }

        .feature{
            padding-top:20px;
            font-size:16px;
            font-weight:400px;
            text-align:center;
            line-height:1.7;
            
        }

        .feature a:hover{
            background: #9b0101;
            color: #fff;
            border-radius: 8px;
            padding-left:20px;
            padding-right:20px;
        }

        .services{
            text-align:left;
            padding-left:60px;
            border-left: 2px solid #eee;
            transition: background 0.2s ease, color 0.2s ease;
        }

        .service p{
            padding-right:60px;
        }

        /*cursor pointer*/
        .product-menu:hover .product-popup {
            opacity: 1;
            visibility: visible;
            transform: translate(-50%, 0);
        }
        .product-menu:hover .product-popup1{
            opacity:1;
            visibility:visible;
            transform:translate(-50%,0)
        }

        .product-popup a{
            margin: 12px 18px;
            display:flex;
            padding: 12px 18px;
            color: #222;
            text-decoration:none;
            transition: 0.3s;
        }

        .product-popup1 a{
            display:flex;
            color: #222;
            text-decoration:none;
            transition: 0.3s;
        }

        .product-popup a:hover{
            background: #9b0101;
            color: #fff;
        }

        .page1{
            position:relative;
            width:100%;
            min-height:100vh;
            display:flex;
            flex-direction:column;
            isolation:isolate;
        }
        /* =========================================
            OUR PRODUCTS SECTION
        ========================================= */

        .page2 {
            width: 100%;
            min-height: 90vh;
            padding: 70px 35px 80px;
            background-color: #fff;
            text-align: center;
            overflow: hidden;
        }


        /* =========================================
        PRODUCTS TITLE
        ========================================= */

        .products-title {
            margin: 0 0 55px;
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: clamp(35px, 4vw, 38px);
            font-weight: 650;
            color: #9b0101;
            opacity: 1;
        }


        /* =========================================
        PRODUCTS CONTAINER
        ========================================= */

        .products-container {
            width: 90%;
            max-width: 1500px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            align-items: stretch;
        }


        /* =========================================
        PRODUCT CARD
        ========================================= */

        .product-card {
            width: 90%;
            min-height: 320px;
            background: #ffffff;
            border: 2px solid #111;
            border-radius: 20px;
            padding: 20px 10px 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            overflow: hidden;
            position: relative;
            transition:
                transform 0.4s ease,
                box-shadow 0.4s ease,
                border-color 0.4s ease;
        }


        /* =========================================
            CARD HOVER
        ========================================= */

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.15);
            border-color: #9b0101;
        }


        /* =========================================
            IMAGE LINK
        ========================================= */

        .product-image-link {
            width: 100%;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            overflow: hidden;
            border-radius: 12px;
        }


        /* =========================================
            PRODUCT IMAGE
        ========================================= */

        .product-image {
            width: 90%;
            height: 100%;
            object-fit: contain;
            display: block;
            cursor: pointer;
            transform: scale(1);
            transition:
                transform 0.5s ease,
                filter 0.5s ease;
        }

        /* =========================================
            IMAGE HOVER ZOOM
        ========================================= */

        .product-card:hover .product-image {
            transform: scale(1.08);
            filter: brightness(1.03);
        }


        /* =========================================
            INDIVIDUAL IMAGE SIZE
        ========================================= */

        .product-image.elite {
            width: 150%;
            height: 100%;
            object-fit: contain;
        }

        .product-image.lite {
            width: 90%;
            height: 85%;
            object-fit: contain;
        }

        .product-image.nano {
            width: 62%;
            height: 70%;
            object-fit: contain;
        }

        /* =========================================
            PRODUCT DETAILS
        ========================================= */

        .diem {
            width: 100%;
            margin-top: 20px;
            text-align: center;
            color: #9b0101;
            font-family:
                "Bahnschrift SemiBold Condensed",
                "Segoe UI",
                Arial,
                sans-serif;
        }

        /* =========================================
        PRODUCT NAME
        ========================================= */

        .diem h2 {
            margin: 0;
            font-family:
                "Times New Roman",
                serif;
            font-size: clamp(27px, 2.5vw, 35px);
            font-weight: 500;
            letter-spacing: 8px;
            line-height: 1.1;
            color: #9b0101;
        }

        /* =========================================
            ELITE / LITE / NANO
        ========================================= */

        .diem h3 {
            margin: 5px 0 15px;
            font-family:
                "Times New Roman",
                serif;
            font-size: clamp(18px, 1.5vw, 25px);
            font-weight: 500;
            letter-spacing: 6px;
            color: #9b0101;
            text-align: right;
            padding-right: 10%;
        }

        /* =========================================
            DIMENSION
        ========================================= */

        .diem p {
            margin: 5px 0;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.4;
            color: #9b0101;
        }


        /* =========================================
            FIRST DIMENSION TEXT
        ========================================= */

        .diem p:first-of-type {
            margin-top: 5px;
            font-size: 18px;
        }

        /* =========================================
            CLICK EFFECT
        ========================================= */

        .product-image-link:active {
            transform: scale(0.97);
        }


        /* =========================================
            TABLET
        ========================================= */

        @media (max-width: 1100px) {

            .page2 {
                padding: 25px;
            }

            .products-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .product-card {
            min-height:400px;
            }

            .product-image-link {
                height: 200px;
            }
        }

        /* =========================================
            MOBILE
        ========================================= */

        @media (max-width: 700px) {

            .page2 {
                padding: 45px 15px 60px;
            }

            .products-title {
                margin-bottom: 35px;
                font-size: 33px;
            }

            .products-container {
                grid-template-columns: 1fr;
                gap: 25px;
                max-width: 500px;
            }

            .product-card {
                min-height: 400px;
                padding: 25px 15px;
            }

            .product-image-link {
                height: 350px;
            }

            .product-image {
                width: 90%;
            }

            .diem h2 {
                font-size: 20px;
                letter-spacing: 6px;
            }

            .diem h3 {
                font-size: 16px;
                letter-spacing: 5px;
                padding-right: 12%;
            }
        }

        /* =========================================
            SMALL MOBILE
        ========================================= */

        @media (max-width: 450px) {

            .page2 {
                padding: 35px 10px 50px;
            }

            .products-title {
                font-size: 28px;
            }

            .product-card {
                min-height: 520px;
                border-radius: 15px;
            }

            .product-image-link {
                height: 300px;
            }

            .diem h2 {
                font-size: 20px;
                letter-spacing: 4px;
            }

            .diem h3 {
                font-size: 16px;
                letter-spacing: 4px;
            }

            .diem p {
                font-size: 16px;
            }
        }

        /* =================================
                page3 & section services
        ====================================*/

        .services-title {
            text-align: center;
            padding: 45px 20px 25px;
            background: #f1fdf5;
        }

        .services-title h1 {
            font-size: 38px;
            font-weight: 650;
            color: #9b0101;
            margin-bottom: 12px;
        }

        .services-section {
            padding-top: 20px;
        }

        @media (max-width: 600px) {
            .services-title {
                padding: 30px 15px 20px;
            }

            .services-title h1 {
                font-size: 30px;
            }
        }

        .services-section {
            width: 100%;
            max-width: 1450px;
            margin: auto;
            padding: 35px 5%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        /* Two columns */

        .service-column {
            min-width: 0;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .design-column {
            border-left: 2px solid rgba(28, 77, 115, 0.35);
            padding-left: 28px;
        }

        /* Section headings */

        .section-heading {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            min-height: 86px;
            margin-bottom: 5px;
        }

        .heading-icon {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            border: 3px solid #174c75;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 19px;
            font-weight: bold;
        }

        .cube-icon {
            border-color: #168eaa;
            font-size: 32px;
        }

        .section-heading h2 {
            font-size: clamp(19px, 2vw, 26px);
            margin: 3px 0 9px;
            color: #9b0101;
        }

        .section-heading p {
            font-size: 13px;
            line-height: 1.6;
            color: #47647d;
            max-width: 440px;
        }

        /* Service cards */

        .service-card {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 16px;
            background: #f7fbfe;
            border: 1px solid #dcebf5;
            border-radius: 9px;
            transition: transform 0.3s ease,
                        box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(28, 77, 115, 0.10);
        }

        .service-card img {
            display: block;
            flex-shrink: 0;
            width: 38%;
            object-fit: cover;
            border-radius: 6px;
        }

        .software-card img {
            height: 215px;
        }

        .design-card img {
            height: 145px;
        }

        .card-content {
            flex: 1;
            min-width: 0;
        }

        .card-content h3 {
            font-size: 17px;
            line-height: 1.4;
            color: #103b60;
            margin-bottom: 6px;
        }

        .card-content p {
            color: #506b82;
            font-size: 12px;
            text-align:left;
            line-height: 1.55;
            margin-bottom: 8px;
        }

        .card-content ul {
            list-style: none;
            margin-bottom: 12px;
            text-align:left;
        }

        .card-content li {
            position: relative;
            padding-left: 17px;
            margin-bottom: 5px;
            color: #4a687f;
            font-size: 12px;
            line-height: 1.35;
        }

        .card-content li::before {
            content: "✔";
            position: absolute;
            left: 0;
            top: 0;
            color: #159db4;
            font-weight: bold;
        }

        /* Learn More button */

        .learn-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 9px 17px;
            border: 1.5px solid #0da5bd;
            border-radius: 25px;
            color: #078ba5;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .learn-btn:hover {
            color: #ffffff;
            background: #0da5bd;
        }

        .learn-btn span {
            font-size: 15px;
        }

        /* Tablet */

        @media (max-width: 1000px) {
            .services-section {
                padding: 28px 3%;
                gap: 20px;
            }

            .design-column {
                padding-left: 20px;
            }

            .service-card {
                gap: 12px;
                padding: 12px;
            }

            .service-card img {
                width: 35%;
            }

            .software-card img {
                height: 175px;
            }

            .design-card img {
                height: 125px;
            }

            .card-content h3 {
                font-size: 15px;
            }
        }

        /* Mobile */

        @media (max-width: 700px) {
            .services-section {
                grid-template-columns: 1fr;
                padding: 25px 16px;
                gap: 30px;
            }

            .design-column {
                border-left: none;
                border-top: 2px solid rgba(28, 77, 115, 0.25);
                padding-left: 0;
                padding-top: 25px;
            }

            .section-heading {
                min-height: auto;
                margin-bottom: 5px;
            }

            .section-heading h2 {
                font-size: 21px;
            }

            .service-card img {
                width: 38%;
                height: 155px;
            }

            .card-content h3 {
                font-size: 15px;
            }

            .card-content p,
            .card-content li {
                font-size: 11px;
            }

            .learn-btn {
                padding: 8px 12px;
                font-size: 11px;
            }
        }

        /* Small mobile screens */

        @media (max-width: 420px) {
            .service-card {
                align-items: flex-start;
                flex-direction: column;
            }

            .service-card img {
                width: 100%;
                height: 190px;
            }

            .card-content {
                width: 100%;
            }

            .section-heading p {
                font-size: 12px;
            }
        }

        /* ===============================
            OUR CLIENTS SECTION
        ================================ */

        .page5 {
            width: 100%;
            position: relative;
            overflow: hidden;
            background:
        radial-gradient(circle at 15% 25%, rgba(155, 1, 1, 0.07), transparent 30%),
        radial-gradient(circle at 85% 75%, rgba(155, 1, 1, 0.06), transparent 30%),
        linear-gradient(135deg, #ffffff, #fff8f7);
    );
        }

        .clients-section {
            width: 100%;
            padding: 45px 0 65px;
            position: relative;
            overflow: hidden;
        }

        /* Heading */

        .clients-heading {
            text-align: center;
            padding: 0 20px;
            margin-bottom: 55px;
        }

        .clients-heading h2 {
            font-size: clamp(35px, 4vw, 40px);
            font-weight: 650;
            color: #9b0101;
            margin: 0 0 18px;
            letter-spacing: -1.5px;
        }

        .clients-heading h2 span {
            color: #9b0101;
        }

        .clients-heading p {
            font-size: 16px;
            line-height: 1.7;
            color: #996060;
            max-width: 550px;
            margin: 0 auto;
        }

        /* Marquee */

        .marquee {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 25px 0;
            background: #5e1919;
        }

        /* Gradient edges */

        .marquee::before,
        .marquee::after {
            content: "";
            position: absolute;
            top: 0;
            width: 100px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .marquee::before {
            left: 0;
            background: linear-gradient(
                to right,
                #173237,
                transparent
            );
        }

        .marquee::after {
            right: 0;
            background: linear-gradient(
                to left,
                #173237,
                transparent
            );
        }

        /* Animation Track */

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marqueeMove 35s linear infinite;
            will-change: transform;
        }

        /* Logo Group */

        .marquee-group {
            display: flex;
            align-items: center;
            gap: 25px;
            padding: 0 12px;
            flex-shrink: 0;
        }

        /* Individual Logo Card */

        .client-card,
        .client-card1 {
            width: 210px;
            height: 110px;
            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 14px;

            padding: 22px;
            box-sizing: border-box;

            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease,
                background 0.35s ease;
        }

        /* Logo Image */

        .client-card img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;

            transition: transform 0.35s ease;
        }
        .client-card1 img {
            width: 120%;
            height: 120%;
            object-fit: contain;
            display: block;

            transition: transform 0.35s ease;
        }

        /* Hover Effect */

        .client-card:hover,
        .client-card1:hover {
            transform: translateY(-7px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
            background: #f8fffc;
        }

        .client-card:hover img {
            transform: scale(1.07);
        }

        .client-card1:hover img {
            transform: scale(1.07);
        }

        /* Pause Animation on Hover */

        .marquee:hover .marquee-track {
            animation-play-state: paused;
        }

        /* Infinite Animation */

        @keyframes marqueeMove {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ===============================
            TABLET RESPONSIVE
        ================================ */

        @media (max-width: 768px) {

            .clients-section {
                padding: 65px 0 45px;
            }

            .clients-heading {
                margin-bottom: 40px;
            }

            .clients-heading p {
                font-size: 14px;
            }

            .marquee-group {
                gap: 18px;
            }

            .client-card {
                width: 170px;
                height: 90px;
                padding: 18px;
                border-radius: 12px;
            }

            .marquee-track {
                animation-duration: 28s;
            }

            .marquee::before,
            .marquee::after {
                width: 50px;
            }

        }

        /* ===============================
            MOBILE RESPONSIVE
        ================================ */

        @media (max-width: 480px) {

            .clients-section {
                padding: 50px 0 35px;
            }

            .clients-heading {
                margin-bottom: 30px;
            }

            .clients-heading h2 {
                font-size: 32px;
                letter-spacing: -0.5px;
            }

            .clients-heading p {
                font-size: 13px;
                padding: 0 10px;
            }

            .marquee {
                padding: 20px 0;
            }

            .marquee-group {
                gap: 14px;
            }

            .client-card {
                width: 145px;
                height: 78px;
                padding: 14px;
                border-radius: 10px;
            }

            .marquee-track {
                animation-duration: 25s;
            }

            .marquee::before,
            .marquee::after {
                width: 30px;
            }

            .clients-footer {
                font-size: 12px;
                margin-top: 25px;
            }

        }

        /* Accessibility */

        @media (prefers-reduced-motion: reduce) {

            .marquee-track {
                animation: none;
            }

        }


        /* =================================
            Footer
        ====================================*/
        .footer {
            position: relative;
            width: 100%;
            background: #9b0101;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
            padding: 60px 5% 25px;
            overflow: hidden;
            z-index: 1;
        }

        /* Dark overlay for readable text */
        .footer::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
        }
        
        /* Heading and Button */
        .footer-cta {
            text-align: center;
            margin-bottom: 45px;
        }

        .footer-cta h1 {
            font-size: 36px;
            line-height: 1.65;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .contact-btn {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            /* border: 1px solid #fff;
            border-radius: 30px; */
            padding: 10px 18px;
            font-size: 16px;
            /* letter-spacing: 2px; */
            transition: 0.3s;
        }

        .contact-btn:hover {
            /* background: #fff; */
            color: #160039;
        }

        /* Main Footer Columns */
        .footer-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 0.8fr 0.7fr;
            gap: 60px;
            padding: 0 10px 55px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 22px;
            font-weight: 700;
            text-align: left;
        }

        .footer-column h4 {
            text-align:left;
            font-size: 16px;
            margin: 25px 0 20px;
        }

        .footer-column p {
            text-align:left;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 14px;
        }

        .quick-links a {
            display: block;
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            margin-bottom: 11px;
            transition: 0.3s;
            text-align:left;
        }

        .quick-links a:hover,
        .footer-policy a:hover {
            color: #b9a8e8;
        }

        /* Contact Alignment */
        .contact {
            text-align: center;
            margin-left: 60px;
        }

        /* Social Media */
        .social-icons {
            display: flex;
            justify-content: left;
            gap: 10px;
            margin-top: 18px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: #fff;
            color: #160039;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-icons a:hover {
            background: #b9a8e8;
            transform: translateY(-3px);
        }

        /* Bottom Footer */
        .footer-bottom {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
            flex-wrap: wrap;
            font-size: 14px;
        }

        .footer-policy {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .footer-policy a {
            color: #fff;
            text-decoration: none;
        }

        .copyright {
            font-weight: 600;
            line-height: 1.6;
        }

        /* Tablet */
        @media (max-width: 900px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
                gap: 35px;
            }

            .contact {
                text-align: left;
            }

            .social-icons {
                justify-content: flex-start;
            }

            .footer-bottom {
                justify-content: flex-start;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {
            .footer {
                padding: 40px 22px 25px;
            }

            .footer-cta h1 {
                font-size: 24px;
                line-height: 1.5;
            }

            .footer-container {
                grid-template-columns: 1fr;
                gap: 30px;
                padding-bottom: 35px;
            }

            .footer-column h3 {
                font-size: 16px;
            }

            .footer-column p,
            .quick-links a {
                font-size: 14px;
                overflow-wrap: anywhere;
            }

            .contact {
                text-align: left;
            }

            .social-icons {
                justify-content: flex-start;
            }

            .footer-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .footer-policy {
                gap: 10px;
                font-size: 12px;
            }

            .copyright {
                font-size: 12px;
            }
        }
    

        /* ================================
           MOBILE NAVIGATION IMPROVEMENTS
        ================================= */
        .menu-toggle {
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 6px;
            width: 44px;
            height: 44px;
            padding: 8px;
            border: 1px solid rgba(255,255,255,.35);
            border-radius: 8px;
            background: #9b0101;
            cursor: pointer;
            flex-shrink: 0;
        }

        .menu-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background: #fff;
            border-radius: 3px;
            transition: transform .25s ease, opacity .25s ease;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }
        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        .menu-toggle.active span:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }

        @media (max-width: 820px) {
            .header {
                position: relative;
                width: 100%;
                padding: 10px 18px;
                min-height: 74px;
                gap: 12px;
                background: #fff;
            }

            .logo { flex: 0 0 auto; }
            .img {
                width: 62px;
                height: 62px;
                object-fit: contain;
            }

            .menu-toggle { display: flex; }

            .navbar {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                width: 100%;
                max-height: calc(100dvh - 80px);
                overflow-y: auto;
                margin: 0;
                padding: 12px 20px 20px;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                background: #9b0101;
                border: 0;
                border-top: 1px solid rgba(255,255,255,.15);
                border-radius: 0 0 12px 12px;
                box-shadow: 0 12px 25px rgba(0,0,0,.25);
                z-index: 1100;
            }

            .navbar.open { display: flex; }

            .navbar > a,
            .navbar .product-menu > .product-link {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                padding: 14px 4px;
                color: #000;
                border-bottom: 1px solid rgba(255,255,255,.14);
                font-size: 16px;
            }

            .navbar a::after { display: none; }
            .navbar a:hover,
            .navbar a.active { color: #fff; }
            .product-menu { width: 100%; }

            .product-popup,
            .product-popup1 {
                display: none;
                position: static;
                width: 100%;
                height: auto;
                margin: 0 0 8px;
                padding: 8px 12px;
                flex-direction: column;
                gap: 0;
                background: #9b0101;
                border: 0;
                border-radius: 8px;
                box-shadow: none;
                opacity: 1;
                visibility: visible;
                transform: none;
            }

            .product-menu.mobile-open .product-popup,
            .product-menu.mobile-open .product-popup1 {
                display: flex;
            }

            .product-menu:hover .product-popup,
            .product-menu:hover .product-popup1 {
                opacity: 1;
                visibility: visible;
                transform: none;
            }

            .product-popup a,
            .product-popup1 a,
            .product-popup .feature a,
            .product-popup1 .feature a {
                width: 100%;
                margin: 0;
                padding: 11px 6px;
                /* text-align: left; */
                color: #fff;
                font-size: 14px;
                border-bottom: 1px solid rgba(255,255,255,.1);
            }

            .product-popup .nano1,
            .product-popup .lite1,
            .product-popup1 .services {
                border-left: 0;
                padding-left: 0;
            }

            .product-popup1 .service > p,
            .product-popup1 .services > p {
                color: #9b0101;
                text-align: left;
                padding: 8px 6px 0;
            }

            .product-popup1 .feature { padding: 0; }
            .hero { padding: 55px 22px; }
            .hero h1 { font-size: clamp(32px, 8vw, 52px); }
            .hero p { font-size: clamp(17px, 4vw, 23px); }
        }

        @media (max-width: 480px) {
            .header { padding: 8px 14px; min-height: 68px; }
            .img { width: 54px; height: 54px; }
            .hero { padding: 42px 16px; gap: 12px; }
            .hero h1 { font-size: clamp(28px, 9vw, 40px); }
            .hero p { font-size: 16px; }
        }

        
        /* Contact Button */

        .contact-btn {
            background: transparent;
            color: white;
            /* border: 1px solid white; */
            padding: 9px 18px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .contact-btn:hover {
            /* background: #a1e1eb; */
            color: #111;
            /* border-color: #a1e1eb; */
        }

        /* Popup Background */
        .contact-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(5px);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Popup Box */
        .contact-box {
            position: relative;
            background: #102b2d;
            color: white;
            width: 100%;
            max-width: 450px;
            padding: 35px;
            border-radius: 12px;
            border: 1px solid rgba(102, 211, 213, 0.5);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
            animation: popupOpen 0.3s ease;
        }

        .contact-box h2 {
            color: #a1e1eb;
            margin: 0 0 10px;
            font-size: 28px;
        }

        .contact-box p {
            color: #ccc;
            margin-bottom: 22px;
        }

        .contact-box input,
        .contact-box textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 14px;
            background: #19383a;
            border: 1px solid #496263;
            border-radius: 5px;
            color: white;
            font-size: 15px;
            box-sizing: border-box;
            outline: none;
        }

        .contact-box input:focus,
        .contact-box textarea:focus {
            border-color: #a1e1eb;
        }

        .contact-box input::placeholder,
        .contact-box textarea::placeholder {
            color: #bbb;
        }

        .contact-box textarea {
            resize: vertical;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 16px;
            background: transparent;
            border: none;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #a1e1eb;
        }

        .submit-btn {
            width: 100%;
            padding: 13px;
            background: #61cfe0d2;
            color: #111;
            font-weight: bold;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: white;
        }

        @keyframes popupOpen {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.96);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Mobile Responsive */
        @media (max-width: 480px) {
            .contact-box {
                padding: 28px 20px;
                
            }

            .contact-box h2 {
                font-size: 24px;
            }
        }

        

        /* Parent Products dropdown */
        .product-menu {
    position: relative;
}

.product-popup {
    position: absolute;
    top: calc(100% + 12px);
    left: 50%;
    transform: translateX(-60%);
    width: 205px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    overflow: visible;
    padding: 5px;
    z-index: 10000;
}

/* Both items in one box */
.diamond-menu {
    display: flex;
    flex-direction: column;
    width: 100%;
    gap: 0;
}

.diamond-item {
    position: relative;
    width: 100%;
}

/* Buttons */
.diamond-btn {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 22px;
    border: none;
    border-radius: 8px;
    background: #ffffff;
    color: #173237;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

.diamond-btn:hover {
    background: #9b0101;
    color: #ffffff;
}

.diamond-btn:hover,
.diamond-btn.active {
    background: #9b0101;
    color: #fff;
}

.diamond-btn i {
    transition: transform 0.3s ease;
}

.diamond-btn.active i {
    transform: rotate(180deg);
}

/* Right side submenu */

.diamond-side-popup {
    position: absolute;
    top: 0;
    left: calc(100% + 10px);
    width: 300px;
    padding: 8px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    display: none;
    z-index: 10000;
}

.diamond-side-popup.show {
    display: block;
}

.diamond-side-popup a {
    display: block;
    padding: 15px 14px;
    color: #191b19;
    text-decoration: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    border-bottom: 1px solid #eee;
    transition: background 0.2s ease, color 0.2s ease;
}

.diamond-side-popup a:last-child {
    border-bottom: none;
}

.diamond-side-popup a:hover {
    background: #9b0101;
    color: #fff;
}

/* Desktop Hover Effect */
@media (min-width: 821px) {

    .diamond-item:hover .diamond-side-popup {
        display: block;
    }

    .diamond-item:hover .diamond-btn {
        background: #9b0101;
        color: #fff;
    }

    .diamond-item:hover .diamond-btn i {
        transform: rotate(90deg);
    }

    /* Hover gap connection */
    .diamond-item::after {
        content: "";
        position: absolute;
        top: 0;
        left: 100%;
        width: 12px;
        height: 100%;
    }

}

/* Tablet */

@media (min-width: 821px) and (max-width: 1100px) {

    .diamond-side-popup {
        width: 230px;
    }

}

/* Mobile */

@media (max-width: 820px) {

    .product-popup {
        width: 100%;
        position: static;
        transform: none;
        box-shadow: none;
        border: 1px solid #eeeeee;
        box-sizing: border-box;
    }

    .diamond-btn {
        padding: 15px 16px;
        font-size: 15px;
    }

    .diamond-side-popup {
        position: static;
        width: auto;
        margin: 0 10px 10px;
        padding: 4px;
        box-shadow: none;
        background: #f8f9f9;
        box-sizing: border-box;
    }

    .diamond-side-popup a {
        padding: 14px 12px;
        font-size: 13px;
    }

}


        /* WhatsApp button beside chatbot */
        /* .floating-whatsapp {
            position: fixed;
            right: 100px;
            bottom: 25px;

            width: 60px;
            height: 60px;

            background: #25D366;
            color: #fff;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 38px;
            text-decoration: none;

            z-index: 9998;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: 0.3s ease;
        }

        .floating-whatsapp:hover {
            background: #25D366;
            color: #fff;
            transform: scale(1.1);
        } */

        /* Mobile */
        @media (max-width: 600px) {
            .floating-whatsapp {
                right: 100px;
                bottom: 25px;
                width: 55px;
                height: 55px;
                font-size: 35px;
            }
        }

        /* =====================================
   MODERN HERO SECTION
===================================== */

.page1 {
    min-height: 100vh;
    background:
        radial-gradient(circle at 15% 25%, rgba(155, 1, 1, 0.07), transparent 30%),
        radial-gradient(circle at 85% 75%, rgba(155, 1, 1, 0.06), transparent 30%),
        linear-gradient(135deg, #ffffff, #fff8f7);
}

.hero {
    min-height: 650px;
    padding: 80px 25px;
    gap: 20px;
}

.hero h1 {
    font-size: clamp(48px, 7vw, 90px);
    font-weight: 750;
    line-height: 1.18;
    letter-spacing: -3px;
    color: #151515;
    animation: heroReveal 0.9s ease both;
}

.hero h1 span {
    color: #9b0101;
    display: inline-block;
}

.hero p {
    color: #555 !important;
    font-size: clamp(17px, 2vw, 23px);
    font-weight: 500;
    letter-spacing: 1px;
}

.para {
    padding-top: 10px;
}

@keyframes heroReveal {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* =====================================
   MODERN PRODUCTS SECTION
===================================== */

.page2 {
    min-height: auto;
    padding: 85px 30px 100px;
    background: linear-gradient(
        180deg,
        #ffffff 0%,
        #fffafa 100%
    );
}

.products-title {
    font-size: clamp(32px, 4vw, 42px);
    font-weight: 750;
    color: #9b0101;
    margin-bottom: 65px;
    position: relative;
}

.products-title::after {
    content: "";
    display: block;
    width: 65px;
    height: 4px;
    background: #9b0101;
    border-radius: 10px;
    margin: 15px auto 0;
}

.products-container {
    width: 94%;
    max-width: 1450px;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 35px;
}

/* PRODUCT CARDS */

.product-card {
    width: 100%;
    min-height: 470px;
    padding: 25px 20px;
    border: 1px solid #eadada;
    border-radius: 22px;
    background: #ffffff;
    box-shadow: 0 8px 30px rgba(80, 0, 0, 0.06);
    transition: all 0.4s ease;
}

.product-card:hover {
    transform: translateY(-12px);
    border-color: #9b0101;
    box-shadow: 0 20px 45px rgba(155, 1, 1, 0.13);
}

/* IMAGE AREA */

.product-image-link {
    height: 270px;
    background: linear-gradient(145deg, #fffafa, #ffffff);
    border-radius: 16px;
    padding: 12px;
}

.product-image {
    max-width: 100%;
    object-fit: contain;
    transition: transform 0.5s ease;
}

.product-card:hover .product-image {
    transform: scale(1.09);
}

/* PRODUCT DETAILS */

.diem {
    margin-top: 18px;
    padding: 10px;
}

.diem h2 {
    font-size: clamp(25px, 2.5vw, 30px);
    letter-spacing: 2px;
    font-weight: 600;
}

.diem h3 {
    font-size: 20px;
    letter-spacing: 2px;
    margin: 8px 0 20px;
}

.diem p {
    font-size: 16px;
    font-weight: 600;
    line-height: 1.6;
}

/* TABLET */

@media (max-width: 1000px) {
    .products-container {
        grid-template-columns: repeat(2, 1fr);
    }

    .product-card {
        min-height: 430px;
    }
}

/* MOBILE */

@media (max-width: 700px) {
    .hero {
        min-height: 480px;
        padding: 50px 20px;
    }

    .hero h1 {
        letter-spacing: -1px;
    }

    .page2 {
        padding: 55px 15px;
    }

    .products-container {
        grid-template-columns: 1fr;
        max-width: 450px;
        gap: 25px;
    }

    .product-card {
        min-height: 420px;
        padding: 20px 15px;
    }

    .product-image-link {
        height: 260px;
    }
}

/* SMALL MOBILE */

@media (max-width: 450px) {
    .hero {
        min-height: 400px;
    }

    .product-card {
        min-height: 400px;
    }

    .product-image-link {
        height: 230px;
    }
}

/* ACCESSIBILITY */

@media (prefers-reduced-motion: reduce) {
    .hero h1,
    .product-card,
    .product-image {
        animation: none;
        transition: none;
    }
}


/* Single Parent Box */
.product-popup {
    width: 230px !important;
    background: #ffffff !important;
    padding: 7px !important;
    border-radius: 12px !important;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12) !important;
    border: 1px solid #eeeeee;
    box-sizing: border-box;
}

/* Both items in same box */
.diamond-menu {
    display: flex !important;
    flex-direction: column !important;
    gap: 0 !important;
    width: 100%;
    background: #ffffff !important;
    border-radius: 10px;
}

/* Remove individual boxes */
.diamond-item {
    width: 100%;
    margin: 0 !important;
    padding: 0 !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
}

/* Buttons */
.diamond-btn {
    width: 100%;
    padding: 17px 18px !important;
    background: transparent !important;
    color: #173237 !important;
    border: none !important;
    border-radius: 7px !important;
    box-shadow: none !important;
}

/* Hover */
.diamond-item:hover > .diamond-btn {
    background: #9b0101 !important;
    color: #ffffff !important;
}

/* Arrow */
.diamond-btn i {
    transition: transform 0.3s ease;
}

.diamond-item:hover .diamond-btn i {
    transform: rotate(90deg);
}


    </style>
</head>
<body>
    <div class="page1">
        <!-- <img class="hero-img" src="background.png" alt=""> -->
        <header class="header">
            <div class="logo">
                <img class="img" src="logo.webp" alt="logo" onerror="this.style.background='var(--text)'">
            </div>

            <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open navigation menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="navbar" id="navbar">
                <a href="/" class="active">Home</a>
                <div class="product-menu">
                    <a href="#our-products" class="product-link">
                        Jewellery <i class="fa-solid fa-chevron-down"></i>
                    </a>

                    <div class="product-popup">

                        <div class="diamond-menu">

                            <!-- Equipment -->
                            <div class="diamond-item">

                                <button type="button"
                                        class="diamond-btn"
                                        aria-expanded="false">

                                    <span>Equipment</span>
                                    <i class="fa-solid fa-chevron-right"></i>

                                </button>

                                <div class="diamond-side-popup">

                                    <a href="/elite">Jewellery Testing Machine</a>
                                    <a href="/lite">Laser Soldering Machine</a>
                                    <a href="/nano">Jewellery 3D Printer</a>
                                    <a href="/nano">Ultrasonic Cleaning Machine</a>
                                    <a href="/nano">Jewellery Micro Motors</a>
                                    <a href="/nano">Manufacturing Machines</a>
                                    <a href="/nano">Vaccum Wax Injector</a>

                                </div>

                            </div>


                            <!-- Consumables -->
                            <div class="diamond-item">

                                <button type="button"
                                        class="diamond-btn"
                                        aria-expanded="false">

                                    <span>Consumables</span>
                                    <i class="fa-solid fa-chevron-right"></i>

                                </button>

                                <div class="diamond-side-popup">

                                    <a href="#">Jewellery Alloys</a>
                                    <a href="#"> Soldring Powder</a>
                                    <a href="#"> Plating Solution</a>
                                    <a href="#"> Star Cutting Disc</a>
                                    <a href="#"> Injection Wax/Flakes</a>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- <div class="product-menu">
                    <a href="#services" class="product-link">Services <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="product-popup1">
                        <div class="service">
                            <p> Technology Solutions </p>
                            <div class="feature">
                                <a href="software-development"> Software Development </a>
                                <a href="machine-learning"> AI & Machine Learning </a>
                                
                            </div>
                        </div>
                        <div class="services">
                            <p> Design & Prototyping </p>
                            <div class="feature">
                                <a href="3d-printing"> 3D Printing </a>
                                <a href="cad-design"> 3D CAD Design </a>
                                <a href="r&d-services"> R&D Services </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <a href="/blog">Blog</a> -->
                <a href="/">About Us</a>
                <a class="contact-btn" id="openContact">Contact Us</a>
            </nav>
            
        </header>
        <section class="hero">
            <h1 id="title1">Welcome To <br><span>VS PRODUCT</span></h1>
            <!-- <div class="para">
                <p id="title2"> Technology. Engineering Tomorrow </p>
            </div> -->
        </section>    
    </div>

    
    <section class="page2" id="our-products">

        <h1 id="productsTitle" class="products-title">Our Products</h1>

        <div class="products-container">

            <!-- CLASSIFIER ELITE -->
            <div class="box1 product-card">

                <a href="/" class="product-image-link">
                    <img class="product-image elite" src="elite0.png" alt="Classifier Elite" id="zoomImage">
                </a>

                <div class="diem">
                    <h2>AUTOMATION FOR </h2>
                    <h3>JEWELLERY GRIDING & FILLING</h3>
                </div>

            </div>


            <!-- CLASSIFIER LITE -->
            <div class="box1 product-card">

                <a href="/" class="product-image-link">
                    <img class="product-image lite" src="lite1.png" alt="Classifier Lite" id="zoomLite">
                </a>

                <div class="diem">
                    <h2>ELECTRO</h2>
                    <h3>FILO-POLISHING PRO+</h3>
                </div>

            </div>


            <!-- CLASSIFIER NANO -->
            <div class="box1 product-card">

                <a href="/nano" class="product-image-link">
                    <img class="product-image nano" src="nano5.png" alt="Classifier Nano" id="zoomNano">
                </a>

                <div class="diem">
                    <h2> AIR CIRCULATION</h2>
                    <h3> BURNOUT ELECTRIC FURNACE</h3>
                </div>

            </div>

        </div>
    </section>

    <!-- Contact Popup -->
    
    <div class="contact-overlay" id="contactPopup">
        <div class="contact-box">
            <button type="button" class="close-btn" id="closecontact">&times;</button>

            <h2>Contact Us</h2>
            <p>Let's discuss your project and ideas.</p>

            <form id="contactForm">
                @csrf

                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>

                <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>

                <button type="submit" class="submit-btn"> Send Message </button>
            </form>
            <p id="formStatus"></p>
        </div>
    </div>

    <!-- =================================
        Services Section
    ==================================== -->
    <!-- <div class="services-title" id="services">
        <h1>Our Services</h1>
    </div>
    <section class="services-section">
        LEFT COLUMN
        <div class="service-column">
            
            <div class="section-heading">
                <div class="heading-icon">&lt;/&gt;</div>
                <div>
                    <h2>Technology Solutions</h2>
                    <p>We build intelligent software and AI-driven systems to solve real-world problems and help businesses grow.</p>
                </div>
            </div>

            Software Development
            <div class="service-card software-card">
                <img src="software2.avif" alt="Software Development" id="software">

                <div class="card-content">
                    <h3>Software Development</h3>
                    <p>Custom software, modern web applications, APIs, and scalable digital solutions.</p>

                    <ul>
                        <li>Custom Software Development</li>
                        <li>Web Application Development</li>
                        <li>Frontend & Backend Development</li>
                        <li>Database & API Integration</li>
                        <li>Maintenance & Support</li>
                    </ul>

                    <a href="software-development" class="learn-btn">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            AI & Machine Learning
            <div class="service-card software-card">
                <img src="ai.png" alt="Artificial Intelligence" id="software">

                <div class="card-content">
                    <h3>AI & Machine Learning Solution</h3>
                    <p>Intelligent systems, data analysis, image recognition and automation solutions.</p>

                    <ul>
                        <li>Machine Learning Models</li>
                        <li>Predictive Analytics</li>
                        <li>Computer Vision</li>
                        <li>AI-Powered Automation</li>
                        <li> Chatbot </li>
                    </ul>

                    <a href="machine-learning" class="learn-btn">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

        </div>

        RIGHT COLUMN
        <div class="service-column design-column">

            <div class="section-heading">
                <div class="heading-icon cube-icon">◇</div>
                <div>
                    <h2>Design & Prototyping</h2>
                    <p>We turn your ideas into accurate designs and physical prototypes using modern tools and technologies.</p>
                </div>
            </div>

            3D Printing
            <div class="service-card design-card">
                <img src="3d image.png" alt="3D Printing" id="design">

                <div class="card-content">
                    <h3>3D Printing</h3>
                    <p>Rapid prototyping and physical models developed from digital 3D designs.</p>

                    <ul>
                        <li>Rapid Prototyping</li>
                        <li>Custom Components</li>
                        <li>Design Verification</li>
                        <li>Product Model Printing</li>
                    </ul>

                    <a href="3d-printing" class="learn-btn">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            3D CAD Design
            <div class="service-card design-card">
                <img src="3d cad design1.webp" alt="3D CAD Design" id="design">

                <div class="card-content">
                    <h3>3D CAD Design</h3>
                    <p>Accurate 3D models, mechanical designs and technical drawings.</p>

                    <ul>
                        <li>3D Product Modeling</li>
                        <li>Mechanical Part Design</li>
                        <li>Assembly Design</li>
                        <li>Technical Drawings</li>
                    </ul>

                    <a href="cad-design" class="learn-btn">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

            R&D Services
            <div class="service-card design-card">
                <img src="research.avif" alt="Research and Development" id="design">

                <div class="card-content">
                    <h3>R&D Services</h3>
                    <p>Feasibility studies, proof of concept, prototyping and technical validation.</p>

                    <ul>
                        <li>Concept Development</li>
                        <li>Proof of Concept (PoC)</li>
                        <li>Prototype Development</li>
                        <li>Testing & Validation</li>
                    </ul>

                    <a href="r&d-services" class="learn-btn">
                        Learn More <span>→</span>
                    </a>
                </div>
            </div>

        </div> 
    </section> -->

    <section class="page5" id="our-clients">

        <div class="clients-section">

            <!-- Section Heading -->
            <div class="clients-heading">

                <h2>
                    AUTHORISED DEALER
                </h2>
            </div>

            <!-- Clients Marquee -->
            <div class="marquee">

                <div class="marquee-track">

                    <!-- First Group -->
                    <div class="marquee-group">

                        <div class="client-card">
                            <img src="legor.png" alt="Legor">
                        </div>

                        <div class="client-card">
                            <img src="evident.png" alt="Evident">
                        </div>

                        <div class="client-card">
                            <img src="fine.png" alt="Fine">
                        </div>

                        <div class="client-card">
                            <img src="gold.png" alt="Gold Elephant">
                        </div>

                        <div class="client-card1">
                            <img src="oralux.png" alt="Oralux">
                        </div>

                        <div class="client-card">
                            <img src="precious1.png" alt="Precious">
                        </div>

                        <div class="client-card1">
                            <img src="srs.png" alt="SRS">
                        </div>

                        <!-- <div class="client-card">
                            <img src="manisha gems.webp" alt="Manisha Gems">
                        </div>

                        <div class="client-card">
                            <img src="nature.png" alt="Nature's Art">
                        </div>

                        <div class="client-card1">
                            <img src="rpv.png" alt="RPV Diamonds">
                        </div> -->

                    </div>

                    <!-- Duplicate Group for Infinite Animation -->
                    <div class="marquee-group" aria-hidden="true">

                        <div class="client-card">
                            <img src="legor.png" alt="">
                        </div>

                        <div class="client-card">
                            <img src="evident.png" alt="">
                        </div>

                        <div class="client-card">
                            <img src="fine.png" alt="">
                        </div>

                        <div class="client-card">
                            <img src="gold.png" alt="">
                        </div>

                        <div class="client-card1">
                            <img src="oralux.png" alt="">
                        </div>

                        <div class="client-card">
                            <img src="precious1.png" alt="">
                        </div>

                        <div class="client-card1">
                            <img src="srs.png" alt="">
                        </div>

                        <!-- <div class="client-card">
                            <img src="manisha gems.webp" alt="">
                        </div>

                        <div class="client-card">
                            <img src="nature.png" alt="">
                        </div>

                        <div class="client-card1">
                            <img src="rpv.png" alt="">
                        </div> -->

                    </div>

                </div>

            </div>

        </div>

    </section>
    
    <footer class="footer">

        <div class="footer-cta">
            <h1>Let's put our minds into motion,<br>
                Let's grow together</h1>
        </div>

        <div class="footer-container">

            <!-- Company Details -->
            <div class="footer-column company" id="footer-column">
                <h3>CORPORATE HEADQUARTERS:</h3>

                <p>
                    VS PRODUCTS 
                </p>

                <p>
                    Address: Ground Floor, R.S.No. 401/1-2 Plot No.9 <br>
                    Kiran Medical Store Lane, Vasta Devdi Road, <br>North Zone Library,<br>
                    Katargam, Surat - 395004.
                </p>

                <!-- <p> phone : +91 90337 93379</p> -->

            </div>

            <!-- Quick Links -->
            <div class="footer-column quick-links" id="quick-links">
                <h3>QUICK LINK</h3>

                <a href="/">Home</a>
                <a href="/"> Jewellery</a>
                <a href="/">Our Product</a>
                <!-- <a href="/software-development"> Software Development Services </a>
                <a href="/machine-learning"> AI & Machine Learning Services </a>
                <a href="/3d-printing"> 3D Printing Services </a>
                <a href="/cad-design"> 3D CAD Design Services </a>
                <a href="/r&d-services">R&D Services</a> -->
                <!-- <a href="/career">Career</a> -->
                <a href="/about">About Us</a>
                <a href="/" id="footerContact">Contact Us</a>
            </div>

            <!-- Contact -->
            <!-- <div class="footer-column contact" id="contect">
                <h3>CONTACT US</h3>

                <h4>SALES INQUIRY</h4>
                <p>
                    Phone : +91 90540 05433<br>
                    Email : info@ldtecs.com
                </p>

                <h4>FOLLOW US</h4>

                <div class="social-icons">
                    <a href="https://www.youtube.com/@LDTECS" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.instagram.com/ld_tecs/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQF6SVfDW8dMpQAAAaGgRYjQDDWKlkCxtYSNKhF1yF23BYZARKJpU-uVm1s6s28WnW9_c-7nLmx5buf2Q9Yxv0JXgiVC_K0sQmz0BFS_A6KRG4uwJWtbZ191Nsi2ch4PtaQ2G-s=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fldtecs%2F%3FviewAsMember%3Dtrue" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div> -->

        </div>

        <!-- Bottom Footer -->
        <div class="footer-bottom">

            <div class="footer-policy">
                <a href="#privacy">Privacy Policy</a>
                <span>-</span>
                <a href="#terms">Terms and Conditions</a>
                
            </div>

            <p class="copyright">
                © 2026 VS PRODUCTS INDIA. All rights reserved.
            </p>

        </div>

    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>

    <script>
        gsap.registerPlugin(ScrollTrigger);
    </script>

    <script src="{{ secure_asset('script.js') }}"></script>
    
    <script>
        const toggle = document.getElementById('menuToggle');
        const navbar = document.getElementById('navbar');
        const productMenus = document.querySelectorAll('.product-menu');

        if (toggle && navbar) {
            toggle.addEventListener('click', () => {
                const isOpen = navbar.classList.toggle('open');
                toggle.classList.toggle('active', isOpen);
                toggle.setAttribute('aria-expanded', String(isOpen));
                toggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
            });

            productMenus.forEach(menu => {
                const link = menu.querySelector(':scope > .product-link');
                if (!link) return;
                link.addEventListener('click', event => {
                    if (window.innerWidth <= 820) {
                        event.preventDefault();
                        const wasOpen = menu.classList.contains('mobile-open');
                        productMenus.forEach(other => other.classList.remove('mobile-open'));
                        if (!wasOpen) menu.classList.add('mobile-open');
                    }
                });
            });

            navbar.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    const parentMenu = link.closest('.product-menu');
                    const isDropdownHeading = parentMenu && link.classList.contains('product-link');
                    if (window.innerWidth <= 820 && !isDropdownHeading) {
                        navbar.classList.remove('open');
                        toggle.classList.remove('active');
                        toggle.setAttribute('aria-expanded', 'false');
                        toggle.setAttribute('aria-label', 'Open navigation menu');
                        productMenus.forEach(menu => menu.classList.remove('mobile-open'));
                    }
                });
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth > 820) {
                    navbar.classList.remove('open');
                    toggle.classList.remove('active');
                    toggle.setAttribute('aria-expanded', 'false');
                    productMenus.forEach(menu => menu.classList.remove('mobile-open'));
                }
            });
        }

        /*====================================
            Product dropdown 
        ======================================*/
        
        document.querySelectorAll(".diamond-menu").forEach((menu) => {
            const button = menu.querySelector(".diamond-btn");
            const popup = menu.querySelector(".diamond-side-popup");

            button.addEventListener("click", (event) => {
                event.preventDefault();
                event.stopPropagation();

                const isOpen = popup.classList.contains("show");

                document.querySelectorAll(".diamond-side-popup").forEach((item) => {
                    item.classList.remove("show");
                });

                document.querySelectorAll(".diamond-btn").forEach((item) => {
                    item.classList.remove("active");
                });

                if (!isOpen) {
                    popup.classList.add("show");
                    button.classList.add("active");
                }
            });
        });

        document.addEventListener("click", (event) => {
            if (!event.target.closest(".diamond-menu")) {
                document.querySelectorAll(".diamond-side-popup").forEach((popup) => {
                    popup.classList.remove("show");
                });

                document.querySelectorAll(".diamond-btn").forEach((button) => {
                    button.classList.remove("active");
                });
            }
        });

        /*====================================
            Contect US 
        ======================================*/
        const contactPopup = document.getElementById("contactPopup");
        const closeContact = document.getElementById("closecontact");
        const openContact = document.getElementById("openContact");

        if (openContact && contactPopup) {
            openContact.addEventListener("click", () => {
                contactPopup.style.display = "flex";
                document.body.style.overflow = "hidden";
            });
        }

        function closeContactPopup() {
            contactPopup.style.display = "none";
            document.body.style.overflow = "";
        }

        if (closeContact) {
            closeContact.addEventListener("click", closeContactPopup);
        }

        if (contactPopup) {
            contactPopup.addEventListener("click", (event) => {
                if (event.target === contactPopup) {
                    closeContactPopup();
                }
            });
        }

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape" && contactPopup) {
                closeContactPopup();
            }
        });

        // Contact Form Submission
        const contactForm = document.getElementById("contactForm");

        if (contactForm) {
            contactForm.addEventListener("submit", async (event) => {
                event.preventDefault();

                const submitBtn = contactForm.querySelector(".submit-btn");
                const status = document.getElementById("formStatus");

                submitBtn.disabled = true;
                submitBtn.textContent = "Sending...";

                try {
                    const response = await fetch("/contact-submit", {
                        method: "POST",
                        headers: {
                            "Accept": "application/json"
                        },
                        body: new FormData(contactForm)
                    });

                    const result = await response.json();

                    if (!response.ok) {
                        throw new Error(result.message || "Something went wrong.");
                    }

                    status.textContent = result.message;
                    status.style.color = "#25D366";

                    contactForm.reset();

                    setTimeout(() => {
                        closeContactPopup();
                        status.textContent = "";
                    }, 2000);

                } catch (error) {
                    status.textContent = error.message;
                    status.style.color = "red";

                } finally {
                    submitBtn.disabled = false;
                    submitBtn.textContent = "Send Message";
                }
            });
        }

        /*==================================================
            Footer contact
        ====================================================*/

        document.addEventListener("DOMContentLoaded", function () {
            const openContact = document.getElementById("openContact");
            const footerContact = document.getElementById("footerContact");
            const contactPopup = document.getElementById("contactPopup");
            const closeContact = document.getElementById("closecontact");

            function showContactPopup(e) {
                e.preventDefault();

                if (contactPopup) {
                    contactPopup.style.display = "flex";
                }
            }

            if (openContact) {
                openContact.addEventListener("click", showContactPopup);
            }

            if (footerContact) {
                footerContact.addEventListener("click", showContactPopup);
            }

            if (closeContact) {
                closeContact.addEventListener("click", function () {
                    if (contactPopup) {
                        contactPopup.style.display = "none";
                    }
                });
            }
        });

        document.querySelectorAll('.diamond-btn').forEach(button => {

            button.addEventListener('click', function () {

                const popup = this.nextElementSibling;

                popup.classList.toggle('show');

                this.classList.toggle('active');

            });

        });



document.querySelectorAll('.diamond-item').forEach(item => {

    item.addEventListener('mouseenter', function () {

        document.querySelectorAll('.diamond-item').forEach(other => {

            other.querySelector('.diamond-side-popup').classList.remove('show');
            other.querySelector('.diamond-btn').classList.remove('active');

        });

        this.querySelector('.diamond-side-popup').classList.add('show');
        this.querySelector('.diamond-btn').classList.add('active');

    });

    item.addEventListener('mouseleave', function () {

        this.querySelector('.diamond-side-popup').classList.remove('show');
        this.querySelector('.diamond-btn').classList.remove('active');

    });

});

    </script>

    
</body>
</html>