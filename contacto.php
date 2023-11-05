<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body>

    <!-- Navigation -->
<?php include 'menu.php' ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <?php include 'tituloBreadcrumb-contacto.php' ?>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contacto</h3>
                <p>
                    Calle Mezquite #103, 88610<br>
Reynosa, Tamaulipas.<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone"></abbr> 8991343799</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email"></abbr> <a href="mailto:name@example.com">melissardzrms2005@gmail.com</a>
                </p>
                <p>Cumpleaños: 07/01/2005</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://wwww.facebook.com/profile.php?id=100016212542191"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Envíanos un mensaje</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre Completo:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Teléfono:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Dirección e-mail:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php include 'footer.php' ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
