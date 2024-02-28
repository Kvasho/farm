  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary p-b-5">
      <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">
              <img class="navbar-logo" src="./src/icons/logo.png" alt="Logo" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-list">
                  <li>
                      <div class="dropdown">
                          <button class="dropdown-toggle d-flex navbar-basket" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <p class="m-2">ჩემი კალათა</p>
                              <img src="./src/icons/basket.png" alt="basket" class="navbar-basket" />
                          </button>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">კალათა ცარიელია</a></li>
                          </ul>
                      </div>
                      <!-- <div class="d-flex">
                <p class="m-2">ჩემი კალათა</p>
                <img
                  src="./src/icons/basket.png"
                  alt="basket"
                  class="navbar-basket"
                />
              </div> -->
                  </li>
                  <li>
                      <div class="dropdown">
                          <button class="dropdown-toggle navbar-basket d-flex" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <p class="m-2">ჩემი კაბინეტი</p>
                              <img src="./src/icons/user.png" alt="basket" class="navbar-basket" />
                          </button>
                          <ul class="dropdown-menu">
                              <li>
                                  <a class="dropdown-item" href="login.php">
                                      <button type="button" class="btn btn-success navbar-buttons">
                                          შესვლა
                                      </button>
                                  </a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="./register.php">
                                      <button type="button" class="btn btn-warning navbar-buttons">
                                          რეგისტრაცია
                                      </button>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </li>
              </ul>
              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="ძებნა" aria-label="Search" />
                  <button class="btn btn-outline-success" type="submit">ძებნა</button>
              </form>
          </div>
      </div>
  </nav>