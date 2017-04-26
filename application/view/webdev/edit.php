
/**
 * Created by PhpStorm.
 * User: 11500351
 * Date: 26/04/2017
 * Time: 11:21
 */<div class="container">
    <h2>You are in the View: application/view/student/edit.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Edit a student</h3>
        <form action="<?php echo URL; ?>student/updateStudent" method="POST">
            <label>Name</label>
            <input autofocus type="text" name="name" value="<?php echo htmlspecialchars($student->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Number</label>
            <input type="number" name="number" value="<?php echo htmlspecialchars($student->number, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Richting</label>
            <input type="text" name="richting" value="<?php echo htmlspecialchars($student->richting, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="student_id" value="<?php echo htmlspecialchars($student->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_student" value="Update" />
        </form>
    </div>
    <!-- pas aub goed aan -->
</div>