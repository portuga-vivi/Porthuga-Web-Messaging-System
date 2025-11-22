<?php
session_start();
include ("chat/conexao.php");
include_once ("conexaoPHP/redirect.php");
unset($_SESSION['usuario2']);
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


<?php

if(isset($_POST['user'])){
    $_SESSION['usuario2'] = $_POST['user'];
    $usuario2 = $_SESSION['usuario2'];
}

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

    <?php

    if(isset($_SESSION['usuario2'])){

        $usuario2 = $_SESSION['usuario2'];

    }else{
        $usuario2 = 'nada';
    }
    ?>



    <?php
    if(isset($_SESSION['usuario'])){
            $uso = $_SESSION['usuario'];
    }else{
        header('Location: conexaoPHP/index.php');
        echo '<style>a#logout{display: none;}</style>';
        $_SESSION['chat'] = true;



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
            req3.open('GET', 'atualizacoes/users_m.php', true);
            req3.send();

            <?php if(isset($_SESSION['usuario2'])){ ?>
            var req4 = new XMLHttpRequest();
            req4.onreadystatechange = function(){
                if (req4.readyState == 4 && req4.status == 200) {
                    document.getElementById('sinal').innerHTML = req4.responseText;
                }
            }
            req4.open('GET', 'atualizacoes/users_m2.php', true);
            req4.send();

            <?php } ?>

            var req5 = new XMLHttpRequest();
            req5.onreadystatechange = function(){
                if (req5.readyState == 4 && req5.status == 200) {
                    document.getElementById('result_typing').innerHTML = req5.responseText;
                }
            }
            req5.open('GET', 'atualizacoes/typing.php', true);
            req5.send();

        }


        setInterval(function(){ajax();}, 1000);






               function batepapo(s){

                   <?php
                   $conexao = mysqli_connect('localhost', 'root', '', 'login') or die ('Não foi possível conectar!');
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
               }

        function titulo(){
            document.getElementById('ti').title = "LOGOUT"
        }

    </script>


    <style>

        html, body{
            overflow: hidden;
        }

        @media ( max-height: 2060px){#chat{height: 1940px;}}
        @media (max-height: 2059px){#chat{height: 1939px;}}
        @media (max-height: 2058px){#chat{height: 1938px;}}
        @media (max-height: 2057px){#chat{height: 1937px;}}
        @media (max-height: 2056px){#chat{height: 1936px;}}
        @media (max-height: 2055px){#chat{height: 1935px;}}
        @media (max-height: 2054px){#chat{height: 1934px;}}
        @media (max-height: 2053px){#chat{height: 1933px;}}
        @media (max-height: 2052px){#chat{height: 1932px;}}
        @media (max-height: 2051px){#chat{height: 1931px;}}
        @media (max-height: 2050px){#chat{height: 1930px;}}
        @media (max-height: 2049px){#chat{height: 1929px;}}
        @media (max-height: 2048px){#chat{height: 1928px;}}
        @media (max-height: 2047px){#chat{height: 1927px;}}
        @media (max-height: 2046px){#chat{height: 1926px;}}
        @media (max-height: 2045px){#chat{height: 1925px;}}
        @media (max-height: 2044px){#chat{height: 1924px;}}
        @media (max-height: 2043px){#chat{height: 1923px;}}
        @media (max-height: 2042px){#chat{height: 1922px;}}
        @media (max-height: 2041px){#chat{height: 1921px;}}
        @media (max-height: 2040px){#chat{height: 1920px;}}
        @media (max-height: 2039px){#chat{height: 1919px;}}
        @media (max-height: 2038px){#chat{height: 1918px;}}
        @media (max-height: 2037px){#chat{height: 1917px;}}
        @media (max-height: 2036px){#chat{height: 1916px;}}
        @media (max-height: 2035px){#chat{height: 1915px;}}
        @media (max-height: 2034px){#chat{height: 1914px;}}
        @media (max-height: 2033px){#chat{height: 1913px;}}
        @media (max-height: 2032px){#chat{height: 1912px;}}
        @media (max-height: 2031px){#chat{height: 1911px;}}
        @media (max-height: 2030px){#chat{height: 1910px;}}
        @media (max-height: 2029px){#chat{height: 1909px;}}
        @media (max-height: 2028px){#chat{height: 1908px;}}
        @media (max-height: 2027px){#chat{height: 1907px;}}
        @media (max-height: 2026px){#chat{height: 1906px;}}
        @media (max-height: 2025px){#chat{height: 1905px;}}
        @media (max-height: 2024px){#chat{height: 1904px;}}
        @media (max-height: 2023px){#chat{height: 1903px;}}
        @media (max-height: 2022px){#chat{height: 1902px;}}
        @media (max-height: 2021px){#chat{height: 1901px;}}
        @media (max-height: 2020px){#chat{height: 1900px;}}
        @media (max-height: 2019px){#chat{height: 1899px;}}
        @media (max-height: 2018px){#chat{height: 1898px;}}
        @media (max-height: 2017px){#chat{height: 1897px;}}
        @media (max-height: 2016px){#chat{height: 1896px;}}
        @media (max-height: 2015px){#chat{height: 1895px;}}
        @media (max-height: 2014px){#chat{height: 1894px;}}
        @media (max-height: 2013px){#chat{height: 1893px;}}
        @media (max-height: 2012px){#chat{height: 1892px;}}
        @media (max-height: 2011px){#chat{height: 1891px;}}
        @media (max-height: 2010px){#chat{height: 1890px;}}
        @media (max-height: 2009px){#chat{height: 1889px;}}
        @media (max-height: 2008px){#chat{height: 1888px;}}
        @media (max-height: 2007px){#chat{height: 1887px;}}
        @media (max-height: 2006px){#chat{height: 1886px;}}
        @media (max-height: 2005px){#chat{height: 1885px;}}
        @media (max-height: 2004px){#chat{height: 1884px;}}
        @media (max-height: 2003px){#chat{height: 1883px;}}
        @media (max-height: 2002px){#chat{height: 1882px;}}
        @media (max-height: 2001px){#chat{height: 1881px;}}
        @media (max-height: 2000px){#chat{height: 1880px;}}
        @media (max-height: 1999px){#chat{height: 1879px;}}
        @media (max-height: 1998px){#chat{height: 1878px;}}
        @media (max-height: 1997px){#chat{height: 1877px;}}
        @media (max-height: 1996px){#chat{height: 1876px;}}
        @media (max-height: 1995px){#chat{height: 1875px;}}
        @media (max-height: 1994px){#chat{height: 1874px;}}
        @media (max-height: 1993px){#chat{height: 1873px;}}
        @media (max-height: 1992px){#chat{height: 1872px;}}
        @media (max-height: 1991px){#chat{height: 1871px;}}
        @media (max-height: 1990px){#chat{height: 1870px;}}
        @media (max-height: 1989px){#chat{height: 1869px;}}
        @media (max-height: 1988px){#chat{height: 1868px;}}
        @media (max-height: 1987px){#chat{height: 1867px;}}
        @media (max-height: 1986px){#chat{height: 1866px;}}
        @media (max-height: 1985px){#chat{height: 1865px;}}
        @media (max-height: 1984px){#chat{height: 1864px;}}
        @media (max-height: 1983px){#chat{height: 1863px;}}
        @media (max-height: 1982px){#chat{height: 1862px;}}
        @media (max-height: 1981px){#chat{height: 1861px;}}
        @media (max-height: 1980px){#chat{height: 1860px;}}
        @media (max-height: 1979px){#chat{height: 1859px;}}
        @media (max-height: 1978px){#chat{height: 1858px;}}
        @media (max-height: 1977px){#chat{height: 1857px;}}
        @media (max-height: 1976px){#chat{height: 1856px;}}
        @media (max-height: 1975px){#chat{height: 1855px;}}
        @media (max-height: 1974px){#chat{height: 1854px;}}
        @media (max-height: 1973px){#chat{height: 1853px;}}
        @media (max-height: 1972px){#chat{height: 1852px;}}
        @media (max-height: 1971px){#chat{height: 1851px;}}
        @media (max-height: 1970px){#chat{height: 1850px;}}
        @media (max-height: 1969px){#chat{height: 1849px;}}
        @media (max-height: 1968px){#chat{height: 1848px;}}
        @media (max-height: 1967px){#chat{height: 1847px;}}
        @media (max-height: 1966px){#chat{height: 1846px;}}
        @media (max-height: 1965px){#chat{height: 1845px;}}
        @media (max-height: 1964px){#chat{height: 1844px;}}
        @media (max-height: 1963px){#chat{height: 1843px;}}
        @media (max-height: 1962px){#chat{height: 1842px;}}
        @media (max-height: 1961px){#chat{height: 1841px;}}
        @media (max-height: 1960px){#chat{height: 1840px;}}
        @media (max-height: 1959px){#chat{height: 1839px;}}
        @media (max-height: 1958px){#chat{height: 1838px;}}
        @media (max-height: 1957px){#chat{height: 1837px;}}
        @media (max-height: 1956px){#chat{height: 1836px;}}
        @media (max-height: 1955px){#chat{height: 1835px;}}
        @media (max-height: 1954px){#chat{height: 1834px;}}
        @media (max-height: 1953px){#chat{height: 1833px;}}
        @media (max-height: 1952px){#chat{height: 1832px;}}
        @media (max-height: 1951px){#chat{height: 1831px;}}
        @media (max-height: 1950px){#chat{height: 1830px;}}
        @media (max-height: 1949px){#chat{height: 1829px;}}
        @media (max-height: 1948px){#chat{height: 1828px;}}
        @media (max-height: 1947px){#chat{height: 1827px;}}
        @media (max-height: 1946px){#chat{height: 1826px;}}
        @media (max-height: 1945px){#chat{height: 1825px;}}
        @media (max-height: 1944px){#chat{height: 1824px;}}
        @media (max-height: 1943px){#chat{height: 1823px;}}
        @media (max-height: 1942px){#chat{height: 1822px;}}
        @media (max-height: 1941px){#chat{height: 1821px;}}
        @media (max-height: 1940px){#chat{height: 1820px;}}
        @media (max-height: 1939px){#chat{height: 1819px;}}
        @media (max-height: 1938px){#chat{height: 1818px;}}
        @media (max-height: 1937px){#chat{height: 1817px;}}
        @media (max-height: 1936px){#chat{height: 1816px;}}
        @media (max-height: 1935px){#chat{height: 1815px;}}
        @media (max-height: 1934px){#chat{height: 1814px;}}
        @media (max-height: 1933px){#chat{height: 1813px;}}
        @media (max-height: 1932px){#chat{height: 1812px;}}
        @media (max-height: 1931px){#chat{height: 1811px;}}
        @media (max-height: 1930px){#chat{height: 1810px;}}
        @media (max-height: 1929px){#chat{height: 1809px;}}
        @media (max-height: 1928px){#chat{height: 1808px;}}
        @media (max-height: 1927px){#chat{height: 1807px;}}
        @media (max-height: 1926px){#chat{height: 1806px;}}
        @media (max-height: 1925px){#chat{height: 1805px;}}
        @media (max-height: 1924px){#chat{height: 1804px;}}
        @media (max-height: 1923px){#chat{height: 1803px;}}
        @media (max-height: 1922px){#chat{height: 1802px;}}
        @media (max-height: 1921px){#chat{height: 1801px;}}
        @media (max-height: 1920px){#chat{height: 1800px;}}
        @media (max-height: 1919px){#chat{height: 1799px;}}
        @media (max-height: 1918px){#chat{height: 1798px;}}
        @media (max-height: 1917px){#chat{height: 1797px;}}
        @media (max-height: 1916px){#chat{height: 1796px;}}
        @media (max-height: 1915px){#chat{height: 1795px;}}
        @media (max-height: 1914px){#chat{height: 1794px;}}
        @media (max-height: 1913px){#chat{height: 1793px;}}
        @media (max-height: 1912px){#chat{height: 1792px;}}
        @media (max-height: 1911px){#chat{height: 1791px;}}
        @media (max-height: 1910px){#chat{height: 1790px;}}
        @media (max-height: 1909px){#chat{height: 1789px;}}
        @media (max-height: 1908px){#chat{height: 1788px;}}
        @media (max-height: 1907px){#chat{height: 1787px;}}
        @media (max-height: 1906px){#chat{height: 1786px;}}
        @media (max-height: 1905px){#chat{height: 1785px;}}
        @media (max-height: 1904px){#chat{height: 1784px;}}
        @media (max-height: 1903px){#chat{height: 1783px;}}
        @media (max-height: 1902px){#chat{height: 1782px;}}
        @media (max-height: 1901px){#chat{height: 1781px;}}
        @media (max-height: 1900px){#chat{height: 1780px;}}
        @media (max-height: 1899px){#chat{height: 1779px;}}
        @media (max-height: 1898px){#chat{height: 1778px;}}
        @media (max-height: 1897px){#chat{height: 1777px;}}
        @media (max-height: 1896px){#chat{height: 1776px;}}
        @media (max-height: 1895px){#chat{height: 1775px;}}
        @media (max-height: 1894px){#chat{height: 1774px;}}
        @media (max-height: 1893px){#chat{height: 1773px;}}
        @media (max-height: 1892px){#chat{height: 1772px;}}
        @media (max-height: 1891px){#chat{height: 1771px;}}
        @media (max-height: 1890px){#chat{height: 1770px;}}
        @media (max-height: 1889px){#chat{height: 1769px;}}
        @media (max-height: 1888px){#chat{height: 1768px;}}
        @media (max-height: 1887px){#chat{height: 1767px;}}
        @media (max-height: 1886px){#chat{height: 1766px;}}
        @media (max-height: 1885px){#chat{height: 1765px;}}
        @media (max-height: 1884px){#chat{height: 1764px;}}
        @media (max-height: 1883px){#chat{height: 1763px;}}
        @media (max-height: 1882px){#chat{height: 1762px;}}
        @media (max-height: 1881px){#chat{height: 1761px;}}
        @media (max-height: 1880px){#chat{height: 1760px;}}
        @media (max-height: 1879px){#chat{height: 1759px;}}
        @media (max-height: 1878px){#chat{height: 1758px;}}
        @media (max-height: 1877px){#chat{height: 1757px;}}
        @media (max-height: 1876px){#chat{height: 1756px;}}
        @media (max-height: 1875px){#chat{height: 1755px;}}
        @media (max-height: 1874px){#chat{height: 1754px;}}
        @media (max-height: 1873px){#chat{height: 1753px;}}
        @media (max-height: 1872px){#chat{height: 1752px;}}
        @media (max-height: 1871px){#chat{height: 1751px;}}
        @media (max-height: 1870px){#chat{height: 1750px;}}
        @media (max-height: 1869px){#chat{height: 1749px;}}
        @media (max-height: 1868px){#chat{height: 1748px;}}
        @media (max-height: 1867px){#chat{height: 1747px;}}
        @media (max-height: 1866px){#chat{height: 1746px;}}
        @media (max-height: 1865px){#chat{height: 1745px;}}
        @media (max-height: 1864px){#chat{height: 1744px;}}
        @media (max-height: 1863px){#chat{height: 1743px;}}
        @media (max-height: 1862px){#chat{height: 1742px;}}
        @media (max-height: 1861px){#chat{height: 1741px;}}
        @media (max-height: 1860px){#chat{height: 1740px;}}
        @media (max-height: 1859px){#chat{height: 1739px;}}
        @media (max-height: 1858px){#chat{height: 1738px;}}
        @media (max-height: 1857px){#chat{height: 1737px;}}
        @media (max-height: 1856px){#chat{height: 1736px;}}
        @media (max-height: 1855px){#chat{height: 1735px;}}
        @media (max-height: 1854px){#chat{height: 1734px;}}
        @media (max-height: 1853px){#chat{height: 1733px;}}
        @media (max-height: 1852px){#chat{height: 1732px;}}
        @media (max-height: 1851px){#chat{height: 1731px;}}
        @media (max-height: 1850px){#chat{height: 1730px;}}
        @media (max-height: 1849px){#chat{height: 1729px;}}
        @media (max-height: 1848px){#chat{height: 1728px;}}
        @media (max-height: 1847px){#chat{height: 1727px;}}
        @media (max-height: 1846px){#chat{height: 1726px;}}
        @media (max-height: 1845px){#chat{height: 1725px;}}
        @media (max-height: 1844px){#chat{height: 1724px;}}
        @media (max-height: 1843px){#chat{height: 1723px;}}
        @media (max-height: 1842px){#chat{height: 1722px;}}
        @media (max-height: 1841px){#chat{height: 1721px;}}
        @media (max-height: 1840px){#chat{height: 1720px;}}
        @media (max-height: 1839px){#chat{height: 1719px;}}
        @media (max-height: 1838px){#chat{height: 1718px;}}
        @media (max-height: 1837px){#chat{height: 1717px;}}
        @media (max-height: 1836px){#chat{height: 1716px;}}
        @media (max-height: 1835px){#chat{height: 1715px;}}
        @media (max-height: 1834px){#chat{height: 1714px;}}
        @media (max-height: 1833px){#chat{height: 1713px;}}
        @media (max-height: 1832px){#chat{height: 1712px;}}
        @media (max-height: 1831px){#chat{height: 1711px;}}
        @media (max-height: 1830px){#chat{height: 1710px;}}
        @media (max-height: 1829px){#chat{height: 1709px;}}
        @media (max-height: 1828px){#chat{height: 1708px;}}
        @media (max-height: 1827px){#chat{height: 1707px;}}
        @media (max-height: 1826px){#chat{height: 1706px;}}
        @media (max-height: 1825px){#chat{height: 1705px;}}
        @media (max-height: 1824px){#chat{height: 1704px;}}
        @media (max-height: 1823px){#chat{height: 1703px;}}
        @media (max-height: 1822px){#chat{height: 1702px;}}
        @media (max-height: 1821px){#chat{height: 1701px;}}
        @media (max-height: 1820px){#chat{height: 1700px;}}
        @media (max-height: 1819px){#chat{height: 1699px;}}
        @media (max-height: 1818px){#chat{height: 1698px;}}
        @media (max-height: 1817px){#chat{height: 1697px;}}
        @media (max-height: 1816px){#chat{height: 1696px;}}
        @media (max-height: 1815px){#chat{height: 1695px;}}
        @media (max-height: 1814px){#chat{height: 1694px;}}
        @media (max-height: 1813px){#chat{height: 1693px;}}
        @media (max-height: 1812px){#chat{height: 1692px;}}
        @media (max-height: 1811px){#chat{height: 1691px;}}
        @media (max-height: 1810px){#chat{height: 1690px;}}
        @media (max-height: 1809px){#chat{height: 1689px;}}
        @media (max-height: 1808px){#chat{height: 1688px;}}
        @media (max-height: 1807px){#chat{height: 1687px;}}
        @media (max-height: 1806px){#chat{height: 1686px;}}
        @media (max-height: 1805px){#chat{height: 1685px;}}
        @media (max-height: 1804px){#chat{height: 1684px;}}
        @media (max-height: 1803px){#chat{height: 1683px;}}
        @media (max-height: 1802px){#chat{height: 1682px;}}
        @media (max-height: 1801px){#chat{height: 1681px;}}
        @media (max-height: 1800px){#chat{height: 1680px;}}
        @media (max-height: 1799px){#chat{height: 1679px;}}
        @media (max-height: 1798px){#chat{height: 1678px;}}
        @media (max-height: 1797px){#chat{height: 1677px;}}
        @media (max-height: 1796px){#chat{height: 1676px;}}
        @media (max-height: 1795px){#chat{height: 1675px;}}
        @media (max-height: 1794px){#chat{height: 1674px;}}
        @media (max-height: 1793px){#chat{height: 1673px;}}
        @media (max-height: 1792px){#chat{height: 1672px;}}
        @media (max-height: 1791px){#chat{height: 1671px;}}
        @media (max-height: 1790px){#chat{height: 1670px;}}
        @media (max-height: 1789px){#chat{height: 1669px;}}
        @media (max-height: 1788px){#chat{height: 1668px;}}
        @media (max-height: 1787px){#chat{height: 1667px;}}
        @media (max-height: 1786px){#chat{height: 1666px;}}
        @media (max-height: 1785px){#chat{height: 1665px;}}
        @media (max-height: 1784px){#chat{height: 1664px;}}
        @media (max-height: 1783px){#chat{height: 1663px;}}
        @media (max-height: 1782px){#chat{height: 1662px;}}
        @media (max-height: 1781px){#chat{height: 1661px;}}
        @media (max-height: 1780px){#chat{height: 1660px;}}
        @media (max-height: 1779px){#chat{height: 1659px;}}
        @media (max-height: 1778px){#chat{height: 1658px;}}
        @media (max-height: 1777px){#chat{height: 1657px;}}
        @media (max-height: 1776px){#chat{height: 1656px;}}
        @media (max-height: 1775px){#chat{height: 1655px;}}
        @media (max-height: 1774px){#chat{height: 1654px;}}
        @media (max-height: 1773px){#chat{height: 1653px;}}
        @media (max-height: 1772px){#chat{height: 1652px;}}
        @media (max-height: 1771px){#chat{height: 1651px;}}
        @media (max-height: 1770px){#chat{height: 1650px;}}
        @media (max-height: 1769px){#chat{height: 1649px;}}
        @media (max-height: 1768px){#chat{height: 1648px;}}
        @media (max-height: 1767px){#chat{height: 1647px;}}
        @media (max-height: 1766px){#chat{height: 1646px;}}
        @media (max-height: 1765px){#chat{height: 1645px;}}
        @media (max-height: 1764px){#chat{height: 1644px;}}
        @media (max-height: 1763px){#chat{height: 1643px;}}
        @media (max-height: 1762px){#chat{height: 1642px;}}
        @media (max-height: 1761px){#chat{height: 1641px;}}
        @media (max-height: 1760px){#chat{height: 1640px;}}
        @media (max-height: 1759px){#chat{height: 1639px;}}
        @media (max-height: 1758px){#chat{height: 1638px;}}
        @media (max-height: 1757px){#chat{height: 1637px;}}
        @media (max-height: 1756px){#chat{height: 1636px;}}
        @media (max-height: 1755px){#chat{height: 1635px;}}
        @media (max-height: 1754px){#chat{height: 1634px;}}
        @media (max-height: 1753px){#chat{height: 1633px;}}
        @media (max-height: 1752px){#chat{height: 1632px;}}
        @media (max-height: 1751px){#chat{height: 1631px;}}
        @media (max-height: 1750px){#chat{height: 1630px;}}
        @media (max-height: 1749px){#chat{height: 1629px;}}
        @media (max-height: 1748px){#chat{height: 1628px;}}
        @media (max-height: 1747px){#chat{height: 1627px;}}
        @media (max-height: 1746px){#chat{height: 1626px;}}
        @media (max-height: 1745px){#chat{height: 1625px;}}
        @media (max-height: 1744px){#chat{height: 1624px;}}
        @media (max-height: 1743px){#chat{height: 1623px;}}
        @media (max-height: 1742px){#chat{height: 1622px;}}
        @media (max-height: 1741px){#chat{height: 1621px;}}
        @media (max-height: 1740px){#chat{height: 1620px;}}
        @media (max-height: 1739px){#chat{height: 1619px;}}
        @media (max-height: 1738px){#chat{height: 1618px;}}
        @media (max-height: 1737px){#chat{height: 1617px;}}
        @media (max-height: 1736px){#chat{height: 1616px;}}
        @media (max-height: 1735px){#chat{height: 1615px;}}
        @media (max-height: 1734px){#chat{height: 1614px;}}
        @media (max-height: 1733px){#chat{height: 1613px;}}
        @media (max-height: 1732px){#chat{height: 1612px;}}
        @media (max-height: 1731px){#chat{height: 1611px;}}
        @media (max-height: 1730px){#chat{height: 1610px;}}
        @media (max-height: 1729px){#chat{height: 1609px;}}
        @media (max-height: 1728px){#chat{height: 1608px;}}
        @media (max-height: 1727px){#chat{height: 1607px;}}
        @media (max-height: 1726px){#chat{height: 1606px;}}
        @media (max-height: 1725px){#chat{height: 1605px;}}
        @media (max-height: 1724px){#chat{height: 1604px;}}
        @media (max-height: 1723px){#chat{height: 1603px;}}
        @media (max-height: 1722px){#chat{height: 1602px;}}
        @media (max-height: 1721px){#chat{height: 1601px;}}
        @media (max-height: 1720px){#chat{height: 1600px;}}
        @media (max-height: 1719px){#chat{height: 1599px;}}
        @media (max-height: 1718px){#chat{height: 1598px;}}
        @media (max-height: 1717px){#chat{height: 1597px;}}
        @media (max-height: 1716px){#chat{height: 1596px;}}
        @media (max-height: 1715px){#chat{height: 1595px;}}
        @media (max-height: 1714px){#chat{height: 1594px;}}
        @media (max-height: 1713px){#chat{height: 1593px;}}
        @media (max-height: 1712px){#chat{height: 1592px;}}
        @media (max-height: 1711px){#chat{height: 1591px;}}
        @media (max-height: 1710px){#chat{height: 1590px;}}
        @media (max-height: 1709px){#chat{height: 1589px;}}
        @media (max-height: 1708px){#chat{height: 1588px;}}
        @media (max-height: 1707px){#chat{height: 1587px;}}
        @media (max-height: 1706px){#chat{height: 1586px;}}
        @media (max-height: 1705px){#chat{height: 1585px;}}
        @media (max-height: 1704px){#chat{height: 1584px;}}
        @media (max-height: 1703px){#chat{height: 1583px;}}
        @media (max-height: 1702px){#chat{height: 1582px;}}
        @media (max-height: 1701px){#chat{height: 1581px;}}
        @media (max-height: 1700px){#chat{height: 1580px;}}
        @media (max-height: 1699px){#chat{height: 1579px;}}
        @media (max-height: 1698px){#chat{height: 1578px;}}
        @media (max-height: 1697px){#chat{height: 1577px;}}
        @media (max-height: 1696px){#chat{height: 1576px;}}
        @media (max-height: 1695px){#chat{height: 1575px;}}
        @media (max-height: 1694px){#chat{height: 1574px;}}
        @media (max-height: 1693px){#chat{height: 1573px;}}
        @media (max-height: 1692px){#chat{height: 1572px;}}
        @media (max-height: 1691px){#chat{height: 1571px;}}
        @media (max-height: 1690px){#chat{height: 1570px;}}
        @media (max-height: 1689px){#chat{height: 1569px;}}
        @media (max-height: 1688px){#chat{height: 1568px;}}
        @media (max-height: 1687px){#chat{height: 1567px;}}
        @media (max-height: 1686px){#chat{height: 1566px;}}
        @media (max-height: 1685px){#chat{height: 1565px;}}
        @media (max-height: 1684px){#chat{height: 1564px;}}
        @media (max-height: 1683px){#chat{height: 1563px;}}
        @media (max-height: 1682px){#chat{height: 1562px;}}
        @media (max-height: 1681px){#chat{height: 1561px;}}
        @media (max-height: 1680px){#chat{height: 1560px;}}
        @media (max-height: 1679px){#chat{height: 1559px;}}
        @media (max-height: 1678px){#chat{height: 1558px;}}
        @media (max-height: 1677px){#chat{height: 1557px;}}
        @media (max-height: 1676px){#chat{height: 1556px;}}
        @media (max-height: 1675px){#chat{height: 1555px;}}
        @media (max-height: 1674px){#chat{height: 1554px;}}
        @media (max-height: 1673px){#chat{height: 1553px;}}
        @media (max-height: 1672px){#chat{height: 1552px;}}
        @media (max-height: 1671px){#chat{height: 1551px;}}
        @media (max-height: 1670px){#chat{height: 1550px;}}
        @media (max-height: 1669px){#chat{height: 1549px;}}
        @media (max-height: 1668px){#chat{height: 1548px;}}
        @media (max-height: 1667px){#chat{height: 1547px;}}
        @media (max-height: 1666px){#chat{height: 1546px;}}
        @media (max-height: 1665px){#chat{height: 1545px;}}
        @media (max-height: 1664px){#chat{height: 1544px;}}
        @media (max-height: 1663px){#chat{height: 1543px;}}
        @media (max-height: 1662px){#chat{height: 1542px;}}
        @media (max-height: 1661px){#chat{height: 1541px;}}
        @media (max-height: 1660px){#chat{height: 1540px;}}
        @media (max-height: 1659px){#chat{height: 1539px;}}
        @media (max-height: 1658px){#chat{height: 1538px;}}
        @media (max-height: 1657px){#chat{height: 1537px;}}
        @media (max-height: 1656px){#chat{height: 1536px;}}
        @media (max-height: 1655px){#chat{height: 1535px;}}
        @media (max-height: 1654px){#chat{height: 1534px;}}
        @media (max-height: 1653px){#chat{height: 1533px;}}
        @media (max-height: 1652px){#chat{height: 1532px;}}
        @media (max-height: 1651px){#chat{height: 1531px;}}
        @media (max-height: 1650px){#chat{height: 1530px;}}
        @media (max-height: 1649px){#chat{height: 1529px;}}
        @media (max-height: 1648px){#chat{height: 1528px;}}
        @media (max-height: 1647px){#chat{height: 1527px;}}
        @media (max-height: 1646px){#chat{height: 1526px;}}
        @media (max-height: 1645px){#chat{height: 1525px;}}
        @media (max-height: 1644px){#chat{height: 1524px;}}
        @media (max-height: 1643px){#chat{height: 1523px;}}
        @media (max-height: 1642px){#chat{height: 1522px;}}
        @media (max-height: 1641px){#chat{height: 1521px;}}
        @media (max-height: 1640px){#chat{height: 1520px;}}
        @media (max-height: 1639px){#chat{height: 1519px;}}
        @media (max-height: 1638px){#chat{height: 1518px;}}
        @media (max-height: 1637px){#chat{height: 1517px;}}
        @media (max-height: 1636px){#chat{height: 1516px;}}
        @media (max-height: 1635px){#chat{height: 1515px;}}
        @media (max-height: 1634px){#chat{height: 1514px;}}
        @media (max-height: 1633px){#chat{height: 1513px;}}
        @media (max-height: 1632px){#chat{height: 1512px;}}
        @media (max-height: 1631px){#chat{height: 1511px;}}
        @media (max-height: 1630px){#chat{height: 1510px;}}
        @media (max-height: 1629px){#chat{height: 1509px;}}
        @media (max-height: 1628px){#chat{height: 1508px;}}
        @media (max-height: 1627px){#chat{height: 1507px;}}
        @media (max-height: 1626px){#chat{height: 1506px;}}
        @media (max-height: 1625px){#chat{height: 1505px;}}
        @media (max-height: 1624px){#chat{height: 1504px;}}
        @media (max-height: 1623px){#chat{height: 1503px;}}
        @media (max-height: 1622px){#chat{height: 1502px;}}
        @media (max-height: 1621px){#chat{height: 1501px;}}
        @media (max-height: 1620px){#chat{height: 1500px;}}
        @media (max-height: 1619px){#chat{height: 1499px;}}
        @media (max-height: 1618px){#chat{height: 1498px;}}
        @media (max-height: 1617px){#chat{height: 1497px;}}
        @media (max-height: 1616px){#chat{height: 1496px;}}
        @media (max-height: 1615px){#chat{height: 1495px;}}
        @media (max-height: 1614px){#chat{height: 1494px;}}
        @media (max-height: 1613px){#chat{height: 1493px;}}
        @media (max-height: 1612px){#chat{height: 1492px;}}
        @media (max-height: 1611px){#chat{height: 1491px;}}
        @media (max-height: 1610px){#chat{height: 1490px;}}
        @media (max-height: 1609px){#chat{height: 1489px;}}
        @media (max-height: 1608px){#chat{height: 1488px;}}
        @media (max-height: 1607px){#chat{height: 1487px;}}
        @media (max-height: 1606px){#chat{height: 1486px;}}
        @media (max-height: 1605px){#chat{height: 1485px;}}
        @media (max-height: 1604px){#chat{height: 1484px;}}
        @media (max-height: 1603px){#chat{height: 1483px;}}
        @media (max-height: 1602px){#chat{height: 1482px;}}
        @media (max-height: 1601px){#chat{height: 1481px;}}
        @media (max-height: 1600px){#chat{height: 1480px;}}
        @media (max-height: 1599px){#chat{height: 1479px;}}
        @media (max-height: 1598px){#chat{height: 1478px;}}
        @media (max-height: 1597px){#chat{height: 1477px;}}
        @media (max-height: 1596px){#chat{height: 1476px;}}
        @media (max-height: 1595px){#chat{height: 1475px;}}
        @media (max-height: 1594px){#chat{height: 1474px;}}
        @media (max-height: 1593px){#chat{height: 1473px;}}
        @media (max-height: 1592px){#chat{height: 1472px;}}
        @media (max-height: 1591px){#chat{height: 1471px;}}
        @media (max-height: 1590px){#chat{height: 1470px;}}
        @media (max-height: 1589px){#chat{height: 1469px;}}
        @media (max-height: 1588px){#chat{height: 1468px;}}
        @media (max-height: 1587px){#chat{height: 1467px;}}
        @media (max-height: 1586px){#chat{height: 1466px;}}
        @media (max-height: 1585px){#chat{height: 1465px;}}
        @media (max-height: 1584px){#chat{height: 1464px;}}
        @media (max-height: 1583px){#chat{height: 1463px;}}
        @media (max-height: 1582px){#chat{height: 1462px;}}
        @media (max-height: 1581px){#chat{height: 1461px;}}
        @media (max-height: 1580px){#chat{height: 1460px;}}
        @media (max-height: 1579px){#chat{height: 1459px;}}
        @media (max-height: 1578px){#chat{height: 1458px;}}
        @media (max-height: 1577px){#chat{height: 1457px;}}
        @media (max-height: 1576px){#chat{height: 1456px;}}
        @media (max-height: 1575px){#chat{height: 1455px;}}
        @media (max-height: 1574px){#chat{height: 1454px;}}
        @media (max-height: 1573px){#chat{height: 1453px;}}
        @media (max-height: 1572px){#chat{height: 1452px;}}
        @media (max-height: 1571px){#chat{height: 1451px;}}
        @media (max-height: 1570px){#chat{height: 1450px;}}
        @media (max-height: 1569px){#chat{height: 1449px;}}
        @media (max-height: 1568px){#chat{height: 1448px;}}
        @media (max-height: 1567px){#chat{height: 1447px;}}
        @media (max-height: 1566px){#chat{height: 1446px;}}
        @media (max-height: 1565px){#chat{height: 1445px;}}
        @media (max-height: 1564px){#chat{height: 1444px;}}
        @media (max-height: 1563px){#chat{height: 1443px;}}
        @media (max-height: 1562px){#chat{height: 1442px;}}
        @media (max-height: 1561px){#chat{height: 1441px;}}
        @media (max-height: 1560px){#chat{height: 1440px;}}
        @media (max-height: 1559px){#chat{height: 1439px;}}
        @media (max-height: 1558px){#chat{height: 1438px;}}
        @media (max-height: 1557px){#chat{height: 1437px;}}
        @media (max-height: 1556px){#chat{height: 1436px;}}
        @media (max-height: 1555px){#chat{height: 1435px;}}
        @media (max-height: 1554px){#chat{height: 1434px;}}
        @media (max-height: 1553px){#chat{height: 1433px;}}
        @media (max-height: 1552px){#chat{height: 1432px;}}
        @media (max-height: 1551px){#chat{height: 1431px;}}
        @media (max-height: 1550px){#chat{height: 1430px;}}
        @media (max-height: 1549px){#chat{height: 1429px;}}
        @media (max-height: 1548px){#chat{height: 1428px;}}
        @media (max-height: 1547px){#chat{height: 1427px;}}
        @media (max-height: 1546px){#chat{height: 1426px;}}
        @media (max-height: 1545px){#chat{height: 1425px;}}
        @media (max-height: 1544px){#chat{height: 1424px;}}
        @media (max-height: 1543px){#chat{height: 1423px;}}
        @media (max-height: 1542px){#chat{height: 1422px;}}
        @media (max-height: 1541px){#chat{height: 1421px;}}
        @media (max-height: 1540px){#chat{height: 1420px;}}
        @media (max-height: 1539px){#chat{height: 1419px;}}
        @media (max-height: 1538px){#chat{height: 1418px;}}
        @media (max-height: 1537px){#chat{height: 1417px;}}
        @media (max-height: 1536px){#chat{height: 1416px;}}
        @media (max-height: 1535px){#chat{height: 1415px;}}
        @media (max-height: 1534px){#chat{height: 1414px;}}
        @media (max-height: 1533px){#chat{height: 1413px;}}
        @media (max-height: 1532px){#chat{height: 1412px;}}
        @media (max-height: 1531px){#chat{height: 1411px;}}
        @media (max-height: 1530px){#chat{height: 1410px;}}
        @media (max-height: 1529px){#chat{height: 1409px;}}
        @media (max-height: 1528px){#chat{height: 1408px;}}
        @media (max-height: 1527px){#chat{height: 1407px;}}
        @media (max-height: 1526px){#chat{height: 1406px;}}
        @media (max-height: 1525px){#chat{height: 1405px;}}
        @media (max-height: 1524px){#chat{height: 1404px;}}
        @media (max-height: 1523px){#chat{height: 1403px;}}
        @media (max-height: 1522px){#chat{height: 1402px;}}
        @media (max-height: 1521px){#chat{height: 1401px;}}
        @media (max-height: 1520px){#chat{height: 1400px;}}
        @media (max-height: 1519px){#chat{height: 1399px;}}
        @media (max-height: 1518px){#chat{height: 1398px;}}
        @media (max-height: 1517px){#chat{height: 1397px;}}
        @media (max-height: 1516px){#chat{height: 1396px;}}
        @media (max-height: 1515px){#chat{height: 1395px;}}
        @media (max-height: 1514px){#chat{height: 1394px;}}
        @media (max-height: 1513px){#chat{height: 1393px;}}
        @media (max-height: 1512px){#chat{height: 1392px;}}
        @media (max-height: 1511px){#chat{height: 1391px;}}
        @media (max-height: 1510px){#chat{height: 1390px;}}
        @media (max-height: 1509px){#chat{height: 1389px;}}
        @media (max-height: 1508px){#chat{height: 1388px;}}
        @media (max-height: 1507px){#chat{height: 1387px;}}
        @media (max-height: 1506px){#chat{height: 1386px;}}
        @media (max-height: 1505px){#chat{height: 1385px;}}
        @media (max-height: 1504px){#chat{height: 1384px;}}
        @media (max-height: 1503px){#chat{height: 1383px;}}
        @media (max-height: 1502px){#chat{height: 1382px;}}
        @media (max-height: 1501px){#chat{height: 1381px;}}
        @media (max-height: 1500px){#chat{height: 1380px;}}
        @media (max-height: 1499px){#chat{height: 1379px;}}
        @media (max-height: 1498px){#chat{height: 1378px;}}
        @media (max-height: 1497px){#chat{height: 1377px;}}
        @media (max-height: 1496px){#chat{height: 1376px;}}
        @media (max-height: 1495px){#chat{height: 1375px;}}
        @media (max-height: 1494px){#chat{height: 1374px;}}
        @media (max-height: 1493px){#chat{height: 1373px;}}
        @media (max-height: 1492px){#chat{height: 1372px;}}
        @media (max-height: 1491px){#chat{height: 1371px;}}
        @media (max-height: 1490px){#chat{height: 1370px;}}
        @media (max-height: 1489px){#chat{height: 1369px;}}
        @media (max-height: 1488px){#chat{height: 1368px;}}
        @media (max-height: 1487px){#chat{height: 1367px;}}
        @media (max-height: 1486px){#chat{height: 1366px;}}
        @media (max-height: 1485px){#chat{height: 1365px;}}
        @media (max-height: 1484px){#chat{height: 1364px;}}
        @media (max-height: 1483px){#chat{height: 1363px;}}
        @media (max-height: 1482px){#chat{height: 1362px;}}
        @media (max-height: 1481px){#chat{height: 1361px;}}
        @media (max-height: 1480px){#chat{height: 1360px;}}
        @media (max-height: 1479px){#chat{height: 1359px;}}
        @media (max-height: 1478px){#chat{height: 1358px;}}
        @media (max-height: 1477px){#chat{height: 1357px;}}
        @media (max-height: 1476px){#chat{height: 1356px;}}
        @media (max-height: 1475px){#chat{height: 1355px;}}
        @media (max-height: 1474px){#chat{height: 1354px;}}
        @media (max-height: 1473px){#chat{height: 1353px;}}
        @media (max-height: 1472px){#chat{height: 1352px;}}
        @media (max-height: 1471px){#chat{height: 1351px;}}
        @media (max-height: 1470px){#chat{height: 1350px;}}
        @media (max-height: 1469px){#chat{height: 1349px;}}
        @media (max-height: 1468px){#chat{height: 1348px;}}
        @media (max-height: 1467px){#chat{height: 1347px;}}
        @media (max-height: 1466px){#chat{height: 1346px;}}
        @media (max-height: 1465px){#chat{height: 1345px;}}
        @media (max-height: 1464px){#chat{height: 1344px;}}
        @media (max-height: 1463px){#chat{height: 1343px;}}
        @media (max-height: 1462px){#chat{height: 1342px;}}
        @media (max-height: 1461px){#chat{height: 1341px;}}
        @media (max-height: 1460px){#chat{height: 1340px;}}
        @media (max-height: 1459px){#chat{height: 1339px;}}
        @media (max-height: 1458px){#chat{height: 1338px;}}
        @media (max-height: 1457px){#chat{height: 1337px;}}
        @media (max-height: 1456px){#chat{height: 1336px;}}
        @media (max-height: 1455px){#chat{height: 1335px;}}
        @media (max-height: 1454px){#chat{height: 1334px;}}
        @media (max-height: 1453px){#chat{height: 1333px;}}
        @media (max-height: 1452px){#chat{height: 1332px;}}
        @media (max-height: 1451px){#chat{height: 1331px;}}
        @media (max-height: 1450px){#chat{height: 1330px;}}
        @media (max-height: 1449px){#chat{height: 1329px;}}
        @media (max-height: 1448px){#chat{height: 1328px;}}
        @media (max-height: 1447px){#chat{height: 1327px;}}
        @media (max-height: 1446px){#chat{height: 1326px;}}
        @media (max-height: 1445px){#chat{height: 1325px;}}
        @media (max-height: 1444px){#chat{height: 1324px;}}
        @media (max-height: 1443px){#chat{height: 1323px;}}
        @media (max-height: 1442px){#chat{height: 1322px;}}
        @media (max-height: 1441px){#chat{height: 1321px;}}
        @media (max-height: 1440px){#chat{height: 1320px;}}
        @media (max-height: 1439px){#chat{height: 1319px;}}
        @media (max-height: 1438px){#chat{height: 1318px;}}
        @media (max-height: 1437px){#chat{height: 1317px;}}
        @media (max-height: 1436px){#chat{height: 1316px;}}
        @media (max-height: 1435px){#chat{height: 1315px;}}
        @media (max-height: 1434px){#chat{height: 1314px;}}
        @media (max-height: 1433px){#chat{height: 1313px;}}
        @media (max-height: 1432px){#chat{height: 1312px;}}
        @media (max-height: 1431px){#chat{height: 1311px;}}
        @media (max-height: 1430px){#chat{height: 1310px;}}
        @media (max-height: 1429px){#chat{height: 1309px;}}
        @media (max-height: 1428px){#chat{height: 1308px;}}
        @media (max-height: 1427px){#chat{height: 1307px;}}
        @media (max-height: 1426px){#chat{height: 1306px;}}
        @media (max-height: 1425px){#chat{height: 1305px;}}
        @media (max-height: 1424px){#chat{height: 1304px;}}
        @media (max-height: 1423px){#chat{height: 1303px;}}
        @media (max-height: 1422px){#chat{height: 1302px;}}
        @media (max-height: 1421px){#chat{height: 1301px;}}
        @media (max-height: 1420px){#chat{height: 1300px;}}
        @media (max-height: 1419px){#chat{height: 1299px;}}
        @media (max-height: 1418px){#chat{height: 1298px;}}
        @media (max-height: 1417px){#chat{height: 1297px;}}
        @media (max-height: 1416px){#chat{height: 1296px;}}
        @media (max-height: 1415px){#chat{height: 1295px;}}
        @media (max-height: 1414px){#chat{height: 1294px;}}
        @media (max-height: 1413px){#chat{height: 1293px;}}
        @media (max-height: 1412px){#chat{height: 1292px;}}
        @media (max-height: 1411px){#chat{height: 1291px;}}
        @media (max-height: 1410px){#chat{height: 1290px;}}
        @media (max-height: 1409px){#chat{height: 1289px;}}
        @media (max-height: 1408px){#chat{height: 1288px;}}
        @media (max-height: 1407px){#chat{height: 1287px;}}
        @media (max-height: 1406px){#chat{height: 1286px;}}
        @media (max-height: 1405px){#chat{height: 1285px;}}
        @media (max-height: 1404px){#chat{height: 1284px;}}
        @media (max-height: 1403px){#chat{height: 1283px;}}
        @media (max-height: 1402px){#chat{height: 1282px;}}
        @media (max-height: 1401px){#chat{height: 1281px;}}
        @media (max-height: 1400px){#chat{height: 1280px;}}
        @media (max-height: 1399px){#chat{height: 1279px;}}
        @media (max-height: 1398px){#chat{height: 1278px;}}
        @media (max-height: 1397px){#chat{height: 1277px;}}
        @media (max-height: 1396px){#chat{height: 1276px;}}
        @media (max-height: 1395px){#chat{height: 1275px;}}
        @media (max-height: 1394px){#chat{height: 1274px;}}
        @media (max-height: 1393px){#chat{height: 1273px;}}
        @media (max-height: 1392px){#chat{height: 1272px;}}
        @media (max-height: 1391px){#chat{height: 1271px;}}
        @media (max-height: 1390px){#chat{height: 1270px;}}
        @media (max-height: 1389px){#chat{height: 1269px;}}
        @media (max-height: 1388px){#chat{height: 1268px;}}
        @media (max-height: 1387px){#chat{height: 1267px;}}
        @media (max-height: 1386px){#chat{height: 1266px;}}
        @media (max-height: 1385px){#chat{height: 1265px;}}
        @media (max-height: 1384px){#chat{height: 1264px;}}
        @media (max-height: 1383px){#chat{height: 1263px;}}
        @media (max-height: 1382px){#chat{height: 1262px;}}
        @media (max-height: 1381px){#chat{height: 1261px;}}
        @media (max-height: 1380px){#chat{height: 1260px;}}
        @media (max-height: 1379px){#chat{height: 1259px;}}
        @media (max-height: 1378px){#chat{height: 1258px;}}
        @media (max-height: 1377px){#chat{height: 1257px;}}
        @media (max-height: 1376px){#chat{height: 1256px;}}
        @media (max-height: 1375px){#chat{height: 1255px;}}
        @media (max-height: 1374px){#chat{height: 1254px;}}
        @media (max-height: 1373px){#chat{height: 1253px;}}
        @media (max-height: 1372px){#chat{height: 1252px;}}
        @media (max-height: 1371px){#chat{height: 1251px;}}
        @media (max-height: 1370px){#chat{height: 1250px;}}
        @media (max-height: 1369px){#chat{height: 1249px;}}
        @media (max-height: 1368px){#chat{height: 1248px;}}
        @media (max-height: 1367px){#chat{height: 1247px;}}
        @media (max-height: 1366px){#chat{height: 1246px;}}
        @media (max-height: 1365px){#chat{height: 1245px;}}
        @media (max-height: 1364px){#chat{height: 1244px;}}
        @media (max-height: 1363px){#chat{height: 1243px;}}
        @media (max-height: 1362px){#chat{height: 1242px;}}
        @media (max-height: 1361px){#chat{height: 1241px;}}
        @media (max-height: 1360px){#chat{height: 1240px;}}
        @media (max-height: 1359px){#chat{height: 1239px;}}
        @media (max-height: 1358px){#chat{height: 1238px;}}
        @media (max-height: 1357px){#chat{height: 1237px;}}
        @media (max-height: 1356px){#chat{height: 1236px;}}
        @media (max-height: 1355px){#chat{height: 1235px;}}
        @media (max-height: 1354px){#chat{height: 1234px;}}
        @media (max-height: 1353px){#chat{height: 1233px;}}
        @media (max-height: 1352px){#chat{height: 1232px;}}
        @media (max-height: 1351px){#chat{height: 1231px;}}
        @media (max-height: 1350px){#chat{height: 1230px;}}
        @media (max-height: 1349px){#chat{height: 1229px;}}
        @media (max-height: 1348px){#chat{height: 1228px;}}
        @media (max-height: 1347px){#chat{height: 1227px;}}
        @media (max-height: 1346px){#chat{height: 1226px;}}
        @media (max-height: 1345px){#chat{height: 1225px;}}
        @media (max-height: 1344px){#chat{height: 1224px;}}
        @media (max-height: 1343px){#chat{height: 1223px;}}
        @media (max-height: 1342px){#chat{height: 1222px;}}
        @media (max-height: 1341px){#chat{height: 1221px;}}
        @media (max-height: 1340px){#chat{height: 1220px;}}
        @media (max-height: 1339px){#chat{height: 1219px;}}
        @media (max-height: 1338px){#chat{height: 1218px;}}
        @media (max-height: 1337px){#chat{height: 1217px;}}
        @media (max-height: 1336px){#chat{height: 1216px;}}
        @media (max-height: 1335px){#chat{height: 1215px;}}
        @media (max-height: 1334px){#chat{height: 1214px;}}
        @media (max-height: 1333px){#chat{height: 1213px;}}
        @media (max-height: 1332px){#chat{height: 1212px;}}
        @media (max-height: 1331px){#chat{height: 1211px;}}
        @media (max-height: 1330px){#chat{height: 1210px;}}
        @media (max-height: 1329px){#chat{height: 1209px;}}
        @media (max-height: 1328px){#chat{height: 1208px;}}
        @media (max-height: 1327px){#chat{height: 1207px;}}
        @media (max-height: 1326px){#chat{height: 1206px;}}
        @media (max-height: 1325px){#chat{height: 1205px;}}
        @media (max-height: 1324px){#chat{height: 1204px;}}
        @media (max-height: 1323px){#chat{height: 1203px;}}
        @media (max-height: 1322px){#chat{height: 1202px;}}
        @media (max-height: 1321px){#chat{height: 1201px;}}
        @media (max-height: 1320px){#chat{height: 1200px;}}
        @media (max-height: 1319px){#chat{height: 1199px;}}
        @media (max-height: 1318px){#chat{height: 1198px;}}
        @media (max-height: 1317px){#chat{height: 1197px;}}
        @media (max-height: 1316px){#chat{height: 1196px;}}
        @media (max-height: 1315px){#chat{height: 1195px;}}
        @media (max-height: 1314px){#chat{height: 1194px;}}
        @media (max-height: 1313px){#chat{height: 1193px;}}
        @media (max-height: 1312px){#chat{height: 1192px;}}
        @media (max-height: 1311px){#chat{height: 1191px;}}
        @media (max-height: 1310px){#chat{height: 1190px;}}
        @media (max-height: 1309px){#chat{height: 1189px;}}
        @media (max-height: 1308px){#chat{height: 1188px;}}
        @media (max-height: 1307px){#chat{height: 1187px;}}
        @media (max-height: 1306px){#chat{height: 1186px;}}
        @media (max-height: 1305px){#chat{height: 1185px;}}
        @media (max-height: 1304px){#chat{height: 1184px;}}
        @media (max-height: 1303px){#chat{height: 1183px;}}
        @media (max-height: 1302px){#chat{height: 1182px;}}
        @media (max-height: 1301px){#chat{height: 1181px;}}
        @media (max-height: 1300px){#chat{height: 1180px;}}
        @media (max-height: 1299px){#chat{height: 1179px;}}
        @media (max-height: 1298px){#chat{height: 1178px;}}
        @media (max-height: 1297px){#chat{height: 1177px;}}
        @media (max-height: 1296px){#chat{height: 1176px;}}
        @media (max-height: 1295px){#chat{height: 1175px;}}
        @media (max-height: 1294px){#chat{height: 1174px;}}
        @media (max-height: 1293px){#chat{height: 1173px;}}
        @media (max-height: 1292px){#chat{height: 1172px;}}
        @media (max-height: 1291px){#chat{height: 1171px;}}
        @media (max-height: 1290px){#chat{height: 1170px;}}
        @media (max-height: 1289px){#chat{height: 1169px;}}
        @media (max-height: 1288px){#chat{height: 1168px;}}
        @media (max-height: 1287px){#chat{height: 1167px;}}
        @media (max-height: 1286px){#chat{height: 1166px;}}
        @media (max-height: 1285px){#chat{height: 1165px;}}
        @media (max-height: 1284px){#chat{height: 1164px;}}
        @media (max-height: 1283px){#chat{height: 1163px;}}
        @media (max-height: 1282px){#chat{height: 1162px;}}
        @media (max-height: 1281px){#chat{height: 1161px;}}
        @media (max-height: 1280px){#chat{height: 1160px;}}
        @media (max-height: 1279px){#chat{height: 1159px;}}
        @media (max-height: 1278px){#chat{height: 1158px;}}
        @media (max-height: 1277px){#chat{height: 1157px;}}
        @media (max-height: 1276px){#chat{height: 1156px;}}
        @media (max-height: 1275px){#chat{height: 1155px;}}
        @media (max-height: 1274px){#chat{height: 1154px;}}
        @media (max-height: 1273px){#chat{height: 1153px;}}
        @media (max-height: 1272px){#chat{height: 1152px;}}
        @media (max-height: 1271px){#chat{height: 1151px;}}
        @media (max-height: 1270px){#chat{height: 1150px;}}
        @media (max-height: 1269px){#chat{height: 1149px;}}
        @media (max-height: 1268px){#chat{height: 1148px;}}
        @media (max-height: 1267px){#chat{height: 1147px;}}
        @media (max-height: 1266px){#chat{height: 1146px;}}
        @media (max-height: 1265px){#chat{height: 1145px;}}
        @media (max-height: 1264px){#chat{height: 1144px;}}
        @media (max-height: 1263px){#chat{height: 1143px;}}
        @media (max-height: 1262px){#chat{height: 1142px;}}
        @media (max-height: 1261px){#chat{height: 1141px;}}
        @media (max-height: 1260px){#chat{height: 1140px;}}
        @media (max-height: 1259px){#chat{height: 1139px;}}
        @media (max-height: 1258px){#chat{height: 1138px;}}
        @media (max-height: 1257px){#chat{height: 1137px;}}
        @media (max-height: 1256px){#chat{height: 1136px;}}
        @media (max-height: 1255px){#chat{height: 1135px;}}
        @media (max-height: 1254px){#chat{height: 1134px;}}
        @media (max-height: 1253px){#chat{height: 1133px;}}
        @media (max-height: 1252px){#chat{height: 1132px;}}
        @media (max-height: 1251px){#chat{height: 1131px;}}
        @media (max-height: 1250px){#chat{height: 1130px;}}
        @media (max-height: 1249px){#chat{height: 1129px;}}
        @media (max-height: 1248px){#chat{height: 1128px;}}
        @media (max-height: 1247px){#chat{height: 1127px;}}
        @media (max-height: 1246px){#chat{height: 1126px;}}
        @media (max-height: 1245px){#chat{height: 1125px;}}
        @media (max-height: 1244px){#chat{height: 1124px;}}
        @media (max-height: 1243px){#chat{height: 1123px;}}
        @media (max-height: 1242px){#chat{height: 1122px;}}
        @media (max-height: 1241px){#chat{height: 1121px;}}
        @media (max-height: 1240px){#chat{height: 1120px;}}
        @media (max-height: 1239px){#chat{height: 1119px;}}
        @media (max-height: 1238px){#chat{height: 1118px;}}
        @media (max-height: 1237px){#chat{height: 1117px;}}
        @media (max-height: 1236px){#chat{height: 1116px;}}
        @media (max-height: 1235px){#chat{height: 1115px;}}
        @media (max-height: 1234px){#chat{height: 1114px;}}
        @media (max-height: 1233px){#chat{height: 1113px;}}
        @media (max-height: 1232px){#chat{height: 1112px;}}
        @media (max-height: 1231px){#chat{height: 1111px;}}
        @media (max-height: 1230px){#chat{height: 1110px;}}
        @media (max-height: 1229px){#chat{height: 1109px;}}
        @media (max-height: 1228px){#chat{height: 1108px;}}
        @media (max-height: 1227px){#chat{height: 1107px;}}
        @media (max-height: 1226px){#chat{height: 1106px;}}
        @media (max-height: 1225px){#chat{height: 1105px;}}
        @media (max-height: 1224px){#chat{height: 1104px;}}
        @media (max-height: 1223px){#chat{height: 1103px;}}
        @media (max-height: 1222px){#chat{height: 1102px;}}
        @media (max-height: 1221px){#chat{height: 1101px;}}
        @media (max-height: 1220px){#chat{height: 1100px;}}
        @media (max-height: 1219px){#chat{height: 1099px;}}
        @media (max-height: 1218px){#chat{height: 1098px;}}
        @media (max-height: 1217px){#chat{height: 1097px;}}
        @media (max-height: 1216px){#chat{height: 1096px;}}
        @media (max-height: 1215px){#chat{height: 1095px;}}
        @media (max-height: 1214px){#chat{height: 1094px;}}
        @media (max-height: 1213px){#chat{height: 1093px;}}
        @media (max-height: 1212px){#chat{height: 1092px;}}
        @media (max-height: 1211px){#chat{height: 1091px;}}
        @media (max-height: 1210px){#chat{height: 1090px;}}
        @media (max-height: 1209px){#chat{height: 1089px;}}
        @media (max-height: 1208px){#chat{height: 1088px;}}
        @media (max-height: 1207px){#chat{height: 1087px;}}
        @media (max-height: 1206px){#chat{height: 1086px;}}
        @media (max-height: 1205px){#chat{height: 1085px;}}
        @media (max-height: 1204px){#chat{height: 1084px;}}
        @media (max-height: 1203px){#chat{height: 1083px;}}
        @media (max-height: 1202px){#chat{height: 1082px;}}
        @media (max-height: 1201px){#chat{height: 1081px;}}
        @media (max-height: 1200px){#chat{height: 1080px;}}
        @media (max-height: 1199px){#chat{height: 1079px;}}
        @media (max-height: 1198px){#chat{height: 1078px;}}
        @media (max-height: 1197px){#chat{height: 1077px;}}
        @media (max-height: 1196px){#chat{height: 1076px;}}
        @media (max-height: 1195px){#chat{height: 1075px;}}
        @media (max-height: 1194px){#chat{height: 1074px;}}
        @media (max-height: 1193px){#chat{height: 1073px;}}
        @media (max-height: 1192px){#chat{height: 1072px;}}
        @media (max-height: 1191px){#chat{height: 1071px;}}
        @media (max-height: 1190px){#chat{height: 1070px;}}
        @media (max-height: 1189px){#chat{height: 1069px;}}
        @media (max-height: 1188px){#chat{height: 1068px;}}
        @media (max-height: 1187px){#chat{height: 1067px;}}
        @media (max-height: 1186px){#chat{height: 1066px;}}
        @media (max-height: 1185px){#chat{height: 1065px;}}
        @media (max-height: 1184px){#chat{height: 1064px;}}
        @media (max-height: 1183px){#chat{height: 1063px;}}
        @media (max-height: 1182px){#chat{height: 1062px;}}
        @media (max-height: 1181px){#chat{height: 1061px;}}
        @media (max-height: 1180px){#chat{height: 1060px;}}
        @media (max-height: 1179px){#chat{height: 1059px;}}
        @media (max-height: 1178px){#chat{height: 1058px;}}
        @media (max-height: 1177px){#chat{height: 1057px;}}
        @media (max-height: 1176px){#chat{height: 1056px;}}
        @media (max-height: 1175px){#chat{height: 1055px;}}
        @media (max-height: 1174px){#chat{height: 1054px;}}
        @media (max-height: 1173px){#chat{height: 1053px;}}
        @media (max-height: 1172px){#chat{height: 1052px;}}
        @media (max-height: 1171px){#chat{height: 1051px;}}
        @media (max-height: 1170px){#chat{height: 1050px;}}
        @media (max-height: 1169px){#chat{height: 1049px;}}
        @media (max-height: 1168px){#chat{height: 1048px;}}
        @media (max-height: 1167px){#chat{height: 1047px;}}
        @media (max-height: 1166px){#chat{height: 1046px;}}
        @media (max-height: 1165px){#chat{height: 1045px;}}
        @media (max-height: 1164px){#chat{height: 1044px;}}
        @media (max-height: 1163px){#chat{height: 1043px;}}
        @media (max-height: 1162px){#chat{height: 1042px;}}
        @media (max-height: 1161px){#chat{height: 1041px;}}
        @media (max-height: 1160px){#chat{height: 1040px;}}
        @media (max-height: 1159px){#chat{height: 1039px;}}
        @media (max-height: 1158px){#chat{height: 1038px;}}
        @media (max-height: 1157px){#chat{height: 1037px;}}
        @media (max-height: 1156px){#chat{height: 1036px;}}
        @media (max-height: 1155px){#chat{height: 1035px;}}
        @media (max-height: 1154px){#chat{height: 1034px;}}
        @media (max-height: 1153px){#chat{height: 1033px;}}
        @media (max-height: 1152px){#chat{height: 1032px;}}
        @media (max-height: 1151px){#chat{height: 1031px;}}
        @media (max-height: 1150px){#chat{height: 1030px;}}
        @media (max-height: 1149px){#chat{height: 1029px;}}
        @media (max-height: 1148px){#chat{height: 1028px;}}
        @media (max-height: 1147px){#chat{height: 1027px;}}
        @media (max-height: 1146px){#chat{height: 1026px;}}
        @media (max-height: 1145px){#chat{height: 1025px;}}
        @media (max-height: 1144px){#chat{height: 1024px;}}
        @media (max-height: 1143px){#chat{height: 1023px;}}
        @media (max-height: 1142px){#chat{height: 1022px;}}
        @media (max-height: 1141px){#chat{height: 1021px;}}
        @media (max-height: 1140px){#chat{height: 1020px;}}
        @media (max-height: 1139px){#chat{height: 1019px;}}
        @media (max-height: 1138px){#chat{height: 1018px;}}
        @media (max-height: 1137px){#chat{height: 1017px;}}
        @media (max-height: 1136px){#chat{height: 1016px;}}
        @media (max-height: 1135px){#chat{height: 1015px;}}
        @media (max-height: 1134px){#chat{height: 1014px;}}
        @media (max-height: 1133px){#chat{height: 1013px;}}
        @media (max-height: 1132px){#chat{height: 1012px;}}
        @media (max-height: 1131px){#chat{height: 1011px;}}
        @media (max-height: 1130px){#chat{height: 1010px;}}
        @media (max-height: 1129px){#chat{height: 1009px;}}
        @media (max-height: 1128px){#chat{height: 1008px;}}
        @media (max-height: 1127px){#chat{height: 1007px;}}
        @media (max-height: 1126px){#chat{height: 1006px;}}
        @media (max-height: 1125px){#chat{height: 1005px;}}
        @media (max-height: 1124px){#chat{height: 1004px;}}
        @media (max-height: 1123px){#chat{height: 1003px;}}
        @media (max-height: 1122px){#chat{height: 1002px;}}
        @media (max-height: 1121px){#chat{height: 1001px;}}
        @media (max-height: 1120px){#chat{height: 1000px;}}
        @media (max-height: 1119px){#chat{height: 999px;}}
        @media (max-height: 1118px){#chat{height: 998px;}}
        @media (max-height: 1117px){#chat{height: 997px;}}
        @media (max-height: 1116px){#chat{height: 996px;}}
        @media (max-height: 1115px){#chat{height: 995px;}}
        @media (max-height: 1114px){#chat{height: 994px;}}
        @media (max-height: 1113px){#chat{height: 993px;}}
        @media (max-height: 1112px){#chat{height: 992px;}}
        @media (max-height: 1111px){#chat{height: 991px;}}
        @media (max-height: 1110px){#chat{height: 990px;}}
        @media (max-height: 1109px){#chat{height: 989px;}}
        @media (max-height: 1108px){#chat{height: 988px;}}
        @media (max-height: 1107px){#chat{height: 987px;}}
        @media (max-height: 1106px){#chat{height: 986px;}}
        @media (max-height: 1105px){#chat{height: 985px;}}
        @media (max-height: 1104px){#chat{height: 984px;}}
        @media (max-height: 1103px){#chat{height: 983px;}}
        @media (max-height: 1102px){#chat{height: 982px;}}
        @media (max-height: 1101px){#chat{height: 981px;}}
        @media (max-height: 1100px){#chat{height: 980px;}}
        @media (max-height: 1099px){#chat{height: 979px;}}
        @media (max-height: 1098px){#chat{height: 978px;}}
        @media (max-height: 1097px){#chat{height: 977px;}}
        @media (max-height: 1096px){#chat{height: 976px;}}
        @media (max-height: 1095px){#chat{height: 975px;}}
        @media (max-height: 1094px){#chat{height: 974px;}}
        @media (max-height: 1093px){#chat{height: 973px;}}
        @media (max-height: 1092px){#chat{height: 972px;}}
        @media (max-height: 1091px){#chat{height: 971px;}}
        @media (max-height: 1090px){#chat{height: 970px;}}
        @media (max-height: 1089px){#chat{height: 969px;}}
        @media (max-height: 1088px){#chat{height: 968px;}}
        @media (max-height: 1087px){#chat{height: 967px;}}
        @media (max-height: 1086px){#chat{height: 966px;}}
        @media (max-height: 1085px){#chat{height: 965px;}}
        @media (max-height: 1084px){#chat{height: 964px;}}
        @media (max-height: 1083px){#chat{height: 963px;}}
        @media (max-height: 1082px){#chat{height: 962px;}}
        @media (max-height: 1081px){#chat{height: 961px;}}
        @media (max-height: 1080px){#chat{height: 960px;}}
        @media (max-height: 1079px){#chat{height: 959px;}}
        @media (max-height: 1078px){#chat{height: 958px;}}
        @media (max-height: 1077px){#chat{height: 957px;}}
        @media (max-height: 1076px){#chat{height: 956px;}}
        @media (max-height: 1075px){#chat{height: 955px;}}
        @media (max-height: 1074px){#chat{height: 954px;}}
        @media (max-height: 1073px){#chat{height: 953px;}}
        @media (max-height: 1072px){#chat{height: 952px;}}
        @media (max-height: 1071px){#chat{height: 951px;}}
        @media (max-height: 1070px){#chat{height: 950px;}}
        @media (max-height: 1069px){#chat{height: 949px;}}
        @media (max-height: 1068px){#chat{height: 948px;}}
        @media (max-height: 1067px){#chat{height: 947px;}}
        @media (max-height: 1066px){#chat{height: 946px;}}
        @media (max-height: 1065px){#chat{height: 945px;}}
        @media (max-height: 1064px){#chat{height: 944px;}}
        @media (max-height: 1063px){#chat{height: 943px;}}
        @media (max-height: 1062px){#chat{height: 942px;}}
        @media (max-height: 1061px){#chat{height: 941px;}}
        @media (max-height: 1060px){#chat{height: 940px;}}
        @media (max-height: 1059px){#chat{height: 939px;}}
        @media (max-height: 1058px){#chat{height: 938px;}}
        @media (max-height: 1057px){#chat{height: 937px;}}
        @media (max-height: 1056px){#chat{height: 936px;}}
        @media (max-height: 1055px){#chat{height: 935px;}}
        @media (max-height: 1054px){#chat{height: 934px;}}
        @media (max-height: 1053px){#chat{height: 933px;}}
        @media (max-height: 1052px){#chat{height: 932px;}}
        @media (max-height: 1051px){#chat{height: 931px;}}
        @media (max-height: 1050px){#chat{height: 930px;}}
        @media (max-height: 1049px){#chat{height: 929px;}}
        @media (max-height: 1048px){#chat{height: 928px;}}
        @media (max-height: 1047px){#chat{height: 927px;}}
        @media (max-height: 1046px){#chat{height: 926px;}}
        @media (max-height: 1045px){#chat{height: 925px;}}
        @media (max-height: 1044px){#chat{height: 924px;}}
        @media (max-height: 1043px){#chat{height: 923px;}}
        @media (max-height: 1042px){#chat{height: 922px;}}
        @media (max-height: 1041px){#chat{height: 921px;}}
        @media (max-height: 1040px){#chat{height: 920px;}}
        @media (max-height: 1039px){#chat{height: 919px;}}
        @media (max-height: 1038px){#chat{height: 918px;}}
        @media (max-height: 1037px){#chat{height: 917px;}}
        @media (max-height: 1036px){#chat{height: 916px;}}
        @media (max-height: 1035px){#chat{height: 915px;}}
        @media (max-height: 1034px){#chat{height: 914px;}}
        @media (max-height: 1033px){#chat{height: 913px;}}
        @media (max-height: 1032px){#chat{height: 912px;}}
        @media (max-height: 1031px){#chat{height: 911px;}}
        @media (max-height: 1030px){#chat{height: 910px;}}
        @media (max-height: 1029px){#chat{height: 909px;}}
        @media (max-height: 1028px){#chat{height: 908px;}}
        @media (max-height: 1027px){#chat{height: 907px;}}
        @media (max-height: 1026px){#chat{height: 906px;}}
        @media (max-height: 1025px){#chat{height: 905px;}}
        @media (max-height: 1024px){#chat{height: 904px;}}
        @media (max-height: 1023px){#chat{height: 903px;}}
        @media (max-height: 1022px){#chat{height: 902px;}}
        @media (max-height: 1021px){#chat{height: 901px;}}
        @media (max-height: 1020px){#chat{height: 900px;}}
        @media (max-height: 1019px){#chat{height: 899px;}}
        @media (max-height: 1018px){#chat{height: 898px;}}
        @media (max-height: 1017px){#chat{height: 897px;}}
        @media (max-height: 1016px){#chat{height: 896px;}}
        @media (max-height: 1015px){#chat{height: 895px;}}
        @media (max-height: 1014px){#chat{height: 894px;}}
        @media (max-height: 1013px){#chat{height: 893px;}}
        @media (max-height: 1012px){#chat{height: 892px;}}
        @media (max-height: 1011px){#chat{height: 891px;}}
        @media (max-height: 1010px){#chat{height: 890px;}}
        @media (max-height: 1009px){#chat{height: 889px;}}
        @media (max-height: 1008px){#chat{height: 888px;}}
        @media (max-height: 1007px){#chat{height: 887px;}}
        @media (max-height: 1006px){#chat{height: 886px;}}
        @media (max-height: 1005px){#chat{height: 885px;}}
        @media (max-height: 1004px){#chat{height: 884px;}}
        @media (max-height: 1003px){#chat{height: 883px;}}
        @media (max-height: 1002px){#chat{height: 882px;}}
        @media (max-height: 1001px){#chat{height: 881px;}}
        @media (max-height: 1000px){#chat{height: 880px;}}
        @media (max-height: 999px){#chat{height: 879px;}}
        @media (max-height: 998px){#chat{height: 878px;}}
        @media (max-height: 997px){#chat{height: 877px;}}
        @media (max-height: 996px){#chat{height: 876px;}}
        @media (max-height: 995px){#chat{height: 875px;}}
        @media (max-height: 994px){#chat{height: 874px;}}
        @media (max-height: 993px){#chat{height: 873px;}}
        @media (max-height: 992px){#chat{height: 872px;}}
        @media (max-height: 991px){#chat{height: 871px;}}
        @media (max-height: 990px){#chat{height: 870px;}}
        @media (max-height: 989px){#chat{height: 869px;}}
        @media (max-height: 988px){#chat{height: 868px;}}
        @media (max-height: 987px){#chat{height: 867px;}}
        @media (max-height: 986px){#chat{height: 866px;}}
        @media (max-height: 985px){#chat{height: 865px;}}
        @media (max-height: 984px){#chat{height: 864px;}}
        @media (max-height: 983px){#chat{height: 863px;}}
        @media (max-height: 982px){#chat{height: 862px;}}
        @media (max-height: 981px){#chat{height: 861px;}}
        @media (max-height: 980px){#chat{height: 860px;}}
        @media (max-height: 979px){#chat{height: 859px;}}
        @media (max-height: 978px){#chat{height: 858px;}}
        @media (max-height: 977px){#chat{height: 857px;}}
        @media (max-height: 976px){#chat{height: 856px;}}
        @media (max-height: 975px){#chat{height: 855px;}}
        @media (max-height: 974px){#chat{height: 854px;}}
        @media (max-height: 973px){#chat{height: 853px;}}
        @media (max-height: 972px){#chat{height: 852px;}}
        @media (max-height: 971px){#chat{height: 851px;}}
        @media (max-height: 970px){#chat{height: 850px;}}
        @media (max-height: 969px){#chat{height: 849px;}}
        @media (max-height: 968px){#chat{height: 848px;}}
        @media (max-height: 967px){#chat{height: 847px;}}
        @media (max-height: 966px){#chat{height: 846px;}}
        @media (max-height: 965px){#chat{height: 845px;}}
        @media (max-height: 964px){#chat{height: 844px;}}
        @media (max-height: 963px){#chat{height: 843px;}}
        @media (max-height: 962px){#chat{height: 842px;}}
        @media (max-height: 961px){#chat{height: 841px;}}
        @media (max-height: 960px){#chat{height: 840px;}}
        @media (max-height: 959px){#chat{height: 839px;}}
        @media (max-height: 958px){#chat{height: 838px;}}
        @media (max-height: 957px){#chat{height: 837px;}}
        @media (max-height: 956px){#chat{height: 836px;}}
        @media (max-height: 955px){#chat{height: 835px;}}
        @media (max-height: 954px){#chat{height: 834px;}}
        @media (max-height: 953px){#chat{height: 833px;}}
        @media (max-height: 952px){#chat{height: 832px;}}
        @media (max-height: 951px){#chat{height: 831px;}}
        @media (max-height: 950px){#chat{height: 830px;}}
        @media (max-height: 949px){#chat{height: 829px;}}
        @media (max-height: 948px){#chat{height: 828px;}}
        @media (max-height: 947px){#chat{height: 827px;}}
        @media (max-height: 946px){#chat{height: 826px;}}
        @media (max-height: 945px){#chat{height: 825px;}}
        @media (max-height: 944px){#chat{height: 824px;}}
        @media (max-height: 943px){#chat{height: 823px;}}
        @media (max-height: 942px){#chat{height: 822px;}}
        @media (max-height: 941px){#chat{height: 821px;}}
        @media (max-height: 940px){#chat{height: 820px;}}
        @media (max-height: 939px){#chat{height: 819px;}}
        @media (max-height: 938px){#chat{height: 818px;}}
        @media (max-height: 937px){#chat{height: 817px;}}
        @media (max-height: 936px){#chat{height: 816px;}}
        @media (max-height: 935px){#chat{height: 815px;}}
        @media (max-height: 934px){#chat{height: 814px;}}
        @media (max-height: 933px){#chat{height: 813px;}}
        @media (max-height: 932px){#chat{height: 812px;}}
        @media (max-height: 931px){#chat{height: 811px;}}
        @media (max-height: 930px){#chat{height: 810px;}}
        @media (max-height: 929px){#chat{height: 809px;}}
        @media (max-height: 928px){#chat{height: 808px;}}
        @media (max-height: 927px){#chat{height: 807px;}}
        @media (max-height: 926px){#chat{height: 806px;}}
        @media (max-height: 925px){#chat{height: 805px;}}
        @media (max-height: 924px){#chat{height: 804px;}}
        @media (max-height: 923px){#chat{height: 803px;}}
        @media (max-height: 922px){#chat{height: 802px;}}
        @media (max-height: 921px){#chat{height: 801px;}}
        @media (max-height: 920px){#chat{height: 800px;}}
        @media (max-height: 919px){#chat{height: 799px;}}
        @media (max-height: 918px){#chat{height: 798px;}}
        @media (max-height: 917px){#chat{height: 797px;}}
        @media (max-height: 916px){#chat{height: 796px;}}
        @media (max-height: 915px){#chat{height: 795px;}}
        @media (max-height: 914px){#chat{height: 794px;}}
        @media (max-height: 913px){#chat{height: 793px;}}
        @media (max-height: 912px){#chat{height: 792px;}}
        @media (max-height: 911px){#chat{height: 791px;}}
        @media (max-height: 910px){#chat{height: 790px;}}
        @media (max-height: 909px){#chat{height: 789px;}}
        @media (max-height: 908px){#chat{height: 788px;}}
        @media (max-height: 907px){#chat{height: 787px;}}
        @media (max-height: 906px){#chat{height: 786px;}}
        @media (max-height: 905px){#chat{height: 785px;}}
        @media (max-height: 904px){#chat{height: 784px;}}
        @media (max-height: 903px){#chat{height: 783px;}}
        @media (max-height: 902px){#chat{height: 782px;}}
        @media (max-height: 901px){#chat{height: 781px;}}
        @media (max-height: 900px){#chat{height: 780px;}}
        @media (max-height: 899px){#chat{height: 779px;}}
        @media (max-height: 898px){#chat{height: 778px;}}
        @media (max-height: 897px){#chat{height: 777px;}}
        @media (max-height: 896px){#chat{height: 776px;}}
        @media (max-height: 895px){#chat{height: 775px;}}
        @media (max-height: 894px){#chat{height: 774px;}}
        @media (max-height: 893px){#chat{height: 773px;}}
        @media (max-height: 892px){#chat{height: 772px;}}
        @media (max-height: 891px){#chat{height: 771px;}}
        @media (max-height: 890px){#chat{height: 770px;}}
        @media (max-height: 889px){#chat{height: 769px;}}
        @media (max-height: 888px){#chat{height: 768px;}}
        @media (max-height: 887px){#chat{height: 767px;}}
        @media (max-height: 886px){#chat{height: 766px;}}
        @media (max-height: 885px){#chat{height: 765px;}}
        @media (max-height: 884px){#chat{height: 764px;}}
        @media (max-height: 883px){#chat{height: 763px;}}
        @media (max-height: 882px){#chat{height: 762px;}}
        @media (max-height: 881px){#chat{height: 761px;}}
        @media (max-height: 880px){#chat{height: 760px;}}
        @media (max-height: 879px){#chat{height: 759px;}}
        @media (max-height: 878px){#chat{height: 758px;}}
        @media (max-height: 877px){#chat{height: 757px;}}
        @media (max-height: 876px){#chat{height: 756px;}}
        @media (max-height: 875px){#chat{height: 755px;}}
        @media (max-height: 874px){#chat{height: 754px;}}
        @media (max-height: 873px){#chat{height: 753px;}}
        @media (max-height: 872px){#chat{height: 752px;}}
        @media (max-height: 871px){#chat{height: 751px;}}
        @media (max-height: 870px){#chat{height: 750px;}}
        @media (max-height: 869px){#chat{height: 749px;}}
        @media (max-height: 868px){#chat{height: 748px;}}
        @media (max-height: 867px){#chat{height: 747px;}}
        @media (max-height: 866px){#chat{height: 746px;}}
        @media (max-height: 865px){#chat{height: 745px;}}
        @media (max-height: 864px){#chat{height: 744px;}}
        @media (max-height: 863px){#chat{height: 743px;}}
        @media (max-height: 862px){#chat{height: 742px;}}
        @media (max-height: 861px){#chat{height: 741px;}}
        @media (max-height: 860px){#chat{height: 740px;}}
        @media (max-height: 859px){#chat{height: 739px;}}
        @media (max-height: 858px){#chat{height: 738px;}}
        @media (max-height: 857px){#chat{height: 737px;}}
        @media (max-height: 856px){#chat{height: 736px;}}
        @media (max-height: 855px){#chat{height: 735px;}}
        @media (max-height: 854px){#chat{height: 734px;}}
        @media (max-height: 853px){#chat{height: 733px;}}
        @media (max-height: 852px){#chat{height: 732px;}}
        @media (max-height: 851px){#chat{height: 731px;}}
        @media (max-height: 850px){#chat{height: 730px;}}
        @media (max-height: 849px){#chat{height: 729px;}}
        @media (max-height: 848px){#chat{height: 728px;}}
        @media (max-height: 847px){#chat{height: 727px;}}
        @media (max-height: 846px){#chat{height: 726px;}}
        @media (max-height: 845px){#chat{height: 725px;}}
        @media (max-height: 844px){#chat{height: 724px;}}
        @media (max-height: 843px){#chat{height: 723px;}}
        @media (max-height: 842px){#chat{height: 722px;}}
        @media (max-height: 841px){#chat{height: 721px;}}
        @media (max-height: 840px){#chat{height: 720px;}}
        @media (max-height: 839px){#chat{height: 719px;}}
        @media (max-height: 838px){#chat{height: 718px;}}
        @media (max-height: 837px){#chat{height: 717px;}}
        @media (max-height: 836px){#chat{height: 716px;}}
        @media (max-height: 835px){#chat{height: 715px;}}
        @media (max-height: 834px){#chat{height: 714px;}}
        @media (max-height: 833px){#chat{height: 713px;}}
        @media (max-height: 832px){#chat{height: 712px;}}
        @media (max-height: 831px){#chat{height: 711px;}}
        @media (max-height: 830px){#chat{height: 710px;}}
        @media (max-height: 829px){#chat{height: 709px;}}
        @media (max-height: 828px){#chat{height: 708px;}}
        @media (max-height: 827px){#chat{height: 707px;}}
        @media (max-height: 826px){#chat{height: 706px;}}
        @media (max-height: 825px){#chat{height: 705px;}}
        @media (max-height: 824px){#chat{height: 704px;}}
        @media (max-height: 823px){#chat{height: 703px;}}
        @media (max-height: 822px){#chat{height: 702px;}}
        @media (max-height: 821px){#chat{height: 701px;}}
        @media (max-height: 820px){#chat{height: 700px;}}
        @media (max-height: 819px){#chat{height: 699px;}}
        @media (max-height: 818px){#chat{height: 698px;}}
        @media (max-height: 817px){#chat{height: 697px;}}
        @media (max-height: 816px){#chat{height: 696px;}}
        @media (max-height: 815px){#chat{height: 695px;}}
        @media (max-height: 814px){#chat{height: 694px;}}
        @media (max-height: 813px){#chat{height: 693px;}}
        @media (max-height: 812px){#chat{height: 692px;}}
        @media (max-height: 811px){#chat{height: 691px;}}
        @media (max-height: 810px){#chat{height: 690px;}}
        @media (max-height: 809px){#chat{height: 689px;}}
        @media (max-height: 808px){#chat{height: 688px;}}
        @media (max-height: 807px){#chat{height: 687px;}}
        @media (max-height: 806px){#chat{height: 686px;}}
        @media (max-height: 805px){#chat{height: 685px;}}
        @media (max-height: 804px){#chat{height: 684px;}}
        @media (max-height: 803px){#chat{height: 683px;}}
        @media (max-height: 802px){#chat{height: 682px;}}
        @media (max-height: 801px){#chat{height: 681px;}}
        @media (max-height: 800px){#chat{height: 680px;}}
        @media (max-height: 799px){#chat{height: 679px;}}
        @media (max-height: 798px){#chat{height: 678px;}}
        @media (max-height: 797px){#chat{height: 677px;}}
        @media (max-height: 796px){#chat{height: 676px;}}
        @media (max-height: 795px){#chat{height: 675px;}}
        @media (max-height: 794px){#chat{height: 674px;}}
        @media (max-height: 793px){#chat{height: 673px;}}
        @media (max-height: 792px){#chat{height: 672px;}}
        @media (max-height: 791px){#chat{height: 671px;}}
        @media (max-height: 790px){#chat{height: 670px;}}
        @media (max-height: 789px){#chat{height: 669px;}}
        @media (max-height: 788px){#chat{height: 668px;}}
        @media (max-height: 787px){#chat{height: 667px;}}
        @media (max-height: 786px){#chat{height: 666px;}}
        @media (max-height: 785px){#chat{height: 665px;}}
        @media (max-height: 784px){#chat{height: 664px;}}
        @media (max-height: 783px){#chat{height: 663px;}}
        @media (max-height: 782px){#chat{height: 662px;}}
        @media (max-height: 781px){#chat{height: 661px;}}
        @media (max-height: 780px){#chat{height: 660px;}}
        @media (max-height: 779px){#chat{height: 659px;}}
        @media (max-height: 778px){#chat{height: 658px;}}
        @media (max-height: 777px){#chat{height: 657px;}}
        @media (max-height: 776px){#chat{height: 656px;}}
        @media (max-height: 775px){#chat{height: 655px;}}
        @media (max-height: 774px){#chat{height: 654px;}}
        @media (max-height: 773px){#chat{height: 653px;}}
        @media (max-height: 772px){#chat{height: 652px;}}
        @media (max-height: 771px){#chat{height: 651px;}}
        @media (max-height: 770px){#chat{height: 650px;}}
        @media (max-height: 769px){#chat{height: 649px;}}
        @media (max-height: 768px){#chat{height: 648px;}}
        @media (max-height: 767px){#chat{height: 647px;}}
        @media (max-height: 766px){#chat{height: 646px;}}
        @media (max-height: 765px){#chat{height: 645px;}}
        @media (max-height: 764px){#chat{height: 644px;}}
        @media (max-height: 763px){#chat{height: 643px;}}
        @media (max-height: 762px){#chat{height: 642px;}}
        @media (max-height: 761px){#chat{height: 641px;}}
        @media (max-height: 760px){#chat{height: 640px;}}
        @media (max-height: 759px){#chat{height: 639px;}}
        @media (max-height: 758px){#chat{height: 638px;}}
        @media (max-height: 757px){#chat{height: 637px;}}
        @media (max-height: 756px){#chat{height: 636px;}}
        @media (max-height: 755px){#chat{height: 635px;}}
        @media (max-height: 754px){#chat{height: 634px;}}
        @media (max-height: 753px){#chat{height: 633px;}}
        @media (max-height: 752px){#chat{height: 632px;}}
        @media (max-height: 751px){#chat{height: 631px;}}
        @media (max-height: 750px){#chat{height: 630px;}}
        @media (max-height: 749px){#chat{height: 629px;}}
        @media (max-height: 748px){#chat{height: 628px;}}
        @media (max-height: 747px){#chat{height: 627px;}}
        @media (max-height: 746px){#chat{height: 626px;}}
        @media (max-height: 745px){#chat{height: 625px;}}
        @media (max-height: 744px){#chat{height: 624px;}}
        @media (max-height: 743px){#chat{height: 623px;}}
        @media (max-height: 742px){#chat{height: 622px;}}
        @media (max-height: 741px){#chat{height: 621px;}}
        @media (max-height: 740px){#chat{height: 620px;}}
        @media (max-height: 739px){#chat{height: 619px;}}
        @media (max-height: 738px){#chat{height: 618px;}}
        @media (max-height: 737px){#chat{height: 617px;}}
        @media (max-height: 736px){#chat{height: 616px;}}
        @media (max-height: 735px){#chat{height: 615px;}}
        @media (max-height: 734px){#chat{height: 614px;}}
        @media (max-height: 733px){#chat{height: 613px;}}
        @media (max-height: 732px){#chat{height: 612px;}}
        @media (max-height: 731px){#chat{height: 611px;}}
        @media (max-height: 730px){#chat{height: 610px;}}
        @media (max-height: 729px){#chat{height: 609px;}}
        @media (max-height: 728px){#chat{height: 608px;}}
        @media (max-height: 727px){#chat{height: 607px;}}
        @media (max-height: 726px){#chat{height: 606px;}}
        @media (max-height: 725px){#chat{height: 605px;}}
        @media (max-height: 724px){#chat{height: 604px;}}
        @media (max-height: 723px){#chat{height: 603px;}}
        @media (max-height: 722px){#chat{height: 602px;}}
        @media (max-height: 721px){#chat{height: 601px;}}
        @media (max-height: 720px){#chat{height: 600px;}}
        @media (max-height: 719px){#chat{height: 599px;}}
        @media (max-height: 718px){#chat{height: 598px;}}
        @media (max-height: 717px){#chat{height: 597px;}}
        @media (max-height: 716px){#chat{height: 596px;}}
        @media (max-height: 715px){#chat{height: 595px;}}
        @media (max-height: 714px){#chat{height: 594px;}}
        @media (max-height: 713px){#chat{height: 593px;}}
        @media (max-height: 712px){#chat{height: 592px;}}
        @media (max-height: 711px){#chat{height: 591px;}}
        @media (max-height: 710px){#chat{height: 590px;}}
        @media (max-height: 709px){#chat{height: 589px;}}
        @media (max-height: 708px){#chat{height: 588px;}}
        @media (max-height: 707px){#chat{height: 587px;}}
        @media (max-height: 706px){#chat{height: 586px;}}
        @media (max-height: 705px){#chat{height: 585px;}}
        @media (max-height: 704px){#chat{height: 584px;}}
        @media (max-height: 703px){#chat{height: 583px;}}
        @media (max-height: 702px){#chat{height: 582px;}}
        @media (max-height: 701px){#chat{height: 581px;}}
        @media (max-height: 700px){#chat{height: 580px;}}
        @media (max-height: 699px){#chat{height: 579px;}}
        @media (max-height: 698px){#chat{height: 578px;}}
        @media (max-height: 697px){#chat{height: 577px;}}
        @media (max-height: 696px){#chat{height: 576px;}}
        @media (max-height: 695px){#chat{height: 575px;}}
        @media (max-height: 694px){#chat{height: 574px;}}
        @media (max-height: 693px){#chat{height: 573px;}}
        @media (max-height: 692px){#chat{height: 572px;}}
        @media (max-height: 691px){#chat{height: 571px;}}
        @media (max-height: 690px){#chat{height: 570px;}}
        @media (max-height: 689px){#chat{height: 569px;}}
        @media (max-height: 688px){#chat{height: 568px;}}
        @media (max-height: 687px){#chat{height: 567px;}}
        @media (max-height: 686px){#chat{height: 566px;}}
        @media (max-height: 685px){#chat{height: 565px;}}
        @media (max-height: 684px){#chat{height: 564px;}}
        @media (max-height: 683px){#chat{height: 563px;}}
        @media (max-height: 682px){#chat{height: 562px;}}
        @media (max-height: 681px){#chat{height: 561px;}}
        @media (max-height: 680px){#chat{height: 560px;}}
        @media (max-height: 679px){#chat{height: 559px;}}
        @media (max-height: 678px){#chat{height: 558px;}}
        @media (max-height: 677px){#chat{height: 557px;}}
        @media (max-height: 676px){#chat{height: 556px;}}
        @media (max-height: 675px){#chat{height: 555px;}}
        @media (max-height: 674px){#chat{height: 554px;}}
        @media (max-height: 673px){#chat{height: 553px;}}
        @media (max-height: 672px){#chat{height: 552px;}}
        @media (max-height: 671px){#chat{height: 551px;}}
        @media (max-height: 670px){#chat{height: 550px;}}
        @media (max-height: 669px){#chat{height: 549px;}}
        @media (max-height: 668px){#chat{height: 548px;}}
        @media (max-height: 667px){#chat{height: 547px;}}
        @media (max-height: 666px){#chat{height: 546px;}}
        @media (max-height: 665px){#chat{height: 545px;}}
        @media (max-height: 664px){#chat{height: 544px;}}
        @media (max-height: 663px){#chat{height: 543px;}}
        @media (max-height: 662px){#chat{height: 542px;}}
        @media (max-height: 661px){#chat{height: 541px;}}
        @media (max-height: 660px){#chat{height: 540px;}}
        @media (max-height: 659px){#chat{height: 539px;}}
        @media (max-height: 658px){#chat{height: 538px;}}
        @media (max-height: 657px){#chat{height: 537px;}}
        @media (max-height: 656px){#chat{height: 536px;}}
        @media (max-height: 655px){#chat{height: 535px;}}
        @media (max-height: 654px){#chat{height: 534px;}}
        @media (max-height: 653px){#chat{height: 533px;}}
        @media (max-height: 652px){#chat{height: 532px;}}
        @media (max-height: 651px){#chat{height: 531px;}}
        @media (max-height: 650px){#chat{height: 530px;}}
        @media (max-height: 649px){#chat{height: 529px;}}
        @media (max-height: 648px){#chat{height: 528px;}}
        @media (max-height: 647px){#chat{height: 527px;}}
        @media (max-height: 646px){#chat{height: 526px;}}
        @media (max-height: 645px){#chat{height: 525px;}}
        @media (max-height: 644px){#chat{height: 524px;}}
        @media (max-height: 643px){#chat{height: 523px;}}
        @media (max-height: 642px){#chat{height: 522px;}}
        @media (max-height: 641px){#chat{height: 521px;}}
        @media (max-height: 640px){#chat{height: 520px;}}
        @media (max-height: 639px){#chat{height: 519px;}}
        @media (max-height: 638px){#chat{height: 518px;}}
        @media (max-height: 637px){#chat{height: 517px;}}
        @media (max-height: 636px){#chat{height: 516px;}}
        @media (max-height: 635px){#chat{height: 515px;}}
        @media (max-height: 634px){#chat{height: 514px;}}
        @media (max-height: 633px){#chat{height: 513px;}}
        @media (max-height: 632px){#chat{height: 512px;}}
        @media (max-height: 631px){#chat{height: 511px;}}
        @media (max-height: 630px){#chat{height: 510px;}}
        @media (max-height: 629px){#chat{height: 509px;}}
        @media (max-height: 628px){#chat{height: 508px;}}
        @media (max-height: 627px){#chat{height: 507px;}}
        @media (max-height: 626px){#chat{height: 506px;}}
        @media (max-height: 625px){#chat{height: 505px;}}
        @media (max-height: 624px){#chat{height: 504px;}}
        @media (max-height: 623px){#chat{height: 503px;}}
        @media (max-height: 622px){#chat{height: 502px;}}
        @media (max-height: 621px){#chat{height: 501px;}}
        @media (max-height: 620px){#chat{height: 500px;}}
        @media (max-height: 619px){#chat{height: 499px;}}
        @media (max-height: 618px){#chat{height: 498px;}}
        @media (max-height: 617px){#chat{height: 497px;}}
        @media (max-height: 616px){#chat{height: 496px;}}
        @media (max-height: 615px){#chat{height: 495px;}}
        @media (max-height: 614px){#chat{height: 494px;}}
        @media (max-height: 613px){#chat{height: 493px;}}
        @media (max-height: 612px){#chat{height: 492px;}}
        @media (max-height: 611px){#chat{height: 491px;}}
        @media (max-height: 610px){#chat{height: 490px;}}
        @media (max-height: 609px){#chat{height: 489px;}}
        @media (max-height: 608px){#chat{height: 488px;}}
        @media (max-height: 607px){#chat{height: 487px;}}
        @media (max-height: 606px){#chat{height: 486px;}}
        @media (max-height: 605px){#chat{height: 485px;}}
        @media (max-height: 604px){#chat{height: 484px;}}
        @media (max-height: 603px){#chat{height: 483px;}}
        @media (max-height: 602px){#chat{height: 482px;}}
        @media (max-height: 601px){#chat{height: 481px;}}
        @media (max-height: 600px){#chat{height: 480px;}}
        @media (max-height: 599px){#chat{height: 479px;}}
        @media (max-height: 598px){#chat{height: 478px;}}
        @media (max-height: 597px){#chat{height: 477px;}}
        @media (max-height: 596px){#chat{height: 476px;}}
        @media (max-height: 595px){#chat{height: 475px;}}
        @media (max-height: 594px){#chat{height: 474px;}}
        @media (max-height: 593px){#chat{height: 473px;}}
        @media (max-height: 592px){#chat{height: 472px;}}
        @media (max-height: 591px){#chat{height: 471px;}}
        @media (max-height: 590px){#chat{height: 470px;}}
        @media (max-height: 589px){#chat{height: 469px;}}
        @media (max-height: 588px){#chat{height: 468px;}}
        @media (max-height: 587px){#chat{height: 467px;}}
        @media (max-height: 586px){#chat{height: 466px;}}
        @media (max-height: 585px){#chat{height: 465px;}}
        @media (max-height: 584px){#chat{height: 464px;}}
        @media (max-height: 583px){#chat{height: 463px;}}
        @media (max-height: 582px){#chat{height: 462px;}}
        @media (max-height: 581px){#chat{height: 461px;}}
        @media (max-height: 580px){#chat{height: 460px;}}
        @media (max-height: 579px){#chat{height: 459px;}}
        @media (max-height: 578px){#chat{height: 458px;}}
        @media (max-height: 577px){#chat{height: 457px;}}
        @media (max-height: 576px){#chat{height: 456px;}}
        @media (max-height: 575px){#chat{height: 455px;}}
        @media (max-height: 574px){#chat{height: 454px;}}
        @media (max-height: 573px){#chat{height: 453px;}}
        @media (max-height: 572px){#chat{height: 452px;}}
        @media (max-height: 571px){#chat{height: 451px;}}
        @media (max-height: 570px){#chat{height: 450px;}}
        @media (max-height: 569px){#chat{height: 449px;}}
        @media (max-height: 568px){#chat{height: 448px;}}
        @media (max-height: 567px){#chat{height: 447px;}}
        @media (max-height: 566px){#chat{height: 446px;}}
        @media (max-height: 565px){#chat{height: 445px;}}
        @media (max-height: 564px){#chat{height: 444px;}}
        @media (max-height: 563px){#chat{height: 443px;}}
        @media (max-height: 562px){#chat{height: 442px;}}
        @media (max-height: 561px){#chat{height: 441px;}}
        @media (max-height: 560px){#chat{height: 440px;}}
        @media (max-height: 559px){#chat{height: 439px;}}
        @media (max-height: 558px){#chat{height: 438px;}}
        @media (max-height: 557px){#chat{height: 437px;}}
        @media (max-height: 556px){#chat{height: 436px;}}
        @media (max-height: 555px){#chat{height: 435px;}}
        @media (max-height: 554px){#chat{height: 434px;}}
        @media (max-height: 553px){#chat{height: 433px;}}
        @media (max-height: 552px){#chat{height: 432px;}}
        @media (max-height: 551px){#chat{height: 431px;}}
        @media (max-height: 550px){#chat{height: 430px;}}
        @media (max-height: 549px){#chat{height: 429px;}}
        @media (max-height: 548px){#chat{height: 428px;}}
        @media (max-height: 547px){#chat{height: 427px;}}
        @media (max-height: 546px){#chat{height: 426px;}}
        @media (max-height: 545px){#chat{height: 425px;}}
        @media (max-height: 544px){#chat{height: 424px;}}
        @media (max-height: 543px){#chat{height: 423px;}}
        @media (max-height: 542px){#chat{height: 422px;}}
        @media (max-height: 541px){#chat{height: 421px;}}
        @media (max-height: 540px){#chat{height: 420px;}}
        @media (max-height: 539px){#chat{height: 419px;}}
        @media (max-height: 538px){#chat{height: 418px;}}
        @media (max-height: 537px){#chat{height: 417px;}}
        @media (max-height: 536px){#chat{height: 416px;}}
        @media (max-height: 535px){#chat{height: 415px;}}
        @media (max-height: 534px){#chat{height: 414px;}}
        @media (max-height: 533px){#chat{height: 413px;}}
        @media (max-height: 532px){#chat{height: 412px;}}
        @media (max-height: 531px){#chat{height: 411px;}}
        @media (max-height: 530px){#chat{height: 410px;}}
        @media (max-height: 529px){#chat{height: 409px;}}
        @media (max-height: 528px){#chat{height: 408px;}}
        @media (max-height: 527px){#chat{height: 407px;}}
        @media (max-height: 526px){#chat{height: 406px;}}
        @media (max-height: 525px){#chat{height: 405px;}}
        @media (max-height: 524px){#chat{height: 404px;}}
        @media (max-height: 523px){#chat{height: 403px;}}
        @media (max-height: 522px){#chat{height: 402px;}}
        @media (max-height: 521px){#chat{height: 401px;}}
        @media (max-height: 520px){#chat{height: 400px;}}
        @media (max-height: 519px){#chat{height: 399px;}}
        @media (max-height: 518px){#chat{height: 398px;}}
        @media (max-height: 517px){#chat{height: 397px;}}
        @media (max-height: 516px){#chat{height: 396px;}}
        @media (max-height: 515px){#chat{height: 395px;}}
        @media (max-height: 514px){#chat{height: 394px;}}
        @media (max-height: 513px){#chat{height: 393px;}}
        @media (max-height: 512px){#chat{height: 392px;}}
        @media (max-height: 511px){#chat{height: 391px;}}
        @media (max-height: 510px){#chat{height: 390px;}}
        @media (max-height: 509px){#chat{height: 389px;}}
        @media (max-height: 508px){#chat{height: 388px;}}
        @media (max-height: 507px){#chat{height: 387px;}}
        @media (max-height: 506px){#chat{height: 386px;}}
        @media (max-height: 505px){#chat{height: 385px;}}
        @media (max-height: 504px){#chat{height: 384px;}}
        @media (max-height: 503px){#chat{height: 383px;}}
        @media (max-height: 502px){#chat{height: 382px;}}
        @media (max-height: 501px){#chat{height: 381px;}}
        @media (max-height: 500px){#chat{height: 380px;}}
        @media (max-height: 499px){#chat{height: 379px;}}
        @media (max-height: 498px){#chat{height: 378px;}}
        @media (max-height: 497px){#chat{height: 377px;}}
        @media (max-height: 496px){#chat{height: 376px;}}
        @media (max-height: 495px){#chat{height: 375px;}}
        @media (max-height: 494px){#chat{height: 374px;}}
        @media (max-height: 493px){#chat{height: 373px;}}
        @media (max-height: 492px){#chat{height: 372px;}}
        @media (max-height: 491px){#chat{height: 371px;}}
        @media (max-height: 490px){#chat{height: 370px;}}
        @media (max-height: 489px){#chat{height: 369px;}}
        @media (max-height: 488px){#chat{height: 368px;}}
        @media (max-height: 487px){#chat{height: 367px;}}
        @media (max-height: 486px){#chat{height: 366px;}}
        @media (max-height: 485px){#chat{height: 365px;}}
        @media (max-height: 484px){#chat{height: 364px;}}
        @media (max-height: 483px){#chat{height: 363px;}}
        @media (max-height: 482px){#chat{height: 362px;}}
        @media (max-height: 481px){#chat{height: 361px;}}
        @media (max-height: 480px){#chat{height: 360px;}}
        @media (max-height: 479px){#chat{height: 359px;}}
        @media (max-height: 478px){#chat{height: 358px;}}
        @media (max-height: 477px){#chat{height: 357px;}}
        @media (max-height: 476px){#chat{height: 356px;}}
        @media (max-height: 475px){#chat{height: 355px;}}
        @media (max-height: 474px){#chat{height: 354px;}}
        @media (max-height: 473px){#chat{height: 353px;}}
        @media (max-height: 472px){#chat{height: 352px;}}
        @media (max-height: 471px){#chat{height: 351px;}}
        @media (max-height: 470px){#chat{height: 350px;}}
        @media (max-height: 469px){#chat{height: 349px;}}
        @media (max-height: 468px){#chat{height: 348px;}}
        @media (max-height: 467px){#chat{height: 347px;}}
        @media (max-height: 466px){#chat{height: 346px;}}
        @media (max-height: 465px){#chat{height: 345px;}}
        @media (max-height: 464px){#chat{height: 344px;}}
        @media (max-height: 463px){#chat{height: 343px;}}
        @media (max-height: 462px){#chat{height: 342px;}}
        @media (max-height: 461px){#chat{height: 341px;}}
        @media (max-height: 460px){#chat{height: 340px;}}
        @media (max-height: 459px){#chat{height: 339px;}}
        @media (max-height: 458px){#chat{height: 338px;}}
        @media (max-height: 457px){#chat{height: 337px;}}
        @media (max-height: 456px){#chat{height: 336px;}}
        @media (max-height: 455px){#chat{height: 335px;}}
        @media (max-height: 454px){#chat{height: 334px;}}
        @media (max-height: 453px){#chat{height: 333px;}}
        @media (max-height: 452px){#chat{height: 332px;}}
        @media (max-height: 451px){#chat{height: 331px;}}
        @media (max-height: 450px){#chat{height: 330px;}}
        @media (max-height: 449px){#chat{height: 329px;}}
        @media (max-height: 448px){#chat{height: 328px;}}
        @media (max-height: 447px){#chat{height: 327px;}}
        @media (max-height: 446px){#chat{height: 326px;}}
        @media (max-height: 445px){#chat{height: 325px;}}
        @media (max-height: 444px){#chat{height: 324px;}}
        @media (max-height: 443px){#chat{height: 323px;}}
        @media (max-height: 442px){#chat{height: 322px;}}
        @media (max-height: 441px){#chat{height: 321px;}}
        @media (max-height: 440px){#chat{height: 320px;}}
        @media (max-height: 439px){#chat{height: 319px;}}
        @media (max-height: 438px){#chat{height: 318px;}}
        @media (max-height: 437px){#chat{height: 317px;}}
        @media (max-height: 436px){#chat{height: 316px;}}
        @media (max-height: 435px){#chat{height: 315px;}}
        @media (max-height: 434px){#chat{height: 314px;}}
        @media (max-height: 433px){#chat{height: 313px;}}
        @media (max-height: 432px){#chat{height: 312px;}}
        @media (max-height: 431px){#chat{height: 311px;}}
        @media (max-height: 430px){#chat{height: 310px;}}
        @media (max-height: 429px){#chat{height: 309px;}}
        @media (max-height: 428px){#chat{height: 308px;}}
        @media (max-height: 427px){#chat{height: 307px;}}
        @media (max-height: 426px){#chat{height: 306px;}}
        @media (max-height: 425px){#chat{height: 305px;}}
        @media (max-height: 424px){#chat{height: 304px;}}
        @media (max-height: 423px){#chat{height: 303px;}}
        @media (max-height: 422px){#chat{height: 302px;}}
        @media (max-height: 421px){#chat{height: 301px;}}
        @media (max-height: 420px){#chat{height: 300px;}}
        @media (max-height: 419px){#chat{height: 299px;}}
        @media (max-height: 418px){#chat{height: 298px;}}
        @media (max-height: 417px){#chat{height: 297px;}}
        @media (max-height: 416px){#chat{height: 296px;}}
        @media (max-height: 415px){#chat{height: 295px;}}
        @media (max-height: 414px){#chat{height: 294px;}}
        @media (max-height: 413px){#chat{height: 293px;}}
        @media (max-height: 412px){#chat{height: 292px;}}
        @media (max-height: 411px){#chat{height: 291px;}}
        @media (max-height: 410px){#chat{height: 290px;}}
        @media (max-height: 409px){#chat{height: 289px;}}
        @media (max-height: 408px){#chat{height: 288px;}}
        @media (max-height: 407px){#chat{height: 287px;}}
        @media (max-height: 406px){#chat{height: 286px;}}
        @media (max-height: 405px){#chat{height: 285px;}}
        @media (max-height: 404px){#chat{height: 284px;}}
        @media (max-height: 403px){#chat{height: 283px;}}
        @media (max-height: 402px){#chat{height: 282px;}}
        @media (max-height: 401px){#chat{height: 281px;}}
        @media (max-height: 400px){#chat{height: 280px;}}
        @media (max-height: 399px){#chat{height: 279px;}}
        @media (max-height: 398px){#chat{height: 278px;}}
        @media (max-height: 397px){#chat{height: 277px;}}
        @media (max-height: 396px){#chat{height: 276px;}}
        @media (max-height: 395px){#chat{height: 275px;}}
        @media (max-height: 394px){#chat{height: 274px;}}
        @media (max-height: 393px){#chat{height: 273px;}}
        @media (max-height: 392px){#chat{height: 272px;}}
        @media (max-height: 391px){#chat{height: 271px;}}
        @media (max-height: 390px){#chat{height: 270px;}}
        @media (max-height: 389px){#chat{height: 269px;}}
        @media (max-height: 388px){#chat{height: 268px;}}
        @media (max-height: 387px){#chat{height: 267px;}}
        @media (max-height: 386px){#chat{height: 266px;}}
        @media (max-height: 385px){#chat{height: 265px;}}
        @media (max-height: 384px){#chat{height: 264px;}}
        @media (max-height: 383px){#chat{height: 263px;}}
        @media (max-height: 382px){#chat{height: 262px;}}
        @media (max-height: 381px){#chat{height: 261px;}}
        @media (max-height: 380px){#chat{height: 260px;}}
        @media (max-height: 379px){#chat{height: 259px;}}
        @media (max-height: 378px){#chat{height: 258px;}}
        @media (max-height: 377px){#chat{height: 257px;}}
        @media (max-height: 376px){#chat{height: 256px;}}
        @media (max-height: 375px){#chat{height: 255px;}}
        @media (max-height: 374px){#chat{height: 254px;}}
        @media (max-height: 373px){#chat{height: 253px;}}
        @media (max-height: 372px){#chat{height: 252px;}}
        @media (max-height: 371px){#chat{height: 251px;}}
        @media (max-height: 370px){#chat{height: 250px;}}
        @media (max-height: 369px){#chat{height: 249px;}}
        @media (max-height: 368px){#chat{height: 248px;}}
        @media (max-height: 367px){#chat{height: 247px;}}
        @media (max-height: 366px){#chat{height: 246px;}}
        @media (max-height: 365px){#chat{height: 245px;}}
        @media (max-height: 364px){#chat{height: 244px;}}
        @media (max-height: 363px){#chat{height: 243px;}}
        @media (max-height: 362px){#chat{height: 242px;}}
        @media (max-height: 361px){#chat{height: 241px;}}
        @media (max-height: 360px){#chat{height: 240px;}}
        @media (max-height: 359px){#chat{height: 239px;}}
        @media (max-height: 358px){#chat{height: 238px;}}
        @media (max-height: 357px){#chat{height: 237px;}}
        @media (max-height: 356px){#chat{height: 236px;}}
        @media (max-height: 355px){#chat{height: 235px;}}
        @media (max-height: 354px){#chat{height: 234px;}}
        @media (max-height: 353px){#chat{height: 233px;}}
        @media (max-height: 352px){#chat{height: 232px;}}
        @media (max-height: 351px){#chat{height: 231px;}}
        @media (max-height: 350px){#chat{height: 230px;}}
        @media (max-height: 349px){#chat{height: 229px;}}
        @media (max-height: 348px){#chat{height: 228px;}}
        @media (max-height: 347px){#chat{height: 227px;}}
        @media (max-height: 346px){#chat{height: 226px;}}
        @media (max-height: 345px){#chat{height: 225px;}}
        @media (max-height: 344px){#chat{height: 224px;}}
        @media (max-height: 343px){#chat{height: 223px;}}
        @media (max-height: 342px){#chat{height: 222px;}}
        @media (max-height: 341px){#chat{height: 221px;}}
        @media (max-height: 340px){#chat{height: 220px;}}
        @media (max-height: 339px){#chat{height: 219px;}}
        @media (max-height: 338px){#chat{height: 218px;}}
        @media (max-height: 337px){#chat{height: 217px;}}
        @media (max-height: 336px){#chat{height: 216px;}}
        @media (max-height: 335px){#chat{height: 215px;}}
        @media (max-height: 334px){#chat{height: 214px;}}
        @media (max-height: 333px){#chat{height: 213px;}}
        @media (max-height: 332px){#chat{height: 212px;}}
        @media (max-height: 331px){#chat{height: 211px;}}
        @media (max-height: 330px){#chat{height: 210px;}}
        @media (max-height: 329px){#chat{height: 209px;}}
        @media (max-height: 328px){#chat{height: 208px;}}
        @media (max-height: 327px){#chat{height: 207px;}}
        @media (max-height: 326px){#chat{height: 206px;}}
        @media (max-height: 325px){#chat{height: 205px;}}
        @media (max-height: 324px){#chat{height: 204px;}}
        @media (max-height: 323px){#chat{height: 203px;}}
        @media (max-height: 322px){#chat{height: 202px;}}
        @media (max-height: 321px){#chat{height: 201px;}}
        @media (max-height: 320px){#chat{height: 200px;}}
        @media (max-height: 319px){#chat{height: 199px;}}
        @media (max-height: 318px){#chat{height: 198px;}}
        @media (max-height: 317px){#chat{height: 197px;}}
        @media (max-height: 316px){#chat{height: 196px;}}
        @media (max-height: 315px){#chat{height: 195px;}}
        @media (max-height: 314px){#chat{height: 194px;}}
        @media (max-height: 313px){#chat{height: 193px;}}
        @media (max-height: 312px){#chat{height: 192px;}}
        @media (max-height: 311px){#chat{height: 191px;}}
        @media (max-height: 310px){#chat{height: 190px;}}
        @media (max-height: 309px){#chat{height: 189px;}}
        @media (max-height: 308px){#chat{height: 188px;}}
        @media (max-height: 307px){#chat{height: 187px;}}
        @media (max-height: 306px){#chat{height: 186px;}}
        @media (max-height: 305px){#chat{height: 185px;}}
        @media (max-height: 304px){#chat{height: 184px;}}
        @media (max-height: 303px){#chat{height: 183px;}}
        @media (max-height: 302px){#chat{height: 182px;}}
        @media (max-height: 301px){#chat{height: 181px;}}
        @media (max-height: 300px){#chat{height: 180px;}}
        @media (max-height: 299px){#chat{height: 179px;}}
        @media (max-height: 298px){#chat{height: 178px;}}
        @media (max-height: 297px){#chat{height: 177px;}}
        @media (max-height: 296px){#chat{height: 176px;}}
        @media (max-height: 295px){#chat{height: 175px;}}
        @media (max-height: 294px){#chat{height: 174px;}}
        @media (max-height: 293px){#chat{height: 173px;}}
        @media (max-height: 292px){#chat{height: 172px;}}
        @media (max-height: 291px){#chat{height: 171px;}}
        @media (max-height: 290px){#chat{height: 170px;}}
        @media (max-height: 289px){#chat{height: 169px;}}
        @media (max-height: 288px){#chat{height: 168px;}}
        @media (max-height: 287px){#chat{height: 167px;}}
        @media (max-height: 286px){#chat{height: 166px;}}
        @media (max-height: 285px){#chat{height: 165px;}}
        @media (max-height: 284px){#chat{height: 164px;}}
        @media (max-height: 283px){#chat{height: 163px;}}
        @media (max-height: 282px){#chat{height: 162px;}}
        @media (max-height: 281px){#chat{height: 161px;}}
        @media (max-height: 280px){#chat{height: 160px;}}
        @media (max-height: 279px){#chat{height: 159px;}}
        @media (max-height: 278px){#chat{height: 158px;}}
        @media (max-height: 277px){#chat{height: 157px;}}
        @media (max-height: 276px){#chat{height: 156px;}}
        @media (max-height: 275px){#chat{height: 155px;}}
        @media (max-height: 274px){#chat{height: 154px;}}
        @media (max-height: 273px){#chat{height: 153px;}}
        @media (max-height: 272px){#chat{height: 152px;}}
        @media (max-height: 271px){#chat{height: 151px;}}
        @media (max-height: 270px){#chat{height: 150px;}}
        @media (max-height: 269px){#chat{height: 149px;}}
        @media (max-height: 268px){#chat{height: 148px;}}
        @media (max-height: 267px){#chat{height: 147px;}}
        @media (max-height: 266px){#chat{height: 146px;}}
        @media (max-height: 265px){#chat{height: 145px;}}
        @media (max-height: 264px){#chat{height: 144px;}}
        @media (max-height: 263px){#chat{height: 143px;}}
        @media (max-height: 262px){#chat{height: 142px;}}
        @media (max-height: 261px){#chat{height: 141px;}}
        @media (max-height: 260px){#chat{height: 140px;}}
        @media (max-height: 259px){#chat{height: 139px;}}
        @media (max-height: 258px){#chat{height: 138px;}}
        @media (max-height: 257px){#chat{height: 137px;}}
        @media (max-height: 256px){#chat{height: 136px;}}
        @media (max-height: 255px){#chat{height: 135px;}}
        @media (max-height: 254px){#chat{height: 134px;}}
        @media (max-height: 253px){#chat{height: 133px;}}
        @media (max-height: 252px){#chat{height: 132px;}}
        @media (max-height: 251px){#chat{height: 131px;}}
        @media (max-height: 250px){#chat{height: 130px;}}
        @media (max-height: 249px){#chat{height: 129px;}}
        @media (max-height: 248px){#chat{height: 128px;}}
        @media (max-height: 247px){#chat{height: 127px;}}
        @media (max-height: 246px){#chat{height: 126px;}}
        @media (max-height: 245px){#chat{height: 125px;}}
        @media (max-height: 244px){#chat{height: 124px;}}
        @media (max-height: 243px){#chat{height: 123px;}}
        @media (max-height: 242px){#chat{height: 122px;}}
        @media (max-height: 241px){#chat{height: 121px;}}
        @media (max-height: 240px){#chat{height: 120px;}}
        @media (max-height: 239px){#chat{height: 119px;}}
        @media (max-height: 238px){#chat{height: 118px;}}
        @media (max-height: 237px){#chat{height: 117px;}}
        @media (max-height: 236px){#chat{height: 116px;}}
        @media (max-height: 235px){#chat{height: 115px;}}
        @media (max-height: 234px){#chat{height: 114px;}}
        @media (max-height: 233px){#chat{height: 113px;}}
        @media (max-height: 232px){#chat{height: 112px;}}
        @media (max-height: 231px){#chat{height: 111px;}}
        @media (max-height: 230px){#chat{height: 110px;}}
        @media (max-height: 229px){#chat{height: 109px;}}
        @media (max-height: 228px){#chat{height: 108px;}}
        @media (max-height: 227px){#chat{height: 107px;}}
        @media (max-height: 226px){#chat{height: 106px;}}
        @media (max-height: 225px){#chat{height: 105px;}}
        @media (max-height: 224px){#chat{height: 104px;}}
        @media (max-height: 223px){#chat{height: 103px;}}
        @media (max-height: 222px){#chat{height: 102px;}}
        @media (max-height: 221px){#chat{height: 101px;}}
        @media (max-height: 220px){#chat{height: 100px;}}
        @media (max-height: 219px){#chat{height: 99px;}}
        @media (max-height: 218px){#chat{height: 98px;}}
        @media (max-height: 217px){#chat{height: 97px;}}
        @media (max-height: 216px){#chat{height: 96px;}}
        @media (max-height: 215px){#chat{height: 95px;}}
        @media (max-height: 214px){#chat{height: 94px;}}
        @media (max-height: 213px){#chat{height: 93px;}}
        @media (max-height: 212px){#chat{height: 92px;}}
        @media (max-height: 211px){#chat{height: 91px;}}
        @media (max-height: 210px){#chat{height: 90px;}}
        @media (max-height: 209px){#chat{height: 89px;}}
        @media (max-height: 208px){#chat{height: 88px;}}
        @media (max-height: 207px){#chat{height: 87px;}}
        @media (max-height: 206px){#chat{height: 86px;}}
        @media (max-height: 205px){#chat{height: 85px;}}
        @media (max-height: 204px){#chat{height: 84px;}}
        @media (max-height: 203px){#chat{height: 83px;}}
        @media (max-height: 202px){#chat{height: 82px;}}
        @media (max-height: 201px){#chat{height: 81px;}}
        @media (max-height: 200px){#chat{height: 80px;}}







    </style>
</head>
<body>
<main class="content">
    <div class="container p-0">

            <div class="row g-0">




                <?php if(!isset($_POST['user'])){ ?>
                <div class="col-12 col-lg-5 col-xl-3 border-right" style="">
                    <br>
                    <div class="px-4 d-none d-md-block">
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    <div>
                        <img src="conexaoPHP/uploads/<?php if($pic_uso == 0){echo "general.png";}else{echo $uso;}  ?>" class="rounded-circle mr-1" alt="<?php echo $uso; ?>" width="40" height="40">
                        <a style="margin-bottom: 5px;" href="conexaoPHP/logout.php" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/power-off.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>
                        <a style="margin-bottom: 5px;" href="settings" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/settings.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>

                        <?php if(!isset($_POST['user'])){?>  <input class="px-3 border btn-light" type="text" class="form-control my-3" placeholder="Search...">  <?php } ?>
                    </div>
                    <hr>

                    <div id="scro" class="scro" style="overflow: auto; height: 80vh;">

                    </div>


                </div>
                <?php } ?>


                <?php if(isset($_POST['user'])){ ?>
                <div class="col-12 col-lg-7 col-xl-9">





                    <!-- Painel de Mensagens -->
                  <?php
                    $query_usuario = "select * from usuario";

                    $consulta = mysqli_query($conexao, $query_usuario);

                    if (mysqli_num_rows($consulta) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($consulta)) {
                        if($_SESSION['usuario2'] == $row['username']){
                            $pic_usuario2 = $row['pic'];
                            $_SESSION['pic_usuario2'] = $row['pic'];
                        }


                    }}

                    ?>


                    <div class="d-flex align-items-start" style="padding: 5px; border: 1px #000">
                        <?php if(isset($_POST['user'])){ $_SESSION['usuario2'] = $_POST['user']; $usuario2 = $_SESSION['usuario2']; ?> <img src="conexaoPHP/uploads/<?php if($pic_usuario2 == 0){echo "general.png";}else{echo $usuario2;}  ?>" class="rounded-circle mr-1" alt="<?php echo $usuario2; ?>" width="40" height="40"> <?php } ?>
                        <div class="flex-grow-1 ml-3">
                            <?php echo $usuario2; ?>

                            <table>
                            <td style="padding-right: 10px; "><div id="sinal"></div></td>

                            <td><div class="text-muted small"><em style="color: green" id="result_typing" ></em></div></td>
                            </table>

                        </div>
                        <div>

                            <a href="conexaoPHP/logout.php" id="ti" onmouseover="titulo();" class="btn btn-light border btn-lg px-3"><img src="icons/power-off.png" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></img></a>
                        </div>
                    </div>

                      <div id="casseteM" class="position-relative" >




                        <div id="chat" class="chat-messages p-4 scro" >




                        </div>
                    </div>

                        <form id="mensagem" style="width: 100%;">
                            <div style="width: 100%;">
                                <div class="input-group" style="width: 98%; margin: auto;">
                                    <input style="width: 80%;" type="text" id="limpar" name='mensagem' class="form-control" placeholder="Escreva a sua Mensagem">
                                    <button style="width: 20%;" type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>  <?php  } ?>





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

    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: scroll
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
        width: 8px;               /* width of the entire scrollbar */
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

<script type="text/javascript">

</script>
</body>
</html>