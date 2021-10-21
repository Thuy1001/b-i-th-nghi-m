<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel ="stylesheet " hrel ="css/style.css">
    <title>Danh bạ</title>
  </head>
  <body>
    <!--header-->
    <div class ="navigator">
        <div class ="container-fluid">
          <div class ="logo">
            <p> Bộ NN & PTNT</p>
               <p> Trường Đại Học Thủy Lợi </p>
          <div> 
        <div class ="navigator">     
            <div class ="conainer-fluid">
                <p> Danh bạ điện thoại  </p>
              

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã VN </th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Email </th>
      <th scope="col">Số di động </th>
      <th scope="col">Cơ quan </th>
      <th scope="col">Chỉnh sửa </th>
      <th scope="col">xóa nhân viên </th>
      </thead>
<tbody>
    <?php
    // B1 kết nối csdl
        $conn = mysqli_connect('localhost','root','','tlu_phonebook');
        if(!$conn){
            die("Không thể kết nối");
        }
        //B2 truy vấn dữ liệu
        $sql= "SELECT*FROM db_employees";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    while($row =mysqli_fetch_assoc($result)){
                        echo' <tr>';
                        echo'<th scope="row">'.$row['emp_id'].'</th>';
                        echo'<td>'.$row['emp_name'].'</td>';
                        echo' <td>'.$row['emp_position'].'</td>';
                        echo'<td>'.$row['emp_email'].'</td>';
                        echo'<td>'.$row['emp_mobile'].'</td>';
                        echo'<td>'.$row['office_id'].'</td> ' ;
                        echo'<td><a href="a">Edit</a></td>';
                        echo'<td><a href="a">Delete</a></td>';
                        echo'</tr>';
                    }

    ?>
</body>
</html>