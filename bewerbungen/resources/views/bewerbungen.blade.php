  <x-layout> 
   @php
    $farben = [
        'offen' => 'bg-gray-200 text-gray-800',
        'interview' => 'bg-yellow-100 text-yellow-800',
        'absage' => 'bg-red-100 text-red-800',
        'zusage' => 'bg-green-100 text-green-800',
      ];
   @endphp

   <div style="margin:2rem;">
      <h1 class="text-3xl font-bold mb-6" >Die Bewerbungen</h1>

         <ul class="space-y-4">
            @foreach ($jobs as $job)
               <li class="bg-white p-4 rounded-lg shadow flex justify-between items-center mb-4">
                     <div>
                        <p class="font-semibold">{{ $job->title }} bei {{ $job->company }}</p>
                        <p class="text-gray-500 text-sm mt-1">
                           <p class="text-gray-500 text-sm">
                           {{ $job->city }}
                           <span class="ml-2 px-2 py-0.5 rounded text-xs font-semibold {{ $farben[$job->status] }}">
                              {{ ucfirst($job->status) }}
                           </span>
                        </p>
                     </div>

                     <div class="flex gap-2">
                        <a href="/bewerbungen/{{ $job->id }}/edit"
                           class="px-3 py-1 rounded bg-blue-600 text-white">Bearbeiten</a>

                        <form method="POST" action="/bewerbungen/{{ $job->id }}">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="px-3 py-1 rounded bg-red-600 text-white">Löschen</button>
                        </form>
                     </div>
               </li>
            @endforeach
         </ul>
      </div>

      <a href="/bewerbungen/create"
   class="inline-block mb-6 px-4 py-2 rounded bg-green-600 text-white">+ Neue Bewerbung</a>
</x-layout>