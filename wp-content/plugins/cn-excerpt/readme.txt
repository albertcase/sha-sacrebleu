=== WP CN Excerpt ===
Contributors:Joychao
Tags: chinese,cn,excerpt, advanced, post, posts, template, formatting
Donate link: https://me.alipay.com/joychao
Requires at least: 3.2
Tested up to: 3.4.2
Stable tag: 4.2.6


== Description ==

 WordPress高级摘要插件。支持在后台设置摘要长度，摘要最后的显示字符，以及允许哪些html标记在摘要中显示,基于Advance Excerpt修改.

在摘要中支持HTML标签的显示；
可选the_excerpt和the_content时摘要显示；
自动裁剪的摘要功能；
可以自己定制摘要的长度和省略号的显示；
"阅读全文" 标签会被自动的添加（可选）；
摘要长度是真实的内容的长度（不包含HTML标签）；
主题开发者可以使用the_advanced_expert()方法进行更多的控制。
这个插件可以完美的支持自动中文摘要，而且不局限于生成中文摘要，所有的UNICODE字符都支持。

This plugin adds several improvements to WordPress' default way of creating excerpts.
1. Keeps HTML markup in the excerpt (and you get to choose which tags are included)
2. Trims the excerpt to a given length using either character count or word count
3. Only the 'real' text is counted (HTML is ignored but kept
4. Customizes the excerpt length and the ellipsis character that are used
5. Completes the last word or sentence in an excerpt (no weird cuts)
6. Adds a *read-more* link to the text
7. Theme developers can use `the_advanced_excerpt()` for even more control (see the FAQ)

Most of the above features are optional and/or can be customized by the user or theme developer.


== Installation ==
1，下载插件上传到/wp-content/plugins/目录后台启用即可
2，后台“插件”->“安装插件”->搜索框输入："wp cn experct"->安装启用即可

== Changelog ==
= 4.1.6=
修正了默认主题下无法摘要的bug

= 4.1.7=
添加可选the_excerpt显示摘要选项

 