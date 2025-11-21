@extends('layouts.site')

@section('content')
  <section class="relative">
    <div class="relative isolate">
      <div class="absolute inset-0 -z-10">
        <div class="h-[68vh] w-full bg-center bg-cover" style="background-image:url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=1600&auto=format&fit=crop');"></div>
        <div class="absolute inset-0 bg-slate-900/60"></div>
      </div>

      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex min-h-[68vh] items-center">
          <div class="max-w-2xl text-white">
            <span class="inline-flex items-center rounded-full bg-white/10 px-3 py-1 text-xs font-semibold ring-1 ring-inset ring-white/25">#FakultasTeknik</span>
            <h1 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">Fakultas Teknik</h1>
            <p class="mt-2 text-white/85">Unggul dalam pendidikan, penelitian, dan pengabdian masyarakat.</p>
            <div class="mt-6 flex flex-wrap gap-3">
              <a href="#kegiatan" class="inline-flex items-center gap-2 rounded-xl bg-red-600 px-5 py-3 text-white font-semibold shadow hover:bg-red-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-600">Kegiatan
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5"><path fill-rule="evenodd" d="M3.75 12a.75.75 0 0 1 .75-.75h13.19l-4.22-4.22a.75.75 0 0 1 1.06-1.06l5.5 5.5a.75.75 0 0 1 0 1.06l-5.5 5.5a.75.75 0 1 1-1.06-1.06l4.22-4.22H4.5A.75.75 0 0 1 3.75 12Z" clip-rule="evenodd"/></svg>
              </a>
              <a href="#pengurus" class="inline-flex items-center rounded-xl bg-white/90 px-5 py-3 font-semibold text-slate-900 shadow hover:bg-white">Pengurus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="kegiatan" class="py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-xl font-semibold mb-6">Kegiatan Terbaru</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="rounded-xl border border-slate-200 p-5">
          <h3 class="font-semibold">Judul Kegiatan</h3>
          <p class="text-sm text-slate-600 mt-1">Deskripsi singkat kegiatan.</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-5">
          <h3 class="font-semibold">Judul Kegiatan</h3>
          <p class="text-sm text-slate-600 mt-1">Deskripsi singkat kegiatan.</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-5">
          <h3 class="font-semibold">Judul Kegiatan</h3>
          <p class="text-sm text-slate-600 mt-1">Deskripsi singkat kegiatan.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
