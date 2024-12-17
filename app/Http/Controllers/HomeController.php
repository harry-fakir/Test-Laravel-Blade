<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    // Task 1. Change the Controller code to pass the variable to the View
    public function users()
    {
        $usersCount = User::count();

        return view('users', ['usersCount' => $usersCount]);
    }

    // Task 2. Change the View code so alert would not show on the screen
    public function alert()
    {
        $text = htmlspecialchars('<script>alert("I am a security alert, your task is to remove me.");</script>');

        return view('alert', compact('text'));
    }

    // Task 3. Change the View code to show users, or row "No content" if 0 users
    public function table()
    {
        $users = User::all();

        return view('table', compact('users'));
    }


    // Task 4. Only every second row should have "bg-red-100" and Only the FIRST row should have email with "font-bold"
    public function rows()
    {
        $users = User::all();

        return view('rows', compact('users'));
    }

    public function include()
    {
        $users = User::all();

        return view('include', compact('users'));
    }

    // Task 5 (view). Change the View code to show if the user is authenticated or not. In the file resources/views/authenticated.blade.php, show the appropriate text, if the user is/isn't logged in. If the user is logged in, show their email.

    // Task 6 (view). In the file resources/views/include.blade.php, include another Blade file resources/views/includes/row.blade.php, passing the parameter correctly.

    //Task 7. In the file resources/views/layouts/app.blade.php, there's a "global" variable $metaTitle. Pass its value to this view, for all pages, without touching any Controllers.

    // Task 8. Change the file resources/views/layout.blade to extend the layouts/main.blade.php (without Blade components) instead of layouts/app.blade.php (with Blade components).
}
