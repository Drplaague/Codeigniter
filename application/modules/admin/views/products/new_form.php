<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("admin/_partials/head.php") ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
			<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

			<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php endif; ?>

			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo base_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
				</div>
				<div class="card-body">

					<form action="<?php echo base_url('admin/products/add') ?>" method="post" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="name">Name*</label>
							<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
							 type="text" name="name" placeholder="Product name" />
							<div class="invalid-feedback">
								<?php echo form_error('name') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="price">Price*</label>
							<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
							 type="number" name="price" min="0" placeholder="Product price" />
							<div class="invalid-feedback">
								<?php echo form_error('price') ?>
							</div>
						</div>


						<div class="form-group">
							<label for="name">Photo</label>
							<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
							 type="file" name="image" />
							<div class="invalid-feedback">
								<?php echo form_error('image') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="name">Description*</label>
							<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
							 name="description" placeholder="Product description..."></textarea>
							<div class="invalid-feedback">
								<?php echo form_error('description') ?>
							</div>
						</div>

						<input class="btn btn-success" type="submit" name="btn" value="Save" />
					</form>

				</div>

				<div class="card-footer small text-muted">
					* required fields
				</div>


			</div>
		</div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Javascript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>