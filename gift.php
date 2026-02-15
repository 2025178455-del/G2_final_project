<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnipSnap D.I.Y. | Projects - Gift</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Font Setting: Times New Roman (Consistent with your site) */
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        /* Background / Crumpled Paper Texture */
        .textured-bg {
            background-color: #0b1a37; 
            background-image: url('wallpaper.jpg');
            min-height: 100vh;
            color: white;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* --- Navigation Styles --- */
        .nav-link {
            color: white; 
            transition: all 0.2s ease-in-out;
            padding: 8px 20px; 
            border-radius: 9999px;
            text-decoration: none;
        }

        .nav-active {
            background-color: #c9d1f8;
            color: #0b1a37 !important;
            font-weight: 600;
            padding: 8px 20px; 
            border-radius: 9999px; 
        }

        /* Sub-Navigation Pills (Home, School, Gift) */
        .sub-nav-pill {
            padding: 6px 24px;
            border-radius: 9999px;
            color: white;
            background-color: rgba(255,255,255,0.1); /* Transparent/Glass effect */
            transition: all 0.3s;
            text-transform: capitalize;
            font-weight: 500;
        }
        
        .sub-nav-active {
            background-color: #c9d1f8; /* Light purple/white */
            color: #0b1a37; /* Dark text */
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(201, 209, 248, 0.4);
        }

        /* --- Project Card Styles --- */
        .content-frame {
            background-color: #0f2c4f; /* Dark blue background for the box */
            border: 8px solid #c9d1f8; /* Thick light border */
            border-radius: 2rem; /* Rounded corners */
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            overflow: hidden;
        }

        /* Outline text effect for headers "video" and "instructions" */
        .outline-text {
            color: transparent;
            -webkit-text-stroke: 1px white;
            text-stroke: 1px white;
            font-family: sans-serif;
            font-weight: 900;
            text-transform: lowercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 0px #0b1a37;
        }

        /* Dotted line connector */
        .connector-dots {
            border-top: 6px dotted rgba(255, 255, 255, 0.5);
            width: 50px;
            height: 0;
            margin: 0 10px;
        }

    </style>
</head>

<body class="textured-bg flex flex-col min-h-screen">

    <header class="container mx-auto px-4 pt-6 relative z-50">
        <nav class="flex items-center justify-between p-3 bg-gray-900/60 backdrop-blur-md rounded-full border border-gray-600/50 shadow-xl">

            <div class="flex items-center space-x-3">
                <img src="logo.png" class="h-10 w-10 rounded-full object-cover" alt="SnipSnap DIY Logo">
                <span class="text-xl font-bold tracking-wider text-white">
                    SnipSnap 
                    <span class="text-sm font-light block -mt-1">D.I.Y.</span>
                </span>
            </div>

            <div id="nav-links-container" class="hidden lg:flex items-center space-x-3 text-lg font-medium">
                <a href="home.html" class="nav-link">Home</a>
                <a href="aboutus.php" class="nav-link">About Us</a>
                
                <div class="relative group">
                    <a href="#" class="nav-link nav-active flex items-center">
                        Projects 
                    </a>
                </div>

                <a href="quiz.html" class="nav-link">Quiz</a>
                <a href="contactus.html" class="nav-link">Contact Us</a>
            </div>

            <div class="flex items-center space-x-3">
                <button id="search-toggle" class="p-2 rounded-full hover:bg-white/10">
                    <i data-lucide="search" class="w-6 h-6 text-white"></i>
                </button>
                <button class="lg:hidden p-2 rounded-full hover:bg-white/10">
                    <i data-lucide="menu" class="w-6 h-6 text-white"></i>
                </button>
            </div>
        </nav>

        <div id="search-input-container" class="hidden absolute right-4 mt-2 w-72 md:w-80 bg-white p-3 rounded-xl shadow-2xl z-10">
            <input type="text" id="search-input" placeholder="Search..."
                class="w-full p-2 border-b-2 border-gray-300 focus:border-blue-500 text-gray-800 outline-none">
        </div>
    </header>

    <div class="container mx-auto px-4 mt-6 flex justify-end">
        <div class="bg-[#1c325c]/80 backdrop-blur rounded-full p-2 inline-flex space-x-2 border border-white/20">
            <a href="phome.html" class="sub-nav-pill hover:bg-white/20">Home</a>
            <a href="pschool.html" class="sub-nav-pill hover:bg-white/20">School</a>
            <a href="gift.php" class="sub-nav-pill sub-nav-active">Gift</a>
        </div>
    </div>

    <main class="container mx-auto px-4 py-8 flex-grow flex flex-col items-center">
        
        <h1 class="text-3xl md:text-5xl font-bold text-center text-white mb-10 drop-shadow-lg uppercase tracking-wide">
            Mini Sunflower Bouquet
        </h1>

        <div class="w-full max-w-6xl flex flex-col md:flex-row items-center justify-center md:items-stretch gap-0 md:gap-4">

            <div class="flex flex-col items-center w-full md:w-1/3">
                <h2 class="text-4xl font-bold text-white mb-2 outline-text">video</h2>
                
                <div class="content-frame w-full h-[500px] bg-black relative flex items-center justify-center">
                    <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                        <source src="gift.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <div class="hidden md:flex flex-col justify-center items-center h-auto pt-20">
                <div class="connector-dots"></div>
            </div>

            <div class="flex flex-col items-center w-full md:w-2/3 mt-8 md:mt-0">
                <h2 class="text-4xl font-bold text-white mb-2 outline-text">instructions</h2>
                
                <div class="content-frame w-full h-full min-h-[500px] p-8 md:p-12 flex items-center">
                    <ol class="list-decimal list-outside text-white space-y-4 text-lg md:text-xl leading-relaxed pl-6 font-serif">
                        <li>1. Cut open a toilet roll, flatten it, roll it into a cone, and glue it.</li>
                        <li>2. Roll a thin strip of brown paper into a tight coil and glue the end.</li>
                        <li>3. Cut a long strip of yellow paper and fringe one side to make petals.</li>
                        <li>4. Fluff the fringe, glue the uncut edge, and wrap it around the brown coil to form a sunflower.</li>
                        <li>5. Repeat to make several mini sunflowers.</li>
                        <li>6. Place the flowers inside the cone and adjust until it looks neat and full.</li>
                        <li>7. (Optional) Decorate with ribbon, stickers, glitter, or a tag.</li>
                    </ol>
                </div>
            </div>

        </div>
    </main>

    <footer class="mt-auto w-full bg-gray-900/60 backdrop-blur-md border-t border-gray-700/50 text-white text-sm">
        <div class="container mx-auto px-4 py-3 flex flex-col md:flex-row justify-between items-center">
            <div class="flex flex-col md:flex-row items-center space-y-1 md:space-y-0 md:space-x-6">
                <span>&copy; SnipSnap 2025</span>
                <span class="hidden md:inline-block">|</span>
                <a href="mailto:snipsnap@gmail.com" class="hover:text-blue-300 flex items-center">
                    <i data-lucide="mail" class="w-4 h-4 mr-1"></i> snipsnap@gmail.com
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <i data-lucide="map-pin" class="w-5 h-5 text-gray-400 hover:text-blue-300"></i>
                <i data-lucide="phone" class="w-5 h-5 text-gray-400 hover:text-blue-300"></i>
                <i data-lucide="instagram" class="w-5 h-5 text-gray-400 hover:text-blue-300"></i>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Search Toggle Logic
        const searchToggle = document.getElementById('search-toggle');
        const searchInputContainer = document.getElementById('search-input-container');
        const searchInput = document.getElementById('search-input');

        searchToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            searchInputContainer.classList.toggle('hidden');
            if (!searchInputContainer.classList.contains('hidden')) {
                setTimeout(() => searchInput.focus(), 100);
            }
        });

        document.body.addEventListener('click', (e) => {
            if (!searchInputContainer.contains(e.target) && !searchToggle.contains(e.target)) {
                searchInputContainer.classList.add('hidden');
            }
        });
    </script>

</body>
</html>