@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Skelbimai</h1>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Veiksmai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ads as $ad)
                        <tr>
                            <td>{{$ad->catid}}</td>
                            <td>{{$ad->title}}</td>
                            <td>{{$ad->description}}</td>
                            <td>{{$ad->price}}</td>
                            <td>{{$ad->email}}</td>
                            <td>{{$ad->phone}}</td>
                            <td>{{$ad->location}}</td>
                            <td>{{$ad->img}}</td>
                            <td><a href="/delete/addAd/{{$ad->id}}">Salinti</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary" href="/addAd" role="button">Prideti Skelbimą</a>
                </div>
                <br>
            </div>
        </div>
    </div>

@stop