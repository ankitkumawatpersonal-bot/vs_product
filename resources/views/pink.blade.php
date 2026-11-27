<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title> VS Products</title>

    <meta name="description"
        content="LDTECS provides innovative diamond detection machines, software development, AI and machine learning solutions, 3D printing and engineering services in Surat, Gujarat, India.">

    <meta name="robots" content="index, follow">

    <meta name="author" content="LDTECS">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://ldtecs.com/">

    <meta property="og:type" content="website">
    <meta property="og:title"
        content="LDTECS | Diamond Detection & Technology Solutions">
    <meta property="og:description"
        content="Explore LDTECS diamond detection technology, software development, AI solutions and engineering services.">
    <meta property="og:url" content="https://ldtecs.com/">
    <meta property="og:site_name" content="LDTECS">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title"
        content="LDTECS | Diamond Detection & Technology Solutions">
    <meta name="twitter:description"
        content="Innovative diamond detection and technology solutions by LDTECS.">
    <link rel="icon" type="image/png" href="/logo1.png?v=15">
    <link rel="shortcut icon" href="/logo.webp?v=15">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">

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
            font-family: "Segoe UI", Arial, sans-serif;
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
            padding: 20px 90px;
            box-shadow: 0 2px 12px rgba(25, 27, 25, 0.08);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .img {
            width: 100px;
            height: 100px;
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
            margin-right:300px; 
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

            .product-popup,.product-popup1,
            .product-popup2{
                position: absolute;
                width:200%;
                margin-top: 4px;
                transform: none;
                box-shadow: none;
                border: 1px solid var(--bg-1);
            }

            .product-menu:hover .product-popup,.product-popup1,
            .product-popup2 {
                transform: none;
            }

            .menu-toggle {
                display: flex;
            }

            .menu-toggle span {
                transition: transform 0.25s ease, opacity 0.25s ease;
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

        .product-popup {
            position: absolute;
            top: calc(70% + 20px);
            left: 30px;
            width: 190px;
            height: 315px;
            border-radius: 8px;
            padding: 15px 20px;
            background-color: #fff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);

            opacity: 0;
            visibility: hidden;
            transform: translate(-50%, 10px);
            transition: opacity 0.3s ease,
                        transform 0.3s ease,
                        visibility 0.3s ease;

            z-index: 1000;
            text-align: left;

            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 10px;
        }

        .product-popup1 {
            position: absolute;
            top: calc(70% + 20px);
            left: 50px;
            width: 280px;
            height: 505px;
            border-radius: 8px;
            padding: 15px 20px;
            background-color: #fff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);

            opacity: 0;
            visibility: hidden;
            transform: translate(-50%, 10px);
            transition: opacity 0.3s ease,
                        transform 0.3s ease,
                        visibility 0.3s ease;

            z-index: 1000;
            text-align: left;

            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 10px;
        }

        .product-popup2 {
            position: absolute;
            top: calc(70% + 20px);
            left: 60px;
            width: 250px;
            height: 310px;
            border-radius: 8px;
            padding: 15px 20px;
            background-color: #fff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);

            opacity: 0;
            visibility: hidden;
            transform: translate(-50%, 10px);
            transition: opacity 0.3s ease,
                        transform 0.3s ease,
                        visibility 0.3s ease;

            z-index: 1000;
            text-align: left;

            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 10px;
        }

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

        .product-menu:hover .product-popup2{
            opacity:1;
            visibility:visible;
            transform:translate(-50%,0)
        }

        .product-popup a {
            display: block;
            padding: 8px 15px;
            margin: 0;
            line-height: 1.4;
            text-decoration: none;
        }

        .product-popup1 a{
            display: block;
            padding: 8px 15px;
            margin: 0;
            line-height: 1.4;
            text-decoration: none;
        }

        .product-popup2 a{
            display: block;
            padding: 8px 15px;
            margin: 0;
            line-height: 1.4;
            text-decoration: none;
        }

        .product-popup a:hover{
            background: #9b0101;
            color: #fff;
            border-radius: 8px;
        }

        .product-popup a.active{
            background: #9b0101;
            color: #fff;
            border-radius: 8px;
        }

        .product-popup1 a:hover{
            background: #9b0101;
            color: #fff;
            border-radius: 8px;
        }

        .product-popup2 a:hover{
            background: #9b0101;
            color: #fff;
            border-radius: 8px;
        }

        .page1{
            position:relative;
            width:100%;
            min-height:100vh;
            display:flex;
            flex-direction:column;
            isolation:isolate;
        }

        .page2 {
            width: 100%;
            min-height: 90vh;
            padding: 70px 35px 80px;
            background-color: #fff;
            text-align: center;
            overflow: hidden;
        }

        /* .products-title {
            margin: 0 0 55px;
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: clamp(35px, 4vw, 38px);
            font-weight: 650;
            color: #9b0101;
            opacity: 1;
        }

        .products-container {
            width: 90%;
            max-width: 1500px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            align-items: stretch;
        }

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

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.15);
            border-color: #9b0101;
        }

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

        .product-card:hover .product-image {
            transform: scale(1.08);
            filter: brightness(1.03);
        }

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

        .diem p {
            margin: 5px 0;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.4;
            color: #9b0101;
        }

        .diem p:first-of-type {
            margin-top: 5px;
            font-size: 18px;
        }

        .product-image-link:active {
            transform: scale(0.97);
        }

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

        @media (max-width: 600px) {

        }

        @media (max-width: 1000px) {

        }

        @media (max-width: 700px) {

        }

        @media (max-width: 420px) {

        } */

        /* .page5 {
            width: 100%;
            position: relative;
            overflow: hidden;
            background:
        radial-gradient(circle at 15% 25%, rgba(155, 1, 1, 0.07), transparent 30%),
        radial-gradient(circle at 85% 75%, rgba(155, 1, 1, 0.06), transparent 30%),
        linear-gradient(135deg, #ffffff, #fff8f7);
        }

        .clients-section {
            width: 100%;
            padding: 45px 0 65px;
            position: relative;
            overflow: hidden;
        }

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

        .marquee {
            width: 100%;
            overflow: hidden;
            position: relative;
            padding: 25px 0;
            background: #5e1919;
        }

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

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marqueeMove 35s linear infinite;
            will-change: transform;
        }

        .marquee-group {
            display: flex;
            align-items: center;
            gap: 25px;
            padding: 0 12px;
            flex-shrink: 0;
        }

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

        .marquee:hover .marquee-track {
            animation-play-state: paused;
        }

        @keyframes marqueeMove {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

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

        }

        @media (prefers-reduced-motion: reduce) {

            .marquee-track {
                animation: none;
            }

        } */

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

        .footer::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
        }

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
            
            padding: 10px 18px;
            font-size: 16px;
            
            transition: 0.3s;
        }

        .contact-btn:hover {
            
            color: #160039;
        }

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

        @media (max-width: 900px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
                gap: 35px;
            }

            .footer-bottom {
                justify-content: flex-start;
            }
        }

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
            .product-popup1,
            .product-popup2 {
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
            .product-menu.mobile-open .product-popup1,
            .product-menu.mobile-open .product-popup2 {
                display: flex;
            }

            .product-menu:hover .product-popup,
            .product-menu:hover .product-popup1,
            .product-menu:hover .product-popup2 {
                opacity: 1;
                visibility: visible;
                transform: none;
            }

        }

        @media (max-width: 480px) {
            .header { padding: 8px 14px; min-height: 68px; }
            .img { width: 54px; height: 54px; }

        }

        .contact-btn {
            background: transparent;
            color: white;
            
            padding: 9px 18px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .contact-btn:hover {
            
            color: #111;
            
        }

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

        @media (max-width: 480px) {
            .contact-box {
                padding: 28px 20px;
                
            }

            .contact-box h2 {
                font-size: 24px;
            }
        }

        .product-menu {
            position: relative;
        }

        .floating-whatsapp {
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
        }

        @media (max-width: 600px) {
            .floating-whatsapp {
                right: 100px;
                bottom: 25px;
                width: 55px;
                height: 55px;
                font-size: 35px;
            }
        }

.page1 {
    min-height: 100vh;
    background:
        radial-gradient(circle at 15% 25%, rgba(155, 1, 1, 0.07), transparent 30%),
        radial-gradient(circle at 85% 75%, rgba(155, 1, 1, 0.06), transparent 30%),
        linear-gradient(135deg, #ffffff, #fff8f7);
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

@media (max-width: 1000px) {
    .products-container {
        grid-template-columns: repeat(2, 1fr);
    }

    .product-card {
        min-height: 430px;
    }
}

@media (max-width: 700px) {

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

@media (max-width: 450px) {

    .product-card {
        min-height: 400px;
    }

    .product-image-link {
        height: 230px;
    }
}

/* @media (prefers-reduced-motion: reduce) {
    
}

.diamond-menu {
    display: flex !important;
    flex-direction: column !important;
    gap: 0 !important;
    width: 100%;
    background: #ffffff !important;
    border-radius: 10px;
}

.diamond-item {
    width: 100%;
    margin: 0 !important;
    padding: 0 !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
}

.diamond-btn {
    width: 100%;
    padding: 17px 18px !important;
    background: transparent !important;
    color: #173237 !important;
    border: none !important;
    border-radius: 7px !important;
    box-shadow: none !important;
}

.diamond-item:hover > .diamond-btn {
    background: #9b0101 !important;
    color: #ffffff !important;
}

.diamond-btn i {
    transition: transform 0.3s ease;
}

.diamond-item:hover .diamond-btn i {
    transform: rotate(90deg);
} */

#introLoader {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100vh;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 999999;
    opacity: 1;
    visibility: visible;
    transition: opacity 0.8s ease, visibility 0.8s ease;
}

#introLoader img {
    width: 150px;
    max-width: 60%;
    height: auto;
    opacity: 0;
    animation: logoIntro 1.5s ease forwards;
}

#introLoader.hide {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

@keyframes logoIntro {
    0% {
        opacity: 0;
        transform: scale(0.3) rotate(-25deg);
    }

    60% {
        opacity: 1;
        transform: scale(1.15) rotate(5deg);
    }

    100% {
        opacity: 1;
        transform: scale(1) rotate(0deg);
    }
}

@media (max-width: 576px) {
    #introLoader img {
        width: 120px;
    }
}

@media (prefers-reduced-motion: reduce) {
    #introLoader img {
        animation: none;
        opacity: 1;
        transform: none;
    }
}

/* .hero-slider {
    width: 100%;
    height: 50vh;
    min-height: 550px;
    position: relative;
    overflow: hidden;
    background: #fffafa;
}

.slides {
    width: 100%;
    height: 100%;
    position: relative;
}

.slide {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;

    background: linear-gradient(
        120deg,
        #fff,
        #f9eeee,
        #fff
    );

    opacity: 0;
    visibility: hidden;
    transform: scale(1.05);
    transition: opacity 1s ease,
                transform 1.2s ease,
                visibility 1s;
}

.slide.active {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
    z-index: 1;
}

.slide-content {
    text-align: center;
    padding: 20px;
}

.slide-content1 {
    text-align: center;
    padding: 20px;
    display:flex;
}

.alloy {
    text-align: center;
    padding: 20px;
    display:grid;
}

.slide-content h1 {
    font-size: clamp(40px, 5vw, 80px);
    font-weight: 800;
    color: #171717;
    margin: 0 0 10px;
}

.slide-content h2 {
    font-size: clamp(40px, 5vw, 80px);
    font-weight: 800;
    color: #a90000;
    margin: 0 0 15px;
}

.slide-content p {
    font-size: 18px;
    color: #555;
    margin-bottom: 30px;
}

.slide-content1 h1 {
    font-size: clamp(40px, 5vw, 60px);
    font-weight: 800;
    color: #171717;
    margin: 0 0 10px;
}

.slide-content1 h2 {
    font-size: clamp(40px, 5vw, 50px);
    font-weight: 800;
    color: #a90000;
    margin: 0 0 15px;
}

.slide-content1 p {
    font-size: 18px;
    color: #555;
    margin-bottom: 30px;
}

.slider-btn {
    display: inline-block;
    padding: 13px 30px;
    background: #a90000;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: .3s;
}

.slide-btn1 {
    display: inline-block;
    padding: 13px;
    margin-right: 250px;
    margin-left: 250px;
    background: #a90000;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: .3s;
}

.slide-btn2 {
    display: inline-block;
    padding: 13px;
    margin-right: 340px;
    margin-left: 340px;
    background: #a90000;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: .3s;
}

.slider-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 5;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    background: rgba(255,255,255,.8);
    color: #a90000;
    font-size: 20px;
    cursor: pointer;
}

.prev {
    left: 25px;
}

.next {
    right: 25px;
}

.slider-dots {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 12px;
    z-index: 5;
}

.dot {
    width: 12px;
    height: 12px;
    background: #bbb;
    border-radius: 50%;
    cursor: pointer;
}

.dot.active {
    background: #a90000;
    width: 30px;
    border-radius: 10px;
}

.legor{
    width: 400px;
    height: 300px;
    padding-left:-150px;
    padding-right:150px;
}

@media(max-width: 768px) {
    .hero-slider {
        height: 75vh;
        min-height: 450px;
    }

    .slide-content p {
        font-size: 14px;
    }

    .slide-content1 p {
        font-size: 14px;
    }

    .slider-arrow {
        width: 35px;
        height: 35px;
    }

    .prev { left: 10px; }
    .next { right: 10px; }
} */

    .yellow-hero {
            min-height: 700px;
            padding: 45px 5%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 55px;
            overflow: hidden;
                min-height: 100vh;
    background:
        radial-gradient(circle at 15% 25%, rgba(155, 1, 1, 0.07), transparent 30%),
        radial-gradient(circle at 85% 75%, rgba(155, 1, 1, 0.06), transparent 30%),
        linear-gradient(135deg, #ffffff, #fefff7);
        }

        .yellow-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .yellow-image img {
            width: 100%;
            max-width: 560px;
            max-height: 620px;
            object-fit: contain;
        }

        .yellow-content {
            flex: 1;
            max-width: 650px;
        }

        .legor-logo {
            text-align: center;
            font-size: clamp(45px, 6vw, 85px);
            font-weight: 800;
            letter-spacing: -4px;
            color: #063d7c;
            line-height: 1;
        }

        .legor-logo span {
            display: block;
            text-align: right;
            font-size: 35px;
            font-weight: 400;
            letter-spacing: 0;
            margin-right: 12px;
        }

        .yellow-divider {
            border: 0;
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }

        .yellow-title {
            background: linear-gradient(135deg, #E97A4C,#F79772, #C45D38);
            color: #073b77;
            text-align: center;
            font-size: clamp(32px, 4vw, 57px);
            font-weight: 800;
            padding: 5px 12px;
            border-radius: 9px;
        }

        .yellow-subtitle {
            color: #10457e;
            text-align: center;
            font-size: clamp(19px, 2vw, 27px);
            margin: 12px 0;
            font-weight: 700;
        }

        .yellow-description {
            color: #292929;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        .yellow-features {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            margin: 25px 0;
        }

        .feature {
            text-align: center;
            padding: 8px;
            border-right: 1px solid #17375f;
        }

        .feature:last-child {
            border-right: none;
        }

        .feature-icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 8px;
            border: 2px solid #0b407c;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #0b407c;
        }

        .feature p {
            font-size: 14px;
            font-weight: 600;
            line-height: 1.4;
        }

        .details-title {
            display: inline-block;
            background: #07417e;
            color: white;
            padding: 8px 18px;
            font-size: 21px;
            font-weight: 700;
            border-radius: 8px 8px 0 0;
        }

        .details-table {
            width: 100%;
            max-width: 440px;
            border-collapse: collapse;
            color: #222;
            font-size: 14px;
        }

        .details-table td {
            border: 1px solid #b7c4d5;
            padding: 8px 10px;
        }

        .details-table td:first-child {
            font-weight: 600;
            width: 36%;
        }

        .yellow-cta {
            display: inline-block;
            margin-top: 25px;
            background: #9b0101;
            color: white;
            padding: 13px 22px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: .3s;
        }

        .yellow-cta:hover {
            background: #f0bd17;
            color: #073b77;
            transform: translateY(-3px);
        }

        @media(max-width: 900px) {
            .yellow-hero {
                flex-direction: column;
                gap: 25px;
                padding: 35px 5%;
            }

            .yellow-image img {
                max-height: 420px;
            }

            .yellow-content {
                width: 100%;
            }
        }

        @media(max-width: 500px) {
            .yellow-features {
                grid-template-columns: repeat(2, 1fr);
                row-gap: 18px;
            }

            .feature:nth-child(2) {
                border-right: none;
            }

            .legor-logo {
                font-size: 48px;
            }

            .yellow-description {
                font-size: 14px;
            }

            .details-table {
                font-size: 12px;
            }
        }
        
        /* section2 */


.higher-yellow {
    padding: 90px 7%;
    background: linear-gradient(135deg, #fffdf8, #f8f3e9);
    position: relative;
    overflow: hidden;
}

.lower-yellow {
    padding: 90px 7%;
    background: linear-gradient(135deg, #fff, #f8f3e9);
    position: relative;
    overflow: hidden;
}

.casting {
    max-width: 1250px;
    margin: auto;
}

.higher-karatage {
    text-align: center;
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 700;
    color: #29231b;
    margin-bottom: 55px;
    position: relative;
    letter-spacing: 1px;
}

.higher-karatage::after {
    content: "";
    display: block;
    width: 85px;
    height: 4px;
    margin: 18px auto 0;
    border-radius: 10px;
    background: linear-gradient(90deg, #b88632, #f4d58d, #b88632);
}

.higher-para {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.higher-para li {
    list-style: none;
    position: relative;
    padding: 22px 20px 22px 48px;
    background: #ffffff;
    border: 1px solid #eee2c9;
    border-radius: 10px;
    color: #454039;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0.4px;
    line-height: 1.6;
    box-shadow: 0 5px 18px rgba(99, 73, 30, 0.05);
    transition: all 0.35s ease;
}

.higher-para li::before {
    content: "✦";
    position: absolute;
    left: 19px;
    top: 50%;
    transform: translateY(-50%);
    color: #c39543;
    font-size: 18px;
}

.higher-para li:hover {
    transform: translateY(-6px);
    border-color: #c39543;
    box-shadow: 0 12px 28px rgba(145, 105, 38, 0.13);
    background: #fffdf8;
    color: #a4772c;
}


/* ==============================
   RESPONSIVE - HIGHER KARATAGE
================================ */

/* Large Desktop */
@media (min-width: 1200px) {
    .higher-para {
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .higher-yellow {
        padding: 90px 7%;
    }
}

/* Laptop */
@media (max-width: 1199px) {
    .higher-para {
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .higher-para li {
        font-size: 13px;
        padding: 18px 12px 18px 38px;
    }

    .higher-para li::before {
        left: 13px;
    }
}

/* Tablet / iPad */
@media (max-width: 991px) {
    .higher-yellow {
        padding: 70px 5%;
    }

    .higher-karatage {
        font-size: 36px;
        margin-bottom: 40px;
    }

    .higher-para {
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .higher-para li {
        font-size: 13px;
        padding: 18px 12px 18px 38px;
        line-height: 1.5;
    }
}

/* Small Tablet */
@media (max-width: 767px) {
    .higher-yellow {
        padding: 60px 25px;
    }

    .higher-karatage {
        font-size: 32px;
    }

    .higher-para {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .higher-para li {
        font-size: 12px;
        padding: 16px 10px 16px 32px;
        border-radius: 8px;
        overflow-wrap: anywhere;
    }

    .higher-para li::before {
        left: 10px;
        font-size: 15px;
    }
}

/* Mobile */
@media (max-width: 576px) {
    .higher-yellow {
        padding: 50px 18px;
    }

    .higher-karatage {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .higher-karatage::after {
        width: 65px;
        height: 3px;
        margin-top: 12px;
    }

    .higher-para {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .higher-para li {
        width: 100%;
        box-sizing: border-box;
        font-size: 13px;
        padding: 17px 15px 17px 42px;
        line-height: 1.5;
    }

    .higher-para li::before {
        left: 15px;
        font-size: 16px;
    }
}

/* Extra Small Mobile */
@media (max-width: 375px) {
    .higher-yellow {
        padding: 40px 14px;
    }

    .higher-karatage {
        font-size: 25px;
    }

    .higher-para li {
        font-size: 11px;
        padding: 15px 10px 15px 35px;
    }

    .higher-para li::before {
        left: 11px;
    }
}




    </style>
</head>
<body>
    <div class="page1">
        
        <header class="header">
            <div class="logo">
                <img class="img" src="logo1.png" alt="logo" onerror="this.style.background='var(--text)'">
            </div>

            <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open navigation menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="navbar" id="navbar">
                <a href="/" >Home</a> 
                <div class="product-menu">
                    <a href="#alloys" class="active"> Alloys <i class="fa-solid fa-chevron-down"></i></a>

                    <div class="product-popup">
                        <a href="/yellow"> Yellow Alloys </a>
                        <a href="/pink" class="active"> Pink Alloys </a>
                        <a href="/white"> White Alloys </a>
                        <a href="/silver"> Silver Alloys </a>
                        <a href="/platinum"> Platinum Alloys </a>
                        <a href="/solder"> Solder Alloys </a>
                    </div>
                </div>
                <div class="product-menu">
                    <a href="#equipment" class="product-link"> Equipment<i class="fa-solid fa-chevron-down"></i></a>
                    <div class="product-popup1">
                        <a href="/casting-equipment"> Casting Equipment </a>
                        <a href="/filing-equipment"> Filing Equipment </a>
                        <a href="/electro-polish"> Electro Polish </a>
                        <a href="/polishing-machine"> Polishing Machine </a>
                        <a href="/micro-setting-machine"> Micro Setting Machine </a>
                        <a href="/rhodium-machine"> Rhodium Machine </a>
                        <a href="/refinery-machine"> Refinery Machine </a>
                        <a href="/ultrasonic-handwash"> UltraSonic Handwash </a>
                        <a href="/laser-welding-machine"> Laser Welding Machine </a>
                        <a href="/powder-investment-machine"> Powder Investment Machine </a>                        
                    </div>
                </div>

                <div class="product-menu">
                    <a href="#cansumables" class="product-link"> Cansumables<i class="fa-solid fa-chevron-down"></i></a>
                    <div class="product-popup2">
                        <a href="/chemical-cansumables"> Chemical Cansumables </a>
                        <a href="/elctro-polish-chemical"> Elctro Polish Chemical </a>
                        <a href="/plating-solution"> Plating Solution </a>
                        <a href="/burnout-furnace"> Burnout Furnace</a>
                        <a href="/microscope"> Microscope </a>
                        <a href="/micro-motor"> Micro Motor </a>
                    </div>
                </div>
                
                <a href="/">About Us</a>
                <a class="contact-btn" id="openContact">Contact Us</a>
            </nav>
            
        </header>

        <section class="yellow-hero">

            <!-- Product Image -->
            <div class="yellow-image">
                <img src="{{ asset('legor pink.png') }}"
                    alt="LEGOR Pink Gold Alloys">
            </div>

            <!-- Product Content -->
            <div class="yellow-content">

                <!-- <div class="legor-logo">
                    LEGOR<sup style="font-size:18px;">®</sup>
                    <span>alloys</span>
                </div> -->

                <!-- <hr class="yellow-divider"> -->

                <h1 class="yellow-title">Pink Alloys</h1>

                <h2 class="yellow-subtitle">
                    Superior Quality for Brilliant Results
                </h2>

                <p class="yellow-description">
                    LEGOR Yellow Alloys are developed for jewellery
                    manufacturers seeking consistent colour, reliable
                    processing and excellent manufacturing performance.
                </p>

                <!-- Features -->
                <div class="yellow-features">

                    <div class="feature">
                        <div class="feature-icon">♢</div>
                        <p>Brilliant<br>Yellow Colour</p>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">✓</div>
                        <p>Reliable<br>Performance</p>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">♨</div>
                        <p>Excellent<br>Processing</p>
                    </div>

                    <div class="feature">
                        <div class="feature-icon">∞</div>
                        <p>Versatile<br>Applications</p>
                    </div>

                </div>

                <!-- Product Details -->
                <div class="details-title">Product Details</div>

                <table class="details-table">
                    <tr>
                        <td>Brand</td>
                        <td>LEGOR</td>
                    </tr>
                    <tr>
                        <td>Product</td>
                        <td>Yellow Alloys</td>
                    </tr>
                    <tr>
                        <td>Product Line</td>
                        <td>Gold Line</td>
                    </tr>
                    <tr>
                        <td>Colour</td> 
                        <td>Yellow Gold</td>
                    </tr>
                    <tr>
                        <td>Applications</td>
                        <td>Jewellery Casting & Working</td>
                    </tr>
                </table>

                <a href="{{ url('/contact') }}" class="yellow-cta">
                    Enquire Now →
                </a>

            </div>

        </section>

        <section class="higher-yellow">
            <div class="casting">
                <h1 class="higher-karatage"> Higher Karatage </h1>
                <div class="higher-para">
                    <li> BH202YC (22KT RICH YELLOW) </li>
                    <li> BH041YU (18-22KT YELLOW) </li>
                    <li> BH079YC (18KT YELLOW) </li>
                    <li> BH335YC (18KT YELLOW) </li>
                    <li> A101 (18KT YELLOW) </li>
                    <li> SCA4 (18-22KT PINK YELLOW) </li>
                    <li> C183N3 (18KT RICH YELLOW) </li>
                    <li> C183NL (18KT NATURAL YELLOW) </li>
                    <li> YN83C (18KT RICH YELLOW) </li>
                    <li> YN82D (18KT PALE YELLOW) </li>
                    <li> YA22WT (22KT HARD YELLOW) </li>
                    <li> BH041YU (18KT RICH YELLOW/SOLID CHAIN) </li>
                    <li> BH042YW (22KT RICH YELLOW/SOLID CHAIN) </li>
                    <li> YA22WT (22KT RICH YELLOW/BANGLE) </li>
                    <li> SM1 (18KT RICH YELLOW/HOLLOW CHAIN) </li>
                    <li> SM2 (18KT RICH YELLOW/BANGLE) </li>
                    <li> B183N (18KT RICH YELLOW/HOLLOW CHAIN) </li>
                </div>
            </div>

        </section>

        <section class="lower-yellow">
            <div class="casting">
                <h1 class="higher-karatage"> Lower Karatage </h1>
                <div class="higher-para">
                    <li> BH057YC (9-14KT YELLOW) </li>
                    <li> A101 (9-14KT RICH YELLOW)  </li>
                    <li> A202 (9-14KT RICH YELLOW) </li>
                    <li> SCA5 (9-14KT GREEN YELLOW) </li>
                    <li> Y143W (9-14KT RICH YELLOW/HOLLOW CHAIN) </li>
                    <li> SM5 (9-14KT RICH YELLOW/BANGLE) </li>
                    <li> Y145TL (9-14KT RICH YELLOW/SOLID CHAIN) </li>
                </div>
            </div>

        </section>



        <!-- <section class="hero-slider">

            <div class="slides">

                <div class="slide active">
                    <div class="slide-content">
                        <h1>Welcome To</h1>
                        <h2>VS PRODUCT</h2>
                        <p>Innovation • Quality • Technology</p>
                        <a href="/about" class="slider-btn">Explore More</a>
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content1">
                        <img class="legor" src="legor1.png" Alt="Legor Alloys">
                        <div class="alloy">
                            <h1>Legor Alloys</h1>
                            <h2>Advanced Alloys Solutions</h2>
                            <p>Powering Precision and Innovation in Jewellery Manufacturing</p>
                            <a href="/jewellery" class="slide-btn1">Our Products</a>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content1">
                        <img class="legor" src="powder.png" Alt="Powder Investment Machine">
                        <div class="alloy">
                            <h1> Powder Investment Machine </h1>
                            <h2> Powerful Vacuum System </h2>
                            <p> Consistent Mix. Stronger Moduls. Better Castings.</p>
                            <a href="/jewellery" class="slide-btn2">Our Products</a>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content1">
                        <img class="legor" src="burnout.png" Alt="Burnout Furnace">
                        <div class="alloy">
                            <h1> Burnout Furnace </h1>
                            <h2> Precision Heat Technology </h2>
                            <p> Reliable Heating Solutions for Precision Jewellery Manufacturing</p>
                            <a href="/jewellery" class="slide-btn1">Our Products</a>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-content1">
                        <img class="legor" src="legor2.png" Alt="Rhodium">
                        <div class="alloy">
                            <h1> Rhodium Plating Solutions </h1>
                            <h2> Brilliant Shine. Lasting Protection. </h2>
                            <p> Premium Rhodium Plating Solutions for a Brilliant, Durable and Long-Lasting Jewellery Finish.</p>
                            <a href="/jewellery" class="slide-btn2">Our Products</a>
                        </div>
                    </div>
                </div>

            </div>

            <button class="slider-arrow prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="slider-arrow next" onclick="changeSlide(1)">&#10095;</button>

            <div class="slider-dots">
                <span class="dot active" onclick="currentSlide(0)"></span>
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                
            </div>

        </section> -->
    </div>

    <!-- <section class="page2" id="our-products">

        <h1 id="productsTitle" class="products-title">Our Products</h1>

        <div class="products-container">

            <div class="box1 product-card">

                <a href="/" class="product-image-link">
                    <img class="product-image elite" src="elite0.png" alt="Classifier Elite" id="zoomImage">
                </a>

                <div class="diem">
                    <h2>AUTOMATION FOR </h2>
                    <h3>JEWELLERY GRIDING & FILLING</h3>
                </div>

            </div>

            <div class="box1 product-card">

                <a href="/" class="product-image-link">
                    <img class="product-image lite" src="lite1.png" alt="Classifier Lite" id="zoomLite">
                </a>

                <div class="diem">
                    <h2>ELECTRO</h2>
                    <h3>FILO-POLISHING PRO+</h3>
                </div>

            </div>

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
    </section> -->

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

    <!-- <section class="page5" id="our-clients">

        <div class="clients-section">

            <div class="clients-heading">

                <h2>
                    AUTHORISED DEALER
                </h2>
            </div>

            <div class="marquee">

                <div class="marquee-track">

                    <div class="marquee-group">

                        <div class="client-card">
                            <img src="legor.webp" alt="Legor">
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

                    </div>

                    <div class="marquee-group" aria-hidden="true">

                        <div class="client-card">
                            <img src="legor.webp" alt="">
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

                    </div>

                </div>

            </div>

        </div>

    </section> -->
    
    <footer class="footer">

        <div class="footer-cta">
            <h1>Let's put our minds into motion,<br>
                Let's grow together</h1>
        </div>

        <div class="footer-container">

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

            </div>

            <div class="footer-column quick-links" id="quick-links">
                <h3>QUICK LINK</h3>

                <a href="/">Home</a>
                <a href="/"> Jewellery</a>
                <a href="/">Our Product</a>

                <a href="/about">About Us</a>
                <a href="/" id="footerContact">Contact Us</a>
            </div>

        </div>

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

        // Mobile navigation and product dropdowns
        const menuToggle = document.getElementById("menuToggle");
        const navbar = document.getElementById("navbar");
        const productMenus = document.querySelectorAll(".product-menu");

        function closeMobileMenu() {
            if (!navbar || !menuToggle) return;
            navbar.classList.remove("open");
            menuToggle.classList.remove("active");
            menuToggle.setAttribute("aria-expanded", "false");
            menuToggle.setAttribute("aria-label", "Open navigation menu");
            productMenus.forEach(menu => menu.classList.remove("mobile-open"));
        }

        if (menuToggle && navbar) {
            menuToggle.addEventListener("click", () => {
                const isOpen = navbar.classList.toggle("open");
                menuToggle.classList.toggle("active", isOpen);
                menuToggle.setAttribute("aria-expanded", String(isOpen));
                menuToggle.setAttribute(
                    "aria-label",
                    isOpen ? "Close navigation menu" : "Open navigation menu"
                );
            });

            productMenus.forEach(menu => {
                const link = menu.querySelector(":scope > .product-link");
                if (!link) return;

                link.addEventListener("click", event => {
                    if (window.innerWidth <= 820) {
                        event.preventDefault();
                        const wasOpen = menu.classList.contains("mobile-open");
                        productMenus.forEach(item => item.classList.remove("mobile-open"));
                        if (!wasOpen) menu.classList.add("mobile-open");
                    }
                });
            });

            navbar.querySelectorAll("a").forEach(link => {
                link.addEventListener("click", () => {
                    const isDropdownHeading =
                        link.classList.contains("product-link");
                    if (window.innerWidth <= 820 && !isDropdownHeading) {
                        closeMobileMenu();
                    }
                });
            });

            window.addEventListener("resize", () => {
                if (window.innerWidth > 820) closeMobileMenu();
            });
        }

        // Contact popup
        const contactPopup = document.getElementById("contactPopup");
        const closeContactButton = document.getElementById("closecontact");
        const contactTriggers = [
            document.getElementById("openContact"),
            document.getElementById("footerContact")
        ].filter(Boolean);

        function openContactPopup(event) {
            if (event) event.preventDefault();
            if (!contactPopup) return;
            contactPopup.style.display = "flex";
            document.body.style.overflow = "hidden";
        }

        function closeContactPopup() {
            if (!contactPopup) return;
            contactPopup.style.display = "none";
            document.body.style.overflow = "";
        }

        contactTriggers.forEach(trigger => {
            trigger.addEventListener("click", openContactPopup);
        });

        if (closeContactButton) {
            closeContactButton.addEventListener("click", closeContactPopup);
        }

        if (contactPopup) {
            contactPopup.addEventListener("click", event => {
                if (event.target === contactPopup) closeContactPopup();
            });
        }

        document.addEventListener("keydown", event => {
            if (event.key === "Escape") closeContactPopup();
        });

        // Contact form submission
        const contactForm = document.getElementById("contactForm");

        if (contactForm) {
            contactForm.addEventListener("submit", async event => {
                event.preventDefault();

                const submitButton = contactForm.querySelector(".submit-btn");
                const status = document.getElementById("formStatus");

                if (submitButton) {
                    submitButton.disabled = true;
                    submitButton.textContent = "Sending...";
                }

                try {
                    const response = await fetch("/contact-submit", {
                        method: "POST",
                        headers: { "Accept": "application/json" },
                        body: new FormData(contactForm)
                    });
                    const result = await response.json();

                    if (!response.ok) {
                        throw new Error(result.message || "Something went wrong.");
                    }

                    if (status) {
                        status.textContent = result.message || "Message sent successfully.";
                        status.style.color = "#25D366";
                    }

                    contactForm.reset();

                    setTimeout(() => {
                        closeContactPopup();
                        if (status) status.textContent = "";
                    }, 2000);
                } catch (error) {
                    if (status) {
                        status.textContent = error.message;
                        status.style.color = "red";
                    }
                } finally {
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.textContent = "Send Message";
                    }
                }
            });
        }

        // Intro loader
        window.addEventListener("load", () => {
        const loader = document.getElementById("introLoader");

            if (loader) {
                setTimeout(() => {
                    loader.classList.add("hide");
                }, 700);
            }
        });

        // Hero slider
        const slides = document.querySelectorAll(".slide");
        const dots = document.querySelectorAll(".dot");
        let slideIndex = 0;
        let sliderTimer;

        function showSlide(index) {
            if (!slides.length) return;

            slides.forEach(slide => slide.classList.remove("active"));
            dots.forEach(dot => dot.classList.remove("active"));

            slideIndex = (index + slides.length) % slides.length;
            slides[slideIndex].classList.add("active");
            if (dots[slideIndex]) dots[slideIndex].classList.add("active");
        }

        function startSlider() {
            if (slides.length < 2) return;
            sliderTimer = setInterval(() => showSlide(slideIndex + 1), 5000);
        }

        function restartSlider() {
            clearInterval(sliderTimer);
            startSlider();
        }

        function changeSlide(direction) {
            showSlide(slideIndex + direction);
            restartSlider();
        }

        function currentSlide(index) {
            showSlide(index);
            restartSlider();
        }

        if (slides.length) {
            showSlide(0);
            startSlider();
        }

    </script>

    <a href="https://wa.me/917240713574"
    class="floating-whatsapp"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat on WhatsApp">

        <i class="fa-brands fa-whatsapp"></i>

    </a>

    <div id="introLoader">
        <img src="{{ asset('logo1.png') }}" alt="VS PRODUCT">
    </div>
</body>
</html>
