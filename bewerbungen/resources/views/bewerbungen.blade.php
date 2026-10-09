<div style="margin:2rem;">
   <h1>Title</h1>

<ul>
   @foreach($jobs as $job)
   <li>{{ $job->name }} works  as {{ $job->title }} bei {{ $job->company }} in {{ $job->city }} </li>
<form method="POST" action="/bewerbungen/{{ $job->id}}">
   @csrf
   @method('DELETE')
   <button type="submit">Löschen</button>
</form>
<a href="/bewerbungen/{{ $job->id }}/edit">Bearbeiten </a>
   @endforeach
</ul>

</div>