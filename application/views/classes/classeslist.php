<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        

        <div class="span9">
          <div class="row-fluid">
            <table class="table table-striped">
                <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Classe</th>
                  <th>Materia</th>
                  <th>Istituto</th>
                </tr>
              </thead>
              
              <tbody>
                <?php
                $classes = $classes_data;
 
                foreach($classes as $class)
                {
                  echo"<tr><td>".$class->id."</td><td>".$class->codice."</td><td>".$class->nome."</td><td>".$class->codice."</td></tr>";
                }
                ?>
              </tbody>
            </table>
            </table>
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>