@extends('admin.layouts.layout')

@section('teachers')
active
@endsection

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Show Category</h3>
                    <a class="create__btn" href="{{ route('admin.tags.index') }}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p> Tag Name : </p>
                                </td>
                                <td><b>{{ $tag->name }}</b></td>
                            </tr>

                            <tr>
                                <td>Products : </td>


                                <td>
                                    @foreach ($tag->products as $item)
                                    <a href="{{ route('admin.products.show', $item->id) }}"><b>{{ $item->name }}</b></a>
                                    <br>
                                    @endforeach
                                </td>


                        </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
