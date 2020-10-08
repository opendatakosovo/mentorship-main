<style>
    a[href$=".pdf"]:before {
        content: url(http://www.wischenbart.com/img/pdf_icon.gif);
    }

    .documents {
        list-style: none;
    }
</style>

<div class='row'>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('name')
        -> label(trans('user::client.label.name'))
        -> placeholder(trans('user::client.placeholder.name'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('lastname')
        -> label(trans('user::client.label.lastname'))
        -> placeholder(trans('user::client.label.lastname'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::date('birthday')
        -> label(trans('user::client.label.birthday'))
        -> placeholder(trans('user::client.label.birthday'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('company_organization')
        -> label(trans('user::client.label.company_organization'))
        -> placeholder(trans('user::client.label.company_organization'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('background_field_of_study')
        -> label(trans('user::client.label.background_field_of_study'))
        -> placeholder(trans('user::client.label.background_field_of_study'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('qualification')
        -> label(trans('user::client.label.qualification'))
        -> placeholder(trans('user::client.label.qualification'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::text('university')
        -> label(trans('user::client.label.university'))
        -> placeholder(trans('user::client.label.university'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        {{--{{var_dump(unserialize($client['languages']))}}--}}
        {{--{{die()}}--}}
        <div class="form-group"><label for="university" class="control-label">Languages</label>

            <select class=" form-control" name="language_1" id="languages">
                {{--<option value="none" {{ $client['language_1'] == "none" ? "selected" : "" }}>None</option>--}}

                @if($client['languages'])
                @foreach(unserialize($client['languages']) as $language)
                <option value="{{$language}}" selected>{{$language}}</option>
                @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Language 2</label>
            <select class=" form-control" name="language_2" id="languages">
                <option value="none" {{ $client['language_2'] == "none" ? "selected" : "" }}>None</option>
                <option value="albanian" {{ $client['language_2'] == "albanian" ? "selected" : "" }}>Albanian</option>
                <option value="english" {{ $client['language_2'] == "english" ? "selected" : "" }}>English</option>
                <option value="serbian" {{ $client['language_2'] == "serbian" ? "selected" : "" }}>Serbian</option>
                <option value="turkish" {{ $client['language_2'] == "turkish" ? "selected" : "" }}>Turkish</option>
            </select>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Language 3</label>
            <select class=" form-control" name="language_3" id="languages">
                <option value="none" {{ $client['language_3'] == "none" ? "selected" : "" }}>None</option>
                <option value="albanian" {{ $client['language_3'] == "albanian" ? "selected" : "" }}>Albanian</option>
                <option value="english" {{ $client['language_3'] == "english" ? "selected" : "" }}>English</option>
                <option value="serbian" {{ $client['language_3'] == "serbian" ? "selected" : "" }}>Serbian</option>
                <option value="turkish" {{ $client['language_3'] == "turkish" ? "selected" : "" }}>Turkish</option>
            </select>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        {!! Form::email('email')
        -> label(trans('user::client.label.email'))
        -> placeholder(trans('user::client.placeholder.email'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::password('password')
        -> label(trans('user::client.label.password'))
        -> placeholder(trans('user::client.placeholder.password'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        <label for="university" class="control-label">Sex</label>
        <input type="radio" {{ $client['sex'] == "Male" ? "checked" : "" }} name="sex" value="Male"> Male
        <input type="radio" {{ $client['sex'] == "Female" ? "checked" : "" }} name="sex" value="Female"> Female<br>
    </div>



    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class='form-group'>--}}
    {{--<label for='dob' class='control-label'>{!!trans('user::client.label.dob')!!}</label>--}}
    {{--<div class='input-group pickdate'>--}}
    {{--{!! Form::text('dob')--}}
    {{---> placeholder(trans('user::client.placeholder.dob'))--}}
    {{--->raw()!!}--}}
    {{--<span class='input-group-addon'><i class='fa fa-calendar'></i></span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class='col-md-4 col-sm-6'>
        {!! Form::tel('mobile')
        -> label(trans('user::client.label.mobile'))
        -> placeholder(trans('user::client.placeholder.mobile'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::tel('phone')
        -> label(trans('user::client.label.phone'))
        -> placeholder(trans('user::client.placeholder.phone'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::textarea ('address')
        -> label(trans('user::client.label.address'))
        -> placeholder(trans('user::client.placeholder.address'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::text('street')
        -> label(trans('user::client.label.street'))
        -> placeholder(trans('user::client.placeholder.street'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::text('city')
        -> label(trans('user::client.label.city'))
        -> placeholder(trans('user::client.placeholder.city'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::text('district')
        -> label(trans('user::client.label.district'))
        -> placeholder(trans('user::client.placeholder.district'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::text('state')
        -> label(trans('user::client.label.state'))
        -> placeholder(trans('user::client.placeholder.state'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::numeric('country')
        -> label(trans('user::client.label.country'))
        -> placeholder(trans('user::client.placeholder.country'))!!}
    </div>

    <div class='col-md-4 col-sm-6'>
        {!! Form::text('web')
        -> label(trans('user::client.label.web'))
        -> placeholder(trans('user::client.placeholder.web'))!!}
    </div>
    <div class='col-md-4 col-sm-6'>
        <label>General info</label>
        <textarea class="form-control" rows="4" name="general_info" cols="10">
                    </textarea>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Status</label>
            <select class=" form-control" name="status" id="status">
                <option value="New" {{ $client['status'] == "New" ? "selected" : "" }}>New</option>
                <option value="Pending" {{ $client['status'] == "Pending" ? "selected" : "" }}>Pending</option>
                <option value="Active" {{ $client['status'] == "Active" ? "selected" : "" }}>Active</option>
                <option value="Suspended" {{ $client['status'] == "Suspended" ? "selected" : "" }}>Suspended</option>
            </select>
        </div>
    </div>
   
</div>
<hr>
<div class="tab-pan-title"> Personal Skills</div>
<hr>
{{--<div class='row'>--}}

{{--<div class='col-md-4 col-sm-6'>--}}
{{--<div class="form-group"><label for="university" class="control-label">Communication</label>--}}
{{--<select class="select2 form-control" name="it_skill" id="languages">--}}
{{--@for($i = 0 ; $i < 6; $i++)--}}
{{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
{{--@endfor--}}
{{--</select>--}}

{{--<input type='hidden' value='0' name='communication_skill'>--}}
{{--<input type="checkbox" name="communication_skill" value="1"{{ $client['communication_skill'] == "1" ? "checked" : "" }}><br>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class='col-md-4 col-sm-6'>--}}
{{--<div class="form-group"><label for="university" class="control-label">Team Work</label>--}}
{{--<select class="select2 form-control" name="managerial_skill" id="languages">--}}
{{--@for($i = 0 ; $i < 6; $i++)--}}
{{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
{{--@endfor--}}
{{--</select>--}}
{{--<input type='hidden' value='0' name='team_work_skill'>--}}
{{--<input type="checkbox" name="team_work_skill" value="1" {{ $client['team_work_skill'] == "1" ? "checked" : "" }}><br>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class='col-md-4 col-sm-6'>--}}
{{--<div class="form-group"><label for="university" class="control-label">Problem Solving</label>--}}
{{--<select class="select2 form-control"name="marketing_skill" id="languages">--}}
{{--@for($i = 0 ; $i < 6; $i++)--}}
{{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
{{--@endfor--}}
{{--</select>--}}
{{--<input type='hidden' value='0' name='problem_solving_skill'>--}}
{{--<input type="checkbox" name="problem_solving_skill" value="1" {{ $client['problem_solving_skill'] == "1" ? "checked" : "" }}><br>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<div class="row">
    @php
    $client_skills = $client['skills'];
    $skills_unserialized = unserialize($client_skills);
    @endphp
    @foreach(get_skills() as $skill)
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">{{$skill->skill_name}}</label>
            {{--<select class="select2 form-control" name="sales_skill" id="languages">--}}
            {{--@for($i = 0 ; $i < 6; $i++)--}}
            {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
            {{--@endfor--}}
            {{--</select>--}}
            <input type='hidden' value='0' name='skill_{{strtolower(str_replace(' ', '_', $skill->skill_name))}}'>
            <input type="checkbox" name="skill_{{strtolower(str_replace(' ', '_', $skill->skill_name))}}" value="1"
                {{ $skills_unserialized['skill_'.strtolower(str_replace(' ', '_', $skill->skill_name))]['value'] == "1" ? "checked" : "" }}><br>
        </div>
    </div>
    @endforeach
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Adaptability</label>--}}
    {{--<select class="select2 form-control" name="event_paning_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--<input type='hidden' value='0' name='adaptability_skill'>--}}
    {{--<input type="checkbox" name="adaptability_skill" value="1" {{ $client['adaptability_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Work Ethics</label>--}}
    {{--<select class="select2 form-control" name="entrepreneurship_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--<input type='hidden' value='0' name='work_ethics_skill'>--}}
    {{--<input type="checkbox" name="work_ethics_skill" value="1" {{ $client['work_ethics_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Interpersonal Skills</label>--}}
    {{--<select class="select2 form-control" name="problem_solving_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--<input type='hidden' value='0' name='interpersonal_skills_skill'>--}}
    {{--<input type="checkbox" name="interpersonal_skills_skill" value="1"  {{ $client['interpersonal_skills_skill'] == "1" ? "checked" : "" }}><br>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Time Management</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='time_management_skill'>--}}
    {{--<input type="checkbox" name="time_management_skill" value="1"  {{ $client['time_management_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Leadership</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='leadership_skill'>--}}
    {{--<input type="checkbox" name="leadership_skill" value="1" {{ $client['leadership_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Finance Management</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='finance_management_skill'>--}}
    {{--<input type="checkbox" name="finance_management_skill" value="1" {{ $client['finance_management_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Capacity Development</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='capacity_development_skill'>--}}
    {{--<input type="checkbox" name="capacity_development_skill" value="1" {{ $client['capacity_development_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Advocacy</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='advocacy_skill'>--}}
    {{--<input type="checkbox" name="advocacy_skill" value="1" {{ $client['advocacy_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Critical Thinking</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='critical_thinking_skill'>--}}
    {{--<input type="checkbox" name="critical_thinking_skill" value="1" {{ $client['critical_thinking_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Coding</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='coding_skill'>--}}
    {{--<input type="checkbox" name="coding_skill" value="1" {{ $client['coding_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class='col-md-4 col-sm-6'>--}}
    {{--<div class="form-group"><label for="university" class="control-label">Networking</label>--}}
    {{--<select class="select2 form-control"  name="public_speaking_skill" id="languages">--}}
    {{--@for($i = 0 ; $i < 6; $i++)--}}
    {{--<option value="{{$i}}" selected="selected">{{$i}}</option>--}}
    {{--@endfor--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--<input type='hidden' value='0' name='networking_skill'>--}}
    {{--<input type="checkbox" name="networking_skill" value="1" {{ $client['networking_skill'] == "1" ? "checked" : "" }}><br>--}}
    {{--</div>--}}
    {{--</div>--}}
</div>
<div class="tab-pan-title"> Certificates </div>
<hr>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Sexual Harassment</label>
            <input type='hidden' value='0' name='sexual_harassment_cert'>
            <input type="checkbox" name="sexual_harassment_cert" value="1"
                {{ $client['sexual_harassment_cert'] == "1" ? "checked" : "" }}><br>

        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Child protection</label>
            <input type='hidden' value='0' name='child_protection_cert'>
            <input type="checkbox" name="child_protection_cert" value="1"
                {{ $client['child_protection_cert'] == "1" ? "checked" : "" }}><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Human Centered Design</label>
            <input type='hidden' value='0' name='human_centered_design_cert'>
            <input type="checkbox" name="human_centered_design_cert" value="1"
                {{ $client['human_centered_design_cert'] == "1" ? "checked" : "" }}><br>
        </div>
    </div>

</div>
<div class="row">
    @if(get_file_uploads($client['id']) != null)
    @foreach(get_file_uploads($client['id']) as $upload)
    <div class='col-md-4 col-sm-6'>
        <li class="documents"><a href="/download/{{$client['id']}}/{{$upload}}.pdf"></a></li>
    </div>
    @endforeach
    @endif
</div>
<hr>
<div class="tab-pan-title"> Payment</div>
<hr>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Did mentor get paid ?</label>
            <input type='hidden' value='0' name='paid'>
            <input type="checkbox" name="paid" value="1" {{ $client['paid'] == "1" ? "checked" : "" }}><br>
        </div>
    </div>
</div>
<div class="tab-pan-title"> CV Uploads </div>
<hr>
<div class="row">
    @if(get_cv_uploads($client['email']) != null)
    @foreach(get_cv_uploads($client['email']) as $upload)
    <div class='col-md-4 col-sm-6'>
        <li class="documents"><a href="/download_cv/{{$client['email']}}/{{$upload}}.pdf"></a></li>
    </div>
    @endforeach
    @else
    <div class='col-md-4 col-sm-6'>
        <h4>No Cv Uploaded</h4>
    </div>
    @endif

</div>
<hr>


<script>
    $(document).ready(function () {
        $('.select2').select2();
    });



</script>