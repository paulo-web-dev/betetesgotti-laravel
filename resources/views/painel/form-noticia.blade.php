@extends('layouts.painel.header')
@section('content')
<style>
    #image-preview {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap; /* Permitir que as imagens quebrem para a próxima linha */
    }

    .preview-image {
        max-width: 100%;
        max-height: 100%;
        margin: 5px; /* Adicionar margem de 5px entre as imagens */
    }
</style>


<!-- BEGIN: Personal Information -->
    <div class="intro-y box mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
               Cadastro de Noticias
            </h2>
            <a href="{{route('noticias-painel')}}" class="btn btn-primary shadow-md mr-2"><i data-feather="skip-back" class="w-4 h-4 mr-2"></i>Voltar</a>
        </div>

        <form action="{{route('cad-noticias')}}" enctype="multipart/form-data"  method="post">
       
            <div class="p-5">

                  <div class="grid grid-cols-12 gap-x-5">

                    @csrf
                    <div class="col-span-12 xl:col-span-6">

                        <div class="mt-3">
                            <label for="update-profile-form-7" class="form-label"><strong>Título</strong></label>
                            <input id="update-profile-form-7" type="text" name="titulo" class="form-control"
                                placeholder="Título da Notícia" value="" required>
                        </div>
                         <div class="mt-3"  id="link">
                            <label for="update-profile-form-7" class="form-label"><strong>Texto</strong></label>
                            <textarea required class="form-control editor" name="noticia" id="editor" cols="30" rows="40"></textarea>
                        </div>
                
                    </div>

 
                   
                <div class="col-span-12 xl:col-span-6">
                        <label class="form-label"><strong>Upload de foto de capa da notícia</strong></label>
                        <div class="border-2 border-dashed dark:border-dark-5 rounded-md pt-4">
                            <div class="px-4 pt-24 pb-24 flex items-center justify-center cursor-pointer relative">
                             <div id="image-preview" class="hidden">
                                    <img id="preview-image" src="" alt="Clique Aqui Para Upload de Imagem">
                            </div>
                                <input type="file" id="file" name="file"
                                 required   class="w-full h-full top-0 left-0 absolute opacity-0"  >
                            </div>
                        </div>
                    </div>
                </div>
                       
                <div class="flex justify-end mt-4">
                    <button type="submit" class="btn btn-primary w-40 mr-auto">Cadastrar Notícia</button>  
                    
                </div>
            </div>
        </form>
    </div> 

    <!-- END: Personal Information -->
    <!-- END: Users Layout -->
    </div>
<script>
    document.getElementById('file').addEventListener('change', function(e) {
        const fileInput = e.target;
        const imagePreview = document.getElementById('image-preview');

        if (fileInput.files && fileInput.files.length > 0) {
            imagePreview.innerHTML = ''; // Limpe qualquer prévia anterior

            for (let i = 0; i < fileInput.files.length; i++) {
                const reader = new FileReader();
                const img = document.createElement('img');
                img.classList.add('preview-image');
                
                reader.onload = function (e) {
                    img.src = e.target.result;
                    imagePreview.appendChild(img);
                };
                
                reader.readAsDataURL(fileInput.files[i]);
            }

            imagePreview.classList.remove('hidden');
        } else {
            imagePreview.innerHTML = ''; // Limpe qualquer prévia anterior
            imagePreview.classList.add('hidden');
        }
    });
</script>
{{-- <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>  --}}

@endsection
@push('custom-scripts')
    
   
         <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>  <!--Script do iconify-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{url('dist/js/app.js')}}"></script>
     
        
        <!-- END: JS Assets-->
    </body>
</html>

@push('custom-scripts')





@endpush
