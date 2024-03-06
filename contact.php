<?php
$title = "Contact";
$nav = "contact";
require './elements/head.php';
?>

<div id="section-container">
    <div class="row">
        <div class="col-12 col-md-7">
            <section>
                <a id="tarif-section" href="media\Tarif Itylon 2024.jpg" target="_blank">
                    <img src="media\Tarif Itylon 2024.jpg" alt="Tarif Itylon 2024.jpg">
                </a>
            </section>
            <section>
                <a id="plan-section" href="media/plan.jpg" target="_blank">
                    <img src="media/plan.jpg" alt="plan.jpg">
                </a>
            </section>
        </div>
        <div class="col-12 col-md-5">
            <section id="contact-section">
                <h2>contactez-nous</h2>
                <p>
                    Pour réserver un séjour chez nous ou pour toutes vos questions.
                </p>
                <div>
                    <form id="contact-form" role="form" class="container">
                        
                        <label for="name" class="form-label" >Nom </label>
                        <input id="name" required type="text" name="name" class="form-control">
                        
                        <label for="firstname" class="form-label">Prénom </label>
                        <input id="firstname" required type="text" name="firstname" class="form-control">
                        
                        <label for="email" class="form-label">Email </label>
                        <input id="email"  required type="text" name="email" class="form-control">
                        
                        <label for="phone" class="form-label">Téléphone</label>
                        <input id="phone"  required type="text" name="phone" class="form-control">
                        
                        
                        <label for="message" class="form-label">Message </label>
                        <textarea id="message"  required name="message" class="form-control" rows="4"></textarea>
                        
                        <div class="row">
                            <p class="contact-message" id="contact-message"></p>
                            <div class="g-recaptcha" data-sitekey="6LfuDywpAAAAAE4c7DtbnAcLut0fofo2F8o67S_y"></div>
                            <button 
                                type="submit" 
                                class="btn">
                                Envoyer
                            </button>
                        </div>
                </div>
                </form>
        </div>
        <a href="https://www.facebook.com/residenceitylon" target="_blank">
            <i class="fa-brands fa-facebook fa-3x"></i>
        </a>
        </section>
    </div>
</div>
</div>
<!--=============== EMAIL JS ===============-->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="fonctions\js\mail.js"></script>
<?php
require './elements/footer.php';
?>