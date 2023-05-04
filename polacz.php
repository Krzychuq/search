<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.3">
    <title>Strona</title>
</head>
<body>
<?php include_once("index.php");?>

<?php
$hostname='localhost';
$username='root';
$pass='';
$bazaD ='hurtownia';
//polaczenie
$conn = new mysqli($hostname, $username, $pass, $bazaD);

if ($conn->connect_error) {
  die("Połączenie sie nie powiodło: " . $conn->connect_error);
}
//dane do wyszukania
$nrZamowienia= $_POST["nrZamowienia"];
$dataZamowienia= $_POST["dataZamowienia"];
$nrKlienta= $_POST["nrKlienta"];
$dataZ= $dataZamowienia . "%";
//zapytania
$nrZ = "SELECT numerZamowienia, dataZamowienia, terminWymagany, dataDostawy, status, komentarz, numerKlienta FROM zamowienie where numerZamowienia like '$nrZamowienia'";

$data = "SELECT numerZamowienia, dataZamowienia, terminWymagany, dataDostawy, status, komentarz, numerKlienta FROM zamowienie where dataZamowienia like '$dataZ'";

$nrK = "SELECT numerZamowienia, dataZamowienia, terminWymagany, dataDostawy, status, komentarz, numerKlienta FROM zamowienie where numerKlienta like '$nrKlienta'";

//wykonanie zapytania
if( !empty($nrZamowienia) ){
    $wyniki = $conn->query($nrZ);
    echo "<section class='tabelka'>
        <table>
            <tr>
                <th>numerZamowienia</th>
                <th>dataZamowienia</th>
                <th>terminWymagany</th>
                <th>dataDostawy</th>
                <th>status</th>
                <th>komentarz</th>
                <th>numerKlienta</th>
            </tr>";

    if ($wyniki->num_rows > 0) {
        while($linia = $wyniki->fetch_assoc()) {
            echo "<tr>";  
            echo "<td> $linia[numerZamowienia] </td>";  
            echo "<td> $linia[dataZamowienia] </td>";   
            echo "<td> $linia[terminWymagany] </td>";  
            echo "<td> $linia[dataDostawy] </td>";  
            echo "<td> $linia[status] </td>";  
            echo "<td> $linia[komentarz] </td>";  
            echo "<td> $linia[numerKlienta] </td>"; 
            echo "</tr>";  
        }
      } 
      
    else {
        echo "0 wyników";
      }
    echo "</table> </section>";
}
elseif( !empty($dataZamowienia) ){
    $wyniki = $conn->query($data);
    echo "<section class='tabelka'>
    <table>
        <tr>
            <th>numerZamowienia</th>
            <th>dataZamowienia</th>
            <th>terminWymagany</th>
            <th>dataDostawy</th>
            <th>status</th>
            <th>komentarz</th>
            <th>numerKlienta</th>
        </tr>";

if ($wyniki->num_rows > 0) {
    while($linia = $wyniki->fetch_assoc()) {
        echo "<tr>";  
        echo "<td> $linia[numerZamowienia] </td>";  
        echo "<td> $linia[dataZamowienia] </td>";   
        echo "<td> $linia[terminWymagany] </td>";  
        echo "<td> $linia[dataDostawy] </td>";  
        echo "<td> $linia[status] </td>";  
        echo "<td> $linia[komentarz] </td>";  
        echo "<td> $linia[numerKlienta] </td>"; 
        echo "</tr>";  
    }
  } 
  
else {
    echo "0 wyników";
  }
echo "</table> </section>";
}
elseif( !empty($nrKlienta) ){
    $wyniki = $conn->query($nrK);
    echo "<section class='tabelka'>
    <table>
        <tr>
            <th>numerZamowienia</th>
            <th>dataZamowienia</th>
            <th>terminWymagany</th>
            <th>dataDostawy</th>
            <th>status</th>
            <th>komentarz</th>
            <th>numerKlienta</th>
        </tr>";

if ($wyniki->num_rows > 0) {
    while($linia = $wyniki->fetch_assoc()) {
        echo "<tr>";  
        echo "<td> $linia[numerZamowienia] </td>";  
        echo "<td> $linia[dataZamowienia] </td>";   
        echo "<td> $linia[terminWymagany] </td>";  
        echo "<td> $linia[dataDostawy] </td>";  
        echo "<td> $linia[status] </td>";  
        echo "<td> $linia[komentarz] </td>";  
        echo "<td> $linia[numerKlienta] </td>"; 
        echo "</tr>";  
    }
  } 
  
else {
    echo "0 wyników";
  }
echo "</table> </section>";

}
else{
    echo "<p style='text-align:center;font-size:1.5rem; font-weight:bold; color:red;-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;'>Nie wypełniono zapytania!</p>";
}

$conn->close();
?>

</body>
</html>

