<div class="row-xs-12">
        <h3> Tickets </h3>
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Tickets

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url('/admin/alltickets');?>">Tickets</a></li>
      </ol>
    </section>
    <section class="content">
<?php if($data){ ?>
  
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tickets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="alltickets" class="table table-bordered table-hover">
        <thead>
          <tr>
              <th data-field="id">Ticket ID</th>
              <th data-field="name">Description</th>
              <th data-field="name">Status</th>
              <th data-field="name">Message</th>
              <th data-field="name">Priority</th>
              <th></th>

          </tr>
        </thead>

        <tbody>
          
          <?php foreach($data as $row){?>
          <tr>
            <form action="<?php echo base_url('/mod/update/'.$row['iid']);?>" method="POST">
            <td><?php echo $row['iid'];?></td>
            <td><?php echo $row['des'];?></td>
            <td><select name="status_<?php echo $row['iid'];?>" id="status_<?php echo $row['iid'];?>" class="select2-multi form-control" data-placeholder="Select Status">
                                        <option value=""></option>
                                        <?php foreach($status as $s){ ?>
                                        <option <?php if($s['id']==$row['status']){echo "selected";}?>  value="<?php echo $s['id'];?>"> <?php echo $s['status'];?> </option>
                                       
                                     <?php  } ?>

                                    </select></td>
            <td><input type="text" name="message_<?php echo $row['iid'];?>" id="message_<?php echo $row['iid'];?>" class="form-control" style="color: black; text-align: center" value="<?php echo $row['message'];?>" ></td>
            <td><input type="text" name="pri_<?php echo $row['iid'];?>" id="pri_<?php echo $row['iid'];?>" class="form-control" style="color: black; text-align: center" value="<?php echo $row['mod_priority'];?>"></td>
            <td><button class="button" action="Submit" href="<?php echo base_url('/mod/update'.$row['iid']);?>"> Update </button></td>
          </tr>
         <?php }}?>
        </tbody>
      </table>
       
          </div>
          </div>
        </div>
      </div>
    </form>
    </section>
  </div>

