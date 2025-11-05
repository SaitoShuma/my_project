<?php  #/topにアクセスされたときに動く処理の流れを定義

namespace App\Http\Controllers; #このクラスがコントローラ群に属することを記述

use Illuminate\Http\Request; #httpリクエスト情報を扱うことを記述
use Illuminate\Support\Facades\DB; #DBにアクセスするためのLaravelの便利な窓口を記述

class TopController extends Controller { #Laravelのコントローラ記述のおまじない。　TopControllerをControllerクラスを継承。
    public function index( Request $request ) { #以降処理記述。
        $sampleValue = "sample テキストです。";
        
        #select文 レコード参照
        $records = DB::connection('mysql')->select("select * from items"); #config/database.php に設定された 'mysql' の接続情報を使ってMySQLに接続し、SQLを実行して「itemテーブルの全レコード」を取得。
        $name = $records[0]->name;

        #insert文 レコード追加
        #$insertResult = DB::connection("mysql")->insert("insert into items (id,name,price) values (null,'メロン',2000)");

        #update文 レコード更新
        #$updateResult = DB::connection("mysql")->update("update items set price = 600 where name = 'りんご'");

        #delete文 レコード削除
        $deleteResult = DB::connection("mysql")->delete("delete from items where name = 'りんご'");
        dd($deleteResult); #dd()は「Dump and Die」という便利関数。
        
        return view("top/index" ,["sampleValue" => $sampleValue ]);
    } #ビューを表示。
}