@include('layouts.head')

<body>
@include('layouts.header')
   

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              <center>
                <div class="swiper-slide">
                  <img src="{{url("fotos-noticias/$noticia->foto")}}" alt="" style="max-width: 350px">
                </div>
              </center>
             
        

              </div>
               <h2>{{$noticia->titulo}}</h2>
              <p>
                <?= $noticia->noticia ?>
              </p>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Notícia</h3>
              <ul>
                <li><strong>Autor</strong>: {{$noticia->autor}}</li>
                <li><strong>Data de Postagem</strong>: {{$noticia->created_at}}</li>
              </ul>
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@include('layouts.footer')
</body>

</html>