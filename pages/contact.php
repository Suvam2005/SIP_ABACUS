<?php
    $PAGE_CSS = 'contact.css';
    $PAGE_SCRIPT = 'contact.js';
    $NAVBAR_SCRIPT = 'navbar.js';
    include __DIR__ .'/../includes/header.php';
    include __DIR__ .'/../includes/navbar.php';
    include __DIR__ .'/contact_code.php';
?>
<div class="container-sm mt-98 ms-0 ps-0">
    <img src= "<?= BASE_URL ?>assets/images/banner/Banner-contact.jpg">
    <p class= "position-absolute top-40 heading-4">Contact Us</p>
</div>
<div class="container position-relative d-flex align-items-center justify-content-center">
    <div class="container-sm ps-5 mt-5 mb-5 pt-5 pb-5 pe-5">
        <img src= "<?= BASE_URL ?>assets/images/banner/Contact-form.jpg" class="form-img ms-120">
    </div>
    <div id= "contact-section" class="container d-flex justify-content-center align-items-center contact-wrapper">
        <?php if(isset($_GET['form']) && $_GET['form'] === 'success'): ?>
        <div class="form-success">
            <div class="success-checkmark">
                <div class="check-icon">
                    ✔
                </div>
            </div>

            <h2>Form Submitted Successfully</h2>
            <p>Our Team Will Contact You Soon.</p>
        </div>
    <?php else: ?>
        <div class="contact-form">
            <div class="form-header">
                <h4>Please Fill The Form</h4>
            </div>
            <form class="form-body" method= "POST">

                <input type="text" name= "name" placeholder="Name*" required>

                <input type="email" name= "email" placeholder="Email*" required>

                <textarea name="message" placeholder="Message*" rows="4" required></textarea>

                <button type="submit" name= "submit">Send</button>

            </form>

        </div>
        <?php endif; ?>
    </div>
</div>
<?php 
    include __DIR__ .'/../includes/footer.php';
?>