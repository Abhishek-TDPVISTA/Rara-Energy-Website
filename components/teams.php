<style>
    /* Team Grid and Card Styles */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .profile-card {
        background: #FFFFFF;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        padding: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        cursor: pointer;
        margin: 0.3rem;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .profile-image {
        margin-bottom: 15px;
        text-align: center;
    }

    .profile-image img {
        border-radius: 50%;
        border: 3px solid #66bb6a;
        width: 120px;
        height: 120px;
        object-fit: cover;
    }

    .profile-content {
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .name {
        color: #66bb6a;
        margin: 0;
        font-weight: 700;
        font-size: 18px;
    }

    .position {
        color: #777;
        margin: 5px 0 10px;
        font-size: 14px;
    }

    .social-link {
        margin-top: auto;
    }

    .read-more {
        color: #66bb6a;
        text-decoration: none;
        font-weight: 500;
        display: inline-block;
        margin-top: 10px;
    }

    .read-more:hover {
        text-decoration: underline;
    }

    /* Modern Popup Styles */
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .popup-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .popup-container {
        background: white;
        border-radius: 12px;
        width: 90%;
        max-width: 500px;
        max-height: 80vh;
        overflow-y: auto;
        position: relative;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transform: scale(0.9);
        opacity: 0;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .popup-overlay.active .popup-container {
        transform: scale(1);
        opacity: 1;
    }

    .popup-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
    }

    .popup-title {
        font-weight: bold;
        color: #66bb6a;
        margin: 0;
        font-size: 20px;
    }

    .popup-close {
        background: none;
        border: none;
        cursor: pointer;
        font-size: 22px;
        color: #999;
        transition: color 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .popup-close:hover {
        color: #333;
        background-color: #f0f0f0;
    }

    .popup-body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .popup-body .profile-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #66bb6a;
        margin-bottom: 15px;
    }

    .popup-body p {
        text-align: center;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
    }

    .social-icon {
        margin-top: 10px;
        transition: transform 0.2s ease;
    }

    .social-icon:hover {
        transform: scale(1.1);
    }

    /* Responsive adjustments */
    @media screen and (max-width: 1024px) {
        .team-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media screen and (max-width: 768px) {
        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .d-flex.justify-content-center {
            flex-direction: column;
            align-items: center;
        }

        .d-flex.justify-content-center .profile-card {
            width: 100% !important;
            max-width: 265px;
            margin-bottom: 20px;
        }

        .popup-container {
            width: 95%;
        }
    }

    @media screen and (max-width: 576px) {
        .team-grid {
            grid-template-columns: 1fr;
        }

        .profile-card {
            max-width: 300px;
            margin: 0 auto;
        }
    }
</style>

<!-- Team Grid Layout -->
<div class="container">
    <!-- Top row - 4 cards -->
    <div class="team-grid mb-4">
        <!-- Swati Gupta -->
        <div class="profile-card wow fadeInUp" data-wow-delay=".2s" data-member="swati">
            <div class="profile-image">
                <img src="assets/img/image/team/ceo.png" alt="Swati Gupta">
            </div>
            <div class="profile-content">
                <h3 class="name">Swati Gupta</h3>
                <p class="position">CEO and Founder</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>

        <!-- Vinnavadi C Babu Sivakumar -->
        <div class="profile-card wow fadeInUp" data-wow-delay=".4s" data-member="sivakumar">
            <div class="profile-image">
                <img src="assets/img/image/team/babu3.jpeg" alt="Vinnavadi C Babu Sivakumar">
            </div>
            <div class="profile-content">
                <h3 class="name">Vinnavadi C Babu Sivakumar</h3>
                <p class="position">Technical Advisor</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>

        <!-- Faiz Hoda -->
        <div class="profile-card wow fadeInUp" data-wow-delay=".6s" data-member="hoda">
            <div class="profile-image">
                <img src="assets/img/image/team/hoda sir.png" alt="Faiz Hoda">
            </div>
            <div class="profile-content">
                <h3 class="name">Faiz Hoda</h3>
                <p class="position">Technical Advisor</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>

        <!-- Andrew Gibson -->
        <div class="profile-card wow fadeInUp" data-wow-delay=".8s" data-member="andrew">
            <div class="profile-image">
                <img src="assets/img/image/team/andrew.jpg" alt="Andrew Gibson">
            </div>
            <div class="profile-content">
                <h3 class="name">Andrew Gibson</h3>
                <p class="position">Advisor - Hydrogen Storage</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom row - 2 cards centered -->
    <div class="d-flex justify-content-center gap-4">
        <!-- Saket Kumar -->
        <div class="profile-card wow fadeInUp" data-wow-delay="1s" data-member="saket" style="width: 265px;">
            <div class="profile-image">
                <img src="assets/img/image/team/sanketkumar.jpg" alt="Saket Kumar">
            </div>
            <div class="profile-content">
                <h3 class="name">Saket Kumar</h3>
                <p class="position">Senior Reservoir Engineer</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>
        
         <div class="profile-card wow fadeInUp" data-wow-delay="1.2s" data-member="Kamath" style="width: 265px;">
            <div class="profile-image">
                <img src="assets/img/image/team/kamath.webp" alt="Dr. Vidyadhar Kamath">
            </div>
            <div class="profile-content">
                <h3 class="name">Dr. Vidyadhar Kamath</h3>
                <p class="position"> Petroleum Engineering</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>


        <!-- Syeda Zainab Rizvi -->
        <div class="profile-card wow fadeInUp" data-wow-delay="1.2s" data-member="zainab" style="width: 265px;">
            <div class="profile-image">
                <img src="assets/img/image/team/zainab.png" alt="Syeda Zainab Rizvi">
            </div>
            <div class="profile-content">
                <h3 class="name">Syeda Zainab Rizvi</h3>
                <p class="position">HR Advisor</p>
                <div class="social-link">
                    <a class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modern Popups -->
<!-- Swati Popup -->
<div class="popup-overlay" id="popup-swati">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Swati Gupta - CEO and Founder</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/ceo.png" alt="Swati Gupta" class="profile-photo">
            <p>
                Swati Gupta, our founder, brings over two decades of petroleum engineering expertise in the UK's oil
                and gas industry, specializing in storage projects. With strong skills in planning, project
                management, and reservoir simulation, she ensures robust solutions. Swati's extensive experience in
                large-scale oil and gas developments drives her transition seamlessly between traditional and
                renewable energy sectors. Passionate about renewables, she aims to elevate Rara Energy's portfolio
                in energy transition, fostering innovation and sustainability.
            </p>
            <a href="https://www.linkedin.com/in/guptaswati3/" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<div class="popup-overlay" id="popup-Kamath">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Dr. Vidyadhar Kamath - Petroleum Engineering</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/kamath.webp" alt="Dr. Vidyadhar Kamath" class="profile-photo">
            <p>
                Dr.Kamath is a reservoir engineer and has over 39 years of experience and serves as Head Petroleum Engineering in Oilmax Energy Private Limited. Prior to joining Oilmax Energy Private Limited, he was working with Reliance Industries Ltd between 2002-2013 as a Vice President in Exploration Group and Senior Advisor in the Reservoir Management Group.

He holds a Bachelor's degree in Chemical Engineering from ICT, Mumbai, 2 MS degrees (Chemical Engineering & Petroleum Engineering) and a PhD from University of Pittsburgh. During 1984-2000, he was at University of Alaska Fairbanks as a Professor of Petroleum Engineering where he also served as a Head of the Department and Director of the Petroleum Development Research Institute. He guided research of over 35 MS & PhD students and published over 100 Technical Papers in Scientific Journals.
            </p>
            <a href="https://www.linkedin.com/in/vidyadhar-kamath-80771526?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<!-- Sivakumar Popup -->
<div class="popup-overlay" id="popup-sivakumar">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Vinnavadi C Babu Sivakumar - Technical Advisor</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/babu3.jpeg" alt="Sivakumar" class="profile-photo">
            <p>
                Sivakumar is a dynamic Oil and Gas professional with over 40 years of expertise in Project
                Management, Well Completions, Sand Control, Artificial Lift & EOR/IOR, Production Operations, and
                Process engineering. He has extensive experience across India, the Middle East, and Southeast Asia.
                A Post-Graduate in Petroleum Engineering from IIT (ISM) Dhanbad, Sivakumar has presented and
                published several papers at SPE conferences on Artificial Lift, Thermal Stimulation, and Chemical
                and Bacterial well treatments. He has also trained professionals in Production Enhancement, Well
                Stimulation, Artificial Lift, Sand Control, and Well Completions.
            </p>
            <a href="https://www.linkedin.com/in/sivakumar-babu-571a6311/" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<!-- Hoda Popup -->
<div class="popup-overlay" id="popup-hoda">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Faiz Hoda - Technical Advisor</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/hoda sir.png" alt="Faiz Hoda" class="profile-photo">
            <p>
                Faiz Hoda is an independent consultant and specialist in integrated asset management and the digital
                oil field, with exceptional coding skills applied to the oil and gas industry. During his time in
                Norway, where he earned a Masters and PhD at NTNU in Trondheim, he pioneered digital solutions,
                including developing the Streamz engine, which evolved into Pipe-It and now forms part of Quorum
                Software's EC Suite. Faiz's expertise was crucial in revitalizing ADNOC's Integrated Capacity Model
                (ICM). Despite nearing retirement, his passion and drive for innovation in the industry remain
                unwavering.
            </p>
            <a href="https://www.linkedin.com/in/faiz-hoda-3424b52a/" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<!-- Andrew Popup -->
<div class="popup-overlay" id="popup-andrew">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Andrew Gibson - Advisor - Hydrogen Storage</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/andrew.jpg" alt="Andrew Gibson" class="profile-photo">
            <p>
                An experienced production and asset manager with extensive knowledge of the safe and regulatory
                compliant operation of offshore subsea gas storage and associated pipeline transmission. With over
                25 years of experience with UK oil and gas companies with major North Sea interests, Andrew possess
                a deep practical knowledge of offshore and onshore gas transmission and storage technical operations
                as part of a cost-effective corporate strategy. He has led a number of development, regulatory and
                safety compliance programmes for Centrica's offshore gas storage business which has brought him into
                contact with all the relevant UK authorities including BEIS, the Oil & Gas Authority and Ofgem.
                Andrew has undertaken and been awarded several qualifications in offshore safety assessments and
                management.
            </p>
            <a href="https://www.linkedin.com/in/andrew-d-gibson/" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<!-- Saket Popup -->
<div class="popup-overlay" id="popup-saket">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Saket Kumar - Senior Reservoir Engineer</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/sanketkumar.jpg" alt="Saket Kumar" class="profile-photo">
            <p>
                Reservoir Engineering Specialist with deep expertise in network modeling, reservoir coupling, CCUS,
                natural fracture reservoir modeling, and hydraulic fracture design and simulation. Proficient in
                delivering integrated, optimized solutions for reservoir management, with a strong track record in
                tight reservoir simulation studies, including chronological modeling, well initialization, and
                artificial lift systems such as sucker rod and ESPs. Successfully delivered production profiles for
                Field Development Plans (FDPs) and led key simulation deliverables for Asset Collaboration Studies
                (ACS). Skilled in designing advanced well completions using Inflow Control Devices (ICDs) to enhance
                deliverability and minimize water production through precise inflow behavior modeling. Experienced
                in formation pressure measurement campaigns in challenging, depleted reservoirs and supported
                dynamic reservoir characterization for exploratory wells using advanced analysis and testing
                techniques.
            </p>
            <a href="https://www.linkedin.com/in/saket-kumar-shrivastava-8746b4171/" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<!-- Zainab Popup -->
<div class="popup-overlay" id="popup-zainab">
    <div class="popup-container">
        <div class="popup-header">
            <h5 class="popup-title">Syeda Zainab Rizvi - HR Advisor</h5>
            <button class="popup-close">&times;</button>
        </div>
        <div class="popup-body">
            <img src="assets/img/image/team/zainab.png" alt="Syeda Zainab Rizvi" class="profile-photo">
            <p>
                Syeda Zainab Rizvi is a dedicated HR professional with expertise in recruitment and hiring. She
                excels in problem-solving and organizational development, aiming to optimize company performance and
                employee relations. During her time as an L&D trainee, she designed and evaluated training programs,
                enhancing employee skills and organizational effectiveness. Her experience in recruiting involved
                candidate sourcing, interviewing, and onboarding, where she developed a keen eye for talent
                acquisition and fostering a positive workplace culture. This dual exposure has equipped her with a
                versatile skill set essential for a successful HR career.
            </p>
            <a href="https://www.linkedin.com/in/syeda-zainab-rizvi-69544a88/" target="_blank" class="social-icon">
                <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
            </a>
        </div>
    </div>
</div>

<!-- JavaScript for handling popups -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all profile cards
        const profileCards = document.querySelectorAll('.profile-card');
        
        // Add click event to each card
        profileCards.forEach(card => {
            card.addEventListener('click', function() {
                const member = this.getAttribute('data-member');
                const popup = document.getElementById(`popup-${member}`);
                if (popup) {
                    popup.classList.add('active');
                    document.body.style.overflow = 'hidden'; // Prevent background scrolling
                }
            });
        });
        
        // Close button functionality
        const closeButtons = document.querySelectorAll('.popup-close');
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const popup = this.closest('.popup-overlay');
                popup.classList.remove('active');
                document.body.style.overflow = ''; // Restore scrolling
            });
        });
        
        // Close popup when clicking outside the content
        const popupOverlays = document.querySelectorAll('.popup-overlay');
        popupOverlays.forEach(overlay => {
            overlay.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                    document.body.style.overflow = ''; // Restore scrolling
                }
            });
        });
    });
</script>