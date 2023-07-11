<?php 
  include('../config/config.php');
?>

<?php
// Mengambil alamat IP pengguna menggunakan metode alternatif
function getIPAddress() {
	//whether ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
	//whether ip is from the proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
   	}
//whether ip is from the remote address
	else{
       	$ip = $_SERVER['REMOTE_ADDR'];
   	}
   	return $ip;
}


function cart(){
  if(isset($_GET['add_to_cart'])){
      global $conn;
      $getIPAdd = getIPAddress();

      $get_product_id = $_GET['add_to_cart'];
      $select_query = "Select * from `cart_detail` where ip_address = '$getIPAdd' && id_produk = $get_product_id";
      $result_query = mysqli_query($conn, $select_query);

      $num_of_rows = mysqli_num_rows($result_query);
      if($num_of_rows > 0){
          echo "<script> alert('This item was successfully added to cart ')</script>";
          echo "<script>window.open('index.php', '_self')</script>";
      } else {
          $insert_query = "insert into `cart_detail` (id_produk, ip_address, quantity) values ($get_product_id, '$getIPAdd', 0)";
          $result_query = mysqli_query($conn, $insert_query);
          echo "<script> alert('Items is added to cart ')</script>";
          echo "<script>window.open('index.php', '_self')</script>";
      }
  }
}

function getAllProducts(){

  global $conn;

  // condition to check isset or not
  if(!isset($_GET['category'])){
      $select_query = "Select * from `kelola_produk`";
      $result_query = mysqli_query($conn, $select_query);
  
      while( $row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['id_produk'];
        $product_title = $row['nama_produk'];
        $product_desc = $row['desk_produk'];
        $product_image = $row['img_produk'];
        $product_price = $row['harga_produk'];
        $category_id = $row['id_cat'];
        
        echo "
        <div class='col-md-3 mb-2'>
          <div class='card' style='width: 16rem;'>
            <img src='../admin/product_images/$product_image' class='card-img-top' alt='$product_title'/>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_desc</p>
              <p class='card-text'>Rp. $product_price</p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
            </div>
          </div>
        </div>";
      }
  }
}

function getUnikCategories(){
  global $conn;

  // condition to check isset or not
  if(isset($_GET['category'])){
      $category_id = $_GET['category'];
      $select_query = "Select * from `kelola_produk` where id_cat=$category_id";
      $result_query = mysqli_query($conn, $select_query);

      $num_of_rows = mysqli_num_rows($result_query);
      if($num_of_rows == 0){
          echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
      }
  
      while( $row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['id_produk'];
        $product_title = $row['nama_produk'];
        $product_desc = $row['desk_produk'];
        $product_image = $row['img_produk'];
        $product_price = $row['harga_produk'];
        $category_id = $row['id_cat'];
        
        echo "
        <div class='col-md-3 mb-2'>
          <div class='card' style='width: 16rem;'>
            <img src='./admin-area/product_images/$product_image' class='card-img-top' alt='$product_title'/>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_desc</p>
              <p class='card-text'>Rp. $product_price</p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
            </div>
          </div>
        </div>";
      }
  }
}

function getproducts(){
  global $conn;

  // condition to check isset or not
  if(!isset($_GET['category'])){
      $select_query = "Select * from `kelola_produk` LIMIT 0,8";
      $result_query = mysqli_query($conn, $select_query);
  
      while( $row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['id_produk'];
        $product_title = $row['nama_produk'];
        $product_desc = $row['desk_produk'];
        $product_image = $row['img_produk'];
        $product_price = $row['harga_produk'];
        $category_id = $row['id_cat'];
        
        echo "
        <div class='col-md-3 mb-2'>
          <div class='card' style='width: 16rem;'>
            <img src='./admin-area/product_images/$product_image' class='card-img-top' alt='$product_title'/>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_desc</p>
              <p class='card-text'>Rp. $product_price</p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
            </div>
          </div>
        </div>";
      }
  }
}

?>

