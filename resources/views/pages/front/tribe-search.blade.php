@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')

<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $('document').ready(function(){

        /**
         *  Retrieve tribes
         *
         */
        function searchTribes(topic, area, limit){

            var data = {
                'topic': topic,
                'area': area,
                'limit': limit
            }

            $.ajax({
                method: "GET",
                url: '{{-- Route("front.getMoreTribes") --}}',
                data: data
            })
            .done(function(tribes){
                display(tribes);
            });
        }

        /**
         * Display results in the Tribes search section
         *
         * @param tribes
         */
        function display(tribes){
            if(tribes.length == 0){
                $("#search-message").text("Result not found.")
                return;
            }
            //alert(tribes[0].name);
        }

        $("#search-tribe-btn").click(function(){
            var topic = $("#search-interest").val();
            var region = $("#search-area").val();
            if(topic == ''){
                $("#search-interest").attr('placeholder', 'Please put your interest');
                return;
            }
            
            if(region == ''){
                $("#search-area").attr('placeholder', 'Please put your area');
                return;
            }
                
            searchTribes(topic, region, 4);
        });

    });
</script>
<style type="text/css">
    .tribe-search-text{
        position: absolute;
        border-radius:5px; 
        border-width: 2px;
        padding: 5px;
        font-size: 14px;
        color: #a6a6a6;
    }
    #search-interest{
        width:80%;
        right: 5%;
    }
    #search-area{
        width:40%;
    }
    #search-tribe-btn{
        margin-left: 45%;
    }
    #search-message{
        margin-top: 10px;
        text-align: center;
    }
    div.row.tribe-search{
        margin-top: 5%;
    }

    div.fh5co-blog-style-1.tribe-search{
        padding: 4em 0;
    }

    div.col-md-3.more-search{
        width: 20%;
    }
    .row.p-b.more-search{
        padding-bottom: 10px;
    }

    #search-result-hr{
        margin-top: 10px;
        margin-bottom: 20px;
    }
</style>
@endsection

@section('body-content')
<div class="fh5co-blog-style-1 tribe-search" id="searchTribe">
    <div class="container">
        <div class="row tribe-search">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Search more tribes!</h2>
                {{-- <p>Search more tribes out there!</p> --}}
            </div>
            <div class="col-md-3 col-md-offset-3">
                <input type="text" class="tribe-search-text" id="search-interest" placeholder="Interest">
            </div>
            <div class="col-md-6">
                <input type="text" class="tribe-search-text" id="search-area" placeholder="Area">
                <a class="btn btn-default" id="search-tribe-btn">Search</a>
            </div>
            <div class="col-md-12" id="search-message">
                
            </div>
        </div>
        <hr id="search-result-hr"> 
        <div class="row p-b more-search">
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Art</a></div>
                        <img src="/images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">City Painters</a></h3>
                        <p>Art group based in Melbourn. Display our works and invite children.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i>7</a>
                        <a href="#"><i class="icon-map2"></i>Melbourn</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Environment</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tree Guards</a></h3>
                        <p>Group of experts in biology and botany to protect our nature.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 10</a>
                        <a href="#"><i class="icon-map2"></i>Adelaide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Technology</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tech Savvies</a></h3>
                        <p>IT professionals with the aim of helping developing countries</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 9</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-b more-search">
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Art</a></div>
                        <img src="/images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">City Painters</a></h3>
                        <p>Art group based in Melbourn. Display our works and invite children.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i>7</a>
                        <a href="#"><i class="icon-map2"></i>Melbourn</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Environment</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tree Guards</a></h3>
                        <p>Group of experts in biology and botany to protect our nature.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 10</a>
                        <a href="#"><i class="icon-map2"></i>Adelaide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Technology</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tech Savvies</a></h3>
                        <p>IT professionals with the aim of helping developing countries</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 9</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-b more-search">
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Art</a></div>
                        <img src="/images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">City Painters</a></h3>
                        <p>Art group based in Melbourn. Display our works and invite children.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i>7</a>
                        <a href="#"><i class="icon-map2"></i>Melbourn</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Environment</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tree Guards</a></h3>
                        <p>Group of experts in biology and botany to protect our nature.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 10</a>
                        <a href="#"><i class="icon-map2"></i>Adelaide</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Technology</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tech Savvies</a></h3>
                        <p>IT professionals with the aim of helping developing countries</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 9</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-b more-search">
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="/images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Art</a></div>
                        <img src="/images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">City Painters</a></h3>
                        <p>Art group based in Melbourn. Display our works and invite children.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i>7</a>
                        <a href="#"><i class="icon-map2"></i>Melbourn</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 more-search">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Environment</a></div>
                        <img src="/images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tree Guards</a></h3>
                        <p>Group of experts in biology and botany to protect our nature.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 10</a>
                        <a href="#"><i class="icon-map2"></i>Adelaide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection