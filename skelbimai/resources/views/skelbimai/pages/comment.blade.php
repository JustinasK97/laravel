<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Komentarai</h1>
                        <p class="mb-0"></p>
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

    <form method="POST" action="/storeComment" class="p-5 bg-white">

<div class="row form-group">
    <div class="col-md-12">
        <label class="text-black" for="description">Komentuoti</label>
        <textarea name="description" id="description" cols="15" rows="5" class="form-control" placeholder=""></textarea>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
    </div>
</div>
    </form>
</div>