<script>
    $('document').ready(function(){

        getTribes('','',4);

        /**
         *  Retrieve tribes
         *
         */
        function getTribes(topic, area, limit){

            var data = {
                'topic': topic,
                'area': area,
                'limit': limit
            }

            $.ajax({
                method: "GET",
                url: '{{ Route("front.getTribes") }}',
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
            //alert(tribes[0].name);
        }

        $("#search").click(function(){
            var topic = $("#searchTopic").val();
            var region = $("#searchRegion").val();
            getTribes(topic, region, 4);
        });

    });
</script>


<div class="fh5co-blog-style-1" id="searchTribe">
    <div class="container">
        <div class="row p-b">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Search Tribe</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Explore tribes and join their force!</p>
            </div>
            <div class="col-md-6 text-right">
                <input type="text" id="searchTopic" class=".fh5co-post-text" placeholder="Interest" style="border-radius:10px; width:45%; border-width: 1px;">
            </div>
            <div class="col-md-6 text-left">
                <input type="text" id="searchRegion" class=".fh5co-post-text" placeholder="Area" style="border-radius:10px; width:45%; border-width: 1px;">
                <a id="search" class="btn btn-success btn-sm btn-outline">Search</a>
            </div>
        </div>
        <div class="row p-b">

            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Legal</a></div>
                        <img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">The Lawyers</a></h3>
                        <p>Provide legal advice for those in need.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 5</a>
                        <a href="#"><i class="icon-map2"></i>Sydney, Australia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.4s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Art</a></div>
                        <img src="images/img_same_dimension_3.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">City Painters</a></h3>
                        <p>Art group based in Melbourn. Display our works and invite children.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i>7</a>
                        <a href="#"><i class="icon-map2"></i>Melbourn, Australia</a>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Environment</a></div>
                        <img src="images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tree Guards</a></h3>
                        <p>Group of experts in biology and botany to protect our nature.</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 10</a>
                        <a href="#"><i class="icon-map2"></i>Adelaide, Australia</a>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft">
                <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.7s">
                    <div class="fh5co-post-image">
                        <div class="fh5co-overlay"></div>
                        <div class="fh5co-category"><a href="#">Technology</a></div>
                        <img src="images/img_same_dimension_4.jpg" alt="Image" class="img-responsive">
                    </div>
                    <div class="fh5co-post-text">
                        <h3><a href="#">Tech Savvies</a></h3>
                        <p>IT professionals with the aim of helping developing countries</p>
                    </div>
                    <div class="fh5co-post-meta">
                        <a href="#"><i class="icon-group"></i> 9</a>
                        <a href="#"><i class="icon-map2"></i>Sydney, Australia</a>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">--}}
                {{--<a href="#" class="btn btn-primary btn-lg">View All Tribes</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>