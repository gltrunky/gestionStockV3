<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-3">
  <div class="text-light d-flex justify-content-between flex-wrap flex-md-nowrap p-2 bg-danger rounded-top mb-2">
    <h4>Liste des utilisateurs
    </h4>
  </div>

  <div class="bg-light rounded-bottom">
    <div class="table-responsive rounded-bottom mb-5">
      <table id="example" class="table table-striped table-sm">
        <thead>
          <tr>
            <?php
            $flagFirst = true;
            foreach ($resultGetUsers->result[0] as $key => $val) {
              if ($flagFirst) {
            ?>
                <th class="border"><?php echo ucfirst($key) ?></th>
              <?php
              } else {
              ?>
                <th class="border-right"><?php echo ucfirst($key) ?></th>
            <?php
              }
            }
            ?>
            <th>Editer / Supprimer</th>
          </tr>
        </thead>
        <tbody class="border-left">
          <?php
          foreach ($resultGetUsers->result as $value) {
          ?>
            <tr>
              <?php
              foreach ($value as $val) {
              ?>
                <td class="border-right"><?php echo $val ?></td>
              <?php
              }
              ?>
              <td>
                <div class="d-flex justify-content-around align-items-center">
                  <a href=""><i class="fas fa-edit text-dark"></i></a><a href=""><i class="far fa-trash-alt text-dark"></i></a>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <!-- <a href="#" class="text-dark">Page suivante <i class="fas fa-long-arrow-alt-right"></i></a> -->
    </div>
  </div>
</main>