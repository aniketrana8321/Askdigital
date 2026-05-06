
@include('front-end.header')
   <style>

        /* Main Content Styles */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 100px;
            text-align: center;
        }
        
        .benefits-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        
        .benefit-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            transition: all 0.3s;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .guidelines-section {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 100px 0;
        }
        
        .tips-section {
            background-color: #e9f5ff;
            padding: 80px 0;
        }
        
        .tips-card {
            background: white;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .tips-card:hover {
            transform: translateX(10px);
        }
        
        .subjects-section {
            padding: 80px 0;
            background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }
        
        .subjects-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.9);
        }
        
        .subject-container {
            position: relative;
            z-index: 1;
        }
        
        .subject-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s;
            text-align: center;
        }
        
        .subject-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .submission-section {
            background-color: #343a40;
            color: white;
            padding: 80px 0;
        }
        
        .requirement-card {
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s;
        }
        
        .requirement-card:hover {
            background: rgba(255,255,255,0.15);
            transform: translateY(-5px);
        }
        
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            right: -50%;
            bottom: -50%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 8s infinite linear;
        }
        
        @keyframes pulse {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .icon-box {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #0d6efd;
        }
     
        
      
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding: 120px 0 80px;
            }
            
            .benefit-card, .tips-card, .subject-card, .requirement-card {
                margin-bottom: 15px;
            }
        }
    </style>
 
<!-- Bootstrap Banner Section -->
<section class="py-5" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-12 ">
                <h1 class="fw-bold mb-4" style="font-size: 38px; line-height: 64px;">
                    Amplify Your Brand with <span style="color: #00ff74;">ASK Digital Agency</span>: Guest Blogging for Digital Marketing Success
                </h1>
                <p class="mb-3 fs-5" style="line-height: 1.6;">
                    Are you an aspiring writer waiting to be discovered? Or a seasoned expert looking to expand your reach and engage with like-minded individuals? Guest blogging for Digital Marketing offers a golden opportunity to showcase your expertise and establish yourself as a thought leader in your field.
                </p>
                <p class="fs-5" style="line-height: 1.6;">
                    Whether you specialize in technology, business, health, lifestyle, or any other domain, your insights and perspectives will resonate with a diverse audience eager for valuable content. When you submit a guest post to us, you gain more than just goodwill—you receive wide-ranging digital marketing exposure through our website and social media channels.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- Why Submit Section -->
<section class="benefits-section" id="benefits">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: #000;">Why Submit a Guest Post?</h2>
            <p class="lead">Before you dive into guest posting, let's explore the benefits</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="icon-box">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 style="font-size: 25px; color: #000;">Establish Authority</h3>
                    <p>Position yourself as a thought leader in your industry by sharing valuable insights.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 style="font-size: 25px; color: #000;">Expand Your Reach</h3>
                    <p>Connect with a broad and diverse audience across multiple domains.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="icon-box">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 style="font-size: 25px; color: #000;">Boost Traffic</h3>
                    <p>Drive more visitors to your own blog or website while increasing your visibility.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="icon-box">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 style="font-size: 25px; color: #000;">Network & Collaborate</h3>
                    <p>Build meaningful relationships with professionals in your niche.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="icon-box">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 style="font-size: 25px; color: #000;">Contribute to the Digital Conversation</h3>
                    <p>Enrich the industry with your unique perspectives and expertise.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card">
                    <div class="icon-box">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 style="font-size: 25px; color: #000;">Win-Win Exposure</h3>
                    <p>We gain high-quality content, you gain influence and recognition in your field.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Guidelines Section -->
<section class="guidelines-section" id="guidelines">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4" style="color: #fff;">Guest Post Guidelines</h2>
        <p class="lead mb-5" style="color: #fff;">
            Quality content is the foundation of our platform. To ensure excellence, we welcome well-researched and insightful articles.
        </p>
        
        <div class="row">
            <div class="col-lg-8">
                <div class="bg-white bg-opacity-10 p-4 rounded">
                    <p style="color: #fff;">
                        Whether you're covering industry trends, answering pressing questions, sharing expert tips, or analyzing case studies, we encourage originality, depth, and relevance. Here's what we expect:
                    </p>
                    
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <span style="color: #fff;">
                                Articles should be <strong style="color: #fff;">around 1500 words</strong>, formatted for easy readability, and accompanied by high-quality visuals.
                            </span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <span style="color: #fff;">
                                Content must be <strong style="color: #fff;">original and unpublished</strong>. We do not accept plagiarism or duplicate submissions.
                            </span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <span style="color: #fff;">
                                Support your content with <strong style="color: #fff;">credible research or case studies</strong>, but avoid referencing competitors or including unrelated promotional links.
                            </span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <span style="color: #fff;">
                                Include only <strong style="color: #fff;">original photographs</strong>: stock images that don't add value will not be accepted.
                            </span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                            <span style="color: #fff;">
                                Structure your post with <strong style="color: #fff;">subheadings</strong>, <strong style="color: #fff;">bullet points</strong>, and clear <strong style="color: #fff;">paragraph breaks</strong> to enhance readability.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Writing Tips Section -->
<section class="tips-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: #000;">Writing Tips for a Compelling Guest Post</h2>
            <p class="lead">Creating engaging content requires both creativity and strategy</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="tips-card">
                    <h3 style="color: #000;"><i class="bi bi-people-fill text-primary me-2"></i> Know Your Audience</h3>
                    <p>Understand their challenges and provide solutions through your insights.</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="tips-card">
                    <h3 style="color: #000;"><i class="bi bi-pencil-fill text-primary me-2"></i> Create an Engaging Introduction</h3>
                    <p>Hook readers with a compelling opening that sparks interest.</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="tips-card">
                    <h3 style="color: #000;"><i class="bi bi-list-ol text-primary me-2"></i> Structure for Impact</h3>
                    <p>Present your ideas clearly with a strong introduction, informative body, and a thought-provoking conclusion.</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="tips-card">
                    <h3 style="color: #000;"><i class="bi bi-chat-left-text-fill text-primary me-2"></i> Use Clear Language</h3>
                    <p>Keep your writing concise, engaging, and easy to understand.</p>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="tips-card">
                    <h3 style="color: #000;"><i class="bi bi-lightbulb-fill text-primary me-2"></i> Include Real-life Examples</h3>
                    <p>Practical examples and case studies make your content more relatable and credible.</p>
                </div>
            </div>
        </div>
    </div>
</section>


   <!-- Preferred Subjects Section -->
<section class="subjects-section">
    <div class="container subject-container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: #000;">Preferred Subjects</h2>
            <p class="lead">We welcome content on these digital marketing topics</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-graph-up-arrow fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Digital Marketing & Analytics</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-facebook fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Social Media</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-search fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Search Engine Optimization</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-phone fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Mobile Web Marketing</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-cart fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">E-commerce & Affiliate Marketing</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-lightbulb fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Entrepreneurship & Startup</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-envelope fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Email Marketing</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-pencil-square fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Blogging</h4>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="subject-card">
                    <i class="bi bi-file-text fs-1 text-primary mb-3"></i>
                    <h4 style="color: #000;">Content Marketing</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Submission Guidelines Section -->
<section class="submission-section" id="submission">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4" style="color: #fff;">Submission Guidelines</h2>
        
        <div class="row">
            <div class="col-lg-8">
                <p class="lead mb-4" style="color: #fff;">
                    Are you ready to share your insights and expertise with our audience? Submitting your guest post is quick and easy!
                </p>
                
                <p class="mb-4" style="color: #fff;">
                    Simply attach your article along with a brief outline to 
                    <a href="mailto:agency@askdigitalagency.com" class="text-white">agency@askdigitalagency.com</a> 
                    with the subject line: <strong style="color: #fff;">Guest Post Request</strong>.
                </p>
                
                <p class="mb-5" style="color: #fff;">
                    Our editorial team will review your submission in the order received and provide feedback if needed. 
                    Once approved, your article will be scheduled for publication—typically within a week.
                </p>
                
                <div class="alert alert-warning">
                    <p class="mb-0">
                        While we're excited to feature your work on <strong>AK Digital Agency</strong>, 
                        please note that our editors reserve the right to make minor edits for clarity and impact or decline submissions at their discretion.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- Requirements Section -->
<section class="bg-light py-5">
    <div class="container">
        <h3 class="fw-bold mb-4 text-center" style="color: #000;">Submission Requirements:</h3>
        
        <div class="row g-4">
            
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-file-word text-primary me-2"></i> Minimum Word Count
                        </h5>
                        <p>1,500 words, offering valuable insights to our readers.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-link text-primary me-2"></i> Linking Policy
                        </h5>
                        <p>Only one self-promotional link is allowed.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-ban text-primary me-2"></i> Content Restrictions
                        </h5>
                        <p>Topics like gambling, adult content, credit-related services, and similar topics are <strong>not permitted</strong>.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-lock text-primary me-2"></i> Exclusivity
                        </h5>
                        <p>Your article must be <strong>exclusive</strong>—once published with us, it cannot appear anywhere else, including personal blogs.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-image text-primary me-2"></i> Multimedia
                        </h5>
                        <p>Images and videos are encouraged. Please send them as separate attachments.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-copyright text-primary me-2"></i> Copyright Compliance
                        </h5>
                        <p>Ensure all content respects copyright laws, and provide proper credit where necessary.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h5 class="fw-bold" style="color: #000;">
                            <i class="fas fa-language text-primary me-2"></i> Language
                        </h5>
                        <p>All submissions must be in English.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container cta-content">
            <h2 class="display-5 fw-bold mb-3">Ready to Get Started?</h2>
            <p class="lead mb-5">If you're passionate about sharing your knowledge and making an impact, we invite you to submit a guest post to AK Digital Agency.</p>
            
            <p class="mb-5">Join us in shaping the future of digital discourse while expanding your influence and visibility. Let's make your voice heard in the digital world—one powerful post at a time!</p>
            
    
        </div>
    </section>
    
    
    @include('front-end.footer')