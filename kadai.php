<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Basic 課題</title>
  </head>
  <body>

<?php
  print('<h1>PHP の課題</h1>'); // この行を <h1> で表示しなさい。

  print('<h2>計算</h2>'); // この行を <h2> で表示しなさい。
  $x = 10;
  $y = 20;
      $wa = $x+$y;
      $sa = $x-$y;
      $seki = $x*$y;
      $syou = $x/$y;
      print("<table border=1>
  <tr>
　　<td>和</td>
　　<td>$wa</td>
  </tr>
  <tr>
　　<td>差</td>
　　<td>$sa</td>
  </tr>
  <tr>
　　<td>積</td>
　　<td>$seki</td>
  </tr>
  <tr>
　　<td>商</td>
　　<td>$syou</td>
  </tr>
  </table>");
     
// $x と $yの和、差、積、商を php で計算して表示しなさい。
// 可能であれば、表形式(table) で表示しなさい。

  print('<h2>文字列</h2>'); // この行を <h2> で表示しなさい。
  $base = '21611';
  $personal = '499';
      echo "$base$personal";
// $base と $personal を連結し、表示しなさい。

  print('<h2>変数定義のチェック</h2>'); // この行を <h2> で表示しなさい。
      
        if (isset($x))
        {
   print("x 1 <br>");
}
      else{
   print("x 1");
}
        if (isset($y))
        {
   print("y 1 <br>");
}
      else{
   print('y 0');
}
    
        if (isset($z))
        {
   print('z 1');
}
      else{
   print('z 0');
}
  // $x, $y, $z のそれぞれについて、その変数がこの場所で定義されているかどうか表示しなさい。
  // 動的にチェックすること。
 ?>

 <hr />

期待される出力：

<h1>PHP の課題</h1>
<h2>計算</h2>
<table>
  <tr><td>和</td><td>30</td></tr>
  <tr><td>差</td><td>-10</td></tr>
  <tr><td>積</td><td>200</td></tr>
  <tr><td>商</td><td>0.5</td></tr>
</table>

<h2>文字列</h2>

21611499

<h2>変数定義のチェック</h2>
<table>
  <tr><td>x</td><td>1</td></tr>
  <tr><td>y</td><td>1</td></tr>
  <tr><td>z</td><td>0</td></tr>
</table>



  </body>
</html>
