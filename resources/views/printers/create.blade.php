<x-layout>
    <h1>Create a new printer</h1>

    <form method="POST" action="{{ route('printers.store') }}">
        @csrf
        <div class="mb-3">
            <label for="model" class="form-label">model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model"
                value="{{ old('model') }}">
            @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">manufacturer</label>
            <input type="text" class="form-control @error('manufacturer') is-invalid @enderror" id="manufacturer"
                name="manufacturer" value="{{ old('manufacturer') }}">
            @error('model')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="max_print_size" class="form-label">Max print size</label>
            <input type="text" class="form-control @error('max_print_size') is-invalid @enderror" id="max_print_size"
                name="max_print_size" value="{{ old('max_print_size') }}">
            @error('max_print_size')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="print_resolution" class="form-label">print_resolution</label>
            <input type="text" class="form-control @error('print_resolution') is-invalid @enderror"
                id="print_resolution" name="print_resolution" value="{{ old('print_resolution') }}">
            @error('print_resolution')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout>
