<x-layout>

    <h1>printers</h1>

    @foreach ($printers as $printer)
        <a href="{{ route('printers.show', $printer->id) }}">{{ $printer->model }}</a> <br>
    @endforeach

</x-layout>
