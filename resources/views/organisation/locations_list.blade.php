@include('layouts.dashboard')


<div id="loading"
    style="position:absolute;top:50%;left:50%;width:100px;height:100px; background:#f2f2f2; border:0px solid #99BBE8; z-index:250; display:none;">
    <img src="{{ asset('images/indicator2.gif') }}" border="0" />
</div>

<!-- Page Content -->
<div class="page-content">
    <!-- /Page Header -->
    <!-- Page Body -->
    <div class="page-body ra_bodyHeader">
        <div class="widget ra_widgetMarginBody">
            <div class="widget-header ra_bodyHeaderTitleIcon">
                <i class="widget-icon fa fa-sun-o blue"></i>
                <span class="widget-caption"><strong>Organization's Location Information</strong></span>
                <div class="widget-buttons">
                    <div class="form-group ra_form-group">
                        <a href="" class="btn btn-sm btn-maroon shiny">
                            <i class="fa fa-plus-square"></i> New Location
                        </a>
                        <a href="javascript:void(0);" onclick="searchResult();" class="btn btn-sm btn-primary shiny">
                            <i class="fa fa-search"></i> Search Now
                        </a>
                    </div>
                </div><!--Widget Buttons-->
            </div><!--Widget Header-->
            <div class="widget-body">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left" class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase blue"></i></span>
                                    <select class="form-control input-sm" name="orgID" id="orgID">

                                    </select>
                                </div>
                            </div>
                        </td>

                        <td align="left" class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker blue"></i></span>
                                    <input type="text" name="title" id="title" class="form-control input-sm"
                                        placeholder="Location" />
                                </div>
                            </div>
                        </td>

                        <td align="left" class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-slideshare blue"></i></span>
                                    <select class="form-control input-sm" name="limit" id="limit">
                                        <option value="{{ config('constants.LIMIT_PERPAGE') }}">-- Records --</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') }}">
                                            {{ config('constants.LIMIT_PERPAGE') }}</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') * 2 }}">
                                            {{ config('constants.LIMIT_PERPAGE') * 2 }}</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') * 3 }}">
                                            {{ config('constants.LIMIT_PERPAGE') * 3 }}</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') * 4 }}">
                                            {{ config('constants.LIMIT_PERPAGE') * 4 }}</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') * 5 }}">
                                            {{ config('constants.LIMIT_PERPAGE') * 5 }}</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') * 6 }}">
                                            {{ config('constants.LIMIT_PERPAGE') * 6 }}</option>
                                        <option value="{{ config('constants.LIMIT_PERPAGE') * 7 }}">
                                            {{ config('constants.LIMIT_PERPAGE') * 7 }}</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div><!--Widget Body-->
        </div><!--Widget-->

        <div id="pagination">

            <div class="widget">
                <div class="widget-header ra_bodyHeaderTitleIcon">
                    <i class="widget-icon fa fa-support blue"></i>
                    <span class="widget-caption"> List Total : Showing to </span>
                    <div class="widget-buttons">
                        <div class="btn-group">

                            <a class="btn btn-maroon btn-sm" href="javascript:void(0);">
                                <i class="fa fa-download"></i> Export
                            </a>
                            <a class="btn btn-maroon btn-sm" href="#" data-toggle="maximize">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a class="btn btn-maroon btn-sm" href="#" data-toggle="collapse">
                                <i class="fa fa-minus"></i>
                            </a>
                        </div>
                    </div>
                </div><!--Widget Header-->
                <div class="widget-body ra_widgetBodyTableData">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content bordered-blueberry bordered-raTableThead">
                            <tr>
                                <th width="2%">NR</th>
                                <th> Location</th>
                                <th> Organization</th>
                                <th> Employees</th>
                                <th> Phone</th>
                                <th width="10%" colspan="2" class="ratheadTableBodyCenter">Action</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="raTableBodyNR"><i class="fa fa-square-o blue"></i></td>
                            <td>Head Office</td>
                            <td>ABC Corporation</td>
                            <td>15</td>
                            <td>+880123456789</td>
                            <td class="raTableBodyNR">
                                <a href="#" class="btn btn-default purple btn-xs">
                                    <i class="glyphicon glyphicon-edit"></i> Edit
                                </a>
                            </td>
                            <td class="raTableBodyNR">
                                <a href="#" class="btn btn-danger btn-xs delete"
                                    onclick="return confirm('Do you really want to remove this location?')">
                                    <i class="fa fa-trash-o"></i> Delete
                                </a>
                            </td>
                        </tr>

                        <tbody class="raTabletbody">
                            {{ $locationListHtml ?? '' }}
                        </tbody>
                        <tr>
                            <td colspan="11" align="center">
                                <input type="hidden" name="startoffset" id="startoffset" value="" />

                            </td>
                        </tr>
                    </table>
                </div><!--Widget Body-->
            </div><!--Widget-->
        </div>
    </div>
    <!-- /Page Body -->
</div>
<!-- /Page Content -->


@push('scripts')
    <script>
        // Your JS functions here: dopagination, searchResult, stateChanged
    </script>
@endpush