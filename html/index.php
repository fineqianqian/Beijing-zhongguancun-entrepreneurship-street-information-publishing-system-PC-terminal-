<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>首页</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/js.js"></script>
</head>

<body>
    <nav class="navbar  navbar-default abc">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="images/logo.png" id="topimg">
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right pad">
                    <li><a href="#">首页</a></li>
                    <li><a href="newstreet.php?pageNum=1">街区新闻</a></li>
                    <li><a href="jigou.php?pageNum=1">入驻机构</a></li>
                    <li><a href="huodong?pageNum=1">街区活动</a></li>
                    <li><a href="contact.html">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="swiper-container" id="swibanner" style="width:auto">
        <div class="swiper-wrapper" id="swiwra" style="width:auto">
            <div class="swiper-slide"><img src="images/banner_n_07.jpg" alt="" style="width: 100%;"></div>
            <div class="swiper-slide"><img src="images/banner_n_07s.jpg" alt="" style="width: 100%;"></div>
            <div class="swiper-slide"><img src="images/banner_10.jpg" alt="" style="width: 100%;"></div>
            <div class="swiper-slide"><img src="images/banner_12.jpg" alt="" style="width: 100%;"></div>
        </div>
        <div class="swiper-pagination"></div>
        <!-- 添加左右控制按钮 -->
        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title1">街区新闻</h3>
            </div>
        </div>
        <div class="row">
             <div class="col-md-6 col-xs-12">
               <div style="width: auto">
                   <img src="images/bng5.jpg" alt="" style="width:100%;">
               </div>
           </div>
            <div class="col-md-6 col-xs-12">
            <!-- <span id="title2">
                [大街访谈]对话Founders Space创始人...
            </span>
            <p class="title2_txt2">
                3月15日，由北京大学创业训练营、中心前沿经济与中关村创业大街联合主办的“创业私奔·硅谷顶级孵化器Foude...
            </p>
                <ul class="list-group title2_txt2">
                    <li>2017梦想者市集活动北京站首发</li>
                    <li>中央社会主义学院民主党派干部到访创业大街</li>
                    <li>全国妇联领导调研中关村创业大街</li>
                    <li>[大街访谈]对话Founders Space创始人</li>
                    <li>全国妇联领导调研中关村创业大街</li>
                    <li>民革中央建言：搭建青年创业就业服务平台</li>
            
            
                </ul>  -->


           <?php
           require "../admin/template/conn.php";
            
           $sql = " 
           SELECT * from news where id = (SELECT max(id) FROM news);
           ";

            $result = mysqli_query($conn, $sql); 

            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              
               
               $id=$row["id"];
               
               $title=$row["title"];
               
               $content=$row["content"];
                echo "           
                      <span id=\"title2\">
                $title
            </span>
            <p class=\"title2_txt2\">
                $content
            </p>
                    


                   ";

                
            }

            ?>
            <ul class="list-group title2_txt2">

            <?php
           
              $sql1 = " 
            SELECT * from news  order by id desc  limit 0,6;
           ";

            $result1 = mysqli_query($conn, $sql1);            
            while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
              
               
              
               
               $title1=$row1["title"];
                echo "           
                    <li><a href=\" newstreet.php?pageNum=1 \">$title1</a></li>
                   


                   ";

                
            }


            

         ?>




            
 
      
   
         </ul>

             
         </div>
    
        </div>


        <div class="row">
            <h3 class="title1">入驻机构</h3>
        </div>



        <div class="row">
        
            
            <?php           
              $sql2 = " 
           SELECT * from jigou order by id desc limit 0,3;
           ";

            $result2 = mysqli_query($conn, $sql2);            
            while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
              
               
              
               $filePath2=$row2["img"];
               $title2=$row2["title"];
               $content2=$row2["content"];
                echo "           
                    
                   <div class=\"col-md-4 \">
         <div class=\"col-md-4 \">
             <img src=\"../admin/template/$filePath2 \"  class=\"circle\">
         </div>
         <div class=\"col-md-8 \">
             <p class=\"title3\">$title2</p>
             <p class=\"title3_txt\">$content2</p>
         </div>
                 </div>


                   ";

                
            }
         ?>




        </div>


        <div class="row" style="margin-top: 10px">

        
           <?php           
              $sql3 = " 
           SELECT * from jigou order by id desc limit 3,3;
           ";

            $result3 = mysqli_query($conn, $sql3);            
            while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
              
               
              
               $filePath3=$row3["img"];
               $title3=$row3["title"];
               $content3=$row3["content"];
                echo "           
                    
                   <div class=\"col-md-4 \">
         <div class=\"col-md-4 \">
             <img src=\"../admin/template/$filePath3 \"  class=\"circle\">
         </div>
         <div class=\"col-md-8 \">
             <p class=\"title3\">$title3</p>
             <p class=\"title3_txt\">$content3</p>
         </div>
                 </div>


                   ";

                
            }
         ?>






        </div>
        <div class="row" style="margin-top: 10px">
          
          <?php           
              $sql4 = " 
           SELECT * from jigou order by id desc limit 6,3;
           ";

            $result4 = mysqli_query($conn, $sql4);            
            while($row4= mysqli_fetch_array($result4,MYSQLI_ASSOC)){
              
               
              
               $filePath4=$row4["img"];
               $title4=$row4["title"];
               $content4=$row4["content"];
                echo "           
                    
                   <div class=\"col-md-4 \">
         <div class=\"col-md-4 \">
             <img src=\"../admin/template/$filePath4 \"  class=\"circle\">
         </div>
         <div class=\"col-md-8 \">
             <p class=\"title3\">$title4</p>
             <p class=\"title3_txt\">$content4</p>
         </div>
                 </div>


                   ";

                
            }
         ?>


        </div>


















        <div class="row">
            <h3 class="title1">街区活动</h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12" id="bg1" style="padding:0;overflow: hidden;background: gray;position: relative;z-index:0">
              
				  
			<?php           
              $sql5 = " 
           SELECT * from active order by id desc limit 0,1;
           ";

            $result5 = mysqli_query($conn, $sql5);            
            while($row5= mysqli_fetch_array($result5,MYSQLI_ASSOC)){
              
               
              
               $filePath5=$row5["img"];
               $title5=$row5["title"];
               $content5=$row5["content"];
               $regtime5=$row5["regdate"];
                echo "           
                    
                 <img src=\" ../admin/template/$filePath5  \" style=\"width: 100%;z-index: 3;position: relative;\" class=\"ami\"> 
                 <div class=\"background1\">
                    $content5
                    <br>
                    时间：$regtime5
                  </div>


                   ";            
            }
         ?>
				
				
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" style='width:100%;  padding:0;overflow: hidden;background: gray;position: relative;z-index:0' id="bg2">
                       
						
						<?php           
              $sql6 = " 
           SELECT * from active order by id desc limit 1,1;
           ";

            $result6 = mysqli_query($conn, $sql6);            
            while($row6= mysqli_fetch_array($result6,MYSQLI_ASSOC)){
              
               
              
               $filePath6=$row6["img"];
               $title6=$row6["title"];
               $content6=$row6["content"];
               $regtime6=$row6["regdate"];
                echo "           
                    
					 <img src=\"../admin/template/$filePath6\" class=\"right1\"  style='width:100%; z-index: 3;position: relative; '>
                        <div class=\"background1\">
                            $content6
                             <br>
                    时间：$regtime6
                        </div>
                


                   ";            
            }
         ?>																														
                   </div> 
                </div>

                <div class="row">
                    <div class="col-md-6 col-xs-6" style='  padding:0;overflow: hidden;background: gray;position: relative;z-index:0' id="bg3">
                        
						<?php           
              $sql7 = " 
           SELECT * from active order by id desc limit 2,1;
           ";

            $result7 = mysqli_query($conn, $sql7);            
            while($row7= mysqli_fetch_array($result7,MYSQLI_ASSOC)){
              
               
               $regtime7=$row7["regdate"];
               $filePath7=$row7["img"];
               $title7=$row7["title"];
               $content7=$row7["content"];
                echo "           
                    
					 <img src=\"../admin/template/$filePath7\"  class=\"right2 d1\" style='width:100%; z-index: 3; position: relative;'>
                        <div class=\"background1\" >
                          $content7 
                            
                             <br>
                         时间：$regtime7
                        </div>           
                   ";            
            }
         ?>				
						
						
						
						
                    </div>
                    <div class="col-md-6 col-xs-6" style=' padding:0;overflow: hidden;background: gray;position: relative;z-index:0' id="bg4">
                        
						<?php           
              $sql8 = " 
           SELECT * from active order by id desc limit 3,1;
           ";

            $result8 = mysqli_query($conn, $sql8);            
            while($row8= mysqli_fetch_array($result8,MYSQLI_ASSOC)){
              
               
              
               $filePath8=$row8["img"];
               $title8=$row8["title"];
               $content8=$row8["content"];
               $regtime8=$row8["regdate"];
                echo "           
                    <img src=\"../admin/template/$filePath8\"  class=\"right2 d2\" style='width:100%; z-index: 3; position: relative; '>
                        <div class=\"background1\" >
                         $content8 
                          <br>
                         时间：$regtime7  
                        </div>
					         
                   ";           
            }
         ?>		

						
						
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row foot">
        <div class="col-md-12 col-xs-12 foot1">
            版权所有：北京海置科创科技服务有限公司 京ICP备14017783号-1 京公网安备11010802017670
        </div>
    </div>
</body>

</html>
