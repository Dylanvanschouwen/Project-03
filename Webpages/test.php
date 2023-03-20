<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
  <script type="text/javascript" src="test.js"></script>
  <style>
    /*  CSS code here */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      color: orange;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      padding: 12px 16px;
      z-index: 1;
    }

  </style>
</head>
<body>
  <!--  HTML code here -->
  <h2>Clickable Dropdown</h2>
  <p>Click on the text below to open the dropdown content.</p>

  <div class="dropdown" onclick="toggleDropdown()">
    <button>Click me</button>
    <div class="dropdown-content" id="dropdown_123">
      <h1>text</h1>
    </div>
  </div>

</body>
</html>