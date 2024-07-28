<!-- /*
* Template Name: Property
hello there
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<!-- https://demo.bootstrapdash.com/ui-components/pricing/pricing-1/ -->

<?php include '../../globalvar/globalvariable.php'; ?>
<?php include  $connToPan . 'config.php'; ?>
<?php include  $mphpToInc . 'header.php'; ?>
<?php include  $funToPan . 'function.php'; ?>
<?php include  $mphpToInc . 'navbar.php'; ?>


<div class="hero page-inner overlay" style="background-image: url('../images/hero_bg_1.jpg')">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">Purchase Plans</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">
              Plans
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>


<div class="pricing8 py-5" id="plans">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h6 class="subtitle font-weight-normal text-dark">PRICING PLAN</h6>
        <h1 class="mb-3 text-dark">Pricing Table</h1>
      </div>
    </div>
    <!-- row  -->
    <div class="row mt-5">
      <!-- column  -->
      <div class="col-md-4 ml-auto pricing-box align-self-center">
        <div class="card mb-4 myShadow myScale border-0 rounded-lg">
          <div class="card-body p-4 text-center">
            <h2 class="font-weight-normal my-4"><i class="fa-solid fa-cube" style="color: #fe397a;"></i></h2>
            <h5 class="font-weight-normal my-4">Baisc</h5>
            <h1 class="font-weight-normal my-4" style="font-weight: 700;">FREE</h1>
            <p class="mt-3">Unlimited conferences</p>
            <p class="mt-3">100 participants max</p>
            <p class="mt-3">Custom Hold Music</p>
            <p class="mt-3">10 participants max</p>
            <a class="btn btn-sm rounded-pill text-white my-4" href="#" style="background-color: #fe397a;">CHOOSE PLAN </a>
          </div>
        </div>
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-md-4 ml-auto pricing-box align-self-center">
        <div class="card mb-4 myShadow myScale border-0 rounded-lg" style="box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);">
          <div class="card-body p-4 text-center">
            <h2 class="font-weight-normal my-4"><i class="fa-solid fa-trophy" style="color: #10bb87;"></i></h2>
            <h5 class="font-weight-normal my-4">Pro</h5>
            <h1 class="font-weight-normal my-4" style="font-weight: 700;">$49</h1>
            <p class="mt-3">Unlimited conferences</p>
            <p class="mt-3">100 participants max</p>
            <p class="mt-3">Custom Hold Music</p>
            <p class="mt-3">10 participants max</p>
            <a class="btn btn-sm rounded-pill text-white my-4" href="#" style="background-color: #10bb87;">CHOOSE PLAN </a>
          </div>
        </div>
      </div>
      <!-- column  -->
      <!-- column  -->
      <div class="col-md-4 ml-auto pricing-box align-self-center">
        <div class="card mb-4 myShadow myScale border-0 rounded-lg">
          <div class="card-body p-4 text-center">
            <h2 class="font-weight-normal my-4"><i class="fa-solid fa-gift" style="color: #5d78ff;"></i></h2>
            <h5 class="font-weight-normal my-4">Pro</h5>
            <h1 class="font-weight-normal my-4" style="font-weight: 700;">$69</h1>
            <p class="mt-3">Unlimited conferences</p>
            <p class="mt-3">100 participants max</p>
            <p class="mt-3">Custom Hold Music</p>
            <p class="mt-3">10 participants max</p>
            <a class="btn btn-sm rounded-pill text-white my-4" href="#" style="background-color: #5d78ff;">CHOOSE PLAN </a>
          </div>
        </div>
      </div>
      <!-- column  -->
    </div>
  </div>
</div>


<?php include  $mphpToInc . 'footer.php'; ?>
<?php include  $mphpToInc . 'loader.php'; ?>
<?php include  $mphpToInc . 'endlinks.php'; ?>