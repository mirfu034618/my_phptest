<?php
//����һ���ļ����µ������ļ������ļ��С�
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
print_r(file_traversal("E:/�������ϵͳʵ��"));//��Ҫ�������ļ���·��
echo "</pre>";