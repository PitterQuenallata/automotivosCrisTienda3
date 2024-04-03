<div class="page-body">
<?php
    $url = $_SERVER['REQUEST_URI'];
    $items = explode('/', $url);
?>
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3><?php echo ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)); ?></h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><svg class="stroke-icon">
                  <use href="<?php echo $path ?>views/assets/svg/icon-sprite.svg#stroke-home"></use>
                </svg></a></li>
            <li class="breadcrumb-item"><?php echo $items[sizeof($items) - 2]; ?></li>
            <li class="breadcrumb-item active"><?php echo ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>Invetario</h5><span>Resuemn del invetario</span>
          </div>
          <div class="card-body">
            <p>"AQui vendra datos del invetario"</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>