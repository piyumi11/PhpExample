<div class="container">
    <div class="row">
      <table border = "1" class="table table-striped">
         <?php
            $i = 1;
            echo "<tr>";
            echo "<td>#</td>";
            echo "<td>Roll No.</td>";
            echo "<td>Name</td>";
            echo "<td>Edit</td>";
            echo "<td>Delete</td>";
            echo "<td>Examination</td>";
            echo "<tr>";

            foreach($records as $r) {
               echo "<tr>";
               echo "<td>".$i++."</td>";
               echo "<td>".$r->roll_no."</td>";
               echo "<td>".$r->name."</td>";
               echo "<td><a href = '".base_url()."index.php/stud/edit/"
                  .$r->roll_no."'>Edit</a></td>";
               echo "<td><a href = '".base_url()."index.php/stud/delete/"
                  .$r->roll_no."'>Delete</a></td>";
               echo "<td><a href = '".base_url()."index.php/exam/goto_exam/"
                     .$r->roll_no."'>Goto exam</a></td>";
               echo "<tr>";
            }
         ?>
      </table>
    </div>
    <div class="row">
      <a href = "<?php echo base_url();?>index.php/stud/add_view">Add</a>
    </div>
</div>
