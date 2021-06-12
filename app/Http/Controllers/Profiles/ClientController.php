<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use App\Models\Profiles\ClientProfile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ClientController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Redirector|RedirectResponse
     */
    public function create(Request $request)
    {
        if ($request->user()->hasRole('client')){
            return redirect(route('home'));
        }
        return view('register-client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        $user = $request->user();
        if (!$user->hasRole('client')){
            $attributes = $request->validate([
                'phone' => 'required|max:255',
                'address' => 'required|max:255',
            ]);

            $user->assignRole('client');
            $user->assignClientProfile(ClientProfile::create($attributes));
        }

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param ClientProfile $clientProfile
     * @return Application|Factory|View
     */
    public function show(ClientProfile $clientProfile)
    {
        return view('client')
            ->with('client', $clientProfile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ClientProfile $clientProfile
     * @return Response
     */
    public function edit(ClientProfile $clientProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ClientProfile $clientProfile
     * @return Response
     */
    public function update(Request $request, ClientProfile $clientProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ClientProfile $clientProfile
     * @return Response
     */
    public function destroy(ClientProfile $clientProfile)
    {
        //
    }
}
