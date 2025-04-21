<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10); // Fetch all users from the database
        return view('admin.user.index', ['user' => $users]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.user.index')->with('success', 'User created successfully.');
    }

    // Display the specified resource.
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    // Show the form for editing the specified resource.
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required',
        ]);

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->update($request->only('name', 'email', 'role'));

        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully.');
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.layout', compact('user'));
        // return view('admin.dashboard', [
        //     'userName' => $user->name,
        //     'userEmail' => $user->email,
        //     'userPhoto' => $user->profile_photo_url ?? 'default-photo-url.jpg'
        // ]);
    }
}