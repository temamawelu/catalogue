<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>memberdashboard">Dashboard</a>
                    </li>

                    <li class="active">
                        <i class="fa fa-edit"></i> Category
                    </li>
                </ol>  
                
            </div>
        </div>


        <div class="row" >
            <div class="col-md-12">
                <div class="header-panel-info">
                    <a href="<?php echo base_url(); ?>category/addEdit" class="btn btn-mantra">
                        <span class="glyphicon glyphicon-plus"></span> Add category</a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:15px;">
			<div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-asterisk fa-fw"></i> Category</h3>
                    </div>
		<div class="panel-body">
                        <div class="col-lg-12"> <!--One Repeatation Max Test-->
                            <div class="panel panel-yellow">
<!--                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-medkit fa-fw"></i> Blood test</h3>
                                </div>-->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="categorylist">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($bodycontent["ctglist"]) {
                                                    foreach ($bodycontent["ctglist"] as $content) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo($content["category_name"]); ?></td>
                                                            <td><?php echo($content["category_desc"]); ?></td>
                                                            
                                                            <td>
                                                                <?php if($content["image_thumnail"]!="") {?>
                                                                <img src="<?php  echo (base_url().'application/assets/images/categoryimages/thumbnail/'.$content["image_thumnail"] );?>" 
                                                                     class="img-thumbnail" alt=""> 
                                                                <?php }else{?>
                                                                    <img src="<?php  echo (base_url().'application/assets/images/categoryimages/thumbnail/no-image.png' );?>" 
                                                                     class="img-thumbnail" alt="No image">
                                                                
                                                                <?php }?>
                                                                
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url(); ?>category/addEdit/id/<?php echo($content["category_id"]);?>" class="btn btn-warning btn-sm" role="button">Edit</a>
                                                                
                                                                <?php if($content["is_active"]=='Y'){?>
                                                                    <a href="<?php echo base_url(); ?>category/status/id/<?php echo($content["category_id"].'/stat/Y');?>" class="btn btn-success btn-sm" role="button">Active</a>
                                                                <?php 
                                                                   }
                                                                   else{
                                                                       ?>
                                                                       <a href="<?php echo base_url(); ?>category/status/id/<?php echo($content["category_id"].'/stat/N');?>" class="btn btn-danger btn-sm" role="button">Inactive</a>
                                                                <?php } ?>
                                                            </td>
                                                            
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--One Repeatation Max Test-->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
<div id="delconfmodal-prdcatg" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are your sure to delete ?</p>
        <input type="hidden" id="prodcatgtmpid" value=""/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default del-prodctg-yes" data-dismiss="modal">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
        
        
        
        
        
    </div>
</div>



