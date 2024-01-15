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
                                    <p>Name : </p>
                                </td>
                                <td><b>{{ $product->name }}</b></td>
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
                                <td><img src="/admin/images/" alt="" width="100px"></td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
