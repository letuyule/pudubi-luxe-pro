# Pudubi Luxe Pro v9 Analytics

> [!NOTE]
> 欢迎关注作者博客：**[阅乐亭](https://juewu.net)** | 作者闲聊 QQ群：**[941562304](https://qm.qq.com/q/qKGFQdohYS)**

> [!TIP]
> 主题遵守开源协议，仅供学习交流，在遵守开源协议的前提下可自由修改、分发、商用。欢迎 star ⭐

一个简洁优雅的 Typecho 响应式主题，完美适配移动端 / 平板 / 桌面端。

## 预览

![主题预览](./screenshot.png)

## v9 Analytics Pro 更新内容

- 📊 **新增侧边栏站点统计模块**：在线人数、今日访问、昨日访问、总访问量、运行天数、搜索蜘蛛
- ⚙️ **新增后台开关**：可控制站点统计模块显示、在线统计时间范围、是否显示蜘蛛、建站日期设置
- 🔥 **前端自动统计访问数据**，无需第三方插件，开箱即用
- 🔗 **保留第三方统计代码位**：支持 Google Analytics /  百度统计 / Cloudflare Analytics 
- 💾 **自动建表**：首次启用会自动创建 `typecho_pudubi_visits`  表（自动适配你的表前缀）

##  特性 

-📱  响应式设计 ，移动端 /  平板 / PC  无缝适配 
-
🎨 NodeSeek  
风格深色头部 ，简洁现代 
-
📋帖子列表 、侧边栏统计 、分类版块一应俱全 
-
⚡轻量高效 ，加载迅速 
-
🔧开箱即用 ，无需复杂配置 

 ##   安装 

1 .下载本仓库 ，将文件夹重命名为 `pudubi 
 
luxe 
 
pro`
2 .上传至 Typecho `/usr/themes/pudubi 
 
luxe 
 
pro/`目录 
3 .进入 Typecho  

后台 


控制台 


外观 


找到「Pudubi Luxe Pro」并点击启用 。
4 .（可选）在外观设置中配置统计模块开关和建站日期 。

 ##   文件结构 



 ```
pudubi
 
luxe
 
pro/
├── index.php          #   首页模板 
  
├── post.php           #    文章页模板   
├── page.php           #    独立页面模板   
├── archive.php        #    归档/分类模板   
 ├── header .
 php         #
#
    
头部模板    
 ├── footer .
 php         #
#
     
底部模板    
 ├── sidebar .
 php         #
#
     
侧边栏（含站点统计）    
 ├── comments .
 php       #
#
      
评论模板    
 ├── functions .
 php      
#
# 
    
主题函数（含统计功能）    
 └── style .
 css         #
#
      
样式表    

```

 ##   环境要求 



-Typecho    1+    
-PHP    7+    

 ##   开源协议 



MIT License 

 ##    作者 



Pudubi Luxe Pro by letuyule  

-GitHub : [github.com/letuyule](https :
//
github.com/letuyule)  
-Blog : [juewu.net](https :
//
juewu.net)
