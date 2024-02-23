@extends('admin.layouts.layout')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Product</h3>
                        <a class="create__btn" href="{{ route('admin.products.index') }}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <strong> Category :</strong>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <br>

                        <strong> Tags :</strong>
                        <select name="tag_ids[]" id="" class="form-control" multiple>
                            @foreach ($tags as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <strong> Name Uz :</strong>
                        <input type="text" name="name_uz" class="form-control" value="{{ old('name_uz') }}">
                        @error('name_uz'){{ $message }} @enderror <br>
                        <strong> Name En :</strong>
                        <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}">
                        @error('name_en'){{ $message }} @enderror <br>

                        <strong> Price :</strong>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}"> <br>
                        @error('price'){{ $message }} @enderror <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="photo" class="form-control"> <br>
                        @error('price'){{ $message }} @enderror <br>

                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
