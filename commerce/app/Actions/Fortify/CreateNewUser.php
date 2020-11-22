<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Str;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => $this->passwordRules(),
        // ])->validate();
       
        return User::create([
            'name' => $input['name'],
            'last_name' => $input['last_name'],
            'username' =>Str::slug($input['name'].$input['last_name']),
            'email' => $input['email'],
            'phone' => $input['phone'],
            'division_id' => $input['division_id'],
            'district_id' => $input['district_id'],
            'street_address' => $input['street_address'],
            'password' => Hash::make($input['password']),
            'remember_token' => $input['_token'],
            'status'=> 0,
        ]);
    }
    
}
