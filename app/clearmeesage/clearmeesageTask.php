<?php 
namespace app\clearmeesage;
use lib\Task;
/**
 * @author     村长<8044023@qq.com>
 * @copyright  TimePHP
 * @license    https://github.com/qq8044023/timePHP
 */
class clearmeesageTask extends Task{
    public function run(){
        error_log ( "测试每小时1分钟执行一次:".date("YmdHis")."----" ,  3 ,  "/home/h.log" );
        //测试调用 该任务下的demo
        $demo=new Demo();
        $demo->demo1();
    }
}