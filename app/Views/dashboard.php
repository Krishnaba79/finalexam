
<?php include("Header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    /* General Reset */
  
    /* Main Content */
    .main-content {
      margin-left: 250px;
      padding: 20px;
      background-color: #fff;
      min-height: 100vh;
    }

    .main-content .header {
      padding: 10px 0;
      border-bottom: 2px solid #f4f4f9;
    }

    .main-content .header h2 {
      font-size: 28px;
      font-weight: normal;
    }

    .cards {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .card {
      flex: 1 1 calc(25% - 20px);
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
    }

    .card h3 {
      margin-bottom: 10px;
      font-size: 20px;
    }

    .card p {
      font-size: 16px;
      color: #555;
    }

    /* Footer */
    .footer {
      text-align: center;
      padding: 10px 0;
      border-top: 2px solid #f4f4f9;
      margin-top: 20px;
      color: #777;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
      }

      .card {
        flex: 1 1 100%;
      }

      .sidebar {
        width: 200px;
      }

      .main-content {
        margin-left: 200px;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
 

  <!-- Main Content -->
  <div class="main-content">
    <div class="header">
      <h2>Welcome, Admin</h2>
    </div>

    <div class="cards">
      <div class="card">
        <h3>Total Users</h3>
        <p>100</p>
      </div>
      <div class="card">
        <h3>Total stu</h3>
        <p>200</p>
      </div>
      <div class="card">
        <h3>Total Users</h3>
        <p>456</p>
      </div>
  </div>



    <div class="footer">
      <p>&copy; 2024 Admin Panel. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
