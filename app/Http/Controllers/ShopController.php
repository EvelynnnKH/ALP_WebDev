<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ShopController extends Controller
{
    //
    public function show_product(){
        return view('product', [
            'products'=>Product::with(['category'])->get()
        ]);
    }

    public function showBySearch(Request $request)
    {
        $searchText = $request->input('search');
        $results = Product::where('name', 'like', '%' . $searchText . '%')
                 ->orWhere('description', 'like', '%' . $searchText . '%')
                 ->get();
        return view('searchpage', [
            'products'=>$results, 'searchText' => $searchText
        ]);
    }

    public function showByCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('category', [
            'products' => Product::with('category')->where('category_id', $id)->get(),
            'category' => $category
        ]);
    }

    public function showProductDetail($id)
    {
        $product = Product::with('category')->where('product_id', $id)->firstOrFail();
        return view('product-detil', [
            'product' => $product
        ]);
    }

    public function showCreateProduct(){
        return view('product.create', [
            'category' => Category::get()
        ]);
    }

    public function insert_product(Request $request){
        $product = new Product;
        if(!Gate::allows('insert-product')){
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk maksimal 255 karakter.',
            'description.required' => 'Nama produk wajib diisi.',
            'description.max' => 'Nama produk maksimal 255 karakter.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'price.min' => 'Harga tidak boleh negatif.',
            'stock.required' => 'Stok produk wajib diisi.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
            'stock.min' => 'Stok tidak boleh negatif.',
            'category_id.required' => 'Kategori produk harus dipilih.',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('productimages'), $imageName);
            $product->image_url = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect(route('product'))
        ->with('success', 'Product inserted successfully!');
    }

    public function edit_product_form($id){
        $product = Product::where('product_id', $id)->first();
        return view ('product.edit_form', [
            'product' => $product,
            'category' => Category::get()
        ]);
    }

    public function edit_product(Request $request, $id){
        // kalau bkn admin ga bs liat tombol ini
        if(!Gate::allows('edit-product')){
            abort(403);
        }

        // Validate the input
            $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required',
        ], [
            'name.required' => 'Nama produk wajib diisi.',
            'name.max' => 'Nama produk maksimal 255 karakter.',
            'description.required' => 'Nama produk wajib diisi.',
            'description.max' => 'Nama produk maksimal 255 karakter.',
            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
            'price.min' => 'Harga tidak boleh negatif.',
            'stock.required' => 'Stok produk wajib diisi.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
            'stock.min' => 'Stok tidak boleh negatif.',
            'category_id.required' => 'Kategori produk harus dipilih.',
        ]);

        $product = Product::where('product_id', $id)->first();

        // Handle image upload
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('productimages'), $imageName);
            $product->image_url = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;

        //insert into db using save method
        $product->save();

        return redirect(route('product'))
        ->with('success', 'Product Berhasil diedit! :D');
    }

    public function delete_product($id){
        // kalau bkn admin ga bs liat tombol ini
        if(!Gate::allows('delete-product')){
            abort(403);
        }
        $product = Product::where('product_id', $id)->first();
        $product->delete(); //auto soft delete based on model
        return redirect(route('product'))->with('success', 'Product berhasil dihapus!');
    }


    // add
    public function addToCart(Request $request, $id)
    {
        $product = Product::where('product_id', $id)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $quantity = $request->input('quantity', 1); // Default quantity is 1 if not provided
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;  // Increment quantity by the requested amount
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "image_url" => $product->image_url
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }
    // delete
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
        }

        return redirect()->back()->with('error', 'Produk tidak ditemukan di keranjang.');
    }

    public function viewCart()
    {
        dd(session()->get('cart'));
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // munculin cart
    public function cart(){
        //dd("test");
        $cart = session()->get('cart',[]);
        return view('cart', compact('cart'));
    }

    // add wishlist
    public function addToWishlist(Request $request, $id)
    {
        $product = Product::where('product_id', $id)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$id])) {
            return redirect()->back()->with('success', 'Product is already in your wishlist!');
        }

        $wishlist[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "image_url" => $product->image_url
        ];

        session()->put('wishlist', $wishlist);

        return redirect()->back()->with('success', 'Product added to wishlist!');
    }

    // remove from wishlist
    public function removeFromWishlist($id)
    {
        $wishlist = session()->get('wishlist', []);
        unset($wishlist[$id]);
        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Product successfully deleted from wishlist!');
    }

    // wishlist
    public function wishlist()
    {
        $wishlist = session()->get('wishlist', []);
        return view('wishlist', compact('wishlist'));
    }
}
