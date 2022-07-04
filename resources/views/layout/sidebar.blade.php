<?php
    $uri = Request::segment(1);
?>
<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        <li class="<?= ($uri == 'transaksi' ? 'mm-active' : ''); ?>">
            <a href="<?= route('getListTransaksi') ?>"><i class="ti-wallet"></i><span>List Transaksi</span></a>
        </li>
        <li class="<?= ($uri == 'saldo' ? 'mm-active' : ''); ?>">
            <a href="<?= route('getListSaldo') ?>"><i class="ti-money"></i><span>List Saldo</span></a>
        </li>
    </ul>
</div>
