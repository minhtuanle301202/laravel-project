<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItems;

class CartController extends Controller
{
    protected CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function createOrUpdateCart(Request $request)
    {

        $user = auth()->user();
        $userId = $user->id;

        $cart = $this->cartService->createOrUpdateCart($userId, $request);
        if ($cart) {
            return response()->json(['message' => 'Thêm vào giỏ hàng thành công']);
        } else {
            return response()->json(['message' => 'Thêm vào giỏ hàng thất bại']);
        }

    }

    public function show()
    {
        $cart = $this->cartService->getCart(Auth::user()->id);
        $cartItems = $cart->cartItems;
        $cartItemFirst = CartItems::first();

        return view('pages.cart', compact('cartItems','cart'));
    }

    public function updateCartItemQuantity(Request $request)
    {
        $cart = $this->cartService->updateCartItemQuantity($request);
        return response()->json(['price' => $cart->price]);
    }

    public function deleteCartItem(Request $request) 
    {
        $cart = $this->cartService->deleteCartItem($request);
        return response()->json(['price' => $cart->price]);
    }

    public function deleteAllCartItems() {
        $cartId = auth()->user()->cart->id;
        $cart = $this->cartService->deleteAllCartItems($cartId);
        return response()->json(['price' => $cart->price]);
    }
}
?>