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
            content: '⛽';
            font-size: 16px;
        }

        .hero-title {
            font-size: 3.2rem;
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
            max-width: 700px;
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
            font-size: 2.2rem;
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
            color: #4b5563;
            margin-bottom: 48px;
            line-height: 1.8;
        }

        .tech-highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin: 40px 0 60px;
        }

        .tech-card {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            padding: 24px;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tech-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .tech-card h4 {
            color: #22c55e;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .tech-card p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .image-showcase {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            border-radius: 20px;
            padding: 60px 0;
            margin: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .image-showcase::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            z-index: 1;
        }

        .image-showcase-content {
            position: relative;
            z-index: 2;
        }

        .showcase-title {
            color: white;
            font-size: 2rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 40px;
        }

        .image-container {
            max-width: 800px;
            margin: 0 auto;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .image-container:hover {
            transform: scale(1.02);
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .stats-section {
            background: white;
            padding: 80px 0;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.06);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .stat-card {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #22c55e 0%, #3b82f6 100%);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #22c55e;
        }

        .stat-label {
            font-size: 1rem;
            color: #64748b;
            line-height: 1.4;
            font-weight: 500;
        }

        .key-features {
            background: white;
            padding: 60px 0;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.06);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 24px;
            background: #f8fafc;
            border-radius: 12px;
            border-left: 4px solid #22c55e;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            flex-shrink: 0;
        }

        .feature-content h4 {
            color: #1e293b;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .feature-content p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .tech-highlights {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="project-badge">Sakarya Gas Field Project</div>
                <h1 class="hero-title">Integrated Reservoir &<br>Asset Modeling</h1>
                <p class="hero-subtitle">
                    Developed an integrated reservoir and asset model for the Sakarya Gas Field, Turkey's largest natural gas discovery, using advanced simulation technologies to enhance forecasting accuracy and optimize development planning.
                </p>
            </div>
        </div>
    </div>

    <div class="project-overview">
        <div class="container">
            <h2 class="section-title">Project Overview</h2>
            <p class="section-description">
                The project involved building a dynamic simulation using Petrel RE and INTERSECT, calibrated with SLB's IAM software to enhance forecasting accuracy and reduce simulation runtime by approximately 30%. The coupled model enabled scenario-based development planning and efficient decision-making for Turkish Petroleum (TPAO).
            </p>

            <div class="tech-highlights">
                <div class="tech-card">
                    <h4>Petrel RE</h4>
                    <p>Advanced reservoir modeling and simulation platform</p>
                </div>
                <div class="tech-card">
                    <h4>INTERSECT</h4>
                    <p>High-performance reservoir simulator</p>
                </div>
                <div class="tech-card">
                    <h4>SLB's IAM</h4>
                    <p>Integrated asset modeling software</p>
                </div>
                <div class="tech-card">
                    <h4>Calibration</h4>
                    <p>Enhanced forecasting accuracy</p>
                </div>
            </div>
        </div>
    </div>

    <div class="image-showcase">
        <div class="container">
            <div class="image-showcase-content">
                <h3 class="showcase-title">Black Sea Operations</h3>
                <div class="image-container">
                    <img src="/assets/img/BlackSea.jpg" alt="Black Sea Gas Field Operations">
                </div>
            </div>
        </div>
    </div>

    <div class="stats-section">
        <div class="container">
            <h2 class="section-title">Project Impact</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">30%</div>
                    <div class="stat-label">Turkey's Natural Gas Demand Supply</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">30%</div>
                    <div class="stat-label">Simulation Runtime Reduction</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">#1</div>
                    <div class="stat-label">Turkey's Largest Gas Discovery</div>
                </div>
            </div>
        </div>
    </div>

    <div class="key-features">
        <div class="container">
            <h2 class="section-title">Key Contributions</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">R</div>
                    <div class="feature-content">
                        <h4>Reservoir Upscaling</h4>
                        <p>Advanced techniques for optimizing reservoir model resolution and computational efficiency</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">H</div>
                    <div class="feature-content">
                        <h4>History Matching</h4>
                        <p>Calibration of simulation models with historical production data for improved accuracy</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">F</div>
                    <div class="feature-content">
                        <h4>Forecast Integration</h4>
                        <p>Integration of forecast tables enabling scenario-based development planning</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">S</div>
                    <div class="feature-content">
                        <h4>Strategic Input</h4>
                        <p>Cross-disciplinary expertise in subsurface workflows, seismic acquisition, and well planning</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">D</div>
                    <div class="feature-content">
                        <h4>Decision Support</h4>
                        <p>Efficient decision-making tools for Turkish Petroleum (TPAO) development strategies</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">O</div>
                    <div class="feature-content">
                        <h4>Optimization</h4>
                        <p>Performance optimization resulting in 30% reduction in simulation runtime</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('components/footer.php'); ?>