<style>
    a[href$=".pdf"]:before {
        content:url(http://www.wischenbart.com/img/pdf_icon.gif);
    }
   .documents{
       list-style: none;
   }
</style>

<div class='row'>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('name')
        -> label(trans('user::client.label.name'))
        -> placeholder(trans('user::client.placeholder.name')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('lastname')
        -> label(trans('user::client.label.lastname'))
        -> placeholder(trans('user::client.label.lastname')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::date('birthday')
        -> label(trans('user::client.label.birthday'))
        -> placeholder(trans('user::client.label.birthday')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('company_organization')
        -> label(trans('user::client.label.company_organization'))
        -> placeholder(trans('user::client.label.company_organization')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('background_field_of_study')
        -> label(trans('user::client.label.background_field_of_study'))
        -> placeholder(trans('user::client.label.background_field_of_study')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('qualification')
        -> label(trans('user::client.label.qualification'))
        -> placeholder(trans('user::client.label.qualification')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('university')
        -> label(trans('user::client.label.university'))
        -> placeholder(trans('user::client.label.university')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Language 1</label>
            <select class=" form-control"  name="language_1" id="languages">
                <option value="none" <?php echo e($client['language_1'] == "none" ? "selected" : ""); ?>>None</option>
                <option value="albanian" <?php echo e($client['language_1'] == "albanian" ? "selected" : ""); ?>>Albanian</option>
                <option value="english" <?php echo e($client['language_1'] == "english" ? "selected" : ""); ?>>English</option>
                <option value="serbian" <?php echo e($client['language_1'] == "serbian" ? "selected" : ""); ?>>Serbian</option>
                <option value="turkish" <?php echo e($client['language_1'] == "turkish" ? "selected" : ""); ?>>Turkish</option>
            </select>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Language 2</label>
            <select class=" form-control"  name="language_2" id="languages">
                <option value="none" <?php echo e($client['language_2'] == "none" ? "selected" : ""); ?>>None</option>
                <option value="albanian" <?php echo e($client['language_2'] == "albanian" ? "selected" : ""); ?>>Albanian</option>
                <option value="english" <?php echo e($client['language_2'] == "english" ? "selected" : ""); ?>>English</option>
                <option value="serbian" <?php echo e($client['language_2'] == "serbian" ? "selected" : ""); ?>>Serbian</option>
                <option value="turkish" <?php echo e($client['language_2'] == "turkish" ? "selected" : ""); ?>>Turkish</option>
            </select>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Language 3</label>
            <select class=" form-control"  name="language_3" id="languages">
                <option value="none" <?php echo e($client['language_3'] == "none" ? "selected" : ""); ?>>None</option>
                <option value="albanian" <?php echo e($client['language_3'] == "albanian" ? "selected" : ""); ?>>Albanian</option>
                <option value="english" <?php echo e($client['language_3'] == "english" ? "selected" : ""); ?>>English</option>
                <option value="serbian" <?php echo e($client['language_3'] == "serbian" ? "selected" : ""); ?>>Serbian</option>
                <option value="turkish" <?php echo e($client['language_3'] == "turkish" ? "selected" : ""); ?>>Turkish</option>
            </select>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <?php echo Form::email('email')
        -> label(trans('user::client.label.email'))
        -> placeholder(trans('user::client.placeholder.email')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::password('password')
        -> label(trans('user::client.label.password'))
        -> placeholder(trans('user::client.placeholder.password')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <label for="university" class="control-label">Sex</label>
        <input type="radio" <?php echo e($client['sex'] == "Male" ? "checked" : ""); ?> name="sex" value="Male"> Male
        <input type="radio" <?php echo e($client['sex'] == "Female" ? "checked" : ""); ?> name="sex" value="Female"> Female<br>
    </div>



 
 
 
    
    
    
    
    
    
    
    

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::tel('mobile')
        -> label(trans('user::client.label.mobile'))
        -> placeholder(trans('user::client.placeholder.mobile')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::tel('phone')
        -> label(trans('user::client.label.phone'))
        -> placeholder(trans('user::client.placeholder.phone')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::textarea ('address')
        -> label(trans('user::client.label.address'))
        -> placeholder(trans('user::client.placeholder.address')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('street')
        -> label(trans('user::client.label.street'))
        -> placeholder(trans('user::client.placeholder.street')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('city')
        -> label(trans('user::client.label.city'))
        -> placeholder(trans('user::client.placeholder.city')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('district')
        -> label(trans('user::client.label.district'))
        -> placeholder(trans('user::client.placeholder.district')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('state')
        -> label(trans('user::client.label.state'))
        -> placeholder(trans('user::client.placeholder.state')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::numeric('country')
        -> label(trans('user::client.label.country'))
        -> placeholder(trans('user::client.placeholder.country')); ?>

    </div>

    <div class='col-md-4 col-sm-6'>
        <?php echo Form::text('web')
        -> label(trans('user::client.label.web'))
        -> placeholder(trans('user::client.placeholder.web')); ?>

    </div>
    <div class='col-md-4 col-sm-6'>
        <label>General info</label>
        <textarea class="form-control" rows="4" name="general_info" cols="10">
                    </textarea>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Status</label>
            <select class=" form-control"  name="status" id="status">
                <option value="New" <?php echo e($client['status'] == "New" ? "selected" : ""); ?>>New</option>
                <option value="Pending" <?php echo e($client['status'] == "Pending" ? "selected" : ""); ?>>Pending</option>
                <option value="Active" <?php echo e($client['status'] == "Active" ? "selected" : ""); ?>>Active</option>
                <option value="Suspended" <?php echo e($client['status'] == "Suspended" ? "selected" : ""); ?>>Suspended</option>
            </select>
        </div>
    </div>
</div>
<hr>
<div class="tab-pan-title"> Personal Skills</div>
<hr>
<div class='row'>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Communication</label>
            
            
            
            
            

            <input type='hidden' value='0' name='communication_skill'>
            <input type="checkbox" name="communication_skill" value="1"<?php echo e($client['communication_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Team Work</label>
            
            
            
            
            
            <input type='hidden' value='0' name='team_work_skill'>
            <input type="checkbox" name="team_work_skill" value="1" <?php echo e($client['team_work_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Problem Solving</label>
            
            
            
            
            
            <input type='hidden' value='0' name='problem_solving_skill'>
            <input type="checkbox" name="problem_solving_skill" value="1" <?php echo e($client['problem_solving_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
</div>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Creativity</label>
            
            
            
            
            
            <input type='hidden' value='0' name='creativity_skill'>
            <input type="checkbox" name="creativity_skill" value="1" <?php echo e($client['creativity_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Adaptability</label>
            
            
            
            
            
            <input type='hidden' value='0' name='adaptability_skill'>
            <input type="checkbox" name="adaptability_skill" value="1" <?php echo e($client['adaptability_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Work Ethics</label>
            
            
            
            
            
            <input type='hidden' value='0' name='work_ethics_skill'>
            <input type="checkbox" name="work_ethics_skill" value="1" <?php echo e($client['work_ethics_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
</div>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Interpersonal Skills</label>
            
            
            
            
            
            <input type='hidden' value='0' name='interpersonal_skills_skill'>
            <input type="checkbox" name="interpersonal_skills_skill" value="1"  <?php echo e($client['interpersonal_skills_skill'] == "1" ? "checked" : ""); ?>><br>

        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Time Management</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='time_management_skill'>
            <input type="checkbox" name="time_management_skill" value="1"  <?php echo e($client['time_management_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Leadership</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='leadership_skill'>
            <input type="checkbox" name="leadership_skill" value="1" <?php echo e($client['leadership_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
</div>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Finance Management</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='finance_management_skill'>
            <input type="checkbox" name="finance_management_skill" value="1" <?php echo e($client['finance_management_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Capacity Development</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='capacity_development_skill'>
            <input type="checkbox" name="capacity_development_skill" value="1" <?php echo e($client['capacity_development_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Advocacy</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='advocacy_skill'>
            <input type="checkbox" name="advocacy_skill" value="1" <?php echo e($client['advocacy_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
</div>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Critical Thinking</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='critical_thinking_skill'>
            <input type="checkbox" name="critical_thinking_skill" value="1" <?php echo e($client['critical_thinking_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Coding</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='coding_skill'>
            <input type="checkbox" name="coding_skill" value="1" <?php echo e($client['coding_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Networking</label>
            
            
            
            
            
            
            <input type='hidden' value='0' name='networking_skill'>
            <input type="checkbox" name="networking_skill" value="1" <?php echo e($client['networking_skill'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
</div>
<div class="tab-pan-title"> Certificates </div>
<hr>
<div class="row">
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Sexual Harassment</label>
            <input type='hidden' value='0' name='sexual_harassment_cert'>
            <input type="checkbox" name="sexual_harassment_cert" value="1"  <?php echo e($client['sexual_harassment_cert'] == "1" ? "checked" : ""); ?>><br>

        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Child protection</label>
            <input type='hidden' value='0' name='child_protection_cert'>
            <input type="checkbox" name="child_protection_cert" value="1"  <?php echo e($client['child_protection_cert'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class="form-group"><label for="university" class="control-label">Human Centered Design</label>
            <input type='hidden' value='0' name='human_centered_design_cert'>
            <input type="checkbox" name="human_centered_design_cert" value="1" <?php echo e($client['human_centered_design_cert'] == "1" ? "checked" : ""); ?>><br>
        </div>
    </div>
</div>
<div class="row">
    <?php if(get_file_uploads($client['id']) != null): ?>
        <?php $__currentLoopData = get_file_uploads($client['id']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upload): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='col-md-4 col-sm-6'>
            <li class="documents"><a href="/download/<?php echo e($client['id']); ?>/<?php echo e($upload); ?>.pdf"></a></li>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });



</script><?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/user/admin/default/partial/entry.blade.php ENDPATH**/ ?>