@extends('_layouts.master')

@section('nav-toggle')
@include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-7xl mx-auto px-6 md:px-8 py-4">
  <div class="flex flex-col lg:flex-row">
    <nav id="js-nav-menu" class="nav-menu hidden lg:block">
      @include('_nav.menu', ['items' => $page->navigation])
    </nav>

    <div class="w-full lg:w-3/5">
      <div class="DocSearch-content break-words pb-5 lg:pl-4 font-light p-5 sm:shadow md:rounded-lg bg-white" v-pre>
        @yield('content')

        <p class="pb-0 text-sm m-0 text-center">⏰ This document was last changed on {{ $page->lastModificationDate() }}.</p>
      </div>

      <div class="text-sm text-gray-600 mt-6">
        <ul class="list-none">
          <li class="ml-4 pb-2">If you <strong>spot an error or a need for improvement</strong> and would like to <strong>fix it yourself</strong> in a pull request, <a href="https://github.com/djaiss/officelife-documentation/tree/master/source{{ $page->getPath() }}.{{ $page->getExtension() }}">edit this page</a> on Github.</li>
          <li class="ml-4 pb-7">If you like to <strong>suggest an improvement to this doc</strong>, <a href="https://github.com/djaiss/officelife-documentation/issues">create an issue</a> on the repository on Github.</li>
          <li class="ml-4 text-center">No matter what, thanks for considering helping this project 🙏</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
