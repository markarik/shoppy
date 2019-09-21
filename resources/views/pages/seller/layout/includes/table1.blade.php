<div class="table_formats">
    <h2 class="table_format">Products</h2>
    <table id="users-table" class="table table-hover table-condensed" style="width:80%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Created</th>
            <th>Updated</th>

        </thead>
        <tbody>
{{--        @if(count($products)>0)--}}

            @foreach ($products as $product)
                <tr>

                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand_name}}</td>
                    <td>{{$product->unit_cost}}</td>
                    <td>{{\Carbon\Carbon::parse($product->created_at)->format('d/M/Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($product->updated_at)->format('d/M/Y')}}</td>

                </tr>
            @endforeach
{{--            @else--}}
{{--            <p>No Category Found</p>--}}
{{--        @endif--}}
        </tbody>

    </table>

</div>