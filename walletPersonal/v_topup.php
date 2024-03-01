<?php
$tokenKey = $_SESSION['im_tokenKey'];
$userName = $_SESSION['im_userName'];
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Personal Top Up Wallet</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Wallet</a></li>
                    <li class="breadcrumb-item active ">Personal Top Up Wallet</li>

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


                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-body">
                            <form method="post" action="?d=walletPersonal/topup" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Input Mobile Phone to Topup</label>
                                            <input type="number" placeholder="20XXXXXXXX" maxlength="10"
                                                Name="txtNumber" onkeyup="search(this.value)"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label id="labelAmount" hidden>Amount</label>
                                            <input id="txtAmount" type="number" placeholder="input amount:"
                                                Name="txtAmount" hidden class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" id="btnTopUp" hidden name="btnTopUp"
                                        class="btn btn-primary">TopUp</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- <button type="submit" name="btnRefund" class="btn btn-warning">Refund</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered beautified_report">

                                            <thead>
                                                <tr>

                                                    <th>PersonalId</th>
                                                    <th>AccountName</th>
                                                    <th>mobileNumber</th>
                                                    <th>FullName</th>
                                                    <th>Date of birth</th>
                                                    <th style="text-align:center">Gender</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>personalWalet</th>
                                                    <th>personalWaletBL</th>


                                                </tr>
                                            </thead>
                                            <tbody id="tbody" >

                                            </tbody>
                                        </table>

                                    </div>


                                </div>
                                <div class="card-footer" id="text"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
<script language="javascript" type="text/javascript">
function checkAll() {
    var all = document.getElementById("txtNumOfList").value;

    var checked = document.getElementById("cbCheckAll").checked;
    // alert(all);
    // alert(checked);
    for (i = 0; i < all; i++) {
        if (checked == false) {
            document.getElementById("cbCheckOne" + i).checked = false;

        } else {
            document.getElementById("cbCheckOne" + i).checked = true;

        }

    }
}

function checkOne(id) {
    var checked = document.getElementById("cbCheckOne" + id).checked;


    // if (checked == false) {
    //     document.getElementById("cbCheckAll" + id).value = 0;

    // } else {
    //     document.getElementById("cbCheckAll" + id).value = 1;
    // }
}

function search(phone) {
    // console.log(phone);





    if (phone.length < 10) {
        document.getElementById("labelAmount").hidden = true;
        document.getElementById("txtAmount").hidden = true;
        document.getElementById("btnTopUp").hidden = true;
        let table = document.querySelector("tbody");

        // Delete second row
        table.deleteRow(0);
    } else {

        document.getElementById("labelAmount").hidden = false;
        document.getElementById("txtAmount").hidden = false;
        document.getElementById("btnTopUp").hidden = false;

        var strURL = "function/checkNumber.php?phone=" + phone;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

            // Defines a function to be called when
            // the readyState property changes
            if (this.readyState == 4 &&
                this.status == 200) {

                var myObj = JSON.parse(this.responseText);

                var row = tbody.insertRow(0);

                if (myObj[0] == '') {
                    document.getElementById("text").innerHTML = "Don't have this phone number in database."
                } else {
                    document.getElementById("text").innerHTML = ""

                    var cell0 = row.insertCell(0);
                    var cell1 = row.insertCell(1);
                    var cell2 = row.insertCell(2);
                    var cell3 = row.insertCell(3);
                    var cell4 = row.insertCell(4);
                    var cell5 = row.insertCell(5);
                    var cell6 = row.insertCell(6);
                    var cell7 = row.insertCell(7);
                    var cell8 = row.insertCell(8);
                    var cell9 = row.insertCell(9);

                    cell0.innerHTML = myObj[0];
                    cell1.innerHTML = myObj[1];
                    cell2.innerHTML = myObj[2];
                    cell3.innerHTML = myObj[3];
                    cell4.innerHTML = myObj[4];
                    cell5.innerHTML = myObj[5];
                    cell6.innerHTML = myObj[6];
                    cell7.innerHTML = myObj[7];
                    cell8.innerHTML = myObj[8];
                    cell9.innerHTML = myObj[9];
                }





            }
        };

        // xhttp.open("GET", "filename", true);
        xmlhttp.open("GET", strURL, true);

        // Sends the request to the server
        xmlhttp.send();
    }


}
</script>