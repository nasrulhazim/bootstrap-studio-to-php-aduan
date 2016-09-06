<?php
    $scripts = [
        "js/jquery.min.js",
        "bootstrap/js/bootstrap.min.js",
        "js/Full-Page1.js",
        "js/Full-Page2.js",
        "js/Full-Page3.js",
        "js/Full-Page.js",
        "js/complaint.js"
    ];
?>
<div id="fullpage">
    <div class="section">
        <div class="content">
            <div class="container">
                <div class="row row-custom">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <h1 class="text-center">Search </h1>
                        <form>
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" name="complaint_id" id="complaint_id">
                                    <div class="input-group-btn"><a id="search-btn" class="btn btn-info" role="button" href="#"><i class="fa fa-search"></i></a></div>
                                </div>
                            </div>
                        </form>
                        <p class="help-block">Enter your complaint id</p><a class="btn btn-success btn-block" role="button" href="" data-toggle="modal" data-target="#modal-new-complaint"><i class="fa fa-plus"></i> New Complaint</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="content">
            <div class="container row-section">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Complaint Status</h1>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th># </th>
                                        <th>Problem </th>
                                        <th>Category </th>
                                        <th>Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="search-complaint_id">HW1/09/2016 </td>
                                        <td id="search-complaint_problem">Monitor Damaged</td>
                                        <td id="search-complaint_category">Hardware </td>
                                        <td><span id="search-complaint_status" class="label">In Progress</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modal-new-complaint">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">New Complaint</h4></div>
            <div class="modal-body">
                <form method="post" target="_self" name="form-new-complaint">
                    <div class="form-group">
                        <label class="control-label">Name </label>
                        <input class="form-control" type="text" required name="name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">IC </label>
                        <input class="form-control" type="text" required name="ic">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone </label>
                        <input class="form-control" type="text" required name="phone">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Subject </label>
                        <input class="form-control" type="text" required name="subject">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Unit </label>
                        <select class="form-control" required name="unit">
                            <?php foreach ($units as $key => $value): ?>
                                <option value="<?php echo $value['idunit']; ?>"><?php echo $value['unit']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Category </label>
                        <select class="form-control" required name="category">
                            <?php foreach ($categories as $key => $value): ?>
                                <option value="<?php echo $value['idkat']; ?>"><?php echo $value['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Problem </label>
                        <textarea class="form-control" required name="problem"></textarea>
                    </div>
                    <button id="new-complaint-btn" class="btn btn-success" type="submit">Submit </button>
                </form>
            </div>
        </div>
    </div>
</div>
