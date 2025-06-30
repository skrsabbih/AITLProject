@include('layouts.dashboard')

<div id="loading" style="position:absolute; top:50%; left:50%; width:100px; height:100px; background-color:#f2f2f2; border:0px solid #99BBE8; z-index:250; display:none;">
    <img src="{{ asset('images/indicator2.gif') }}" border="0" />
</div>

<div class="page-content">
    <div class="page-body ra_bodyHeader">
        <div class="widget ra_widgetMarginBody">
            <div class="widget-header ra_bodyHeaderTitleIcon">
                <i class="widget-icon fa fa-sun-o blue"></i>
                <span class="widget-caption"><strong>Designation Management</strong></span>
                <div class="widget-buttons">
                    <div class="form-group ra_form-group">
                        <a href="{{ url('organization/designationForm/0') }}" class="btn btn-sm btn-maroon shiny">
                            <i class="fa fa-plus-square"></i> Add New
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
                        <td class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker blue"></i></span>
                                    <input type="text" name="title" id="title" class="form-control input-sm" placeholder="Department">
                                </div>
                            </div>
                        </td>

                        <td class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase blue"></i></span>
                                    <select class="form-control input-sm" name="orgID" id="orgID">
                                        <option value="1">Org 1</option>
                                        <option value="2">Org 2</option>
                                    </select>
                                </div>
                            </div>
                        </td>

                        <td class="ra_SeachTDPaddingRight">
                            <div class="form-group ra_form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-slideshare blue"></i></span>
                                    <select class="form-control input-sm" name="limit" id="limit">
                                        <option value="10">-- Records --</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
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
                    <span class="widget-caption">Designation List Total : 0 Showing 0 to 0</span>
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

                <div class="widget-body ra_widgetBodyTableData">
                    <table class="table table-bordered table-striped table-condensed flip-content">
                        <thead class="flip-content bordered-blueberry bordered-raTableThead">
                            <tr>
                                <th width="2%">NR</th>
                                <th>Designation</th>
                                <th>Short Form</th>
                                <th>Organization</th>
                                <th>Employees</th>
                                <th width="10%" colspan="2" class="ratheadTableBodyCenter">Action</th>
                            </tr>
                        </thead>
                        <tbody class="raTabletbody">
                            <tr>
                                <td class="raTableBodyNR"><i class="fa fa-square-o blue"></i></td>
                                <td>Example Designation</td>
                                <td>EX</td>
                                <td>Example Org</td>
                                <td>0</td>
                                <td class="raTableBodyNR">
                                    <a href="#" class="btn btn-default purple btn-xs">
                                        <i class="glyphicon glyphicon-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="raTableBodyNR">
                                    <a href="#" class="btn btn-danger btn-xs delete" onclick="return confirm('Do you really want to remove this Designation?')">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="11" align="center" style="padding:100px;">
                                    <b>No Records Found</b>
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

    var orgID = document.getElementById("orgID").value || 0;
    var title = document.getElementById("title").value || 'NULL';
    var limit = document.getElementById("limit").value || 10;
    var url = "{{ url('organization/designationPagination') }}";
    var myRandom = parseInt(Math.random() * 99999999);

    xmlhttp.onreadystatechange = stateChanged;
    xmlhttp.open("GET", url + "/" + encodeURIComponent(pageNumber) + "/" + encodeURIComponent(limit) + "/" + encodeURIComponent(orgID) + "/" + encodeURIComponent(title) + "/" + myRandom, true);
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
