{!! Block::display('head') !!}
{!! Block::display('becomementor') !!}
{!! Block::display('workshops') !!}
@php
$partners = get_partners();
$cities = get_cities();
$languages = get_languages();
$skills = get_skills();
$projects = get_projects();
@endphp

@if ($projects)
<div class="col-md-12">
    <section class="vc_row pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-12 text-center" id="projects">
                    <h2>Youth Led Projects</h2>
                </div>

                @foreach ($projects as $project)
                <div class="lqd-column col-md-4 col-sm-6">
                    <div
                        class="liquid-counter liquid-counter-bordered liquid-counter-bold liquid-counter-lg liquid-counter-has-gradient">
                        <div class="liquid-counter-element " data-enable-counter="false"
                            data-counter-options='{"blurEffect":true}'>
                            <div class="liquid-counter-element liquid-counter-element-static bg-gradient-tertiary-lr">
                                <h5>{{ $project->project_name }}</h5>
                            </div>
                            <span>{{ $project->project_name }}</span>
                        </div>
                        <a href="#modal-3" data-lity="#modal-3">
                            <span class="liquid-counter-text liquid-text-bottom "
                                onclick="get_project({{ $project->id }})">Read More</span>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
<div id="modal-3" class="lqd-modal lity-hide">
    <div class="lqd-modal-inner">

        <div class="lqd-modal-head"></div><!-- /.lqd-modal-head -->

        <div class="lqd-modal-content">

            <div class="row">
                <div class="col-md-12 text">

                    <div class="row">
                        <div class="lqd-column col-md-12 ">
                            <h3 class="text-center project_name"></h3>
                            <p class="project_description text-center"></p>
                        </div><!-- /.col-md-8 col-md-offset-2 -->
                    </div><!-- /.row -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.lqd-modal-content -->

        <div class="lqd-modal-foot"></div><!-- /.lqd-modal-foot -->

    </div><!-- /.lqd-modal-inner -->
</div><!-- /.lqd-modal -->

@endif
<style>
    #ui-id-1-button {
        display: none;
    }
</style>

{!! Block::display('why') !!}
{!! Block::display('about') !!}
<div class="col-sm-12 content-center text-center">
    <section class="vc_row" id="partners">
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

                    <div
                        class="carousel-container carousel-shadow-all carousel-nav-left carousel-nav-md carousel-dots-style4 carousel-items-4-5">

                        <div class="carousel-items row"
                            data-lqd-flickity='{"imagesLoaded": false ,"cellAlign":"center","prevNextButtons":false,"buttonsAppendTo":"self","pageDots":true,"groupCells":true,"contain": true,"pauseAutoPlayOnHover":false}'>
                            @foreach ($partners as $partner)
                            @php
                            $image_rep = str_replace('public','/storage',$partner->team_logo);
                            @endphp
                            <div class="carousel-item col-xs-12">
                                <a href="#modal-1" onclick="get_projects({{ $partner->id }})" data-lity="#modal-1">
                                    <figure>
                                        <img src="{{ $image_rep }}" alt="Carousel">
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

{!! Block::display('testimonials') !!}
{!! Block::display('faq') !!}
<div class="col-sm-12 content-center text-center">
    <section id="apply">
        <div class="container">
            <div class="row">
                <div class="lqd-column col-md-10 col-md-offset-1 text-center" data-custom-animations="true"
                    data-ca-options="{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:80,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}">
                    <header class="fancy-title fancy-title-big mb-6">
                        <h2 data-split-text="true" data-split-options="{&quot;type&quot;:&quot;lines&quot;}">
                            Apply For Mentorship!
                            <br>
                        </h2>
                    </header><!-- /.fancy-title -->

                    <form action="user/application/store" method="POST" enctype="multipart/form-data">
                        <div class="form">
                            <div class="form-group">
                                <label>Identification</label>
                                <input type="text" name="name" class="form-control valid" id="name"
                                    placeholder="Your Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" aria-invalid="false">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control valid" id="lastname"
                                    placeholder="Your Last Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" aria-invalid="false">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control valid" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
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
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                    placeholder="Mobile Phone" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <label>Where do you live ?</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="street" id="street" placeholder="Street"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <select class="form-control valid" id="city" name="city" required="">
                                    <optgroup label="Choose City">
                                        @foreach ($cities as $city)
                                        <option value="{{ $city }}">{{ $city }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="district" id="district"
                                    placeholder="District" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="state" id="state" placeholder="State"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="country" id="country"
                                    placeholder="Country" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>


                            <div class="form-group">
                                <label>Background</label>
                                <input type="text" class="form-control" name="company_organization"
                                    id="company_organization" placeholder="Company/Organization" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="background_field_of_study"
                                    id="background_field_of_study" placeholder="Background Field of Study"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="qualification" id="qualification"
                                    placeholder="Qualification" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="web" id="web" placeholder="Web"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="university" id="university"
                                    placeholder="University" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject">
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea name="general_info" class="form-control"
                                    placeholder="Tell us about yourself"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <label>Choose Your Skills</label>
                                <select class="form-control valid select2" name="langs[]" required multiple>
                                    <optgroup label="Choose Language" required>
                                        @foreach ($languages as $language)
                                        <option value="{{ $language }}">{{ $language }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                            </div>
                            <div class="row">
                                @foreach ($skills as $key => $skill)
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group"><label for="university"
                                            class="control-label">{{ $skill->skill_name }}</label>
                                        <input type="hidden" value="0"
                                            name="skill_{{ strtolower(str_replace(' ', '_', $skill->skill_name)) }}">
                                        <input type="checkbox"
                                            name="skill_{{ strtolower(str_replace(' ', '_', $skill->skill_name)) }}"
                                            value="1" class="error"><br>
                                    </div>
                                </div>
                                @endforeach
                                <div class="offset-md-3">
                                    <div class="form-group"><label for="university" class="control-label">Upload your
                                            CV</label>
                                        <input type="file" class="form-control" id="cv_upload" name="cv_upload" required
                                            accept="application/pdf" onchange="validatePDF(this)" class="error"><br>
                                    </div>
                                </div>
                                <div class="offset-md-3">
                                    <div class="form-group"><label style="cursor: pointer" for="university"
                                            class="control-label" href="#modal-2" data-lity="#modal-2">I Agree to the
                                            Terms and
                                            Conditions</label>
                                        <input type="hidden" value="0" name="terms_conditions">
                                        <input type="checkbox" name="terms_conditions" value="1" required
                                            class="error"><br>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold"
                                data-localscroll="true"
                                data-localscroll-options="{&quot;scrollBelowSection&quot;:true}">
                                <span>
                                    <span class="btn-txt">Apply</span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div><!-- /.col-md-10 col-md-offset-1 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
</div>
{!! Block::display('t&c') !!}
{!! Block::display('footer') !!}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
    $(document).ready(function() {
        $(".select2").select2({
            placeholder: "Choose Languages",
        });

    });

</script>
<script>
    var formOK = false;

    function validatePDF(objFileControl) {
        var file = objFileControl.value;
        var len = file.length;
        var ext = file.slice(len - 4, len);
        if (ext.toUpperCase() == ".PDF") {
            formOK = true;
            alert(file);
        } else {
            formOK = false;
            $("#cv_upload").val('');
            alert("Only PDF files allowed.");
        }
    }

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
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(result, textStatus, jqXHR) {
                    if (result != '') {
                        jQuery("#accordion-partners").empty();
                    }

                    var results = JSON.parse(result)
                    jQuery.each(results, function(index, value) {
                        jQuery("#cover_image").show();
                        jQuery(".loading").hide();
                        jQuery("#cover_image").attr("src", value.team_image);
                        jQuery(".accordion-partners").append(
                            "<div class='accordion-item panel'>\n" +
                            "                                            <div class='accordion-heading' role='tab' style='border-bottom: 1px solid #00000033;' id='heading_accordion-collapse-" +
                            value.id + "'>\n" +
                            "                                                <h4 class='accordion-title font-size-16 font-weight-semibold'>\n" +
                            "                                                    <a class='collapsed' data-toggle='collapse' data-parent='#accordion-" +
                            value.id + "' href='#accordion-collapse-" + value.id + "'\n" +
                            "                                                       aria-expanded='false' id='project_name' aria-controls='accordion-collapse-" +
                            value.id + "'>\n" +
                            "                                                       " + value
                            .project_name + "\n" +
                            "                                                    </a>\n" +
                            "                                                </h4>\n" +
                            "                                            </div><!-- /.accordion-heading -->\n" +
                            "                                            <div id='accordion-collapse-" +
                            value.id +
                            "' class='accordion-collapse collapse ' role='tabpanel'\n" +
                            "                                                 aria-labelledby='heading_accordion-collapse-" +
                            value.id + "'>\n" +
                            "                                                <div class='accordion-content'>\n" +
                            "                                                    <p id='project_desc'>" +
                            value.project_description + "</p>\n" +
                            "                                                    <a href=https://" +
                            value.website + " id=project_web_" + value.id + ">" + value
                            .website + "</a>\n" +
                            "                                                </div><!-- /.accordion-content -->\n" +
                            "                                            </div><!-- /.accordion-collapse -->\n" +
                            "\n" +
                            "                                        </div>");


                        if (value.website == null) {
                            $("#project_web_" + value.id).hide();
                        }
                    });

                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }

    function get_project(id) {
        if (id) {
            jQuery(".accordion-partners").empty();
            jQuery("#cover_image").hide();
            jQuery(".accordion-partners").append('<p class="loading">Loading</p>');
            jQuery.ajax({
                url: "/admin/projects/get_project",
                type: "GET",
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(result, textStatus, jqXHR) {
                    console.log(result)

                    var results = JSON.parse(result)
                    console.log(results.project_name);
                    jQuery(".project_name").text(results.project_name);
                    jQuery(".project_description").text(results.project_description);
                    // jQuery.each(results, function (index, value) {
                    //     jQuery(".loading").hide();
                    //
                    //
                    // });

                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        }
    }

</script>