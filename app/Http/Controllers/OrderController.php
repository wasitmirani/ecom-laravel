<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    //
    public function checkout()
    {

        $cartobj = new Cart();
        $cart = $cartobj->CartItems();
        if ($cart->count() < 1) {
            return back()->with('cartEmpty', 'Your cart is empty');
        }

        return view('frontend.pages.checkout');
    }

    public function orderprint(Request $request){
        $order= Order::where('id',$request->id)->with('orderIteams')->first();
        return view('frontend.pages.print',compact('order'));
    }
    public function index(Request $request)
    {
        $query = request('query');
        $today = date('Y-m-d');
        switch ($request->dateby) {
            case '1':

                $orders = Order::latest()->whereDate('created_at', Carbon::today())
                     ->where('name', 'like', '%' . $query . '%')
                     ->Orwhere('user_phone', 'like', '%' . $query . '%')
                     ->whereDate('created_at', Carbon::today())
                     ->Orwhere('user_email', 'like', '%' . $query . '%')
                     ->whereDate('created_at', Carbon::today())
                     ->Orwhere('address', 'like', '%' . $query . '%')
                     ->whereDate('created_at', Carbon::today())
                     ->paginate(env('PER_PAGE'));
                    $collect=Order::latest()
                    ->where('created_at', 'LIKE', "%" . $today . "%")->get();

                break;
            case '2':
                $yesterday = date('Y-m-d', strtotime('-1 days'));
                $orders = Order::latest()
                 ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $yesterday)
                ->where('name', 'like', '%' . $query . '%')
                ->Orwhere('user_phone', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $yesterday)
                ->Orwhere('user_email', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $yesterday)
                ->Orwhere('address', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $yesterday)->paginate(env('PER_PAGE'));
                    $collect=Order::where('created_at', '<=', $today)
                    ->where('created_at', '>=', $yesterday)
                         ->get();
                break;
            case '3':
                $today = date('Y-m-d');
                $lastmonth = date('Y-m-d', strtotime('-29 days'));
                $orders = Order::latest()->where('name', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $lastmonth)
                ->Orwhere('user_phone', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $lastmonth)
                ->Orwhere('user_email', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $lastmonth)
                ->Orwhere('address', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $lastmonth)->paginate(env('PER_PAGE'));
                $collect=Order::latest()->where('name', 'like', '%' . $query . '%')
                ->where('created_at', '<=', $today)
                ->where('created_at', '>=', $lastmonth)->get();
                break;
            case '4':
                $orders = Order::latest()->where('name', 'like', '%' . $query . '%')
                ->Orwhere('user_phone', 'like', '%' . $query . '%')
                ->Orwhere('user_email', 'like', '%' . $query . '%')
                ->Orwhere('address', 'like', '%' . $query . '%')
                ->paginate(env('PER_PAGE'));
                $collect=$orders;
                break;

            default:
                $orders = Order::latest()->where('name', 'like', '%' . $query . '%')
                ->Orwhere('user_phone', 'like', '%' . $query . '%')
                ->Orwhere('user_email', 'like', '%' . $query . '%')
                ->Orwhere('address', 'like', '%' . $query . '%')
                ->paginate(env('PER_PAGE'));
                $collect=$orders;
                break;
        }

        $collect = collect( $collect->all());

        $total = $collect->count();

        $cancel = $collect->where('status', 0)->count();
        $pending = $collect->where('status', 1)->count();
        $Accepted = $collect->where('status', 2)->count();

        return response()->json(['orders' => $orders, 'total' => $total, 'Accepted' => $Accepted, 'pending' => $pending, 'cancel' => $cancel,]);
    }

    public function Orderstatus(Request $request){
        if($request->value=="2")
        {
             Order::where('id',$request->id)->update(['status'=>2]);
            
            $orderItems=OrderDetails::where('order_id',$request->id)->get();
            foreach ($orderItems as $key => $item) {
                # code...
                Product::where('id',$item->product_id)->decrement('unitsInStock', $item->qty); 
            }
        }
        if($request->value=="0")
        Order::where('id',$request->id)->update(['status'=>0]);

    return response()->json([],200);
    }

    public function destroy($id)
    {

        $order=Order::destroy($id);
        if($order){
            return response()->json();
        }
    }
}
