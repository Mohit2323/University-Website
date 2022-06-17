<?php 
include('header.php');
include('sidebar.php');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Enquiry List</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
              
              <div class="breadcrumb-item">Enquiry</div>
            </div>
          </div>
          <div class="section-body">
          
            
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Multi Select</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table" id="table-2">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql = "select * from tb_enquiry where status='ACTIVE'";
                            $res = mysqli_query($conn,$sql) or die("error to select enquiry".mysqli_error($conn));
                            while($row=mysqli_fetch_assoc($res)){
                               echo "<tr>";
                               echo "<td>".$row['name']."</td>";
                               echo "<td>".$row['mobile']."</td>";
                               echo "<td>".$row['email']."</td>";
                               echo "<td>".$row['subject']."</td>";
                               echo "<td>".$row['message']."</td>";
                               echo "<td>".date('d-M-Y h:i:s a',strtotime($row['created_at']))."</td>";
                               echo "<td>";
                               ?>

                               <a href='enquiry_delete.php?id=<?php echo $row["enquiry_id"];?>' onclick='return confirm("Are you sure to delete!")'><button class='btn btn-danger' name='delete' value='del' >Delete</button></a>
                              
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
  </div>
 <?php 
 include('footer.php');
 ?>