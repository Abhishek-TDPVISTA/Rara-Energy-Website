<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>
<style>
    .custom-list {
        list-style-type: none;
        /* Remove default bullet */
        padding-left: 0;
        /* Remove default left padding */
    }

    .custom-list li {
        color: #898a9c;
        position: relative;
        /* Position relative for dot placement */
        padding-left: 1.5em;
        /* Space for the dot */
        margin-bottom: 0.5em;
        /* Adjust spacing between list items */
    }

    .custom-list li::before {
        content: "•";
        /* Bullet character (you can use '\2022' for the same) */
        position: absolute;
        /* Position absolute for precise placement */
        left: 0;
        /* Position at the start of the list item */
        top: 0.1em;
        /* Adjust vertical alignment if needed */
        font-size: 1.8em;
        /* Adjust size of the bullet */
        line-height: 1;
        /* Ensure line height matches font size for vertical alignment */
        color: #333;
        /* Color of the bullet */
    }

    .service_img {
        width: 100%;
        height: 350px;
    }

    .service_img1 {
        width: 100%;
        height: 300px;
    }
    
    /* New styles for read more functionality */
    @media (max-width: 767px) {
        .content-collapse {
            display: none;
        }
        
        .content-preview {
            display: block;
            margin-bottom: 10px;
        }
        
        .read-more-btn {
            background-color: #70c150;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .read-more-btn:hover {
            background-color: #5eab3f;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        .read-less-btn {
            background-color: #f0f0f0;
            color: #333;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .read-less-btn:hover {
            background-color: #e0e0e0;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
    }
</style>
<div class="breadcroumb-area bread-bg" style="background-image: url(assets/bg_images/services.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Consultancy</h1>
                    <h6><a href="index.php">Home</a> <i class="far fa-dot-circle"></i> Consultancy</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="carbon" class="services-area gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="section-title">
                    <h6>Consultancy</h6>
                    <h2>WHAT DO WE DO?</h2>
                    <div class="d-flex justify-content-center">
                        <div style="width:40%; background: #70c150; border-radius: 20px; height: 5px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carbon Capture Storage Solutions -->
        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets/img/image/services/Picture3.jpg" alt="Profile Image" class="profile-img service_img" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-1 mt-2" style="color: #7FBD41;">Carbon Capture Storage Solutions</h3>
                        
                        <!-- Mobile view: Content preview and Read More button -->
                        <div class="d-md-none content-preview">
                            <p>Subsurface reservoir simulation modeling predicts CO2 behavior and storage capacity...</p>
                            <button class="read-more-btn" onclick="toggleContent('carbon-content')">Read More</button>
                        </div>
                        
                        <!-- Content (collapsed on mobile) -->
                        <ul class="list-group list-group-flush custom-list d-none d-md-block content-collapse" id="carbon-content">
                            <li class="list-group-item">Subsurface reservoir simulation modeling predicts CO2 behavior and storage capacity in depleted oil and gas fields and saline aquifers, aiding in feasibility assessment and risk management.</li>
                            <li class="list-group-item">Simulations optimize CO2 injection strategies for Enhanced Oil Recovery and Enhanced Gas recovery, balancing carbon storage with incremental oil recovery.</li>
                            <li class="list-group-item">Modeling ensures safe CO2 injection into depleted reservoirs, validating long-term containment and stability.</li>
                            <li class="list-group-item" id="hydrogen">Advanced simulation models will help with tracking CO2 plume movement and pressure changes, supporting subsurface monitoring and environmental safety.</li>
                            <li class="d-md-none">
                                <button class="read-less-btn" onclick="toggleContent('carbon-content')">Read Less</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hydrogen Storage Modeling -->
        <div class="mt-5">
            <div class="card mt-5" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="row wow fadeInUp" data-wow-delay=".3s">
                        <div class="col-md-4">
                            <img src="assets/img/image/services/Picture1.jpg" alt="Profile Image" class="profile-img service_img" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                        </div>
                        <div class="col-md-8">
                            <h3 class="profile-header mb-1 mt-2" style="color: #7FBD41;">Hydrogen Storage Modeling</h3>
                            
                            <!-- Mobile view: Content preview and Read More button -->
                            <div class="d-md-none content-preview">
                                <p>Utilize existing infrastructure for efficient hydrogen storage in depleted reservoirs...</p>
                                <button class="read-more-btn" onclick="toggleContent('hydrogen-content')">Read More</button>
                            </div>
                            
                            <!-- Content (collapsed on mobile) -->
                            <ul class="list-group list-group-flush custom-list d-none d-md-block content-collapse" id="hydrogen-content">
                                <li class="list-group-item">Utilize existing infrastructure for efficient hydrogen storage in depleted reservoirs, reducing costs.</li>
                                <li class="list-group-item">Use tools like CMG GEM and Petrel to study and optimize hydrogen injection and withdrawal and perform sensitivity analyses for various commercial scenarios.</li>
                                <li class="list-group-item">Ensure cap rock integrity through detailed geomechanical modelling for safe containment.</li>
                                <li class="list-group-item" id="feasibility">Provide tailored storage solutions leveraging extensive reservoir engineering expertise, conducting comprehensive technical and economic feasibility studies for reliable project planning.</li>
                                <li class="d-md-none">
                                    <button class="read-less-btn" onclick="toggleContent('hydrogen-content')">Read Less</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feasibility Studies and Screening -->
        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets/img/image/services/Picture2.jpg" alt="Profile Image" class="profile-img service_img" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-1 mt-2" style="color: #7FBD41;">Feasibility Studies and Screening</h3>
                        
                        <!-- Mobile view: Content preview and Read More button -->
                        <div class="d-md-none content-preview">
                            <p>Conduct thorough feasibility studies to assess the viability of energy storage projects...</p>
                            <button class="read-more-btn" onclick="toggleContent('feasibility-content')">Read More</button>
                        </div>
                        
                        <!-- Content (collapsed on mobile) -->
                        <ul class="list-group list-group-flush custom-list d-none d-md-block content-collapse" id="feasibility-content">
                            <li class="list-group-item">Conduct thorough feasibility studies to assess the viability of energy storage projects.</li>
                            <li class="list-group-item">Utilise analytical problem-solving approaches to ensure project alignment with objectives.</li>
                            <li class="list-group-item" id="co2Storage">Provide expert guidance throughout the decision-making process for optimal results.</li>
                            <li class="d-md-none">
                                <button class="read-less-btn" onclick="toggleContent('feasibility-content')">Read Less</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- CO2 Storage and Sequestration Modelling -->
        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets/img/image/services/Picture5.jpg" alt="Profile Image" class="profile-img service_img" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-1 mt-2" style="color: #7FBD41;">CO2 Storage and Sequestration Modelling</h3>
                        
                        <!-- Mobile view: Content preview and Read More button -->
                        <div class="d-md-none content-preview">
                            <p>Utilizing cutting-edge simulation techniques to predict the behaviour of CO2...</p>
                            <button class="read-more-btn" onclick="toggleContent('co2-storage-content')">Read More</button>
                        </div>
                        
                        <!-- Content (collapsed on mobile) -->
                        <ul class="list-group list-group-flush custom-list d-none d-md-block content-collapse" id="co2-storage-content">
                            <li class="list-group-item">Utilizing cutting-edge simulation techniques to predict the behaviour of CO2 in various geological formations, ensuring efficient and safe long-term storage.</li>
                            <li class="list-group-item">Comprehensive risk assessments, identifying potential leakage pathways and implementing mitigation strategies to ensure the integrity of storage sites.</li>
                            <li class="list-group-item">Tailored models incorporate site-specific data, offering bespoke solutions for various geological settings.</li>
                            <li class="list-group-item" id="CO2Enhanced">Ensuring compliance with international standards, guaranteeing environmental safety and regulatory adherence.</li>
                            <li class="d-md-none">
                                <button class="read-less-btn" onclick="toggleContent('co2-storage-content')">Read Less</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- CO2 Enhanced Oil Recovery (EOR) Modelling -->
        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets\img\hello .png" alt="Profile Image" class="profile-img service_img" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-1 mt-2" style="color: #7FBD41;">CO2 Enhanced Oil Recovery (EOR) Modelling</h3>
                        
                        <!-- Mobile view: Content preview and Read More button -->
                        <div class="d-md-none content-preview">
                            <p>Utilizing reservoir simulation and flow dynamics, our advanced models optimize CO2 injection parameters...</p>
                            <button class="read-more-btn" onclick="toggleContent('co2-eor-content')">Read More</button>
                        </div>
                        
                        <!-- Content (collapsed on mobile) -->
                        <ul class="list-group list-group-flush custom-list d-none d-md-block content-collapse" id="co2-eor-content">
                            <li class="list-group-item">Utilizing reservoir simulation and flow dynamics, our advanced models optimize CO2 injection parameters, enhancing sweep efficiency and maximizing hydrocarbon extraction.</li>
                            <li class="list-group-item">Our models reduce operational costs by optimizing CO2 usage and improving the economic viability of mature oil fields.</li>
                            <li class="list-group-item">Tailored modelling solutions address specific reservoir characteristics, ensuring effective and site-specific EOR strategies.</li>
                            <li class="list-group-item" id="Classical">CO2 EOR not only boosts oil production but also contributes to carbon sequestration, reducing overall greenhouse gas emissions.</li>
                            <li class="d-md-none">
                                <button class="read-less-btn" onclick="toggleContent('co2-eor-content')">Read Less</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Classical Industry Standard Modelling and Studies -->
        <div class="card mt-5" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <img src="assets/img/image/services/Picture4.jpg" alt="Profile Image" class="profile-img service_img" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    </div>
                    <div class="col-md-8">
                        <h3 class="profile-header mb-1 mt-2" style="color: #7FBD41;">Classical Industry Standard Modelling and Studies</h3>
                        
                        <!-- Mobile view: Content preview and Read More button -->
                        <div class="d-md-none content-preview">
                            <p>Provide classical industry standard modelling and studies tailored to specific needs...</p>
                            <button class="read-more-btn" onclick="toggleContent('classical-content')">Read More</button>
                        </div>
                        
                        <!-- Content (collapsed on mobile) -->
                        <ul class="list-group list-group-flush custom-list d-none d-md-block content-collapse" id="classical-content">
                            <li class="list-group-item">Provide classical industry standard modelling and studies tailored to specific needs.</li>
                            <li class="list-group-item">Apply a wide range of industry-recognized techniques and best practices.</li>
                            <li class="list-group-item">Deliver comprehensive solutions for both greenfield and brownfield projects.</li>
                            <li class="d-md-none">
                                <button class="read-less-btn" onclick="toggleContent('classical-content')">Read Less</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Read More/Less functionality -->
<script>
    // Function to check screen size and initialize content display on page load
    document.addEventListener('DOMContentLoaded', function() {
        // If we're on a mobile device, make sure the content areas are properly collapsed
        if (window.innerWidth < 768) {
            const contentAreas = document.querySelectorAll('.content-collapse');
            contentAreas.forEach(function(content) {
                content.classList.remove('d-none');
                content.style.display = 'none';
            });
        } else {
            // On desktop, make sure all content is visible
            const contentAreas = document.querySelectorAll('.content-collapse');
            contentAreas.forEach(function(content) {
                content.classList.remove('d-none');
                content.style.display = 'block';
            });
        }
    });

    // Function to toggle content visibility
    function toggleContent(contentId) {
        const contentElement = document.getElementById(contentId);
        
        if (contentElement.style.display === 'none' || getComputedStyle(contentElement).display === 'none') {
            // Show content
            contentElement.style.display = 'block';
            
            // Find and update the button text (parent's previous sibling contains the button)
            const previewElement = contentElement.parentElement.querySelector('.content-preview');
            if (previewElement) {
                const button = previewElement.querySelector('.read-more-btn');
                if (button) {
                    button.style.display = 'none';
                }
            }
        } else {
            // Hide content
            contentElement.style.display = 'none';
            
            // Find and update the button text
            const previewElement = contentElement.parentElement.querySelector('.content-preview');
            if (previewElement) {
                const button = previewElement.querySelector('.read-more-btn');
                if (button) {
                    button.style.display = 'inline-block';
                }
            }
        }
    }

    // Listen for window resize events to handle responsive behavior
    window.addEventListener('resize', function() {
        const contentAreas = document.querySelectorAll('.content-collapse');
        const contentPreviews = document.querySelectorAll('.content-preview');
        
        if (window.innerWidth >= 768) {
            // Desktop view: show all content, hide previews
            contentAreas.forEach(function(content) {
                content.classList.remove('d-none');
                content.style.display = 'block';
            });
            contentPreviews.forEach(function(preview) {
                preview.style.display = 'none';
            });
        } else {
            // Mobile view: hide content, show previews
            contentAreas.forEach(function(content) {
                content.classList.remove('d-none');
                content.style.display = 'none';
            });
            contentPreviews.forEach(function(preview) {
                preview.style.display = 'block';
            });
        }
    });
</script>

<?php include_once('components/footer.php'); ?>