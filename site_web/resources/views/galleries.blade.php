@extends('base')
@section('title')
    Gallérie
@endsection

@section('content')
    <style>
        body{
            margin:0;
            padding:0;
        }
        /* .container{
            width:90%
            margin:10px auto;
        } */
        .portfolio-menu{
            text-align:center;
        }
        .portfolio-menu ul li{
            display:inline-block;
            margin:0;
            list-style:none;
            padding:10px 15px;
            cursor:pointer;
            -webkit-transition:all 05s ease;
            -moz-transition:all 05s ease;
            -ms-transition:all 05s ease;
            -o-transition:all 05s ease;
            transition:all .5s ease;
        }

        .portfolio-item{
            /*width:100%;*/
        }
        .portfolio-item .item{
            /*width:303px;*/
            float:left;
            margin-bottom:10px;
        }

    </style>
    <!-- Page Header Start -->
    @include('layout.head_start')
    <div class="container">
        <div class="portfolio-menu mt-2 mb-4">
            <ul>
                @foreach($albums as $key => $album)
                    <li class="btn btn-outline-dark {{$key == 0 ? 'active' : ""}}" data-filter=".photo{{$album->id}}"><b>{{$album->album}}</b></li>
                @endforeach
            </ul>
        </div>
        <div class="portfolio-item row">
            @foreach($albums as $album)
                @foreach($album->photo as $photo)
                    @if($album->id == $photo->album_id)
                        <div class="item photo{{$photo->album_id}} col-lg-3 col-md-4 col-6 col-sm">
                            <a href="{{'assets/img/galleries/'.$photo->media}}" class="fancylight popup-btn" data-fancybox-group="light">
                                <img class="img-fluid" src="{{asset('assets/img/galleries/'.$photo->media)}}" alt="">
                            </a>
                        </div>
                    @endif
                @endforeach
            @endforeach
            @foreach($videos as $video)
                    <div class="item video col-lg-3 col-md-4 col-6 col-sm">
                        <iframe src="{{$video->media}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="height: 14rem"></iframe>
                    </div>
            @endforeach
        </div>
    </div>
@endsection

@push('script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        // $('.portfolio-item').isotope({
        //  	itemSelector: '.item',
        //  	layoutMode: 'fitRows'
        //  });
        $('.portfolio-menu ul li').click(function(){
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter:selector
            });
            return  false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type : 'image',
                gallery : {
                    enabled : true
                }
            });
        });
    </script>
@endpush
