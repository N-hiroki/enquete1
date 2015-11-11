<!--課題７　データ登録-->

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>フォーム：POST</title>
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<!--   ヘッダー-->
   <div id="header" class="container" style="background:#8be;">
   <h2><i class="glyphicon glyphicon-star"></i>アンケート.COM</h2>
   </div>
   
   
   <div class="container">
        <div class="row">
<!--     フォーム-->
                  <div class="container" style="padding:20px 0">
                     <!--                   アンケート-->
                      <form class="form-inline" method="get" action="output_data.php">
                          <div class="form-group">
<!--                          name一致-->
            <!--               Q1-->
                            <label class="contorol-label" for="an_1">あなたは、「アンケート.COM」を何から見聞きして知りましたか。</label>
                            <br>
                              <textarea type="text" id="an_1"  name="an_1" class="form-control" placeholder="Q１"></textarea>
                            <br>
            <!--                  Q2-->
                              <label class="contorol-label" for="an_2">「アンケート.COM」にどのくらいの頻度でアクセスしてますか。</label>
                              <br>
                              <textarea type="text" id="an_2" name="an_2" class="form-control" placeholder="Q2"></textarea>
                                <br>
            <!--                  Q3-->
                              <label class="contorol-label" for="an_3">「アンケート.COM」について総合的にどのくらい満足していますか。</label>
                              <br>
                              <textarea type="text" id="an_3" name="an_3" class="form-control" placeholder="Q3"></textarea>
                                <br>
            <!--                  Q4-->
                              <label class="contorol-label" for="an_4">「アンケート.COM」に対して前問の回答した理由をお書きください。</label>
                              <br>
                              <textarea type="text" id="an_4" name="an_4" class="form-control" placeholder="Q4"></textarea>
                                <br>
            <!--                  Q5-->
                              <label class="contorol-label" for="an_5">「アンケート.COM」のウェブサイトの内容・コンテンツをどのように感じましたか。</label>
                              <br>
                              <textarea type="text" id="an_5" name="an_5" class="form-control" placeholder="Q5"></textarea>
                                <br>
            <!--                  Q6-->
                              <label class="contorol-label" for="an_6">「アンケート.COM」のデザイン・レイアウト（情報の見せ方や色使いなど）をどのように感じましたか。</label>
                              <br>
                              <textarea type="text" id="an_6" name="an_6" class="form-control" placeholder="Q6"></textarea>
                                <br>
            <!--                  Q7-->
                              <label class="contorol-label" for="an_7">「アンケート.COM」の情報の探しやすさについて、どのように感じましたか。</label>
                              <br>
                              <textarea type="text" id="an_7" name="an_7" class="form-control" placeholder="Q7"></textarea>
                                <br>
            <!--                  Q8-->
                              <label class="contorol-label" for="an_8">「アンケート.COM」は、あなたにとってどのくらい役立ちましたか。</label>
                              <br>
                              <textarea type="text" id="an_8" name="an_8" class="form-control" placeholder="Q8"></textarea>
                                <br>
            <!--                  Q9-->
                              <label class="contorol-label" for="an_9">「アンケート.COM」に対してご意見・ご要望がございましたら、ご自由にお書きください</label>
                              <br>
                              <textarea type="text" id="an_9" name="an_9" class="form-control" placeholder="Q9"></textarea>
                                <br>
                                  <!--                 送信ボタン-->
                                  <input type="submit" value="送信" class="btn btn-primary btn-lg">
            
                          </div>
                      </form>
                  </div>
            </div>
        </div>
    
    
    <div id="footer" class="container" style="color:#f88;">
    <h4 style="padding:0">ご協力ありがとうございました！！</h4></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
