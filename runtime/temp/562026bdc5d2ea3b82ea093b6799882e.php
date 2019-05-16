<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\wamp64\www\phone\public/../ems/index\view\index\department.html";i:1554631449;s:53:"C:\wamp64\www\phone\ems\index\view\public\__head.html";i:1557393599;s:55:"C:\wamp64\www\phone\ems\index\view\public\__footer.html";i:1555944734;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>柠檬手机公司管理系统</title>
    <link rel="stylesheet" href="../static/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/layer/css/layer.css"/>
    <link rel="stylesheet" href="../static/css/index.css">
    <script src="../static/bootstrap/jquery.min.js"></script>
    <script src="../static/layer/js/layer.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="../static/bootstrap/bootstrap.min.js"></script>
    <script src="../static/js/judgeBrowser.js"></script>
</head>
<body>
<div id="fullScreen">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="../static/images/logo.svg"/></a>
        <ul class="navbar-nav nav-left">
            <li style="margin-top: 9px;cursor: pointer;" id="eidtScreen">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="退出">
                    <span style="color: #fff;" onclick="toggleFullScreen(event)">
                        <i class="fa fa-compress"></i>
                    </span>
                </a>
            </li>
            <li style="margin-top: 9px;cursor: pointer;" id="full">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="全屏">
                    <span style="color: #fff;" onclick="toggleFullScreen(event)">
                        <i class="fa fa-arrows-alt"></i>
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown" style="margin-right: 35px;">
                <a class="nav-link dropdown-toggle" href="javascript:" id="navbardrop" data-toggle="dropdown">
                    <?php echo session('manger_name'); ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo url('index/index/personInfo'); ?>">个人中心</a>
                    <a class="dropdown-item" href="javascript:" id="outLogin">退出登陆</a>
                </div>
            </li>
        </ul>
    </nav>
    <!--测导航栏-->
    <div class="left-menu" style="top: 58px;">
        <div class="menu">
            <?php if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-home"></i>
                    财务管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/wageManger'); ?>">工资管理</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/profitManger'); ?>">盈利管理</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1 || session('roleId') == 2 || session('roleId') == 4): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    销售管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/orderList'); ?>">销售订单</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1 || session('roleId') == 4): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    统计分析
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/saleAnalysis'); ?>">销售分析</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">产品分析</a>-->
                <!--</div>-->
            </div>
			<?php endif; if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    部门管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/department'); ?>">部门配置</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">部门管理</a>-->
                <!--</div>-->
            </div>

            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    角色管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/role'); ?>">角色配置</a>
                </div>
                <!--<div class="sub-menu">-->
                    <!--<a href="#">角色说明</a>-->
                <!--</div>-->
            </div>
			<?php endif; if(session('roleId') == 1 || session('roleId') == 5 || session('roleId') == 4): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    员工管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/mangerList'); ?>">员工列表</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/transfer'); ?>">员工调动</a>
                </div>
            </div>
			<?php endif; if(session('roleId') == 1 || session('roleId') == 2 || session('roleId') == 4): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    客户管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/clientList'); ?>">普通客户</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/supList'); ?>">供应商</a>
                </div>
            </div>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    产品管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/productList'); ?>">产品列表</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/productRole'); ?>">产品分类</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1 || session('roleId') == 3 || session('roleId') == 5): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-globe"></i>
                    售后管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/serveList'); ?>">维修管理</a>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/evaluateList'); ?>">售后评价</a>
                </div>
            </div>
            <?php endif; if(session('roleId') == 1): ?>
            <div class="menu-item">
                <div class="title-menu">
                    <i class="fa fa-gear"></i>
                    系统管理
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-angle-up"></i>
                </div>
                <div class="sub-menu">
                    <a href="<?php echo url('index/index/systemView'); ?>">系统设置</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
<script src="../static/Echart/echarts.min.js"></script>
<script src="../static/Echart/echarts-gl.min.js"></script>
<script src="../static/Echart/echarts-liquidfill.min.js"></script>
<script src="../static/Echart/dark.js"></script>
<script src="../static/Echart/footer.js"></script>
<script src="../static/js/common.js"></script>
<script type="text/javascript">
    // 全屏
    function FullScreen(el) {
        var isFullscreen = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
        if (!isFullscreen) {
            (el.requestFullscreen && el.requestFullscreen()) ||
            (el.mozRequestFullScreen && el.mozRequestFullScreen()) ||
            (el.webkitRequestFullscreen && el.webkitRequestFullscreen()) || (el.msRequestFullscreen && el.msRequestFullscreen());
            document.getElementById('full').style.display = 'none';
            document.getElementById('eidtScreen').style.display = 'block';
            window.sessionStorage['item'] = 1
        } else {
            document.exitFullscreen ? document.exitFullscreen() :
                document.mozCancelFullScreen ? document.mozCancelFullScreen() :
                    document.webkitExitFullscreen ? document.webkitExitFullscreen() : '';
            document.getElementById('full').style.display = 'block';
            document.getElementById('eidtScreen').style.display = 'none';
            window.sessionStorage['item'] = 0;
        }
    }
    function toggleFullScreen(e) {
        var el = e.srcElement || e.target;
        var ele = document.getElementById('fullScreen');
        FullScreen(ele);
    }
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    // 退出登录
    $(function () {
        $('#outLogin').click(function () {
            $.ajax({
                type: "post",
                url: "<?php echo url('index/login/outLogin'); ?>",
                data: "",
                dataType: "",
                success: function (data) {
                    if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        layer.open({
                            title: '退出登陆失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }

                }
            });
        });
    });
</script>
<!-- <div class="content"> -->
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="<?php echo url('index/index/index'); ?>">
        <i class="fa fa-home"></i>首页
    </a>
</nav>
<div class="content" style="height: auto;padding-bottom: 10px;">
    <div class="role_title">
        <div class="icon_role"></div>
        <div class="role_word">
            部门设置
        </div>
    </div>
    <div style="margin-top: 5px;margin-bottom: 5px;margin-left: 1px;">
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#add">添加</button>
    </div>
    <div class="table-responsive" style="margin-top: 10px;text-align: center">
        <table class="table table-striped table-sm table-bordered table-hover">
            <thead>
            <tr>
                <th>序号</th>
                <th>编号</th>
                <th>部门名称</th>
                <th>部门描述</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $i + ($pageinit-1)*4; ?></td>
                <td><?php echo $vo['department_id']; ?></td>
                <td><?php echo $vo['department_name']; ?></td>
                <td><?php echo $vo['department_desc']; ?></td>
                <td>
                    <button type="button" class="btn btn-sm btn-info getInfo" data-id="<?php echo $vo['id']; ?>">详情</button>
                    <button type="button" class="btn btn-sm btn-success getModify" data-id="<?php echo $vo['id']; ?>" data-toggle="modal" data-target="#getModify">修改</button>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="page"><?php if($page): ?><?php echo $page; else: ?>&nbsp;<?php endif; ?></div>
    <div class="role_title"></div>
    <div class="table-responsive" style="margin-top: 10px;">
        <table class="table table-sm table-hover table-striped table-bordered" style="text-align: center;">
            <thead>
            <tr>
                <td>序号</td>
                <td>员工编号</td>
                <td>员工姓名</td>
                <td>员工职位</td>
                <td>员工属性</td>
                <td>合同期限</td>
            </tr>
            </thead>
            <tbody class="departemnts">
            <tr>
                <td colspan="6">暂无数据</td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--添加-->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">添加</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <table>
                            <tr>
                                <td><label for="no">部门编号:</label></td>
                                <td class="pl-10">
                                    <div class="input-group-sm" style="float:left;">
                                        <input type="text" class="form-control" id="no" name="" value="" disabled style="width: 180px;" placeholder="编号">
                                    </div>
                                    <div style="float:left;margin-left: 2px;">
                                        <button type="button" class="btn btn-sm btn-success" id="getNo" style="float:left;">获取</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td><label for="name">部门名称:</label></td>
                                <td class="pl-10">
                                    <div class="input-group-sm">
                                        <input type="text" class="form-control" id="name" name="" value="" placeholder="部门名称">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td><label for="desc">部门描述:</label></td>
                                <td class="pl-10">
                                    <textarea class="form-control" rows="5" id="desc" placeholder="部门描述"></textarea>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="addDepart">确定</button>
                    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!--修改-->
    <div class="modal fade" id="getModify">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">编辑</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="modifyForm">
                                <table>
                                    <tr>
                                        <td><label for="department_no">部门编号:</label></td>
                                        <td class="pl-10">
                                            <div class="input-group-sm" style="float:left;">
                                                <input type="text" hidden id="id"/>
                                                <input type="text" class="form-control" id="department_no" name="" value="" disabled style="width: 180px;" placeholder="编号">
                                            </div>
                                            <div style="float:left;margin-left: 2px;">
                                                <button type="button" class="btn btn-sm btn-success" class="getNo" style="float:left;" disabled>获取</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td><label for="department_name">部门名称:</label></td>
                                        <td class="pl-10">
                                            <div class="input-group-sm">
                                                <input type="text" class="form-control" id="department_name" name="" value="" placeholder="部门名称">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td><label for="department_desc">部门描述:</label></td>
                                        <td class="pl-10">
                                            <textarea class="form-control" rows="5" id="department_desc" placeholder="部门描述"></textarea>
                                        </td>
                                    </tr>
                                </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" id="modify">确定</button>
                    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#addDepart').click(function (e) {
            e.preventDefault();
            var addInfo = {
                no: $('#no').val(),
                name: $('#name').val(),
                desc: $('#desc').val()
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/addDepart'); ?>",
                data: addInfo,
                dataType: "json",
                success: function (data) {
                    if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        layer.open({
                            title: '删除失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            });
        });
        $('#getNo').click(function (e) {
            e.preventDefault();
            var number = '';
            var no = [0,1,2,3,4,5,6,7,8,9];
            for (var i = 0; i < 4; i++) {
                var index = Math.round(Math.random()*9);
                number += no[index];
            }
            var mangerNo = "DNO" + number;
            $('#no').val(mangerNo);
        });

        // 修改
        $('.getModify').click(function (e) {
            e.preventDefault();
            var modify = {
                id: $(this).attr('data-id')
            };
            console.log(modify);
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/department'); ?>",
                data: modify,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data) {
                        $('#id').val(data.id);
                        $('#department_no').val(data.department_id);
                        $('#department_name').val(data.department_name);
                        $('#department_desc').val(data.department_desc);
                    } else {
                        msg('错误','获取数据错误！');
                    }
                }
            });
        });
        $('#modify').click(function (e) {
            e.preventDefault();
            var depName = $('#department_name').val();
            var depDesc = $('#department_desc').val();
            var depNo = $('#department_no').val();
            if (depName.trim() == '') {
                msg('错误','部门名称必填！');
                return
            }
            var depInfo = {
                id: $('#id').val(),
                name: depName,
                desc: depDesc
            };
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/getModify'); ?>",
                data: depInfo,
                dataType: "json",
                success: function (data) {
                    if (data.code == 1) {
                        layer.msg(data.msg, {
                            icon: 6,
                            time: 2000,
                        }, function () {
                            location.href = data.url;
                        });
                    } else {
                        layer.open({
                            title: '删除失败',
                            icon: 2,
                            content: data.msg,
                        });
                    }
                }
            });
        });
        // 详情
        $('.getInfo').click(function (e) {
            e.preventDefault();
            var depId = {
                id: $(this).attr('data-id')
            };
            var depHtml = '';
            var incumbency = '';
            var jobyear = '';
            $.ajax({
                type: "post",
                url: "<?php echo url('index/index/getDepInfo'); ?>",
                data: depId,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            if (data[i].incumbency == '0') {
                                incumbency = '合同员工';
                            } else {
                                incumbency = '在职员工';
                            }
                            if (data[i].jobyear == null) {
                                jobyear = '无';
                            } else {
                                jobyear = data[i].jobyear;
                            }
                            depHtml += '<tr><td>'+(i+1)+'</td><td>'+data[i].manger_no+'</td><td>'+data[i].manger_name+'</td><td>'+data[i].role.role_name+'</td><td>'+incumbency+'</td><td>'+jobyear+'</td></tr>'
                        }
                    } else {
                        depHtml = '<tr><td colspan="6">暂无数据</td></tr>'
                    }

                    $('.departemnts').html(depHtml);
                }
            });
        });
    })
</script>
 </div>
<script src="../static/js/menuItem.js"></script>
</body>
</html>