<!-- Begin Page Content -->
<div class="container-fluid">
<form action="<?php echo site_url('report/addreport') ?>" name="form1" id="form1" method="post" enctype="multipart/form-data" >
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="card shadow mb-3">
        <div class="card-header">
         <h5>   Step 1 : Complaint</h5>
         </div>
            <div class="card-body">
                <div class="form-group">
                   <h6> <b><label for="description">Complaint Report*</label></b> </h6>
                    <textarea class="form-control" id="description" name="description" placeholder="Report Description" rows="7" ></textarea>
                     <?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
    </div>

    <div class="card shadow mb-3">
        <div class="card-header">
         <h5>   Step 2 : Reporter Details</h5>
         </div>
            <div class="card-body">
            <div class="form-group">
    
            <input class="form-control" type="hidden" name="status" value="Pending" readonly>
            

            <h6>  <b>  <label for="uqid">User ID*</label> </b> </h6>

                       <input class="form-control" type="text" name="uqid" value="<?=$user['id']?>" readonly>
                         
                </div>
            <div class="form-group">
            <h6>  <b>  <label for="title">Reporter Name*</label></b> </h6>
                    <input class="form-control" type="text" name="name" value="<?= $user['name']; ?>" readonly>
                </div>
                <div class="row">
                <div class="col-md-4">
                    
                        <div class="form-group">
                <h6>  <b>   <label for="address">House Address*</label>  </b> </h6>
                            <input class="form-control"
                             type="text" name="address" placeholder="House Address" value="<?= set_value('address'); ?>">
                             <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                 <h6>  <b>  <label for="age">Age*</label>  </b> </h6>
                            <input class="form-control"
                            type="number" name="age" placeholder="Age" value="<?= set_value('age'); ?>">
                            <?= form_error('age', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                
                    
                </div>
                <div class="form-group">
                <h6>  <b>   <label for="contactnum">Contact Number*</label> </b> </h6>
                    <input class="form-control"
                            type="text" name="contactnum" placeholder="Contact Number" value="<?= set_value('contactnum'); ?>">
                            <?= form_error('contactnum', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>     
            </div>
        </div>

    <div class="card shadow mb-3">
        <div class="card-header">
        <h5>   Step 3 : Incident Detials</h5>
        </div>

        <div class="card-body">
        
                             
                <div class="form-group">
               <h6>  <b> <label for="title">Report Title*</label>  </b> </h6>
                    <input class="form-control"
                    type="text" name="title" placeholder="Report Title" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
           
                <div class="form-group">
               <h6>  <b> <label for="type">Type of Report</label>  </b> </h6>
                    <select class="form-control" id="type" name="type">
                        <option value="Incident Report">Incident Report</option>
                        <option value="Afficable">Afficable</option>
                  
                    </select>
                </div>
                <div class="form-group">
                <label for="file">Attachment</label>
                    <input class="form-control-file"
                    type="file" name="file" />
                    <div class="invalid-feedback">
                        <?php echo form_error('file') ?>
                    </div>
                </div>
                <!-- button save -->
                <input class="btn btn-success" href="#deleteModal" type="button" data-toggle="modal" data-target="#confirm-submit" value="Report" onclick="return deleteConfirm(this.form)"/>
            </form>
        </div>

        <div class="card-footer small text-muted">
            * must be filled
        </div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Submiting this form can't be deleted</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <input id="delete-confirm" class="btn btn-success" type="submit" value="Confirm"/>
      </div>
    </div>
  </div>
</div>
<script>

    function deleteConfirm(){
        $('#deleteModal').modal();
        $('#delete-confirm').click(function() {
        // handle form processing here
        $('#form1').submit();
    });
        
    }
    
</script>