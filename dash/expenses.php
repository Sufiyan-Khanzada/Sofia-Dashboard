<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
  </head>
            <!-- Body: Body -->       
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">All Transaction</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Expenses</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row clearfix g-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>User name</th>
                                    
                                                <th>Date</th>
                                                <th>From</th> 
                                                <th> Transfered Amount</th>
                                                <!-- <th>Status</th>    -->
                                                <th>Actions</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00002</strong>
                                                </td>
                                                <td>
                                                Buttler
                                                </td>
                                                <!-- <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                    <span class="fw-bold ms-1">Joan Dyer</span>
                                                </td> -->
                                                <td>
                                                        12/05/2021
                                                </td>
                                                <td>Office Owner</td>
                                                <td>$50000</td>
                                                <!-- <td><span class="badge bg-warning">In Progress</span></td> -->
                                                <td>
                                                <button class="btn success" style="color: green;">View Invoice</button>
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00006</strong>
                                                </td>
                                                <td>
                                                    Business Insurance
                                                </td>
                                                <!-- <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                    <span class="fw-bold ms-1">Ryan	Randall</span>
                                                </td> -->
                                                    <td>
                                                        12/04/2021
                                                </td>
                                                <td>Insurance Company</td>
                                                <td>$20000</td>
                                                <!-- <td><span class="badge bg-warning">In Progress</span></td> -->
                                                <td>
                                                <button class="btn success" style="color: green;">View Invoice</button>
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00004</strong>
                                                </td>
                                                <td>
                                                    Neon
                                                </td>
                                                <!-- <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                    <span class="fw-bold ms-1">Phil	Glover</span>
                                                </td> -->
                                                <td>
                                                    16/04/2021
                                                </td>
                                                <td>Goverment</td>
                                                <td>$125897</td>
                                                <!-- <td><span class="badge bg-warning">In Progress</span></td> -->
                                                <td>
                                                <button class="btn success" style="color: green;">View Invoice</button>
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00011</strong>
                                                </td>
                                                <td>
                                                   Amjad
                                                </td>
                                                <!-- <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                    <span class="fw-bold ms-1">Victor Rampling</span>
                                                </td> -->
                                                <td>
                                                    25/03/2021
                                                </td>
                                                <td>Marketing Company</td>
                                                <td>$6000</td>
                                                <!-- <td><span class="badge bg-success">Completed</span></td> -->
                                                <td>
                                                <button class="btn success" style="color: green;">View Invoice</button>
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00018</strong>
                                                </td>
                                                <td>
                                                   Tauseef
                                                </td>
                                                <!-- <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar5.svg" alt="">
                                                    <span class="fw-bold ms-1">Sally Graham</span>
                                                </td> -->
                                                <td>
                                                    16/03/2021
                                                </td>
                                                <td>Suppliers</td>
                                                <td>$1500</td>
                                                <!-- <td><span class="badge bg-success">Completed</span></td> -->
                                                <td>
                                                <button class="btn success" style="color: green;">View Invoice</button>
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div> -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>#EX-00014</strong>
                                                </td>
                                                <td>
                                                    Salary
                                                </td>
                                                <!-- <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar6.svg" alt="">
                                                    <span class="fw-bold ms-1">Robert Anderson</span>
                                                </td> -->
                                                <td>
                                                01/05/2021
                                                </td>
                                                <td>Company Saff</td>
                                                <td>$60000</td>
                                                <!-- <td><span class="badge bg-success">Completed</span></td> -->
                                                <td>
                                                <button class="btn success" style="color: green;">View Invoice</button>
                                                    <!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>
            <?php
  include 'footer.php';
  ?>