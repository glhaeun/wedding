<?php
    include 'mail.php';
?>

<section class="mb-4">

    <div class="card">
        <div class="card-body">

        <h2 class="h1-responsive font-weight-bold text-center my-4">Invite Guest</h2>

        <p class="text-center w-responsive mx-auto mb-5">Please enter the name, email and number of the guest.</p>

    
            <div class="row justify-content-center">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Guest name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Guest email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Invitation message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="text-center text-md-left">
                        <input class="btn btn-primary" type="submit" value="Submit" name="send">
                        </div>

                    </form>

                
                    <!-- <div class="status"></div> -->
                </div>

            </div>
        </div>
    </div>

</section>
