<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    // 📌 Tampilkan leaderboard berdasarkan poin tertinggi
    public function index()
    {
        $users = User::orderBy('points', 'desc')->take(10)->get();
        return view('leaderboard.index', compact('users'));
    }
}