
      <?php 
      include('header.php');
      include('sidebar.php');
      ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Image Galley</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
              
              <div class="breadcrumb-item">Images</div>
            </div>
          </div>
          <div class="section-body">
          <div class="row">
              <div class='col-3'>
              <div class='card'>
                 <div class='card-header'><b>Add Image <i class='fa fa-image'></i></b></div>
                  <div class='card-body'>
                 <form action='image_process.php' method='POST' enctype='multipart/form-data'>
                     <div class='form-group'>
                         <label>Image Title * </label>
                         <input type='text' class='form-control' name='image_name' required autofocus>
                     </div>
                     <div class='form-group'>
                         <label>Image Date * </label>
                         <input type='date' class='form-control' name='image_dt' required>
                     </div>
                     <div class='form-group'>
                         <label>Image Body  </label>
                         <input type ='file'  class='form-control' name='image_url' required>
                     </div>
                     <div class='form-group'>
                         <label>Status</label>
                         <select  class='form-control' name='status' required>
                         <Option value = 'ACTIVE'>Active</option>
                         <Option value = 'DISABLE'>Disable</option>
                         </select>
                         
                     </div>
                     <input type='hidden'value='<?php echo $user_id;?>' name='created_by' value='created_by'>
                     <button class="btn btn-warning btn-block"  value='image' name='image'> Upload
                     </button>
                </form>
              </div>
              </div>
              </div>
              <div class="col-9">
                <div class="card">
                  <div class="card-header">
                    <h4>List of Images</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Image Title</th>
                            <th>Image URL</th>
                            <th>Image Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "select * from tb_gallery";
                            $res = mysqli_query($conn,$sql) or die("error to select gallery ".mysqli_error($conn));
                            while($row=mysqli_fetch_assoc($res)){
                              $img_url = 'uploads/'.$row['image_url'];
                               echo "<tr>";
                               echo "<td>".date('d-M-Y',strtotime($row['image_dt']))."</td>";
                               echo "<td>".$row['image_name']."</td>";
                               echo "<td><img src='$img_url' height='50px'></td>";
                               echo "<td>".$row['status']."</td>"   ; 
                             
                               echo "<td>";
                               ?>

                               <a href='image-gallery-delete.php?id=<?php echo $row["image_id"];?>' onclick='return confirm("Are you sure to delete!")'><button class='btn btn-danger' name='delete' value='del' >Delete</button></a>
                              
                              <?php
                               echo "</td>";
                               echo "</tr>";
                            }
                            ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
     <?php 
     include('footer.php');
     ?>