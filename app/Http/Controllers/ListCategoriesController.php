<?php

namespace App\Http\Controllers;

class ListCategoriesController extends Controller
{
    public function show($category)
    {
        switch ($category) {
            case 'so-mi':
                // Code for 'so-mi' category
                return $this->show_so_mi();
            case 'ao-polo':
                // Code for 'ao-polo' category
                return $this->show_ao_polo();
            case 'ao-phong':
                // Code for 'ao-phong' category
                return $this->show_ao_phong();
            case 'quan':
                // Code for 'quan' category
                return $this->show_quan();
            case 'ao-khoac':
                // Code for 'ao-khoac' category
                return $this->show_ao_khoac();
            case 'giay-andamp-dep':
                // Code for 'giay-andamp-dep' category
                return $this->show_giay_andamp_dep();
            default:
                abort(404);
        }
    }

    private function show_so_mi()
    {
        return view('posts.show');

    }

    private function show_ao_polo()
    {
        return view('posts.show');
    }

    private function show_ao_phong()
    {
        return view('posts.show');
    }

    private function show_quan()
    {
        return view('posts.show');
    }

    private function show_ao_khoac()
    {
        return view('posts.show');
    }

    private function show_giay_andamp_dep()
    {
        return view('posts.show');
    }
}