@extends('layout.main')
@section('content')
<div class='container md:mx-auto border m-4'>
    <h2>Список репортов</h2>
    @foreach($reports as $report)
    <div class='flex justify-between'>
        <p class="border w-full">{{ $report->number }}</p>
        <p class="border w-full">{{ $report->description }}</p>
        <p class="border w-full">{{ $report->created_at }}</p>
        <form action="{{route('reports.destroy', $report->id)}}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить"/>
        </form>
    </div>
    @endforeach

    <form method="POST" action="{{route('reports.store')}}" style="margin-top:20px;">
        @csrf
        <div style="font-size: 16px;">
            <div>
                <input style="font-size: 16px;width:200px;" type="text" name="number" id="number" placeholder="ВведитеНомерАвто">
            </div>
            <div>
                <textarea type="text" name="description" id="description"  placeholder="ВведитеОписаниеАвто" style="resize: none; font-size: 16px; width:200px; margin-top: 10px;"></textarea>
            </div>
        </div>
        <button type="submit">
            Create
        </button>
    </form>
</div>

@endsection()