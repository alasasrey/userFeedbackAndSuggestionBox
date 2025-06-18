<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fresh Clean - Premium Laundry Service</title>
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

            /* Authentication Sections */
            .auth-section {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                padding: 4rem 0;
                margin: 2rem 0;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                /* REMOVED: display: none; - Now the signup will always be visible */
            }

            .auth-container {
                max-width: 500px;
                margin: 0 auto;
            }

            .auth-form {
                background: white;
                padding: 3rem;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                border: 2px solid transparent;
                transition: border-color 0.3s ease;
            }

            .auth-form:hover {
                border-color: rgba(102, 126, 234, 0.3);
            }

            .auth-header {
                text-align: center;
                margin-bottom: 2rem;
            }

            .auth-header h2 {
                font-size: 2.5rem;
                color: #333;
                margin-bottom: 0.5rem;
            }

            .auth-header p {
                color: #666;
                font-size: 1.1rem;
            }

            .auth-form-group {
                position: relative;
                margin-bottom: 1.5rem;
            }

            .auth-form-group label {
                display: block;
                margin-bottom: 0.5rem;
                font-weight: 600;
                color: #333;
                font-size: 0.9rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            .auth-form-group input,
            .auth-form-group select {
                width: 100%;
                padding: 1.2rem;
                border: 2px solid #e1e5e9;
                border-radius: 12px;
                font-size: 1rem;
                transition: all 0.3s ease;
                background: #f8f9fa;
            }

            .auth-form-group input:focus,
            .auth-form-group select:focus {
                outline: none;
                border-color: #667eea;
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
                background: white;
                transform: translateY(-2px);
            }

            .auth-form-group input:valid {
                border-color: #28a745;
            }

            .password-requirements {
                font-size: 0.8rem;
                color: #666;
                margin-top: 0.5rem;
                line-height: 1.4;
            }

            .checkbox-group {
                display: flex;
                align-items: center;
                gap: 0.5rem;
                margin: 1.5rem 0;
            }

            .checkbox-group input[type="checkbox"] {
                width: auto;
                margin: 0;
            }

            .checkbox-group label {
                margin: 0;
                font-weight: normal;
                text-transform: none;
                letter-spacing: normal;
                font-size: 0.9rem;
            }

            .auth-button {
                width: 100%;
                background: linear-gradient(45deg, #667eea, #764ba2);
                color: white;
                padding: 1.2rem;
                border: none;
                border-radius: 12px;
                font-size: 1.1rem;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .auth-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            }

            .auth-divider {
                text-align: center;
                margin: 2rem 0;
                position: relative;
                color: #666;
            }

            .auth-divider::before {
                content: "";
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                height: 1px;
                background: #e1e5e9;
                z-index: 1;
            }

            .auth-divider span {
                background: white;
                padding: 0 1rem;
                position: relative;
                z-index: 2;
            }

            .social-login {
                display: flex;
                gap: 1rem;
                margin-bottom: 2rem;
            }

            .social-button {
                flex: 1;
                padding: 1rem;
                border: 2px solid #e1e5e9;
                border-radius: 12px;
                background: white;
                color: #333;
                text-decoration: none;
                text-align: center;
                font-weight: 600;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
            }

            .social-button:hover {
                border-color: #667eea;
                transform: translateY(-2px);
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            }

            .google-btn {
                border-color: #db4437;
                color: #db4437;
            }

            .google-btn:hover {
                background: #db4437;
                color: white;
            }

            .facebook-btn {
                border-color: #4267b2;
                color: #4267b2;
            }

            .facebook-btn:hover {
                background: #4267b2;
                color: white;
            }

            .auth-switch {
                text-align: center;
                margin-top: 2rem;
                padding-top: 2rem;
                border-top: 1px solid #e1e5e9;
            }

            .auth-switch p {
                color: #666;
                margin-bottom: 1rem;
            }

            .auth-switch a {
                color: #667eea;
                text-decoration: none;
                font-weight: 600;
                padding: 0.5rem 1rem;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .auth-switch a:hover {
                background: rgba(102, 126, 234, 0.1);
                transform: translateY(-1px);
            }

            /* Profile Info for Signup */
            .profile-section {
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                padding: 1.5rem;
                border-radius: 12px;
                margin: 1.5rem 0;
                color: white;
            }

            .profile-section h4 {
                margin-bottom: 1rem;
                font-size: 1.1rem;
            }

            .profile-section .auth-form-group label {
                color: white;
            }

            .profile-section input,
            .profile-section select {
                background: rgba(255, 255, 255, 0.9);
            }

            .profile-section input:focus,
            .profile-section select:focus {
                background: white;
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

                .social-login {
                    flex-direction: column;
                }

                .auth-form {
                    padding: 2rem 1.5rem;
                }

                .auth-header h2 {
                    font-size: 2rem;
                }
            }


        </style>
    </head>
    <body>
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <a href="#" class="logo">🧺 Fresh Clean</a>
                    <ul class="nav-links">
                        {{-- change the link if you are almost finish --}}
                        <li><a href="/">Home</a></li>
                        {{-- change the link if you are almost finish --}}
                        <li><a href="/#services">Services</a></li>
                        {{-- change the link if you are almost finish --}}
                        <li><a href="/#pricing">Pricing</a></li>
                        {{-- change the link if you are almost finish --}}
                        <li><a href="/#feedback">Feedback</a></li>

                        <li><a href="#contact">Contact</a></li>

                        {{-- change the link if you are almost finish --}}
                        <li><a href="/login">Login</a></li>
                        {{-- change the link if you are almost finish --}}
                        <li><a href="/signup">Sign Up</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="container">
            {{-- this is the login code --}}
            <section id="login" class="auth-section">
                <div class="auth-container">
                    {{-- change THE LINK CODE IF NEEDED --}}
                    <form class="auth-form" method="POST" action="/login">
                        @csrf
                        <div class="auth-header">
                            <h2>Welcome Back</h2>
                            <p>Log in to your Fresh Clean account</p>
                        </div>

                        <div class="auth-form-group">
                            <label for="login-email">Email Address</label>
                            <input
                                type="email"
                                id="login-email"
                                name="email"
                                required
                            />
                        </div>

                        <div class="auth-form-group">
                            <label for="login-password">Password</label>
                            <input
                                type="password"
                                id="login-password"
                                name="password"
                                required
                            />
                            <div class="forgot-password">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                            />
                            <label for="remember"
                                >Remember me for 30 days</label
                            >
                        </div>

                        <button type="submit" class="auth-button">
                            Log In
                        </button>

                        <div class="auth-switch">
                            <p>Don't have an account?</p>

                            {{-- change this link if almost done --}}
                            <a href="/signup">Create your account →</a>
                        </div>
                    </form>
                    
                    {{-- this is a error testing --}}
                    @if ($errors->any())
                        <div class="error">{{ $errors->first() }}</div>
                    @endif
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
                    <h3>Made by:</h3>
                    <p>Rey M. Alas-as</p>
                    <p>Jemien Infante Albios</p>
                    <p>Ruffa Mae S. Sapan</p>
                    <p>
                        &copy; 2024 Fresh Clean Laundry Service. All rights
                        reserved.
                    </p>
                </div>
            </footer>
        </div>
        </body>
</html>
