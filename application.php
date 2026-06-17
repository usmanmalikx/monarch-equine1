<?php require_once 'components/info.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Applicagtion - <?= site_esc($site_name); ?></title>

<!-- Fav Icon -->
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        


        <?php include 'components/header.php'; ?>




        <!-- about-style-two -->
        <section class="about-style-two sec-pad">
            <div class="shape">
                <div class="shape-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                <div class="shape-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred mb_40">
                    <h2>Schedule a Tour</h2>
                </div>
                <div class="form-inner p_relative d_block mb_60" style="max-width: 700px; margin: 0 auto; background: #fff; padding: 50px; box-shadow: 0px 15px 40px rgba(0,0,0,0.07); border-radius: 10px;">
                    <?php
                    // Define the questions and their types here
                    $questions = [
                        [
                            'id' => 'SingleLine1', 
                            'question' => 'What is the occasion of your event?',
                            'type' => 'select',
                            'options' => ['Wedding', 'Birthday', 'Quinceañera', 'Corporate', 'Other']
                        ],
                        [
                            'id' => 'SingleLine2',
                            'question' => 'Estimated number of guests?',
                            'type' => 'radio',
                            'options' => ['Less than 50', '50-100', '100-200', '200+']
                        ],
                        [
                            'id' => 'SingleLine3',
                            'question' => 'Preferred Event Date?',
                            'type' => 'text',
                            'placeholder' => 'e.g., Spring 2027 or Specific Date'
                        ],
                        [
                            'id' => 'SingleLine', 
                            'question' => 'Your Full Name',
                            'type' => 'text',
                            'placeholder' => 'John Doe'
                        ],
                        [
                            'id' => 'Email', 
                            'question' => 'Your Email Address',
                            'type' => 'email',
                            'placeholder' => 'john@example.com'
                        ],
                        [
                            'id' => 'PhoneNumber_countrycode',
                            'question' => 'Your Phone Number',
                            'type' => 'text',
                            'placeholder' => '(555) 555-5555'
                        ],
                        [
                            'id' => 'SingleLine4',
                            'question' => 'Comments/Questions',
                            'type' => 'text',
                            'placeholder' => 'Any additional comments or questions?'
                        ]
                    ];
                    ?>
                    
                    <form id="tour-form" method="POST" action="https://forms.zohopublic.com/rsviprealestatemarketing1/form/Monarch/formperma/BHGCd_VHdy2KLRnPgW3NQZxG2fEdJGUbBR0yTDXfGiU/htmlRecords/submit" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
                        <input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
                        <input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
                        <div class="progress-text mb_30" style="color: var(--brand-color); font-weight: 500; font-size: 16px;">
                            Step <span id="current-step-display">1</span> of <?= count($questions) ?>
                        </div>
                        
                        <?php foreach ($questions as $index => $q): ?>
                            <div class="form-step" id="step-<?= $index ?>" style="<?= $index === 0 ? 'display:block;' : 'display:none;' ?>">
                                <h3 class="mb_20"><?= site_esc($q['question']) ?></h3>
                                <div class="form-group mb_30">
                                    <?php if ($q['type'] === 'select'): ?>
                                        <div class="select-box clearfix">
                                            <select name="<?= site_esc($q['id']) ?>" class="wide" required>
                                                <option data-display="Select an option" value="">Select an option</option>
                                                <?php foreach ($q['options'] as $opt): ?>
                                                    <option value="<?= site_esc($opt) ?>"><?= site_esc($opt) ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    <?php elseif ($q['type'] === 'radio'): ?>
                                        <div class="row">
                                        <?php foreach ($q['options'] as $optIndex => $opt): ?>
                                            <div class="col-md-6 mb-3">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="<?= site_esc($q['id'] . '_' . $optIndex) ?>" name="<?= site_esc($q['id']) ?>" value="<?= site_esc($opt) ?>" class="custom-control-input" required>
                                                    <label class="custom-control-label" for="<?= site_esc($q['id'] . '_' . $optIndex) ?>" style="cursor:pointer; font-size:16px; line-height: 24px; padding-top: 2px; padding-left: 10px;"><?= site_esc($opt) ?></label>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <input type="<?= site_esc($q['type']) ?>" name="<?= site_esc($q['id']) ?>" placeholder="<?= site_esc($q['placeholder'] ?? '') ?>" style="width: 100%; height: 50px; border: 1px solid #e5e5e5; padding: 10px 20px; border-radius: 5px; font-size: 16px; background: transparent;" required>
                                    <?php endif; ?>
                                </div>

                                <div class="step-buttons mt_40 d-flex justify-content-between">
                                    <?php if ($index > 0): ?>
                                        <button type="button" class="theme-btn-two prev-step">Previous</button>
                                    <?php endif; ?>
                                    
                                    <?php if ($index < count($questions) - 1): ?>
                                        <button type="button" class="theme-btn-one next-step">Next</button>
                                    <?php else: ?>
                                        <button type="submit" class="theme-btn-one" name="submit-form">Submit Application</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </section>
        <!-- about-style-two end -->



    <?php include 'components/footer.php'; ?>

        
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/text_animation.js"></script>
    <script src="assets/js/text_plugins.js"></script>
    <script src="assets/js/jquery-ui.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const steps = document.querySelectorAll('.form-step');
            const stepDisplay = document.getElementById('current-step-display');
            let currentStep = 0;

            function showStep(index) {
                steps.forEach((step, i) => {
                    step.style.display = i === index ? 'block' : 'none';
                });
                stepDisplay.textContent = index + 1;
            }

            document.querySelectorAll('.next-step').forEach(button => {
                button.addEventListener('click', () => {
                    let isValid = true;
                    const currentInputs = steps[currentStep].querySelectorAll('input, select, textarea');
                    
                    for (let input of currentInputs) {
                        if (!input.checkValidity()) {
                            isValid = false;
                            // If the field is hidden by a custom plugin like nice-select, show a manual alert
                            if (input.offsetWidth === 0 && input.offsetHeight === 0) {
                                alert("Please fill out all required fields on this step.");
                            } else if (typeof input.reportValidity === 'function') {
                                input.reportValidity(); // Show native HTML5 validation tooltip
                            }
                            break;
                        }
                    }
                    
                    if(isValid && currentStep < steps.length - 1) showStep(++currentStep);
                });
            });

            document.querySelectorAll('.prev-step').forEach(button => {
                button.addEventListener('click', () => {
                    if(currentStep > 0) showStep(--currentStep);
                });
            });
        });
    </script>

</body><!-- End of .page_wrapper -->
</html>
