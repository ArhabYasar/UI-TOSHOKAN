<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function register(){
        return view('Login.Register');
    }
    public function admin(){
        return view('dashboardAdmin.dashboardAdmin');
    }
    public function book(){
        return view('dashboardAdmin.book.book');
    }
    public function bookList(){
        return view('dashboardAdmin.book.bookList');
    }
    public function bookAdd(){
        return view('dashboardAdmin.book.bookAdd');
    }
    public function bookUpdate(){
        return view('dashboardAdmin.book.bookUpdate');
    }
    public function category(){
        return view('dashboardAdmin.category.categories');
    }
    public function categoryAdd(){
        return view('dashboardAdmin.category.categoriesAdd');
    }
    public function categoryUpdate(){
        return view('dashboardAdmin.category.categoriesUpdate');
    }
    public function users(){
        return view('dashboardAdmin.user.users');
    }
    public function usersBanned(){
        return view('dashboardAdmin.user.usersBanned');
    }
    public function usersResgired(){
        return view('dashboardAdmin.user.usersResgired');
    }
    public function usersDetail(){
        return view('dashboardAdmin.user.usersDetail');
    }
    public function returnBook(){
        return view('dashboardAdmin.returnBook');
    }
    public function profile(){
        return view('dashboardUser.profile');
    }
    public function rentLog(){
        return view('dashboardUser.rentLog');
    }
    public function listBook(){
        return view('dashboardUser.bookList');
    }

}
