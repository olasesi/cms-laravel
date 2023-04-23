<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.createlogin');
    }

    public function savelogin(Request $request){
        if (Auth::viaRemember()) {
            $request->session()->regenerate();
             return redirect()->intended(route('admin.dashboard'));
        }
        $validatedData = $request->validate([
        'email' => 'required|email',
       'password'=> 'required|string|min:6',
       'remember_token'=>'nullable'
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

  
    public function logout(){

        Auth::logout();
        return redirect('/admin/login');
    }

    public function showusers(){
        //$user = User::all();
        $user = User::all()->posts()->where('image', 'health1.jpg')->get();
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
             'username' => array('required', 'unique:users', 'min:3', 'max:30', 'regex:/^[A-Z0-9_-]{3,30}$/i'),
             'email' => 'required|email|unique:users',
             'password'=> 'required|string|min:6|confirmed',
             'role'=> 'required',
             'facebook'=>'nullable|url',
             'twitter' =>'nullable|url',
             'google_plus' =>'nullable|url',
             'linkedin' =>'nullable|url',
             'bio' => 'nullable|min:3',
             'image' => 'nullable|mimes:jpeg,jpg,png|max:2048',
        ]
    );
    
   
      //$validatedData['password'] = bcrypt($validatedData['password']);
       $user_create = User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => $request->role,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'google_plus' => $request->google_plus,
        'linkedin' => $request->linkedin,
        'bio' => $request->bio,
        'user_image' => $request->image,
        
        
        ]);

        if ($request->file('image')){
            $file_name = time().'_'.$request->image->getClientOriginalName();
            $file_path = $request->file('image')->storeAs('images/users', $file_name, 'public');
        
            $user_create->update([
                'user_image' => $file_name,
                'user_image_path' => $file_path      //Get file path fixed
            ]);
        }else{
    
            $user_create->update([
                'user_image' => 'user_avatar.png',
                'user_image_path' => 'images/logo/user_avatar.png',     
            ]);
        }


        
        return back()->with('success', 'User has been successfully created');
         
        
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
             'password'=> 'required|string|min:6',
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