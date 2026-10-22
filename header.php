<header id="navbar">
    <style>
        #navbar {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            z-index: 9999 !important;
            background: #ffffff !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05) !important;
            display: flex !important;
            justify-content: center !important;
            transition: all 0.3s ease !important;
        }
        #navbar nav.container {
            max-width: 1300px !important;
            margin: 0 auto !important;
            padding: 10px 30px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            width: 100% !important;
            background: transparent !important;
        }
        #navbar .logo {
            display: flex !important;
            align-items: center !important;
            flex-shrink: 0 !important;
        }
        #navbar .logo img {
            height: 50px !important;
            width: auto !important;
            display: block !important;
            transition: height 0.3s ease !important;
        }
        #navbar .nav-links {
            display: flex !important;
            align-items: center !important;
            gap: 28px !important;
            margin: 0 !important;
            margin-left: auto !important;
            margin-right: 28px !important;
            list-style: none !important;
            padding: 0 !important;
        }
        #navbar .nav-links a {
            color: #1a365d !important;
            font-weight: 700 !important;
            font-size: 0.98rem !important;
            text-transform: capitalize !important;
            text-decoration: none !important;
            display: flex !important;
            align-items: center !important;
            gap: 6px !important;
            transition: color 0.3s ease !important;
        }
        #navbar .nav-links a:hover {
            color: var(--royal-gold, #D4AF37) !important;
        }
        #navbar .nav-actions {
            display: flex !important;
            align-items: center !important;
            flex-shrink: 0 !important;
        }
        #navbar .nav-cta {
            background: var(--royal-gold, #D4AF37) !important;
            color: #000000 !important;
            border-radius: 50px !important;
            padding: 9px 24px !important;
            font-weight: 700 !important;
            font-size: 0.85rem !important;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3) !important;
            transition: all 0.3s ease !important;
            display: inline-block !important;
        }
        #navbar .nav-cta:hover {
            background: #e6c04f !important;
            transform: translateY(-2px) !important;
        }
        #navbar.scrolled nav.container {
            padding: 7px 30px !important;
        }
        #navbar.scrolled .logo img {
            height: 44px !important;
        }
        @media (max-width: 992px) {
            #navbar nav.container {
                padding: 10px 20px !important;
            }
            #navbar .nav-links {
                display: none !important;
                margin: 0 !important;
            }
            #navbar .nav-links.active {
                display: flex !important;
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                width: 100% !important;
                height: 100vh !important;
                background: #ffffff !important;
                flex-direction: column !important;
                justify-content: center !important;
                align-items: center !important;
                gap: 25px !important;
                z-index: 1000 !important;
                padding: 60px 20px !important;
            }
            #navbar .nav-actions {
                display: none !important;
            }
            #navbar .mobile-toggle {
                display: flex !important;
                margin-left: auto !important;
            }
        }
    </style>
    <nav class="container">
        <div class="logo">
            <a href="/"><img src="assets/logo.webp" alt="Reliance MET City Logo" decoding="async"></a>
        </div>

        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="about-us">About Us</a></li>
            <li class="has-dropdown">
                <a href="#services">Services <i class="fas fa-chevron-down" style="font-size: 0.8rem;"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="residential-plots">Residential Plots</a></li>
                    <li><a href="industrial-plots">Industrial Plots</a></li>
                    <li><a href="commercial-plots">Commercial Plots</a></li>
                </ul>
            </li>
            <li><a href="blog">Blog</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>

        <div class="nav-actions">
            <a href="contact" class="nav-cta">Inquire</a>
        </div>

        <div class="mobile-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
