@include('layouts.dashboard')

<div id="loading" style="position:absolute; top:50%; left:50%; width:100px; height:100px; background-color:#f2f2f2; border:0px solid #99BBE8; z-index:250; display:none;">
    <img src="{{ asset('images/indicator2.gif') }}" border="0" />
</div>

<div class="page-content">
    <div class="page-body ra_bodyHeader">
        <div class="widget ra_widgetMarginBody">
            <div class="widget-header ra_bodyHeaderTitleIcon">
                <i class="widget-icon fa fa-sun-o blue"></i>
                <span class="widget-caption"><strong>Access Rules Management</strong></span>
                <div class="widget-buttons">
                    <div class="form-group ra_form-group">
                        <a href="{{ url('organization/accessRulesForm/0') }}" class="btn btn-sm btn-maroon shiny">
                            <i class="fa fa-plus-square"></i> Add New Rule
                        </a>
                        <a href="javascript:void(0);" onclick="searchResult();" class="btn btn-sm btn-primary shiny">
                            <i class="fa fa-search"></i> Search Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="widget-body">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="left" class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Rules Title</span>
                                    <input type="text" name="title" id="title" class="form-control input-sm" placeholder="Rules Title">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div id="pagination">
            <div class="widget">
                <div class="widget-header ra_bodyHeaderTitleIcon">
                    <i class="widget-icon fa fa-support blue"></i>
                    <span class="widget-caption">
                        Access Rules List Total : 3 Showing 1 to 3
                    </span>
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
                </div>

                <div class="widget-body ra_widgetBodyTableData table-scrollable">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content bordered-blueberry bordered-raTableThead">
                            <tr>
                                <th width="2%">NR</th>
                                <th>Title</th>
                                <th width="15%">Employees</th>
                                <th width="15%">Creation</th>
                                <th width="2%">?</th>
                                <th width="10%" colspan="2" class="ratheadTableBodyCenter">Action</th>
                            </tr>
                        </thead>
                        <tbody class="raTabletbody">
                            <tr>
                                <td class="raTableBodyNR"><i class="fa fa-square-o blue"></i></td>
                                <td>Admin Access</td>
                                <td>5</td>
                                <td>2025-06-01</td>
                                <td class="raTableBodyNR"><i class="fa fa-check-circle blue"></i></td>
                                <td class="ratheadTableBodyCenter">
                                    <a href="#" class="btn btn-default purple btn-xs">
                                        <i class="glyphicon glyphicon-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="ratheadTableBodyCenter">
                                    <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to remove this Access Rule?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="raTableBodyNR"><i class="fa fa-square-o blue"></i></td>
                                <td>Editor Access</td>
                                <td>12</td>
                                <td>2025-06-05</td>
                                <td class="raTableBodyNR"><i class="fa fa-check-circle blue"></i></td>
                                <td class="ratheadTableBodyCenter">
                                    <a href="#" class="btn btn-default purple btn-xs">
                                        <i class="glyphicon glyphicon-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="ratheadTableBodyCenter">
                                    <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to remove this Access Rule?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="raTableBodyNR"><i class="fa fa-square-o blue"></i></td>
                                <td>Viewer Access</td>
                                <td>30</td>
                                <td>2025-06-10</td>
                                <td class="raTableBodyNR"><i class="fa fa-square red"></i></td>
                                <td class="ratheadTableBodyCenter">
                                    <a href="#" class="btn btn-default purple btn-xs">
                                        <i class="glyphicon glyphicon-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="ratheadTableBodyCenter">
                                    <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('Do you really want to remove this Access Rule?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="11" align="center">
                                    <input type="hidden" name="startoffset" id="startoffset" value="0">
                                    <input type="hidden" name="limit" id="limit" value="10">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
var xmlhttp;

function GetXmlHttpObject() {
    if (window.XMLHttpRequest) return new XMLHttpRequest();
    if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
    return null;
}

function dopagination(pageNumber) {
    xmlhttp = GetXmlHttpObject();
    if (xmlhttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }

    document.getElementById("loading").style.display = "block";
    document.getElementById("loading").style.visibility = "visible";

    var title = document.getElementById("title").value || 'NULL';
    var limit = document.getElementById("limit").value || 10;
    var url = "{{ url('organization/accessRulesPagination') }}";
    var myRandom = parseInt(Math.random() * 99999999);

    xmlhttp.onreadystatechange = stateChanged;
    xmlhttp.open("GET", url + "/" + encodeURIComponent(pageNumber) + "/" + encodeURIComponent(limit) + "/" + encodeURIComponent(title) + "/" + myRandom, true);
    xmlhttp.send(null);
}

function searchResult() {
    dopagination(0);
}

function stateChanged() {
    if (xmlhttp.readyState == 4) {
        document.getElementById("loading").style.visibility = "hidden";
        document.getElementById("pagination").innerHTML = xmlhttp.responseText;
    }
}
</script>
@endpush
