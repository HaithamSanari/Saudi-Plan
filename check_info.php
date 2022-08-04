<!-- Display any info -->
<?php if(isset($_REQUEST['info'])){ ?>
<?php if($_REQUEST['info'] == "added"){?>
<div class="alert alert-success" role="alert">
  Post has been added successfully
</div>
<?php }else if($_REQUEST['info'] == "updated"){?>
<div class="alert alert-success" role="alert">
  Post has been updated successfully
</div>
<?php }else if($_REQUEST['info'] == "deleted"){?>
<div class="alert alert-danger" role="alert">
  Post has been deleted successfully
</div>
<?php  }?>
<?php  }?>