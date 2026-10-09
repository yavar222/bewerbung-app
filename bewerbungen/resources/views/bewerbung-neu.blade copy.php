<form method="POST" action="/bewerbungen">
    @csrf
<label> Company</label>
    <input name="company" type="text" value="{{ old('company')}}"/>
        @error('company')
        <p>{{ $message }}</p>
        @enderror
    <label> Title</label>
    <input name="title" type="text"  value="{{ old('title')}}"/>
        @error('title')
        <p>{{ $message }}</p>
        @enderror
    <label> City</label>
    <input name="city" type="text"  value="{{ old('city')}}"/>
        @error('city')
        <p>{{ $message }}</p>
        @enderror
    <button type="submit">Speichern</button>
</form>