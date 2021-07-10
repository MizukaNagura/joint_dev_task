<?php

## Q1. 次の配列の最後に "斎藤" を追加し，出力して下さい。
$names = ["田中", "佐藤", "佐々木", "高橋"];

array_push($names,"斎藤");
print_r($names);

echo PHP_EOL;

## Q2. 次の二つの配列を合体させた新しい配列 `$array` を作成し，出力して下さい。

$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

$array = array_merge($array1, $array2);
print_r($array);

echo PHP_EOL;


## x Q3. 次の配列の中に `3` がいくつあるかを出力するコードを書き，出力して下さい。



$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];
$count = 0;
foreach($numbers as $number){
   if($number === 3){
      $count++;
   }
}
print_r($count . "回".PHP_EOL);

echo PHP_EOL;

## Q4. 次の配列から `null` の要素を削除し，出力して下さい。（新しい配列を作成せずに実現して下さい）


$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];


print_r($sports);
 
/* 同じ値を持つ配列要素を削除 */
$sports=array_diff($sports,[null]);
print_r($sports);

echo PHP_EOL;


## x Q5. 配列が空であれば `true`，1つ以上の要素があれば `false` を出力するコードを書いて下さい。


$array1 = [];
var_export(empty($array1));
echo PHP_EOL;

$array2=[1,5,8,10];
var_export(empty($array2));
echo PHP_EOL;



## x Q6. 次の配列から，期待された結果の配列 `$numbers2` を作成し，出力して下さい。

$numbers1 = [1, 2, 3, 4, 5];

$numbers2 = [];
foreach($numbers1 as $number){
    $number= $number * 10 ;
    array_push($numbers,$number);
}

print_r($numbers2);



echo PHP_EOL;


## x Q7. 次の配列の要素を `文字列` から `数字` に変換し，出力して下さい。（新しい配列を作成せずに実現して下さい）

$array = ["1", "2", "3", "4", "5"];
$array = array_map('intval',$array);
var_dump($array);

echo PHP_EOL;
## x Q8. 期待する出力結果になるようにコードを書き加えて下さい。

$programming_languages = ["php", "ruby", "python", "javascript"];
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

# 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;


##  Q9. 次の配列を用いて，期待通りの出力結果になるようにコードを書いて下さい。

$names = ["田中", "佐藤", "佐々木", "高橋"];

$names2 = [];
foreach($names as $key => $name){
    $number = $key + 1;
    $name2 = "会員No.".$number." ".$name;
    array_push($names2,$name2);
}
print_r($names2);


echo PHP_EOL;


## Q10. 次の配列の各要素について， `うに` という文字列が含まれていれば「好物です」と表示し，そうでなければ「まぁまぁ好きです」と出力するコードを書いて下さい。


$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

foreach($foods as $food){
if(preg_match('/うに/', $food)){
print('好物です');}
else{
    print('まぁまぁ好きです');}
}

echo PHP_EOL;

## x Q11. 次の配列を用いて，期待する出力結果になるようにコードを書いて下さい。

$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];



$sports2 = [];
foreach($sports as $key => $sport){
    if(is_array($sport)){
        $sports2 = array_merge($sports2, $sport);
    }else{
        array_push($sports2, $sport);
    }
}
$sports2 = array_unique($sports2);
$sports2 = array_values($sports2);
$sports3 = [];
foreach($sports2 as $key => $sport){
    $number = $key + 1;
    $sport3 = "No.".$number." ".$sport;
    array_push($sports3, $sport3);
}

print_r("ユーザの趣味一覧");
foreach($sports3 as $sport){
    print($sport);
}

echo PHP_EOL;

## Q12. 次の連想配列から `name` の値を出力して下さい。

$data = ["user" => ["name" => "satou", "age" => 33]];

print_r($data["user"]["name"]);

## Q13. 次の `$user_data` に，`$update_data` の内容を反映させ，`$user_data` の内容を書き換え，出力して下さい。

$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];


$result = $update_data + $user_data;
print_r($result);

echo PHP_EOL;

## Q14. 次の連想配列から全てのキー（添字）を取り出して、キーが数字である通常の配列（添字配列）を作成し，出力して下さい。

$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

$data1 = [];
foreach($data as $one_data){
    array_push($data1, $one_data);
}

print_r($data1);

echo PHP_EOL;

## Q15. `age` というキーが含まれている場合は `OK` ，含まれていない場合は `NG` という文字列が出力されるコードを書いて下さい。
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
if($key = array_key_exists('age', $data1)){
    print('OK'.PHP_EOL);}
    else{print('NG'.PHP_EOL);}


$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];
if($key = array_key_exists('age', $data2)){
   print ('OK'.PHP_EOL);}
else{print('NG'.PHP_EOL);}

echo PHP_EOL;

## Q16. 次の配列の各要素について，「私の名前は〜です。年齢は〜歳です。」と表示して下さい。


$users = [
  
  ["name" => "satou", "age" => 22],
  ["name" => "yamada", "age" => 12],
  ["name" => "takahashi", "age" => 32],
  ["name" => "nakamura", "age" => 41]
];
foreach($users as $key => $user){
    echo "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です。".PHP_EOL;
}

echo PHP_EOL;

# 共同開発 PHP 課題（応用）

## 回答方法について

## Q17. 次の Userクラス 内にinfoメソッドを追加し，期待する出力結果になるようにして下さい。

class User
{  protected $name;
    protected $age;
    protected $gender;

    function __construct($user_name, $user_age, $user_gender) {
        $this->name = $user_name;
        $this->age = $user_age;
        $this->gender = $user_gender;
    }

    function info() {
        print("名前:".$this->name.PHP_EOL);
        print("年齢:".$this->age.PHP_EOL);
        print("性別:".$this->gender.PHP_EOL);
    }

}

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;




## Q18. 年齢を用いた場合分けを利用して，期待する出力結果になるようなManクラスを作成して下さい。

class Man{

protected $name;
protected $age;

function __construct($user_name,$user_age){
$this->name=$user_name;
$this->age=$user_age;
}
function introduce(){
if($this->age >=20){
print('こんにちは".$this->name."と申します。宜しくお願いいたします。');
}else{
print('はいさいまいど〜，".$this->name."です！！！');}
}

}

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();


echo PHP_EOL;



## Q19. 次のコードはエラーが出ます。期待する出力結果となるようにコードを修正して下さい。


class Item{

  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;


## Q20. 次の仕様を満たした上で，期待する出力結果になるようにコードを追加して下さい。

class Human
{
public $name;
public $age;

function __construct($user_name,$user_age){
$this->name=$user_name;
$this->age=$user_age;
}
}

class Zoo
{
protected $name;
protected $entry_fee;

function __construct($zoo_name,$zoo_entry_fee){
$this->name=$zoo_name;
$this->entry_fee=$zoo_entry_fee;}

function info_entry_fee(Human $human) {
    if($human->age <= 5){
        print($human->name."さんの入場料金は ".$this->entry_fee["infant"]." 円です。".PHP_EOL);
    }elseif($human->age <= 12){
        print($human->name."さんの入場料金は ".$this->entry_fee["children"]." 円です。".PHP_EOL);
    }elseif($human->age <= 64){
        print($human->name."さんの入場料金は ".$this->entry_fee["adult"]." 円です。".PHP_EOL);
    }elseif($human->age <= 120){
        print($human->name."さんの入場料金は ".$this->entry_fee["senior"]." 円です。".PHP_EOL);
    }
}

}



$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;




## Q21. FizzBuzz問題の応用問題です。次の仕様、条件を満たすコードを書いて、1から30までの正の整数を期待する出力結果にして下さい。


for ($i = 1; $i <= 30; $i++){
    $result = '';

   if ($i % 3 == 0 ){
      $result .= 'Fizz';
   }
   if ($i % 5 == 0 ){
      $result .= 'Buzz';
   }
   if ($i % 7 == 0 ){
      $result .= 'Hoge';
   }
   if ($result == '') {
      $result .= (string) $i;
   }

    echo $result. PHP_EOL;
}
