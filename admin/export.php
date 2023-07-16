<?php
//import koneksi ke database
?>
<html>
  <head>
    <title>All Order Nonces</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
    />
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"
    ></script>
  </head>

  <body>
    <div class="container">
      <h2>All Orders</h2>
      <div class="data-tables datatable-dark">
        <table
          class="table table-bordered"
          id="exportorder"
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
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        $("#exportorder").DataTable({
          dom: "Bfrtip",
          buttons: ["excel", "print"],
        });
      });
    </script>

<!-- buttons: ["excel", "pdf", "print"], -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
  </body>
</html>
