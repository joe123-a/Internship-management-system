<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Hero Section with Slider -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/new1.jpg" class="d-block w-100" alt="Students in internship" style="height: 600px; object-fit: cover; filter: brightness(0.7);">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 fw-bold">Launch Your Career</h1>
                <p class="lead">Find the perfect internship to kickstart your professional journey</p>
                <div class="mt-4">
                    <a href="register.php" class="btn btn-primary btn-lg px-4 me-2">Get Started</a>
                    <a href="#features" class="btn btn-outline-light btn-lg px-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/new2.jpg" class="d-block w-100" alt="Office environment" style="height: 600px; object-fit: cover; filter: brightness(0.7);">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 fw-bold">Track Your Applications</h1>
                <p class="lead">Manage all your internship applications in one place</p>
                <div class="mt-4">
                    <a href="register.php" class="btn btn-primary btn-lg px-4 me-2">Sign Up Now</a>
                    <a href="#how-it-works" class="btn btn-outline-light btn-lg px-4">How It Works</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/images/new3.jpg" class="d-block w-100" alt="Student success" style="height: 600px; object-fit: cover; filter: brightness(0.7);">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="display-4 fw-bold">Land Your Dream Role</h1>
                <p class="lead">Join thousands of students who found their perfect internship with us</p>
                <div class="mt-4">
                    <a href="login.php" class="btn btn-primary btn-lg px-4 me-2">Login</a>
                    <a href="#success-stories" class="btn btn-outline-light btn-lg px-4">Success Stories</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Stats Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="d-inline-block p-4 bg-primary rounded-circle text-white mb-3">
                    <i class="fas fa-briefcase fa-3x"></i>
                </div>
                <h2 class="fw-bold">5,000+</h2>
                <p class="text-muted">Internships Available</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="d-inline-block p-4 bg-success rounded-circle text-white mb-3">
                    <i class="fas fa-building fa-3x"></i>
                </div>
                <h2 class="fw-bold">1,200+</h2>
                <p class="text-muted">Partner Companies</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="d-inline-block p-4 bg-warning rounded-circle text-white mb-3">
                    <i class="fas fa-user-graduate fa-3x"></i>
                </div>
                <h2 class="fw-bold">10,000+</h2>
                <p class="text-muted">Students Placed</p>
            </div>
            <div class="col-md-3">
                <div class="d-inline-block p-4 bg-info rounded-circle text-white mb-3">
                    <i class="fas fa-university fa-3x"></i>
                </div>
                <h2 class="fw-bold">250+</h2>
                <p class="text-muted">Partner Universities</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Why Choose Our Platform?</h2>
            <p class="lead text-muted">Everything you need to find and secure your dream internship</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-search fa-2x text-primary"></i>
                        </div>
                        <h4 class="card-title">Smart Matching</h4>
                        <p class="card-text">Our AI-powered system matches you with internships that fit your skills and career goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-tasks fa-2x text-success"></i>
                        </div>
                        <h4 class="card-title">Application Tracking</h4>
                        <p class="card-text">Keep track of all your applications, interviews, and offers in one organized dashboard.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-warning bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-bell fa-2x text-warning"></i>
                        </div>
                        <h4 class="card-title">Real-time Alerts</h4>
                        <p class="card-text">Get notified about new opportunities, application deadlines, and interview schedules.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">How It Works</h2>
            <p class="lead text-muted">Three simple steps to your dream internship</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <img src="assets/images/profile.webp" alt="Create Profile" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                        <span class="fw-bold">1</span>
                    </div>
                    <h3 class="mb-0">Create Your Profile</h3>
                </div>
                <p class="lead">Sign up and build your profile with your education, skills, and experience. Upload your resume and set your preferences.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Showcase your skills and experience</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Upload your resume and portfolio</li>
                    <li><i class="fas fa-check-circle text-primary me-2"></i> Set your preferences and interests</li>
                </ul>
            </div>
        </div>
        
        <hr class="my-5">
        
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="assets/images/aplly.jpg" alt="Browse and Apply" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-success text-white rounded-circle p-3 me-3">
                        <span class="fw-bold">2</span>
                    </div>
                    <h3 class="mb-0">Browse and Apply</h3>
                </div>
                <p class="lead">Explore thousands of internship opportunities from top companies. Apply with just a few clicks.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Filter by industry, location, and duration</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> View detailed company profiles</li>
                    <li><i class="fas fa-check-circle text-success me-2"></i> One-click applications with your profile</li>
                </ul>
            </div>
        </div>
        
        <hr class="my-5">
        
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <img src="assets/images/track.avif" alt="Track and Succeed" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-warning text-white rounded-circle p-3 me-3">
                        <span class="fw-bold">3</span>
                    </div>
                    <h3 class="mb-0">Track and Succeed</h3>
                </div>
                <p class="lead">Monitor your applications, prepare for interviews, and land your dream internship.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Track application status in real-time</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-warning me-2"></i> Get interview preparation resources</li>
                    <li><i class="fas fa-check-circle text-warning me-2"></i> Receive and compare offers</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Featured Internships Slider -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Featured Internships</h2>
            <p class="lead text-muted">Top opportunities from leading companies</p>
        </div>
        
        <div id="internshipCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets/images/frontend.jpg" alt="TechCorp" class="rounded-circle me-3" width="60" height="60">
                                        <div>
                                            <h5 class="card-title mb-0">Frontend Developer Intern</h5>
                                            <p class="text-muted mb-0">TechCorp</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="badge bg-primary me-1">Remote</span>
                                        <span class="badge bg-secondary me-1">3 Months</span>
                                        <span class="badge bg-info">Paid</span>
                                    </div>
                                    <p class="card-text">Join our team to develop cutting-edge web applications using modern frameworks and technologies.</p>
                                    <a href="internship-details.php?id=1" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets/images/ui.webp" alt="DesignHub" class="rounded-circle me-3" width="60" height="60">
                                        <div>
                                            <h5 class="card-title mb-0">UX Design Intern</h5>
                                            <p class="text-muted mb-0">DesignHub</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="badge bg-warning me-1">Hybrid</span>
                                        <span class="badge bg-secondary me-1">6 Months</span>
                                        <span class="badge bg-info">Paid</span>
                                    </div>
                                    <p class="card-text">Work with our design team to create intuitive and engaging user experiences for our products.</p>
                                    <a href="internship-details.php?id=2" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets/images/Data.jpg" alt="DataWorks" class="rounded-circle me-3" width="60" height="60">
                                        <div>
                                            <h5 class="card-title mb-0">Data Science Intern</h5>
                                            <p class="text-muted mb-0">DataWorks</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="badge bg-danger me-1">On-site</span>
                                        <span class="badge bg-secondary me-1">4 Months</span>
                                        <span class="badge bg-info">Paid</span>
                                    </div>
                                    <p class="card-text">Analyze large datasets and build machine learning models to solve real-world business problems.</p>
                                    <a href="internship-details.php?id=3" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets/images/market.png" alt="MarketBoost" class="rounded-circle me-3" width="60" height="60">
                                        <div>
                                            <h5 class="card-title mb-0">Marketing Intern</h5>
                                            <p class="text-muted mb-0">MarketBoost</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="badge bg-primary me-1">Remote</span>
                                        <span class="badge bg-secondary me-1">3 Months</span>
                                        <span class="badge bg-info">Paid</span>
                                    </div>
                                    <p class="card-text">Help develop and execute digital marketing campaigns for our diverse client portfolio.</p>
                                    <a href="internship-details.php?id=4" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets/images/financila.webp" alt="FinTech" class="rounded-circle me-3" width="60" height="60">
                                        <div>
                                            <h5 class="card-title mb-0">Financial Analyst Intern</h5>
                                            <p class="text-muted mb-0">FinTech Solutions</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="badge bg-danger me-1">On-site</span>
                                        <span class="badge bg-secondary me-1">6 Months</span>
                                        <span class="badge bg-info">Paid</span>
                                    </div>
                                    <p class="card-text">Gain hands-on experience in financial modeling, analysis, and investment research.</p>
                                    <a href="internship-details.php?id=5" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="assets/images/green.png" alt="GreenTech" class="rounded-circle me-3" width="60" height="60">
                                        <div>
                                            <h5 class="card-title mb-0">Sustainability Intern</h5>
                                            <p class="text-muted mb-0">GreenTech Innovations</p>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <span class="badge bg-warning me-1">Hybrid</span>
                                        <span class="badge bg-secondary me-1">4 Months</span>
                                        <span class="badge bg-info">Paid</span>
                                    </div>
                                    <p class="card-text">Work on projects focused on environmental sustainability and renewable energy solutions.</p>
                                    <a href="internship-details.php?id=6" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#internshipCarousel" data-bs-slide="prev" style="width: 5%;">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#internshipCarousel" data-bs-slide="next" style="width: 5%;">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="text-center mt-4">
            <a href="browse-internships.php" class="btn btn-primary btn-lg">Browse All Internships</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="success-stories" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Success Stories</h2>
            <p class="lead text-muted">Hear from students who found their dream internships</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-5 text-center">
                                    <img src="assets/images/student1.jpg" alt="Sarah Johnson" class="rounded-circle mb-4" width="100" height="100">
                                    <p class="lead mb-4">"This platform helped me land my dream internship at Google! The application tracking feature made it easy to stay organized, and the interview preparation resources were invaluable."</p>
                                    <div>
                                        <h5 class="mb-1">Sarah Johnson</h5>
                                        <p class="text-muted mb-0">Computer Science Student, Stanford University</p>
                                        <div class="mt-2">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-5 text-center">
                                    <img src="assets/images/student2.jpg" alt="Michael Chen" class="rounded-circle mb-4" width="100" height="100">
                                    <p class="lead mb-4">"I was struggling to find internships that matched my skills until I discovered this platform. The AI matching system connected me with opportunities I wouldn't have found otherwise!"</p>
                                    <div>
                                        <h5 class="mb-1">Michael Chen</h5>
                                        <p class="text-muted mb-0">Business Administration, NYU</p>
                                        <div class="mt-2">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-5 text-center">
                                    <img src="assets/images/student3.jpg" alt="Priya Patel" class="rounded-circle mb-4" width="100" height="100">
                                    <p class="lead mb-4">"The real-time notifications and application tracking features helped me stay on top of my internship search. I received three offers and found the perfect fit for my career goals!"</p>
                                    <div>
                                        <h5 class="mb-1">Priya Patel</h5>
                                        <p class="text-muted mb-0">Mechanical Engineering, MIT</p>
                                        <div class="mt-2">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="btn btn-sm mx-1 active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="btn btn-sm mx-1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="btn btn-sm mx-1" aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold">Ready to Start Your Journey?</h2>
                <p class="lead mb-0">Join thousands of students who found their perfect internship with our platform.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="register.php" class="btn btn-light btn-lg px-4 me-2">Sign Up Now</a>
                <a href="login.php" class="btn btn-outline-light btn-lg px-4">Login</a>
            </div>
        </div>
    </div>
</section>

<!-- Partner Companies -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Our Partner Companies</h2>
            <p class="lead text-muted">Join these leading organizations offering internships</p>
        </div>
        
        <div class="row align-items-center justify-content-center">
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <img src="assets/images/partner1.png" alt="Partner 1" class="img-fluid px-3">
            </div>
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <img src="assets/images/partner2.png" alt="Partner 2" class="img-fluid px-3">
            </div>
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <img src="assets/images/partner3.png" alt="Partner 3" class="img-fluid px-3">
            </div>
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <img src="assets/images/partner4.png" alt="Partner 4" class="img-fluid px-3">
            </div>
            <div class="col-6 col-md-2 mb-4 mb-md-0">
                <img src="assets/images/partner5.png" alt="Partner 5" class="img-fluid px-3">
            </div>
            <div class="col-6 col-md-2">
                <img src="assets/images/partner6.png" alt="Partner 6" class="img-fluid px-3">
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">Stay Updated</h2>
                <p class="lead text-muted mb-4">Get the latest internship opportunities delivered to your inbox</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form class="d-flex">
                            <input type="email" class="form-control form-control-lg me-2" placeholder="Your email address">
                            <button type="submit" class="btn btn-primary btn-lg">Subscribe</button>
                        </form>
                        <small class="text-muted mt-2">We respect your privacy. Unsubscribe at any time.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add required scripts -->
<script>
    // Initialize all carousels with custom settings
    document.addEventListener('DOMContentLoaded', function() {
        // Hero carousel - slower transition
        var heroCarousel = new bootstrap.Carousel(document.getElementById('heroCarousel'), {
            interval: 6000
        });
        
        // Testimonial carousel - slower transition
        var testimonialCarousel = new bootstrap.Carousel(document.getElementById('testimonialCarousel'), {
            interval: 8000
        });
        
        // Internship carousel - medium transition
        var internshipCarousel = new bootstrap.Carousel(document.getElementById('internshipCarousel'), {
            interval: 5000
        });
    });
</script>

<!-- Add Font Awesome for icons in the head section of your header.php file -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

<!-- Add Bootstrap JS at the end of your footer.php file -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

<?php 
include('includes/footer.php'); 
?>
