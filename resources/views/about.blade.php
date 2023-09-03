@extends('templates.main')
@section('container')
    <div class="container-fluid p-5">
        <div class="alert alert-danger" role="alert">
            Aplikasi Ini Masih Dalam Tahap Pengembangan, Mohon Dimaklukmi Jika Masih Banyak Yang Kurang 🙏🙏🙏
        </div>
        <hr>
        <h1 class="text-center">About</h1>
        <h2 class="jockey-font">SIBETA</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, qui delectus quibusdam, minus consectetur nobis
            cupiditate explicabo nostrum optio suscipit quidem atque tenetur laboriosam alias placeat. Distinctio numquam
            repellendus dicta.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, qui delectus quibusdam, minus consectetur nobis
            cupiditate explicabo nostrum optio suscipit quidem atque tenetur laboriosam alias placeat. Distinctio numquam
            repellendus dicta.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, qui delectus quibusdam, minus consectetur nobis
            cupiditate explicabo nostrum optio suscipit quidem atque tenetur laboriosam alias placeat. Distinctio numquam
            repellendus dicta.</p>
        <hr>
        <div class="collaburators">
            <h2 class="text-center">Collaburators</h2>
            <br>
            <div class="d-flex colab-card justify-content-center align-items-center">
                <div class="card bg-button-secondary border-0 mx-3" style="width: 18rem;">
                    <img src="img/colab-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jocky-font text-center fw-bold">Naufal Harits Prasetia</h5>
                        <p class="card-text odibee-font text-center">Student At University Of Darussalam Gontor</p>
                    </div>
                </div>
                <div class="card bg-button-primary border-0 mx-3" style="width: 18rem;">
                    <img src="img/colab-1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title jocky-font text-center fw-bold">Mohamad Farhat</h5>
                        <p class="card-text odibee-font text-center">Student At University Of Darussalam Gontor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
