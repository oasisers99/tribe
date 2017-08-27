<script>
    $('document').ready(function(){

        //getFrontTribes();

        /**
         *  Retrieve tribes
         *
         */
        function getFrontTribes(){

            $.ajax({
                method: "GET",
                url: '{{ Route("front.getFrontTribes") }}'
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

            alert(tribes[0].name);
        }


    });
</script>
<div class="fh5co-blog-style-1 tribe-search" id="searchTribe">
    <div class="container">
        <div class="row p-b">
            @foreach ($tribes as $tribe)
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">{{$tribe->topic1}}</a></div>
                        <img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="{{ route('tribe.main', ["tribe_id" => $tribe->id]) }}">{{$tribe->name}}</a></h3>
                        <p>{{$tribe->summary}}</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> {{$tribe->member_no}}</a>
                        <a href="#"><i class="icon-map2"></i>{{$tribe->region}}, {{$tribe->country}}</a>
                    </div>
                </div>
            </div>
            @endforeach  
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                <a href="{{ route('tribe.searchTribeFull') }}" class="btn btn-primary btn-lg">Find More Tribes</a>
            </div>
        </div>
    </div>
</div>