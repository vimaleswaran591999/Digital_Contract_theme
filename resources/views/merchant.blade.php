<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant</title>
    <!-- Add AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- Add AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./admin.css" />

</head>

<body>
    <nav class=" navbar navbar-expand  navbarStyle1">
        <div class="d-flex justify-content-between w-100 align-items-center headerDiv">
            <a class="navbar-brand">
                <img src="./assets/logo_black.png" height="38" alt="Tommorrow Souken Logo" class="brand-image">

            </a>

            <div class="d-flex align-items-center" style="gap: 15px;">
                <div>
                    <i class="fa-regular fa-user"></i>
                    <b>
                        ブルーガーデン／本部
                    </b>
                </div>
                <a href="./index.html">
                    <button type="submit" class="btn  btn-block signInBtn">ログアウト</button>
                </a>
            </div>
        </div>
    </nav>


    <!-- Nav tabs Pannel -->
    <div class="container card shadow d-flex justify-content-center mt-5" style="background-color: #f6f6f6;">
        <!-- nav options -->
        <ul class="nav nav-pills navbar1 shadow-sm" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">基本情報</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">ご契約内容</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">お支払内容</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">契約状態</a>
            </li>
        </ul>

        <!-- content -->
        <div class="tab-content" id="pills-tabContent p-3">
            <!-- 1st card -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container container2 mt-5 ">
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for=""> 契約日 <span class="required">※必須</span></label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for="">担当者コード <span class="required">※必須</span></label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for=""> 担当者氏名 <span class="required">※必須</span></label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <label for=""><b>ご契約者</b></label>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-2">
                            <label for=""> 氏名</label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for="">顧客コード</label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for="">再設定パスワード </label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for=""> 生年月日</label>
                        </div>
                        <div class="col col-md-3">
                            <input type="date" class="form-control"></input>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <label for=""><b>ご住所</b></label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-2">
                            <label for=""> 〒</label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col col-md-2">
                            <label for=""> 都道府県</label>
                        </div>
                        <div class="col col-md-3">
                            <input class="form-control"></input>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col col-md-10">

                        </div>
                        <div class="col-md-2 pb-3">
                            <button type="submit" class="btn  btn-block signInBtn">次入</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd card -->
            <div class="tab-pane fade p-3" style="background-color: white;" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="container  container2 mt-2">
                    <h6><strong>入会</strong></h6>
                    <div class="container mt-4 filterContainer2">
                        <label><b>入会期間</b></label>
                        <div class="row">
                            <div class="col col-md-3">
                                <h6 for="">開始日</h6>
                                <input type="date" class="form-control"></input>
                            </div>
                            <div class="col col-md-3">
                                <h6 for="">終了日</h6>
                                <input type="date" class="form-control"></input>
                            </div>
                            <div class="col col-md-4">

                            </div>
                            <div class="col col-md-2">
                                <label for="">終了日</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1" style="border: none;"> &#165</span>
                                    <input type="text" class="form-control" placeholder="" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container container2 mt-2">
                    <h6><strong>投務内容</strong></h6>
                    <div class="container mt-4 filterContainer2 mb-5">
                        <label>役務提供期間</label>
                        <div class="row">
                            <div class="col col-md-3">
                                <h6 for="">開始日</h6>
                                <input type="date" class="form-control"></input>
                            </div>
                            <div class="col col-md-3">
                                <h6 for="">終了日</h6>
                                <input type="date" class="form-control"></input>
                            </div>
                            <div class="col col-md-4">

                            </div>
                            <div class="col col-md-2">

                            </div>
                        </div>
                        <div class="table-responsive resTable mt-4">
                            <table class="table">
                                <thead class="tableHeader">
                                    <tr style="background-color: #d8eb9e;">
                                        <th class="tableHeader">コース名</th>
                                        <th class="tableHeader">時間(分)</th>
                                        <th class="tableHeader">単価(税抜/税込)</th>
                                        <th class="tableHeader">回数</th>
                                        <th class="tableHeader">記時間數</th>
                                        <th class="tableHeader">金额(税抜/税込)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>

                                        <td><input type="text" class="form-control" /></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3nd card -->
            <div class="tab-pane fade third p-3" style="background-color: white;" id="pills-contact" role="tabpanel"
                aria-labelledby="pills-contact-tab">
                <div class="container mt-4 mb-5">
                    <h6><b>お支払の詳細</b></h6><br>
                    <div class="col col-4">
                        <label> <b>役務提供期間 </b></label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>--</option>
                            <option value="1">クレジットカード</option>
                            <option value="2">PayPay</option>
                            <option value="3">ショッピングクレジット</option>
                        </select>
                    </div>
                    <div class="container mt-3">
                        <div style="border: 2px solid black;">

                            <div class="container">
                                <div class="row" style="border-bottom: 2px solid black; background-color: #d8eb9e;">
                                    <div class="col col-4  p-3 d-flex justify-content-center"
                                        style="border-right: 2px solid black;"><b>お支払方法</b></div>
                                    <div class="col col-4  p-3 d-flex justify-content-center"
                                        style="border-right: 2px solid black;"><b>お支払時期</b></div>
                                    <div class="col col-4  p-3 d-flex justify-content-center"><b>金額(分割払手数料含む)</b></div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row" style="border-bottom: 2px solid black">
                                    <div class="col col-4  p-3" style="border-right: 2px solid black;"><input
                                            class="form-control" /></div>
                                    <div class="col col-4  p-3" style="border-right: 2px solid black;"><input
                                            class="form-control" /></div>
                                    <div class="col col-4  p-3">
                                        <div class="input-group">
                                            <span class="input-group-text">￥</span>
                                            <input type="text" class="form-control" aria-label="Amount (yen)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col col-4  p-3 d-flex justify-content-center align-items-center flex-column"
                                        style="border-right: 2px solid black;">
                                        <div class="container">
                                            <div class="row">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col col-4">
                                                支払回数
                                            </div>
                                            <div class="col col-6 d-flex">
                                                <span style="background-color: white; color: black;">(</span><input
                                                    type="number" class="form-control" /><span
                                                    style="background-color: white; color:black">)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-4  p-3" style="border-right: 2px solid black;">

                                        <div class="row d-flex justify-content-center">
                                            <div class="col col-6"> <input type="text" class="form-control" /> </div>
                                            <div class="col col-4">
                                                <p class="tableInputP">年</p>
                                            </div>
                                            <!-- <div class="col-2 d-flex" style="gap: 5px; flex-direction: column-reverse;">
        <input type="text" class="form-control" />
        <p class="tableInputP">年</p>
    </div>
    <div class="col-6 d-flex" style="gap: 5px; flex-direction: column-reverse;">
        <input type="text" class="form-control" />
        <p class="tableInputP">より毎月</p>
    </div>
    <div class="col-4 d-flex" style="gap: 5px; flex-direction: column-reverse;">
        <input type="text" class="form-control" />
        <p class="tableInputP">日引落</p>
    </div> -->
                                        </div>
                                        <br>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col col-6">
                                                <input type="text" class="form-control" />

                                            </div>
                                            <div class="col col-4">
                                                <p class="tableInputP">より毎月</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col col-6">
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="col col-4">

                                                <p class="tableInputP">日引落</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col col-4  p-3 d-flex flex-column justify-content-center align-items-center">

                                        <div class="row d-flex justify-content-center">
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label>初回</label>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">

                                                            <span class="input-group-text">￥</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (yen)">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-3 d-flex justify-content-center">
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col-3">

                                                        <label>初回</label>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">

                                                            <span class="input-group-text">￥</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (yen)">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-3 d-flex justify-content-center">
                                            <div class="col-9">
                                                <div class="row">
                                                    <div class="col-3">

                                                        <label>初回</label>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="input-group">

                                                            <span class="input-group-text">￥</span>
                                                            <input type="text" class="form-control"
                                                                aria-label="Amount (yen)">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>









    <div class="mb-5">

    </div>










    <div class="card-footer footer footer2" style="background-color: #f6f6f6;">
        <p>© 2023 tomorrow-souken.</p>
    </div>

</body>

</html>