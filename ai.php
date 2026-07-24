<?php
// ai.php
session_start();
class MiniAI {
    public static function getResponse($rank, $prompt) {
        if ($rank >= 4) {
            return "AI นาย (ร่างจัดเต็ม 50%): วิเคราะห์โค้ดและช่วยเขียนระบบให้คุณแบบพรีเมี่ยมเรียบร้อย";
        }
        return "AI นาย (ร่างเริ่มต้น): สวัสดีครับ มีอะไรให้ผมช่วยเหลือเบื้องต้นไหมครับ";
    }
}
?>
