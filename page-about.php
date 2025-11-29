<?php
/* Template Name: About Page */
get_header();
?>

<!-- Hero Section with Gradient Background -->
<div class="hero text-white py-5" 
     style="background: linear-gradient(135deg, #dc3545 0%, #a71d2a 100%);">
  <div class="container text-center">
    <h1>About Ty</h1>
    <p class="lead">From Lived Experience to Expert Consulting</p>
  </div>
</div>

<!-- Meet Ty Biography Section -->
<div class="container my-5">
  <div class="row align-items-center">
    <!-- Image -->
    <div class="col-md-5 text-center mb-4 mb-md-0">
      <img src="http://tytalkseverything.local/wp-content/uploads/2025/11/tys-profile-no-glare-on-glasses-2025.png" 
           alt="Ty Stewart Weinert" 
           class="img-fluid rounded shadow">
    </div>
    <!-- Biography -->
    <div class="col-md-7">
      <h2>Meet Ty</h2>
      <p class="lead">
        Ty Stewart Weinert is a passionate advocate, consultant, and proud Las Vegas resident since 2000.
        Her dedication to community service and political engagement began at age seven while she was living
        in Prince George's County, Maryland.
      </p>
      <p>
        Ty's commitment to mental health awareness, problem gambling, and suicide prevention stems from deeply
        personal struggles within her family and lived experience. She previously served as the Programs Manager
        for the Nevada Council on Problem Gambling, where she managed public engagement and community outreach,
        including prevention presentations and talks in person and digitally.
      </p>
      <p>
        Through her consulting business, <strong>Ty Talks Everything (TTE)</strong>, and its specialized services
        and programs, she merges her vast experience to deliver transformative coaching and strategic consulting
        for individuals, nonprofits, and for-profit businesses alike. She is known for her ability to problem-solve
        complex issues and use her writing skills to craft training courses, workshops, and documents—including
        political speeches, business plans, grants, and more.
      </p>
      <a href="<?php echo site_url('/contact'); ?>" class="btn btn-danger mt-3">Start Your Journey</a>
    </div>
  </div>
</div>

<!-- Three Pillars of Transformation -->
<div class="bg-light py-5">
  <div class="container text-center">
    <h2>Our Three Pillars of Transformation</h2>
    <p class="lead">
      Ty Talks Everything (TTE) equips individuals and organizations with strategies and insights to achieve
      a sustainable, rewarding balance between work and home life. We provide engaging workshops, focused coaching,
      and expert facilitation designed to unlock resilience, prevent burnout, and cultivate psychological health.
    </p>
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5>Work Life Integration & Coaching</h5>
            <p>Move beyond burnout to sustained excellence through keynotes, workshops, and coaching sessions.</p>
            <a href="<?php echo site_url('/business-consulting'); ?>" class="btn btn-danger">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5>Neurocognitive Resilience & Training</h5>
            <p>Advanced training in psychological health using proven neurocognitive methods.</p>
            <a href="<?php echo site_url('/wellness'); ?>" class="btn btn-danger">Explore Programs</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-danger">
          <div class="card-body">
            <h5>Ty's Hill: Intergenerational Living Lab</h5>
            <p>True work-life balance requires peace at home. Ty's HILL cultivates rewarding family experiences.</p>
            <a href="<?php echo site_url('/tys-hill'); ?>" class="btn btn-danger">Start Conversation</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Approach to Healing -->
<div class="container my-5 text-center">
  <h2>My Approach to Healing</h2>
  <div class="row mt-4">
    <div class="col-md-3"><h5>Evidence-based Methods</h5><p>Combined with lived experience.</p></div>
    <div class="col-md-3"><h5>Compassionate Support</h5><p>Judgment-free space to be authentic.</p></div>
    <div class="col-md-3"><h5>Practical Tools</h5><p>Actionable strategies for daily life.</p></div>
    <div class="col-md-3"><h5>Measurable Progress</h5><p>Clear milestones to celebrate growth.</p></div>
  </div>
  <a href="<?php echo site_url('/contact'); ?>" class="btn btn-danger btn-lg mt-4">Start Your Journey</a>
</div>

<?php get_footer(); ?>