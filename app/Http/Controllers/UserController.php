<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::paginate(50);
        return view('models.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        if($request->wantsJson()){
            return response()->json();
        }

        return redirect()->route('users.index')
            ->with('success',"User ({$user->name}) created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return Response
     */
    public function edit(User $user)
    {
        return view('models.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param User $user
     * @return JsonResponse|RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        if($request->wantsJson()){
            return response()->json();
        }

        return redirect()
            ->route('users.edit',$user)
            ->with('success',"User ({$user->name}) successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param  User $user
     * @return void
     * @throws Exception
     */
    public function destroy(Request $request, User $user)
    {

        $userName = $user->name;

        $user->delete();

        if($request->wantsJson()){
            return response()->json();
        }

        return redirect()
            ->route('users.index')
            ->with('success',"User ($userName) successfully removed");

    }
}
