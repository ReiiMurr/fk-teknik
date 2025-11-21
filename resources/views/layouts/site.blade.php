<!doctype html>
<html lang="id" class="h-full">
  <head>
    @include('partials.head', ['title' => $title ?? 'Fakultas'])
  </head>
  <body class="min-h-full bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
    <header class="sticky top-0 z-50 border-b border-slate-200/60 bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60 dark:border-slate-800 dark:bg-slate-900/80 supports-[backdrop-filter]:dark:bg-slate-900/60">
      <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center gap-3">
            <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-slate-900 text-white text-sm font-semibold dark:bg-white dark:text-slate-900">FT</span>
            <span class="font-semibold">Fakultas </span>
          </div>
          <div class="flex items-center gap-1">
            <div class="hidden md:flex items-center gap-1">
              <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium rounded-full text-slate-700 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-300 dark:hover:text-white dark:hover:bg-slate-800/70">Home</a>
              <span class="mx-1 h-5 w-px bg-slate-200 dark:bg-slate-700"></span>
              <a href="#" class="px-3 py-2 text-sm font-medium rounded-full text-slate-700 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-300 dark:hover:text-white dark:hover:bg-slate-800/70">Profile</a>
              <span class="mx-1 h-5 w-px bg-slate-200 dark:bg-slate-700"></span>
              <a href="#" class="px-3 py-2 text-sm font-medium rounded-full text-slate-700 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-300 dark:hover:text-white dark:hover:bg-slate-800/70">About</a>
              <span class="mx-1 h-5 w-px bg-slate-200 dark:bg-slate-700"></span>
              <a href="#" class="px-3 py-2 text-sm font-medium rounded-full text-slate-700 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-300 dark:hover:text-white dark:hover:bg-slate-800/70">Contact</a>
              <span class="mx-2 h-5 w-px bg-slate-200 dark:bg-slate-700"></span>
            </div>
            <button id="theme-toggle" type="button" title="Ganti tema" class="inline-flex items-center justify-center rounded-full p-2 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800/70">
              <span class="sr-only">Toggle theme</span>
              <span data-icon="sun">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
              </span>
              <span data-icon="moon" class="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
              </span>
            </button>
            <div class="md:hidden">
              <button type="button" aria-label="Menu" class="inline-flex items-center justify-center rounded-md p-2 text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800/70">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="M3.75 5.25a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75Zm0 6a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75Zm0 6a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 0 1.5h-15a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/></svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      {{ $slot ?? '' }}
      @yield('content')
    </main>

  </body>
</html>
