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
                                <h3 class="fw-bold mb-0">Departments</h3>
                                <div class="col-auto d-flex w-sm-100">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#depadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Departments</button>
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
                                                <th>#</th>
                                                <th>Department Head</th> 
                                                <th>Department Name</th> 
                                                <th>Staff UnderWork</th>   
                                                <th>Actions</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">1</span>
                                                </td>
                                            <td>
                                                <img class="avatar rounded" src="assets/images/xs/avatar1.svg" alt="">
                                                <span class="fw-bold ms-1">Joan Dyer</span>
                                            </td>
                                            <td>
                                                Logistics
                                            </td>
                                            <td>
                                                    40
                                            </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">2</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                    <span class="fw-bold ms-1">Ryan	Randall</span>
                                                </td>
                                                <td>
                                                    Digital Marketing
                                                </td>
                                                <td>
                                                    48
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">3</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                    <span class="fw-bold ms-1">Phil	Glover</span>
                                                </td>
                                                <td>
                                                    Customer Service
                                                </td>
                                                <td>
                                                    15
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">4</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar4.svg" alt="">
                                                    <span class="fw-bold ms-1">Victor Rampling</span>
                                                </td>
                                                <td>
                                                    Inventory Associates
                                                </td>
                                                <td>
                                                    39
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">5</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar5.svg" alt="">
                                                    <span class="fw-bold ms-1">Sally Graham</span>
                                                </td>
                                                <td>
                                                    Finance and Accounting 
                                                </td>
                                                <td>
                                                    12
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">6</span>
                                                </td>
                                                <td>
                                                    <img class="avatar rounded" src="assets/images/xs/avatar6.svg" alt="">
                                                    <span class="fw-bold ms-1">Robert Anderson</span>
                                                </td>
                                                <td>
                                                    Business Analyst
                                                </td>
                                                <td>
                                                    8
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
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