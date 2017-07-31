

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
                       $.get("delete.php",{id:$(this).attr("id")},function(data){
                       
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

<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="add.html"> 添加内容</a> </li>
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
         
<!-- 
      <tr>
        <td style="text-align:left; padding-left:20px;">
            <input type="checkbox" name="id[]" value="" /> 1</td>
        <td width="10%"><img src="../images/11.jpg" alt="" width="70" height="50" /></td>
         <td>这是一套MUI后台精美管理系统，感谢您的支持</td>
         <td>2016-07-01</td>
         <td>
             <div class="button-group">
             <a class="button border-main" href="edit.html">
                  <span class="icon-edit"></span> 修改</a>
                  <a class="button border-red" href="javascript:void(0)" onclick="return del(id)">
                       <span class="icon-trash-o"></span> 删除</a>
             </div>
           </td>
       </tr> -->

       
          <?php
           require "conn.php";
           $sql = "select id, img, title, regdate from news ";

            $result = mysqli_query($conn, $sql);
            $i=1;
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
             <a class='button border-main ' href='edit.php?id=$id' >
                  <span class='icon-edit'></span> 修改</a>
                  <a class=\"button border-red del \" href='list.php'   id='$id' >
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
                  <a href="">上一页</a>
                  <span class="current">1</span>
                  <a href="">  2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a></div></td>
      </tr>

    </tabl
    e>
  </div>
</form>
<script type="text/javascript">
//删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
        /*window.location.href="../delete.php?id="+id;*/

	}else{
        alert(1);
    }
}
</script>
</body>
</html>