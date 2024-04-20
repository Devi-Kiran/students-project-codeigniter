<?= $this->extend('layouts/main2')?>
<?= $this->extend('layouts/main') //overrided?>

<?= $this->section('hello')?>
    <h1>0000000000000000000000000</h1>
<?= $this->endSection()?>


<?= $this->section('content')?> 

<?php if($role): ?>
    <!-- <form method="post" action="/ametecs-students-project/public/dashboard/new-student-info" class="mb-4">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="student-name">Student name</label>
                <input type="text" name="student_name" class="form-control" id="student-name" autocomplete="off">
            </div>

            <div class="form-group col-md-4">
                <label for="roll-number">Rollno</label>
                <input type="text" name="roll_no" class="form-control" id="roll-number" autocomplete="off">
            </div>

            <div class="form-group col-md-4">
                <label for="branch">Branch</label>
                <select id="branch" name="branch" class="form-control">
                    <option selected value="select">Select Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="IOT">IOT</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="year">Year</label>
                <select id="year" name="year" class="form-control">
                    <option value="select">Select Year</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="math-marks">Math marks</label>
                <input type="number" name="math_marks" class="form-control" id="math-marks" autocomplete="off">
            </div>

            <div class="form-group col-md-4">
                <label for="physics-marks">Physics marks</label>
                <input type="number" name="physics_marks" class="form-control" id="physics-marks" autocomplete="off">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->
<?php endif; ?>

<div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Roll No</th>
                <th>Student Name</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Maths</th>
                <th>Physics</th>
                <th>Total Marks</th>
                <?php if($role): ?>
                    <th>Controlls</th>
                <?php endif; ?>
            </tr>
        </thead>

        <tbody>
            <?php foreach($allStudents as $studentInfo) :?>
                <tr>
                    <td><?= $studentInfo['roll_no']?></td>
                    <td><?= $studentInfo['student_name']?></td>
                    <td><?= $studentInfo['branch']?></td>
                    <td><?= $studentInfo['year']?></td>
                    <td><?= $studentInfo['math_marks']?></td>
                    <td><?= $studentInfo['physics_marks']?></td>
                    <td><?= $studentInfo['total_marks']?></td>
                    <?php if($role): ?>
                        <td>
                            <a href="/ametecs-students-project/public/dashboard/edit-student-info/<?= $studentInfo['student_id']?>" class="btn btn-primary btn-sm text-white">
                                Edit
                            </a>
                            <a href="/ametecs-students-project/public/dashboard/delete/<?= $studentInfo['student_id']?>" class="btn btn-danger btn-sm text-white">
                                Delete
                            </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<?= $this->endSection()?>