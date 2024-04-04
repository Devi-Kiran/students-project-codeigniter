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
                <?php foreach($branch as $option): ?>
                    <option <?= $option == $studentInfo['branch'] ? 'selected' : '' ?> value="<?= $option ?>"><?= $option ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="year">Year</label>
            
            <select id="year" name="year" class="form-control">
                <?php foreach($year as $option): ?>
                    <option <?= $option == $studentInfo['year'] ? 'selected' : ''?> value="<?= $option?>"><?= $option?></option>
                <?php endforeach;?>
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
    <a class="btn btn-primary" href="/ametecs-students-project/public/dashboard/">Back</a>
    <div class="text-danger">
        <?= $validation?>
    </div>
</form>