<?php 
include('header.php');
?>
    
    <div class="banner-area banner-area--events all-text-white text-center lazy" data-src="images/new/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title"></h1>
                    <ul class="fund-breadcumb">
                        <li><a href="index.php"></a> </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <hr class="featurette"> -->
    <div class='container'>
    
   
    <div class="row featurette">
        <div class="col-md-12">
            <h2 class="featurette-heading">Latest-<span class="text-muted">Notice</span></h2>
            <table class="table table-bordered table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Sr. No.</th>
                            <th>Notice Date</th>
                            <th>Notice Title</th>
                            <th>Notice Description</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "select * from tb_notice where status='ACTIVE'";
                            $res = mysqli_query($conn,$sql) or die("error to select enquiry".mysqli_error($conn));
                            $i=1;
                            while($row=mysqli_fetch_assoc($res)){
                              $status = $row['status'];
                               echo "<tr>";
                               echo "<td>".$i."</td>";
                               echo "<td>".date('d-M-Y',strtotime($row['notice_dt']))."</td>";
                               echo "<td>".$row['notice_title']."</td>";
                               echo "<td>".$row['notice_body']."</td>";
                              //  echo "<td>".$row['status']."</td>"   ; 
                            
                               echo "</tr>";
                               $i++;
                            }
                            ?>
                         
                        </tbody>
                      </table>
        </div>
    </div>
    </div>
    
</div>
    <?php 
include('footer.php');
?>