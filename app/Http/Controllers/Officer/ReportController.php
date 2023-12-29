<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Penalty;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function users()
    {
        return view('report.users', [
            'users' => User::whereRole('Anggota')->latest()->get(),
        ]);
    }
    public function books()
    {
        return view('report.books', [
            'books' => Book::latest()->get(),
        ]);
    }
    public function borrows()
    {
        return view('report.borrows', [
            'transactions' => Transaction::where('status', 'Berjalan')->latest()->get(),
        ]);
    }
    public function returns()
    {
        return view('report.returns', [
            'transactions' => Transaction::where('status', 'Selesai')->latest()->get(),
        ]);
    }

    public function penalties()
    {
        $penalties = Penalty::get();

        return view('report.penalties', [
            'penalties' => $penalties,

        ]);
    }
}
