<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tommorrow Souken</title>
     <!-- Add AdminLTE JS -->
     <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

     <!-- Font Awesome -->
     <link
       rel="stylesheet"
       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     />
 
     <!-- Add AdminLTE CSS -->
     <link
       rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"
     />

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

     <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

     <!-- ADMIN CSS -->
     <link rel="stylesheet" href="./admin.css">


      <!-- TABLE CSS -->
      <link rel="stylesheet" href="./table.css">
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
    


      <div class="container mt-5">
        <h5><strong>加盟店一覧</strong></h5>
      </div>
      <div class="container filterContainer2 mt-3" style="background-color: #f6f6f6;">
        <div class="row ">
          <div class="col-2">
            
            <div class="form-group">
              <label>加盟店名</label>
             <input type="text" class="form-control">
              </div>
          </div>
          <div class="col-2">
           
            <div class="form-group">
              <label>業種</label>
              <select class="form-control">
              <option>--</option>
              <option>option 2</option>
           
              </select>
              </div>
          </div>
          <div class="col-2">
      
            <div class="form-group">
              <label>状態</label>
              <select class="form-control">
              <option>--</option>
              <option>option 2</option>
           
              </select>
              </div>
          </div>
          <div class="col-2">
            <label for="">開始</label>
            <input type="date" class="form-control" id="dateInput">
          </div>
          <div class="col-2">
            <label for="">終了</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-2 d-flex align-items-center justify-content-center">
    
            <button type="submit" class="innerBtn btn ">絞り込み</button>
    
          </div>
        </div>
      </div>
      <div class="container mt-4 mb-1">   <div style="display: flex; justify-content: end;">
        <div class="col-2"><button type="submit" class="btn  btn-block signInBtn">新規加盟店登録</button></div>
      </div></div>
      <div class="container"> 
        <div class="table-responsive resTable">
          <table class="table table-striped table-hover" id="myTable">
            <!-- <caption>加盟店一覧</caption> -->
            <thead class="tableHeader">
              <tr>
                <th class="tableHeader">加盟店番号</th>
                <th class="tableHeader">加盟店名</th>
                <th class="tableHeader">業種</th>
                <th class="tableHeader">状態</th>
                <th class="tableHeader">契約開始</th>
                <th class="tableHeader">契約終了</th>
                <th class="tableHeader">アクション </th>
    
              </tr>
            </thead>
            <tbody>
              <tr >
                <td>100001</td>
                <td>ブルーガーデン／本部</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/07/22</td>
                <td>2024/07/27</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100002</td>
                <td>アソートインターナショナルヘア／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/07/24</td>
                <td>2024/07/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100003</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100004</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100005</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100006</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100007</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100008</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100009</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td>100010</td>
                <td>リラックスサロン／店舗</td>
                <td>エステサロン</td>
                <td>利用可能</td>
                <td>2023/08/24</td>
                <td>2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px;"><a href="./navtabs2.html">加盟店編集</a> / <a href="">契約一覧</a></td>
              </tr>
              <tr>
                <td style="color: red;">100011</td>
                <td style="color: red;">リラックスサロン／店舗</td>
                <td style="color: red;">エステサロン</td>
                <td style="color: red;">利用不可</td>
                <td style="color: red;">2023/08/24</td>
                <td style="color: red;">2024/08/24</td>
                <td class="d-flex justify-content-center" style="gap: 15px; color: red;"><a href="./navtabs2.html" style="color: red;">加盟店編集</a> / <a href="" style="color: red;">契約一覧</a></td>
              </tr>
            </tbody>
          </table>
        </div>
    
        
        <nav aria-label="Page navigation example" class="d-flex justify-content-end mt-2">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="mb-5">
    
      </div>










      <div class="card-footer footer footer2" style="background-color: #f6f6f6;">
        <p>© 2023 tomorrow-souken.</p>
      </div>
</body>
</html>