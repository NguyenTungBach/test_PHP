<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function demo1(){
        $money = 0;
        for ($i = 1; $i <= 10; $i++) {
            $product = new Products();
            $product->name = "Product $i";
            $money = $money +1000;
            $product->price = $money;
            $product->save();
        }
        return 'Oke Product';
    }

    public function demo2(){
        for ($i = 1; $i <= 5; $i++) {
            $customer = new Customer();
            $customer->name = "Customer $i";
            $customer->address = "Address $i";
            $customer->save();
        }
        return 'Oke Customer';
    }

    public function demo3(){
        $id_dem = 0;
        for ($i = 1; $i <= 10; $i++) {
            $order = new Order();
            if ($id_dem == 5){
                $id_dem = 0;
            }
            $id_dem = $id_dem+1;
            $order->customer_id = $id_dem;
            $order->save();
        }
        return 'Oke Order';
    }

    public function demo4(){
        $order_id = 0;
        $product_id = 0;
        for ($i = 1; $i <= 10; $i++) {
            $order_id = $order_id + 1;
            $product_id = $product_id + 1;
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order_id;
            $orderDetail->product_id = $product_id;
            $orderDetail->quantity = $i;
            $orderDetail->unit_price = Products::where('id','=',$product_id)->value('price');
            $orderDetail->save();
        }
        $order_id = 0;
        $product_id = 1;
        for ($i = 1; $i <= 10; $i++) {
            $order_id = $order_id + 1;
            $product_id = $product_id + 1;
            if ($order_id == 9 && $product_id == 10){
                $order_id = 7;
                $product_id = 2;
            }
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order_id;
            $orderDetail->product_id = $product_id;
            $orderDetail->quantity = $i+10;
            $orderDetail->unit_price = Products::where('id','=',$product_id)->value('price');
            $orderDetail->save();
        }

        $order_id = 0;
        $product_id = 3;
        for ($i = 1; $i <= 10; $i++) {
            $order_id = $order_id + 1;
            $product_id = $product_id + 1;
            if ($order_id == 7 && $product_id == 10){
                $order_id = 6;
                $product_id = 4;
            }
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order_id;
            $orderDetail->product_id = $product_id;
            $orderDetail->quantity = $i+10;
            $orderDetail->unit_price = Products::where('id','=',$product_id)->value('price');
            $orderDetail->save();
        }
        return 'Oke OrderDetail';
    }
}
