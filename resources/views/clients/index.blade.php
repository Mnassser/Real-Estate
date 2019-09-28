@extends('layouts.app')
@section('content')

<table class="table table-bordered">
       <tr><th>ID</th><th>اسم المستخدم</th><th>رقم الهاتف</th>
        <th>الايميل</th><th>مفعل</th><th>العمليات</th></tr>
@foreach($items as $item)

       <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <th>{{$item->email}}</td>
        <td>
          

      </td>@role('admin')
      <td><form action="{{route('clients.destroy',$item->id)}}" method="POST">
          @csrf
          @method('DELETE')
            <input type="submit" name="submit" class="btn btn-danger" value="delete"/>
        </form>
      @endrole</td></tr>
       
      
@endforeach
</table>


@endsection