<x-layout>
    <div class="container">
        <h1 class="text-center my-5">Printers</h1>

        <div class="row">
            @foreach ($printers as $printer)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $printer->model }}</h5>
                            <a href="{{ route('printers.show', $printer->id) }}" class="btn btn-info">View Details</a>
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
