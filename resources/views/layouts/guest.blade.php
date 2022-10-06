<!doctype html>
<!--
* GFI System - A record keeping for Gensan Feedmill, Inc. and record processing system. 
* @version 1.0.0
* @link https://api.gensanfeedmill.com
* Copyright 2022 Tabler
* Developer Maynard Magallen
* Copyright 2022 Gensan Feedmill, Inc.
-->
@props([
   'code' => 'Gensan Feedmill, Inc.'
])

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ $code }}</title>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter,-apple-system,BlinkMacSystemFont,San Francisco,Segoe UI,Roboto,Helvetica Neue,sans-serif !important;
      }
    </style>
    <!-- CSS files -->
    <link href="{{ asset('asset/custom/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/custom/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/custom/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/custom/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/custom/dist/css/demo.min.css') }}" rel="stylesheet"/>
    @livewireStyles
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column {{ $bg_white ?? ''}}">
    <div class="page page-center">

      {{-- @env('local', 'staging')
        <div class="container-tight py-4">
          <div class="text-center mb-4">
            <div class="alert alert-warning">
                @env('local')
                  Local Environment
                @endenv
                @env('staging')
                  Staging Environment
                @endenv
            </div>
          </div>
        </div>
      @endenv --}}

      {{ $slot }}
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('asset/images/lord-icon/lord-icon-dependency.js') }}"></script>
    <script src="{{ asset('asset/custom/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('asset/custom/dist/js/demo.min.js') }}" defer></script>

    @livewireScripts
    <script src="{{ asset('asset/js/alpinejs-3.10.3.js') }}"></script>

    @yield('script')
  </body>
</html>