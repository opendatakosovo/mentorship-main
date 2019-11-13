            <div class='row disabled'>
                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('name')
                       -> required()
                       -> label(trans('contact::contact.label.name'))
                       -> placeholder(trans('contact::contact.placeholder.name')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('phone')
                       -> required()                       
                       -> label(trans('contact::contact.label.phone'))
                       -> placeholder(trans('contact::contact.placeholder.phone')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('mobile')
                       -> label(trans('contact::contact.label.mobile'))
                       -> placeholder(trans('contact::contact.placeholder.mobile')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('email')
                       -> required()
                       -> label(trans('contact::contact.label.email'))
                       -> placeholder(trans('contact::contact.placeholder.email')); ?>

                </div>              

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::url('website')
                       -> label(trans('contact::contact.label.website'))
                       -> placeholder(trans('contact::contact.placeholder.website')); ?>

                </div>
                

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::textarea('details')
                       ->rows(4)
                       -> label(trans('contact::contact.label.details'))
                       -> placeholder(trans('contact::contact.placeholder.details')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('address')
                       -> label(trans('contact::contact.label.address'))
                       -> placeholder(trans('contact::contact.placeholder.address')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('street')
                       -> label(trans('contact::contact.label.street'))
                       -> placeholder(trans('contact::contact.placeholder.street')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('city')
                       -> label(trans('contact::contact.label.city'))
                       -> placeholder(trans('contact::contact.placeholder.city')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('state')
                       -> label(trans('contact::contact.label.state'))
                       -> placeholder(trans('contact::contact.placeholder.state')); ?>

                </div>


                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('country')
                       -> label(trans('contact::contact.label.country'))
                       -> placeholder(trans('contact::contact.placeholder.country')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('zip')
                       -> label(trans('contact::contact.label.zip'))
                       -> placeholder(trans('contact::contact.placeholder.zip')); ?>

                </div>
                 <div class='col-md-4 col-sm-6'>
                       <?php echo Form::select('status')
                       ->options(trans('contact::contact.options.status'))
                       -> label(trans('contact::contact.label.status'))
                       -> placeholder(trans('contact::contact.placeholder.status')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('lat')
                       -> label(trans('contact::contact.label.lat'))
                       -> placeholder(trans('contact::contact.placeholder.lat')); ?>

                </div>

                <div class='col-md-4 col-sm-6'>
                       <?php echo Form::text('lng')
                       -> label(trans('contact::contact.label.lng'))
                       -> placeholder(trans('contact::contact.placeholder.lng')); ?>

                </div>
              <div class='col-md-12' >
                <div id="map_canvas" style="height: 530px;width: 100%"></div>
              </div>

            </div>
<script type="text/javascript">
  $(function(){
     var map,myLatlng;
      <?php if(!empty($contact->lat) && !empty($contact->lng)): ?>
         myLatlng = new google.maps.LatLng(<?php echo @$contact->lat; ?>,<?php echo @$contact->lng; ?>);
      <?php else: ?>
         myLatlng = new google.maps.LatLng(9.929789275194516,76.27235919804684);
      <?php endif; ?>
      var myOptions = {
         zoom: 10,
         center: myLatlng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
         }
      map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

      var marker = new google.maps.Marker({
      draggable: true,
      position: myLatlng,
      map: map,
      title: "Your location"
      });

      google.maps.event.addListener(marker, 'dragend', function (event) {
        $("#lat").val(this.getPosition().lat());
        $("#lng").val(this.getPosition().lng());
    });
  })
</script>            <?php /**PATH C:\xampp\htdocs\lavalite\website\resources\views/vendor/contact/admin/contact/partial/entry.blade.php ENDPATH**/ ?>