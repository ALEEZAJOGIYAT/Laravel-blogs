@extends('../user/app')

@section('bg-img',asset('user/img/blog.jpg'))
@section('title',$slug->title)
@section('sub-heading',$slug->subtitle)


@section('main-content')
<article >
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <small>Created at {{ $slug->created_at }}</small>
                @foreach ($slug->categories as $category)
                <small class="pull-right" style="margin-right: 90px">  
                    <a href="">{{ $category->name }}</a>
                </small>
                @endforeach
                
            </div>
            <div>
                {{ $slug->body }}
            </div>
            <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
        </div>
    </div>

</article>

@endsection