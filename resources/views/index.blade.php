<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>AsdaInfoTech</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fafafa;
    }
    .navbar {
      background-color: #fff !important;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .navbar-brand {
      font-weight: bold;
    }
    .nav-link {
      color: #111 !important;
      font-weight: 500;
    }
    .nav-link:hover {
      color: #007bff !important;
    }
    .header-title {
      font-size: 4rem;
      font-weight: bold;
      color: #111827;
      text-align: center;
      margin-top: 60px;
    }
    .search-box {
      max-width: 500px;
      margin: 30px auto;
    }
    .search-box input {
      border-radius: 10px;
      padding: 1rem 1.5rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      width: 100%;
    }
    .topic-card {
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      background-color: white;
      padding: 20px;
      margin-bottom: 20px;
      height: 100%;
      transition: box-shadow 0.2s;
    }
    .topic-card:hover {
      box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    }
    .topic-title {
      font-weight: 700;
      font-size: 1.2rem;
    }
    .topic-posts {
      float: right;
      color: #6b7280;
      font-size: 0.9rem;
    }
    .navbar .nav-link.active {
        color: #007bff !important;
    }
    .cheat-sheet-card {
        background: linear-gradient(to bottom, #888, #aaa);
        color: white;
        text-align: center;
        padding: 40px 20px;
        border-radius: 10px;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
        transition: transform 0.2s;
        height: 100%;
    }
    .cheat-sheet-card:hover {
        transform: scale(1.02);
    }
    .cheat-sheet-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
  </style>
</head>
<body>
@include('layout.navbar')

<h1 class="header-title">Course Programming</h1>

<div x-data x-show="$store.search.visible" x-transition class="search-box">
    <input type="text" class="form-control" placeholder="🔍 Search topics or keywords..." />
</div>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="cheat-sheet-card">
                <div class="cheat-sheet-icon"><i class="bi bi-code-slash"></i></div>
                <h5>Programming</h5>
                <p class="mb-0">Cheat Sheets</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cheat-sheet-card">
                <div class="cheat-sheet-icon"><i class="bi bi-display"></i></div>
                <h5>Software</h5>
                <p class="mb-0">Cheat Sheets</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cheat-sheet-card">
                <div class="cheat-sheet-icon"><i class="bi bi-briefcase"></i></div>
                <h5>Business and Marketing</h5>
                <p class="mb-0">Cheat Sheets</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cheat-sheet-card">
                <div class="cheat-sheet-icon"><i class="bi bi-mortarboard"></i></div>
                <h5>Education</h5>
                <p class="mb-0">Cheat Sheets</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cheat-sheet-card">
                <div class="cheat-sheet-icon"><i class="bi bi-house-door"></i></div>
                <h5>Home and Health</h5>
                <p class="mb-0">Cheat Sheets</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cheat-sheet-card">
                <div class="cheat-sheet-icon"><i class="bi bi-controller"></i></div>
                <h5>Games and Hobbies</h5>
                <p class="mb-0">Cheat Sheets</p>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>

    document.addEventListener('alpine:init', () => {
        Alpine.store('search', {
            visible: false
        });
    });

    document.addEventListener('DOMContentLoaded', function () {

        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        navLinks.forEach(link => {

            link.addEventListener('click', function () {

                navLinks.forEach(nav => nav.classList.remove('active'));

                this.classList.add('active');
            });
        });
    });
</script>

</body>
</html>
