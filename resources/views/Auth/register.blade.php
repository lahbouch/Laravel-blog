@extends("layout.app")

@section('title')
    Register
@endsection

@section('content')
    <div class="flex justify-center mt-4 ">
        <form action="{{  route("register") }}" class="w-4/12  bg-white p-6 rounded-md" method="POST">
            @csrf
            <div class="mb-4">
                
                <input type="text" placeholder="Your name" class="p-4 w-full rounded-lg bg-gray-100 border-2" name="name" >
            </div>
            <div class="mb-4">
                
                <input type="text" placeholder="Username" class="p-4 w-full rounded-lg bg-gray-100 border-2" name="username" >
            </div>
            <div class="mb-4">
                
                <input type="email" placeholder="Your email" class="p-4 w-full rounded-lg bg-gray-100 border-2" name="email" >
            </div>
            <div class="mb-4">
                
                <input type="password" placeholder="Password" class="p-4 w-full rounded-lg bg-gray-100 border-2" name="password" >
            </div>
            <div class="mb-4">
                
                <input type="password" placeholder="Reapeat password" class="p-4 w-full rounded-lg bg-gray-100 border-2" name="password_confirmation" >
            </div>
            <button type="submit" class="font-medium w-full bg-blue-500 p-4 text-white rounded-lg border-2" >Register</button>
            </div>
        </form>
    </div>
@endsection