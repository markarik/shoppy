@extends('layouts.admin_master')


@section('content')


{{--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Category
   </button>
--}}

        <table id="users-table" class="table table-hover table-condensed" style="width:80%">  
          <thead>  
              <tr>  
                  <th>Id</th>                   
                  <th>Name</th>
                  <th>Created</th> 
                  <th>Action</th>
                </tr>   
          </thead>
          <tbody>
              {{--@if(count($categories)>1)
    
                @foreach ($categories as $category)
                  <tr>
                    <td>{{$category->id}}</td>                    
                  <td><a href="{{route('category.show',$category->id)}}">{{$category->name}}</a></td> 
                    <td>{{$category->created_at}}</td>
                    <td><a href="/admin/category{{$category->id}}">Delete</a></td>                  
                  </tr>         
                @endforeach
              @else
                <p>No Category Found</p>
              @endif--}}
          </tbody>
      
        </table>
    



        {{-- products --}}

        <section>
          <h3>Products</h3>

          <table id="users-table" class="table table-hover table-condensed" style="width:80%">  
              <thead>  
                  <tr>  
                      <th>Id</th>                   
                      <th>Name</th>
                      <th>Created</th> 
                     
                    </tr>  
              </thead>
              <tbody>
                {{-- @forelse ( $products  as $product)
                 <tr>
                    <td>{{ $products ->id}}</td>   
                    <td>{{ $products ->name}}</td>  
                    <td>{{ $products ->created_at}}</td>                   
                                  
                  </tr>
                 @empty
                 <tr>
                    <td>No Data</td>                    
                                     
                  </tr>
                 @endforelse--}}
              </tbody>
          
            </table>

        </section>
          

          
@endsection

@section('js')

        <script>
                $(document).ready( function () {
                 $('#users-table').DataTable();
                } );
        </script>
    
@endsection



 {{-- modal --}}

          <!-- Button trigger modal -->
         
               
               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
{{--                       @include('pages.seller.category.categoryform')--}}
                     </div>
                     
                   </div>
                 </div>
               </div>