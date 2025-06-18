

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>USER FEEDBACK & SUGGESTION BOX</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: #333;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            /* Header */
            .header {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
                position: sticky;
                top: 0;
                z-index: 100;
            }

            .nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 0;
            }

            .logo {
                font-size: 2rem;
                font-weight: bold;
                color: #667eea;
                text-decoration: none;
            }

            .nav-links {
                display: flex;
                list-style: none;
                gap: 2rem;
            }

            .nav-links a {
                text-decoration: none;
                color: #333;
                font-weight: 500;
                transition: color 0.3s ease;
            }

            .nav-links a:hover {
                color: #667eea;
            }

            /* Hero Section */
            .hero {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                padding: 4rem 0;
                text-align: center;
                margin: 2rem 0;
                border-radius: 20px;
                color: white;
            }

            .hero h1 {
                font-size: 3.5rem;
                margin-bottom: 1rem;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }

            .hero p {
                font-size: 1.2rem;
                margin-bottom: 2rem;
                opacity: 0.9;
            }

            .cta-button {
                display: inline-block;
                background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
                color: white;
                padding: 1rem 2rem;
                text-decoration: none;
                border-radius: 50px;
                font-weight: bold;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
            }

            .cta-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(255, 107, 107, 0.6);
            }
            
            /* Services Section */
            .services {
                background: white;
                padding: 4rem 0;
                margin: 2rem 0;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .services h2 {
                text-align: center;
                font-size: 2.5rem;
                margin-bottom: 3rem;
                color: #333;
            }

            .service-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
            }

            .service-card {
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                padding: 2rem;
                border-radius: 15px;
                text-align: center;
                color: white;
                transition: transform 0.3s ease;
            }
            
            .service-card:hover {
                transform: translateY(-5px);
            }

            .service-icon {
                font-size: 3rem;
                margin-bottom: 1rem;
            }

            .service-card h3 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            /* Pricing Section */
            .pricing {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                padding: 4rem 0;
                margin: 2rem 0;
                border-radius: 20px;
            }

            .pricing h2 {
                text-align: center;
                font-size: 2.5rem;
                margin-bottom: 3rem;
                color: #333;
            }

            .pricing-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2rem;
            }

            .pricing-card {
                background: white;
                padding: 2rem;
                border-radius: 15px;
                text-align: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                border: 3px solid transparent;
            }

            .pricing-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
                border-color: #667eea;
            }
            
            .pricing-card.featured {
                border-color: #ff6b6b;
                transform: scale(1.05);
            }

            .price {
                font-size: 2.5rem;
                font-weight: bold;
                color: #667eea;
                margin-bottom: 1rem;
            }

            .price-list {
                list-style: none;
                margin: 1rem 0;
            }

            .price-list li {
                padding: 0.5rem 0;
                border-bottom: 1px solid #eee;
            }

            /* Simplified Feedback Section */
            .feedback-section {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                padding: 4rem 0;
                margin: 2rem 0;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .feedback-section h2 {
                text-align: center;
                font-size: 2.5rem;
                margin-bottom: 1rem;
                color: #333;
            }

            .feedback-subtitle {
                text-align: center;
                font-size: 1.2rem;
                color: #666;
                margin-bottom: 3rem;
                font-style: italic;
            }

            .feedback-container {
                max-width: 800px;
                margin: 0 auto;
            }

            .simple-feedback-form {
                background: white;
                padding: 3rem;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                border: 3px solid transparent;
                transition: all 0.3s ease;
                margin-bottom: 3rem;
            }
            
            .simple-feedback-form:hover {
                border-color: rgba(102, 126, 234, 0.3);
                transform: translateY(-2px);
            }

            .form-header {
                text-align: center;
                margin-bottom: 2.5rem;
                padding: 2rem;
                background: linear-gradient(135deg, #667eea, #764ba2);
                border-radius: 15px;
                color: white;
            }

            .form-header h3 {
                font-size: 2rem;
                margin-bottom: 0.5rem;
            }

            .form-header p {
                opacity: 0.9;
                font-size: 1.1rem;
            }

            /* Simplified Form Groups */
            .simple-form-group {
                margin-bottom: 2rem;
            }
            
            .simple-form-group label {
                display: block;
                margin-bottom: 0.8rem;
                font-weight: 600;
                color: #333;
                font-size: 1.1rem;
            }

            .simple-form-group input,
            .simple-form-group select,
            .simple-form-group textarea {
                width: 100%;
                padding: 1.5rem;
                border: 2px solid #e1e5e9;
                border-radius: 15px;
                font-size: 1.1rem;
                transition: all 0.3s ease;
                background: #f8f9fa;
                font-family: inherit;
            }
            
            .simple-form-group input:focus,
            .simple-form-group select:focus,
            .simple-form-group textarea:focus {
                outline: none;
                border-color: #667eea;
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
                background: white;
                transform: translateY(-2px);
            }

            .simple-form-group textarea {
                resize: vertical;
                min-height: 150px;
                line-height: 1.6;
            }

            /* Simplified Rating System */
            .simple-rating-section {
                background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
                padding: 2.5rem;
                border-radius: 20px;
                margin-bottom: 2rem;
                text-align: center;
            }

            .simple-rating-section h4 {
                margin-bottom: 1.5rem;
                color: #333;
                font-size: 1.4rem;
            }

            .simple-star-rating {
                display: flex;
                justify-content: center;
                gap: 0.5rem;
                margin-bottom: 1rem;
            }

            .simple-star-rating input[type="radio"] {
                display: none;
            }

            .simple-star-rating label {
                font-size: 3rem;
                color: #ddd;
                cursor: pointer;
                transition: all 0.3s ease;
                user-select: none;
                margin: 0;
                padding: 0.2rem;
            }

            .simple-star-rating label:hover {
                color: #ffc107;
                transform: scale(1.2);
            }

            .simple-star-rating input[type="radio"]:checked ~ label {
                color: #ffc107;
            }

            /* Two-Column Layout for Better Space Usage */
            .form-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
                margin-bottom: 2rem;
            }

            /* Suggestion Box - Much Simpler */
            .simple-suggestion-box {
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                padding: 2.5rem;
                border-radius: 20px;
                margin-bottom: 2rem;
                color: white;
                text-align: center;
            }

            .simple-suggestion-box h4 {
                margin-bottom: 1rem;
                font-size: 1.4rem;
                text-align: center;
            }
            
            .simple-suggestion-box textarea {
                background: rgba(255, 255, 255, 0.95);
                border: none;
                color: #333;
                font-size: 1.1rem;
                padding: 1.5rem;
                border-radius: 15px;
                width: 80%; /* Set a specific width */
                margin: 0 auto; /* Center horizontally */
                display: block; /* Make it a block element so margin auto works */
            }
            
            .simple-suggestion-box textarea:focus {
                background: white;
                box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.3);
                outline: none;
            }

            .simple-suggestion-box textarea::placeholder {
                color: #666;
                opacity: 0.8;
            }

            /* Submit Button */
            .submit-btn {
                background: linear-gradient(45deg, #667eea, #764ba2);
                color: white;
                padding: 1.8rem 3rem;
                border: none;
                border-radius: 50px;
                font-size: 1.3rem;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
                width: 100%;
                text-transform: uppercase;
                letter-spacing: 1px;
                box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            }
            
            .submit-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
            }
            
            .submit-btn:active {
                transform: translateY(-1px);
            }

            /* Testimonials Display */
            .testimonials {
                margin-top: 4rem;
            }

            .testimonials h3 {
                text-align: center;
                font-size: 2rem;
                margin-bottom: 2rem;
                color: #333;
            }
            
            .testimonial-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 2rem;
            }

            .testimonial {
                background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
                padding: 2rem;
                border-radius: 20px;
                position: relative;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .testimonial:hover {
                transform: translateY(-5px);
            }

            .testimonial::before {
                content: '"';
                position: absolute;
                top: -10px;
                left: 20px;
                font-size: 4rem;
                color: rgba(0, 0, 0, 0.2);
                font-family: serif;
            }

            .testimonial-text {
                font-style: italic;
                margin-bottom: 1.5rem;
                line-height: 1.8;
                font-size: 1.05rem;
            }

            .testimonial-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-top: 1px solid rgba(255, 255, 255, 0.5);
                padding-top: 1rem;
            }

            .testimonial-author {
                font-weight: bold;
                color: #333;
            }

            .testimonial-service {
                font-size: 0.9rem;
                color: #666;
                margin-top: 0.2rem;
            }

            .testimonial-rating {
                color: #ffc107;
                font-size: 1.2rem;
            }

            /* Footer */
            .footer {
                background: rgba(0, 0, 0, 0.8);
                color: white;
                text-align: center;
                padding: 2rem 0;
                margin-top: 2rem;
                border-radius: 20px 20px 0 0;
            }
            
            .footer-content {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 2rem;
                margin-bottom: 2rem;
            }

            .footer-section h3 {
                margin-bottom: 1rem;
                color: #667eea;
            }

            .footer-section p,
            .footer-section a {
                color: #ccc;
                text-decoration: none;
                line-height: 1.8;
            }

            .footer-section a:hover {
                color: white;
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .nav {
                    flex-direction: column;
                    gap: 1rem;
                }

                .nav-links {
                    gap: 1rem;
                    flex-wrap: wrap;
                    justify-content: center;
                }

                .hero h1 {
                    font-size: 2.5rem;
                }

                .hero p {
                    font-size: 1rem;
                }

                .service-grid,
                .pricing-grid {
                    grid-template-columns: 1fr;
                }

                .pricing-card.featured {
                    transform: none;
                }

                .simple-feedback-form {
                    padding: 2rem 1.5rem;
                }

                .form-row {
                    grid-template-columns: 1fr;
                    gap: 1rem;
                }

                .testimonial-grid {
                    grid-template-columns: 1fr;
                }

                .testimonial-footer {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 0.5rem;
                }

                .simple-star-rating label {
                    font-size: 2.5rem;
                }
            }

            @media (max-width: 480px) {
                .feedback-section h2 {
                    font-size: 2rem;
                }

                .form-header h3 {
                    font-size: 1.5rem;
                }

                .submit-btn {
                    padding: 1.5rem 2rem;
                    font-size: 1.1rem;
                }

                .simple-star-rating label {
                    font-size: 2rem;
                }
            }

            /* Container for star rating */
            .simple-star-rating {
                direction: rtl;
                display: inline-flex;
                justify-content: center;
                gap: 8px;
                font-size: 2rem;
            }

            .simple-star-rating input[type="radio"] {
                display: none;
            }

            .simple-star-rating label {
                cursor: pointer;
                color: #ccc;
                transition: color 0.2s;
            }

            /* Hover effect */
            .simple-star-rating label:hover,
            .simple-star-rating label:hover ~ label {
                color: gold;
            }

            /* Checked effect */
            .simple-star-rating input:checked ~ label {
                color: gold;
            }

            /* Animation for form submission feedback */
            .success-message {
                background: linear-gradient(45deg, #28a745, #20c997);
                color: white;
                padding: 1rem;
                border-radius: 10px;
                text-align: center;
                margin-top: 1rem;
                display: none;
            }

        </style>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <a href="#" class="logo">🧺 Fresh Clean</a>
                    <ul class="nav-links">
                        @auth
                            @if (auth()->user()->is_admin)
                            <li>
                                <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                            </li>    
                            @endif
                        @endauth
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#feedback">Feedback</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                        <li>
                            {{-- Logout Button --}}
                            <form method="POST" action="/logout" style="display: inline;">
                                @csrf
                                <button type="submit" style="background: none; border: none; color: blue; cursor: pointer;">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </header>

        <main class="container">
            <section id="home" class="hero">
                {{-- Show user name --}}
                <h3>Welcome, {{ Auth::user()->name ?? 'Guest' }}</h3>
                <h1>Premium Laundry Service</h1>
                <p>
                    Professional cleaning with doorstep pickup & delivery. Your
                    clothes deserve the best care!
                </p>
                <a href="#services" class="cta-button">Explore Our Services</a>
            </section>

            <section id="services" class="services">
                <h2>Our Services</h2>
                <div class="service-grid">
                    <div class="service-card">
                        <div class="service-icon">👕</div>
                        <h3>Wash & Fold</h3>
                        <p>
                            Professional washing, drying, and folding service
                            for your everyday clothes.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🤵</div>
                        <h3>Dry Cleaning</h3>
                        <p>
                            Specialized dry cleaning for delicate fabrics,
                            suits, and formal wear.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">👗</div>
                        <h3>Garment Care</h3>
                        <p>
                            Expert care for special garments including wedding
                            dresses and vintage clothing.
                        </p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🏠</div>
                        <h3>Dashboard Pickup</h3>
                        <p>
                            Convenient doorstep pickup and delivery service at
                            your preferred time.
                        </p>
                    </div>
                </div>
            </section>

            <section id="pricing" class="pricing">
                <h2>Transparent Pricing</h2>
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <h3>Basic Wash</h3>
                        <div class="price">$2.50</div>
                        <p>per pound</p>
                        <ul class="price-list">
                            <li>Wash & Dry</li>
                            <li>Basic Folding</li>
                            <li>48-hour turnaround</li>
                            <li>Eco-friendly detergent</li>
                        </ul>
                    </div>
                    <div class="pricing-card featured">
                        <h3>Premium Care</h3>
                        <div class="price">$4.00</div>
                        <p>per pound</p>
                        <ul class="price-list">
                            <li>Wash, Dry & Fold</li>
                            <li>Stain treatment</li>
                            <li>24-hour turnaround</li>
                            <li>Premium packaging</li>
                            <li>Free pickup & delivery</li>
                        </ul>
                    </div>
                    <div class="pricing-card">
                        <h3>Dry Cleaning</h3>
                        <div class="price">$8.99</div>
                        <p>per garment</p>
                        <ul class="price-list">
                            <li>Professional dry cleaning</li>
                            <li>Steam pressing</li>
                            <li>48-hour turnaround</li>
                            <li>Protective covering</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="feedback" class="feedback-section">
                <h2>Share Your Experience</h2>
                <p class="feedback-subtitle">
                    Your feedback helps us serve you better
                </p>

                <div class="feedback-container">
                    {{-- THIS THE CODE FOR THE Feedback --}}
                    <form
                        class="simple-feedback-form"
                        method="POST"
                        action="/feedback"
                    >
                        @csrf
                        <div class="form-header">
                            <h3>💬 Tell Us About Your Experience</h3>
                            <p>We'd love to hear from you!</p>
                        </div>

                        <!-- Basic Contact Info -->
                        <div class="form-row">
                            <div class="simple-form-group">
                                <label for="name">Your Name</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your full name"
                                    required
                                />
                            </div>
                            <div class="simple-form-group">
                                <label for="email">Email Address</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="your@email.com"
                                    required
                                />
                            </div>
                        </div>

                        <!-- Service Selection -->
                        <div class="simple-form-group">
                            <label for="service"
                                >Which service did you use?</label
                            >
                            <select id="service" name="service" required>
                                <option value="">Choose your service</option>
                                <option value="wash-fold">
                                    🧺 Wash & Fold
                                </option>
                                <option value="dry-cleaning">
                                    🤵 Dry Cleaning
                                </option>
                                <option value="garment-care">
                                    👗 Garment Care
                                </option>
                                <option value="pickup-delivery">
                                    🏠 Pickup & Delivery
                                </option>
                                <option value="multiple">
                                    ✨ Multiple Services
                                </option>
                            </select>
                        </div>

                        <!-- Simple Rating -->
                        <div class="simple-rating-section">
                            <h4>
                                ⭐ How would you rate your overall experience?
                            </h4>
                            <div class="simple-star-rating">
                                <input
                                    type="radio"
                                    name="rating"
                                    id="star5"
                                    value="5"
                                />
                                <label for="star5" title="5 stars">★</label>

                                <input
                                    type="radio"
                                    name="rating"
                                    id="star4"
                                    value="4"
                                />
                                <label for="star4" title="4 stars">★</label>

                                <input
                                    type="radio"
                                    name="rating"
                                    id="star3"
                                    value="3"
                                />
                                <label for="star3" title="3 stars">★</label>

                                <input
                                    type="radio"
                                    name="rating"
                                    id="star2"
                                    value="2"
                                />
                                <label for="star2" title="2 stars">★</label>

                                <input
                                    type="radio"
                                    name="rating"
                                    id="star1"
                                    value="1"
                                />
                                <label for="star1" title="1 star">★</label>
                            </div>
                            <p
                                style="
                                    margin-top: 1rem;
                                    font-size: 1rem;
                                    opacity: 0.8;
                                "
                            >
                                Click the stars to rate us (5 stars =
                                excellent!)
                            </p>
                        </div>

                        <!-- Feedback Text -->
                        <div class="simple-form-group">
                            <label for="feedback"
                                >Tell us about your experience</label
                            >
                            <textarea
                                id="feedback"
                                name="feedback"
                                placeholder="What did you like about our service? How can we improve? Share your thoughts here..."
                                required
                            ></textarea>
                        </div>

                        <!-- Simple Suggestion Box -->
                        <div class="simple-suggestion-box">
                            <h4>💡 Any suggestions or ideas?</h4>
                            <textarea
                                name="suggestions"
                                id="suggestions"
                                placeholder="Got ideas for new services or improvements? We'd love to hear them!"
                                rows="4"
                            ></textarea>
                            <p
                                style="
                                    margin-top: 1rem;
                                    font-size: 0.9rem;
                                    opacity: 0.9;
                                "
                            >
                                This is optional, but we really appreciate your
                                creative input!
                            </p>
                        </div>

                        <button type="submit" class="submit-btn">
                            Send My Feedback
                        </button>
                    </form>

                    {{-- this is a error testing --}}
                    @if (session('success'))
                        <div class="success">{{ session('success') }}</div>
                    @endif

                    {{-- this is code for displaying the feedback and suggestions --}}
                    <div class="testimonial-grid">
                        @forelse ($feedbacks as $feedback)
                            <div class="testimonial">
                                <p class="testimonial-text">
                                    {{ $feedback->feedback }}
                                </p>

                                @if (!empty($feedback->suggestions))
                                    <p class="testimonial-suggestion">
                                        💡 <strong>Suggestion:</strong> {{ $feedback->suggestions }}
                                    </p>
                                @endif

                                <div class="testimonial-footer">
                                    <div>
                                        <p class="testimonial-author">
                                            {{ $feedback->name }}
                                        </p>
                                        <p class="testimonial-service">
                                            {{ ucfirst($feedback->service) }}
                                        </p>
                                    </div>
                                    <div class="testimonial-rating">
                                        {!! str_repeat('⭐', $feedback->rating) !!}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No feedback available yet.</p>
                        @endforelse
                    </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="contact" class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section">
                        <h3>Contact Us</h3>
                        <p>📍 123 Clean Street, Laundry District</p>
                        <p>📞 (555) 123-WASH</p>
                        <p>✉️ info@freshclean.com</p>
                    </div>
                    <div class="footer-section">
                        <h3>Business Hours</h3>
                        <p>Monday - Friday: 7:00 AM - 9:00 PM</p>
                        <p>Saturday: 8:00 AM - 8:00 PM</p>
                        <p>Sunday: 9:00 AM - 6:00 PM</p>
                    </div>
                    <div class="footer-section">
                        <h3>Quick Links</h3>
                        <p><a href="/#services">Our Services</a></p>
                        <p><a href="/#pricing">Pricing</a></p>
                        <p><a href="/#feedback">Leave Feedback</a></p>
                        <p><a href="#">Terms of Service</a></p>
                    </div>

                </div>                
                <div class="footer-section">
                    <h3>Made by:</h3>
                    <p>Rey M. Alas-as</p>
                    <p>Jemien Infante Albios</p>
                    <p>Ruffa Mae S. Sapan</p>
                    <p>
                        &copy; 2024 Fresh Clean Laundry Service. All rights
                        reserved.
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
