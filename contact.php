<!-- header-->
<?php include('header.php');?>
    <section id="page-titre" class="overlay">
         <h1>CONTACTEZ NOUS</h1>
         <div class="vague"></div>
    </section>
   

    <section id="page-contact">
        <div class="container">
            <div class="row">
                <!--2 blocs 2 colonnes-->
                <div class="col offset-lg-1">
                    <div class="presentation">
                        <h4>Restons en contact</h4>
                        <h3>Obtenez plus d'informations</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ullam temporibus facere vitae reprehenderit, quod commodi eaque reiciendis mollitia eligendi vero impedit quas est facilis assumenda architecto sit explicabo esse?</p>
                    </div>
                    <!-- formulaire-->
                    
                    <form action="" method="POST" class="my-5">
                        <input type="text" placeholder="Votre nom" name="nom" class="form-control mb-3">
                        <input type="email" placeholder="Votre email" class="form-control mb-3" required name="email">
                        <textarea name="message" rows="6" placeholder="Votre message" required class="form-control mb-3"></textarea>
                        <input type="submit" class="btn btn-primary btn-lg">
                    </form>
                </div> <!-- Fin de la 1ere colonne -->

                <div class="col">
                    <h5>Une question ? N'hésitez pas à nous contacter !</h5>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam assumenda maxime vel modi laboriosam vitae in sunt libero minima consectetur, ducimus laudantium labore ipsum voluptatem illum saepe aperiam incidunt perferendis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis unde possimus.</p>
                    <table class="table mt-5">
                        <tr>
                            <td><i class="bi bi-signpost-2-fill"></i></td>
                            <td>
                                <b>Coordonnees</b> <br>
                                31 rue de la république 75000 Paris
                            </td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope-paper-fill"></i></td>
                            <td>
                                <b>Adresse Email</b> <br>
                                terst@test.fr
                            </td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-telephone-outbound-fill"></i></td>
                            <td>
                                <b>Téléphone</b> <br>
                                Fixe : 01 23 45 67 89 / Mobile : 06 01 02 03 04
                            </td>
                        </tr>
                    </table>

                    <div class="social">
                        <h5 class="mb-3">Suivez nous sur les réseaux</h5>

                        <ul class="d-flex">
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                        </ul>
                    </div><!-- Fin des reseaux sociaux-->
                </div> <!-- Fin de la 2eme colonne -->

            </div> <!-- Fin de la row-->
        </div> <!-- Fin du container-->
    </section>

    <section id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11555.870793339232!2d1.3648584312225092!3d43.60721416764662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebaa26015cb43%3A0xacdcee70b0cc51c3!2s15%20Chem.%20de%20la%20Crabe%2C%2031300%20Toulouse!5e0!3m2!1sfr!2sfr!4v1698064305118!5m2!1sfr!2sfr"
            height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section><!-- Fin de la section MAP-->

    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <h4>A propos</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iusto, explicabo accusamus laudantium
                        ipsum quisquam totam omnis odio commodi officia incidunt quibusdam.</p>
                    <img src="images/logo6.png" alt="">
                    <img src="images/logo2.png" alt="">
                </div>
                <div class="col-md-3">
                    <h4>Informations de contact</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iusto, explicabo accusamus laudantium
                        ipsum quisquam.</p>
                    <ul>
                        <li><i class="bi bi-telephone-fill"></i>123 456 789</li>
                        <li><i class="bi bi-envelope-fill"></i>test@est.fr</li>
                        <li><i class="bi bi-geo-alt-fill"></i>adresse complete</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4>Derniers articles</h4>
                    <article>
                        <a href="#">
                            <h6>Titre de l'article</h6>
                        </a>
                        <span>Date | aucun commentaire</span>
                    </article>
                    <hr>
                    <article>
                        <a href="#">
                            <h6>Titre de l'article</h6>
                        </a>
                        <span>Date | aucun commentaire</span>
                    </article>
                </div>
                <div class="col-md-2">
                    <h4>Abonnez vous</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <form action="" method="POST">
                        <input type="email" placeholder="Votre email" class="form-control mb-3" required>
                        <input type="submit" value="Rejoignez nous !" class="btn btn-primary form-control">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="up">
        <a href="#topbar"><i class="bi bi-arrow-up-circle-fill"></i></a>
    </div>
<!-- FOOTER -->
<?php include('footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    </body>
    
    </html>