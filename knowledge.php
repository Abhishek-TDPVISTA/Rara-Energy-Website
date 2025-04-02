<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Prevent content from breaking inside these elements */
#content-to-download {
        page-break-inside: avoid;
    }

    h2,
    p {
        page-break-inside: avoid;
    }


    .knowledgecard {
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #ADD8E6;
        /* light blue background color */
        padding: 20px;
        /* added padding to all cards */
        border-radius: 10px;
    }

    @media (max-width: 720px) {
        .imgcards {
            margin-bottom: 70px;
        }
    }
</style>


<div class="breadcroumb-area bread-bg" style="background-image: url(assets/bg_images/know.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title">
                    <h1>Knowledge Portal</h1>
                    <h6><a href="index.php">Home</a> <i class="far fa-dot-circle"></i> Knowledge Portal</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="blog-page" class="blog-section section-padding">
    <style>
        #blog-page {
            overflow: hidden !important;
        }
    </style>
    <div class="">
        <div class="" data-wow-delay=".3s">
            <div class="col-lg-24 d-flex justify-content-center">
                <div class="single-blog-item">
                    <div class="blog-content">
                        <div class="d-flex justify-content-between">
                            <!-- <p class="blog-meta">
                                <span class="mr-3"><i class="far fa-user-circle"></i>Open</span>
                                <span> <i class="far fa-calendar-alt"></i>20 FEB, 2024</span>
                            </p> -->
                        </div>

                        <style>
                            .hidden {
                                display: none;
                            }
                        </style>

                        <div class="blog-container d-flex justify-content-center align-items-start min-vh-50 bg-light">
                            <div
                                class="container d-flex flex-column flex-lg-row bg-white shadow-lg rounded overflow-hidden min-vh-50">

                                <style>
                                    @media (max-width: 980px) {
                                        /* .Blog-heading{
                                                display: block;
                                            } */
                                        /* .Blog-heading2{
                                                display: block;
                                            } */
                                    }
                                </style>



                                <style>
                                    .list-item {
                                        transition: 400ms;
                                    }

                                    .list-item:hover {
                                        transform: scale(1.05, 1.05);
                                        background-color: #70c150;
                                    }

                                    .d-flex:hover>.list-item:not(:hover) {
                                        /* filter: blur(5px); */
                                        transform: scale(0.9, 0.9);
                                    }

                                    .listknowledge li {
                                        /* background-color: #70c150; */
                                        color: black;
                                    }

                                    .listknowledge {
                                        gap: 10px !important;
                                    }

                                    @media (max-width: 1000px) {
                                        .blog-container {
                                            width: 100% !important;
                                            border-right: none !important;
                                            display: flex !important;
                                            ;
                                            align-items: center;
                                            justify-content: center;
                                        }
                                    }

                                    @media (max-width: 1000px) {
                                        .list-item {
                                            width: 135px !important;

                                            margin-top: 0 !important;
                                        }
                                    }

                                    @media (max-width: 430px) {
                                        .list-item {
                                            width: 125px !important;

                                            margin-top: 0 !important;
                                        }
                                    }
                                </style>
                                <div class="blog-container w-25 border-right text-white d-md-block d-block">



                                    <ul class="listknowledge">

                                        <style>
                                            @media (max-width: 600px) {
                                                .list-item {
                                                    width: 100% !important;
                                                    display: flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    margin-bottom: 100px !important;
                                                }
                                            }

                                            @media (max-width: 500px) {
                                                .list-item {
                                                    margin-top: 20px !important;
                                                    width: 200px !important;
                                                }

                                                .listknowledge {
                                                    /* margin-bottom: 20px; */
                                                    font-size: 8px !important;
                                                }
                                            }

                                            .card:hover .heading {
                                                color: #70c150 !important;
                                                transition: all 0.3s;
                                            }

                                            .heading .hidden {
                                                display: block;
                                                opacity: 0;
                                                transform: translateY(20px);
                                                transition: opacity 0.3s, transform 0.3s;
                                            }

                                            .card:hover .heading .hidden {
                                                opacity: 1;
                                                transform: translateY(0);
                                                text-decoration: underline;
                                            }
                                        </style>

                                        <h2 style="color:#70c150; font-size:30px; font-weight:700;"
                                            class="Blog-heading2 py-4 text-center">Blog List</h2>

                                        <li class="list-item"
                                            style="width: 230px; height: 80px; border-radius: 10px; margin-bottom: 20px; cursor: pointer;"
                                            onclick="showBlog('blog1')">
                                            <div class="card">
                                                <img src="assets/img/raraFac2.jpeg" alt="Blog 1 Image"
                                                    class="card-img-top"
                                                    style="height: 70px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px; object-position: bottom;">
                                                <div class="card-body">
                                                    <h6 class="heading   text-center">Subsurface Hydrogen Storage
                                                        <br> <span class="hidden">view</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </li>


                                        <li class="list-item"
                                            style="width: 230px; margin-top: 80px; height: 100px; border-radius: 10px; cursor: pointer;"
                                            onclick="showBlog('blog2')">
                                            <div class="card imgcards">
                                                <img src="assets/img/raraFac.jpeg" alt="Blog 1 Image"
                                                    class="card-img-top"
                                                    style="height: 70px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">

                                                <div class="card-body">
                                                    <h6 class="heading   text-center">CCUS in Malaysia<br><span
                                                            class="hidden">view</span> </h6>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-item"
                                            style="width: 230px; margin-top: 80px; height: 100px; border-radius: 10px; cursor: pointer; margin-bottom: 70px;"
                                            onclick="showBlog('blog3')">
                                            <div class="card">
                                                <img src="assets/img/raraFac.jpeg" alt="Blog 1 Image"
                                                    class="card-img-top"
                                                    style="height: 70px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                <div class="card-body">
                                                    <h6 class="heading   text-center">CCUS In Indonesia<br><span
                                                            class="hidden">view</span> </h6>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>



                                </div>
                                <div class="w-100 w-lg-75 p-4">


                                    <div id="blog1" class="blog mt-4">
                                        <style>
                                            @media (max-width: 600px) {
                                                #blog1 {
                                                    width: 210px;
                                                    /* height: 550px; */
                                                    overflow: hidden;
                                                }

                                                .googleSlideshow iframe {
                                                    width: 300px !important;
                                                    height: calc(100% + 29px);
                                                }
                                            }
                                        </style>
                                        <div id="content-to-download" style="padding: 15px;">
                                            <h2 class="text-center font-bold mb-4"><strong>Subsurface Hydrogen
                                                    Storage</strong></h2>



                                            <h3><strong>Overview</strong></h3>
                                            <p class="">Hydrogen is a clean fuel that can help cut down on greenhouse
                                                gas emissions and support sustainable energy systems. However, storing
                                                hydrogen is tricky because it has a low energy density and is highly
                                                flammable. We need effective storage solutions to keep a steady supply
                                                of hydrogen for uses like transportation and power generation.
                                                Underground storage in depleted fields and salt caverns offers unique
                                                benefits, including large storage capacity and increased safety.</p>

                                            <img class="w-100 py-4" src="assets/img/raraFac2.jpeg" alt="">

                                            <div class="container ">
                                                <div class="section py-2">
                                                    <h5 class="my-2"><strong>1. Depleted Fields for Hydrogen
                                                            Storage</strong></h5> <br>
                                                    <p class="">Depleted fields, formerly used for oil and gas
                                                        extraction, offer an excellent opportunity for hydrogen storage.
                                                        These fields possess pre-existing infrastructure and geological
                                                        characteristics suitable for storing hydrogen. The key
                                                        advantages of using depleted fields include:</p>

                                                    <p class=""><i class="ri-arrow-right-s-line"></i><strong>Utilization
                                                            of Existing Infrastructure:</strong> Leveraging the existing
                                                        wells and pipelines reduces the need for new construction,
                                                        lowering costs and environmental impact.</p> <br>
                                                    <p class=""><i class="ri-arrow-right-s-line"></i><strong>Large
                                                            Storage Capacity:</strong> Depleted fields offer vast
                                                        underground spaces capable of storing significant volumes of
                                                        hydrogen.</p> <br>
                                                    <p class=""><i class="ri-arrow-right-s-line"></i> <strong>Enhanced
                                                            Safety:</strong> The geological characteristics of depleted
                                                        fields provide a natural barrier, minimizing the risk of
                                                        hydrogen leakage.</p> <br> <br>

                                                    <div class="container mt-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="assets/img/raraFac.jpeg"
                                                                    class="img-fluid rounded mx-auto d-block"
                                                                    alt="Styled Image">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="">
                                                                    Technical aspects of converting depleted fields for
                                                                    hydrogen storage involve assessing the reservoir's
                                                                    integrity, modifying injection and withdrawal
                                                                    processes, and ensuring compatibility with
                                                                    hydrogen's properties. Successful projects, such as
                                                                    the subsurface hydrogen storage initiatives in
                                                                    Europe, demonstrate the feasibility and benefits of
                                                                    this approach.
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="section blogData">
                                                    <h3 class="my-2"><strong>2. Aquifers for Hydrogen Storage</strong>
                                                    </h3>
                                                    <p class="">Aquifers are the second-most economically attractive
                                                        option for geological hydrogen storage after depleted oil and
                                                        gas reservoirs. For a successful storage project, a reasonably
                                                        high recovery of stored hydrogen is projected. Aquifers
                                                        represent the most environmentally friendly type of underground
                                                        storage and are sometimes the only accessible geological
                                                        formations for hydrogen storage.</p>
                                                    <p class="><strong>Why Saline Aquifers?</strong></p> <br>
                                                    <p class="" style=" text-align: justify;">Saline aquifers offer a
                                                        significant opportunity for cost-effective long-term hydrogen
                                                        storage due to their geographical accessibilities and storage
                                                        capacities. Saline aquifers are distributed worldwide and offer
                                                        higher storage capacity (hundreds of millions of standard cubic
                                                        meters) compared to depleted oil and gas reservoirs. There is
                                                        extensive research and field experience with natural gas storage
                                                        and carbon capture and storage (CCS) operations in saline
                                                        aquifers. Saline aquifers host most of the current natural gas
                                                        geological storage operations in the world. Previous experiences
                                                        in gas storage operations in saline aquifers provide significant
                                                        hydrogeological and geological information required to evaluate
                                                        the potential for underground hydrogen storage. Therefore,
                                                        saline aquifers provide a unique opportunity for worldwide
                                                        large-scale geological storage of hydrogen.</p> <br>
                                                    <p class="" style="text-align: justify;">A suitable aquifer for
                                                        hydrogen storage should have ample porosity and high
                                                        permeability with an existing formation pressure. In addition,
                                                        the potential aquifer must have impervious caprock, ensuring the
                                                        confinement of the injected gas.</p>
                                                    <h3><strong>Challenges</strong></h3>
                                                    <ul>
                                                        <p class="" style="text-align: justify;">One anticipated problem
                                                            with hydrogen storage in aquifers is the high demand for
                                                            cushion gas, compared to depleted gas reservoirs where the
                                                            naturally occurring gas remaining in the reservoir can
                                                            constitute a significant portion of the gas cushion.</p>
                                                        <br>
                                                        <p class="" style="text-align: justify;">The uncertainty in
                                                            geological characteristics is one of the main challenges for
                                                            large-scale implementation of hydrogen storage in saline
                                                            aquifers. Comprehensive studies on geologic characteristics
                                                            are required to accurately assess the suitability, storage
                                                            capacity, and trapping capability of the target aquifer.</p>
                                                        <br>
                                                        <div class="container mt-4">
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <p class="  " style="text-align: justify;">
                                                                        Hydrogen contamination with the products of
                                                                        hydrogen conversion such as CH4 and H2S is the
                                                                        other important consideration in active
                                                                        microbial environments. Microbial activities in
                                                                        a highly populated microorganism environment can
                                                                        lead to the formation of biofilms, which may
                                                                        impact the petrophysical characteristics of the
                                                                        storage formation, sealing caprock, and
                                                                        subsequently the subsurface transport
                                                                        properties.
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <img src="assets/img/rareStore.jpeg"
                                                                        class="img-fluid rounded mx-auto d-block"
                                                                        alt="Styled Image">
                                                                </div>

                                                            </div>
                                                        </div><br>
                                                    </ul>


                                                    <!-- <div class="row">
                                                    <div class="col-12 col-md-6 offset-md-3">
                                                        <img src="assets/img/rareStore.jpeg" class="img-fluid rounded mx-auto d-block" alt="Styled Image">
                                                    </div>
                                                </div> -->

                                                    <!-- <img src="" alt=""> -->
                                                </div>

                                                <div class="section">
                                                    <h3 class="my-2"><strong>3. Salt Caverns for Hydrogen
                                                            Storage</strong></h3>
                                                    <p class="">Salt caverns, formed through the natural dissolution of
                                                        salt deposits, provide another promising option for hydrogen
                                                        storage. These caverns offer unique advantages:</p>
                                                    <ul>
                                                        <p class=""><i class="ri-arrow-right-s-line"></i><strong>High
                                                                Purity and Stability: </strong>The salt formation
                                                            ensures a high-purity storage environment with minimal risk
                                                            of contamination.</p> <br>
                                                        <p class=""><i
                                                                class="ri-arrow-right-s-line"></i><strong>Flexibility
                                                                and Scalability:</strong> Salt caverns can be engineered
                                                            to various sizes, accommodating different storage needs and
                                                            scaling up as demand increases.</p> <br>
                                                        <p class=""><i
                                                                class="ri-arrow-right-s-line"></i><strong>Excellent
                                                                Sealing Properties:</strong> The self-healing nature of
                                                            salt makes caverns highly resistant to gas leakage, ensuring
                                                            safe and secure hydrogen storage.</li> <br>
                                                    </ul>
                                                    <p class="">Developing salt caverns for hydrogen storage involves
                                                        creating and managing the caverns' structure, ensuring the
                                                        integrity of the storage site, and monitoring for potential
                                                        environmental impacts. Successful examples, such as the hydrogen
                                                        storage projects in Texas, highlight the viability and
                                                        effectiveness of salt caverns in meeting large-scale hydrogen
                                                        storage needs.</p>

                                                    <h5><strong>Technical and Environmental Considerations</strong></h5>
                                                    <p class="">Ensuring the safety and environmental sustainability of
                                                        underground hydrogen storage is paramount. Key considerations
                                                        include:</p>
                                                    <ul>
                                                        <p class=""><i class="ri-arrow-right-s-line"></i><strong>Safety
                                                                Measures:</strong> Implementing robust safety protocols
                                                            to prevent hydrogen leaks and explosions.</li> <br>
                                                        <p class=""><i
                                                                class="ri-arrow-right-s-line"></i><strong>Environmental
                                                                Impact:</strong> Assessing and mitigating potential
                                                            environmental impacts, such as groundwater contamination and
                                                            land subsidence.</li> <br>
                                                        <p class=""><i
                                                                class="ri-arrow-right-s-line"></i><strong>Regulatory
                                                                Compliance:</strong> Adhering to local and international
                                                            regulations governing underground gas storage.</li> <br>
                                                        <p class=""><i
                                                                class="ri-arrow-right-s-line"></i><strong>Sustainability:</strong>
                                                            Evaluating the long-term sustainability and resilience of
                                                            storage sites to ensure they remain viable for future use.
                                                            </li> <br>
                                                    </ul>

                                                    <h5 class="my-2"><i
                                                            class="ri-arrow-right-s-line"></i><strong>Innovations and
                                                            Future Trends</strong></h5>
                                                    <p class="">The field of hydrogen storage is evolving rapidly, with
                                                        continuous advancements in technology and techniques. Emerging
                                                        trends include:</p>
                                                    <ul>
                                                        <p class="  "><i
                                                                class="ri-arrow-right-s-line"></i><strong>Advanced
                                                                Materials:</strong> Developing materials with improved
                                                            hydrogen absorption and storage capacities.</p>
                                                        <p class="  "><i
                                                                class="ri-arrow-right-s-line"></i><strong>Digital
                                                                Monitoring:</strong> Utilizing digital technologies and
                                                            sensors for real-time monitoring and management of storage
                                                            sites.</li> <br>
                                                        <p class="  "><i
                                                                class="ri-arrow-right-s-line"></i><strong>Integrated
                                                                Energy Systems:</strong> Exploring the integration of
                                                            hydrogen storage with renewable energy sources like wind and
                                                            solar for a more resilient energy grid.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <img src="assets/img/raraFac3.jpeg" alt="">


                                            <div class="container mt-4">
                                                <h3 style="font-size: 30px;" class="py-2">Common Myths Regarding
                                                    Subsurface Hydrogen Storage</h3>
                                                <ul class="list-group">
                                                    <style>
                                                        ul li {
                                                            font-size: 20px;
                                                            text-decoration: solid !important;
                                                        }
                                                    </style>
                                                    <p class="  " class="list-group-item d-flex justify-content-center">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong>
                                                        Hydrogen will quickly leak out of storage sites.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong>
                                                        Although hydrogen molecules are small and can diffuse through
                                                        certain materials, properly selected and well-characterized
                                                        geological formations, such as saline aquifers with impermeable
                                                        caprocks, can effectively contain hydrogen. Advanced sealing and
                                                        monitoring technologies also mitigate leakage risks.
                                                    </p> <br><br>
                                                    <p class="" class="list-group-item">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong>
                                                        Subsurface hydrogen storage is too expensive to be practical.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong>
                                                        While initial costs for developing storage infrastructure can be
                                                        high, economies of scale and technological advancements are
                                                        reducing these costs. Additionally, the long-term benefits of
                                                        large-scale hydrogen storage, such as energy security and grid
                                                        stability, can outweigh initial investments.
                                                        </li>
                                                    <p class="" class="list-group-item">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong>
                                                        Subsurface hydrogen storage is a completely new and untested
                                                        concept.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong>
                                                        The concept of storing gases underground is well-established,
                                                        with decades of experience in natural gas storage. While
                                                        hydrogen has unique properties, research and pilot projects are
                                                        continuously advancing our understanding and capabilities in
                                                        this area.
                                                    </p>
                                                    <p class="" class="list-group-item">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong>
                                                        Subsurface hydrogen storage is not needed due to advancements in
                                                        other storage technologies.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong>
                                                        While battery and other storage technologies are advancing,
                                                        hydrogen storage offers unique advantages, particularly for
                                                        long-term and large-scale energy storage. It complements other
                                                        storage solutions and plays a crucial role in a diversified
                                                        energy storage strategy.
                                                        </li>
                                                </ul>
                                                <p class="mt-4">
                                                    Rara Energy Consulting is at the forefront of these innovations,
                                                    actively participating in research and development initiatives to
                                                    push the boundaries of what's possible in hydrogen storage.
                                                </p>
                                                <p class="">
                                                    At Rara Energy Consulting, we pride ourselves on our expertise in
                                                    hydrogen storage solutions. Our team has successfully executed
                                                    numerous projects, showcasing our ability to deliver safe,
                                                    efficient, and sustainable storage solutions. From advanced modeling
                                                    techniques to optimize storage capacities to ensuring regulatory
                                                    compliance, our comprehensive approach ensures the highest standards
                                                    of safety and performance.
                                                </p>
                                                <p class="">
                                                    Hydrogen storage is essential for the renewable energy landscape,
                                                    paving the way for a cleaner and more sustainable future. Storing
                                                    hydrogen underground in depleted fields and salt caverns offers a
                                                    strong and scalable solution to meet the increasing demand. Using
                                                    these methods, we can maintain a reliable and efficient supply of
                                                    hydrogen, helping to drive the shift to a greener energy system.
                                                </p>
                                            </div>

                                        </div>

                                        <div class="row d-flex justify-content-center align-items-center">
                                            <button class="btn btn-success" id="download-btn">Download as PDF <i
                                                    class="ri-file-pdf-2-fill fa-1x"></i></button>
                                        </div>

                                    </div>

                                    <div id="blog2" class="blog blogData d-none ">
                                        <style>
                                            @media (max-width: 600px) {
                                                #blog2 {
                                                    width: 210px;
                                                    /* height: 550px; */
                                                    overflow: hidden;
                                                }

                                                .googleSlideshow iframe {
                                                    width: 300px !important;
                                                    height: calc(100% + 29px);
                                                }

                                                .blogData p {
                                                    text-align: justify;
                                                }
                                            }
                                        </style>
                                        <div id="content-to-download2" class="blogData" style="padding: 15px;">
                                            <h2 class="text-center font-bold mb-4"><strong>Malaysia’s Current Energy
                                                    Mix</strong></h2>
                                            <img class="w-100 py-4" src="assets/img/knowledge/malaysiya_blog/1.png"
                                                alt="">
                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    continue to contribute the largest share (~95%) of Malaysia’s energy
                                                    supply and have a significant influence in shaping the country’s
                                                    energy landscape.
                                                    </p>
                                                <li>As of 2020, four energy sources dominated the national total primary
                                                    energy supply (TPES) mix. </li>
                                                <li>Natural gas constituted the largest portion at 42.4%, followed by
                                                    crude oil and petroleum products at 27.3% and coal at 26.4%.</li>
                                                <li>Renewables, comprising hydropower, solar and bioenergy, constituted
                                                    just a mere 3.9%.</li>
                                            </ol>
                                            <h3><strong>Malaysia’s Storage Potential</strong></h3>
                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/malaysiya_blog/Picture2.jpg" alt="not found">
                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    Malaysia has significant potential for carbon capture, largely due
                                                    to the nearing end of life for several oil and gas fields. According
                                                    to data from Malaysia Petroleum Management (MPM),<strong> the
                                                        country’s 16 depleted oil fields have a carbon storage capacity
                                                        exceeding 240 million tonnes</strong>.
                                                </li>
                                                <li>Coupled with local expertise and policy support, Malaysia is poised
                                                    to become a transnational carbon storage hub for major markets like
                                                    Australia and Japan.</li>
                                                <li>Estimates place Malaysia’s <strong>total offshore CO2 storage
                                                        potential at 500 metric tonnes</strong>, presenting the
                                                    possibility for the development of more projects like Kasawari</li>
                                                <li>Eleven of these 16 potential CCS sites are at fields offshore
                                                    Sarawak while the other five are located offshore Peninsular
                                                    Malaysia.</li>
                                                <li>In addition to offering storage solutions for domestic projects,
                                                    Malaysia will make its excess storage capacity available to third
                                                    parties, thereby establishing the nation as a regional CCS
                                                    hub.<strong>Sixty% of the storage capacity will be allocated to
                                                        Malaysia for Petronas and partners while the remaining 40% will
                                                        be made available to other countries.</strong></li>
                                            </ol>


                                            <h2 class="text-center font-bold mb-4"><strong>Projects</strong></h2>
                                            <h3><strong>Lang Lebah Gas Field CCUS Project (PTTEP)</strong></h3>
                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/malaysiya_blog/Picture4.png" alt="">

                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    The Lang Lebah gas field is located in block SK410B, 90km off the
                                                    coast of Miri, Sarawak, Malaysia. It is the largest gas discovery
                                                    near Malaysia, made by PTT Exploration and Production Public Company
                                                    (PTTEP), a wholly owned subsidiary of the Petroleum Authority of
                                                    Thailand (PTT).
                                                </li>
                                                <li>
                                                    The Lang Lebah field is expected to come on stream in 2027 and will
                                                    produce up to one billion cubic feet (Bcf) of gas per day. The field
                                                    is estimated to hold five trillion cubic feet (Tcf) of gas in place.
                                                    This project will also involve the removal of hydrogen sulphide
                                                    (H2S) in addition to CO2.
                                                </li>
                                                <li>
                                                    Produced gas from Lang Lebah will flow via pipeline to an onshore
                                                    processing plant dubbed OGP-2, and the extracted CO2 will then be
                                                    piped back offshore for injection at the depleted Golok field.
                                                </li>
                                            </ol>


                                            <h3><strong>Kasawari Carbon Capture and Storage Project (PETRONAS)</strong>
                                            </h3>
                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/malaysiya_blog/Picture5.jpg" alt="">
                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    The Kasawari gas field is estimated to contain 3.2 trillion cubic
                                                    feet (tcf) of natural gas resources. It is expected to produce 900
                                                    million standard cubic feet per day (mmscfd) of gas and 3.5 million
                                                    barrels of condensate per day, with production commencing in 2023.
                                                </li>
                                                <li>
                                                    Petronas reached a final investment decision (FID) for the
                                                    development of the Kasawari carbon capture and storage (CCS) project
                                                    in November 2022. The CCS project is expected to capture up to 3.3
                                                    million tons (Mt) of carbon dioxide equivalent emitted by flaring at
                                                    the gas field each year.
                                                </li>
                                                <li>
                                                    For Petronas Carigali’s Kasawari phase 2 project, the nation’s
                                                    maiden CCS development, the extracted and compressed carbon dioxide
                                                    will flow approximately 135 kilometers via a pipeline to the M1
                                                    field, where it will be injected into a depleted reservoir.
                                                </li>
                                                <li>
                                                    Malaysia’s national oil company claims that Kasawari will be the
                                                    largest offshore CCS project in the world when it starts, with 4
                                                    million tonnes of carbon dioxide to be captured annually. A total of
                                                    76 million tonnes of CO2 from Kasawari will ultimately be injected
                                                    at the M1 field, with the first injection targeted for the fourth
                                                    quarter of 2025.
                                                </li>
                                            </ol>

                                            <div class="text-black ">
                                                <h3 class=""><strong>Major Collaborations Signed</strong></h3>
                                                <h3><strong>Kasawari Carbon Capture and Storage Project
                                                        (PETRONAS)</strong></h3>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p class=" "><strong>SHELL:</strong> Anglo-Dutch supermajor
                                                            Shell is teaming up with Malaysian state-run giant Petronas
                                                            to explore potential carbon capture and storage (CCS)
                                                            opportunities in Malaysia. Petronas confirmed on Tuesday
                                                            that it had signed a joint study and collaboration agreement
                                                            with Sarawak Shell to explore CCS opportunities and project
                                                            collaborations.</p>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/img/knowledge/malaysiya_blog/Picture6.png"
                                                            class="w-100 py-10" alt="Styled Image">

                                                    </div>
                                                </div>

                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-md-8">
                                                        <p class=" "><strong>Japan Petroleum Exploration:</strong>
                                                            Malaysian state-run oil giant Petronas has partnered with
                                                            Japan Petroleum Exploration (Japex) to pursue carbon capture
                                                            and storage (CCS) opportunities. The pair signed a
                                                            memorandum of understanding late last week that will see the
                                                            two companies carry out technical maturation activities to
                                                            unlock potential CCS solutions, including suitable carbon
                                                            dioxide storage locations in Malaysia.Petronas is hoping to
                                                            leverage Japex’s experience with the Tomakomai CCS
                                                            Demonstration Project in Hokkaido, Japan. Tomakomai is
                                                            Japan’s first full-chain CCS project that captured roughly
                                                            100,000 tonnes of CO2 per annum from a coastal oil refinery
                                                            from 2016-2019 and stored it in two nearby offshore saline
                                                            aquifers for storage and monitoring.

                                                        </p>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/img/knowledge/malaysiya_blog/Picture7.png"
                                                            alt="Styled Image">

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p class=" "><strong>Exxonmobil: </strong>Malaysian national oil
                                                            company Petronas has signed an agreement with ExxonMobil to
                                                            jointly explore carbon capture and storage (CCS)
                                                            technologies to help decarbonise Malaysia’s upstream
                                                            industry and to provide carbon dioxide storage solutions for
                                                            the region.</p>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/img/knowledge/malaysiya_blog/Picture8.jpg"
                                                            class="w-100 py-10" alt="Styled Image">

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p class=" "><strong>Posco International:</strong> Malaysian
                                                            state oil company Petronas has initialled a memorandum of
                                                            understanding (MoU) with a pair of South Korean steel
                                                            companies to explore opportunities in carbon capture and
                                                            storage technologies as well as carbon dioxide storage
                                                            solutions in Malaysia. According to Petronas, the MoU with
                                                            Posco International Corporation and Posco Engineering &
                                                            Construction will see the trio "assess opportunities to
                                                            unlock CCS potential and identify suitable technology within
                                                            the scope of carbon capture, transportation of CO2 and
                                                            storage for potential application.

                                                        </p>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/img/knowledge/malaysiya_blog/Picture9.png"
                                                            class="w-100 py-10" alt="Styled Image">

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="d-flex">
                                                <img src="assets/img/knowledge/malaysiya_blog/Picture10.png"
                                                    class="w-50 py-10" alt="Styled Image">
                                                <img src="assets/img/knowledge/malaysiya_blog/Picture11.png"
                                                    class="w-50 py-10" alt="Styled Image">
                                            </div>

                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    Asia–Pacific could account for 55 percent of global carbon capture,
                                                    utilization, and storage by 2050
                                                </li>
                                                <li>
                                                    However, unlocking CCUS potential in Asia–Pacific is not an easy
                                                    task. To realize its potential, the region needs to deliver
                                                    exponential growth: at least 450 times its current operational CCUS
                                                    projects. It is also characterized by inequitable access to viable
                                                    domestic underground storage, and varying levels of regulatory
                                                    maturity.
                                                </li>
                                                <li>
                                                    The costs in Asia-Pacific are comparable to global benchmarks at the
                                                    capture stage, and the rest of the CCUS value chain is even more
                                                    cost-efficient. Most significantly, costs at the storage stage are
                                                    estimated to be 65 percent lower than the global average
                                                </li>
                                                <li>
                                                    The Asia–Pacific region faces significant challenges in scaling up
                                                    Carbon Capture, Utilization, and Storage (CCUS):
                                                </li>
                                                <li>
                                                    <strong>Access to Sequestration Sites:</strong> Major industrial
                                                    emitters in Japan, Korea, Taiwan, and Singapore, with combined
                                                    annual CO2 emissions of 840 million tons, lack nearby viable sites
                                                    for CO2 storage.
                                                </li>
                                                <li>
                                                    <strong>Regulatory Support:</strong> The region scores an average of
                                                    34 on the Global CCS Institute readiness index, behind Europe (41)
                                                    and North America (71). More comprehensive government policies and
                                                    regulations are needed for effective CCUS deployment.
                                                </li>
                                                <li>
                                                    <strong>Technical Expertise: </strong> Outside the oil and gas
                                                    sector, technical understanding of CCUS is low. The region lacks
                                                    sufficient pilot and operational projects to demonstrate
                                                    technological readiness and de-risking processes.
                                                </li>
                                                <li>
                                                    These challenges are why the Asia–Pacific region is not technically
                                                    ready for CCUS at the same level as North America and Europe.
                                                </li>
                                            </ol>

                                            <!-- <div class="container ">
                                                <div class="section py-2">
                                                    <h5 class="my-2 text-center"><strong>Projects</strong></h5><br>
                                                    <p class="  ">Depleted fields, formerly used for oil and gas extraction, offer an excellent opportunity for hydrogen storage. These fields possess pre-existing infrastructure and geological characteristics suitable for storing hydrogen. The key advantages of using depleted fields include:</p>

                                                    <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Utilization of Existing Infrastructure:</strong> Leveraging the existing wells and pipelines reduces the need for new construction, lowering costs and environmental impact.</p> <br>
                                                    <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Large Storage Capacity:</strong> Depleted fields offer vast underground spaces capable of storing significant volumes of hydrogen.</p> <br>
                                                    <p class="  "><i class="ri-arrow-right-s-line"></i> <strong>Enhanced Safety:</strong> The geological characteristics of depleted fields provide a natural barrier, minimizing the risk of hydrogen leakage.</p> <br> <br>

                                                    <div class="container mt-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="assets/img/raraFac.jpeg" class="img-fluid rounded mx-auto d-block" alt="Styled Image">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="  ">
                                                                    Technical aspects of converting depleted fields for hydrogen storage involve assessing the reservoir's integrity, modifying injection and withdrawal processes, and ensuring compatibility with hydrogen's properties. Successful projects, such as the subsurface hydrogen storage initiatives in Europe, demonstrate the feasibility and benefits of this approach.
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="section">
                                                    <h3 class="my-2"><strong>2. Aquifers for Hydrogen Storage</strong></h3>
                                                    <p class="  ">Aquifers are the second-most economically attractive option for geological hydrogen storage after depleted oil and gas reservoirs. For a successful storage project, a reasonably high recovery of stored hydrogen is projected. Aquifers represent the most environmentally friendly type of underground storage and are sometimes the only accessible geological formations for hydrogen storage.</p>
                                                    <h3 class="  "><strong>Why Saline Aquifers?</strong></h3> <br>
                                                    <p class="  ">Saline aquifers offer a significant opportunity for cost-effective long-term hydrogen storage due to their geographical accessibilities and storage capacities. Saline aquifers are distributed worldwide and offer higher storage capacity (hundreds of millions of standard cubic meters) compared to depleted oil and gas reservoirs. There is extensive research and field experience with natural gas storage and carbon capture and storage (CCS) operations in saline aquifers. Saline aquifers host most of the current natural gas geological storage operations in the world. Previous experiences in gas storage operations in saline aquifers provide significant hydrogeological and geological information required to evaluate the potential for underground hydrogen storage. Therefore, saline aquifers provide a unique opportunity for worldwide large-scale geological storage of hydrogen.</p> <br>
                                                    <p class="  ">A suitable aquifer for hydrogen storage should have ample porosity and high permeability with an existing formation pressure. In addition, the potential aquifer must have impervious caprock, ensuring the confinement of the injected gas.</p>
                                                    <h3><strong>Challenges</strong></h3>
                                                    <ul>
                                                        <p class="  ">One anticipated problem with hydrogen storage in aquifers is the high demand for cushion gas, compared to depleted gas reservoirs where the naturally occurring gas remaining in the reservoir can constitute a significant portion of the gas cushion.</p> <br>
                                                        <p class="  ">The uncertainty in geological characteristics is one of the main challenges for large-scale implementation of hydrogen storage in saline aquifers. Comprehensive studies on geologic characteristics are required to accurately assess the suitability, storage capacity, and trapping capability of the target aquifer.</p> <br>
                                                        <div class="container mt-4">
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <p class="  ">
                                                                        Hydrogen contamination with the products of hydrogen conversion such as CH4 and H2S is the other important consideration in active microbial environments. Microbial activities in a highly populated microorganism environment can lead to the formation of biofilms, which may impact the petrophysical characteristics of the storage formation, sealing caprock, and subsequently the subsurface transport properties.
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <img src="assets/img/rareStore.jpeg" class="img-fluid rounded mx-auto d-block" alt="Styled Image">
                                                                </div>

                                                            </div>
                                                        </div><br>
                                                    </ul>



                                                </div>

                                                <div class="section">
                                                    <h3 class="my-2"><strong>3. Salt Caverns for Hydrogen Storage</strong></h3>
                                                    <p class="  ">Salt caverns, formed through the natural dissolution of salt deposits, provide another promising option for hydrogen storage. These caverns offer unique advantages:</p>
                                                    <ul>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>High Purity and Stability: </strong>The salt formation ensures a high-purity storage environment with minimal risk of contamination.</p> <br>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Flexibility and Scalability:</strong> Salt caverns can be engineered to various sizes, accommodating different storage needs and scaling up as demand increases.</p> <br>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Excellent Sealing Properties:</strong> The self-healing nature of salt makes caverns highly resistant to gas leakage, ensuring safe and secure hydrogen storage.</li> <br>
                                                    </ul>
                                                    <p class="  ">Developing salt caverns for hydrogen storage involves creating and managing the caverns' structure, ensuring the integrity of the storage site, and monitoring for potential environmental impacts. Successful examples, such as the hydrogen storage projects in Texas, highlight the viability and effectiveness of salt caverns in meeting large-scale hydrogen storage needs.</p>

                                                    <h5><strong>Technical and Environmental Considerations</strong></h5>
                                                    <p class="  ">Ensuring the safety and environmental sustainability of underground hydrogen storage is paramount. Key considerations include:</p>
                                                    <ul>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Safety Measures:</strong> Implementing robust safety protocols to prevent hydrogen leaks and explosions.</li> <br>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Environmental Impact:</strong> Assessing and mitigating potential environmental impacts, such as groundwater contamination and land subsidence.</li> <br>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Regulatory Compliance:</strong> Adhering to local and international regulations governing underground gas storage.</li> <br>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Sustainability:</strong> Evaluating the long-term sustainability and resilience of storage sites to ensure they remain viable for future use.</li> <br>
                                                    </ul>

                                                    <h5 class="my-2"><i class="ri-arrow-right-s-line"></i><strong>Innovations and Future Trends</strong></h5>
                                                    <p class="  ">The field of hydrogen storage is evolving rapidly, with continuous advancements in technology and techniques. Emerging trends include:</p>
                                                    <ul>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Advanced Materials:</strong> Developing materials with improved hydrogen absorption and storage capacities.</p>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Digital Monitoring:</strong> Utilizing digital technologies and sensors for real-time monitoring and management of storage sites.</li> <br>
                                                        <p class="  "><i class="ri-arrow-right-s-line"></i><strong>Integrated Energy Systems:</strong> Exploring the integration of hydrogen storage with renewable energy sources like wind and solar for a more resilient energy grid.</li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                            <!-- <img src="assets/img/raraFac3.jpeg" alt=""> -->


                                            <!-- <div class="container mt-4">
                                                <h3 style="font-size: 30px;" class="py-2">Common Myths Regarding Subsurface Hydrogen Storage</h3>
                                                <ul class="list-group">
                                                    <style>
                                                        ul li {
                                                            font-size: 20px;
                                                            text-decoration: solid !important;
                                                        }
                                                    </style>
                                                    <p class="  " class="list-group-item d-flex justify-content-center">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong> Hydrogen will quickly leak out of storage sites.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong> Although hydrogen molecules are small and can diffuse through certain materials, properly selected and well-characterized geological formations, such as saline aquifers with impermeable caprocks, can effectively contain hydrogen. Advanced sealing and monitoring technologies also mitigate leakage risks.
                                                    </p> <br><br>
                                                    <p class="  " class="list-group-item">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong> Subsurface hydrogen storage is too expensive to be practical.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong> While initial costs for developing storage infrastructure can be high, economies of scale and technological advancements are reducing these costs. Additionally, the long-term benefits of large-scale hydrogen storage, such as energy security and grid stability, can outweigh initial investments.
                                                        </li>
                                                    <p class="  " class="list-group-item">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong> Subsurface hydrogen storage is a completely new and untested concept.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong> The concept of storing gases underground is well-established, with decades of experience in natural gas storage. While hydrogen has unique properties, research and pilot projects are continuously advancing our understanding and capabilities in this area.
                                                    </p>
                                                    <p class="  " class="list-group-item">
                                                        <i class="ri-arrow-right-s-line"></i><strong>Myth:</strong> Subsurface hydrogen storage is not needed due to advancements in other storage technologies.
                                                        <br>
                                                        <i class="ri-arrow-right-s-line"></i><strong>Reality:</strong> While battery and other storage technologies are advancing, hydrogen storage offers unique advantages, particularly for long-term and large-scale energy storage. It complements other storage solutions and plays a crucial role in a diversified energy storage strategy.
                                                        </li>
                                                </ul>
                                                <p class=" mt-4  ">
                                                    Rara Energy Consulting is at the forefront of these innovations, actively participating in research and development initiatives to push the boundaries of what's possible in hydrogen storage.
                                                </p>
                                                <p class="  ">
                                                    At Rara Energy Consulting, we pride ourselves on our expertise in hydrogen storage solutions. Our team has successfully executed numerous projects, showcasing our ability to deliver safe, efficient, and sustainable storage solutions. From advanced modeling techniques to optimize storage capacities to ensuring regulatory compliance, our comprehensive approach ensures the highest standards of safety and performance.
                                                </p>
                                                <p class="  ">
                                                    Hydrogen storage is essential for the renewable energy landscape, paving the way for a cleaner and more sustainable future. Storing hydrogen underground in depleted fields and salt caverns offers a strong and scalable solution to meet the increasing demand. Using these methods, we can maintain a reliable and efficient supply of hydrogen, helping to drive the shift to a greener energy system.
                                                </p>
                                            </div> -->

                                        </div>

                                        <div class="row d-flex justify-content-center align-items-center">
                                            <button class="btn btn-success" id="download-btn2">Download as PDF <i
                                                    class="ri-file-pdf-2-fill fa-1x"></i></button>
                                        </div>

                                    </div>
                                    <div id="blog3" class="blog d-none  ">
                                        <style>
                                            @media (max-width: 600px) {
                                                #blog3 {
                                                    width: 210px;
                                                    /* height: 550px; */
                                                    overflow: hidden;
                                                }

                                                .googleSlideshow iframe {
                                                    width: 300px !important;
                                                    height: calc(100% + 29px);
                                                }
                                            }
                                        </style>
                                        <div id="content-to-download3" style="padding: 15px;">
                                            <h2 class="text-center font-bold mb-4"><strong>Indonesia’s Path to Carbon
                                                    Neutrality</strong></h2>


                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    Indonesia’s current energy is dominated by fossil fuels (coal, crude
                                                    oil, and natural gas), which meet around 84% of the national energy
                                                    demand, with coal being the largest source of CO2 emissions,
                                                    accounting for one-third of annual CO2 emissions.
                                                </li>
                                                <li>
                                                    With a potential CO2 storage capacity of 400 to 600 gigatons in
                                                    depleted reservoirs and saline aquifers, Indonesia stands at the
                                                    forefront of the green industrial era. This potential allows
                                                    national CO2 emissions to be stored for 322 to 482 years, with an
                                                    estimated peak emission of 1.2 gigatons of CO2-equivalent in 2030.
                                                </li>
                                                <li>
                                                    To meet rising energy demand, the country faces a choice: either
                                                    utilize more of its domestic coal resources while importing energy
                                                    from international oil and gas markets, or pursue renewable sources
                                                    that can provide local and affordable alternatives to fossil fuels.
                                                </li>
                                                <li>
                                                    Even if Indonesia uses only its depleted oil and gas fields, it
                                                    still has a staggering storage potential of 8 gigatons. Indonesia is
                                                    currently at the forefront of the commercial CCUS landscape in
                                                    Southeast Asia, comprising 55% of the total projects, followed by
                                                    Malaysia with 33%.
                                                </li>
                                                <li>
                                                    Studies show that transitioning to renewable energy is cheaper, with
                                                    the share of renewable energy expected to reach two-thirds of the
                                                    country’s energy mix by 2050, up from just 14% today. CCUS will play
                                                    a crucial role in facilitating this transition from fossil fuels to
                                                    renewable energy, given Indonesia’s significant storage capacity.
                                                </li>
                                                <li>
                                                    Statistically, from 2022 onward, Indonesia has registered a massive
                                                    114% growth in new CCUS project announcements compared to the
                                                    pre-2022 timeframe. The country is expected to require only half of
                                                    its storage capacity of 8 gigatons in depleted reservoirs, with an
                                                    additional 400 gigatons of storage capacity available if it utilizes
                                                    its saline aquifers.
                                                </li>
                                            </ol>

                                            <!-- <h3><strong>Malaysia’s Storage Potential</strong></h3> -->
                                            <div class="d-flex py-5">
                                                <img class="w-50 py-4"
                                                    src="assets/img/knowledge/indonesia_blog/Picture12.jpg"
                                                    alt="not found">
                                                <img class="w-50 py-4"
                                                    src="assets/img/knowledge/indonesia_blog/Picture13.png"
                                                    alt="not found">
                                            </div>

                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    Indonesia can leverage its vast CO2 storage capacity to provide safe
                                                    storage for CO2 from countries like Japan, South Korea, and
                                                    Singapore.
                                                </li>
                                                <li>
                                                    Partnerships with companies like Pertamina highlight the potential
                                                    for Indonesia to establish a carbon storage hub, creating a viable
                                                    business market. This could generate revenue by offering CO2
                                                    sequestration sites to foreign countries seeking favorable storage
                                                    locations.
                                                </li>
                                                <li>
                                                    Indonesia has issued a presidential regulation regarding carbon
                                                    capture and storage (CCS), allowing CCS operators to set aside 30%
                                                    of their storage capacity for imported carbon dioxide. The
                                                    Indonesian government will collect royalties from storage fees
                                                    charged by the CCS operators.
                                                </li>
                                                <li>
                                                    To store carbon from overseas, Indonesia will only permit emitters
                                                    that have invested in the country or are affiliated with companies
                                                    that have done so. Additionally, the government must have a
                                                    bilateral agreement with the government of the country from which
                                                    the emissions originated.
                                                </li>
                                            </ol>

                                            <img class="w-100 py-"
                                                src="assets/img/knowledge/indonesia_blog/Picture14.png" alt="not found">

                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    Indonesia is currently at the forefront of the commercial CCUS
                                                    landscape in Southeast Asia, comprising 55% of the total projects,
                                                    followed by Malaysia with another 33%.
                                                </li>
                                                <li>
                                                    Since 2022, Indonesia has registered a massive 114% growth in new
                                                    CCUS project announcements compared to the pre-2022 timeframe.
                                                </li>
                                                <li>
                                                    Statistically, a 200% growth in new projects can be expected in the
                                                    coming years as alliances materialize into full-scale commercial
                                                    projects. This is likely to play a pivotal role in shaping the
                                                    national CCUS landscape significantly.
                                                </li>
                                                <li>
                                                    Forty percent of the total CCUS projects in the country are
                                                    dominated by Indonesia's state-owned oil company Pertamina, followed
                                                    by other companies including Repsol, BP, and Inpex.
                                                </li>
                                            </ol>


                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/indonesia_blog/Picture15.png" alt="not found">


                                            <h3 class="text-center font-bold mb-4"><strong>The Rise of CCUS in
                                                    Indonesia</strong></h3>

                                            <!-- <img class="w-100 py-4" src="assets/img/knowledge/indonesia_blog/Picture16.png" alt="not found"> -->

                                            <div>
                                                <div class="row knowledgecard border mb-3 p-2">
                                                    <div class="col-md-2 border p-3  p-2 ">
                                                        <img src="assets/img/knowledge/indonesia_blog/mill.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">Energy Ministry data indicates there are 14 CCS and
                                                            CCUS projects in various Stages of Preparitions in Indonesia
                                                            with a combined investment of nearly US$8 billion, including
                                                            BP's projects</p>
                                                    </div>
                                                </div>

                                                <div class="row border mb-5 p-2 knowledgecard">
                                                    <div class="col-md-2 border p-3">
                                                        <img src="assets/img/knowledge/indonesia_blog/Medicine.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">Exxon Mobil plans to invest up to $15b to develop
                                                            petrochemical project and carbon capture and storage (CCS)
                                                            facilities in Indonesia</p>
                                                    </div>
                                                </div>

                                                <div class="row border mb-5 p-2 knowledgecard">
                                                    <div class="col-md-2 border p-3">
                                                        <img src="assets/img/knowledge/indonesia_blog/office-building.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">Indonesian state energy company Pertamina and Exxon
                                                            also agreed to assess investments of $2b for the development
                                                            of CCS facilities utilising two underground basins in the
                                                            Java Sea.</p>
                                                    </div>
                                                </div>

                                                <div class="row border mb-5 p-2 knowledgecard">
                                                    <div class="col-md-2 border p-3">
                                                        <img src="assets/img/knowledge/indonesia_blog/kisspng-hierarchical-organization-organizational-chart-bus-page-14-852-png-and-svg-space-icons-for-free-downl-5d04d1c6a978c8.7398895015605969346942.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">Pertamina said that the proposed CCS hub will have
                                                            potential storage capacity of at least three gigatons of
                                                            carbon dioxide (COz).</p>
                                                    </div>
                                                </div>

                                                <div class="row border mb-5 p-2 knowledgecard">
                                                    <div class="col-md-2 border p-3">
                                                        <img src="assets/img/knowledge/indonesia_blog/globe.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">BP expects that completion for Tangguh is targeted
                                                            for 2026 or 2027 and, by that time, 4 million metric tons of
                                                            carbon dioxide will be injected back into the reservoir
                                                            annually, with the amount reaching a total of up to 25
                                                            million metric tons of carbon dioxide by 2035 and 33 million
                                                            metric tons by 2045.</p>
                                                    </div>
                                                </div>

                                                <div class="row border mb-5 p-2 knowledgecard">
                                                    <div class="col-md-2 border p-3">
                                                        <img src="assets/img/knowledge/indonesia_blog/fire.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">He added that through enhanced gas recovery and by
                                                            sequestering the carbon dioxide, Tangguh operators will
                                                            potentially gain up to 300 billion cubic feet of incremental
                                                            gas in 2035 and as much as 520 billion cubic feet in 2045.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row border mb-5 p-2 knowledgecard">
                                                    <div class="col-md-2 border p-3">
                                                        <img src="assets/img/knowledge/indonesia_blog/industry.png"
                                                            class="w-100 py-10" alt="Styled Image">
                                                    </div>
                                                    <div
                                                        class="col-md-10 d-flex justify-content-center  align-items-center">
                                                        <p class=" ">Tangguh is the largest gas producer in Indonesia,
                                                            generating 1.4 billion standard cubic feet of gas per day,
                                                            or up to 20% of the country's daily gas production. BP and
                                                            its partners are working on increasing Tangguh's production
                                                            capacity to 2.1 billion standard cubic feet of gas per day.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div <img class="w-100 py-4"
                                                src="assets/img/knowledge/indonesia_blog/Picture17.png" alt="not found">

                                            <h3 class="text-start font-bold mb-4"><strong> Future of CCUS in
                                                    Indonesia</strong></h3>

                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    57% of the carbon sources associated with CCUS projects come from
                                                    natural gas processing facilities.
                                                </li>
                                                <li>
                                                    The remaining 43% come from various industries, including ammonia
                                                    production, paper production, and other chemical industries.
                                                </li>
                                                <li class="mb-2">
                                                    CCUS is still lacking in one of the most emission-intensive sectors:
                                                    power plants.
                                                </li>
                                                <li>
                                                    Over a third of Indonesia's energy sector emissions come from the
                                                    power sector, with 85% of emissions from coal-based generation. The
                                                    average age of the coal fleet is 13 years, and new plants continue
                                                    to be built.
                                                </li>
                                                <li>
                                                    Supercritical and ultra-supercritical power plants, which constitute
                                                    about 20% of Indonesia's coal fleet, are more efficient and suitable
                                                    for CCUS retrofits. These large-scale, recently built plants could
                                                    serve as anchor projects for developing CO2 storage hubs.
                                                </li>
                                            </ol>

                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/indonesia_blog/Picture18.png" alt="not found">


                                            <ol class="text-black " style="font-size:20px; line-height:28px;">
                                                <li>
                                                    <strong>Cement Production</strong>
                                                    <br>
                                                    1. Largest industrial emitter in Indonesia, with two-thirds of the
                                                    sector’s direct emissions originating from clinker production. <br>
                                                    2. 30 major cement plants, which emit around 45 Mt CO2 per year.

                                                </li>
                                                <li>
                                                    <strong>Iron and Steel Production</strong>
                                                    class="list-group-numbered modifier class ">
                                                    1. CCUS can be a cost-effective route to decarbonize.
                                                    2. 6 large-scale steel mills with annual CO2 emissions of around 30
                                                    Mt CO2.

                                                </li>
                                                <li>
                                                    <strong>Ammonia Production</strong>
                                                    <br>
                                                    1. CCUS can also be a cost-effective solution for low-emissions
                                                    ammonia production.
                                                    Japan and Indonesia signed a Memorandum of Cooperation (MoU) in
                                                    2022, leading to a joint CCUS study on a 0.7 Mt ammonia plant in
                                                    Central Sulawesi.

                                                </li>
                                            </ol>



                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/indonesia_blog/Picture19.png" alt="not found">

                                            <h3 class="text-start font-bold mb-4"><strong>CCUS Framework -
                                                    Indonesia</strong></h3>
                                            <img class="w-100 py-4"
                                                src="assets/img/knowledge/indonesia_blog/Picture20.png" alt="not found">








                                        </div>

                                        <div class="row d-flex justify-content-center align-items-center">
                                            <button class="btn btn-success" id="download-btn3">Download as PDF <i
                                                    class="ri-file-pdf-2-fill fa-1x"></i></button>
                                        </div>

                                    </div>



                                </div>
                                <script>
                                    function showBlog(blogId) {
                                        const blogs = document.querySelectorAll('.blog');
                                        blogs.forEach(blog => blog.classList.add('d-none'));

                                        const activeBlog = document.getElementById(blogId);
                                        activeBlog.classList.remove('d-none');
                                        event.preventDefault();
                                    }
                                </script>
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 1500,
                disableOnInteraction: true,
                pauseOnMouseEnter: true,
            },
        });
    </script>
    <script>
        function generatePdf(elementId, filename) {
            var element = document.getElementById(elementId);

            var opt = {
                margin: [15, 5, 15, 5], // Padding
                filename: filename,
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                },
                pagebreak: {
                    mode: ['css', 'legacy'],
                    avoid: 'img'
                }
            };

            // Generate the PDF with options and watermark
            html2pdf()
                .set(opt)
                .from(element)
                .toPdf()
                .get('pdf')
                .then(function (pdf) {
                    // Add watermark on each page
                    var totalPages = pdf.internal.getNumberOfPages();
                    for (var i = 1; i <= totalPages; i++) {
                        pdf.setPage(i);
                        pdf.addImage('assets/img/re.png', 'PNG', 0, 0, 0, 0);
                    }
                })
                .save();
        }

        // Call the function for each button
        document.getElementById('download-btn').addEventListener('click', function () {
            generatePdf('content-to-download', 'Subsurface Hydrogen Storage.pdf');
        });

        document.getElementById('download-btn2').addEventListener('click', function () {
            generatePdf('content-to-download2', 'Malaysia’s Current Energy Mix.pdf');
        });

        document.getElementById('download-btn3').addEventListener('click', function () {
            generatePdf('content-to-download3', 'Indonesia’s Path to Carbon Neutrality.pdf');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <?php include_once('components/footer.php'); ?>