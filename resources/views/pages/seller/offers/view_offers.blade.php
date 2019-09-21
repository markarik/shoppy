@extends('layouts.master')

@section('css')



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('font.css.all.css')}}">

@endsection

@section('content')
    @include('flash-message')
<div class="table_formats">

<h2 class="table_format">Offers</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
               <th>Id</th>
                <th>Name</th>
                <th>Product</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
        </thead>
        <tbody>
{{--             @foreach ($offers as $offer)--}}
{{--                 {{dd($offer->product->name)}}--}}
@for($i = 0; $i<count($offers);$i++)
                 <tr>
                  <td>{{$offers[$i]->id}}</td>
                     <td>{{$offers[$i]->offer}}</td>
                     <td>{{$offers[$i]->product->name}}</td>
                     <td>{{\Carbon\Carbon::parse($offers[$i]->created_at)->format('d/m/y')}}</td>
                     <td>{{\Carbon\Carbon::parse($offers[$i]->updated_at)->format('d/m/y')}}</td>
                     <td>

                         <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$offers[$i]->id}}" value="Edit"/>
                     </td>
                     <td><a href="/seller/offers/{{$offers[$i]->id}}">Delete</a></td>
                 </tr>
@endfor
{{--             @endforeach--}}
        </tbody>
      </table>
@endsection

</div>

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{{asset('font/js/all.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection

<!-- Edit Modal -->
@foreach($offers as $offer)
<div class="modal fade" id="exampleModal{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Edit Offers
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--Includes--}}
                @include('pages.seller.offers.edit_offer')

            </div>

        </div>
    </div>
</div>
@endforeach


