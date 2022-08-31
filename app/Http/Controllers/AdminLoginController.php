<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.createlogin');
    }

    public function savelogin(Request $request){
        $validatedData = $request->validate([
        'email' => 'required|email',
       'password'=> 'required|min:6',
       
            ]
     );

   
     $remember_me = $request->has('remember_token') ? true : false; 

     if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'active' => 1],  $remember_me )) {
        $request->session()->regenerate();

     return redirect()->intended(route('admin.dashboard'));
    }else{
        return back()->withInput()->with('failed', 'Sorry! You have entered an invalid credentials');
       
    }

   

    }

    // public function postRegistration(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
            
    //        $usersignup = new User;
    //        $usersignup->name      = $request->name;
    //        $usersignup->email     = $request->email;
    //        $usersignup->password  = Hash::make($request->password);
    //        $usersignup->save();
    //        return redirect()->route('user.login');
 
    // }

    public function logout(){
        
       
        Auth::logout();
        return redirect('/admin/login');
    }

    public function showusers(){
        $user = User::all();
        return view('admin.showusers', ['user'=>$user]);
    }

    public function createuser(){
        $user = DB::table('users')->select('role')->groupBy('role')->get();
       return view('admin.createuser', ['user'=>$user]);
    }

    public function saveuser(Request $request){
        //Not finished done
        $validatedData = $request->validate([
            'name' => 'required|max:30|min:3',
             'username' => 'required|unique:users|min:3|max:30|regex:/^[A-Z0-9_-]$/i',
             'email' => 'required|email|unique:users',
             'password'=> 'required|min:6|confirmed',
            
             'role'=> 'required'
        ]
    );
    
      $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
      
          return redirect("/admin/users")->withSuccess('User has been successfully created');
        
    }

    public function edituser($id){
        //What if someone enters /1 in the url and 1 is id of the admin. Then that's find or fail.
        $user = User::findOrFail($id);
        return view('admin.edituser', ['user'=>$user]);
    
       
    }

    public function updateuser(Request $request, $id){
        

        $validatedData = $request->validate([
            'name' => 'required|max:30|min:3',
             'username' => 'required|unique:users|min:3|max:30|regex:/^[A-Z0-9_-]$/i',
             'email' => 'required|email|unique:users',
             'password'=> 'required|min:6',
             'password_confirmation'=> 'confirmed',
             'role'=> 'required'
        ]
    );
    
    $validatedData['password'] = bcrypt($validatedData['password']);
    $user = User::find($id);
        //$oneuser = User::find($id);
        //return view('admin.edituser', ['users'=>$oneuser]);
    
       
    }

    public function deleteuser($id){
       
        $user = User::find($id);
        $user->delete();
        return view('admin.showusers', ['user'=>$user]);
    
       
    }
   
    public function banuser(Request $request, $id){
        $user = User::where('id', '=', $id)->where('active', '=', '1');
     
        if($user->count() == 1){
                $request->validate([
                'active' =>'required|integer|size:1'
            ]);
           $user->active = $request->input('active');
           $user->update();
        return view('admin.showusers', ['user'=>$user]);


        }
        
       
    
       
    }

    //Category name

   
}


//$user=Session::get('user');
               // return $user->name; 
             //dd($request->session()->get('key'));
             //$request->session()->has('user');