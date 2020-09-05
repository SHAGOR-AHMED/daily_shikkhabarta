<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Tables</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> All Sliders</h2>
            <div class="box-icon">
               <a href="<?= base_url('Slider/Add_slider'); ?>">Add New</a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        $i=1;
                        foreach($all_slide as $slide){ ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="center"><img src="<?= base_url($slide->image); ?>" height="50px" width="80px" /></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?php echo base_url();?>Slider/edit_slider/<?php echo $slide->slide_id?>" title="Edit">
                                <i class="icon-edit icon-white"></i>
                            </a>

                            <a class="btn btn-danger" href="<?php echo base_url();?>Slider/delete_slider/<?php echo $slide->slide_id?>" title="Delete" onclick="return checkDelete();">
                                <i class="icon-trash icon-white"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
        </div>
    </div><!--/span-->
</div><!--/row-->