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
                                <h3 class="fw-bold mb-0">Todo List</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="card my-todo">
                                <div class="card-header border-bottom-0 todo-wrapper p-4">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" id="TodoInput" placeholder="What you need to do, sir?">
                                        <button type="button" class="btn btn-primary btn-todo-add">Add</button>
                                    </div>
                                    <span class="todo-error text-danger small ms-3" style="display: none;">Input can't be empty!</span>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="list-unstyled mb-0 todo-list">
                                        <li>
                                            <span>Product Stock Check</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <span>Product New Order Apply</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span>Pending Invoice Generate</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span>Internet Bill Pay</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <span>Return Product Check</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <span>Marketing Offer Design</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <span>Coupen Code Date Check </span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <span>Product PhotoShoot</span>
                                            <div class="todo-action">
                                                <span class="btn done p-1 fa fa-check"></span>
                                                <span class="btn text-danger close p-1 fa fa-trash-o"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row end  --> 
                </div>
            </div>

            <?php
  include 'footer.php';
  ?>