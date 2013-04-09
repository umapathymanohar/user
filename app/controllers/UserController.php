<?php
class UserController extends BaseController
{

    public function registerAccount (){
           $email    = Input::get('email');
           $password = Input::get('password');
           $confirmPassword = Input::get('password_confirmation');
        
            $input    = array(
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $confirmPassword
        );
        

            $rules      = array(
                'email' => 'required|email|unique:users',
                'password'  =>'required|confirmed',
                'password_confirmation'  =>'required'
                
            );
            $validation = Validator::make($input, $rules);
            if ($validation->fails()) {
                return Redirect::to('user/register')->withErrors($validation);
            }

             try {
                $user           = new User();
                $user->email    = $email;
                $user->password = Hash::make($password);
                $user->save();
                Auth::login($user);


                $user = Auth::user();

                $user->role()->attach(3);



                 


                return View::make('home.index')->with('message', 'Successfully Registered');
            }
            catch (Exception $e) {
                Session::flash('status_error', 'An error occurred while creating a new account - please try again.');
                return Redirect::to('home');
            }

    }

 
    public function authenticate()
    {
        $email    = Input::get('email');
        $password = Input::get('password');

        $input    = array(
            'email' => $email,
            'password' => $password
        );
        
            $rules      = array(
                'email' => 'required|email|exists:users',
                'password' => 'required',
                
            );
            $validation = Validator::make($input, $rules);
            if ($validation->fails()) {
                return Redirect::to('home')->withErrors($validation);
            }
                       $credentials = array(
                'email' => $email,
                'password' => $password
            );
                    if (Auth::attempt($credentials)) {
                return Redirect::to('dashboard');
            } else {
                Session::flash('status_error', 'Your email or password is invalid - please try again.');
                return Redirect::to('home');
            }
   
      
    }


    public function logout()
    {
        Auth::logout();
        return Redirect::to('home');
    }

    
    public function forgotPassword()
    {
        return View::make('home.forgotPassword');
    }


    public function register()
    {
        
        return View::make('user.register');
    }

    public function remind()
    {
        $credentials = array(
            'email' => Input::get('email')
        );
        return Password::remind($credentials, function($m)
        {
            $m->subject('Reset your reminder');
        });

        
    }

    public function redirect()
    {
        return Redirect::to('home');
    }
    
    public function reset($token)
    {
        return View::make('user.reset')->with('token', $token);
    }

    public function resetSuccess()
    {
        return View::make('user.successReset');
    }

    public function passwordSuccess()
    {
        $message = "success";
        if ($message == "success"){
        return View::make('home.index')->with('message', 'Password Reminder Mail Sent Successfully!');
        }
        else
        {
            return View::make('home.index');
        }

    }
    

    public function resetSave()
    {
        $credentials = array(
            'email' => Input::get('email')
        );
        return Password::reset($credentials, function($user, $password)
        {
            $user->password = Hash::make($password);
            $user->save();
            return Redirect::to('user/resetSuccess');
        });
    }
}
