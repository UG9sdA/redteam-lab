<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>System Dashboard - RedTeam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="background"></div>

  <div class="container">
    <header>
      <h1>RedTeam Internal Status Dashboard</h1>
      <nav>
        <a href="index.jsp">Home</a>
        <a href="logs.jsp?file=access.log">System Logs</a>
      </nav>
    </header>

    <main>
      <section class="status-grid">
        <div class="status-card ok">
          <h3>www.redteam.lab</h3>
          <p>Status: Operational</p>
        </div>
        <div class="status-card warning">
          <h3>internal.redteam.lab</h3>
          <p>Status: Degraded</p>
        </div>
        <div class="status-card danger">
          <h3>admin.redteam.lab</h3>
          <p>Status: Offline</p>
        </div>
      </section>
    </main>

    <footer>
      &copy; 2025 RedTeam Labs | Internal Use Only
    </footer>
  </div>
</body>
</html>
