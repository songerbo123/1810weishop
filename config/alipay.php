<?php
//return [
//    'pay' => [
//        // APPID
//        'app_id' => '2016092700605499',
//
//        //@异步 支付宝 支付成功后 主动通知商户服务器地址  注意 是post请求
//        'notify_url' => '1111111111111',
//
//        //@同步 支付宝 支付成功后 回调页面 get
//        'return_url' => 'http://www.weishop.com/paysuccess',
//
//        // 公钥（注意是支付宝的公钥，不是商家应用公钥）
//        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA08ekJ9RAY0nW17+xAi0rSGLl3pUA7fDrkyD1cm9dN1JK0RERL7KMV3ykfNKdtbmMNh4wVuzMeE4FrDvES9apJPVLNwzXCzG4aUrVv66hMKb/jtHDr6cx1vz2ST9x6xlopCspfgHxxr+PgEkjxBZA7oiCyB/hYtZ4aDx+WJRlrhWYFuXqDFrhH9r+oAE9UMULBG3GkW4WrbypnPle0Y0qPruO4hzHI/t8YVV8Rl4oju5qnpoNPjeRqyWaq778ZLXgDYzow3OJT6jnmM2BhxV4hsKed0wIV0y6hMJpCsmHrBOBWcRs4pOULbKVh+xdVXyGyT8lSX55aYlS9SCcl44muwIDAQAB',
//
//        // 加密方式： **RSA2** 私钥 商家应用私钥
//        'private_key' => 'MIIEpAIBAAKCAQEA08ekJ9RAY0nW17+xAi0rSGLl3pUA7fDrkyD1cm9dN1JK0RERL7KMV3ykfNKdtbmMNh4wVuzMeE4FrDvES9apJPVLNwzXCzG4aUrVv66hMKb/jtHDr6cx1vz2ST9x6xlopCspfgHxxr+PgEkjxBZA7oiCyB/hYtZ4aDx+WJRlrhWYFuXqDFrhH9r+oAE9UMULBG3GkW4WrbypnPle0Y0qPruO4hzHI/t8YVV8Rl4oju5qnpoNPjeRqyWaq778ZLXgDYzow3OJT6jnmM2BhxV4hsKed0wIV0y6hMJpCsmHrBOBWcRs4pOULbKVh+xdVXyGyT8lSX55aYlS9SCcl44muwIDAQABAoIBAQCxtetICNHm/0UrUg3k96ZEXcjq2DopcGsd0SBl4JFmJMXnXd0AG2Gs4Eje/ZWdso+3sel6Z8bEhSQ5fQWhZgYVn0h4b2vcVuKaaFOpP46/VsNIQzlkInauIyNAH98mGvI2IIn21QbfckumqLk8iDgAccjcyfPFjpcHUQvspMoWIz0lwPZtIcEcBIsF/YpxY5dSDvqtaNgPAZv5uAd9SEOHepnRuU0YCYb4LRR/XDsZSgyWfTZRUUdWUiZkEMbDMMXl1t9coQWSNo24AGeLQgPSB0kIrBhqL9LE6sZ4oaki1nklGwYfTPi8HKn/xtl/0bQi2C39HKIlvnDKB/V7JLahAoGBAPgg9xdvvWFlPb/Yv9SrQOgG7nCm++C3EJ2aNCe7U5LstdirUXM2VDMJ9N/F4FTx3XMD9BSSAXfvBXkT5A2Uh/pypEBATJUvCplZPzrYHXgU9xof30VzWJ8Hzf66Xpx3C8EvffUkOUP0rM4JlQ3Lgc0Pk+ZNgFIGMAaBKO1qrV6DAoGBANp/fT0SiURXQiZ5+p88l1JOSgNhQS+uEGfBeCGVa7jk0s6wVR0V6FAaEfJ1yBAyVtSwTffvSuMO+B9Ub288qa3TTkznNySZccHSQ4vGfPayVjkpn4iW2Jw0yPCf3pawC+mPUSss/S8oUrLoJX7leTjcjWwAg70ciI3kPA9aVqFpAoGBAIOQDxO5JqQGp0gaqBQePYsJadIHaBQNXN0Dz1WlyLllk0HwDH7XNqvdQp6H79t6Zt2+IePqSqcJ8E/zkP72W2ca9CYxMaoESE1o+dK8llt+WkrazWqorzubSskejl3N7UigYtvhOg/jIuEYSZUH66oL8XKyczCKoVpBj67a2lP7AoGAasHB2lY1NWwBCTWuK6F6Oh/Ab/hT1k0Q/PD9lkMgl/1NtulXHNf4YzLps/KyZp+B53ehENQdXeWRfBVQQSR9r03AQzjxq3NBrrbig+feZNbr5BAfP6ice24bA97I7g1kNKDuws6/ggwMpBdjQqYyXYL9olh6BatsWQ+7/LBiBYkCgYBKSQE0yJmooInAc5mbhqmSuTnrqt0z7ZUQFNTKNorJY1t/wa0xnEgnXPh36x1gmhNoFnkLHGhXms9OD5vPc5VSX2n7tsNcl0mYhCYng1QdXVRHdFZa3bQ7sUrIzFUk1dBMOmbFDOXLN0je38Sl4o4mi7tbPm/K8YiJ6+ahGD+vBg==',
//
//        'log' => [ // optional
//            'file' => '../storage/logs/alipay.log',
//            'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
//            'type' => 'single', // optional, 可选 daily.
//            'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
//        ],
//        'http' => [
//            'timeout' => 5.0,
//            'connect_timeout' => 5.0,
//            // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
//        ],
//        'mode' => 'dev', // optional,设置此参数，将进入沙箱模式
//    ]
//];

return [
    //应用ID,您的APPID。
    'app_id' => "2016092700609223",

    //商户私钥
    'merchant_private_key' => "MIIEowIBAAKCAQEA3LMeW+dJp+5uMDrzXo0pUoInIhIXwlkU9ZWyDbx2fLd4n8j9gJgP6aEWvR+ziubcpKnabE1f1IxEzee/qWkQxgZWHUVTMopOxBqNX+2s6uw2aqggCeq1QBfc37+XZdnKs6xwdb3F993/FliZA+4plUOTPS5byqgNaM1IuriyFg0MXoIh2IxO09FW7pc7SwzvLdDldAxDjQxFCsYb8ngGBXW6t+ZrqO8yNbARQx4eJxh2FtEw8huvwBGbetDHIALCBiCUIAyLpsjOyvtl9E3ov0Ar9/VxDmpVVW19Y8wq/tDmKWDx2DsrVR9QpuPCpfTa1zQdgsSx/zjf5HhvRAsckQIDAQABAoIBADELjR+XUoMDNXF6aEMG07wGOHQV2TnTWhkJXzw2OY6VpzS7EbrWEBM3PTpiJSAlFbtyE5wlxboSQegQLEOVmaioF9MBaO++VKq3y9sZkmfSfnVNT3Fku0q3AtqmVRrJP4aWN5eyyJ/AscNhhP+emZcWIU5jUvrCRdiYZiU4jjrf2bd8LgUDx/oFcJQ+wskwumielHg5qJvA8Y1ZbhG9GPDwvRun3PnPHKwkiaykWhPO2mQe6TJcRTYpBV/zJ7QT1Dk1Xzd2OSnR5KkD/jVuq74FFd00mcZJ3QSsh2EF5Wqtt75/wqed2wa2ewwdvfaxw7Su1FeNIxXHGCFR2aWFzcECgYEA97fi8RD9HscX3CfFXUwRsHNQ8c4oMlCLgy1nMk8VBzovqp3mEsfR+R41uGMHSTu635Zh57Ds0tYwiERB6udZSRT/mIRrJTxoLocnF+HWGejz7PnHOsKL3FTfu4unsbhBYvO8Vl6XyUAkDN16QprJeMlAOT+L2qL1EqsIhlI2tY0CgYEA5BP9zUT2GsjHovbsdiYDIHisBGci+v5SQloMhOXqOa2kvCTh5EaACSc0xz3q+wZZMKPZJn+7xb0fYNGVQ7tOjkxLF12pZ4osn4K+37rqiKe84qKX1g+ekp7vjteOvXdxBoukKklTdtBDBU426RRiiNKi8khmJSSKbhZRRdXtGBUCgYEA5H2HJNiIwXTe+0Dr+UyLHHihdwizZwWISez9PRhYyxvOj8+pQjVx5hkJcBRXyiMAEfBCSlWVfDv49BgRvTy7zH9D60hpFCWN6yza0FqNA8UuCa2zKO3917Op0vHUMkdEeKNdW0VROF6jYgKAHSNtJq5rQOLuezLIXvnHmS4ILJkCgYBeB6vsU9EOy9YaZqioMRW67mUkz4yJZA5v0oY0yEEflGpFMwN6RGKG44YL2oglA8IDnplpGOJGLKliFiXuras+WU/gCzpLOJkbDiE5RetpeZYS7auhkgDzO9lRz6bGkBal9y4wTNi/NC9dYZib0U6qUATj1FtgVsdHiaXqH79G3QKBgBTSMVueIHFOoZiAc3g7wPcOqVeg2XcM3MC1IRyNtq+U7jB54TQop8tjstTprfm9ZBgg5vdd2V8UunwGDYVLuJ0HJx18ow6E1khCaRyIfnb4HbBhy0SpA8cY63cWHbMpyWE0y5Gay4S/kNFteXMPKR4NW7Dv5366CWobe7PJZdG6",

    //异步通知地址
    'notify_url' => "http://47.93.0.203/notify_url.php",

    //同步跳转
    'return_url' => "http://47.93.0.203/return_url.php",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3LMeW+dJp+5uMDrzXo0pUoInIhIXwlkU9ZWyDbx2fLd4n8j9gJgP6aEWvR+ziubcpKnabE1f1IxEzee/qWkQxgZWHUVTMopOxBqNX+2s6uw2aqggCeq1QBfc37+XZdnKs6xwdb3F993/FliZA+4plUOTPS5byqgNaM1IuriyFg0MXoIh2IxO09FW7pc7SwzvLdDldAxDjQxFCsYb8ngGBXW6t+ZrqO8yNbARQx4eJxh2FtEw8huvwBGbetDHIALCBiCUIAyLpsjOyvtl9E3ov0Ar9/VxDmpVVW19Y8wq/tDmKWDx2DsrVR9QpuPCpfTa1zQdgsSx/zjf5HhvRAsckQIDAQAB"

];