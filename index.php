<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Dapa</title>
    <link href="dist/output.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                      <a href="#home" class="font-bold text-lg text-primary block py-6">arifindava</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-ou origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-xl rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none ">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About Me</a>
                            </li>
                            <li class="group">
                                <a href="#portfolioo" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#clients" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                            </li>
                            <li class="group">
                                <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    


    <!-- Hero Section Start -->
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl ">Hello everyone👋, I'm  <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Arifin Dava</span></h1>
                    <h2 class="font-medium text-slate-700 text-lg mb-5 lg:text-2xl: italic"> <span class="font-semibold text-sky-700">Inforsa Student & <span class="text-dark">Junior FrontEnd</span></h2>
                    <p class="font-medium text-slate-400 mb-10 leading-relaxed"> Usually playing Guitar or video games like Valorant to <span class="text-dark font-bold">Enjoying Life.</span></p>
                    
                    <a href="https://Instagram.com/rfdapp" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out ">Contact Me</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0 ">
                    <img src="dist/img/dap.png" alt="Dapa" class="max-w-sm mx-auto ">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2  md:scale-125">
                            <svg width="520" height="450" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6" d="M34.7,-54.8C42.9,-48.7,46,-35.6,52.9,-23.3C59.8,-11.1,70.3,0.3,71.2,11.9C72.1,23.6,63.4,35.5,53.8,46.7C44.2,57.8,33.6,68.2,21.4,70.8C9.2,73.4,-4.6,68.1,-14.3,60C-23.9,52,-29.4,41.1,-35.2,31.9C-41,22.7,-47.1,15.2,-48.3,6.9C-49.5,-1.3,-45.7,-10.2,-44.7,-23.7C-43.7,-37.3,-45.5,-55.4,-38.5,-62.1C-31.5,-68.7,-15.7,-64,-1.3,-62.1C13.2,-60.1,26.5,-60.9,34.7,-54.8Z" transform="translate(100 100) scale(1.1)"/>
                              </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section start -->
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-extrabold uppercase text-primary text-lg mb-3 ">About Me</h4>
                    <h2 class="font-bold text-secondary text-3xl mb-5 max-w-md lg:text-4xl">Just a little kid that tryna somethin' new :D</h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Now i'm a University Mulawarman Student in Information Systems Study Program. And have a interest on FrontEnd Developer and playing guitar to enjoying my day. </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Let's Moots!</h3>
                    <p class="font-medium text-base text-secondary mb-6 lg:text-lg">
                        This is all my social media maybe you've interest to be friend.
                    </p>
                    <div class="flex items-center">
                        <!-- YouTube -->
                        <a href="https://youtube.com" target="_blank" 
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white" ><svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://Instagram.com/rfdapp" target="_blank" 
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white p-1" >

                        <svg role="img" width="20" class="fill-current " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                       <!-- TikTok -->
                        <a href="https://TikTok.com/@rfdapp_" target="_blank" 
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white" >

                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>
                        <!-- Spotify -->
                        <a href="https://open.spotify.com/user/x1hivdvsu40ioqyim2hok2bg0?si=31d6a754ea7644c2" target="_blank" 
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white" >
                        <svg role="img" width="20px" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Spotify</title><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                        </a>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolioo" class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">My Latest Project & Portfolio.</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">I'm sure this is not a lot project and still not good enough.</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/11.png" alt="Landing Page" width="w-full" >
                    </div>`
                    <h3 class="font-semibold text-dark text-xl mt-5 mb m-3">Project 1 </h3>
                    <p class="font-medium text-base text-secondary">This Project => Tailwind-CSS for my Main Website.</p>
                    <button class="text-base font-semibold text-white py-2 px-4 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mt-5" style="background-color: #14b8a6 !important;" onclick="window.open('https://davaportfolio.netlify.app/', '_blank')">Go To Website</button>
                </div>
                <div class="mb-12 p-4 md:w-1/2 ">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/22.png" alt="Landing Page" width="w-full" >
                    </div>
                    <h3 class="font-semibold text-dark text-xl mt-5 mb m-3">Project 2 </h3>
                    <p class="font-medium text-base text-secondary">BackEnd Project => Python simple program to counting day from birth day.</p>
                    <button class="text-base font-semibold text-white py-2 px-4 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mt-5" style="background-color: #14b8a6 !important;" onclick="window.open('https://santaprambutan.netlify.app/', '_blank')">Go To Website</button>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/33.png" alt="Landing Page" width="w-full" >
                    </div>
                    <h3 class="font-semibold text-dark text-xl mt-5 mb m-3">Project 3 </h3>
                    <p class="font-medium text-base text-secondary">FrontEnd Project => Html-CSS simple library website.</p>
                    <button class="text-base font-semibold text-white py-2 px-4 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mt-5" style="background-color: #14b8a6 !important;" onclick="window.open('https://chipseyy.netlify.app/', '_blank')">Go To Website</button>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/44.png" alt="Landing Page" width="w-full" >
                    </div>
                    <h3 class="font-semibold text-dark text-xl mt-5 mb m-3">Project 4 </h3>
                    <p class="font-medium text-base text-secondary">BackEnd => Python Menu-List-to-Order program for cafe important.</p>
                    <button class="text-base font-semibold text-white py-2 px-4 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mt-5" style="background-color: #14b8a6 !important;" onclick="window.open('https://chipsey.netlify.app/', '_blank')">Go To Website</button>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Portfolio Section End -->

    <!-- Clients Section Start -->
    <section id="clients" class="pt-36 pb-32 bg-slate-700">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Dream (?)</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Just tryin' to dreamin'</h2>
                    <p class="font-medium text-md text-slate-400 md:text-lg">My dream company that inspired me to still learning about Fullstack Dev</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="dist/img/clients/1.svg" alt="gojek">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="dist/img/clients/2.svg" alt="shopee">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="dist/img/clients/3.svg" alt="tokopedia">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                        <img src="dist/img/clients/4.svg" alt="Google">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Latest Daily Activities</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">My latest daily activites and some of my thoughts about problem around my <span class="italic">life </span>. </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="dist/img/131.png" alt="Programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3 ><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> My Web Developer RoadMap</a></h3>
                            <p class="font-medium text-secondary text-base mb-6">Don't try to skip your daily routine dap, it's a criminal bro :D.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-md hover:opacity-80">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="dist/img/ad.png" alt="Programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3 ><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> Guitar Chord Record </a></h3>
                            <p class="font-medium text-secondary text-base mb-6">Some of my guitar chord notes, to make me eassier to remembering song.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-md hover:opacity-80">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="dist/img/12.png" alt="Programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3 ><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate"> "Have you ever been in love?"</a></h3>
                            <p class="font-medium text-secondary text-base mb-6">What will u do when you've do all you can do but still didn't get enough?  </p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-md hover:opacity-80">Read More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Message</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Leave Some Message Here </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">If you mind to send me some message or anything else about this website.</p>
                </div>
            </div>
            <div class="formContainer">
                <form action="process_form.php" method="POST">
                    <div class="w-full lg:w-2/3 lg:mx-auto">
                        <div class="w-full px-4 mb-8">
                            <label for="name" class="text-base text-primary font-bold">Name</label>
                            <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required placeholder="Name" name="from_name">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="email" class="text-base text-primary font-bold">Email</label>
                            <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required placeholder="Email" name="reply_to">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="date" class="text-base text-primary font-bold">Date</label>
                            <input type="date" id="date" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required name="date">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="message" class="text-base text-primary font-bold">Message</label>
                            <textarea id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" required placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="anonymous" class="text-base text-primary font-bold">Display Name as Anonymous</label>
                            <input type="checkbox" id="anonymous" name="anonymous">
                        </div>
                        <div class="w-full px-4">
                            <button type="submit" class="text-base font-semibold bg-primary text-white py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Dashboard Section Start -->
    <section id="dashboard" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Dashboard</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">User Messages</h2>
                </div>
            </div>
            <div class="w-full lg:w-2/3 lg:mx-auto">
    <?php
    include 'db.php';

    $sql = "SELECT name, email, date, message FROM messages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="w-full px-4 mb-8 bg-white p-6 rounded-md shadow-md border border-gray-200">';
            echo '<div class="flex items-center mb-4">';
            
            echo '<div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold mr-4">';
            echo '</div>';
            
            echo '<div>';
            echo '<p class="text-lg font-semibold text-dark">' . htmlspecialchars($row['name']) . '</p>';
            echo '<p class="text-sm text-secondary">' . htmlspecialchars($row['email']) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<p class="text-sm text-secondary mb-2"><strong>Date:</strong> ' . htmlspecialchars($row['date']) . '</p>';
            echo '<p class="text-base text-dark"><strong>Message:</strong> ' . htmlspecialchars($row['message']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p class="text-center text-secondary">No messages yet.</p>';
    }

    $conn->close();
    ?>
</div>

        </div>
    </section>
    <!-- Dashboard Section End -->

    <!-- Footer Section Start-->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">ArifinDava</h2>
                    <h3 class="font-bold text-2xl mb-3" >Contact Us</h3>
                    <p class="mb-2 text-slate-300">adava05@gmail.com</p>
                    <p>Mulawarman University</p>
                    <p>Samarinda City</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Category</h3>
                    <ul>
                        <li class="text-slate-300">
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Programming</a>
                        </li>
                        <li class="text-slate-300">
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Tech</a>
                        </li>
                        <li class="text-slate-300">
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Lifestyle</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Link</h3>
                    <ul>
                        <li class="text-slate-300">
                            <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
                        </li>
                        <li class="text-slate-300">
                            <a href="#about" class="inline-block text-base hover:text-primary mb-3">About</a>
                        </li>
                        <li class="text-slate-300">
                            <a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
                        </li>
                        <li class="text-slate-300">
                            <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li class="text-slate-300">
                            <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- YouTube -->
                    <a href="https://youtube.com/chipsey" target="_blank" 
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white" ><svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://Instagram.com/rfdapp" target="_blank" 
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white p-1" >

                    <svg role="img" width="20" class="fill-current " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                   <!-- TikTok -->
                    <a href="https://TikTok.com/@rfdapp_" target="_blank" 
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white" >

                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                    <!-- Spotify -->
                    <a href="https://open.spotify.com/user/x1hivdvsu40ioqyim2hok2bg0?si=31d6a754ea7644c2" target="_blank" 
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:bg-primary hover:border-primary hover:text-white" >
                    <svg role="img" width="20px" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Spotify</title><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                    </a>

                    

                </div>
                <p class="font-medium text-xs text-slate-500 text-center">Created by <span class="text-pink-500">❤️</span>     <a href="https://Instagram.com/rfdapp" target="_blank" class="font-bold text-primary">Arifin Dava</a>, with <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS on 2023.</a></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End-->
    <script src="dist/js/script.js"></script>
</body>
</html>