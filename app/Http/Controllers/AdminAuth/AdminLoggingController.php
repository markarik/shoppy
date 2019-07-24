<?php




namespace App\Http\Controllers\AdminAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoggingController extends Controller
{
   /* public  function __construct()
    {
        $this->middleware('guest:admin');
    }*/

use AuthenticatesUsers;
protected $redirectTo = '/admin/home';


    public function showLoginForm()

    {
        return view('pages.admin.admin-login');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
