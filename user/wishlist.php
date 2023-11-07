<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }
 
    .wishlist-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
 
    .wishlist-item {
      padding: 10px 0;
      border-bottom: 1px solid #ccc;
    }
 
    .wishlist-item:last-child {
      border-bottom: none;
    }
 
    h1 {
      text-align: center;
      color: #333;
    }
 
    ul {
      list-style-type: none;
      padding: 0;
    }
 
    li {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
    }
 
    .add-wishlist-item {
      margin-top: 20px;
      text-align: center;
    }
 
    .add-wishlist-item input[type="text"] {
      width: 70%;
      padding: 5px;
      border: 1px solid #ccc;
    }
 
    .add-wishlist-item button {
      background-color: #333;
      color: #fff;
      padding: 5px 10px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
 
<div class="wishlist-container">
  <h1>My Wishlist</h1>
  <ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <!-- Add more items as needed -->
  </ul>
 
  <div class="add-wishlist-item">
    <input type="text" placeholder="Add a new item">
    <button>Add</button>
  </div>
</div>
 
</body>
</html>
