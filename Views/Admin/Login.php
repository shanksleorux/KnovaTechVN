<section class="contact-page">
        <div class="container">
            <div class="text-center">
                <h2>Please provide user's cridential to login to Admin dashboard</h2>
            </div>
            <div class="row contact-wrap">
                <?php if(isset($_SESSION['Log_in_fail'])): ?>
                <div class="status alert alert-success" style="color: Red">Wrong cridential Please re-try again!</div>
                <?php endif; ?>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="col-sm-5 col-sm-offset-3">
                        <div class="form-group">
                            <label>Your Email *</label>
                            <input type="email" name="Email" class="form-control" required="required" placeholder="youremail@example.com">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg" required="required" value="Login"></input>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
