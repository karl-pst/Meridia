<?php
$this->load->view("themes/header");
?>
	<body>
		<div class="row-fluid">
			<div class="well">
			<?php
				$attributes = array('class'=>'form-horizontal', 'onsubmit'=>'insert_type_counts();');
				echo form_open_multipart('dedicate_product_finish/save_finish', $attributes);						
			?>
					<fieldset>
						<legend>Add Finish Part</legend>
						
						
						<div class="control-group">					
							<label class="control-label" for="sku">SKU</label>
							<div class="controls">					
								<input type="text" id="sku" name="sku" value="SKU 0112 PT001 D1234" />
							</div>
						</div>
						<div class="control-group" id="select_finish_clone">

							<label class="control-label" for="finish">Finish Part</label>
							<div class="controls">
								<select name="finish[]" id="finish">
									<?php
										foreach ($finish as $key => $value) {
											echo "<option value='".$value['id']."'>".$value['name']."</option>";
										}
									?>
								</select> <input name="default" type="radio">		
							</div>					
							
						</div> 
						
						<div class="control-group">										
							<div class="controls">
								<input type="hidden" id="type_counts" name="type_counts" />					
								<a href="javascript:;" id="cloner_button" class="btn btn-primary"><i class="icon-white icon-plus-sign"></i>Add More</a>
							</div>
						</div>
						<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save</button>				
						</div>					
					</fieldset>
				</form>
			</div>	
			<script type="text/javascript">	
				var counter = 0;

				//manipulate the add more types			
				$(document).ready(function(){					
					$("#cloner_button").click(function(e){
						e.preventDefault;
						$("div#select_finish_clone:eq("+counter+")").clone().insertAfter("div#select_finish_clone:eq("+counter+")");
						counter++;						
					});
					
				});

				//insert number of types added to hidden form
				function insert_type_counts(){
						$("#type_counts").val(counter+1);
					}
							
			</script>







	</body>
</html>