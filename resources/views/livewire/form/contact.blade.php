<form action="forms/contact.php" class="php-email-form" method="post" role="form">
    <div class="row">
        <div class="col-md-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Your Name" required type="text" />
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input class="form-control" id="email" name="email" placeholder="Your Email" required type="email" />
        </div>
    </div>
    <div class="form-group mt-3">
        <input class="form-control" id="subject" name="subject" placeholder="Subject" required type="text" />
    </div>
    <div class="form-group mt-3">
        <textarea class="form-control" name="message" placeholder="Message" required rows="5"></textarea>
    </div>
    <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">
            Your message has been sent. Thank you!
        </div>
    </div>
    <div class="text-center">
        <button type="submit">Send Message</button>
    </div>
</form>