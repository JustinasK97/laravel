@extends('skelbimai/main')
@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Valdyti skelbimą</h1>
                        <p class="mb-0"></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-1">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Aprašymas</th>
                    <th scope="col">El.Paštas</th>
                    <th scope="col">Vieta</th>
                    <th scope="col">Telefonas</th>
                    <th scope="col">Kaina</th>
                    <th scope="col">Kategorija</th>
                    <th scope="col">Nuotrauka</th>
                    <th scope="col">Šalinimas</th>
                    <th scope="col">Redagavimas</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ads as $ad)
                    <tr>
                        <td>{{$ad->title}}</td>
                        <td>{{$ad->description}}</td>
                        <td>{{$ad->email}}</td>
                        <td>{{$ad->location}}</td>
                        <td>{{$ad->phone}}</td>
                        <td>{{$ad->price}}€</td>

                        @foreach($categories as $category)
                            @if($ad->catid == $category->id)
                                <td>{{$category->title}}</td>
                            @endif
                        @endforeach
                        <td>{{$ad->img}}</td>
                        <td><a href="/delete/ad/{{$ad->id}}" class="btn btn-outline-danger">Šalinti</a></td>
                        <td><a href="/editAd/ad/{{$ad->id}}" class="btn btn-outline-success">Redaguoti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="buton">
                <a class="btn btn-primary" href="/addAd" role="button">Pridėti skelbimą</a>
            </div>
            <br>
        </div>
    </div>
</div>
@stop