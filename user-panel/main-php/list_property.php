<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php include '../../globalvar/globalvariable.php'; ?>
<?php include  $connToPan . 'config.php'; ?>
<?php include  $mphpToInc . 'header.php'; ?>
<?php include  $funToPan . 'function.php'; ?>
<?php include  $mphpToInc . 'navbar.php'; ?>

<div class="hero page-inner overlay" style="background-image: url('../images/hero_bg_4.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">List Properties</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            List Properties
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    Upload Your Properties
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card border-0" style="width: 20rem; padding-right: 0px;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-title">Upload Your Property</h5>
                        <div style="height: 250px; width: 250px; border-radius: 1rem; border: 3px dashed;" class="border-primary d-flex justify-content-center align-items-center mb-4">
                            <button type="button" class="myBtn-lg myBtn myBtn-sp rounded-circle" data-toggle="modal" data-target="#propertyForm">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- your listed property  -->

<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    Your Listed Property
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        <div class="property-item">
                            <a href="property-single.php" class="img">
                                <img src="../images/img_1.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.php" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.php" class="img">
                                <img src="../images/img_2.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.php" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.php" class="img">
                                <img src="../images/img_3.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.php" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.php" class="img">
                                <img src="../images/img_4.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.php" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.php" class="img">
                                <img src="../images/img_5.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.php" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="property-item">
                            <a href="property-single.php" class="img">
                                <img src="../images/img_6.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>$1,291,000</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                    <span class="city d-block mb-3">California, USA</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-bath me-2"></span>
                                            <span class="caption">2 baths</span>
                                        </span>
                                    </div>

                                    <a href="property-single.php" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->

                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="propertyForm" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="propertyModalLabel">Property Listing Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Property Details -->
                    <h5 class="mb-3">Property Details</h5>
                    <div class="form-group mb-3">
                        <label for="propertyType">Property Type</label>
                        <select class="form-control" id="propertyType" required>
                            <option value="">Select type</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="commercial">Commercial</option>
                            <option value="land">Land</option>
                        </select>
                    </div>

                    <div class="form-row row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="size">Size (sq ft)</label>
                                <input type="number" class="form-control" id="size" placeholder="Enter size" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bedrooms">Number of Bedrooms</label>
                                <input type="number" class="form-control" id="bedrooms" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bathrooms">Number of Bathrooms</label>
                                <input type="number" class="form-control" id="bathrooms" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yearBuilt">Year Built</label>
                                <input type="number" class="form-control" id="yearBuilt" placeholder="Enter year" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="furnishing">Furnishing Status</label>
                                <select class="form-control" id="furnishing" required>
                                    <option value="">Select status</option>
                                    <option value="furnished">Furnished</option>
                                    <option value="semi-furnished">Semi-furnished</option>
                                    <option value="unfurnished">Unfurnished</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="availableFrom">Available From</label>
                        <input type="date" class="form-control" id="availableFrom" required>
                    </div>

                    <!-- Pricing Details -->
                    <h5 class="mb-3">Pricing Details</h5>
                    <div class="form-group mb-3">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Enter price" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="additionalCosts">Additional Costs</label>
                        <input type="text" class="form-control" id="additionalCosts" placeholder="Enter additional costs">
                    </div>

                    <!-- Property Features -->
                    <h5 class="mb-3">Property Features</h5>
                    <div class="form-row row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="interiorFeatures">Interior Features</label>
                                <textarea class="form-control" id="interiorFeatures" rows="3" placeholder="E.g., central air conditioning, heating, appliances"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exteriorFeatures">Exterior Features</label>
                                <textarea class="form-control" id="exteriorFeatures" rows="3" placeholder="E.g., garden, balcony, parking"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="specialFeatures">Special Features</label>
                        <textarea class="form-control" id="specialFeatures" rows="3" placeholder="E.g., swimming pool, gym, security systems"></textarea>
                    </div>

                    <!-- Location Details -->
                    <h5 class="mb-3">Location Details</h5>
                    <div class="form-row row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nearbyAmenities">Nearby Amenities</label>
                                <textarea class="form-control" id="nearbyAmenities" rows="3" placeholder="E.g., schools, hospitals, shopping centers"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="accessibility">Accessibility</label>
                                <textarea class="form-control" id="accessibility" rows="3" placeholder="E.g., public transport, major roads"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Property Description -->
                    <h5 class="mb-3">Property Description</h5>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="4" placeholder="Provide a detailed description of the property" required></textarea>
                    </div>

                    <!-- Photos and Videos -->
                    <h5 class="mb-3">Photos and Videos</h5>
                    <div class="form-group mb-3">
                        <label for="propertyImages">Upload Images</label>
                        <input type="file" class="form-control-file" id="propertyImages" multiple>
                    </div>
                    <div class="form-group mb-4">
                        <label for="propertyVideo">Upload Video (Optional)</label>
                        <input type="file" class="form-control-file" id="propertyVideo">
                    </div>

                    <!-- Contact Information -->
                    <h5 class="mb-3">Contact Information</h5>
                    <div class="form-row row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contactName">Contact Name</label>
                                <input type="text" class="form-control" id="contactName" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contactNumber">Contact Number</label>
                                <input type="tel" class="form-control" id="contactNumber" placeholder="Enter your contact number" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="contactEmail">Email Address</label>
                        <input type="email" class="form-control" id="contactEmail" placeholder="Enter your email address" required>
                    </div>

                    <!-- Property Status -->
                    <h5 class="mb-3">Property Status</h5>
                    <div class="form-group mb-4">
                        <label for="status">Availability Status</label>
                        <select class="form-control" id="status" required>
                            <option value="">Select status</option>
                            <option value="available">Available</option>
                            <option value="under_offer">Under Offer</option>
                            <option value="sold">Sold</option>
                            <option value="rented">Rented</option>
                        </select>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="myBtn myBtn-info"><i class="fa-solid fa-arrow-up-from-bracket"></i> Submit</button>
                    <button type="reset" class="myBtn myBtn-warning"><i class="fa-solid fa-arrow-rotate-right"></i> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include '../includes/footer.php';  ?>
<?php include '../includes/loader.php';  ?>
<?php include '../includes/endlinks.php';  ?>