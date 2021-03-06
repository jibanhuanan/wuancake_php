<!DOCTYPE HTML>
<html>
<head>
    <include file="Public/head"/>
    <link type="text/css" rel="stylesheet" href="__CSS__/group.css"/>
    <script type="text/javascript" src="__JS__/common.js"></script>
</head>
<body>
<!-- 头部 -->
<include file="Public/header"/>
<!-- /头部 -->

<!-- 主体 -->
<div id="main-container" class="container clearfix">

    <include file="Public/nav"/>
    <div class="col-xs-8">
        <div class="common-block group_info">
            <header>
                <div class="pull-right">

                </div>
                <i class="icon-list-ul icon-border-circle"></i>&nbsp; 发现 &nbsp;
                    <small>{$posts.count} 篇</small>

            </header>
            <div class="common-block-body">

                <section class="items">
                    <volist name="posts.data" id="vo">
                        <div class="clearfix item">
                            <div class="col-xs-2">
                                <div class="text-center alert ">
                                    <strong>{$vo.support_count}</strong><br/> 喜欢
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <div class="item-heading">
                                    <!-- <div class="pull-right"><a href="###"><i class="icon-pencil"></i> 编辑</a> &nbsp;<a
                                             href="#"><i
                                             class="icon-remove"></i> 删除</a></div>-->
                                    <h4 class="text-more" style="width: 100%"><a target="_blank" href="{:U('index/group?id='.$vo['group_id'])}"
                                           class="label label-success">{$vo.group.title}</a>&nbsp; <a target="_blank"
                                                                                                      href="{:U('group/index/detail',array('id'=>$vo['id']))}">{$vo.title}</a>
                                    </h4>
                                </div>
                                <div class="item-content">
                                    <neq name="vo.cover" value="">
                                        <div class="media pull-right">
                                            <a target="_blank" href="{:U('group/index/detail',array('id'=>$vo['id']))}">
                                                <div class="img-thumbnail-wrap"
                                                     style="width:80px;height:80px;line-height:80px">
                                                    <img class="" src="{$vo.cover}">
                                                </div>
                                            </a>
                                        </div>
                                    </neq>

                                    <div class="text">
                                        <a target="_blank" href="{:U('group/index/detail',array('id'=>$vo['id']))}">{$vo.summary}...</a>
                                    </div>
                                </div>
                                <div class="item-footer">
                                    <!-- <span class="label">tag1</span>-->
                                    &nbsp;
                                    <a target="_blank" href="{:U('group/index/detail',array('id'=>$vo['id']))}"
                                       class="text-muted"><i class="icon-comments"></i> {$vo.reply_count}</a>&nbsp;
                                    <span class="text-muted">{$vo.create_time|friendlyDate}</span>
                                </div>
                            </div>

                        </div>
                    </volist>
                </section>
                <footer>
                    {$posts.html}
                </footer>
            </div>

        </div>

    </div>
    <div class="col-xs-4">
        <div class="common-block">
            <header>
                随机推荐
            </header>
            <section>
                <ul class="group-list">
                    <volist name="groups" id="vo">
                        <li class="clearfix">
                            <div class="col-xs-4">
                                <div class="img-thumbnail-wrap" style="width:80px;height:80px;line-height:80px">
                                    <a href="{:U('group/index/group',array('id'=>$vo['id']))}" target="_blank"><img
                                            class="" src="{$vo.logo|getThumbImageById=80,80}"
                                            style="width: 80px;height: 80px"/></a>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <h4>
                                    <a href="{:U('group/index/group',array('id'=>$vo['id']))}" target="_blank">{$vo.title}</a>
                                </h4>

                                <p>
                                    {$vo.member_count} 个{$vo.member_alias|default='成员'}&nbsp;&nbsp;
                                    <a data-role="group_attend" data-group-id="{$vo.id}" class="">+加入小组</a>
                                </p>
                            </div>

                        </li>
                    </volist>
                </ul>
            </section>
        </div>
    </div>
</div>
<!-- /主体 -->

<!-- 底部 -->
<include file="Public/footer"/>
<!-- /底部 -->
</body>
</html>