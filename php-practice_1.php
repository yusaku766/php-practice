<?php
// Q1 変数と文字列
$name = '田中';

echo "私の名前は「" .$name. "」です。";

// Q2 四則演算
$num = 5*4;
print_r($num);
$num /= 2;
print_r($num);

// Q3 日付操作
$today = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、".$today."です。"

// Q4 条件分岐-1 if文
$device = 2;
if ($device === 1) {
    echo '使用OSは、windowsです。';
}
if ($device === 2){
    echo '使用OSは、macです。';
}
else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 27;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$kanto = ['茨城県','群馬県','埼玉県','栃木県','千葉県','神奈川県','東京都'];
echo $kanto[3]."と".$kanto[4]."は関東地方の都道府県です。";

// Q7 連想配列-1
$kentyo = ['東京都' => '新宿区', '神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];
foreach ($kentyo as $value){
    echo $value."\n";
}

// Q8 連想配列-2
$kentyo = ['東京都' => '新宿区', '神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];
foreach ($kentyo as $key => $value){
if ($key === '埼玉県'){
echo $key."の県庁所在地は、".$value."です。";
}
}

// Q9 連想配列-3
$kentyo = ['東京都' => '新宿区', '神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市','北海道' => '札幌市','沖縄県' => '那覇市'];
$kanto = ['東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県'];
foreach ($kentyo as $key => $value){
if(in_array($key,$kanto)){
    echo $key."の県庁所在地は、".$value."です。"."\n";
}
else{
    echo $key."は関東地方ではありません。"."\n";
}
}

// Q10 関数-1
function hello($name)
{
    echo $name."さん、こんにちは。"."\n";
}

hello('佐藤');
hello('渡辺');

// Q11 関数-2
function calcTaxInPrice($price) {
    $taxInpraice = $price * 1.1;
    echo $price."円の商品の税込価格は".$taxInpraice."円です。";
    }
    
    calcTaxInPrice('1000');

// Q12 関数とif文
function distinguishNum($number){
    if($number % 2 === 0){
        echo $number."は偶数です。";
    }
    else{
        echo $number."は奇数です。"."\n";
    }
    }
    
    distinguishNum(11);
    distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrad($Grade){
    switch($Grade){
       case 'A':
       case 'B':
           echo "合格です。"."\n";
           break;
       
       case 'C':
           echo "合格ですが追加課題があります。"."\n";
           break;
           
       case 'D':
           echo "不合格です。"."\n";
           break;
           
       default:
           echo "判定不明です。講師に問い合わせてください。"."\n";
           break;
           
   }
   }
   
   evaluateGrad('B');
   evaluateGrad('E');

?>