<div class="row">
      <div class="container">
        <ul class="bread">
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li class="active"><a href="#"><?php echo $title; ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Course Details -->
  <div class="container site-content sidebar-right">
    <div class="row">


<div id="main" class="col-md-9 pull-left">
  <?php $addr = $this->uri->segment(3); ?>
  <article>
    <div class="entry-content">
      <h2>
        <?php 
          if($addr ==1)      { echo "IT Training"; }
          elseif($addr == 2) { echo "Development"; }
          elseif($addr == 3) { echo "Room Rental"; }
          else               { echo "Online Testing"; }
        ?>
      </h2>
      <p>LABA established in 2009 is the most advanced IT training service provider in Nepal. The training center offers blended IT learning solutions comprising Classroom training, Onsite training and E-learning directly from the global vendors. LABA has a range of IT Training & Computer Courses that lead to internationally recognized certifications. As an accredited to EC-Council, Authorized Exclusive Element-K Reseller, Microsoft Certified Partner for Learning Solutions and Cisco Registered Partner you can be assured a high standard of IT Training.</p>
      <p>We are the first ITIL Affiliated Training Organization; we also conduct highly regarded ISO Standard Certification trainings. We are authorized Prometric and VUE Test centre providing Global IT certifications locally. We have the best infrastructure with State-of-the-art classroom, High configuration Lenovo laptops, Acer Desktops, CISCO Routers and Switches sufficient to perform CCNA, CCNP and some CCIE hands on labs and use latest technology.</p>
      <p>LABA active learning immerses you in intensive hands-on exercises, course activities and real world simulations on our lab. The result is you learn practical skills quickly and retain more. Every LABA course is designed with the goal of making you even more productive by providing practical relevant skills that you can apply on the job immediately.</p>
      <p>We are known for our dedication and commitment beyond contract. Over the years our graduates have succeeded in gaining international qualifications, and carved out fabulous careers for themselves.</p>
      <p>LABA has served more than 200 esteemed arrays of organizations such as UN agencies, bi-lateral agencies, telecommunication service providers, INGOs, Government organizations, Commercial Banks, corporate houses, students and many more.</p>
      <p>LABA trainer has years of real-world experience, global certified and able to deliver training from the leading edge. We guarantee it ! Unless you feel 100 percent satisfied that we delivered even more than you expected, you can repeat the whole course free of cost.</p>
      <p>Besides training solutions LABA also provides training need assessment services, IT infrastructure setup consultancy, network consultancy, IT security consultancy, software development and web development solutions.</p>
      <blockquote>Our success is based on your success</blockquote>
    </div>
  </article>
</div>