<?php
include 'partials/header.php';
include 'partials/navbar.php';

$page = isset($_GET['page']) ? $_GET['page'] : '';

// Check if the requested page exists
if (file_exists($page . '.php')) {
  include($page . '.php');
} else {
  // Redirect to home page if requested page does not exist
  header('Location: index.php?page=home');
  exit();
}

// switch ($page) {
//   case 'home':
//     include('home.php');
//     break;
//     case 'products':
//       include('products.php');
//       break;
//     case 'users':
//       include('users.php');
//       break;
//     case 'categories':
//       include('categories.php');
//       break;
//     case 'add_user':
//       include('add_user.php');
//       break;
//     case 'add_products':
//       include('add_products.php');
//       break;
//     case 'add_category':
//       include('add_category.php');
//       break;
//     default:
//       include('home.php');
//       break;
//   }
include 'partials/footer.php'
?>