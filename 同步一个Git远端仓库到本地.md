#  如何同步一个Git远端仓库到本地

[欢迎访问我的Github,里面有md的原文供下载][1]

[本文的地址][2]

标签： Git

> * 创建一个Github账号
> * 登陆Github，查看远端仓库ssh地址复制下来
> * 强烈建议用 https 连接，后面可能出现ssh请求很慢的情况
```shell
git@github.com:ab233/cd.git
https://github.com/liuhanyu200/little.git
```
> * 本地建一个和远端仓库同名的文件夹（cd）
> * 进入文件夹创建git环境
```shell
git bash here
git init
```
> * 配置用户名和邮箱 (注意别忘了 " " )
```shell
git config --global user.name "yourname"
git config --global user.email "your_email@youremail.com"
```
> * 配置本地到远端仓库的ssh秘钥
```shell
 ssh-keygen -t rsa -C "your_email@youremail.com"
```
> * 登陆Github -> seting ->新建ssh秘钥 -> 复制刚刚生成的秘钥到远端
> * 回到本地文件夹下：
```shell
git bash here
/* 刚刚复制的仓库ssh地址 */
git remote add origin git@github.com:ab233/cd.git 
/* 把远端仓库的信息拉到本地 */
git pull origin master /* 完成 */
```
### 平时的基本操作：
> * 修改文件后上传
```shell
git bash here
/* 查看本地仓库信息 */
git status
/* 添加要同步的文件信息 */
git add 被修改的文件（上面status可以看到详细信息）
/* 提交到本地版本库 */
git commit -m "本次修改说明"
git push origin master /* 推到远端仓库 */
```
###改名了该怎么办：
可以参考这篇文章[Changing a remote's URL][3]
```shell
// 其实很简单
// 1 查看当前仓库走向
git remote -v (下面是输出)
origin  git@github.com:OLDUSERNAME/REPOSITORY.git (fetch)
origin  git@github.com:OLDUSERNAME/REPOSITORY.git (push)
// 2 换地址
git remote set-url origin https://github.com/NEWUSERNAME/OTHERREPOSITORY.git
// 3 OK 了
```
### Github加载慢怎么办
```shell
// 这个时候就得用到之前的 remote 连接方式了
// 一个仓库的换，两种方式在不同的网下加载速度不一样哟
git remote add origin https://github.com/liuhanyu200/JavaScript.git
git remote add origin git@github.com:liuhanyu200/JavaScript.git
//如何切换连接方式呢？进入config直接修改
cd .git
vim config
// 没有vim怎么办？
//直接文件夹选项--显示隐藏文件--进去修改
```



[下一篇，基于CI框架下的php,sqlite相关内容][4]


[1]: https://github.com/ab233/little
[2]: https://www.zybuluo.com/klci/note/430070
[3]: https://help.github.com/articles/changing-a-remote-s-url/
[4]: https://www.zybuluo.com/klci/note/430232
