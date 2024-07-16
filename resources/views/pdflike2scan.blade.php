@extends('seo.page')
@section('title', 'PDF Scanner')
@section('description', 'Util herramienta para escanear documentos')
@section('keywords', 'pdf, escaner, herramienta, word, gratis')
@section('header-title', 'PDF Scanner')
@section('og:title', 'PDF Scanner')
@section('og:description', 'Util herramienta para escanear documentos')
@section('og:image', asset('camayocdefault.png'))
@section('content')
    <h2 class="text-xl text-center">Bienvenido a PDF Scanner! 😃</h2>

    <p class="hidden sm:line-clamp-3">
      Con PDF Scanner, puedes escanear fácilmente documentos 📕 cargando tus archivos abajo 👇. Estos se convertiran en archivos PDF con buena calidad 🤓☝️. Tanto si estás en casa, en la oficina o de viaje, PDF Scanner hace que la gestión de documentos sea sencilla y eficaz.
      Querías una herramienta útil para escanear documentos? No esperes más 🕑 y prueba PDF Scanner ✨
    </p>

    <div class="flex flex-col md:flex-row md:items-center">
      <div class="hidden md:flex publicity-container invisible">
        <a class="w-full h-32 md:w-36 md:h-96 place-content-center" href="">
          <img class="object-scale-down w-full h-full" src="">
        </a>
      </div>

      <div class="flex flex-col gap-2 w-full items-center">
        <div class="box-container self-stretch justify-center items-center">
          <!-- When no file is uploaded  -->
          <button id="upload-btn" class="box-container flex-col my-20 gap-3 size-36 border-dashed border-white justify-center items-center hover:bg-purple disabled:blur-sm">
            <i class="fa-solid fa-cloud-arrow-up text-5xl"></i>
            <div class="text-wrap">Upload your file here</div>
          </button>
          <input type="file" id="file-input" class="hidden" accept=".pdf" />

          <!-- When a file is uploaded -->
          <div id="file-info" class="flex flex-col gap-2 size-32 items-center justify-center hidden">
            <i class="fa-regular fa-file text-4xl"></i>
            <div id="file-name"></div>
          </div>
        </div>
        <button class="btn" id="convert-btn">Convert and download</button>
        <div id="loading-spinner" class="hidden">
          <i class="fa-solid fa-spinner fa-spin text-4xl text-purple-600"></i>
        </div>
      </div>

      <div class="hidden md:flex publicity-container invisible">
        <a class="w-full h-32 md:w-36 md:h-96 place-content-center" href="">
          <img class="object-scale-down w-full h-full" src="">
        </a>
      </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const uploadBtn = document.getElementById('upload-btn');
        const fileInput = document.getElementById('file-input');
        const fileInfo = document.getElementById('file-info');
        const fileName = document.getElementById('file-name');
        const convertBtn = document.getElementById('convert-btn');
        const loadingSpinner = document.getElementById('loading-spinner');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        uploadBtn.onclick = () => fileInput.click();

        fileInput.onchange = (event) => {
            const file = event.target.files[0];
            if (file) {
                fileInfo.classList.remove('hidden');
                fileName.textContent = file.name;
                uploadBtn.classList.add('hidden');
            }
        };

        convertBtn.onclick = () => {
            const file = fileInput.files[0];
            if (file) {
                loadingSpinner.classList.remove('hidden');
                const formData = new FormData();
                formData.append('file', file);
                fetch('{{ route('like2scan.upload') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    }
                }).then(response => response.json())
                .then(data => {
                    loadingSpinner.classList.add('hidden');
                    if (data.success) {
                        const a = document.createElement('a');
                        a.href = data.url;
                        a.target = '_blank';
                        a.download = 'converted.pdf';
                        a.click();
                    }
                }).catch(() => {
                    loadingSpinner.classList.add('hidden');
                    alert('Error during file conversion');
                });
            }
        }
    });
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RYT9XGNPJ8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RYT9XGNPJ8');
</script>
@endpush
