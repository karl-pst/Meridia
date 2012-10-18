<?php
$this->load->view("themes/header");
?>
	<body>
		<div class="row-fluid">
			<div class="well	">
			<?php
				$attributes = array('class'=>'form-horizontal', 'onsubmit'=>'insert_finish_counts();');
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
								</select><a href="javascript:;" onclick="remove_finish_row(this)" id="remover_button" class="btn btn-danger"><i class="icon-white icon-trash"></i></a> <input name="default" type="radio">		
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
				$(function(){

					var max_finish = $("#finish option").length;

					//trigger click cloner_button to add new finish row
					$("#cloner_button").click(function(e){
						if(counter<max_finish-1){												
							e.preventDefault;
							$("div#select_finish_clone:eq("+counter+")").clone().insertAfter("div#select_finish_clone:eq("+counter+")");
							counter++;				
						}else{

							//do nothing, nothing to add anyway

						}		
					});	
				});


				// trigger click remover_button to remove current finish row
				function remove_finish_row(e){
						if(counter>0){
							$(e).parents("div.control-group").remove();
							counter--;
						}else{	

							//do nothing, only one row left.. should not be removed

						}
					}


				//insert number of types added to hidden form
				function insert_finish_counts(){
						$("#type_counts").val(counter+1);
					}
							
			</script>







	</body>
</html>