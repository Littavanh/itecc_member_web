<?php

session_start();



$mn_dashboard = "";
//////////////////////////
$mn_Maccount = "hidden";
$mn_Maccount1 = "hidden";

$mn_MstaffAccount = "hidden";
$mn_MstaffAccount1 = "hidden";

$mn_MpersonalAccount = "hidden";
$mn_MpersonalAccount1 = "hidden";

$mn_allAccount = "hidden";

$mn_activeAccount = "hidden";
$mn_enabledisableAccount = "hidden";
$mn_pactiveAccount = "hidden";
$mn_penabledisableAccount = "hidden";
/////////////////////////
$mn_MWallet = "hidden";
$mn_MWallet1 = "hidden";

$mn_MstaffWallet = "hidden";
$mn_MstaffWallet1 = "hidden";



$mn_MpersonalWallet = "hidden";
$mn_MpersonalWallet1 = "hidden";

$mn_topup = "hidden";
$mn_refund = "hidden";
$mn_ptopup = "hidden";
$mn_prefund = "hidden";
///////////////////////////
$mn_report = "hidden";
$mn_report1 = "hidden";

$mn_RstaffWallet = "hidden";
$mn_RstaffWallet1 = "hidden";

$mn_RpersonalWallet = "hidden";
$mn_RpersonalWallet1 = "hidden";

$mn_topupReport = "hidden";
$mn_paymentReport = "hidden";
$mn_topupByMonthReport = "hidden";
$mn_paymentByMonthReport = "hidden";
$mn_balanceByMonthReport = "hidden";

$mn_ptopupReport = "hidden";
$mn_ppaymentReport = "hidden";
$mn_ptopupByMonthReport = "hidden";
$mn_ppaymentByMonthReport = "hidden";
$mn_pbalanceByMonthReport = "hidden";


if ($_SESSION['im_perName_1'] == "All Account" && $_SESSION['im_view_1'] == "1") {
  $mn_Maccount = "";
  $mn_Maccount1 = "";
  $mn_allAccount = "";
}
if ($_SESSION['im_perName_35'] == "Staff Account" && $_SESSION['im_view_35'] == "1") {
  $mn_Maccount = "";
  $mn_Maccount1 = "";
  $mn_MstaffAccount = "";
  $mn_MstaffAccount1 = "";
  $mn_activeAccount = "";
  $mn_enabledisableAccount = "";
}
if ($_SESSION['im_perName_36'] == "Personal Account" && $_SESSION['im_view_36'] == "1") {
  $mn_Maccount = "";
  $mn_Maccount1 = "";
  $mn_MpersonalAccount = "";
  $mn_MpersonalAccount1 = "";
  $mn_pactiveAccount = "";
  $mn_penabledisableAccount = "";
}
if ($_SESSION['im_perName_37'] == "Staff Wallet" && $_SESSION['im_view_37'] == "1") {
  $mn_MWallet = "";
  $mn_MWallet1 = "";
  $mn_MstaffWallet = "";
  $mn_MstaffWallet1 = "";
  $mn_topup = "";
  $mn_refund = "";
}
if ($_SESSION['im_perName_38'] == "Personal Wallet" && $_SESSION['im_view_38'] == "1") {
  $mn_MWallet = "";
  $mn_MWallet1 = "";
  $mn_MpersonalWallet = "";
  $mn_MpersonalWallet1 = "";
  $mn_ptopup = "";
  $mn_prefund = "";
}
if ($_SESSION['im_perName_39'] == "Report Staff Wallet" && $_SESSION['im_view_39'] == "1") {
  $mn_report = "";
  $mn_report1 = "";

  $mn_RstaffWallet = "";
  $mn_RstaffWallet1 = "";

  $mn_topupReport = "";
  $mn_paymentReport = "";
  $mn_topupByMonthReport = "";
  $mn_paymentByMonthReport = "";
  $mn_balanceByMonthReport = "";
}
if ($_SESSION['im_perName_42'] == "Report Personal Wallet" && $_SESSION['im_view_42'] == "1") {
  $mn_report = "";
  $mn_report1 = "";

  $mn_RpersonalWallet = "";
  $mn_RpersonalWallet1 = "";

  $mn_ptopupReport = "";
  $mn_ppaymentReport = "";
  $mn_ptopupByMonthReport = "";
  $mn_ppaymentByMonthReport = "";
  $mn_pbalanceByMonthReport = "";
}



if ($_GET['d'] == 'index') {
  $mn_dashboard = "active";
} else if ($_GET['d'] == 'account/allAccount') {
  $mn_Maccount = "menu-open";
  $mn_Maccount1 = "active";
  $mn_allAccount = "active";
} else if ($_GET['d'] == 'account/activeAccount') {
  $mn_Maccount = "menu-open";
  $mn_Maccount1 = "active";
  $mn_MstaffAccount = "menu-open";
  $mn_MstaffAccount1 = "active";
  $mn_activeAccount = "active";
} else if ($_GET['d'] == 'account/enabledisableAccount') {
  $mn_Maccount = "menu-open";
  $mn_Maccount1 = "active";
  $mn_MstaffAccount = "menu-open";
  $mn_MstaffAccount1 = "active";
  $mn_enabledisableAccount = "active";
} else if ($_GET['d'] == 'accountPersonal/activeAccount') {
  $mn_Maccount = "menu-open";
  $mn_Maccount1 = "active";
  $mn_MpersonalAccount = "menu-open";
  $mn_MpersonalAccount1 = "active";
  $mn_pactiveAccount = "active";
} else if ($_GET['d'] == 'accountPersonal/enabledisableAccount') {
  $mn_Maccount = "menu-open";
  $mn_Maccount1 = "active";
  $mn_MpersonalAccount = "menu-open";
  $mn_MpersonalAccount1 = "active";
  $mn_penabledisableAccount = "active";
} else if ($_GET['d'] == 'wallet/topup') {
  $mn_MWallet = "menu-open";
  $mn_MWallet1 = "active";
  $mn_MstaffWallet = "menu-open";
  $mn_MstaffWallet1 = "active";
  $mn_topup = "active";
} else if ($_GET['d'] == 'wallet/refund') {
  $mn_MWallet = "menu-open";
  $mn_MWallet1 = "active";
  $mn_MstaffWallet = "menu-open";
  $mn_MstaffWallet1 = "active";
  $mn_refund = "active";
} else if ($_GET['d'] == 'walletPersonal/topup') {
  $mn_MWallet = "menu-open";
  $mn_MWallet1 = "active";
  $mn_MpersonalWallet = "menu-open";
  $mn_MpersonalWallet1 = "active";
  $mn_ptopup = "active";
} else if ($_GET['d'] == 'walletPersonal/refund') {
  $mn_MWallet = "menu-open";
  $mn_MWallet1 = "active";
  $mn_MpersonalWallet = "menu-open";
  $mn_MpersonalWallet1 = "active";
  $mn_prefund = "active";
} else if ($_GET['d'] == 'report/topup') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RstaffWallet = "menu-open";
  $mn_RstaffWallet1 = "active";
  $mn_topupReport = "active";
} else if ($_GET['d'] == 'report/payment') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RstaffWallet = "menu-open";
  $mn_RstaffWallet1 = "active";
  $mn_paymentReport = "active";
} else if ($_GET['d'] == 'report/topupByMonth') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RstaffWallet = "menu-open";
  $mn_RstaffWallet1 = "active";
  $mn_topupByMonthReport = "active";
} else if ($_GET['d'] == 'report/paymentByMonth') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RstaffWallet = "menu-open";
  $mn_RstaffWallet1 = "active";
  $mn_paymentByMonthReport = "active";
} else if ($_GET['d'] == 'report/balanceByMonth') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RstaffWallet = "menu-open";
  $mn_RstaffWallet1 = "active";
  $mn_balanceByMonthReport = "active";
}else if ($_GET['d'] == 'reportPersonal/topup') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RpersonalWallet = "menu-open";
  $mn_RpersonalWallet1 = "active";
  $mn_ptopupReport = "active";
} else if ($_GET['d'] == 'reportPersonal/payment') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RpersonalWallet = "menu-open";
  $mn_RpersonalWallet1 = "active";
  $mn_ppaymentReport = "active";
} else if ($_GET['d'] == 'reportPersonal/topupByMonth') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RpersonalWallet = "menu-open";
  $mn_RpersonalWallet1 = "active";
  $mn_ptopupByMonthReport = "active";
} else if ($_GET['d'] == 'reportPersonal/paymentByMonth') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RpersonalWallet = "menu-open";
  $mn_RpersonalWallet1 = "active";
  $mn_ppaymentByMonthReport = "active";
} else if ($_GET['d'] == 'reportPersonal/balanceByMonth') {
  $mn_report = "menu-open";
  $mn_report1 = "active";
  $mn_RpersonalWallet = "menu-open";
  $mn_RpersonalWallet1 = "active";
  $mn_pbalanceByMonthReport = "active";
}

?>
<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="dist/logo/Member23.png" alt="Itecc Member" class="brand-image img-circle">
        <span class="brand-text font-weight-light">Itecc Member System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info ">
                <a href="index.php?d=index" class="d-block mn_loginby">Login by: </a>
            </div>
            <div class="info">
                <a href="index.php?d=index" class="d-block"><?= $_SESSION['im_fullName'] ?></a>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php?d=index" class="nav-link <?= $mn_dashboard ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="mn_home">
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview <?= $mn_Maccount ?>">
                    <a href="#" class="nav-link <?= $mn_Maccount1 ?>">
                        <i class="nav-icon fa fa-layer-group"></i>
                        <p class="mn_account">
                            Account

                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?d=account/allAccount" class="nav-link <?= $mn_allAccount ?>">
                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p class="mn_allAccount">All Account</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview <?= $mn_MstaffAccount ?>">
                            <a href="#" class="nav-link <?= $mn_MstaffAccount1 ?>">
                                <i class="nav-icon 	far fa-user-circle"></i>
                                <p class="mn_staffAccount">
                                    Staff Account

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="index.php?d=account/enabledisableAccount"
                                        class="nav-link <?= $mn_enabledisableAccount ?>">
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_enabledisable">Enable & Disable Account</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=account/activeAccount"
                                        class="nav-link <?= $mn_activeAccount ?>">
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_activeAccount">Active Account</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview <?= $mn_MpersonalAccount ?>">
                            <a href="#" class="nav-link <?= $mn_MpersonalAccount1 ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="mn_personalAccount">
                                    Personal Account

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="index.php?d=accountPersonal/enabledisableAccount"
                                        class="nav-link <?= $mn_penabledisableAccount ?>">
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_enabledisable">Enable & Disable Account</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=accountPersonal/activeAccount"
                                        class="nav-link <?= $mn_pactiveAccount ?>">
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_activeAccount">Active Account</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>

                </li>
                <li class="nav-item has-treeview <?= $mn_MWallet ?>">
                    <a href="#" class="nav-link <?= $mn_MWallet1 ?>">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p class="mn_wallet">
                            Wallet

                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item has-treeview <?= $mn_MstaffWallet ?>">
                            <a href="#" class="nav-link <?= $mn_MstaffWallet1 ?>">
                                <i class="nav-icon 	far fa-user-circle"></i>
                                <p class="mn_staffWallet">
                                    Staff Wallet

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="index.php?d=wallet/topup" class="nav-link <?= $mn_topup ?>">
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_staffTopupWallet">Staff Top Up Wallet</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                  <a href="index.php?d=wallet/refund" class="nav-link <?= $mn_refund ?>">
              
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="mn_staffRefundWallet">Staff Refund Wallet</p>
                  </a>
                </li> -->
                            </ul>
                        </li>
                        <li class="nav-item has-treeview <?= $mn_MpersonalWallet ?>">
                            <a href="#" class="nav-link <?= $mn_MpersonalWallet1 ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="mn_personalWallet">
                                    Personal Wallet

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="index.php?d=walletPersonal/topup" class="nav-link <?= $mn_ptopup ?>">
                                        <!-- <i class="far fa-circle nav-icon"></i> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_personalTopupWallet">Personal Top Up Wallet</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=walletPersonal/refund" class="nav-link <?= $mn_prefund ?>">

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p class="mn_personalRefundWallet">Personal Refund Wallet</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>

                </li>
                <!-- <li class="nav-item has-treeview <?= $mn_report ?>">
          <a href="#" class="nav-link <?= $mn_report1 ?>">
            <i class="nav-icon 	fas fa-book"></i>
            <p>
              Report
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">




          </ul>

        </li> -->

                <li class="nav-item has-treeview <?= $mn_report ?>">
                    <a href="#" class="nav-link <?= $mn_report1 ?>">
                        <i class="nav-icon 	fas fa-book"></i>
                        <p class="mn_report">
                            Report

                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item has-treeview <?= $mn_RstaffWallet ?>">
                            <a href="#" class="nav-link <?= $mn_RstaffWallet1 ?>">
                                <i class="nav-icon 	far fa-user-circle"></i>
                                <p class="mn_staffWallet">
                                    Staff Wallet

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="index.php?d=report/topup" class="nav-link <?= $mn_topupReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_topupByDiary">TopUp By Diary</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=report/payment" class="nav-link <?= $mn_paymentReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_paymentByDiary">Payment By Diary</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=report/topupByMonth"
                                        class="nav-link <?= $mn_topupByMonthReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_topupByMonth">TopUp By Month</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=report/paymentByMonth"
                                        class="nav-link <?= $mn_paymentByMonthReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_paymentByMonth">Payment By Month</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=report/balanceByMonth"
                                        class="nav-link <?= $mn_balanceByMonthReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_balanceByMonth">Balance By Month</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview <?= $mn_RpersonalWallet ?>">
                            <a href="#" class="nav-link <?= $mn_RpersonalWallet1 ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="mn_personalWallet">
                                    Personal Wallet

                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="index.php?d=reportPersonal/topup" class="nav-link <?= $mn_ptopupReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_topupByDiary">TopUp By Diary</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=reportPersonal/payment"
                                        class="nav-link <?= $mn_ppaymentReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_paymentByDiary">Payment By Diary</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=reportPersonal/topupByMonth"
                                        class="nav-link <?= $mn_ptopupByMonthReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_topupByMonth">TopUp By Month</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=reportPersonal/paymentByMonth"
                                        class="nav-link <?= $mn_ppaymentByMonthReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_paymentByMonth">Payment By Month</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?d=reportPersonal/balanceByMonth"
                                        class="nav-link <?= $mn_pbalanceByMonthReport ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p class="mn_balanceByMonth">Balance By Month</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>

                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>