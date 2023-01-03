<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  include 'categoryMain.php';
  include 'categorySub.php';
  ?>
  </head>
              

            <!-- Body: Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Categorie List</h3>
                                <a href="categories-add.php" class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i> Add Categories</a>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                <?php
                                // echo '<pre>';
                                //  print_r($user_data_cat);
                                //  echo '</pre>';
                                //  echo '<pre>';
                                //  print_r($user_data_cat_child_child);
                                //  echo '</pre>';
                                // // ?>
                                
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Main Categorie</th>
                                                <th>Child Categorie</th>
                                                <th>Child of Child Categorie</th>
                                                <th>created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($user_data_cat as $main){
                                               echo'<tr>
                                               <td><strong>'.$main->id.'</strong></td>
                                               <td>'.$main->name.'</td>
                                               <td>'.$main->name.'</td>
                                               <td>'.$main->name.'</td>
                                                <td>'.(($main->created_at!='')?date("d M Y", strtotime($main->created_at)):'').'</td>
                                               <td>
                                                   <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                       <a href="categories-edit.php?id='.$main->id.'" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                       <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                   </div>
                                               </td>
                                           </tr>'; 
                                            }?><?php
                                            foreach($user_data_cat_child_child as $sub){
                                                $item = NULL;
                                                $val = $sub->child_of;
                                                foreach($user_data_cat as $obj) {
                                                    if ($val == $obj->id) {
                                                        $item = $obj;
                                                        break;
                                                    }
                                                }
                                                $name = 'main Category not define';
                                                if(!is_null($item))
                                                {
                                                    $name = $item->name;
                                                
                                                
                                                echo'<tr>
                                               <td><strong>'.$sub->id.'</strong></td>
                                               <td>'.$name.'</td>
                                               <td>'.$sub->name.'</td>
                                               <td>'.$sub->name.'</td>
                                                <td>'.(($sub->created_at!='')?date("d M Y", strtotime($sub->created_at)):'').'</td>
                                               <td>
                                                   <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                       <a href="categories-edit.php?id='.$sub->id.'" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                       <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                   </div>
                                               </td>
                                           </tr>'; 
                                            }
                                            else
                                            {
                                                $item =$item1 =$parent= NULL;
                                                $val = $sub->child_of;
                                                foreach($user_data_cat as $obj) {
                                                    if ($val == $obj->id) {
                                                        $item = $obj;
                                                        break;
                                                    }
                                                }
                                                $name = 'main Category not define';
                                                if(!is_null($item))
                                                {
                                                    $name = $item->name; 
                                            }
                                                else{
                                                    if(is_null($item)){
                                                        foreach($user_data_cat_child_child as $obj) {
                                                            if ($val == $obj->id) {
                                                                $item = $obj;
                                                                break;
                                                            }
                                                        }
                                                        if(!is_null($item))
                                                {
                                                    $name = $item->name;
                                                        $val = $item->child_of;
                                                foreach($user_data_cat as $obj) {
                                                        if ($val == $obj->id) {
                                                            $item1 = $obj;
                                                            break;
                                                        }
                                                    }
                                                    if(!is_null($item1))
                                                {
                                                    $parent = $item1->name;
                                                }
                                                }

                                                    }
                                                }
                                                echo'<tr>
                                                <td><strong>'.$sub->id.'</strong></td>
                                                <td>'.$parent.'</td>
                                                <td>'.$name.'</td>
                                                <td>'.$sub->name.'</td>
                                                 <td>'.(($sub->created_at!='')?date("d M Y", strtotime($sub->created_at)):'').'</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                        <a href="categories-edit.php?id='.$sub->id.'" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>
                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </div>
                                                </td>
                                            </tr>';
                                            }}?>                                    </tbody>
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