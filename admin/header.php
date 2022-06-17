<?php
session_start(); 
include('function.php');

if(!is_login()){
redirectTO("login.php");
}
$login_array = $_SESSION['login_token'];
extract($login_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Grexa - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- switcher css -->
  <link rel="stylesheet" href="assets/bundles/pretty-checkbox/pretty-checkbox.min.css">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                  class="fas fa-bars"></i></a></li>
            <li>
            <div class="search-group">
              <span class="nav-link nav-link-lg" id="search">
                  <i class="fa fa-search" aria-hidden="true"></i>
              </span>
              <input type="text" class="search-control" placeholder="search" aria-label="search" aria-describedby="search">
            </div>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i class="fas fa-expand"></i>
              </a>
            </li>
            
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <span class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    New Order
                    <span class="time">3 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <span class="dropdown-item-icon bg-info text-white">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    Application Error
                    <span class="time">7 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-success text-white">
                    <i class="fa fa-power-off" aria-hidden="true"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    Server restarted
                    <span class="time">9 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-danger text-white">
                    <i class="fa fa-server" aria-hidden="true"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    Your Subscription Expired
                    <span class="time">10 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-purple text-white">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    You have <b>4</b> new followers
                    <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-1.png" class="image-square">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Michael Gardner</span>
                    <span class="time messege-text">Analysis Project and Design Flowchart</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="image-square">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Nancy Burton</span>
                    <span class="time messege-text">Client meeting is cancelled</span>
                    <span class="time">5 Hour Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="image-square">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Amiah Smith</span>
                    <span class="time messege-text">Project Planning</span>
                    <span class="time">12 Hour Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="image-square">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">John Doe</span>
                    <span class="time messege-text">Leave application !!</span>
                    <span class="time">1 Days Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="image-square">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Wiltor Stone</span>
                    <span class="time messege-text">Discussion about increment!</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="image-square">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Nancy Burton</span>
                    <span class="time messege-text">Upcoming project meeting</span>
                    <span class="time text-primary">3 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="assets/img/user.png" class="user-img-radious-style">
              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Hello Jessica Hill</div>
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="timeline.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" onclick="return confirm('Are You Sure To Logout?')" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>