<x-layout>
    <div class="container">
        <h1 class="text-center my-5">Printers</h1>

        <div class="row">
            @foreach ($printers as $printer)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $printer->model }}</h5>
                            <p class="card-text"><strong>Manufacturer:</strong> {{ $printer->manufacturer }}</p>
                            <p class="card-text"><strong>Max Print Size:</strong> {{ $printer->max_print_size }}</p>
                            <p class="card-text"><strong>Print Resolution:</strong> {{ $printer->print_resolution }}</p>

                            <!-- Edit Button -->
                            <a href="{{ route('printers.edit', $printer->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('printers.destroy', $printer->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('printers.create') }}" class="btn btn-success">Create New Printer</a>
        </div>
    </div>
</x-layout>
