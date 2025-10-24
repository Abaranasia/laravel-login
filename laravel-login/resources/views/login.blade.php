<x-layout :title="'Login'">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" placeholder="Email" /> 
        <input type="password" placeholder="Password" /> 
        <button type="submit">Submit</button>
    </form>
</x-layout>