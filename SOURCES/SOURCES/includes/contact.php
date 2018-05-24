    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-12 col-xs-12">
              <div class="contact-us">
                <h3>Nous contacter :</h3>
                <div class="contact-address">
                  
                  <p>UNE ANNÉE DE VOYAGES</p>
                  <p>32, rue des Peupliers</p>
                  <p>92100 Boulogne</p>

                  <p class="phone">Phone: <span><a href="tel:+3341310513">+33(0) 413 10 513</a></span></p>
                  <p class="email">E-mail: <span><a href="mailto:redaction@uneanneedevoyages.com">rédaction@uneanneedevoyages.com</a></span></p>
                  
                  <p>Ouvert du lundi au vendredi de 10h à 18h</p>
                  
                  <p class="contact_">Rédactrice en chef : Judith Lossmann<br>
                    <span><a href="tel:+33688316137">+ 33 (0) 6 88 31 61 37</a></span> <br>
                    <span><a href="mailto:judith.lossmann@uneanneedevoyages.com">judith.lossmann@uneanneedevoyages.com</a></span>
                  </p>
                  
                  <p class="contact_">Pigiste et secrétaire de rédaction : Caroline M’zali<br>
                    <span><a href="tel:+33771128748">+33 (0) 7 71 12 87 48</a></span> <br>
                    <span><a href="mailto:caroline.mzali@uneanneedevoyages.com">caroline.mzali@uneanneedevoyages.com</a></span>
                  </p>
                </div>
                <?php include('social.php'); ?>
              </div>
            </div>     
            <div class="col-lg-6 col-sm-12 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <select name="profil" id="type-profil" required data-error="Sélectionnez un profil">
                          <option value="" disabled selected>Vous êtes : </option>
                          <option value="Un journaliste">Un journaliste</option>
                          <option value="Un annonceur">Un annonceur</option>
                          <option value="Un lecteur">Un lecteur</option>
                          <option value="Un partenaire">Un partenaire</option>
                          <option value="Un office du tourisme">Un office du tourisme</option>
                        </select>
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="company" name="company" placeholder="Votre société" required data-error="Nom d'entreprise">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom" data-error="Saisissez votre nom">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Votre e-mail" id="email" class="form-control" name="name" required data-error="Saisissez votre e-mail">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" id="phone" name="phone" placeholder="Votre téléphone" required data-error="Saisissez votre numéro de téléphone">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Votre message" rows="8" data-error="Saisissez votre message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button text-center">
                        <button class="btn btn-common" id="submit" type="submit">Envoyer</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>           
    </section>
    <!-- Contact Section End -->