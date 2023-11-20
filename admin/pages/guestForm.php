<?php
    include 'mail.php';
?>

<style>
    .yellow {
        background-image: linear-gradient(to right, #FAD983 0%, #FAD983 100%);

    }
    .black {
        color: black;
    }
</style>

<section class="mb-4">

    <div class="card">
        <div class="card-body">

        <h2 class="h1-responsive font-weight-bold text-center my-4">Invite Guest</h2>

        <p class="text-center w-responsive mx-auto mb-5">Please enter the name, email and number of the guest.</p>

    
            <div class="row justify-content-center">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" method="POST" class="needs-validation" novalidate>

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0 form-group">
                                    <label for="name" class="">Guest name</label>
                                    <input type="text" id="name" required name="name" class="form-control">
                                    <div class="invalid-feedback">
                                        Please enter guest name
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0 form-group">
                                    <label for="email" class="">Guest email</label>
                                    <input type="email" id="email" required name="email" class="form-control">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0 form-group">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" required name="subject" class="form-control">
                                    <div class="invalid-feedback">
                                        Please enter subject
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form form-group">
                                    <label for="message">Invitation message</label>
                                    <textarea type="text" required id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <div class="invalid-feedback">
                                        Please enter invitation message
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="text-center text-md-left">
                        <input class="btn btn-primary yellow black" style="border: none" type="submit" value="Submit" name="send">
                        </div>

                    </form>

                
                    <!-- <div class="status"></div> -->
                </div>

            </div>
        </div>
    </div>
<script>
    (function() {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity() || !isYearValid()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        });

        function isYearValid() {
            var yearInput = document.getElementById('year');
            var yearValue = yearInput.value;

            // Check if the input value is a 4-digit number
            return /^\d{4}$/.test(yearValue);
        }
    })();
</script>

<script src="../component/js/formValidation.js"></script>
</section>
