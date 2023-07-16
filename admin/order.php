<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Orders</h1>
    <a
      href="export.php"
      class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
    >
      <i class="fas fa-download fa-sm text-white-50"></i>
      Generate Report
    </a>
  </div>

  <!-- Data products -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Orders</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered"
          id="ta"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th>No.</th>
              <th>Invoice Number</th>
              <th>Price</th>
              <th>Total Product</th>
              <th>Date</th>
              <th>Recipt</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>12345</td>
              <td>Rp. 450000</td>
              <td>2</td>
              <td>21/3/2023</td>
              <td><img src="" alt="" class="product_img" /></td>
              <td>Complete/Incomplete</td>
              <td class="d-flex">
                <a href="">
                  <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
