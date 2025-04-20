<style>
    .profile-card {
        background: #FFFFFF;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        padding: 20px;
        max-width: 950px;
        align-items: center;
        margin: auto;
    }

    .profile-image1 {
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-image1 img {
        border-radius: 50%;
        border: 5px solid #66bb6a;
        height: 250px;
        width: 250px;
        object-fit: cover;
    }

    .profile-content {
        margin-left: 20px;
        text-align: left;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .name {
        color: #66bb6a;
        margin: 0;
        font-weight: 700;
        font-size: 24px;
    }

    .position {
        color: #777;
        margin: 5px 0 15px;
        font-size: 18px;
    }

    .description {
        line-height: 1.6;
        margin: 0;
        text-align: justify;
    }

    .title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .modal-dialog {
        max-width: 600px;
        /* Adjust width */
        height: 400px;
        /* Adjust height */
        margin: auto;
        top: 50%;
        transform: translateY(50%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        height: 100%;
        overflow-y: auto;
    }

    .modal-body p {
        font-size: 16px;
        line-height: 1.6;
        text-align: justify;
        padding: 0 15px;
    }

    .modal-title {
        font-weight: bold;
        color: #66bb6a;
    }


    @media screen and (max-width: 768px) {
        .profile-card {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .profile-content {
            margin-left: 0;
            margin-top: 15px;
            align-items: center;
        }

        .profile-image1 img {
            height: 180px;
            width: 180px;
        }

        .title {
            flex-direction: column;
            gap: 5px;
        }

        .description {
            text-align: center;
        }
    }
</style>

<!-- Team Member Cards -->
<div class="container">
    <div class="row d-flex flex-wrap align-items-center mb-4">
        <!-- Team Member Card -->
        <div class="profile-card wow fadeInUp" data-wow-delay=".2s" role="button" data-bs-toggle="modal"
            data-bs-target="#modalSwati">
            <div class="profile-image1">
                <img src="assets/img/image/team/ceo.png" alt="Swati Gupta">
            </div>
            <div class="profile-content">
                <h3 class="name">Swati Gupta</h3>
                <div class="title">
                    <p class="position">CEO and Founder</p>
                </div>
                <p class="description"> Swati Gupta, our founder, brings over two decades of petroleum engineering expertise in the...
                    <a>Read More</a>
                </p>
            </div>
        </div>

        <!-- Modal for Swati -->
        <div class="modal fade" id="modalSwati" tabindex="-1" aria-labelledby="modalSwatiLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSwatiLabel">Swati Gupta - CEO and Founder</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center">
                        <img src="assets/img/image/team/ceo.png" alt="Swati Gupta" class="rounded-circle mb-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="text-center">
                            Swati Gupta, our founder, brings over two decades of petroleum engineering expertise in the
                            UK's oil and gas industry. She has been at the forefront of sustainability efforts and
                            founded this company to bridge traditional energy and future green technologies.
                        </p>
                        <a href="https://www.linkedin.com/in/guptaswati3/" target="_blank">
                            <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex flex-wrap align-items-center mb-4">
    <div class="profile-card wow fadeInUp" data-wow-delay=".4s" role="button" data-bs-toggle="modal" data-bs-target="#modalSivakumar">
    <div class="profile-image1 col-lg-4 col-md-4 col-sm-12 col-12">
                <img src="assets/img/image/team/babu3.jpeg" alt="Vinnavadi C Babu Sivakumar">
            </div>
            <div class="profile-content col-lg-8 col-md-8 col-sm-12 col-12">
                <h3 class="name">Vinnavadi C Babu Sivakumar</h3>
                <div class="title">
                    <p class="position">Technical Advisor</p>
                    <a href="https://www.linkedin.com/in/sivakumar-babu-571a6311/" target="_blank">
                        <img height="40" src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn">
                    </a>
                </div>
                <p class="description">
                    Sivakumar is a dynamic Oil and Gas professional with over 40 years of expertise in Project
                    Management, Well Completions...                    <a>Read More</a>

                </p>
            </div>
        </div>
        <div class="modal fade" id="modalSivakumar" tabindex="-1" aria-labelledby="modalSivakumarLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSivakumarLabel">Vinnavadi C Babu Sivakumar - Technical Advisor
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center">
                        <img src="assets/img/image/team/babu3.jpeg" alt="Sivakumar" class="rounded-circle mb-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="text-center">
                            Sivakumar is a dynamic Oil and Gas professional with over 40 years of expertise in Project
                            Management, Well Completions, and Petroleum Engineering. 
                        </p>
                        <a href="https://www.linkedin.com/in/sivakumar-babu-571a6311/" target="_blank">
                            <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row d-flex flex-wrap align-items-center mb-4">
        <div class="profile-card wow fadeInUp" data-wow-delay=".6s" role="button" data-bs-toggle="modal"
            data-bs-target="#modalHoda">
            <div class="profile-image1 col-lg-4 col-md-4 col-sm-12 col-12">
                <img src="assets/img/image/team/hoda sir.png" alt="Faiz Hoda">
            </div>
            <div class="profile-content col-lg-8 col-md-8 col-sm-12 col-12">
                <h3 class="name">Faiz Hoda</h3>
                <div class="title">
                    <p class="position">Technical Advisor</p>
                    <a href="https://www.linkedin.com/in/faiz-hoda-3424b52a/" target="_blank">
                        <img height="40" src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn">
                    </a>
                </div>
                <p class="description">
                    Faiz Hoda is an independent consultant and specialist in integrated asset management and the digital
                    oil field...                    <a>Read More</a>

                </p>
            </div>
        </div>
        <div class="modal fade" id="modalHoda" tabindex="-1" aria-labelledby="modalHodaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHodaLabel">Faiz Hoda - Technical Advisor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center">
                        <img src="assets/img/image/team/hoda sir.png" alt="Faiz Hoda" class="rounded-circle mb-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="text-center">
                            Faiz Hoda is a consultant with deep experience in integrated asset management and digital
                            oil fields.
                        </p>
                        <a href="https://www.linkedin.com/in/faiz-hoda-3424b52a/" target="_blank">
                            <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row d-flex flex-wrap align-items-center mb-4">
        <div class="profile-card wow fadeInUp" data-wow-delay=".8s" role="button" data-bs-toggle="modal"
            data-bs-target="#modalAndrew">
            <div class="profile-image1 col-lg-4 col-md-4 col-sm-12 col-12">
                <img src="assets/img/image/team/andrew.jpg" alt="Andrew Gibson">
            </div>
            <div class="profile-content col-lg-8 col-md-8 col-sm-12 col-12">
                <h3 class="name">Andrew Gibson</h3>
                <div class="title">
                    <p class="position">Advisor - Hydrogen Storage</p>
                    <a href="https://www.linkedin.com/in/andrew-d-gibson/" target="_blank">
                        <img height="40" src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn">
                    </a>
                </div>
                <p class="description">
                    An experienced production and asset manager with extensive knowledge of the safe and regulatory
                    compliant operation...                    <a>Read More</a>

                </p>
            </div>
        </div>
        <div class="modal fade" id="modalAndrew" tabindex="-1" aria-labelledby="modalAndrewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAndrewLabel">Andrew Gibson - Advisor - Hydrogen Storage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center">
                        <img src="assets/img/image/team/andrew.jpg" alt="Andrew Gibson" class="rounded-circle mb-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="text-center">
                            Andrew brings expertise in asset management and hydrogen storage technologies, focusing on
                            safety and compliance.
                        </p>
                        <a href="https://www.linkedin.com/in/andrew-d-gibson/" target="_blank">
                            <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row d-flex flex-wrap align-items-center mb-4">
        <div class="profile-card wow fadeInUp" data-wow-delay="1s" role="button" data-bs-toggle="modal"
            data-bs-target="#modalZainab">

            <div class="profile-image1 col-lg-4 col-md-4 col-sm-12 col-12">
                <img src="assets/img/image/team/zainab.png" alt="Syeda Zainab Rizvi">
            </div>
            <div class="profile-content col-lg-8 col-md-8 col-sm-12 col-12">
                <h3 class="name">Syeda Zainab Rizvi</h3>
                <div class="title">
                    <p class="position">HR Advisor</p>
                    <a href="https://www.linkedin.com/in/syeda-zainab-rizvi-69544a88/" target="_blank">
                        <img height="40" src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn">
                    </a>
                </div>
                <p class="description">
                    Syeda Zainab Rizvi is a dedicated HR professional with expertise in recruitment and hiring...                    <a>Read More</a>

                </p>
            </div>
        </div>
        <div class="modal fade" id="modalZainab" tabindex="-1" aria-labelledby="modalZainabLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalZainabLabel">Syeda Zainab Rizvi - HR Advisor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column align-items-center">
                        <img src="assets/img/image/team/zainab.png" alt="Syeda Zainab Rizvi" class="rounded-circle mb-3"
                            style="width: 150px; height: 150px; object-fit: cover;">
                        <p class="text-center">
                            Zainab is a highly capable HR professional with significant experience in hiring,
                            recruitment, and HR strategy development.
                        </p>
                        <a href="https://www.linkedin.com/in/syeda-zainab-rizvi-69544a88/" target="_blank">
                            <img src="assets/img/icon/icons8-linkedin.svg" alt="LinkedIn" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>