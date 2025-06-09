<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        line-height: 1.6;
        color: #1a1a1a;
        background: #fafafa;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .hero-section {
        background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);
        padding: 80px 0 60px;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background: linear-gradient(45deg, rgba(34, 197, 94, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .project-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(34, 197, 94, 0.1);
        color: #16a34a;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 24px;
        border: 1px solid rgba(34, 197, 94, 0.2);
    }

    .project-badge::before {
        content: '⚡';
        font-size: 16px;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 24px;
        background: linear-gradient(135deg, #1a1a1a 0%, #4a5568 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: #6b7280;
        margin-bottom: 40px;
        max-width: 600px;
        line-height: 1.7;
    }

    .project-overview {
        background: white;
        border-radius: 20px;
        padding: 60px 0;
        margin: -40px 0 80px;
        box-shadow: 0 4px 40px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 3;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 16px;
        color: #1a1a1a;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #22c55e 0%, #3b82f6 100%);
        border-radius: 2px;
    }

    .section-description {
        font-size: 1.125rem;
        color: #6b7280;
        margin-bottom: 48px;
        line-height: 1.8;
        max-width: 800px;
    }

    .two-column {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
        margin-bottom: 60px;
    }

    .content-block h3 {
        font-size: 1.75rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #22c55e;
    }

    .content-block p {
        color: #4b5563;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .image-gallery {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin: 40px 0;
    }

    .image-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.18);
    }

    .image-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .stats-section {
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        color: white;
        padding: 80px 0;
        margin: 80px 0;
        border-radius: 24px;
        position: relative;
        overflow: hidden;
    }

    .stats-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        z-index: 1;
    }

    .stats-content {
        position: relative;
        z-index: 2;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }

    .stat-card {
        text-align: center;
        padding: 30px 20px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        background: rgba(255, 255, 255, 0.08);
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 8px;
        background: linear-gradient(135deg, #22c55e 0%, #3b82f6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-label {
        font-size: 0.95rem;
        color: #cbd5e1;
        line-height: 1.4;
    }

    .company-section {
        background: white;
        padding: 80px 0;
        border-radius: 20px;
        margin-bottom: 40px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.06);
    }

    .company-logo {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        color: white;
        font-size: 24px;
        font-weight: 700;
    }

    .divider {
        height: 1px;
        background: linear-gradient(90deg, transparent 0%, #e5e7eb 50%, transparent 100%);
        margin: 60px 0;
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .two-column {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .image-gallery {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .stat-number {
            font-size: 2.5rem;
        }
    }
</style>
</head>

<body>
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="project-badge">Hydrogen Project</div>
                <h1 class="hero-title">Hydrogen Storage<br>Modelling</h1>
                <p class="hero-subtitle">
                    Rara Energy provides comprehensive subsurface support and detailed modeling studies for safe and
                    efficient hydrogen storage in the ambitious Kintore project.
                </p>
            </div>
        </div>
    </div>

    <div class="project-overview">
        <div class="container">
            <div class="two-column">
                <div class="content-block">
                    <h2 class="section-title">Kintore Project</h2>
                    <p class="section-description">
                        Securing Aberdeenshire's position at the heart of the innovative green hydrogen economy while
                        providing energy security to the wider UK.
                    </p>
                </div>
                <div class="content-block">
                    <p>
                        The project aims to utilize surplus electricity generated by Scottish offshore wind to produce
                        green hydrogen for decarbonization of power generation facilities and carbon-intensive
                        industrial clusters across the country.
                    </p>
                    <p>
                        The North East has historically been a world leader in the energy sector. Large, pioneering
                        projects like Kintore Hydrogen will help unlock investment in wind and hydrogen across the
                        region, retaining that leadership as we transition to a renewables-led energy system.
                    </p>
                </div>
            </div>

            <div class="image-gallery">
                <div class="image-card">
                    <img src="assets/img/project2.jpg" alt="Project Infrastructure">
                </div>
                <div class="image-card">
                    <img src="assets/img/project3.jpg" alt="Renewable Energy Systems">
                </div>
            </div>
        </div>
    </div>

    <div class="stats-section">
        <div class="container">
            <div class="stats-content">
                <h2 class="section-title" style="color: white; text-align: center;">Project Impact</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">3GW</div>
                        <div class="stat-label">Total electrolyser capacity</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">500MW</div>
                        <div class="stat-label">First phase capacity</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">200K</div>
                        <div class="stat-label">Tonnes of hydrogen per year</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">30%</div>
                        <div class="stat-label">of UK Government's 10GW low-carbon hydrogen target</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">60%</div>
                        <div class="stat-label">of Scottish Government's 5GW hydrogen target</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">&lt;30min</div>
                        <div class="stat-label">Grid response time</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="company-section">
        <div class="container">
            <div class="company-logo">S</div>
            <h3 style="color: #22c55e; font-size: 1.75rem; margin-bottom: 20px;">Who is Statera?</h3>
            <p style="color: #4b5563; line-height: 1.8; font-size: 1.125rem;">
                Statera is a UK-based energy company that develops, owns and operates flexible generation, battery
                storage, pumped hydro and green hydrogen projects which provide critical grid balancing support in a
                future renewables-led system.
            </p>
            <div class="divider"></div>
            <p style="color: #6b7280; line-height: 1.8;">
                These assets help the UK build more renewable energy, more quickly, by providing the flexible capacity
                needed to balance the future grid during periods of extended shortfalls and excesses in renewable
                generation, due to the variability of wind and solar output. This technology lowers carbon emissions and
                delivers best value for energy users.
            </p>
        </div>
    </div>

    <?php include_once('components/footer.php'); ?>