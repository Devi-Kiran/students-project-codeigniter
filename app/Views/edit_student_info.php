<?= $this->extend('layouts/main')?>

<?php $this->section('content')?>
<!-- action="/ametecs-students-project/public/dashboard/edit-student-info" -->
<form method="post" class="mb-4">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="student-name">Student name</label>
            <input type="text" name="student_name" value="<?= $studentInfo['student_name']?>" class="form-control" id="student-name">
        </div>

        <div class="form-group col-md-4">
            <label for="roll-number">Rollno</label>
            <input type="text" name="roll_no" value="<?= $studentInfo['roll_no']?>" class="form-control" id="roll-number">
        </div>

        <div class="form-group col-md-4">
            <label for="branch">Branch</label>
            <select id="branch" name="branch" class="form-control">
                <option selected value="select">Select Branch</option>
                <option <?= 'CSE' == $studentInfo['branch'] ? 'selected' : ''?> value="CSE">CSE</option>
                <option <?= 'IOT' == $studentInfo['branch'] ? 'selected' : ''?> value="IOT">IOT</option>
                <option <?= 'EEE' == $studentInfo['branch'] ? 'selected' : ''?> value="EEE">EEE</option>
                <option <?= 'ECE' == $studentInfo['branch'] ? 'selected' : ''?> value="ECE">ECE</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="year">Year</label>
            
            <select id="year" name="year" class="form-control">
                <option value="select">Select Year</option>
                <option <?= '1' == $studentInfo['year'] ? 'selected' : ''?> value="1">1</option>
                <option <?= '2' == $studentInfo['year'] ? 'selected' : ''?> value="2">2</option>
                <option <?= '3' == $studentInfo['year'] ? 'selected' : ''?> value="3">3</option>
                <option <?= '4' == $studentInfo['year'] ? 'selected' : ''?> value="4">4</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="math-marks">Math marks</label>
            <input type="number" name="math_marks" value="<?= $studentInfo['math_marks']?>" class="form-control" id="math-marks">
        </div>

        <div class="form-group col-md-4">
            <label for="physics-marks">Physics marks</label>
            <input type="number" name="physics_marks" value="<?= $studentInfo['physics_marks']?>" class="form-control" id="physics-marks">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="text-danger">
        <?= $validation?>
    </div>
</form>

<?php $this->endSection()?>