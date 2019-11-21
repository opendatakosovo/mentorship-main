{!!Block::display('head')!!}
{!!Block::display('becomementor')!!}
{!!Block::display('workshops')!!}

@php
$partners = get_partners();
@endphp
<div class="col-sm-12 content-center text-center">
    <section class="vc_row pt-75 pb-75" id="partners">

        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-6 col-md-offset-3 text-center">

                    <h2>Implementing Partners</h2>

                </div><!-- /.col-md-6 col-md-offset-3 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

        <div class="container-fluid">
            <div class="row">

                <div class="lqd-column col-md-12">

                    <div class="carousel-container carousel-shadow-all carousel-nav-left carousel-nav-md carousel-dots-style4 carousel-items-4-5">

                        <div class="carousel-items row" data-lqd-flickity='{"imagesLoaded": false ,"cellAlign":"center","prevNextButtons":false,"buttonsAppendTo":"self","pageDots":true,"groupCells":true,"contain": true,"pauseAutoPlayOnHover":false}'>
                            @foreach($partners as $partner)
                                @php
                                    $image_rep = str_replace('public','/storage',$partner->team_logo);
                                @endphp
                            <div class="carousel-item col-xs-12" >
                                <a href="#modal-1" onclick="get_projects({{$partner->id}})" data-lity="#modal-1">
                                    <figure>
                                        <img src="{{$image_rep}}" alt="Carousel">
                                    </figure>
                                </a>
                            </div>
                            <!-- /.carousel-item -->
                            @endforeach

                        </div><!-- /.carousel-items row -->

                    </div><!-- /.carousel-container -->

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </section>
</div>
<div id="modal-1" class="lqd-modal lity-hide">
    <div class="lqd-modal-inner">

        <div class="lqd-modal-head"></div><!-- /.lqd-modal-head -->

        <div class="lqd-modal-content">

            <div class="row">
                <div class="col-md-12 text">

                    <figure class="mb-3">
                        <img id="cover_image" src="" alt="Modal Image">
                    </figure>

                    <div class="row">
                        <div class="lqd-column col-md-12 ">
                            <div class="lqd-column col-md-12 text-center">
                                <div class="lqd-column col-md-8 col-md-offset-2">

                                    <div class="accordion accordion-lg accordion-title" id="accordion-1" role="tablist">

                                    </div><!-- /.accordion -->
                                </div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.col-md-8 col-md-offset-2 -->
                    </div><!-- /.row -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.lqd-modal-content -->

        <div class="lqd-modal-foot"></div><!-- /.lqd-modal-foot -->

    </div><!-- /.lqd-modal-inner -->
</div><!-- /.lqd-modal -->
<script>
    function get_projects(id) {
        if(id){
            jQuery(".accordion").empty();
            jQuery("#cover_image").hide();
            jQuery(".accordion").append('<p class="loading">Loading</p>');
            jQuery.ajax({
                url: "/admin/projects/get_team_projects",
                type: "GET",
                data: {"id": id, "_token": "{{ csrf_token() }}"},
                success: function (result, textStatus, jqXHR) {
                    if(result != ''){
                        jQuery("#accordion").empty();
                    }

                    var results = JSON.parse(result)
                    jQuery.each(results, function( index, value ) {
                        jQuery("#cover_image").show();
                        jQuery(".loading").hide();
                        jQuery("#cover_image").attr("src", value.team_image);
                        jQuery(".accordion").append("<div class='accordion-item panel'>\n" +
                            "                                            <div class='accordion-heading' role='tab' style='border-bottom: 1px solid #00000033;' id='heading_accordion-collapse-"+value.id+"'>\n" +
                            "                                                <h4 class='accordion-title font-size-16 font-weight-semibold'>\n" +
                            "                                                    <a class='collapsed' data-toggle='collapse' data-parent='#accordion-"+value.id+"' href='#accordion-collapse-"+value.id+"'\n" +
                            "                                                       aria-expanded='false' id='project_name' aria-controls='accordion-collapse-"+value.id+"'>\n" +
                            "                                                       "+value.project_name+"\n" +
                            "                                                    </a>\n" +
                            "                                                </h4>\n" +
                            "                                            </div><!-- /.accordion-heading -->\n" +
                            "                                            <div id='accordion-collapse-"+value.id+"' class='accordion-collapse collapse ' role='tabpanel'\n" +
                            "                                                 aria-labelledby='heading_accordion-collapse-"+value.id+"'>\n" +
                            "                                                <div class='accordion-content'>\n" +
                            "                                                    <p id='project_desc'>"+value.project_description+"</p>\n" +
                            "                                                </div><!-- /.accordion-content -->\n" +
                            "                                            </div><!-- /.accordion-collapse -->\n" +
                            "\n" +
                            "                                        </div>");

                       console.log(index,value);
                    });

                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }
</script>

{!!Block::display('why')!!}
{!!Block::display('about')!!}
{!!Block::display('testimonials')!!}

{!!Block::display('apply')!!}
{!!Block::display('footer')!!}
