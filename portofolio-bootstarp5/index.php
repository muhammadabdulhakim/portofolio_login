<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portofolio | Muhammad Abdul Hakim Daud Islam</title>
  </head>
  <body>
    <!-- Navbar -->
    <section id="home">
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Mahdi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
              </li>
              <?php
          session_start();
          if (isset($_SESSION['user'])) {
            // Jika sudah login, tampilkan tombol Menu
            echo '
          <li class="nav-item dropdown">
            <a id="navbarDropdown" href="#" class="d-block link-light text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="false">
            <img id="user_avatar" src="img/users/default_avatar.webp" alt="mini_avatar" width="40" height="40" class="rounded-circle " >
          </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#usersModal">Users</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#skillsModal">Skills</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/api/auth/logout.php">Logout</a></li>
            </ul>
          </li>
          ';
          } else {
            // Jika belum login, tampilkan tombol Login
            echo '
          <li class="nav-item">
            <a href="https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/views/login/" class="btn btn-outline-light me-2" id="buttonLogin">Login</a>
          </li>
          ';
          }
          ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->

      <!-- Jumbotron -->
      <section class="jumbotron text-center">
        <img src="img/img.jpg" alt="Muhammad Abdul Hakim Daud Islam" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">Muhammad Abdul Hakim Daud Islam</h1>
        <p class="lead">Graphic Designer</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,64L30,85.3C60,107,120,149,180,149.3C240,149,300,107,360,96C420,85,480,107,540,122.7C600,139,660,149,720,144C780,139,840,117,900,101.3C960,85,1020,75,1080,90.7C1140,107,1200,149,1260,160C1320,171,1380,149,1410,138.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- Akhir Jumbotron -->

      <!-- About -->
      <section id="about">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
              <p>Hi everyone, my name is Muhammad Abdul Hakim Daud Islam, usually called Mahdi, I graduated from Ciamis 1 State Vocational High School, majoring in multimedia and now studying at Galuh University.</p>
            </div>
            <div class="col-md-4">
              <p>I also worked at a media company in Banagara Ciamis, then at Cafe Grandpa Ciamis and at the Central Statistics Agency in Ciamis. There is also my portfolio which I have included on this website</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffb0a5"
            fill-opacity="1"
            d="M0,192L30,170.7C60,149,120,107,180,106.7C240,107,300,149,360,154.7C420,160,480,128,540,128C600,128,660,160,720,165.3C780,171,840,149,900,160C960,171,1020,213,1080,197.3C1140,181,1200,107,1260,90.7C1320,75,1380,117,1410,138.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
          ></path>
        </svg>
      </section>

      <!-- Akhir About -->

      <!-- Projects -->
      <section id="projects">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>My Projects</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/6.jpg" class="card-img-top" alt="Project1" />
                <div class="card-body">
                  <p class="card-text text-center">Logo Anchib</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/2.jpg" class="card-img-top" alt="Project2" />
                <div class="card-body">
                  <p class="card-text text-center">Mock up kaos motor trail</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/3.jpg" class="card-img-top" alt="Project3" />
                <div class="card-body">
                  <p class="card-text text-center">Grandpa cafe brochure</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/4.jpg" class="card-img-top" alt="Project4" />
                <div class="card-body">
                  <p class="card-text text-center">Laptop brochure</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/5.jpg" class="card-img-top" alt="Project5" />
                <div class="card-body">
                  <p class="card-text text-center">Job vacancy brochure</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="img/projects/1.jpg" class="card-img-top e alt="Project6" />
                <div class="card-body">
                  <p class="card-text text-center">Curriculum Vitae</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,0L48,10.7C96,21,192,43,288,48C384,53,480,43,576,37.3C672,32,768,32,864,53.3C960,75,1056,117,1152,117.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- Akhir Projects -->
      <!-- tabel -->
      <section id="skills">
        <div class="container">
          <div id="message"></div>
          <h1 class="mt-4 mb-4 text-center text-danger">USERS CRUD</h1>
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col col-sm-9">SKILLS</div>
                <div class="col col-sm-3">
                  <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="sample_data">
                  <thead>
                    <tr>
                      <th>User Id</th>
                      <th>Skill Name</th>
                      <th>Rating</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal" tabindex="-1" id="action_modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <form method="post" id="sample_form">
                  <div class="modal-header">
                    <h5 class="modal-title" id="dynamic_modal_title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                      <label class="form-label">User Id</label>
                      <input type="text" name="user_id" id="user_id" class="form-control" />
                      <span id="user_id_error" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Skill Name</label>
                      <input type="skill_name" name="skill_name" id="skill_name" class="form-control" />
                      <span id="skill_name_error" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Rating</label>
                      <input type="rating" name="rating" id="rating" class="form-control" />
                      <span id="rating_error" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Description</label>
                      <input type="text" name="description" id="description" class="form-control" />
                      <span id="description_error" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,0L48,10.7C96,21,192,43,288,48C384,53,480,43,576,37.3C672,32,768,32,864,53.3C960,75,1056,117,1152,117.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end tabel -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="name" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#dc3545"
          fill-opacity="1"
          d="M0,160L48,165.3C96,171,192,181,288,154.7C384,128,480,64,576,48C672,32,768,64,864,112C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-danger text-white text-center pb-3">
      <p>Created with <i class="bi bi-search-heart-fill"></i> by <a href="https://www.instagram.com/mahdiad_24/?igsh=MWx4OTk2YnFhdWV3ag%3D%3D" class="text-white fw-bold">Muhammad abdul Hakim Daud Islam</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {
        showAll();

        $("#add_data").click(function () {
          $("#dynamic_modal_title").text("Add Biodata User");
          $("#sample_form")[0].reset();
          $("#action").val("Add");
          $("#action_button").text("Add");
          $(".text-danger").text("");
          $("#action_modal").modal("show");
        });

        $("#sample_form").on("submit", function (event) {
          event.preventDefault();
          if ($("#action").val() == "Add") {
            var formData = {
              user_id: $("#user_id").val(),
              skill_name: $("#skill_name").val(),
              rating: $("#rating").val(),
              description: $("#description").val(),
            };

            $.ajax({
              url: "https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/api/skills/create.php",
              method: "POST",
              data: JSON.stringify(formData),
              success: function (data) {
                $("#action_button").attr("disabled", false);
                $("#message").html('<div class="alert alert-success">' + data.message + "</div>");
                $("#action_modal").modal("hide");
                $("#sample_data").DataTable().destroy();
                showAll();
              },
              error: function (err) {
                console.log(err);
              },
            });
          } else if ($("#action").val() == "Update") {
            var formData = {
              id: $("#id").val(),
              user_id: $("#user_id").val(),
              skill_name: $("#skill_name").val(),
              rating: $("#rating").val(),
              description: $("#description").val(),
            };

            $.ajax({
              url: "https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/api/skills/update.php",
              method: "PUT",
              data: JSON.stringify(formData),
              success: function (data) {
                $("#action_button").attr("disabled", false);
                $("#message").html('<div class="alert alert-success">' + data.message + "</div>");
                $("#action_modal").modal("hide");
                $("#sample_data").DataTable().destroy();
                showAll();
              },
              error: function (err) {
                console.log(err);
              },
            });
          }
        });
      });

      function showAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/api/skills/read.php",
          success: function (response) {
            // console.log(response);
            var json = response.body;
            var dataSet = [];
            for (var i = 0; i < json.length; i++) {
              var sub_array = {
                user_id: json[i].user_id,
                skill_name: json[i].skill_name,
                rating: json[i].rating,
                description: json[i].description,
                action: '<button onclick="showOne(' + json[i].id + ')" class="btn btn-sm btn-warning">Edit</button>' + '<button onclick="deleteOne(' + json[i].id + ')" class="btn btn-sm btn-danger mx-2">Delete</button>',
              };
              dataSet.push(sub_array);
            }
            $("#sample_data").DataTable({
              data: dataSet,
              columns: [
                {
                  data: "user_id",
                },
                {
                  data: "skill_name",
                },
                {
                  data: "rating",
                },
                {
                  data: "description",
                },
                {
                  data: "action",
                },
              ],
            });
          },
          error: function (err) {
            console.log(err);
          },
        });
      }

      function showOne(id) {
        $("#dynamic_modal_title").text("Edit Biodata User");
        $("#sample_form")[0].reset();
        $("#action").val("Update");
        $("#action_button").text("Update");
        $(".text-danger").text("");
        $("#action_modal").modal("show");

        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/api/skills/read.php?id=" + id,
          success: function (response) {
            $("#id").val(response.id);
            $("#user_id").val(response.user_id);
            $("#skill_name").val(response.skill_name);
            $("#rating").val(response.rating);
            $("#description").val(response.description);
          },
          error: function (err) {
            console.log(err);
          },
        });
      }

      function deleteOne(id) {
        var konfirmasiUser = confirm("Yakin untuk hapus data ?");
        if (konfirmasiUser) {
          $.ajax({
            url: "https://mabdulhakim24.amisbudi.cloud/portofolio-bootstarp5/si-admin/api/skills/delete.php",
            method: "DELETE",
            data: JSON.stringify({
              id: id,
            }),
            success: function (data) {
              $("#action_button").attr("disabled", false);
              $("#message").html('<div class="alert alert-success">' + data + "</div>");
              $("#action_modal").modal("hide");
              $("#sample_data").DataTable().destroy();
              showAll();
            },
            error: function (err) {
              console.log(err);
              $("#message").html('<div class="alert alert-danger">' + err.responseJSON + "</div>");
            },
          });
        }
      }
    </script>
  </body>
</html>
