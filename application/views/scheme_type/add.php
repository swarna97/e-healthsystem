<div class="content-wrapper">

<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Scheme Type Add</h3>
            </div>
            <?php echo form_open('scheme_type/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="type_name" class="control-label">Type Name</label>
						<div class="form-group">
							<input type="text" name="type_name" value="<?php echo $this->input->post('type_name'); ?>" class="form-control" id="type_name" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
</div>
