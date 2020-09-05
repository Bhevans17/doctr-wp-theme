<?php require "./includes/header.php"; ?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-12">
            <h1 class="mb-2 text-center">Contact</h1>
        </div>
        <div class="col-md-12 p-5">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="contact-name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contact-suject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="contact-message" rows="5" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
<?php require "./includes/footer.php"; ?>