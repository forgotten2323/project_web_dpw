<?php 
include('koneksi.php');
$query = sqli_query("SELECT * FROM db_perdaftaran ORDER BY tb_quiz ASC")or die (sqli_error());
if(sqli_num_rows($query) == 0){
echo'<tr><td colspan="6">Tidak ada Data!</td></tr>';
}else{
$no=1;
while($data = sqli_fetch_assoc($query)) {
echo'<tr>';
echo'<td>'.$no.'</td>';
echo'<td>'.$data['nomor_soal'].'</td>';
echo'<td>'.$data['pertanyaan'].'</td>';
echo'<td>'.$data['jawab_a'].'</td>';
echo'<td>'.$data['jawab_b'].'</td>';
echo'<td>'.$data['jawab_c'].'</td>';
echo'<td>'.$data['jawab_d'].'</td>';
echo'<td>'.$data['jawaban'].'</td>';
echo'</tr>';
$no++;
}
}
?>