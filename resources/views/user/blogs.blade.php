@extends('../user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Blog Home')
@section('sub-heading','lists of posts here')


@section('main-content')
<div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach ($posts as $slug)
                    <div class="post-preview">
                        <a href="{{route('posts',$slug->slug)}}">
                            <h2 class="post-title"> {{$slug->title}} </h2>
                            <h3 class="post-subtitle"> {{ $slug->subtitle }} </h3>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


@endsection