@extends("layout.app")

@section('title')
    Register
@endsection

@section('content')
    <div class="flex justify-center mt-4 ">
        <form action="{{  route("register") }}" class="w-4/12  bg-white p-6 rounded-md" method="POST">
            @csrf
            <div class="mb-4">
                
                <input type="text" placeholder="Your name" class="p-4 w-full rounded-lg bg-gray-100 border-2  @error("name") border-red-300 @enderror" name="name" value="{{ old("name") }}">
                @error('name')
            
                <p class="text-red-500 text-sm mt-2" >{{ $message }}</p>
            
            @enderror
            </div>
            <div class="mb-4">
                
                <input type="text" placeholder="Username" class="p-4 w-full rounded-lg bg-gray-100 border-2 @error("username") border-red-300 @enderror" name="username" value="{{ old("username") }}">
                @error('username')
            
                <p class="text-red-500 text-sm mt-2" >{{ $message }}</p>
            
            @enderror
            </div>
            <div class="mb-4">
                
                <input type="email" placeholder="Your email" class="p-4 w-full rounded-lg bg-gray-100 border-2 @error("email") border-red-300 @enderror" name="email" value="{{ old("email") }}">

                @error('email')
            
                <p class="text-red-500 text-sm mt-2" >{{ $message }}</p>
            
            @enderror
            </div>
            <div class="mb-4">
                
                <input type="password" placeholder="Password
                " class="p-4 w-full rounded-lg bg-gray-100 border-2 @error("password") border-red-300 @enderror @error("password") border-red-300 @enderror" name="password" >
                @error('password')
            
                <p class="text-red-500 text-sm mt-2" >{{ $message }}</p>
            
            @enderror
            </div>
            
            <div class="mb-4">
                
                <input type="password" placeholder="Reapeat password" class="p-4 w-full rounded-lg bg-gray-100 border-2 @error("password") border-red-300 @enderror" name="password_confirmation" >
                
            </div>
            <button type="submit" class="font-medium w-full bg-blue-500 p-4 text-white rounded-lg border-2" >Register</button>
            </div>
        </form>
    </div>
@endsection