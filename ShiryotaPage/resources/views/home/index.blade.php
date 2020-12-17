@extends('layouts.base')

@section('title','Shiryota Page')

@section('portfolio')
    @foreach ($items as $item)
        <div class="item">
            <p>{{$item->title}}</p>
        </div>
    @endforeach
    
@endsection

@section('footer')
copylite 2020 Shiryota.
@endsection