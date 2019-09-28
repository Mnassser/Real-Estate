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
    
    <hr>
    
    

      <table class="table table-hover">
       <tr>

        <th>ID</th>
        <th>title</th>
        <th>type</th>
        <th>salary</th>
        <th>space</th>
        <th>notice</th>
        
        <th>phone</th>
        <th>roomes</th>
        <th>client</th>
        
        <th>Op'\s</th>

     </tr>
     @foreach($items as $item)
      <tr>
      <td>ID</td>
        <td>{{$item->title}}</td>
        <td>{{$item->category->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->space}}</td>
        <td>{{$item->notice}}</td>
        
        <td>{{$item->phone}}</td>
        <td>{{$item->rooms}}</td>
        <td>{{$item->client->name}}</td>
        
        <td>  
          @role('admin')

        <a href="{{url('dashboard/offers/'.$item->id)}}" class="btn btn-warning">show</a> 
          <form action="{{route('offers.destroy',$item->id)}}" method="POST">
      @endrole
          
           @csrf
           @method('DELETE')
           @role('admin')
           <input type="submit" class="btn btn-danger" value="delete" name="delete"/> 
           @endrole
          </form>
      
      
    
    
</td>

     </tr>
     @endforeach
</table>

{{$items->links()}}
   
    <br>


@endsection