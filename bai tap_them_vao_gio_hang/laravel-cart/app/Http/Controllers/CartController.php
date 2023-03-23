<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // Nếu giỏ hàng không tồn tại, tạo mới giỏ hàng với sản phẩm đầu tiên
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "price" => $product->price,
                    "quantity" => 1,
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng thành công!');
        }

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Số lượng sản phẩm trong giỏ hàng đã được cập nhật!');
        }

        // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm vào giỏ hàng với số lượng là 1
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => 1,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng thành công!');
    }
    public function removeCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
    }
}
