@include('layouts.dashboard')


<!-- Page Content -->
<div class="page-content">
    <!-- Page Body -->
    <div class="page-body ra_bodyHeader">
        <div class="widget ra_widgetMarginBody">
            <div class="widget-header ra_bodyHeaderTitleIcon">
                <i class="widget-icon fa fa-sun-o blue"></i>
                <span class="widget-caption"><strong>Organization's Location Information</strong></span>
                <div class="widget-buttons">
                    <a href="#">
                        <i class="fa fa-arrow-left red"></i>
                    </a>
                    <a href="#" data-toggle="collapse">
                        <i class="fa fa-minus blue"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body">
                <form id="registrationForm" method="post" class="form-horizontal" enctype="multipart/form-data" action="#">
                    @csrf
                    <input type="hidden" name="locationID" value="">
                    <input type="hidden" name="action" value="Add">

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">
                                        <i class="fa fa-info-circle blue"></i> Location Information
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Title</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-tags red"></i></span>
                                                <input type="text" class="form-control input-sm" name="title" placeholder="Location Title" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Organization</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-briefcase blue"></i></span>
                                                <select class="form-control input-sm" name="orgID">
                                                    <option value="">Select Organization</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h5><i class="fa fa-envelope red"></i> Contact Information</h5>
                                    <hr class="wide" style="margin-top:0px; margin-bottom:10px">

                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Email</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope red"></i></span>
                                                <input type="text" class="form-control input-sm" name="email" placeholder="info@example.com" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Phone No</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt red"></i></span>
                                                <input type="text" class="form-control input-sm" name="phone" placeholder="+880 02 XXXXXX" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">FAX</label>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-print red"></i></span>
                                                <input type="text" class="form-control input-sm" name="fax" placeholder="+880 02 XXXXXX" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget radius-bordered">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">
                                        <i class="fa fa-info-circle blue"></i> Others Information
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Address</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" rows="4" name="address" placeholder="Address"></textarea>
                                        </div>
                                    </div>

                                    <hr class="wide">
                                    <div class="form-group">
                                        <div class="col-lg-offset-4 col-lg-8">
                                            <input class="btn btn-maroon shiny" type="submit" value="Insert Location" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script src="{{ asset('assets/js/validation/bootstrapValidator.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#registrationForm").bootstrapValidator();
    });
</script>
@endpush
