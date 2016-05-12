#交流
* 官方QQ群：49219815
* 官方支持站点：[http://www.shuipfcms.com](http://www.shuipfcms.com)

#
----
#环境要求
* PHP版本需要5.3+以上才可以。

----
#ShuipFCMS简介 
* ShuipFCMS 基于[ThinkPHP](http://www.thinkphp.cn)框架开发，采用独立分组的方式开发的内容管理系统。；
* 支持模块安装/卸载，模型自定义，整合UCenter通行证等。
* 同时系统对扩展方面也支持比较大，可以使用内置的行为控制，对现有功能进行扩展。

##根据安装程序安装好后，进入后台需要进行如下操作：
* 更新站点缓存。
* 进入 内容 -> 批量更新URL 更新地址。
* 进入 内容 -> 批量更新栏目页 进行生成栏目页。
* 进入 内容 -> 批量更新内容页 进行生成内容页。
* 进入 模块 -> 搜索配置 -> 重建索引 进行搜索数据的重建。

---

## 界面预览：
 ![mahua](http://file.abc3210.com/d/file/contents/2013/01/50f8dfd9cf91d.jpg)
 
 
 #日期：20160512 
 #Note：新增一个方法，以栏目和文章ID 获取对应的任意字段
 #缓存处理有问题，未修复
 #此方法只针对于 tag。
 /**
     * @param 栏目 $catid
     * @param 文章ID $id
     * @param 要获取的字段 $field
     * @return string|mixed|boolean|string|NULL|unknown|object
     */
    function getOneField ($catid,$id,$field = 'thumb')
    {
        
        if($field =='thumb'){
            $pic = "/statics/default/images/defaultpic.gif";
        }else{
            $pic = "";
        }       
        if(empty($catid) && empty($id)){
            return $pic;
        }else{
            $map['catid'] = array("eq",$catid);
            $map['id'] = array("eq",$id);
        }
            
        $key = $field.'_'.$catid.'_'.$id;
        $cache = S($key);

        if ($cache === 'false') {
            return false;
        }
        if (empty($cache)) {
            // 读取数据        
            $result = M("Article")->field($field)->where($map)->select();            
            if(!$result){                
                $result = M("Photo")->field($field)->where($map)->select();                
                if(!$result){
                    $result = M("Download")->field($field)->where($map)->select();
                }
            }
            //返回指定的类型    
            foreach ($result as $k=>$v){
                foreach ($v as $key=>$value){
                    if(!$value){
                        return $pic;
                    }else{
                        return $value;
                    }
            
                }
            }
            
            if (empty($cache)) {
                S($key, 'false', 60);
                return false;
            } else {
                S($key, $result, 3600);
            }
            
        }
        
        if ($field) {
            return $result[$field];
        } else {
            return $result;
        }
        

    }
    
    
# 后台： admin
# 密码： 1234
    