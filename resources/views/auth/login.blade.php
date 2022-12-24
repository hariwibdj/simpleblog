<h1>Login Form</h1>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">User Name</label>
        <br>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <i>{{ $message }}</i>
        @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <i>{{ $message }}</i>
        @enderror
    </div>
    <div>
        <button type="submit" >Simpan</button>
    </div>
</form>