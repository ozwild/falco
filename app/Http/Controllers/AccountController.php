<?php

namespace App\Http\Controllers;

use App\Account;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $accounts = Account::paginate(50);
        return view('models.accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('models.accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $account = Account::create($request->all());

        if($request->wantsJson()){
            return response()->json();
        }

        return redirect()->route('accounts.index')
            ->with('success', "Account ({$account->name}) created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param Account $account
     * @return Response
     */
    public function show(Account $account)
    {
        $account->load('managers');
        return view('models.accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Account $account
     * @return Response
     */
    public function edit(Account $account)
    {
        return view('models.accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Account $account
     * @return Response
     */
    public function update(Request $request, Account $account)
    {
        $account->update($request->all());

        if($request->wantsJson()){
            return response()->json();
        }

        return redirect()
            ->route('accounts.index')
            ->with('success',"Account ({$account->name}) successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Account $account
     * @return Response
     * @throws Exception
     */
    public function destroy(Request $request, Account $account)
    {

        $accountName = $account->name;

        $account->delete();

        if($request->wantsJson()){
            return response()->json();
        }

        return redirect()
            ->route('accounts.index')
            ->with('success',"User ($accountName) successfully removed");
    }
}
