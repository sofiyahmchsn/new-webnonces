<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Product</h1>
    <a
      href="index.php?page=insert_product"
      class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
    >
      <i class="fas fa-download fa-sm text-white-50"></i>
      Insert Product
    </a>
  </div>

  <!-- Data products -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Products</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table
          class="table table-bordered"
          id="dataTable"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Description</th>
              <th>Category</th>
              <th>Image</th>
              <th>Price</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Lapis Legit Nutella</td>
              <td>20x20</td>
              <td>Lapis Legit</td>
              <td>
                <img
                  src="./product_images/lapis-legit-nutella.jpg"
                  alt=""
                  class="product_img"
                />
              </td>
              <td>Rp. 450000</td>
              <td>21/3/2023</td>
              <td>True</td>
              <td class="d-flex">
                <a href="index.php?page=edit_product">
                  <i class="fas fa-pen fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <a href="">
                  <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Marmer cake cup</td>
              <td>8x8</td>
              <td>Cake</td>
              <td>
                <img
                  src="./product_images/marmer-cake-cup.jpg"
                  alt=""
                  class="product_img"
                />
              </td>
              <td>Rp. 100000</td>
              <td>19/3/2023</td>
              <td>True</td>
              <td class="d-flex">
                <a href="">
                  <i class="fas fa-pen fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <a href="">
                  <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Lapis Legit Keju</td>
              <td>20x20</td>
              <td>Lapis Legit</td>
              <td>
                <img
                  src="./product_images/lapis-legit-keju.jpg"
                  alt=""
                  class="product_img"
                />
              </td>
              <td>Rp. 400000</td>
              <td>21/3/2023</td>
              <td>True</td>
              <td class="d-flex">
                <a href="">
                  <i class="fas fa-pen fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
                <a href="">
                  <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Baked Potatoe</td>
              <td>20x20</td>
              <td>Pasta</td>
              <td>
                <img
                  src="./product_images/backed-potato.jpg"
                  alt=""
                  class="product_img"
                />
              </td>
              <td>Rp. 175000</td>
              <td>21/3/2023</td>
              <td>True</td>
              <td class="d-flex">
                <a href="">
                  <i class="fas fa-pen fa-sm fa-fw mr-2 text-gray-400"></i>
                </a>
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
