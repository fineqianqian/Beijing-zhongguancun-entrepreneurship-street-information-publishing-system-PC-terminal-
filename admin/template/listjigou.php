<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>
<script>

  $(function(){

     $(".del").click(function(){
                    var $this=$(this);
                    if(confirm("确认删除？")){
                       $.get("deletejigou.php",{id:$(this).attr("id")},function(data){
                       
    if(data){
        $this.parent().parent().remove();
    }

                       });




                    }
                
            });


    /* $(".modify").click(function(){
                    var $this=$(this);
                    if(confirm("确认修改？")){
                       $.get("edit.php",{id:$(this).attr("id")},function(data){
                       
   

                       });




                    }
                
            });*/



  })
  
 





</script>
</head>
<body>
<?php
  require "conn.php";
  $pageNum = $_GET["pageNum"];//获取每一页的编号
  $id=$_SESSION["userid"];
  $sql = "select * from  jigou where userid = $id;";
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
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="addjigou.php?pageNum=<?php echo $dataChange ?>"> 添加内容</a> </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>图片</th>
        <th>标题</th>
        <th width="10%">更新时间</th>
        <th width="310">操作</th>
      </tr>
         


       
          <?php
           require "conn.php";
           $sql = "select id, img, title, regdate from jigou  where userid = '$id' limit $start,$dataNum";
           $id=$_SESSION["userid"];
            $result = mysqli_query($conn, $sql);
            $i=$start+1;
            while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
              
               
               $id=$row[0];
               $filePath=$row[1];
               $title=$row[2];
               $regtime=$row[3];
                echo "<tr >";
                echo " 
                    <td style=\"text-align:left; padding-left:20px;\";> <input type='checkbox' name='id[]' value=''/>$i</td> 
                    <td> <img src='$filePath' alt='' width='70' height='50' /></td> 
                     <td>$title</td>
                     <td>$regtime</td>
                     ";
                                                      
                echo "<td>";
                echo " <div class=\"button-group\">
             <a class='button border-main ' href='editjigou.php?id=$id&pageNum=$pageNum' >
                  <span class='icon-edit'></span> 修改</a>
                  <a class=\"button border-red del \" href='listjigou.php?pageNum=$pageNum'   id='$id' >
                       <span class=\"icon-trash-o\"></span> 删除</a>
             </div>";
               
                echo "</td>";
                echo "</tr>";
                $i++;
            }

            


        ?>




         
       

      <tr>
       
       <td colspan="8">
            <div class="pagelist">

           <?php

           echo "<a href='javascript:void(0)' onclick='firstPage()'>首页</a>";
                echo "<a href='javascript:void(0)' onclick='prevPage(".$pageNum.")'>上一页</a>";
                echo "<a href='listjigou.php?pageNum=1'>1</a>";
                for($i=2;$i<=$pageNums;$i++){
                  echo "<a href='listjigou.php?pageNum=".$i."'>".$i."</a>";
                }
                echo "<a href='javascript:void(0)' onclick='nextPage(".$pageNum.",".$pageNums.")'>下一页</a>";
                echo "<a href='javascript:void(0)' onclick='lastPage(".$pageNums.")'>尾页</a>";
           




           ?>  

                  

       </div>
        </td>







      </tr>

    </table>
  </div>
</form>
<script type="text/javascript">

function firstPage(){//跳转到首页
  window.location.href="listjigou.php?pageNum=1";
}
function prevPage(p){//跳转到上一页
  if(p>1){
    p=p-1;
  }
  window.location.href="listjigou.php?pageNum="+p;
}
function nextPage(p1,p2){//跳转到下一页
  if(p1>=1&&p1<p2){
    p=p1+1;
  }else{
    p=p1;
  }
  window.location.href="listjigou.php?pageNum="+p;
}
function lastPage(p){//跳转到尾页
  window.location.href="listjigou.php?pageNum="+p;
}





</script>
</body>
</html>