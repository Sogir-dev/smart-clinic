@extends('layouts.app')

@section('title', 'SmartClinic | Home')

@section('content')

<section class="hero">
    <div class="hero-content">
        <div class="row align-items-center min-vh-100">

            <div class="col-lg-6 text-white hero-content">

                <div class="hero-badge">
                    Smart Healthcare Appointment Platform
                </div>

                <h1 class="hero-title">
                    Book Clinic <br>
                    Appointments <br>
                    Faster & Smarter
                </h1>

                <p class="hero-text mt-4">
                    SmartClinic helps patients book appointments online, receive instant booking codes, track appointment status, and get timely email updates while clinic administrators manage schedules with ease.
                </p>

                <div class="mt-4 d-flex flex-wrap gap-3">
                    <a href="/book-appointment" class="btn btn-primary btn-book">
                        Book an Appointment
                    </a>

                    <a href="/check-status" class="btn btn-outline-light btn-book">
                        Check Appointment Status
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="features-floating">
    <div class="container">
        <div class="row g-4 feature-box shadow-lg">

            <div class="col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">📅</div>
                    <div>
                        <h5>Easy Booking</h5>
                        <p>Book appointments online in just a few clicks.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">🛡️</div>
                    <div>
                        <h5>Secure & Reliable</h5>
                        <p>Your appointment data is safely managed.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">📧</div>
                    <div>
                        <h5>Email Notifications</h5>
                        <p>Receive updates for every appointment.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="feature-item">
                    <div class="feature-icon">📊</div>
                    <div>
                        <h5>Track Appointments</h5>
                        <p>Check appointment status using booking code.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="about-image-box">
                    <img src="/images/docopen.jpg" class="about-img" alt="About SmartClinic">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">

                    <span class="about-label">About SmartClinic</span>

                    <h2>
                        Healthcare <br>
                        Scheduling Made Modern
                    </h2>

                    <p>
                        SmartClinic is a digital healthcare platform designed to
                        simplify appointment scheduling for patients and clinic
                        administrators. Patients can book appointments online,
                        receive instant booking confirmations, track appointment
                        status, and stay informed through automated notifications.
                    </p>

                    <a class="btn about-primary-btn"
                        data-bs-toggle="collapse"
                        href="#smartclinicFeatures">
                        Explore Features
                    </a>

                    <div class="collapse mt-4" id="smartclinicFeatures">
                        <div class="feature-box">

                            <p>✓ Online Appointment Scheduling</p>
                            <p>✓ Instant Booking Confirmation</p>
                            <p>✓ Real-Time Appointment Tracking</p>
                            <p>✓ Automated Email Notifications</p>
                            <p>✓ Multi-Department Support</p>
                            <p>✓ Secure Patient Information</p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="services-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-tag">What We Offer</span>
            <h2 class="section-title">
                SmartClinic Features
            </h2>
            <p>Everything patients and clinic administrators need to manage appointments efficiently.</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">📅</div>
                    <h4>Online Booking</h4>
                    <p>Book clinic appointments online anytime from any device.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h4>Secure Access</h4>
                    <p>Protected admin login and secure appointment handling.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">🔑</div>
                    <h4>Booking Code</h4>
                    <p>Every appointment receives a unique tracking code.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">🔍</div>
                    <h4>Status Tracking</h4>
                    <p>Check appointment progress using your booking code.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">📧</div>
                    <h4>Email Updates</h4>
                    <p>Receive instant notifications about appointment changes.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">✅</div>
                    <h4>Admin Approval</h4>
                    <p>Appointments are reviewed and approved by administrators.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">🔄</div>
                    <h4>Rescheduling</h4>
                    <p>Move appointments to a more convenient date and time.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">👥</div>
                    <h4>Patient Management</h4>
                    <p>Clinic staff can manage patient appointment records.</p>
                </div>
            </div>

        </div>

    </div>
</section>



<section class="departments-section py-5">
    <div class="container-fluid p-0">

        <div class="section-header text-center">
            <span class="section-tag">Departments</span>
            <h2>Specialized Medical Care</h2>
            <p>
                Access professional healthcare services across multiple medical departments.
            </p>
        </div>

        <div class="row g-0">

            <div class="col-lg-4 p-0 department-image"></div>

            <div class="col-lg-8">
                <div class="row g-0 m-0">

                    <div class="col-md-4 department-card">
                        <div class="department-icon">🩺</div>
                        <h4>General Consultation</h4>
                        <p>Basic medical consultation and patient care.</p>
                    </div>

                    <div class="col-md-4 department-card">
                        <div class="department-icon">🦷</div>
                        <h4>Dental Care</h4>
                        <p>Dental checkups, treatment, and oral care.</p>
                    </div>

                    <div class="col-md-4 department-card">
                        <div class="department-icon">👁️</div>
                        <h4>Eye Clinic</h4>
                        <p>Eye examination and vision support.</p>
                    </div>

                    <div class="col-md-4 department-card">
                        <div class="department-icon">🧪</div>
                        <h4>Laboratory</h4>
                        <p>Medical tests and laboratory services.</p>
                    </div>

                    <div class="col-md-4 department-card">
                        <div class="department-icon">💊</div>
                        <h4>Pharmacy</h4>
                        <p>Medication support and prescription services.</p>
                    </div>

                    <div class="col-md-4 department-card">
                        <div class="department-icon">❤️</div>
                        <h4>Cardiology</h4>
                        <p>Heart health checks and cardiac support.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="testimonials-section py-5">
    <div class="container">

        <div class="section-header text-center">
            <span class="section-tag">Testimonials</span>
            <h2>Why SmartClinic?</h2>
            <p>Trusted by patients for fast and reliable healthcare appointments.</p>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <img src="/images/patient1.jpg" class="testimonial-avatar" alt="Patient">
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                                <p>Booking an appointment was quick and stress-free. The platform is simple and easy to use.</p>
                                <h5>Fatima Usman</h5>
                                <small>Patient</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <img src="/images/patient2.jpg" class="testimonial-avatar" alt="Patient">
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                                <p>I received email updates instantly and could track my appointment without visiting the clinic.</p>
                                <h5>Omoboriowo Salma</h5>
                                <small>Patient</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <img src="/images/patient3.jpg" class="testimonial-avatar" alt="Patient">
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                                <p>SmartClinic has made healthcare appointments much easier and more organized.</p>
                                <h5>Nmeribe Oluchi</h5>
                                <small>Patient</small>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <img src="/images/patient4.jpg" class="testimonial-avatar" alt="Patient">
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                                <p>The booking code helped me confirm my appointment status without calling the clinic.</p>
                                <h5>Aisha Bello</h5>
                                <small>Patient</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <img src="/images/patient5.jpg" class="testimonial-avatar" alt="Patient">
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                                <p>The process was smooth, fast, and convenient. I love how simple SmartClinic is.</p>
                                <h5>Daniel Okafor</h5>
                                <small>Patient</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <img src="/images/patient6.jpg" class="testimonial-avatar" alt="Patient">
                                <div class="stars">⭐⭐⭐⭐⭐</div>
                                <p>I got notified when my appointment was approved. That made everything easier.</p>
                                <h5>Maryam Yusuf</h5>
                                <small>Patient</small>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="carousel-indicators position-relative mt-4">

                <button type="button"
                    data-bs-target="#testimonialCarousel"
                    data-bs-slide-to="0"
                    class="active">
                </button>

                <button type="button"
                    data-bs-target="#testimonialCarousel"
                    data-bs-slide-to="1">
                </button>

            </div>

        </div>

    </div>
</section>

<section class="stats-cta-section">

    <div class="container">
        <div class="section-header text-center mb-5">
    <span class="section-tag">Get Started</span>

    <h2>Book Healthcare Appointments With Confidence</h2>

    <p>
        Join hundreds of patients using SmartClinic to book appointments,
        track visits and receive instant healthcare updates.
    </p>
</div>

        <!-- Stats -->
        <div class="row text-center g-4">

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>10+</h2>
                    <p>Core Features</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>4</h2>
                    <p>Staff Roles</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>6</h2>
                    <p>Departments</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-card">
                    <h2>100%</h2>
                    <p>Digital Workflow</p>
                </div>
            </div>

        </div>
        <div class="cta-box">

            <img src="/images/cta-bg1.jpg" class="cta-bg-img" alt="Clinic Background">

            <div class="cta-content">
                <h2>Ready To Book Your Appointment?</h2>

                <p>
                    Skip long queues and schedule your clinic visit online in minutes.
                    Fast, secure and convenient healthcare booking.
                </p>

                <a href="/book-appointment" class="hero-cta-btn">
                    📅 Book Appointment Now →
                </a>
            </div>

        </div>
    </div>

</section>

<section class="workflow-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-tag">Workflow</span>
            <h2 class="section-title">How SmartClinic Works</h2>
            <p class="text-muted">
                From online booking to doctor consultation, billing, receipt generation and department routing.
            </p>
        </div>

        <div class="row g-4 text-center">

            <div class="col-lg-2 col-md-4 col-6">
                <div class="workflow-card">
                    <div class="workflow-icon">📅</div>
                    <h5>Book</h5>
                    <p>Patient books appointment online.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="workflow-card">
                    <div class="workflow-icon">👨‍⚕️</div>
                    <h5>Consult</h5>
                    <p>Doctor attends to the patient.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="workflow-card">
                    <div class="workflow-icon">💊</div>
                    <h5>Prescribe</h5>
                    <p>Doctor adds notes and prescription.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="workflow-card">
                    <div class="workflow-icon">💳</div>
                    <h5>Billing</h5>
                    <p>Front desk records payment.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="workflow-card">
                    <div class="workflow-icon">🧾</div>
                    <h5>Receipt</h5>
                    <p>Thermal receipt is generated.</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="workflow-card">
                    <div class="workflow-icon">➡️</div>
                    <h5>Route</h5>
                    <p>Patient is directed to next department.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-tag">FAQ</span>
            <h2>Everything You Need To Know</h2>
            <p class="text-muted">
                Find answers to common questions about booking appointments, tracking status and managing your healthcare visits.
            </p>
        </div>

        <div class="accordion" id="faqAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">
                        📅 How do I book an appointment?
                    </button>
                </h2>

                <div id="faq1"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Click the Book Appointment button and complete the booking form.
                    </div>

                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">

                        🔍 How do I check my appointment status?
                    </button>
                </h2>

                <div id="faq2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Use your booking code on the Check Status page.
                    </div>

                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3">

                        📧 Will I receive email updates?
                    </button>
                </h2>

                <div id="faq3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Yes. SmartClinic sends email notifications for approvals,
                        updates and appointment changes.
                    </div>

                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq4">

                        🔄 Can I cancel or reschedule my appointment?
                    </button>
                </h2>

                <div id="faq4"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">
                        Yes. Contact the clinic administrator for assistance.
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<!-- CONTACT SECTION -->
<section class="contact-section contact-bg-fix py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-tag">Contact</span>
            <h2 class="section-title">Get In Touch With Us</h2>
            <p>Have questions or need assistance? Our team is ready to help.</p>
        </div>

        <div class="row g-4">

            <!-- Contact Info -->
            <div class="col-lg-5">

                <div class="contact-card">
                    <h4>Get In Touch</h4>

                    <div class="contact-item">
                        <span>📍</span>
                        <div>
                            <strong>Address</strong>
                            <p>Ilorin, Kwara State, Nigeria</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span>📞</span>
                        <div>
                            <strong>Phone</strong>
                            <p>+234 902 767 6273</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span>📧</span>
                        <div>
                            <strong>Email</strong>
                            <p>support@smartclinic.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <span>🕒</span>
                        <div>
                            <strong>Working Hours</strong>
                            <p>Mon - Sat: 8:00 AM - 6:00 PM</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Contact Form -->
             <div class="col-lg-7">
                <div class="contact-card">

                    @if(session('success'))
                        <div class="alert alert-success mb-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <input type="text"
                            name="full_name"
                            class="form-control mb-3"
                            placeholder="Your Name">

                        <input type="email"
                            name="email"
                            class="form-control mb-3"
                            placeholder="Your Email">

                        <input type="text"
                            name="subject"
                            class="form-control mb-3"
                            placeholder="Subject">

                        <textarea name="message"
                                class="form-control mb-3"
                                rows="5"
                                placeholder="Your Message"></textarea>

                        <button type="submit" class="btn btn-primary">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection