<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></link>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./common.css"></link>

    
</head>
<body>
    <nav class="navbar navbar-expand  navbarStyle1">
        <div class="d-flex justify-content-between w-100 align-items-center headerDiv">
            <a class="navbar-brand">
                <img src="./assets/beauty-face-women-salon-vector-icon-logo-template-illustration-design-female-beautiful-symbol-shape-graphic-simple-art-background-159397383.webp" height="60" width="90" alt="Tommorrow Souken Logo" class="brand-image">
            </a>

            <div class="d-flex align-items-center" style="gap: 15px;">
              <div>
                <b>
                  契約番号：　100000100001
                </b>
              </div>
              <a href="./login2.html">
                <button type="submit" class="btn  btn-block signInBtn">ログアウト</button>
              </a>
            </div>
        </div>
    </nav>

    <div class="container card shadow  mt-5 mb-5">

        <!-- content -->
     
            <!-- 1st card -->
            <div class="tab-pane fade show active p-3" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class= " container2 mt-2">
             
                <div class="container mt-4 filterContainer2">
                  <h6 style="text-decoration: underline;"><strong>1.入会</strong></h6>
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
                <div class="  container2 mt-2">
                
                  <div class="container  filterContainer2">
                    <h6 style="text-decoration: underline;"><strong>2.役務内容</strong></h6>
                      <label><b>役務提供期間</b></label>
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
                          <!-- <label for="">終了日</label>
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon1" style="border: none;"> &#165</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Username"
                              aria-describedby="basic-addon1">
                          </div> -->
                        </div>
                        <div class="table-responsive resTable mt-2">
                          <table class="table table-striped table-hover">
                            <thead class="tableHeader">
                              <tr >
                                <th class="tableHeader">コース名</th>
                                <th class="tableHeader">時間(分)</th>
                                <th class="tableHeader">単価</th>
                                <th class="tableHeader">回数</th>
                                <th class="tableHeader">総時間数</th>
                                <th class="tableHeader">金額（税抜）</th>
                                
                    
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>ストレスリカバリー</td>
                                <td>60</td>
                                <td>¥10000</td>
                                <td>2</td>
                                <td>120</td>
                                <td>¥20000</td>
                            
                              </tr>
                              <tr>
                                <td>HOTストーン</td>
                                <td>60</td>
                                <td>¥10000</td>
                                <td>1</td>
                                <td>60</td>
                                <td>¥10000</td>
                             
                              </tr>
                              <tr>
                                <td>アロマフェイシャル</td>
                                <td>60</td>
                                <td>¥30000</td>
                                <td>2</td>
                                <td>120</td>
                                <td>¥20000</td>
                                
                              </tr>
                              <tr>
                                <td>アンチエイジングケア</td>
                                <td>60</td>
                                <td>¥30000</td>
                                <td>3</td>
                                <td>180</td>
                                <td>¥90000</td>
                                
                              </tr>
                              <tr>
                                <td>アイリスト</td>
                                <td>60</td>
                                <td>¥20000</td>
                                <td>1</td>
                                <td>60</td>
                                <td>¥20000</td>
                                
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td>合計</td>
                                <td>9</td>
                                <td>540</td>
                                <td>¥160000</td>
                                
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>合計</td>
                                <td>¥176000</td>
                                
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
              
                    </div>
                  </div>
                  <div class="  container2 mt-2">
                
                    <div class="container  filterContainer2">
                      <h6 style="text-decoration: underline;"><strong>3.関連商品</strong></h6>
                        <label><b>役務提供期間</b></label>
                        <div class="row">
                         
                          <div class="table-responsive resTable mt-2">
                            <table class="table table-striped table-hover">
                              <thead class="tableHeader">
                                <tr >
                                  <th class="tableHeader">商品名</th>
                                  <th class="tableHeader">種類</th>
                                  <th class="tableHeader">単価</th>
                                  <th class="tableHeader">数量</th>
                                  <th class="tableHeader">金額（税抜）</th>
                                  <th class="tableHeader"> 軽減税率対象</th>
                                  
                      
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>オイル</td>
                                  <td>化粧品</td>
                                  <td>¥5000</td>
                                  <td>2</td>
                                  <td>¥10000</td>
                                  <td style="text-align: center;"><input type="checkbox"></td>
                                </tr>
                                <tr>
                                  <td>クリーム</td>
                                  <td>化粧品</td>
                                  <td>¥4000</td>
                                  <td>1</td>
                                
                                  <td>¥4000</td>
                                  <td style="text-align: center;"><input type="checkbox"></td>
                               
                                </tr>
                                <tr>
                                  <td>サプリ </td>
                                  <td>いわゆる健康食品</td>
                                  <td>¥1000</td>
                                  <td>2</td>
                                  
                                  <td>¥2000</td>
                                  <td style="text-align: center;"><input type="checkbox"></td>
                                  
                                </tr>
                                <tr>
                                  <td>ドライハードワックス</td>
                                  <td>化粧品</td>
                                  <td>¥2000</td>
                                  <td>3</td>
                                  
                                  <td>¥6000</td>
                                  <td style="text-align: center;"><input type="checkbox"></td>
                                  
                                </tr>
                                <tr>
                                  <td>ヘナ</td>
                                  <td>化粧品</td>
                                  <td>¥2000</td>
                                  <td>1</td>
                                  <td>¥2000</td>
                                  <td style="text-align: center;"><input type="checkbox"></td>
                                  
                                </tr>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td>合計</td>
                                  <td>12</td>
                                  <td>￥26280</td>
                                  <td></td>
                                  
                                </tr>
                               
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                
                      </div>
                    </div>
                    <div class="  container2 mt-2">
                
                      <div class="container  filterContainer2">
                        <h6 style="text-decoration: underline;"><strong>4.税率別内訳</strong></h6>
                          <!-- <label><b>役務提供期間</b></label> -->
                          <div class="row">
                           
                            <div class="table-responsive resTable mt-2">
                              <table class="table table-striped table-hover">
                               
                                <tbody>
                                  <tr>
                                    <td>8%対象金額（税抜）： ￥6000　</td>
                                    <td>消費税額：￥4800</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>10%対象金額（税抜）：￥183000　　</td>
                                    <td>消費税額：￥18300</td>
                                    
                                  </tr>
                                 
                                 
                                 
                                </tbody>
                              </table>
                            </div>
                          </div>
                  
                        </div>
                      </div>
                      <div class="  container2 mt-2">
                
                        <div class="container  filterContainer2 d-flex align-items-center gap-3">
                          <h6 ><strong>お支払総合計金額 (1 + 2 + 3 + 4)</strong></h6>
                           <div>
                            <input type="text" class="form-control">
                           </div>
                       
                    
                          </div>
                        </div>
                        <div class="  container2 mt-2">
                
                          <div class="container  filterContainer2">
                            <h6 style="text-decoration: underline;"><strong>個人情報</strong></h6>
                              <!-- <label><b>役務提供期間</b></label> -->
                              <div class="row">
                               
                               <div class="col-3">
        <label>氏名</label>
                               </div>
                               <div class="col-3">
        <input type="text" class="form-control">
                               </div>
                               <div class="col-6">
        
                               </div>
                      
                            </div>
                            <div class="row mt-2">
                               
                              <div class="col-3">
        <label>生年月日</label>
                              </div>
                              <div class="col-3">
        <input type="date" class="form-control">
                              </div>
                              <div class="col-6">
        
                              </div>
                     
                           </div>
                          </div>
                
            </div>
            <div class="  container2 mt-2">
                
              <div class="container  filterContainer2">
                <h6 style="text-decoration: underline;"><strong>ご住所</strong></h6>
                  <!-- <label><b>役務提供期間</b></label> -->
                  <div class="row">
                   
                   <div class="col-3">
        <label>〒</label>
                   </div>
                   <div class="col-3">
                    <div class="row">
                      <div class="col-6">
        <input type="text" class="form-control">
                      </div>
                      <div class="col-6">
                        <input type="text" class="form-control">
                      </div>
                    </div>
        <!-- <input type="text" class="form-control"> -->
                   </div>
                   <div class="col-6">
        
                   </div>
          
                </div>
                <div class="row mt-2">
                   
                  <div class="col-3">
        <label>都道府県</label>
                  </div>
                  <div class="col-3">
                
                    
                      <select class="form-control">
                      <option>--</option>
                      <option>option 2</option>
                   
                      </select>
                      
                  </div>
                  <div class="col-6">
        
                  </div>
         
               </div>
               <div class="row mt-2">
                   
                <div class="col-3">
        <label>住所１</label>
                </div>
                <div class="col-3">
        <textarea class="form-control"> </textarea>
                </div>
                <div class="col-6">
        
                </div>
        
             </div>
             <div class="row mt-2">
                   
              <div class="col-3">
        <label>住所２</label>
              </div>
              <div class="col-3">
                <textarea class="form-control"> </textarea>
              </div>
              <div class="col-6">
        
              </div>
        
           </div>
           <div class="row mt-2">
                   
            <div class="col-3">
        <label>電話番号</label>
            </div>
            <div class="col-3">
        <input type="date" class="form-control">
            </div>
            <div class="col-6">
        
            </div>
        
         </div>
           
              </div>
        
        </div>
        <div class="  container2 mt-2">
                
            <div class="container  filterContainer2">
              <h6 style="text-decoration: underline;"><strong>お仕事</strong></h6>
                <!-- <label><b>役務提供期間</b></label> -->
              <div class="row">
                <div class="col-3">

                
                <label>支払方法</label>
                <select class="form-control">
                    <option>--</option>
                    <option>option 2</option>
                 
                    </select>
                </div>
              </div>
<div class="container mt-2">
              <div class="row">
            <div class="col-6">
 <div class="row">
  <div class="col-6 p-3" style="border: 2px solid #f3dade">
    <b>お支払方法</b>
  </div>
  <div class="col-6 p-3" style="border: 2px solid #f3dade; border-left: 0px;">
<input type="text" class="form-control">
  </div>
  <div class="col-6 p-3" style="border: 2px solid #f3dade; border-top: 0px;">
    <b>お支払時期</b>
      </div>
      <div class="col-6 p-3" style="border: 2px solid #f3dade; border-left: 0px; border-top: 0px;">
        <input type="date" class="form-control">
      </div>
      <div class="col-6 p-3" style="border: 2px solid #f3dade; border-top: 0px;">
       <b>金額(分割払手数料含む)</b>
          </div>
          <div class="col-6 p-3" style="border: 2px solid #f3dade; border-left: 0px; border-top: 0px;">
            <input type="text" class="form-control">
          </div>
 </div>
            </div>
            <div class="col-6">

            </div>
              </div>
            </div>
            <div class="mt-2">
<label>前受金保全措置については以下のとおりです。</label>
<div class="container">
    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">行っていません。</label>
</div>
<div class="container">
    <div class="row">
      <div class="col-3">
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">行っています。基本的には</label>
      </div>
      <div class="col-5">
        <input type="text" class="form-control">
      </div>
    </div>
 
</div>
            </div>
       
         
            </div>
      
      </div>


      <div class="  container2 mt-2">
                
        <div class="container  filterContainer2">
          <h6 style="text-decoration: underline;"><strong>添付書面</strong></h6>
        <div class="row">
         <div class="col-6">
          <div class="row">
              <div class="col-6">
<input type="text" class="form-control" value="書面 - 1 : ">
              </div>
              <div class="col-6">
                <div class="input-group flex-nowrap">
                 
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    <span class="input-group-text" id="addon-wrapping">ダウンロード</span>
                </div>
              </div>
          </div>
         </div>
         <div class="col-6">

         </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
             <div class="row">
                 <div class="col-6">
   <input type="text" class="form-control" value="書面 - 2: ">
                 </div>
                 <div class="col-6">
                   <div class="input-group flex-nowrap">
                    
                       <input type="text" class="form-control" placeholder="Download1.pdf" aria-label="Username" aria-describedby="addon-wrapping">
                       <span class="input-group-text" id="addon-wrapping">ダウンロード</span>
                   </div>
                 </div>
             </div>
            </div>
            <div class="col-6">
   
            </div>
           </div>
         
   
     
        </div>
  
  </div>

  <div class="  container2 mt-2">
                
    <div class="container  filterContainer2">
      <h6 style="text-decoration: underline;"><strong>サイン</strong></h6>
      <div class="wrapper">
        <canvas id="signature-pad" width="400" height="200"></canvas>
    </div>
   
     

 
    </div>

</div>
            <!-- 2nd card -->
         
 <div class="row gap-3 d-flex justify-content-end">
<div class="button">
    契約締結
</div>
<div class="button">
    契約締結
</div>
 </div>       
         
          </div>
        
            </div>sdfsffds
            <div class="margin-bottom">
            </div>
            <div class="card-footer footer">
                <p>© 2023 tomorrow-souken.</p>
            </div>


            <script src="./script.js"></script>
    
</body>

</html>