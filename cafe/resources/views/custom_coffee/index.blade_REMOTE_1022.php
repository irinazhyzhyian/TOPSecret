@extends('layouts.main')

@section('content')
    <div class="bg-red">
        <div class="container p-5" id="containerForCopy">
                <div class="container_ingredients row">
                    <div class="col-xl-4 row ">
                        <div class=" col-xl-12 ingredients"><p class="text-20">Ingredients</p></div>
                        <div class="ingredient  col-xl-12 " onclick="addNew('black_coffee')">Espresso</div>
                        <div class="ingredient  col-xl-12 mt-3" onclick="addNew('milk_coffee')">Milk</div>
                        <div class="ingredient  col-xl-12 mt-3" onclick="addNew('sugar')">Sugar</div>
                        <div class="ingredient  col-xl-12 mt-3" onclick="addNew('caramel')">Caramel syrup</div>
                        <div class="ingredient  col-xl-12 mt-3" onclick="addNew('chocolate')">Chocolate syrup</div>
                    </div>

                    <div class=" col-xl-4">
                        <div class="container_glass">
                            <div id="stakan" class="size-m  col-xl-4"></div>
                        </div>
                        <div class="grid">
                            <div class="btn col-xl-4 size" size="s" onclick="changeSize(this)">S</div>
                            <div class="btn col-xl-4 size" size="m" onclick="changeSize(this)">M</div>
                            <div class="btn col-xl-4 size" size="l" onclick="changeSize(this)">L</div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div id="all-products" class="d-none"></div>
                        <button type="button" class="button" data-toggle="modal" data-target="#exampleModal" onclick="copyData()" data-whatever="@getbootstrap">Pay</button>
                    </div>
                </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your Coffee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ action('CustomCoffeeController@store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="input-group input-group-lg mb-5">
                            <input type="text" class="form-control" placeholder="Tag your coffee" name="name" id='name' required/>
                        </div>
                        <div id="stakanCopy" class="d-none"></div>
                    </div>
                    <div class='ml-5'>
                    <h3> Would you like to pay:</h3>
                    <button type="button" class="btn ">Card</button>
                    <button   class="btn " type="button">Cash</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn " data-dismiss="modal">Close</button>
                        <button   class="btn " type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


