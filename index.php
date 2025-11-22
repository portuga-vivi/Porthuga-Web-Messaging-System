<?php
session_start();
unset($_SESSION['usuario2']);
include ("chat/conexao.php");
include_once ("conexaoPHP/redirect.php");






$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
    header('Location: m.php');
}



?>
<?php

$conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');
$query_usuario = "select * from usuario";

$consulta = mysqli_query($conexao, $query_usuario);

if (mysqli_num_rows($consulta) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($consulta)) {
        if ($_SESSION['usuario'] == $row['username']) {
  $pic_uso = $row['pic'];
  $_SESSION['pic'] = $row['pic'];
        }
    }}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Vai dar namoro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

 <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="css/jdvir.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/js/jquery.appear.js"></script>
    <script src="js/js/jquery.cookie.js"></script>
    <script src="js/js/jquery.countdown.min.js"></script>
    <script src="js/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/js/jquery.easing.1.3.js"></script>
    <script src="js/js/jquery.min.js"></script>
    <style>
        @media (max-width: 991px) {
  html {
      height: 100%;
      min-height: 100%;
      overflow: auto;
  }
        }
        @media (min-width: 992px) {

  html {
      height: 100%;
      min-height: 100%;
      overflow: hidden;
  }
        }


        body {
  height: 100%;
  display: flex;
  flex-direction: column;

        }

      main{
  height: 500px;
        }
    </style>
    <?php

    if(isset($_SESSION['usuario2'])){

        $usuario2 = $_SESSION['usuario2'];

    }else{
        $usuario2 = 'nada';
    }
    ?>





    <script type="text/javascript">


        $(document).ready(function (){

  $("#mensagem").submit(function (){

      var dados = jQuery( this ).serialize();

      $.ajax({
url: 'controllers/response.php',
cache: false,
data: dados,
type: "POST",


      });

      document.getElementById("limpar").value = "";




      return false;
  });
        });


















        $(document).ready(function(){
  $("#limpar").on("input", function(){

      var req = new XMLHttpRequest();
      req.onreadystatechange = function(){
if (req.readyState == 4 && req.status == 200) {
    document.getElementById('result_typing').innerHTML = req.responseText;
}
      }
      req.open('GET', 'controllers/typing.php', true);
      req.send();

  });
        });









        function ajax(){
  var req = new XMLHttpRequest();
  req.onreadystatechange = function(){
      if (req.readyState == 4 && req.status == 200) {
document.getElementById('chat').innerHTML = req.responseText;
      }
  }
  req.open('GET', 'chat/chat.php', true);
  req.send();

  var req2 = new XMLHttpRequest();
  req2.onreadystatechange = function(){
      if (req2.readyState == 4 && req2.status == 200) {
document.getElementById('roda').innerHTML = req2.responseText;
      }
  }
  req2.open('GET', 'atualizacoes/usuario.php', true);
  req2.send();



  var req3 = new XMLHttpRequest();
  req3.onreadystatechange = function(){
      if (req3.readyState == 4 && req3.status == 200) {
document.getElementById('scro').innerHTML = req3.responseText;
      }
  }
  req3.open('GET', 'atualizacoes/users.php', true);
  req3.send();

  var req4 = new XMLHttpRequest();
  req4.onreadystatechange = function(){
      if (req4.readyState == 4 && req4.status == 200) {
document.getElementById('result_typing').innerHTML = req4.responseText;
      }
  }
  req4.open('GET', 'atualizacoes/typing.php', true);
  req4.send();





        }


        setInterval(function(){ajax();}, 1000);






     function batepapo(s){

         <?php
         $query_usuario = "select * from usuario";

         $consulta = mysqli_query($conexao, $query_usuario);

         if (mysqli_num_rows($consulta) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($consulta)) {
 ?>

    if (s == "<?php echo $row['username']; ?>") {
        document.getElementById('receptor_nome').innerText = "<?php echo $row['username']; ?>"
        document.getElementById('receptor_icon').src = "conexaoPHP/uploads/<?php echo $row['username']; ?>"




    }
    <?php

        }
        }

        ?>

<?php ?>
     }

        function titulo(){
  document.getElementById('ti').title = "LOGOUT"
        }



        $(document).ready(function (){

            $("#lista_de_Contactos").submit(function (){

                var dados2 = jQuery( this ).serialize();

                $.ajax({
                    url: 'controllers/contactos.php',
                    cache: false,
                    data: dados2,
                    type: "POST",


                });

                return false;
            });
        });

    </script>

<style>

    @media ( max-height: 2000px){#chat{height: 1825px;} #card{height: 1970px;} #contatos{height: 1950px;} #scro{height: 1835px;}}
    @media ( max-height: 1999px){#chat{height: 1824px;} #card{height: 1969px;} #contatos{height: 1949px;} #scro{height: 1834px;}}
    @media ( max-height: 1998px){#chat{height: 1823px;} #card{height: 1968px;} #contatos{height: 1948px;} #scro{height: 1833px;}}
    @media ( max-height: 1997px){#chat{height: 1822px;} #card{height: 1967px;} #contatos{height: 1947px;} #scro{height: 1832px;}}
    @media ( max-height: 1996px){#chat{height: 1821px;} #card{height: 1966px;} #contatos{height: 1946px;} #scro{height: 1831px;}}
    @media ( max-height: 1995px){#chat{height: 1820px;} #card{height: 1965px;} #contatos{height: 1945px;} #scro{height: 1830px;}}
    @media ( max-height: 1994px){#chat{height: 1819px;} #card{height: 1964px;} #contatos{height: 1944px;} #scro{height: 1829px;}}
    @media ( max-height: 1993px){#chat{height: 1818px;} #card{height: 1963px;} #contatos{height: 1943px;} #scro{height: 1828px;}}
    @media ( max-height: 1992px){#chat{height: 1817px;} #card{height: 1962px;} #contatos{height: 1942px;} #scro{height: 1827px;}}
    @media ( max-height: 1991px){#chat{height: 1816px;} #card{height: 1961px;} #contatos{height: 1941px;} #scro{height: 1826px;}}
    @media ( max-height: 1990px){#chat{height: 1815px;} #card{height: 1960px;} #contatos{height: 1940px;} #scro{height: 1825px;}}
    @media ( max-height: 1989px){#chat{height: 1814px;} #card{height: 1959px;} #contatos{height: 1939px;} #scro{height: 1824px;}}
    @media ( max-height: 1988px){#chat{height: 1813px;} #card{height: 1958px;} #contatos{height: 1938px;} #scro{height: 1823px;}}
    @media ( max-height: 1987px){#chat{height: 1812px;} #card{height: 1957px;} #contatos{height: 1937px;} #scro{height: 1822px;}}
    @media ( max-height: 1986px){#chat{height: 1811px;} #card{height: 1956px;} #contatos{height: 1936px;} #scro{height: 1821px;}}
    @media ( max-height: 1985px){#chat{height: 1810px;} #card{height: 1955px;} #contatos{height: 1935px;} #scro{height: 1820px;}}
    @media ( max-height: 1984px){#chat{height: 1809px;} #card{height: 1954px;} #contatos{height: 1934px;} #scro{height: 1819px;}}
    @media ( max-height: 1983px){#chat{height: 1808px;} #card{height: 1953px;} #contatos{height: 1933px;} #scro{height: 1818px;}}
    @media ( max-height: 1982px){#chat{height: 1807px;} #card{height: 1952px;} #contatos{height: 1932px;} #scro{height: 1817px;}}
    @media ( max-height: 1981px){#chat{height: 1806px;} #card{height: 1951px;} #contatos{height: 1931px;} #scro{height: 1816px;}}
    @media ( max-height: 1980px){#chat{height: 1805px;} #card{height: 1950px;} #contatos{height: 1930px;} #scro{height: 1815px;}}
    @media ( max-height: 1979px){#chat{height: 1804px;} #card{height: 1949px;} #contatos{height: 1929px;} #scro{height: 1814px;}}
    @media ( max-height: 1978px){#chat{height: 1803px;} #card{height: 1948px;} #contatos{height: 1928px;} #scro{height: 1813px;}}
    @media ( max-height: 1977px){#chat{height: 1802px;} #card{height: 1947px;} #contatos{height: 1927px;} #scro{height: 1812px;}}
    @media ( max-height: 1976px){#chat{height: 1801px;} #card{height: 1946px;} #contatos{height: 1926px;} #scro{height: 1811px;}}
    @media ( max-height: 1975px){#chat{height: 1800px;} #card{height: 1945px;} #contatos{height: 1925px;} #scro{height: 1810px;}}
    @media ( max-height: 1974px){#chat{height: 1799px;} #card{height: 1944px;} #contatos{height: 1924px;} #scro{height: 1809px;}}
    @media ( max-height: 1973px){#chat{height: 1798px;} #card{height: 1943px;} #contatos{height: 1923px;} #scro{height: 1808px;}}
    @media ( max-height: 1972px){#chat{height: 1797px;} #card{height: 1942px;} #contatos{height: 1922px;} #scro{height: 1807px;}}
    @media ( max-height: 1971px){#chat{height: 1796px;} #card{height: 1941px;} #contatos{height: 1921px;} #scro{height: 1806px;}}
    @media ( max-height: 1970px){#chat{height: 1795px;} #card{height: 1940px;} #contatos{height: 1920px;} #scro{height: 1805px;}}
    @media ( max-height: 1969px){#chat{height: 1794px;} #card{height: 1939px;} #contatos{height: 1919px;} #scro{height: 1804px;}}
    @media ( max-height: 1968px){#chat{height: 1793px;} #card{height: 1938px;} #contatos{height: 1918px;} #scro{height: 1803px;}}
    @media ( max-height: 1967px){#chat{height: 1792px;} #card{height: 1937px;} #contatos{height: 1917px;} #scro{height: 1802px;}}
    @media ( max-height: 1966px){#chat{height: 1791px;} #card{height: 1936px;} #contatos{height: 1916px;} #scro{height: 1801px;}}
    @media ( max-height: 1965px){#chat{height: 1790px;} #card{height: 1935px;} #contatos{height: 1915px;} #scro{height: 1800px;}}
    @media ( max-height: 1964px){#chat{height: 1789px;} #card{height: 1934px;} #contatos{height: 1914px;} #scro{height: 1799px;}}
    @media ( max-height: 1963px){#chat{height: 1788px;} #card{height: 1933px;} #contatos{height: 1913px;} #scro{height: 1798px;}}
    @media ( max-height: 1962px){#chat{height: 1787px;} #card{height: 1932px;} #contatos{height: 1912px;} #scro{height: 1797px;}}
    @media ( max-height: 1961px){#chat{height: 1786px;} #card{height: 1931px;} #contatos{height: 1911px;} #scro{height: 1796px;}}
    @media ( max-height: 1960px){#chat{height: 1785px;} #card{height: 1930px;} #contatos{height: 1910px;} #scro{height: 1795px;}}
    @media ( max-height: 1959px){#chat{height: 1784px;} #card{height: 1929px;} #contatos{height: 1909px;} #scro{height: 1794px;}}
    @media ( max-height: 1958px){#chat{height: 1783px;} #card{height: 1928px;} #contatos{height: 1908px;} #scro{height: 1793px;}}
    @media ( max-height: 1957px){#chat{height: 1782px;} #card{height: 1927px;} #contatos{height: 1907px;} #scro{height: 1792px;}}
    @media ( max-height: 1956px){#chat{height: 1781px;} #card{height: 1926px;} #contatos{height: 1906px;} #scro{height: 1791px;}}
    @media ( max-height: 1955px){#chat{height: 1780px;} #card{height: 1925px;} #contatos{height: 1905px;} #scro{height: 1790px;}}
    @media ( max-height: 1954px){#chat{height: 1779px;} #card{height: 1924px;} #contatos{height: 1904px;} #scro{height: 1789px;}}
    @media ( max-height: 1953px){#chat{height: 1778px;} #card{height: 1923px;} #contatos{height: 1903px;} #scro{height: 1788px;}}
    @media ( max-height: 1952px){#chat{height: 1777px;} #card{height: 1922px;} #contatos{height: 1902px;} #scro{height: 1787px;}}
    @media ( max-height: 1951px){#chat{height: 1776px;} #card{height: 1921px;} #contatos{height: 1901px;} #scro{height: 1786px;}}
    @media ( max-height: 1950px){#chat{height: 1775px;} #card{height: 1920px;} #contatos{height: 1900px;} #scro{height: 1785px;}}
    @media ( max-height: 1949px){#chat{height: 1774px;} #card{height: 1919px;} #contatos{height: 1899px;} #scro{height: 1784px;}}
    @media ( max-height: 1948px){#chat{height: 1773px;} #card{height: 1918px;} #contatos{height: 1898px;} #scro{height: 1783px;}}
    @media ( max-height: 1947px){#chat{height: 1772px;} #card{height: 1917px;} #contatos{height: 1897px;} #scro{height: 1782px;}}
    @media ( max-height: 1946px){#chat{height: 1771px;} #card{height: 1916px;} #contatos{height: 1896px;} #scro{height: 1781px;}}
    @media ( max-height: 1945px){#chat{height: 1770px;} #card{height: 1915px;} #contatos{height: 1895px;} #scro{height: 1780px;}}
    @media ( max-height: 1944px){#chat{height: 1769px;} #card{height: 1914px;} #contatos{height: 1894px;} #scro{height: 1779px;}}
    @media ( max-height: 1943px){#chat{height: 1768px;} #card{height: 1913px;} #contatos{height: 1893px;} #scro{height: 1778px;}}
    @media ( max-height: 1942px){#chat{height: 1767px;} #card{height: 1912px;} #contatos{height: 1892px;} #scro{height: 1777px;}}
    @media ( max-height: 1941px){#chat{height: 1766px;} #card{height: 1911px;} #contatos{height: 1891px;} #scro{height: 1776px;}}
    @media ( max-height: 1940px){#chat{height: 1765px;} #card{height: 1910px;} #contatos{height: 1890px;} #scro{height: 1775px;}}
    @media ( max-height: 1939px){#chat{height: 1764px;} #card{height: 1909px;} #contatos{height: 1889px;} #scro{height: 1774px;}}
    @media ( max-height: 1938px){#chat{height: 1763px;} #card{height: 1908px;} #contatos{height: 1888px;} #scro{height: 1773px;}}
    @media ( max-height: 1937px){#chat{height: 1762px;} #card{height: 1907px;} #contatos{height: 1887px;} #scro{height: 1772px;}}
    @media ( max-height: 1936px){#chat{height: 1761px;} #card{height: 1906px;} #contatos{height: 1886px;} #scro{height: 1771px;}}
    @media ( max-height: 1935px){#chat{height: 1760px;} #card{height: 1905px;} #contatos{height: 1885px;} #scro{height: 1770px;}}
    @media ( max-height: 1934px){#chat{height: 1759px;} #card{height: 1904px;} #contatos{height: 1884px;} #scro{height: 1769px;}}
    @media ( max-height: 1933px){#chat{height: 1758px;} #card{height: 1903px;} #contatos{height: 1883px;} #scro{height: 1768px;}}
    @media ( max-height: 1932px){#chat{height: 1757px;} #card{height: 1902px;} #contatos{height: 1882px;} #scro{height: 1767px;}}
    @media ( max-height: 1931px){#chat{height: 1756px;} #card{height: 1901px;} #contatos{height: 1881px;} #scro{height: 1766px;}}
    @media ( max-height: 1930px){#chat{height: 1755px;} #card{height: 1900px;} #contatos{height: 1880px;} #scro{height: 1765px;}}
    @media ( max-height: 1929px){#chat{height: 1754px;} #card{height: 1899px;} #contatos{height: 1879px;} #scro{height: 1764px;}}
    @media ( max-height: 1928px){#chat{height: 1753px;} #card{height: 1898px;} #contatos{height: 1878px;} #scro{height: 1763px;}}
    @media ( max-height: 1927px){#chat{height: 1752px;} #card{height: 1897px;} #contatos{height: 1877px;} #scro{height: 1762px;}}
    @media ( max-height: 1926px){#chat{height: 1751px;} #card{height: 1896px;} #contatos{height: 1876px;} #scro{height: 1761px;}}
    @media ( max-height: 1925px){#chat{height: 1750px;} #card{height: 1895px;} #contatos{height: 1875px;} #scro{height: 1760px;}}
    @media ( max-height: 1924px){#chat{height: 1749px;} #card{height: 1894px;} #contatos{height: 1874px;} #scro{height: 1759px;}}
    @media ( max-height: 1923px){#chat{height: 1748px;} #card{height: 1893px;} #contatos{height: 1873px;} #scro{height: 1758px;}}
    @media ( max-height: 1922px){#chat{height: 1747px;} #card{height: 1892px;} #contatos{height: 1872px;} #scro{height: 1757px;}}
    @media ( max-height: 1921px){#chat{height: 1746px;} #card{height: 1891px;} #contatos{height: 1871px;} #scro{height: 1756px;}}
    @media ( max-height: 1920px){#chat{height: 1745px;} #card{height: 1890px;} #contatos{height: 1870px;} #scro{height: 1755px;}}
    @media ( max-height: 1919px){#chat{height: 1744px;} #card{height: 1889px;} #contatos{height: 1869px;} #scro{height: 1754px;}}
    @media ( max-height: 1918px){#chat{height: 1743px;} #card{height: 1888px;} #contatos{height: 1868px;} #scro{height: 1753px;}}
    @media ( max-height: 1917px){#chat{height: 1742px;} #card{height: 1887px;} #contatos{height: 1867px;} #scro{height: 1752px;}}
    @media ( max-height: 1916px){#chat{height: 1741px;} #card{height: 1886px;} #contatos{height: 1866px;} #scro{height: 1751px;}}
    @media ( max-height: 1915px){#chat{height: 1740px;} #card{height: 1885px;} #contatos{height: 1865px;} #scro{height: 1750px;}}
    @media ( max-height: 1914px){#chat{height: 1739px;} #card{height: 1884px;} #contatos{height: 1864px;} #scro{height: 1749px;}}
    @media ( max-height: 1913px){#chat{height: 1738px;} #card{height: 1883px;} #contatos{height: 1863px;} #scro{height: 1748px;}}
    @media ( max-height: 1912px){#chat{height: 1737px;} #card{height: 1882px;} #contatos{height: 1862px;} #scro{height: 1747px;}}
    @media ( max-height: 1911px){#chat{height: 1736px;} #card{height: 1881px;} #contatos{height: 1861px;} #scro{height: 1746px;}}
    @media ( max-height: 1910px){#chat{height: 1735px;} #card{height: 1880px;} #contatos{height: 1860px;} #scro{height: 1745px;}}
    @media ( max-height: 1909px){#chat{height: 1734px;} #card{height: 1879px;} #contatos{height: 1859px;} #scro{height: 1744px;}}
    @media ( max-height: 1908px){#chat{height: 1733px;} #card{height: 1878px;} #contatos{height: 1858px;} #scro{height: 1743px;}}
    @media ( max-height: 1907px){#chat{height: 1732px;} #card{height: 1877px;} #contatos{height: 1857px;} #scro{height: 1742px;}}
    @media ( max-height: 1906px){#chat{height: 1731px;} #card{height: 1876px;} #contatos{height: 1856px;} #scro{height: 1741px;}}
    @media ( max-height: 1905px){#chat{height: 1730px;} #card{height: 1875px;} #contatos{height: 1855px;} #scro{height: 1740px;}}
    @media ( max-height: 1904px){#chat{height: 1729px;} #card{height: 1874px;} #contatos{height: 1854px;} #scro{height: 1739px;}}
    @media ( max-height: 1903px){#chat{height: 1728px;} #card{height: 1873px;} #contatos{height: 1853px;} #scro{height: 1738px;}}
    @media ( max-height: 1902px){#chat{height: 1727px;} #card{height: 1872px;} #contatos{height: 1852px;} #scro{height: 1737px;}}
    @media ( max-height: 1901px){#chat{height: 1726px;} #card{height: 1871px;} #contatos{height: 1851px;} #scro{height: 1736px;}}
    @media ( max-height: 1900px){#chat{height: 1725px;} #card{height: 1870px;} #contatos{height: 1850px;} #scro{height: 1735px;}}
    @media ( max-height: 1899px){#chat{height: 1724px;} #card{height: 1869px;} #contatos{height: 1849px;} #scro{height: 1734px;}}
    @media ( max-height: 1898px){#chat{height: 1723px;} #card{height: 1868px;} #contatos{height: 1848px;} #scro{height: 1733px;}}
    @media ( max-height: 1897px){#chat{height: 1722px;} #card{height: 1867px;} #contatos{height: 1847px;} #scro{height: 1732px;}}
    @media ( max-height: 1896px){#chat{height: 1721px;} #card{height: 1866px;} #contatos{height: 1846px;} #scro{height: 1731px;}}
    @media ( max-height: 1895px){#chat{height: 1720px;} #card{height: 1865px;} #contatos{height: 1845px;} #scro{height: 1730px;}}
    @media ( max-height: 1894px){#chat{height: 1719px;} #card{height: 1864px;} #contatos{height: 1844px;} #scro{height: 1729px;}}
    @media ( max-height: 1893px){#chat{height: 1718px;} #card{height: 1863px;} #contatos{height: 1843px;} #scro{height: 1728px;}}
    @media ( max-height: 1892px){#chat{height: 1717px;} #card{height: 1862px;} #contatos{height: 1842px;} #scro{height: 1727px;}}
    @media ( max-height: 1891px){#chat{height: 1716px;} #card{height: 1861px;} #contatos{height: 1841px;} #scro{height: 1726px;}}
    @media ( max-height: 1890px){#chat{height: 1715px;} #card{height: 1860px;} #contatos{height: 1840px;} #scro{height: 1725px;}}
    @media ( max-height: 1889px){#chat{height: 1714px;} #card{height: 1859px;} #contatos{height: 1839px;} #scro{height: 1724px;}}
    @media ( max-height: 1888px){#chat{height: 1713px;} #card{height: 1858px;} #contatos{height: 1838px;} #scro{height: 1723px;}}
    @media ( max-height: 1887px){#chat{height: 1712px;} #card{height: 1857px;} #contatos{height: 1837px;} #scro{height: 1722px;}}
    @media ( max-height: 1886px){#chat{height: 1711px;} #card{height: 1856px;} #contatos{height: 1836px;} #scro{height: 1721px;}}
    @media ( max-height: 1885px){#chat{height: 1710px;} #card{height: 1855px;} #contatos{height: 1835px;} #scro{height: 1720px;}}
    @media ( max-height: 1884px){#chat{height: 1709px;} #card{height: 1854px;} #contatos{height: 1834px;} #scro{height: 1719px;}}
    @media ( max-height: 1883px){#chat{height: 1708px;} #card{height: 1853px;} #contatos{height: 1833px;} #scro{height: 1718px;}}
    @media ( max-height: 1882px){#chat{height: 1707px;} #card{height: 1852px;} #contatos{height: 1832px;} #scro{height: 1717px;}}
    @media ( max-height: 1881px){#chat{height: 1706px;} #card{height: 1851px;} #contatos{height: 1831px;} #scro{height: 1716px;}}
    @media ( max-height: 1880px){#chat{height: 1705px;} #card{height: 1850px;} #contatos{height: 1830px;} #scro{height: 1715px;}}
    @media ( max-height: 1879px){#chat{height: 1704px;} #card{height: 1849px;} #contatos{height: 1829px;} #scro{height: 1714px;}}
    @media ( max-height: 1878px){#chat{height: 1703px;} #card{height: 1848px;} #contatos{height: 1828px;} #scro{height: 1713px;}}
    @media ( max-height: 1877px){#chat{height: 1702px;} #card{height: 1847px;} #contatos{height: 1827px;} #scro{height: 1712px;}}
    @media ( max-height: 1876px){#chat{height: 1701px;} #card{height: 1846px;} #contatos{height: 1826px;} #scro{height: 1711px;}}
    @media ( max-height: 1875px){#chat{height: 1700px;} #card{height: 1845px;} #contatos{height: 1825px;} #scro{height: 1710px;}}
    @media ( max-height: 1874px){#chat{height: 1699px;} #card{height: 1844px;} #contatos{height: 1824px;} #scro{height: 1709px;}}
    @media ( max-height: 1873px){#chat{height: 1698px;} #card{height: 1843px;} #contatos{height: 1823px;} #scro{height: 1708px;}}
    @media ( max-height: 1872px){#chat{height: 1697px;} #card{height: 1842px;} #contatos{height: 1822px;} #scro{height: 1707px;}}
    @media ( max-height: 1871px){#chat{height: 1696px;} #card{height: 1841px;} #contatos{height: 1821px;} #scro{height: 1706px;}}
    @media ( max-height: 1870px){#chat{height: 1695px;} #card{height: 1840px;} #contatos{height: 1820px;} #scro{height: 1705px;}}
    @media ( max-height: 1869px){#chat{height: 1694px;} #card{height: 1839px;} #contatos{height: 1819px;} #scro{height: 1704px;}}
    @media ( max-height: 1868px){#chat{height: 1693px;} #card{height: 1838px;} #contatos{height: 1818px;} #scro{height: 1703px;}}
    @media ( max-height: 1867px){#chat{height: 1692px;} #card{height: 1837px;} #contatos{height: 1817px;} #scro{height: 1702px;}}
    @media ( max-height: 1866px){#chat{height: 1691px;} #card{height: 1836px;} #contatos{height: 1816px;} #scro{height: 1701px;}}
    @media ( max-height: 1865px){#chat{height: 1690px;} #card{height: 1835px;} #contatos{height: 1815px;} #scro{height: 1700px;}}
    @media ( max-height: 1864px){#chat{height: 1689px;} #card{height: 1834px;} #contatos{height: 1814px;} #scro{height: 1699px;}}
    @media ( max-height: 1863px){#chat{height: 1688px;} #card{height: 1833px;} #contatos{height: 1813px;} #scro{height: 1698px;}}
    @media ( max-height: 1862px){#chat{height: 1687px;} #card{height: 1832px;} #contatos{height: 1812px;} #scro{height: 1697px;}}
    @media ( max-height: 1861px){#chat{height: 1686px;} #card{height: 1831px;} #contatos{height: 1811px;} #scro{height: 1696px;}}
    @media ( max-height: 1860px){#chat{height: 1685px;} #card{height: 1830px;} #contatos{height: 1810px;} #scro{height: 1695px;}}
    @media ( max-height: 1859px){#chat{height: 1684px;} #card{height: 1829px;} #contatos{height: 1809px;} #scro{height: 1694px;}}
    @media ( max-height: 1858px){#chat{height: 1683px;} #card{height: 1828px;} #contatos{height: 1808px;} #scro{height: 1693px;}}
    @media ( max-height: 1857px){#chat{height: 1682px;} #card{height: 1827px;} #contatos{height: 1807px;} #scro{height: 1692px;}}
    @media ( max-height: 1856px){#chat{height: 1681px;} #card{height: 1826px;} #contatos{height: 1806px;} #scro{height: 1691px;}}
    @media ( max-height: 1855px){#chat{height: 1680px;} #card{height: 1825px;} #contatos{height: 1805px;} #scro{height: 1690px;}}
    @media ( max-height: 1854px){#chat{height: 1679px;} #card{height: 1824px;} #contatos{height: 1804px;} #scro{height: 1689px;}}
    @media ( max-height: 1853px){#chat{height: 1678px;} #card{height: 1823px;} #contatos{height: 1803px;} #scro{height: 1688px;}}
    @media ( max-height: 1852px){#chat{height: 1677px;} #card{height: 1822px;} #contatos{height: 1802px;} #scro{height: 1687px;}}
    @media ( max-height: 1851px){#chat{height: 1676px;} #card{height: 1821px;} #contatos{height: 1801px;} #scro{height: 1686px;}}
    @media ( max-height: 1850px){#chat{height: 1675px;} #card{height: 1820px;} #contatos{height: 1800px;} #scro{height: 1685px;}}
    @media ( max-height: 1849px){#chat{height: 1674px;} #card{height: 1819px;} #contatos{height: 1799px;} #scro{height: 1684px;}}
    @media ( max-height: 1848px){#chat{height: 1673px;} #card{height: 1818px;} #contatos{height: 1798px;} #scro{height: 1683px;}}
    @media ( max-height: 1847px){#chat{height: 1672px;} #card{height: 1817px;} #contatos{height: 1797px;} #scro{height: 1682px;}}
    @media ( max-height: 1846px){#chat{height: 1671px;} #card{height: 1816px;} #contatos{height: 1796px;} #scro{height: 1681px;}}
    @media ( max-height: 1845px){#chat{height: 1670px;} #card{height: 1815px;} #contatos{height: 1795px;} #scro{height: 1680px;}}
    @media ( max-height: 1844px){#chat{height: 1669px;} #card{height: 1814px;} #contatos{height: 1794px;} #scro{height: 1679px;}}
    @media ( max-height: 1843px){#chat{height: 1668px;} #card{height: 1813px;} #contatos{height: 1793px;} #scro{height: 1678px;}}
    @media ( max-height: 1842px){#chat{height: 1667px;} #card{height: 1812px;} #contatos{height: 1792px;} #scro{height: 1677px;}}
    @media ( max-height: 1841px){#chat{height: 1666px;} #card{height: 1811px;} #contatos{height: 1791px;} #scro{height: 1676px;}}
    @media ( max-height: 1840px){#chat{height: 1665px;} #card{height: 1810px;} #contatos{height: 1790px;} #scro{height: 1675px;}}
    @media ( max-height: 1839px){#chat{height: 1664px;} #card{height: 1809px;} #contatos{height: 1789px;} #scro{height: 1674px;}}
    @media ( max-height: 1838px){#chat{height: 1663px;} #card{height: 1808px;} #contatos{height: 1788px;} #scro{height: 1673px;}}
    @media ( max-height: 1837px){#chat{height: 1662px;} #card{height: 1807px;} #contatos{height: 1787px;} #scro{height: 1672px;}}
    @media ( max-height: 1836px){#chat{height: 1661px;} #card{height: 1806px;} #contatos{height: 1786px;} #scro{height: 1671px;}}
    @media ( max-height: 1835px){#chat{height: 1660px;} #card{height: 1805px;} #contatos{height: 1785px;} #scro{height: 1670px;}}
    @media ( max-height: 1834px){#chat{height: 1659px;} #card{height: 1804px;} #contatos{height: 1784px;} #scro{height: 1669px;}}
    @media ( max-height: 1833px){#chat{height: 1658px;} #card{height: 1803px;} #contatos{height: 1783px;} #scro{height: 1668px;}}
    @media ( max-height: 1832px){#chat{height: 1657px;} #card{height: 1802px;} #contatos{height: 1782px;} #scro{height: 1667px;}}
    @media ( max-height: 1831px){#chat{height: 1656px;} #card{height: 1801px;} #contatos{height: 1781px;} #scro{height: 1666px;}}
    @media ( max-height: 1830px){#chat{height: 1655px;} #card{height: 1800px;} #contatos{height: 1780px;} #scro{height: 1665px;}}
    @media ( max-height: 1829px){#chat{height: 1654px;} #card{height: 1799px;} #contatos{height: 1779px;} #scro{height: 1664px;}}
    @media ( max-height: 1828px){#chat{height: 1653px;} #card{height: 1798px;} #contatos{height: 1778px;} #scro{height: 1663px;}}
    @media ( max-height: 1827px){#chat{height: 1652px;} #card{height: 1797px;} #contatos{height: 1777px;} #scro{height: 1662px;}}
    @media ( max-height: 1826px){#chat{height: 1651px;} #card{height: 1796px;} #contatos{height: 1776px;} #scro{height: 1661px;}}
    @media ( max-height: 1825px){#chat{height: 1650px;} #card{height: 1795px;} #contatos{height: 1775px;} #scro{height: 1660px;}}
    @media ( max-height: 1824px){#chat{height: 1649px;} #card{height: 1794px;} #contatos{height: 1774px;} #scro{height: 1659px;}}
    @media ( max-height: 1823px){#chat{height: 1648px;} #card{height: 1793px;} #contatos{height: 1773px;} #scro{height: 1658px;}}
    @media ( max-height: 1822px){#chat{height: 1647px;} #card{height: 1792px;} #contatos{height: 1772px;} #scro{height: 1657px;}}
    @media ( max-height: 1821px){#chat{height: 1646px;} #card{height: 1791px;} #contatos{height: 1771px;} #scro{height: 1656px;}}
    @media ( max-height: 1820px){#chat{height: 1645px;} #card{height: 1790px;} #contatos{height: 1770px;} #scro{height: 1655px;}}
    @media ( max-height: 1819px){#chat{height: 1644px;} #card{height: 1789px;} #contatos{height: 1769px;} #scro{height: 1654px;}}
    @media ( max-height: 1818px){#chat{height: 1643px;} #card{height: 1788px;} #contatos{height: 1768px;} #scro{height: 1653px;}}
    @media ( max-height: 1817px){#chat{height: 1642px;} #card{height: 1787px;} #contatos{height: 1767px;} #scro{height: 1652px;}}
    @media ( max-height: 1816px){#chat{height: 1641px;} #card{height: 1786px;} #contatos{height: 1766px;} #scro{height: 1651px;}}
    @media ( max-height: 1815px){#chat{height: 1640px;} #card{height: 1785px;} #contatos{height: 1765px;} #scro{height: 1650px;}}
    @media ( max-height: 1814px){#chat{height: 1639px;} #card{height: 1784px;} #contatos{height: 1764px;} #scro{height: 1649px;}}
    @media ( max-height: 1813px){#chat{height: 1638px;} #card{height: 1783px;} #contatos{height: 1763px;} #scro{height: 1648px;}}
    @media ( max-height: 1812px){#chat{height: 1637px;} #card{height: 1782px;} #contatos{height: 1762px;} #scro{height: 1647px;}}
    @media ( max-height: 1811px){#chat{height: 1636px;} #card{height: 1781px;} #contatos{height: 1761px;} #scro{height: 1646px;}}
    @media ( max-height: 1810px){#chat{height: 1635px;} #card{height: 1780px;} #contatos{height: 1760px;} #scro{height: 1645px;}}
    @media ( max-height: 1809px){#chat{height: 1634px;} #card{height: 1779px;} #contatos{height: 1759px;} #scro{height: 1644px;}}
    @media ( max-height: 1808px){#chat{height: 1633px;} #card{height: 1778px;} #contatos{height: 1758px;} #scro{height: 1643px;}}
    @media ( max-height: 1807px){#chat{height: 1632px;} #card{height: 1777px;} #contatos{height: 1757px;} #scro{height: 1642px;}}
    @media ( max-height: 1806px){#chat{height: 1631px;} #card{height: 1776px;} #contatos{height: 1756px;} #scro{height: 1641px;}}
    @media ( max-height: 1805px){#chat{height: 1630px;} #card{height: 1775px;} #contatos{height: 1755px;} #scro{height: 1640px;}}
    @media ( max-height: 1804px){#chat{height: 1629px;} #card{height: 1774px;} #contatos{height: 1754px;} #scro{height: 1639px;}}
    @media ( max-height: 1803px){#chat{height: 1628px;} #card{height: 1773px;} #contatos{height: 1753px;} #scro{height: 1638px;}}
    @media ( max-height: 1802px){#chat{height: 1627px;} #card{height: 1772px;} #contatos{height: 1752px;} #scro{height: 1637px;}}
    @media ( max-height: 1801px){#chat{height: 1626px;} #card{height: 1771px;} #contatos{height: 1751px;} #scro{height: 1636px;}}
    @media ( max-height: 1800px){#chat{height: 1625px;} #card{height: 1770px;} #contatos{height: 1750px;} #scro{height: 1635px;}}
    @media ( max-height: 1799px){#chat{height: 1624px;} #card{height: 1769px;} #contatos{height: 1749px;} #scro{height: 1634px;}}
    @media ( max-height: 1798px){#chat{height: 1623px;} #card{height: 1768px;} #contatos{height: 1748px;} #scro{height: 1633px;}}
    @media ( max-height: 1797px){#chat{height: 1622px;} #card{height: 1767px;} #contatos{height: 1747px;} #scro{height: 1632px;}}
    @media ( max-height: 1796px){#chat{height: 1621px;} #card{height: 1766px;} #contatos{height: 1746px;} #scro{height: 1631px;}}
    @media ( max-height: 1795px){#chat{height: 1620px;} #card{height: 1765px;} #contatos{height: 1745px;} #scro{height: 1630px;}}
    @media ( max-height: 1794px){#chat{height: 1619px;} #card{height: 1764px;} #contatos{height: 1744px;} #scro{height: 1629px;}}
    @media ( max-height: 1793px){#chat{height: 1618px;} #card{height: 1763px;} #contatos{height: 1743px;} #scro{height: 1628px;}}
    @media ( max-height: 1792px){#chat{height: 1617px;} #card{height: 1762px;} #contatos{height: 1742px;} #scro{height: 1627px;}}
    @media ( max-height: 1791px){#chat{height: 1616px;} #card{height: 1761px;} #contatos{height: 1741px;} #scro{height: 1626px;}}
    @media ( max-height: 1790px){#chat{height: 1615px;} #card{height: 1760px;} #contatos{height: 1740px;} #scro{height: 1625px;}}
    @media ( max-height: 1789px){#chat{height: 1614px;} #card{height: 1759px;} #contatos{height: 1739px;} #scro{height: 1624px;}}
    @media ( max-height: 1788px){#chat{height: 1613px;} #card{height: 1758px;} #contatos{height: 1738px;} #scro{height: 1623px;}}
    @media ( max-height: 1787px){#chat{height: 1612px;} #card{height: 1757px;} #contatos{height: 1737px;} #scro{height: 1622px;}}
    @media ( max-height: 1786px){#chat{height: 1611px;} #card{height: 1756px;} #contatos{height: 1736px;} #scro{height: 1621px;}}
    @media ( max-height: 1785px){#chat{height: 1610px;} #card{height: 1755px;} #contatos{height: 1735px;} #scro{height: 1620px;}}
    @media ( max-height: 1784px){#chat{height: 1609px;} #card{height: 1754px;} #contatos{height: 1734px;} #scro{height: 1619px;}}
    @media ( max-height: 1783px){#chat{height: 1608px;} #card{height: 1753px;} #contatos{height: 1733px;} #scro{height: 1618px;}}
    @media ( max-height: 1782px){#chat{height: 1607px;} #card{height: 1752px;} #contatos{height: 1732px;} #scro{height: 1617px;}}
    @media ( max-height: 1781px){#chat{height: 1606px;} #card{height: 1751px;} #contatos{height: 1731px;} #scro{height: 1616px;}}
    @media ( max-height: 1780px){#chat{height: 1605px;} #card{height: 1750px;} #contatos{height: 1730px;} #scro{height: 1615px;}}
    @media ( max-height: 1779px){#chat{height: 1604px;} #card{height: 1749px;} #contatos{height: 1729px;} #scro{height: 1614px;}}
    @media ( max-height: 1778px){#chat{height: 1603px;} #card{height: 1748px;} #contatos{height: 1728px;} #scro{height: 1613px;}}
    @media ( max-height: 1777px){#chat{height: 1602px;} #card{height: 1747px;} #contatos{height: 1727px;} #scro{height: 1612px;}}
    @media ( max-height: 1776px){#chat{height: 1601px;} #card{height: 1746px;} #contatos{height: 1726px;} #scro{height: 1611px;}}
    @media ( max-height: 1775px){#chat{height: 1600px;} #card{height: 1745px;} #contatos{height: 1725px;} #scro{height: 1610px;}}
    @media ( max-height: 1774px){#chat{height: 1599px;} #card{height: 1744px;} #contatos{height: 1724px;} #scro{height: 1609px;}}
    @media ( max-height: 1773px){#chat{height: 1598px;} #card{height: 1743px;} #contatos{height: 1723px;} #scro{height: 1608px;}}
    @media ( max-height: 1772px){#chat{height: 1597px;} #card{height: 1742px;} #contatos{height: 1722px;} #scro{height: 1607px;}}
    @media ( max-height: 1771px){#chat{height: 1596px;} #card{height: 1741px;} #contatos{height: 1721px;} #scro{height: 1606px;}}
    @media ( max-height: 1770px){#chat{height: 1595px;} #card{height: 1740px;} #contatos{height: 1720px;} #scro{height: 1605px;}}
    @media ( max-height: 1769px){#chat{height: 1594px;} #card{height: 1739px;} #contatos{height: 1719px;} #scro{height: 1604px;}}
    @media ( max-height: 1768px){#chat{height: 1593px;} #card{height: 1738px;} #contatos{height: 1718px;} #scro{height: 1603px;}}
    @media ( max-height: 1767px){#chat{height: 1592px;} #card{height: 1737px;} #contatos{height: 1717px;} #scro{height: 1602px;}}
    @media ( max-height: 1766px){#chat{height: 1591px;} #card{height: 1736px;} #contatos{height: 1716px;} #scro{height: 1601px;}}
    @media ( max-height: 1765px){#chat{height: 1590px;} #card{height: 1735px;} #contatos{height: 1715px;} #scro{height: 1600px;}}
    @media ( max-height: 1764px){#chat{height: 1589px;} #card{height: 1734px;} #contatos{height: 1714px;} #scro{height: 1599px;}}
    @media ( max-height: 1763px){#chat{height: 1588px;} #card{height: 1733px;} #contatos{height: 1713px;} #scro{height: 1598px;}}
    @media ( max-height: 1762px){#chat{height: 1587px;} #card{height: 1732px;} #contatos{height: 1712px;} #scro{height: 1597px;}}
    @media ( max-height: 1761px){#chat{height: 1586px;} #card{height: 1731px;} #contatos{height: 1711px;} #scro{height: 1596px;}}
    @media ( max-height: 1760px){#chat{height: 1585px;} #card{height: 1730px;} #contatos{height: 1710px;} #scro{height: 1595px;}}
    @media ( max-height: 1759px){#chat{height: 1584px;} #card{height: 1729px;} #contatos{height: 1709px;} #scro{height: 1594px;}}
    @media ( max-height: 1758px){#chat{height: 1583px;} #card{height: 1728px;} #contatos{height: 1708px;} #scro{height: 1593px;}}
    @media ( max-height: 1757px){#chat{height: 1582px;} #card{height: 1727px;} #contatos{height: 1707px;} #scro{height: 1592px;}}
    @media ( max-height: 1756px){#chat{height: 1581px;} #card{height: 1726px;} #contatos{height: 1706px;} #scro{height: 1591px;}}
    @media ( max-height: 1755px){#chat{height: 1580px;} #card{height: 1725px;} #contatos{height: 1705px;} #scro{height: 1590px;}}
    @media ( max-height: 1754px){#chat{height: 1579px;} #card{height: 1724px;} #contatos{height: 1704px;} #scro{height: 1589px;}}
    @media ( max-height: 1753px){#chat{height: 1578px;} #card{height: 1723px;} #contatos{height: 1703px;} #scro{height: 1588px;}}
    @media ( max-height: 1752px){#chat{height: 1577px;} #card{height: 1722px;} #contatos{height: 1702px;} #scro{height: 1587px;}}
    @media ( max-height: 1751px){#chat{height: 1576px;} #card{height: 1721px;} #contatos{height: 1701px;} #scro{height: 1586px;}}
    @media ( max-height: 1750px){#chat{height: 1575px;} #card{height: 1720px;} #contatos{height: 1700px;} #scro{height: 1585px;}}
    @media ( max-height: 1749px){#chat{height: 1574px;} #card{height: 1719px;} #contatos{height: 1699px;} #scro{height: 1584px;}}
    @media ( max-height: 1748px){#chat{height: 1573px;} #card{height: 1718px;} #contatos{height: 1698px;} #scro{height: 1583px;}}
    @media ( max-height: 1747px){#chat{height: 1572px;} #card{height: 1717px;} #contatos{height: 1697px;} #scro{height: 1582px;}}
    @media ( max-height: 1746px){#chat{height: 1571px;} #card{height: 1716px;} #contatos{height: 1696px;} #scro{height: 1581px;}}
    @media ( max-height: 1745px){#chat{height: 1570px;} #card{height: 1715px;} #contatos{height: 1695px;} #scro{height: 1580px;}}
    @media ( max-height: 1744px){#chat{height: 1569px;} #card{height: 1714px;} #contatos{height: 1694px;} #scro{height: 1579px;}}
    @media ( max-height: 1743px){#chat{height: 1568px;} #card{height: 1713px;} #contatos{height: 1693px;} #scro{height: 1578px;}}
    @media ( max-height: 1742px){#chat{height: 1567px;} #card{height: 1712px;} #contatos{height: 1692px;} #scro{height: 1577px;}}
    @media ( max-height: 1741px){#chat{height: 1566px;} #card{height: 1711px;} #contatos{height: 1691px;} #scro{height: 1576px;}}
    @media ( max-height: 1740px){#chat{height: 1565px;} #card{height: 1710px;} #contatos{height: 1690px;} #scro{height: 1575px;}}
    @media ( max-height: 1739px){#chat{height: 1564px;} #card{height: 1709px;} #contatos{height: 1689px;} #scro{height: 1574px;}}
    @media ( max-height: 1738px){#chat{height: 1563px;} #card{height: 1708px;} #contatos{height: 1688px;} #scro{height: 1573px;}}
    @media ( max-height: 1737px){#chat{height: 1562px;} #card{height: 1707px;} #contatos{height: 1687px;} #scro{height: 1572px;}}
    @media ( max-height: 1736px){#chat{height: 1561px;} #card{height: 1706px;} #contatos{height: 1686px;} #scro{height: 1571px;}}
    @media ( max-height: 1735px){#chat{height: 1560px;} #card{height: 1705px;} #contatos{height: 1685px;} #scro{height: 1570px;}}
    @media ( max-height: 1734px){#chat{height: 1559px;} #card{height: 1704px;} #contatos{height: 1684px;} #scro{height: 1569px;}}
    @media ( max-height: 1733px){#chat{height: 1558px;} #card{height: 1703px;} #contatos{height: 1683px;} #scro{height: 1568px;}}
    @media ( max-height: 1732px){#chat{height: 1557px;} #card{height: 1702px;} #contatos{height: 1682px;} #scro{height: 1567px;}}
    @media ( max-height: 1731px){#chat{height: 1556px;} #card{height: 1701px;} #contatos{height: 1681px;} #scro{height: 1566px;}}
    @media ( max-height: 1730px){#chat{height: 1555px;} #card{height: 1700px;} #contatos{height: 1680px;} #scro{height: 1565px;}}
    @media ( max-height: 1729px){#chat{height: 1554px;} #card{height: 1699px;} #contatos{height: 1679px;} #scro{height: 1564px;}}
    @media ( max-height: 1728px){#chat{height: 1553px;} #card{height: 1698px;} #contatos{height: 1678px;} #scro{height: 1563px;}}
    @media ( max-height: 1727px){#chat{height: 1552px;} #card{height: 1697px;} #contatos{height: 1677px;} #scro{height: 1562px;}}
    @media ( max-height: 1726px){#chat{height: 1551px;} #card{height: 1696px;} #contatos{height: 1676px;} #scro{height: 1561px;}}
    @media ( max-height: 1725px){#chat{height: 1550px;} #card{height: 1695px;} #contatos{height: 1675px;} #scro{height: 1560px;}}
    @media ( max-height: 1724px){#chat{height: 1549px;} #card{height: 1694px;} #contatos{height: 1674px;} #scro{height: 1559px;}}
    @media ( max-height: 1723px){#chat{height: 1548px;} #card{height: 1693px;} #contatos{height: 1673px;} #scro{height: 1558px;}}
    @media ( max-height: 1722px){#chat{height: 1547px;} #card{height: 1692px;} #contatos{height: 1672px;} #scro{height: 1557px;}}
    @media ( max-height: 1721px){#chat{height: 1546px;} #card{height: 1691px;} #contatos{height: 1671px;} #scro{height: 1556px;}}
    @media ( max-height: 1720px){#chat{height: 1545px;} #card{height: 1690px;} #contatos{height: 1670px;} #scro{height: 1555px;}}
    @media ( max-height: 1719px){#chat{height: 1544px;} #card{height: 1689px;} #contatos{height: 1669px;} #scro{height: 1554px;}}
    @media ( max-height: 1718px){#chat{height: 1543px;} #card{height: 1688px;} #contatos{height: 1668px;} #scro{height: 1553px;}}
    @media ( max-height: 1717px){#chat{height: 1542px;} #card{height: 1687px;} #contatos{height: 1667px;} #scro{height: 1552px;}}
    @media ( max-height: 1716px){#chat{height: 1541px;} #card{height: 1686px;} #contatos{height: 1666px;} #scro{height: 1551px;}}
    @media ( max-height: 1715px){#chat{height: 1540px;} #card{height: 1685px;} #contatos{height: 1665px;} #scro{height: 1550px;}}
    @media ( max-height: 1714px){#chat{height: 1539px;} #card{height: 1684px;} #contatos{height: 1664px;} #scro{height: 1549px;}}
    @media ( max-height: 1713px){#chat{height: 1538px;} #card{height: 1683px;} #contatos{height: 1663px;} #scro{height: 1548px;}}
    @media ( max-height: 1712px){#chat{height: 1537px;} #card{height: 1682px;} #contatos{height: 1662px;} #scro{height: 1547px;}}
    @media ( max-height: 1711px){#chat{height: 1536px;} #card{height: 1681px;} #contatos{height: 1661px;} #scro{height: 1546px;}}
    @media ( max-height: 1710px){#chat{height: 1535px;} #card{height: 1680px;} #contatos{height: 1660px;} #scro{height: 1545px;}}
    @media ( max-height: 1709px){#chat{height: 1534px;} #card{height: 1679px;} #contatos{height: 1659px;} #scro{height: 1544px;}}
    @media ( max-height: 1708px){#chat{height: 1533px;} #card{height: 1678px;} #contatos{height: 1658px;} #scro{height: 1543px;}}
    @media ( max-height: 1707px){#chat{height: 1532px;} #card{height: 1677px;} #contatos{height: 1657px;} #scro{height: 1542px;}}
    @media ( max-height: 1706px){#chat{height: 1531px;} #card{height: 1676px;} #contatos{height: 1656px;} #scro{height: 1541px;}}
    @media ( max-height: 1705px){#chat{height: 1530px;} #card{height: 1675px;} #contatos{height: 1655px;} #scro{height: 1540px;}}
    @media ( max-height: 1704px){#chat{height: 1529px;} #card{height: 1674px;} #contatos{height: 1654px;} #scro{height: 1539px;}}
    @media ( max-height: 1703px){#chat{height: 1528px;} #card{height: 1673px;} #contatos{height: 1653px;} #scro{height: 1538px;}}
    @media ( max-height: 1702px){#chat{height: 1527px;} #card{height: 1672px;} #contatos{height: 1652px;} #scro{height: 1537px;}}
    @media ( max-height: 1701px){#chat{height: 1526px;} #card{height: 1671px;} #contatos{height: 1651px;} #scro{height: 1536px;}}
    @media ( max-height: 1700px){#chat{height: 1525px;} #card{height: 1670px;} #contatos{height: 1650px;} #scro{height: 1535px;}}
    @media ( max-height: 1699px){#chat{height: 1524px;} #card{height: 1669px;} #contatos{height: 1649px;} #scro{height: 1534px;}}
    @media ( max-height: 1698px){#chat{height: 1523px;} #card{height: 1668px;} #contatos{height: 1648px;} #scro{height: 1533px;}}
    @media ( max-height: 1697px){#chat{height: 1522px;} #card{height: 1667px;} #contatos{height: 1647px;} #scro{height: 1532px;}}
    @media ( max-height: 1696px){#chat{height: 1521px;} #card{height: 1666px;} #contatos{height: 1646px;} #scro{height: 1531px;}}
    @media ( max-height: 1695px){#chat{height: 1520px;} #card{height: 1665px;} #contatos{height: 1645px;} #scro{height: 1530px;}}
    @media ( max-height: 1694px){#chat{height: 1519px;} #card{height: 1664px;} #contatos{height: 1644px;} #scro{height: 1529px;}}
    @media ( max-height: 1693px){#chat{height: 1518px;} #card{height: 1663px;} #contatos{height: 1643px;} #scro{height: 1528px;}}
    @media ( max-height: 1692px){#chat{height: 1517px;} #card{height: 1662px;} #contatos{height: 1642px;} #scro{height: 1527px;}}
    @media ( max-height: 1691px){#chat{height: 1516px;} #card{height: 1661px;} #contatos{height: 1641px;} #scro{height: 1526px;}}
    @media ( max-height: 1690px){#chat{height: 1515px;} #card{height: 1660px;} #contatos{height: 1640px;} #scro{height: 1525px;}}
    @media ( max-height: 1689px){#chat{height: 1514px;} #card{height: 1659px;} #contatos{height: 1639px;} #scro{height: 1524px;}}
    @media ( max-height: 1688px){#chat{height: 1513px;} #card{height: 1658px;} #contatos{height: 1638px;} #scro{height: 1523px;}}
    @media ( max-height: 1687px){#chat{height: 1512px;} #card{height: 1657px;} #contatos{height: 1637px;} #scro{height: 1522px;}}
    @media ( max-height: 1686px){#chat{height: 1511px;} #card{height: 1656px;} #contatos{height: 1636px;} #scro{height: 1521px;}}
    @media ( max-height: 1685px){#chat{height: 1510px;} #card{height: 1655px;} #contatos{height: 1635px;} #scro{height: 1520px;}}
    @media ( max-height: 1684px){#chat{height: 1509px;} #card{height: 1654px;} #contatos{height: 1634px;} #scro{height: 1519px;}}
    @media ( max-height: 1683px){#chat{height: 1508px;} #card{height: 1653px;} #contatos{height: 1633px;} #scro{height: 1518px;}}
    @media ( max-height: 1682px){#chat{height: 1507px;} #card{height: 1652px;} #contatos{height: 1632px;} #scro{height: 1517px;}}
    @media ( max-height: 1681px){#chat{height: 1506px;} #card{height: 1651px;} #contatos{height: 1631px;} #scro{height: 1516px;}}
    @media ( max-height: 1680px){#chat{height: 1505px;} #card{height: 1650px;} #contatos{height: 1630px;} #scro{height: 1515px;}}
    @media ( max-height: 1679px){#chat{height: 1504px;} #card{height: 1649px;} #contatos{height: 1629px;} #scro{height: 1514px;}}
    @media ( max-height: 1678px){#chat{height: 1503px;} #card{height: 1648px;} #contatos{height: 1628px;} #scro{height: 1513px;}}
    @media ( max-height: 1677px){#chat{height: 1502px;} #card{height: 1647px;} #contatos{height: 1627px;} #scro{height: 1512px;}}
    @media ( max-height: 1676px){#chat{height: 1501px;} #card{height: 1646px;} #contatos{height: 1626px;} #scro{height: 1511px;}}
    @media ( max-height: 1675px){#chat{height: 1500px;} #card{height: 1645px;} #contatos{height: 1625px;} #scro{height: 1510px;}}
    @media ( max-height: 1674px){#chat{height: 1499px;} #card{height: 1644px;} #contatos{height: 1624px;} #scro{height: 1509px;}}
    @media ( max-height: 1673px){#chat{height: 1498px;} #card{height: 1643px;} #contatos{height: 1623px;} #scro{height: 1508px;}}
    @media ( max-height: 1672px){#chat{height: 1497px;} #card{height: 1642px;} #contatos{height: 1622px;} #scro{height: 1507px;}}
    @media ( max-height: 1671px){#chat{height: 1496px;} #card{height: 1641px;} #contatos{height: 1621px;} #scro{height: 1506px;}}
    @media ( max-height: 1670px){#chat{height: 1495px;} #card{height: 1640px;} #contatos{height: 1620px;} #scro{height: 1505px;}}
    @media ( max-height: 1669px){#chat{height: 1494px;} #card{height: 1639px;} #contatos{height: 1619px;} #scro{height: 1504px;}}
    @media ( max-height: 1668px){#chat{height: 1493px;} #card{height: 1638px;} #contatos{height: 1618px;} #scro{height: 1503px;}}
    @media ( max-height: 1667px){#chat{height: 1492px;} #card{height: 1637px;} #contatos{height: 1617px;} #scro{height: 1502px;}}
    @media ( max-height: 1666px){#chat{height: 1491px;} #card{height: 1636px;} #contatos{height: 1616px;} #scro{height: 1501px;}}
    @media ( max-height: 1665px){#chat{height: 1490px;} #card{height: 1635px;} #contatos{height: 1615px;} #scro{height: 1500px;}}
    @media ( max-height: 1664px){#chat{height: 1489px;} #card{height: 1634px;} #contatos{height: 1614px;} #scro{height: 1499px;}}
    @media ( max-height: 1663px){#chat{height: 1488px;} #card{height: 1633px;} #contatos{height: 1613px;} #scro{height: 1498px;}}
    @media ( max-height: 1662px){#chat{height: 1487px;} #card{height: 1632px;} #contatos{height: 1612px;} #scro{height: 1497px;}}
    @media ( max-height: 1661px){#chat{height: 1486px;} #card{height: 1631px;} #contatos{height: 1611px;} #scro{height: 1496px;}}
    @media ( max-height: 1660px){#chat{height: 1485px;} #card{height: 1630px;} #contatos{height: 1610px;} #scro{height: 1495px;}}
    @media ( max-height: 1659px){#chat{height: 1484px;} #card{height: 1629px;} #contatos{height: 1609px;} #scro{height: 1494px;}}
    @media ( max-height: 1658px){#chat{height: 1483px;} #card{height: 1628px;} #contatos{height: 1608px;} #scro{height: 1493px;}}
    @media ( max-height: 1657px){#chat{height: 1482px;} #card{height: 1627px;} #contatos{height: 1607px;} #scro{height: 1492px;}}
    @media ( max-height: 1656px){#chat{height: 1481px;} #card{height: 1626px;} #contatos{height: 1606px;} #scro{height: 1491px;}}
    @media ( max-height: 1655px){#chat{height: 1480px;} #card{height: 1625px;} #contatos{height: 1605px;} #scro{height: 1490px;}}
    @media ( max-height: 1654px){#chat{height: 1479px;} #card{height: 1624px;} #contatos{height: 1604px;} #scro{height: 1489px;}}
    @media ( max-height: 1653px){#chat{height: 1478px;} #card{height: 1623px;} #contatos{height: 1603px;} #scro{height: 1488px;}}
    @media ( max-height: 1652px){#chat{height: 1477px;} #card{height: 1622px;} #contatos{height: 1602px;} #scro{height: 1487px;}}
    @media ( max-height: 1651px){#chat{height: 1476px;} #card{height: 1621px;} #contatos{height: 1601px;} #scro{height: 1486px;}}
    @media ( max-height: 1650px){#chat{height: 1475px;} #card{height: 1620px;} #contatos{height: 1600px;} #scro{height: 1485px;}}
    @media ( max-height: 1649px){#chat{height: 1474px;} #card{height: 1619px;} #contatos{height: 1599px;} #scro{height: 1484px;}}
    @media ( max-height: 1648px){#chat{height: 1473px;} #card{height: 1618px;} #contatos{height: 1598px;} #scro{height: 1483px;}}
    @media ( max-height: 1647px){#chat{height: 1472px;} #card{height: 1617px;} #contatos{height: 1597px;} #scro{height: 1482px;}}
    @media ( max-height: 1646px){#chat{height: 1471px;} #card{height: 1616px;} #contatos{height: 1596px;} #scro{height: 1481px;}}
    @media ( max-height: 1645px){#chat{height: 1470px;} #card{height: 1615px;} #contatos{height: 1595px;} #scro{height: 1480px;}}
    @media ( max-height: 1644px){#chat{height: 1469px;} #card{height: 1614px;} #contatos{height: 1594px;} #scro{height: 1479px;}}
    @media ( max-height: 1643px){#chat{height: 1468px;} #card{height: 1613px;} #contatos{height: 1593px;} #scro{height: 1478px;}}
    @media ( max-height: 1642px){#chat{height: 1467px;} #card{height: 1612px;} #contatos{height: 1592px;} #scro{height: 1477px;}}
    @media ( max-height: 1641px){#chat{height: 1466px;} #card{height: 1611px;} #contatos{height: 1591px;} #scro{height: 1476px;}}
    @media ( max-height: 1640px){#chat{height: 1465px;} #card{height: 1610px;} #contatos{height: 1590px;} #scro{height: 1475px;}}
    @media ( max-height: 1639px){#chat{height: 1464px;} #card{height: 1609px;} #contatos{height: 1589px;} #scro{height: 1474px;}}
    @media ( max-height: 1638px){#chat{height: 1463px;} #card{height: 1608px;} #contatos{height: 1588px;} #scro{height: 1473px;}}
    @media ( max-height: 1637px){#chat{height: 1462px;} #card{height: 1607px;} #contatos{height: 1587px;} #scro{height: 1472px;}}
    @media ( max-height: 1636px){#chat{height: 1461px;} #card{height: 1606px;} #contatos{height: 1586px;} #scro{height: 1471px;}}
    @media ( max-height: 1635px){#chat{height: 1460px;} #card{height: 1605px;} #contatos{height: 1585px;} #scro{height: 1470px;}}
    @media ( max-height: 1634px){#chat{height: 1459px;} #card{height: 1604px;} #contatos{height: 1584px;} #scro{height: 1469px;}}
    @media ( max-height: 1633px){#chat{height: 1458px;} #card{height: 1603px;} #contatos{height: 1583px;} #scro{height: 1468px;}}
    @media ( max-height: 1632px){#chat{height: 1457px;} #card{height: 1602px;} #contatos{height: 1582px;} #scro{height: 1467px;}}
    @media ( max-height: 1631px){#chat{height: 1456px;} #card{height: 1601px;} #contatos{height: 1581px;} #scro{height: 1466px;}}
    @media ( max-height: 1630px){#chat{height: 1455px;} #card{height: 1600px;} #contatos{height: 1580px;} #scro{height: 1465px;}}
    @media ( max-height: 1629px){#chat{height: 1454px;} #card{height: 1599px;} #contatos{height: 1579px;} #scro{height: 1464px;}}
    @media ( max-height: 1628px){#chat{height: 1453px;} #card{height: 1598px;} #contatos{height: 1578px;} #scro{height: 1463px;}}
    @media ( max-height: 1627px){#chat{height: 1452px;} #card{height: 1597px;} #contatos{height: 1577px;} #scro{height: 1462px;}}
    @media ( max-height: 1626px){#chat{height: 1451px;} #card{height: 1596px;} #contatos{height: 1576px;} #scro{height: 1461px;}}
    @media ( max-height: 1625px){#chat{height: 1450px;} #card{height: 1595px;} #contatos{height: 1575px;} #scro{height: 1460px;}}
    @media ( max-height: 1624px){#chat{height: 1449px;} #card{height: 1594px;} #contatos{height: 1574px;} #scro{height: 1459px;}}
    @media ( max-height: 1623px){#chat{height: 1448px;} #card{height: 1593px;} #contatos{height: 1573px;} #scro{height: 1458px;}}
    @media ( max-height: 1622px){#chat{height: 1447px;} #card{height: 1592px;} #contatos{height: 1572px;} #scro{height: 1457px;}}
    @media ( max-height: 1621px){#chat{height: 1446px;} #card{height: 1591px;} #contatos{height: 1571px;} #scro{height: 1456px;}}
    @media ( max-height: 1620px){#chat{height: 1445px;} #card{height: 1590px;} #contatos{height: 1570px;} #scro{height: 1455px;}}
    @media ( max-height: 1619px){#chat{height: 1444px;} #card{height: 1589px;} #contatos{height: 1569px;} #scro{height: 1454px;}}
    @media ( max-height: 1618px){#chat{height: 1443px;} #card{height: 1588px;} #contatos{height: 1568px;} #scro{height: 1453px;}}
    @media ( max-height: 1617px){#chat{height: 1442px;} #card{height: 1587px;} #contatos{height: 1567px;} #scro{height: 1452px;}}
    @media ( max-height: 1616px){#chat{height: 1441px;} #card{height: 1586px;} #contatos{height: 1566px;} #scro{height: 1451px;}}
    @media ( max-height: 1615px){#chat{height: 1440px;} #card{height: 1585px;} #contatos{height: 1565px;} #scro{height: 1450px;}}
    @media ( max-height: 1614px){#chat{height: 1439px;} #card{height: 1584px;} #contatos{height: 1564px;} #scro{height: 1449px;}}
    @media ( max-height: 1613px){#chat{height: 1438px;} #card{height: 1583px;} #contatos{height: 1563px;} #scro{height: 1448px;}}
    @media ( max-height: 1612px){#chat{height: 1437px;} #card{height: 1582px;} #contatos{height: 1562px;} #scro{height: 1447px;}}
    @media ( max-height: 1611px){#chat{height: 1436px;} #card{height: 1581px;} #contatos{height: 1561px;} #scro{height: 1446px;}}
    @media ( max-height: 1610px){#chat{height: 1435px;} #card{height: 1580px;} #contatos{height: 1560px;} #scro{height: 1445px;}}
    @media ( max-height: 1609px){#chat{height: 1434px;} #card{height: 1579px;} #contatos{height: 1559px;} #scro{height: 1444px;}}
    @media ( max-height: 1608px){#chat{height: 1433px;} #card{height: 1578px;} #contatos{height: 1558px;} #scro{height: 1443px;}}
    @media ( max-height: 1607px){#chat{height: 1432px;} #card{height: 1577px;} #contatos{height: 1557px;} #scro{height: 1442px;}}
    @media ( max-height: 1606px){#chat{height: 1431px;} #card{height: 1576px;} #contatos{height: 1556px;} #scro{height: 1441px;}}
    @media ( max-height: 1605px){#chat{height: 1430px;} #card{height: 1575px;} #contatos{height: 1555px;} #scro{height: 1440px;}}
    @media ( max-height: 1604px){#chat{height: 1429px;} #card{height: 1574px;} #contatos{height: 1554px;} #scro{height: 1439px;}}
    @media ( max-height: 1603px){#chat{height: 1428px;} #card{height: 1573px;} #contatos{height: 1553px;} #scro{height: 1438px;}}
    @media ( max-height: 1602px){#chat{height: 1427px;} #card{height: 1572px;} #contatos{height: 1552px;} #scro{height: 1437px;}}
    @media ( max-height: 1601px){#chat{height: 1426px;} #card{height: 1571px;} #contatos{height: 1551px;} #scro{height: 1436px;}}
    @media ( max-height: 1600px){#chat{height: 1425px;} #card{height: 1570px;} #contatos{height: 1550px;} #scro{height: 1435px;}}
    @media ( max-height: 1599px){#chat{height: 1424px;} #card{height: 1569px;} #contatos{height: 1549px;} #scro{height: 1434px;}}
    @media ( max-height: 1598px){#chat{height: 1423px;} #card{height: 1568px;} #contatos{height: 1548px;} #scro{height: 1433px;}}
    @media ( max-height: 1597px){#chat{height: 1422px;} #card{height: 1567px;} #contatos{height: 1547px;} #scro{height: 1432px;}}
    @media ( max-height: 1596px){#chat{height: 1421px;} #card{height: 1566px;} #contatos{height: 1546px;} #scro{height: 1431px;}}
    @media ( max-height: 1595px){#chat{height: 1420px;} #card{height: 1565px;} #contatos{height: 1545px;} #scro{height: 1430px;}}
    @media ( max-height: 1594px){#chat{height: 1419px;} #card{height: 1564px;} #contatos{height: 1544px;} #scro{height: 1429px;}}
    @media ( max-height: 1593px){#chat{height: 1418px;} #card{height: 1563px;} #contatos{height: 1543px;} #scro{height: 1428px;}}
    @media ( max-height: 1592px){#chat{height: 1417px;} #card{height: 1562px;} #contatos{height: 1542px;} #scro{height: 1427px;}}
    @media ( max-height: 1591px){#chat{height: 1416px;} #card{height: 1561px;} #contatos{height: 1541px;} #scro{height: 1426px;}}
    @media ( max-height: 1590px){#chat{height: 1415px;} #card{height: 1560px;} #contatos{height: 1540px;} #scro{height: 1425px;}}
    @media ( max-height: 1589px){#chat{height: 1414px;} #card{height: 1559px;} #contatos{height: 1539px;} #scro{height: 1424px;}}
    @media ( max-height: 1588px){#chat{height: 1413px;} #card{height: 1558px;} #contatos{height: 1538px;} #scro{height: 1423px;}}
    @media ( max-height: 1587px){#chat{height: 1412px;} #card{height: 1557px;} #contatos{height: 1537px;} #scro{height: 1422px;}}
    @media ( max-height: 1586px){#chat{height: 1411px;} #card{height: 1556px;} #contatos{height: 1536px;} #scro{height: 1421px;}}
    @media ( max-height: 1585px){#chat{height: 1410px;} #card{height: 1555px;} #contatos{height: 1535px;} #scro{height: 1420px;}}
    @media ( max-height: 1584px){#chat{height: 1409px;} #card{height: 1554px;} #contatos{height: 1534px;} #scro{height: 1419px;}}
    @media ( max-height: 1583px){#chat{height: 1408px;} #card{height: 1553px;} #contatos{height: 1533px;} #scro{height: 1418px;}}
    @media ( max-height: 1582px){#chat{height: 1407px;} #card{height: 1552px;} #contatos{height: 1532px;} #scro{height: 1417px;}}
    @media ( max-height: 1581px){#chat{height: 1406px;} #card{height: 1551px;} #contatos{height: 1531px;} #scro{height: 1416px;}}
    @media ( max-height: 1580px){#chat{height: 1405px;} #card{height: 1550px;} #contatos{height: 1530px;} #scro{height: 1415px;}}
    @media ( max-height: 1579px){#chat{height: 1404px;} #card{height: 1549px;} #contatos{height: 1529px;} #scro{height: 1414px;}}
    @media ( max-height: 1578px){#chat{height: 1403px;} #card{height: 1548px;} #contatos{height: 1528px;} #scro{height: 1413px;}}
    @media ( max-height: 1577px){#chat{height: 1402px;} #card{height: 1547px;} #contatos{height: 1527px;} #scro{height: 1412px;}}
    @media ( max-height: 1576px){#chat{height: 1401px;} #card{height: 1546px;} #contatos{height: 1526px;} #scro{height: 1411px;}}
    @media ( max-height: 1575px){#chat{height: 1400px;} #card{height: 1545px;} #contatos{height: 1525px;} #scro{height: 1410px;}}
    @media ( max-height: 1574px){#chat{height: 1399px;} #card{height: 1544px;} #contatos{height: 1524px;} #scro{height: 1409px;}}
    @media ( max-height: 1573px){#chat{height: 1398px;} #card{height: 1543px;} #contatos{height: 1523px;} #scro{height: 1408px;}}
    @media ( max-height: 1572px){#chat{height: 1397px;} #card{height: 1542px;} #contatos{height: 1522px;} #scro{height: 1407px;}}
    @media ( max-height: 1571px){#chat{height: 1396px;} #card{height: 1541px;} #contatos{height: 1521px;} #scro{height: 1406px;}}
    @media ( max-height: 1570px){#chat{height: 1395px;} #card{height: 1540px;} #contatos{height: 1520px;} #scro{height: 1405px;}}
    @media ( max-height: 1569px){#chat{height: 1394px;} #card{height: 1539px;} #contatos{height: 1519px;} #scro{height: 1404px;}}
    @media ( max-height: 1568px){#chat{height: 1393px;} #card{height: 1538px;} #contatos{height: 1518px;} #scro{height: 1403px;}}
    @media ( max-height: 1567px){#chat{height: 1392px;} #card{height: 1537px;} #contatos{height: 1517px;} #scro{height: 1402px;}}
    @media ( max-height: 1566px){#chat{height: 1391px;} #card{height: 1536px;} #contatos{height: 1516px;} #scro{height: 1401px;}}
    @media ( max-height: 1565px){#chat{height: 1390px;} #card{height: 1535px;} #contatos{height: 1515px;} #scro{height: 1400px;}}
    @media ( max-height: 1564px){#chat{height: 1389px;} #card{height: 1534px;} #contatos{height: 1514px;} #scro{height: 1399px;}}
    @media ( max-height: 1563px){#chat{height: 1388px;} #card{height: 1533px;} #contatos{height: 1513px;} #scro{height: 1398px;}}
    @media ( max-height: 1562px){#chat{height: 1387px;} #card{height: 1532px;} #contatos{height: 1512px;} #scro{height: 1397px;}}
    @media ( max-height: 1561px){#chat{height: 1386px;} #card{height: 1531px;} #contatos{height: 1511px;} #scro{height: 1396px;}}
    @media ( max-height: 1560px){#chat{height: 1385px;} #card{height: 1530px;} #contatos{height: 1510px;} #scro{height: 1395px;}}
    @media ( max-height: 1559px){#chat{height: 1384px;} #card{height: 1529px;} #contatos{height: 1509px;} #scro{height: 1394px;}}
    @media ( max-height: 1558px){#chat{height: 1383px;} #card{height: 1528px;} #contatos{height: 1508px;} #scro{height: 1393px;}}
    @media ( max-height: 1557px){#chat{height: 1382px;} #card{height: 1527px;} #contatos{height: 1507px;} #scro{height: 1392px;}}
    @media ( max-height: 1556px){#chat{height: 1381px;} #card{height: 1526px;} #contatos{height: 1506px;} #scro{height: 1391px;}}
    @media ( max-height: 1555px){#chat{height: 1380px;} #card{height: 1525px;} #contatos{height: 1505px;} #scro{height: 1390px;}}
    @media ( max-height: 1554px){#chat{height: 1379px;} #card{height: 1524px;} #contatos{height: 1504px;} #scro{height: 1389px;}}
    @media ( max-height: 1553px){#chat{height: 1378px;} #card{height: 1523px;} #contatos{height: 1503px;} #scro{height: 1388px;}}
    @media ( max-height: 1552px){#chat{height: 1377px;} #card{height: 1522px;} #contatos{height: 1502px;} #scro{height: 1387px;}}
    @media ( max-height: 1551px){#chat{height: 1376px;} #card{height: 1521px;} #contatos{height: 1501px;} #scro{height: 1386px;}}
    @media ( max-height: 1550px){#chat{height: 1375px;} #card{height: 1520px;} #contatos{height: 1500px;} #scro{height: 1385px;}}
    @media ( max-height: 1549px){#chat{height: 1374px;} #card{height: 1519px;} #contatos{height: 1499px;} #scro{height: 1384px;}}
    @media ( max-height: 1548px){#chat{height: 1373px;} #card{height: 1518px;} #contatos{height: 1498px;} #scro{height: 1383px;}}
    @media ( max-height: 1547px){#chat{height: 1372px;} #card{height: 1517px;} #contatos{height: 1497px;} #scro{height: 1382px;}}
    @media ( max-height: 1546px){#chat{height: 1371px;} #card{height: 1516px;} #contatos{height: 1496px;} #scro{height: 1381px;}}
    @media ( max-height: 1545px){#chat{height: 1370px;} #card{height: 1515px;} #contatos{height: 1495px;} #scro{height: 1380px;}}
    @media ( max-height: 1544px){#chat{height: 1369px;} #card{height: 1514px;} #contatos{height: 1494px;} #scro{height: 1379px;}}
    @media ( max-height: 1543px){#chat{height: 1368px;} #card{height: 1513px;} #contatos{height: 1493px;} #scro{height: 1378px;}}
    @media ( max-height: 1542px){#chat{height: 1367px;} #card{height: 1512px;} #contatos{height: 1492px;} #scro{height: 1377px;}}
    @media ( max-height: 1541px){#chat{height: 1366px;} #card{height: 1511px;} #contatos{height: 1491px;} #scro{height: 1376px;}}
    @media ( max-height: 1540px){#chat{height: 1365px;} #card{height: 1510px;} #contatos{height: 1490px;} #scro{height: 1375px;}}
    @media ( max-height: 1539px){#chat{height: 1364px;} #card{height: 1509px;} #contatos{height: 1489px;} #scro{height: 1374px;}}
    @media ( max-height: 1538px){#chat{height: 1363px;} #card{height: 1508px;} #contatos{height: 1488px;} #scro{height: 1373px;}}
    @media ( max-height: 1537px){#chat{height: 1362px;} #card{height: 1507px;} #contatos{height: 1487px;} #scro{height: 1372px;}}
    @media ( max-height: 1536px){#chat{height: 1361px;} #card{height: 1506px;} #contatos{height: 1486px;} #scro{height: 1371px;}}
    @media ( max-height: 1535px){#chat{height: 1360px;} #card{height: 1505px;} #contatos{height: 1485px;} #scro{height: 1370px;}}
    @media ( max-height: 1534px){#chat{height: 1359px;} #card{height: 1504px;} #contatos{height: 1484px;} #scro{height: 1369px;}}
    @media ( max-height: 1533px){#chat{height: 1358px;} #card{height: 1503px;} #contatos{height: 1483px;} #scro{height: 1368px;}}
    @media ( max-height: 1532px){#chat{height: 1357px;} #card{height: 1502px;} #contatos{height: 1482px;} #scro{height: 1367px;}}
    @media ( max-height: 1531px){#chat{height: 1356px;} #card{height: 1501px;} #contatos{height: 1481px;} #scro{height: 1366px;}}
    @media ( max-height: 1530px){#chat{height: 1355px;} #card{height: 1500px;} #contatos{height: 1480px;} #scro{height: 1365px;}}
    @media ( max-height: 1529px){#chat{height: 1354px;} #card{height: 1499px;} #contatos{height: 1479px;} #scro{height: 1364px;}}
    @media ( max-height: 1528px){#chat{height: 1353px;} #card{height: 1498px;} #contatos{height: 1478px;} #scro{height: 1363px;}}
    @media ( max-height: 1527px){#chat{height: 1352px;} #card{height: 1497px;} #contatos{height: 1477px;} #scro{height: 1362px;}}
    @media ( max-height: 1526px){#chat{height: 1351px;} #card{height: 1496px;} #contatos{height: 1476px;} #scro{height: 1361px;}}
    @media ( max-height: 1525px){#chat{height: 1350px;} #card{height: 1495px;} #contatos{height: 1475px;} #scro{height: 1360px;}}
    @media ( max-height: 1524px){#chat{height: 1349px;} #card{height: 1494px;} #contatos{height: 1474px;} #scro{height: 1359px;}}
    @media ( max-height: 1523px){#chat{height: 1348px;} #card{height: 1493px;} #contatos{height: 1473px;} #scro{height: 1358px;}}
    @media ( max-height: 1522px){#chat{height: 1347px;} #card{height: 1492px;} #contatos{height: 1472px;} #scro{height: 1357px;}}
    @media ( max-height: 1521px){#chat{height: 1346px;} #card{height: 1491px;} #contatos{height: 1471px;} #scro{height: 1356px;}}
    @media ( max-height: 1520px){#chat{height: 1345px;} #card{height: 1490px;} #contatos{height: 1470px;} #scro{height: 1355px;}}
    @media ( max-height: 1519px){#chat{height: 1344px;} #card{height: 1489px;} #contatos{height: 1469px;} #scro{height: 1354px;}}
    @media ( max-height: 1518px){#chat{height: 1343px;} #card{height: 1488px;} #contatos{height: 1468px;} #scro{height: 1353px;}}
    @media ( max-height: 1517px){#chat{height: 1342px;} #card{height: 1487px;} #contatos{height: 1467px;} #scro{height: 1352px;}}
    @media ( max-height: 1516px){#chat{height: 1341px;} #card{height: 1486px;} #contatos{height: 1466px;} #scro{height: 1351px;}}
    @media ( max-height: 1515px){#chat{height: 1340px;} #card{height: 1485px;} #contatos{height: 1465px;} #scro{height: 1350px;}}
    @media ( max-height: 1514px){#chat{height: 1339px;} #card{height: 1484px;} #contatos{height: 1464px;} #scro{height: 1349px;}}
    @media ( max-height: 1513px){#chat{height: 1338px;} #card{height: 1483px;} #contatos{height: 1463px;} #scro{height: 1348px;}}
    @media ( max-height: 1512px){#chat{height: 1337px;} #card{height: 1482px;} #contatos{height: 1462px;} #scro{height: 1347px;}}
    @media ( max-height: 1511px){#chat{height: 1336px;} #card{height: 1481px;} #contatos{height: 1461px;} #scro{height: 1346px;}}
    @media ( max-height: 1510px){#chat{height: 1335px;} #card{height: 1480px;} #contatos{height: 1460px;} #scro{height: 1345px;}}
    @media ( max-height: 1509px){#chat{height: 1334px;} #card{height: 1479px;} #contatos{height: 1459px;} #scro{height: 1344px;}}
    @media ( max-height: 1508px){#chat{height: 1333px;} #card{height: 1478px;} #contatos{height: 1458px;} #scro{height: 1343px;}}
    @media ( max-height: 1507px){#chat{height: 1332px;} #card{height: 1477px;} #contatos{height: 1457px;} #scro{height: 1342px;}}
    @media ( max-height: 1506px){#chat{height: 1331px;} #card{height: 1476px;} #contatos{height: 1456px;} #scro{height: 1341px;}}
    @media ( max-height: 1505px){#chat{height: 1330px;} #card{height: 1475px;} #contatos{height: 1455px;} #scro{height: 1340px;}}
    @media ( max-height: 1504px){#chat{height: 1329px;} #card{height: 1474px;} #contatos{height: 1454px;} #scro{height: 1339px;}}
    @media ( max-height: 1503px){#chat{height: 1328px;} #card{height: 1473px;} #contatos{height: 1453px;} #scro{height: 1338px;}}
    @media ( max-height: 1502px){#chat{height: 1327px;} #card{height: 1472px;} #contatos{height: 1452px;} #scro{height: 1337px;}}
    @media ( max-height: 1501px){#chat{height: 1326px;} #card{height: 1471px;} #contatos{height: 1451px;} #scro{height: 1336px;}}
    @media ( max-height: 1500px){#chat{height: 1325px;} #card{height: 1470px;} #contatos{height: 1450px;} #scro{height: 1335px;}}
    @media ( max-height: 1499px){#chat{height: 1324px;} #card{height: 1469px;} #contatos{height: 1449px;} #scro{height: 1334px;}}
    @media ( max-height: 1498px){#chat{height: 1323px;} #card{height: 1468px;} #contatos{height: 1448px;} #scro{height: 1333px;}}
    @media ( max-height: 1497px){#chat{height: 1322px;} #card{height: 1467px;} #contatos{height: 1447px;} #scro{height: 1332px;}}
    @media ( max-height: 1496px){#chat{height: 1321px;} #card{height: 1466px;} #contatos{height: 1446px;} #scro{height: 1331px;}}
    @media ( max-height: 1495px){#chat{height: 1320px;} #card{height: 1465px;} #contatos{height: 1445px;} #scro{height: 1330px;}}
    @media ( max-height: 1494px){#chat{height: 1319px;} #card{height: 1464px;} #contatos{height: 1444px;} #scro{height: 1329px;}}
    @media ( max-height: 1493px){#chat{height: 1318px;} #card{height: 1463px;} #contatos{height: 1443px;} #scro{height: 1328px;}}
    @media ( max-height: 1492px){#chat{height: 1317px;} #card{height: 1462px;} #contatos{height: 1442px;} #scro{height: 1327px;}}
    @media ( max-height: 1491px){#chat{height: 1316px;} #card{height: 1461px;} #contatos{height: 1441px;} #scro{height: 1326px;}}
    @media ( max-height: 1490px){#chat{height: 1315px;} #card{height: 1460px;} #contatos{height: 1440px;} #scro{height: 1325px;}}
    @media ( max-height: 1489px){#chat{height: 1314px;} #card{height: 1459px;} #contatos{height: 1439px;} #scro{height: 1324px;}}
    @media ( max-height: 1488px){#chat{height: 1313px;} #card{height: 1458px;} #contatos{height: 1438px;} #scro{height: 1323px;}}
    @media ( max-height: 1487px){#chat{height: 1312px;} #card{height: 1457px;} #contatos{height: 1437px;} #scro{height: 1322px;}}
    @media ( max-height: 1486px){#chat{height: 1311px;} #card{height: 1456px;} #contatos{height: 1436px;} #scro{height: 1321px;}}
    @media ( max-height: 1485px){#chat{height: 1310px;} #card{height: 1455px;} #contatos{height: 1435px;} #scro{height: 1320px;}}
    @media ( max-height: 1484px){#chat{height: 1309px;} #card{height: 1454px;} #contatos{height: 1434px;} #scro{height: 1319px;}}
    @media ( max-height: 1483px){#chat{height: 1308px;} #card{height: 1453px;} #contatos{height: 1433px;} #scro{height: 1318px;}}
    @media ( max-height: 1482px){#chat{height: 1307px;} #card{height: 1452px;} #contatos{height: 1432px;} #scro{height: 1317px;}}
    @media ( max-height: 1481px){#chat{height: 1306px;} #card{height: 1451px;} #contatos{height: 1431px;} #scro{height: 1316px;}}
    @media ( max-height: 1480px){#chat{height: 1305px;} #card{height: 1450px;} #contatos{height: 1430px;} #scro{height: 1315px;}}
    @media ( max-height: 1479px){#chat{height: 1304px;} #card{height: 1449px;} #contatos{height: 1429px;} #scro{height: 1314px;}}
    @media ( max-height: 1478px){#chat{height: 1303px;} #card{height: 1448px;} #contatos{height: 1428px;} #scro{height: 1313px;}}
    @media ( max-height: 1477px){#chat{height: 1302px;} #card{height: 1447px;} #contatos{height: 1427px;} #scro{height: 1312px;}}
    @media ( max-height: 1476px){#chat{height: 1301px;} #card{height: 1446px;} #contatos{height: 1426px;} #scro{height: 1311px;}}
    @media ( max-height: 1475px){#chat{height: 1300px;} #card{height: 1445px;} #contatos{height: 1425px;} #scro{height: 1310px;}}
    @media ( max-height: 1474px){#chat{height: 1299px;} #card{height: 1444px;} #contatos{height: 1424px;} #scro{height: 1309px;}}
    @media ( max-height: 1473px){#chat{height: 1298px;} #card{height: 1443px;} #contatos{height: 1423px;} #scro{height: 1308px;}}
    @media ( max-height: 1472px){#chat{height: 1297px;} #card{height: 1442px;} #contatos{height: 1422px;} #scro{height: 1307px;}}
    @media ( max-height: 1471px){#chat{height: 1296px;} #card{height: 1441px;} #contatos{height: 1421px;} #scro{height: 1306px;}}
    @media ( max-height: 1470px){#chat{height: 1295px;} #card{height: 1440px;} #contatos{height: 1420px;} #scro{height: 1305px;}}
    @media ( max-height: 1469px){#chat{height: 1294px;} #card{height: 1439px;} #contatos{height: 1419px;} #scro{height: 1304px;}}
    @media ( max-height: 1468px){#chat{height: 1293px;} #card{height: 1438px;} #contatos{height: 1418px;} #scro{height: 1303px;}}
    @media ( max-height: 1467px){#chat{height: 1292px;} #card{height: 1437px;} #contatos{height: 1417px;} #scro{height: 1302px;}}
    @media ( max-height: 1466px){#chat{height: 1291px;} #card{height: 1436px;} #contatos{height: 1416px;} #scro{height: 1301px;}}
    @media ( max-height: 1465px){#chat{height: 1290px;} #card{height: 1435px;} #contatos{height: 1415px;} #scro{height: 1300px;}}
    @media ( max-height: 1464px){#chat{height: 1289px;} #card{height: 1434px;} #contatos{height: 1414px;} #scro{height: 1299px;}}
    @media ( max-height: 1463px){#chat{height: 1288px;} #card{height: 1433px;} #contatos{height: 1413px;} #scro{height: 1298px;}}
    @media ( max-height: 1462px){#chat{height: 1287px;} #card{height: 1432px;} #contatos{height: 1412px;} #scro{height: 1297px;}}
    @media ( max-height: 1461px){#chat{height: 1286px;} #card{height: 1431px;} #contatos{height: 1411px;} #scro{height: 1296px;}}
    @media ( max-height: 1460px){#chat{height: 1285px;} #card{height: 1430px;} #contatos{height: 1410px;} #scro{height: 1295px;}}
    @media ( max-height: 1459px){#chat{height: 1284px;} #card{height: 1429px;} #contatos{height: 1409px;} #scro{height: 1294px;}}
    @media ( max-height: 1458px){#chat{height: 1283px;} #card{height: 1428px;} #contatos{height: 1408px;} #scro{height: 1293px;}}
    @media ( max-height: 1457px){#chat{height: 1282px;} #card{height: 1427px;} #contatos{height: 1407px;} #scro{height: 1292px;}}
    @media ( max-height: 1456px){#chat{height: 1281px;} #card{height: 1426px;} #contatos{height: 1406px;} #scro{height: 1291px;}}
    @media ( max-height: 1455px){#chat{height: 1280px;} #card{height: 1425px;} #contatos{height: 1405px;} #scro{height: 1290px;}}
    @media ( max-height: 1454px){#chat{height: 1279px;} #card{height: 1424px;} #contatos{height: 1404px;} #scro{height: 1289px;}}
    @media ( max-height: 1453px){#chat{height: 1278px;} #card{height: 1423px;} #contatos{height: 1403px;} #scro{height: 1288px;}}
    @media ( max-height: 1452px){#chat{height: 1277px;} #card{height: 1422px;} #contatos{height: 1402px;} #scro{height: 1287px;}}
    @media ( max-height: 1451px){#chat{height: 1276px;} #card{height: 1421px;} #contatos{height: 1401px;} #scro{height: 1286px;}}
    @media ( max-height: 1450px){#chat{height: 1275px;} #card{height: 1420px;} #contatos{height: 1400px;} #scro{height: 1285px;}}
    @media ( max-height: 1449px){#chat{height: 1274px;} #card{height: 1419px;} #contatos{height: 1399px;} #scro{height: 1284px;}}
    @media ( max-height: 1448px){#chat{height: 1273px;} #card{height: 1418px;} #contatos{height: 1398px;} #scro{height: 1283px;}}
    @media ( max-height: 1447px){#chat{height: 1272px;} #card{height: 1417px;} #contatos{height: 1397px;} #scro{height: 1282px;}}
    @media ( max-height: 1446px){#chat{height: 1271px;} #card{height: 1416px;} #contatos{height: 1396px;} #scro{height: 1281px;}}
    @media ( max-height: 1445px){#chat{height: 1270px;} #card{height: 1415px;} #contatos{height: 1395px;} #scro{height: 1280px;}}
    @media ( max-height: 1444px){#chat{height: 1269px;} #card{height: 1414px;} #contatos{height: 1394px;} #scro{height: 1279px;}}
    @media ( max-height: 1443px){#chat{height: 1268px;} #card{height: 1413px;} #contatos{height: 1393px;} #scro{height: 1278px;}}
    @media ( max-height: 1442px){#chat{height: 1267px;} #card{height: 1412px;} #contatos{height: 1392px;} #scro{height: 1277px;}}
    @media ( max-height: 1441px){#chat{height: 1266px;} #card{height: 1411px;} #contatos{height: 1391px;} #scro{height: 1276px;}}
    @media ( max-height: 1440px){#chat{height: 1265px;} #card{height: 1410px;} #contatos{height: 1390px;} #scro{height: 1275px;}}
    @media ( max-height: 1439px){#chat{height: 1264px;} #card{height: 1409px;} #contatos{height: 1389px;} #scro{height: 1274px;}}
    @media ( max-height: 1438px){#chat{height: 1263px;} #card{height: 1408px;} #contatos{height: 1388px;} #scro{height: 1273px;}}
    @media ( max-height: 1437px){#chat{height: 1262px;} #card{height: 1407px;} #contatos{height: 1387px;} #scro{height: 1272px;}}
    @media ( max-height: 1436px){#chat{height: 1261px;} #card{height: 1406px;} #contatos{height: 1386px;} #scro{height: 1271px;}}
    @media ( max-height: 1435px){#chat{height: 1260px;} #card{height: 1405px;} #contatos{height: 1385px;} #scro{height: 1270px;}}
    @media ( max-height: 1434px){#chat{height: 1259px;} #card{height: 1404px;} #contatos{height: 1384px;} #scro{height: 1269px;}}
    @media ( max-height: 1433px){#chat{height: 1258px;} #card{height: 1403px;} #contatos{height: 1383px;} #scro{height: 1268px;}}
    @media ( max-height: 1432px){#chat{height: 1257px;} #card{height: 1402px;} #contatos{height: 1382px;} #scro{height: 1267px;}}
    @media ( max-height: 1431px){#chat{height: 1256px;} #card{height: 1401px;} #contatos{height: 1381px;} #scro{height: 1266px;}}
    @media ( max-height: 1430px){#chat{height: 1255px;} #card{height: 1400px;} #contatos{height: 1380px;} #scro{height: 1265px;}}
    @media ( max-height: 1429px){#chat{height: 1254px;} #card{height: 1399px;} #contatos{height: 1379px;} #scro{height: 1264px;}}
    @media ( max-height: 1428px){#chat{height: 1253px;} #card{height: 1398px;} #contatos{height: 1378px;} #scro{height: 1263px;}}
    @media ( max-height: 1427px){#chat{height: 1252px;} #card{height: 1397px;} #contatos{height: 1377px;} #scro{height: 1262px;}}
    @media ( max-height: 1426px){#chat{height: 1251px;} #card{height: 1396px;} #contatos{height: 1376px;} #scro{height: 1261px;}}
    @media ( max-height: 1425px){#chat{height: 1250px;} #card{height: 1395px;} #contatos{height: 1375px;} #scro{height: 1260px;}}
    @media ( max-height: 1424px){#chat{height: 1249px;} #card{height: 1394px;} #contatos{height: 1374px;} #scro{height: 1259px;}}
    @media ( max-height: 1423px){#chat{height: 1248px;} #card{height: 1393px;} #contatos{height: 1373px;} #scro{height: 1258px;}}
    @media ( max-height: 1422px){#chat{height: 1247px;} #card{height: 1392px;} #contatos{height: 1372px;} #scro{height: 1257px;}}
    @media ( max-height: 1421px){#chat{height: 1246px;} #card{height: 1391px;} #contatos{height: 1371px;} #scro{height: 1256px;}}
    @media ( max-height: 1420px){#chat{height: 1245px;} #card{height: 1390px;} #contatos{height: 1370px;} #scro{height: 1255px;}}
    @media ( max-height: 1419px){#chat{height: 1244px;} #card{height: 1389px;} #contatos{height: 1369px;} #scro{height: 1254px;}}
    @media ( max-height: 1418px){#chat{height: 1243px;} #card{height: 1388px;} #contatos{height: 1368px;} #scro{height: 1253px;}}
    @media ( max-height: 1417px){#chat{height: 1242px;} #card{height: 1387px;} #contatos{height: 1367px;} #scro{height: 1252px;}}
    @media ( max-height: 1416px){#chat{height: 1241px;} #card{height: 1386px;} #contatos{height: 1366px;} #scro{height: 1251px;}}
    @media ( max-height: 1415px){#chat{height: 1240px;} #card{height: 1385px;} #contatos{height: 1365px;} #scro{height: 1250px;}}
    @media ( max-height: 1414px){#chat{height: 1239px;} #card{height: 1384px;} #contatos{height: 1364px;} #scro{height: 1249px;}}
    @media ( max-height: 1413px){#chat{height: 1238px;} #card{height: 1383px;} #contatos{height: 1363px;} #scro{height: 1248px;}}
    @media ( max-height: 1412px){#chat{height: 1237px;} #card{height: 1382px;} #contatos{height: 1362px;} #scro{height: 1247px;}}
    @media ( max-height: 1411px){#chat{height: 1236px;} #card{height: 1381px;} #contatos{height: 1361px;} #scro{height: 1246px;}}
    @media ( max-height: 1410px){#chat{height: 1235px;} #card{height: 1380px;} #contatos{height: 1360px;} #scro{height: 1245px;}}
    @media ( max-height: 1409px){#chat{height: 1234px;} #card{height: 1379px;} #contatos{height: 1359px;} #scro{height: 1244px;}}
    @media ( max-height: 1408px){#chat{height: 1233px;} #card{height: 1378px;} #contatos{height: 1358px;} #scro{height: 1243px;}}
    @media ( max-height: 1407px){#chat{height: 1232px;} #card{height: 1377px;} #contatos{height: 1357px;} #scro{height: 1242px;}}
    @media ( max-height: 1406px){#chat{height: 1231px;} #card{height: 1376px;} #contatos{height: 1356px;} #scro{height: 1241px;}}
    @media ( max-height: 1405px){#chat{height: 1230px;} #card{height: 1375px;} #contatos{height: 1355px;} #scro{height: 1240px;}}
    @media ( max-height: 1404px){#chat{height: 1229px;} #card{height: 1374px;} #contatos{height: 1354px;} #scro{height: 1239px;}}
    @media ( max-height: 1403px){#chat{height: 1228px;} #card{height: 1373px;} #contatos{height: 1353px;} #scro{height: 1238px;}}
    @media ( max-height: 1402px){#chat{height: 1227px;} #card{height: 1372px;} #contatos{height: 1352px;} #scro{height: 1237px;}}
    @media ( max-height: 1401px){#chat{height: 1226px;} #card{height: 1371px;} #contatos{height: 1351px;} #scro{height: 1236px;}}
    @media ( max-height: 1400px){#chat{height: 1225px;} #card{height: 1370px;} #contatos{height: 1350px;} #scro{height: 1235px;}}
    @media ( max-height: 1399px){#chat{height: 1224px;} #card{height: 1369px;} #contatos{height: 1349px;} #scro{height: 1234px;}}
    @media ( max-height: 1398px){#chat{height: 1223px;} #card{height: 1368px;} #contatos{height: 1348px;} #scro{height: 1233px;}}
    @media ( max-height: 1397px){#chat{height: 1222px;} #card{height: 1367px;} #contatos{height: 1347px;} #scro{height: 1232px;}}
    @media ( max-height: 1396px){#chat{height: 1221px;} #card{height: 1366px;} #contatos{height: 1346px;} #scro{height: 1231px;}}
    @media ( max-height: 1395px){#chat{height: 1220px;} #card{height: 1365px;} #contatos{height: 1345px;} #scro{height: 1230px;}}
    @media ( max-height: 1394px){#chat{height: 1219px;} #card{height: 1364px;} #contatos{height: 1344px;} #scro{height: 1229px;}}
    @media ( max-height: 1393px){#chat{height: 1218px;} #card{height: 1363px;} #contatos{height: 1343px;} #scro{height: 1228px;}}
    @media ( max-height: 1392px){#chat{height: 1217px;} #card{height: 1362px;} #contatos{height: 1342px;} #scro{height: 1227px;}}
    @media ( max-height: 1391px){#chat{height: 1216px;} #card{height: 1361px;} #contatos{height: 1341px;} #scro{height: 1226px;}}
    @media ( max-height: 1390px){#chat{height: 1215px;} #card{height: 1360px;} #contatos{height: 1340px;} #scro{height: 1225px;}}
    @media ( max-height: 1389px){#chat{height: 1214px;} #card{height: 1359px;} #contatos{height: 1339px;} #scro{height: 1224px;}}
    @media ( max-height: 1388px){#chat{height: 1213px;} #card{height: 1358px;} #contatos{height: 1338px;} #scro{height: 1223px;}}
    @media ( max-height: 1387px){#chat{height: 1212px;} #card{height: 1357px;} #contatos{height: 1337px;} #scro{height: 1222px;}}
    @media ( max-height: 1386px){#chat{height: 1211px;} #card{height: 1356px;} #contatos{height: 1336px;} #scro{height: 1221px;}}
    @media ( max-height: 1385px){#chat{height: 1210px;} #card{height: 1355px;} #contatos{height: 1335px;} #scro{height: 1220px;}}
    @media ( max-height: 1384px){#chat{height: 1209px;} #card{height: 1354px;} #contatos{height: 1334px;} #scro{height: 1219px;}}
    @media ( max-height: 1383px){#chat{height: 1208px;} #card{height: 1353px;} #contatos{height: 1333px;} #scro{height: 1218px;}}
    @media ( max-height: 1382px){#chat{height: 1207px;} #card{height: 1352px;} #contatos{height: 1332px;} #scro{height: 1217px;}}
    @media ( max-height: 1381px){#chat{height: 1206px;} #card{height: 1351px;} #contatos{height: 1331px;} #scro{height: 1216px;}}
    @media ( max-height: 1380px){#chat{height: 1205px;} #card{height: 1350px;} #contatos{height: 1330px;} #scro{height: 1215px;}}
    @media ( max-height: 1379px){#chat{height: 1204px;} #card{height: 1349px;} #contatos{height: 1329px;} #scro{height: 1214px;}}
    @media ( max-height: 1378px){#chat{height: 1203px;} #card{height: 1348px;} #contatos{height: 1328px;} #scro{height: 1213px;}}
    @media ( max-height: 1377px){#chat{height: 1202px;} #card{height: 1347px;} #contatos{height: 1327px;} #scro{height: 1212px;}}
    @media ( max-height: 1376px){#chat{height: 1201px;} #card{height: 1346px;} #contatos{height: 1326px;} #scro{height: 1211px;}}
    @media ( max-height: 1375px){#chat{height: 1200px;} #card{height: 1345px;} #contatos{height: 1325px;} #scro{height: 1210px;}}
    @media ( max-height: 1374px){#chat{height: 1199px;} #card{height: 1344px;} #contatos{height: 1324px;} #scro{height: 1209px;}}
    @media ( max-height: 1373px){#chat{height: 1198px;} #card{height: 1343px;} #contatos{height: 1323px;} #scro{height: 1208px;}}
    @media ( max-height: 1372px){#chat{height: 1197px;} #card{height: 1342px;} #contatos{height: 1322px;} #scro{height: 1207px;}}
    @media ( max-height: 1371px){#chat{height: 1196px;} #card{height: 1341px;} #contatos{height: 1321px;} #scro{height: 1206px;}}
    @media ( max-height: 1370px){#chat{height: 1195px;} #card{height: 1340px;} #contatos{height: 1320px;} #scro{height: 1205px;}}
    @media ( max-height: 1369px){#chat{height: 1194px;} #card{height: 1339px;} #contatos{height: 1319px;} #scro{height: 1204px;}}
    @media ( max-height: 1368px){#chat{height: 1193px;} #card{height: 1338px;} #contatos{height: 1318px;} #scro{height: 1203px;}}
    @media ( max-height: 1367px){#chat{height: 1192px;} #card{height: 1337px;} #contatos{height: 1317px;} #scro{height: 1202px;}}
    @media ( max-height: 1366px){#chat{height: 1191px;} #card{height: 1336px;} #contatos{height: 1316px;} #scro{height: 1201px;}}
    @media ( max-height: 1365px){#chat{height: 1190px;} #card{height: 1335px;} #contatos{height: 1315px;} #scro{height: 1200px;}}
    @media ( max-height: 1364px){#chat{height: 1189px;} #card{height: 1334px;} #contatos{height: 1314px;} #scro{height: 1199px;}}
    @media ( max-height: 1363px){#chat{height: 1188px;} #card{height: 1333px;} #contatos{height: 1313px;} #scro{height: 1198px;}}
    @media ( max-height: 1362px){#chat{height: 1187px;} #card{height: 1332px;} #contatos{height: 1312px;} #scro{height: 1197px;}}
    @media ( max-height: 1361px){#chat{height: 1186px;} #card{height: 1331px;} #contatos{height: 1311px;} #scro{height: 1196px;}}
    @media ( max-height: 1360px){#chat{height: 1185px;} #card{height: 1330px;} #contatos{height: 1310px;} #scro{height: 1195px;}}
    @media ( max-height: 1359px){#chat{height: 1184px;} #card{height: 1329px;} #contatos{height: 1309px;} #scro{height: 1194px;}}
    @media ( max-height: 1358px){#chat{height: 1183px;} #card{height: 1328px;} #contatos{height: 1308px;} #scro{height: 1193px;}}
    @media ( max-height: 1357px){#chat{height: 1182px;} #card{height: 1327px;} #contatos{height: 1307px;} #scro{height: 1192px;}}
    @media ( max-height: 1356px){#chat{height: 1181px;} #card{height: 1326px;} #contatos{height: 1306px;} #scro{height: 1191px;}}
    @media ( max-height: 1355px){#chat{height: 1180px;} #card{height: 1325px;} #contatos{height: 1305px;} #scro{height: 1190px;}}
    @media ( max-height: 1354px){#chat{height: 1179px;} #card{height: 1324px;} #contatos{height: 1304px;} #scro{height: 1189px;}}
    @media ( max-height: 1353px){#chat{height: 1178px;} #card{height: 1323px;} #contatos{height: 1303px;} #scro{height: 1188px;}}
    @media ( max-height: 1352px){#chat{height: 1177px;} #card{height: 1322px;} #contatos{height: 1302px;} #scro{height: 1187px;}}
    @media ( max-height: 1351px){#chat{height: 1176px;} #card{height: 1321px;} #contatos{height: 1301px;} #scro{height: 1186px;}}
    @media ( max-height: 1350px){#chat{height: 1175px;} #card{height: 1320px;} #contatos{height: 1300px;} #scro{height: 1185px;}}
    @media ( max-height: 1349px){#chat{height: 1174px;} #card{height: 1319px;} #contatos{height: 1299px;} #scro{height: 1184px;}}
    @media ( max-height: 1348px){#chat{height: 1173px;} #card{height: 1318px;} #contatos{height: 1298px;} #scro{height: 1183px;}}
    @media ( max-height: 1347px){#chat{height: 1172px;} #card{height: 1317px;} #contatos{height: 1297px;} #scro{height: 1182px;}}
    @media ( max-height: 1346px){#chat{height: 1171px;} #card{height: 1316px;} #contatos{height: 1296px;} #scro{height: 1181px;}}
    @media ( max-height: 1345px){#chat{height: 1170px;} #card{height: 1315px;} #contatos{height: 1295px;} #scro{height: 1180px;}}
    @media ( max-height: 1344px){#chat{height: 1169px;} #card{height: 1314px;} #contatos{height: 1294px;} #scro{height: 1179px;}}
    @media ( max-height: 1343px){#chat{height: 1168px;} #card{height: 1313px;} #contatos{height: 1293px;} #scro{height: 1178px;}}
    @media ( max-height: 1342px){#chat{height: 1167px;} #card{height: 1312px;} #contatos{height: 1292px;} #scro{height: 1177px;}}
    @media ( max-height: 1341px){#chat{height: 1166px;} #card{height: 1311px;} #contatos{height: 1291px;} #scro{height: 1176px;}}
    @media ( max-height: 1340px){#chat{height: 1165px;} #card{height: 1310px;} #contatos{height: 1290px;} #scro{height: 1175px;}}
    @media ( max-height: 1339px){#chat{height: 1164px;} #card{height: 1309px;} #contatos{height: 1289px;} #scro{height: 1174px;}}
    @media ( max-height: 1338px){#chat{height: 1163px;} #card{height: 1308px;} #contatos{height: 1288px;} #scro{height: 1173px;}}
    @media ( max-height: 1337px){#chat{height: 1162px;} #card{height: 1307px;} #contatos{height: 1287px;} #scro{height: 1172px;}}
    @media ( max-height: 1336px){#chat{height: 1161px;} #card{height: 1306px;} #contatos{height: 1286px;} #scro{height: 1171px;}}
    @media ( max-height: 1335px){#chat{height: 1160px;} #card{height: 1305px;} #contatos{height: 1285px;} #scro{height: 1170px;}}
    @media ( max-height: 1334px){#chat{height: 1159px;} #card{height: 1304px;} #contatos{height: 1284px;} #scro{height: 1169px;}}
    @media ( max-height: 1333px){#chat{height: 1158px;} #card{height: 1303px;} #contatos{height: 1283px;} #scro{height: 1168px;}}
    @media ( max-height: 1332px){#chat{height: 1157px;} #card{height: 1302px;} #contatos{height: 1282px;} #scro{height: 1167px;}}
    @media ( max-height: 1331px){#chat{height: 1156px;} #card{height: 1301px;} #contatos{height: 1281px;} #scro{height: 1166px;}}
    @media ( max-height: 1330px){#chat{height: 1155px;} #card{height: 1300px;} #contatos{height: 1280px;} #scro{height: 1165px;}}
    @media ( max-height: 1329px){#chat{height: 1154px;} #card{height: 1299px;} #contatos{height: 1279px;} #scro{height: 1164px;}}
    @media ( max-height: 1328px){#chat{height: 1153px;} #card{height: 1298px;} #contatos{height: 1278px;} #scro{height: 1163px;}}
    @media ( max-height: 1327px){#chat{height: 1152px;} #card{height: 1297px;} #contatos{height: 1277px;} #scro{height: 1162px;}}
    @media ( max-height: 1326px){#chat{height: 1151px;} #card{height: 1296px;} #contatos{height: 1276px;} #scro{height: 1161px;}}
    @media ( max-height: 1325px){#chat{height: 1150px;} #card{height: 1295px;} #contatos{height: 1275px;} #scro{height: 1160px;}}
    @media ( max-height: 1324px){#chat{height: 1149px;} #card{height: 1294px;} #contatos{height: 1274px;} #scro{height: 1159px;}}
    @media ( max-height: 1323px){#chat{height: 1148px;} #card{height: 1293px;} #contatos{height: 1273px;} #scro{height: 1158px;}}
    @media ( max-height: 1322px){#chat{height: 1147px;} #card{height: 1292px;} #contatos{height: 1272px;} #scro{height: 1157px;}}
    @media ( max-height: 1321px){#chat{height: 1146px;} #card{height: 1291px;} #contatos{height: 1271px;} #scro{height: 1156px;}}
    @media ( max-height: 1320px){#chat{height: 1145px;} #card{height: 1290px;} #contatos{height: 1270px;} #scro{height: 1155px;}}
    @media ( max-height: 1319px){#chat{height: 1144px;} #card{height: 1289px;} #contatos{height: 1269px;} #scro{height: 1154px;}}
    @media ( max-height: 1318px){#chat{height: 1143px;} #card{height: 1288px;} #contatos{height: 1268px;} #scro{height: 1153px;}}
    @media ( max-height: 1317px){#chat{height: 1142px;} #card{height: 1287px;} #contatos{height: 1267px;} #scro{height: 1152px;}}
    @media ( max-height: 1316px){#chat{height: 1141px;} #card{height: 1286px;} #contatos{height: 1266px;} #scro{height: 1151px;}}
    @media ( max-height: 1315px){#chat{height: 1140px;} #card{height: 1285px;} #contatos{height: 1265px;} #scro{height: 1150px;}}
    @media ( max-height: 1314px){#chat{height: 1139px;} #card{height: 1284px;} #contatos{height: 1264px;} #scro{height: 1149px;}}
    @media ( max-height: 1313px){#chat{height: 1138px;} #card{height: 1283px;} #contatos{height: 1263px;} #scro{height: 1148px;}}
    @media ( max-height: 1312px){#chat{height: 1137px;} #card{height: 1282px;} #contatos{height: 1262px;} #scro{height: 1147px;}}
    @media ( max-height: 1311px){#chat{height: 1136px;} #card{height: 1281px;} #contatos{height: 1261px;} #scro{height: 1146px;}}
    @media ( max-height: 1310px){#chat{height: 1135px;} #card{height: 1280px;} #contatos{height: 1260px;} #scro{height: 1145px;}}
    @media ( max-height: 1309px){#chat{height: 1134px;} #card{height: 1279px;} #contatos{height: 1259px;} #scro{height: 1144px;}}
    @media ( max-height: 1308px){#chat{height: 1133px;} #card{height: 1278px;} #contatos{height: 1258px;} #scro{height: 1143px;}}
    @media ( max-height: 1307px){#chat{height: 1132px;} #card{height: 1277px;} #contatos{height: 1257px;} #scro{height: 1142px;}}
    @media ( max-height: 1306px){#chat{height: 1131px;} #card{height: 1276px;} #contatos{height: 1256px;} #scro{height: 1141px;}}
    @media ( max-height: 1305px){#chat{height: 1130px;} #card{height: 1275px;} #contatos{height: 1255px;} #scro{height: 1140px;}}
    @media ( max-height: 1304px){#chat{height: 1129px;} #card{height: 1274px;} #contatos{height: 1254px;} #scro{height: 1139px;}}
    @media ( max-height: 1303px){#chat{height: 1128px;} #card{height: 1273px;} #contatos{height: 1253px;} #scro{height: 1138px;}}
    @media ( max-height: 1302px){#chat{height: 1127px;} #card{height: 1272px;} #contatos{height: 1252px;} #scro{height: 1137px;}}
    @media ( max-height: 1301px){#chat{height: 1126px;} #card{height: 1271px;} #contatos{height: 1251px;} #scro{height: 1136px;}}
    @media ( max-height: 1300px){#chat{height: 1125px;} #card{height: 1270px;} #contatos{height: 1250px;} #scro{height: 1135px;}}
    @media ( max-height: 1299px){#chat{height: 1124px;} #card{height: 1269px;} #contatos{height: 1249px;} #scro{height: 1134px;}}
    @media ( max-height: 1298px){#chat{height: 1123px;} #card{height: 1268px;} #contatos{height: 1248px;} #scro{height: 1133px;}}
    @media ( max-height: 1297px){#chat{height: 1122px;} #card{height: 1267px;} #contatos{height: 1247px;} #scro{height: 1132px;}}
    @media ( max-height: 1296px){#chat{height: 1121px;} #card{height: 1266px;} #contatos{height: 1246px;} #scro{height: 1131px;}}
    @media ( max-height: 1295px){#chat{height: 1120px;} #card{height: 1265px;} #contatos{height: 1245px;} #scro{height: 1130px;}}
    @media ( max-height: 1294px){#chat{height: 1119px;} #card{height: 1264px;} #contatos{height: 1244px;} #scro{height: 1129px;}}
    @media ( max-height: 1293px){#chat{height: 1118px;} #card{height: 1263px;} #contatos{height: 1243px;} #scro{height: 1128px;}}
    @media ( max-height: 1292px){#chat{height: 1117px;} #card{height: 1262px;} #contatos{height: 1242px;} #scro{height: 1127px;}}
    @media ( max-height: 1291px){#chat{height: 1116px;} #card{height: 1261px;} #contatos{height: 1241px;} #scro{height: 1126px;}}
    @media ( max-height: 1290px){#chat{height: 1115px;} #card{height: 1260px;} #contatos{height: 1240px;} #scro{height: 1125px;}}
    @media ( max-height: 1289px){#chat{height: 1114px;} #card{height: 1259px;} #contatos{height: 1239px;} #scro{height: 1124px;}}
    @media ( max-height: 1288px){#chat{height: 1113px;} #card{height: 1258px;} #contatos{height: 1238px;} #scro{height: 1123px;}}
    @media ( max-height: 1287px){#chat{height: 1112px;} #card{height: 1257px;} #contatos{height: 1237px;} #scro{height: 1122px;}}
    @media ( max-height: 1286px){#chat{height: 1111px;} #card{height: 1256px;} #contatos{height: 1236px;} #scro{height: 1121px;}}
    @media ( max-height: 1285px){#chat{height: 1110px;} #card{height: 1255px;} #contatos{height: 1235px;} #scro{height: 1120px;}}
    @media ( max-height: 1284px){#chat{height: 1109px;} #card{height: 1254px;} #contatos{height: 1234px;} #scro{height: 1119px;}}
    @media ( max-height: 1283px){#chat{height: 1108px;} #card{height: 1253px;} #contatos{height: 1233px;} #scro{height: 1118px;}}
    @media ( max-height: 1282px){#chat{height: 1107px;} #card{height: 1252px;} #contatos{height: 1232px;} #scro{height: 1117px;}}
    @media ( max-height: 1281px){#chat{height: 1106px;} #card{height: 1251px;} #contatos{height: 1231px;} #scro{height: 1116px;}}
    @media ( max-height: 1280px){#chat{height: 1105px;} #card{height: 1250px;} #contatos{height: 1230px;} #scro{height: 1115px;}}
    @media ( max-height: 1279px){#chat{height: 1104px;} #card{height: 1249px;} #contatos{height: 1229px;} #scro{height: 1114px;}}
    @media ( max-height: 1278px){#chat{height: 1103px;} #card{height: 1248px;} #contatos{height: 1228px;} #scro{height: 1113px;}}
    @media ( max-height: 1277px){#chat{height: 1102px;} #card{height: 1247px;} #contatos{height: 1227px;} #scro{height: 1112px;}}
    @media ( max-height: 1276px){#chat{height: 1101px;} #card{height: 1246px;} #contatos{height: 1226px;} #scro{height: 1111px;}}
    @media ( max-height: 1275px){#chat{height: 1100px;} #card{height: 1245px;} #contatos{height: 1225px;} #scro{height: 1110px;}}
    @media ( max-height: 1274px){#chat{height: 1099px;} #card{height: 1244px;} #contatos{height: 1224px;} #scro{height: 1109px;}}
    @media ( max-height: 1273px){#chat{height: 1098px;} #card{height: 1243px;} #contatos{height: 1223px;} #scro{height: 1108px;}}
    @media ( max-height: 1272px){#chat{height: 1097px;} #card{height: 1242px;} #contatos{height: 1222px;} #scro{height: 1107px;}}
    @media ( max-height: 1271px){#chat{height: 1096px;} #card{height: 1241px;} #contatos{height: 1221px;} #scro{height: 1106px;}}
    @media ( max-height: 1270px){#chat{height: 1095px;} #card{height: 1240px;} #contatos{height: 1220px;} #scro{height: 1105px;}}
    @media ( max-height: 1269px){#chat{height: 1094px;} #card{height: 1239px;} #contatos{height: 1219px;} #scro{height: 1104px;}}
    @media ( max-height: 1268px){#chat{height: 1093px;} #card{height: 1238px;} #contatos{height: 1218px;} #scro{height: 1103px;}}
    @media ( max-height: 1267px){#chat{height: 1092px;} #card{height: 1237px;} #contatos{height: 1217px;} #scro{height: 1102px;}}
    @media ( max-height: 1266px){#chat{height: 1091px;} #card{height: 1236px;} #contatos{height: 1216px;} #scro{height: 1101px;}}
    @media ( max-height: 1265px){#chat{height: 1090px;} #card{height: 1235px;} #contatos{height: 1215px;} #scro{height: 1100px;}}
    @media ( max-height: 1264px){#chat{height: 1089px;} #card{height: 1234px;} #contatos{height: 1214px;} #scro{height: 1099px;}}
    @media ( max-height: 1263px){#chat{height: 1088px;} #card{height: 1233px;} #contatos{height: 1213px;} #scro{height: 1098px;}}
    @media ( max-height: 1262px){#chat{height: 1087px;} #card{height: 1232px;} #contatos{height: 1212px;} #scro{height: 1097px;}}
    @media ( max-height: 1261px){#chat{height: 1086px;} #card{height: 1231px;} #contatos{height: 1211px;} #scro{height: 1096px;}}
    @media ( max-height: 1260px){#chat{height: 1085px;} #card{height: 1230px;} #contatos{height: 1210px;} #scro{height: 1095px;}}
    @media ( max-height: 1259px){#chat{height: 1084px;} #card{height: 1229px;} #contatos{height: 1209px;} #scro{height: 1094px;}}
    @media ( max-height: 1258px){#chat{height: 1083px;} #card{height: 1228px;} #contatos{height: 1208px;} #scro{height: 1093px;}}
    @media ( max-height: 1257px){#chat{height: 1082px;} #card{height: 1227px;} #contatos{height: 1207px;} #scro{height: 1092px;}}
    @media ( max-height: 1256px){#chat{height: 1081px;} #card{height: 1226px;} #contatos{height: 1206px;} #scro{height: 1091px;}}
    @media ( max-height: 1255px){#chat{height: 1080px;} #card{height: 1225px;} #contatos{height: 1205px;} #scro{height: 1090px;}}
    @media ( max-height: 1254px){#chat{height: 1079px;} #card{height: 1224px;} #contatos{height: 1204px;} #scro{height: 1089px;}}
    @media ( max-height: 1253px){#chat{height: 1078px;} #card{height: 1223px;} #contatos{height: 1203px;} #scro{height: 1088px;}}
    @media ( max-height: 1252px){#chat{height: 1077px;} #card{height: 1222px;} #contatos{height: 1202px;} #scro{height: 1087px;}}
    @media ( max-height: 1251px){#chat{height: 1076px;} #card{height: 1221px;} #contatos{height: 1201px;} #scro{height: 1086px;}}
    @media ( max-height: 1250px){#chat{height: 1075px;} #card{height: 1220px;} #contatos{height: 1200px;} #scro{height: 1085px;}}
    @media ( max-height: 1249px){#chat{height: 1074px;} #card{height: 1219px;} #contatos{height: 1199px;} #scro{height: 1084px;}}
    @media ( max-height: 1248px){#chat{height: 1073px;} #card{height: 1218px;} #contatos{height: 1198px;} #scro{height: 1083px;}}
    @media ( max-height: 1247px){#chat{height: 1072px;} #card{height: 1217px;} #contatos{height: 1197px;} #scro{height: 1082px;}}
    @media ( max-height: 1246px){#chat{height: 1071px;} #card{height: 1216px;} #contatos{height: 1196px;} #scro{height: 1081px;}}
    @media ( max-height: 1245px){#chat{height: 1070px;} #card{height: 1215px;} #contatos{height: 1195px;} #scro{height: 1080px;}}
    @media ( max-height: 1244px){#chat{height: 1069px;} #card{height: 1214px;} #contatos{height: 1194px;} #scro{height: 1079px;}}
    @media ( max-height: 1243px){#chat{height: 1068px;} #card{height: 1213px;} #contatos{height: 1193px;} #scro{height: 1078px;}}
    @media ( max-height: 1242px){#chat{height: 1067px;} #card{height: 1212px;} #contatos{height: 1192px;} #scro{height: 1077px;}}
    @media ( max-height: 1241px){#chat{height: 1066px;} #card{height: 1211px;} #contatos{height: 1191px;} #scro{height: 1076px;}}
    @media ( max-height: 1240px){#chat{height: 1065px;} #card{height: 1210px;} #contatos{height: 1190px;} #scro{height: 1075px;}}
    @media ( max-height: 1239px){#chat{height: 1064px;} #card{height: 1209px;} #contatos{height: 1189px;} #scro{height: 1074px;}}
    @media ( max-height: 1238px){#chat{height: 1063px;} #card{height: 1208px;} #contatos{height: 1188px;} #scro{height: 1073px;}}
    @media ( max-height: 1237px){#chat{height: 1062px;} #card{height: 1207px;} #contatos{height: 1187px;} #scro{height: 1072px;}}
    @media ( max-height: 1236px){#chat{height: 1061px;} #card{height: 1206px;} #contatos{height: 1186px;} #scro{height: 1071px;}}
    @media ( max-height: 1235px){#chat{height: 1060px;} #card{height: 1205px;} #contatos{height: 1185px;} #scro{height: 1070px;}}
    @media ( max-height: 1234px){#chat{height: 1059px;} #card{height: 1204px;} #contatos{height: 1184px;} #scro{height: 1069px;}}
    @media ( max-height: 1233px){#chat{height: 1058px;} #card{height: 1203px;} #contatos{height: 1183px;} #scro{height: 1068px;}}
    @media ( max-height: 1232px){#chat{height: 1057px;} #card{height: 1202px;} #contatos{height: 1182px;} #scro{height: 1067px;}}
    @media ( max-height: 1231px){#chat{height: 1056px;} #card{height: 1201px;} #contatos{height: 1181px;} #scro{height: 1066px;}}
    @media ( max-height: 1230px){#chat{height: 1055px;} #card{height: 1200px;} #contatos{height: 1180px;} #scro{height: 1065px;}}
    @media ( max-height: 1229px){#chat{height: 1054px;} #card{height: 1199px;} #contatos{height: 1179px;} #scro{height: 1064px;}}
    @media ( max-height: 1228px){#chat{height: 1053px;} #card{height: 1198px;} #contatos{height: 1178px;} #scro{height: 1063px;}}
    @media ( max-height: 1227px){#chat{height: 1052px;} #card{height: 1197px;} #contatos{height: 1177px;} #scro{height: 1062px;}}
    @media ( max-height: 1226px){#chat{height: 1051px;} #card{height: 1196px;} #contatos{height: 1176px;} #scro{height: 1061px;}}
    @media ( max-height: 1225px){#chat{height: 1050px;} #card{height: 1195px;} #contatos{height: 1175px;} #scro{height: 1060px;}}
    @media ( max-height: 1224px){#chat{height: 1049px;} #card{height: 1194px;} #contatos{height: 1174px;} #scro{height: 1059px;}}
    @media ( max-height: 1223px){#chat{height: 1048px;} #card{height: 1193px;} #contatos{height: 1173px;} #scro{height: 1058px;}}
    @media ( max-height: 1222px){#chat{height: 1047px;} #card{height: 1192px;} #contatos{height: 1172px;} #scro{height: 1057px;}}
    @media ( max-height: 1221px){#chat{height: 1046px;} #card{height: 1191px;} #contatos{height: 1171px;} #scro{height: 1056px;}}
    @media ( max-height: 1220px){#chat{height: 1045px;} #card{height: 1190px;} #contatos{height: 1170px;} #scro{height: 1055px;}}
    @media ( max-height: 1219px){#chat{height: 1044px;} #card{height: 1189px;} #contatos{height: 1169px;} #scro{height: 1054px;}}
    @media ( max-height: 1218px){#chat{height: 1043px;} #card{height: 1188px;} #contatos{height: 1168px;} #scro{height: 1053px;}}
    @media ( max-height: 1217px){#chat{height: 1042px;} #card{height: 1187px;} #contatos{height: 1167px;} #scro{height: 1052px;}}
    @media ( max-height: 1216px){#chat{height: 1041px;} #card{height: 1186px;} #contatos{height: 1166px;} #scro{height: 1051px;}}
    @media ( max-height: 1215px){#chat{height: 1040px;} #card{height: 1185px;} #contatos{height: 1165px;} #scro{height: 1050px;}}
    @media ( max-height: 1214px){#chat{height: 1039px;} #card{height: 1184px;} #contatos{height: 1164px;} #scro{height: 1049px;}}
    @media ( max-height: 1213px){#chat{height: 1038px;} #card{height: 1183px;} #contatos{height: 1163px;} #scro{height: 1048px;}}
    @media ( max-height: 1212px){#chat{height: 1037px;} #card{height: 1182px;} #contatos{height: 1162px;} #scro{height: 1047px;}}
    @media ( max-height: 1211px){#chat{height: 1036px;} #card{height: 1181px;} #contatos{height: 1161px;} #scro{height: 1046px;}}
    @media ( max-height: 1210px){#chat{height: 1035px;} #card{height: 1180px;} #contatos{height: 1160px;} #scro{height: 1045px;}}
    @media ( max-height: 1209px){#chat{height: 1034px;} #card{height: 1179px;} #contatos{height: 1159px;} #scro{height: 1044px;}}
    @media ( max-height: 1208px){#chat{height: 1033px;} #card{height: 1178px;} #contatos{height: 1158px;} #scro{height: 1043px;}}
    @media ( max-height: 1207px){#chat{height: 1032px;} #card{height: 1177px;} #contatos{height: 1157px;} #scro{height: 1042px;}}
    @media ( max-height: 1206px){#chat{height: 1031px;} #card{height: 1176px;} #contatos{height: 1156px;} #scro{height: 1041px;}}
    @media ( max-height: 1205px){#chat{height: 1030px;} #card{height: 1175px;} #contatos{height: 1155px;} #scro{height: 1040px;}}
    @media ( max-height: 1204px){#chat{height: 1029px;} #card{height: 1174px;} #contatos{height: 1154px;} #scro{height: 1039px;}}
    @media ( max-height: 1203px){#chat{height: 1028px;} #card{height: 1173px;} #contatos{height: 1153px;} #scro{height: 1038px;}}
    @media ( max-height: 1202px){#chat{height: 1027px;} #card{height: 1172px;} #contatos{height: 1152px;} #scro{height: 1037px;}}
    @media ( max-height: 1201px){#chat{height: 1026px;} #card{height: 1171px;} #contatos{height: 1151px;} #scro{height: 1036px;}}
    @media ( max-height: 1200px){#chat{height: 1025px;} #card{height: 1170px;} #contatos{height: 1150px;} #scro{height: 1035px;}}
    @media ( max-height: 1199px){#chat{height: 1024px;} #card{height: 1169px;} #contatos{height: 1149px;} #scro{height: 1034px;}}
    @media ( max-height: 1198px){#chat{height: 1023px;} #card{height: 1168px;} #contatos{height: 1148px;} #scro{height: 1033px;}}
    @media ( max-height: 1197px){#chat{height: 1022px;} #card{height: 1167px;} #contatos{height: 1147px;} #scro{height: 1032px;}}
    @media ( max-height: 1196px){#chat{height: 1021px;} #card{height: 1166px;} #contatos{height: 1146px;} #scro{height: 1031px;}}
    @media ( max-height: 1195px){#chat{height: 1020px;} #card{height: 1165px;} #contatos{height: 1145px;} #scro{height: 1030px;}}
    @media ( max-height: 1194px){#chat{height: 1019px;} #card{height: 1164px;} #contatos{height: 1144px;} #scro{height: 1029px;}}
    @media ( max-height: 1193px){#chat{height: 1018px;} #card{height: 1163px;} #contatos{height: 1143px;} #scro{height: 1028px;}}
    @media ( max-height: 1192px){#chat{height: 1017px;} #card{height: 1162px;} #contatos{height: 1142px;} #scro{height: 1027px;}}
    @media ( max-height: 1191px){#chat{height: 1016px;} #card{height: 1161px;} #contatos{height: 1141px;} #scro{height: 1026px;}}
    @media ( max-height: 1190px){#chat{height: 1015px;} #card{height: 1160px;} #contatos{height: 1140px;} #scro{height: 1025px;}}
    @media ( max-height: 1189px){#chat{height: 1014px;} #card{height: 1159px;} #contatos{height: 1139px;} #scro{height: 1024px;}}
    @media ( max-height: 1188px){#chat{height: 1013px;} #card{height: 1158px;} #contatos{height: 1138px;} #scro{height: 1023px;}}
    @media ( max-height: 1187px){#chat{height: 1012px;} #card{height: 1157px;} #contatos{height: 1137px;} #scro{height: 1022px;}}
    @media ( max-height: 1186px){#chat{height: 1011px;} #card{height: 1156px;} #contatos{height: 1136px;} #scro{height: 1021px;}}
    @media ( max-height: 1185px){#chat{height: 1010px;} #card{height: 1155px;} #contatos{height: 1135px;} #scro{height: 1020px;}}
    @media ( max-height: 1184px){#chat{height: 1009px;} #card{height: 1154px;} #contatos{height: 1134px;} #scro{height: 1019px;}}
    @media ( max-height: 1183px){#chat{height: 1008px;} #card{height: 1153px;} #contatos{height: 1133px;} #scro{height: 1018px;}}
    @media ( max-height: 1182px){#chat{height: 1007px;} #card{height: 1152px;} #contatos{height: 1132px;} #scro{height: 1017px;}}
    @media ( max-height: 1181px){#chat{height: 1006px;} #card{height: 1151px;} #contatos{height: 1131px;} #scro{height: 1016px;}}
    @media ( max-height: 1180px){#chat{height: 1005px;} #card{height: 1150px;} #contatos{height: 1130px;} #scro{height: 1015px;}}
    @media ( max-height: 1179px){#chat{height: 1004px;} #card{height: 1149px;} #contatos{height: 1129px;} #scro{height: 1014px;}}
    @media ( max-height: 1178px){#chat{height: 1003px;} #card{height: 1148px;} #contatos{height: 1128px;} #scro{height: 1013px;}}
    @media ( max-height: 1177px){#chat{height: 1002px;} #card{height: 1147px;} #contatos{height: 1127px;} #scro{height: 1012px;}}
    @media ( max-height: 1176px){#chat{height: 1001px;} #card{height: 1146px;} #contatos{height: 1126px;} #scro{height: 1011px;}}
    @media ( max-height: 1175px){#chat{height: 1000px;} #card{height: 1145px;} #contatos{height: 1125px;} #scro{height: 1010px;}}
    @media ( max-height: 1174px){#chat{height: 999px;} #card{height: 1144px;} #contatos{height: 1124px;} #scro{height: 1009px;}}
    @media ( max-height: 1173px){#chat{height: 998px;} #card{height: 1143px;} #contatos{height: 1123px;} #scro{height: 1008px;}}
    @media ( max-height: 1172px){#chat{height: 997px;} #card{height: 1142px;} #contatos{height: 1122px;} #scro{height: 1007px;}}
    @media ( max-height: 1171px){#chat{height: 996px;} #card{height: 1141px;} #contatos{height: 1121px;} #scro{height: 1006px;}}
    @media ( max-height: 1170px){#chat{height: 995px;} #card{height: 1140px;} #contatos{height: 1120px;} #scro{height: 1005px;}}
    @media ( max-height: 1169px){#chat{height: 994px;} #card{height: 1139px;} #contatos{height: 1119px;} #scro{height: 1004px;}}
    @media ( max-height: 1168px){#chat{height: 993px;} #card{height: 1138px;} #contatos{height: 1118px;} #scro{height: 1003px;}}
    @media ( max-height: 1167px){#chat{height: 992px;} #card{height: 1137px;} #contatos{height: 1117px;} #scro{height: 1002px;}}
    @media ( max-height: 1166px){#chat{height: 991px;} #card{height: 1136px;} #contatos{height: 1116px;} #scro{height: 1001px;}}
    @media ( max-height: 1165px){#chat{height: 990px;} #card{height: 1135px;} #contatos{height: 1115px;} #scro{height: 1000px;}}
    @media ( max-height: 1164px){#chat{height: 989px;} #card{height: 1134px;} #contatos{height: 1114px;} #scro{height: 999px;}}
    @media ( max-height: 1163px){#chat{height: 988px;} #card{height: 1133px;} #contatos{height: 1113px;} #scro{height: 998px;}}
    @media ( max-height: 1162px){#chat{height: 987px;} #card{height: 1132px;} #contatos{height: 1112px;} #scro{height: 997px;}}
    @media ( max-height: 1161px){#chat{height: 986px;} #card{height: 1131px;} #contatos{height: 1111px;} #scro{height: 996px;}}
    @media ( max-height: 1160px){#chat{height: 985px;} #card{height: 1130px;} #contatos{height: 1110px;} #scro{height: 995px;}}
    @media ( max-height: 1159px){#chat{height: 984px;} #card{height: 1129px;} #contatos{height: 1109px;} #scro{height: 994px;}}
    @media ( max-height: 1158px){#chat{height: 983px;} #card{height: 1128px;} #contatos{height: 1108px;} #scro{height: 993px;}}
    @media ( max-height: 1157px){#chat{height: 982px;} #card{height: 1127px;} #contatos{height: 1107px;} #scro{height: 992px;}}
    @media ( max-height: 1156px){#chat{height: 981px;} #card{height: 1126px;} #contatos{height: 1106px;} #scro{height: 991px;}}
    @media ( max-height: 1155px){#chat{height: 980px;} #card{height: 1125px;} #contatos{height: 1105px;} #scro{height: 990px;}}
    @media ( max-height: 1154px){#chat{height: 979px;} #card{height: 1124px;} #contatos{height: 1104px;} #scro{height: 989px;}}
    @media ( max-height: 1153px){#chat{height: 978px;} #card{height: 1123px;} #contatos{height: 1103px;} #scro{height: 988px;}}
    @media ( max-height: 1152px){#chat{height: 977px;} #card{height: 1122px;} #contatos{height: 1102px;} #scro{height: 987px;}}
    @media ( max-height: 1151px){#chat{height: 976px;} #card{height: 1121px;} #contatos{height: 1101px;} #scro{height: 986px;}}
    @media ( max-height: 1150px){#chat{height: 975px;} #card{height: 1120px;} #contatos{height: 1100px;} #scro{height: 985px;}}
    @media ( max-height: 1149px){#chat{height: 974px;} #card{height: 1119px;} #contatos{height: 1099px;} #scro{height: 984px;}}
    @media ( max-height: 1148px){#chat{height: 973px;} #card{height: 1118px;} #contatos{height: 1098px;} #scro{height: 983px;}}
    @media ( max-height: 1147px){#chat{height: 972px;} #card{height: 1117px;} #contatos{height: 1097px;} #scro{height: 982px;}}
    @media ( max-height: 1146px){#chat{height: 971px;} #card{height: 1116px;} #contatos{height: 1096px;} #scro{height: 981px;}}
    @media ( max-height: 1145px){#chat{height: 970px;} #card{height: 1115px;} #contatos{height: 1095px;} #scro{height: 980px;}}
    @media ( max-height: 1144px){#chat{height: 969px;} #card{height: 1114px;} #contatos{height: 1094px;} #scro{height: 979px;}}
    @media ( max-height: 1143px){#chat{height: 968px;} #card{height: 1113px;} #contatos{height: 1093px;} #scro{height: 978px;}}
    @media ( max-height: 1142px){#chat{height: 967px;} #card{height: 1112px;} #contatos{height: 1092px;} #scro{height: 977px;}}
    @media ( max-height: 1141px){#chat{height: 966px;} #card{height: 1111px;} #contatos{height: 1091px;} #scro{height: 976px;}}
    @media ( max-height: 1140px){#chat{height: 965px;} #card{height: 1110px;} #contatos{height: 1090px;} #scro{height: 975px;}}
    @media ( max-height: 1139px){#chat{height: 964px;} #card{height: 1109px;} #contatos{height: 1089px;} #scro{height: 974px;}}
    @media ( max-height: 1138px){#chat{height: 963px;} #card{height: 1108px;} #contatos{height: 1088px;} #scro{height: 973px;}}
    @media ( max-height: 1137px){#chat{height: 962px;} #card{height: 1107px;} #contatos{height: 1087px;} #scro{height: 972px;}}
    @media ( max-height: 1136px){#chat{height: 961px;} #card{height: 1106px;} #contatos{height: 1086px;} #scro{height: 971px;}}
    @media ( max-height: 1135px){#chat{height: 960px;} #card{height: 1105px;} #contatos{height: 1085px;} #scro{height: 970px;}}
    @media ( max-height: 1134px){#chat{height: 959px;} #card{height: 1104px;} #contatos{height: 1084px;} #scro{height: 969px;}}
    @media ( max-height: 1133px){#chat{height: 958px;} #card{height: 1103px;} #contatos{height: 1083px;} #scro{height: 968px;}}
    @media ( max-height: 1132px){#chat{height: 957px;} #card{height: 1102px;} #contatos{height: 1082px;} #scro{height: 967px;}}
    @media ( max-height: 1131px){#chat{height: 956px;} #card{height: 1101px;} #contatos{height: 1081px;} #scro{height: 966px;}}
    @media ( max-height: 1130px){#chat{height: 955px;} #card{height: 1100px;} #contatos{height: 1080px;} #scro{height: 965px;}}
    @media ( max-height: 1129px){#chat{height: 954px;} #card{height: 1099px;} #contatos{height: 1079px;} #scro{height: 964px;}}
    @media ( max-height: 1128px){#chat{height: 953px;} #card{height: 1098px;} #contatos{height: 1078px;} #scro{height: 963px;}}
    @media ( max-height: 1127px){#chat{height: 952px;} #card{height: 1097px;} #contatos{height: 1077px;} #scro{height: 962px;}}
    @media ( max-height: 1126px){#chat{height: 951px;} #card{height: 1096px;} #contatos{height: 1076px;} #scro{height: 961px;}}
    @media ( max-height: 1125px){#chat{height: 950px;} #card{height: 1095px;} #contatos{height: 1075px;} #scro{height: 960px;}}
    @media ( max-height: 1124px){#chat{height: 949px;} #card{height: 1094px;} #contatos{height: 1074px;} #scro{height: 959px;}}
    @media ( max-height: 1123px){#chat{height: 948px;} #card{height: 1093px;} #contatos{height: 1073px;} #scro{height: 958px;}}
    @media ( max-height: 1122px){#chat{height: 947px;} #card{height: 1092px;} #contatos{height: 1072px;} #scro{height: 957px;}}
    @media ( max-height: 1121px){#chat{height: 946px;} #card{height: 1091px;} #contatos{height: 1071px;} #scro{height: 956px;}}
    @media ( max-height: 1120px){#chat{height: 945px;} #card{height: 1090px;} #contatos{height: 1070px;} #scro{height: 955px;}}
    @media ( max-height: 1119px){#chat{height: 944px;} #card{height: 1089px;} #contatos{height: 1069px;} #scro{height: 954px;}}
    @media ( max-height: 1118px){#chat{height: 943px;} #card{height: 1088px;} #contatos{height: 1068px;} #scro{height: 953px;}}
    @media ( max-height: 1117px){#chat{height: 942px;} #card{height: 1087px;} #contatos{height: 1067px;} #scro{height: 952px;}}
    @media ( max-height: 1116px){#chat{height: 941px;} #card{height: 1086px;} #contatos{height: 1066px;} #scro{height: 951px;}}
    @media ( max-height: 1115px){#chat{height: 940px;} #card{height: 1085px;} #contatos{height: 1065px;} #scro{height: 950px;}}
    @media ( max-height: 1114px){#chat{height: 939px;} #card{height: 1084px;} #contatos{height: 1064px;} #scro{height: 949px;}}
    @media ( max-height: 1113px){#chat{height: 938px;} #card{height: 1083px;} #contatos{height: 1063px;} #scro{height: 948px;}}
    @media ( max-height: 1112px){#chat{height: 937px;} #card{height: 1082px;} #contatos{height: 1062px;} #scro{height: 947px;}}
    @media ( max-height: 1111px){#chat{height: 936px;} #card{height: 1081px;} #contatos{height: 1061px;} #scro{height: 946px;}}
    @media ( max-height: 1110px){#chat{height: 935px;} #card{height: 1080px;} #contatos{height: 1060px;} #scro{height: 945px;}}
    @media ( max-height: 1109px){#chat{height: 934px;} #card{height: 1079px;} #contatos{height: 1059px;} #scro{height: 944px;}}
    @media ( max-height: 1108px){#chat{height: 933px;} #card{height: 1078px;} #contatos{height: 1058px;} #scro{height: 943px;}}
    @media ( max-height: 1107px){#chat{height: 932px;} #card{height: 1077px;} #contatos{height: 1057px;} #scro{height: 942px;}}
    @media ( max-height: 1106px){#chat{height: 931px;} #card{height: 1076px;} #contatos{height: 1056px;} #scro{height: 941px;}}
    @media ( max-height: 1105px){#chat{height: 930px;} #card{height: 1075px;} #contatos{height: 1055px;} #scro{height: 940px;}}
    @media ( max-height: 1104px){#chat{height: 929px;} #card{height: 1074px;} #contatos{height: 1054px;} #scro{height: 939px;}}
    @media ( max-height: 1103px){#chat{height: 928px;} #card{height: 1073px;} #contatos{height: 1053px;} #scro{height: 938px;}}
    @media ( max-height: 1102px){#chat{height: 927px;} #card{height: 1072px;} #contatos{height: 1052px;} #scro{height: 937px;}}
    @media ( max-height: 1101px){#chat{height: 926px;} #card{height: 1071px;} #contatos{height: 1051px;} #scro{height: 936px;}}
    @media ( max-height: 1100px){#chat{height: 925px;} #card{height: 1070px;} #contatos{height: 1050px;} #scro{height: 935px;}}
    @media ( max-height: 1099px){#chat{height: 924px;} #card{height: 1069px;} #contatos{height: 1049px;} #scro{height: 934px;}}
    @media ( max-height: 1098px){#chat{height: 923px;} #card{height: 1068px;} #contatos{height: 1048px;} #scro{height: 933px;}}
    @media ( max-height: 1097px){#chat{height: 922px;} #card{height: 1067px;} #contatos{height: 1047px;} #scro{height: 932px;}}
    @media ( max-height: 1096px){#chat{height: 921px;} #card{height: 1066px;} #contatos{height: 1046px;} #scro{height: 931px;}}
    @media ( max-height: 1095px){#chat{height: 920px;} #card{height: 1065px;} #contatos{height: 1045px;} #scro{height: 930px;}}
    @media ( max-height: 1094px){#chat{height: 919px;} #card{height: 1064px;} #contatos{height: 1044px;} #scro{height: 929px;}}
    @media ( max-height: 1093px){#chat{height: 918px;} #card{height: 1063px;} #contatos{height: 1043px;} #scro{height: 928px;}}
    @media ( max-height: 1092px){#chat{height: 917px;} #card{height: 1062px;} #contatos{height: 1042px;} #scro{height: 927px;}}
    @media ( max-height: 1091px){#chat{height: 916px;} #card{height: 1061px;} #contatos{height: 1041px;} #scro{height: 926px;}}
    @media ( max-height: 1090px){#chat{height: 915px;} #card{height: 1060px;} #contatos{height: 1040px;} #scro{height: 925px;}}
    @media ( max-height: 1089px){#chat{height: 914px;} #card{height: 1059px;} #contatos{height: 1039px;} #scro{height: 924px;}}
    @media ( max-height: 1088px){#chat{height: 913px;} #card{height: 1058px;} #contatos{height: 1038px;} #scro{height: 923px;}}
    @media ( max-height: 1087px){#chat{height: 912px;} #card{height: 1057px;} #contatos{height: 1037px;} #scro{height: 922px;}}
    @media ( max-height: 1086px){#chat{height: 911px;} #card{height: 1056px;} #contatos{height: 1036px;} #scro{height: 921px;}}
    @media ( max-height: 1085px){#chat{height: 910px;} #card{height: 1055px;} #contatos{height: 1035px;} #scro{height: 920px;}}
    @media ( max-height: 1084px){#chat{height: 909px;} #card{height: 1054px;} #contatos{height: 1034px;} #scro{height: 919px;}}
    @media ( max-height: 1083px){#chat{height: 908px;} #card{height: 1053px;} #contatos{height: 1033px;} #scro{height: 918px;}}
    @media ( max-height: 1082px){#chat{height: 907px;} #card{height: 1052px;} #contatos{height: 1032px;} #scro{height: 917px;}}
    @media ( max-height: 1081px){#chat{height: 906px;} #card{height: 1051px;} #contatos{height: 1031px;} #scro{height: 916px;}}
    @media ( max-height: 1080px){#chat{height: 905px;} #card{height: 1050px;} #contatos{height: 1030px;} #scro{height: 915px;}}
    @media ( max-height: 1079px){#chat{height: 904px;} #card{height: 1049px;} #contatos{height: 1029px;} #scro{height: 914px;}}
    @media ( max-height: 1078px){#chat{height: 903px;} #card{height: 1048px;} #contatos{height: 1028px;} #scro{height: 913px;}}
    @media ( max-height: 1077px){#chat{height: 902px;} #card{height: 1047px;} #contatos{height: 1027px;} #scro{height: 912px;}}
    @media ( max-height: 1076px){#chat{height: 901px;} #card{height: 1046px;} #contatos{height: 1026px;} #scro{height: 911px;}}
    @media ( max-height: 1075px){#chat{height: 900px;} #card{height: 1045px;} #contatos{height: 1025px;} #scro{height: 910px;}}
    @media ( max-height: 1074px){#chat{height: 899px;} #card{height: 1044px;} #contatos{height: 1024px;} #scro{height: 909px;}}
    @media ( max-height: 1073px){#chat{height: 898px;} #card{height: 1043px;} #contatos{height: 1023px;} #scro{height: 908px;}}
    @media ( max-height: 1072px){#chat{height: 897px;} #card{height: 1042px;} #contatos{height: 1022px;} #scro{height: 907px;}}
    @media ( max-height: 1071px){#chat{height: 896px;} #card{height: 1041px;} #contatos{height: 1021px;} #scro{height: 906px;}}
    @media ( max-height: 1070px){#chat{height: 895px;} #card{height: 1040px;} #contatos{height: 1020px;} #scro{height: 905px;}}
    @media ( max-height: 1069px){#chat{height: 894px;} #card{height: 1039px;} #contatos{height: 1019px;} #scro{height: 904px;}}
    @media ( max-height: 1068px){#chat{height: 893px;} #card{height: 1038px;} #contatos{height: 1018px;} #scro{height: 903px;}}
    @media ( max-height: 1067px){#chat{height: 892px;} #card{height: 1037px;} #contatos{height: 1017px;} #scro{height: 902px;}}
    @media ( max-height: 1066px){#chat{height: 891px;} #card{height: 1036px;} #contatos{height: 1016px;} #scro{height: 901px;}}
    @media ( max-height: 1065px){#chat{height: 890px;} #card{height: 1035px;} #contatos{height: 1015px;} #scro{height: 900px;}}
    @media ( max-height: 1064px){#chat{height: 889px;} #card{height: 1034px;} #contatos{height: 1014px;} #scro{height: 899px;}}
    @media ( max-height: 1063px){#chat{height: 888px;} #card{height: 1033px;} #contatos{height: 1013px;} #scro{height: 898px;}}
    @media ( max-height: 1062px){#chat{height: 887px;} #card{height: 1032px;} #contatos{height: 1012px;} #scro{height: 897px;}}
    @media ( max-height: 1061px){#chat{height: 886px;} #card{height: 1031px;} #contatos{height: 1011px;} #scro{height: 896px;}}
    @media ( max-height: 1060px){#chat{height: 885px;} #card{height: 1030px;} #contatos{height: 1010px;} #scro{height: 895px;}}
    @media ( max-height: 1059px){#chat{height: 884px;} #card{height: 1029px;} #contatos{height: 1009px;} #scro{height: 894px;}}
    @media ( max-height: 1058px){#chat{height: 883px;} #card{height: 1028px;} #contatos{height: 1008px;} #scro{height: 893px;}}
    @media ( max-height: 1057px){#chat{height: 882px;} #card{height: 1027px;} #contatos{height: 1007px;} #scro{height: 892px;}}
    @media ( max-height: 1056px){#chat{height: 881px;} #card{height: 1026px;} #contatos{height: 1006px;} #scro{height: 891px;}}
    @media ( max-height: 1055px){#chat{height: 880px;} #card{height: 1025px;} #contatos{height: 1005px;} #scro{height: 890px;}}
    @media ( max-height: 1054px){#chat{height: 879px;} #card{height: 1024px;} #contatos{height: 1004px;} #scro{height: 889px;}}
    @media ( max-height: 1053px){#chat{height: 878px;} #card{height: 1023px;} #contatos{height: 1003px;} #scro{height: 888px;}}
    @media ( max-height: 1052px){#chat{height: 877px;} #card{height: 1022px;} #contatos{height: 1002px;} #scro{height: 887px;}}
    @media ( max-height: 1051px){#chat{height: 876px;} #card{height: 1021px;} #contatos{height: 1001px;} #scro{height: 886px;}}
    @media ( max-height: 1050px){#chat{height: 875px;} #card{height: 1020px;} #contatos{height: 1000px;} #scro{height: 885px;}}
    @media ( max-height: 1049px){#chat{height: 874px;} #card{height: 1019px;} #contatos{height: 999px;} #scro{height: 884px;}}
    @media ( max-height: 1048px){#chat{height: 873px;} #card{height: 1018px;} #contatos{height: 998px;} #scro{height: 883px;}}
    @media ( max-height: 1047px){#chat{height: 872px;} #card{height: 1017px;} #contatos{height: 997px;} #scro{height: 882px;}}
    @media ( max-height: 1046px){#chat{height: 871px;} #card{height: 1016px;} #contatos{height: 996px;} #scro{height: 881px;}}
    @media ( max-height: 1045px){#chat{height: 870px;} #card{height: 1015px;} #contatos{height: 995px;} #scro{height: 880px;}}
    @media ( max-height: 1044px){#chat{height: 869px;} #card{height: 1014px;} #contatos{height: 994px;} #scro{height: 879px;}}
    @media ( max-height: 1043px){#chat{height: 868px;} #card{height: 1013px;} #contatos{height: 993px;} #scro{height: 878px;}}
    @media ( max-height: 1042px){#chat{height: 867px;} #card{height: 1012px;} #contatos{height: 992px;} #scro{height: 877px;}}
    @media ( max-height: 1041px){#chat{height: 866px;} #card{height: 1011px;} #contatos{height: 991px;} #scro{height: 876px;}}
    @media ( max-height: 1040px){#chat{height: 865px;} #card{height: 1010px;} #contatos{height: 990px;} #scro{height: 875px;}}
    @media ( max-height: 1039px){#chat{height: 864px;} #card{height: 1009px;} #contatos{height: 989px;} #scro{height: 874px;}}
    @media ( max-height: 1038px){#chat{height: 863px;} #card{height: 1008px;} #contatos{height: 988px;} #scro{height: 873px;}}
    @media ( max-height: 1037px){#chat{height: 862px;} #card{height: 1007px;} #contatos{height: 987px;} #scro{height: 872px;}}
    @media ( max-height: 1036px){#chat{height: 861px;} #card{height: 1006px;} #contatos{height: 986px;} #scro{height: 871px;}}
    @media ( max-height: 1035px){#chat{height: 860px;} #card{height: 1005px;} #contatos{height: 985px;} #scro{height: 870px;}}
    @media ( max-height: 1034px){#chat{height: 859px;} #card{height: 1004px;} #contatos{height: 984px;} #scro{height: 869px;}}
    @media ( max-height: 1033px){#chat{height: 858px;} #card{height: 1003px;} #contatos{height: 983px;} #scro{height: 868px;}}
    @media ( max-height: 1032px){#chat{height: 857px;} #card{height: 1002px;} #contatos{height: 982px;} #scro{height: 867px;}}
    @media ( max-height: 1031px){#chat{height: 856px;} #card{height: 1001px;} #contatos{height: 981px;} #scro{height: 866px;}}
    @media ( max-height: 1030px){#chat{height: 855px;} #card{height: 1000px;} #contatos{height: 980px;} #scro{height: 865px;}}
    @media ( max-height: 1029px){#chat{height: 854px;} #card{height: 999px;} #contatos{height: 979px;} #scro{height: 864px;}}
    @media ( max-height: 1028px){#chat{height: 853px;} #card{height: 998px;} #contatos{height: 978px;} #scro{height: 863px;}}
    @media ( max-height: 1027px){#chat{height: 852px;} #card{height: 997px;} #contatos{height: 977px;} #scro{height: 862px;}}
    @media ( max-height: 1026px){#chat{height: 851px;} #card{height: 996px;} #contatos{height: 976px;} #scro{height: 861px;}}
    @media ( max-height: 1025px){#chat{height: 850px;} #card{height: 995px;} #contatos{height: 975px;} #scro{height: 860px;}}
    @media ( max-height: 1024px){#chat{height: 849px;} #card{height: 994px;} #contatos{height: 974px;} #scro{height: 859px;}}
    @media ( max-height: 1023px){#chat{height: 848px;} #card{height: 993px;} #contatos{height: 973px;} #scro{height: 858px;}}
    @media ( max-height: 1022px){#chat{height: 847px;} #card{height: 992px;} #contatos{height: 972px;} #scro{height: 857px;}}
    @media ( max-height: 1021px){#chat{height: 846px;} #card{height: 991px;} #contatos{height: 971px;} #scro{height: 856px;}}
    @media ( max-height: 1020px){#chat{height: 845px;} #card{height: 990px;} #contatos{height: 970px;} #scro{height: 855px;}}
    @media ( max-height: 1019px){#chat{height: 844px;} #card{height: 989px;} #contatos{height: 969px;} #scro{height: 854px;}}
    @media ( max-height: 1018px){#chat{height: 843px;} #card{height: 988px;} #contatos{height: 968px;} #scro{height: 853px;}}
    @media ( max-height: 1017px){#chat{height: 842px;} #card{height: 987px;} #contatos{height: 967px;} #scro{height: 852px;}}
    @media ( max-height: 1016px){#chat{height: 841px;} #card{height: 986px;} #contatos{height: 966px;} #scro{height: 851px;}}
    @media ( max-height: 1015px){#chat{height: 840px;} #card{height: 985px;} #contatos{height: 965px;} #scro{height: 850px;}}
    @media ( max-height: 1014px){#chat{height: 839px;} #card{height: 984px;} #contatos{height: 964px;} #scro{height: 849px;}}
    @media ( max-height: 1013px){#chat{height: 838px;} #card{height: 983px;} #contatos{height: 963px;} #scro{height: 848px;}}
    @media ( max-height: 1012px){#chat{height: 837px;} #card{height: 982px;} #contatos{height: 962px;} #scro{height: 847px;}}
    @media ( max-height: 1011px){#chat{height: 836px;} #card{height: 981px;} #contatos{height: 961px;} #scro{height: 846px;}}
    @media ( max-height: 1010px){#chat{height: 835px;} #card{height: 980px;} #contatos{height: 960px;} #scro{height: 845px;}}
    @media ( max-height: 1009px){#chat{height: 834px;} #card{height: 979px;} #contatos{height: 959px;} #scro{height: 844px;}}
    @media ( max-height: 1008px){#chat{height: 833px;} #card{height: 978px;} #contatos{height: 958px;} #scro{height: 843px;}}
    @media ( max-height: 1007px){#chat{height: 832px;} #card{height: 977px;} #contatos{height: 957px;} #scro{height: 842px;}}
    @media ( max-height: 1006px){#chat{height: 831px;} #card{height: 976px;} #contatos{height: 956px;} #scro{height: 841px;}}
    @media ( max-height: 1005px){#chat{height: 830px;} #card{height: 975px;} #contatos{height: 955px;} #scro{height: 840px;}}
    @media ( max-height: 1004px){#chat{height: 829px;} #card{height: 974px;} #contatos{height: 954px;} #scro{height: 839px;}}
    @media ( max-height: 1003px){#chat{height: 828px;} #card{height: 973px;} #contatos{height: 953px;} #scro{height: 838px;}}
    @media ( max-height: 1002px){#chat{height: 827px;} #card{height: 972px;} #contatos{height: 952px;} #scro{height: 837px;}}
    @media ( max-height: 1001px){#chat{height: 826px;} #card{height: 971px;} #contatos{height: 951px;} #scro{height: 836px;}}
    @media ( max-height: 1000px){#chat{height: 825px;} #card{height: 970px;} #contatos{height: 950px;} #scro{height: 835px;}}
    @media ( max-height: 999px){#chat{height: 824px;} #card{height: 969px;} #contatos{height: 949px;} #scro{height: 834px;}}
    @media ( max-height: 998px){#chat{height: 823px;} #card{height: 968px;} #contatos{height: 948px;} #scro{height: 833px;}}
    @media ( max-height: 997px){#chat{height: 822px;} #card{height: 967px;} #contatos{height: 947px;} #scro{height: 832px;}}
    @media ( max-height: 996px){#chat{height: 821px;} #card{height: 966px;} #contatos{height: 946px;} #scro{height: 831px;}}
    @media ( max-height: 995px){#chat{height: 820px;} #card{height: 965px;} #contatos{height: 945px;} #scro{height: 830px;}}
    @media ( max-height: 994px){#chat{height: 819px;} #card{height: 964px;} #contatos{height: 944px;} #scro{height: 829px;}}
    @media ( max-height: 993px){#chat{height: 818px;} #card{height: 963px;} #contatos{height: 943px;} #scro{height: 828px;}}
    @media ( max-height: 992px){#chat{height: 817px;} #card{height: 962px;} #contatos{height: 942px;} #scro{height: 827px;}}
    @media ( max-height: 991px){#chat{height: 816px;} #card{height: 961px;} #contatos{height: 941px;} #scro{height: 826px;}}
    @media ( max-height: 990px){#chat{height: 815px;} #card{height: 960px;} #contatos{height: 940px;} #scro{height: 825px;}}
    @media ( max-height: 989px){#chat{height: 814px;} #card{height: 959px;} #contatos{height: 939px;} #scro{height: 824px;}}
    @media ( max-height: 988px){#chat{height: 813px;} #card{height: 958px;} #contatos{height: 938px;} #scro{height: 823px;}}
    @media ( max-height: 987px){#chat{height: 812px;} #card{height: 957px;} #contatos{height: 937px;} #scro{height: 822px;}}
    @media ( max-height: 986px){#chat{height: 811px;} #card{height: 956px;} #contatos{height: 936px;} #scro{height: 821px;}}
    @media ( max-height: 985px){#chat{height: 810px;} #card{height: 955px;} #contatos{height: 935px;} #scro{height: 820px;}}
    @media ( max-height: 984px){#chat{height: 809px;} #card{height: 954px;} #contatos{height: 934px;} #scro{height: 819px;}}
    @media ( max-height: 983px){#chat{height: 808px;} #card{height: 953px;} #contatos{height: 933px;} #scro{height: 818px;}}
    @media ( max-height: 982px){#chat{height: 807px;} #card{height: 952px;} #contatos{height: 932px;} #scro{height: 817px;}}
    @media ( max-height: 981px){#chat{height: 806px;} #card{height: 951px;} #contatos{height: 931px;} #scro{height: 816px;}}
    @media ( max-height: 980px){#chat{height: 805px;} #card{height: 950px;} #contatos{height: 930px;} #scro{height: 815px;}}
    @media ( max-height: 979px){#chat{height: 804px;} #card{height: 949px;} #contatos{height: 929px;} #scro{height: 814px;}}
    @media ( max-height: 978px){#chat{height: 803px;} #card{height: 948px;} #contatos{height: 928px;} #scro{height: 813px;}}
    @media ( max-height: 977px){#chat{height: 802px;} #card{height: 947px;} #contatos{height: 927px;} #scro{height: 812px;}}
    @media ( max-height: 976px){#chat{height: 801px;} #card{height: 946px;} #contatos{height: 926px;} #scro{height: 811px;}}
    @media ( max-height: 975px){#chat{height: 800px;} #card{height: 945px;} #contatos{height: 925px;} #scro{height: 810px;}}
    @media ( max-height: 974px){#chat{height: 799px;} #card{height: 944px;} #contatos{height: 924px;} #scro{height: 809px;}}
    @media ( max-height: 973px){#chat{height: 798px;} #card{height: 943px;} #contatos{height: 923px;} #scro{height: 808px;}}
    @media ( max-height: 972px){#chat{height: 797px;} #card{height: 942px;} #contatos{height: 922px;} #scro{height: 807px;}}
    @media ( max-height: 971px){#chat{height: 796px;} #card{height: 941px;} #contatos{height: 921px;} #scro{height: 806px;}}
    @media ( max-height: 970px){#chat{height: 795px;} #card{height: 940px;} #contatos{height: 920px;} #scro{height: 805px;}}
    @media ( max-height: 969px){#chat{height: 794px;} #card{height: 939px;} #contatos{height: 919px;} #scro{height: 804px;}}
    @media ( max-height: 968px){#chat{height: 793px;} #card{height: 938px;} #contatos{height: 918px;} #scro{height: 803px;}}
    @media ( max-height: 967px){#chat{height: 792px;} #card{height: 937px;} #contatos{height: 917px;} #scro{height: 802px;}}
    @media ( max-height: 966px){#chat{height: 791px;} #card{height: 936px;} #contatos{height: 916px;} #scro{height: 801px;}}
    @media ( max-height: 965px){#chat{height: 790px;} #card{height: 935px;} #contatos{height: 915px;} #scro{height: 800px;}}
    @media ( max-height: 964px){#chat{height: 789px;} #card{height: 934px;} #contatos{height: 914px;} #scro{height: 799px;}}
    @media ( max-height: 963px){#chat{height: 788px;} #card{height: 933px;} #contatos{height: 913px;} #scro{height: 798px;}}
    @media ( max-height: 962px){#chat{height: 787px;} #card{height: 932px;} #contatos{height: 912px;} #scro{height: 797px;}}
    @media ( max-height: 961px){#chat{height: 786px;} #card{height: 931px;} #contatos{height: 911px;} #scro{height: 796px;}}
    @media ( max-height: 960px){#chat{height: 785px;} #card{height: 930px;} #contatos{height: 910px;} #scro{height: 795px;}}
    @media ( max-height: 959px){#chat{height: 784px;} #card{height: 929px;} #contatos{height: 909px;} #scro{height: 794px;}}
    @media ( max-height: 958px){#chat{height: 783px;} #card{height: 928px;} #contatos{height: 908px;} #scro{height: 793px;}}
    @media ( max-height: 957px){#chat{height: 782px;} #card{height: 927px;} #contatos{height: 907px;} #scro{height: 792px;}}
    @media ( max-height: 956px){#chat{height: 781px;} #card{height: 926px;} #contatos{height: 906px;} #scro{height: 791px;}}
    @media ( max-height: 955px){#chat{height: 780px;} #card{height: 925px;} #contatos{height: 905px;} #scro{height: 790px;}}
    @media ( max-height: 954px){#chat{height: 779px;} #card{height: 924px;} #contatos{height: 904px;} #scro{height: 789px;}}
    @media ( max-height: 953px){#chat{height: 778px;} #card{height: 923px;} #contatos{height: 903px;} #scro{height: 788px;}}
    @media ( max-height: 952px){#chat{height: 777px;} #card{height: 922px;} #contatos{height: 902px;} #scro{height: 787px;}}
    @media ( max-height: 951px){#chat{height: 776px;} #card{height: 921px;} #contatos{height: 901px;} #scro{height: 786px;}}
    @media ( max-height: 950px){#chat{height: 775px;} #card{height: 920px;} #contatos{height: 900px;} #scro{height: 785px;}}
    @media ( max-height: 949px){#chat{height: 774px;} #card{height: 919px;} #contatos{height: 899px;} #scro{height: 784px;}}
    @media ( max-height: 948px){#chat{height: 773px;} #card{height: 918px;} #contatos{height: 898px;} #scro{height: 783px;}}
    @media ( max-height: 947px){#chat{height: 772px;} #card{height: 917px;} #contatos{height: 897px;} #scro{height: 782px;}}
    @media ( max-height: 946px){#chat{height: 771px;} #card{height: 916px;} #contatos{height: 896px;} #scro{height: 781px;}}
    @media ( max-height: 945px){#chat{height: 770px;} #card{height: 915px;} #contatos{height: 895px;} #scro{height: 780px;}}
    @media ( max-height: 944px){#chat{height: 769px;} #card{height: 914px;} #contatos{height: 894px;} #scro{height: 779px;}}
    @media ( max-height: 943px){#chat{height: 768px;} #card{height: 913px;} #contatos{height: 893px;} #scro{height: 778px;}}
    @media ( max-height: 942px){#chat{height: 767px;} #card{height: 912px;} #contatos{height: 892px;} #scro{height: 777px;}}
    @media ( max-height: 941px){#chat{height: 766px;} #card{height: 911px;} #contatos{height: 891px;} #scro{height: 776px;}}
    @media ( max-height: 940px){#chat{height: 765px;} #card{height: 910px;} #contatos{height: 890px;} #scro{height: 775px;}}
    @media ( max-height: 939px){#chat{height: 764px;} #card{height: 909px;} #contatos{height: 889px;} #scro{height: 774px;}}
    @media ( max-height: 938px){#chat{height: 763px;} #card{height: 908px;} #contatos{height: 888px;} #scro{height: 773px;}}
    @media ( max-height: 937px){#chat{height: 762px;} #card{height: 907px;} #contatos{height: 887px;} #scro{height: 772px;}}
    @media ( max-height: 936px){#chat{height: 761px;} #card{height: 906px;} #contatos{height: 886px;} #scro{height: 771px;}}
    @media ( max-height: 935px){#chat{height: 760px;} #card{height: 905px;} #contatos{height: 885px;} #scro{height: 770px;}}
    @media ( max-height: 934px){#chat{height: 759px;} #card{height: 904px;} #contatos{height: 884px;} #scro{height: 769px;}}
    @media ( max-height: 933px){#chat{height: 758px;} #card{height: 903px;} #contatos{height: 883px;} #scro{height: 768px;}}
    @media ( max-height: 932px){#chat{height: 757px;} #card{height: 902px;} #contatos{height: 882px;} #scro{height: 767px;}}
    @media ( max-height: 931px){#chat{height: 756px;} #card{height: 901px;} #contatos{height: 881px;} #scro{height: 766px;}}
    @media ( max-height: 930px){#chat{height: 755px;} #card{height: 900px;} #contatos{height: 880px;} #scro{height: 765px;}}
    @media ( max-height: 929px){#chat{height: 754px;} #card{height: 899px;} #contatos{height: 879px;} #scro{height: 764px;}}
    @media ( max-height: 928px){#chat{height: 753px;} #card{height: 898px;} #contatos{height: 878px;} #scro{height: 763px;}}
    @media ( max-height: 927px){#chat{height: 752px;} #card{height: 897px;} #contatos{height: 877px;} #scro{height: 762px;}}
    @media ( max-height: 926px){#chat{height: 751px;} #card{height: 896px;} #contatos{height: 876px;} #scro{height: 761px;}}
    @media ( max-height: 925px){#chat{height: 750px;} #card{height: 895px;} #contatos{height: 875px;} #scro{height: 760px;}}
    @media ( max-height: 924px){#chat{height: 749px;} #card{height: 894px;} #contatos{height: 874px;} #scro{height: 759px;}}
    @media ( max-height: 923px){#chat{height: 748px;} #card{height: 893px;} #contatos{height: 873px;} #scro{height: 758px;}}
    @media ( max-height: 922px){#chat{height: 747px;} #card{height: 892px;} #contatos{height: 872px;} #scro{height: 757px;}}
    @media ( max-height: 921px){#chat{height: 746px;} #card{height: 891px;} #contatos{height: 871px;} #scro{height: 756px;}}
    @media ( max-height: 920px){#chat{height: 745px;} #card{height: 890px;} #contatos{height: 870px;} #scro{height: 755px;}}
    @media ( max-height: 919px){#chat{height: 744px;} #card{height: 889px;} #contatos{height: 869px;} #scro{height: 754px;}}
    @media ( max-height: 918px){#chat{height: 743px;} #card{height: 888px;} #contatos{height: 868px;} #scro{height: 753px;}}
    @media ( max-height: 917px){#chat{height: 742px;} #card{height: 887px;} #contatos{height: 867px;} #scro{height: 752px;}}
    @media ( max-height: 916px){#chat{height: 741px;} #card{height: 886px;} #contatos{height: 866px;} #scro{height: 751px;}}
    @media ( max-height: 915px){#chat{height: 740px;} #card{height: 885px;} #contatos{height: 865px;} #scro{height: 750px;}}
    @media ( max-height: 914px){#chat{height: 739px;} #card{height: 884px;} #contatos{height: 864px;} #scro{height: 749px;}}
    @media ( max-height: 913px){#chat{height: 738px;} #card{height: 883px;} #contatos{height: 863px;} #scro{height: 748px;}}
    @media ( max-height: 912px){#chat{height: 737px;} #card{height: 882px;} #contatos{height: 862px;} #scro{height: 747px;}}
    @media ( max-height: 911px){#chat{height: 736px;} #card{height: 881px;} #contatos{height: 861px;} #scro{height: 746px;}}
    @media ( max-height: 910px){#chat{height: 735px;} #card{height: 880px;} #contatos{height: 860px;} #scro{height: 745px;}}
    @media ( max-height: 909px){#chat{height: 734px;} #card{height: 879px;} #contatos{height: 859px;} #scro{height: 744px;}}
    @media ( max-height: 908px){#chat{height: 733px;} #card{height: 878px;} #contatos{height: 858px;} #scro{height: 743px;}}
    @media ( max-height: 907px){#chat{height: 732px;} #card{height: 877px;} #contatos{height: 857px;} #scro{height: 742px;}}
    @media ( max-height: 906px){#chat{height: 731px;} #card{height: 876px;} #contatos{height: 856px;} #scro{height: 741px;}}
    @media ( max-height: 905px){#chat{height: 730px;} #card{height: 875px;} #contatos{height: 855px;} #scro{height: 740px;}}
    @media ( max-height: 904px){#chat{height: 729px;} #card{height: 874px;} #contatos{height: 854px;} #scro{height: 739px;}}
    @media ( max-height: 903px){#chat{height: 728px;} #card{height: 873px;} #contatos{height: 853px;} #scro{height: 738px;}}
    @media ( max-height: 902px){#chat{height: 727px;} #card{height: 872px;} #contatos{height: 852px;} #scro{height: 737px;}}
    @media ( max-height: 901px){#chat{height: 726px;} #card{height: 871px;} #contatos{height: 851px;} #scro{height: 736px;}}
    @media ( max-height: 900px){#chat{height: 725px;} #card{height: 870px;} #contatos{height: 850px;} #scro{height: 735px;}}
    @media ( max-height: 899px){#chat{height: 724px;} #card{height: 869px;} #contatos{height: 849px;} #scro{height: 734px;}}
    @media ( max-height: 898px){#chat{height: 723px;} #card{height: 868px;} #contatos{height: 848px;} #scro{height: 733px;}}
    @media ( max-height: 897px){#chat{height: 722px;} #card{height: 867px;} #contatos{height: 847px;} #scro{height: 732px;}}
    @media ( max-height: 896px){#chat{height: 721px;} #card{height: 866px;} #contatos{height: 846px;} #scro{height: 731px;}}
    @media ( max-height: 895px){#chat{height: 720px;} #card{height: 865px;} #contatos{height: 845px;} #scro{height: 730px;}}
    @media ( max-height: 894px){#chat{height: 719px;} #card{height: 864px;} #contatos{height: 844px;} #scro{height: 729px;}}
    @media ( max-height: 893px){#chat{height: 718px;} #card{height: 863px;} #contatos{height: 843px;} #scro{height: 728px;}}
    @media ( max-height: 892px){#chat{height: 717px;} #card{height: 862px;} #contatos{height: 842px;} #scro{height: 727px;}}
    @media ( max-height: 891px){#chat{height: 716px;} #card{height: 861px;} #contatos{height: 841px;} #scro{height: 726px;}}
    @media ( max-height: 890px){#chat{height: 715px;} #card{height: 860px;} #contatos{height: 840px;} #scro{height: 725px;}}
    @media ( max-height: 889px){#chat{height: 714px;} #card{height: 859px;} #contatos{height: 839px;} #scro{height: 724px;}}
    @media ( max-height: 888px){#chat{height: 713px;} #card{height: 858px;} #contatos{height: 838px;} #scro{height: 723px;}}
    @media ( max-height: 887px){#chat{height: 712px;} #card{height: 857px;} #contatos{height: 837px;} #scro{height: 722px;}}
    @media ( max-height: 886px){#chat{height: 711px;} #card{height: 856px;} #contatos{height: 836px;} #scro{height: 721px;}}
    @media ( max-height: 885px){#chat{height: 710px;} #card{height: 855px;} #contatos{height: 835px;} #scro{height: 720px;}}
    @media ( max-height: 884px){#chat{height: 709px;} #card{height: 854px;} #contatos{height: 834px;} #scro{height: 719px;}}
    @media ( max-height: 883px){#chat{height: 708px;} #card{height: 853px;} #contatos{height: 833px;} #scro{height: 718px;}}
    @media ( max-height: 882px){#chat{height: 707px;} #card{height: 852px;} #contatos{height: 832px;} #scro{height: 717px;}}
    @media ( max-height: 881px){#chat{height: 706px;} #card{height: 851px;} #contatos{height: 831px;} #scro{height: 716px;}}
    @media ( max-height: 880px){#chat{height: 705px;} #card{height: 850px;} #contatos{height: 830px;} #scro{height: 715px;}}
    @media ( max-height: 879px){#chat{height: 704px;} #card{height: 849px;} #contatos{height: 829px;} #scro{height: 714px;}}
    @media ( max-height: 878px){#chat{height: 703px;} #card{height: 848px;} #contatos{height: 828px;} #scro{height: 713px;}}
    @media ( max-height: 877px){#chat{height: 702px;} #card{height: 847px;} #contatos{height: 827px;} #scro{height: 712px;}}
    @media ( max-height: 876px){#chat{height: 701px;} #card{height: 846px;} #contatos{height: 826px;} #scro{height: 711px;}}
    @media ( max-height: 875px){#chat{height: 700px;} #card{height: 845px;} #contatos{height: 825px;} #scro{height: 710px;}}
    @media ( max-height: 874px){#chat{height: 699px;} #card{height: 844px;} #contatos{height: 824px;} #scro{height: 709px;}}
    @media ( max-height: 873px){#chat{height: 698px;} #card{height: 843px;} #contatos{height: 823px;} #scro{height: 708px;}}
    @media ( max-height: 872px){#chat{height: 697px;} #card{height: 842px;} #contatos{height: 822px;} #scro{height: 707px;}}
    @media ( max-height: 871px){#chat{height: 696px;} #card{height: 841px;} #contatos{height: 821px;} #scro{height: 706px;}}
    @media ( max-height: 870px){#chat{height: 695px;} #card{height: 840px;} #contatos{height: 820px;} #scro{height: 705px;}}
    @media ( max-height: 869px){#chat{height: 694px;} #card{height: 839px;} #contatos{height: 819px;} #scro{height: 704px;}}
    @media ( max-height: 868px){#chat{height: 693px;} #card{height: 838px;} #contatos{height: 818px;} #scro{height: 703px;}}
    @media ( max-height: 867px){#chat{height: 692px;} #card{height: 837px;} #contatos{height: 817px;} #scro{height: 702px;}}
    @media ( max-height: 866px){#chat{height: 691px;} #card{height: 836px;} #contatos{height: 816px;} #scro{height: 701px;}}
    @media ( max-height: 865px){#chat{height: 690px;} #card{height: 835px;} #contatos{height: 815px;} #scro{height: 700px;}}
    @media ( max-height: 864px){#chat{height: 689px;} #card{height: 834px;} #contatos{height: 814px;} #scro{height: 699px;}}
    @media ( max-height: 863px){#chat{height: 688px;} #card{height: 833px;} #contatos{height: 813px;} #scro{height: 698px;}}
    @media ( max-height: 862px){#chat{height: 687px;} #card{height: 832px;} #contatos{height: 812px;} #scro{height: 697px;}}
    @media ( max-height: 861px){#chat{height: 686px;} #card{height: 831px;} #contatos{height: 811px;} #scro{height: 696px;}}
    @media ( max-height: 860px){#chat{height: 685px;} #card{height: 830px;} #contatos{height: 810px;} #scro{height: 695px;}}
    @media ( max-height: 859px){#chat{height: 684px;} #card{height: 829px;} #contatos{height: 809px;} #scro{height: 694px;}}
    @media ( max-height: 858px){#chat{height: 683px;} #card{height: 828px;} #contatos{height: 808px;} #scro{height: 693px;}}
    @media ( max-height: 857px){#chat{height: 682px;} #card{height: 827px;} #contatos{height: 807px;} #scro{height: 692px;}}
    @media ( max-height: 856px){#chat{height: 681px;} #card{height: 826px;} #contatos{height: 806px;} #scro{height: 691px;}}
    @media ( max-height: 855px){#chat{height: 680px;} #card{height: 825px;} #contatos{height: 805px;} #scro{height: 690px;}}
    @media ( max-height: 854px){#chat{height: 679px;} #card{height: 824px;} #contatos{height: 804px;} #scro{height: 689px;}}
    @media ( max-height: 853px){#chat{height: 678px;} #card{height: 823px;} #contatos{height: 803px;} #scro{height: 688px;}}
    @media ( max-height: 852px){#chat{height: 677px;} #card{height: 822px;} #contatos{height: 802px;} #scro{height: 687px;}}
    @media ( max-height: 851px){#chat{height: 676px;} #card{height: 821px;} #contatos{height: 801px;} #scro{height: 686px;}}
    @media ( max-height: 850px){#chat{height: 675px;} #card{height: 820px;} #contatos{height: 800px;} #scro{height: 685px;}}
    @media ( max-height: 849px){#chat{height: 674px;} #card{height: 819px;} #contatos{height: 799px;} #scro{height: 684px;}}
    @media ( max-height: 848px){#chat{height: 673px;} #card{height: 818px;} #contatos{height: 798px;} #scro{height: 683px;}}
    @media ( max-height: 847px){#chat{height: 672px;} #card{height: 817px;} #contatos{height: 797px;} #scro{height: 682px;}}
    @media ( max-height: 846px){#chat{height: 671px;} #card{height: 816px;} #contatos{height: 796px;} #scro{height: 681px;}}
    @media ( max-height: 845px){#chat{height: 670px;} #card{height: 815px;} #contatos{height: 795px;} #scro{height: 680px;}}
    @media ( max-height: 844px){#chat{height: 669px;} #card{height: 814px;} #contatos{height: 794px;} #scro{height: 679px;}}
    @media ( max-height: 843px){#chat{height: 668px;} #card{height: 813px;} #contatos{height: 793px;} #scro{height: 678px;}}
    @media ( max-height: 842px){#chat{height: 667px;} #card{height: 812px;} #contatos{height: 792px;} #scro{height: 677px;}}
    @media ( max-height: 841px){#chat{height: 666px;} #card{height: 811px;} #contatos{height: 791px;} #scro{height: 676px;}}
    @media ( max-height: 840px){#chat{height: 665px;} #card{height: 810px;} #contatos{height: 790px;} #scro{height: 675px;}}
    @media ( max-height: 839px){#chat{height: 664px;} #card{height: 809px;} #contatos{height: 789px;} #scro{height: 674px;}}
    @media ( max-height: 838px){#chat{height: 663px;} #card{height: 808px;} #contatos{height: 788px;} #scro{height: 673px;}}
    @media ( max-height: 837px){#chat{height: 662px;} #card{height: 807px;} #contatos{height: 787px;} #scro{height: 672px;}}
    @media ( max-height: 836px){#chat{height: 661px;} #card{height: 806px;} #contatos{height: 786px;} #scro{height: 671px;}}
    @media ( max-height: 835px){#chat{height: 660px;} #card{height: 805px;} #contatos{height: 785px;} #scro{height: 670px;}}
    @media ( max-height: 834px){#chat{height: 659px;} #card{height: 804px;} #contatos{height: 784px;} #scro{height: 669px;}}
    @media ( max-height: 833px){#chat{height: 658px;} #card{height: 803px;} #contatos{height: 783px;} #scro{height: 668px;}}
    @media ( max-height: 832px){#chat{height: 657px;} #card{height: 802px;} #contatos{height: 782px;} #scro{height: 667px;}}
    @media ( max-height: 831px){#chat{height: 656px;} #card{height: 801px;} #contatos{height: 781px;} #scro{height: 666px;}}
    @media ( max-height: 830px){#chat{height: 655px;} #card{height: 800px;} #contatos{height: 780px;} #scro{height: 665px;}}
    @media ( max-height: 829px){#chat{height: 654px;} #card{height: 799px;} #contatos{height: 779px;} #scro{height: 664px;}}
    @media ( max-height: 828px){#chat{height: 653px;} #card{height: 798px;} #contatos{height: 778px;} #scro{height: 663px;}}
    @media ( max-height: 827px){#chat{height: 652px;} #card{height: 797px;} #contatos{height: 777px;} #scro{height: 662px;}}
    @media ( max-height: 826px){#chat{height: 651px;} #card{height: 796px;} #contatos{height: 776px;} #scro{height: 661px;}}
    @media ( max-height: 825px){#chat{height: 650px;} #card{height: 795px;} #contatos{height: 775px;} #scro{height: 660px;}}
    @media ( max-height: 824px){#chat{height: 649px;} #card{height: 794px;} #contatos{height: 774px;} #scro{height: 659px;}}
    @media ( max-height: 823px){#chat{height: 648px;} #card{height: 793px;} #contatos{height: 773px;} #scro{height: 658px;}}
    @media ( max-height: 822px){#chat{height: 647px;} #card{height: 792px;} #contatos{height: 772px;} #scro{height: 657px;}}
    @media ( max-height: 821px){#chat{height: 646px;} #card{height: 791px;} #contatos{height: 771px;} #scro{height: 656px;}}
    @media ( max-height: 820px){#chat{height: 645px;} #card{height: 790px;} #contatos{height: 770px;} #scro{height: 655px;}}
    @media ( max-height: 819px){#chat{height: 644px;} #card{height: 789px;} #contatos{height: 769px;} #scro{height: 654px;}}
    @media ( max-height: 818px){#chat{height: 643px;} #card{height: 788px;} #contatos{height: 768px;} #scro{height: 653px;}}
    @media ( max-height: 817px){#chat{height: 642px;} #card{height: 787px;} #contatos{height: 767px;} #scro{height: 652px;}}
    @media ( max-height: 816px){#chat{height: 641px;} #card{height: 786px;} #contatos{height: 766px;} #scro{height: 651px;}}
    @media ( max-height: 815px){#chat{height: 640px;} #card{height: 785px;} #contatos{height: 765px;} #scro{height: 650px;}}
    @media ( max-height: 814px){#chat{height: 639px;} #card{height: 784px;} #contatos{height: 764px;} #scro{height: 649px;}}
    @media ( max-height: 813px){#chat{height: 638px;} #card{height: 783px;} #contatos{height: 763px;} #scro{height: 648px;}}
    @media ( max-height: 812px){#chat{height: 637px;} #card{height: 782px;} #contatos{height: 762px;} #scro{height: 647px;}}
    @media ( max-height: 811px){#chat{height: 636px;} #card{height: 781px;} #contatos{height: 761px;} #scro{height: 646px;}}
    @media ( max-height: 810px){#chat{height: 635px;} #card{height: 780px;} #contatos{height: 760px;} #scro{height: 645px;}}
    @media ( max-height: 809px){#chat{height: 634px;} #card{height: 779px;} #contatos{height: 759px;} #scro{height: 644px;}}
    @media ( max-height: 808px){#chat{height: 633px;} #card{height: 778px;} #contatos{height: 758px;} #scro{height: 643px;}}
    @media ( max-height: 807px){#chat{height: 632px;} #card{height: 777px;} #contatos{height: 757px;} #scro{height: 642px;}}
    @media ( max-height: 806px){#chat{height: 631px;} #card{height: 776px;} #contatos{height: 756px;} #scro{height: 641px;}}
    @media ( max-height: 805px){#chat{height: 630px;} #card{height: 775px;} #contatos{height: 755px;} #scro{height: 640px;}}
    @media ( max-height: 804px){#chat{height: 629px;} #card{height: 774px;} #contatos{height: 754px;} #scro{height: 639px;}}
    @media ( max-height: 803px){#chat{height: 628px;} #card{height: 773px;} #contatos{height: 753px;} #scro{height: 638px;}}
    @media ( max-height: 802px){#chat{height: 627px;} #card{height: 772px;} #contatos{height: 752px;} #scro{height: 637px;}}
    @media ( max-height: 801px){#chat{height: 626px;} #card{height: 771px;} #contatos{height: 751px;} #scro{height: 636px;}}
    @media ( max-height: 800px){#chat{height: 625px;} #card{height: 770px;} #contatos{height: 750px;} #scro{height: 635px;}}
    @media ( max-height: 799px){#chat{height: 624px;} #card{height: 769px;} #contatos{height: 749px;} #scro{height: 634px;}}
    @media ( max-height: 798px){#chat{height: 623px;} #card{height: 768px;} #contatos{height: 748px;} #scro{height: 633px;}}
    @media ( max-height: 797px){#chat{height: 622px;} #card{height: 767px;} #contatos{height: 747px;} #scro{height: 632px;}}
    @media ( max-height: 796px){#chat{height: 621px;} #card{height: 766px;} #contatos{height: 746px;} #scro{height: 631px;}}
    @media ( max-height: 795px){#chat{height: 620px;} #card{height: 765px;} #contatos{height: 745px;} #scro{height: 630px;}}
    @media ( max-height: 794px){#chat{height: 619px;} #card{height: 764px;} #contatos{height: 744px;} #scro{height: 629px;}}
    @media ( max-height: 793px){#chat{height: 618px;} #card{height: 763px;} #contatos{height: 743px;} #scro{height: 628px;}}
    @media ( max-height: 792px){#chat{height: 617px;} #card{height: 762px;} #contatos{height: 742px;} #scro{height: 627px;}}
    @media ( max-height: 791px){#chat{height: 616px;} #card{height: 761px;} #contatos{height: 741px;} #scro{height: 626px;}}
    @media ( max-height: 790px){#chat{height: 615px;} #card{height: 760px;} #contatos{height: 740px;} #scro{height: 625px;}}
    @media ( max-height: 789px){#chat{height: 614px;} #card{height: 759px;} #contatos{height: 739px;} #scro{height: 624px;}}
    @media ( max-height: 788px){#chat{height: 613px;} #card{height: 758px;} #contatos{height: 738px;} #scro{height: 623px;}}
    @media ( max-height: 787px){#chat{height: 612px;} #card{height: 757px;} #contatos{height: 737px;} #scro{height: 622px;}}
    @media ( max-height: 786px){#chat{height: 611px;} #card{height: 756px;} #contatos{height: 736px;} #scro{height: 621px;}}
    @media ( max-height: 785px){#chat{height: 610px;} #card{height: 755px;} #contatos{height: 735px;} #scro{height: 620px;}}
    @media ( max-height: 784px){#chat{height: 609px;} #card{height: 754px;} #contatos{height: 734px;} #scro{height: 619px;}}
    @media ( max-height: 783px){#chat{height: 608px;} #card{height: 753px;} #contatos{height: 733px;} #scro{height: 618px;}}
    @media ( max-height: 782px){#chat{height: 607px;} #card{height: 752px;} #contatos{height: 732px;} #scro{height: 617px;}}
    @media ( max-height: 781px){#chat{height: 606px;} #card{height: 751px;} #contatos{height: 731px;} #scro{height: 616px;}}
    @media ( max-height: 780px){#chat{height: 605px;} #card{height: 750px;} #contatos{height: 730px;} #scro{height: 615px;}}
    @media ( max-height: 779px){#chat{height: 604px;} #card{height: 749px;} #contatos{height: 729px;} #scro{height: 614px;}}
    @media ( max-height: 778px){#chat{height: 603px;} #card{height: 748px;} #contatos{height: 728px;} #scro{height: 613px;}}
    @media ( max-height: 777px){#chat{height: 602px;} #card{height: 747px;} #contatos{height: 727px;} #scro{height: 612px;}}
    @media ( max-height: 776px){#chat{height: 601px;} #card{height: 746px;} #contatos{height: 726px;} #scro{height: 611px;}}
    @media ( max-height: 775px){#chat{height: 600px;} #card{height: 745px;} #contatos{height: 725px;} #scro{height: 610px;}}
    @media ( max-height: 774px){#chat{height: 599px;} #card{height: 744px;} #contatos{height: 724px;} #scro{height: 609px;}}
    @media ( max-height: 773px){#chat{height: 598px;} #card{height: 743px;} #contatos{height: 723px;} #scro{height: 608px;}}
    @media ( max-height: 772px){#chat{height: 597px;} #card{height: 742px;} #contatos{height: 722px;} #scro{height: 607px;}}
    @media ( max-height: 771px){#chat{height: 596px;} #card{height: 741px;} #contatos{height: 721px;} #scro{height: 606px;}}
    @media ( max-height: 770px){#chat{height: 595px;} #card{height: 740px;} #contatos{height: 720px;} #scro{height: 605px;}}
    @media ( max-height: 769px){#chat{height: 594px;} #card{height: 739px;} #contatos{height: 719px;} #scro{height: 604px;}}
    @media ( max-height: 768px){#chat{height: 593px;} #card{height: 738px;} #contatos{height: 718px;} #scro{height: 603px;}}
    @media ( max-height: 767px){#chat{height: 592px;} #card{height: 737px;} #contatos{height: 717px;} #scro{height: 602px;}}
    @media ( max-height: 766px){#chat{height: 591px;} #card{height: 736px;} #contatos{height: 716px;} #scro{height: 601px;}}
    @media ( max-height: 765px){#chat{height: 590px;} #card{height: 735px;} #contatos{height: 715px;} #scro{height: 600px;}}
    @media ( max-height: 764px){#chat{height: 589px;} #card{height: 734px;} #contatos{height: 714px;} #scro{height: 599px;}}
    @media ( max-height: 763px){#chat{height: 588px;} #card{height: 733px;} #contatos{height: 713px;} #scro{height: 598px;}}
    @media ( max-height: 762px){#chat{height: 587px;} #card{height: 732px;} #contatos{height: 712px;} #scro{height: 597px;}}
    @media ( max-height: 761px){#chat{height: 586px;} #card{height: 731px;} #contatos{height: 711px;} #scro{height: 596px;}}
    @media ( max-height: 760px){#chat{height: 585px;} #card{height: 730px;} #contatos{height: 710px;} #scro{height: 595px;}}
    @media ( max-height: 759px){#chat{height: 584px;} #card{height: 729px;} #contatos{height: 709px;} #scro{height: 594px;}}
    @media ( max-height: 758px){#chat{height: 583px;} #card{height: 728px;} #contatos{height: 708px;} #scro{height: 593px;}}
    @media ( max-height: 757px){#chat{height: 582px;} #card{height: 727px;} #contatos{height: 707px;} #scro{height: 592px;}}
    @media ( max-height: 756px){#chat{height: 581px;} #card{height: 726px;} #contatos{height: 706px;} #scro{height: 591px;}}
    @media ( max-height: 755px){#chat{height: 580px;} #card{height: 725px;} #contatos{height: 705px;} #scro{height: 590px;}}
    @media ( max-height: 754px){#chat{height: 579px;} #card{height: 724px;} #contatos{height: 704px;} #scro{height: 589px;}}
    @media ( max-height: 753px){#chat{height: 578px;} #card{height: 723px;} #contatos{height: 703px;} #scro{height: 588px;}}
    @media ( max-height: 752px){#chat{height: 577px;} #card{height: 722px;} #contatos{height: 702px;} #scro{height: 587px;}}
    @media ( max-height: 751px){#chat{height: 576px;} #card{height: 721px;} #contatos{height: 701px;} #scro{height: 586px;}}
    @media ( max-height: 750px){#chat{height: 575px;} #card{height: 720px;} #contatos{height: 700px;} #scro{height: 585px;}}
    @media ( max-height: 749px){#chat{height: 574px;} #card{height: 719px;} #contatos{height: 699px;} #scro{height: 584px;}}
    @media ( max-height: 748px){#chat{height: 573px;} #card{height: 718px;} #contatos{height: 698px;} #scro{height: 583px;}}
    @media ( max-height: 747px){#chat{height: 572px;} #card{height: 717px;} #contatos{height: 697px;} #scro{height: 582px;}}
    @media ( max-height: 746px){#chat{height: 571px;} #card{height: 716px;} #contatos{height: 696px;} #scro{height: 581px;}}
    @media ( max-height: 745px){#chat{height: 570px;} #card{height: 715px;} #contatos{height: 695px;} #scro{height: 580px;}}
    @media ( max-height: 744px){#chat{height: 569px;} #card{height: 714px;} #contatos{height: 694px;} #scro{height: 579px;}}
    @media ( max-height: 743px){#chat{height: 568px;} #card{height: 713px;} #contatos{height: 693px;} #scro{height: 578px;}}
    @media ( max-height: 742px){#chat{height: 567px;} #card{height: 712px;} #contatos{height: 692px;} #scro{height: 577px;}}
    @media ( max-height: 741px){#chat{height: 566px;} #card{height: 711px;} #contatos{height: 691px;} #scro{height: 576px;}}
    @media ( max-height: 740px){#chat{height: 565px;} #card{height: 710px;} #contatos{height: 690px;} #scro{height: 575px;}}
    @media ( max-height: 739px){#chat{height: 564px;} #card{height: 709px;} #contatos{height: 689px;} #scro{height: 574px;}}
    @media ( max-height: 738px){#chat{height: 563px;} #card{height: 708px;} #contatos{height: 688px;} #scro{height: 573px;}}
    @media ( max-height: 737px){#chat{height: 562px;} #card{height: 707px;} #contatos{height: 687px;} #scro{height: 572px;}}
    @media ( max-height: 736px){#chat{height: 561px;} #card{height: 706px;} #contatos{height: 686px;} #scro{height: 571px;}}
    @media ( max-height: 735px){#chat{height: 560px;} #card{height: 705px;} #contatos{height: 685px;} #scro{height: 570px;}}
    @media ( max-height: 734px){#chat{height: 559px;} #card{height: 704px;} #contatos{height: 684px;} #scro{height: 569px;}}
    @media ( max-height: 733px){#chat{height: 558px;} #card{height: 703px;} #contatos{height: 683px;} #scro{height: 568px;}}
    @media ( max-height: 732px){#chat{height: 557px;} #card{height: 702px;} #contatos{height: 682px;} #scro{height: 567px;}}
    @media ( max-height: 731px){#chat{height: 556px;} #card{height: 701px;} #contatos{height: 681px;} #scro{height: 566px;}}
    @media ( max-height: 730px){#chat{height: 555px;} #card{height: 700px;} #contatos{height: 680px;} #scro{height: 565px;}}
    @media ( max-height: 729px){#chat{height: 554px;} #card{height: 699px;} #contatos{height: 679px;} #scro{height: 564px;}}
    @media ( max-height: 728px){#chat{height: 553px;} #card{height: 698px;} #contatos{height: 678px;} #scro{height: 563px;}}
    @media ( max-height: 727px){#chat{height: 552px;} #card{height: 697px;} #contatos{height: 677px;} #scro{height: 562px;}}
    @media ( max-height: 726px){#chat{height: 551px;} #card{height: 696px;} #contatos{height: 676px;} #scro{height: 561px;}}
    @media ( max-height: 725px){#chat{height: 550px;} #card{height: 695px;} #contatos{height: 675px;} #scro{height: 560px;}}
    @media ( max-height: 724px){#chat{height: 549px;} #card{height: 694px;} #contatos{height: 674px;} #scro{height: 559px;}}
    @media ( max-height: 723px){#chat{height: 548px;} #card{height: 693px;} #contatos{height: 673px;} #scro{height: 558px;}}
    @media ( max-height: 722px){#chat{height: 547px;} #card{height: 692px;} #contatos{height: 672px;} #scro{height: 557px;}}
    @media ( max-height: 721px){#chat{height: 546px;} #card{height: 691px;} #contatos{height: 671px;} #scro{height: 556px;}}
    @media ( max-height: 720px){#chat{height: 545px;} #card{height: 690px;} #contatos{height: 670px;} #scro{height: 555px;}}
    @media ( max-height: 719px){#chat{height: 544px;} #card{height: 689px;} #contatos{height: 669px;} #scro{height: 554px;}}
    @media ( max-height: 718px){#chat{height: 543px;} #card{height: 688px;} #contatos{height: 668px;} #scro{height: 553px;}}
    @media ( max-height: 717px){#chat{height: 542px;} #card{height: 687px;} #contatos{height: 667px;} #scro{height: 552px;}}
    @media ( max-height: 716px){#chat{height: 541px;} #card{height: 686px;} #contatos{height: 666px;} #scro{height: 551px;}}
    @media ( max-height: 715px){#chat{height: 540px;} #card{height: 685px;} #contatos{height: 665px;} #scro{height: 550px;}}
    @media ( max-height: 714px){#chat{height: 539px;} #card{height: 684px;} #contatos{height: 664px;} #scro{height: 549px;}}
    @media ( max-height: 713px){#chat{height: 538px;} #card{height: 683px;} #contatos{height: 663px;} #scro{height: 548px;}}
    @media ( max-height: 712px){#chat{height: 537px;} #card{height: 682px;} #contatos{height: 662px;} #scro{height: 547px;}}
    @media ( max-height: 711px){#chat{height: 536px;} #card{height: 681px;} #contatos{height: 661px;} #scro{height: 546px;}}
    @media ( max-height: 710px){#chat{height: 535px;} #card{height: 680px;} #contatos{height: 660px;} #scro{height: 545px;}}
    @media ( max-height: 709px){#chat{height: 534px;} #card{height: 679px;} #contatos{height: 659px;} #scro{height: 544px;}}
    @media ( max-height: 708px){#chat{height: 533px;} #card{height: 678px;} #contatos{height: 658px;} #scro{height: 543px;}}
    @media ( max-height: 707px){#chat{height: 532px;} #card{height: 677px;} #contatos{height: 657px;} #scro{height: 542px;}}
    @media ( max-height: 706px){#chat{height: 531px;} #card{height: 676px;} #contatos{height: 656px;} #scro{height: 541px;}}
    @media ( max-height: 705px){#chat{height: 530px;} #card{height: 675px;} #contatos{height: 655px;} #scro{height: 540px;}}
    @media ( max-height: 704px){#chat{height: 529px;} #card{height: 674px;} #contatos{height: 654px;} #scro{height: 539px;}}
    @media ( max-height: 703px){#chat{height: 528px;} #card{height: 673px;} #contatos{height: 653px;} #scro{height: 538px;}}
    @media ( max-height: 702px){#chat{height: 527px;} #card{height: 672px;} #contatos{height: 652px;} #scro{height: 537px;}}
    @media ( max-height: 701px){#chat{height: 526px;} #card{height: 671px;} #contatos{height: 651px;} #scro{height: 536px;}}
    @media ( max-height: 700px){#chat{height: 525px;} #card{height: 670px;} #contatos{height: 650px;} #scro{height: 535px;}}
    @media ( max-height: 699px){#chat{height: 524px;} #card{height: 669px;} #contatos{height: 649px;} #scro{height: 534px;}}
    @media ( max-height: 698px){#chat{height: 523px;} #card{height: 668px;} #contatos{height: 648px;} #scro{height: 533px;}}
    @media ( max-height: 697px){#chat{height: 522px;} #card{height: 667px;} #contatos{height: 647px;} #scro{height: 532px;}}
    @media ( max-height: 696px){#chat{height: 521px;} #card{height: 666px;} #contatos{height: 646px;} #scro{height: 531px;}}
    @media ( max-height: 695px){#chat{height: 520px;} #card{height: 665px;} #contatos{height: 645px;} #scro{height: 530px;}}
    @media ( max-height: 694px){#chat{height: 519px;} #card{height: 664px;} #contatos{height: 644px;} #scro{height: 529px;}}
    @media ( max-height: 693px){#chat{height: 518px;} #card{height: 663px;} #contatos{height: 643px;} #scro{height: 528px;}}
    @media ( max-height: 692px){#chat{height: 517px;} #card{height: 662px;} #contatos{height: 642px;} #scro{height: 527px;}}
    @media ( max-height: 691px){#chat{height: 516px;} #card{height: 661px;} #contatos{height: 641px;} #scro{height: 526px;}}
    @media ( max-height: 690px){#chat{height: 515px;} #card{height: 660px;} #contatos{height: 640px;} #scro{height: 525px;}}
    @media ( max-height: 689px){#chat{height: 514px;} #card{height: 659px;} #contatos{height: 639px;} #scro{height: 524px;}}
    @media ( max-height: 688px){#chat{height: 513px;} #card{height: 658px;} #contatos{height: 638px;} #scro{height: 523px;}}
    @media ( max-height: 687px){#chat{height: 512px;} #card{height: 657px;} #contatos{height: 637px;} #scro{height: 522px;}}
    @media ( max-height: 686px){#chat{height: 511px;} #card{height: 656px;} #contatos{height: 636px;} #scro{height: 521px;}}
    @media ( max-height: 685px){#chat{height: 510px;} #card{height: 655px;} #contatos{height: 635px;} #scro{height: 520px;}}
    @media ( max-height: 684px){#chat{height: 509px;} #card{height: 654px;} #contatos{height: 634px;} #scro{height: 519px;}}
    @media ( max-height: 683px){#chat{height: 508px;} #card{height: 653px;} #contatos{height: 633px;} #scro{height: 518px;}}
    @media ( max-height: 682px){#chat{height: 507px;} #card{height: 652px;} #contatos{height: 632px;} #scro{height: 517px;}}
    @media ( max-height: 681px){#chat{height: 506px;} #card{height: 651px;} #contatos{height: 631px;} #scro{height: 516px;}}
    @media ( max-height: 680px){#chat{height: 505px;} #card{height: 650px;} #contatos{height: 630px;} #scro{height: 515px;}}
    @media ( max-height: 679px){#chat{height: 504px;} #card{height: 649px;} #contatos{height: 629px;} #scro{height: 514px;}}
    @media ( max-height: 678px){#chat{height: 503px;} #card{height: 648px;} #contatos{height: 628px;} #scro{height: 513px;}}
    @media ( max-height: 677px){#chat{height: 502px;} #card{height: 647px;} #contatos{height: 627px;} #scro{height: 512px;}}
    @media ( max-height: 676px){#chat{height: 501px;} #card{height: 646px;} #contatos{height: 626px;} #scro{height: 511px;}}
    @media ( max-height: 675px){#chat{height: 500px;} #card{height: 645px;} #contatos{height: 625px;} #scro{height: 510px;}}
    @media ( max-height: 674px){#chat{height: 499px;} #card{height: 644px;} #contatos{height: 624px;} #scro{height: 509px;}}
    @media ( max-height: 673px){#chat{height: 498px;} #card{height: 643px;} #contatos{height: 623px;} #scro{height: 508px;}}
    @media ( max-height: 672px){#chat{height: 497px;} #card{height: 642px;} #contatos{height: 622px;} #scro{height: 507px;}}
    @media ( max-height: 671px){#chat{height: 496px;} #card{height: 641px;} #contatos{height: 621px;} #scro{height: 506px;}}
    @media ( max-height: 670px){#chat{height: 495px;} #card{height: 640px;} #contatos{height: 620px;} #scro{height: 505px;}}
    @media ( max-height: 669px){#chat{height: 494px;} #card{height: 639px;} #contatos{height: 619px;} #scro{height: 504px;}}
    @media ( max-height: 668px){#chat{height: 493px;} #card{height: 638px;} #contatos{height: 618px;} #scro{height: 503px;}}
    @media ( max-height: 667px){#chat{height: 492px;} #card{height: 637px;} #contatos{height: 617px;} #scro{height: 502px;}}
    @media ( max-height: 666px){#chat{height: 491px;} #card{height: 636px;} #contatos{height: 616px;} #scro{height: 501px;}}
    @media ( max-height: 665px){#chat{height: 490px;} #card{height: 635px;} #contatos{height: 615px;} #scro{height: 500px;}}
    @media ( max-height: 664px){#chat{height: 489px;} #card{height: 634px;} #contatos{height: 614px;} #scro{height: 499px;}}
    @media ( max-height: 663px){#chat{height: 488px;} #card{height: 633px;} #contatos{height: 613px;} #scro{height: 498px;}}
    @media ( max-height: 662px){#chat{height: 487px;} #card{height: 632px;} #contatos{height: 612px;} #scro{height: 497px;}}
    @media ( max-height: 661px){#chat{height: 486px;} #card{height: 631px;} #contatos{height: 611px;} #scro{height: 496px;}}
    @media ( max-height: 660px){#chat{height: 485px;} #card{height: 630px;} #contatos{height: 610px;} #scro{height: 495px;}}
    @media ( max-height: 659px){#chat{height: 484px;} #card{height: 629px;} #contatos{height: 609px;} #scro{height: 494px;}}
    @media ( max-height: 658px){#chat{height: 483px;} #card{height: 628px;} #contatos{height: 608px;} #scro{height: 493px;}}
    @media ( max-height: 657px){#chat{height: 482px;} #card{height: 627px;} #contatos{height: 607px;} #scro{height: 492px;}}
    @media ( max-height: 656px){#chat{height: 481px;} #card{height: 626px;} #contatos{height: 606px;} #scro{height: 491px;}}
    @media ( max-height: 655px){#chat{height: 480px;} #card{height: 625px;} #contatos{height: 605px;} #scro{height: 490px;}}
    @media ( max-height: 654px){#chat{height: 479px;} #card{height: 624px;} #contatos{height: 604px;} #scro{height: 489px;}}
    @media ( max-height: 653px){#chat{height: 478px;} #card{height: 623px;} #contatos{height: 603px;} #scro{height: 488px;}}
    @media ( max-height: 652px){#chat{height: 477px;} #card{height: 622px;} #contatos{height: 602px;} #scro{height: 487px;}}
    @media ( max-height: 651px){#chat{height: 476px;} #card{height: 621px;} #contatos{height: 601px;} #scro{height: 486px;}}
    @media ( max-height: 650px){#chat{height: 475px;} #card{height: 620px;} #contatos{height: 600px;} #scro{height: 485px;}}
    @media ( max-height: 649px){#chat{height: 474px;} #card{height: 619px;} #contatos{height: 599px;} #scro{height: 484px;}}
    @media ( max-height: 648px){#chat{height: 473px;} #card{height: 618px;} #contatos{height: 598px;} #scro{height: 483px;}}
    @media ( max-height: 647px){#chat{height: 472px;} #card{height: 617px;} #contatos{height: 597px;} #scro{height: 482px;}}
    @media ( max-height: 646px){#chat{height: 471px;} #card{height: 616px;} #contatos{height: 596px;} #scro{height: 481px;}}
    @media ( max-height: 645px){#chat{height: 470px;} #card{height: 615px;} #contatos{height: 595px;} #scro{height: 480px;}}
    @media ( max-height: 644px){#chat{height: 469px;} #card{height: 614px;} #contatos{height: 594px;} #scro{height: 479px;}}
    @media ( max-height: 643px){#chat{height: 468px;} #card{height: 613px;} #contatos{height: 593px;} #scro{height: 478px;}}
    @media ( max-height: 642px){#chat{height: 467px;} #card{height: 612px;} #contatos{height: 592px;} #scro{height: 477px;}}
    @media ( max-height: 641px){#chat{height: 466px;} #card{height: 611px;} #contatos{height: 591px;} #scro{height: 476px;}}
    @media ( max-height: 640px){#chat{height: 465px;} #card{height: 610px;} #contatos{height: 590px;} #scro{height: 475px;}}
    @media ( max-height: 639px){#chat{height: 464px;} #card{height: 609px;} #contatos{height: 589px;} #scro{height: 474px;}}
    @media ( max-height: 638px){#chat{height: 463px;} #card{height: 608px;} #contatos{height: 588px;} #scro{height: 473px;}}
    @media ( max-height: 637px){#chat{height: 462px;} #card{height: 607px;} #contatos{height: 587px;} #scro{height: 472px;}}
    @media ( max-height: 636px){#chat{height: 461px;} #card{height: 606px;} #contatos{height: 586px;} #scro{height: 471px;}}
    @media ( max-height: 635px){#chat{height: 460px;} #card{height: 605px;} #contatos{height: 585px;} #scro{height: 470px;}}
    @media ( max-height: 634px){#chat{height: 459px;} #card{height: 604px;} #contatos{height: 584px;} #scro{height: 469px;}}
    @media ( max-height: 633px){#chat{height: 458px;} #card{height: 603px;} #contatos{height: 583px;} #scro{height: 468px;}}
    @media ( max-height: 632px){#chat{height: 457px;} #card{height: 602px;} #contatos{height: 582px;} #scro{height: 467px;}}
    @media ( max-height: 631px){#chat{height: 456px;} #card{height: 601px;} #contatos{height: 581px;} #scro{height: 466px;}}
    @media ( max-height: 630px){#chat{height: 455px;} #card{height: 600px;} #contatos{height: 580px;} #scro{height: 465px;}}
    @media ( max-height: 629px){#chat{height: 454px;} #card{height: 599px;} #contatos{height: 579px;} #scro{height: 464px;}}
    @media ( max-height: 628px){#chat{height: 453px;} #card{height: 598px;} #contatos{height: 578px;} #scro{height: 463px;}}
    @media ( max-height: 627px){#chat{height: 452px;} #card{height: 597px;} #contatos{height: 577px;} #scro{height: 462px;}}
    @media ( max-height: 626px){#chat{height: 451px;} #card{height: 596px;} #contatos{height: 576px;} #scro{height: 461px;}}
    @media ( max-height: 625px){#chat{height: 450px;} #card{height: 595px;} #contatos{height: 575px;} #scro{height: 460px;}}
    @media ( max-height: 624px){#chat{height: 449px;} #card{height: 594px;} #contatos{height: 574px;} #scro{height: 459px;}}
    @media ( max-height: 623px){#chat{height: 448px;} #card{height: 593px;} #contatos{height: 573px;} #scro{height: 458px;}}
    @media ( max-height: 622px){#chat{height: 447px;} #card{height: 592px;} #contatos{height: 572px;} #scro{height: 457px;}}
    @media ( max-height: 621px){#chat{height: 446px;} #card{height: 591px;} #contatos{height: 571px;} #scro{height: 456px;}}
    @media ( max-height: 620px){#chat{height: 445px;} #card{height: 590px;} #contatos{height: 570px;} #scro{height: 455px;}}
    @media ( max-height: 619px){#chat{height: 444px;} #card{height: 589px;} #contatos{height: 569px;} #scro{height: 454px;}}
    @media ( max-height: 618px){#chat{height: 443px;} #card{height: 588px;} #contatos{height: 568px;} #scro{height: 453px;}}
    @media ( max-height: 617px){#chat{height: 442px;} #card{height: 587px;} #contatos{height: 567px;} #scro{height: 452px;}}
    @media ( max-height: 616px){#chat{height: 441px;} #card{height: 586px;} #contatos{height: 566px;} #scro{height: 451px;}}
    @media ( max-height: 615px){#chat{height: 440px;} #card{height: 585px;} #contatos{height: 565px;} #scro{height: 450px;}}
    @media ( max-height: 614px){#chat{height: 439px;} #card{height: 584px;} #contatos{height: 564px;} #scro{height: 449px;}}
    @media ( max-height: 613px){#chat{height: 438px;} #card{height: 583px;} #contatos{height: 563px;} #scro{height: 448px;}}
    @media ( max-height: 612px){#chat{height: 437px;} #card{height: 582px;} #contatos{height: 562px;} #scro{height: 447px;}}
    @media ( max-height: 611px){#chat{height: 436px;} #card{height: 581px;} #contatos{height: 561px;} #scro{height: 446px;}}
    @media ( max-height: 610px){#chat{height: 435px;} #card{height: 580px;} #contatos{height: 560px;} #scro{height: 445px;}}
    @media ( max-height: 609px){#chat{height: 434px;} #card{height: 579px;} #contatos{height: 559px;} #scro{height: 444px;}}
    @media ( max-height: 608px){#chat{height: 433px;} #card{height: 578px;} #contatos{height: 558px;} #scro{height: 443px;}}
    @media ( max-height: 607px){#chat{height: 432px;} #card{height: 577px;} #contatos{height: 557px;} #scro{height: 442px;}}
    @media ( max-height: 606px){#chat{height: 431px;} #card{height: 576px;} #contatos{height: 556px;} #scro{height: 441px;}}
    @media ( max-height: 605px){#chat{height: 430px;} #card{height: 575px;} #contatos{height: 555px;} #scro{height: 440px;}}
    @media ( max-height: 604px){#chat{height: 429px;} #card{height: 574px;} #contatos{height: 554px;} #scro{height: 439px;}}
    @media ( max-height: 603px){#chat{height: 428px;} #card{height: 573px;} #contatos{height: 553px;} #scro{height: 438px;}}
    @media ( max-height: 602px){#chat{height: 427px;} #card{height: 572px;} #contatos{height: 552px;} #scro{height: 437px;}}
    @media ( max-height: 601px){#chat{height: 426px;} #card{height: 571px;} #contatos{height: 551px;} #scro{height: 436px;}}
    @media ( max-height: 600px){#chat{height: 425px;} #card{height: 570px;} #contatos{height: 550px;} #scro{height: 435px;}}
    @media ( max-height: 599px){#chat{height: 424px;} #card{height: 569px;} #contatos{height: 549px;} #scro{height: 434px;}}
    @media ( max-height: 598px){#chat{height: 423px;} #card{height: 568px;} #contatos{height: 548px;} #scro{height: 433px;}}
    @media ( max-height: 597px){#chat{height: 422px;} #card{height: 567px;} #contatos{height: 547px;} #scro{height: 432px;}}
    @media ( max-height: 596px){#chat{height: 421px;} #card{height: 566px;} #contatos{height: 546px;} #scro{height: 431px;}}
    @media ( max-height: 595px){#chat{height: 420px;} #card{height: 565px;} #contatos{height: 545px;} #scro{height: 430px;}}
    @media ( max-height: 594px){#chat{height: 419px;} #card{height: 564px;} #contatos{height: 544px;} #scro{height: 429px;}}
    @media ( max-height: 593px){#chat{height: 418px;} #card{height: 563px;} #contatos{height: 543px;} #scro{height: 428px;}}
    @media ( max-height: 592px){#chat{height: 417px;} #card{height: 562px;} #contatos{height: 542px;} #scro{height: 427px;}}
    @media ( max-height: 591px){#chat{height: 416px;} #card{height: 561px;} #contatos{height: 541px;} #scro{height: 426px;}}
    @media ( max-height: 590px){#chat{height: 415px;} #card{height: 560px;} #contatos{height: 540px;} #scro{height: 425px;}}
    @media ( max-height: 589px){#chat{height: 414px;} #card{height: 559px;} #contatos{height: 539px;} #scro{height: 424px;}}
    @media ( max-height: 588px){#chat{height: 413px;} #card{height: 558px;} #contatos{height: 538px;} #scro{height: 423px;}}
    @media ( max-height: 587px){#chat{height: 412px;} #card{height: 557px;} #contatos{height: 537px;} #scro{height: 422px;}}
    @media ( max-height: 586px){#chat{height: 411px;} #card{height: 556px;} #contatos{height: 536px;} #scro{height: 421px;}}
    @media ( max-height: 585px){#chat{height: 410px;} #card{height: 555px;} #contatos{height: 535px;} #scro{height: 420px;}}
    @media ( max-height: 584px){#chat{height: 409px;} #card{height: 554px;} #contatos{height: 534px;} #scro{height: 419px;}}
    @media ( max-height: 583px){#chat{height: 408px;} #card{height: 553px;} #contatos{height: 533px;} #scro{height: 418px;}}
    @media ( max-height: 582px){#chat{height: 407px;} #card{height: 552px;} #contatos{height: 532px;} #scro{height: 417px;}}
    @media ( max-height: 581px){#chat{height: 406px;} #card{height: 551px;} #contatos{height: 531px;} #scro{height: 416px;}}
    @media ( max-height: 580px){#chat{height: 405px;} #card{height: 550px;} #contatos{height: 530px;} #scro{height: 415px;}}
    @media ( max-height: 579px){#chat{height: 404px;} #card{height: 549px;} #contatos{height: 529px;} #scro{height: 414px;}}
    @media ( max-height: 578px){#chat{height: 403px;} #card{height: 548px;} #contatos{height: 528px;} #scro{height: 413px;}}
    @media ( max-height: 577px){#chat{height: 402px;} #card{height: 547px;} #contatos{height: 527px;} #scro{height: 412px;}}
    @media ( max-height: 576px){#chat{height: 401px;} #card{height: 546px;} #contatos{height: 526px;} #scro{height: 411px;}}
    @media ( max-height: 575px){#chat{height: 400px;} #card{height: 545px;} #contatos{height: 525px;} #scro{height: 410px;}}
    @media ( max-height: 574px){#chat{height: 399px;} #card{height: 544px;} #contatos{height: 524px;} #scro{height: 409px;}}
    @media ( max-height: 573px){#chat{height: 398px;} #card{height: 543px;} #contatos{height: 523px;} #scro{height: 408px;}}
    @media ( max-height: 572px){#chat{height: 397px;} #card{height: 542px;} #contatos{height: 522px;} #scro{height: 407px;}}
    @media ( max-height: 571px){#chat{height: 396px;} #card{height: 541px;} #contatos{height: 521px;} #scro{height: 406px;}}
    @media ( max-height: 570px){#chat{height: 395px;} #card{height: 540px;} #contatos{height: 520px;} #scro{height: 405px;}}
    @media ( max-height: 569px){#chat{height: 394px;} #card{height: 539px;} #contatos{height: 519px;} #scro{height: 404px;}}
    @media ( max-height: 568px){#chat{height: 393px;} #card{height: 538px;} #contatos{height: 518px;} #scro{height: 403px;}}
    @media ( max-height: 567px){#chat{height: 392px;} #card{height: 537px;} #contatos{height: 517px;} #scro{height: 402px;}}
    @media ( max-height: 566px){#chat{height: 391px;} #card{height: 536px;} #contatos{height: 516px;} #scro{height: 401px;}}
    @media ( max-height: 565px){#chat{height: 390px;} #card{height: 535px;} #contatos{height: 515px;} #scro{height: 400px;}}
    @media ( max-height: 564px){#chat{height: 389px;} #card{height: 534px;} #contatos{height: 514px;} #scro{height: 399px;}}
    @media ( max-height: 563px){#chat{height: 388px;} #card{height: 533px;} #contatos{height: 513px;} #scro{height: 398px;}}
    @media ( max-height: 562px){#chat{height: 387px;} #card{height: 532px;} #contatos{height: 512px;} #scro{height: 397px;}}
    @media ( max-height: 561px){#chat{height: 386px;} #card{height: 531px;} #contatos{height: 511px;} #scro{height: 396px;}}
    @media ( max-height: 560px){#chat{height: 385px;} #card{height: 530px;} #contatos{height: 510px;} #scro{height: 395px;}}
    @media ( max-height: 559px){#chat{height: 384px;} #card{height: 529px;} #contatos{height: 509px;} #scro{height: 394px;}}
    @media ( max-height: 558px){#chat{height: 383px;} #card{height: 528px;} #contatos{height: 508px;} #scro{height: 393px;}}
    @media ( max-height: 557px){#chat{height: 382px;} #card{height: 527px;} #contatos{height: 507px;} #scro{height: 392px;}}
    @media ( max-height: 556px){#chat{height: 381px;} #card{height: 526px;} #contatos{height: 506px;} #scro{height: 391px;}}
    @media ( max-height: 555px){#chat{height: 380px;} #card{height: 525px;} #contatos{height: 505px;} #scro{height: 390px;}}
    @media ( max-height: 554px){#chat{height: 379px;} #card{height: 524px;} #contatos{height: 504px;} #scro{height: 389px;}}
    @media ( max-height: 553px){#chat{height: 378px;} #card{height: 523px;} #contatos{height: 503px;} #scro{height: 388px;}}
    @media ( max-height: 552px){#chat{height: 377px;} #card{height: 522px;} #contatos{height: 502px;} #scro{height: 387px;}}
    @media ( max-height: 551px){#chat{height: 376px;} #card{height: 521px;} #contatos{height: 501px;} #scro{height: 386px;}}
    @media ( max-height: 550px){#chat{height: 375px;} #card{height: 520px;} #contatos{height: 500px;} #scro{height: 385px;}}
    @media ( max-height: 549px){#chat{height: 374px;} #card{height: 519px;} #contatos{height: 499px;} #scro{height: 384px;}}
    @media ( max-height: 548px){#chat{height: 373px;} #card{height: 518px;} #contatos{height: 498px;} #scro{height: 383px;}}
    @media ( max-height: 547px){#chat{height: 372px;} #card{height: 517px;} #contatos{height: 497px;} #scro{height: 382px;}}
    @media ( max-height: 546px){#chat{height: 371px;} #card{height: 516px;} #contatos{height: 496px;} #scro{height: 381px;}}
    @media ( max-height: 545px){#chat{height: 370px;} #card{height: 515px;} #contatos{height: 495px;} #scro{height: 380px;}}
    @media ( max-height: 544px){#chat{height: 369px;} #card{height: 514px;} #contatos{height: 494px;} #scro{height: 379px;}}
    @media ( max-height: 543px){#chat{height: 368px;} #card{height: 513px;} #contatos{height: 493px;} #scro{height: 378px;}}
    @media ( max-height: 542px){#chat{height: 367px;} #card{height: 512px;} #contatos{height: 492px;} #scro{height: 377px;}}
    @media ( max-height: 541px){#chat{height: 366px;} #card{height: 511px;} #contatos{height: 491px;} #scro{height: 376px;}}
    @media ( max-height: 540px){#chat{height: 365px;} #card{height: 510px;} #contatos{height: 490px;} #scro{height: 375px;}}
    @media ( max-height: 539px){#chat{height: 364px;} #card{height: 509px;} #contatos{height: 489px;} #scro{height: 374px;}}
    @media ( max-height: 538px){#chat{height: 363px;} #card{height: 508px;} #contatos{height: 488px;} #scro{height: 373px;}}
    @media ( max-height: 537px){#chat{height: 362px;} #card{height: 507px;} #contatos{height: 487px;} #scro{height: 372px;}}
    @media ( max-height: 536px){#chat{height: 361px;} #card{height: 506px;} #contatos{height: 486px;} #scro{height: 371px;}}
    @media ( max-height: 535px){#chat{height: 360px;} #card{height: 505px;} #contatos{height: 485px;} #scro{height: 370px;}}
    @media ( max-height: 534px){#chat{height: 359px;} #card{height: 504px;} #contatos{height: 484px;} #scro{height: 369px;}}
    @media ( max-height: 533px){#chat{height: 358px;} #card{height: 503px;} #contatos{height: 483px;} #scro{height: 368px;}}
    @media ( max-height: 532px){#chat{height: 357px;} #card{height: 502px;} #contatos{height: 482px;} #scro{height: 367px;}}
    @media ( max-height: 531px){#chat{height: 356px;} #card{height: 501px;} #contatos{height: 481px;} #scro{height: 366px;}}
    @media ( max-height: 530px){#chat{height: 355px;} #card{height: 500px;} #contatos{height: 480px;} #scro{height: 365px;}}
    @media ( max-height: 529px){#chat{height: 354px;} #card{height: 499px;} #contatos{height: 479px;} #scro{height: 364px;}}
    @media ( max-height: 528px){#chat{height: 353px;} #card{height: 498px;} #contatos{height: 478px;} #scro{height: 363px;}}
    @media ( max-height: 527px){#chat{height: 352px;} #card{height: 497px;} #contatos{height: 477px;} #scro{height: 362px;}}
    @media ( max-height: 526px){#chat{height: 351px;} #card{height: 496px;} #contatos{height: 476px;} #scro{height: 361px;}}
    @media ( max-height: 525px){#chat{height: 350px;} #card{height: 495px;} #contatos{height: 475px;} #scro{height: 360px;}}
    @media ( max-height: 524px){#chat{height: 349px;} #card{height: 494px;} #contatos{height: 474px;} #scro{height: 359px;}}
    @media ( max-height: 523px){#chat{height: 348px;} #card{height: 493px;} #contatos{height: 473px;} #scro{height: 358px;}}
    @media ( max-height: 522px){#chat{height: 347px;} #card{height: 492px;} #contatos{height: 472px;} #scro{height: 357px;}}
    @media ( max-height: 521px){#chat{height: 346px;} #card{height: 491px;} #contatos{height: 471px;} #scro{height: 356px;}}
    @media ( max-height: 520px){#chat{height: 345px;} #card{height: 490px;} #contatos{height: 470px;} #scro{height: 355px;}}
    @media ( max-height: 519px){#chat{height: 344px;} #card{height: 489px;} #contatos{height: 469px;} #scro{height: 354px;}}
    @media ( max-height: 518px){#chat{height: 343px;} #card{height: 488px;} #contatos{height: 468px;} #scro{height: 353px;}}
    @media ( max-height: 517px){#chat{height: 342px;} #card{height: 487px;} #contatos{height: 467px;} #scro{height: 352px;}}
    @media ( max-height: 516px){#chat{height: 341px;} #card{height: 486px;} #contatos{height: 466px;} #scro{height: 351px;}}
    @media ( max-height: 515px){#chat{height: 340px;} #card{height: 485px;} #contatos{height: 465px;} #scro{height: 350px;}}
    @media ( max-height: 514px){#chat{height: 339px;} #card{height: 484px;} #contatos{height: 464px;} #scro{height: 349px;}}
    @media ( max-height: 513px){#chat{height: 338px;} #card{height: 483px;} #contatos{height: 463px;} #scro{height: 348px;}}
    @media ( max-height: 512px){#chat{height: 337px;} #card{height: 482px;} #contatos{height: 462px;} #scro{height: 347px;}}
    @media ( max-height: 511px){#chat{height: 336px;} #card{height: 481px;} #contatos{height: 461px;} #scro{height: 346px;}}
    @media ( max-height: 510px){#chat{height: 335px;} #card{height: 480px;} #contatos{height: 460px;} #scro{height: 345px;}}
    @media ( max-height: 509px){#chat{height: 334px;} #card{height: 479px;} #contatos{height: 459px;} #scro{height: 344px;}}
    @media ( max-height: 508px){#chat{height: 333px;} #card{height: 478px;} #contatos{height: 458px;} #scro{height: 343px;}}
    @media ( max-height: 507px){#chat{height: 332px;} #card{height: 477px;} #contatos{height: 457px;} #scro{height: 342px;}}
    @media ( max-height: 506px){#chat{height: 331px;} #card{height: 476px;} #contatos{height: 456px;} #scro{height: 341px;}}
    @media ( max-height: 505px){#chat{height: 330px;} #card{height: 475px;} #contatos{height: 455px;} #scro{height: 340px;}}
    @media ( max-height: 504px){#chat{height: 329px;} #card{height: 474px;} #contatos{height: 454px;} #scro{height: 339px;}}
    @media ( max-height: 503px){#chat{height: 328px;} #card{height: 473px;} #contatos{height: 453px;} #scro{height: 338px;}}
    @media ( max-height: 502px){#chat{height: 327px;} #card{height: 472px;} #contatos{height: 452px;} #scro{height: 337px;}}
    @media ( max-height: 501px){#chat{height: 326px;} #card{height: 471px;} #contatos{height: 451px;} #scro{height: 336px;}}
    @media ( max-height: 500px){#chat{height: 325px;} #card{height: 470px;} #contatos{height: 450px;} #scro{height: 335px;}}
    @media ( max-height: 499px){#chat{height: 324px;} #card{height: 469px;} #contatos{height: 449px;} #scro{height: 334px;}}
    @media ( max-height: 498px){#chat{height: 323px;} #card{height: 468px;} #contatos{height: 448px;} #scro{height: 333px;}}
    @media ( max-height: 497px){#chat{height: 322px;} #card{height: 467px;} #contatos{height: 447px;} #scro{height: 332px;}}
    @media ( max-height: 496px){#chat{height: 321px;} #card{height: 466px;} #contatos{height: 446px;} #scro{height: 331px;}}
    @media ( max-height: 495px){#chat{height: 320px;} #card{height: 465px;} #contatos{height: 445px;} #scro{height: 330px;}}
    @media ( max-height: 494px){#chat{height: 319px;} #card{height: 464px;} #contatos{height: 444px;} #scro{height: 329px;}}
    @media ( max-height: 493px){#chat{height: 318px;} #card{height: 463px;} #contatos{height: 443px;} #scro{height: 328px;}}
    @media ( max-height: 492px){#chat{height: 317px;} #card{height: 462px;} #contatos{height: 442px;} #scro{height: 327px;}}
    @media ( max-height: 491px){#chat{height: 316px;} #card{height: 461px;} #contatos{height: 441px;} #scro{height: 326px;}}
    @media ( max-height: 490px){#chat{height: 315px;} #card{height: 460px;} #contatos{height: 440px;} #scro{height: 325px;}}
    @media ( max-height: 489px){#chat{height: 314px;} #card{height: 459px;} #contatos{height: 439px;} #scro{height: 324px;}}
    @media ( max-height: 488px){#chat{height: 313px;} #card{height: 458px;} #contatos{height: 438px;} #scro{height: 323px;}}
    @media ( max-height: 487px){#chat{height: 312px;} #card{height: 457px;} #contatos{height: 437px;} #scro{height: 322px;}}
    @media ( max-height: 486px){#chat{height: 311px;} #card{height: 456px;} #contatos{height: 436px;} #scro{height: 321px;}}
    @media ( max-height: 485px){#chat{height: 310px;} #card{height: 455px;} #contatos{height: 435px;} #scro{height: 320px;}}
    @media ( max-height: 484px){#chat{height: 309px;} #card{height: 454px;} #contatos{height: 434px;} #scro{height: 319px;}}
    @media ( max-height: 483px){#chat{height: 308px;} #card{height: 453px;} #contatos{height: 433px;} #scro{height: 318px;}}
    @media ( max-height: 482px){#chat{height: 307px;} #card{height: 452px;} #contatos{height: 432px;} #scro{height: 317px;}}
    @media ( max-height: 481px){#chat{height: 306px;} #card{height: 451px;} #contatos{height: 431px;} #scro{height: 316px;}}
    @media ( max-height: 480px){#chat{height: 305px;} #card{height: 450px;} #contatos{height: 430px;} #scro{height: 315px;}}
    @media ( max-height: 479px){#chat{height: 304px;} #card{height: 449px;} #contatos{height: 429px;} #scro{height: 314px;}}
    @media ( max-height: 478px){#chat{height: 303px;} #card{height: 448px;} #contatos{height: 428px;} #scro{height: 313px;}}
    @media ( max-height: 477px){#chat{height: 302px;} #card{height: 447px;} #contatos{height: 427px;} #scro{height: 312px;}}
    @media ( max-height: 476px){#chat{height: 301px;} #card{height: 446px;} #contatos{height: 426px;} #scro{height: 311px;}}
    @media ( max-height: 475px){#chat{height: 300px;} #card{height: 445px;} #contatos{height: 425px;} #scro{height: 310px;}}
    @media ( max-height: 474px){#chat{height: 299px;} #card{height: 444px;} #contatos{height: 424px;} #scro{height: 309px;}}
    @media ( max-height: 473px){#chat{height: 298px;} #card{height: 443px;} #contatos{height: 423px;} #scro{height: 308px;}}
    @media ( max-height: 472px){#chat{height: 297px;} #card{height: 442px;} #contatos{height: 422px;} #scro{height: 307px;}}
    @media ( max-height: 471px){#chat{height: 296px;} #card{height: 441px;} #contatos{height: 421px;} #scro{height: 306px;}}
    @media ( max-height: 470px){#chat{height: 295px;} #card{height: 440px;} #contatos{height: 420px;} #scro{height: 305px;}}
    @media ( max-height: 469px){#chat{height: 294px;} #card{height: 439px;} #contatos{height: 419px;} #scro{height: 304px;}}
    @media ( max-height: 468px){#chat{height: 293px;} #card{height: 438px;} #contatos{height: 418px;} #scro{height: 303px;}}
    @media ( max-height: 467px){#chat{height: 292px;} #card{height: 437px;} #contatos{height: 417px;} #scro{height: 302px;}}
    @media ( max-height: 466px){#chat{height: 291px;} #card{height: 436px;} #contatos{height: 416px;} #scro{height: 301px;}}
    @media ( max-height: 465px){#chat{height: 290px;} #card{height: 435px;} #contatos{height: 415px;} #scro{height: 300px;}}
    @media ( max-height: 464px){#chat{height: 289px;} #card{height: 434px;} #contatos{height: 414px;} #scro{height: 299px;}}
    @media ( max-height: 463px){#chat{height: 288px;} #card{height: 433px;} #contatos{height: 413px;} #scro{height: 298px;}}
    @media ( max-height: 462px){#chat{height: 287px;} #card{height: 432px;} #contatos{height: 412px;} #scro{height: 297px;}}
    @media ( max-height: 461px){#chat{height: 286px;} #card{height: 431px;} #contatos{height: 411px;} #scro{height: 296px;}}
    @media ( max-height: 460px){#chat{height: 285px;} #card{height: 430px;} #contatos{height: 410px;} #scro{height: 295px;}}
    @media ( max-height: 459px){#chat{height: 284px;} #card{height: 429px;} #contatos{height: 409px;} #scro{height: 294px;}}
    @media ( max-height: 458px){#chat{height: 283px;} #card{height: 428px;} #contatos{height: 408px;} #scro{height: 293px;}}
    @media ( max-height: 457px){#chat{height: 282px;} #card{height: 427px;} #contatos{height: 407px;} #scro{height: 292px;}}
    @media ( max-height: 456px){#chat{height: 281px;} #card{height: 426px;} #contatos{height: 406px;} #scro{height: 291px;}}
    @media ( max-height: 455px){#chat{height: 280px;} #card{height: 425px;} #contatos{height: 405px;} #scro{height: 290px;}}
    @media ( max-height: 454px){#chat{height: 279px;} #card{height: 424px;} #contatos{height: 404px;} #scro{height: 289px;}}
    @media ( max-height: 453px){#chat{height: 278px;} #card{height: 423px;} #contatos{height: 403px;} #scro{height: 288px;}}
    @media ( max-height: 452px){#chat{height: 277px;} #card{height: 422px;} #contatos{height: 402px;} #scro{height: 287px;}}
    @media ( max-height: 451px){#chat{height: 276px;} #card{height: 421px;} #contatos{height: 401px;} #scro{height: 286px;}}
    @media ( max-height: 450px){#chat{height: 275px;} #card{height: 420px;} #contatos{height: 400px;} #scro{height: 285px;}}
    @media ( max-height: 449px){#chat{height: 274px;} #card{height: 419px;} #contatos{height: 399px;} #scro{height: 284px;}}
    @media ( max-height: 448px){#chat{height: 273px;} #card{height: 418px;} #contatos{height: 398px;} #scro{height: 283px;}}
    @media ( max-height: 447px){#chat{height: 272px;} #card{height: 417px;} #contatos{height: 397px;} #scro{height: 282px;}}
    @media ( max-height: 446px){#chat{height: 271px;} #card{height: 416px;} #contatos{height: 396px;} #scro{height: 281px;}}
    @media ( max-height: 445px){#chat{height: 270px;} #card{height: 415px;} #contatos{height: 395px;} #scro{height: 280px;}}
    @media ( max-height: 444px){#chat{height: 269px;} #card{height: 414px;} #contatos{height: 394px;} #scro{height: 279px;}}
    @media ( max-height: 443px){#chat{height: 268px;} #card{height: 413px;} #contatos{height: 393px;} #scro{height: 278px;}}
    @media ( max-height: 442px){#chat{height: 267px;} #card{height: 412px;} #contatos{height: 392px;} #scro{height: 277px;}}
    @media ( max-height: 441px){#chat{height: 266px;} #card{height: 411px;} #contatos{height: 391px;} #scro{height: 276px;}}
    @media ( max-height: 440px){#chat{height: 265px;} #card{height: 410px;} #contatos{height: 390px;} #scro{height: 275px;}}
    @media ( max-height: 439px){#chat{height: 264px;} #card{height: 409px;} #contatos{height: 389px;} #scro{height: 274px;}}
    @media ( max-height: 438px){#chat{height: 263px;} #card{height: 408px;} #contatos{height: 388px;} #scro{height: 273px;}}
    @media ( max-height: 437px){#chat{height: 262px;} #card{height: 407px;} #contatos{height: 387px;} #scro{height: 272px;}}
    @media ( max-height: 436px){#chat{height: 261px;} #card{height: 406px;} #contatos{height: 386px;} #scro{height: 271px;}}
    @media ( max-height: 435px){#chat{height: 260px;} #card{height: 405px;} #contatos{height: 385px;} #scro{height: 270px;}}
    @media ( max-height: 434px){#chat{height: 259px;} #card{height: 404px;} #contatos{height: 384px;} #scro{height: 269px;}}
    @media ( max-height: 433px){#chat{height: 258px;} #card{height: 403px;} #contatos{height: 383px;} #scro{height: 268px;}}
    @media ( max-height: 432px){#chat{height: 257px;} #card{height: 402px;} #contatos{height: 382px;} #scro{height: 267px;}}
    @media ( max-height: 431px){#chat{height: 256px;} #card{height: 401px;} #contatos{height: 381px;} #scro{height: 266px;}}
    @media ( max-height: 430px){#chat{height: 255px;} #card{height: 400px;} #contatos{height: 380px;} #scro{height: 265px;}}
    @media ( max-height: 429px){#chat{height: 254px;} #card{height: 399px;} #contatos{height: 379px;} #scro{height: 264px;}}
    @media ( max-height: 428px){#chat{height: 253px;} #card{height: 398px;} #contatos{height: 378px;} #scro{height: 263px;}}
    @media ( max-height: 427px){#chat{height: 252px;} #card{height: 397px;} #contatos{height: 377px;} #scro{height: 262px;}}
    @media ( max-height: 426px){#chat{height: 251px;} #card{height: 396px;} #contatos{height: 376px;} #scro{height: 261px;}}
    @media ( max-height: 425px){#chat{height: 250px;} #card{height: 395px;} #contatos{height: 375px;} #scro{height: 260px;}}
    @media ( max-height: 424px){#chat{height: 249px;} #card{height: 394px;} #contatos{height: 374px;} #scro{height: 259px;}}
    @media ( max-height: 423px){#chat{height: 248px;} #card{height: 393px;} #contatos{height: 373px;} #scro{height: 258px;}}
    @media ( max-height: 422px){#chat{height: 247px;} #card{height: 392px;} #contatos{height: 372px;} #scro{height: 257px;}}
    @media ( max-height: 421px){#chat{height: 246px;} #card{height: 391px;} #contatos{height: 371px;} #scro{height: 256px;}}
    @media ( max-height: 420px){#chat{height: 245px;} #card{height: 390px;} #contatos{height: 370px;} #scro{height: 255px;}}
    @media ( max-height: 419px){#chat{height: 244px;} #card{height: 389px;} #contatos{height: 369px;} #scro{height: 254px;}}
    @media ( max-height: 418px){#chat{height: 243px;} #card{height: 388px;} #contatos{height: 368px;} #scro{height: 253px;}}
    @media ( max-height: 417px){#chat{height: 242px;} #card{height: 387px;} #contatos{height: 367px;} #scro{height: 252px;}}
    @media ( max-height: 416px){#chat{height: 241px;} #card{height: 386px;} #contatos{height: 366px;} #scro{height: 251px;}}
    @media ( max-height: 415px){#chat{height: 240px;} #card{height: 385px;} #contatos{height: 365px;} #scro{height: 250px;}}
    @media ( max-height: 414px){#chat{height: 239px;} #card{height: 384px;} #contatos{height: 364px;} #scro{height: 249px;}}
    @media ( max-height: 413px){#chat{height: 238px;} #card{height: 383px;} #contatos{height: 363px;} #scro{height: 248px;}}
    @media ( max-height: 412px){#chat{height: 237px;} #card{height: 382px;} #contatos{height: 362px;} #scro{height: 247px;}}
    @media ( max-height: 411px){#chat{height: 236px;} #card{height: 381px;} #contatos{height: 361px;} #scro{height: 246px;}}
    @media ( max-height: 410px){#chat{height: 235px;} #card{height: 380px;} #contatos{height: 360px;} #scro{height: 245px;}}
    @media ( max-height: 409px){#chat{height: 234px;} #card{height: 379px;} #contatos{height: 359px;} #scro{height: 244px;}}
    @media ( max-height: 408px){#chat{height: 233px;} #card{height: 378px;} #contatos{height: 358px;} #scro{height: 243px;}}
    @media ( max-height: 407px){#chat{height: 232px;} #card{height: 377px;} #contatos{height: 357px;} #scro{height: 242px;}}
    @media ( max-height: 406px){#chat{height: 231px;} #card{height: 376px;} #contatos{height: 356px;} #scro{height: 241px;}}
    @media ( max-height: 405px){#chat{height: 230px;} #card{height: 375px;} #contatos{height: 355px;} #scro{height: 240px;}}
    @media ( max-height: 404px){#chat{height: 229px;} #card{height: 374px;} #contatos{height: 354px;} #scro{height: 239px;}}
    @media ( max-height: 403px){#chat{height: 228px;} #card{height: 373px;} #contatos{height: 353px;} #scro{height: 238px;}}
    @media ( max-height: 402px){#chat{height: 227px;} #card{height: 372px;} #contatos{height: 352px;} #scro{height: 237px;}}
    @media ( max-height: 401px){#chat{height: 226px;} #card{height: 371px;} #contatos{height: 351px;} #scro{height: 236px;}}
    @media ( max-height: 400px){#chat{height: 225px;} #card{height: 370px;} #contatos{height: 350px;} #scro{height: 235px;}}
    @media ( max-height: 399px){#chat{height: 224px;} #card{height: 369px;} #contatos{height: 349px;} #scro{height: 234px;}}
    @media ( max-height: 398px){#chat{height: 223px;} #card{height: 368px;} #contatos{height: 348px;} #scro{height: 233px;}}
    @media ( max-height: 397px){#chat{height: 222px;} #card{height: 367px;} #contatos{height: 347px;} #scro{height: 232px;}}
    @media ( max-height: 396px){#chat{height: 221px;} #card{height: 366px;} #contatos{height: 346px;} #scro{height: 231px;}}
    @media ( max-height: 395px){#chat{height: 220px;} #card{height: 365px;} #contatos{height: 345px;} #scro{height: 230px;}}
    @media ( max-height: 394px){#chat{height: 219px;} #card{height: 364px;} #contatos{height: 344px;} #scro{height: 229px;}}
    @media ( max-height: 393px){#chat{height: 218px;} #card{height: 363px;} #contatos{height: 343px;} #scro{height: 228px;}}
    @media ( max-height: 392px){#chat{height: 217px;} #card{height: 362px;} #contatos{height: 342px;} #scro{height: 227px;}}
    @media ( max-height: 391px){#chat{height: 216px;} #card{height: 361px;} #contatos{height: 341px;} #scro{height: 226px;}}
    @media ( max-height: 390px){#chat{height: 215px;} #card{height: 360px;} #contatos{height: 340px;} #scro{height: 225px;}}
    @media ( max-height: 389px){#chat{height: 214px;} #card{height: 359px;} #contatos{height: 339px;} #scro{height: 224px;}}
    @media ( max-height: 388px){#chat{height: 213px;} #card{height: 358px;} #contatos{height: 338px;} #scro{height: 223px;}}
    @media ( max-height: 387px){#chat{height: 212px;} #card{height: 357px;} #contatos{height: 337px;} #scro{height: 222px;}}
    @media ( max-height: 386px){#chat{height: 211px;} #card{height: 356px;} #contatos{height: 336px;} #scro{height: 221px;}}
    @media ( max-height: 385px){#chat{height: 210px;} #card{height: 355px;} #contatos{height: 335px;} #scro{height: 220px;}}
    @media ( max-height: 384px){#chat{height: 209px;} #card{height: 354px;} #contatos{height: 334px;} #scro{height: 219px;}}
    @media ( max-height: 383px){#chat{height: 208px;} #card{height: 353px;} #contatos{height: 333px;} #scro{height: 218px;}}
    @media ( max-height: 382px){#chat{height: 207px;} #card{height: 352px;} #contatos{height: 332px;} #scro{height: 217px;}}
    @media ( max-height: 381px){#chat{height: 206px;} #card{height: 351px;} #contatos{height: 331px;} #scro{height: 216px;}}
    @media ( max-height: 380px){#chat{height: 205px;} #card{height: 350px;} #contatos{height: 330px;} #scro{height: 215px;}}
    @media ( max-height: 379px){#chat{height: 204px;} #card{height: 349px;} #contatos{height: 329px;} #scro{height: 214px;}}
    @media ( max-height: 378px){#chat{height: 203px;} #card{height: 348px;} #contatos{height: 328px;} #scro{height: 213px;}}
    @media ( max-height: 377px){#chat{height: 202px;} #card{height: 347px;} #contatos{height: 327px;} #scro{height: 212px;}}
    @media ( max-height: 376px){#chat{height: 201px;} #card{height: 346px;} #contatos{height: 326px;} #scro{height: 211px;}}
    @media ( max-height: 375px){#chat{height: 200px;} #card{height: 345px;} #contatos{height: 325px;} #scro{height: 210px;}}
    @media ( max-height: 374px){#chat{height: 199px;} #card{height: 344px;} #contatos{height: 324px;} #scro{height: 209px;}}
    @media ( max-height: 373px){#chat{height: 198px;} #card{height: 343px;} #contatos{height: 323px;} #scro{height: 208px;}}
    @media ( max-height: 372px){#chat{height: 197px;} #card{height: 342px;} #contatos{height: 322px;} #scro{height: 207px;}}
    @media ( max-height: 371px){#chat{height: 196px;} #card{height: 341px;} #contatos{height: 321px;} #scro{height: 206px;}}
    @media ( max-height: 370px){#chat{height: 195px;} #card{height: 340px;} #contatos{height: 320px;} #scro{height: 205px;}}
    @media ( max-height: 369px){#chat{height: 194px;} #card{height: 339px;} #contatos{height: 319px;} #scro{height: 204px;}}
    @media ( max-height: 368px){#chat{height: 193px;} #card{height: 338px;} #contatos{height: 318px;} #scro{height: 203px;}}
    @media ( max-height: 367px){#chat{height: 192px;} #card{height: 337px;} #contatos{height: 317px;} #scro{height: 202px;}}
    @media ( max-height: 366px){#chat{height: 191px;} #card{height: 336px;} #contatos{height: 316px;} #scro{height: 201px;}}
    @media ( max-height: 365px){#chat{height: 190px;} #card{height: 335px;} #contatos{height: 315px;} #scro{height: 200px;}}
    @media ( max-height: 364px){#chat{height: 189px;} #card{height: 334px;} #contatos{height: 314px;} #scro{height: 199px;}}
    @media ( max-height: 363px){#chat{height: 188px;} #card{height: 333px;} #contatos{height: 313px;} #scro{height: 198px;}}
    @media ( max-height: 362px){#chat{height: 187px;} #card{height: 332px;} #contatos{height: 312px;} #scro{height: 197px;}}
    @media ( max-height: 361px){#chat{height: 186px;} #card{height: 331px;} #contatos{height: 311px;} #scro{height: 196px;}}
    @media ( max-height: 360px){#chat{height: 185px;} #card{height: 330px;} #contatos{height: 310px;} #scro{height: 195px;}}
    @media ( max-height: 359px){#chat{height: 184px;} #card{height: 329px;} #contatos{height: 309px;} #scro{height: 194px;}}
    @media ( max-height: 358px){#chat{height: 183px;} #card{height: 328px;} #contatos{height: 308px;} #scro{height: 193px;}}
    @media ( max-height: 357px){#chat{height: 182px;} #card{height: 327px;} #contatos{height: 307px;} #scro{height: 192px;}}
    @media ( max-height: 356px){#chat{height: 181px;} #card{height: 326px;} #contatos{height: 306px;} #scro{height: 191px;}}
    @media ( max-height: 355px){#chat{height: 180px;} #card{height: 325px;} #contatos{height: 305px;} #scro{height: 190px;}}
    @media ( max-height: 354px){#chat{height: 179px;} #card{height: 324px;} #contatos{height: 304px;} #scro{height: 189px;}}
    @media ( max-height: 353px){#chat{height: 178px;} #card{height: 323px;} #contatos{height: 303px;} #scro{height: 188px;}}
    @media ( max-height: 352px){#chat{height: 177px;} #card{height: 322px;} #contatos{height: 302px;} #scro{height: 187px;}}
    @media ( max-height: 351px){#chat{height: 176px;} #card{height: 321px;} #contatos{height: 301px;} #scro{height: 186px;}}
    @media ( max-height: 350px){#chat{height: 175px;} #card{height: 320px;} #contatos{height: 300px;} #scro{height: 185px;}}
    @media ( max-height: 349px){#chat{height: 174px;} #card{height: 319px;} #contatos{height: 299px;} #scro{height: 184px;}}
    @media ( max-height: 348px){#chat{height: 173px;} #card{height: 318px;} #contatos{height: 298px;} #scro{height: 183px;}}
    @media ( max-height: 347px){#chat{height: 172px;} #card{height: 317px;} #contatos{height: 297px;} #scro{height: 182px;}}
    @media ( max-height: 346px){#chat{height: 171px;} #card{height: 316px;} #contatos{height: 296px;} #scro{height: 181px;}}
    @media ( max-height: 345px){#chat{height: 170px;} #card{height: 315px;} #contatos{height: 295px;} #scro{height: 180px;}}
    @media ( max-height: 344px){#chat{height: 169px;} #card{height: 314px;} #contatos{height: 294px;} #scro{height: 179px;}}
    @media ( max-height: 343px){#chat{height: 168px;} #card{height: 313px;} #contatos{height: 293px;} #scro{height: 178px;}}
    @media ( max-height: 342px){#chat{height: 167px;} #card{height: 312px;} #contatos{height: 292px;} #scro{height: 177px;}}
    @media ( max-height: 341px){#chat{height: 166px;} #card{height: 311px;} #contatos{height: 291px;} #scro{height: 176px;}}
    @media ( max-height: 340px){#chat{height: 165px;} #card{height: 310px;} #contatos{height: 290px;} #scro{height: 175px;}}
    @media ( max-height: 339px){#chat{height: 164px;} #card{height: 309px;} #contatos{height: 289px;} #scro{height: 174px;}}
    @media ( max-height: 338px){#chat{height: 163px;} #card{height: 308px;} #contatos{height: 288px;} #scro{height: 173px;}}
    @media ( max-height: 337px){#chat{height: 162px;} #card{height: 307px;} #contatos{height: 287px;} #scro{height: 172px;}}
    @media ( max-height: 336px){#chat{height: 161px;} #card{height: 306px;} #contatos{height: 286px;} #scro{height: 171px;}}
    @media ( max-height: 335px){#chat{height: 160px;} #card{height: 305px;} #contatos{height: 285px;} #scro{height: 170px;}}
    @media ( max-height: 334px){#chat{height: 159px;} #card{height: 304px;} #contatos{height: 284px;} #scro{height: 169px;}}
    @media ( max-height: 333px){#chat{height: 158px;} #card{height: 303px;} #contatos{height: 283px;} #scro{height: 168px;}}
    @media ( max-height: 332px){#chat{height: 157px;} #card{height: 302px;} #contatos{height: 282px;} #scro{height: 167px;}}
    @media ( max-height: 331px){#chat{height: 156px;} #card{height: 301px;} #contatos{height: 281px;} #scro{height: 166px;}}
    @media ( max-height: 330px){#chat{height: 155px;} #card{height: 300px;} #contatos{height: 280px;} #scro{height: 165px;}}
    @media ( max-height: 329px){#chat{height: 154px;} #card{height: 299px;} #contatos{height: 279px;} #scro{height: 164px;}}
    @media ( max-height: 328px){#chat{height: 153px;} #card{height: 298px;} #contatos{height: 278px;} #scro{height: 163px;}}
    @media ( max-height: 327px){#chat{height: 152px;} #card{height: 297px;} #contatos{height: 277px;} #scro{height: 162px;}}
    @media ( max-height: 326px){#chat{height: 151px;} #card{height: 296px;} #contatos{height: 276px;} #scro{height: 161px;}}
    @media ( max-height: 325px){#chat{height: 150px;} #card{height: 295px;} #contatos{height: 275px;} #scro{height: 160px;}}
    @media ( max-height: 324px){#chat{height: 149px;} #card{height: 294px;} #contatos{height: 274px;} #scro{height: 159px;}}
    @media ( max-height: 323px){#chat{height: 148px;} #card{height: 293px;} #contatos{height: 273px;} #scro{height: 158px;}}
    @media ( max-height: 322px){#chat{height: 147px;} #card{height: 292px;} #contatos{height: 272px;} #scro{height: 157px;}}
    @media ( max-height: 321px){#chat{height: 146px;} #card{height: 291px;} #contatos{height: 271px;} #scro{height: 156px;}}
    @media ( max-height: 320px){#chat{height: 145px;} #card{height: 290px;} #contatos{height: 270px;} #scro{height: 155px;}}
    @media ( max-height: 319px){#chat{height: 144px;} #card{height: 289px;} #contatos{height: 269px;} #scro{height: 154px;}}
    @media ( max-height: 318px){#chat{height: 143px;} #card{height: 288px;} #contatos{height: 268px;} #scro{height: 153px;}}
    @media ( max-height: 317px){#chat{height: 142px;} #card{height: 287px;} #contatos{height: 267px;} #scro{height: 152px;}}
    @media ( max-height: 316px){#chat{height: 141px;} #card{height: 286px;} #contatos{height: 266px;} #scro{height: 151px;}}
    @media ( max-height: 315px){#chat{height: 140px;} #card{height: 285px;} #contatos{height: 265px;} #scro{height: 150px;}}
    @media ( max-height: 314px){#chat{height: 139px;} #card{height: 284px;} #contatos{height: 264px;} #scro{height: 149px;}}
    @media ( max-height: 313px){#chat{height: 138px;} #card{height: 283px;} #contatos{height: 263px;} #scro{height: 148px;}}
    @media ( max-height: 312px){#chat{height: 137px;} #card{height: 282px;} #contatos{height: 262px;} #scro{height: 147px;}}
    @media ( max-height: 311px){#chat{height: 136px;} #card{height: 281px;} #contatos{height: 261px;} #scro{height: 146px;}}
    @media ( max-height: 310px){#chat{height: 135px;} #card{height: 280px;} #contatos{height: 260px;} #scro{height: 145px;}}
    @media ( max-height: 309px){#chat{height: 134px;} #card{height: 279px;} #contatos{height: 259px;} #scro{height: 144px;}}
    @media ( max-height: 308px){#chat{height: 133px;} #card{height: 278px;} #contatos{height: 258px;} #scro{height: 143px;}}
    @media ( max-height: 307px){#chat{height: 132px;} #card{height: 277px;} #contatos{height: 257px;} #scro{height: 142px;}}
    @media ( max-height: 306px){#chat{height: 131px;} #card{height: 276px;} #contatos{height: 256px;} #scro{height: 141px;}}
    @media ( max-height: 305px){#chat{height: 130px;} #card{height: 275px;} #contatos{height: 255px;} #scro{height: 140px;}}
    @media ( max-height: 304px){#chat{height: 129px;} #card{height: 274px;} #contatos{height: 254px;} #scro{height: 139px;}}
    @media ( max-height: 303px){#chat{height: 128px;} #card{height: 273px;} #contatos{height: 253px;} #scro{height: 138px;}}
    @media ( max-height: 302px){#chat{height: 127px;} #card{height: 272px;} #contatos{height: 252px;} #scro{height: 137px;}}
    @media ( max-height: 301px){#chat{height: 126px;} #card{height: 271px;} #contatos{height: 251px;} #scro{height: 136px;}}
    @media ( max-height: 300px){#chat{height: 125px;} #card{height: 270px;} #contatos{height: 250px;} #scro{height: 135px;}}



    @media ( min-width: 992px){ #contatos{border-right:1px solid #ccc} #contatos{display:block} #chat{display:block} }
    @media ( max-width: 991px){

        #card{border:0px solid black}
    <?php
  if(isset($_POST['user'])){


    ?>

    #contatos{display:none}
    #chat{display:block}

        @media ( max-height: 2000px){#chat{height: 1900px; }
  @media ( max-height: 1999px){#chat{height: 1899px; }
      @media ( max-height: 1998px){#chat{height: 1898px; }
@media ( max-height: 1997px){#chat{height: 1897px; }
    @media ( max-height: 1996px){#chat{height: 1896px; }
        @media ( max-height: 1995px){#chat{height: 1895px; }
  @media ( max-height: 1994px){#chat{height: 1894px; }
      @media ( max-height: 1993px){#chat{height: 1893px; }
@media ( max-height: 1992px){#chat{height: 1892px; }
    @media ( max-height: 1991px){#chat{height: 1891px; }
        @media ( max-height: 1990px){#chat{height: 1890px; }
  @media ( max-height: 1989px){#chat{height: 1889px; }
      @media ( max-height: 1988px){#chat{height: 1888px; }
@media ( max-height: 1987px){#chat{height: 1887px; }
    @media ( max-height: 1986px){#chat{height: 1886px; }
        @media ( max-height: 1985px){#chat{height: 1885px; }
  @media ( max-height: 1984px){#chat{height: 1884px; }
      @media ( max-height: 1983px){#chat{height: 1883px; }
@media ( max-height: 1982px){#chat{height: 1882px; }
    @media ( max-height: 1981px){#chat{height: 1881px; }
        @media ( max-height: 1980px){#chat{height: 1880px; }
  @media ( max-height: 1979px){#chat{height: 1879px; }
      @media ( max-height: 1978px){#chat{height: 1878px; }
@media ( max-height: 1977px){#chat{height: 1877px; }
    @media ( max-height: 1976px){#chat{height: 1876px; }
        @media ( max-height: 1975px){#chat{height: 1875px; }
  @media ( max-height: 1974px){#chat{height: 1874px; }
      @media ( max-height: 1973px){#chat{height: 1873px; }
@media ( max-height: 1972px){#chat{height: 1872px; }
    @media ( max-height: 1971px){#chat{height: 1871px; }
        @media ( max-height: 1970px){#chat{height: 1870px; }
  @media ( max-height: 1969px){#chat{height: 1869px; }
      @media ( max-height: 1968px){#chat{height: 1868px; }
@media ( max-height: 1967px){#chat{height: 1867px; }
    @media ( max-height: 1966px){#chat{height: 1866px; }
        @media ( max-height: 1965px){#chat{height: 1865px; }
  @media ( max-height: 1964px){#chat{height: 1864px; }
      @media ( max-height: 1963px){#chat{height: 1863px; }
@media ( max-height: 1962px){#chat{height: 1862px; }
    @media ( max-height: 1961px){#chat{height: 1861px; }
        @media ( max-height: 1960px){#chat{height: 1860px; }
  @media ( max-height: 1959px){#chat{height: 1859px; }
      @media ( max-height: 1958px){#chat{height: 1858px; }
@media ( max-height: 1957px){#chat{height: 1857px; }
    @media ( max-height: 1956px){#chat{height: 1856px; }
        @media ( max-height: 1955px){#chat{height: 1855px; }
  @media ( max-height: 1954px){#chat{height: 1854px; }
      @media ( max-height: 1953px){#chat{height: 1853px; }
@media ( max-height: 1952px){#chat{height: 1852px; }
    @media ( max-height: 1951px){#chat{height: 1851px; }
        @media ( max-height: 1950px){#chat{height: 1850px; }
  @media ( max-height: 1949px){#chat{height: 1849px; }
      @media ( max-height: 1948px){#chat{height: 1848px; }
@media ( max-height: 1947px){#chat{height: 1847px; }
    @media ( max-height: 1946px){#chat{height: 1846px; }
        @media ( max-height: 1945px){#chat{height: 1845px; }
  @media ( max-height: 1944px){#chat{height: 1844px; }
      @media ( max-height: 1943px){#chat{height: 1843px; }
@media ( max-height: 1942px){#chat{height: 1842px; }
    @media ( max-height: 1941px){#chat{height: 1841px; }
        @media ( max-height: 1940px){#chat{height: 1840px; }
  @media ( max-height: 1939px){#chat{height: 1839px; }
      @media ( max-height: 1938px){#chat{height: 1838px; }
@media ( max-height: 1937px){#chat{height: 1837px; }
    @media ( max-height: 1936px){#chat{height: 1836px; }
        @media ( max-height: 1935px){#chat{height: 1835px; }
  @media ( max-height: 1934px){#chat{height: 1834px; }
      @media ( max-height: 1933px){#chat{height: 1833px; }
@media ( max-height: 1932px){#chat{height: 1832px; }
    @media ( max-height: 1931px){#chat{height: 1831px; }
        @media ( max-height: 1930px){#chat{height: 1830px; }
  @media ( max-height: 1929px){#chat{height: 1829px; }
      @media ( max-height: 1928px){#chat{height: 1828px; }
@media ( max-height: 1927px){#chat{height: 1827px; }
    @media ( max-height: 1926px){#chat{height: 1826px; }
        @media ( max-height: 1925px){#chat{height: 1825px; }
  @media ( max-height: 1924px){#chat{height: 1824px; }
      @media ( max-height: 1923px){#chat{height: 1823px; }
@media ( max-height: 1922px){#chat{height: 1822px; }
    @media ( max-height: 1921px){#chat{height: 1821px; }
        @media ( max-height: 1920px){#chat{height: 1820px; }
  @media ( max-height: 1919px){#chat{height: 1819px; }
      @media ( max-height: 1918px){#chat{height: 1818px; }
@media ( max-height: 1917px){#chat{height: 1817px; }
    @media ( max-height: 1916px){#chat{height: 1816px; }
        @media ( max-height: 1915px){#chat{height: 1815px; }
  @media ( max-height: 1914px){#chat{height: 1814px; }
      @media ( max-height: 1913px){#chat{height: 1813px; }
@media ( max-height: 1912px){#chat{height: 1812px; }
    @media ( max-height: 1911px){#chat{height: 1811px; }
        @media ( max-height: 1910px){#chat{height: 1810px; }
  @media ( max-height: 1909px){#chat{height: 1809px; }
      @media ( max-height: 1908px){#chat{height: 1808px; }
@media ( max-height: 1907px){#chat{height: 1807px; }
    @media ( max-height: 1906px){#chat{height: 1806px; }
        @media ( max-height: 1905px){#chat{height: 1805px; }
  @media ( max-height: 1904px){#chat{height: 1804px; }
      @media ( max-height: 1903px){#chat{height: 1803px; }
@media ( max-height: 1902px){#chat{height: 1802px; }
    @media ( max-height: 1901px){#chat{height: 1801px; }
        @media ( max-height: 1900px){#chat{height: 1800px; }
  @media ( max-height: 1899px){#chat{height: 1799px; }
      @media ( max-height: 1898px){#chat{height: 1798px; }
@media ( max-height: 1897px){#chat{height: 1797px; }
    @media ( max-height: 1896px){#chat{height: 1796px; }
        @media ( max-height: 1895px){#chat{height: 1795px; }
  @media ( max-height: 1894px){#chat{height: 1794px; }
      @media ( max-height: 1893px){#chat{height: 1793px; }
@media ( max-height: 1892px){#chat{height: 1792px; }
    @media ( max-height: 1891px){#chat{height: 1791px; }
        @media ( max-height: 1890px){#chat{height: 1790px; }
  @media ( max-height: 1889px){#chat{height: 1789px; }
      @media ( max-height: 1888px){#chat{height: 1788px; }
@media ( max-height: 1887px){#chat{height: 1787px; }
    @media ( max-height: 1886px){#chat{height: 1786px; }
        @media ( max-height: 1885px){#chat{height: 1785px; }
  @media ( max-height: 1884px){#chat{height: 1784px; }
      @media ( max-height: 1883px){#chat{height: 1783px; }
@media ( max-height: 1882px){#chat{height: 1782px; }
    @media ( max-height: 1881px){#chat{height: 1781px; }
        @media ( max-height: 1880px){#chat{height: 1780px; }
  @media ( max-height: 1879px){#chat{height: 1779px; }
      @media ( max-height: 1878px){#chat{height: 1778px; }
@media ( max-height: 1877px){#chat{height: 1777px; }
    @media ( max-height: 1876px){#chat{height: 1776px; }
        @media ( max-height: 1875px){#chat{height: 1775px; }
  @media ( max-height: 1874px){#chat{height: 1774px; }
      @media ( max-height: 1873px){#chat{height: 1773px; }
@media ( max-height: 1872px){#chat{height: 1772px; }
    @media ( max-height: 1871px){#chat{height: 1771px; }
        @media ( max-height: 1870px){#chat{height: 1770px; }
  @media ( max-height: 1869px){#chat{height: 1769px; }
      @media ( max-height: 1868px){#chat{height: 1768px; }
@media ( max-height: 1867px){#chat{height: 1767px; }
    @media ( max-height: 1866px){#chat{height: 1766px; }
        @media ( max-height: 1865px){#chat{height: 1765px; }
  @media ( max-height: 1864px){#chat{height: 1764px; }
      @media ( max-height: 1863px){#chat{height: 1763px; }
@media ( max-height: 1862px){#chat{height: 1762px; }
    @media ( max-height: 1861px){#chat{height: 1761px; }
        @media ( max-height: 1860px){#chat{height: 1760px; }
  @media ( max-height: 1859px){#chat{height: 1759px; }
      @media ( max-height: 1858px){#chat{height: 1758px; }
@media ( max-height: 1857px){#chat{height: 1757px; }
    @media ( max-height: 1856px){#chat{height: 1756px; }
        @media ( max-height: 1855px){#chat{height: 1755px; }
  @media ( max-height: 1854px){#chat{height: 1754px; }
      @media ( max-height: 1853px){#chat{height: 1753px; }
@media ( max-height: 1852px){#chat{height: 1752px; }
    @media ( max-height: 1851px){#chat{height: 1751px; }
        @media ( max-height: 1850px){#chat{height: 1750px; }
  @media ( max-height: 1849px){#chat{height: 1749px; }
      @media ( max-height: 1848px){#chat{height: 1748px; }
@media ( max-height: 1847px){#chat{height: 1747px; }
    @media ( max-height: 1846px){#chat{height: 1746px; }
        @media ( max-height: 1845px){#chat{height: 1745px; }
  @media ( max-height: 1844px){#chat{height: 1744px; }
      @media ( max-height: 1843px){#chat{height: 1743px; }
@media ( max-height: 1842px){#chat{height: 1742px; }
    @media ( max-height: 1841px){#chat{height: 1741px; }
        @media ( max-height: 1840px){#chat{height: 1740px; }
  @media ( max-height: 1839px){#chat{height: 1739px; }
      @media ( max-height: 1838px){#chat{height: 1738px; }
@media ( max-height: 1837px){#chat{height: 1737px; }
    @media ( max-height: 1836px){#chat{height: 1736px; }
        @media ( max-height: 1835px){#chat{height: 1735px; }
  @media ( max-height: 1834px){#chat{height: 1734px; }
      @media ( max-height: 1833px){#chat{height: 1733px; }
@media ( max-height: 1832px){#chat{height: 1732px; }
    @media ( max-height: 1831px){#chat{height: 1731px; }
        @media ( max-height: 1830px){#chat{height: 1730px; }
  @media ( max-height: 1829px){#chat{height: 1729px; }
      @media ( max-height: 1828px){#chat{height: 1728px; }
@media ( max-height: 1827px){#chat{height: 1727px; }
    @media ( max-height: 1826px){#chat{height: 1726px; }
        @media ( max-height: 1825px){#chat{height: 1725px; }
  @media ( max-height: 1824px){#chat{height: 1724px; }
      @media ( max-height: 1823px){#chat{height: 1723px; }
@media ( max-height: 1822px){#chat{height: 1722px; }
    @media ( max-height: 1821px){#chat{height: 1721px; }
        @media ( max-height: 1820px){#chat{height: 1720px; }
  @media ( max-height: 1819px){#chat{height: 1719px; }
      @media ( max-height: 1818px){#chat{height: 1718px; }
@media ( max-height: 1817px){#chat{height: 1717px; }
    @media ( max-height: 1816px){#chat{height: 1716px; }
        @media ( max-height: 1815px){#chat{height: 1715px; }
  @media ( max-height: 1814px){#chat{height: 1714px; }
      @media ( max-height: 1813px){#chat{height: 1713px; }
@media ( max-height: 1812px){#chat{height: 1712px; }
    @media ( max-height: 1811px){#chat{height: 1711px; }
        @media ( max-height: 1810px){#chat{height: 1710px; }
  @media ( max-height: 1809px){#chat{height: 1709px; }
      @media ( max-height: 1808px){#chat{height: 1708px; }
@media ( max-height: 1807px){#chat{height: 1707px; }
    @media ( max-height: 1806px){#chat{height: 1706px; }
        @media ( max-height: 1805px){#chat{height: 1705px; }
  @media ( max-height: 1804px){#chat{height: 1704px; }
      @media ( max-height: 1803px){#chat{height: 1703px; }
@media ( max-height: 1802px){#chat{height: 1702px; }
    @media ( max-height: 1801px){#chat{height: 1701px; }
        @media ( max-height: 1800px){#chat{height: 1700px; }
  @media ( max-height: 1799px){#chat{height: 1699px; }
      @media ( max-height: 1798px){#chat{height: 1698px; }
@media ( max-height: 1797px){#chat{height: 1697px; }
    @media ( max-height: 1796px){#chat{height: 1696px; }
        @media ( max-height: 1795px){#chat{height: 1695px; }
  @media ( max-height: 1794px){#chat{height: 1694px; }
      @media ( max-height: 1793px){#chat{height: 1693px; }
@media ( max-height: 1792px){#chat{height: 1692px; }
    @media ( max-height: 1791px){#chat{height: 1691px; }
        @media ( max-height: 1790px){#chat{height: 1690px; }
  @media ( max-height: 1789px){#chat{height: 1689px; }
      @media ( max-height: 1788px){#chat{height: 1688px; }
@media ( max-height: 1787px){#chat{height: 1687px; }
    @media ( max-height: 1786px){#chat{height: 1686px; }
        @media ( max-height: 1785px){#chat{height: 1685px; }
  @media ( max-height: 1784px){#chat{height: 1684px; }
      @media ( max-height: 1783px){#chat{height: 1683px; }
@media ( max-height: 1782px){#chat{height: 1682px; }
    @media ( max-height: 1781px){#chat{height: 1681px; }
        @media ( max-height: 1780px){#chat{height: 1680px; }
  @media ( max-height: 1779px){#chat{height: 1679px; }
      @media ( max-height: 1778px){#chat{height: 1678px; }
@media ( max-height: 1777px){#chat{height: 1677px; }
    @media ( max-height: 1776px){#chat{height: 1676px; }
        @media ( max-height: 1775px){#chat{height: 1675px; }
  @media ( max-height: 1774px){#chat{height: 1674px; }
      @media ( max-height: 1773px){#chat{height: 1673px; }
@media ( max-height: 1772px){#chat{height: 1672px; }
    @media ( max-height: 1771px){#chat{height: 1671px; }
        @media ( max-height: 1770px){#chat{height: 1670px; }
  @media ( max-height: 1769px){#chat{height: 1669px; }
      @media ( max-height: 1768px){#chat{height: 1668px; }
@media ( max-height: 1767px){#chat{height: 1667px; }
    @media ( max-height: 1766px){#chat{height: 1666px; }
        @media ( max-height: 1765px){#chat{height: 1665px; }
  @media ( max-height: 1764px){#chat{height: 1664px; }
      @media ( max-height: 1763px){#chat{height: 1663px; }
@media ( max-height: 1762px){#chat{height: 1662px; }
    @media ( max-height: 1761px){#chat{height: 1661px; }
        @media ( max-height: 1760px){#chat{height: 1660px; }
  @media ( max-height: 1759px){#chat{height: 1659px; }
      @media ( max-height: 1758px){#chat{height: 1658px; }
@media ( max-height: 1757px){#chat{height: 1657px; }
    @media ( max-height: 1756px){#chat{height: 1656px; }
        @media ( max-height: 1755px){#chat{height: 1655px; }
  @media ( max-height: 1754px){#chat{height: 1654px; }
      @media ( max-height: 1753px){#chat{height: 1653px; }
@media ( max-height: 1752px){#chat{height: 1652px; }
    @media ( max-height: 1751px){#chat{height: 1651px; }
        @media ( max-height: 1750px){#chat{height: 1650px; }
  @media ( max-height: 1749px){#chat{height: 1649px; }
      @media ( max-height: 1748px){#chat{height: 1648px; }
@media ( max-height: 1747px){#chat{height: 1647px; }
    @media ( max-height: 1746px){#chat{height: 1646px; }
        @media ( max-height: 1745px){#chat{height: 1645px; }
  @media ( max-height: 1744px){#chat{height: 1644px; }
      @media ( max-height: 1743px){#chat{height: 1643px; }
@media ( max-height: 1742px){#chat{height: 1642px; }
    @media ( max-height: 1741px){#chat{height: 1641px; }
        @media ( max-height: 1740px){#chat{height: 1640px; }
  @media ( max-height: 1739px){#chat{height: 1639px; }
      @media ( max-height: 1738px){#chat{height: 1638px; }
@media ( max-height: 1737px){#chat{height: 1637px; }
    @media ( max-height: 1736px){#chat{height: 1636px; }
        @media ( max-height: 1735px){#chat{height: 1635px; }
  @media ( max-height: 1734px){#chat{height: 1634px; }
      @media ( max-height: 1733px){#chat{height: 1633px; }
@media ( max-height: 1732px){#chat{height: 1632px; }
    @media ( max-height: 1731px){#chat{height: 1631px; }
        @media ( max-height: 1730px){#chat{height: 1630px; }
  @media ( max-height: 1729px){#chat{height: 1629px; }
      @media ( max-height: 1728px){#chat{height: 1628px; }
@media ( max-height: 1727px){#chat{height: 1627px; }
    @media ( max-height: 1726px){#chat{height: 1626px; }
        @media ( max-height: 1725px){#chat{height: 1625px; }
  @media ( max-height: 1724px){#chat{height: 1624px; }
      @media ( max-height: 1723px){#chat{height: 1623px; }
@media ( max-height: 1722px){#chat{height: 1622px; }
    @media ( max-height: 1721px){#chat{height: 1621px; }
        @media ( max-height: 1720px){#chat{height: 1620px; }
  @media ( max-height: 1719px){#chat{height: 1619px; }
      @media ( max-height: 1718px){#chat{height: 1618px; }
@media ( max-height: 1717px){#chat{height: 1617px; }
    @media ( max-height: 1716px){#chat{height: 1616px; }
        @media ( max-height: 1715px){#chat{height: 1615px; }
  @media ( max-height: 1714px){#chat{height: 1614px; }
      @media ( max-height: 1713px){#chat{height: 1613px; }
@media ( max-height: 1712px){#chat{height: 1612px; }
    @media ( max-height: 1711px){#chat{height: 1611px; }
        @media ( max-height: 1710px){#chat{height: 1610px; }
  @media ( max-height: 1709px){#chat{height: 1609px; }
      @media ( max-height: 1708px){#chat{height: 1608px; }
@media ( max-height: 1707px){#chat{height: 1607px; }
    @media ( max-height: 1706px){#chat{height: 1606px; }
        @media ( max-height: 1705px){#chat{height: 1605px; }
  @media ( max-height: 1704px){#chat{height: 1604px; }
      @media ( max-height: 1703px){#chat{height: 1603px; }
@media ( max-height: 1702px){#chat{height: 1602px; }
    @media ( max-height: 1701px){#chat{height: 1601px; }
        @media ( max-height: 1700px){#chat{height: 1600px; }
  @media ( max-height: 1699px){#chat{height: 1599px; }
      @media ( max-height: 1698px){#chat{height: 1598px; }
@media ( max-height: 1697px){#chat{height: 1597px; }
    @media ( max-height: 1696px){#chat{height: 1596px; }
        @media ( max-height: 1695px){#chat{height: 1595px; }
  @media ( max-height: 1694px){#chat{height: 1594px; }
      @media ( max-height: 1693px){#chat{height: 1593px; }
@media ( max-height: 1692px){#chat{height: 1592px; }
    @media ( max-height: 1691px){#chat{height: 1591px; }
        @media ( max-height: 1690px){#chat{height: 1590px; }
  @media ( max-height: 1689px){#chat{height: 1589px; }
      @media ( max-height: 1688px){#chat{height: 1588px; }
@media ( max-height: 1687px){#chat{height: 1587px; }
    @media ( max-height: 1686px){#chat{height: 1586px; }
        @media ( max-height: 1685px){#chat{height: 1585px; }
  @media ( max-height: 1684px){#chat{height: 1584px; }
      @media ( max-height: 1683px){#chat{height: 1583px; }
@media ( max-height: 1682px){#chat{height: 1582px; }
    @media ( max-height: 1681px){#chat{height: 1581px; }
        @media ( max-height: 1680px){#chat{height: 1580px; }
  @media ( max-height: 1679px){#chat{height: 1579px; }
      @media ( max-height: 1678px){#chat{height: 1578px; }
@media ( max-height: 1677px){#chat{height: 1577px; }
    @media ( max-height: 1676px){#chat{height: 1576px; }
        @media ( max-height: 1675px){#chat{height: 1575px; }
  @media ( max-height: 1674px){#chat{height: 1574px; }
      @media ( max-height: 1673px){#chat{height: 1573px; }
@media ( max-height: 1672px){#chat{height: 1572px; }
    @media ( max-height: 1671px){#chat{height: 1571px; }
        @media ( max-height: 1670px){#chat{height: 1570px; }
  @media ( max-height: 1669px){#chat{height: 1569px; }
      @media ( max-height: 1668px){#chat{height: 1568px; }
@media ( max-height: 1667px){#chat{height: 1567px; }
    @media ( max-height: 1666px){#chat{height: 1566px; }
        @media ( max-height: 1665px){#chat{height: 1565px; }
  @media ( max-height: 1664px){#chat{height: 1564px; }
      @media ( max-height: 1663px){#chat{height: 1563px; }
@media ( max-height: 1662px){#chat{height: 1562px; }
    @media ( max-height: 1661px){#chat{height: 1561px; }
        @media ( max-height: 1660px){#chat{height: 1560px; }
  @media ( max-height: 1659px){#chat{height: 1559px; }
      @media ( max-height: 1658px){#chat{height: 1558px; }
@media ( max-height: 1657px){#chat{height: 1557px; }
    @media ( max-height: 1656px){#chat{height: 1556px; }
        @media ( max-height: 1655px){#chat{height: 1555px; }
  @media ( max-height: 1654px){#chat{height: 1554px; }
      @media ( max-height: 1653px){#chat{height: 1553px; }
@media ( max-height: 1652px){#chat{height: 1552px; }
    @media ( max-height: 1651px){#chat{height: 1551px; }
        @media ( max-height: 1650px){#chat{height: 1550px; }
  @media ( max-height: 1649px){#chat{height: 1549px; }
      @media ( max-height: 1648px){#chat{height: 1548px; }
@media ( max-height: 1647px){#chat{height: 1547px; }
    @media ( max-height: 1646px){#chat{height: 1546px; }
        @media ( max-height: 1645px){#chat{height: 1545px; }
  @media ( max-height: 1644px){#chat{height: 1544px; }
      @media ( max-height: 1643px){#chat{height: 1543px; }
@media ( max-height: 1642px){#chat{height: 1542px; }
    @media ( max-height: 1641px){#chat{height: 1541px; }
        @media ( max-height: 1640px){#chat{height: 1540px; }
  @media ( max-height: 1639px){#chat{height: 1539px; }
      @media ( max-height: 1638px){#chat{height: 1538px; }
@media ( max-height: 1637px){#chat{height: 1537px; }
    @media ( max-height: 1636px){#chat{height: 1536px; }
        @media ( max-height: 1635px){#chat{height: 1535px; }
  @media ( max-height: 1634px){#chat{height: 1534px; }
      @media ( max-height: 1633px){#chat{height: 1533px; }
@media ( max-height: 1632px){#chat{height: 1532px; }
    @media ( max-height: 1631px){#chat{height: 1531px; }
        @media ( max-height: 1630px){#chat{height: 1530px; }
  @media ( max-height: 1629px){#chat{height: 1529px; }
      @media ( max-height: 1628px){#chat{height: 1528px; }
@media ( max-height: 1627px){#chat{height: 1527px; }
    @media ( max-height: 1626px){#chat{height: 1526px; }
        @media ( max-height: 1625px){#chat{height: 1525px; }
  @media ( max-height: 1624px){#chat{height: 1524px; }
      @media ( max-height: 1623px){#chat{height: 1523px; }
@media ( max-height: 1622px){#chat{height: 1522px; }
    @media ( max-height: 1621px){#chat{height: 1521px; }
        @media ( max-height: 1620px){#chat{height: 1520px; }
  @media ( max-height: 1619px){#chat{height: 1519px; }
      @media ( max-height: 1618px){#chat{height: 1518px; }
@media ( max-height: 1617px){#chat{height: 1517px; }
    @media ( max-height: 1616px){#chat{height: 1516px; }
        @media ( max-height: 1615px){#chat{height: 1515px; }
  @media ( max-height: 1614px){#chat{height: 1514px; }
      @media ( max-height: 1613px){#chat{height: 1513px; }
@media ( max-height: 1612px){#chat{height: 1512px; }
    @media ( max-height: 1611px){#chat{height: 1511px; }
        @media ( max-height: 1610px){#chat{height: 1510px; }
  @media ( max-height: 1609px){#chat{height: 1509px; }
      @media ( max-height: 1608px){#chat{height: 1508px; }
@media ( max-height: 1607px){#chat{height: 1507px; }
    @media ( max-height: 1606px){#chat{height: 1506px; }
        @media ( max-height: 1605px){#chat{height: 1505px; }
  @media ( max-height: 1604px){#chat{height: 1504px; }
      @media ( max-height: 1603px){#chat{height: 1503px; }
@media ( max-height: 1602px){#chat{height: 1502px; }
    @media ( max-height: 1601px){#chat{height: 1501px; }
        @media ( max-height: 1600px){#chat{height: 1500px; }
  @media ( max-height: 1599px){#chat{height: 1499px; }
      @media ( max-height: 1598px){#chat{height: 1498px; }
@media ( max-height: 1597px){#chat{height: 1497px; }
    @media ( max-height: 1596px){#chat{height: 1496px; }
        @media ( max-height: 1595px){#chat{height: 1495px; }
  @media ( max-height: 1594px){#chat{height: 1494px; }
      @media ( max-height: 1593px){#chat{height: 1493px; }
@media ( max-height: 1592px){#chat{height: 1492px; }
    @media ( max-height: 1591px){#chat{height: 1491px; }
        @media ( max-height: 1590px){#chat{height: 1490px; }
  @media ( max-height: 1589px){#chat{height: 1489px; }
      @media ( max-height: 1588px){#chat{height: 1488px; }
@media ( max-height: 1587px){#chat{height: 1487px; }
    @media ( max-height: 1586px){#chat{height: 1486px; }
        @media ( max-height: 1585px){#chat{height: 1485px; }
  @media ( max-height: 1584px){#chat{height: 1484px; }
      @media ( max-height: 1583px){#chat{height: 1483px; }
@media ( max-height: 1582px){#chat{height: 1482px; }
    @media ( max-height: 1581px){#chat{height: 1481px; }
        @media ( max-height: 1580px){#chat{height: 1480px; }
  @media ( max-height: 1579px){#chat{height: 1479px; }
      @media ( max-height: 1578px){#chat{height: 1478px; }
@media ( max-height: 1577px){#chat{height: 1477px; }
    @media ( max-height: 1576px){#chat{height: 1476px; }
        @media ( max-height: 1575px){#chat{height: 1475px; }
  @media ( max-height: 1574px){#chat{height: 1474px; }
      @media ( max-height: 1573px){#chat{height: 1473px; }
@media ( max-height: 1572px){#chat{height: 1472px; }
    @media ( max-height: 1571px){#chat{height: 1471px; }
        @media ( max-height: 1570px){#chat{height: 1470px; }
  @media ( max-height: 1569px){#chat{height: 1469px; }
      @media ( max-height: 1568px){#chat{height: 1468px; }
@media ( max-height: 1567px){#chat{height: 1467px; }
    @media ( max-height: 1566px){#chat{height: 1466px; }
        @media ( max-height: 1565px){#chat{height: 1465px; }
  @media ( max-height: 1564px){#chat{height: 1464px; }
      @media ( max-height: 1563px){#chat{height: 1463px; }
@media ( max-height: 1562px){#chat{height: 1462px; }
    @media ( max-height: 1561px){#chat{height: 1461px; }
        @media ( max-height: 1560px){#chat{height: 1460px; }
  @media ( max-height: 1559px){#chat{height: 1459px; }
      @media ( max-height: 1558px){#chat{height: 1458px; }
@media ( max-height: 1557px){#chat{height: 1457px; }
    @media ( max-height: 1556px){#chat{height: 1456px; }
        @media ( max-height: 1555px){#chat{height: 1455px; }
  @media ( max-height: 1554px){#chat{height: 1454px; }
      @media ( max-height: 1553px){#chat{height: 1453px; }
@media ( max-height: 1552px){#chat{height: 1452px; }
    @media ( max-height: 1551px){#chat{height: 1451px; }
        @media ( max-height: 1550px){#chat{height: 1450px; }
  @media ( max-height: 1549px){#chat{height: 1449px; }
      @media ( max-height: 1548px){#chat{height: 1448px; }
@media ( max-height: 1547px){#chat{height: 1447px; }
    @media ( max-height: 1546px){#chat{height: 1446px; }
        @media ( max-height: 1545px){#chat{height: 1445px; }
  @media ( max-height: 1544px){#chat{height: 1444px; }
      @media ( max-height: 1543px){#chat{height: 1443px; }
@media ( max-height: 1542px){#chat{height: 1442px; }
    @media ( max-height: 1541px){#chat{height: 1441px; }
        @media ( max-height: 1540px){#chat{height: 1440px; }
  @media ( max-height: 1539px){#chat{height: 1439px; }
      @media ( max-height: 1538px){#chat{height: 1438px; }
@media ( max-height: 1537px){#chat{height: 1437px; }
    @media ( max-height: 1536px){#chat{height: 1436px; }
        @media ( max-height: 1535px){#chat{height: 1435px; }
  @media ( max-height: 1534px){#chat{height: 1434px; }
      @media ( max-height: 1533px){#chat{height: 1433px; }
@media ( max-height: 1532px){#chat{height: 1432px; }
    @media ( max-height: 1531px){#chat{height: 1431px; }
        @media ( max-height: 1530px){#chat{height: 1430px; }
  @media ( max-height: 1529px){#chat{height: 1429px; }
      @media ( max-height: 1528px){#chat{height: 1428px; }
@media ( max-height: 1527px){#chat{height: 1427px; }
    @media ( max-height: 1526px){#chat{height: 1426px; }
        @media ( max-height: 1525px){#chat{height: 1425px; }
  @media ( max-height: 1524px){#chat{height: 1424px; }
      @media ( max-height: 1523px){#chat{height: 1423px; }
@media ( max-height: 1522px){#chat{height: 1422px; }
    @media ( max-height: 1521px){#chat{height: 1421px; }
        @media ( max-height: 1520px){#chat{height: 1420px; }
  @media ( max-height: 1519px){#chat{height: 1419px; }
      @media ( max-height: 1518px){#chat{height: 1418px; }
@media ( max-height: 1517px){#chat{height: 1417px; }
    @media ( max-height: 1516px){#chat{height: 1416px; }
        @media ( max-height: 1515px){#chat{height: 1415px; }
  @media ( max-height: 1514px){#chat{height: 1414px; }
      @media ( max-height: 1513px){#chat{height: 1413px; }
@media ( max-height: 1512px){#chat{height: 1412px; }
    @media ( max-height: 1511px){#chat{height: 1411px; }
        @media ( max-height: 1510px){#chat{height: 1410px; }
  @media ( max-height: 1509px){#chat{height: 1409px; }
      @media ( max-height: 1508px){#chat{height: 1408px; }
@media ( max-height: 1507px){#chat{height: 1407px; }
    @media ( max-height: 1506px){#chat{height: 1406px; }
        @media ( max-height: 1505px){#chat{height: 1405px; }
  @media ( max-height: 1504px){#chat{height: 1404px; }
      @media ( max-height: 1503px){#chat{height: 1403px; }
@media ( max-height: 1502px){#chat{height: 1402px; }
    @media ( max-height: 1501px){#chat{height: 1401px; }
        @media ( max-height: 1500px){#chat{height: 1400px; }
  @media ( max-height: 1499px){#chat{height: 1399px; }
      @media ( max-height: 1498px){#chat{height: 1398px; }
@media ( max-height: 1497px){#chat{height: 1397px; }
    @media ( max-height: 1496px){#chat{height: 1396px; }
        @media ( max-height: 1495px){#chat{height: 1395px; }
  @media ( max-height: 1494px){#chat{height: 1394px; }
      @media ( max-height: 1493px){#chat{height: 1393px; }
@media ( max-height: 1492px){#chat{height: 1392px; }
    @media ( max-height: 1491px){#chat{height: 1391px; }
        @media ( max-height: 1490px){#chat{height: 1390px; }
  @media ( max-height: 1489px){#chat{height: 1389px; }
      @media ( max-height: 1488px){#chat{height: 1388px; }
@media ( max-height: 1487px){#chat{height: 1387px; }
    @media ( max-height: 1486px){#chat{height: 1386px; }
        @media ( max-height: 1485px){#chat{height: 1385px; }
  @media ( max-height: 1484px){#chat{height: 1384px; }
      @media ( max-height: 1483px){#chat{height: 1383px; }
@media ( max-height: 1482px){#chat{height: 1382px; }
    @media ( max-height: 1481px){#chat{height: 1381px; }
        @media ( max-height: 1480px){#chat{height: 1380px; }
  @media ( max-height: 1479px){#chat{height: 1379px; }
      @media ( max-height: 1478px){#chat{height: 1378px; }
@media ( max-height: 1477px){#chat{height: 1377px; }
    @media ( max-height: 1476px){#chat{height: 1376px; }
        @media ( max-height: 1475px){#chat{height: 1375px; }
  @media ( max-height: 1474px){#chat{height: 1374px; }
      @media ( max-height: 1473px){#chat{height: 1373px; }
@media ( max-height: 1472px){#chat{height: 1372px; }
    @media ( max-height: 1471px){#chat{height: 1371px; }
        @media ( max-height: 1470px){#chat{height: 1370px; }
  @media ( max-height: 1469px){#chat{height: 1369px; }
      @media ( max-height: 1468px){#chat{height: 1368px; }
@media ( max-height: 1467px){#chat{height: 1367px; }
    @media ( max-height: 1466px){#chat{height: 1366px; }
        @media ( max-height: 1465px){#chat{height: 1365px; }
  @media ( max-height: 1464px){#chat{height: 1364px; }
      @media ( max-height: 1463px){#chat{height: 1363px; }
@media ( max-height: 1462px){#chat{height: 1362px; }
    @media ( max-height: 1461px){#chat{height: 1361px; }
        @media ( max-height: 1460px){#chat{height: 1360px; }
  @media ( max-height: 1459px){#chat{height: 1359px; }
      @media ( max-height: 1458px){#chat{height: 1358px; }
@media ( max-height: 1457px){#chat{height: 1357px; }
    @media ( max-height: 1456px){#chat{height: 1356px; }
        @media ( max-height: 1455px){#chat{height: 1355px; }
  @media ( max-height: 1454px){#chat{height: 1354px; }
      @media ( max-height: 1453px){#chat{height: 1353px; }
@media ( max-height: 1452px){#chat{height: 1352px; }
    @media ( max-height: 1451px){#chat{height: 1351px; }
        @media ( max-height: 1450px){#chat{height: 1350px; }
  @media ( max-height: 1449px){#chat{height: 1349px; }
      @media ( max-height: 1448px){#chat{height: 1348px; }
@media ( max-height: 1447px){#chat{height: 1347px; }
    @media ( max-height: 1446px){#chat{height: 1346px; }
        @media ( max-height: 1445px){#chat{height: 1345px; }
  @media ( max-height: 1444px){#chat{height: 1344px; }
      @media ( max-height: 1443px){#chat{height: 1343px; }
@media ( max-height: 1442px){#chat{height: 1342px; }
    @media ( max-height: 1441px){#chat{height: 1341px; }
        @media ( max-height: 1440px){#chat{height: 1340px; }
  @media ( max-height: 1439px){#chat{height: 1339px; }
      @media ( max-height: 1438px){#chat{height: 1338px; }
@media ( max-height: 1437px){#chat{height: 1337px; }
    @media ( max-height: 1436px){#chat{height: 1336px; }
        @media ( max-height: 1435px){#chat{height: 1335px; }
  @media ( max-height: 1434px){#chat{height: 1334px; }
      @media ( max-height: 1433px){#chat{height: 1333px; }
@media ( max-height: 1432px){#chat{height: 1332px; }
    @media ( max-height: 1431px){#chat{height: 1331px; }
        @media ( max-height: 1430px){#chat{height: 1330px; }
  @media ( max-height: 1429px){#chat{height: 1329px; }
      @media ( max-height: 1428px){#chat{height: 1328px; }
@media ( max-height: 1427px){#chat{height: 1327px; }
    @media ( max-height: 1426px){#chat{height: 1326px; }
        @media ( max-height: 1425px){#chat{height: 1325px; }
  @media ( max-height: 1424px){#chat{height: 1324px; }
      @media ( max-height: 1423px){#chat{height: 1323px; }
@media ( max-height: 1422px){#chat{height: 1322px; }
    @media ( max-height: 1421px){#chat{height: 1321px; }
        @media ( max-height: 1420px){#chat{height: 1320px; }
  @media ( max-height: 1419px){#chat{height: 1319px; }
      @media ( max-height: 1418px){#chat{height: 1318px; }
@media ( max-height: 1417px){#chat{height: 1317px; }
    @media ( max-height: 1416px){#chat{height: 1316px; }
        @media ( max-height: 1415px){#chat{height: 1315px; }
  @media ( max-height: 1414px){#chat{height: 1314px; }
      @media ( max-height: 1413px){#chat{height: 1313px; }
@media ( max-height: 1412px){#chat{height: 1312px; }
    @media ( max-height: 1411px){#chat{height: 1311px; }
        @media ( max-height: 1410px){#chat{height: 1310px; }
  @media ( max-height: 1409px){#chat{height: 1309px; }
      @media ( max-height: 1408px){#chat{height: 1308px; }
@media ( max-height: 1407px){#chat{height: 1307px; }
    @media ( max-height: 1406px){#chat{height: 1306px; }
        @media ( max-height: 1405px){#chat{height: 1305px; }
  @media ( max-height: 1404px){#chat{height: 1304px; }
      @media ( max-height: 1403px){#chat{height: 1303px; }
@media ( max-height: 1402px){#chat{height: 1302px; }
    @media ( max-height: 1401px){#chat{height: 1301px; }
        @media ( max-height: 1400px){#chat{height: 1300px; }
  @media ( max-height: 1399px){#chat{height: 1299px; }
      @media ( max-height: 1398px){#chat{height: 1298px; }
@media ( max-height: 1397px){#chat{height: 1297px; }
    @media ( max-height: 1396px){#chat{height: 1296px; }
        @media ( max-height: 1395px){#chat{height: 1295px; }
  @media ( max-height: 1394px){#chat{height: 1294px; }
      @media ( max-height: 1393px){#chat{height: 1293px; }
@media ( max-height: 1392px){#chat{height: 1292px; }
    @media ( max-height: 1391px){#chat{height: 1291px; }
        @media ( max-height: 1390px){#chat{height: 1290px; }
  @media ( max-height: 1389px){#chat{height: 1289px; }
      @media ( max-height: 1388px){#chat{height: 1288px; }
@media ( max-height: 1387px){#chat{height: 1287px; }
    @media ( max-height: 1386px){#chat{height: 1286px; }
        @media ( max-height: 1385px){#chat{height: 1285px; }
  @media ( max-height: 1384px){#chat{height: 1284px; }
      @media ( max-height: 1383px){#chat{height: 1283px; }
@media ( max-height: 1382px){#chat{height: 1282px; }
    @media ( max-height: 1381px){#chat{height: 1281px; }
        @media ( max-height: 1380px){#chat{height: 1280px; }
  @media ( max-height: 1379px){#chat{height: 1279px; }
      @media ( max-height: 1378px){#chat{height: 1278px; }
@media ( max-height: 1377px){#chat{height: 1277px; }
    @media ( max-height: 1376px){#chat{height: 1276px; }
        @media ( max-height: 1375px){#chat{height: 1275px; }
  @media ( max-height: 1374px){#chat{height: 1274px; }
      @media ( max-height: 1373px){#chat{height: 1273px; }
@media ( max-height: 1372px){#chat{height: 1272px; }
    @media ( max-height: 1371px){#chat{height: 1271px; }
        @media ( max-height: 1370px){#chat{height: 1270px; }
  @media ( max-height: 1369px){#chat{height: 1269px; }
      @media ( max-height: 1368px){#chat{height: 1268px; }
@media ( max-height: 1367px){#chat{height: 1267px; }
    @media ( max-height: 1366px){#chat{height: 1266px; }
        @media ( max-height: 1365px){#chat{height: 1265px; }
  @media ( max-height: 1364px){#chat{height: 1264px; }
      @media ( max-height: 1363px){#chat{height: 1263px; }
@media ( max-height: 1362px){#chat{height: 1262px; }
    @media ( max-height: 1361px){#chat{height: 1261px; }
        @media ( max-height: 1360px){#chat{height: 1260px; }
  @media ( max-height: 1359px){#chat{height: 1259px; }
      @media ( max-height: 1358px){#chat{height: 1258px; }
@media ( max-height: 1357px){#chat{height: 1257px; }
    @media ( max-height: 1356px){#chat{height: 1256px; }
        @media ( max-height: 1355px){#chat{height: 1255px; }
  @media ( max-height: 1354px){#chat{height: 1254px; }
      @media ( max-height: 1353px){#chat{height: 1253px; }
@media ( max-height: 1352px){#chat{height: 1252px; }
    @media ( max-height: 1351px){#chat{height: 1251px; }
        @media ( max-height: 1350px){#chat{height: 1250px; }
  @media ( max-height: 1349px){#chat{height: 1249px; }
      @media ( max-height: 1348px){#chat{height: 1248px; }
@media ( max-height: 1347px){#chat{height: 1247px; }
    @media ( max-height: 1346px){#chat{height: 1246px; }
        @media ( max-height: 1345px){#chat{height: 1245px; }
  @media ( max-height: 1344px){#chat{height: 1244px; }
      @media ( max-height: 1343px){#chat{height: 1243px; }
@media ( max-height: 1342px){#chat{height: 1242px; }
    @media ( max-height: 1341px){#chat{height: 1241px; }
        @media ( max-height: 1340px){#chat{height: 1240px; }
  @media ( max-height: 1339px){#chat{height: 1239px; }
      @media ( max-height: 1338px){#chat{height: 1238px; }
@media ( max-height: 1337px){#chat{height: 1237px; }
    @media ( max-height: 1336px){#chat{height: 1236px; }
        @media ( max-height: 1335px){#chat{height: 1235px; }
  @media ( max-height: 1334px){#chat{height: 1234px; }
      @media ( max-height: 1333px){#chat{height: 1233px; }
@media ( max-height: 1332px){#chat{height: 1232px; }
    @media ( max-height: 1331px){#chat{height: 1231px; }
        @media ( max-height: 1330px){#chat{height: 1230px; }
  @media ( max-height: 1329px){#chat{height: 1229px; }
      @media ( max-height: 1328px){#chat{height: 1228px; }
@media ( max-height: 1327px){#chat{height: 1227px; }
    @media ( max-height: 1326px){#chat{height: 1226px; }
        @media ( max-height: 1325px){#chat{height: 1225px; }
  @media ( max-height: 1324px){#chat{height: 1224px; }
      @media ( max-height: 1323px){#chat{height: 1223px; }
@media ( max-height: 1322px){#chat{height: 1222px; }
    @media ( max-height: 1321px){#chat{height: 1221px; }
        @media ( max-height: 1320px){#chat{height: 1220px; }
  @media ( max-height: 1319px){#chat{height: 1219px; }
      @media ( max-height: 1318px){#chat{height: 1218px; }
@media ( max-height: 1317px){#chat{height: 1217px; }
    @media ( max-height: 1316px){#chat{height: 1216px; }
        @media ( max-height: 1315px){#chat{height: 1215px; }
  @media ( max-height: 1314px){#chat{height: 1214px; }
      @media ( max-height: 1313px){#chat{height: 1213px; }
@media ( max-height: 1312px){#chat{height: 1212px; }
    @media ( max-height: 1311px){#chat{height: 1211px; }
        @media ( max-height: 1310px){#chat{height: 1210px; }
  @media ( max-height: 1309px){#chat{height: 1209px; }
      @media ( max-height: 1308px){#chat{height: 1208px; }
@media ( max-height: 1307px){#chat{height: 1207px; }
    @media ( max-height: 1306px){#chat{height: 1206px; }
        @media ( max-height: 1305px){#chat{height: 1205px; }
  @media ( max-height: 1304px){#chat{height: 1204px; }
      @media ( max-height: 1303px){#chat{height: 1203px; }
@media ( max-height: 1302px){#chat{height: 1202px; }
    @media ( max-height: 1301px){#chat{height: 1201px; }
        @media ( max-height: 1300px){#chat{height: 1200px; }
  @media ( max-height: 1299px){#chat{height: 1199px; }
      @media ( max-height: 1298px){#chat{height: 1198px; }
@media ( max-height: 1297px){#chat{height: 1197px; }
    @media ( max-height: 1296px){#chat{height: 1196px; }
        @media ( max-height: 1295px){#chat{height: 1195px; }
  @media ( max-height: 1294px){#chat{height: 1194px; }
      @media ( max-height: 1293px){#chat{height: 1193px; }
@media ( max-height: 1292px){#chat{height: 1192px; }
    @media ( max-height: 1291px){#chat{height: 1191px; }
        @media ( max-height: 1290px){#chat{height: 1190px; }
  @media ( max-height: 1289px){#chat{height: 1189px; }
      @media ( max-height: 1288px){#chat{height: 1188px; }
@media ( max-height: 1287px){#chat{height: 1187px; }
    @media ( max-height: 1286px){#chat{height: 1186px; }
        @media ( max-height: 1285px){#chat{height: 1185px; }
  @media ( max-height: 1284px){#chat{height: 1184px; }
      @media ( max-height: 1283px){#chat{height: 1183px; }
@media ( max-height: 1282px){#chat{height: 1182px; }
    @media ( max-height: 1281px){#chat{height: 1181px; }
        @media ( max-height: 1280px){#chat{height: 1180px; }
  @media ( max-height: 1279px){#chat{height: 1179px; }
      @media ( max-height: 1278px){#chat{height: 1178px; }
@media ( max-height: 1277px){#chat{height: 1177px; }
    @media ( max-height: 1276px){#chat{height: 1176px; }
        @media ( max-height: 1275px){#chat{height: 1175px; }
  @media ( max-height: 1274px){#chat{height: 1174px; }
      @media ( max-height: 1273px){#chat{height: 1173px; }
@media ( max-height: 1272px){#chat{height: 1172px; }
    @media ( max-height: 1271px){#chat{height: 1171px; }
        @media ( max-height: 1270px){#chat{height: 1170px; }
  @media ( max-height: 1269px){#chat{height: 1169px; }
      @media ( max-height: 1268px){#chat{height: 1168px; }
@media ( max-height: 1267px){#chat{height: 1167px; }
    @media ( max-height: 1266px){#chat{height: 1166px; }
        @media ( max-height: 1265px){#chat{height: 1165px; }
  @media ( max-height: 1264px){#chat{height: 1164px; }
      @media ( max-height: 1263px){#chat{height: 1163px; }
@media ( max-height: 1262px){#chat{height: 1162px; }
    @media ( max-height: 1261px){#chat{height: 1161px; }
        @media ( max-height: 1260px){#chat{height: 1160px; }
  @media ( max-height: 1259px){#chat{height: 1159px; }
      @media ( max-height: 1258px){#chat{height: 1158px; }
@media ( max-height: 1257px){#chat{height: 1157px; }
    @media ( max-height: 1256px){#chat{height: 1156px; }
        @media ( max-height: 1255px){#chat{height: 1155px; }
  @media ( max-height: 1254px){#chat{height: 1154px; }
      @media ( max-height: 1253px){#chat{height: 1153px; }
@media ( max-height: 1252px){#chat{height: 1152px; }
    @media ( max-height: 1251px){#chat{height: 1151px; }
        @media ( max-height: 1250px){#chat{height: 1150px; }
  @media ( max-height: 1249px){#chat{height: 1149px; }
      @media ( max-height: 1248px){#chat{height: 1148px; }
@media ( max-height: 1247px){#chat{height: 1147px; }
    @media ( max-height: 1246px){#chat{height: 1146px; }
        @media ( max-height: 1245px){#chat{height: 1145px; }
  @media ( max-height: 1244px){#chat{height: 1144px; }
      @media ( max-height: 1243px){#chat{height: 1143px; }
@media ( max-height: 1242px){#chat{height: 1142px; }
    @media ( max-height: 1241px){#chat{height: 1141px; }
        @media ( max-height: 1240px){#chat{height: 1140px; }
  @media ( max-height: 1239px){#chat{height: 1139px; }
      @media ( max-height: 1238px){#chat{height: 1138px; }
@media ( max-height: 1237px){#chat{height: 1137px; }
    @media ( max-height: 1236px){#chat{height: 1136px; }
        @media ( max-height: 1235px){#chat{height: 1135px; }
  @media ( max-height: 1234px){#chat{height: 1134px; }
      @media ( max-height: 1233px){#chat{height: 1133px; }
@media ( max-height: 1232px){#chat{height: 1132px; }
    @media ( max-height: 1231px){#chat{height: 1131px; }
        @media ( max-height: 1230px){#chat{height: 1130px; }
  @media ( max-height: 1229px){#chat{height: 1129px; }
      @media ( max-height: 1228px){#chat{height: 1128px; }
@media ( max-height: 1227px){#chat{height: 1127px; }
    @media ( max-height: 1226px){#chat{height: 1126px; }
        @media ( max-height: 1225px){#chat{height: 1125px; }
  @media ( max-height: 1224px){#chat{height: 1124px; }
      @media ( max-height: 1223px){#chat{height: 1123px; }
@media ( max-height: 1222px){#chat{height: 1122px; }
    @media ( max-height: 1221px){#chat{height: 1121px; }
        @media ( max-height: 1220px){#chat{height: 1120px; }
  @media ( max-height: 1219px){#chat{height: 1119px; }
      @media ( max-height: 1218px){#chat{height: 1118px; }
@media ( max-height: 1217px){#chat{height: 1117px; }
    @media ( max-height: 1216px){#chat{height: 1116px; }
        @media ( max-height: 1215px){#chat{height: 1115px; }
  @media ( max-height: 1214px){#chat{height: 1114px; }
      @media ( max-height: 1213px){#chat{height: 1113px; }
@media ( max-height: 1212px){#chat{height: 1112px; }
    @media ( max-height: 1211px){#chat{height: 1111px; }
        @media ( max-height: 1210px){#chat{height: 1110px; }
  @media ( max-height: 1209px){#chat{height: 1109px; }
      @media ( max-height: 1208px){#chat{height: 1108px; }
@media ( max-height: 1207px){#chat{height: 1107px; }
    @media ( max-height: 1206px){#chat{height: 1106px; }
        @media ( max-height: 1205px){#chat{height: 1105px; }
  @media ( max-height: 1204px){#chat{height: 1104px; }
      @media ( max-height: 1203px){#chat{height: 1103px; }
@media ( max-height: 1202px){#chat{height: 1102px; }
    @media ( max-height: 1201px){#chat{height: 1101px; }
        @media ( max-height: 1200px){#chat{height: 1100px; }
  @media ( max-height: 1199px){#chat{height: 1099px; }
      @media ( max-height: 1198px){#chat{height: 1098px; }
@media ( max-height: 1197px){#chat{height: 1097px; }
    @media ( max-height: 1196px){#chat{height: 1096px; }
        @media ( max-height: 1195px){#chat{height: 1095px; }
  @media ( max-height: 1194px){#chat{height: 1094px; }
      @media ( max-height: 1193px){#chat{height: 1093px; }
@media ( max-height: 1192px){#chat{height: 1092px; }
    @media ( max-height: 1191px){#chat{height: 1091px; }
        @media ( max-height: 1190px){#chat{height: 1090px; }
  @media ( max-height: 1189px){#chat{height: 1089px; }
      @media ( max-height: 1188px){#chat{height: 1088px; }
@media ( max-height: 1187px){#chat{height: 1087px; }
    @media ( max-height: 1186px){#chat{height: 1086px; }
        @media ( max-height: 1185px){#chat{height: 1085px; }
  @media ( max-height: 1184px){#chat{height: 1084px; }
      @media ( max-height: 1183px){#chat{height: 1083px; }
@media ( max-height: 1182px){#chat{height: 1082px; }
    @media ( max-height: 1181px){#chat{height: 1081px; }
        @media ( max-height: 1180px){#chat{height: 1080px; }
  @media ( max-height: 1179px){#chat{height: 1079px; }
      @media ( max-height: 1178px){#chat{height: 1078px; }
@media ( max-height: 1177px){#chat{height: 1077px; }
    @media ( max-height: 1176px){#chat{height: 1076px; }
        @media ( max-height: 1175px){#chat{height: 1075px; }
  @media ( max-height: 1174px){#chat{height: 1074px; }
      @media ( max-height: 1173px){#chat{height: 1073px; }
@media ( max-height: 1172px){#chat{height: 1072px; }
    @media ( max-height: 1171px){#chat{height: 1071px; }
        @media ( max-height: 1170px){#chat{height: 1070px; }
  @media ( max-height: 1169px){#chat{height: 1069px; }
      @media ( max-height: 1168px){#chat{height: 1068px; }
@media ( max-height: 1167px){#chat{height: 1067px; }
    @media ( max-height: 1166px){#chat{height: 1066px; }
        @media ( max-height: 1165px){#chat{height: 1065px; }
  @media ( max-height: 1164px){#chat{height: 1064px; }
      @media ( max-height: 1163px){#chat{height: 1063px; }
@media ( max-height: 1162px){#chat{height: 1062px; }
    @media ( max-height: 1161px){#chat{height: 1061px; }
        @media ( max-height: 1160px){#chat{height: 1060px; }
  @media ( max-height: 1159px){#chat{height: 1059px; }
      @media ( max-height: 1158px){#chat{height: 1058px; }
@media ( max-height: 1157px){#chat{height: 1057px; }
    @media ( max-height: 1156px){#chat{height: 1056px; }
        @media ( max-height: 1155px){#chat{height: 1055px; }
  @media ( max-height: 1154px){#chat{height: 1054px; }
      @media ( max-height: 1153px){#chat{height: 1053px; }
@media ( max-height: 1152px){#chat{height: 1052px; }
    @media ( max-height: 1151px){#chat{height: 1051px; }
        @media ( max-height: 1150px){#chat{height: 1050px; }
  @media ( max-height: 1149px){#chat{height: 1049px; }
      @media ( max-height: 1148px){#chat{height: 1048px; }
@media ( max-height: 1147px){#chat{height: 1047px; }
    @media ( max-height: 1146px){#chat{height: 1046px; }
        @media ( max-height: 1145px){#chat{height: 1045px; }
  @media ( max-height: 1144px){#chat{height: 1044px; }
      @media ( max-height: 1143px){#chat{height: 1043px; }
@media ( max-height: 1142px){#chat{height: 1042px; }
    @media ( max-height: 1141px){#chat{height: 1041px; }
        @media ( max-height: 1140px){#chat{height: 1040px; }
  @media ( max-height: 1139px){#chat{height: 1039px; }
      @media ( max-height: 1138px){#chat{height: 1038px; }
@media ( max-height: 1137px){#chat{height: 1037px; }
    @media ( max-height: 1136px){#chat{height: 1036px; }
        @media ( max-height: 1135px){#chat{height: 1035px; }
  @media ( max-height: 1134px){#chat{height: 1034px; }
      @media ( max-height: 1133px){#chat{height: 1033px; }
@media ( max-height: 1132px){#chat{height: 1032px; }
    @media ( max-height: 1131px){#chat{height: 1031px; }
        @media ( max-height: 1130px){#chat{height: 1030px; }
  @media ( max-height: 1129px){#chat{height: 1029px; }
      @media ( max-height: 1128px){#chat{height: 1028px; }
@media ( max-height: 1127px){#chat{height: 1027px; }
    @media ( max-height: 1126px){#chat{height: 1026px; }
        @media ( max-height: 1125px){#chat{height: 1025px; }
  @media ( max-height: 1124px){#chat{height: 1024px; }
      @media ( max-height: 1123px){#chat{height: 1023px; }
@media ( max-height: 1122px){#chat{height: 1022px; }
    @media ( max-height: 1121px){#chat{height: 1021px; }
        @media ( max-height: 1120px){#chat{height: 1020px; }
  @media ( max-height: 1119px){#chat{height: 1019px; }
      @media ( max-height: 1118px){#chat{height: 1018px; }
@media ( max-height: 1117px){#chat{height: 1017px; }
    @media ( max-height: 1116px){#chat{height: 1016px; }
        @media ( max-height: 1115px){#chat{height: 1015px; }
  @media ( max-height: 1114px){#chat{height: 1014px; }
      @media ( max-height: 1113px){#chat{height: 1013px; }
@media ( max-height: 1112px){#chat{height: 1012px; }
    @media ( max-height: 1111px){#chat{height: 1011px; }
        @media ( max-height: 1110px){#chat{height: 1010px; }
  @media ( max-height: 1109px){#chat{height: 1009px; }
      @media ( max-height: 1108px){#chat{height: 1008px; }
@media ( max-height: 1107px){#chat{height: 1007px; }
    @media ( max-height: 1106px){#chat{height: 1006px; }
        @media ( max-height: 1105px){#chat{height: 1005px; }
  @media ( max-height: 1104px){#chat{height: 1004px; }
      @media ( max-height: 1103px){#chat{height: 1003px; }
@media ( max-height: 1102px){#chat{height: 1002px; }
    @media ( max-height: 1101px){#chat{height: 1001px; }
        @media ( max-height: 1100px){#chat{height: 1000px; }
  @media ( max-height: 1099px){#chat{height: 999px; }
      @media ( max-height: 1098px){#chat{height: 998px; }
@media ( max-height: 1097px){#chat{height: 997px; }
    @media ( max-height: 1096px){#chat{height: 996px; }
        @media ( max-height: 1095px){#chat{height: 995px; }
  @media ( max-height: 1094px){#chat{height: 994px; }
      @media ( max-height: 1093px){#chat{height: 993px; }
@media ( max-height: 1092px){#chat{height: 992px; }
    @media ( max-height: 1091px){#chat{height: 991px; }
        @media ( max-height: 1090px){#chat{height: 990px; }
  @media ( max-height: 1089px){#chat{height: 989px; }
      @media ( max-height: 1088px){#chat{height: 988px; }
@media ( max-height: 1087px){#chat{height: 987px; }
    @media ( max-height: 1086px){#chat{height: 986px; }
        @media ( max-height: 1085px){#chat{height: 985px; }
  @media ( max-height: 1084px){#chat{height: 984px; }
      @media ( max-height: 1083px){#chat{height: 983px; }
@media ( max-height: 1082px){#chat{height: 982px; }
    @media ( max-height: 1081px){#chat{height: 981px; }
        @media ( max-height: 1080px){#chat{height: 980px; }
  @media ( max-height: 1079px){#chat{height: 979px; }
      @media ( max-height: 1078px){#chat{height: 978px; }
@media ( max-height: 1077px){#chat{height: 977px; }
    @media ( max-height: 1076px){#chat{height: 976px; }
        @media ( max-height: 1075px){#chat{height: 975px; }
  @media ( max-height: 1074px){#chat{height: 974px; }
      @media ( max-height: 1073px){#chat{height: 973px; }
@media ( max-height: 1072px){#chat{height: 972px; }
    @media ( max-height: 1071px){#chat{height: 971px; }
        @media ( max-height: 1070px){#chat{height: 970px; }
  @media ( max-height: 1069px){#chat{height: 969px; }
      @media ( max-height: 1068px){#chat{height: 968px; }
@media ( max-height: 1067px){#chat{height: 967px; }
    @media ( max-height: 1066px){#chat{height: 966px; }
        @media ( max-height: 1065px){#chat{height: 965px; }
  @media ( max-height: 1064px){#chat{height: 964px; }
      @media ( max-height: 1063px){#chat{height: 963px; }
@media ( max-height: 1062px){#chat{height: 962px; }
    @media ( max-height: 1061px){#chat{height: 961px; }
        @media ( max-height: 1060px){#chat{height: 960px; }
  @media ( max-height: 1059px){#chat{height: 959px; }
      @media ( max-height: 1058px){#chat{height: 958px; }
@media ( max-height: 1057px){#chat{height: 957px; }
    @media ( max-height: 1056px){#chat{height: 956px; }
        @media ( max-height: 1055px){#chat{height: 955px; }
  @media ( max-height: 1054px){#chat{height: 954px; }
      @media ( max-height: 1053px){#chat{height: 953px; }
@media ( max-height: 1052px){#chat{height: 952px; }
    @media ( max-height: 1051px){#chat{height: 951px; }
        @media ( max-height: 1050px){#chat{height: 950px; }
  @media ( max-height: 1049px){#chat{height: 949px; }
      @media ( max-height: 1048px){#chat{height: 948px; }
@media ( max-height: 1047px){#chat{height: 947px; }
    @media ( max-height: 1046px){#chat{height: 946px; }
        @media ( max-height: 1045px){#chat{height: 945px; }
  @media ( max-height: 1044px){#chat{height: 944px; }
      @media ( max-height: 1043px){#chat{height: 943px; }
@media ( max-height: 1042px){#chat{height: 942px; }
    @media ( max-height: 1041px){#chat{height: 941px; }
        @media ( max-height: 1040px){#chat{height: 940px; }
  @media ( max-height: 1039px){#chat{height: 939px; }
      @media ( max-height: 1038px){#chat{height: 938px; }
@media ( max-height: 1037px){#chat{height: 937px; }
    @media ( max-height: 1036px){#chat{height: 936px; }
        @media ( max-height: 1035px){#chat{height: 935px; }
  @media ( max-height: 1034px){#chat{height: 934px; }
      @media ( max-height: 1033px){#chat{height: 933px; }
@media ( max-height: 1032px){#chat{height: 932px; }
    @media ( max-height: 1031px){#chat{height: 931px; }
        @media ( max-height: 1030px){#chat{height: 930px; }
  @media ( max-height: 1029px){#chat{height: 929px; }
      @media ( max-height: 1028px){#chat{height: 928px; }
@media ( max-height: 1027px){#chat{height: 927px; }
    @media ( max-height: 1026px){#chat{height: 926px; }
        @media ( max-height: 1025px){#chat{height: 925px; }
  @media ( max-height: 1024px){#chat{height: 924px; }
      @media ( max-height: 1023px){#chat{height: 923px; }
@media ( max-height: 1022px){#chat{height: 922px; }
    @media ( max-height: 1021px){#chat{height: 921px; }
        @media ( max-height: 1020px){#chat{height: 920px; }
  @media ( max-height: 1019px){#chat{height: 919px; }
      @media ( max-height: 1018px){#chat{height: 918px; }
@media ( max-height: 1017px){#chat{height: 917px; }
    @media ( max-height: 1016px){#chat{height: 916px; }
        @media ( max-height: 1015px){#chat{height: 915px; }
  @media ( max-height: 1014px){#chat{height: 914px; }
      @media ( max-height: 1013px){#chat{height: 913px; }
@media ( max-height: 1012px){#chat{height: 912px; }
    @media ( max-height: 1011px){#chat{height: 911px; }
        @media ( max-height: 1010px){#chat{height: 910px; }
  @media ( max-height: 1009px){#chat{height: 909px; }
      @media ( max-height: 1008px){#chat{height: 908px; }
@media ( max-height: 1007px){#chat{height: 907px; }
    @media ( max-height: 1006px){#chat{height: 906px; }
        @media ( max-height: 1005px){#chat{height: 905px; }
  @media ( max-height: 1004px){#chat{height: 904px; }
      @media ( max-height: 1003px){#chat{height: 903px; }
@media ( max-height: 1002px){#chat{height: 902px; }
    @media ( max-height: 1001px){#chat{height: 901px; }
        @media ( max-height: 1000px){#chat{height: 900px; }
  @media ( max-height: 999px){#chat{height: 899px; }
      @media ( max-height: 998px){#chat{height: 898px; }
@media ( max-height: 997px){#chat{height: 897px; }
    @media ( max-height: 996px){#chat{height: 896px; }
        @media ( max-height: 995px){#chat{height: 895px; }
  @media ( max-height: 994px){#chat{height: 894px; }
      @media ( max-height: 993px){#chat{height: 893px; }
@media ( max-height: 992px){#chat{height: 892px; }
    @media ( max-height: 991px){#chat{height: 891px; }
        @media ( max-height: 990px){#chat{height: 890px; }
  @media ( max-height: 989px){#chat{height: 889px; }
      @media ( max-height: 988px){#chat{height: 888px; }
@media ( max-height: 987px){#chat{height: 887px; }
    @media ( max-height: 986px){#chat{height: 886px; }
        @media ( max-height: 985px){#chat{height: 885px; }
  @media ( max-height: 984px){#chat{height: 884px; }
      @media ( max-height: 983px){#chat{height: 883px; }
@media ( max-height: 982px){#chat{height: 882px; }
    @media ( max-height: 981px){#chat{height: 881px; }
        @media ( max-height: 980px){#chat{height: 880px; }
  @media ( max-height: 979px){#chat{height: 879px; }
      @media ( max-height: 978px){#chat{height: 878px; }
@media ( max-height: 977px){#chat{height: 877px; }
    @media ( max-height: 976px){#chat{height: 876px; }
        @media ( max-height: 975px){#chat{height: 875px; }
  @media ( max-height: 974px){#chat{height: 874px; }
      @media ( max-height: 973px){#chat{height: 873px; }
@media ( max-height: 972px){#chat{height: 872px; }
    @media ( max-height: 971px){#chat{height: 871px; }
        @media ( max-height: 970px){#chat{height: 870px; }
  @media ( max-height: 969px){#chat{height: 869px; }
      @media ( max-height: 968px){#chat{height: 868px; }
@media ( max-height: 967px){#chat{height: 867px; }
    @media ( max-height: 966px){#chat{height: 866px; }
        @media ( max-height: 965px){#chat{height: 865px; }
  @media ( max-height: 964px){#chat{height: 864px; }
      @media ( max-height: 963px){#chat{height: 863px; }
@media ( max-height: 962px){#chat{height: 862px; }
    @media ( max-height: 961px){#chat{height: 861px; }
        @media ( max-height: 960px){#chat{height: 860px; }
  @media ( max-height: 959px){#chat{height: 859px; }
      @media ( max-height: 958px){#chat{height: 858px; }
@media ( max-height: 957px){#chat{height: 857px; }
    @media ( max-height: 956px){#chat{height: 856px; }
        @media ( max-height: 955px){#chat{height: 855px; }
  @media ( max-height: 954px){#chat{height: 854px; }
      @media ( max-height: 953px){#chat{height: 853px; }
@media ( max-height: 952px){#chat{height: 852px; }
    @media ( max-height: 951px){#chat{height: 851px; }
        @media ( max-height: 950px){#chat{height: 850px; }
  @media ( max-height: 949px){#chat{height: 849px; }
      @media ( max-height: 948px){#chat{height: 848px; }
@media ( max-height: 947px){#chat{height: 847px; }
    @media ( max-height: 946px){#chat{height: 846px; }
        @media ( max-height: 945px){#chat{height: 845px; }
  @media ( max-height: 944px){#chat{height: 844px; }
      @media ( max-height: 943px){#chat{height: 843px; }
@media ( max-height: 942px){#chat{height: 842px; }
    @media ( max-height: 941px){#chat{height: 841px; }
        @media ( max-height: 940px){#chat{height: 840px; }
  @media ( max-height: 939px){#chat{height: 839px; }
      @media ( max-height: 938px){#chat{height: 838px; }
@media ( max-height: 937px){#chat{height: 837px; }
    @media ( max-height: 936px){#chat{height: 836px; }
        @media ( max-height: 935px){#chat{height: 835px; }
  @media ( max-height: 934px){#chat{height: 834px; }
      @media ( max-height: 933px){#chat{height: 833px; }
@media ( max-height: 932px){#chat{height: 832px; }
    @media ( max-height: 931px){#chat{height: 831px; }
        @media ( max-height: 930px){#chat{height: 830px; }
  @media ( max-height: 929px){#chat{height: 829px; }
      @media ( max-height: 928px){#chat{height: 828px; }
@media ( max-height: 927px){#chat{height: 827px; }
    @media ( max-height: 926px){#chat{height: 826px; }
        @media ( max-height: 925px){#chat{height: 825px; }
  @media ( max-height: 924px){#chat{height: 824px; }
      @media ( max-height: 923px){#chat{height: 823px; }
@media ( max-height: 922px){#chat{height: 822px; }
    @media ( max-height: 921px){#chat{height: 821px; }
        @media ( max-height: 920px){#chat{height: 820px; }
  @media ( max-height: 919px){#chat{height: 819px; }
      @media ( max-height: 918px){#chat{height: 818px; }
@media ( max-height: 917px){#chat{height: 817px; }
    @media ( max-height: 916px){#chat{height: 816px; }
        @media ( max-height: 915px){#chat{height: 815px; }
  @media ( max-height: 914px){#chat{height: 814px; }
      @media ( max-height: 913px){#chat{height: 813px; }
@media ( max-height: 912px){#chat{height: 812px; }
    @media ( max-height: 911px){#chat{height: 811px; }
        @media ( max-height: 910px){#chat{height: 810px; }
  @media ( max-height: 909px){#chat{height: 809px; }
      @media ( max-height: 908px){#chat{height: 808px; }
@media ( max-height: 907px){#chat{height: 807px; }
    @media ( max-height: 906px){#chat{height: 806px; }
        @media ( max-height: 905px){#chat{height: 805px; }
  @media ( max-height: 904px){#chat{height: 804px; }
      @media ( max-height: 903px){#chat{height: 803px; }
@media ( max-height: 902px){#chat{height: 802px; }
    @media ( max-height: 901px){#chat{height: 801px; }
        @media ( max-height: 900px){#chat{height: 800px; }
  @media ( max-height: 899px){#chat{height: 799px; }
      @media ( max-height: 898px){#chat{height: 798px; }
@media ( max-height: 897px){#chat{height: 797px; }
    @media ( max-height: 896px){#chat{height: 796px; }
        @media ( max-height: 895px){#chat{height: 795px; }
  @media ( max-height: 894px){#chat{height: 794px; }
      @media ( max-height: 893px){#chat{height: 793px; }
@media ( max-height: 892px){#chat{height: 792px; }
    @media ( max-height: 891px){#chat{height: 791px; }
        @media ( max-height: 890px){#chat{height: 790px; }
  @media ( max-height: 889px){#chat{height: 789px; }
      @media ( max-height: 888px){#chat{height: 788px; }
@media ( max-height: 887px){#chat{height: 787px; }
    @media ( max-height: 886px){#chat{height: 786px; }
        @media ( max-height: 885px){#chat{height: 785px; }
  @media ( max-height: 884px){#chat{height: 784px; }
      @media ( max-height: 883px){#chat{height: 783px; }
@media ( max-height: 882px){#chat{height: 782px; }
    @media ( max-height: 881px){#chat{height: 781px; }
        @media ( max-height: 880px){#chat{height: 780px; }
  @media ( max-height: 879px){#chat{height: 779px; }
      @media ( max-height: 878px){#chat{height: 778px; }
@media ( max-height: 877px){#chat{height: 777px; }
    @media ( max-height: 876px){#chat{height: 776px; }
        @media ( max-height: 875px){#chat{height: 775px; }
  @media ( max-height: 874px){#chat{height: 774px; }
      @media ( max-height: 873px){#chat{height: 773px; }
@media ( max-height: 872px){#chat{height: 772px; }
    @media ( max-height: 871px){#chat{height: 771px; }
        @media ( max-height: 870px){#chat{height: 770px; }
  @media ( max-height: 869px){#chat{height: 769px; }
      @media ( max-height: 868px){#chat{height: 768px; }
@media ( max-height: 867px){#chat{height: 767px; }
    @media ( max-height: 866px){#chat{height: 766px; }
        @media ( max-height: 865px){#chat{height: 765px; }
  @media ( max-height: 864px){#chat{height: 764px; }
      @media ( max-height: 863px){#chat{height: 763px; }
@media ( max-height: 862px){#chat{height: 762px; }
    @media ( max-height: 861px){#chat{height: 761px; }
        @media ( max-height: 860px){#chat{height: 760px; }
  @media ( max-height: 859px){#chat{height: 759px; }
      @media ( max-height: 858px){#chat{height: 758px; }
@media ( max-height: 857px){#chat{height: 757px; }
    @media ( max-height: 856px){#chat{height: 756px; }
        @media ( max-height: 855px){#chat{height: 755px; }
  @media ( max-height: 854px){#chat{height: 754px; }
      @media ( max-height: 853px){#chat{height: 753px; }
@media ( max-height: 852px){#chat{height: 752px; }
    @media ( max-height: 851px){#chat{height: 751px; }
        @media ( max-height: 850px){#chat{height: 750px; }
  @media ( max-height: 849px){#chat{height: 749px; }
      @media ( max-height: 848px){#chat{height: 748px; }
@media ( max-height: 847px){#chat{height: 747px; }
    @media ( max-height: 846px){#chat{height: 746px; }
        @media ( max-height: 845px){#chat{height: 745px; }
  @media ( max-height: 844px){#chat{height: 744px; }
      @media ( max-height: 843px){#chat{height: 743px; }
@media ( max-height: 842px){#chat{height: 742px; }
    @media ( max-height: 841px){#chat{height: 741px; }
        @media ( max-height: 840px){#chat{height: 740px; }
  @media ( max-height: 839px){#chat{height: 739px; }
      @media ( max-height: 838px){#chat{height: 738px; }
@media ( max-height: 837px){#chat{height: 737px; }
    @media ( max-height: 836px){#chat{height: 736px; }
        @media ( max-height: 835px){#chat{height: 735px; }
  @media ( max-height: 834px){#chat{height: 734px; }
      @media ( max-height: 833px){#chat{height: 733px; }
@media ( max-height: 832px){#chat{height: 732px; }
    @media ( max-height: 831px){#chat{height: 731px; }
        @media ( max-height: 830px){#chat{height: 730px; }
  @media ( max-height: 829px){#chat{height: 729px; }
      @media ( max-height: 828px){#chat{height: 728px; }
@media ( max-height: 827px){#chat{height: 727px; }
    @media ( max-height: 826px){#chat{height: 726px; }
        @media ( max-height: 825px){#chat{height: 725px; }
  @media ( max-height: 824px){#chat{height: 724px; }
      @media ( max-height: 823px){#chat{height: 723px; }
@media ( max-height: 822px){#chat{height: 722px; }
    @media ( max-height: 821px){#chat{height: 721px; }
        @media ( max-height: 820px){#chat{height: 720px; }
  @media ( max-height: 819px){#chat{height: 719px; }
      @media ( max-height: 818px){#chat{height: 718px; }
@media ( max-height: 817px){#chat{height: 717px; }
    @media ( max-height: 816px){#chat{height: 716px; }
        @media ( max-height: 815px){#chat{height: 715px; }
  @media ( max-height: 814px){#chat{height: 714px; }
      @media ( max-height: 813px){#chat{height: 713px; }
@media ( max-height: 812px){#chat{height: 712px; }
    @media ( max-height: 811px){#chat{height: 711px; }
        @media ( max-height: 810px){#chat{height: 710px; }
  @media ( max-height: 809px){#chat{height: 709px; }
      @media ( max-height: 808px){#chat{height: 708px; }
@media ( max-height: 807px){#chat{height: 707px; }
    @media ( max-height: 806px){#chat{height: 706px; }
        @media ( max-height: 805px){#chat{height: 705px; }
  @media ( max-height: 804px){#chat{height: 704px; }
      @media ( max-height: 803px){#chat{height: 703px; }
@media ( max-height: 802px){#chat{height: 702px; }
    @media ( max-height: 801px){#chat{height: 701px; }
        @media ( max-height: 800px){#chat{height: 700px; }
  @media ( max-height: 799px){#chat{height: 699px; }
      @media ( max-height: 798px){#chat{height: 698px; }
@media ( max-height: 797px){#chat{height: 697px; }
    @media ( max-height: 796px){#chat{height: 696px; }
        @media ( max-height: 795px){#chat{height: 695px; }
  @media ( max-height: 794px){#chat{height: 694px; }
      @media ( max-height: 793px){#chat{height: 693px; }
@media ( max-height: 792px){#chat{height: 692px; }
    @media ( max-height: 791px){#chat{height: 691px; }
        @media ( max-height: 790px){#chat{height: 690px; }
  @media ( max-height: 789px){#chat{height: 689px; }
      @media ( max-height: 788px){#chat{height: 688px; }
@media ( max-height: 787px){#chat{height: 687px; }
    @media ( max-height: 786px){#chat{height: 686px; }
        @media ( max-height: 785px){#chat{height: 685px; }
  @media ( max-height: 784px){#chat{height: 684px; }
      @media ( max-height: 783px){#chat{height: 683px; }
@media ( max-height: 782px){#chat{height: 682px; }
    @media ( max-height: 781px){#chat{height: 681px; }
        @media ( max-height: 780px){#chat{height: 680px; }
  @media ( max-height: 779px){#chat{height: 679px; }
      @media ( max-height: 778px){#chat{height: 678px; }
@media ( max-height: 777px){#chat{height: 677px; }
    @media ( max-height: 776px){#chat{height: 676px; }
        @media ( max-height: 775px){#chat{height: 675px; }
  @media ( max-height: 774px){#chat{height: 674px; }
      @media ( max-height: 773px){#chat{height: 673px; }
@media ( max-height: 772px){#chat{height: 672px; }
    @media ( max-height: 771px){#chat{height: 671px; }
        @media ( max-height: 770px){#chat{height: 670px; }
  @media ( max-height: 769px){#chat{height: 669px; }
      @media ( max-height: 768px){#chat{height: 668px; }
@media ( max-height: 767px){#chat{height: 667px; }
    @media ( max-height: 766px){#chat{height: 666px; }
        @media ( max-height: 765px){#chat{height: 665px; }
  @media ( max-height: 764px){#chat{height: 664px; }
      @media ( max-height: 763px){#chat{height: 663px; }
@media ( max-height: 762px){#chat{height: 662px; }
    @media ( max-height: 761px){#chat{height: 661px; }
        @media ( max-height: 760px){#chat{height: 660px; }
  @media ( max-height: 759px){#chat{height: 659px; }
      @media ( max-height: 758px){#chat{height: 658px; }
@media ( max-height: 757px){#chat{height: 657px; }
    @media ( max-height: 756px){#chat{height: 656px; }
        @media ( max-height: 755px){#chat{height: 655px; }
  @media ( max-height: 754px){#chat{height: 654px; }
      @media ( max-height: 753px){#chat{height: 653px; }
@media ( max-height: 752px){#chat{height: 652px; }
    @media ( max-height: 751px){#chat{height: 651px; }
        @media ( max-height: 750px){#chat{height: 650px; }
  @media ( max-height: 749px){#chat{height: 649px; }
      @media ( max-height: 748px){#chat{height: 648px; }
@media ( max-height: 747px){#chat{height: 647px; }
    @media ( max-height: 746px){#chat{height: 646px; }
        @media ( max-height: 745px){#chat{height: 645px; }
  @media ( max-height: 744px){#chat{height: 644px; }
      @media ( max-height: 743px){#chat{height: 643px; }
@media ( max-height: 742px){#chat{height: 642px; }
    @media ( max-height: 741px){#chat{height: 641px; }
        @media ( max-height: 740px){#chat{height: 640px; }
  @media ( max-height: 739px){#chat{height: 639px; }
      @media ( max-height: 738px){#chat{height: 638px; }
@media ( max-height: 737px){#chat{height: 637px; }
    @media ( max-height: 736px){#chat{height: 636px; }
        @media ( max-height: 735px){#chat{height: 635px; }
  @media ( max-height: 734px){#chat{height: 634px; }
      @media ( max-height: 733px){#chat{height: 633px; }
@media ( max-height: 732px){#chat{height: 632px; }
    @media ( max-height: 731px){#chat{height: 631px; }
        @media ( max-height: 730px){#chat{height: 630px; }
  @media ( max-height: 729px){#chat{height: 629px; }
      @media ( max-height: 728px){#chat{height: 628px; }
@media ( max-height: 727px){#chat{height: 627px; }
    @media ( max-height: 726px){#chat{height: 626px; }
        @media ( max-height: 725px){#chat{height: 625px; }
  @media ( max-height: 724px){#chat{height: 624px; }
      @media ( max-height: 723px){#chat{height: 623px; }
@media ( max-height: 722px){#chat{height: 622px; }
    @media ( max-height: 721px){#chat{height: 621px; }
        @media ( max-height: 720px){#chat{height: 620px; }
  @media ( max-height: 719px){#chat{height: 619px; }
      @media ( max-height: 718px){#chat{height: 618px; }
@media ( max-height: 717px){#chat{height: 617px; }
    @media ( max-height: 716px){#chat{height: 616px; }
        @media ( max-height: 715px){#chat{height: 615px; }
  @media ( max-height: 714px){#chat{height: 614px; }
      @media ( max-height: 713px){#chat{height: 613px; }
@media ( max-height: 712px){#chat{height: 612px; }
    @media ( max-height: 711px){#chat{height: 611px; }
        @media ( max-height: 710px){#chat{height: 610px; }
  @media ( max-height: 709px){#chat{height: 609px; }
      @media ( max-height: 708px){#chat{height: 608px; }
@media ( max-height: 707px){#chat{height: 607px; }
    @media ( max-height: 706px){#chat{height: 606px; }
        @media ( max-height: 705px){#chat{height: 605px; }
  @media ( max-height: 704px){#chat{height: 604px; }
      @media ( max-height: 703px){#chat{height: 603px; }
@media ( max-height: 702px){#chat{height: 602px; }
    @media ( max-height: 701px){#chat{height: 601px; }
        @media ( max-height: 700px){#chat{height: 600px; }
  @media ( max-height: 699px){#chat{height: 599px; }
      @media ( max-height: 698px){#chat{height: 598px; }
@media ( max-height: 697px){#chat{height: 597px; }
    @media ( max-height: 696px){#chat{height: 596px; }
        @media ( max-height: 695px){#chat{height: 595px; }
  @media ( max-height: 694px){#chat{height: 594px; }
      @media ( max-height: 693px){#chat{height: 593px; }
@media ( max-height: 692px){#chat{height: 592px; }
    @media ( max-height: 691px){#chat{height: 591px; }
        @media ( max-height: 690px){#chat{height: 590px; }
  @media ( max-height: 689px){#chat{height: 589px; }
      @media ( max-height: 688px){#chat{height: 588px; }
@media ( max-height: 687px){#chat{height: 587px; }
    @media ( max-height: 686px){#chat{height: 586px; }
        @media ( max-height: 685px){#chat{height: 585px; }
  @media ( max-height: 684px){#chat{height: 584px; }
      @media ( max-height: 683px){#chat{height: 583px; }
@media ( max-height: 682px){#chat{height: 582px; }
    @media ( max-height: 681px){#chat{height: 581px; }
        @media ( max-height: 680px){#chat{height: 580px; }
  @media ( max-height: 679px){#chat{height: 579px; }
      @media ( max-height: 678px){#chat{height: 578px; }
@media ( max-height: 677px){#chat{height: 577px; }
    @media ( max-height: 676px){#chat{height: 576px; }
        @media ( max-height: 675px){#chat{height: 575px; }
  @media ( max-height: 674px){#chat{height: 574px; }
      @media ( max-height: 673px){#chat{height: 573px; }
@media ( max-height: 672px){#chat{height: 572px; }
    @media ( max-height: 671px){#chat{height: 571px; }
        @media ( max-height: 670px){#chat{height: 570px; }
  @media ( max-height: 669px){#chat{height: 569px; }
      @media ( max-height: 668px){#chat{height: 568px; }
@media ( max-height: 667px){#chat{height: 567px; }
    @media ( max-height: 666px){#chat{height: 566px; }
        @media ( max-height: 665px){#chat{height: 565px; }
  @media ( max-height: 664px){#chat{height: 564px; }
      @media ( max-height: 663px){#chat{height: 563px; }
@media ( max-height: 662px){#chat{height: 562px; }
    @media ( max-height: 661px){#chat{height: 561px; }
        @media ( max-height: 660px){#chat{height: 560px; }
  @media ( max-height: 659px){#chat{height: 559px; }
      @media ( max-height: 658px){#chat{height: 558px; }
@media ( max-height: 657px){#chat{height: 557px; }
    @media ( max-height: 656px){#chat{height: 556px; }
        @media ( max-height: 655px){#chat{height: 555px; }
  @media ( max-height: 654px){#chat{height: 554px; }
      @media ( max-height: 653px){#chat{height: 553px; }
@media ( max-height: 652px){#chat{height: 552px; }
    @media ( max-height: 651px){#chat{height: 551px; }
        @media ( max-height: 650px){#chat{height: 550px; }
  @media ( max-height: 649px){#chat{height: 549px; }
      @media ( max-height: 648px){#chat{height: 548px; }
@media ( max-height: 647px){#chat{height: 547px; }
    @media ( max-height: 646px){#chat{height: 546px; }
        @media ( max-height: 645px){#chat{height: 545px; }
  @media ( max-height: 644px){#chat{height: 544px; }
      @media ( max-height: 643px){#chat{height: 543px; }
@media ( max-height: 642px){#chat{height: 542px; }
    @media ( max-height: 641px){#chat{height: 541px; }
        @media ( max-height: 640px){#chat{height: 540px; }
  @media ( max-height: 639px){#chat{height: 539px; }
      @media ( max-height: 638px){#chat{height: 538px; }
@media ( max-height: 637px){#chat{height: 537px; }
    @media ( max-height: 636px){#chat{height: 536px; }
        @media ( max-height: 635px){#chat{height: 535px; }
  @media ( max-height: 634px){#chat{height: 534px; }
      @media ( max-height: 633px){#chat{height: 533px; }
@media ( max-height: 632px){#chat{height: 532px; }
    @media ( max-height: 631px){#chat{height: 531px; }
        @media ( max-height: 630px){#chat{height: 530px; }
  @media ( max-height: 629px){#chat{height: 529px; }
      @media ( max-height: 628px){#chat{height: 528px; }
@media ( max-height: 627px){#chat{height: 527px; }
    @media ( max-height: 626px){#chat{height: 526px; }
        @media ( max-height: 625px){#chat{height: 525px; }
  @media ( max-height: 624px){#chat{height: 524px; }
      @media ( max-height: 623px){#chat{height: 523px; }
@media ( max-height: 622px){#chat{height: 522px; }
    @media ( max-height: 621px){#chat{height: 521px; }
        @media ( max-height: 620px){#chat{height: 520px; }
  @media ( max-height: 619px){#chat{height: 519px; }
      @media ( max-height: 618px){#chat{height: 518px; }
@media ( max-height: 617px){#chat{height: 517px; }
    @media ( max-height: 616px){#chat{height: 516px; }
        @media ( max-height: 615px){#chat{height: 515px; }
  @media ( max-height: 614px){#chat{height: 514px; }
      @media ( max-height: 613px){#chat{height: 513px; }
@media ( max-height: 612px){#chat{height: 512px; }
    @media ( max-height: 611px){#chat{height: 511px; }
        @media ( max-height: 610px){#chat{height: 510px; }
  @media ( max-height: 609px){#chat{height: 509px; }
      @media ( max-height: 608px){#chat{height: 508px; }
@media ( max-height: 607px){#chat{height: 507px; }
    @media ( max-height: 606px){#chat{height: 506px; }
        @media ( max-height: 605px){#chat{height: 505px; }
  @media ( max-height: 604px){#chat{height: 504px; }
      @media ( max-height: 603px){#chat{height: 503px; }
@media ( max-height: 602px){#chat{height: 502px; }
    @media ( max-height: 601px){#chat{height: 501px; }
        @media ( max-height: 600px){#chat{height: 500px; }
  @media ( max-height: 599px){#chat{height: 499px; }
      @media ( max-height: 598px){#chat{height: 498px; }
@media ( max-height: 597px){#chat{height: 497px; }
    @media ( max-height: 596px){#chat{height: 496px; }
        @media ( max-height: 595px){#chat{height: 495px; }
  @media ( max-height: 594px){#chat{height: 494px; }
      @media ( max-height: 593px){#chat{height: 493px; }
@media ( max-height: 592px){#chat{height: 492px; }
    @media ( max-height: 591px){#chat{height: 491px; }
        @media ( max-height: 590px){#chat{height: 490px; }
  @media ( max-height: 589px){#chat{height: 489px; }
      @media ( max-height: 588px){#chat{height: 488px; }
@media ( max-height: 587px){#chat{height: 487px; }
    @media ( max-height: 586px){#chat{height: 486px; }
        @media ( max-height: 585px){#chat{height: 485px; }
  @media ( max-height: 584px){#chat{height: 484px; }
      @media ( max-height: 583px){#chat{height: 483px; }
@media ( max-height: 582px){#chat{height: 482px; }
    @media ( max-height: 581px){#chat{height: 481px; }
        @media ( max-height: 580px){#chat{height: 480px; }
  @media ( max-height: 579px){#chat{height: 479px; }
      @media ( max-height: 578px){#chat{height: 478px; }
@media ( max-height: 577px){#chat{height: 477px; }
    @media ( max-height: 576px){#chat{height: 476px; }
        @media ( max-height: 575px){#chat{height: 475px; }
  @media ( max-height: 574px){#chat{height: 474px; }
      @media ( max-height: 573px){#chat{height: 473px; }
@media ( max-height: 572px){#chat{height: 472px; }
    @media ( max-height: 571px){#chat{height: 471px; }
        @media ( max-height: 570px){#chat{height: 470px; }
  @media ( max-height: 569px){#chat{height: 469px; }
      @media ( max-height: 568px){#chat{height: 468px; }
@media ( max-height: 567px){#chat{height: 467px; }
    @media ( max-height: 566px){#chat{height: 466px; }
        @media ( max-height: 565px){#chat{height: 465px; }
  @media ( max-height: 564px){#chat{height: 464px; }
      @media ( max-height: 563px){#chat{height: 463px; }
@media ( max-height: 562px){#chat{height: 462px; }
    @media ( max-height: 561px){#chat{height: 461px; }
        @media ( max-height: 560px){#chat{height: 460px; }
  @media ( max-height: 559px){#chat{height: 459px; }
      @media ( max-height: 558px){#chat{height: 458px; }
@media ( max-height: 557px){#chat{height: 457px; }
    @media ( max-height: 556px){#chat{height: 456px; }
        @media ( max-height: 555px){#chat{height: 455px; }
  @media ( max-height: 554px){#chat{height: 454px; }
      @media ( max-height: 553px){#chat{height: 453px; }
@media ( max-height: 552px){#chat{height: 452px; }
    @media ( max-height: 551px){#chat{height: 451px; }
        @media ( max-height: 550px){#chat{height: 450px; }
  @media ( max-height: 549px){#chat{height: 449px; }
      @media ( max-height: 548px){#chat{height: 448px; }
@media ( max-height: 547px){#chat{height: 447px; }
    @media ( max-height: 546px){#chat{height: 446px; }
        @media ( max-height: 545px){#chat{height: 445px; }
  @media ( max-height: 544px){#chat{height: 444px; }
      @media ( max-height: 543px){#chat{height: 443px; }
@media ( max-height: 542px){#chat{height: 442px; }
    @media ( max-height: 541px){#chat{height: 441px; }
        @media ( max-height: 540px){#chat{height: 440px; }
  @media ( max-height: 539px){#chat{height: 439px; }
      @media ( max-height: 538px){#chat{height: 438px; }
@media ( max-height: 537px){#chat{height: 437px; }
    @media ( max-height: 536px){#chat{height: 436px; }
        @media ( max-height: 535px){#chat{height: 435px; }
  @media ( max-height: 534px){#chat{height: 434px; }
      @media ( max-height: 533px){#chat{height: 433px; }
@media ( max-height: 532px){#chat{height: 432px; }
    @media ( max-height: 531px){#chat{height: 431px; }
        @media ( max-height: 530px){#chat{height: 430px; }
  @media ( max-height: 529px){#chat{height: 429px; }
      @media ( max-height: 528px){#chat{height: 428px; }
@media ( max-height: 527px){#chat{height: 427px; }
    @media ( max-height: 526px){#chat{height: 426px; }
        @media ( max-height: 525px){#chat{height: 425px; }
  @media ( max-height: 524px){#chat{height: 424px; }
      @media ( max-height: 523px){#chat{height: 423px; }
@media ( max-height: 522px){#chat{height: 422px; }
    @media ( max-height: 521px){#chat{height: 421px; }
        @media ( max-height: 520px){#chat{height: 420px; }
  @media ( max-height: 519px){#chat{height: 419px; }
      @media ( max-height: 518px){#chat{height: 418px; }
@media ( max-height: 517px){#chat{height: 417px; }
    @media ( max-height: 516px){#chat{height: 416px; }
        @media ( max-height: 515px){#chat{height: 415px; }
  @media ( max-height: 514px){#chat{height: 414px; }
      @media ( max-height: 513px){#chat{height: 413px; }
@media ( max-height: 512px){#chat{height: 412px; }
    @media ( max-height: 511px){#chat{height: 411px; }
        @media ( max-height: 510px){#chat{height: 410px; }
  @media ( max-height: 509px){#chat{height: 409px; }
      @media ( max-height: 508px){#chat{height: 408px; }
@media ( max-height: 507px){#chat{height: 407px; }
    @media ( max-height: 506px){#chat{height: 406px; }
        @media ( max-height: 505px){#chat{height: 405px; }
  @media ( max-height: 504px){#chat{height: 404px; }
      @media ( max-height: 503px){#chat{height: 403px; }
@media ( max-height: 502px){#chat{height: 402px; }
    @media ( max-height: 501px){#chat{height: 401px; }
        @media ( max-height: 500px){#chat{height: 400px; }
  @media ( max-height: 499px){#chat{height: 399px; }
      @media ( max-height: 498px){#chat{height: 398px; }
@media ( max-height: 497px){#chat{height: 397px; }
    @media ( max-height: 496px){#chat{height: 396px; }
        @media ( max-height: 495px){#chat{height: 395px; }
  @media ( max-height: 494px){#chat{height: 394px; }
      @media ( max-height: 493px){#chat{height: 393px; }
@media ( max-height: 492px){#chat{height: 392px; }
    @media ( max-height: 491px){#chat{height: 391px; }
        @media ( max-height: 490px){#chat{height: 390px; }
  @media ( max-height: 489px){#chat{height: 389px; }
      @media ( max-height: 488px){#chat{height: 388px; }
@media ( max-height: 487px){#chat{height: 387px; }
    @media ( max-height: 486px){#chat{height: 386px; }
        @media ( max-height: 485px){#chat{height: 385px; }
  @media ( max-height: 484px){#chat{height: 384px; }
      @media ( max-height: 483px){#chat{height: 383px; }
@media ( max-height: 482px){#chat{height: 382px; }
    @media ( max-height: 481px){#chat{height: 381px; }
        @media ( max-height: 480px){#chat{height: 380px; }
  @media ( max-height: 479px){#chat{height: 379px; }
      @media ( max-height: 478px){#chat{height: 378px; }
@media ( max-height: 477px){#chat{height: 377px; }
    @media ( max-height: 476px){#chat{height: 376px; }
        @media ( max-height: 475px){#chat{height: 375px; }
  @media ( max-height: 474px){#chat{height: 374px; }
      @media ( max-height: 473px){#chat{height: 373px; }
@media ( max-height: 472px){#chat{height: 372px; }
    @media ( max-height: 471px){#chat{height: 371px; }
        @media ( max-height: 470px){#chat{height: 370px; }
  @media ( max-height: 469px){#chat{height: 369px; }
      @media ( max-height: 468px){#chat{height: 368px; }
@media ( max-height: 467px){#chat{height: 367px; }
    @media ( max-height: 466px){#chat{height: 366px; }
        @media ( max-height: 465px){#chat{height: 365px; }
  @media ( max-height: 464px){#chat{height: 364px; }
      @media ( max-height: 463px){#chat{height: 363px; }
@media ( max-height: 462px){#chat{height: 362px; }
    @media ( max-height: 461px){#chat{height: 361px; }
        @media ( max-height: 460px){#chat{height: 360px; }
  @media ( max-height: 459px){#chat{height: 359px; }
      @media ( max-height: 458px){#chat{height: 358px; }
@media ( max-height: 457px){#chat{height: 357px; }
    @media ( max-height: 456px){#chat{height: 356px; }
        @media ( max-height: 455px){#chat{height: 355px; }
  @media ( max-height: 454px){#chat{height: 354px; }
      @media ( max-height: 453px){#chat{height: 353px; }
@media ( max-height: 452px){#chat{height: 352px; }
    @media ( max-height: 451px){#chat{height: 351px; }
        @media ( max-height: 450px){#chat{height: 350px; }
  @media ( max-height: 449px){#chat{height: 349px; }
      @media ( max-height: 448px){#chat{height: 348px; }
@media ( max-height: 447px){#chat{height: 347px; }
    @media ( max-height: 446px){#chat{height: 346px; }
        @media ( max-height: 445px){#chat{height: 345px; }
  @media ( max-height: 444px){#chat{height: 344px; }
      @media ( max-height: 443px){#chat{height: 343px; }
@media ( max-height: 442px){#chat{height: 342px; }
    @media ( max-height: 441px){#chat{height: 341px; }
        @media ( max-height: 440px){#chat{height: 340px; }
  @media ( max-height: 439px){#chat{height: 339px; }
      @media ( max-height: 438px){#chat{height: 338px; }
@media ( max-height: 437px){#chat{height: 337px; }
    @media ( max-height: 436px){#chat{height: 336px; }
        @media ( max-height: 435px){#chat{height: 335px; }
  @media ( max-height: 434px){#chat{height: 334px; }
      @media ( max-height: 433px){#chat{height: 333px; }
@media ( max-height: 432px){#chat{height: 332px; }
    @media ( max-height: 431px){#chat{height: 331px; }
        @media ( max-height: 430px){#chat{height: 330px; }
  @media ( max-height: 429px){#chat{height: 329px; }
      @media ( max-height: 428px){#chat{height: 328px; }
@media ( max-height: 427px){#chat{height: 327px; }
    @media ( max-height: 426px){#chat{height: 326px; }
        @media ( max-height: 425px){#chat{height: 325px; }
  @media ( max-height: 424px){#chat{height: 324px; }
      @media ( max-height: 423px){#chat{height: 323px; }
@media ( max-height: 422px){#chat{height: 322px; }
    @media ( max-height: 421px){#chat{height: 321px; }
        @media ( max-height: 420px){#chat{height: 320px; }
  @media ( max-height: 419px){#chat{height: 319px; }
      @media ( max-height: 418px){#chat{height: 318px; }
@media ( max-height: 417px){#chat{height: 317px; }
    @media ( max-height: 416px){#chat{height: 316px; }
        @media ( max-height: 415px){#chat{height: 315px; }
  @media ( max-height: 414px){#chat{height: 314px; }
      @media ( max-height: 413px){#chat{height: 313px; }
@media ( max-height: 412px){#chat{height: 312px; }
    @media ( max-height: 411px){#chat{height: 311px; }
        @media ( max-height: 410px){#chat{height: 310px; }
  @media ( max-height: 409px){#chat{height: 309px; }
      @media ( max-height: 408px){#chat{height: 308px; }
@media ( max-height: 407px){#chat{height: 307px; }
    @media ( max-height: 406px){#chat{height: 306px; }
        @media ( max-height: 405px){#chat{height: 305px; }
  @media ( max-height: 404px){#chat{height: 304px; }
      @media ( max-height: 403px){#chat{height: 303px; }
@media ( max-height: 402px){#chat{height: 302px; }
    @media ( max-height: 401px){#chat{height: 301px; }
        @media ( max-height: 400px){#chat{height: 300px; }
  @media ( max-height: 399px){#chat{height: 299px; }
      @media ( max-height: 398px){#chat{height: 298px; }
@media ( max-height: 397px){#chat{height: 297px; }
    @media ( max-height: 396px){#chat{height: 296px; }
        @media ( max-height: 395px){#chat{height: 295px; }
  @media ( max-height: 394px){#chat{height: 294px; }
      @media ( max-height: 393px){#chat{height: 293px; }
@media ( max-height: 392px){#chat{height: 292px; }
    @media ( max-height: 391px){#chat{height: 291px; }
        @media ( max-height: 390px){#chat{height: 290px; }
  @media ( max-height: 389px){#chat{height: 289px; }
      @media ( max-height: 388px){#chat{height: 288px; }
@media ( max-height: 387px){#chat{height: 287px; }
    @media ( max-height: 386px){#chat{height: 286px; }
        @media ( max-height: 385px){#chat{height: 285px; }
  @media ( max-height: 384px){#chat{height: 284px; }
      @media ( max-height: 383px){#chat{height: 283px; }
@media ( max-height: 382px){#chat{height: 282px; }
    @media ( max-height: 381px){#chat{height: 281px; }
        @media ( max-height: 380px){#chat{height: 280px; }
  @media ( max-height: 379px){#chat{height: 279px; }
      @media ( max-height: 378px){#chat{height: 278px; }
@media ( max-height: 377px){#chat{height: 277px; }
    @media ( max-height: 376px){#chat{height: 276px; }
        @media ( max-height: 375px){#chat{height: 275px; }
  @media ( max-height: 374px){#chat{height: 274px; }
      @media ( max-height: 373px){#chat{height: 273px; }
@media ( max-height: 372px){#chat{height: 272px; }
    @media ( max-height: 371px){#chat{height: 271px; }
        @media ( max-height: 370px){#chat{height: 270px; }
  @media ( max-height: 369px){#chat{height: 269px; }
      @media ( max-height: 368px){#chat{height: 268px; }
@media ( max-height: 367px){#chat{height: 267px; }
    @media ( max-height: 366px){#chat{height: 266px; }
        @media ( max-height: 365px){#chat{height: 265px; }
  @media ( max-height: 364px){#chat{height: 264px; }
      @media ( max-height: 363px){#chat{height: 263px; }
@media ( max-height: 362px){#chat{height: 262px; }
    @media ( max-height: 361px){#chat{height: 261px; }
        @media ( max-height: 360px){#chat{height: 260px; }
  @media ( max-height: 359px){#chat{height: 259px; }
      @media ( max-height: 358px){#chat{height: 258px; }
@media ( max-height: 357px){#chat{height: 257px; }
    @media ( max-height: 356px){#chat{height: 256px; }
        @media ( max-height: 355px){#chat{height: 255px; }
  @media ( max-height: 354px){#chat{height: 254px; }
      @media ( max-height: 353px){#chat{height: 253px; }
@media ( max-height: 352px){#chat{height: 252px; }
    @media ( max-height: 351px){#chat{height: 251px; }
        @media ( max-height: 350px){#chat{height: 250px; }
  @media ( max-height: 349px){#chat{height: 249px; }
      @media ( max-height: 348px){#chat{height: 248px; }
@media ( max-height: 347px){#chat{height: 247px; }
    @media ( max-height: 346px){#chat{height: 246px; }
        @media ( max-height: 345px){#chat{height: 245px; }
  @media ( max-height: 344px){#chat{height: 244px; }
      @media ( max-height: 343px){#chat{height: 243px; }
@media ( max-height: 342px){#chat{height: 242px; }
    @media ( max-height: 341px){#chat{height: 241px; }
        @media ( max-height: 340px){#chat{height: 240px; }
  @media ( max-height: 339px){#chat{height: 239px; }
      @media ( max-height: 338px){#chat{height: 238px; }
@media ( max-height: 337px){#chat{height: 237px; }
    @media ( max-height: 336px){#chat{height: 236px; }
        @media ( max-height: 335px){#chat{height: 235px; }
  @media ( max-height: 334px){#chat{height: 234px; }
      @media ( max-height: 333px){#chat{height: 233px; }
@media ( max-height: 332px){#chat{height: 232px; }
    @media ( max-height: 331px){#chat{height: 231px; }
        @media ( max-height: 330px){#chat{height: 230px; }
  @media ( max-height: 329px){#chat{height: 229px; }
      @media ( max-height: 328px){#chat{height: 228px; }
@media ( max-height: 327px){#chat{height: 227px; }
    @media ( max-height: 326px){#chat{height: 226px; }
        @media ( max-height: 325px){#chat{height: 225px; }
  @media ( max-height: 324px){#chat{height: 224px; }
      @media ( max-height: 323px){#chat{height: 223px; }
@media ( max-height: 322px){#chat{height: 222px; }
    @media ( max-height: 321px){#chat{height: 221px; }
        @media ( max-height: 320px){#chat{height: 220px; }
  @media ( max-height: 319px){#chat{height: 219px; }
      @media ( max-height: 318px){#chat{height: 218px; }
@media ( max-height: 317px){#chat{height: 217px; }
    @media ( max-height: 316px){#chat{height: 216px; }
        @media ( max-height: 315px){#chat{height: 215px; }
  @media ( max-height: 314px){#chat{height: 214px; }
      @media ( max-height: 313px){#chat{height: 213px; }
@media ( max-height: 312px){#chat{height: 212px; }
    @media ( max-height: 311px){#chat{height: 211px; }
        @media ( max-height: 310px){#chat{height: 210px; }
  @media ( max-height: 309px){#chat{height: 209px; }
      @media ( max-height: 308px){#chat{height: 208px; }
@media ( max-height: 307px){#chat{height: 207px; }
    @media ( max-height: 306px){#chat{height: 206px; }
        @media ( max-height: 305px){#chat{height: 205px; }
  @media ( max-height: 304px){#chat{height: 204px; }
      @media ( max-height: 303px){#chat{height: 203px; }
@media ( max-height: 302px){#chat{height: 202px; }
    @media ( max-height: 301px){#chat{height: 201px; }
        @media ( max-height: 300px){#chat{height: 200px; }


        <?php
    }else{

      ?>

        #contatos{display:block}
        #chat{display:none}

    <?php

    }
        ?>

    }
</style>
</head>
<body>
<main class="content" >
    <div class="container p-0">

        <div class="card" id="card" style="box-shadow: 10px solid #000;">
  <div class="row g-0">





      <div class="col-12 col-lg-5 col-xl-3" id="contatos">
<br>
<div class="px-4 d-none d-md-block">
    <div class="d-flex align-items-center">
        <div class="flex-grow-1">
  <input type="text" class="form-control my-3" placeholder="Search...">
        </div>
    </div>
</div>
<hr>
<div id="scro" class="scro" >
</div>
      </div>
      <div class="col-12 col-lg-7 col-xl-9">



<!-- Cabeçalho do Painel de Mensagens -->
<div class="py-2 px-4  d-none d-lg-block" style="background-color: #fbfbfb;">
    <div class="d-flex align-items-center py-1">

        <?php if(!isset($_POST['user'])){ unset($_SESSION['usuario2']); ?>
        <div class="position-relative">
   </div>
        <div class="flex-grow-1 pl-3">
  </div>

  <div>
      <img src="conexaoPHP/uploads/<?php if($pic_uso == 0){echo "general.png";}else{echo $uso;}  ?>" class="rounded-circle mr-1" alt="<?php echo $uso; ?>" width="40" height="40">
    <!--  <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
      <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
  -->
      <a href="conexaoPHP/logout.php" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/power-off.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>
      <a href="settings" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/settings.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>
  </div>

    </div>
</div>

<div class="position-relative" >



<br>
    <div id="chat" class="chat-messages p-4 scro"> <!--style="height: 65vh; background: url('imgs/fundo chata4.png') ;"-->




    </div>
</div>


        <?php }else{ $usuario2 = $_POST['user']; $_SESSION['usuario2'] = $_POST['user']; ?>
        <div class="position-relative">

  <?php

  $query_usuario = "select * from usuario";

  $consulta = mysqli_query($conexao, $query_usuario);

  if (mysqli_num_rows($consulta) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($consulta)) {
if ($_SESSION['usuario2'] == $row['username']) {
    $pic_usuario2 = $row['pic'];
}
      }}

  ?>
  <img id="receptor_icon" src="conexaoPHP/uploads/<?php if($pic_usuario2 == 0){echo "general.png";}else{echo $usuario2;}  ?>" class="rounded-circle mr-1" alt="<?php echo $usuario2; ?>" width="40" height="40">
        </div>
        <div class="flex-grow-1 pl-3">
  <strong id="receptor_nome"><?php echo $usuario2 ?></strong>
  <div class="text-muted small"><em style="color: green" id="result_typing" ></em></div>

        </div>

        <div>


  <img src="conexaoPHP/uploads/<?php if($pic_uso == 0){echo "general.png";}else{echo $uso;}  ?>" class="rounded-circle mr-1" alt="<?php echo $uso; ?>" width="40" height="40">
 <!-- <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>


  <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
 -->
  <a href="conexaoPHP/logout.php" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/power-off.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>
  <a href="settings" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/settings.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>
        </div>
    </div>
</div>




<!-- Painel de Mensagens -->
<div class="position-relative" >




    <div id="chat" class="chat-messages p-4 scro">




    </div>
</div>

<form id="mensagem" >
    <div class="flex-grow-0 py-3 px-4 border-top">
        <div class="input-group">
  <input type="text" id="limpar" name='mensagem' class="form-control" placeholder="Escreva a sua Mensagem">
  <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
</form>

        <?php




        } ?>




      </div>














  </div>
        </div>
    </div>


  <!--  <div id="roda"></div> -->
</main>






<style type="text/css">
    body{
        margin-top:20px;
    }

    .chat-online {
        color: #34ce57
    }

    .chat-offline {
        color: #e4606d
    }
    #scro{
        overflow-y: auto;
    }
    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: auto
    }

    .chat-message-left,
    .chat-message-right {
        display: flex;
        flex-shrink: 0
    }

    .chat-message-left {
        margin-right: auto
    }

    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto
    }
    .py-3 {
        padding-top: 1rem!important;
        padding-bottom: 1rem!important;
    }
    .px-4 {
        padding-right: 1.5rem!important;
        padding-left: 1.5rem!important;
    }
    .flex-grow-0 {
        flex-grow: 0!important;
    }
    .border-top {
        border-top: 1px solid #dee2e6!important;
    }


    .scro::-webkit-scrollbar {
        width: 8px;     /* width of the entire scrollbar */
    }

    .scro::-webkit-scrollbar-track {
        background: #BFE5FF;        /* color of the tracking area */
    }

    .scro::-webkit-scrollbar-thumb {
        background-color: #0099FF;    /* color of the scroll thumb */
        border-radius: 100px;       /* roundness of the scroll thumb */
        border: 3px solid #BFE5FF;  /* creates padding around scroll thumb */
    }

</style>
</body>
</html>