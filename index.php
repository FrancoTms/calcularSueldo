<?php
    require_once('php/encabezado.php');
    $nombre = 'Garcia';
    const APORTE_JUBILATORIO = 13;
    const OBRA_SOCIAL = 3.5;
    $sueldoBasico = mt_rand(170000,290000);
    $aporte = $sueldoBasico * APORTE_JUBILATORIO / 100;
    $obraSocial = $sueldoBasico * OBRA_SOCIAL / 100;
    $sueldoNeto = $sueldoBasico - $aporte - $obraSocial;
?>

        <table>
            <caption><?php echo "Empleado/a: $nombre"?></caption>
            <tr>
                <th class="thInicio">Concepto</th>
                <th class="thInicio">Ingresos</th>
                <th class="thInicio">Descuentos</th>
            </tr>
            <tr>
                <th>Sueldo Básico</th>
                <td><?php echo '$' . number_format($sueldoBasico, 2)?></td>
                <td></td>
            </tr>
            <tr>
                <th>Aporte Jubilatorio</th>
                <td></td>
                <td><?php echo '$' . number_format($aporte, 2) ?></td>
            </tr>
            <tr>
                <th>Obra Social</th>
                <td></td>
                <td><?php echo '$' . number_format($obraSocial, 2) ?></td>
            </tr>
            <tr>
                <td class="tdSueldo"></td>
                <th class="thSueldo">Sueldo Neto</th>
                <td class="tdSueldo"><?php echo '$' . number_format($sueldoNeto, 2) ?></td>
            </tr>
        </table>
<?php
    require_once('php/pie.php');
?>