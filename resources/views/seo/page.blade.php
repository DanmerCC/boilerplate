<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description', 'Descripción de la página')">
    <meta name="keywords" content="@yield('keywords', 'palabras, clave, por, defecto')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Título de la página')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              purple: '#7a6adc',
              black: '#39393A'
            }
          }
        }
      }
    </script>
    <style type="text/tailwindcss">
      @layer components {
        .box-container {
          @apply flex p-2 gap-3 border-2 border-purple rounded-lg
        }
        .publicity-container {
          @apply box-container gap-1 justify-center items-center
        }
        .btn {
          @apply box-container gap-0 hover:bg-purple
        }
      }
    </style>
    @stack('head')
</head>
<body class="bg-black min-w-72">
    <header class="bg-purple">
        <div class="flex flex-row container mx-auto p-5 gap-7 font-mono text-white">
            <a class="flex gap-7 text-2xl hover:cursor-pointer" href="{{ url('/') }}">
                <i class="fa-solid fa-book-open content-center"></i>
                <div>@yield('header-title', 'Título del Header')</div>
            </a>
        </div>
    </header>

    <main class="flex flex-col container mx-auto p-10 gap-y-6 font-mono text-white">
        @yield('content')
    </main>

    <footer style="display: contents" class="absolute w-screen start-0 bottom-0">
        <div class="text-center bg-purple text-white py-4">© CAMAYOC TEAM</div>
    </footer>

    @stack('scripts')
</body>
</html>
