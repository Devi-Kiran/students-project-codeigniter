<form method="post" action="/ametecs-students-project/public/dashboard/add-student" class="mb-4">
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
            <?php foreach($branch as $option): ?>
                <option value="<?= $option ?>"><?= $option ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group col-md-4">
        <label for="year">Year</label>
        <select id="year" name="year" class="form-control">
            <?php foreach($year as $option): ?>
                <option value="<?= $option?>"><?= $option?></option>
            <?php endforeach;?>
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
    <a class="btn btn-primary" href="/ametecs-students-project/public/dashboard/">Back</a>
    <div class="text-danger">

    </div>
</form>