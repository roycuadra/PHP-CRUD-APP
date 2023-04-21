<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <script src="./bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="modal" tabindex="-1" id="AddNewUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Users</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add-user-form" class="p-2" novalidate>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="fname"  class="form-control form-control-lg "
                                    placeholder="Enter First Name" required>
                                <div class="invalid-feedback">First Name is required!!</div>
                            </div>

                            <div class="col">
                                <input type="text" name="lname"  class="form-control form-control-lg "
                                    placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last Name is required!!</div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <input type="email" name="email"  class="form-control form-control-lg"
                                placeholder="Enter E-mail" required>
                            <div class="invalid-feedback">E-mail is required!!</div>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="phone"  class="form-control form-control-lg"
                                placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!!</div>
                        </div>

                        <div class="d-grid">
                            <input type="submit" value="Add User" class="btn btn-primary btn-block 
                               btn-lg" id="add-user-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="editUserModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit this User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-user-form" class="p-2" novalidate>
                        <input type="hidden" name="id" id="id">
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" name="fname" id="fname" class="form-control form-control-lg "
                                    placeholder="Enter First Name" required>
                                <div class="invalid-feedback">First Name is required!!</div>
                            </div>

                            <div class="col">
                                <input type="text" name="lname" id="lname" class="form-control form-control-lg "
                                    placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last Name is required!!</div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control form-control-lg"
                                placeholder="Enter E-mail" required>
                            <div class="invalid-feedback">E-mail is required!!</div>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="phone" id="phone" class="form-control form-control-lg"
                                placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required!!</div>
                        </div>

                        <div class="d-grid">
                            <input type="submit" value="Update User" class="btn btn-success btn-block 
                                btn-lg" id="edit-user-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">All users in the database</h4>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#AddNewUserModal">Add New Users</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
            <div id="showAlert"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th> first name</th>
                                <th>last name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>roy</td>
                                <td>cuadra</td>
                                <td>roycuadra16@gmail.com</td>
                                <td>09771221701</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm rounded-1 py-0">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm rounded-1 py-0">Delete</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
    <script src="./main.js"></script>
</body>
</html>