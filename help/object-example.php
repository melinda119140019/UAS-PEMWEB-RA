<?php
//object-example.php

//Objek PHP berbasis OOP
class DataProcessor {
    private $data;

    public function setData($data) {
        $this->data = $data;
    }

    public function processData() {
        //Proses data 
        return strtoupper($this->data);
    }
}

//penggunaan objek pada halaman web
$dataProcessor = new DataProcessor();
$dataProcessor->setData("Hello, this is a sample data.");
$processedData = $dataProcessor->processData();

echo "<h2>Objek PHP Berbasis OOP</h2>";
echo "<p>Data Sebelum Diproses: " . $dataProcessor->setData . "</p>";
echo "<p>Data Setelah Diproses: $processedData</p>";
?>
