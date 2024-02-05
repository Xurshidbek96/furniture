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
                        <a class="create__btn" href="{{ route('admin.tags.index') }}"> <i class='bx bx-arrow-back'></i>Back</a>

                    </div>

                    <form class="create__inputs" action="{{ route('admin.tags.update', $tag->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Name :</strong>
                        <input type="text" name="name" value="{{ $tag->name }}" class="form-control"> <br>

                        <input type="submit" value="Submit">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
