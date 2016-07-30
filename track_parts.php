<?php
include "head.php";

?>


<body class="no-skin">
    

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {
            }
        </script>

 <?php
include "side.php";

?>
<!-- main-content -->
        <div class=" col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="main-content-inner">
                
                <?php include "breadcrumb.php"; ?>

                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>
  

                    <div class="page-header">
                        <h1>
                            Tables
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Static &amp; Dynamic Tables
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <table id="simple-table" class="table  table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </th>
                                                <th class="detail-col">Details</th>
                                                <th>Domain</th>
                                                <th>Price</th>
                                                <th class="hidden-480">Clicks</th>

                                                <th>
                                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                    Update
                                                </th>
                                                <th class="hidden-480">Status</th>

                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Details</span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="#">ace.com</a>
                                                </td>
                                                <td>$45</td>
                                                <td class="hidden-480">3,330</td>
                                                <td>Feb 12</td>

                                                <td class="hidden-480">
                                                    <span class="label label-sm label-warning">Expiring</span>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <button class="btn btn-xs btn-success">
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-warning">
                                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                                        </button>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                        <span class="blue">
                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-2">
                                                                <div class="text-center">
                                                                    <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="ace-master/assets/images/avatars/profile-pic.jpg" />
                                                                    <br />
                                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                        <div class="inline position-relative">
                                                                            <a class="user-title-label" href="#">
                                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                                &nbsp;
                                                                                <span class="white">Alex M. Doe</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-7">
                                                                <div class="space visible-xs"></div>

                                                                <div class="profile-user-info profile-user-info-striped">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Username </div>

                                                                        <div class="profile-info-value">
                                                                            <span>alexdoe</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Location </div>

                                                                        <div class="profile-info-value">
                                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                            <span>Netherlands, Amsterdam</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Age </div>

                                                                        <div class="profile-info-value">
                                                                            <span>38</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Joined </div>

                                                                        <div class="profile-info-value">
                                                                            <span>2010/06/20</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Last Online </div>

                                                                        <div class="profile-info-value">
                                                                            <span>3 hours ago</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> About Me </div>

                                                                        <div class="profile-info-value">
                                                                            <span>Bio</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="space visible-xs"></div>
                                                                <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                <div class="space-6"></div>

                                                                <form>
                                                                    <fieldset>
                                                                        <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                    </fieldset>

                                                                    <div class="hr hr-dotted"></div>

                                                                    <div class="clearfix">
                                                                        <label class="pull-left">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"> Email me a copy</span>
                                                                        </label>

                                                                        <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                            Submit
                                                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Details</span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="#">base.com</a>
                                                </td>
                                                <td>$35</td>
                                                <td class="hidden-480">2,595</td>
                                                <td>Feb 18</td>

                                                <td class="hidden-480">
                                                    <span class="label label-sm label-success">Registered</span>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <button class="btn btn-xs btn-success">
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-warning">
                                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                                        </button>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                        <span class="blue">
                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-2">
                                                                <div class="text-center">
                                                                    <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="ace-master/assets/images/avatars/profile-pic.jpg" />
                                                                    <br />
                                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                        <div class="inline position-relative">
                                                                            <a class="user-title-label" href="#">
                                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                                &nbsp;
                                                                                <span class="white">Alex M. Doe</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-7">
                                                                <div class="space visible-xs"></div>

                                                                <div class="profile-user-info profile-user-info-striped">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Username </div>

                                                                        <div class="profile-info-value">
                                                                            <span>alexdoe</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Location </div>

                                                                        <div class="profile-info-value">
                                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                            <span>Netherlands, Amsterdam</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Age </div>

                                                                        <div class="profile-info-value">
                                                                            <span>38</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Joined </div>

                                                                        <div class="profile-info-value">
                                                                            <span>2010/06/20</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Last Online </div>

                                                                        <div class="profile-info-value">
                                                                            <span>3 hours ago</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> About Me </div>

                                                                        <div class="profile-info-value">
                                                                            <span>Bio</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="space visible-xs"></div>
                                                                <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                <div class="space-6"></div>

                                                                <form>
                                                                    <fieldset>
                                                                        <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                    </fieldset>

                                                                    <div class="hr hr-dotted"></div>

                                                                    <div class="clearfix">
                                                                        <label class="pull-left">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"> Email me a copy</span>
                                                                        </label>

                                                                        <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                            Submit
                                                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Details</span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="#">max.com</a>
                                                </td>
                                                <td>$60</td>
                                                <td class="hidden-480">4,400</td>
                                                <td>Mar 11</td>

                                                <td class="hidden-480">
                                                    <span class="label label-sm label-warning">Expiring</span>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <button class="btn btn-xs btn-success">
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-warning">
                                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                                        </button>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                        <span class="blue">
                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-2">
                                                                <div class="text-center">
                                                                    <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="ace-master/assets/images/avatars/profile-pic.jpg" />
                                                                    <br />
                                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                        <div class="inline position-relative">
                                                                            <a class="user-title-label" href="#">
                                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                                &nbsp;
                                                                                <span class="white">Alex M. Doe</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-7">
                                                                <div class="space visible-xs"></div>

                                                                <div class="profile-user-info profile-user-info-striped">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Username </div>

                                                                        <div class="profile-info-value">
                                                                            <span>alexdoe</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Location </div>

                                                                        <div class="profile-info-value">
                                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                            <span>Netherlands, Amsterdam</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Age </div>

                                                                        <div class="profile-info-value">
                                                                            <span>38</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Joined </div>

                                                                        <div class="profile-info-value">
                                                                            <span>2010/06/20</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Last Online </div>

                                                                        <div class="profile-info-value">
                                                                            <span>3 hours ago</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> About Me </div>

                                                                        <div class="profile-info-value">
                                                                            <span>Bio</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="space visible-xs"></div>
                                                                <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                <div class="space-6"></div>

                                                                <form>
                                                                    <fieldset>
                                                                        <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                    </fieldset>

                                                                    <div class="hr hr-dotted"></div>

                                                                    <div class="clearfix">
                                                                        <label class="pull-left">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"> Email me a copy</span>
                                                                        </label>

                                                                        <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                            Submit
                                                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Details</span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="#">best.com</a>
                                                </td>
                                                <td>$75</td>
                                                <td class="hidden-480">6,500</td>
                                                <td>Apr 03</td>

                                                <td class="hidden-480">
                                                    <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <button class="btn btn-xs btn-success">
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-warning">
                                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                                        </button>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                        <span class="blue">
                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-2">
                                                                <div class="text-center">
                                                                    <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="ace-master/assets/images/avatars/profile-pic.jpg" />
                                                                    <br />
                                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                        <div class="inline position-relative">
                                                                            <a class="user-title-label" href="#">
                                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                                &nbsp;
                                                                                <span class="white">Alex M. Doe</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-7">
                                                                <div class="space visible-xs"></div>

                                                                <div class="profile-user-info profile-user-info-striped">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Username </div>

                                                                        <div class="profile-info-value">
                                                                            <span>alexdoe</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Location </div>

                                                                        <div class="profile-info-value">
                                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                            <span>Netherlands, Amsterdam</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Age </div>

                                                                        <div class="profile-info-value">
                                                                            <span>38</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Joined </div>

                                                                        <div class="profile-info-value">
                                                                            <span>2010/06/20</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Last Online </div>

                                                                        <div class="profile-info-value">
                                                                            <span>3 hours ago</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> About Me </div>

                                                                        <div class="profile-info-value">
                                                                            <span>Bio</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="space visible-xs"></div>
                                                                <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                <div class="space-6"></div>

                                                                <form>
                                                                    <fieldset>
                                                                        <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                    </fieldset>

                                                                    <div class="hr hr-dotted"></div>

                                                                    <div class="clearfix">
                                                                        <label class="pull-left">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"> Email me a copy</span>
                                                                        </label>

                                                                        <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                            Submit
                                                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td class="center">
                                                    <div class="action-buttons">
                                                        <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                            <i class="ace-icon fa fa-angle-double-down"></i>
                                                            <span class="sr-only">Details</span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="#">pro.com</a>
                                                </td>
                                                <td>$55</td>
                                                <td class="hidden-480">4,250</td>
                                                <td>Jan 21</td>

                                                <td class="hidden-480">
                                                    <span class="label label-sm label-success">Registered</span>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <button class="btn btn-xs btn-success">
                                                            <i class="ace-icon fa fa-check bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-info">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-danger">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </button>

                                                        <button class="btn btn-xs btn-warning">
                                                            <i class="ace-icon fa fa-flag bigger-120"></i>
                                                        </button>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                        <span class="blue">
                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="detail-row">
                                                <td colspan="8">
                                                    <div class="table-detail">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-2">
                                                                <div class="text-center">
                                                                    <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="ace-master/assets/images/avatars/profile-pic.jpg" />
                                                                    <br />
                                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                        <div class="inline position-relative">
                                                                            <a class="user-title-label" href="#">
                                                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                                                &nbsp;
                                                                                <span class="white">Alex M. Doe</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-7">
                                                                <div class="space visible-xs"></div>

                                                                <div class="profile-user-info profile-user-info-striped">
                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Username </div>

                                                                        <div class="profile-info-value">
                                                                            <span>alexdoe</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Location </div>

                                                                        <div class="profile-info-value">
                                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                            <span>Netherlands, Amsterdam</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Age </div>

                                                                        <div class="profile-info-value">
                                                                            <span>38</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Joined </div>

                                                                        <div class="profile-info-value">
                                                                            <span>2010/06/20</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> Last Online </div>

                                                                        <div class="profile-info-value">
                                                                            <span>3 hours ago</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-info-row">
                                                                        <div class="profile-info-name"> About Me </div>

                                                                        <div class="profile-info-value">
                                                                            <span>Bio</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-sm-3">
                                                                <div class="space visible-xs"></div>
                                                                <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                                <div class="space-6"></div>

                                                                <form>
                                                                    <fieldset>
                                                                        <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                                    </fieldset>

                                                                    <div class="hr hr-dotted"></div>

                                                                    <div class="clearfix">
                                                                        <label class="pull-left">
                                                                            <input type="checkbox" class="ace" />
                                                                            <span class="lbl"> Email me a copy</span>
                                                                        </label>

                                                                        <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                            Submit
                                                                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.span -->
                            </div><!-- /.row -->

                            <div class="hr hr-18 dotted hr-double"></div>

                            

                            <div class="hr hr-18 dotted hr-double"></div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <h3 class="header smaller lighter blue">jQuery dataTables</h3>

                                    <div class="clearfix">
                                        <div class="pull-right tableTools-container"></div>
                                    </div>
                                    <div class="table-header">
                                        Results for "Latest Registered Domains"
                                    </div>

                                    <!-- div.table-responsive -->

                                    <!-- div.dataTables_borderWrap -->
                                    <div>
                                        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Domain</th>
                                                    <th>Price</th>
                                                    <th class="hidden-480">Clicks</th>

                                                    <th>
                                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                        Update
                                                    </th>
                                                    <th class="hidden-480">Status</th>

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">app.com</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td class="hidden-480">3,330</td>
                                                    <td>Feb 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">base.com</a>
                                                    </td>
                                                    <td>$35</td>
                                                    <td class="hidden-480">2,595</td>
                                                    <td>Feb 18</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">max.com</a>
                                                    </td>
                                                    <td>$60</td>
                                                    <td class="hidden-480">4,400</td>
                                                    <td>Mar 11</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">best.com</a>
                                                    </td>
                                                    <td>$75</td>
                                                    <td class="hidden-480">6,500</td>
                                                    <td>Apr 03</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">pro.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td class="hidden-480">4,250</td>
                                                    <td>Jan 21</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">team.com</a>
                                                    </td>
                                                    <td>$40</td>
                                                    <td class="hidden-480">3,200</td>
                                                    <td>Feb 09</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">up.com</a>
                                                    </td>
                                                    <td>$95</td>
                                                    <td class="hidden-480">8,520</td>
                                                    <td>Feb 22</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">view.com</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td class="hidden-480">4,100</td>
                                                    <td>Mar 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">nice.com</a>
                                                    </td>
                                                    <td>$38</td>
                                                    <td class="hidden-480">3,940</td>
                                                    <td>Feb 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">fine.com</a>
                                                    </td>
                                                    <td>$25</td>
                                                    <td class="hidden-480">2,983</td>
                                                    <td>Apr 01</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">good.com</a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td class="hidden-480">6,500</td>
                                                    <td>Feb 02</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">great.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td class="hidden-480">6,400</td>
                                                    <td>Feb 24</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">shine.com</a>
                                                    </td>
                                                    <td>$25</td>
                                                    <td class="hidden-480">2,200</td>
                                                    <td>Apr 01</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">rise.com</a>
                                                    </td>
                                                    <td>$42</td>
                                                    <td class="hidden-480">3,900</td>
                                                    <td>Feb 01</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">above.com</a>
                                                    </td>
                                                    <td>$35</td>
                                                    <td class="hidden-480">3,420</td>
                                                    <td>Mar 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">share.com</a>
                                                    </td>
                                                    <td>$30</td>
                                                    <td class="hidden-480">3,200</td>
                                                    <td>Feb 11</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">fair.com</a>
                                                    </td>
                                                    <td>$35</td>
                                                    <td class="hidden-480">3,900</td>
                                                    <td>Mar 26</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">year.com</a>
                                                    </td>
                                                    <td>$48</td>
                                                    <td class="hidden-480">3,990</td>
                                                    <td>Feb 15</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">day.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td class="hidden-480">5,600</td>
                                                    <td>Jan 29</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">light.com</a>
                                                    </td>
                                                    <td>$40</td>
                                                    <td class="hidden-480">3,100</td>
                                                    <td>Feb 17</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">sight.com</a>
                                                    </td>
                                                    <td>$58</td>
                                                    <td class="hidden-480">6,100</td>
                                                    <td>Feb 19</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">right.com</a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td class="hidden-480">4,400</td>
                                                    <td>Apr 01</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">once.com</a>
                                                    </td>
                                                    <td>$20</td>
                                                    <td class="hidden-480">1,400</td>
                                                    <td>Apr 04</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-md hidden-lg">
                                                            <div class="inline pos-rel">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

         

                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

<!--        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120">
                        <span class="blue bolder">Ace</span>
                        Application &copy; 2013-2014
                    </span>

                    &nbsp; &nbsp;
                    <span class="action-buttons">
                        <a href="#">
                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>-->

        
    </div><!-- /.main-container -->

<?php
include "foot.htm";
include "foot_panel.html";

?>
<script>
        $("#track").attr("class", "active");
    </script>