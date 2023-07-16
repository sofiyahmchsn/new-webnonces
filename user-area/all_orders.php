<!-- path -->
<div class="site-wrap">
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
          <a href="?page=dashboard">Home</a> <span class="mx-2 mb-0">/</span>
          <strong class="text-black">My Profile</strong>
          <span class="mx-2 mb-0">/</span>
          <strong class="text-black">My Orders</strong>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post" enctype="multipart/form-data">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="number">No.</th>
                  <th class="order-total">Order Total</th>
                  <th class="total-product">Total Product</th>
                  <th class="invoice-number">Invoice Number</th>
                  <th class="date">Date</th>
                  <th class="status">Status</th>
                  <th class="recipt">Recipt</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-number">1</td>
                  <td class="order-total">$49.00</td>
                  <td class="total-product">2</td>
                  <td class="invoice-number">123456789</td>
                  <td class="date">21/3/2023</td>
                  <td class="status">Complete/Incomplete</td>
                  <!-- upload image -->
                  <td class="recipt">
                    <a href=""
                      >upload
                      <input type="file" class="form-control" id="recipt" />
                    </a>
                    <!-- <img src="images/cloth_1.jpg" alt="Image" class="img-fluid"> -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
              <button
                class="btn btn-primary btn-sm btn-block"
                onclick="window.location='checkout.html'"
              >
                Update Cart
              </button>
            </div>
            <div class="col-md-6">
              <button
                class="btn btn-outline-primary btn-sm btn-block"
                onclick="window.location='index.php?page=dashboard'"
              >
                Continue Shopping
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">$230.00</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <button
                    class="btn btn-primary btn-lg py-3 btn-block"
                    onclick="window.location='index.php?page=checkout'"
                  >
                    Proceed To Checkout
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
