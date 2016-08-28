<div class="row-xs-12">
        <h3> My Tickets </h3>
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  
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
          </tr>
        </thead>

        <tbody>
          
          <?php foreach($data as $row){?>
          <tr>
            <td><?php echo $row['iid'];?></td>
            <td><?php echo $row['des'];?></td>
            
          </tr>
         <?php }}?>
        </tbody>
      </table>
          </div>
          </div>
        </div>
      </div>

    </section>
  </div>