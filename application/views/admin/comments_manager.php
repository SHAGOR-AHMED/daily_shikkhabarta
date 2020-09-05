
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
            <h2><i class="icon-user"></i> Members</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Comments Id</th>
                        <th>Blog Id</th>
                        <th>Comment Author Name</th>
                        <th>Author Email</th>
                        <th>Comments</th>
                        <th>Publication Status</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        foreach($all_comments as $v_cmnt){ ?>
                    <tr>
                        <td><?php echo $v_cmnt->cmnt_id; ?></td>
                        <td class="center"><?php echo $v_cmnt->id; ?></td>
                        <td class="center"><?php echo $v_cmnt->comment_author_name; ?></td>
                        <td class="center"><?php echo $v_cmnt->comment_author_email; ?></td>
                        <td class="center"><?php echo $v_cmnt->comment; ?></td>
                        <td class="center">
                            <?php 
                                if($v_cmnt->publication_status==1){
                                    echo 'Published';
                                }else{
                                    echo 'Unpublished';
                                }
                            ?>
                        </td>
                        <td class="center"><?php echo $v_cmnt->created_time; ?></td>
                        <td class="center">
                            <?php
                                if($v_cmnt->publication_status==1){ ?>

                                <a class="btn btn-success" href="<?php echo base_url();?>SuperAdmin/unpublished_category/<?php echo $v_cmnt->cmnt_id?>">
                                    <i class="icon-lock icon-white"></i>  
                                </a>

                            <?php }else{ ?>

                                <a class="btn btn-danger" href="<?php echo base_url();?>SuperAdmin/published_category/<?php echo $v_cmnt->cmnt_id?>">
                                    <i class="icon-ok icon-white"></i>  
                                </a>

                            <?php } ?>

                            <a class="btn btn-danger" href="<?php echo base_url();?>SuperAdmin/delete_category/<?php echo $v_cmnt->cmnt_id?>" title="Delete" onclick="return checkDelete();">
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

