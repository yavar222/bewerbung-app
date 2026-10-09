<x-layout>
    <h1 class="text-3xl font-bold mb-6">Bewerbung bearbeiten</h1>

    <form method="POST" action="/bewerbungen/{{ $job->id }}" class="bg-white p-6 rounded-lg shadow space-y-4">
        @csrf
        @method('PUT')

        @foreach (['title' => 'Stelle', 'company' => 'Firma', 'city' => 'Stadt'] as $feld => $label)
            <div>
                <label for="{{ $feld }}" class="block font-semibold mb-1">{{ $label }}</label>
                <input id="{{ $feld }}" name="{{ $feld }}" value="{{ old($feld, $job->$feld) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2">
                @error($feld)
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        @endforeach

        <div>
            <label for="status" class="block font-semibold mb-1">Status</label>
            <select id="status" name="status" class="w-full border border-gray-300 rounded px-3 py-2">
                @foreach (['offen' => 'Offen', 'interview' => 'Interview', 'absage' => 'Absage', 'zusage' => 'Zusage'] as $wert => $text)
                    <option value="{{ $wert }}" @selected(old('status', $job->status) === $wert)>{{ $text }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white">Speichern</button>
        <a href="/bewerbungen" class="ml-2 text-gray-600">Abbrechen</a>
    </form>
</x-layout>
