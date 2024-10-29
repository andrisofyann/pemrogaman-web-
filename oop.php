<!DOCTYPE html>
<html>
<body>

<?php
class kendaraan {
  // Properties
  public $name;
  public $jenis;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_jenis($jenis) {
    $this->jenis = $jenis;
  }
  function get_jenis() {
    return $this->jenis;
  }
}

$motor = new kendaraan();
$motor->set_name('Vario 160');
$motor->set_jenis('Matic');
echo $motor->get_name();
echo "<br>";
echo $motor->get_jenis();
echo "<br>";
$mobil = new kendaraan();
echo "<br>";
$mobil->set_name('Toyota Hilux');
$mobil->set_jenis('Manual');
echo $mobil->get_name();
echo "<br>";
echo $mobil->get_jenis();
?>
 
</body>
</html>
