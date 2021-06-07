function cek11(){
    Kuis.angka1.value= "A";
}
function cek12(){
    Kuis.angka1.value= "B";
}
function cek13(){
    Kuis.angka1.value= "C";
}
function cek14(){
    Kuis.angka1.value= "D";
}
function cek21(){
    Kuis.angka2.value= "A";
}
function cek22(){
    Kuis.angka2.value= "B";
}
function cek23(){
    Kuis.angka2.value= "C";
}
function cek24(){
    Kuis.angka2.value= "D";
}
function cek31(){
    Kuis.angka3.value= "A";
}
function cek32(){
    Kuis.angka3.value= "B";
}
function cek33(){
    Kuis.angka3.value= "C";
}
function cek34(){
    Kuis.angka3.value= "D";
}
function cek41(){
    Kuis.angka4.value= "A";
}
function cek42(){
    Kuis.angka4.value= "B";
}
function cek43(){
    Kuis.angka4.value= "C";
}
function cek44(){
    Kuis.angka4.value= "D";
}function cek51(){
    Kuis.angka5.value= "A";
}
function cek52(){
    Kuis.angka5.value= "B";
}
function cek53(){
    Kuis.angka5.value= "C";
}
function cek54(){
    Kuis.angka5.value= "D";
}function cek61(){
    Kuis.angka6.value= "A";
}
function cek62(){
    Kuis.angka6.value= "B";
}
function cek63(){
    Kuis.angka6.value= "C";
}
function cek64(){
    Kuis.angka6.value= "D";
}
function cekjawaban(){
    var a1 = 0;
    var a2 = 0;
    var a3 = 0;
    var a4 = 0;
    var a5 = 0;
    var a6 = 0;
    if(Kuis.angka1.value=='A'){
        a1 = 1;
    }
    if(Kuis.angka2.value=='C'){
        a2 = 1;
    }
    if(Kuis.angka3.value=='D'){
        a3 = 1;
    }
    if(Kuis.angka4.value=='D'){
        a4 = 1;
    }
    if(Kuis.angka5.value=='C'){
        a5 = 1;
    }
    if(Kuis.angka6.value=='D'){
        a6 = 1;
    }
    Kuis.angka6.value= "";
    Kuis.angka5.value= "";
    Kuis.angka4.value= "";
    Kuis.angka3.value= "";
    Kuis.angka2.value= "";
    Kuis.angka1.value= "";
    var nilai = 0;
    nilai = (a1+a2+a3+a4+a5+a6)/6 * 100;
    // alert("Nilai Anda adalah: " + nilai);
    window.location.href = "web covid/depan_kuis.php";
    document.getElementById('results0').innerHTML= nilai;
}