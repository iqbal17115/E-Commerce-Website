@extends('../customer.master')
@section('content')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('First Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="first_name" />
            </div>
            
            <div>
                <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>
            <?php
              $divisions=DB::table('divisions')->get();
              $districts=DB::table('districts')->get();
            ?>

            <div class="form-group">
              <label for="division_id">Division</label>
              <select name="division_id" id="division_id" class="form-control">
                <option value="">--Select Division--</option>
                @foreach($divisions as $division) 
                <option value="12"> {{  $division->name }} </option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="district_id">District</label>
              <select name="district_id" id="district_id" class="form-control">
                <option value="">--Select District--</option>
                @foreach($districts as $district) 
                <option value="{{  $district->id }}"> {{  $district->district }} </option>
                @endforeach
              </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="street_address" value="{{ __('Street Address') }}" />
                <x-jet-input id="street_address" class="block mt-1 w-full" type="text" name="street_address" :value="old('street_address')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection
