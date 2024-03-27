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
                        <h3>Edit</h3>
                        <a class="create__btn" href="{{ route('admin.products.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Category :</strong>
                        <select name="category_id" id="" class="form-control">
                            <option value="{{ $product->category_id }}">{{$product->category->name_uz ?? ''  }} </option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name_uz }}</option>
                            @endforeach
                        </select>
                        <br>
                        <strong>Tags:</strong>
                        <select name="tag_ids[]" id="" class="form-control" multiple>
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}" {{ $product->tags->contains('id', $tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        <br>

                        <strong> Name :</strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"> <br>

                        <strong> Price :</strong>
                        <input type="number" name="price" value="{{ $product->price }}" class="form-control"> <br>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="photo" class="form-control"> <br>
                        <img src="/files/photos/{{ $product->photo }}" alt="" width="100px">

                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
