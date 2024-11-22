<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老表 <蝙蝠2528601>
// +----------------------------------------------------------------------
use think\Env;

function getTopHost($url)
{

    preg_match("#\.(.*)#i", $url, $match);

    return $match[1];
}

$d = getTopHost($_SERVER['HTTP_HOST']);
return [
    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------
    // 应用命名空间
    'app_namespace' => 'app',
    // 应用调试模式
    'app_debug' => Env::get('app.debug', false),
    // 应用Trace
    'app_trace' => Env::get('app.trace', false),
    // 应用模式状态
    'app_status' => '',
    // 是否支持多模块
    'app_multi_module' => true,
    // 入口自动绑定模块
    'auto_bind_module' => false,
    // 注册的根命名空间
    'root_namespace' => [],
    // 扩展函数文件
    'extra_file_list' => [THINK_PATH . 'helper' . EXT],
    // 默认输出类型
    'default_return_type' => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return' => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler' => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler' => 'callback',
    // 默认时区
    'default_timezone' => 'PRC',
    // 是否开启多语言
    'lang_switch_on' => true,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter' => 'htmlspecialchars,addslashes,strip_tags,trim',
    // 默认语言
    'default_lang' => 'zh-cn',
    // 应用类库后缀
    'class_suffix' => false,
    // 控制器类后缀
    'controller_suffix' => false,
    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------
    // 默认模块名
    'default_module' => 'admin',
    //  'default_module'         => 'index',
    // 禁止访问模块
    'deny_module_list' => ['common'],
    //   'deny_module_list'       => ['common','admin'],
    // 默认控制器名
    'default_controller' => 'Index',
    // 默认操作名
    'default_action' => 'index',
    // 默认验证器
    'default_validate' => '',
    // 默认的空控制器名
    'empty_controller' => 'Error',
    // 操作方法后缀
    'action_suffix' => '',
    // 自动搜索控制器
    'controller_auto_search' => true,
    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------
    // PATHINFO变量名 用于兼容模式
    'var_pathinfo' => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch' => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr' => '/',
    // URL伪静态后缀
    'url_html_suffix' => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param' => false,
    // URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type' => 0,
    // 是否开启路由
    'url_route_on' => true,
    // 路由使用完整匹配
    'route_complete_match' => false,
    // 路由配置文件（支持配置多个）
    'route_config_file' => ['route'],
    // 是否强制使用路由
    'url_route_must' => false,
    // 域名部署
    'url_domain_deploy' => false,
    // 域名根，如thinkphp.cn
    'url_domain_root' => '',
    // 是否自动转换URL中的控制器和操作名
    'url_convert' => true,
    // 默认的访问控制器层
    'url_controller_layer' => 'controller',
    // 表单请求类型伪装变量
    'var_method' => '_method',
    // 表单ajax伪装变量
    'var_ajax' => '_ajax',
    // 表单pjax伪装变量
    'var_pjax' => '_pjax',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache' => false,
    // 请求缓存有效期
    'request_cache_expire' => null,
    // +----------------------------------------------------------------------
    // | 模板设置
    // +----------------------------------------------------------------------
    'template' => [
        // 模板引擎类型 支持 php think 支持扩展
        'type' => 'Think',
        // 模板路径
        'view_path' => '',
        // 模板后缀
        'view_suffix' => 'html',
        // 模板文件名分隔符
        'view_depr' => DS,
        // 模板引擎普通标签开始标记
        'tpl_begin' => '{',
        // 模板引擎普通标签结束标记
        'tpl_end' => '}',
        // 标签库标签开始标记
        'taglib_begin' => '{',
        // 标签库标签结束标记
        'taglib_end' => '}',
        'tpl_cache' => true,
    ],
    // 视图输出字符串内容替换,留空则会自动进行计算
    'view_replace_str' => [
        '__PUBLIC__' => '',
        '__ROOT__' => '',
        '__CDN__' => '',
    ],
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl' => APP_PATH . 'common' . DS . 'view' . DS . 'tpl' . DS . 'dispatch_jump.tpl',
    'dispatch_error_tmpl' => APP_PATH . 'common' . DS . 'view' . DS . 'tpl' . DS . 'dispatch_jump.tpl',
    // +----------------------------------------------------------------------
    // | 异常及错误设置
    // +----------------------------------------------------------------------
    // 异常页面的模板文件
    'exception_tmpl' => APP_PATH . 'common' . DS . 'view' . DS . 'tpl' . DS . 'think_exception.tpl',
    // 错误显示信息,非调试模式有效
    'error_message' => '你所浏览的页面暂时无法访问',
    // 显示错误信息
    'show_error_msg' => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle' => '',
    // +----------------------------------------------------------------------
    // | 日志设置
    // +----------------------------------------------------------------------
    'log' => [
        // 日志记录方式，内置 file socket 支持扩展
        'type' => 'File',
        // 日志保存目录
        'path' => LOG_PATH,
        // 日志记录级别
        'level' => [],
    ],
    // +----------------------------------------------------------------------
    // | Trace设置 开启 app_trace 后 有效
    // +----------------------------------------------------------------------
    'trace' => [
        // 内置Html Console 支持扩展
        'type' => 'Html',
    ],
    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------
    'cache' => [
        // 驱动方式
        'type' => 'File',
        // 缓存保存目录
        'path' => CACHE_PATH,
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],
    // +----------------------------------------------------------------------
    // | 会话设置
    // +----------------------------------------------------------------------
    'session' => [
        'id' => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix' => 'think',
        // 驱动方式 支持redis memcache memcached
        'type' => 'redis',
        // 是否自动开启 SESSION
        'auto_start' => true,
        'host' => Env::get('redis.host', '127.0.0.1'),
        'port' => Env::get('redis.port', '6379'),
        'password' => Env::get('redis.password', ''),
        'select' => 1,
    ],
    // +----------------------------------------------------------------------
    // | Cookie设置
    // +----------------------------------------------------------------------
    'cookie' => [
        // cookie 名称前缀
        'prefix' => '',
        // cookie 保存时间
        'expire' => 0,
        // cookie 保存路径
        'path' => '/',
        // cookie 有效域名
        'domain' => '.' . $d,
        //  cookie 启用安全传输
        'secure' => false,
        // httponly设置
        'httponly' => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ],
    'redis' => [
        'host' => Env::get('redis.host', '127.0.0.1'),
        'port' => Env::get('redis.port', '6379'),
        'password' => Env::get('redis.password', ''),
        'select' => 0, //如果出现多个站点.改下顺序
        'timeout' => 0,
        'expire' => 0,
        'persistent' => false,
        'prefix' => '',
    ],
    //分页配置
    'paginate' => [
        'type' => 'bootstrap',
        'var_page' => 'page',
        'list_rows' => 20,
    ],
    //验证码配置
    'captcha' => [
        // 验证码字符集合
        'codeSet' => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
        // 验证码字体大小(px)
        'fontSize' => 18,
        // 是否画混淆曲线
        'useCurve' => false,
        //使用中文验证码
        'useZh' => false,
        // 验证码图片高度
        'imageH' => 40,
        // 验证码图片宽度
        'imageW' => 130,
        // 验证码位数
        'length' => 4,
        // 验证成功后是否重置
        'reset' => true
    ],
    // +----------------------------------------------------------------------
    // | Token设置
    // +----------------------------------------------------------------------
    'token' => [
        // 驱动方式
        'type' => 'Mysql',
        // 缓存前缀
        'key' => 'i3d6o32wo8fvs1fvdpwens',
        // 加密方式
        'hashalgo' => 'ripemd160',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ],
    //FastAdmin配置
    'fastadmin' => [
        //是否开启前台会员中心
        'usercenter' => true,
        //会员注册验证码类型email/mobile/wechat/text/false
        'user_register_captcha' => 'text',
        //登录验证码
        'login_captcha' => false,
        //登录失败超过10次则1天后重试
        'login_failure_retry' => true,
        //是否同一账号同一时间只能在一个地方登录
        'login_unique' => false,
        //是否开启IP变动检测
        'loginip_check' => false,
        //登录页默认背景图
        'login_background' => "/assets/img/loginbg.jpg",
        //是否启用多级菜单导航
        'multiplenav' => false,
        //自动检测更新
        'checkupdate' => false,
        //版本号
        'version' => '1.0.0.20200506_beta',
        //API接口地址
        'api_url' => 'https://api.fastadmin.net',
    ],
    'bf_token' => '7d8fe667ceb1ff840be0bc2d7710038a', //暴风token
    'shortGateWay' => '',
    'short' => [
        [
            'model' => '-',
            'title' => '--请选择短网址--'
        ],
      [
            
          'model' => 'uouin',
          'title' => '天网防封',//麒麟短网址通用
          'app_key' => 'fb2ziUw0QEDevT6',
          's' => '1027870013'
            
      ],


       //   [
    //     'model' => 'zuijin_to',
    //          'title' => 'dwzjh.com',
      //         'app_key' => 'DVhhidrbKaJMFQYgPBJbXvRBsXFlVgpu'
  //              ],
        [
            'model' => 'self',
            'title' => '生成原网址',
            'app_key' => 'ec311bfe0a4d21e8a8b'
        ],
        [
           'model' => 'surl_cn',
            'title' => 'surl_cn短网址',//免费短网址
            'app_key' => '86043a34e1ff15722825ee4d6b2440fa'
        ],
        [
            //   'model' => '45dwzs', 
            //  'title' => '45dwzs(可联系台柱复活)',//45短网址官网接口
            //  'app_key' => 'D5K1wJAgSKek6EBvNtesBAm3SAskJOJS'
        ],


        [
            //  'model' => 'r6m_news',//客户的别瞎鸡儿用 可能会被改落地
            //   'title' => 'r6m_news_云腾',
            //  'app_key' => 'e10adc3949ba59abbe56e057f20f883e'
        ],

        [
            //  'model' => '1eh',
            //   'title' => '1eh短网址',
            // 'app_key' => 'ec311bfe0a4d21e8a8b'
        ],
        [
            //       'model' => '45dwz',
            //    'title' => '四五短链接【可联系台主复活】',//自定义接口 官网https://45dwz.cn/ 表哥的忠告：要自己去官网注册一个购买套餐，别乱用人家的接口！会被改落地！
            //    'app_key' => '4Md3Vq8UhPzdAYS5ym5sIphufeS8uyoh'
        ],

        [
            //  'model' => 'car',
            //   'title' => '抖音航空加密网址【猫咪】',
            // 'app_key' => '888979da4d87a2d27bd429b7b22e0b57'
        ],

        [
              'model' => 'r6n',
              'title' => 'r6n',
             'app_key' => '填你的token'//官网http://r8n.cn/去注册账号 获取一下token填上面！别几把用别人家的接口！
        ],

        [
            'model' => 'suowor6n',//官网https://m.suowo.cn/api.html  注册账号获取token  极个别服务器可能用不了！
            'title' => '缩我短网址',
            'app_key' => '5d9ae11b8e676d79d8d3ab66@c8a439f77e2280602306d394a1a3cbd8'//把我换成你的token
        ],
        [
            // 'model' => 'suowor6ngzh',//跟上面的一样
            //  'title' => '缩我短网址公众号',
            //  'app_key' => '5d9ae11b8e676d79d8d3ab66@c8a439f77e2280602306d394a1a3cbd8',
            //  'app_id' => 'wxd1f74c52e9aeb813'//填你的公众号appid
        ],

        [
            'model' => 'r88ns',
            'title' => 'r8n',//官网http://r8n.cn/去注册账号 获取一下token填下面！别几把用别人家的接口！
            'app_key' => 'Mq4ufXOyVHSp'//token填这里
        ],

        [
            //      'model' => 'r6n_gzh',
            //     'title' => 'r6n【公众号防封】',
            //    'app_key' => '18988995777@f95f1fb8875fc82e9887f9f5f626b7e2',//填你的r6n接口官网http://r6n.cn/
            //   'app_id' => 'wxd1f74c52e9aeb813'//填你的公众号appid
        ],
        [
            // 'model' => 'git.io',
            // 'title' => 'git.io(冠军系统回馈客户，免费抖音无拦截被墙了先别用)'
        ],
        [
            //'model' => 'kz',
            //'title' => '快站短链接',
            //'app_key' => 'Mh5cyYQtpVvk'//快站key
        ],
        [
            // 'model' => 'dwzapi',
            // 'title' => '随机接口短网址1【暴风】'
        ],
        [
            //'model' => 'url2',
            //'title' => 'url【暴风】'
        ],
        [
            //   'model' => 'dwzapi2',
            //  'title' => '随机接口短网址2【暴风】'
        ],
        [
            //'model' => 'wxdwz2',
            //'title' => 'w.url.cn【暴风】'
        ],
        [
            //'model' => 'sohu',
            // 'title' => 'sohu.gg【暴风】'
        ],
        [
            // 'model' => 'isgd',
            //'title' => 'is.gd【暴风】'
        ], [
            // 'model' => 'sohu',
            // 'title' => 'SOHU短链接(维护中)',
            // 'app_key' => '62f5b3677ea8f1dc18c558d64713ff20'
        ], [
         //   'model' => 'wurl',
           // 'title' => '微信w.url【猫咪】',
           // 'app_key' => '55c62ef8367380d4c38ab8e2aa2310bb'
        ], [
            //  'model' => 'z3',
            //  'title' => 'Z3短链接【猫咪】',
            // 'app_key' => '86043a34e1ff15722825ee4d6b2440fa'
        ], [
            'model' => 'tinyurl',
            'title' => 'tinyurl.com【猫咪免费】',
            'app_key' => '5773b6849ceff488b86dcabd1a6989f7'
        ], [
            'model' => 'bdpro',
            'title' => '百度Pro抖音专用【猫咪】',
            'app_key' => '829ba0b299bbdeb87992308f91373263'
        ], [
            'model' => 'yam',
            'title' => '番薯短网址【猫咪】',
            'app_key' => '0faf6e94b2e814c295c0862436a0175b6'
        ],
        [
            //    'model' => 'newbd',
            //  'title' => 'mr.baidu抖音专用【猫咪】',
            // 'app_key' => 'ec09460276405e41130878a100f609bf'
        ],
        [
            //  'model' => 'url',
            // 'title' => '腾讯url短网址【猫咪】',
            // 'app_key' => '42a58831b3836bae654ebdc93776b7a0'
        ],
        [
            //  'model' => 'uv',
            //  'title' => 'ua.qq抖音专用【猫咪】',
            // 'app_key' => 'cf028e489baeca5edbdb0480d7c7734f'
        ],
        [
            //  'model' => 'newdwz44',
            //   'title' => 'mrw短网址【冠军免费】',
            //  'app_key' => '5edc93369f959461be96234e@97f2d97b87b0ba0497e45a11dd3a18fb'
        ],
        [
            // 'model' => 'newz333333333',
            //'title' => 'new-Z3短网址【z3官方】',
            //'app_key' => 'ec31b539am9794202009lo'
        ],
        [
            // 'model' => 'newdwz3',
            // 'title' => 'dwz3【hub2】',//hub2短网址dwz3.cn客户自己的没啥用
            // 'app_key' => 'D120D85451FB6EEB7F0938B3162911FA',
            // 's' => 'NEFBVGHKFsZxHThQEdqZkudjUZlccSmf'
        ],
        [
            //'model' => 'newdwz33',
            //   'title' => '抖音',客户自己的没啥用
            //   'app_key' => 'QoI5e7RUHQnYRX27',
            //   's' => 'NEFBVGHKFsZxHThQEdqZkudjUZlccSmf'
        ]
    ]];
    
