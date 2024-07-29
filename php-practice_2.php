<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します"."\n"."\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 20 === 0){
        echo 'tic-tac'."\n";
    }else if($i % 4 === 0){
        echo 'tic'."\n";
    }else if($i % 5 === 0){
        echo 'tac'."\n";
    }else{
        echo $i."\n";
    }
        
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

問題1
echo $personalInfos[1]['name']."の電話番号は".$personalInfos[1]['tel']."です。";

問題2
$index = 1;
foreach ($personalInfos as $info) {
    echo $index."番目の".$info['name']."のメールアドレスは".$info['mail']."で、電話番号は".$info['tel']."です。"."\n";
    $index++;
}

問題3
$ageList = [25, 30, 18];

foreach($ageList as $key=>$value){
  $personalInfos[$key]["age"]=$value;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student('120', '山田');
echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($courseName)
    {
        echo $this->studentName. "は".$courseName."の授業に参加しました。学籍番号：".$this->studentId;
    }
}

$yamada = new Student('120', '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
問題1
$today = new DateTime('2021-03-02');
$oneMonthAgo = clone $today;
$oneMonthAgo->modify('-1 month');
echo $oneMonthAgo->format('Y-m-d');

問題2
$today = new DateTime('2021-03-02');
$pastDate = new DateTime('1992-04-25');
$interval = $today->diff($pastDate);
$daysPassed = $interval->days;

echo "あの日から".$daysPassed."日経過しました。";
?>