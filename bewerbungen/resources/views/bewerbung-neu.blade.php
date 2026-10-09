<div style="margin:2rem;">
   <h1>Form</h1>

   <form methode="POST" action="/bewerbungen"   style="display: flex; flex-direction: column; gap:1rem;">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name')}}"/>

    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title')}}"/>

    </div>
    <div>
        <label for="company">Company</label>
        <input type="text" name="company" value="{{ old('company')}}"/>
    </div>
    <div>
        <label for="city">City</label>
        <input type="text" name="city" value="{{ old('city')}}"/>
    </div>
<div>    <button type=submit>send</button></div>


   </form>
</div>