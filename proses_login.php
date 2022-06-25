<?php
include "koneksi.php";
?>

<?php
$user = ($_POST['ussername']);
$pass = ($_POST['password']);
$login = $_POST['login'];

if ('login') {
	if ($user == "" || $pass == "") {
		echo "<script> alert ('ussername atau password salah);</script>";
		echo "<script>window.location='index.php'</script>";
	} else {
		$query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE ussername='$user' AND password='$pass'");
		$data = mysqli_fetch_array($query);
		$lihat = mysqli_num_rows($query);


		$query1 = mysqli_query($koneksi, "SELECT * FROM tb_regis WHERE ussername='$user' AND password='$pass'");
		$data1 = mysqli_fetch_array($query1);
		$lihat1 = mysqli_num_rows($query1);

		session_start();
		$_SESSION['id_admin'] = $data['id_admin'];
		$_SESSION['nama_admin'] = $data['nama_admin'];
		$_SESSION['tingkat'] = $data['tingkat'];


		$_SESSION['id_regis'] = $data1['id_regis'];
		$_SESSION['ussername'] = $data1['ussername'];
		$_SESSION['password'] = $data1['password'];
		if ($lihat >= 1) {
			if ($data['tingkat'] == 'staf') {
				echo "<script>alert('Anda Berhasil Login');
                window.location='admin/admin/index.php ';
                </script>";
			} elseif ($data['tingkat'] == 'owner') {
				echo "<script>alert('Anda Berhasil Login');
                window.location='admin/admin/index.php ';
                </script>";
			}
		} elseif ($lihat1 >= 1) {
			echo "<script>alert('Anda Berhasil Login');
            window.location='admin/user/index.php';
            </script>";
		} else {
			echo "<script>alert('username dan password anda salah');
            window.location='index.php';
            </script>";
		}
	}
}
?>