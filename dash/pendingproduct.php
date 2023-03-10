<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
  </head>
              

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Pending Product List</h3>
                                <!-- <a href="categories-add.php" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a> -->
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Product name</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>#0001</strong></td>
                                                <td>Watch</td>
                                                <td>March 13, 2021</td>
                                                <td>6000</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0002</strong></td>
                                                <td>Toy</td>
                                                <td>January 14, 2021</td>
                                                <td>200</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0003</strong></td>
                                                <td>Laptop</td>
                                                <td>February 08, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0004</strong></td>
                                                <td>Mobile</td>
                                                <td>April  02, 2021</td>
                                                <td>300</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0005</strong></td>
                                                <td>Tv</td>
                                                <td>June 19, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0006</strong></td>
                                                <td>Cloths</td>
                                                <td>April 10, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0007</strong></td>
                                                <td>Footwear</td>
                                                <td>May 11, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0008</strong></td>
                                                <td>Kitchenware</td>
                                                <td>June 13, 2021</td>
                                                <td>1000</td>
                                                <td><span class="badge bg-danger">Reject</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0009</strong></td>
                                                <td>Beautywear</td>
                                                <td>June 13, 2021</td>
                                                <td>25000</td>
                                                
                                                <td><span class="badge bg-danger">Reject</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0010</strong></td>
                                                <td>Game accessories</td>
                                                <td>February 13, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0011</strong></td>
                                                <td>Flower Port</td>
                                                <td>February 08, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Published</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0012</strong></td>
                                                <td>Accessories</td>
                                                <td>March 28, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Published</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#0013</strong></td>
                                                <td>Bags</td>
                                                <td>March 08, 2021</td>
                                                <td>7000</td>
                                                <td><span class="badge bg-success">Published</span></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <?php
  include 'footer.php';
  ?>