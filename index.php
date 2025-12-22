<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texas Street 301 | American Comfort Food in De Leon, TX</title>
    <meta name="description" content="Texas Street 301 - De Leon's favorite spot for American comfort food. Family-friendly, wheelchair accessible, and serving lunch & dinner. Rated 4.7 stars.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700;900&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- External Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Tailwind Config (required inline for CDN) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        texas: {
                            red: '#B9382E',
                            blue: '#2C3E50',
                            cream: '#F9F7F2',
                            tan: '#E5DCC5',
                            brown: '#5D4037',
                        }
                    },
                    fontFamily: {
                        slab: ['Roboto Slab', 'serif'],
                        sans: ['Open Sans', 'sans-serif'],
                    },
                    backgroundImage: {
                        'wood-pattern': "url('https://www.transparenttextures.com/patterns/wood-pattern.png')",
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-700 bg-texas-cream scroll-smooth">

    <!-- Navigation -->
    <nav class="bg-white shadow-md relative w-full z-50 border-t-4 border-texas-red">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex flex-col">
                <span class="font-slab text-2xl font-bold text-texas-blue uppercase tracking-wide">Texas Street 301</span>
                <span class="text-xs text-texas-red font-bold uppercase tracking-widest">Est. De Leon, TX</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 font-semibold text-sm uppercase tracking-wide text-gray-600">
                <a href="#home" class="hover:text-texas-red transition">Home</a>
                <a href="#menu" class="hover:text-texas-red transition">Menu</a>
                <a href="#accessibility" class="hover:text-texas-red transition">Family & Access</a>
                <a href="#contact" class="hover:text-texas-red transition">Location</a>
                <a href="tel:+12548933011" class="bg-texas-red text-white px-5 py-2 rounded shadow hover:bg-red-800 transition">
                    <i class="fas fa-phone-alt mr-2"></i>(254) 893-3011
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-toggle" class="md:hidden text-texas-blue text-2xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 shadow-lg">
            <div class="flex flex-col p-4 space-y-4 font-bold text-center text-gray-700">
                <a href="#home" class="hover:text-texas-red">Home</a>
                <a href="#menu" class="hover:text-texas-red">Menu</a>
                <a href="#accessibility" class="hover:text-texas-red">Accessibility</a>
                <a href="#contact" class="hover:text-texas-red">Directions</a>
                <a href="tel:+12548933011" class="bg-texas-blue text-white py-3 rounded">Call Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="hero-bg h-[600px] flex items-center justify-center text-center px-4 mt-16">
        <div class="max-w-3xl mx-auto text-white">
            <div class="inline-block bg-texas-red px-4 py-1 mb-4 rounded-sm text-sm font-bold uppercase tracking-wider shadow-lg transform -rotate-2">
                The Taste of Home
            </div>
            <h1 class="font-slab text-5xl md:text-7xl font-bold mb-6 text-shadow-lg">
                Real American<br><span class="text-texas-tan">Comfort Food</span>
            </h1>
            <p class="text-xl md:text-2xl font-light mb-8 max-w-2xl mx-auto text-gray-100">
                Burgers, steaks, and local favorites served with a smile in the heart of De Leon.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#menu" class="bg-texas-red hover:bg-red-800 text-white px-8 py-4 rounded font-bold text-lg transition shadow-xl border-b-4 border-red-900">
                    View Menu
                </a>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Texas+Street+301+De+Leon+TX" target="_blank" class="bg-white hover:bg-gray-100 text-texas-blue px-8 py-4 rounded font-bold text-lg transition shadow-xl border-b-4 border-gray-300">
                    Get Directions
                </a>
            </div>
            
            <!-- Rating -->
            <div class="mt-10 flex justify-center items-center gap-2">
                <div class="flex text-yellow-400 text-xl">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <span class="font-bold text-white text-lg">4.7 Stars (83 Reviews)</span>
            </div>
        </div>
    </header>

    <!-- Features Bar -->
    <section class="bg-texas-blue text-white py-8 border-b-4 border-texas-tan">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div>
                    <i class="fas fa-clock text-texas-tan text-3xl mb-2"></i>
                    <h3 class="font-slab font-bold">Fast Service</h3>
                </div>
                <div>
                    <i class="fas fa-users text-texas-tan text-3xl mb-2"></i>
                    <h3 class="font-slab font-bold">Family Friendly</h3>
                </div>
                <div>
                    <i class="fas fa-wheelchair text-texas-tan text-3xl mb-2"></i>
                    <h3 class="font-slab font-bold">Accessible</h3>
                </div>
                <div>
                    <i class="fas fa-hamburger text-texas-tan text-3xl mb-2"></i>
                    <h3 class="font-slab font-bold">Local Favorites</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="images/snap.avif" alt="Restaurant Interior" class="rounded-lg shadow-2xl border-4 border-white transform rotate-2">
            </div>
            <div class="md:w-1/2">
                <h4 class="text-texas-red font-bold uppercase tracking-widest mb-2">About Texas Street 301</h4>
                <h2 class="font-slab text-4xl text-texas-blue font-bold mb-6">Small Town Roots, Big Time Flavor.</h2>
                <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                    Welcome to <strong>Texas Street 301</strong>, De Leon’s go-to spot for hearty meals and good company. We believe in the power of simple, well-cooked American food—whether it's a juicy burger for lunch or a chicken fried steak dinner with the family.
                </p>
                <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                    We take pride in our fast, friendly service and our welcoming atmosphere where locals feel like family and travelers feel like locals.
                </p>
                <div class="bg-texas-tan/30 p-4 rounded-lg border-l-4 border-texas-blue">
                    <p class="italic text-texas-blue font-semibold">"Great food, friendly staff, and reasonable prices. A hidden gem in De Leon!" — Local Review</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-slab text-4xl text-texas-blue font-bold">From The Kitchen</h2>
                <div class="w-20 h-1 bg-texas-red mx-auto mt-4 rounded"></div>
                <p class="mt-4 text-gray-500 font-bold">$10 - $20 Per Person</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <!-- Lunch/Dinner -->
                <div class="bg-texas-cream p-8 rounded-xl shadow-md border border-gray-200">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="fas fa-utensils text-texas-red text-2xl"></i>
                        <h3 class="font-slab text-2xl font-bold text-texas-blue">Main Courses</h3>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex justify-between items-start border-b border-gray-300 pb-3">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Chicken Fried Steak</h4>
                                <p class="text-sm text-gray-600">A Texas classic. Served with cream gravy, toast, and two sides.</p>
                            </div>
                            <span class="font-bold text-texas-red">$16.99</span>
                        </div>
                        <div class="flex justify-between items-start border-b border-gray-300 pb-3">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">The 301 Burger</h4>
                                <p class="text-sm text-gray-600">1/2 lb beef patty, cheese, bacon, lettuce, tomato, and house sauce.</p>
                            </div>
                            <span class="font-bold text-texas-red">$12.50</span>
                        </div>
                        <div class="flex justify-between items-start border-b border-gray-300 pb-3">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Grilled Catfish</h4>
                                <p class="text-sm text-gray-600">Seasoned perfectly and served with coleslaw and hushpuppies.</p>
                            </div>
                            <span class="font-bold text-texas-red">$14.99</span>
                        </div>
                    </div>
                </div>

                <!-- Kids & Sides -->
                <div class="bg-texas-cream p-8 rounded-xl shadow-md border border-gray-200">
                    <div class="flex items-center gap-3 mb-6">
                        <i class="fas fa-child text-texas-red text-2xl"></i>
                        <h3 class="font-slab text-2xl font-bold text-texas-blue">Kids & Sides</h3>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex justify-between items-start border-b border-gray-300 pb-3">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Kids Chicken Strips</h4>
                                <p class="text-sm text-gray-600">Served with fries and dipping sauce.</p>
                            </div>
                            <span class="font-bold text-texas-red">$6.99</span>
                        </div>
                        <div class="flex justify-between items-start border-b border-gray-300 pb-3">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Grilled Cheese</h4>
                                <p class="text-sm text-gray-600">Classic American cheese on Texas toast with chips.</p>
                            </div>
                            <span class="font-bold text-texas-red">$5.99</span>
                        </div>
                        <div class="flex justify-between items-start border-b border-gray-300 pb-3">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Basket of Onion Rings</h4>
                                <p class="text-sm text-gray-600">Hand-battered and fried golden brown.</p>
                            </div>
                            <span class="font-bold text-texas-red">$4.99</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <a href="tel:+12548933011" class="inline-block bg-texas-blue text-white px-8 py-3 rounded hover:bg-gray-800 transition font-bold">Call to Order Takeaway</a>
            </div>
        </div>
    </section>

    <!-- Accessibility & Family Section -->
    <section id="accessibility" class="py-20 bg-texas-tan/20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="font-slab text-3xl font-bold text-texas-blue">Comfort For Everyone</h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">We are proud to provide a welcoming environment accessible to all members of our community, from toddlers to grandparents.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg text-center shadow-sm border-t-4 border-texas-red">
                    <i class="fas fa-wheelchair text-4xl text-gray-400 mb-4"></i>
                    <h4 class="font-bold text-gray-800">Accessible Entrance</h4>
                    <p class="text-sm text-gray-500 mt-2">Ramp access and wide doorways for easy entry.</p>
                </div>
                <div class="bg-white p-6 rounded-lg text-center shadow-sm border-t-4 border-texas-red">
                    <i class="fas fa-restroom text-4xl text-gray-400 mb-4"></i>
                    <h4 class="font-bold text-gray-800">Accessible Restrooms</h4>
                    <p class="text-sm text-gray-500 mt-2">Spacious facilities equipped with grab bars.</p>
                </div>
                <div class="bg-white p-6 rounded-lg text-center shadow-sm border-t-4 border-texas-blue">
                    <i class="fas fa-baby-carriage text-4xl text-gray-400 mb-4"></i>
                    <h4 class="font-bold text-gray-800">High Chairs</h4>
                    <p class="text-sm text-gray-500 mt-2">Clean high chairs available for our littlest guests.</p>
                </div>
                <div class="bg-white p-6 rounded-lg text-center shadow-sm border-t-4 border-texas-blue">
                    <i class="fas fa-car text-4xl text-gray-400 mb-4"></i>
                    <h4 class="font-bold text-gray-800">Ample Parking</h4>
                    <p class="text-sm text-gray-500 mt-2">Free lot with dedicated accessible spaces close to the door.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row bg-texas-blue rounded-2xl overflow-hidden shadow-2xl">
                
                <!-- Contact Info -->
                <div class="lg:w-1/3 p-10 text-white flex flex-col justify-center">
                    <h3 class="font-slab text-3xl font-bold mb-8">Visit Us</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i class="fas fa-map-marker-alt text-texas-tan text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-lg">Address</h5>
                                <p class="text-gray-300">De Leon, TX 76444<br>United States</p>
                                <p class="text-xs text-texas-tan mt-1">Plus Code: 4F67+HJ De Leon</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <i class="fas fa-clock text-texas-tan text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-lg">Opens at 11:00 AM</h5>
                                <p class="text-gray-300">Thursday - Sunday</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <i class="fas fa-phone text-texas-tan text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-lg">Call Us</h5>
                                <a href="tel:+12548933011" class="text-gray-300 hover:text-white underline">+1 (254) 893-3011</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-blue-800">
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Texas+Street+301+De+Leon+TX" target="_blank" class="block w-full bg-texas-red text-center py-3 rounded font-bold hover:bg-red-700 transition">Get Directions</a>
                    </div>
                </div>

                <!-- Map -->
                <div class="lg:w-2/3 min-h-[400px] bg-gray-200 relative">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.952!2d-98.541!3d32.108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865a8e5e5e5e5e5d%3A0x5e5e5e5e5e5e5e5e!2sTexas+St%2C+De+Leon%2C+TX+76444!5e0!3m2!1sen!2sus!4v1735680000000"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="absolute inset-0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-12 border-t-8 border-texas-red">
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-slab text-2xl text-white font-bold mb-4">Texas Street 301</h2>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#home" class="hover:text-texas-tan">Home</a>
                <a href="#menu" class="hover:text-texas-tan">Menu</a>
                <a href="#about" class="hover:text-texas-tan">About</a>
                <a href="#contact" class="hover:text-texas-tan">Contact</a>
            </div>
            <div class="mb-6">
                <a href="#" class="text-2xl hover:text-blue-500 transition"><i class="fab fa-facebook"></i></a>
            </div>
            <p class="text-sm text-gray-500">&copy; 2025 Texas Street 301. All rights reserved.</p>
        </div>
    </footer>

    <!-- External JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>