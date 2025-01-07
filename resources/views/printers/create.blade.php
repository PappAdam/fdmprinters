<x-layout>
    <div class="container">
        <h1 class="text-center my-5">Create a New Printer</h1>

        <div class="card shadow-lg">
            <div class="card-body">
                <form method="POST" action="{{ route('printers.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror" id="model"
                            name="model" value="{{ old('model') }}" placeholder="Enter printer model">
                        @error('model')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="manufacturer" class="form-label">Manufacturer</label>
                        <input type="text" class="form-control @error('manufacturer') is-invalid @enderror"
                            id="manufacturer" name="manufacturer" value="{{ old('manufacturer') }}"
                            placeholder="Enter manufacturer name">
                        @error('manufacturer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="max_print_size" class="form-label">Max Print Size</label>
                        <input type="text" class="form-control @error('max_print_size') is-invalid @enderror"
                            id="max_print_size" name="max_print_size" value="{{ old('max_print_size') }}"
                            placeholder="Enter max print size">
                        @error('max_print_size')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="print_resolution" class="form-label">Print Resolution</label>
                        <input type="text" class="form-control @error('print_resolution') is-invalid @enderror"
                            id="print_resolution" name="print_resolution" value="{{ old('print_resolution') }}"
                            placeholder="Enter print resolution">
                        @error('print_resolution')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Create Printer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
