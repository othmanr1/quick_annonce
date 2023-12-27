@extends('layouts.app')

@section('content')
<h2 class="mt-20 ml-2 text-3xl font-extrabold">Admin Pannel</h2>
<div class="flex flex-row gap-8 mt-20 ">
    <div class=" col-start-1col-end-2 border-2 rounded-3xl shadow-lg ">
    <div class="mt-4"></div>
    <a href="{{ route('admin_components.annonce') }}" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark">
          <img class="w-14 h-14 mr-2" src="{{ asset('assets/annonce_validate.svg') }}" alt="logo">
          <p class="hidden sm:hidden md:hidden lg:block m-4">Validation des annonces </p>   
      </a>
    </div>
    <div class="  border-2 rounded-3xl shadow-lg ">
        <div class="mt-4"></div>
    <a href="{{ route('admin_components.delete_user') }}" class=" ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark">
          <img class="w-14 h-14 mr-2" src="{{ asset('assets/user_delete.svg') }}" alt="logo">
          <p class="hidden sm:hidden md:hidden lg:block m-4">Supprimer un membre </p>   
      </a>
    </div>
    <div class="  border-2 rounded-3xl shadow-lg">  <a href="#" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark">
    <div class="mt-4"></div>
          <img class="mt-6 w-14 h-14 mr-2" src="{{ asset('assets/world.svg') }}" alt="logo">
          <p class="hidden sm:hidden md:hidden lg:block m-4">Gestion des categories </p>  
      </a></div>

      <div class=" border-2 rounded-3xl shadow-lg">  <a href="#" class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark">
    <div class="mt-4"></div>
          <img class="items-center sm:ml-0 md:ml-0 lg:ml-0 w-14 h-14 mt-6 mr-2 " src="{{ asset('assets/tools.svg') }}" alt="logo">
          <p class="hidden sm:hidden md:hidden lg:block m-4">Gestion des villes </p>  
      </a></div>
      <div class="  border-2 rounded-3xl shadow-lg">  <a href="{{ route('admin_components.delete_annonce') }}"  class="ml-6 flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-dark">
    <div class="mt-4"></div>

          <img class="items-center sm:ml-0 md:ml-0 lg:ml-0 w-14 h-14 mt-6 mr-2 " src="{{ asset('assets/cat.svg') }}" alt="logo">
          <p class="hidden sm:hidden md:hidden lg:block m-4">Supprimer Une annonce </p>  
      </a></div>
      
      </div>
      <div class=" mt-10">

        @yield('content-admin')
      </div>

   

    

@endsection
