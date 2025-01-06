<x-layout>
    <h1>{{ $printer->model }}</h1>


    <a href="{{ route('printers.edit', $printer->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('printers.destroy', $printer->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

</x-layout>
