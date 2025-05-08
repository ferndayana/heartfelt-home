<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heartfelt Homes</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
 
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .sidebar {
      height: 100vh;
      background-color: #f0ebe1;
    }

    .sidebar h4 {
      color: #333;
      font-weight: bold;
    }

    .nav-link {
      color: #333;
    }

    .nav-link i {
      margin-right: 10px;
    }

    .nav-link:hover {
      color: #e895d9; 
    }

    .card {
      border: none;
      background-color: #f5a1e1;
      color: #333;
    }

    .card-body h5 {
      font-size: 24px;
      font-weight: bold;
    }

    .table th, .table td {
      text-align: center;
    }

    h5 i {
      margin-right: 8px;
    }

    .btn-decline {
      color: #fff;
      background-color: #ff4d4d;
      border: none;
    }

    .btn-decline:hover {
      background-color: #e63939;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
     
      <div class="col-md-2 bg-light sidebar">
        <h4 class="py-3 text-center"><i class="fa-solid fa-paw"></i> HEARTFELT HOMES</h4>
        <ul class="nav flex-column">
          <li class="nav-item py-2">
            <a class="nav-link" href="#"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link" href="#"><i class="fa-solid fa-circle-question"></i> Help</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i> Settings</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link" href="#"><i class="fa-solid fa-key"></i> Password</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link" href="ADMIN.html"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a>
          </li>
        </ul>
      </div>

      <!--Content -->
      <div class="col-md-10">
        
        
        <div class="row text-center py-3">
          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5><i class="fa-solid fa-users"></i> 3K</h5>
                <p>Customers</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5><i class="fa-solid fa-cart-shopping"></i> 2K</h5>
                <p>Sales</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5><i class="fa-solid fa-blog"></i> 1K</h5>
                <p>Blog</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5><i class="fa-solid fa-wallet"></i> ₱ 96K</h5>
                <p>Earnings</p>
              </div>
            </div>
          </div>
        </div>

      
        <div class="row">
          <div class="col-md-8">
            <h5><i class="fa-solid fa-paw"></i> Recently Adopted</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Breed</th>
                  <th>Price</th>
                  <th>Payment</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Cat</td>
                  <td>Persian</td>
                  <td>12k</td>
                  <td>Paid</td>
                  <td>Pick up</td>
                </tr>
                <tr>
                  <td>Cat</td>
                  <td>Scottish Fold</td>
                  <td>15k</td>
                  <td>Paid</td>
                  <td>Delivered</td>
                </tr>
                <tr>
                  <td>Dog</td>
                  <td>Asong Pinoy</td>
                  <td>0</td>
                  <td>Free</td>
                  <td>Pick up</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
         
            <h5><i class="fa-solid fa-clock"></i> Pendings</h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="pending-orders">
                <tr>
                  <td>Dog (Golden Retriever)</td>
                  <td>
                    <button class="btn btn-decline btn-sm" onclick="declineOrder(this)">Decline</button>
                  </td>
                </tr>
                <tr>
                  <td>Cat (Bengal)</td>
                  <td>
                    <button class="btn btn-decline btn-sm" onclick="declineOrder(this)">Decline</button>
                  </td>
                </tr>
              </tbody>
            </table>

       
            <h5><i class="fa-solid fa-user"></i> Recent Customers</h5>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa-solid fa-user-circle"></i> Aljhen Elepante</li>
              <li class="list-group-item"><i class="fa-solid fa-user-circle"></i> Dayana Fernando</li>
              <li class="list-group-item"><i class="fa-solid fa-user-circle"></i> Shan Fuego</li>
              <li class="list-group-item"><i class="fa-solid fa-user-circle"></i> Mario Reyes</li>
              <li class="list-group-item"><i class="fa-solid fa-user-circle"></i> Lucia Gonzales</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

  <script>
    function declineOrder(button) {
     
      const row = button.closest("tr");
      row.remove();

     
      console.log("Order declined.");
    }
     
    
    function loadPendingOrders() {
        const pendingOrders = JSON.parse(localStorage.getItem("pendingOrders")) || [];
        const pendingOrdersTable = document.getElementById("pending-orders");
        
       
        pendingOrdersTable.innerHTML = "";

        
        pendingOrders.forEach(order => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${order.pet} (${order.name})</td>
                <td>
                    <button class="btn btn-decline btn-sm" onclick="declineOrder(this)">Decline</button>
                </td>
            `;
            pendingOrdersTable.appendChild(row);
        });
    }

    
    window.onload = loadPendingOrders;

    
    function declineOrder(button) {
        const row = button.closest("tr");
        row.remove();

        
        const pendingOrders = JSON.parse(localStorage.getItem("pendingOrders")) || [];
        const updatedOrders = pendingOrders.filter(order => {
            return !row.textContent.includes(order.name);
        });
        localStorage.setItem("pendingOrders", JSON.stringify(updatedOrders));
    }
    

  </script>
</body>
</html>
