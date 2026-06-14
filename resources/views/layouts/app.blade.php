<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SmartClinic')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        .navbar,
        .navbar-expand-lg{
            position: sticky !important;
            top: 0;
            z-index: 9999;
        }

        .navbar{
            
            border: none !important;
            box-shadow: none !important;
        }

        .smart-glass-navbar{
    position:sticky;
    top:0;
    z-index:9999;

    background:rgba(8, 24, 40, 0.80) !important;

    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);

    border-bottom:1px solid rgba(255,255,255,0.18);

    box-shadow:0 8px 30px rgba(0,0,0,0.15);
}

.smart-glass-navbar .navbar-brand{
    color:#ffffff !important;
    font-weight:800;
}

.smart-glass-navbar .nav-link{
    color:rgba(255,255,255,0.85) !important;
    font-weight:500;
}

.smart-glass-navbar .nav-link:hover{
    color:#ffffff !important;
}

.smart-glass-navbar .btn{
    border-radius:50px;
    padding:7px 18px;
    font-weight:700;
}
.smart-glass-navbar::before{
    content:'';
    position:absolute;
    inset:0;

    background:linear-gradient(
        135deg,
        rgba(255,255,255,0.12),
        rgba(255,255,255,0.02)
    );

    pointer-events:none;
}
        /* HERO SECTION */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            color: white;
            background:
                linear-gradient(
                    90deg,
                    #0f1f2f 0%,
                    rgba(15, 31, 47, 0.95) 10%,
                    rgba(15, 31, 47, 0.65) 25%,
                    rgba(15, 31, 47, 0.20) 45%,
                    rgba(15, 31, 47, 0.05) 100%
                ),
                url('/images/hero6.jpg');
            background-size: 88%;
            background-position: right center;
            background-repeat: no-repeat;
            background-color: #0f1f2f;
        }

        .hero-content {
            width: 100%;
            padding-left: 80px;
            padding-right: 80px;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .hero-badge {
            display: inline-flex !important;
            width: fit-content !important;
            max-width: fit-content !important;
            padding: 10px 18px !important;
            border-radius: 10px;
            background: white;
            color: #0d6efd;
            font-size: 14px;
            font-weight: 700;
        }

        .hero-title {
            font-size: 64px;
            font-weight: 800;
            line-height: 1.15;
        }

        .hero-text {
            font-size: 18px;
            line-height: 1.8;
            max-width: 650px;
        }

        .btn-book {
            padding: 14px 35px;
            font-size: 17px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-book:hover {
            transform: scale(1.05);
        }

        .about-section{
            background:#ffffff;
            padding:90px 0;
        }

        .about-image-box{
            height:560px;
            overflow:hidden;
        }

        .about-img{
            width:100%;
            height:100%;
            object-fit:cover;
            border-radius:0;
        }

        .about-content{
            padding-left:70px;
        }

        .about-label{
            display:inline-block;
            background:#0d6efd;
            color:white;
            padding:9px 22px;
            border-radius:6px;
            font-weight:700;
            margin-bottom:25px;
        }

        .about-content h2{
            font-size:48px;
            line-height:1.2;
            font-weight:800;
            color:#111827;
            margin-bottom:25px;
        }

        .about-content p{
            color:#6c757d;
            font-size:18px;
            line-height:1.8;
            max-width:620px;
        }

        .about-buttons{
            display:flex;
            gap:15px;
            margin-top:30px;
        }

        .about-primary-btn{
            background:#0d6efd;
            color:white;
            padding:14px 30px;
            border-radius:40px;
            font-weight:700;
        }

        .about-secondary-btn{
            background:#ff5e57;
            color:white;
            padding:14px 30px;
            border-radius:40px;
            font-weight:700;
        }

        @media(max-width:768px){
            .about-section{
                padding:60px 0;
            }

            .about-image-box{
                height:360px;
                margin-bottom:35px;
            }

            .about-content{
                padding-left:0;
                padding:0 20px;
            }

            .about-content h2{
                font-size:34px;
            }

            .about-content p{
                font-size:16px;
            }

            .about-buttons{
                flex-direction:column;
            }

            .about-primary-btn,
            .about-secondary-btn{
                width:100%;
                text-align:center;
            }
        }

        .about-img{
        border-radius:20px;
        box-shadow:0 20px 40px rgba(0,0,0,0.15);
        transition:0.4s;
            }

        .about-img:hover{
            transform:scale(1.02);
        }
        .feature-box{
            background:#f8f9fa;
            padding:20px;
            border-radius:15px;
            margin-top:15px;
            border-left:4px solid #0d6efd;
        }

        .feature-box p{
            margin-bottom:12px;
            font-weight:500;
        }
        /* FLOATING FEATURES */
        .features-floating {
            margin-top: -70px;
            position: relative;
            z-index: 5;
        }

        .feature-box {
            background: white;
            border-radius: 20px;
            padding: 30px;
        }

        .feature-item {
            display: flex;
            gap: 15px;
            align-items: flex-start;
            padding: 15px;
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .feature-item:hover {
            transform: translateY(-8px);
            background: #f8f9fa;
        }

        .feature-icon {
            font-size: 32px;
        }

        .feature-item h5 {
            font-weight: 700;
            margin-bottom: 8px;
        }

        .feature-item p {
            margin-bottom: 0;
            color: #6c757d;
        }

        /* STATS */
        .stats-card {
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .stats-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
        }

        /* SERVICES SECTION */

        .section-tag{
            display:inline-block;
            background:#eaf2ff;
            color:#0d6efd;
            padding:8px 18px;
            border-radius:50px;
            font-size:14px;
            font-weight:700;
            margin-bottom:15px;
        }

        .services-title{
            font-size:55px;
            font-weight:800;
            color:#111827;
            line-height: 1.1;
            margin-bottom:20px;
        }

        .services-subtitle{
            max-width:650px;
            margin:0 auto;
            color:#6c757d;
            font-size:17px;
            line-height:1.7;
        }

        .services-section h2{
            font-size:42px;
            font-weight:800;
            color:#111827;
            margin-bottom:20px;
        }

        .service-card{
            background:white;
            padding:35px 25px;
            border-radius:22px;
            text-align:center;
            height:100%;
            box-shadow:0 10px 30px rgba(0,0,0,0.07);
            transition:0.3s ease;
        }

        .service-card:hover{
            transform:translateY(-10px);
            box-shadow:0 18px 40px rgba(0,0,0,0.12);
        }

        .service-card .service-icon{
            width:70px;
            height:70px;
            margin:0 auto 20px;
            border-radius:20px;
            background:#eef5ff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:32px;
        }

        .service-card h4{
            font-size:20px;
            font-weight:700;
            margin-bottom:12px;
            color:#111827;
        }

        .service-card p{
            font-size:15px;
            color:#6c757d;
            line-height:1.6;
            margin-bottom:0;
        }

        .section-header{
            max-width: 750px;
            margin: 0 auto 55px;
            padding: 0 20px;
        }

        .section-tag{
            display:inline-block;
            background:#eaf2ff;
            color:#0d6efd;
            padding:7px 17px;
            border-radius:50px;
            font-size:14px;
            font-weight:700;
            margin-bottom:12px;
        }

        .section-header h2{
            font-size:42px;
            font-weight:800;
            color:#111827;
            margin-bottom:12px;
            line-height:1.2;
        }

        .section-header p{
            color:#6c757d;
            font-size:17px;
            line-height:1.6;
            margin-bottom:0;
        }

        .services-section{
            padding:80px 0;
            background:
                linear-gradient(rgba(248,250,252,.60), rgba(248,250,252,.60)),
                url('/images/medical3.jpg');
            background-size:cover;
            background-position:center;
        }

        @media(max-width:768px){
            .departments-section {
                padding-top: 35px;
            }

            .section-header{
                margin-bottom:25px;
            }

            .section-header h2{
                font-size:30px;
                line-height:1.25;
            }

            .section-header p{
                font-size:15px;
            }

            .section-tag{
                font-size:12px;
                padding:6px 14px;
            }
        }

        /* DEPARTMENTS SECTION */
        .departments-section {
            width: 100%;
            margin: 0;
            padding: 120px 0 0;
            overflow: hidden;
            background: #fff;
        }

        .department-image {
            background: url('/images/department.jpg') center center / cover no-repeat;
            min-height: 432px;
            padding: 0 !important;
            margin: 0 !important;
        }

        .department-card {
            min-height: 216px;
            padding: 45px 30px;
            text-align: center;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            background: white;
        }

        .department-card:hover {
            background: #f8fbff;
            transform: translateY(-5px);
        }

        .department-icon {
            font-size: 38px;
            margin-bottom: 18px;
        }

        .department-card h4 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .department-card p {
            color: #6c757d;
            font-size: 16px;
            margin-bottom: 0;
        }

        /* TESTIMONIALS */
        .testimonials-section {
            background: #f8f9fa;
        }

        .testimonial-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            text-align: center;
            height: 100%;
            transition: 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .testimonial-avatar {
            width: 70px !important;
            height: 70px !important;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #0d6efd;
        }

        .stars {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .testimonial-card h5 {
            margin-top: 15px;
            font-weight: 700;
        }

        .carousel-indicators{
            margin-top:40px !important;
        }

        .carousel-indicators button{
            width:12px !important;
            height:12px !important;
            border-radius:50%;
            background-color:#0d6efd !important;
            opacity:.4;
            margin:0 6px !important;
        }

        .carousel-indicators .active{
            opacity:1;
            transform:scale(1.2);
        }

        .stats-cta-section{
            padding:60px 0;
            background:#f8fafc;
        }

        .stats-cta-section{
            margin-top:-40px;
            padding:25px 0 60px;
        }

        /* Stats */

        .stats-row{
            margin-bottom:60px;
        }

        .stats-row h2{
            font-size:42px;
            font-weight:800;
            color:#0d6efd;
            margin-bottom:8px;
        }

        .stats-row p{
            color:#6c757d;
            font-size:15px;
            margin:0;
        }

        .stat-card{
            background:#fff;
            border-radius:20px;
            padding:25px;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
        }

        .stat-card{
            background:#fff;
            padding:25px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.06);
            transition:.3s ease;
        }

        .stat-card:hover{
            transform:translateY(-5px);
            box-shadow:0 20px 40px rgba(0,0,0,.10);
        }

        .stat-card h2{
            font-size:48px;
            font-weight:800;
            color:#0d6efd;
            margin-bottom:10px;
        }

        .stat-card p{
            margin:0;
            color:#6c757d;
            font-weight:600;
        }

        /* CTA */

        .cta-box{
            background:
                linear-gradient(
                    rgba(13,110,253,.50),
                    rgba(13,110,253,.50)
                ),
                url('/images/cta-bg1.jpg');

            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;

            min-height: 360px;
            padding: 40px 40px;

            border-radius: 30px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0,0,0,.15);

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .cta-box{
            max-width:900px;
            margin:40px auto 0;
            position:relative;
            min-height:300px;
            border-radius:24px;
            overflow:hidden;
            box-shadow:0 20px 50px rgba(0,0,0,.15);
        }

        .cta-bg-img{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            object-fit:cover;
            object-position:center;
        }

        .cta-box::after{
            content:"";
            position:absolute;
            inset:0;
            background:rgba(13,110,253,.45);
        }

        .cta-content{
            position:relative;
            z-index:2;
            min-height:360px;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            text-align:center;
            padding:50px 25px;
        }

        .cta-content h2{
            color:white;
            font-size:52px;
            font-weight:800;
            margin-bottom:20px;
        }

        .cta-content p{
            color:white;
            font-size:20px;
            max-width:700px;
            margin:0 auto 30px;
        }


        .hero-cta-btn{
            display:inline-flex;
            align-items:center;
            gap:10px;

            background:#ffffff;
            color:#0d6efd;

            padding:16px 34px;
            border-radius:50px;

            font-size:18px;
            font-weight:700;
            text-decoration:none;

            box-shadow:0 15px 35px rgba(0,0,0,.18);

            transition:all .3s ease;
        }

        .hero-cta-btn:hover{
            background:#0d6efd;
            color:#fff;

            transform:translateY(-4px);

            box-shadow:0 20px 45px rgba(13,110,253,.35);
        }

        .hero-cta-btn span{
            font-size:20px;
        }

        .cta-box{
            padding: 50px 25px;
        }

        .cta-box h2{
                font-size: 32px;
        }

        .cta-box p{
                font-size: 16px;
        }

        .cta-box{
                padding:50px 25px;
            }

            .cta-box h2{
                font-size:34px;
            }

            .cta-box p{
                font-size:16px;
            }

        .workflow-section{
            background:#f8fafc;
        }

        .workflow-card{
            background:#fff;
            border-radius:18px;
            padding:25px 15px;
            height:100%;
            box-shadow:0 10px 30px rgba(0,0,0,.06);
            transition:.3s ease;
        }

        .workflow-card{
            background:#fff;
            border-radius:18px;
            padding:25px 15px;
            min-height:190px;
            box-shadow:0 10px 30px rgba(0,0,0,.06);
        }

        .workflow-card{
            transition:.3s ease;
        }

        .workflow-card:hover{
            transform:translateY(-6px);
            box-shadow:0 18px 40px rgba(0,0,0,.10);
        }

        .workflow-icon{
            width:58px;
            height:58px;
            border-radius:50%;
            background:#eef5ff;
            color:#0d6efd;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:28px;
            margin:0 auto 15px;
        }

        .workflow-card h5{
            font-weight:800;
            margin-bottom:8px;
        }

        .workflow-card p{
            color:#6c757d;
            font-size:14px;
            margin:0;
        }

        .workflow-section{
            padding:70px 0;
            background:#f8fafc !important;
            color:#111827 !important;
        }

        .workflow-section h2{
            color:#111827 !important;
        }

        .workflow-section p{
            color:#6c757d !important;
        }


        .workflow-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 40px rgba(13,110,253,.15);
        }
        /* Mobile */

        @media(max-width:768px){

            .stats-row{
                row-gap:30px;
            }

            .stats-row h2{
                font-size:30px;
            }
        }
        /* FAQ SECTION */
        .faq-section{
            background:#f8f9fa;
            padding:40px 0 60px;
            margin-top:0;
        }

        .faq-section h2{
            font-size:48px;
            font-weight:800;
        }

        .accordion-item{
            border:none;
            margin-bottom:15px;
            border-radius:15px !important;
            overflow:hidden;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        .accordion-button{
            font-weight:700;
            padding:20px;
        }

        .accordion-button:not(.collapsed){
            background:#0f1f2f;
            color:white;
        }

        .accordion-button:focus{
            box-shadow:none;
        }

        .accordion-item{
            transition:.3s ease;
        }

        .accordion-item:hover{
            transform:translateY(-2px);
            box-shadow:0 8px 25px rgba(0,0,0,.08);
        }

        .faq-section{
            padding-top:70px !important;
        }

        /* CONTACT SECTION */
        .contact-section{
            padding:90px 0;
            background:linear-gradient(135deg, #f8fbff 0%, #eef6ff 50%, #f5f9ff 100%) !important;
            border-bottom:1px solid rgba(13,110,253,.08);
        }

        .contact-section{
            border-top:1px solid rgba(13,110,253,.08);
        }

        .section-title{
            font-size:48px;
            font-weight:800;
            line-height:1.2;
            color:#111827;
            margin-bottom:15px;
        }

        .contact-card{
            background:#ffffff;
            padding:35px;
            border-radius:24px;
            border:1px solid rgba(13,110,253,.08);
            box-shadow:0 18px 45px rgba(13,110,253,.10);
            height:100%;
            transition:.3s ease;
        }

        .contact-card:hover{
            transform:translateY(-4px);
            box-shadow:0 25px 60px rgba(13,110,253,.16);
        }

        .contact-item{
            display:flex;
            gap:15px;
            margin-top:25px;
            align-items:flex-start;
        }

        .contact-item span{
            width:46px;
            height:46px;
            background:#eef5ff;
            color:#0d6efd;
            border-radius:14px;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:22px;
        }

        .contact-item p{
            margin-bottom:0;
            color:#6c757d;
        }

        .contact-card input,
        .contact-card textarea{
            border-radius:14px;
            padding:14px;
            border:1px solid #dce7f5;
        }

        .contact-card textarea{
            min-height:140px;
        }

        .contact-card h4{
            font-weight:800;
            margin-bottom:25px;
        }

        .contact-card .btn-primary{
            border:none;
            border-radius:50px;
            padding:14px 32px;
            font-weight:700;
            background:linear-gradient(135deg, #0d6efd, #3b82f6);
            box-shadow:0 10px 25px rgba(13,110,253,.25);
        }

        .contact-bg-fix{
            background:linear-gradient(135deg, #dff0ff 0%, #f8fbff 45%, #eaf4ff 100%) !important;
        }



        @media(max-width:768px){
            .section-title{
                font-size:34px;
            }
        }

        /* FOOTER */
        footer{
            background:linear-gradient(135deg, #061827, #0b2742);
            padding:45px 0 20px;
            color:white;
        }

        .footer-card{
            background:rgba(255,255,255,.10);
            border:1px solid rgba(255,255,255,.18);

            border-radius:18px;

            padding:18px;

            backdrop-filter:blur(18px);

            box-shadow:0 12px 25px rgba(0,0,0,.12);
        }

        .footer-card p,
        .footer-card a,
        .footer-card li{
            color:rgba(255,255,255,.85) !important;
        }

        .footer-card h4,
        .footer-card h5{
            margin-bottom:12px;
            font-size:22px;
        }

        .footer-bottom{
            text-align:center;
            color:rgba(255,255,255,.75);
            margin-top:15px;
            padding-top:12px;
            border-top:1px solid rgba(255,255,255,.15);
        }

        /* MOBILE RESPONSIVE */
        @media (max-width: 768px) {
            .hero {
                min-height: auto;
                padding: 70px 0 60px;
                background:
                    linear-gradient(
                        180deg,
                        rgba(15, 31, 47, 0.55),
                        rgba(15, 31, 47, 0.45)
                    ),
                    url('/images/hero9.jpg');
                background-size: cover;
                background-position: center top;
                background-repeat: no-repeat;
            }

            .hero-content {
                padding-left: 25px !important;
                padding-right: 25px !important;
                padding-top: 0 !important;
                display: block;
                text-align: left;
            }

            .hero-badge {
                display: inline-block !important;
                width: auto !important;
                max-width: 260px !important;
                font-size: 13px;
                line-height: 1.5;
                padding: 10px 14px !important;
                margin-bottom: 20px;
            }

            .hero-title {
                font-size: 38px !important;
                line-height: 1.15;
            }

            .hero-text {
                font-size: 15px;
                line-height: 1.7;
                max-width: 100%;
            }

            .btn-book {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
                padding: 13px 20px;
            }

            .features-floating {
                margin-top: 0;
                padding: 30px 15px 0;
            }

            .feature-box {
                padding: 20px;
            }

            .feature-item {
                display: block;
                text-align: center;
            }

            .services-left {
                padding: 50px 25px;
                min-height: auto;
            }

            .services-title {
                font-size: 42px;
            }

            .service-item {
                flex-direction: column;
            }

            .service-item h4 {
                font-size: 24px;
            }

            .service-item p {
                font-size: 16px;
            }

            .consultation-box {
                padding: 50px 25px;
                min-height: auto;
            }

            .department-image {
                min-height: 300px;
            }

            .department-card {
                min-height: auto;
                padding: 35px 20px;
            }

            .testimonial-card {
                margin-bottom: 20px;
            }
        }

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark py-3 smart-glass-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/">
            <img src="{{ asset('images/logo.png') }}"
                alt="SmartClinic Logo"
                width="40">

            <span>SmartClinic</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#smartClinicNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="smartClinicNavbar">
            <ul class="navbar-nav ms-auto gap-2 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/book-appointment">Book Appointment</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/check-status">Check Status</a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Admin Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link text-white">
                            {{ Auth::user()->name }}
                        </span>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

            <!-- <li class="nav-item">
                        <a class="btn btn-primary btn-sm mt-1" href="/register">
                            Register Admin
                        </a>
                    </li> -->
                @endauth
            </ul>
        </div>
    </div>
</nav>

@yield('content')

@isset($slot)
    {{ $slot }}
@endisset

@if(
    !request()->is('dashboard') &&
    !request()->is('appointments*') &&
    !request()->is('approve/*') &&
    !request()->is('complete/*') &&
    !request()->is('reject/*') &&
    !request()->is('reschedule/*') &&
    !request()->is('admin/messages*') &&
    !request()->is('profile')
)

<footer class="site-footer">
    <div class="container">
        <div class="row gy-4">

            <div class="col-md-4">
                <div class="footer-card">
                    <h4>SmartClinic</h4>
                    <p>Modern healthcare appointment management platform.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-card">
                    <h5>Quick Links</h5>
                    <p><a href="/">Home</a></p>
                    <p><a href="/book-appointment">Book Appointment</a></p>
                    <p><a href="/check-status">Check Status</a></p>
                    <p><a href="#contact">Contact</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card">
                    <h5>Contact</h5>
                    <p>📍 Ilorin, Kwara State, Nigeria</p>
                    <p>📞 +234 800 000 0000</p>
                    <p>📧 support@smartclinic.com</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <small>© 2026 SmartClinic. All Rights Reserved.</small>
        </div>
    </div>
</footer>

@endif
<script>
    document.addEventListener('click', function (event) {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const navbarToggler = document.querySelector('.navbar-toggler');

        if (!navbarCollapse || !navbarToggler) return;

        const isOpen = navbarCollapse.classList.contains('show');
        const clickedInsideMenu = navbarCollapse.contains(event.target);
        const clickedToggler = navbarToggler.contains(event.target);

        if (isOpen && !clickedInsideMenu && !clickedToggler) {
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse)
                || new bootstrap.Collapse(navbarCollapse, { toggle: false });

            bsCollapse.hide();
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>