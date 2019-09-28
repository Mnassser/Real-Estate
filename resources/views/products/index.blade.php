@extends('layouts.app')

@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @role('admin|editor')
    <a href="products/create"class="btn btn-primary">Create</a>
    <hr>
    
    @endrole
     

      <table class="table table-hover">
       <tr><th>ID</th><th>الاسم</th>
       <th>category_id</th>
       <th>المجموعة</th>
       <th>ops</th>
       </tr>
       @role('admin|editor')
    @foreach($items as $item)

       <tr><td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->category_id}}</td>
        
<td>  @role('admin')

          <form action="{{route('products.destroy',$item->id)}}" method="post">
      @endrole
        <a href="{{url('products/'.$item->id)}}" class="btn btn-warning">show</a> 
          <a href='products/{{$item->id}}/edit' class="btn btn-success">edit</a>
           @csrf
           @method('DELETE')
           @role('admin')
           <input type="submit" class="btn btn-danger" value="delete" name="delete"/> 
           @endrole
          </form>
      
      
    @endforeach
    @endrole
</td>
</table>

    

@endsection