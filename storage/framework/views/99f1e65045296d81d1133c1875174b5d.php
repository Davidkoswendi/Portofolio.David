<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <img src="<?php echo e(asset('img/logo (1).png')); ?>" alt="Logo">
            </div>
            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#services">Skill</a>
                <a href="#portfolio">My Portfolio</a>
                <a href="#programming-languages">Programming Languages</a>
            </div>
            <button onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})" class="contact-button">Contact Us</button>
            <svg xmlns="http://www.w3.org/2000/svg" class="hamburg" height="32" width="34" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </div>
        <div class="dropmenu">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Skill</a>    
            <a href="#portfolio">My Portfolio</a>
            <a href="#programming-languages">Programming Languages</a>
            <button onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})" class="contact-button">Contact Us</button>
            <svg xmlns="http://www.w3.org/2000/svg" class="cancel" height="36" width="32" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <div class="content">
            <div class="main-content">
                <h1 data-aos="fade-right" data-aos-duration="1500">Hi! I Am</h1>
                <span data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">David K.</span>
                <p data-aos="flip-up" data-aos-duration="1500" data-aos-delay="400">I am David Koswendi, a passionate software engineering student with a strong focus on web and mobile development.</p>
                <div class="buttons">
                    <a href="#portfolio" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600" class="portfolio-button">My Portfolio</a>
                    <a href="#programming-languages" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600" class="programming-button">Programming Languages</a>
                </div>
            </div>
            <div class="image">
                <model-viewer src="sprunki__black.glb" 
                              alt="3D Model of ASUS ROG Strix Scar 17" 
                              auto-rotate 
                              camera-controls 
                              style="width: 100%; height: 400px;">
                </model-viewer>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="about-content">
            <h2 data-aos="fade-up" data-aos-duration="1500">About Us</h2>
            <p data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">Hello, I’m David Koswendi, a passionate student majoring in Software Engineering (RPL) at SMKN 4 Bandung. My interest in technology and programming started at a young age, particularly in creating applications and websites that are not only functional but also visually appealing.

                I have a deep interest in web development, constantly refining my skills in HTML, CSS, JavaScript, and various other tools to create intuitive and engaging user experiences. Additionally, I’m keen on mobile app development, especially using Android Studio and Kotlin, to build applications that can make a real impact.
                
                I believe that technology is a powerful tool for solving problems, and I’m always eager to learn new things, tackle challenges, and share my work with others. With my skills continuously growing, I am committed to creating innovative solutions in the tech and web development world.</p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="portfolio-content">
            <h2 data-aos="fade-up" data-aos-duration="1500">My Portfolio</h2>
            <div class="portfolio-list">
                <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500">
                    <img src="<?php echo e(asset('img/project1.png')); ?>" alt="Project 1">
                    <h3>Project Title 1</h3>
                </div>
                <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="200">
                    <img src="<?php echo e(asset('img/project2.png')); ?>" alt="Project 2">
                    <h3>Project Title 2</h3>
                </div>
                <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
                    <img src="<?php echo e(asset('img/project3.png')); ?>" alt="Project 3">
                    <h3>Project Title 3</h3>
                </div>
                <div class="portfolio-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
                    <img src="<?php echo e(asset('img/project4.png')); ?>" alt="Project 4">
                    <h3>Project Title 4</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="services-content">
            <h2 data-aos="fade-up" data-aos-duration="1500">Our Skill</h2>
            <div class="service-list">
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500">
                    <h3>Web Development</h3>
                    <p>Build fast, responsive, and visually stunning websites tailored to your needs.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="200">
                    <h3>UI/UX Design</h3>
                    <p>Designing user-friendly and intuitive interfaces to enhance user experience.</p>
                </div>
                <div class="service-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
                    <h3>Data Base</h3>
                    <p>Store, manage, and organize data for easy access and processing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programming Languages Section -->
    <section id="programming-languages">
        <div class="programming-content">
            <h2 data-aos="fade-up" data-aos-duration="1500">Programming Languages</h2>
            <div class="programming-list">
                <div class="programming-item" data-aos="flip-left" data-aos-duration="1500">
                    <img src="<?php echo e(asset('img/python.png')); ?>" alt="Python">
                    <h3>Python</h3>
                </div>
                <div class="programming-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="200">
                    <img src="<?php echo e(asset('img/javascript.png')); ?>" alt="JavaScript">
                    <h3>JavaScript</h3>
                </div>
                <div class="programming-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
                    <img src="<?php echo e(asset('img/java.png')); ?>" alt="Java">
                    <h3>Java</h3>
                </div>
                <div class="programming-item" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
                    <img src="<?php echo e(asset('img/csharp.png')); ?>" alt="C#">
                    <h3>C#</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact-content">
            <h2 data-aos="fade-up" data-aos-duration="1500">Contact Us</h2>
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <form action="<?php echo e(route('contact.store')); ?>" method="POST" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200">
                <?php echo csrf_field(); ?>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({offset: 120});
    </script>
    <script>
        const hamburg = document.querySelector('.hamburg');
        const cancel = document.querySelector('.cancel');
        const navbar = document.querySelector('.dropmenu');

        hamburg.addEventListener('click', () => {
            navbar.classList.add('active'); // Show the dropdown menu
            hamburg.style.display = 'none'; // Hide hamburger icon
            cancel.style.display = 'block'; // Show cancel icon
        });

        cancel.addEventListener('click', () => {
            navbar.classList.remove('active'); // Hide the dropdown menu
            hamburg.style.display = 'block'; // Show hamburger icon
            cancel.style.display = 'none'; // Hide cancel icon
        });
        
    </script>
</body>
</html><?php /**PATH D:\laragon\www\portfolio\resources\views/index.blade.php ENDPATH**/ ?>