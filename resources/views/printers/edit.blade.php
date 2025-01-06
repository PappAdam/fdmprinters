<x-layout>
    <h1>Edit printer</h1>

    <form method="POST" action="{{ route('printers.update', $printer->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="model" class="form-label">model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model"
                value="{{ old('model') ?? $printer->model }}">
            @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">brand</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand"
                name="brand" value="{{ old('brand') ?? $printer->brand }}">
            @error('model')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="features" class="form-label">Published year</label>
            <input type="text" class="form-control @error('features') is-invalid @enderror" id="features"
                name="features" value="{{ old('features') ?? $printer->features }}">
            @error('features')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ old('price') ?? $printer->price }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="technology" class="form-label">Category</label>
            <select class="form-select @error('technology') is-invalid @enderror" id="technology" name="technology">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        @if (old('technology') && $category->id == old('technology')) selected 
                        @elseif (!old('technology') && $category->id == $printer->technology) selected @endif>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            @error('technology')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout>
