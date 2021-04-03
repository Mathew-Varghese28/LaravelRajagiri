<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">RCSS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/galary">Gallary</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/aboutdepartment">Department</a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      QuickLinks
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/student">Student Login</a></li>
                      <li><a class="dropdown-item" href="/faculty">Faculty login</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/galary">Photo Galary</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/aboutus" tabindex="-1" aria-disabled="true">About Us</a>
                  </li>
                </ul>
                <ul class="list-unstyled" style="font-size: 20px;color: rgb(243, 247, 243);">
                    <li>Phone: 91 - 484 - 2660601</li>
                    <li>Fax: 91 - 484 - 2426578+</li>
                </ul>
              </div>
            </div>
          </nav>

@yield("content")




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>
