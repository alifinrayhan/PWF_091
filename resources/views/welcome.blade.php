<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Profil Mahasiswa</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] border rounded-sm text-sm">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent rounded-sm text-sm">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] border rounded-sm text-sm">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-4 text-xl font-semibold">Identitas Mahasiswa</h1>
                
                <div class="flex flex-col gap-4 border-l-2 border-[#f53003] pl-4 my-6">
                    <div>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider text-[10px] font-bold">Nama Lengkap</p>
                        <p class="text-lg font-medium">Rachmat Alifin Rayhan</p>
                    </div>
                    <div>
                        <p class="text-[#706f6c] dark:text-[#A1A09A] uppercase tracking-wider text-[10px] font-bold">Nomor Induk Mahasiswa</p>
                        <p class="text-lg font-medium tracking-widest text-[#f53003] dark:text-[#FF4433]">20230140091</p>
                    </div>
                </div>

                <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A]">

                    
                </p>

                <div class="flex gap-3">
                    <a href="#" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal hover:opacity-90 transition-all">
                        
                    </a>
                </div>
            </div>

            <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden flex items-center justify-center">
                <div class="p-12 text-center z-10">
                    <svg class="w-48 h-48 text-[#F53003] opacity-20 mx-auto" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M61.8548 14.6253L29.7534 0.138246C29.1112 -0.141583 28.3745 -0.141583 27.7323 0.138246L0.145214 12.5447C0.0543591 12.5859 0 12.6738 0 12.7719V51.7281C0 51.8262 0.0543591 51.9141 0.145214 51.9553L27.7323 64.3618C28.0534 64.5059 28.4011 64.5779 28.7489 64.5779C29.0966 64.5779 29.4443 64.5059 29.7654 64.3618L61.8548 49.9142C61.944 49.8735 62 49.7854 62 49.6876V14.852C62 14.7541 61.944 14.666 61.8548 14.6253Z" fill="currentColor"/>
                    </svg>
                    <p class="mt-4 font-bold text-[#f53003] dark:text-[#FF4433] tracking-widest">TEKNOLOGI INFORMASI UMY</p>
                </div>
                <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
            </div>

        </main>
    </div>

    <div class="h-14.5 hidden lg:block"></div>
</body>
</html>