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
                    <h3> Show Product</h3>
                    <a class="create__btn" href="{{ route('admin.products.index') }}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Name uz : </p>
                                </td>
                                <td><b>{{ $product->name_uz }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Name en : </p>
                                </td>
                                <td><b>{{ $product->name_en }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Price : </p>
                                </td>
                                <td><b>{{ $product->price }}</b></td>
                            </tr>



                            <tr>
                                <td>
                                    <p>Rasm : </p>
                                </td>
                                <td><img src="/files/photos/{{ $product->photo }}" alt="" width="100px"></td>
                            </tr>

                            <tr>
                                <td>Tags : </td>


                                <td>
                                    @foreach ($product->tags as $item)
                                    <a href="{{ route('admin.tags.show', $item->id) }}"><b>{{ $item->name }}</b></a>
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
