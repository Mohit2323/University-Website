
      <?php 
      include('header.php');
      include('sidebar.php');
      ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Notice List</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
              
              <div class="breadcrumb-item">Notice</div>
            </div>
          </div>
          <div class="section-body">
          <div class="row">
              <div class='col-3'>
              <div class='card'>
                 <div class='card-header'><b>Add Notice</b></div>
                  <div class='card-body'>
                 <form action='notice_process.php' method='POST'>
                     <div class='form-group'>
                         <label>Notice Title * </label>
                         <input type='text' class='form-control' name='notice_title' required autofocus>
                     </div>
                     <div class='form-group'>
                         <label>Notice Date * </label>
                         <input type='date' class='form-control' name='notice_dt' required>
                     </div>
                     <div class='form-group'>
                         <label>Notice Body  </label>
                         <textarea  class='form-control' name='notice_body' required></textarea>
                     </div>
                     <div class='form-group'>
                         <label>Notice Body  </label>
                         <select  class='form-control' name='status' required>
                         <Option value = 'ACTIVE'>Active</option>
                         <Option value = 'DISABLE'>Disable</option>
                         </select>
                         
                     </div>
                     <input type='hidden'value='<?php echo $user_id;?>' name='created_by' value='created_by'>
                     <button class="btn btn-warning btn-block"  value='notice' name='notice'> Publish
                     </button>
                </form>
              </div>
              </div>
              </div>
              <div class="col-9">
                <div class="card">
                  <div class="card-header">
                    <h4>List of Notice</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Notice Date</th>
                            <th>Notice Title</th>
                            <th>Notice Body</th>
                            <th>Notice Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "select * from tb_notice";
                            $res = mysqli_query($conn,$sql) or die("error to select enquiry".mysqli_error($conn));
                            while($row=mysqli_fetch_assoc($res)){
                              $status = $row['status'];
                               echo "<tr>";
                               echo "<td>".date('d-M-Y',strtotime($row['notice_dt']))."</td>";
                               echo "<td>".$row['notice_title']."</td>";
                               echo "<td>".$row['notice_body']."</td>";
                              //  echo "<td>".$row['status']."</td>"   ; 
                             
                              
                               ?>
                               <td>
                               <div class="pretty p-switch">
                                <input type="checkbox" onclick='noticehideShow(this)' data-id='<?php echo $row['notice_id'];?>'<?php if($status=='ACTIVE'){echo "checked";}?> />
                                <div class="state p-primary">
                                  <label id='status-id<?php echo $row['notice_id'];?>'><?php if($status=='ACTIVE'){echo "ACTIVE";} else {echo "DISABLED";}?></label>
                                </div>
                              </div>
                               </td>
                             <td>
                               <a href='notice_delete.php?id=<?php echo $row["notice_id"];?>' onclick='return confirm("Are you sure to delete!")'><button class='btn btn-danger' name='delete' value='del' >Delete</button></a>
                              
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