<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Projects</h3>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 35%">Project Name</th>
                    <th style="width: 15%">Team Members</th>
                    <th>Project Progress</th>
                    <th style="width: 8%" class="text-center">Status</th>
                    <th style="width: 20%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#</td>
                    <td>
                        <a>AdminLTE v3</a>
                        <br>
                        <small>Created 01.01.2019</small>
                    </td>
                    <td>Dummy owner</td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> View</a>
                        <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>#</td>
                    <td>
                        <a>AdminLTE v3</a>
                        <br>
                        <small>Created 01.01.2019</small>
                    </td>
                    <td>Dummy owner</td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                            </div>
                        </div>
                        <small>
                            55% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> View</a>
                        <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>#</td>
                    <td>
                        <a>AdminLTE v3</a>
                        <br>
                        <small>Created 01.01.2019</small>
                    </td>
                    <td>Dummy owner</td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            </div>
                        </div>
                        <small>
                            90% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> View</a>
                        <a class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                        <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i>Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>



<?= $this->endSection() ?>