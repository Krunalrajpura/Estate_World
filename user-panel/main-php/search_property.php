<?php include '../../globalvar/globalvariable.php'; ?>
<?php include  $connToPan . 'config.php'; ?>
<?php include  $mphpToInc . 'header.php'; ?>
<?php include  $funToPan . 'function.php'; ?>
<?php include  $mphpToInc . 'navbar.php'; ?>


<div class="hero page-inner overlay" style="background-image: url('../images/hero_bg_3.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Search Property</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="properties.php">Properties</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            <a href="#">See Property</a>
                        </li>
                        <li class="breadcrumb-item active text-white text-decoration-underline" aria-current="page">
                            <a href="search_property.php">Search Property</a>
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
                    Search Your Properties
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="mb-4 text-center">Select Options</h3>
                    <form action="search_property.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="select1" class="form-label fw-bold">Search By</label>
                                <select class="form-select" id="select1" required>
                                    <option value="" selected>Select an option</option>
                                    <option value="price_range">Price Range</option>
                                    <option value="location">Location</option>
                                    <option value="property_type">Property Type</option>
                                    <option value="listing_type">Listing Type</option>
                                    <option value="availability">Availability</option>
                                </select>
                            </div>
                            <div class="col-md-4 d-none" id="s2">
                                <label for="select2" class="form-label fw-bold" id="s2l">Select 2</label>
                                <select class="form-select" id="select2">
                                    <option value="" selected>Select an option</option>
                                </select>
                            </div>
                            <div class="col-md-4 d-none" id="s3">
                                <label for="select3" class="form-label fw-bold" id="s3l">Select 3</label>
                                <select class="form-select" id="select3">
                                    <option value="" selected>Select an option</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="myBtn myBtn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('select1').addEventListener('change', function() {
        const select1Value = this.value;
        const select2 = document.getElementById('select2');
        const select3 = document.getElementById('select3');
        const s2 = document.getElementById("s2");
        const s3 = document.getElementById("s3");
        const s2l = document.getElementById("s2l");
        const s3l = document.getElementById("s3l");

        // Hiding the select tags initially
        s2.classList.add("d-none");
        s3.classList.add("d-none");

        // Clear previous selections
        select2.innerHTML = '<option value="" selected>Select an option</option>';
        select3.innerHTML = '<option value="" selected>Select an option</option>';

        // Remove the required attribute from select2 and select3 initially
        select2.removeAttribute("required");
        select3.removeAttribute("required");

        if (select1Value === 'price_range') {
            s2.classList.remove("d-none");
            s2l.innerText = "Select Price Range";

            const priceRange = [{
                    pname: "10lacs",
                    pvalue: "100000"
                },
                {
                    pname: "20lacs",
                    pvalue: "200000"
                },
                {
                    pname: "30lacs",
                    pvalue: "300000"
                },
                {
                    pname: "40lacs",
                    pvalue: "400000"
                },
                {
                    pname: "50lacs",
                    pvalue: "500000"
                },
                {
                    pname: "60lacs",
                    pvalue: "600000"
                },
                {
                    pname: "70lacs",
                    pvalue: "700000"
                },
                {
                    pname: "80lacs",
                    pvalue: "800000"
                },
                {
                    pname: "90lacs",
                    pvalue: "900000"
                },
                {
                    pname: "1cr",
                    pvalue: "10000000"
                },
                {
                    pname: "2cr",
                    pvalue: "20000000"
                }
            ];

            priceRange.forEach(function(item) {
                const option = document.createElement('option');
                option.value = item.pvalue;
                option.textContent = item.pname;
                select2.appendChild(option);
            });

            // Make select2 required when price_range is selected
            select2.setAttribute("required", "required");

        } else if (select1Value === 'location') {
            s2.classList.remove("d-none");
            s2l.innerText = "Select State";

            fetch('../../api/get_states.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(state => {
                        const option = document.createElement('option');
                        option.value = state.state_id;
                        option.textContent = state.state_name;
                        select2.appendChild(option);
                    });
                });

            // Make select2 required when location is selected
            select2.setAttribute("required", "required");

        } else if (select1Value === 'property_type') {
            s2.classList.remove("d-none");
            s2l.innerText = "Select Property Type";

            const propertyType = ['apartment', 'house', 'commercial', 'land', 'pg'];
            propertyType.forEach(function(type) {
                const option = document.createElement('option');
                option.value = type;
                option.textContent = type;
                select2.appendChild(option);
            });

            // Make select2 required when property_type is selected
            select2.setAttribute("required", "required");

        } else if (select1Value === 'listing_type') {
            s2.classList.remove("d-none");
            s2l.innerText = "Select Listing Type";

            const listingType = ['sell', 'rent'];
            listingType.forEach(function(type) {
                const option = document.createElement('option');
                option.value = type;
                option.textContent = type;
                select2.appendChild(option);
            });

            // Make select2 required when listing_type is selected
            select2.setAttribute("required", "required");
        }
    });

    document.getElementById('select2').addEventListener('change', function() {
        const select1Value = document.getElementById('select1').value;
        const select2Value = this.value;
        const select3 = document.getElementById('select3');
        const s3 = document.getElementById("s3");
        const s3l = document.getElementById("s3l");

        // Clear previous selections
        select3.innerHTML = '<option value="" selected>Select an option</option>';

        // Remove the required attribute from select3 initially
        select3.removeAttribute("required");

        if (select1Value === 'location') {
            s3.classList.remove("d-none");
            s3l.innerText = "Select District";

            // Fetch districts based on state
            fetch(`../../api/get_districts.php?state_id=${select2Value}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.district_id;
                        option.textContent = district.district_name;
                        select3.appendChild(option);
                    });
                });

            // Make select3 required when district is selected
            select3.setAttribute("required", "required");
        }
    });

    // Validation on form submission to ensure select2 and select3 have a value if required
    document.querySelector('form').addEventListener('submit', function(event) {
        const select2 = document.getElementById('select2');
        const select3 = document.getElementById('select3');

        if (!select2.classList.contains('d-none') && select2.hasAttribute('required') && select2.value === '') {
            alert('Please fill out the required fields.');
            event.preventDefault(); // Prevent form submission
        }

        if (!select3.classList.contains('d-none') && select3.hasAttribute('required') && select3.value === '') {
            alert('Please fill out the required fields.');
            event.preventDefault(); // Prevent form submission
        }
    });

    // document.getElementById('select3').addEventListener('change', function() {
    //     const districtId = this.value;

    //     fetch(`get_details.php?district_id=${districtId}`)
    //         .then(response => response.json())
    //         .then(data => {
    //             // Process data
    //         });
    // });
</script>



<?php include  $mphpToInc . 'footer.php'; ?>
<?php include  $mphpToInc . 'loader.php'; ?>
<?php include  $mphpToInc . 'endlinks.php'; ?>