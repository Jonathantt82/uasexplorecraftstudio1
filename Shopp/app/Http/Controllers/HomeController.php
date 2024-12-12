<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Kreait\Laravel\Firebase\Facades\Firebase;

class HomeController extends Controller
{
    public function index() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }
        return view('home.landing-page');
    }

    public function profile() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }
        return view('home.profile');
    }

    public function coursepage() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }
        $database = Firebase::database();
        $result = $database->getReference('items')->getValue();

        $d = [];
        $check = false;
        foreach ($result as $key) {
            if ($key != null) {
                if (array_key_exists('carts', $key)) {
                    foreach ($key['carts'] as $cart) {
                        if ($cart['user_id'] == Session::get('user_id')) {
                            $check = true;
                        }
                    }
                }

                $d[] = [
                    'id' => $key['id'],
                    'product_name' => $key['product_name'],
                    'price' => $key['price'],
                    'image' => $key['image'],
                    'rating' => $key['rating'],
                    'reviews' => $key['reviews'],
                    'in_cart' => $check
                ];
                $check = false;
            }
        }


        return view('home.coursepageafterenroll', ['data' => $d]);
    }

    public function paymentpage() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }

        $database = Firebase::database();
        $result = $database->getReference('carts/' . Session::get('user_id'))->getValue();
        $d = [];
        $s = [];
        $total = 0;
        if ($result != null) {
            foreach ($result as $key) {
                if ($key != null) {
                    if (array_key_exists('product_type', $key)) {
                        $total = $total + $key['price'];
                        $d[] = [
                            'id' => $key['id'],
                            'product_name' => $key['product_name'],
                            'price' => $key['price'],
                            'image' => $key['image'],
                            'rating' => $key['rating'],
                            'reviews' => $key['reviews'],
                            'product_type' => !array_key_exists('product_type', $key) ? '' : $key['product_type'],
                        ];
                    } else {
                        $total = $total + $key['price'];
                        $s[] = [
                            'id' => $key['id'],
                            'product_name' => $key['product_name'],
                            'price' => $key['price'],
                            'image' => $key['image'],
                            'rating' => $key['rating'],
                            'reviews' => $key['reviews'],
                            'product_type' => !array_key_exists('product_type', $key) ? '' : $key['product_type'],
                        ];
                    }
                }
            }
        }

        return view('home.payment', ['course' => $d, 'items' => $s, 'total' => $total]);
    }

    public function courseCat() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }
        return view('home.course-per-category');
    }

    public function shopCart() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }

        $database = Firebase::database();
        $result = $database->getReference('carts/' . Session::get('user_id'))->getValue();
        $d = [];
        $total = 0;
        if ($result != null) {
            foreach ($result as $key) {
                if ($key != null) {
                    $total = $total + $key['price'];
                    $d[] = [
                        'id' => $key['id'],
                        'product_name' => $key['product_name'],
                        'price' => $key['price'],
                        'image' => $key['image'],
                        'rating' => $key['rating'],
                        'reviews' => $key['reviews'],
                        'product_type' => !array_key_exists('product_type', $key) ? '' : $key['product_type'],
                    ];
                }
            }
        }

        return view('home.shopping-cart', ['data' => $d, 'total' => $total]);
    }

    public function deleteCart($id) {
        $database = Firebase::database();
        $database->getReference('carts/' . Session::get('user_id') . '/' . $id)->remove();
        return Redirect::route('shop-cart');
    }

    public function shopPage() {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }

        $database = Firebase::database();
        $result = $database->getReference('items')->getValue();

        $d = [];
        $check = false;
        foreach ($result as $key) {
            if ($key != null) {
                if (array_key_exists('carts', $key)) {
                    foreach ($key['carts'] as $cart) {
                        if ($cart['user_id'] == Session::get('user_id')) {
                            $check = true;
                        }
                    }
                }

                $d[] = [
                    'id' => $key['id'],
                    'product_name' => $key['product_name'],
                    'price' => $key['price'],
                    'image' => $key['image'],
                    'rating' => $key['rating'],
                    'reviews' => $key['reviews'],
                    'in_cart' => $check
                ];
                $check = false;
            }
        }

        return view('home.shopepage', ['data' => $d]);
    }

    public function addCart($id) {
        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }
        $database = Firebase::database();
        $query = $database->getReference('items/' .$id)->getValue();
        //$database->getReference('items/' .$id .'/carts/' . Session::get('user_id'))->set(['user_id' => Session::get('user_id')]);
        $database->getReference('carts/' . Session::get('user_id') . '/' . $id)->set([
            'id' => $query['id'],
            'product_name' => $query['product_name'],
            'price' => $query['price'],
            'image' => $query['image'],
            'rating' => $query['rating'],
            'reviews' => $query['reviews'],
            'qty' => 1,
        ]);
        return Redirect::route('shop-page')->with('success', 'Added to cart');
    }
    public function addCartM(Request $request) {

        if (Session::get('user_id') == null) {
            return Redirect::route('login');
        }

        $request->validate([
            'product_name' => 'required',
        ]);

        $database = Firebase::database();
        if (!empty($request->checks)) {
            foreach ($request->checks as $check) {
                $query = $database->getReference('items/' . $check)->getValue();
                $database->getReference('carts/' . Session::get('user_id') . '/' . $check)->set([
                    'id' => $query['id'],
                    'product_name' => $query['product_name'],
                    'price' => $query['price'],
                    'image' => $query['image'],
                    'rating' => $query['rating'],
                    'reviews' => $query['reviews'],
                    'qty' => 1,
                ]);
            }
        }

        $database->getReference('carts/' . Session::get('user_id') . '/' . '1000')->set([
            'id' => 1000,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'image' => $request->image,
            'rating' => '',
            'reviews' => '',
            'product_type' => $request->product_type,
            'qty' => 1,
        ]);

        return Redirect::route('shop-cart');
    }


    public function test() {
        $database = Firebase::database();
        $query = $database->getReference('items/1')->getValue();
        return $query;
    }
}
