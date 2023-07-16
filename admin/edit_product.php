<div class="row">
  <div class="col-lg-10 mx-auto">
    <div class="p-5">
      <h1 class="h3 mb-5 text-gray-800">Edit Product</h1>
      <form class="user" enctype="multipart/form-data">
        <div class="form-group">
          <p class="text-gray-800 mb-3">Title Product</p>
          <input
            type="text"
            class="form-control"
            id="titleProduct"
            aria-describedby="emailHelp"
            value="Lapis Legit Nutella"
          />
        </div>
        <div class="form-group">
          <p class="text-gray-800 mb-3">Description Product</p>
          <input
            type="text"
            class="form-control"
            id="descProduct"
            aria-describedby="emailHelp"
            value="20x20"
          />
        </div>
        <div class="form-group">
          <p class="text-gray-800 mb-3">Select Category</p>
          <!-- section -->
          <select name="" id="" class="form-control">
            <option value="">Select Category</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
          </select>
        </div>
        <div class="form-group">
          <p class="text-gray-800 mb-3">Image Product</p>
          <div class="d-flex">
            <input
              type="file"
              class="form-control"
              id="imageProduct"
              aria-describedby="emailHelp"
            />
            <img
              src="./product_images/lapis-legit-nutella.jpg"
              alt=""
              class="product_img"
            />
          </div>
        </div>
        <div class="form-group">
          <p class="text-gray-800 mb-3">Product Price</p>
          <input
            type="text"
            class="form-control"
            id="productPrice"
            aria-describedby="emailHelp"
            value="Rp.450000"
          />
        </div>

        <a href="index.html" class="btn btn-primary btn-block">
          Create
        </a>
      </form>
    </div>
  </div>
</div>
