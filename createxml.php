<?php

$koneksi = mysqli_connect("localhost", "root", "", "ecommerce");

$xml = new XMLWriter();
$xml->openUri("php://output");
$xml->startDocument();
$xml->setIndent(TRUE);
//create node
$xml->startElement("products");

$product = mysqli_query($koneksi, "select * from table_product");
//node
while ($row = mysqli_fetch_array($product)){
    $xml->startElement("product");
    $xml->writeElement("id", $row['product_id']);
    $xml->writeElement("name", $row['product_name']);
    $xml->writeElement("price", $row['price']);
    $xml->endElement();
}
//node 2
//    $xml->startElement("product");
//        $xml->writeElement("id", "2");
//        $xml->writeElement("name", "lg");
//    $xml->endElement();

    $xml->endElement();
//set header
header('Content-type: text/xml');
$xml->flush();