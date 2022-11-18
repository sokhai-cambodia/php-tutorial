<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Form</title>
  </head>
  <body>
    <div class="container">
      <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h1>CRUSH LIST</h1>

          <div>
            <a href="./create.php" class="btn btn-primary">Add New</a>
          </div>
        </div>

        <div class="mt-3">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Age</th>
                <th scope="col">Is Single</th>
                <th scope="col">Favorite Colors</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>@name</td>
                <td>@weight</td>
                <td>@height</td>
                <td>@age</td>
                <td>@is_single</td>
                <td>@color</td>
                <td>@action</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
