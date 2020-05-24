# 插件市场
  
## 安装
与其它的插件的安装方法相同，您只需要把本插件的压缩包解压在商城里的 `plugins` 目录里，插件系统将自动读取信息**（但不一定会启用它！）**。为了方便以后插件市场的更新和升级，请确保它的目录名为 `plugins-market` 。

## 一般使用
### 插件市场源
 
http://xxxxxx/plugin.json

```json
{
  example-plugin: {
    name: "example-plugin",
    title: "示例插件",
    author: "JanPan",
    description: "芸众商城示例插件",
    version: "0.2.2",
    size: "15.1 KB",
    brief: "http://www.yunzshop.com/",
    url: "http://xxxxxx/example-plugin_0.2.2.zip",
    isPreview: false,//是否预览版
    old: {
      0.1: "http://xxxxxx/example-plugin.zip",
      0.2: "http://xxxxx/example-plugin_0.2.zip",
      0.2.1: "http://xxxxx/example-plugin_0.2.1.zip"
    }
  }
}

```

### 多版本支持
> 注：该功能需要插件市场服务端的支持

如果您细心观察的话，您可以发现在市场中的插件列表内，“版本”这一栏是一个下拉框，这意味着您可以下载某个插件的以前的版本。

### 替换默认
如果您觉得使用此插件之后，商城站的左侧栏多了一项菜单项，影响美观，您可以在“插件配置”页面中打开“接管系统默认的插件市场”这一选项。

### 更新提醒
新版本的插件往往是修复了旧版本的错误和提供了新功能。为了您第一时间能收到更新，此插件还提供“更新提醒”的功能。开启此功能后，如果插件有新版本发布，您可以在商城站的左侧栏看到标有可更新的插件数量的图标。
#### 不提醒
不对任何插件的新版本作提醒。（不推荐）
#### 仅正式版
某些插件的更新可能还处于预览、测试阶段而不稳定，此选项可以让您只收到正式版的更新提醒。（推荐，尤其是生产环境）
#### 全部提醒
对于预览版、测试版，像正式版那样同样收到更新提醒，并且预览版会以颜色不同的图标出现。适合喜欢尝鲜的用户。

### 自动启用
为了您拥有更顺畅的插件安装体验，此插件可以让您在完成安装插件后，自动启用插件。默认情况下这项功能处于关闭状态，您需要在“插件配置”页面启用它。