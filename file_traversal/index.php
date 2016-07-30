<?php
//遍历一个文件夹下的所有文件和子文件夹。
function file_traversal($dir)
{
    $files=array();
    if(is_dir($dir))
    {
        if($handle=opendir($dir))
        {
            while(($file=readdir($handle))!==false)
            {
                if($file!="." && $file!="..")
                {
                    if(is_dir($dir."/".$file))
                    {
                        $files[$file]=file_traversal($dir."/".$file);
                    }
                    else
                    {
                        $files[]=$dir."/".$file;
                    }
                }
            }
            closedir($handle);
            return $files;
        }
    }
}
echo "<pre>";
print_r(file_traversal("E:/网络操作系统实验"));//所要遍历的文件夹路径
echo "</pre>";