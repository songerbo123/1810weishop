<?php
$config = array (	
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
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA3LMeW+dJp+5uMDrzXo0pUoInIhIXwlkU9ZWyDbx2fLd4n8j9gJgP6aEWvR+ziubcpKnabE1f1IxEzee/qWkQxgZWHUVTMopOxBqNX+2s6uw2aqggCeq1QBfc37+XZdnKs6xwdb3F993/FliZA+4plUOTPS5byqgNaM1IuriyFg0MXoIh2IxO09FW7pc7SwzvLdDldAxDjQxFCsYb8ngGBXW6t+ZrqO8yNbARQx4eJxh2FtEw8huvwBGbetDHIALCBiCUIAyLpsjOyvtl9E3ov0Ar9/VxDmpVVW19Y8wq/tDmKWDx2DsrVR9QpuPCpfTa1zQdgsSx/zjf5HhvRAsckQIDAQAB",
);