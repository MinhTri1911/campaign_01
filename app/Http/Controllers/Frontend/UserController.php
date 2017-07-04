<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;
use Exception;

class UserController extends FrontendController
{
    public function __construct(UserInterface $userRepository)
    {
        parent::__construct($userRepository);
    }

    public function index()
    {
        $this->view = null;

        return $this->viewRender();
    }

    public function active($tokenConfirm)
    {
        try {
            $user = $this->repository->active($tokenConfirm);

            if (!$user) {
                throw new Exception();
            }

            return redirect()->action('Frontend\UserController@index')
                ->with('messages', trans('messages.login_success'));
        } catch (Exception $e) {
            return redirect()->action('Auth\LoginController@getLogin')
                ->with('messages-fail', tran_choice('messages.login_fail', 1));
        }
    }

    public function demo($id)
    {
        // $x = $this->repository->findOrFail($id)->campaigns()->with('events')->with('actions')->get();
        // $y = $this->repository->findOrFail($id)->with('campaigns')->with('events')->with('actions')->get();
        $x = $this->repository->findOrFail($id)
            ->followers()
                ->with('followers')->with('followed')->get();
        $y = $this->repository->findOrFail($id)
                ->with('followers')->with('followed')->get();
        dd($x, $this->repository->findOrFail($id)
            ->followers, $y);
    }
}
