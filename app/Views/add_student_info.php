<?= $this->extend('layouts/main')?>

<?= $this->section('content')?>

<?= view_cell('\App\Libraries\StudentsForm::addStudent')?>

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
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>