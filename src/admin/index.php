<?php
include('templates/header.php')
?>
      <div class="row nav-menu ">
         
          <div class="row">  
            <div class="col-md-12">
              <table class="table table-success table-striped">
                <thead>
                  <tr>
                    <th scope="col">Mã người hiến máu</th>
                    <th scope="col">Tên người hiến máu</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày đăng kí hiến máu</th>
                    <th scope="col">Số điện thoại</th>
                  </tr>
                </thead>
                <tbody>       
                  <?php
                      $sql="SELECT bd_id, bd_name, bd_sex, bd_age, bd_bgroup, bd_reg_date, bd_phno FROM BLOOD_DONOR";
                      $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0){
                      $i=1;
                      while($row = mysqli_fetch_assoc($result)){
                  ?>      
                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row['bd_name']; ?></td>
                      <td><?php echo $row['bd_sex']; ?></td>
                      <td><?php echo $row['bd_age']; ?></td>
                      <td><?php echo $row['bd_bgroup']; ?></td>
                      <td><?php echo $row['bd_reg_date']; ?></td>
                      <td><?php echo $row['bd_phno']; ?></td>                                
                    </tr>
                <?php
                      $i++;
                    }
                  }
                ?>
                </tbody>
              </table>
            </div>                
          </div>
      </div>
<?php
include('templates/footer.php')
?>