@extends('base')
@section('content')
    <div class= "main-form p-4">
        <div class="container mx-auto bg-[#FBE9E7] rounded-xl shadow-md max-w-3xl">
            <h2 class="text-center pb-3" style="font-size: 2.25rem; font-family: 'Playfair Display'; font-weight: 400; color: #5c3c1d;">Edit Product</h2>

            <form action="{{ route('edit_product', ['product_id' => $product->product_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-4">
                    <label for="category_id" class="block text-gray-700 font-medium mb-2">Category</label>
                    <select name="category_id" id="category_id" class="w-full p-2 border border-gray-300 rounded">
                        @foreach($category as $category)
                            <option value="{{ $category->category_id }}" {{ $category->category_id == $product->category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                    id="name" name="name" value="{{ $product->name }}">
                    @error('name')
                       <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full p-2 border border-gray-300 rounded 
                    form-control @error('description') is-invalid @enderror" value= "{{ $product->description }}">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium mb-2">Price (Rp)</label>
                    <input type="number" name="price" id="price" class="w-full p-2 border border-gray-300 rounded
                    form-control @error('price') is-invalid @enderror" required value= "{{ $product->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="stock" class="block text-gray-700 font-medium mb-2">Stock</label>
                    <input type="number" name="stock" id="stock" class="w-full p-2 border border-gray-300 rounded
                    form-control @error('stock') is-invalid @enderror" required value= "{{ $product->stock }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="image_url" class="block text-gray-700 font-medium mb-2">Product Image</label>
                    <input type="file" name="image_url" id="image_url" class="w-full p-2 border border-gray-300 rounded
                    form-control @error('image_url') is-invalid @enderror" required value= "{{ $product->image_url }}">
                    @error('image_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="btn-save">Edit Product</button>
                    <a href="{{ route('product') }}" class="btn-cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
<style>
    .main-form{
        background-color: #f8f4ee;
    }

    .btn-cancel {
        background-color: #d3d3d3;
        color: #333;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .btn-cancel:hover {
        background-color: #b5b5b5;
    }

    .btn-save {
        background-color: #845a30; 
        color: white;
        padding: 7.8px 20px;
    }

    .btn-cancel{
        background-color: #4d2c0a; 
        color: white;
    }

    .btn-cancel, .btn-save{
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-save:hover {
        background-color: #5c3c1d; 
    }

    .btn-cancel:hover {
        background-color: rgb(73, 47, 21); 
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        margin-top: 20px;
    }
</style>

@endsection


