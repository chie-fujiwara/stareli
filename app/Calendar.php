<?php
namespace App;

use App\User;
use Illuminate\Support\Facades\Log;
use App\Item;
use Illuminate\Support\Facades\Auth;

class Calendar
{
    private $html;
    // private $items;

    public function showCalendarTag($m, $y)
    {
        $year = $y;
        $month = $m;
        $date = date("Y-m-d\TH:i");
        if ($year == null) {
            // システム日付を取得する。
            // $date = date("Y-m-d\TH:i");
            $year = date("Y");
            $month = date("m");
        }
        $firstWeekDay = date("w", mktime(0, 0, 0, $month, 1, $year)); // 1日の曜日(0:日曜日、6:土曜日)
        $lastDay      = date("t", mktime(0, 0, 0, $month, 1, $year)); // 指定した月の最終日
        // 前月
        $prev = strtotime('-1 month', mktime(0, 0, 0, $month, 1, $year));
        $prev_year = date("Y", $prev);
        $prev_month = date("m", $prev);
        // 翌月
        $next = strtotime('+1 month', mktime(0, 0, 0, $month, 1, $year));
        $next_year = date("Y", $next);
        $next_month = date("m", $next);
        // 日曜日からカレンダーを表示するため前月の余った日付をループの初期値にする
        $day = 1 - $firstWeekDay;

        // カレンダーの日付部分を生成する
        while ($day <= $lastDay) {
            $this->html .= "<tr>";
            // 各週を描画するHTMLソースを生成する
            for ($i = 0; $i < 7; $i++) {
                if ($day <= 0 || $day > $lastDay) {
                    // 先月・来月の日付の場合
                    $this->html .= "<td>&nbsp;</td>";
                } else {
                    $this->html .= "<td>" . $day ."&nbsp";
                    $target = date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));
                    // 案件名のカレンダー内表示
                    //    foreach($this->items as $val) { ★
                    //             if ($val->delivery_date == $target) ★
                    //             {★
                    //                 $this->html .= $val->item_name; ★
                    //             }
                    //     }
                    $this->html .= "</td>";
                }
                $day++;
            }
            
            $this->html .= "</tr>";
        }
        $this->html .= "</table>";
        $time = array($year, $month, $prev_year, $prev_month, $next_year, $next_month, $date);

        $arr = [$this->html, $time];
        
        return $arr;
    }
    //
}
