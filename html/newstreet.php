<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>新闻街区</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.10.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
</head>
<?php
  require "../admin/template/conn.php";
  $pageNum = $_GET["pageNum"];//获取每一页的编号
 
  $sql = "select * from  news ;";
  $resultCount = mysqli_query($conn,$sql);
  $dataNums = mysqli_num_rows($resultCount);
  $dataNum = 6;
  $dataRem=$dataNums/$dataNum;
    $pageNums=ceil($dataRem);//页数
    if($dataRem==0){//当页面里面什么数据都没有，也要显示页面1
      $dataChange=1;
    }
    else if(is_int($dataRem)&&$dataRem>0){//当页面正好排满，如果添加数据，要开始新的一个页面。
      $dataChange=$pageNums+1;
    }
    else{
      $dataChange=$pageNums;
    }

    $start=($pageNum-1)*$dataNum;//当前页数据起始下标


?>
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
                    <li><a href="index.php">首页</a></li>
                    <li><a href="newstreet.php?pageNum=1">街区新闻</a></li>
                    <li><a href="jigou.php?pageNum=1">入驻机构</a></li>
                    <li><a href="huodong.php?pageNum=1">街区活动</a></li>
                    <li><a href="contact.html">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=" row banner1">
        <div class="col-md-12 col-xs-12 ">
            集聚创业服务&nbsp孵化科技企业&nbsp孕育企业文化
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active title5">
    街区新闻
  </a>
                    <a href="#" class="list-group-item">街区新闻</a>
                </div>
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            首页>街区新闻
                        </td>
                    </tr>



                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-md-12   title4">
                                    <a href="#">中关村创业者瞄准痛点抢先机</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 title4">
                                    <div style="width:auto;">
                                        <img src="images/58abb87502963.jpg" style="width: 100%" alt="" width="100" height="100">
                                    </div>
                                </div>
                                <div class="col-md-9 content2">
                                    &nbsp&nbsp中国第一个国家级高新技术产业开发区、第一个国家自主创新示范区、第一个国家级人才特区，被誉为“中国的硅谷”的中关村经过多年告诉发展，吸引并孕育出一大批拥有自主知识产权的新技术。
                                </div>
                            </div>
                        </td>
                    </tr>


          <?php
           require "../admin/template/conn.php";
            
           $sql = " 
           select id,img,title,regdate,content
              from news limit $start,$dataNum;
           ";

            $result = mysqli_query($conn, $sql);
            $i=$start+1;

            
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              
               
               $id=$row["id"];
               $filePath=$row["img"];
               $title=$row["title"];
               $regtime=$row["regdate"];
               $content=$row["content"];
                echo "           

                      <tr>
                        <td>
                            <div class=\"row\">
                                <div class=\"col-md-12   title4\">
                                    <a href=\"#\">$title</a>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-3 title4\">
                                    <div style=\"width:auto;\">
                                        <img src=\"../admin/template/$filePath \" style=\"width: 100%\" width=\"100 \" height=\"100\" >
                                    </div>
                                </div>
                                <div class=\"col-md-9 content2\">
                                    &nbsp&nbsp$content
                                </div>
                            </div>
                        </td>
                    </tr>   




                   ";

                 $i++;
            }




            
 
        ?>


                    
                    
                  
                  
                    <tr>
                        <td align="center">
                            <ul class="pagination pagination-lg">



                
                               <?php
                echo " <li><a href='javascript:void(0)' onclick='firstPage()'>首页</a></li>";
                echo "<li><a href='javascript:void(0)' onclick='prevPage(".$pageNum.")'>上一页</a></li>";
                echo "<li><a href='newstreet.php?pageNum=1'>1</a></li>";
                for($i=2;$i<=$pageNums;$i++){
                  echo "<li><a href='newstreet.php?pageNum=".$i."'>".$i."</a></li>";
                }
                echo "<li><a href='javascript:void(0)' onclick='nextPage(".$pageNum.",".$pageNums.")'>下一页</a><li>";
                echo "<li><a href='javascript:void(0)' onclick='lastPage(".$pageNums.")'>尾页</a><li>";    
                                 


                               ?>



                            </ul>
                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
    <div class="row foot">
        <div class="col-md-12 col-xs-12 foot1">
            版权所有：北京海置科创科技服务有限公司 京ICP备14017783号-1 京公网安备11010802017670
        </div>
    </div>



    <script type="text/javascript">

// 分页跳转部分
function firstPage(){//跳转到首页
  window.location.href="newstreet.php?pageNum=1";
}
function prevPage(p){//跳转到上一页
  if(p>1){
    p=p-1;
  }
  window.location.href="newstreet.php?pageNum="+p;
}
function nextPage(p1,p2){//跳转到下一页
  if(p1>=1&&p1<p2){
    p=p1+1;
  }else{
    p=p1;
  }
  window.location.href="newstreet.php?pageNum="+p;
}
function lastPage(p){//跳转到尾页
  window.location.href="newstreet.php?pageNum="+p;
}





</script>
</body>

</html>
