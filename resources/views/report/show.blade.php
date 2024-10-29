@extends('layout.main')
@section('content')
<div class='container md:mx-auto border m-4'>
    <form action="{{route('reports.update', $report->id)}}" method="POST">
        @csrf
        @method('put')
        <div style="font-size: 16px;">
            <div>
                <input style="font-size: 16px;width:200px;" type="text" name="number" id="number" placeholder="ВведитеНомерАвто">
            </div>
            <div>
                <textarea type="text" name="description" id="description"  placeholder="ВведитеОписаниеАвто" style="resize: none; font-size: 16px; width:200px; margin-top: 10px;">{{$report->decription}}</textarea>
            </div>
        </div>
        <button type="submit">
            Update
        </button> 
    </form>   

</div>
@endsection()