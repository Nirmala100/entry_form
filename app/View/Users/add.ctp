<html>
<head>
   <?php  echo $this->Html->script('jquery-1.11.1'); ?>
    
    <script type="text/javascript">
    
    function hide(id){
    $('#' + id + ', label[for=' + id + ']').hide();
      }

    
    function show(id){
    $('#' + id + ', label[for=' + id + ']').show();
       }
 
    $(document).ready(function () {
     hide('UserDistrictId');
   $('#UserZoneId').change(function(){
         
        	//var zone = $(this).find('option:selected').val();
                //var zone=$.trim($("#UserZoneId option:selected").text());
                var zone=$(this).val();
               // alert(zone);
                $.ajax({
       // url: "<?php echo $this->webroot . $this->params["UsersController"]; ?>/districtAccToZones"+zone,
       //url:"<?php $this->Html->url(array('controller' => 'UsersController','action' => 'districtAccToZones'),true);?>",
	  // url:'<?php echo Router::url(array('controller'=>'Users','action'=>'districtAccToZones'));?>'+zone,
	  url :'/entry_system/users/district/'+zone,
        type: "POST",
        data: zone,
        //dataType:'json',
        success: function (response) {
            $('#loadDistrict').html(response);	
           // alert(response[0]);
           // show('UserDistrictId');
	

	   
        },
        error: function () {
            alert("error");
        }
    }); 
                
  //$("#UserDistrictId").show();
//show('UserDistrictId');
                                      
}); });

    </script>
<head>

<body>

<div class="users form">
<?php echo $this->Form->create('User',array('onsubmit' => 'return false;')); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('mobile_no');
		echo $this->Form->input('country_code');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('local_address');
		echo $this->Form->input('permanent_address');
		echo $this->Form->input('zone_id', array('empty'=>'Select'));
                
		//echo $this->Form->input('district_id');
                echo '<div id="loadDistrict">';
                echo $this->requestAction('/users/district');
                echo '</div>';
		echo $this->Form->input('municipality');
		echo $this->Form->input('ward_no');
		echo $this->Form->input('group_id');
		//echo $this->Form->input('username');
		//echo $this->Form->input('password');
		//echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
</body>
</html>