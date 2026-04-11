<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Menggunakan Policy 'create'
        $this->authorize('create', Product::class);
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Product::class);

        $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Otomatis mengisi user_id dengan ID user yang sedang login
        Product::create([
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'user_id' => auth()->id(), 
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambah!');
    }

    public function edit(Product $product)
    {
        // Logika Inti: Cek apakah user boleh update produk ini (cek role & user_id)
        $this->authorize('update', $product);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $this->authorize('update', $product);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        // Logika Inti: Cek apakah user boleh hapus produk ini
        $this->authorize('delete', $product);

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }

    // Fungsi Export khusus Admin (Menggunakan Gate)
    public function export()
    {
        if (Gate::denies('export-product')) {
            abort(403, 'Hanya Admin yang boleh ekspor data!');
        }

        // Logika ekspor kamu di sini...
        return "Proses Export Berhasil!";
    }
}