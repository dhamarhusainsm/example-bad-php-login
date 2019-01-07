<?php
if( !empty($_GET['username']) && !empty($_GET['password']) ){
	$username = $_GET['username'];
	$password = $_GET['password'];
	$connect = mysqli_connect("localhost","root","","tugas_p_aji");
	if (mysqli_connect_errno()){
  		echo "MYSQL nya error :( : " . mysqli_connect_error();
  	}else{
		$data = mysqli_query($connect,"SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
		$hasil['hasil']=null;
		if( mysqli_num_rows($data) > 0 ){
			$hasil['hasil'][0]['hasil'] = "Sukses";
			// echo("Login berhasil");
		}else{
			$hasil['hasil'][0]['hasil'] = "Gagal";
		}
		header('Content-Type: application/json');
		echo json_encode($hasil);
	}
}
?>
