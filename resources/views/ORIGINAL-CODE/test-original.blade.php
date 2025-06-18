<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Clean - Premium Laundry Service</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        /* Feedback Section */
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
            margin-bottom: 2rem;
            color: #333;
        }

        .feedback-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .feedback-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background: #f8f9fa;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .rating-container {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .star-rating {
            display: flex;
            gap: 0.25rem;
        }

        .star {
            font-size: 1.5rem;
            color: #ddd;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .star:hover,
        .star.active {
            color: #ffc107;
        }

        .submit-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        /* Testimonials */
        .testimonials {
            margin-top: 3rem;
        }

        .testimonials h3 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #333;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .testimonial {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            padding: 1.5rem;
            border-radius: 15px;
            position: relative;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .testimonial-author {
            font-weight: bold;
            color: #666;
        }

        .testimonial-rating {
            color: #ffc107;
            margin-top: 0.5rem;
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
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <section id="home" class="hero">
            <h1>Premium Laundry Service</h1>
            <p>Professional cleaning with doorstep pickup & delivery. Your clothes deserve the best care!</p>
            <a href="#services" class="cta-button">Explore Our Services</a>
        </section>

        <section id="services" class="services">
            <h2>Our Services</h2>
            <div class="service-grid">
                <div class="service-card">
                    <div class="service-icon">👕</div>
                    <h3>Wash & Fold</h3>
                    <p>Professional washing, drying, and folding service for your everyday clothes.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🤵</div>
                    <h3>Dry Cleaning</h3>
                    <p>Specialized dry cleaning for delicate fabrics, suits, and formal wear.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">👗</div>
                    <h3>Garment Care</h3>
                    <p>Expert care for special garments including wedding dresses and vintage clothing.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏠</div>
                    <h3>Home Pickup</h3>
                    <p>Convenient doorstep pickup and delivery service at your preferred time.</p>
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
            <div class="feedback-container">
                <form class="feedback-form">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Used</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="wash-fold">Wash & Fold</option>
                            <option value="dry-cleaning">Dry Cleaning</option>
                            <option value="garment-care">Garment Care</option>
                            <option value="pickup-delivery">Pickup & Delivery</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Overall Rating</label>
                        <div class="rating-container">
                            <div class="star-rating">
                                <span class="star" data-rating="1">⭐</span>
                                <span class="star" data-rating="2">⭐</span>
                                <span class="star" data-rating="3">⭐</span>
                                <span class="star" data-rating="4">⭐</span>
                                <span class="star" data-rating="5">⭐</span>
                            </div>
                            <span id="rating-text">Click to rate</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="feedback-type">Feedback Type</label>
                        <select id="feedback-type" name="feedback-type">
                            <option value="general">General Feedback</option>
                            <option value="compliment">Compliment</option>
                            <option value="suggestion">Suggestion</option>
                            <option value="complaint">Complaint</option>
                            <option value="question">Question</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" placeholder="Share your experience, suggestions, or any feedback you have for us..." required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="improvements">What can we improve?</label>
                        <textarea id="improvements" name="improvements" placeholder="Any suggestions for how we can serve you better?"></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Submit Feedback</button>
                    <div class="success-message" id="success-message">
                        Thank you for your feedback! We appreciate your input and will use it to improve our services.
                    </div>
                </form>
                
                <div class="testimonials">
                    <h3>What Our Customers Say</h3>
                    <div class="testimonial-grid">
                        <div class="testimonial">
                            <p class="testimonial-text">"Exceptional service! My clothes always come back perfectly clean and beautifully folded. The pickup and delivery is so convenient."</p>
                            <p class="testimonial-author">- Sarah Johnson</p>
                            <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                        </div>
                        <div class="testimonial">
                            <p class="testimonial-text">"I've been using Fresh Clean for 2 years now. Their dry cleaning service is top-notch, and the staff is always friendly and professional."</p>
                            <p class="testimonial-author">- Michael Chen</p>
                            <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                        </div>
                        <div class="testimonial">
                            <p class="testimonial-text">"Great value for money! The premium care package is worth every penny. My business shirts look brand new every time."</p>
                            <p class="testimonial-author">- Emma Davis</p>
                            <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
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
                    <p><a href="#services">Our Services</a></p>
                    <p><a href="#pricing">Pricing</a></p>
                    <p><a href="#feedback">Leave Feedback</a></p>
                    <p><a href="#">Terms of Service</a></p>
                </div>
            </div>
            <p>&copy; 2024 Fresh Clean Laundry Service. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>