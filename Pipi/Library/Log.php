<?php
/************************************************************
** @Description: 日志类，目前仅支持file
** @Author: haodaquan
** @Date:   2016-11-09
** @Last Modified by:   haodaquan
** @Last Modified time: 2016-11-09
*************************************************************/

namespace Pipi\Library;

class Log 
{
	public function __construct()
	{
		
	}

	/**
	 * [writeLog 写日志]
	 * @param  string $fileName [文件名]
	 * @param  string $message  [日志内容]
	 * @return [type]           [description]
	 */
	static public function writeLog($fileName='',$message='')
	{
		$file_path  = ROOT_PATH.'/Runtime/Log/'.date('Y-m-d',time());
        make_dir($file_path);
        $file_path .= '/'.$fileName;
        $content   = '【'.date('Y-m-d H:i:s',time()).'】 '.$message.PHP_EOL;
        return file_put_contents($file_path, $content,FILE_APPEND);
	}
}