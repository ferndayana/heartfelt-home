<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heartfelt Homes Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <script defer src="script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>

body {
  margin: 0;
  font-family: Arial, sans-serif;
  color: #333;
  background-color: #f9f9f9;
}

header {
  background-color: #f5e6d9;
  padding: 15px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header .logo {
  font-size: 1.5rem;
  color: #d17c4a;
  font-weight: bold;
  display: flex;
  align-items: center;
}

header .logo i {
  margin-right: 10px;
}

header .exit {
  color: #d17c4a;
  font-size: 1rem;
  cursor: pointer;
  margin-right: 100;
  text-align: right;
}

main {
  padding: 20px;
}


.welcome {
  text-align: center;
  margin-bottom: 30px;
}

.welcome h1 {
  font-size: 2rem;
  color: #333;
}

.welcome p {
  color: #666;
  font-size: 1rem;
}


.stats {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: 30px;
}

.stat {
  background-color: #f5e6d9;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  flex: 1;
  max-width: 200px;
  min-width: 150px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.stat i {
  font-size: 2rem;
  color: #d17c4a;
}

.stat .number {
  font-size: 1.5rem;
  font-weight: bold;
}

.stat .label {
  font-size: 0.9rem;
  color: #666;
}

.status {
  padding: 5px 10px;
  border-radius: 5px;
  color: white;
  font-weight: bold;
}


.status.approved {
  background-color: #4caf50;
}

.status.in-process {
  background-color: #fff307; 
}

.status.declined {
  background-color: #f44336; 
}


.recently-adopted {
  margin-top: 20px;
}

.recently-adopted h2 {
  font-size: 1.5rem;
  color: #333;
  margin-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  overflow: hidden;
}

table th, table td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

table th {
  background-color: #f5e6d9;
  color: #333;
  font-weight: bold;
}

table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}


@media (max-width: 768px) {
  .stats {
    flex-direction: column;
    align-items: center;
  }
}
</style>
<body>
    <header>
      <div class="header-container">
        <div class="logo">
          <i class="bi bi-house-heart-fill"></i> HEARTFELT HOMES
        </div>
        <div class="exit">EXIT</div>
      </div>
    </header>
    <main>
      <section class="welcome">
        <h1>Welcome to Your Dashboard</h1>
        <p>Track and Manage Your Pet Adoption Progress</p>
      </section>
  
      <section class="stats">
        <div class="stat">
          <i class="bi bi-heart-fill"></i>
          <p class="number">5</p>
          <p class="label">Adopted</p>
        </div>
        <div class="stat">
          <i class="bi bi-cart-fill"></i>
          <p class="number">3</p>
          <p class="label">Pending</p>
        </div>
        <div class="stat">
          <i class="bi bi-calendar-x"></i>
          <p class="number">2</p>
          <p class="label">Declined</p>
        </div>
        <div class="stat">
          <i class="bi bi-envelope-x"></i>
          <p class="number">2</p>
          <p class="label">Cancelled</p>
        </div>
      </section>
  
      <section class="recently-adopted">
        <h2>Recently Adopted</h2>
        <table>
          <thead>
            <tr>
              <th>Pet Image</th>
              <th>Type</th>
              <th>Status</th>
              <th>Age</th>
              <th>Size</th>
              <th>Location</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="adoptedTableBody">
          
          </tbody>
        </table>
      </section>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const adoptedData = [
      {
        image: "🐱",
        type: "Cat",
        status: "Approved",
        age: "3 months",
        size: "Small",
        location: "Panabo",
        action: "Contact Shelter",
      },
      {
        image: "🐱",
        type: "Scottish Fold",
        status: "In Process",
        age: "1 year",
        size: "Medium",
        location: "Carmen",
        action: "Contact Shelter",
      },
      {
        image: "🐶",
        type: "Dog - Asong Pinoy",
        status: "In Process",
        age: "6 months",
        size: "Medium",
        location: "Davao",
        action: "Contact Shelter",
      },
      {
        image: "🐱",
        type: "Persian",
        status: "Declined",
        age: "5 months",
        size: "Small",
        location: "Davao",
        action: "Contact Shelter",
      },
      {
        image: "🐶",
        type: "Dog - Corgi",
        status: "In Process",
        age: "1 year",
        size: "Big",
        location: "Davao",
        action: "Contact Shelter",
      },
    ];
  
 
    const tableBody = document.getElementById("adoptedTableBody");
  
    adoptedData.forEach((item, index) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${item.image}</td>
        <td>${item.type}</td>
        <td><span class="status ${item.status.toLowerCase().replace(" ", "-")}">${item.status}</span></td>
        <td>${item.age}</td>
        <td>${item.size}</td>
        <td>${item.location}</td>
        <td><button onclick="navigateToContact('${item.type}')" class="contact-btn">${item.action}</button></td>
      `;
      tableBody.appendChild(row);
    });
  
    function navigateToContact(petType) {
     
      console.log(`Navigating to Contact Us for ${petType}`);
      
      window.location.href = "contact.html"; 
    }
    
  </script>
  
</script>
</body>
</html>
