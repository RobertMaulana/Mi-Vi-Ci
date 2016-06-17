<?php

require 'Appsmodel.php';

class Books{
    public $judul;
    public $pengarang;
    public $penerbit;
    public $tahun_terbit;
    
    public function __construct($judul, $pengarang, $penerbit, $tahun_terbit){
        $this->judul = $judul;
        $this->judul = $pengarang;
        $this->judul = $penerbit;
        $this->judul = $tahun_terbit;
    }
    
    public function view_book(){
        
        $conn_obj   = new database();
        $conn       = $conn_obj->connect_mysqli();
        $query      = "SELECT * FROM books";
        $query_conn = mysqli_query($conn, $query);
        
        foreach($query_conn as $data){
            echo $data['judul'];
        }
    }
    
}

?>