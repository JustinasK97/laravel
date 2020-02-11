@extends('skelbimai/main')



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

                    <div class="site-section01">
                        <div class="row justify-content-center">
                            <div class="col-md-7 mb-5"  data-aos="fade">

                                <h2 class="mb-5 text-white">Redaguoti Skelbimą</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/update_ad/{{$ad->id}}" class="p-5 bg-white">
            @csrf
            <div class="row form-group">
                <div class="col-md-12">
                    <lable for="category">Kategorija:</lable>
                    <select class="form-control" id="catid" name="catid">
                        @foreach($errors as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="title">Pavadinimas</label>
                    <input type="text" id="title" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="description">Aprašas</label>
                    <textarea name="longtext" id="description" cols="15" rows="4" class="form-control" placeholder=""></textarea>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="price">Kaina</label>
                    <input type="number" id="price" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="subject">Pridėti paveikslėlį</label>
                    <input type="file" id="img" name="image" class="form-control">
                </div>
            </div>


            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="email">El. Paštas</label>
                    <input type="email" id="email" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="phone">Telefono Numeris</label>
                    <input type="text" id="phone" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="location">Vieta</label>
                    <input type="text" id="location" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                </div>
            </div>


        </form>
    </div>

