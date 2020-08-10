<section class="contact-page">
        <div class="container">
            <div class="text-center">
                <h2>Drop Your Message</h2>
                <p>Drop your message and let our team get touch to you</p>
            </div>
            <div class="row contact-wrap">
                <?php if(isset($_SESSION['is_Send_message_Success'])) : ?>
                <div class="status alert alert-success">You've just drop us a message, thanks for your interest</div>
                <?php unset($_SESSION['is_Send_message_Success']);  ?>
                <?php endif; ?>
                <?php if(isset($_SESSION['is_Send_message_Failed'])) : ?>
                <div class="status alert alert-danger">Opp! something went wrong, please try again!</div>
                <?php unset($_SESSION['is_Send_message_Failed']);  ?>
                <?php endif; ?>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-lg" required="required" value="Submit Message"></input>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
