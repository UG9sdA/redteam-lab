<%@ page import="java.io.*, java.util.*" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>System Logs - RedTeam</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="background"></div>

  <div class="container">
    <header>
      <h1>System Logs Viewer</h1>
      <nav>
        <a href="index.jsp">Home</a>
        <a href="logs.jsp">Logs</a>
      </nav>
    </header>

    <main>
      <section>
        <h2>Selected Log File</h2>
        <div class="log-box">
<%
  String fileParam = request.getParameter("file");
  if (fileParam != null && !fileParam.contains("..") && !fileParam.contains("/")) {
    String logsPath = application.getRealPath("/logs/") + File.separator + fileParam;
    File logFile = new File(logsPath);
    if (logFile.exists()) {
      BufferedReader reader = new BufferedReader(new FileReader(logFile));
      String line;
      while ((line = reader.readLine()) != null) {
        out.println("<pre>" + line + "</pre>");
      }
      reader.close();
    } else {
      out.println("<p class='error'>File not found.</p>");
    }
  } else {
    out.println("<p class='warning'>No valid file selected. Try <code>?file=access.log</code></p>");
  }
%>
        </div>
      </section>
    </main>

    <footer>
      &copy; 2025 RedTeam Labs | Internal Use Only
    </footer>
  </div>
</body>
</html>
