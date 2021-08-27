<?php

namespace App\Http\Controllers;

use App\Models\BookService;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Service;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function reportByTail(Request $request)
    {
        $tail_id = $request->tail_id;
        $orders_of_tail = Order::query();

        $book_service_of_tail = BookService::query();

        if ($request->has("tail_id")) {
            $orders_of_tail = $orders_of_tail->where("tail_id", $tail_id);
            $book_service_of_tail = $book_service_of_tail->where("tail_id", $tail_id);
        }
        if ($request->has("from")) {
            $orders_of_tail = $orders_of_tail->where("created_at", ">=", $request->from);
            $book_service_of_tail = $book_service_of_tail->where("created_at", ">=", $request->from);
        }
        if ($request->has("to")) {
            $orders_of_tail = $orders_of_tail->where("created_at", "<=", $request->to);
            $book_service_of_tail = $book_service_of_tail->where("created_at", "<=", $request->to);
        }
        $orders_of_tail = $orders_of_tail->get()->toArray();
        $book_service_of_tail = $book_service_of_tail->get()->toArray();
        $data = [
            "total_revenue_order" => 0,
            "total_revenue_service" => 0,
            "total_count_order" => 0,
            "total_count_book" => 0,
            "number_order_paid" => 0,
            "number_service_paid" => 0,
            "service_deliveried" => 0,
            "order_deliveried" => 0,
        ];

        foreach ($orders_of_tail as $order) {
            $data["total_count_order"] += 1;

            $list_order_products = OrderProduct::where("order_id", $order["id"])->get()->toArray();
            foreach ($list_order_products as $order_product) {
                $data["total_revenue_order"] += $order_product["amount"] * $order_product["product_price"];
            }
            $data["number_order_paid"] += ($order["is_paid"] === true) ? 1 : 0;
            $data["order_deliveried"] += ($order["delivery_status"] === 1) ? 1 : 0;

        }

        foreach ($book_service_of_tail as $book_service) {
            $data['total_count_book'] += 1;
            $book_service = Service::where("id", $book_service["service_id"])->first();
            $data["total_revenue_service"] += $book_service["price"];
            $data["number_service_paid"] += ($book_service["is_paid"] === true) ? 1 : 0;
            $data["service_deliveried"] += ($book_service["delivery_status"] === 1) ? 1 : 0;

        }

        return \ApiService::success($data);

    }
}
