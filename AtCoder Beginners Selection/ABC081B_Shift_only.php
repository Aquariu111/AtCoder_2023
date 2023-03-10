<?php
fgets(STDIN);
$num = trim(fgets(STDIN));
$num = explode(' ', $num);
 
$count = 0;
$odd = false;
 
while (!$odd) {
  foreach ($num as $key => $value) {
    if($value % 2 == 0){
      $num[$key] = $value / 2;
    }else{
      $odd = true;
      break;
 
    }
  }
  $count++;
}
echo $count-1;

/*
問題文
黒板に 
N 個の正の整数 
A 
1
​
 ,...,A 
N
​
  が書かれています．

すぬけ君は，黒板に書かれている整数がすべて偶数であるとき，次の操作を行うことができます．

黒板に書かれている整数すべてを，
2 で割ったものに置き換える．
すぬけ君は最大で何回操作を行うことができるかを求めてください．

制約
1≤N≤200
1≤A 
i
​
 ≤10 
9
 
入力
入力は以下の形式で標準入力から与えられる。

N
A 
1
​
  
A 
2
​
  ... 
A 
N
​
 
出力
すぬけ君は最大で何回操作を行うことができるかを出力せよ．

入力例 1 
Copy
3
8 12 40
出力例 1 
Copy
2
最初，黒板には 
[8,12,40] が書かれています． このとき，書かれている整数はすべて偶数なので，操作を行うことができます．

1 回操作を行った後，黒板には 
[4,6,20] が書かれています． 再び，書かれている整数はすべて偶数なので，操作を行うことができます．

2 回操作を行った後，黒板には 
[2,3,10] が書かれています． この時，奇数 
3 が書かれているため，これ以上操作を行うことはできません．

よって，すぬけ君は最大で 
2 回操作を行うことができます．
*/