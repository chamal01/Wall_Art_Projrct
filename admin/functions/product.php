
<?php
// Set the error reporting level to hide warnings
error_reporting(E_ALL & ~E_WARNING);

try {
    // Create a new database connection
    $db = new mysqli('localhost', 'root', '', 'phpcrud');

    // Disable warnings for the database connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Your SQL query here
    $result = $db->query('SELECT * FROM tblusers');

    // Rest of your code

    // Close the database connection when you're done
    $db->close();
} catch (Exception $e) {
    // Handle exceptions or errors here
    echo "An error occurred: " . $e->getMessage();
}
?>

<?php
include('../../dbconnection.php');

if (isset($_GET['mode']) && $_GET['mode'] === 'delete') {
    $id = intval($_GET['id']);
    $ppic = $_GET['ppic'];

    $updateSql = "UPDATE tblusers SET status = '0' WHERE ID = $id";

    $updateResult = mysqli_query($con, $updateSql);

    if ($updateResult) {
        if (file_exists("../../$ppic")) {
            unlink("../../$ppic");
        }
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

$ret = mysqli_query($con, "SELECT * FROM tblusers WHERE status = 1");
$cnt = 1;
$row = mysqli_num_rows($ret);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sandaru Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title select {
    border-color: #ddd;
    border-width: 0 0 1px 0;
    padding: 3px 10px 3px 5px;
    margin: 0 5px;
}
.table-title .show-entries {
    margin-top: 7px;
}
.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 200px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box .input-group-addon {
    border: none;
    border: none;
    background: transparent;
    position: absolute;
    z-index: 9;
}
.search-box input {
    height: 34px;
    padding-left: 28px;     
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 8px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    padding: 0 10px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
}
.pagination li a:hover {
    color: #666;
}   
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
  </nav>Sandaru creation
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link">
      <img src="../../dist/img/CompanyLogo.png" alt="Logo"  width="70px" height="80px" style="opacity: 1">
      <span class="brand-text font-weight-light">Sandaru creation</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Update & Add new products</a>
        </div>
      </div>
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <div class="input-group-append">
            </button>
          </div>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="../admin.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../../wall_art_Project/index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visit the  Site</p>
                </a>
          </li>
      </nav>
    </div>
  </aside>
  <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <div class="tab-content">               
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Products</h2>
                    </div>
                       <div class="col-sm-7" align="right">
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New product</span></a>
                                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>product Name</th>
                <th>Category</th>
                <th>Item code</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($row > 0) {
                while ($row = mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><img src="profilepics/<?php echo $row['ProfilePic']; ?>" width="80" height="80"></td>
                        <td><?php echo $row['FirstName']; ?></td>
                        <td><?php echo $row['LastName']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['MobileNumber']; ?></td>
                        <td> <?php echo $row['CreationDate']; ?></td>
                        <td>
                            <a href="read.php?viewid=<?php echo htmlentities($row['ID']); ?>" class="view"
                               title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="edit.php?editid=<?php echo htmlentities($row['ID']); ?>" class="edit"
                               title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                               <a href="product.php?mode=delete&id=<?php echo ($row['ID']); ?>&ppic=<?php echo $row['ProfilePic']; ?>"
   class="delete" title="Delete" data-toggle="tooltip"
   onclick="return confirm('Do you really want to Delete ?');"><i
         class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php
                    $cnt = $cnt + 1;
                }
            } else {
                ?>
                <tr>
                    <th style="text-align:center; color:red;" colspan="9">No Record Found</th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
       
        </div>
    </div>
</div>
    </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../../dist/js/adminlte.js"></script>
<script src="../../dist/js/demo.js"></script>
</body>
</html>
