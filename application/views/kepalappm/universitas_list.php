
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DAFTAR PERGURUAN TINGGI&nbsp <?php echo anchor('petugasppm/universitas/create/','TAMBAH',array('class'=>'btn btn-warning btn-sm'));?>
		<!-- <?php echo anchor(site_url('universitas/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3> -->
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Universitas</th>
		    <th>Aksi</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($universitas_data as $universitas)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $universitas->universitas ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('petugasppm/universitas/read/'.$universitas->id_universitas),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('petugasppm/universitas/update/'.$universitas->id_universitas),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('petugasppm/universitas/delete/'.$universitas->id_universitas),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Apakah anda yakin ingin menghapusnya ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->