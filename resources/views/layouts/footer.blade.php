<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>CONTATO</span>
          <h2>CONTATO</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Nosso Endereço</h3>
              <p>Rua Mato Grosso, N° 333, centro, Monções - SP</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>betetesgottiadvogados@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telefone</h3>
              <p> (17) 99614-1870</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2216.9821675486637!2d-50.09278797969531!3d-20.851697475134163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9497d5a62cb176db%3A0xd6cad06c47fe7a09!2sBetete%20advocacia!5e0!3m2!1spt-BR!2sbr!4v1712867738078!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="{{route('email')}}" method="post" role="form" class="php-email-form">
            @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit">Mandar Mensagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

<footer>
    <div class="container">
      <div class="copyright">
  
        Designed by <a href="https://www.livwork.com.br/livtech">LivTech</a>
      </div>
    </div>
  </footer><!-- End Footer -->

 <div style="position: relative; display: flex; align-items: flex-start;">
  <div style="position: relative; z-index: 1;">
    <a href="https://api.whatsapp.com/send?phone=551799719-0692&text=Gostaria de falar com um advogado especialista" class="back-to-top d-flex align-items-center justify-content-center" style="text-decoration: none;">
      <img src="https://static.wixstatic.com/media/0bb7d2_a1a04332f82d4b30b46b7c3af9104bc1~mv2.jpg/v1/fill/w_392,h_398,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/0bb7d2_a1a04332f82d4b30b46b7c3af9104bc1~mv2.jpg" style="max-width: 100px; border-radius: 51%; margin-right: 20px; margin-bottom: 50px;">
       <div style="position: absolute; background-color: #fff; padding: 10px; border: 1px solid #ccc; border-radius: 8px 8px 40px 8px; width: 200px; margin-right: 300px; margin-bottom: 80px;">
  <p style="margin: 0;">Quer falar agora com um <b>advogado online</b>?</p>
</div>

    </a>
  
  </div>
  
</div>

  <div id="preloader"></div>
<script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
{{-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}

<!-- Template Main JS File -->
<script src="{{ url('assets/js/main.js') }}"></script>


