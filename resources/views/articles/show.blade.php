@extends('layouts.public')

@section('title', $article->title . ' | SMA Negeri 1 Suwawa')

@section('content')
<div class="bg-slate-50 py-12 border-b border-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm text-slate-500 font-medium" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}" class="hover:text-primary transition">Beranda</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right text-[10px] mx-2"></i>
                        <a href="{{ route('articles.index') }}" class="hover:text-primary transition">Berita</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fa-solid fa-chevron-right text-[10px] mx-2"></i>
                        <span class="text-slate-400 truncate max-w-[150px] sm:max-w-xs">{{ $article->title }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Article Header -->
        <header class="mb-10 text-center">
            <div class="inline-flex items-center gap-2 bg-white px-4 py-1.5 rounded-full border border-slate-200 text-primary text-xs font-bold uppercase tracking-wider mb-6 shadow-sm">
                {{ $article->category ?? 'Update' }}
            </div>
            
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-heading font-black text-slate-800 leading-tight tracking-tight mb-6">
                {{ $article->title }}
            </h1>
            
            <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-slate-500 font-medium">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center text-primary">
                        <i class="fa-solid fa-user-pen"></i>
                    </div>
                    <span>{{ $article->user->name ?? 'Admin' }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar-days text-primary text-base"></i> 
                    <span>{{ $article->date->translatedFormat('l, d F Y') }}</span>
                </div>
            </div>
        </header>

    </div>
</div>

<div class="py-12 bg-white min-h-[50vh]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Featured Image -->
        @if($article->thumbnail)
        <div class="relative rounded-3xl overflow-hidden shadow-lg mb-12 bg-slate-100 aspect-[16/9]">
            <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
        </div>
        @endif

        <!-- Article Content -->
        <article class="prose prose-lg prose-slate max-w-none 
            prose-headings:font-heading prose-headings:font-bold prose-headings:text-slate-800
            prose-a:text-primary prose-a:font-semibold prose-a:no-underline hover:prose-a:text-emerald-700 hover:prose-a:underline
            prose-img:rounded-2xl prose-img:shadow-md
            prose-blockquote:border-l-4 prose-blockquote:border-secondary prose-blockquote:bg-slate-50 prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:rounded-r-xl prose-blockquote:not-italic prose-blockquote:text-slate-700
            mb-16 pb-12 border-b border-slate-100">
            
            {!! $article->content !!}
            
        </article>

        <!-- Share & Tags (Optional) -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mb-16 px-6 py-4 bg-slate-50 rounded-2xl border border-slate-100">
            <span class="font-bold text-slate-700">Bagikan artikel ini:</span>
            <div class="flex gap-3">
                <a href="#" class="w-10 h-10 rounded-full bg-white text-slate-600 flex items-center justify-center hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] transition shadow-sm border border-slate-200"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-white text-slate-600 flex items-center justify-center hover:bg-[#1DA1F2] hover:text-white hover:border-[#1DA1F2] transition shadow-sm border border-slate-200"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-white text-slate-600 flex items-center justify-center hover:bg-[#25D366] hover:text-white hover:border-[#25D366] transition shadow-sm border border-slate-200"><i class="fa-brands fa-whatsapp text-lg"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-white text-slate-600 flex items-center justify-center hover:bg-slate-800 hover:text-white transition shadow-sm border border-slate-200"><i class="fa-solid fa-link"></i></a>
            </div>
        </div>

    </div>
</div>
@endsection
