﻿<html lang="lang="zh-Hant-TW"">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>畢業旅行投票</title>
</head>
<body>

<p>畢業旅行投票</p>
<form method='post' action='confirm1.php'>


<table border='1' width='100%' id='table1'>
    <tr>
        <td align='right' width='200'>學號</td>
        <td><input type='text' name='SID' size='10'>　</td>
    </tr>
    <tr>
        <td align='right' width='200'>姓名</td>
        <td><input type='text' name='SName' size='10'>　</td>
    </tr>
<p class="formp" style="background-color: lightsalmon">系別
        <select name="department">
            <optgroup label="資訊電機學院">
                <option class="form-control" value="生物資訊與醫學工程學系">生物資訊與醫學工程學系</option>
                <option class="form-control" selected="true" value="資訊工程學系">資訊工程學系</option>
                <option class="form-control" value="行動商務與多媒體應用學系">行動商務與多媒體應用學系</option>
                <option class="form-control" value="光電與通訊學系">光電與通訊學系</option>
                <option class="form-control" value="資訊傳播學系">資訊傳播學系</option>
                <optgroup label="創意設計學院">
                    <option class="form-control" value="數位媒體設計學系">數位媒體設計學系</option>
                    <option class="form-control" value="視覺傳達設計學系">視覺傳達設計學系</option>
                    <option class="form-control" value="創意商品設計學系">創意商品設計學系</option>
                    <option class="form-control" value="時尚設計學系">時尚設計學系</option>
                    <option class="form-control" value="室內設計學系">室內設計學系</option>
                    <option class="form-control" value="國際設計學士班">國際設計學士班</option>
                    <optgroup label="醫學暨健康學院">
                        <option class="form-control" value="健康產業管理學系">健康產業管理學系</option>
                        <option class="form-control" value="食品營養與保健生技學系">食品營養與保健生技學系</option>
                        <option class="form-control" value="生物科技學系">生物科技學系</option>
                        <option class="form-control" value="心理學系">心理學系</option>
                        <option class="form-control" value="護理學系">護理學系</option>
                        <option class="form-control" value="視光學系">視光學系</option>
                        <option class="form-control" value="聽力暨語言治療學系">聽力暨語言治療學系</option>
                        <option class="form-control" value="職能治療學系">職能治療學系</option>
                        <option class="form-control" value="學士後獸醫學系">學士後獸醫學系</option>
                        <optgroup label="管理學院">
                            <option class="form-control" value="經營管理學系">經營管理學系</option>
                            <option class="form-control" value="休閒與遊憩管理學系">休閒與遊憩管理學系</option>
                            <option class="form-control" value="會計與資訊學系">會計與資訊學系</option>
                            <option class="form-control" value="財務金融學系">財務金融學系</option>
                            <option class="form-control" value="財經法律學系">財經法律學系</option>
                            <option class="form-control" value="國際企業學系">國際企業學系</option>
                            <optgroup label="人文社會學院">
                                <option class="form-control" value="外國語文學系">外國語文學系</option>
                                <option class="form-control" value="社會工作學系">社會工作學系</option>
                                <option class="form-control" value="幼兒教育學系">幼兒教育學系</option>
                                <optgroup label="國際學院">
                                    <option class="form-control" value="國際學術交流中心">國際學術交流中心</option>
                                    <option class="form-control" value="創意領導中心">創意領導中心</option>
        </select></p>
    <tr>
        <td align='right' width='200'>身份證末四碼</td>
        <td><input type='text' name='SCode' size='10'></td>
    </tr>
    <tr>
        <td align='right' width='200'>選擇地點</td>
        <td><input type='radio' value='澎湖' name='SLoc'>澎湖
            <input type='radio' value='花蓮' name='SLoc'>花蓮
            <input type='radio' value='泰國' name='SLoc'>泰國</td>
    </tr>
<tr>
        <td align='right' width='200'>是否素食</td>
        <td>
<input type="radio" name="A" value="Y"> YES<br>
<input type="radio" name="A" value="N"> NO
    </tr>
    <tr>
        <td align='right' width='200'>意見</td>
        <td><input type='text' name='SComment' size='50'>　</td>
    </tr>
    <tr>
        <td align='right' width='200'>　</td>
        <td><input type='submit' name='Submit' value='投票'>　</td>
    </tr>
</table>
</form>
</body>

</html>