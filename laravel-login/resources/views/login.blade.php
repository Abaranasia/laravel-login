<x-layout :title="'Login'">
    <form method="POST" action="{{ route('login.attempt') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" /> 
        <input type="password" name="password" placeholder="Password" /> 
        <button type="submit">Submit</button>
    </form>
</x-layout>