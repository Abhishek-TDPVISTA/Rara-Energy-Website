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
            content: '🔄';
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

        .iam-diagram {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            border-radius: 20px;
            padding: 60px 0;
            margin: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .iam-diagram::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            z-index: 1;
        }

        .diagram-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .diagram-title {
            color: white;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .process-flow {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }

        .center-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }

        .center-text {
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            text-align: center;
            line-height: 1.3;
        }

        .process-steps {
            position: relative;
            width: 600px;
            height: 600px;
            margin: 0 auto;
        }

        .step {
            position: absolute;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.95rem;
            text-align: center;
            line-height: 1.3;
            padding: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .step:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
        }

        .step-number {
            position: absolute;
            top: -10px;
            right: -10px;
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.9);
            color: #1a1a1a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .step1 {
            top: 0;
            right: 150px;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }

        .step2 {
            top: 80px;
            right: 0;
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
        }

        .step3 {
            bottom: 80px;
            right: 0;
            background: linear-gradient(135deg, #a855f7 0%, #9333ea 100%);
        }

        .step4 {
            bottom: 0;
            right: 150px;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        .step5 {
            bottom: 80px;
            left: 0;
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        }

        .step6 {
            top: 80px;
            left: 0;
            background: linear-gradient(135deg, #22c55e 0%, #059669 100%);
        }

        .arrow {
            position: absolute;
            width: 40px;
            height: 2px;
            background: rgba(255, 255, 255, 0.6);
        }

        .arrow::after {
            content: '';
            position: absolute;
            right: 0;
            top: -4px;
            width: 0;
            height: 0;
            border-left: 10px solid rgba(255, 255, 255, 0.6);
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
        }

        .benefits-section {
            background: white;
            padding: 80px 0;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.06);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .benefit-card {
            padding: 30px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .benefit-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #22c55e 0%, #3b82f6 100%);
        }

        .benefit-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .benefit-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .benefit-card h4 {
            color: #1e293b;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .benefit-card p {
            color: #64748b;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .process-steps {
                width: 400px;
                height: 400px;
            }
            
            .step {
                width: 120px;
                height: 120px;
                font-size: 0.8rem;
                padding: 15px;
            }
            
            .center-circle {
                width: 150px;
                height: 150px;
            }
            
            .center-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="project-badge">Simulation Studies Project</div>
                <h1 class="hero-title">Integrated Asset<br>Model Solution</h1>
                <p class="hero-subtitle">
                    Delivering comprehensive IAM solutions for Black Sea deep-water projects, uniting reservoir simulation, well performance, and facility models for optimal field management.
                </p>
            </div>
        </div>
    </div>

    <div class="project-overview">
        <div class="container">
            <h2 class="section-title">Project Overview</h2>
            <p class="section-description">
                Rara Energy is proudly involved in a large project to offer an Integrated Asset Model (IAM) solution for our client's Black Sea deep-water project. This IAM solution unites reservoir simulation, well performance, and facility models, providing a comprehensive approach to field management that dynamically integrates each component of the asset.
            </p>
            <p class="section-description">
                Through this framework, we enable the client to make real-time, data-driven decisions that optimize production, manage operational constraints, and maximize asset longevity. This is especially critical in the complex geological and operational conditions of deep-water fields, where such integration supports both enhanced recovery and efficient resource management.
            </p>
        </div>
    </div>

    <div class="iam-diagram">
        <div class="container">
            <div class="diagram-content">
                <h3 class="diagram-title">Integrated Asset Model Workflow</h3>
                <div class="process-flow">
                    <div class="process-steps">
                        <div class="center-circle">
                            <div class="center-text">
                                Integrated<br>Asset<br>Model
                            </div>
                        </div>
                        
                        <div class="step step1">
                            <div class="step-number">1</div>
                            Validate Model Component
                        </div>
                        
                        <div class="step step2">
                            <div class="step-number">2</div>
                            Build Reservoir Coupling
                        </div>
                        
                        <div class="step step3">
                            <div class="step-number">3</div>
                            Incorporate production network
                        </div>
                        
                        <div class="step step4">
                            <div class="step-number">4</div>
                            Incorporate process facilities model
                        </div>
                        
                        <div class="step step5">
                            <div class="step-number">5</div>
                            Create integrated asset model
                        </div>
                        
                        <div class="step step6">
                            <div class="step-number">6</div>
                            Scenario Planning Optimization
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="benefits-section">
        <div class="container">
            <h2 class="section-title">Key Benefits</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">⚡</div>
                    <h4>Real-Time Decision Making</h4>
                    <p>Enable data-driven decisions that optimize production and manage operational constraints effectively.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🎯</div>
                    <h4>Enhanced Recovery</h4>
                    <p>Support enhanced recovery strategies through comprehensive asset integration and modeling.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🔧</div>
                    <h4>Asset Longevity</h4>
                    <p>Maximize asset longevity through efficient resource management and operational optimization.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">🌊</div>
                    <h4>Deep-Water Expertise</h4>
                    <p>Specialized solutions for complex geological and operational conditions in deep-water fields.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">📊</div>
                    <h4>Comprehensive Integration</h4>
                    <p>Dynamic integration of reservoir simulation, well performance, and facility models.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">💡</div>
                    <h4>Scenario Planning</h4>
                    <p>Advanced scenario planning and optimization capabilities for strategic decision support.</p>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('components/footer.php'); ?>