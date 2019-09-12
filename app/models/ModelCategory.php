<?php
class ModelCategory extends DB{
    public $id;
    public $name; // Thể thao 
    public $ordering;
    public $active;

    function List(){
        $qr = "SELECT * FROM Category";
        return mysqli_query($this->conn, $qr);
    }

    function Add($name, $ordering, $active){
        $qr = "INSERT INTO Category VALUES(
            null, '$name',$ordering ,$active
        )";
        return mysqli_query($this->conn, $qr);
    }

    function Detail($id){
        $qr = "SELECT * FROM Category
        WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }

    function Update($id, $name, $ordering, $active){
        $qr = "UPDATE Category SET
            name='$name',
            ordering='$ordering',
            active='$active'
            WHERE id='$id'
        ";
        return mysqli_query($this->conn, $qr);
    }

    function Delete($id){
        $qr = "DELETE FROM Category WHERE id='$id'";
        return mysqli_query($this->conn, $qr);
    }
}
?>