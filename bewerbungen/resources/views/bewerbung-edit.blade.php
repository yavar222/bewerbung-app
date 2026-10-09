<div style="margin:2rem;">
   <h1>Edit Form</h1>

   <form method="POST" action="/bewerbungen/{{ $jobs->id }}"   style="display: flex; flex-direction: column; gap:1rem;">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', $jobs->name)}}"/>

    </div>
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ old('title', $jobs->title)}}"/>

    </div>
    <div>
        <label for="company">Company</label>
        <input type="text" name="company" value="{{ old('company', $jobs->company)}}"/>
    </div>
    <div>
        <label for="city">City</label>
        <input type="text" name="city" value="{{ old('city', $jobs->city)}}"/>
    </div>
<div>    <button type=submit>send</button></div>


   </form>
</div>