@extends('admin')

@section('content-admin')
//   in views/admin_components/category.blade.php
those are the routes for category in routes/web.php
Route::get('admin_category_create', [CategoryController::class, 'create'])
    ->name('admin_components.category_create')
    ->middleware('admin');

Route::post('admin_category_store', [CategoryController::class, 'store'])
    ->name('admin_components.category_store')
    ->middleware('admin');

Route::get('admin_category_show/{id}', [CategoryController::class, 'show'])
    ->name('admin_components.category_show')
    ->middleware('admin');

Route::get('admin_category_edit/{id}', [CategoryController::class, 'edit'])
    ->name('admin_components.category_edit')
    ->middleware('admin');

Route::put('admin_category_update/{id}', [CategoryController::class, 'update'])

    ->name('admin_components.category_update')
    ->middleware('admin'); 

Route::delete('admin_category_delete/{id}', [CategoryController::class, 'destroy'])
    ->name('admin_components.category_delete')
    ->middleware('admin');
in this page using tailwind css theme use modals to add, edit and delete categories  in this same page


<table class="table-fixed w-full">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2 w-20">ID</th>
            <th class="px-4 py-2">Libelle</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td class="border px-4 py-2">{{ $category->id }}</td>
            <td class="border px-4 py-2">{{ $category->libelle }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('admin_components.category_show', $category->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>
                <a href="{{ route('admin_components.category_edit', $category->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <form action="{{ route('admin_components.category_delete', $category->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>









  
  


@endsection


