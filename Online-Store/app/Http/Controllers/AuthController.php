<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use stdClass;

class AuthController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $us)
    {
        $this->userService = $us;
    }

    public function signup(): View
    {
        $viewData = new stdClass();
        $viewData->title = "Sign up";
        $viewData->subtitle = "Fill the form to sign up";

        return view('user.signup')->with("viewData", $viewData);
    }

    public function register(Request $request): RedirectResponse
    {
        try {
            $newUser = $this->userService->store($request);

            Auth($newUser);

            return redirect(RouteServiceProvider::HOME);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
