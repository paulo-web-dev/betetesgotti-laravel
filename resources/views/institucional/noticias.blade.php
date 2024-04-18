@include('layouts.head')

<body>
@include('layouts.header')
 
 <section id="news" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Notícias</span>
          <h2>Notícias</h2>
          <p>Veja os Artigos e notícias preparados por nós</p>
        </div>



        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
        @foreach ($noticias as $noticia)
            
     
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
             <a href="{{route('noticia', ['noticia' => $noticia->id])}}">
            <img src="{{url("fotos-noticias/$noticia->foto")}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$noticia->titulo}}</h4>
              <p>{{$noticia->autor}}</p>
              <a href="{{url("fotos-noticias/$noticia->foto")}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="{{route('noticia', ['noticia' => $noticia->id])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
            </a>
          </div>
    
@endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@include('layouts.footer')
</body>

</html>