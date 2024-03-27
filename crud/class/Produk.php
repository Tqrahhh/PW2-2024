<?php
    class Produk {
        private $conn;
        private $table_name = "produk";

        public $id;
        public $kode;
        public $nama;
        public $harga_beli;
        public $harga_jual;
        public $stok;
        public $min_stok;
        public $jenis_produk_id;

        public function __construct($db){
            $this->conn = $db;
        }

        // Tampilkan data semua produk
        public function index(){
            $query = "SELECT * FROM {$this->table_name}";
            $data = $this->conn->prepare($query);
            $data->execute();
            return $data;
        }

        // Tampilkan halaman create
        public function create(){
            header("Location: create.php");
            exit();
        }

        // Tambah produk ke database
        public function store(){
            $query = "INSERT INTO {$this->table_name} 
                    (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)
                    ";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->kode, 
                $this->nama, 
                $this->harga_beli, 
                $this->harga_jual, 
                $this->stok, 
                $this->min_stok, 
                $this->jenis_produk_id
            ]);
        
            return $data->rowCount() > 0;
        }

        // Tampilkan halaman edit
        public function edit(){
            $query = "SELECT * FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
            return $data;
        }

        // Update produk ke database
        public function update(){
            $query = "UPDATE {$this->table_name} 
                    SET kode=?, nama=?, harga_beli=?, harga_jual=?, stok=?, min_stok=?, jenis_produk_id=? 
                    WHERE id=?";
            $data = $this->conn->prepare($query);
        
            $data->execute([
                $this->kode, 
                $this->nama, 
                $this->harga_beli, 
                $this->harga_jual, 
                $this->stok, 
                $this->min_stok, 
                $this->jenis_produk_id, 
                $this->id
            ]);
        
            return $data->rowCount() > 0;
        }

        // Hapus produk dari database
        public function delete(){
            $query = "DELETE FROM {$this->table_name} WHERE id = ?";
            $data = $this->conn->prepare($query);
            $data->execute([$this->id]);
        
            return $data->rowCount() > 0;
        }
    }
?>