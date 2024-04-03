<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function profile()
    {
        return view('pages.profile');
    }
    public function profile_settings()
    {
        return view('pages.profile-settings');
    }
    public function invoice()
    {
        return view('pages.invoice');
    }
    public function invoice_list()
    {
        return view('pages.invoice-list');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function blog_details()
    {
        return view('pages.blog-details');
    }
    public function blog_edit()
    {
        return view('pages.blog-edit');
    }
    public function mail_inbox()
    {
        return view('pages.mail-inbox');
    }
    public function mail_settings()
    {
        return view('pages.mail-settings');
    }
    public function chat()
    {
        return view('pages.chat');
    }
    public function add_product()
    {
        return view('pages.add-product');
    }
    public function edit_product()
    {
        return view('pages.edit-product');
    }
    public function products()
    {
        return view('pages.products');
    }
    public function product_list()
    {
        return view('pages.product-list');
    }
    public function products_details()
    {
        return view('pages.products-details');
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function orders()
    {
        return view('pages.orders');
    }
    public function order_details()
    {
        return view('pages.order-details');
    }
    public function wishlist()
    {
        return view('pages.wishlist');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
    public function contactus()
    {
        return view('pages.contactus');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function timeline()
    {
        return view('pages.timeline');
    }
    public function teams()
    {
        return view('pages.teams');
    }
    public function landing()
    {
        return view('pages.landing');
    }
    public function todo()
    {
        return view('pages.todo');
    }
    public function tasks()
    {
        return view('pages.tasks');
    }
    public function reviews()
    {
        return view('pages.reviews');
    }
    public function faqs()
    {
        return view('pages.faqs');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function empty_page()
    {
        return view('pages.empty-page');
    }
}

