<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_paymentByMonth" >Payment Report</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_report"><a href="#">Report</a></li>
                    <li class="breadcrumb-item mn_personalWallet"><a href="#">Personal Wallet</a></li>
                    <li class="breadcrumb-item active mn_paymentByMonth">Payment Report</li>

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form method="get">
                        <input type="hidden" name="d" value="reportPersonal/paymentByMonth" />
                        <div class="row">

                        <div class="col-md-1">
                                <div class="form-group">
                                    <label class="month" >Month</label>

                                    <select class="form-control select2" name="cb_month">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>


                                    </select>

                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="year" >Year</label>

                                    <select class="form-control select2" name="cb_year">
                                      
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>



                                    </select>

                                </div>
                            </div>

                          



                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default" onclick="document.location='?d=reportPersonal/paymentByMonth'">ຍົກເລີກ</button>
                            <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                            <?php if ($_GET['cb_month'] != '' && $_GET['cb_year'] != '') { ?>
                        </div>


                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr>
                                            <th class="no">no</th>
                                                <th class="staffId">staffId</th>
                                                <th class="accountName">AccountName</th>
                                                <th class="fullName">FullName</th>
                                                <th class="gender">gender</th>
                                                <th class="email">emaillAddr</th>
                                                <th class="paymentDate">payDate</th>
                                                <th class="totalPayment">totalPayment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $arr = paymentPersonalWalletByMonth($tokenKey, $userName, $_GET['cb_month'], $_GET['cb_year'], $api_url);
                                            $i = 1;
                                            foreach ($arr as $data) {
                                            ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><?= $data['personalId'] ?></td>
                                                    <td><?= $data['AccountName'] ?></td>
                                                    <td><?= $data['firstName'] ?> <?= $data['lastName'] ?></td>
                                                  
                                                    <td><?= $data['gender'] ?></td>
                                                    <td><?= $data['emaillAddr'] ?></td>
                                                    <td><?= $data['topupMonthYear'] ?></td>
                                                    <td><?= number_format($data['totalPayment']) ?></td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }  ?>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </form>

            </div>
        </div>
    </div>
    <!-- /.row -->

</section>