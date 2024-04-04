<form method="post" action="/ametecs-students-project/public/dashboard/new-student-info" class="mb-4">
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
        </form>