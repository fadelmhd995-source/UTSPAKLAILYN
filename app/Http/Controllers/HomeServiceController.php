<?php

namespace App\Http\Controllers;

use App\Models\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
    return view('homeservice.index');
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('HomeService.input');
    }

    /**
     * Store a newly created service.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string',
            'category' => 'required|string|in:Cleaning,Repair,Maintenance,Installation,Other',
        ]);

        // Set is_available value (checkbox)
        $validated['is_available'] = $request->has('is_available') ? 1 : 0;

        HomeService::create($validated);

        return redirect()
            ->route('homeservice.index')
            ->with('success', 'Service created successfully!');
    }

    /**
     * Display the specified service.
     */
    public function show(HomeService $homeservice)
    {
        return view('HomeService.show', compact('homeservice'));
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(HomeService $homeservice)
    {
        return view('HomeService.input', compact('homeservice'));
    }

    /**
     * Update the specified service.
     */
    public function update(Request $request, HomeService $homeservice)
    {
        $validated = $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string',
            'category' => 'required|string|in:Cleaning,Repair,Maintenance,Installation,Other',
        ]);

        // Set is_available value (checkbox)
        $validated['is_available'] = $request->has('is_available') ? 1 : 0;

        $homeservice->update($validated);

        return redirect()
            ->route('homeservice.index')
            ->with('success', 'Service updated successfully!');
    }

    /**
     * Remove the specified service.
     */
    public function destroy(HomeService $homeservice)
    {
        $homeservice->delete();

        return redirect()
            ->route('homeservice.index')
            ->with('success', 'Service deleted successfully!');
    }

    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('HomeService.login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Show the register form.
     */
    public function showRegisterForm()
    {
        return view('HomeService.register');
    }

    /**
     * Handle the register request.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        Auth::login($user);
        return redirect()->route('homeservice.index');
    }
    
    

    public function home()
    {
        return view('home');
    }

    public function Homecleaning()
    {
        return view('service.Homecleaning');
    }

     public function Deepcleaning()
    {
        return view('service.Deepcleaning');
    }

    public function Officecleaning()
    {
        return view('service.Officecleaning');
    }

    public function ACcleaning()
    {
        return view('service.ACcleaning');
    }

    public function tentangkami()
    {
        return view('tentangkami');
    }

    public function shop()
    {
        return view('shop');
    }

    public function shopRecommend(Request $request)
    {
        // Logic for handling shop recommendations can be added here
        return view('shop.recommend');
    }
}