{!!Block::display('head')!!}
{!!Block::display('becomementor')!!}
{!!Block::display('workshops')!!}

@php
    $partners = get_partners();
    $cities = get_cities();
    $languages = get_languages();
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

                        <div class="carousel-items row"
                             data-lqd-flickity='{"imagesLoaded": false ,"cellAlign":"center","prevNextButtons":false,"buttonsAppendTo":"self","pageDots":true,"groupCells":true,"contain": true,"pauseAutoPlayOnHover":false}'>
                            @foreach($partners as $partner)
                                @php
                                    $image_rep = str_replace('public','/storage',$partner->team_logo);
                                @endphp
                                <div class="carousel-item col-xs-12">
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

                                    <div class="accordion-partners accordion-lg accordion-title" id="accordion-1"
                                         role="tablist">

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

{!!Block::display('why')!!}
{!!Block::display('about')!!}
{!!Block::display('testimonials')!!}
{!!Block::display('faq')!!}
<section id="apply">
    <div class="container">
        <div class="row">
            <div class="lqd-column col-md-10 col-md-offset-1 text-center" data-custom-animations="true" data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:80,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}">
                <header class="fancy-title fancy-title-big mb-6">
                    <h2 data-split-text="true" data-split-options="{&quot;type&quot;:&quot;lines&quot;}">
                        Apply For Mentorship!
                        <br>
                    </h2>
                </header><!-- /.fancy-title -->
                <div class="form">
                    <div class="form-group">
                        <label>Identification</label>
                        <input type="text" name="name" class="form-control valid" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" aria-invalid="false">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" class="form-control valid" id="lastname" placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" aria-invalid="false">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control valid" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control valid" id="sex" name="sex" required="">
                            <optgroup label="Choose Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </optgroup>
                        </select>
                    </div>

                    <input type="hidden" name="dob" value="2014-05-15">
                    <div class="form-group">
                        <label>Contact Info</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <label>Where do you live ?</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="street" id="street" placeholder="Street" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <select class="form-control valid" id="city" name="city" required="">
                            <optgroup label="Choose City">
                                @foreach($cities as $city)
                                    <option value="{{$city}}">{{$city}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="district" id="district" placeholder="District" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="state" id="state" placeholder="State" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="country" id="country" placeholder="Country" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>


                    <div class="form-group">
                        <label>Background</label>
                        <input type="text" class="form-control" name="company_organization" id="company_organization" placeholder="Company/Organization" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="background_field_of_study" id="background_field_of_study" placeholder="Background Field of Study" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="qualification" id="qualification" placeholder="Qualification" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="web" id="web" placeholder="Web" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="university" id="university" placeholder="University" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea name="general_info" class="form-control" placeholder="Tell us about yourself"></textarea>
                        <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label>Choose Your Skills</label>
                        <select class="form-control valid select2" id="language_1" name="language_1" required="" placeholder="Choose Languages" multiple="">
                            <optgroup label="Choose Language">
                                @foreach($languages as $language)
                                    <option value="{{$language}}">{{$language}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Communication</label>
                                <input type="hidden" value="0" name="communication_skill">
                                <input type="checkbox" name="communication_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Team Work</label>

                                <input type="hidden" value="0" name="team_work_skill">
                                <input type="checkbox" name="team_work_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Problem
                                    Solving</label>

                                <input type="hidden" value="0" name="problem_solving_skill">
                                <input type="checkbox" name="problem_solving_skill" value="1" class="error"><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Creativity</label>

                                <input type="hidden" value="0" name="creativity_skill">
                                <input type="checkbox" name="creativity_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Adaptability</label>

                                <input type="hidden" value="0" name="adaptability_skill">
                                <input type="checkbox" name="adaptability_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Work Ethics</label>

                                <input type="hidden" value="0" name="work_ethics_skill">
                                <input type="checkbox" name="work_ethics_skill" value="1" class="error"><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="university" class="control-label">Interpersonal Skills</label>
                                <input type="hidden" value="0" name="interpersonal_skills_skill">
                                <input type="checkbox" name="interpersonal_skills_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Time
                                    Management</label>

                                <input type="hidden" value="0" name="time_management_skill">
                                <input type="checkbox" name="time_management_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Leadership</label>

                                <input type="hidden" value="0" name="leadership_skill">
                                <input type="checkbox" name="leadership_skill" value="1" class="error"><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Finance
                                    Management</label>

                                <input type="hidden" value="0" name="finance_management_skill">
                                <input type="checkbox" name="finance_management_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Capacity
                                    Development</label>

                                <input type="hidden" value="0" name="capacity_development_skill">
                                <input type="checkbox" name="capacity_development_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Advocacy</label>

                                <input type="hidden" value="0" name="advocacy_skill">
                                <input type="checkbox" name="advocacy_skill" value="1" class="error"><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Critical
                                    Thinking</label>

                                <input type="hidden" value="0" name="critical_thinking_skill">
                                <input type="checkbox" name="critical_thinking_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Coding</label>

                                <input type="hidden" value="0" name="coding_skill">
                                <input type="checkbox" name="coding_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label">Networking</label>

                                <input type="hidden" value="0" name="networking_skill">
                                <input type="checkbox" name="networking_skill" value="1" class="error"><br>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group"><label for="university" class="control-label" href="#modal-2" data-lity="#modal-2">I Agree to the Terms and
                                    Conditions</label>

                                <input type="hidden" value="0" name="terms_conditions">
                                <input type="checkbox" name="terms_conditions" value="1" class="error"><br>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold" data-localscroll="true" data-localscroll-options="{&quot;scrollBelowSection&quot;:true}">
							<span>
								<span class="btn-txt">Apply</span>
							</span>
                    </button>


                </div>


            </div><!-- /.col-md-10 col-md-offset-1 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
{!!Block::display('t&c')!!}
{!!Block::display('footer')!!}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $(".select2").select2({
            placeholder: "Choose Languages",
        });

    });
</script>

<script>
    function get_projects(id) {
        if (id) {
            jQuery(".accordion-partners").empty();
            jQuery("#cover_image").hide();
            jQuery(".accordion-partners").append('<p class="loading">Loading</p>');
            jQuery.ajax({
                url: "/admin/projects/get_team_projects",
                type: "GET",
                data: {"id": id, "_token": "{{ csrf_token() }}"},
                success: function (result, textStatus, jqXHR) {
                    if (result != '') {
                        jQuery("#accordion-partners").empty();
                    }

                    var results = JSON.parse(result)
                    jQuery.each(results, function (index, value) {
                        jQuery("#cover_image").show();
                        jQuery(".loading").hide();
                        jQuery("#cover_image").attr("src", value.team_image);
                        jQuery(".accordion-partners").append("<div class='accordion-item panel'>\n" +
                            "                                            <div class='accordion-heading' role='tab' style='border-bottom: 1px solid #00000033;' id='heading_accordion-collapse-" + value.id + "'>\n" +
                            "                                                <h4 class='accordion-title font-size-16 font-weight-semibold'>\n" +
                            "                                                    <a class='collapsed' data-toggle='collapse' data-parent='#accordion-" + value.id + "' href='#accordion-collapse-" + value.id + "'\n" +
                            "                                                       aria-expanded='false' id='project_name' aria-controls='accordion-collapse-" + value.id + "'>\n" +
                            "                                                       " + value.project_name + "\n" +
                            "                                                    </a>\n" +
                            "                                                </h4>\n" +
                            "                                            </div><!-- /.accordion-heading -->\n" +
                            "                                            <div id='accordion-collapse-" + value.id + "' class='accordion-collapse collapse ' role='tabpanel'\n" +
                            "                                                 aria-labelledby='heading_accordion-collapse-" + value.id + "'>\n" +
                            "                                                <div class='accordion-content'>\n" +
                            "                                                    <p id='project_desc'>" + value.project_description + "</p>\n" +
                            "                                                </div><!-- /.accordion-content -->\n" +
                            "                                            </div><!-- /.accordion-collapse -->\n" +
                            "\n" +
                            "                                        </div>");

                        console.log(index, value);
                    });

                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }
</script>