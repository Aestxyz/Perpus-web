<?php

namespace App\View\Components\Guest;

use App\Models\Book;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.guest.navbar', [
            'book' => Book::count(),
            'transaction' => Transaction::count(),
            'user' => User::whereNotNull('email_verified_at')->count(),
        ]);
    }
}
