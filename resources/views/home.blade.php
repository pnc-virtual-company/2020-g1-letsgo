@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mt-2"><strong class="text-success">E</strong>vent !</h2>
    <div class="row mt-5">
        <div class="col-6">
            <h4 class="text-center"><strong class="text-primary">P</strong>oker Event</h4>
            <img src="../images/poker.png" class="mx-auto d-block" style="width: 100%; height:94%;" alt="">
        </div>
        <div class="col-6">
            <div class="div">
            <h4 class="text-center"><strong class="text-primary">R</strong>eading Book Event</h4>
            <img src="../images/book.png" class="mx-auto d-block" style="width: 100%;" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h4 class="text-center"><strong class="text-primary">M</strong>arathon Sport Event</h4>
            <img src="../images/run.png" class="mx-auto d-block" style="width: 100%;" alt="">
        </div>
        <div class="col-6">
            <h4 class="text-center"><strong class="text-primary">S</strong>ummer Cycling Event</h4>
            <img src="../images/bike.png" class="mx-auto d-block" style="width: 100%;" alt="">
        </div>
    </div>
</div>
@endsection
